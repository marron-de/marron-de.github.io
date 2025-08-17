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


// modal
$(document).on('click', '.modal .modal_close', function () {
    const modal = $(this).closest('.modal');
    if (modal.hasClass('only')) {
        modal.removeClass('show');
        if ($('.modal.show').length === 0) {
            $("body").removeClass("hidden");
        }
    } else {
        $("body").removeClass("hidden");
        $(".modal").removeClass("show");
    }
});

$(document).mouseup(function (e) {
    const targetOnlyModal = $(e.target).closest('.modal.only');
    if ($('.modal.only .modal_box').has(e.target).length === 0 && targetOnlyModal.length) {
        targetOnlyModal.removeClass('show');
        if ($('.modal.show').length === 0) {
            $("body").removeClass("hidden");
        }
    }

    const targetModal = $(e.target).closest('.modal:not(.only)');
    if ($('.modal:not(.only) .modal_box').has(e.target).length === 0 && targetModal.length) {
        $("body").removeClass("hidden");
        $(".modal:not(.only)").removeClass("show");
    }
});


// popup
$(document).on('click', '.popup .pop_close', function () {
    $(this).closest(".popup").removeClass("show");
});
$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0 ) {	
		$(".popup").removeClass("show")
	}
});


// calender popup
$(document).on("click", ".calender_btn", function (e) {
	const button = $(this);
	const popup = $(".calender_popup");
	const rect = button[0].getBoundingClientRect();
	
	popup.addClass("show");
	
	popup.css({
		position: "fixed",
		left: rect.left + "px",
		top: rect.bottom + "px", 
		zIndex: 9999
	});
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
// theme setting
function setTheme(theme) {
	document.body.setAttribute("data-theme", theme);
	localStorage.setItem("theme", theme);
	$(".darkmode_btn").removeClass("light dark").addClass(theme);
}
// darkmode button
$(document).ready(function () {
	setTheme(localStorage.getItem("theme") || "light");

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
    $(".header .gnb_title").removeClass("show");
    $(this).addClass("active");
    $(this).next(".gnb_sublist").addClass("show");
});
$(document).mouseup(function (e) {
	if ($(".header .gnb_sublist").has(e.target).length === 0 ) {		
		$(".header .gnb_title").removeClass("active");
		$(".header .gnb_sublist").removeClass("show");
	}
});


/* tab swiper */
$('.tab_swiper').each(function () {
  new Swiper(this, {
    observer: true,
    observeParents: true,
    speed: 500,
    slidesPerView: 'auto',
	spaceBetween: 20,
	breakpoints: { 
		1081: {
			spaceBetween: 16
		}, 
	},
  });
});


// input file
$(document).ready(function () {
    $('.input_file_box').each(function () {
        const box = $(this);
        const fileInput = box.find('.input_file');
        const fileSelectBtn = box.find('.fileSelect_btn');
        const fileLabel = box.find('.label_file');

		
        fileSelectBtn.on('click', function () {
            fileInput.click();
        });

		
        fileInput.on('change', function () {
            const files = this.files;
            if (files.length > 0) {
                const fileNames = Array.from(files).map(file => file.name).join(', ');
                fileLabel.text(fileNames).addClass('attached');
            } else {
                fileLabel.text('파일 업로드').removeClass('attached');
            }
        });
    });
});


// input color
$(document).on('click', '.colorchips .color', function () {
    const colorValue = $(this).data('color')
    const wrap = $(this).closest('.color_wrap')
    wrap.find('.input_color').val(colorValue)
})

