// main 
const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
const isWideScreen = window.innerWidth > 1080;

const isPC = !isTouchDevice && isWideScreen;

if (isPC && document.querySelector('#fullpage')) {
 	 const myFullpage = new fullpage('#fullpage', {
		licenseKey: 'F6F9DF86-F3194384-A1EECDC5-77D3E6B1',

		onLeave: (origin, destination, direction) => {
			origin.item.querySelectorAll('.move').forEach(item => {
				item.classList.remove('aos-animate');
			});
		},

		afterLoad: function (origin, destination, direction) {
			destination.item.querySelectorAll('.move').forEach(item => {
				void item.offsetWidth;
				item.classList.add('aos-animate');
			});

			if ([0].includes(destination.index)) {
				$("#header").addClass("white");
			}

			if ([1, 2, 3, 4, 5].includes(destination.index)) {
				$("#header").removeClass("white");
			}
		},
	});

	const originalSetAllowScrolling = fullpage_api.setAllowScrolling;
    fullpage_api.setAllowScrolling = function (value, directions) {
        console.log('setAllowScrolling :', value, directions);
        return originalSetAllowScrolling.call(this, value, directions);
    };	
}

if (isPC) {
	const ms3_swiper = new Swiper('.ms3_swiper', {
		observer: true,
		observeParents: true,
		mousewheel: true,
		simulateTouch: false,
		speed: 700,
	})

	ms3_swiper.on('slideChange', function () {
		if (ms3_swiper.realIndex == 0) {
			fullpage_api.setAllowScrolling(false);
			if (event.deltaY < 0) {
				setTimeout(function () {
					fullpage_api.setAllowScrolling(true);
				}, 500)
			}
		}

		if (ms3_swiper.realIndex == 1) {
			fullpage_api.setAllowScrolling(false);
		}

		if (ms3_swiper.realIndex == 2 && event.deltaY > 0) {
			setTimeout(function () {
				fullpage_api.setAllowScrolling(true);
			}, 500)
		}
	});
}

const ms3_sec_swiper1 = new Swiper('.ms3_sec_swiper1', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	spaceBetween: 10,
	speed: 500,
	loop:true,
	navigation: {
		nextEl: '.ms3_1 .tablet .next_btn',
		prevEl: '.ms3_1 .tablet .prev_btn',
	},
	pagination: {
		el: ".ms3_1 .tablet .progressbar",
		type: "progressbar",
	},
	// scrollbar: {
	// 	el: '.ms3_1 .tablet .scrollbar',
	// },
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	breakpoints: !isTouchDevice ? {
		1080: {
			spaceBetween: 40,
			navigation: {
				nextEl: '.ms3_1 .pc .next_btn',
				prevEl: '.ms3_1 .pc .prev_btn',
			},
			pagination: {
				el: ".ms3_1 .pc .progressbar",
				type: "progressbar",
			},
			scrollbar: {
				el: '.ms3_1 .pc .scrollbar',
			},
		}
	} : {},
	// breakpoints: {
	// 	1080: {
	// 		spaceBetween: 40,
	// 		navigation: {
	// 			nextEl: '.ms3_1 .pc .next_btn',
	// 			prevEl: '.ms3_1 .pc .prev_btn',
	// 		},
	// 		scrollbar: {
	// 			el: '.ms3_1 .pc .scrollbar',
	// 		},
	// 	},
	// }
})

const ms3_sec_swiper2 = new Swiper('.ms3_sec_swiper2', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	spaceBetween: 10,
	speed: 500,
	loop:true,
	navigation: {
		nextEl: '.ms3_2 .next_btn',
		prevEl: '.ms3_2 .prev_btn',
	},
	pagination: {
		el: ".ms3_2 .progressbar",
		type: "progressbar",
	},
	// scrollbar: {
	// 	el: '.ms3_2 .scrollbar',
	// },
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	breakpoints: !isTouchDevice ? {
		1080: {
			spaceBetween: 60,
		}
	} : {},
	// breakpoints: {
	// 	1080: {
	// 		spaceBetween: 60,
	// 	},
	// }
})

const ms3_sec_swiper3 = new Swiper('.ms3_sec_swiper3', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	spaceBetween: 12,
	speed: 500,
	centeredSlides: false,  
	initialSlide: 0,
	loop: false,  
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	breakpoints: !isTouchDevice ? {
		1080: {
			spaceBetween: 40,
			centeredSlides: true,  
			initialSlide: 1,
			loop: true,  
		}
	} : {},
	// breakpoints: {
	// 	1080: {
	// 		spaceBetween: 40,
	// 		centeredSlides: true,  
	// 		initialSlide: 1,
	// 	},
	// }
})


// main mobile scroll
let scrollAnimation = {};

$(document).ready(function () {
	$(".topArea").on("mousewheel", function (e) {
		e.preventDefault();
	})
	$(window).resize(function () {
		let window_width = window.innerWidth;

		if (isPC) {
			setTimeout(function () {
				// scrollAnimation.pcScrollDown();
			}, 0);

		} else {
			setTimeout(function () {
				// 모바일에서는 스와이프 + 휠 둘 다 적용
				scrollAnimation.mobileScrollDown();
				scrollAnimation.pcScrollDown();
			}, 0);
		}
	}).resize();

});

