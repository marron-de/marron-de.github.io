
// AOS
AOS.init({
	duration: 600,
	easing: "ease-out",
	// disable: 'tablet',
})
window.addEventListener('load', function () {
	AOS.refresh();
});


// header navbox button 
document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
    const header = document.querySelector('.header');
    const navbox = document.querySelector('.navbox');
    const menuOpen = document.querySelector('.header .menu_open');
    const menuClose = document.querySelector('.navbox .menu_close');

    menuOpen.addEventListener('click', () => {
        body.classList.add('hidden');
        header.classList.add('open');
        navbox.classList.add('open');
    });

    menuClose.addEventListener('click', () => {
        body.classList.remove('hidden');
        header.classList.remove('open');
        navbox.classList.remove('open');
    });

    document.addEventListener('mouseup', (e) => {
        if (!navbox.contains(e.target)) {
            body.classList.remove('hidden');
            header.classList.remove('open');
            navbox.classList.remove('open');
        }
    });
});


// scroll nav
document.addEventListener('DOMContentLoaded', () => {
    let didScroll = false;
    let lastScrollTop = 0;
    const delta = 5;
    const header = document.querySelector('.header');
    const navbarHeight = header.offsetHeight;

    window.addEventListener('scroll', () => {
        didScroll = true;
    });

    setInterval(() => {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        const st = window.pageYOffset || document.documentElement.scrollTop;

        if (Math.abs(lastScrollTop - st) <= delta) return;

        if (st > 0) {
            document.body.classList.add('down');
        } else {
            document.body.classList.remove('down');
        }

        if (st > navbarHeight) {
            header.classList.add('down');
        } else {
            header.classList.remove('down');
        }

        lastScrollTop = st;
    }

	hasScrolled();
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


// layout
function updateLayout() {
    const windowWidth = window.innerWidth;
    const maxWidth = 1280;
    const widthPercentage = 0.9;

    let calculatedWidth = windowWidth * widthPercentage;
    if (calculatedWidth > maxWidth) {
        calculatedWidth = maxWidth;
    }

    const marginLeft = (windowWidth - calculatedWidth) / 2;

    document.body.style.setProperty('--margin-left', marginLeft + 'px');
    document.body.style.setProperty('--margin-right', marginLeft + 'px');
}
window.addEventListener('resize', updateLayout);
document.addEventListener('DOMContentLoaded', updateLayout);



/* main */
function cloneSlides(selector, multiply = 3) {
	const container = document.querySelector(selector);
	if (!container) return;

	const wrapper = container.querySelector('.swiper-wrapper');
	const slides = Array.from(wrapper.children)
		.filter(slide => !slide.hasAttribute('data-clone'));

	const originalCount = slides.length;
	const cloneCount = originalCount * (multiply - 1);

	for (let i = 0; i < cloneCount; i++) {
		const clone = slides[i % originalCount].cloneNode(true);
		clone.setAttribute('data-clone', 'true');
		wrapper.appendChild(clone);
	}

	return originalCount; // 원본 개수 반환
}

// main section3
const ms3_swiper = new Swiper('.ms3_swiper', {
	// observer: true,
	// observeParents: true,
	speed: 500,
	loop: true,
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.ms3_controls .next_btn',
		prevEl: '.ms3_controls .prev_btn',
	},
});

// main section4
const ms4_swiper = new Swiper('.ms4_swiper', {
	loop: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 20,
	breakpoints: {
		1080: {
			slidesPerView: 3,
			spaceBetween: 40,
		},
	},
});

// main section8
// 수동 복제
function cloneSlides(selector, multiply = 3) {
	const container = document.querySelector(selector);
	if (!container) return;

	const wrapper = container.querySelector('.swiper-wrapper');
	const slides = Array.from(wrapper.children)
		.filter(slide => !slide.hasAttribute('data-clone'));

	const originalCount = slides.length;
	const cloneCount = originalCount * (multiply - 1);

	for (let i = 0; i < cloneCount; i++) {
		const clone = slides[i % originalCount].cloneNode(true);
		clone.setAttribute('data-clone', 'true');
		wrapper.appendChild(clone);
	}

	return originalCount; // 원본 개수 반환
}
const originalMS8 = cloneSlides('.ms8_swiper', 3);
const ms8_swiper = new Swiper('.ms8_swiper', {
	loop: true,
	speed: 800,
	slidesPerView: 'auto',
	spaceBetween: 24,
	initialSlide: 2,
	centeredSlides: false,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	breakpoints: {
		1080: {
			spaceBetween: 40,
			centeredSlides: true,
			allowTouchMove: false,
			autoplay: {
				delay: 1000,
			},
		},
	},
});


/* about */
// about story
const about_swiper = new Swiper('.about_swiper', {
	speed: 500,
	spaceBetween: 40,
	navigation: {
		nextEl: '.about_swiper .next_btn',
		prevEl: '.about_swiper .prev_btn',
	},
	pagination: {
		el: '.about_swiper .pagination',
		clickable: true,
	},
	breakpoints: {
		1080: {
			spaceBetween: 120,
		},
	},
});


/* service */
// count up
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.countup').forEach(el => {
    const end = Number(el.dataset.count);
    const duration = Number(el.dataset.time) || 2000;

    let startTime = null;

    function animate(time) {
      if (!startTime) startTime = time;
      const progress = Math.min((time - startTime) / duration, 1);

      const value = Math.floor(end * progress);
      el.textContent = value.toLocaleString();

      if (progress < 1) {
        requestAnimationFrame(animate);
      }
    }

    requestAnimationFrame(animate);
  });
});

