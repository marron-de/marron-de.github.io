// AOS
AOS.init({
	duration: 1000,
	easing: "linear",
})
window.addEventListener('load', function () {
	AOS.refresh();
});


// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").click(function () {
		$("body").addClass("hidden");
		$(".header").addClass("open");
		$(".nav_box").addClass("open");
	})
});
$(document).ready(function () {
	$(".nav_box .menu_close").click(function () {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
	})
});
$(document).mouseup(function (e) {
	if ($(".nav_box").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
	}
});


// accordion function
(function ($) {

	const lnbUI = {
		click: function (target, speed) {
			let _self = this,
				$target = $(target);
			_self.speed = speed || 400;

			$target.each(function () {
				if (findChildren($(this))) {
					return;
				}
				$(this).addClass('noDepth');
			});

			function findChildren(obj) {
				return obj.find('> ul').length > 0;
			}

			$target.on('click', '.acc_tit', function (e) {
				e.stopPropagation();
				let $this = $(this),
					$depthTarget = $this.next(),
					$siblings = $this.parent().siblings();

				$this.parent('li').find('ul li').removeClass('show');
				$siblings.removeClass('show');
				$siblings.find('ul').slideUp(400);

				if ($depthTarget.css('display') == 'none') {
					_self.activeOn($this);
					$depthTarget.slideDown(_self.speed);
				} else {
					$depthTarget.slideUp(_self.speed);
					_self.activeOff($this);
				}

			})

		},
		activeOff: function ($target) {
			$target.parent().removeClass('show');
		},
		activeOn: function ($target) {
			$target.parent().addClass('show');
		},

	};

	// navbox
	$(function () {
		lnbUI.click('.accordion li', 400)
	});

}(jQuery));


// tab function
const tabs_swiper = new Swiper('.tabs_swiper', {
	observer: true, 	
	observeParents: true, 

	slidesPerView: 'auto',
	spaceBetween: 22,
	speed: 500,

	breakpoints: {
		1080: {
			spaceBetween: 0,
		},
	}
})
$(document).ready(function () {
	$(".tab_nav").click(function (e) {
	
		if ($(this).attr("id") === "grf_btn") return;

		AOS.refresh();

		let target = $(this);
		let tabNavbox = target.closest('.tab_navbox');
		let tabNav = tabNavbox.find(".tab_nav");
		let idx = tabNav.index(target);

		let tabWrap = tabNavbox.closest(".tabs");
		let tabContbox = tabWrap.find(".tab_contbox");
		let tabCont = tabContbox.find(".tab_cont");

		tabNav.removeClass("on");
		target.addClass("on");

		tabCont.removeClass("on");
		tabCont.eq(idx).addClass("on");

		function isValidSwiper(swiper) {
			return typeof swiper !== 'undefined' &&
				swiper !== null &&
				swiper.el instanceof Element;
		}

		setTimeout(() => {
			AOS.refresh();
			if (isValidSwiper(ns2_4_pic)) {
				ns2_4_pic.update();
			}
			if (isValidSwiper(ns2_4_step)) {
				ns2_4_step.update();
			}
		}, 0);
	});
});

// layout
$(window).on('resize', function () {
	const windowWidth = $(window).width();
	const maxWidth = 1640;
	const widthPercentage = 0.9;

	let calculatedWidth = windowWidth * widthPercentage;
	if (calculatedWidth > maxWidth) {
		calculatedWidth = maxWidth;
	}

	const marginLeft = (windowWidth - calculatedWidth) / 2;

	$('body').css('--margin-left', marginLeft + 'px');
	$('body').css('--margin-right', marginLeft + 'px');
});
$(document).ready(function () {
	$(window).trigger('resize');
});


/* modal */
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})
$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
	}
});


// Privacy Policy modal
$(document).ready(function () {
	$(".footer .privacy_btn").click(function () {
		$("body").addClass("hidden")
		$("#privacy_modal").addClass("show")
	})
});
$(document).ready(function () {
	$("#privacy_modal .privacy_btn").click(function () {
		$("body").removeClass("hidden")
		$("#privacy_modal").removeClass("show")
	})
});


// main
const ms4_swiper = new Swiper('.ms4_swiper', {
	observer: true, 	
	observeParents: true,  

	slidesPerView: 'auto',
	spaceBetween: 10,
	speed: 500,

	scrollbar: {
		el: '.ms4_swiper .scrollbar',
	},

	breakpoints: {
		1080: {
			spaceBetween: 46,
		},
	}

})

