// layout
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1350;
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


// ms2 swiper
const ms2_swiper = new Swiper('.ms2_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	direction: 'vertical',
	slidesPerView: 'auto',
	spaceBetween: 40,
	breakpoints: {
		599: {
			direction: 'horizontal',
		},
	},
});

const ms4_swiper = new Swiper('.ms4_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	direction: 'vertical',
	slidesPerView: 'auto',
	spaceBetween: 40,
	breakpoints: {
		599: {
			direction: 'horizontal',
			spaceBetween: 24,
		},
	},
});
$(function() {
    const slides = $('.ms4_swiper .swiper-slide.item');

    const updateHover = () => {
        const isMobile = window.innerWidth <= 1080;

        slides.off('mouseenter mouseleave click touchstart');

        if (isMobile) {
            slides.on('click touchstart', function(e) {
                e.preventDefault();
                slides.not(this).removeClass('hover');
                $(this).toggleClass('hover');
            });
        } else {
            slides.on('mouseenter', function() {
                slides.removeClass('hover');
                $(this).addClass('hover');
            });
        }
    };

    updateHover();
    $(window).on('resize', updateHover);
});
