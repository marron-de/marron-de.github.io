// 아코디언
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


// 레이아웃 여백
$(window).on('resize', function () {
	const windowWidth = $(window).width();
	const maxWidth = 1120;
	const widthPercentage = 0.9;

	let calculatedWidth = windowWidth * widthPercentage;
	if (calculatedWidth > maxWidth) {
		calculatedWidth = maxWidth;
	}

	const marginLeft = (windowWidth - calculatedWidth) / 2;

	$('body').css('--margin-left', marginLeft + 'px');
	$('body').css('--margin-right', marginLeft + 'px');
});

$(document).ready(function () {
	$(window).trigger('resize');
});


// 모달 기본
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})


// 상담하기 팝업
function counselPopup() {
	$("body").addClass("hidden")
	$("#counselPopup").addClass("show");
}

function counselPopupClose() {
	$("body").removeClass("hidden")
	$("#counselPopup").removeClass("show")
}


// 목록 상단 배너
const list_banner = new Swiper(".list_banner", {
	loop: true,
	speed: 500,		
	observer: true,  
	observeParents: true,  
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.list_banner .next_btn',
		prevEl: '.list_banner .prev_btn',
	},
});


// 목록 더보기기
$(document).ready(function () {
    $(".list_wrap .list_contbox > .listbox").each(function () {
        let listbox = $(this);
        let items = listbox.find(".item");
        let pcCount = listbox.attr("date-pc");
        let mobCount = listbox.attr("date-mob");
        let isMobile = window.innerWidth <= 1080; 
        let itemsToShow = isMobile ? mobCount : pcCount;
        let itemsTotal = items.length;
        let itemsVisible = parseInt(itemsToShow);
        let moreType = isMobile ? "scroll" : listbox.attr("data-pcmore"); // PC는 data-pcmore, 모바일은 강제 scroll

        items.hide().slice(0, itemsVisible).show();

        let moreButton = listbox.siblings(".more_box").find(".more");

        function showMoreItems() {
            items.slice(itemsVisible, itemsVisible + parseInt(itemsToShow)).fadeIn();
            itemsVisible += parseInt(itemsToShow);

            if (itemsVisible >= itemsTotal) {
                moreButton.fadeOut();
                $(window).off("scroll"); // 더 이상 아이템이 없으면 스크롤 이벤트 제거
            }
        }

        // PC에서 data-pcmore 값이 "click"이면 클릭 이벤트 사용
        if (!isMobile && moreType === "click") {
            moreButton.click(function () {
                showMoreItems();
            });
        }

        // 모바일이거나 data-pcmore 값이 "scroll"이면 스크롤 이벤트 적용
        if (isMobile || moreType === "scroll") {
            $(window).on("scroll", function () {
                let scrollTop = $(window).scrollTop();
                let windowHeight = $(window).height();
                let documentHeight = $(document).height();
				
                if (scrollTop + windowHeight >= documentHeight - (window.innerHeight * 0.1)) { // 현재 뷰포트(화면)에서 10% 남았을 때
					showMoreItems();
				}
            });
        }
    });
});


// 상세 리뷰 슬라이드
const review_slider = new Swiper(".review_slider", {
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 16,
	// grabCursor: true,
	freeMode: true,		
	observer: true,  
	observeParents: true,  
	breakpoints: {
		1080: {
			spaceBetween: 20,
		},
	},
});

$(document).ready(function () {
	$(".review_slider .review_item .review_more").on("click", function () {
		$(this).parent().toggleClass("open")
	});
});


// 상세 후기작성 임시 추가
function hideNotice() {
	$(".detail_wrap #Review .login_popup").addClass("hide");
	$(".detail_wrap #Review .write_area .write_box .box").addClass("show");
}


// 로그인 완료 팝업
function loginPopup() {
	$("body").addClass("hidden")
	$("#loginPopup").addClass("show");
}


// 회원가입 완료 팝업
function joinPopup() {
	$("body").addClass("hidden")
	$("#joinPopup").addClass("show");
}


// 결제 방법 선택택
$(document).ready(function () {
	$(".coinRecharge_wrap .payment_box .methodbox .item .radio_btn").on("click", function () {
		$(".coinRecharge_wrap .payment_box .methodbox .item").removeClass("active")
		$(this).parent().addClass("active")
	});
});


// 상담가격 계산하기 팝업
function calculatePopup() {
	$("body").addClass("hidden")
	$("#calculatePopup").addClass("show");
}

function calculatePopupClose() {
	$("body").removeClass("hidden")
	$("#calculatePopup").removeClass("show")
}


// 결제완료 팝업
function payPopup() {
	$("body").addClass("hidden")
	$("#payPopup").addClass("show");
}


// 팝업 닫기(공통)
$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0 && $("#counselPopup").has(e.target).length === 0 && $("#calculatePopup").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
        $("#counselPopup, #calculatePopup").removeClass("show");
	}
});


// 모바일 상단 띠배너(공통)
$(document).ready(function () {
	$(".mob_top_banner .close_btn").on("click", function () {
		$("body").addClass("no_top_banner")
	});
});


// 상세 카테고리탭(모바일)
function detail_tab(num) {

	if ($(window).width() > 1080) return; 

	event.preventDefault();

	if(num === 1) {
		
		$(".detail_review").fadeIn()
		$(".detail_wrap #Introduction .titbox").fadeIn()
		$(".detail_wrap #Introduction .content").fadeIn()
		$(".detail_wrap #Introduction .infobox .store_item").fadeIn()

		$(".detail_wrap #Review").fadeOut()
		$(".detail_wrap #QnA").fadeOut()

	} else if (num ===2) {

		$(".detail_review").fadeOut()
		$(".detail_wrap #Introduction .titbox").fadeOut()
		$(".detail_wrap #Introduction .content").fadeOut()
		$(".detail_wrap #Introduction .infobox .store_item").fadeOut()
		
		$(".detail_wrap #Review").fadeIn()
		$(".detail_wrap #QnA").fadeOut()
		
	} else if (num ===3) {

		$(".detail_review").fadeOut()
		$(".detail_wrap #Introduction .titbox").fadeOut()
		$(".detail_wrap #Introduction .content").fadeOut()
		$(".detail_wrap #Introduction .infobox .store_item").fadeOut()

		$(".detail_wrap #Review").fadeOut()
		$(".detail_wrap #QnA").fadeIn()

	}
}