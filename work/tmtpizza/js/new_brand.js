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
    initLenis();
    initializePageState();
    setTimeout(() => ScrollTrigger.refresh(), 300);
});



mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;


	// brand section 1
    const title = $('.scroll_title');
    const wrap = $('.scroll_title_wrap');

	if (!title.length || !wrap.length) return;

	title.addClass("show");
   
	let startTop = (wrap.height() / 2) - (title.height() / 2);
    let startLeft = (wrap.width() / 2) - (title.width() / 2);

  	if (isDesktop) {
        gsap.set(title, { 
            top: 0, 
            left: 0, 
            x: startLeft, 
            y: startTop,
            force3D: true 
        });

        const bs2Tl1 = gsap.timeline({
            scrollTrigger: {
                trigger: ".scroll_title_wrap",
                start: "top top-=1",
                end: "+=20%",
                scrub: 1,
                invalidateOnRefresh: true
            }
        });

        bs2Tl1.to(title, { 
            x: "2vw", 
            y: "2vw", 
            scale: 0.6,
            ease: "none"
        });

        const bs2Tl2 = gsap.timeline({
            scrollTrigger: {
                trigger: ".bs2",
                start: "top top+=40%",
                end: "+=20%",
                scrub: 1
            }
        });
        bs2Tl2.to(title, { y: '-10vw' });
    }
    if (isMobile) {}
	

	// brand section 3
    if (isDesktop) {
        ScrollTrigger.create({
            trigger: '.bs2',
            start: 'top top',
            endTrigger: '.bs3',
            end: 'top top',
            pin: true,
            pinSpacing: false,
        });

        const bs3 = document.querySelector('.bs3');
        const contents = bs3.querySelectorAll('.cont');

		const bs3Tl = gsap.timeline({
			scrollTrigger: {
				trigger: ".bs3",
                start: "top top",
                end: () => `+=${contents.length * 150}%`,	
                scrub: 1,
                invalidateOnRefresh: true
			}
		});

       	contents.forEach((cont, index) => {
			const text = cont.querySelectorAll('.tit .copy');
			if (index > 0) {
				bs3Tl.to(contents[index - 1], { opacity: 0, autoAlpha: 0, duration: 0.5 });
				bs3Tl.to(cont, { opacity: 1, autoAlpha: 1, duration: 0.5 });
			}
			text.forEach((copy) => {
				bs3Tl.to(copy, { width: "100%", duration: 1, ease: "none" });
			});
			bs3Tl.to({}, { duration: 0.5 });
		});
    }

    if (isMobile) {				
        const bs3 = document.querySelector('.bs3');
        const contents = bs3.querySelectorAll('.cont');

        const bs3MTl = gsap.timeline({
            scrollTrigger: {
                trigger: bs3,
                start: "top top",
                end: () => `+=${contents.length * 100}%`,
                pin: true,
                scrub: true
            }
        });

        contents.forEach((cont) => {
            const copies = cont.querySelectorAll('.tit .copy');
            copies.forEach((copy) => {
                bs3MTl.to(copy, { width: "100%", duration: 1, ease: "none" });
            });
        });
    }


	// brand section 4
    if (isDesktop) {
    	ScrollTrigger.create({
    		trigger: ".bs3",
    		start: "top top",
			end: "+=300%",
    		pin: true,
    		pinSpacing: false,
    	});

    	const bs4Tl = gsap.timeline({
    		scrollTrigger: {
    			trigger: ".bs4",
    			start: "top top",
    			end: "+=500%",
    			scrub: 2,
    			pin: true,
    			pinSpacing: true,
    			markers: false
    		},
    		defaults: {
    			ease: "none",
    			duration: 2
    		}
    	});

		bs4Tl.addLabel("step0", "+=0.5")
		.to(".bs4 .left", { y: "-50%" }, "step0")
		.to(".bs4 .right", { y: "50%" }, "step0")

		.addLabel("step1", "+=2")
		.to(".bs4 .left", { y: "0" }, "step1")
		.to(".bs4 .right", { y: "0" }, "step1")

		.to({}, { duration: 5 });
    }
    if (isMobile) {}


    // brand section 5

    if (isDesktop) {
        const bs5 = document.querySelector('.bs5');
        const contents = bs5.querySelectorAll('.cont');

		const bs5Timeline = gsap.timeline({
			scrollTrigger: {
				trigger: ".bs5",
                start: "top top",
                end: () => `+=${contents.length * 150}%`,	
                // pin: true,
                scrub: 1,
                invalidateOnRefresh: true
			}
		});

       	contents.forEach((cont, index) => {
			const text = cont.querySelectorAll('.tit .copy');
			if (index > 0) {
				bs5Timeline.to(contents[index - 1], { opacity: 0, autoAlpha: 0, duration: 0.5 });
				bs5Timeline.to(cont, { opacity: 1, autoAlpha: 1, duration: 0.5 });
			}
			text.forEach((copy) => {
				bs5Timeline.to(copy, {
                    width: "100%", 
                    duration: 1,
                    ease: "none" 
				});
			});
			bs5Timeline.to({}, { duration: 0.5 });
		});
    }

    if (isMobile) {
        const bs5 = document.querySelector('.bs5');
        const contents = bs5.querySelectorAll('.cont');

        const bs5MTl = gsap.timeline({
            scrollTrigger: {
                trigger: bs5,
                start: "top top",
                end: () => `+=${contents.length * 100}%`,
                pin: true,
                scrub: true
            }
        });

        contents.forEach((cont) => {
            const copies = cont.querySelectorAll('.tit .copy');
            copies.forEach((copy) => {
                bs5MTl.to(copy, { width: "100%", duration: 1 });
            });
        });
    }


    // brand section 6
    if (isDesktop) {
    	ScrollTrigger.create({
    		trigger: ".bs5",
    		start: "top top",
			end: "+=300%",
    		pin: true,
    		pinSpacing: false,
    	});

    	const bs6Tl = gsap.timeline({
    		scrollTrigger: {
    			trigger: ".bs6",
    			start: "top top",
    			end: "+=500%",
    			scrub: 2,
    			pin: true,
    			pinSpacing: true,
    			markers: false
    		},
    		defaults: {
    			ease: "none",
    			duration: 2
    		}
    	});

		bs6Tl.addLabel("step0", "+=0.5")
		.to(".bs6 .left", { y: "-50%" }, "step0")
		.to(".bs6 .right", { y: "50%" }, "step0")

		.addLabel("step1", "+=2")
		.to(".bs6 .left", { y: "0" }, "step1")
		.to(".bs6 .right", { y: "0" }, "step1")

		.to({}, { duration: 5 });
    }

    if (isMobile) {}

});
