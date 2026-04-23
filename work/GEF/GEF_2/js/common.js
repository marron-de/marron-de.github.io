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

// mobile swiper
$(document).ready(function () {
    $('.mob_swiper').each(function (i, el) {
        const index = parseInt($(el).attr('data-index'), 10) || 0;

        new Swiper(el, {
            observer: true,
            observeParents: true,
            slidesPerView: 'auto',
			spaceBetween: 20,
            speed: 500,
            initialSlide: index,

			breakpoints: {
				1080: {
					spaceBetween: 0,
				},
			}

        });
    });
});