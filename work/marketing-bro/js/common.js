// scroll nav
$(function () {
	let didScroll;
	let lastScrollTop = 0;
	let delta = 5; // 이벤트를 발생시킬 스크롤의 이동 범위
	let navbarHeight = $("#header").outerHeight();

	$(window).scroll(function (event) {
		didScroll = true;
	});

	hasScrolled();

	setInterval(function () {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 250); // 스크롤이 멈춘 후 동작이 실행되기 까지의 딜레이

	function hasScrolled() {
		let st = $(this).scrollTop(); // 현재 window의 scrollTop 값

		// delta로 설정한 값보다 많이 스크롤 되어야 실행된다.
		if (Math.abs(lastScrollTop - st) <= delta)
			return;

		if (st > 0) {
			$("body").addClass("down")
		} else {
			$("body").removeClass("down")
		}

		if (st > navbarHeight) {
			$("#header").addClass("down")
		}

		if (st < navbarHeight) {
			$("#header").removeClass("down")
		}

		// if (st > lastScrollTop && st > navbarHeight) {
		// 	// 스크롤을 내렸을 때                
		// 	$("#header").addClass("hide")

		// } else {
		// 	// 스크롤을 올렸을 때 
		// 	$("#header").removeClass("hide")

		// }

		lastScrollTop = st; // 현재 멈춘 위치를 기준점으로 재설정
	}
})


// 메인 슬라이드
const sec8_swiper = new Swiper(".main_wrap .sec8_swiper", {
	speed: 600,
	loop: true,
	spaceBetween: 30,

	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},

	navigation: {
		nextEl: '.main_wrap .sec8 .next_btn',
		prevEl: '.main_wrap .sec8 .prev_btn',
	},

	pagination: {
		el: '.main_wrap .sec8 .pagination',
		clickable: true,
	},
});


// accordion function
(function ($) {

	const lnbUI = {
		click: function (target, speed) {
			let _self = this,
				$target = $(target);
			_self.speed = speed || 400;

			$target.each(function () {
				if (findChildren($(this))) {
					return;
				}
				$(this).addClass('noDepth');
			});

			function findChildren(obj) {
				return obj.find('> ul').length > 0;
			}

			$target.on('click', '.acc_tit', function (e) {
				e.stopPropagation();
				let $this = $(this),
					$depthTarget = $this.next(),
					$siblings = $this.parent().siblings();

				$this.parent('li').find('ul li').removeClass('show');
				$siblings.removeClass('show');
				$siblings.find('ul').slideUp(400);

				if ($depthTarget.css('display') == 'none') {
					_self.activeOn($this);
					$depthTarget.slideDown(_self.speed);
				} else {
					$depthTarget.slideUp(_self.speed);
					_self.activeOff($this);
				}

			})

		},
		activeOff: function ($target) {
			$target.parent().removeClass('show');
		},
		activeOn: function ($target) {
			$target.parent().addClass('show');
		},

	};

	// navbox
	$(function () {
		lnbUI.click('.accordion li', 400)
	});

}(jQuery));



// 폼메일
toastr.options = {
	"closeButton": false,
	"debug": false,
	"newestOnTop": true,
	"progressBar": false,
	"positionClass": "toast-bottom-right",
	"preventDuplicates": false,
	"onclick": null,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "5000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
}

$(document).ready(function () {

	let fileTarget1 = $('.upload_hidden');

	fileTarget1.on('change', function () {
		let filename, fileSize;

		if (window.FileReader) {
			filename = $(this)[0].files[0].name;
			fileSize = (($(this)[0].files[0].size) / (1024 * 1024)).toFixed(2) + ' MB'; // 파일 용량 계산 및 포맷
		} else {
			filename = $(this).val().split('/').pop().split('\\').pop();
			fileSize = 'N/A'; // FileReader를 지원하지 않을 경우 파일 용량 정보는 제공하지 않음
		}

		// 파일 이름과 용량을 표시
		$(this).siblings('.upload_name').val(filename + ' | ' + fileSize);
	});

});

function sendMail() {

	// 광고유형
	if (
		!form.term.checked
	) {

		toastr.warning('개인 정보 수집 약관에 동의해주세요.');
		return;
	}	

	// 이름
	if (form.name.value == '') {
		toastr.warning('이름을 입력해주세요.');

		return;
	}

	// 업체명
	if (form.company.value == '') {
		toastr.warning('업체명을 입력해주세요.');

		return;
	}

	// 연락처
	if (form.phone.value == '') {
		toastr.warning('연락처를 입력해주세요.');

		return;
	}

	// 이메일
	if (form.email.value == '') {
		toastr.warning('이메일을 입력해주세요.');

		return;
	}

	let k = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if (!k.test(String(form.email.value).toLowerCase())) {
		toastr.warning('이메일을 확인해주세요.');
		form.email.focus();

		return;
	}

	// 광고유형
	if (
		!form.field1_1.checked &&
		!form.field1_2.checked &&
		!form.field1_3.checked
	) {

		toastr.warning('광고유형을 선택해주세요.');
		return;
	}	

	// 지역
	if (form.region.value == '') {
		toastr.warning('지역을 입력해주세요.');

		return;
	}

	// 내용/예산
	if (form.content.value == '') {
		toastr.warning('내용/예산을 입력해주세요.');

		return;
	}


	if (!confirm('메일을 전송하겠습니까?')) return;
	form.submit();

}
