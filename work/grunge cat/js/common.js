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


// accordion function
(function () {
	const lnbUI = {
		speed: 400,

		click: function (selector, speed) {
			const _self = this;
			_self.speed = speed || 400;

			const targets = document.querySelectorAll(selector);

			targets.forEach(function (target) {
				if (!findChildren(target)) {
					target.classList.add('noDepth');
				}
			});

			function findChildren(obj) {
				return obj.querySelector(':scope > ul') !== null;
			}

			targets.forEach(function (target) {
				const accTit = target.querySelector('.acc_tit');
				if (!accTit) return;

				accTit.addEventListener('click', function (e) {
					e.stopPropagation();

					const depthTarget = accTit.nextElementSibling;
					const parentLi = accTit.parentElement;
					const siblings = Array.from(parentLi.parentElement.children).filter(el => el !== parentLi);

					parentLi.querySelectorAll('ul li').forEach(li => li.classList.remove('show'));

					siblings.forEach(function (sibling) {
						sibling.classList.remove('show');
						const siblingUl = sibling.querySelector('ul');
						if (siblingUl) slideUp(siblingUl, _self.speed);
					});

					if (!depthTarget) return;

					if (depthTarget.style.display === 'none' || depthTarget.style.display === '') {
						_self.activeOn(accTit);
						slideDown(depthTarget, _self.speed);
					} else {
						slideUp(depthTarget, _self.speed);
						_self.activeOff(accTit);
					}
				});
			});
		},

		activeOff: function (target) {
			target.parentElement.classList.remove('show');
		},

		activeOn: function (target) {
			target.parentElement.classList.add('show');
		},
	};

	function slideDown(el, duration) {
		el.style.display = 'block';
		const targetHeight = el.scrollHeight;
		el.style.overflow = 'hidden';
		el.style.height = '0';
		el.style.transition = `height ${duration}ms ease`;

		requestAnimationFrame(function () {
			el.style.height = targetHeight + 'px';
		});

		setTimeout(function () {
			el.style.height = '';
			el.style.overflow = '';
			el.style.transition = '';
		}, duration);
	}

	function slideUp(el, duration) {
		el.style.overflow = 'hidden';
		el.style.height = el.scrollHeight + 'px';
		el.style.transition = `height ${duration}ms ease`;

		requestAnimationFrame(function () {
			el.style.height = '0';
		});

		setTimeout(function () {
			el.style.display = 'none';
			el.style.height = '';
			el.style.overflow = '';
			el.style.transition = '';
		}, duration);
	}

	// navbox
	document.addEventListener('DOMContentLoaded', function () {
		lnbUI.click('.accordion li', 400);
	});
}());


// tab swiper
$(document).ready(function () {
	$('.tab_swiper').each(function () {

		const $this = $(this);
		const index = parseInt($this.attr('data-index'), 10) || 0;
		const gapPc = parseInt($this.data('gappc'), 10) || 0;
		const gapMob = parseInt($this.data('gapmob'), 10) || 0;

		new Swiper(this, {
			observer: true,
			observeParents: true,
			slidesPerView: 'auto',
			spaceBetween: gapMob,
			speed: 500,
			initialSlide: index,
			breakpoints: {
				1080: {
					spaceBetween: gapPc,
				},
			},
		});

	});
});


// modal
$(".modal .modal_close, .modal .back_btn").click(function () {
    $("body").removeClass("modal_open");
    $(".modal").removeClass("show");
});
$(document).mouseup(function (e) {
    if ($(".modal .modal_box").has(e.target).length === 0) {
        $("body").removeClass("modal_open");
        $(".modal").removeClass("show");
    }
});


// popup
document.addEventListener('DOMContentLoaded', function () {
	const popups = document.querySelectorAll('.popup');

	popups.forEach(function (popup) {
		const popClose = popup.querySelector('.pop_close');

		if (popClose) {
			popClose.addEventListener('click', function () {
				popup.classList.remove('show');
			});
		}
	});
});
document.addEventListener('mouseup', function (e) {
	const popups = document.querySelectorAll('.popup');

	popups.forEach(function (popup) {
		if (popup.classList.contains('show') && !popup.contains(e.target)) {
			popup.classList.remove('show');
		}
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


/* header */
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

// header search button
$(".search_btn").click(function (e) {
    e.preventDefault(); 
    $("body").addClass("modal_open");
    $(".search_modal").addClass("show");
});



// main
const ms1_swiper = new Swiper(".ms1_swiper", { 
	observer: true, 	
	observeParents: true,  	 
	loop: true, 
	speed: 500,
	navigation: {
		nextEl: '.ms1 .next_btn',
		prevEl: '.ms1 .prev_btn',
	},
	pagination: {
		el: '.ms1 .ms1_pag',
		clickable: true,
	},
	autoplay: {        
		delay: 5000,        
		disableOnInteraction: false,      
	},
});



/* product */
// detila swiper
const prdThum_swiper = new Swiper(".prdThum_swiper", { 
	observer: true, 	
	observeParents: true,  	 
	loop: true, 
	speed: 500,
	pagination: {
		el: '.prdThum_swiper .paging',
		clickable: true,
	},
});

// width button
$(".wish_btn").click(function (e) {
    e.preventDefault(); 
    $(this).toggleClass("on");
});
