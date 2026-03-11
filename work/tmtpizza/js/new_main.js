// 스크롤 잠금
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}
document.documentElement.style.overflow = 'hidden';


// lenis scroll smooth
let lenis;
function debounce(fn, delay) {
    let timer;
    return function () {
        clearTimeout(timer);
        timer = setTimeout(fn, delay);
    };
}
function initLenis() {
    const isPC = window.innerWidth > 1080;
    const isWide = window.innerWidth >= 2000;

    if (isPC && !lenis) {
        lenis = new Lenis({
            duration: isWide ? 1.0 : 1.5,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        });

        lenis.on('scroll', ScrollTrigger.update);
        lenis.on('scroll', updateQuickMenu);
		
        lenis._tickerFn = (time) => lenis.raf(time * 1000);
        gsap.ticker.add(lenis._tickerFn);
        gsap.ticker.lagSmoothing(0);

    } else if (!isPC && lenis) {		
        gsap.ticker.remove(lenis._tickerFn);
        lenis.destroy();
        lenis = null;
    }
}
$(document).ready(function () {
    $(window).on('resize', debounce(initLenis, 200));
});


// gsap
gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);
const mm = gsap.matchMedia();
const initializePageState = () => {
    if (window.scrollY > 0) return;
    window.scrollTo(0, 0);
    if (lenis) {
        lenis.scrollTo(0, { immediate: true });
    }
};
$(window).on('load', function () {
    const loaderEl = document.getElementById('page_loader');

    initLenis();
    initializePageState();

    gsap.to(loaderEl, {
        autoAlpha: 0,
        duration: 0.5,
        delay: 0.2,
        onComplete: () => {
            loaderEl.classList.add('hide');            
            document.documentElement.style.overflow = '';
            setTimeout(() => {
                ScrollTrigger.refresh();
                document.body.classList.add('loaded');
            }, 300);
        }
    });
});


// main section 1
const ms1_swiper = new Swiper('.ms1_swiper', {
    observer: true,
    observeParents: true,
    effect: 'fade',
    parallax: true,
    speed: 500,
    loop: true,
    navigation: {
        nextEl: ".ms1_swiper .next_btn",
        prevEl: ".ms1_swiper .prev_btn",
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
});

// main section 2
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;

    if (isDesktop) {
        ScrollTrigger.create({
            trigger: '.ms1',
            start: 'top top',
            endTrigger: '.ms2',
            end: 'top top',
            pinSpacing: false
        });

        const ms2 = document.querySelector('.ms2');
        const contents = ms2.querySelectorAll('.cont');

        const ms2Tl = gsap.timeline({
            scrollTrigger: {
                trigger: ms2,
                start: "top top",
                end: () => `+=${contents.length * 150}%`,
                pin: true,
                scrub: 1, 
                invalidateOnRefresh: true,
            }
        });

        contents.forEach((cont, index) => {
            const copies = cont.querySelectorAll('.tit .copy');
            
            if (index > 0) {
                ms2Tl.to(contents[index - 1], { opacity: 0, autoAlpha: 0, duration: 0.5 });
                ms2Tl.to(cont, { opacity: 1, autoAlpha: 1, duration: 0.5 });
            }

            copies.forEach((copy) => {
                ms2Tl.to(copy, { 
                    width: "100%", 
                    duration: 1,
                    ease: "none" 
                });
            });

            ms2Tl.to({}, { duration: 0.5 }); 
        });
    }

    if (isMobile) {
        const ms2 = document.querySelector('.ms2');
        const contents = ms2.querySelectorAll('.cont');

        const ms2MTl = gsap.timeline({
            scrollTrigger: {
                trigger: ms2,
                start: "top top",
                end: () => `+=${contents.length * 100}%`,
                pin: true,
                scrub: 0.8,
				anticipatePin: 1,
				invalidateOnRefresh: true 
            }
        });

         contents.forEach((cont, index) => {
            const copies = cont.querySelectorAll('.tit .copy');
            if (index > 0) {
                ms2MTl.to(contents[index - 1], { opacity: 0, autoAlpha: 0, duration: 0.3 });
                ms2MTl.to(cont, { opacity: 1, autoAlpha: 1, duration: 0.3 });
            }

            copies.forEach((copy) => {
                ms2MTl.to(copy, { width: "100%", duration: 1 });
            });
        });
    }
});

// main section 3
const ms3_swiper = new Swiper('.ms3_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
    spaceBetween: 20,
	centeredSlides: true,
	speed: 500,
	loop: true,
    breakpoints: {
      1080: {
        spaceBetween: 40,		
		centeredSlides: false,
		loop: false,
      },
    }
});

// main section 4
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
const originalMS4 = cloneSlides('.ms4_swiper', 3);
const ms4_swiper = new Swiper('.ms4_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
    spaceBetween: 20,
	centeredSlides: true,
	speed: 500,
	loop: true,
    navigation: {
      nextEl: ".ms4_controls .next_btn",
      prevEl: ".ms4_controls .prev_btn",
    },	
    breakpoints: {
      1080: {
        spaceBetween: 40,
		centeredSlides: false,
      },
    }
});

// main section 5
const ms5_swiper = new Swiper('.ms5_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
    spaceBetween: 20,
	centeredSlides: true,
	speed: 500,
    breakpoints: {
      1080: {
        spaceBetween: 60,
		centeredSlides: false,
      },
    }
});

