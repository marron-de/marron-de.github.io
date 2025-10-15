
// layout
$(window).on('resize', function () {
	const windowWidth = $(window).width();
	const maxWidth = 1640;
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


// AOS
AOS.init({
	duration: 1000,
	easing: "linear",
})
window.addEventListener('load', function () {
	AOS.refresh();
});


// top button
$(document).ready(function () {
    const topButton = $('#top_button');

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 10) {
            topButton.addClass('show');
        } else {
            topButton.removeClass('show');
        }
    });

    topButton.click(function () {
        $('html, body').animate({ scrollTop: 0 }, 500);
        return false;
    });
});


// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").click(function () {
		$("body").addClass("hidden");
		$(".header").addClass("open");
		$(".nav_box").addClass("open");

		if (window.innerWidth > 1080 && document.querySelector('#fullpage')) {
			fullpage_api.setAllowScrolling(false);
		}
	})
	
	$(".nav_box .menu_close").click(function () {	
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
		
		if (window.innerWidth > 1080 && document.querySelector('#fullpage')) {
			fullpage_api.setAllowScrolling(true);
		}
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
	const index = parseInt($('.swiper.tabs_swiper').attr('data-index'), 10) || 0;const swiperContainer = document.querySelector('.tabs_swiper');

	if (swiperContainer) {
		const tabs_swiper = new Swiper('.tabs_swiper', {
			observer: true, 	
			observeParents: true, 
			slidesPerView: 'auto',
			spaceBetween: 14,
			speed: 500,
			initialSlide: index,
			breakpoints: {
				1080: {
					spaceBetween: 44,
				},
			},
			on: {
				slideChange: function () {
					// console.log("현재 인덱스:", this.activeIndex);
				}
			}
		});
	}
});

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


// marquees
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
    // this.SLOWDOWN_RATE = 0.2;
    this.SLOWDOWN_RATE = 0; // 정지
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
    //   a.playbackRate = this.SLOWDOWN_RATE; // 멈춤 삭제
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


/* modal */
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})
$(document).mouseup(function(e) {
    if ($(e.target).closest(".modal .modal_box").length === 0 &&
        $(e.target).closest(".nav_box .nav_head .h_logo, .nav_box .nav > li:not(.button) .link").length === 0) {
        $("body").removeClass("hidden");
        $(".modal").removeClass("show");
        $(".header").removeClass("open");
        $(".nav_box").removeClass("open");
    }
});


// privacy policy modal
$(document).ready(function () {
	$(".footer .privacy_btn").click(function () {
		$("body").addClass("hidden")
		$("#privacy_modal").addClass("show")
	})
});
$(document).ready(function () {
	$("#privacy_modal .privacy_btn").click(function () {
		$("body").removeClass("hidden")
		$("#privacy_modal").removeClass("show")
	})
});


// service
$('.service_nav .tab_nav').click(function () {
	const tab = $(this).data('tab')
	$('.service_nav .tab_nav').removeClass('on')
	$(this).addClass('on')
	$('.service_content').removeClass('on')
	$('.service_content' + tab).addClass('on')
})
const serviceSwiperOptions = {
	observer: true,
	observeParents: true,
	speed: 300,
	effect: 'fade',
    autoHeight: true,
	simulateTouch: false,
};
const serviceSwipers = [
    null, // 인덱스 0은 비워두고 1~9 사용
    new Swiper('.service_conts1', serviceSwiperOptions),
    new Swiper('.service_conts2', serviceSwiperOptions),
    new Swiper('.service_conts3', serviceSwiperOptions),
    new Swiper('.service_conts4', serviceSwiperOptions),
    new Swiper('.service_conts5', serviceSwiperOptions),
    new Swiper('.service_conts6', serviceSwiperOptions),
    new Swiper('.service_conts7', serviceSwiperOptions),
    new Swiper('.service_conts8', serviceSwiperOptions),
    new Swiper('.service_conts9', serviceSwiperOptions)
];
function serviceTab(idx) {
	const target = $(event.target);
    const serviceNum = target.closest('.service_tab').attr('class').match(/service_tab(\d+)/)[1];

    $('.service_tab' + serviceNum + ' .acc_tabBtn').removeClass('on');
    target.addClass('on');

	const slideIndex = $('.service_conts' + serviceNum + ' .contbox' + idx).index();
    serviceSwipers[serviceNum].slideTo(slideIndex);

	// mobile
	$('body').removeClass("hidden2")
	$('.service_wrap .service_tab' + serviceNum).removeClass("show")	
     const tabText = target.text().trim();
    $('.service_select' + serviceNum + ' .sel_btn .txt').text(tabText);
	
	$(window).scrollTop(0);
}


