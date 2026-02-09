// AOS
AOS.init({
	duration: 800,
	easing: "ease-out",
	// disable: 'tablet',
})
window.addEventListener('load', function () {
	AOS.refresh();
});


// layout
function updateLayoutMargin() {
    const windowWidth = window.innerWidth;
    const maxWidth = 1200;
    const widthPercentage = 0.9;

    const contentWidth = Math.min(windowWidth * widthPercentage, maxWidth);
    const margin = (windowWidth - contentWidth) / 2;

    document.body.style.setProperty('--margin-left', `${margin}px`);
    document.body.style.setProperty('--margin-right', `${margin}px`);
}
window.addEventListener('resize', updateLayoutMargin);
document.addEventListener('DOMContentLoaded', updateLayoutMargin);


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
	$(".tab_navbox:not(.notab) .tab_nav").click(function () {
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


// tab swiper
$(document).ready(function () {
	const index = parseInt($('.swiper.tab_swiper').attr('data-index'), 10) || 0;

	const tab_swiper = new Swiper('.tab_swiper', {
		observer: true,
		observeParents: true,
		slidesPerView: 'auto',
		speed: 500,
		initialSlide: index,
	})
});


// modal
$(".cm_modal .cm_modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".cm_modal").removeClass("show")
})
$(document).mouseup(function (e) {
	if ($(".cm_modal .cm_modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".cm_modal").removeClass("show")
	}
});


// popup
$(document).ready(function () {
	$(".cm_popup .cm_pop_close").click(function () {
		$("body").removeClass("pop_open")
		$(this).closest(".cm_popup").removeClass("show")
	})
})
$(document).mouseup(function (e) {
	if ($(".cm_popup").has(e.target).length === 0) {		
		$("body").removeClass("pop_open")
		$(this).closest(".cm_popup").removeClass("show")
	}
});


// marquee
const marquees = Array.from(document.querySelectorAll(".marquee"));
class Marquee {
  constructor({ el }) {
    this.el = el;
    this.marqueeAnimation = [
      { transform: "translateX(0)" },
      { transform: `translateX(calc(-100% - var(--gap,0)))` }
    ];

    this.marqueeTiming = {
      duration: this.el.dataset.duration * 10000,
      direction: this.el.dataset.reverse ? "reverse" : "normal",
      iterations: Infinity
    };
    this.animations = [];
    this.SLOWDOWN_RATE = 0.2;
    this.cloneMarqueeGroup();
    this.init();
  }

  init() {
    for (const m of this.marquee_groups) {
      let q = m.animate(this.marqueeAnimation, this.marqueeTiming);

      this.animations.push(q);
    }

    this.initEvents();
  }
  slowDownAnimations() {
    for (const a of this.animations) {
      a.playbackRate = this.SLOWDOWN_RATE;
    }
  }
  resumeAnimationSpeed() {
    for (const a of this.animations) {
      a.playbackRate = true;
    }
  }
  initEvents() {
    this.el.addEventListener("mouseenter", () => this.slowDownAnimations());
    this.el.addEventListener("mouseleave", () => this.resumeAnimationSpeed());
  }

  cloneMarqueeGroup() {
    let clone = this.el.querySelector(".marquee_group").cloneNode(true);
    clone.classList.add("clone");
    this.el.appendChild(clone);
    this.marquee_groups = Array.from(
      this.el.querySelectorAll(".marquee_group")
    );
  }
}
for (const m of marquees) new Marquee({ el: m });



/* 헤더 */
// topbanner	
$(".top_banner .close_btn").click(function () {
	$(".top_banner").addClass("hide")
})

// header nav
$(document).on('mouseenter', '.h_bottom .h_nav > li', function () {
    const li = $(this);
	li.addClass('on');
    if (li.children('.h_nav_ul').length) {
        $('.h_bottom').addClass('hover');
    }
});
$(document).on('mouseleave', '.h_bottom .h_nav > li', function () {
    $(this).removeClass('on');
    $('.h_bottom').removeClass('hover');
});
$(document).on('mouseenter', '.h_bottom .h_nav_ul > li > a', function () {
    const li = $(this).parent('li');
    li.addClass('on');
});
$(document).on('mouseleave', '.h_bottom .h_nav_ul > li', function () {
    $(this).removeClass('on');
});

// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").on("click", function () {
		$("body").addClass("hidden");
		$(".navbox").addClass("open");
	});
	$(".navbox .menu_close").on("click", function () {
		$("body").removeClass("hidden");
		$(".navbox").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".navbox").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".navbox").removeClass("open");
	}
});

