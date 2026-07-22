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



// fullpage 
function initFullpageSwiper() {
    const FULLPAGE_BREAKPOINT = 1080;
    let fullSwiper = null;
    let isAnimating = false;
    let resizeCheckId = null;

    function isDesktop() {
        return window.innerWidth >= FULLPAGE_BREAKPOINT;
    }

    function disableInternalScroll() {
        document.querySelectorAll('.full_swiper .section.scroll').forEach(function (el) {
            el.style.overflowY = 'hidden';
        });
    }

    function enableInternalScroll() {
        document.querySelectorAll('.full_swiper .section.scroll').forEach(function (el) {
            el.style.overflowY = '';
        });
    }

    function updateScrollLock(swiper) {
        if (!isDesktop()) return;
        const activeSlide = swiper.slides[swiper.activeIndex];
        if (activeSlide.classList.contains('scroll')) {
            swiper.mousewheel.disable();
        } else {
            swiper.mousewheel.enable();
        }
    }
	
	function initSwiper() {
        if (!isDesktop() || fullSwiper) return;

        fullSwiper = new Swiper('.full_swiper', {
            slidesPerView: 'auto',
            direction: 'vertical',
            speed: 800,
            mousewheel: {
                releaseOnEdges: true,
                sensitivity: 1
            },
            observer: true,
            observeParents: true,
            observeSlideChildren: true,
            resizeObserver: true,
            on: {
                init: function () {
                    updateScrollLock(this);
                },
                slideChange: function () {
                    updateScrollLock(this);
                },
                slideChangeTransitionStart: function () {
                    if (!isDesktop()) return;
                    isAnimating = true;
                    disableInternalScroll();
                },
                slideChangeTransitionEnd: function () {
                    if (!isDesktop()) return;
                    isAnimating = false;
                    enableInternalScroll();
                }
            }
        });

        document.body.classList.add('is_fullpage');
    }

    function destroySwiper() {
        if (!fullSwiper) return;
        fullSwiper.destroy(true, true);
        fullSwiper = null;
        enableInternalScroll();
        document.body.classList.remove('is_fullpage');
    }

    function bindEvents() {
        window.addEventListener('resize', function () {
            clearTimeout(resizeCheckId);
            resizeCheckId = setTimeout(function () {
                if (!isDesktop()) {
                    destroySwiper();
                } else {
                    initSwiper();
                }
            }, 200);
        });

        document.querySelectorAll('.full_swiper .section.scroll').forEach(function (sectionEl) {
            sectionEl.addEventListener(
                'wheel',
                function (e) {
                    if (!isDesktop() || !fullSwiper) return;

                    if (isAnimating) {
                        e.preventDefault();
                        return;
                    }

                    const atTop = sectionEl.scrollTop <= 0;
                    const atBottom =
                        Math.ceil(sectionEl.scrollTop + sectionEl.clientHeight) >= sectionEl.scrollHeight;

                    if (e.deltaY > 0 && atBottom) {
                        e.preventDefault();
                        fullSwiper.mousewheel.enable();
                        fullSwiper.slideNext();
                        return;
                    }

                    if (e.deltaY < 0 && atTop) {
                        e.preventDefault();
                        fullSwiper.mousewheel.enable();
                        fullSwiper.slidePrev();
                        return;
                    }
                },
                { passive: false }
            );
        });

        document.querySelectorAll('.full_swiper .auto_height img').forEach(function (img) {
            if (img.complete) return;
            img.addEventListener('load', function () {
                if (fullSwiper && isDesktop()) {
                    fullSwiper.update();
                }
            });
        });
    }

    initSwiper();
    bindEvents();
}

initFullpageSwiper();