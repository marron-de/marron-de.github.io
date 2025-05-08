AOS.init({
	duration: 800,
	// disable: 'tablet',
})



// header navbox button 
function m_menu_ope() {
	$("body").addClass("hidden");
	$(".header").addClass("open");
	$(".nav_box").addClass("open");
}

function m_menu_clo() {
	$("body").removeClass("hidden");
	$(".header").removeClass("open");
	$(".nav_box").removeClass("open");
}

$(document).mouseup(function (e) {
	if ($(".nav_box").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
	}
});



$(document).ready(function() {
	$('.home_wrap .home_sec3 .sec3_cont > .left .left_img').hover(
			function() {
					$('.home_wrap .home_sec3 .sec3_cont > .left .left_img').addClass('hover');
					$('.home_wrap .home_sec3 .sec3_cont > .right .txtbox').addClass('hover');
			},
			function() {
				$('.home_wrap .home_sec3 .sec3_cont > .left .left_img').removeClass('hover');
				$('.home_wrap .home_sec3 .sec3_cont > .right .txtbox').removeClass('hover');
			}
	);
	$('.home_wrap .home_sec3 .sec3_cont > .right .txtbox ').hover(
			function() {
				$('.home_wrap .home_sec3 .sec3_cont > .left .left_img').addClass('hover');
				$('.home_wrap .home_sec3 .sec3_cont > .right .txtbox').addClass('hover');
			},
			function() {
				$('.home_wrap .home_sec3 .sec3_cont > .left .left_img').removeClass('hover');
				$('.home_wrap .home_sec3 .sec3_cont > .right .txtbox').removeClass('hover');
			}
	);
});




// Home & Research 페이지 로드시 상단 이동
window.onload = function () {
	const currentPage = window.location.pathname;
	if (currentPage.includes("index.html") || currentPage.includes("research.html")) {
		window.scrollTo({
			top: 0,
			behavior: "auto"
		});
	}
};



// Home & Research 페이지 인터렉션 종료 후 스크롤 이동
document.addEventListener("DOMContentLoaded", function () {
	const params = new URLSearchParams(window.location.search);
	const scrollToId = params.get("scrollTo");
	if (scrollToId) {
		setTimeout(function () {
			const targetElement = document.getElementById(scrollToId);
			const targetOffset = $(targetElement).offset().top;
			if (targetElement) {
				targetElement.scrollIntoView({
					behavior: "smooth" // 부드러운 스크롤
				}); 
			}
		}, 1600);
	}

});



// Publications 더보기 버튼
$("#publicatons_more").on("click", function () {
	let item = $(".publicatons_wrap .publicatons_sec3 .sec3_cont > .item");
	let hiddenItems = item.filter(":hidden");
	let itemsToShow = 10;
	if ($(window).width() <= 1024) {
		itemsToShow = 5;
	}
	hiddenItems.slice(0, itemsToShow).css("display", "flex");
	if (hiddenItems.length <= itemsToShow) {
		$("#publicatons_more").hide();
	}
});


// Boards 더보기 버튼(News)
$("#boards_more1").on("click", function () {
	let item = $(".boards_wrap .boards_sec2 .sec2_cont > .item");
	let hiddenItems = item.filter(":hidden");
	let itemsToShow = 4;
	hiddenItems.slice(0, itemsToShow).css("display", "flex");
	if (hiddenItems.length <= itemsToShow) {
		$("#boards_more1").hide();
	}
});


// Boards 더보기 버튼(Gallery)
$("#boards_more2").on("click", function () {
	let item = $(".boards_wrap .boards_sec4 .sec4_cont > .item");
	let hiddenItems = item.filter(":hidden");
	let itemsToShow = 3;
	if ($(window).width() <= 1150) {
		itemsToShow = 4;
	}
	if ($(window).width() <= 599) {
		itemsToShow = 3;
	}
	hiddenItems.slice(0, itemsToShow).css("display", "flex");
	if (hiddenItems.length <= itemsToShow) {
		$("#boards_more2").hide();
	}
});



$(function () {
	let lastScrollTop = 0;
	let delta = 5;
	let nav = $('#articleView_nav');
	let navItem = $('#articleView_nav .nav_link');

	if (nav.length > 0) {
		let navTop = nav.offset().top;

		linkActive();

		navItem.click(function (e) {
			e.preventDefault();
			let target = $(this).attr("href");
			let offset = $(target).offset().top;
			$('html, body').animate({
				scrollTop: offset + 10
			});

			setTimeout(function () {
				navItem.removeClass('on');
				$(this).addClass('on');
			}, 500);

		});

		$(window).scroll(function () {
			hasScrolled();
		});

		function hasScrolled() {
			let st = $(this).scrollTop();

			if (Math.abs(lastScrollTop - st) <= delta)
				return;

			if (st > navTop) {
				$("#articleView_nav").addClass("sticky");
				$('#articleView_nav .nav_link.link1').removeClass('on');
			} else {
				$("#articleView_nav").removeClass("sticky");
				$('#articleView_nav .nav_link.link1').addClass('on');
			}

			lastScrollTop = st;
			linkActive();
		}

		function linkActive() {
			let sections = $('.articleView_wrap .articleView_sec2 .sec2_cont > .item');
			sections.each(function () {
				let scrollPosition = $(window).scrollTop();
				let sectionOffset = $(this).offset().top;
				let sectionId = $(this).attr('id');

				if (scrollPosition >= sectionOffset && scrollPosition < sectionOffset + $(this).height()) {
					$('#articleView_nav .nav_link').removeClass('on');
					$(`#articleView_nav .nav_link[href="#${sectionId}"]`).addClass('on');
				}
			});
		}
	}
});