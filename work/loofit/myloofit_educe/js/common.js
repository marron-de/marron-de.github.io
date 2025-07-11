// 레이아웃
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1280;
    const widthPercentage = 0.9;

    let calculatedWidth = windowWidth * widthPercentage;
    if (calculatedWidth > maxWidth) {
        calculatedWidth = maxWidth;
    }

    const marginLeft = (windowWidth - calculatedWidth) / 2;

    $('body').css('--margin-left', marginLeft + 'px');
    $('body').css('--margin-right', marginLeft + 'px');
});
$(document).ready(function() {
    $(window).trigger('resize');
});


// 아코디언 기능
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


// 탭
$(document).ready(function () {
	$(".tab_wrap .tab_nav").click(function () {
		let clickedTab = $(this);
		let tabWrap = clickedTab.closest(".tab_wrap");
		let allTabs = tabWrap.find(".tab_nav");
		let allContents = tabWrap.find(".tab_cont");
		let idx = allTabs.index(clickedTab);

		allTabs.removeClass("on");
		clickedTab.addClass("on");
		allContents.removeClass("on");
		allContents.eq(idx).addClass("on");
	});
});


// datepicker
$(document).ready(function () {  
  if ($(".datepicker").length) {
    $.datepicker.setDefaults({
      closeText: "닫기",
      prevText: "이전달",
      nextText: "다음달",
      currentText: "오늘",
      monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
      monthNamesShort: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
      dayNames: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"],
      dayNamesShort: ["S", "M", "T", "W", "T", "F", "S"],
      dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
      weekHeader: "주",
      dateFormat: "yy-mm-dd",
      firstDay: 0,
      isRTL: false,
      showMonthAfterYear: true,
	  showOtherMonths: true,
      yearSuffix: "년"
    });

    $(".datepicker").datepicker({
      maxDate: 'today',
    });
  }
});


// 모달 공통
$(".modal .close_btn").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})
$(document).mouseup(function (e) {
	const modalBox = $(".modal .modal_box");
	const datepicker = $(".ui-datepicker");

	if (
		!modalBox.is(e.target) &&
		modalBox.has(e.target).length === 0 &&
		!datepicker.is(e.target) &&
		datepicker.has(e.target).length === 0
	) {
		$("body").removeClass("hidden");
		$(".modal").removeClass("show");
	}
});


// 팝업 공통
$(".popup .pop_close").click(function () {
	$(this).closest(".popup").removeClass("show")
})
$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0 ) {
		$(".popup").removeClass("show")
	}
});


// 북마크 버튼
$(".bookmark_btn").click(function () {
	$(this).toggleClass("on")
})



// 메인
const ms1_swiper = new Swiper('.ms1_swiper', {
	observer: true,
	observeParents: true,
	speed:500,
	slidesPerView: 'auto',
	spaceBetween: 20,
	grabCursor: true,
    navigation: {
      nextEl: ".ms1_swiper .next_btn",
      prevEl: ".ms1_swiper .prev_btn",
    },
})
const ms1_banner = new Swiper('.ms1_banner', {
	observer: true,
	observeParents: true,
	speed:500,
	direction: 'vertical',
	slidesPerView: 'auto',
	spaceBetween: 0,
})
const ms1_latest1 = new Swiper('.ms1_latest1', {
	observer: true,
	observeParents: true,
	direction: 'vertical',
	loop: true,
	speed:500,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
    navigation: {
      nextEl: ".ms1_latest1_box .next_btn",
      prevEl: ".ms1_latest1_box .prev_btn",
    },
})
const ms1_latest2 = new Swiper('.ms1_latest2', {
	observer: true,
	observeParents: true,
	direction: 'vertical',
	loop: true,
	speed:500,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
    navigation: {
      nextEl: ".ms1_latest2_box .next_btn",
      prevEl: ".ms1_latest2_box .prev_btn",
    },
})
const ms2_swiper = new Swiper('.ms2_swiper', {
	observer: true,
	observeParents: true,
	speed:500,
	slidesPerView: 4,
	spaceBetween: 18,
	grabCursor: true,
    navigation: {
      nextEl: ".ms2 .next_btn",
      prevEl: ".ms2 .prev_btn",
    },
})
const ms3_swiper = new Swiper('.ms3_swiper', {
	observer: true,
	observeParents: true,
	speed:500,
	slidesPerView: 4,
	spaceBetween: 18,
	grabCursor: true,
    navigation: {
      nextEl: ".ms3 .next_btn",
      prevEl: ".ms3 .prev_btn",
    },
})



// 상세
const ds3_swiper = new Swiper('.ds3_swiper', {
	observer: true,
	observeParents: true,
	speed:500,
	slidesPerView: 4,
	spaceBetween: 18,
	grabCursor: true,
    navigation: {
      nextEl: ".ds3 .next_btn",
      prevEl: ".ds3 .prev_btn",
    },
})
const ds4_swiper = new Swiper('.ds4_swiper', {
	observer: true,
	observeParents: true,
	speed:500,
	slidesPerView: 'auto',
	spaceBetween: 0,
})

// 회원가입
$(document).ready(function () {
  const agreeAll = $('.join_wrap #agreeAll');
  const checks = $('.join_wrap #termsOfUse, .join_wrap #privacyPolicy');
  
  agreeAll.on('change', function () {
    checks.prop('checked', $(this).is(':checked'));
  });
  
  checks.on('change', function () {
    const allChecked = checks.length === checks.filter(':checked').length;
    agreeAll.prop('checked', allChecked);
  });
});


// 푸터 
$(".ml_footer .f_family_btn").click(function () {
	$(".ml_footer .f_family").toggleClass("show")
})
$(".ml_footer .f_name .arrow").click(function () {
	$(".ml_footer").toggleClass("open")
})