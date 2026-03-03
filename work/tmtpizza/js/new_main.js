// 스크롤 복원 수동 설정
if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
}

// lenis scroll smooth
let lenis;
function initLenis() {
    const isPC = window.innerWidth > 1080;

    if (isPC && !lenis) {
        lenis = new Lenis({
            duration: 1.5,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        });

        lenis.on('scroll', ScrollTrigger.update);
        lenis.on('scroll', updateQuickMenu);

        function raf(time) {
            if (lenis) {
                lenis.raf(time);
                requestAnimationFrame(raf);
            }
        }
        requestAnimationFrame(raf);

    } else if (!isPC && lenis) {
        lenis.destroy();
        lenis = null;
    }
}
$(document).ready(function() {
    initLenis();
    $(window).on('resize', initLenis);
});

// gsap
gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);
const mm = gsap.matchMedia();
const initializePageState = () => {
    window.scrollTo(0, 0);
	if (typeof lenis !== 'undefined' && lenis) {
        lenis.scrollTo(0, { immediate: true });
    }
	ScrollTrigger.refresh();
};
const initGSAP = () => {
    gsap.registerPlugin(ScrollTrigger);
};
$(window).on('load', function(){
    initializePageState();
    initGSAP();
})


// main section 1
const ms1_swiper = new Swiper('.ms1_swiper', {
	observer: true,
	observeParents: true,
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
            pin: true,
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
                invalidateOnRefresh: true
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
                scrub: true
            }
        });

        contents.forEach((cont) => {
            const copies = cont.querySelectorAll('.tit .copy');
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
const ms4_swiper = new Swiper('.ms4_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
    spaceBetween: 20,
	speed: 500,
    navigation: {
      nextEl: ".ms4_controls .next_btn",
      prevEl: ".ms4_controls .prev_btn",
    },	
    breakpoints: {
      1080: {
        spaceBetween: 40,
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