scrollAnimation.isScroll = 0; 
let mousewheelevt = (/Firefox/i.test(navigator.userAgent) ? "DOMMouseScroll" : "mousewheel"); 

scrollAnimation.pcScrollDown = function () {
	scrollAnimation.targetSection = $(".topArea");
	scrollAnimation.moveTagetSection = $(".subContent");
	scrollAnimation.moveTagetSectionTop = scrollAnimation.moveTagetSection.offset().top; // header 보정 제거

	scrollAnimation.targetSection.on(mousewheelevt, function (e) {
		$("body").addClass("is_scrolling");
		if (scrollAnimation.isScroll === 1) return false;
		e.preventDefault();

		let evt = window.event || e;
		let delta = evt.detail ? evt.detail : evt.wheelDelta;
		if (/Firefox/i.test(navigator.userAgent)) delta = -evt.detail;

		if (delta < 0) {
			scrollAnimation.isScroll = 1;
			scrollAnimation.scrollDown(scrollAnimation.moveTagetSectionTop, "pc");
		} else {
			scrollAnimation.isScroll = 1;
			scrollAnimation.scrollUp();
		}
	});
	if ($("body").hasClass("is_scrolling") === true) {
		scrollAnimation.moveTagetSection.on(mousewheelevt, function (e) {
			e.preventDefault();
		});
	}
};
// scrollAnimation.mobileScrollDown = function () {
// 	scrollAnimation.targetSection = $(".topArea")[0];
// 	scrollAnimation.moveTagetSectionTop = $(".subContent").offset().top; 

// 	let hammertime = new Hammer(scrollAnimation.targetSection);
// 	hammertime.get('pan').set({
// 		direction: Hammer.DIRECTION_ALL
// 	});

// 	hammertime.on("panup pandown", function (ev) {
// 		if (scrollAnimation.isScroll === 1) return false;
// 		if (ev.direction == "8") {
// 			scrollAnimation.scrollDown(scrollAnimation.moveTagetSectionTop);
// 		} else if (ev.direction == "16") {
// 			scrollAnimation.scrollUp();
// 		}
// 	});	
// };
scrollAnimation.mobileScrollDown = function () {
	scrollAnimation.targetSection = $(".topArea")[0];
	scrollAnimation.moveTagetSectionTop = $(".subContent").offset().top;

	let startY = 0;
	let isTouching = false;

	scrollAnimation.targetSection.addEventListener("touchstart", function(e) {
		startY = e.touches[0].clientY;
		isTouching = true;
	});

	scrollAnimation.targetSection.addEventListener("touchmove", function(e) {
		if (!isTouching) return;

		const currentY = e.touches[0].clientY;
		const deltaY = startY - currentY;

		if (scrollAnimation.isScroll === 1) {
			e.preventDefault();
			return;
		}

		if (deltaY > 30) {
			scrollAnimation.isScroll = 1;
			scrollAnimation.scrollDown(scrollAnimation.moveTagetSectionTop);
			isTouching = false;
			e.preventDefault();
		} else if (deltaY < -30) {
			scrollAnimation.isScroll = 1;
			scrollAnimation.scrollUp();
			isTouching = false;
			e.preventDefault();
		}
	});

	scrollAnimation.targetSection.addEventListener("touchend", function() {
		isTouching = false;
	});
};

scrollAnimation.scrollDown = function (moveTagetSection, divice) {
	$("html,body").stop().animate({
		scrollTop: moveTagetSection
	}, 800, function () {
		scrollAnimation.isScroll = 0;
		if (divice === "pc") {
			$("body").removeClass("is_scrolling");
			scrollAnimation.moveTagetSection.off(mousewheelevt);
		}
	});
};
scrollAnimation.scrollUp = function () {
	$("html,body").stop().animate({
		scrollTop: 0
	}, 800, function () {
		scrollAnimation.isScroll = 0;
		$("body").removeClass("is_scrolling");
	});
};

if (!isPC && document.querySelector('#fullpage')) {

	const video = document.getElementById("ms1_video");
	function ensurePlay() {
		if (video.paused) {
			video.play().catch(()=>{});
		}
		requestAnimationFrame(ensurePlay);
	}
	ensurePlay();
	document.body.addEventListener("touchstart", ensurePlay, { once: true });
	setInterval(ensurePlay, 1000);


	document.body.style.setProperty("--height", window.innerHeight + "px");


	$(window).on("scroll", function () {
		const scrollTop = $(this).scrollTop();
		const subContent = $(".subContent").offset().top;
		const topArea = $(".topArea").offset().top;

		if (scrollTop >= subContent - 50) {
			$("#header").removeClass("white");
		} else if (scrollTop >= topArea - 50) {
			$("#header").addClass("white");
		} else {
			$("#header").removeClass("white");
		}
	});

}