// mobile service modal
$(document).ready(function () {
    $(".service_wrap .service_select .sel_btn").click(function () {
        const parentNum = $(this).closest('.service_select').attr('class').match(/service_select(\d+)/)[1];
        $("body").addClass("hidden2");
        $(".service_wrap .service_tab" + parentNum).addClass("show");
    });

    $(".service_wrap .service_tab .close_btn").click(function () {
        const parentNum = $(this).closest('.service_tab').attr('class').match(/service_tab(\d+)/)[1];
        $("body").removeClass("hidden2");
        $(".service_wrap .service_tab" + parentNum).removeClass("show");
    });

    $(".service_wrap .service_tab .btnbox .button").click(function () {
        const parentNum = $(this).closest('.service_tab').attr('class').match(/service_tab(\d+)/)[1];
        $("body").removeClass("hidden2");
        $(".service_wrap .service_tab" + parentNum).removeClass("show");
    });
});
$(document).mouseup(function (e) {
	if ($(".service_wrap .service_tab").has(e.target).length === 0) {
		$("body").removeClass("hidden2")
		$(".service_wrap .service_tab").removeClass("show")
	}
});


// team swiper
$('.team_swiper').each(function () {
    let el = $(this);
    let box = el.closest('.team_box');
    let controls = box.find('.team_controls');
    let pc_nextBtn = box.find('.pc .next_btn')[0];
    let pc_prevBtn = box.find('.pc .prev_btn')[0];
    let paginationEl = box.find('.pagination')[0];
    let progressbarEl = box.find('.progressbar')[0];
    let scrollbarEl = box.find('.scrollbar')[0];

    let tablet_nextBtn = box.find('.tablet .next_btn')[0];
    let tablet_prevBtn = box.find('.tablet .prev_btn')[0];

	let navigationOptions;
	const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
	const isWideScreen = window.innerWidth > 1080;
	const isPC = !isTouchDevice && isWideScreen;
	if (isPC) {
		navigationOptions = {
			nextEl: pc_nextBtn,
			prevEl: pc_prevBtn
		};
		PCGap = 56;
	} else {
		navigationOptions = {
			nextEl: tablet_nextBtn,
			prevEl: tablet_prevBtn
		};
		PCGap = 40;
	}

    let swiper = new Swiper(el[0], {
        observer: true,
        observeParents: true,
        slidesPerView: 'auto',
        spaceBetween: 10,
        speed: 500,
    	navigation: navigationOptions,
		pagination: {
			el: paginationEl,
			type: 'custom',
			clickable: true,
			renderCustom: function (swiper, current, total) {
				return '<span class="swiper-pagination-current current">' + ('0' + current).slice(-2) + '</span>' + ' / ' + '<span class="swiper-pagination-total total">' + ('0' + total).slice(-2) + '</span>';
			}
		},
		// pagination: {
		// 	el: progressbarEl,
		// 	type: "progressbar",
		// },
		// scrollbar: {
		// 	el: scrollbarEl,
		// },
        breakpoints: {
            1080: {
        		slidesPerView: 2,
                spaceBetween: PCGap,
            }
        },
       on: {
			init: function(s) {
				toggleControls(s);
				// updateCustomPagination(s);
				updateProgressbar(s);
			},
			resize: function(s) {
				toggleControls(s);
				// updateCustomPagination(s);
				updateProgressbar(s);
			},
			slideChange: function(s) {
				toggleControls(s);
				// updateCustomPagination(s);
				updateProgressbar(s);
			}
		}
    });

	function toggleControls(s) {
		let slidesCount = (s.slides && s.slides.length) ? s.slides.length : 0;

		if (slidesCount <= 1) {
			controls.addClass('hide');
			return;
		}

		const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
		const isWideScreen = window.innerWidth > 1080;

		const isPC = !isTouchDevice && isWideScreen;

		if (isPC) {
			let paginationVisible = false;
			if (paginationEl && $(paginationEl).is(':visible') && $(paginationEl).children().length > 0) {
				paginationVisible = true;
			}

			if (!paginationVisible) {
				controls.addClass('hide');
			} else {
				controls.removeClass('hide');
			}
		} else {
			let mobileNextVisible = tablet_nextBtn && $(tablet_nextBtn).is(':visible');
			let mobilePrevVisible = tablet_prevBtn && $(tablet_prevBtn).is(':visible');

			if (!mobileNextVisible && !mobilePrevVisible) {
				controls.addClass('hide');
			} else {
				controls.removeClass('hide');
			}
		}
	}

	function updateProgressbar(swiper) {
		if (!progressbarEl) return;

		const currentText = $(swiper.pagination.el).find('.swiper-pagination-current').text();
		const totalText = $(swiper.pagination.el).find('.swiper-pagination-total').text();

		const current = parseInt(currentText, 10);
		const total = parseInt(totalText, 10);

		const percent = (current / total) * 100;

		let fill = $(progressbarEl).find('.swiper-pagination-progressbar-fill');
		if (fill.length === 0) {
			fill = $('<div class="swiper-pagination-progressbar-fill"></div>');
			$(progressbarEl).append(fill);
		}

		fill.css('width', percent + '%');
	}


	let lastPageReached = false;

	$(swiper.navigation.nextEl).on('click', function () {
		const current = parseInt($(swiper.pagination.el).find('.swiper-pagination-current').text(), 10);
		const total = parseInt($(swiper.pagination.el).find('.swiper-pagination-total').text(), 10);

		if (lastPageReached) {
			swiper.slideTo(0, 500);
			lastPageReached = false;
		} else if (current === total) {
			lastPageReached = true;
		}
	});

});


