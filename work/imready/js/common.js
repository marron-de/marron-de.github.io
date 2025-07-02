
// mobile navbox button 
$(document).ready(function () {
	$(".header .nav_open").on("click", function () {
		$("body").addClass("hidden");
		$(".header").addClass("open");
		$(".nav_box").addClass("open");
	});
	$(".nav_box .nav_close").on("click", function () {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".nav_box").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
	}
});


// mobile search button 
$(document).ready(function () {
	$(".header .search_open").on("click", function () {
		$(".header").toggleClass("sch_open");
	});
});
$(document).mouseup(function (e) {
	if ($(".header .h_top .h_serach .input_box").has(e.target).length === 0 && $(".header .h_side").has(e.target).length === 0) {
		$(".header").removeClass("sch_open");
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

  $(".tab_nav").on("click", function () {
    const clicked = $(this);
	
    const tabWrap = clicked.closest(".tab_wrap");
    const tabNavs = tabWrap.find(".tab_nav");
    const tabConts = tabWrap.find(".tab_cont");

    const index = tabNavs.index(clicked);

    tabNavs.removeClass("on");
    clicked.addClass("on");

    tabConts.removeClass("on");
    tabConts.eq(index).addClass("on");
  });

});


// layout
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


// select
$('.select').on('change', function () {
  const value = $(this).val();
  if (value) {
    $(this).addClass('selected');
  } else {
    $(this).removeClass('selected');
  }
});


/* 메인 */
// main visual
const ms1_swiper = new Swiper('.ms1_swiper', {
	observer: true,
	observeParents: true,
	loop: true,
	speed:500,
	slidesPerView: 1,
	spaceBetween: 20,
	centeredSlides: true,
	// autoplay: {
	// 	delay: 5000,
	// 	disableOnInteraction: false,
	// },
	pagination: {
		el: '.ms1_controls .pagination',
		clickable: true,
	},
	navigation: {
      nextEl: ".ms1_controls .next_btn",
      prevEl: ".ms1_controls .prev_btn",
    },
	breakpoints: {
		1080: {
			slidesPerView: 2.9697,
			spaceBetween: 40,  
		},
	},
})
