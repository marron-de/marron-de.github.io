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


mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;


	// franchise section 2
    if (isDesktop) {		
        ScrollTrigger.create({
            trigger: '.fs1',
            start: 'top top',
            endTrigger: '.fs2',
            end: 'top top',
            pin: true,
            pinSpacing: false
        });

        const fs2 = document.querySelector('.fs2');
        const contents = fs2.querySelectorAll('.cont');

		const fs2Tl = gsap.timeline({
			scrollTrigger: {
				trigger: ".fs2",
                start: "top top",
                end: () => `+=${contents.length * 150}%`,	
                pin: true,
                scrub: 1,
                invalidateOnRefresh: true
			}
		});

       	contents.forEach((cont, index) => {
			const text = cont.querySelectorAll('.tit .copy');
			if (index > 0) {
				fs2Tl.to(contents[index - 1], { opacity: 0, autoAlpha: 0, duration: 0.5 });
				fs2Tl.to(cont, { opacity: 1, autoAlpha: 1, duration: 0.5 });
			}
			text.forEach((copy) => {
				fs2Tl.to(copy, { width: "100%",   duration: 1,  ease: "none" 
				});
			});
			fs2Tl.to({}, { duration: 0.5 });
		});
    }

    if (isMobile) {
        const fs2 = document.querySelector('.fs2');
        const contents = fs2.querySelectorAll('.cont');

        const fs2MTl = gsap.timeline({
            scrollTrigger: {
                trigger: fs2,
                start: "top top",
                end: () => `+=${contents.length * 100}%`,
                pin: true,
                scrub: true
            }
        });

        contents.forEach((cont) => {
            const copies = cont.querySelectorAll('.tit .copy');
            copies.forEach((copy) => {
                fs2MTl.to(copy, { width: "100%", duration: 1 });
            });
        });
    }
	

	// franchise section 3
    if (isDesktop) {		
        const fs3 = document.querySelector('.fs3');
        const contents = fs3.querySelectorAll('.cont');

		gsap.set('.fs3 .tit', {
			opacity: 0.4, 
			scale: 0.6, 
		});

		const fs3Tl = gsap.timeline({
			scrollTrigger: {
				trigger: ".fs3",
                start: "top top",
                end: () => `+=${contents.length * 250}%`,	
                pin: true,
                scrub: 2,
                invalidateOnRefresh: true
			}
		});
		
       	contents.forEach((cont, index) => {
			const texts = cont.querySelectorAll('.tit');

			if (index > 0) {
				fs3Tl.to(contents[index - 1], { autoAlpha: 0, duration: 0.5 });
				fs3Tl.to(cont, { autoAlpha: 1, duration: 0.5 }, "<");
			}

			texts.forEach((txt, i) => {
				fs3Tl.to(txt, {
					opacity: 1,
					scale: 1,
					duration: 1,
					ease: "power2.inOut"
				}, i > 0 ? "<" : ">"); 

				if (i < texts.length - 1) {
					fs3Tl.to(txt, {
						opacity: 0.4,
						scale: 0.6,
						duration: 1,
						ease: "power2.inOut"
					});
				}
			});

			fs3Tl.to({}, { duration: 0.8 });
		});
    }

    if (isMobile) {
		const fs3 = document.querySelector('.fs3');
		const contents = fs3.querySelectorAll('.cont');

		gsap.set('.fs3 .tit', {
			opacity: 0.4,
			scale: 0.6, 
		});

		const fs3MTl = gsap.timeline({
			scrollTrigger: {
				trigger: ".fs3",
				start: "top top",
				end: () => `+=${contents.length * 150}%`,
				pin: true,
				scrub: 1,
				invalidateOnRefresh: true
			}
		});

		contents.forEach((cont, index) => {
			const texts = cont.querySelectorAll('.tit');

			if (index > 0) {
				fs3MTl.to(contents[index - 1], { autoAlpha: 0, duration: 0.5 });
				fs3MTl.to(cont, { autoAlpha: 1, duration: 0.5 }, "<");
			}

			texts.forEach((txt, i) => {
				fs3MTl.to(txt, {
					opacity: 1,
					scale: 1,
					duration: 0.8,
					ease: "power2.inOut"
				}, i > 0 ? "<" : ">");

				if (i < texts.length - 1) {
					fs3MTl.to(txt, {
						opacity: 0.4,
						scale: 0.6,
						duration: 0.8,
						ease: "power2.inOut"
					});
				}
			});

			fs3MTl.to({}, { duration: 0.5 });
		});
    }

	
	// franchise section 5
	$('.fs5 .contbox .leftbox .txtbox .tit .color .word .dot').each(function(i) {
		gsap.fromTo(this, 
			{ opacity: 0, y: 80 }, 
			{ opacity: 1, y: 0, ease: 'back.out', repeat: -1, repeatDelay: 1.5, delay: 0.2 * i }
		);
	});
    
    if (isDesktop) {
        const fs5Tl = gsap.timeline({
            scrollTrigger: {
                trigger: '.fs5',
                start: 'top top',
                end: 'bottom+=1500', 
                pin: true,
                scrub: 0.7,
                invalidateOnRefresh: true
            }
        });

        fs5Tl
            .to('.rightcont1 .highlight', { 
                onStart: () => $('.rightcont1 .highlight').addClass('active'),
                onReverseComplete: () => $('.rightcont1 .highlight').removeClass('active')
            })
            .to({}, { duration: 0.5 }) 

            .addLabel('fs5Label2')
            .to('.rightcont2', { 
                top: 0, 
                duration: 1, 
                ease: 'none',
                onComplete: () => $('.rightcont2 .highlight').addClass('active'),
                onReverseComplete: () => $('.rightcont2 .highlight').removeClass('active')
            }, 'fs5Label2+=0.2')
            .to({}, { duration: 0.8 }) 

            .addLabel('fs5Label3')
            .to('.rightcont3', { 
                top: 0, 
                duration: 1, 
                ease: 'none',
                onComplete: () => $('.rightcont3 .highlight').addClass('active'),
                onReverseComplete: () => $('.rightcont3 .highlight').removeClass('active')
            }, 'fs5Label3+=0.2')
            .to({}, { duration: 1 });
    }
    
    if (isMobile) {
        const fs5_mob_swiper = new Swiper('.fs5_mob_swiper', {
            observer: true,
            observeParents: true,
			effect : 'fade',
			 fadeEffect: {  crossFade: true },
            speed: 400,
            loop: true,
            pagination: {
                el: '.fs5_mob_swiper .pagination',
                clickable: true,
            },
            on: {
                init: function () {
                    $('.fs5_mob_swiper .swiper-slide-active .highlight').addClass('active');
                },
                slideChangeTransitionStart: function () {
                    $('.fs5_mob_swiper .highlight').removeClass('active');
                },
                slideChangeTransitionEnd: function () {
                    $('.fs5_mob_swiper .swiper-slide-active .highlight').addClass('active');
                }
            }
        });
    }
	
	// franchise section 6   
    if (isDesktop) {

		const labels = gsap.utils.toArray(".fs6 .label");

        const fs8Tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".fs6",
                start: "top top",
                end: () => `+=${labels.length * 70}%`,
                pin: true,
                scrub: 1.5,
                invalidateOnRefresh: true
            }
        });

		fs8Tl.to({}, { duration: 0.8 });

        labels.forEach((label, i) => {
            if (i === 0) return;

            fs8Tl.to(label, {
                onStart: () => {
                    labels.forEach(l => l.classList.remove("active"));
                    label.classList.add("active");
                },
                onReverseComplete: () => {
                    label.classList.remove("active");
                    labels[i - 1].classList.add("active");
                },
                duration: 1.5
            });     			       
           
            fs8Tl.to({}, { duration: 0.8 });
        });

		fs8Tl.to({}, { duration: 0.8 });
    }
    
    if (isMobile) {}

	
	// franchise section 8    
    if (isDesktop) {

		const labels = gsap.utils.toArray(".fs8 .label");

        const fs8Tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".fs8",
                start: "top top",
                end: () => `+=${labels.length * 70}%`,
                pin: true,
                scrub: 1.5,
                invalidateOnRefresh: true
            }
        });

		fs8Tl.to({}, { duration: 0.8 });

        labels.forEach((label, i) => {
            if (i === 0) return;

            fs8Tl.to(label, {
                onStart: () => {
                    labels.forEach(l => l.classList.remove("active"));
                    label.classList.add("active");
                },
                onReverseComplete: () => {
                    label.classList.remove("active");
                    labels[i - 1].classList.add("active");
                },
                duration: 1.5
            });     			       
           
            fs8Tl.to({}, { duration: 0.8 });
        });

		fs8Tl.to({}, { duration: 0.8 });
    }
    
    if (isMobile) {}

	
	// franchise section 10
    if (isDesktop) {

        const fs10 = document.querySelector('.fs10');
        const contents = fs10.querySelectorAll('.cont');

        const fs10Tl = gsap.timeline({
            scrollTrigger: {
                trigger: fs10,
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
                fs10Tl.to(contents[index - 1], { opacity: 0, autoAlpha: 0, duration: 0.5 });
                fs10Tl.to(cont, { opacity: 1, autoAlpha: 1, duration: 0.5 });
            }

            copies.forEach((copy) => {
                fs10Tl.to(copy, { 
                    width: "100%", 
                    duration: 1,
                    ease: "none" 
                });
            });

            fs10Tl.to({}, { duration: 0.5 }); 
        });
    }

    if (isMobile) {
        const fs10 = document.querySelector('.fs10');
        const contents = fs10.querySelectorAll('.cont');

        const fs10MTl = gsap.timeline({
            scrollTrigger: {
                trigger: fs10,
                start: "top top",
                end: () => `+=${contents.length * 100}%`,
                pin: true,
                scrub: true
            }
        });

        contents.forEach((cont) => {
            const copies = cont.querySelectorAll('.tit .copy');
            copies.forEach((copy) => {
                fs10MTl.to(copy, { width: "100%", duration: 1 });
            });
        });
    }

	
	// franchise section 12    
    if (isDesktop) {
		gsap.fromTo('.fs12 .slideitem .top_area .titbox .tit .color .word .dot', 
            { opacity: 0, y: 80 }, 
            { 
                opacity: 1, 
                y: 0, 
				duration: 0.4,
                ease: 'back.out', 
                repeat: -1, 
                repeatDelay: 0, 
                stagger: 0.1,
            }
        );
	}
    
    if (isMobile) {}

	
	// franchise section 13
    if (isDesktop) {

        const fs13 = document.querySelector('.fs13');
        const contents = fs13.querySelectorAll('.cont');

		const fs13Tl = gsap.timeline({
			scrollTrigger: {
				trigger: ".fs13",
                start: "top top",
                end: () => `+=${contents.length * 150}%`,	
                pin: true,
                scrub: 1,
                invalidateOnRefresh: true
			}
		});

       	contents.forEach((cont, index) => {
			const text = cont.querySelectorAll('.tit .copy');
			if (index > 0) {
				fs13Tl.to(contents[index - 1], { opacity: 0, autoAlpha: 0, duration: 0.5 });
				fs13Tl.to(cont, { opacity: 1, autoAlpha: 1, duration: 0.5 });
			}
			text.forEach((copy) => {
				fs13Tl.to(copy, {
                    width: "100%", 
                    duration: 1,
                    ease: "none" 
				});
			});
			fs13Tl.to({}, { duration: 0.5 });
		});
    }

    if (isMobile) {
        const fs13 = document.querySelector('.fs13');
        const contents = fs13.querySelectorAll('.cont');

        const fs13MTl = gsap.timeline({
            scrollTrigger: {
                trigger: fs13,
                start: "top top",
                end: () => `+=${contents.length * 100}%`,
                pin: true,
                scrub: true
            }
        });

        contents.forEach((cont) => {
            const copies = cont.querySelectorAll('.tit .copy');
            copies.forEach((copy) => {
                fs13MTl.to(copy, { width: "100%", duration: 1 });
            });
        });
    }

	
	// franchise section 14
    const initGaugeAnimation = () => {
		const section = document.querySelector('.fs14');
		if (!section) return;

		const gaugePaths = section.querySelectorAll('.gauge_path');
		const countElements = section.querySelectorAll('.countup');
		const stamp = section.querySelector('.stamp');
		const targets = [37.54, 62.46];
		
		let rafIds = []; // ← RAF ID 추적 배열 추가
		let timeoutId = null; // ← timeout ID 추적 추가

		const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					timeoutId = setTimeout(() => {
						gaugePaths.forEach((path, index) => {
							const radius = path.r.baseVal.value;
							const circumference = 2 * Math.PI * radius;
							const targetVal = targets[index];
							const offset = circumference - (targetVal / 100) * circumference;

							path.style.transition = "none";
							path.style.strokeDasharray = circumference;
							path.style.strokeDashoffset = circumference;

							requestAnimationFrame(() => {
								path.style.transition = "stroke-dashoffset 1.5s ease-out";
								path.style.strokeDashoffset = offset;
							});

							let startTimestamp = null;
							const duration = 1500;
							const step = (timestamp) => {
								if (!startTimestamp) startTimestamp = timestamp;
								const progress = Math.min((timestamp - startTimestamp) / duration, 1);
								const currentVal = (progress * targetVal).toFixed(2);
								if (countElements[index]) {
									countElements[index].innerText = currentVal;
								}
								if (progress < 1) {
									rafIds[index] = window.requestAnimationFrame(step); // ← ID 저장
								}
							};
							rafIds[index] = window.requestAnimationFrame(step); // ← ID 저장
						});

						if (stamp) {
							gsap.fromTo(stamp,
								{ scale: 4, opacity: 0, rotation: 15 },
								{ scale: 1, opacity: 1, rotation: 0, duration: 0.5, delay: 1.2, ease: "back.out(1.7)",
								onComplete: () => { section.classList.add('on'); }
								}
							);
						}
					}, 500);

				} else {
					// ← 기존 RAF/timeout 취소 추가
					if (timeoutId) clearTimeout(timeoutId);
					rafIds.forEach(id => cancelAnimationFrame(id));
					rafIds = [];
					
					section.classList.remove('on');
					gaugePaths.forEach((path) => {
						path.style.transition = "none";
						path.style.strokeDashoffset = path.style.strokeDasharray;
					});
					countElements.forEach(el => el.innerText = "0");
					if (stamp) {
						gsap.set(stamp, { opacity: 0 });
					}
				}
			});
		}, { threshold: 0.2 });

		observer.observe(section);
	};
    initGaugeAnimation();


	// franchise section 16
	if (isDesktop) {
		const fs16Sec = document.querySelector('.fs16_secbox');
		
		const getTotalScroll = () => fs16Sec.scrollWidth - window.innerWidth;

		const percentEl1 = document.querySelector('.fs16_1 .percent');
		const percentEl2 = document.querySelector('.fs16_2 .percent');
		const cont1 = document.querySelector('.fs16_1 .cont');
		const cont2 = document.querySelector('.fs16_2 .cont');

		const countTo1 = parseFloat(percentEl1.getAttribute('data-count'));
		const countTo2 = parseFloat(percentEl2.getAttribute('data-count'));

		const graphbox1 = cont1.querySelector('.graphbox');
		const stamp1 = cont1.querySelector('.graph_stamp');
		const tblBox1 = cont1.querySelector('.tbl_box');
		const graphbox2 = cont2.querySelector('.graphbox');
		const stamp2 = cont2.querySelector('.graph_stamp');
		const tblBox2 = cont2.querySelector('.tbl_box');

		gsap.set([graphbox1, graphbox2], { opacity: 0, y: 50 });
		gsap.set([stamp1, stamp2], { opacity: 0, scale: 4, rotate: 15, yPercent: -50 });
		gsap.set([tblBox1, tblBox2], { opacity: 0, y: 50 });
		gsap.set("#fs16_popup", { y: 50, autoAlpha: 0 });

		const runCount = (el, countTo) => {
			gsap.fromTo(el,
				{ innerText: 0 },
				{
					innerText: countTo,
					duration: 1.5,
					snap: { innerText: 0.01 },
					ease: "power2.out",
					onUpdate: function () {
						el.innerText = parseFloat(this.targets()[0].innerText).toFixed(2) + "%";
					}
				}
			);
		};

		const animateCont = (graphbox, stamp, tblBox, percentEl, countTo) => {
			gsap.killTweensOf([graphbox, stamp, tblBox]);
			gsap.timeline()
				.to(graphbox, { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" })
				.to(stamp, { opacity: 1, scale: 1, rotate: 0, yPercent: 0, duration: 0.35, ease: "back.out(1.7)" }, "+=0.1")
				.to(tblBox, { opacity: 1, y: 0, duration: 0.4, ease: "power2.out" }, "<-0.1")
				.call(() => runCount(percentEl, countTo));
		};

		const resetCont = (graphbox, stamp, tblBox, percentEl) => {
			gsap.killTweensOf([graphbox, stamp, tblBox]);
			gsap.to(graphbox, { opacity: 0, y: 50 });
			gsap.to(stamp, { opacity: 0, scale: 4, rotate: 15, yPercent: -50 });
			gsap.to(tblBox, { opacity: 0, y: 50 });
			percentEl.innerText = "0%";
		};

		let cont1Done = false;
		let cont2Animated = false;
		let popupShown = false;

		ScrollTrigger.create({
			trigger: '.fs16_secbox',
			start: "top top",
			invalidateOnRefresh: true,
			onEnter: () => {
				animateCont(graphbox1, stamp1, tblBox1, percentEl1, countTo1);
				setTimeout(() => { cont1Done = true; }, 2000);
			},
			onLeaveBack: () => {
				cont1Done = false;
				resetCont(graphbox1, stamp1, tblBox1, percentEl1);
			},
		});

		const masterTl = gsap.timeline({
			scrollTrigger: {
				trigger: '.fs16_secbox',
				start: "top top",
				end: () => `+=${getTotalScroll() * 2.5}`,
				pin: true,
				scrub: 1.5,
				invalidateOnRefresh: true,
				onUpdate: (self) => {
					const p = self.progress;

					if (p >= 0.5 && !cont2Animated) {
						cont2Animated = true;
						animateCont(graphbox2, stamp2, tblBox2, percentEl2, countTo2);
					}
					if (p < 0.5 && cont2Animated) {
						cont2Animated = false;
						resetCont(graphbox2, stamp2, tblBox2, percentEl2);
					}

					if (p >= 0.75 && p < 0.98 && !popupShown) {
						popupShown = true;
						gsap.to("#fs16_popup", { autoAlpha: 1, y: 0, duration: 0.6, ease: "power2.out", overwrite: true });
					}
					if ((p < 0.75 || p >= 0.98) && popupShown) {
						popupShown = false;
						gsap.to("#fs16_popup", { autoAlpha: 0, y: 50, duration: 0.4, overwrite: true });
					}
				},
				onLeave: () => {
					gsap.to("#fs16_popup", { autoAlpha: 0, y: 50, duration: 0.4, overwrite: true });
					popupShown = false;
				},
				onLeaveBack: () => {
					gsap.to("#fs16_popup", { autoAlpha: 0, y: 50, duration: 0.4, overwrite: true });
					popupShown = false;
				}
			}
		});

		masterTl
			.to({}, { duration: 1 })
			.to(fs16Sec, { x: () => -getTotalScroll(), ease: "none", duration: 2 })  // ← 함수로
			.to({}, { duration: 2 });
	}

	if (isMobile) {
		gsap.set("#fs16_popup", { y: 50, autoAlpha: 0 });
		gsap.set('.fs16_swiper .graphbox, .fs16_swiper .tblbox', { opacity: 0 });
		gsap.set('.fs16_swiper .graph_stamp', { opacity: 0, scale: 4, rotate: 15 });

		const mob_fs16 = document.querySelector('.mob_fs16');

		// ← 함수 먼저 선언
		const animateFirstSlide = () => {
			const firstSlide = $('.fs16_swiper .swiper-slide').first();
			const region = firstSlide.find('.region');
			const graphbox = firstSlide.find('.graphbox');
			const tblbox = firstSlide.find('.tblbox');
			const stamp = firstSlide.find('.graph_stamp');
			const percentEl = firstSlide.find('.percent').get(0);
			const countTo = parseFloat(percentEl.getAttribute('data-count'));

			gsap.set(region, { opacity: 0, y: 30 });
			gsap.set(graphbox, { opacity: 0 });
			gsap.set(tblbox, { opacity: 0 });
			gsap.set(stamp, { opacity: 0, scale: 4, rotate: 15 });

			gsap.timeline()
				.to(region, { opacity: 1, y: 0, duration: 0.6, ease: "power2.out" }, 0.1)
				.to(graphbox, { opacity: 1, duration: 0.6, ease: "power2.out" }, 0.4)
				.to(tblbox, { opacity: 1, duration: 0.6, ease: "power2.out" }, 0.7)
				.to(stamp, { opacity: 1, scale: 1, rotate: 0, duration: 0.35, ease: "back.out(1.7)" }, 1)
				.call(() => runCount(percentEl, countTo), null, 1.3);
		};

		ScrollTrigger.create({
			trigger: '.mob_fs16',
			start: 'top 70%',
			onEnter: () => animateFirstSlide(),
			onEnterBack: () => animateFirstSlide(),
		});

		ScrollTrigger.create({
			trigger: mob_fs16,
			start: "bottom bottom",
			pin: true,
			pinSpacing: true,
			end: "+=1500",
			invalidateOnRefresh: true,
			fastScrollEnd: true,
			onUpdate: self => {
				const p = self.progress;
				if (p >= 0.6 && p < 0.98) {
					gsap.to("#fs16_popup", { 
						autoAlpha: 1, y: 0, 
						duration: 0.6, ease: "power2.out", overwrite: true 
					});
				} else {
					gsap.to("#fs16_popup", { 
						autoAlpha: 0, y: 50, 
						duration: 0.3, overwrite: true 
					});
				}
			},
			onLeave: () => gsap.to("#fs16_popup", { 
				autoAlpha: 0, y: 50, duration: 0.4, overwrite: true 
			}),
			onLeaveBack: () => gsap.to("#fs16_popup", { 
				autoAlpha: 0, y: 50, duration: 0.5, overwrite: true 
			}),
		});
	}
	
});


