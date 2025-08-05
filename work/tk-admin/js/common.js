/* common */

// layout
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1200;
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


// accordion
$(document).on('click', '.accordion .acc_tit', function (e) {
    e.stopPropagation();

    const target = $(this);
    const depthTarget = target.next();
    const parentLi = target.parent();
    const siblings = parentLi.siblings();

    parentLi.find('ul li').removeClass('show');
    siblings.removeClass('show');
    siblings.find('ul').slideUp(400);

    if (depthTarget.is(':hidden')) {
        parentLi.addClass('show');
        depthTarget.slideDown(400);
    } else {
        depthTarget.slideUp(400);
        parentLi.removeClass('show');
    }
});


// tab function
$(document).on('click', '.tab_wrap .tab_nav', function () {
    let clickedTab = $(this);
    let tabWrap = clickedTab.closest(".tab_wrap");
    let allTabs = tabWrap.find(".tab_nav");
    let allContents = tabWrap.find(".tab_cont");
    let idx = allTabs.index(clickedTab);

    allTabs.removeClass("on");
    clickedTab.addClass("on");
    allContents.removeClass("on");
    allContents.eq(idx).addClass("on");
});


// datepicker
$(document).ready(function () {
	if ($(".datepicker").length) {
		$.datepicker.setDefaults({
			closeText: "닫기",
			prevText: "이전달",
			nextText: "다음달",
			currentText: "오늘",
			monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
			monthNamesShort: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
			dayNames: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"],
			dayNamesShort: ["S", "M", "T", "W", "T", "F", "S"],
			dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
			weekHeader: "주",
			dateFormat: "yy-mm-dd",
			firstDay: 0,
			isRTL: false,
			showMonthAfterYear: true,
			yearSuffix: "년"
		});

		const today = new Date();
		const year = today.getFullYear();
		const month = String(today.getMonth() + 1).padStart(2, '0');
		const day = String(today.getDate()).padStart(2, '0');
		const formatted = `${year}-${month}-${day}`;
		$(".datepicker.today").attr("placeholder", formatted);

		$(".datepicker").datepicker({
			maxDate: 'today'
		});
	}
});


// modal
$(document).on('click', '.modal .modal_close', function () {
    $("body").removeClass("hidden");
    $(".modal").removeClass("show");
});
$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
	}
});


// popup
$(document).on('click', '.popup .pop_close', function () {
    $(this).closest(".popup").removeClass("show");
});
$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0 ) {		
		$("body").removeClass("popup");
		$(".popup").removeClass("show")
	}
});


// temp modal
$(document).on('click', '#temp_modal_btn1', function () {
    $("body").addClass("hidden");
    $("#temp_modal1").addClass("show");
});
$(document).on('click', '#temp_modal_btn2', function () {
    $("body").addClass("hidden");
    $("#temp_modal2").addClass("show");
});


// sidenav button
$(document).on('click', '.sidenav .menu_btn', function () {
    $(".layout").toggleClass("sideopen");
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
			$("#header").addClass("down")
		}

		if (st < navbarHeight) {
			$("#header").removeClass("down")
		}

		lastScrollTop = st; // 현재 멈춘 위치를 기준점으로 재설정
	}
})


// darkmode popup
function darkmode_popup() {
	$(".popup").removeClass("show");
	$("#darkmode_popup").addClass("show");
}
// 테마 설정 함수
function setTheme(theme) {
	document.body.setAttribute("data-theme", theme);
	localStorage.setItem("theme", theme);
	$(".darkmode_btn").removeClass("light dark").addClass(theme);
}

$(document).ready(function () {
	// 초기 테마 설정
	setTheme(localStorage.getItem("theme") || "light");

	// 테마 버튼 클릭
	$(document).on("click", ".sel_btn", function () {
		setTheme($(this).val());
		$("#darkmode_popup").removeClass("show");
	});
});


// alarm popup
function alarm_popup() {
	$(".popup").removeClass("show");
	$("#alarm_popup").addClass("show");
}

// share popup
function share_popup() {
	$(".popup").removeClass("show");
	$("#share_popup").addClass("show");
}

// app popup
function app_popup() {
	$(".popup").removeClass("show");
	$("#app_popup").addClass("show");
}

// profile popup
function profile_popup() {
	$(".popup").removeClass("show");
	$("#profile_popup").addClass("show");
}

// header submenu button
$(document).on('click', '.header .gnb_title', function () {
    $(".header .gnb_sublist").removeClass("show");
    $(this).next(".gnb_sublist").addClass("show");
});
$(document).mouseup(function (e) {
	if ($(".header .gnb_sublist").has(e.target).length === 0 ) {		
		$(".header .gnb_sublist").removeClass("show");
	}
});


/* menu swiper */
$('.menu_swiper').each(function () {
  new Swiper(this, {
    observer: true,
    observeParents: true,
    speed: 500,
    slidesPerView: 'auto',
  });
});