// location swiper
const locationProgressbarEl = document.querySelector('.location_slidebox .progressbar');
function locationProgressbar(swiper) {
    if (!locationProgressbarEl) return;

    const total = parseInt($(swiper.pagination.el).find('.swiper-pagination-total').text(), 10);
    const current = swiper.realIndex + 1;
    const percent = (current / total) * 100;

    let fill = $(locationProgressbarEl).find('.swiper-pagination-progressbar-fill');
    if (fill.length === 0) {
        fill = $('<div class="swiper-pagination-progressbar-fill"></div>');
        $(locationProgressbarEl).append(fill);
    }

    fill.css('width', percent + '%');
}
const location_swiper = new Swiper('.location_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	spaceBetween: 10,
	speed: 500,
	loop:true,
	navigation: {
		nextEl: '.location_slidebox .tablet .next_btn',
		prevEl: '.location_slidebox .tablet .prev_btn',
	},
	pagination: {
		el: '.location_slidebox .pagination',
		type: 'custom',
		clickable: true,
		renderCustom: function (swiper, current, total) {
			return '<span class="swiper-pagination-current current">' + ('0' + current).slice(-2) + '</span>' + ' / ' + '<span class="swiper-pagination-total total">' + ('0' + total).slice(-2) + '</span>';
		}
	},
	// scrollbar: {
	// 	el: '.location_slidebox .scrollbar',
	// },
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	breakpoints: {
		1080: {
			spaceBetween: 30,
			navigation: {
				nextEl: '.location_slidebox .pc .next_btn',
				prevEl: '.location_slidebox .pc .prev_btn',
			},
		},
	},
	on: {
		init: function(s) {
			locationProgressbar(s);
		},
		resize: function(s) {
			locationProgressbar(s);
		},
		slideChange: function(s) {
			locationProgressbar(s);
		}
	}
})