// main section 7
const fs7_swiper = new Swiper('.fs7_swiper', {
    observer: true,
    observeParents: true,
   	effect : 'fade',
	fadeEffect: { 
		crossFade: true 
	},
    speed: 500,
    loop: true,
    navigation: {
        nextEl: ".fs7_swiper .next_btn",
        prevEl: ".fs7_swiper .prev_btn",
    },
    // autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false,
    // },
	on: {
		slideChangeTransitionStart: function () {
			$('.fs7 .swiper-slide .card').removeClass('aos-animate').removeAttr('style');
			const activeSlide = $(this.slides[this.activeIndex]);
			setTimeout(() => {
				activeSlide.find('.card').addClass('aos-animate');
			}, 50);
		}
	}
});


// franchise section 12
const fs12_swiper = new Swiper('.fs12_swiper', {
	observer: true,
	observeParents: true,
	effect : 'fade',
	fadeEffect: { 
		crossFade: true 
	},
	parallax: true,
	speed: 500,
	loop: true,
    navigation: {
      nextEl: ".fs12 .next_btn",
      prevEl: ".fs12 .prev_btn",
    },	
	// autoplay: {
	// 	delay: 5000,
	// 	disableOnInteraction: false,
	// },
});


// franchise section 15
const playFs15Anim = (swiper) => {
    const activeSlide = $(swiper.slides[swiper.activeIndex]);
    const imgBox    = activeSlide.find('.imgbox').get(0);
    const txtBox    = activeSlide.find('.txtbox').get(0);
    const highlight = activeSlide.find('.txtbox .tit .highlight').get(0);
    const badge     = activeSlide.find('.desc .badge').get(0);

    gsap.killTweensOf([imgBox, txtBox, highlight, badge]);

    gsap.timeline()
        .fromTo(imgBox,    { opacity: 0, x: 200 }, { opacity: 1, x: 0, duration: 0.7 }, 0.1)
        .fromTo(txtBox,    { opacity: 0, x: 200 }, { opacity: 1, x: 0, duration: 0.7 }, 0.2)
        .fromTo(highlight, { backgroundSize: "0% 100%" }, { backgroundSize: "100% 100%", duration: 0.5, ease: "power2.inOut" }, 0.5)
        .fromTo(badge,     { opacity: 0, x: 200 }, { opacity: 1, x: 0, duration: 0.4 }, 0.7);
};
const fs15_swiper = new Swiper('.fs15_swiper', {
	observer: true,
	observeParents: true,
	effect : 'fade',
	fadeEffect: { 
		crossFade: true 
	},
	speed: 600,
	loop: true,
	allowTouchMove: false,
    navigation: {
      nextEl: ".fs15_controls .next_btn",
      prevEl: ".fs15_controls .prev_btn",
    },	
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	on: {
        init: function () { playFs15Anim(this); },
        slideChangeTransitionStart: function () { playFs15Anim(this); },
    }
});


