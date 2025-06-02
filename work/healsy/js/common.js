// AOS
AOS.init({
	duration: 1000,
	easing: "linear",
})
window.addEventListener('load', function () {
	AOS.refresh();
});


// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").click(function () {
		$("body").addClass("hidden");
		$(".header").addClass("open");
		$(".nav_box").addClass("open");
	})
});
$(document).ready(function () {
	$(".nav_box .menu_close").click(function () {
		$("body").removeClass("hidden");
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
const tabs_swiper = new Swiper('.tabs_swiper', {
	observer: true, 	
	observeParents: true, 

	slidesPerView: 'auto',
	spaceBetween: 22,
	speed: 500,

	breakpoints: {
		1080: {
			spaceBetween: 0,
		},
	}
})
$(document).ready(function () {
	$(".tab_nav").click(function (e) {
	
		if ($(this).attr("id") === "grf_btn") return;

		AOS.refresh();

		let target = $(this);
		let tabNavbox = target.closest('.tab_navbox');
		let tabNav = tabNavbox.find(".tab_nav");
		let idx = tabNav.index(target);

		let tabWrap = tabNavbox.closest(".tabs");
		let tabContbox = tabWrap.find(".tab_contbox");
		let tabCont = tabContbox.find(".tab_cont");

		tabNav.removeClass("on");
		target.addClass("on");

		tabCont.removeClass("on");
		tabCont.eq(idx).addClass("on");

		function isValidSwiper(swiper) {
			return typeof swiper !== 'undefined' &&
				swiper !== null &&
				swiper.el instanceof Element;
		}

		setTimeout(() => {
			AOS.refresh();
			if (isValidSwiper(ns2_4_pic)) {
				ns2_4_pic.update();
			}
			if (isValidSwiper(ns2_4_step)) {
				ns2_4_step.update();
			}
		}, 0);
	});
});

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


/* modal */
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


// contact modal
$(document).ready(function () {
	$(".common_banner .send_btn").click(function () {
		$("body").addClass("hidden")
		$("#contact_modal").addClass("show")
	})
});


// main
const ms4_swiper = new Swiper('.ms4_swiper', {
	observer: true, 	
	observeParents: true,  

	slidesPerView: 'auto',
	spaceBetween: 10,
	speed: 500,

	scrollbar: {
		el: '.ms4_swiper .scrollbar',
	},

	breakpoints: {
		1080: {
			spaceBetween: 46,
		},
	}

})


// about
const as3_swiper = new Swiper('.as3_swiper', {
	observer: true, 	
	observeParents: true,  

	slidesPerView: 'auto',
	spaceBetween: 20,
	speed: 500,

	breakpoints: {
		1080: {
			spaceBetween: 40,
		},
	}

})
$(function () {
	const steps = ['step1', 'step2', 'step3', 'step4', 'step5', 'step6'];
	const intervals = [500, 500, 500, 500, 500, 500];
	const delays = [1000, 0, 0, 0, 0, 0]; 
	let index = 0;

	function nextStep() {
		const $vb = $('.about_wrap .as3 .as3_swiper .bg1');
		$vb.removeClass(steps.join(' '));

		const classesToAdd = steps.slice(0, index + 1).join(' ');
		$vb.addClass(classesToAdd);

		const timeout = intervals[index] + delays[index];
		index = (index + 1) % steps.length;

		setTimeout(nextStep, timeout);
	}

	setTimeout(nextStep, intervals[0] + delays[0]);
});
$(function () {
	const steps = ['step1', 'step2']; 
	const intervals = [1000, 1000]; 
	const delays = [800, 800]; 
	let index = 0;

	function nextStep() {
		const $vb = $('.about_wrap .as3 .as3_swiper .bg2');
		$vb.removeClass(steps.join(' '));

		const classesToAdd = steps.slice(0, index + 1).join(' ');
		$vb.addClass(classesToAdd);

		const timeout = intervals[index] + delays[index];
		index = (index + 1) % steps.length;

		setTimeout(nextStep, timeout);
	}

	setTimeout(nextStep, intervals[0] + delays[0]);
});
$(function () {
	const steps = ['step1', 'step2']; 
	const intervals = [1000, 1000]; 
	const delays = [0, 0, 0]; 
	let index = 0;

	function nextStep() {
		const $vb = $('.about_wrap .as3 .as3_swiper .bg3');
		$vb.removeClass(steps.join(' '));

		const classesToAdd = steps.slice(0, index + 1).join(' ');
		$vb.addClass(classesToAdd);

		const timeout = intervals[index] + delays[index];
		index = (index + 1) % steps.length;

		setTimeout(nextStep, timeout);
	}

	setTimeout(nextStep, intervals[0] + delays[0]);
});
$(function () {
	const steps = ['step0', 'step1', 'step2', 'step3', 'step4', 'step5'];
	const intervals = [1000,   1000,    1000,    1000,    1500,    500,];
	let index = 0;

	function nextStep() {
		const $vb = $('.about_wrap .as4 .visualbox');
		$vb.removeClass(steps.join(' '));
		const classesToAdd = steps.slice(0, index + 1).join(' ');
		$vb.addClass(classesToAdd);

		index = (index + 1) % steps.length;

		setTimeout(nextStep, intervals[index]);
	}

	setTimeout(nextStep, intervals[0]);
});
$(function () {
	const steps = ['step0', 'step1', 'step2', 'step3', 'step4', 'step5', 'step6', 'step7'];
	const delays =    [500, 500,  800,   0, 800, 800, 800, 800];
	const durations = [500, 500, 3000, 800, 800, 800, 300, 300];
	let index = 0;

	function nextStep() {
		const $vb = $('.about_wrap .as6 .visualbox');
  		if ($vb.length === 0) return; // visualbox 요소 없으면 중단

		const $logobox = $vb.find('.logobox');

		setTimeout(() => {
			$vb.removeClass(steps.join(' '));
			const classesToAdd = steps.slice(0, index + 1).join(' ');
			$vb.addClass(classesToAdd);

			// 스프링 애니메이션
			if (steps[index] === 'step3') {
				gsap.to($logobox, {
					scale: 1.34057,
					duration: 0.8,
    				ease: "elastic.out(1, 0.4)", // 빠르게 튀어오르듯
				});
			}

			if (steps[index] === 'step4') {
				gsap.to($logobox, {
					scale: 1,
					duration: 0.4,
					delay: 0.8,
					ease: "power1.out", 
				});
			}

			index = (index + 1) % steps.length;
			setTimeout(nextStep, durations[index]);
		}, delays[index]);
	}

	setTimeout(nextStep, delays[0]);
});


// new platform
$(document).ready(function () {
	$(".newPlatform_wrap #grf_btn").click(function (e) {
		e.stopPropagation(); 
		e.preventDefault(); 
		$("body").addClass("hidden")
		$("#grf_modal").addClass("show")
	})
});
const ns2_4_step = new Swiper('.ns2_4_step', {
	observer: true, 	
	observeParents: true,  

	direction: 'horizontal',
	effect: 'fade',
	fadeEffect: {
	crossFade: true
	},
	slidesPerView: 1,
	spaceBetween: 30,
	speed: 500,
	loop: true,
	allowTouchMove: false,

	breakpoints: {
		1080: {
			direction: 'vertical',
      		effect: 'slide',
			allowTouchMove: false,
			loop: false,
			slidesPerView: 'auto',
			spaceBetween: 0,
		},
	}
})
const ns2_4_pic = new Swiper('.ns2_4_pic', {
	observer: true, 	
	observeParents: true,  
	
	speed: 500,
	loop: true,
	spaceBetween: 30,
	
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},

	navigation: {
		nextEl: '.ns2_4_picbox .next_btn',
		prevEl: '.ns2_4_picbox .prev_btn',
	},

	pagination: {
		el: '.ns2_4_picbox .pagination',
		clickable: true,
	},
	
	thumbs: {
		swiper: ns2_4_step 
	},

	breakpoints: {
		1080: {
			autoplay: false,
			allowTouchMove: false,
			loop: false,
			spaceBetween: 0,
		},
	}
})
const ns2_4_totalSlides = document.querySelectorAll('.ns2_4_pic .swiper-slide').length;
const ns2_4_pinboxEl = document.querySelector('.newPlatform_wrap .pinbox');

gsap.registerPlugin(ScrollToPlugin, ScrollTrigger);
let isScrollingTo = false;  // 전역 변수로 상태 관리
if (window.innerWidth > 1080 && ns2_4_pinboxEl) {
  ScrollTrigger.create({
    trigger: ns2_4_pinboxEl,
    start: "top top",
    end: () => "+=" + window.innerHeight * 2,
    pin: true,
    pinSpacing: true,
    scrub: false,
    // snap: {
    //   snapTo: 1 / (ns2_4_totalSlides - 1),
    //   duration: 0.3,
    //   ease: "power1.inOut",
    // },
    onUpdate: (self) => {
      if (isScrollingTo) return; // 스크롤 이동 애니메이션 중이면 onUpdate 무시

      const currentIndex = Math.round(self.progress * (ns2_4_totalSlides - 1));
      ns2_4_pic.slideTo(currentIndex);
      ns2_4_step.slideTo(currentIndex);

      const stepContainer = document.querySelector('.ns2_4_step');
      stepContainer.className = stepContainer.className
        .split(' ')
        .filter(c => !/^step\d+$/.test(c))
        .join(' ');
      stepContainer.classList.add(`step${currentIndex + 1}`);
    }
  });
}
document.querySelectorAll('.tab_navbox .tab_nav .link').forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();

    const targetId = link.getAttribute('href');
    const targetEl = document.querySelector(targetId);

    if (targetEl) {
    //   console.log("탭 클릭 - 스크롤 이동 시작", targetId);

      ScrollTrigger.getAll().forEach(trigger => trigger.disable());

      isScrollingTo = true;

      gsap.to(window, {
        duration: 0.5,
        scrollTo: {
          y: targetEl,
          offsetY: 0
        },
        ease: 'power2.out',
        onComplete: () => {
        //   console.log("스크롤 이동 완료");

          isScrollingTo = false;

          ScrollTrigger.getAll().forEach(trigger => trigger.enable());
          gsap.set(window, {
            scrollTo: {
              y: targetEl,
              offsetY: 0
            }
          });
        //   console.log("ScrollTrigger 재활성화");
        //   console.log("현재 스크롤 위치:", window.scrollY);
        }
      });
    }
  });
});




