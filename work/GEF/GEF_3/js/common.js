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


// main
const ms1_swiper = new Swiper(".ms1_swiper", { 
	observer: true, 	
	observeParents: true,  	 
	loop: true, 
	speed: 500,
	navigation: {
		nextEl: '.ms1 .next_btn',
		prevEl: '.ms1 .prev_btn',
	},
	pagination: {
		el: '.ms1 .ms1_pag',
		clickable: true,
	},
	autoplay: {        
		delay: 5000,        
		disableOnInteraction: false,      
	},
});

const ms5_swiper = new Swiper(".ms5_swiper", { 
	observer: true, 	
	observeParents: true,  	 
	effect: 'fade',
	fadeEffect: {
		crossFade: true
	},
	loop: true, 
	speed: 500,
	navigation: {
		nextEl: '.ms5 .next_btn',
		prevEl: '.ms5 .prev_btn',
	},
	pagination: {
		el: '.ms5 .ms5_pag',
		clickable: true,
	},
	autoplay: {        
		delay: 5000,        
		disableOnInteraction: false,      
	},
});


// 260611 추가
// scroll nav
$(function () {
	let didScroll;
	let lastScrollTop = 0;
	let delta = 5; 
	let navbarHeight = $("#header").outerHeight();

	$(window).scroll(function (event) {
		didScroll = true;
	});

	hasScrolled();

	setInterval(function () {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 250);
	
	function hasScrolled() {
		let st = $(this).scrollTop();

		if (Math.abs(lastScrollTop - st) <= delta)
			return;

		if (st > 0) {
			$("body").addClass("down")
		} else {
			$("body").removeClass("down")
		}

		lastScrollTop = st; 
	}
})