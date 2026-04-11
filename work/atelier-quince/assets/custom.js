// header notice
$('.fixed-notice .btn-close').click(function () {
	$('.fixed-notice').addClass("hide");
});

// header scroll
$(function () {
	let didScroll;
	let lastScrollTop = 0;
	let delta = 5; // 이벤트를 발생시킬 스크롤의 이동 범위
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
	}, 250); // 스크롤이 멈춘 후 동작이 실행되기 까지의 딜레이

	function hasScrolled() {
		let st = $(this).scrollTop(); // 현재 window의 scrollTop 값

		// delta로 설정한 값보다 많이 스크롤 되어야 실행된다.
		if (Math.abs(lastScrollTop - st) <= delta)
			return;

		if (st > 0) {
			$("body").addClass("down")
		} else {
			$("body").removeClass("down")
		}

		if (st > navbarHeight) {
			$(".header__inline-menu").addClass("down")
		}

		if (st < navbarHeight) {
			$(".header__inline-menu").removeClass("down")
		}

		lastScrollTop = st; // 현재 멈춘 위치를 기준점으로 재설정
	}
})

// header serach icon
$('.header__icon--search').click(function () {
	$('body').addClass("search-active");
});
$('.search-modal__close-button').click(function () {
	$('body').removeClass("search-active");
});


// footer toggle
$(document).ready(function () {
	$('.footer_toggle').click(function () {
		$(this).parents('#footer').find('.toggle_cont').slideToggle();
	});
});