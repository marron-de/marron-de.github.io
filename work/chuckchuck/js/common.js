
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

	if (menuOpen) {
		menuOpen.addEventListener('click', () => {
			body.classList.add('hidden');
			header.classList.add('open');
			navbox.classList.add('open');
		});
	}

	if (menuClose) {
		menuClose.addEventListener('click', () => {
			body.classList.remove('hidden');
			header.classList.remove('open');
			navbox.classList.remove('open');
		});
	}

    document.addEventListener('mouseup', (e) => {
        if (!navbox.contains(e.target)) {
            body.classList.remove('hidden');
            header.classList.remove('open');
            navbox.classList.remove('open');
        }
    });
});


// hader back button
document.addEventListener('DOMContentLoaded', () => {
  const backBtn = document.querySelector('.header .h_side .back_btn');
  if (!backBtn) return;

  backBtn.addEventListener('click', () => {
    if (window.history.length > 1) {
      history.back();
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


// count up
document.addEventListener('DOMContentLoaded', () => {
  const countEls = document.querySelectorAll('.countup');

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) { // 화면에 보이면
        const el = entry.target;
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
        obs.unobserve(el); // 한 번 실행 후 관찰 종료
      }
    });
  }, { threshold: 0.2 }); // 10% 보이면 실행

  countEls.forEach(el => observer.observe(el));
});


// form file
document.addEventListener('DOMContentLoaded', () => {
  const fileBoxes = document.querySelectorAll('.file_box');

  fileBoxes.forEach(box => {
    const fileInput = box.querySelector('.input_file');
    const fileNameInput = box.querySelector('.file_name');
    const uploadBtn = box.querySelector('.upload_btn');

    uploadBtn.addEventListener('click', () => {
      fileInput.click();
    });

    fileNameInput.addEventListener('click', () => {
      fileInput.click();
    });

    fileInput.addEventListener('change', () => {
      if (fileInput.files.length > 0) {
        const file = fileInput.files[0];
        fileNameInput.value = file.name;
        box.classList.add('attached');
      } else {
        fileNameInput.value = '';
        box.classList.remove('attached');
      }
    });
  });
});



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
	grabCursor: true,
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
const originalMS8 = cloneSlides('.ms8_swiper', 3);
const ms8_swiper = new Swiper('.ms8_swiper', {
	loop: true,
	speed: 1000,
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
// about swiper
const about_swiper = new Swiper('.about_swiper', {
	speed: 500,
	spaceBetween: 40,
	grabCursor: true,
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



/* franchise */
// franchise swiper
function renderPagination(swiper, originalCount) {
	const fixedCurrent = (swiper.realIndex % originalCount) + 1;

	const currentStr = ('0' + fixedCurrent).slice(-2);
	const totalStr = ('0' + originalCount).slice(-2);

	return `<span class="current">${currentStr}</span> / <span class="total">${totalStr}</span>`;
}
function initBullets(total) {
    const paging = document.querySelector('.franchise_swiper .pagination');
    let html = '';

    for (let i = 1; i <= total; i++) {
        html += `<span class="swiper-pagination-bullet" data-index="${i}"></span>`;
    }
    paging.innerHTML = html;
}
function updateBullets(swiper, total) {
    const bullets = document.querySelectorAll('.franchise_swiper .pagination .swiper-pagination-bullet');
    const current = (swiper.realIndex % total) + 1;

    bullets.forEach((b, i) => {
        b.classList.toggle('swiper-pagination-bullet-active', (i + 1) === current);
    });
}
const originalFS1 = cloneSlides('.franchise_swiper', 3);
const franchise_swiper = new Swiper('.franchise_swiper', {
	loop:true,
	speed: 500,
	spaceBetween: 40,
	centeredSlides: true,
	grabCursor: true,
	navigation: {
		nextEl: '.franchise_swiper .next_btn',
		prevEl: '.franchise_swiper .prev_btn',
	},
	// pagination: {
	// 	el: '.franchise_swiper .pagination',
	// 	clickable: true,
	// },
	pagination: {
		el: '.franchise_swiper .pagination',
		clickable: true,
		renderCustom: function (swiper) {
			return renderPagination(swiper, originalFS1);
		},
	},
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	on: {
        init(swiper) {
            initBullets(originalFS1);
            updateBullets(swiper, originalFS1);
        },
        slideChange(swiper) {
            updateBullets(swiper, originalFS1);
        }
    },
	breakpoints: {
		1080: {
			spaceBetween: 123,
		},
	},
});

// franchise swiper2
// const originalFS2 = cloneSlides('.franchise_swiper2', 3);
const franchise_swiper2 = new Swiper('.franchise_swiper2', {
	direction: 'vertical',
	loop:true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 20,
	grabCursor: true,
	allowTouchMove: false,
	navigation: {
		nextEl: '.franchise_swiper .next_btn',
		prevEl: '.franchise_swiper .prev_btn',
	},
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
		reverseDirection: true
	},
	breakpoints: {
		1080: {
			direction: 'horizontal',
			spaceBetween: 30,
			allowTouchMove: true,
		},
	},
});