// header nav
$(function () {
	const search = window.location.search;

	if (search.indexOf('pid=counsel_') !== -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(1).addClass('active');
	}

	if (search.indexOf('pid=procedure_') !== -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(2).addClass('active');
	}

	if (search.indexOf('pid=class_') !== -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(3).addClass('active');
	}
});



/* 메인 */
function main_sch_popup() {
	$(".main-contents .mv_wrap .text_area .sch_popup").addClass("show");
}
const sampSwiper = new Swiper(".main-contents .sampSwiper", {
	effect: 'cards',
	direction: 'vertical',
	// grabCursor: true,
	cardsEffect: {
		perSlideRotate: 0, 
		perSlideOffset: 10,
		rotate: false,
	},
	pagination: {
	el: '.sampSwiper .pagination',
	type: 'custom',
	clickable: true,
		renderCustom: function (swiper, current, total) {
			return '<span class="swiper-pagination-current">' + current + '</span>' + '<span class="swiper-pagination-bar"></span>' + '<span class="swiper-pagination-total">' + total + '</span>';
		}
	},
	navigation: {
		nextEl: ".sampSwiper .next_btn",
		prevEl: ".sampSwiper .prev_btn",
	}, on: {
		init: function () {
			const color = this.slides[this.activeIndex].getAttribute('data-color');
			this.el.classList.add(color + '_ver');
		},
		slideChange: function () {
			this.el.classList.remove('white_ver', 'black_ver');
			const color = this.slides[this.activeIndex].getAttribute('data-color');
			this.el.classList.add(color + '_ver');
		}
	}
});



/* 상담하기 */
// 선생님 스와이퍼
$(document).ready(function () {
	if ($(window).width() > 1080) {
		$('.mentor_swiper').each(function () {
			new Swiper(this, {
				observer: true,
				observeParents: true,
				// slidesPerView: 'auto',
				slidesPerView: 4,
				speed: 500,
				spaceBetween: 10,
				grabCursor: true,
				navigation: {
					nextEl: $(this).closest('.mentor_wrap').find('.mentor_controls .next_btn')[0],
					prevEl: $(this).closest('.mentor_wrap').find('.mentor_controls .prev_btn')[0],
				},
			});
		});
	}
});

// 선생님 상세 팝업
const mentorpop_swiper = new Swiper('.mentorpop_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	spaceBetween: 40,
	autoHeight: true,
	navigation: {
		nextEl: ".mentor_modal .next_btn",
		prevEl: ".mentor_modal .prev_btn",
	},
})
function mentor_modal(i) {
	$("body").addClass('hidden');
	$(".mentor_modal").addClass('show');
	mentorpop_swiper.slideTo(i-1, 0);
}
$('.mentor_modal .next_btn, .mentor_modal .prev_btn').on('mouseup', function(e){
	e.stopPropagation();
});



/* 상세	*/
$(".page-detail .tooltip .close_btn").click(function () {
	$(".page-detail .tooltip").addClass("hide")
})

// 탭 버튼 활성화
$(function () {
	const tabs = $('.tab.sticky .tab_tit li a');
	if (!tabs.length) return;

	const triggerOffset = 100;

	$(window).on('scroll', function () {
		const scrollTop = $(window).scrollTop();
		const triggerLine = scrollTop + triggerOffset;

		let currentId = null;

		tabs.each(function () {
			const target = $(this).attr('href');
			const targetEl = $(target);
			if (!targetEl.length) return;

			if (triggerLine >= targetEl.offset().top) {
				currentId = target;
			}
		});

		if (!currentId) {
			currentId = tabs.eq(0).attr('href');
		}

		tabs.removeClass('show');
		tabs.filter('[href="' + currentId + '"]').addClass('show');
	});
});

// 학교 리스트
$(".school_moreview").click(function () {
	$(this).toggleClass('on');
	$(this).parent('div').siblings('.school_listbox').toggleClass('on');
})
$(".school_moreview2").click(function () {
	$(this).closest('.school_listbox').addClass('on');
})

// 질문 스와이퍼
const question_swiper = new Swiper('.question_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	speed: 500,
	spaceBetween: 10,
	grabCursor: true,	
	breakpoints: {
		1080: {
			spaceBetween: 8,
		},
	},
})