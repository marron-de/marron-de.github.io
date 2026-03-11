// AOS
AOS.init({
	duration: 1000,
	// disable: 'tablet',
})

window.addEventListener('load', function () {
	AOS.refresh();
});


// bgm function
$(document).ready(function () {
	let bgm = $('#bgm')[0];
	let volumeBtn = $('.volume_btn');

	bgm.play().then(() => {
		volumeBtn.addClass('on');
	}).catch(error => {
		console.log('자동 재생이 제한되었습니다:', error);
	});

	$('.volume_btn').click(function () {
		if (bgm.paused) {
			bgm.play();
			volumeBtn.addClass('on');
		} else {
			bgm.pause();
			volumeBtn.removeClass('on');
		}
	});

	bgm.addEventListener('ended', function () {
		bgm.currentTime = 0;
		bgm.play();
		volumeBtn.addClass('on');
	});
});


// top button function
$(document).ready(function () {
	let topBtn = $('.top_btnbox .top_btn');

	topBtn.click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 500);
	});
});


// countdown
function updateCountdown() {
	let targetDate = new Date("2026-04-25T12:00:00");
	let now = new Date();
	let timeDifference = targetDate - now;

	let days, hours, minutes, seconds;

	if (timeDifference < 0) {
		$(".ms4 .numberbox #days").text("00");
		$(".ms4 .numberbox #hours").text("00");
		$(".ms4 .numberbox #minutes").text("00");
		$(".ms4 .numberbox #seconds").text("00");

		$(".ms4 .msgbox .msg.before").removeClass("on");
		$(".ms4 .msgbox .msg.after").addClass("on");

		let daysPassed = Math.floor(Math.abs(timeDifference) / (1000 * 60 * 60 * 24));
		$(".ms4 .msgbox .msg.after .day").text(daysPassed + "일");

	} else {

		$(".ms4 .msgbox .msg.before").addClass("on");
		$(".ms4 .msgbox .msg.after").removeClass("on");

		days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
		hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
		seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

		$(".ms4 .numberbox #days").text(String(days).padStart(2, "0"));
		$(".ms4 .numberbox #hours").text(String(hours).padStart(2, "0"));
		$(".ms4 .numberbox #minutes").text(String(minutes).padStart(2, "0"));
		$(".ms4 .numberbox #seconds").text(String(seconds).padStart(2, "0"));

		$(".ms4 .msgbox .msg.before .day").text(days + "일");
	}
}
setInterval(updateCountdown, 1000);


// gallery
const ms5_thum = new Swiper(".ms5_thum", {
	spaceBetween: 8,
	slidesPerView: 4,
	slidesPerGroup: 4,
	speed: 500,
	loop: true,

	pagination: {
		el: '.ms5_thum .pagination',
		clickable: true,
	},
});

const ms5_swiper = new Swiper(".ms5_swiper", {
	spaceBetween: 10,
	speed: 500,
	loop: true,

	pagination: {
		el: '.ms5_swiper .pagination',
		type: "fraction",
	},

	navigation: {
		nextEl: ".ms5_swiper .next_btn",
		prevEl: ".ms5_swiper .prev_btn",
	},

	thumbs: {
		swiper: ms5_thum
	},
});

const gall_swiper = new Swiper(".gall_swiper", {
	spaceBetween: 10,
	speed: 500,
	loop: true,

	pagination: {
		el: '.gall_swiper .pagination',
		type: "fraction",
	},

	navigation: {
		nextEl: ".gall_swiper .next_btn",
		prevEl: ".gall_swiper .prev_btn",
	},

	thumbs: {
		swiper: ms5_swiper
	},
});

// ms5_swiper.on('slideChange', function () {
//     gall_swiper.slideTo(ms5_swiper.realIndex);
// 	console.log(ms5_swiper.realIndex  + "a")
// });

// gall_swiper.on('slideChange', function () {
//     ms5_swiper.slideTo(gall_swiper.realIndex);
// 	console.log(gall_swiper.realIndex + "b")
// });


// tab function
$(document).ready(function () {

	$(".tab_nav").click(function () {

		let target = $(this);
		let tabNavbox = target.closest('ul')
		let tabNav = tabNavbox.find(".tab_nav")
		let idx = tabNav.index(this);

		let tabWrap = tabNavbox.closest("div");
		let tabContbox = tabWrap.find(".tab_contbox");
		let tabCont = tabContbox.find(".tab_cont");

		tabNav.removeClass("on")
		tabNav.eq(idx).addClass("on")

		tabCont.removeClass("on")
		tabCont.eq(idx).addClass("on")

	})

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
				// $siblings.removeClass('show');
				// $siblings.find('ul').slideUp(400);

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
		lnbUI.click('#account_box li', 400)
	});

}(jQuery));


// account copy 
$(document).ready(function () {
    $(".ms7 .account_info .copy_btn").click(function () {
        let accountNumber = $(this).data("copy");

        let tempInput = $("<input>");
        $("body").append(tempInput);
        tempInput.val(accountNumber).select();
        
        document.execCommand("copy");
        
        tempInput.remove();

        alert("계좌번호가 복사되었습니다");
    });
});


// kakao share
Kakao.init('db31dcc70ae61ff4772e8e2195b6fcd3');
document.getElementById("kakao_share").addEventListener("click", function () {
	Kakao.Share.sendDefault({
		objectType: "feed",
		content: {
			title: "❤️서율의 생일파티에 초대합니다❤️",
			description: "작은 기적이 큰 사랑이 된 날, \n함께해 주시길 바랍니다.",
			imageUrl: "http://marronde.com/seoyul/img/kakao_share.jpg", 
			// 공유할 이미지 URL
			link: {
				mobileWebUrl: "http://marronde.com/seoyul/", // 초대장 링크
				webUrl: "http://marronde.com/seoyul/"
			}
		},
		buttons: [
			{
				title: "웹으로 보기",
				link: {
					mobileWebUrl: "http://marronde.com/seoyul/",
					webUrl: "http://marronde.com/seoyul/"
				}
			}
		]
	});
});


// modal
$(document).ready(function () {
	// gallery modal
	$(".ms5_swiper .swiper-slide").click(function () {
		$("body").addClass("hidden");
		$(".gall_modal").addClass("show");
	});

	// map modal
	$(".ms6 .tab_contbox .tab_cont .zoomIn_btn").click(function () {
		$("body").addClass("hidden");
		$(".map_modal").addClass("show");
	});

	// write modal
	$(".ms8 .guestbook_bottom #write_btn").click(function () {
		$("body").addClass("hidden");
		$(".write_modal").addClass("show");
	});

	// modal close
	$(".modal .modal_close").click(function () {
		$("body").removeClass("hidden");
		$(".modal").removeClass("show");
	});
});


$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".modal").removeClass("show");
	}
});