// tech
$(function () {
	const steps = ['step1', 'step2', 'step3', 'step4', 'step5', 'step6', 'step7', 'step8'];
	const intervals = [1000, 1000, 1000, 1, 2000, 1000, 1000, 1000];
	const delays = [0, 800, 800, 0, 800, 800, 800, 800]; 

	let index = 0;
	let timer = null;
	let started = false;

	const $vb = $('.tech_wrap .ts3 .visualbox');

	function resetSteps() {
		clearTimeout(timer);
		index = 0;
		started = false;
		$vb.removeClass(steps.join(' '));
	}

	function nextStep() {
		if (index >= steps.length) return;

		$vb.removeClass(steps.join(' '));
		const classesToAdd = steps.slice(0, index + 1).join(' ');
		$vb.addClass(classesToAdd);

		const timeout = intervals[index] + delays[index];
		index++;
		timer = setTimeout(nextStep, timeout);
	}


	if ($vb.length > 0) {
	const observer = new MutationObserver(function (mutations) {
		mutations.forEach(function (mutation) {
			if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
				const hasAOS = $vb.hasClass('aos-animate');
				if (hasAOS && !started) {
					started = true;
					timer = setTimeout(nextStep, intervals[0] + delays[0]);
				} else if (!hasAOS && started) {
					resetSteps();
				}
			}
		});
	});
	observer.observe($vb[0], { attributes: true });
}
});
gsap.registerPlugin(ScrollTrigger);
const ts4Section = document.querySelector(".tech_wrap .ts4");
const totalSteps = 5;
if (window.innerWidth > 1080 && ts4Section) {
  ScrollTrigger.create({
    trigger: ts4Section.querySelector('.pinbox'),
    start: "top top",
    // end: () => "+=" + window.innerHeight * (totalSteps - 1),
    end: () => "+=" + window.innerHeight * (totalSteps - 2),
    pin: true,
    scrub: true,
    snap: {
      snapTo: 1 / (totalSteps - 1),
    //   duration: 0.3,
      duration: 0,
      ease: "power1.inOut",
    },
    onUpdate: (self) => {
      const currentIndex = Math.round(self.progress * (totalSteps - 1));

      for (let i = 1; i <= totalSteps; i++) {
        const className = `step${i}`;
        if (i <= currentIndex + 1) {
          ts4Section.classList.add(className);
        } else {
          ts4Section.classList.remove(className);
        }
      }
    }
  });
}
const ts5_thum1 = new Swiper('.ts5_thum1', {
	observer: true, 	
	observeParents: true, 
	slidesPerView: 'auto',
	speed: 50,
})
const ts5_pic1 = new Swiper('.ts5_pic1', {
	observer: true, 	
	observeParents: true,  	
	speed: 500,
	loop: true,	
	effect: 'fade',
	fadeEffect: {
	crossFade: true
	},

	pagination: {
		el: '.ts5_pic1 .pagination',
		clickable: true,
	},
	
	thumbs: {
		swiper: ts5_thum1 
	},
})
const ts5_thum2 = new Swiper('.ts5_thum2', {
	observer: true, 	
	observeParents: true, 
	slidesPerView: 'auto',
	speed: 50,
})
const ts5_pic2 = new Swiper('.ts5_pic2', {
	observer: true, 	
	observeParents: true,  	
	speed: 500,
	loop: true,	
	effect: 'fade',
	fadeEffect: {
	crossFade: true
	},

	pagination: {
		el: '.ts5_pic2 .pagination',
		clickable: true,
	},
	
	thumbs: {
		swiper: ts5_thum2 
	},
})
const ts7_swiper = new Swiper('.ts7_swiper', {
	observer: true, 	
	observeParents: true, 
	
	loop:true,

	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},

	slidesPerView: 'auto',
	centeredSlides: true,
	initialSlide: 4,
	speed: 800,
})

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
    this.SLOWDOWN_RATE = 0; // 정지지
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