// franchise section 16
const runCount = (el, countTo) => {
    let obj = { val: 0 };
    gsap.to(obj, {
        val: countTo,
        duration: 1.5,
        ease: "power2.out",
        onUpdate: () => {
            el.innerText = obj.val.toFixed(2) + "%";
        }
    });
};
const animateSlide = (slide) => {
    const region = slide.find('.region');
    const graphbox = slide.find('.graphbox');
    const tblbox = slide.find('.tblbox');
    const stamp = slide.find('.graph_stamp');
    const percentEl = slide.find('.percent').get(0);

    if (!percentEl) return;

    gsap.killTweensOf([region, graphbox, tblbox, stamp, percentEl]);

    gsap.timeline()
        .fromTo(region,   { opacity: 0 }, { opacity: 1, duration: 0.6, ease: "power2.out" }, 0.1)
        .fromTo(graphbox, { opacity: 0 }, { opacity: 1, duration: 0.6, ease: "power2.out" }, 0.4)
        .fromTo(tblbox,   { opacity: 0 }, { opacity: 1, duration: 0.6, ease: "power2.out" }, 0.7)
        .to(stamp, { opacity: 1, scale: 1, rotate: 0, duration: 0.35, ease: "back.out(1.7)" }, 1)
        .call(() => runCount(percentEl, parseFloat(percentEl.getAttribute('data-count'))), null, 1.3);
};
const resetSlide = (slide) => {
    gsap.to(slide.find('.region, .graphbox, .tblbox'), { opacity: 0, duration: 0.3 });
    gsap.to(slide.find('.graph_stamp'), { opacity: 0, scale: 4, rotate: 15, duration: 0.3 });
};
const fs16_swiper = new Swiper('.fs16_swiper', {
    observer: true,
    observeParents: true,
    speed: 600,
    loop: true,
    spaceBetween: 20,
    navigation: {
        nextEl: ".fs16_swiper .next_btn",
        prevEl: ".fs16_swiper .prev_btn",
    },
    on: {
        slideChangeTransitionStart: function () {
            const active = $(this.slides[this.activeIndex]);
            resetSlide($(this.slides[this.previousIndex]));
            gsap.set(active.find('.region, .graphbox, .tblbox'), { opacity: 0 });
            gsap.set(active.find('.graph_stamp'), { opacity: 0, scale: 4, rotate: 15 });
        },
        slideChangeTransitionEnd: function () {
            animateSlide($(this.slides[this.activeIndex]));
        }
    }
});