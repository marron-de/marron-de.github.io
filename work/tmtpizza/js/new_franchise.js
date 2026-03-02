// 스크롤 복원 수동 설정
if (history.scrollRestoration) {
    history.scrollRestoration = 'manual';
}

// lenis scroll smooth
const lenis = new Lenis({
    duration: 2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
});
lenis.on('scroll', ScrollTrigger.update);
function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// gsap
gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);
const mm = gsap.matchMedia();
const initializePageState = () => {
    window.scrollTo(0, 0);
	lenis.scrollTo(0, { immediate: true });
	ScrollTrigger.refresh();
};
const initGSAP = () => {
    gsap.registerPlugin(ScrollTrigger);
};
$(window).on('load', function(){
    initializePageState();
    initGSAP();
})


// franchise section 2
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;

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
				fs2Tl.to(copy, {
                    width: "100%", 
                    duration: 1,
                    ease: "none" 
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
});

// franchise section 3
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;

    if (isDesktop) {		
        const fs3 = document.querySelector('.fs3');
        const contents = fs3.querySelectorAll('.cont');

		gsap.set('.fs3 .tit', {
			opacity: 0.4, 
			scale: 1, 
		});

		const fs3Tl = gsap.timeline({
			scrollTrigger: {
				trigger: ".fs3",
                start: "top top",
                end: () => `+=${contents.length * 250}%`,	
                pin: true,
                scrub: 1,
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
					scale: 1.12,
					duration: 0.8,
					ease: "power2.inOut"
				}, i > 0 ? "<" : ">"); 

				if (i < texts.length - 1) {
					fs3Tl.to(txt, {
						opacity: 0.4,
						scale: 1,
						duration: 0.8,
						ease: "power2.inOut"
					});
				}
			});

			fs3Tl.to({}, { duration: 0.5 });
		});
    }

    if (isMobile) {
        const fs3 = document.querySelector('.fs3');
        const contents = fs3.querySelectorAll('.cont');

        const fs3MTl = gsap.timeline({
            scrollTrigger: {
                trigger: fs3,
                start: "top top",
                end: () => `+=${contents.length * 100}%`,
                pin: true,
                scrub: true
            }
        });

        contents.forEach((cont) => {
            const copies = cont.querySelectorAll('.tit .copy');
            copies.forEach((copy) => {
                fs3MTl.to(copy, { opacity: "1", duration: 1 });
            });
        });
    }
});

// franchise section 5
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;
    
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

        $('.fs5 .contbox .leftbox .txtbox .tit .color .word .dot').each(function(i) {
            gsap.fromTo(this, 
                { opacity: 0, y: 80 }, 
                { opacity: 1, y: 0, ease: 'back.out', repeat: -1, repeatDelay: 1.5, delay: 0.2 * i }
            );
        });
    }
    
    if (isMobile) {

	}
});

// franchise section 7
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;
    
    if (isDesktop) {

		const allCards = gsap.utils.toArray(".fs7 .card");
		const cardNums = allCards.map(card => {
			const match = card.className.match(/card(\d+)/);
			return match ? parseInt(match[1]) : 0;
		});
		const maxSteps = Math.max(...cardNums);

      	const fs7Tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".fs7",
                start: "top top",
                end: 'bottom+=1000', 
                pin: true,
                scrub: 0.7,
            }
        });

        for (let i = 2; i <= maxSteps; i++) {
			let label = `step${i}`;
			let hasTarget = false;
			
			const leftTarget = document.querySelector(`.leftcard .card${i}`);
			const rightTarget = document.querySelector(`.rightcard .card${i}`);

			if (leftTarget) {
				fs7Tl.from(leftTarget, { yPercent: 100, opacity: 0 }, label);
				hasTarget = true;
			}

			if (rightTarget) {
				fs7Tl.from(rightTarget, { yPercent: 100, opacity: 0 }, label);
				hasTarget = true;
			}

			if (hasTarget) {
				fs7Tl.to({}, { duration: 0.5 }); 
			}
		}
	}
    
    if (isMobile) {

	}
});

// franchise section 8
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;
    
    if (isDesktop) {

		const labels = gsap.utils.toArray(".fs8 .label");

        const fs8Tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".fs8",
                start: "top top",
                end: () => `+=${labels.length * 70}%`,
                pin: true,
                scrub: 0.7,
                invalidateOnRefresh: true
            }
        });

		fs8Tl.to({}, { duration: 0.5 });

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
                duration: 1
            });     			       
           
            fs8Tl.to({}, { duration: 0.5 });
        });

		fs8Tl.to({}, { duration: 0.5 });
    }
    
    if (isMobile) {

	}
});

// franchise section 10
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;

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
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
});
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;
    
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
    
    if (isMobile) {

	}
});

// franchise section 13
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;

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
});