gsap.registerPlugin(ScrollTrigger);
const ts10Section = document.querySelector(".tech_wrap .ts10");
const totalSteps2 = 18;
if (window.innerWidth < 1081 && ts10Section) {
  ScrollTrigger.create({
    trigger: ts10Section.querySelector('.pinbox'),
    start: "top center",
    end: () => "+=" + window.innerHeight * (totalSteps2 - 1),
    pin: true,
    scrub: true,
    snap: {
      snapTo: 1 / (totalSteps2 - 1),
      duration: 0,
      ease: "power1.inOut",
    },
    onUpdate: (self) => {
      const currentIndex = Math.round(self.progress * (totalSteps2 - 1));

      for (let i = 1; i <= totalSteps2; i++) {
        const className = `step${i}`;
        if (i <= currentIndex + 1) {
          ts10Section.classList.add(className);
        } else {
          ts10Section.classList.remove(className);
        }
      }
    }
  });
}


// use cases
$(document).ready(function () {
  $('.us2_boxwrap .more_btn').on('click', function () {
    const target = $(this).siblings('.us2_boxarea');
    const wrap = $(this).closest('.us2_boxwrap');

    target.stop().slideToggle(800);
    $(this).toggleClass('open');

    wrap.toggleClass('active'); 
  });
});
