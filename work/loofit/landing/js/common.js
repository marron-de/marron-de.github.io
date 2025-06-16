
// header navbox button 
$(".header .menu_open").on("click", function () {
	$("body").addClass("hidden");
	$(".header").addClass("open");
	$(".nav_box").addClass("open");
});
$(".nav_box .menu_close").on("click", function () {
	$("body").removeClass("hidden");
	$(".header").removeClass("open");
	$(".nav_box").removeClass("open");
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


// scroll animation
$(window).on('scroll resize', function (e) {

	let scroll_top = $(window).scrollTop(),
		section_progress = scroll_top / ($(document).height() - $(window).height());
	section_progress = isFinite(section_progress) ? section_progress : 0;

	$('html').attr('style', '--progress: ' + section_progress);

	$('.sequence').each(function (i) {
		let $sequence = $(this);
		let trigger_top = scroll_top,
			sequence_top = $sequence.offset().top,
			sequence_bottom = sequence_top + $sequence.outerHeight() - $(window).height(),
			sequence_progress;
		let progress_in = $sequence.data('progress-in') || 0;

		sequence_top = sequence_top - ($(window).height() * progress_in);

		if (trigger_top <= sequence_top) {
			sequence_progress = 0;
		} else if (trigger_top > sequence_top && trigger_top <= sequence_bottom) {
			sequence_progress = (trigger_top - sequence_top) / (sequence_bottom -
				sequence_top);
		} else {
			sequence_progress = 1;
		}

		$sequence.attr('style', '--progress: ' + sequence_progress);
	});
}).resize();


// tab function
$(document).ready(function () {
	$(".tab_nav").click(function () {
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


// tab swiper
$(document).ready(function () {
	const index = parseInt($('.swiper.tab_swiper').attr('data-index'), 10) || 0;

	const tab_swiper = new Swiper('.tab_swiper', {
		observer: true,
		observeParents: true,
		slidesPerView: 'auto',
		spaceBetween: 8,
		speed: 500,
		initialSlide: index,
		breakpoints: {
			1080: {
				spaceBetween: 16,
			},
		}
	})
});



// 메인
const ms2_swiper = new Swiper('.ms2_swiper', {
	observer: true, 	
	observeParents: true, 
	slidesPerView: 'auto',
	spaceBetween: 16,
	speed: 500,
	breakpoints: {
		1080: {
			spaceBetween: 24,
		},
	}
})
$(document).ready(function() {
  const ms2_items = $('.ms2_swiper .swiper-slide.item');
  const defaultItem = $('.ms2_swiper .item1');

  ms2_items.on('mouseenter', function() {
    ms2_items.removeClass('on');
    $(this).addClass('on');
  });

  $('.swiper').on('mouseleave', function() {
    ms2_items.removeClass('on');
    defaultItem.addClass('on');
  });
});

const ms3_swiper = new Swiper('.ms3_swiper', {
	observer: true, 	
	observeParents: true, 
	direction: 'horizontal',
	slidesPerView: 1,
	spaceBetween: 20,
	speed: 500,
	loop:true,
	pagination: {
		el: ".ms3_swiper .pagination",
		clickable: true,
	},
	breakpoints: {
		1080: {
			slidesPerView: 'auto',
			direction: 'vertical',
			spaceBetween: 0,
			loop:false,
		},
	},
})
$(document).ready(function() {
  if (window.innerWidth < 1081) return;

  gsap.registerPlugin(ScrollTrigger);

  const swiperEl = $('.ms3_swiper');
  const dots = $('.paging_box .paging .dot');
  const slides = $('.ms3_swiper .swiper-slide');

  slides.each(function(index, slide) {
    ScrollTrigger.create({
      trigger: slide,
      start: 'top center',
      end: 'bottom center',
      onEnter: function() {
        swiperEl.attr('data-index', index);
        dots.removeClass('active');
        dots.eq(index).addClass('active');
      },
      onEnterBack: function() {
        swiperEl.attr('data-index', index);
        dots.removeClass('active');
        dots.eq(index).addClass('active');
      }
    });
  });
});



// 기능 소개
const fs_swiper = new Swiper('.fs_swiper', {
	observer: true, 	
	observeParents: true, 	
	direction: 'horizontal',
	spaceBetween: 20,
	speed: 500,
	loop:true,
	pagination: {
		el: ".fs_swiper .pagination",
		clickable: true,
	},
	breakpoints: {
		1080: {
			direction: 'vertical',
			spaceBetween: 0,
			loop:false,
		},
	},
})
$(document).ready(function () {
  if (window.innerWidth < 1081) return;
  
  const items = $('.fs_swiper .swiper-slide');

  // 초기 상태 설정
  items.each(function (index) {
    gsap.set(this, {
      autoAlpha: index === 0 ? 1 : 0,
      y: index === 0 ? 0 : 30
    });
  });

  const appear = 0.5;
  const stay = 1.0;
  const disappear = 0.5;
  const step = appear + stay;

  const timeline = gsap.timeline({
    scrollTrigger: {
      trigger: '.fs1.pinbox',
      pin: '.fs1.pinbox',
      anticipatePin: 1,
      start: 'top top',
      end: function () {
        return $('.fs1.pinbox').outerHeight() * 2;
      },
      scrub: 2
    }
  });

  // 순차 전환: 등장 → 유지 → 다음 등장
  items.each(function (index) {
    if (index === 0) return;

    const prev = items.eq(index - 1);
    const curr = items.eq(index);
    const time = step * index;

    timeline
      .to(prev, { duration: disappear, autoAlpha: 0, y: 30 }, time)
      .to(curr, { duration: appear, autoAlpha: 1, y: 0 }, time)
      .to(curr, { duration: 0.5, autoAlpha: 1, y: 0 }, time + stay); // 유지
  });
});



// func menu popup
$(".func_menu_popup .pop_close").click(function () {
	$(".func_menu_popup").removeClass("show")
})
