
// navbox button 
$(document).ready(function () {
	$(".header .menu_btn").click(function () {
		$("body").addClass("hidden");
		$("body").addClass("shadow");
		$(".header").addClass("open");
		$(".nav_box").addClass("open");
	})

	$(".nav_box .nav_close").click(function () {
		$("body").removeClass("hidden");
		$("body").removeClass("shadow");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
	})
});
$(document).mouseup(function (e) {
	if ($(".nav_box").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
	}
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


// modal
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})
$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
	}
});



// 공연예매 필터
$(document).ready(function () {
  $(".tk_list_wrap .filter .ft_btn").click(function () {
	$(".tk_list_wrap .filter").removeClass("selected");
    $(this).closest(".filter").toggleClass("selected");
  });
});
$(document).mouseup(function (e) {
	if ($(".tk_list_wrap .filter").has(e.target).length === 0) {
		$(".tk_list_wrap .filter").removeClass("selected");
	}
});
$(".tk_list_wrap .mob_filter .ft_btn").click(function () {
	$("body").addClass("hidden")
	$(".filter_modal").addClass("show")
})


// 좌석선택
$(document).ready(function () {
  $(".seat_modal .seat_list .titbox").click(function () {
	$(".seat_modal .seat_list").toggleClass("show");
  });
});



// 예매취소_카드
$(document).ready(function () {
  $('#seatAll').on('change', function () {
    const isChecked = $(this).is(':checked');
    $('input[name="seat"]').not(this).prop('checked', isChecked);
  });

  $('input[name="seat"]').not('#seatAll').on('change', function () {
    const total = $('input[name="seat"]').not('#seatAll').length;
    const checked = $('input[name="seat"]:checked').not('#seatAll').length;

    $('#seatAll').prop('checked', total === checked);
  });
});



// FAQ
const faq_tabs = new Swiper(".tk_faq_wrap .faq_tabs", {
	slidesPerView: 'auto',
	spaceBetween: 24,
	breakpoints: {
		1080: {
			spaceBetween: 50
		},
	}
});



// 감상하기
$(document).ready(function() {
	$(".tk_watch_wrap .opt_btn").click(function () {		
		$("body").addClass("shadow")
		$(this).siblings(".opt_popup").addClass("show")
	})
});
$(document).mouseup(function (e) {
	if ($(".opt_popup").has(e.target).length === 0 ) {
		$("body").removeClass("shadow")
		$(".opt_popup").removeClass("show")
	}
});

const stage_box = new Swiper(".tk_watch_wrap .slide_box", {
	slidesPerView: 'auto',
	spaceBetween: 18,
	breakpoints: {
		1080: {
			spaceBetween: 42
		},
	}
});