// franchise section 14
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;

    const initGaugeAnimation = () => {
        const section = document.querySelector('.fs14');
        if (!section) return;

        const gaugePaths = section.querySelectorAll('.gauge_path');
        const countElements = section.querySelectorAll('.countup');
        const stamp = section.querySelector('.stamp');
        const targets = [37.54, 62.46];

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
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
                                    window.requestAnimationFrame(step);
                                }
                            };
                            window.requestAnimationFrame(step);
                        });

                        if (stamp) {
                            gsap.fromTo(stamp, 
                                { scale: 4, opacity: 0, rotation: 15 }, 
                                { scale: 1, opacity: 1, rotation: 0, duration: 0.5, delay: 1.2, ease: "back.out(1.7)" }
                            );
                        }
                    }, 500);
                } else {
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

});

// franchise section 15
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
        slideChangeTransitionStart: function () {
            const activeSlide = $(this.slides[this.activeIndex]);
            const imgBox = activeSlide.find('.imgbox');
            const txtBox = activeSlide.find('.txtbox');
            const highlight = activeSlide.find('.txtbox .tit .highlight');
            const badge = activeSlide.find('.desc .badge');

            gsap.killTweensOf([imgBox, txtBox, badge]);

            const tl = gsap.timeline();
            tl.fromTo(imgBox, { opacity: 0, x: 200 }, { opacity: 1, x: 0, duration: 0.7 }, 0.1)
              .fromTo(txtBox, { opacity: 0, x: 200 }, { opacity: 1, x: 0, duration: 0.7 }, 0.2)
              .fromTo(highlight, { backgroundSize: "0% 100%" }, { backgroundSize: "100% 100%", duration: 0.5, ease: "power2.inOut" }, 0.5)
              .fromTo(badge, { opacity: 0, x: 200 }, { opacity: 1, x: 0 }, 0.7);
        },
    }
});

// franchise section 16
mm.add({
    isDesktop: "(min-width: 1081px)",
    isMobile: "(max-width: 1080px)"
}, (context) => {
    let { isDesktop, isMobile } = context.conditions;

    const sections = gsap.utils.toArray('.fs16');

    sections.forEach((section, i) => {
        const isLast = section.classList.contains('fs16_2');
        
        const mainPin = ScrollTrigger.create({
            trigger: section,
            start: "bottom bottom",
            pin: true,
            pinSpacing: isLast ? true : false,
            end: isLast ? "+=1000" : "+=100%", 
            invalidateOnRefresh: true,
            anticipatePin: 1
        });

        ScrollTrigger.create({
            trigger: section,
            start: "top top",
            onEnter: () => {
                const percentEl = section.querySelector('.percent');
                if (percentEl) {
                    const countTo = parseFloat(percentEl.getAttribute('data-count'));
                    gsap.fromTo(percentEl, 
                        { innerText: 0 },
                        {
                            innerText: countTo,
                            duration: 1.2,
                            snap: { innerText: 0.01 },
                            ease: "power2.out",
                            onUpdate: function() {
                                percentEl.innerText = parseFloat(this.targets()[0].innerText).toFixed(2) + "%";
                            }
                        }
                    );
                }
            }
        });

        if (isLast) {
            gsap.set("#fs16_popup", { y: 50, autoAlpha: 0 });

            ScrollTrigger.create({
                trigger: section,
                start: "bottom bottom",
                end: () => mainPin.end - (section.offsetHeight * 0.1),
                fastScrollEnd: true,
                onEnter: () => {
                    gsap.to("#fs16_popup", {
                        autoAlpha: 1,
                        y: 0,
                        duration: 0.6,
                        delay: 0.5,
                        ease: "power2.out",
                        overwrite: true
                    });
                },
                onLeave: () => {
                    gsap.to("#fs16_popup", {
                        autoAlpha: 0,
                        y: 50,
                        duration: 0.4,
                        overwrite: true
                    });
                },
                onEnterBack: () => {
                    gsap.to("#fs16_popup", {
                        autoAlpha: 1,
                        y: 0,
                        duration: 0.6,
                        ease: "power2.out",
                        overwrite: true
                    });
                },
                onLeaveBack: () => {
                    gsap.to("#fs16_popup", {
                        autoAlpha: 0,
                        y: 50,
                        duration: 0.5,
                        overwrite: true
                    });
                },
                onToggle: self => {
                    if (!self.isActive) {
                        gsap.to("#fs16_popup", { autoAlpha: 0, y: 50, duration: 0.3, overwrite: true });
                    }
                }
            });
        }
    });

    if (isDesktop) {}
	
    if (isMobile) {}
});

// franchise section 18
const fs18_swiper = new Swiper('.fs18_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
    spaceBetween: 20,
	speed: 500,
	allowTouchMove: true,
    breakpoints: {
      1080: {
		allowTouchMove: false,
        spaceBetween: 0
      },
    }
});