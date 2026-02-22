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


// header mobile navbox button 
function menu_open() {
	$("body").addClass("popup_hidden2");
	$(".header").addClass("open");
	$(".navbox").addClass("open");
}
function menu_close() {
	$("body").removeClass("popup_hidden2");
	$(".header").removeClass("open");
	$(".navbox").removeClass("open");
}
$(document).mouseup(function (e) {
	if ($(".navbox").has(e.target).length === 0) {
		$("body").removeClass("popup_hidden2");
		$(".header").removeClass("open");
		$(".navbox").removeClass("open");
	}
});


// accordion
(function ($) {
	const lnbUI = {
		click: function (target, speed) {
			let _self = this;
			_self.speed = speed || 400;

			$(target).each(function () {
				if (!$(this).find('> ul').length) {
					$(this).addClass('noDepth');
				}
			});

			$(document).on('click', target + ' .acc_tit', function (e) {
				e.stopPropagation();
				let $this = $(this),
					$depthTarget = $this.next(),
					$siblings = $this.parent().siblings();

				$this.parent('li').find('ul li').removeClass('show');
				$siblings.removeClass('show');
				$siblings.find('ul').slideUp(_self.speed);

				if ($depthTarget.is(':hidden')) {
					_self.activeOn($this);
					$depthTarget.slideDown(_self.speed);
				} else {
					$depthTarget.slideUp(_self.speed);
					_self.activeOff($this);
				}
			});
		},
		activeOff: function ($target) {
			$target.parent().removeClass('show');
		},
		activeOn: function ($target) {
			$target.parent().addClass('show');
		},
	};

	$(function () {
		lnbUI.click('.accordion li', 400);

		if ($(window).width() <= 1080) {
			lnbUI.click('.header .h_bottom .gnb li', 400);
		}
	});
}(jQuery));


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
	$("body").removeClass("popup_hidden");
    $(this).closest(".popup").removeClass("show");
});
$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0 ) {	
		$("body").removeClass("popup_hidden");
		$(".popup").removeClass("show")
	}
});
$(document).on('click', '.opt_box .opt_btn', function () {
	$("body").toggleClass("popup_hidden");
    $(this).closest(".opt_box").find(".popup.opt_popup").toggleClass("show");
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
	if ($(window).width() <= 1080) {
    	$("body").removeClass("hidden");	
		$(".layout").removeClass("mob_sideopen")
		$(".layout").removeClass("sideopen")
	}
});
function sidenav_button() {	
    $("body").addClass("hidden");
	$(".layout").addClass("mob_sideopen");
}
$(document).mouseup(function (e) {
	if ($(".sidenav").has(e.target).length === 0 ) {
    	$("body").removeClass("hidden");	
		$(".layout").removeClass("mob_sideopen")
	}
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
	document.body.classList.remove("lightmode", "darkmode");
	document.body.classList.add(theme + "mode");
	document.body.setAttribute("data-theme", theme);
	localStorage.setItem("theme", theme);
	$(".darkmode_btn, .mob_darkmode_btn")
		.removeClass("light dark")
		.addClass(theme);
}
// darkmode button
$(document).ready(function () {
	let savedTheme = localStorage.getItem("theme") || "light";
	setTheme(savedTheme);

	$(document).on("click", ".dropdown_popup .sel_btn", function () {
		setTheme($(this).val());
		$("#darkmode_popup").removeClass("show");
	});
});
// mobile darkmode button
function darkmode_toggle() {
	let currentTheme = localStorage.getItem("theme") || "light";
	let newTheme = currentTheme === "light" ? "dark" : "light";
	setTheme(newTheme);
}


// share popup
function share_popup() {
	$(".popup").removeClass("show");
	$("#share_popup").addClass("show");
	if ($(window).width() <= 1080) {
		$("body").addClass("popup_hidden");	
	}
}
// app popup
function app_popup() {
	$(".popup").removeClass("show");
	$("#app_popup").addClass("show");
	if ($(window).width() <= 1080) {
		$("body").addClass("popup_hidden");	
	}
}
// search popup
function search_popup() {
	$(".header").toggleClass("sch_open")
	$(".header .h_top .h_schbox").toggleClass("show");
}
$(document).mouseup(function (e) {
	const box = $(".header .h_top .h_schbox");
	const btn = $(".mob_search_btn");

	if (box.has(e.target).length === 0 && !btn.is(e.target) && btn.has(e.target).length === 0) {
		$(".header").removeClass("sch_open");
		box.removeClass("show");
	}
});
// alarm popup
function alarm_popup() {
	$(".popup").removeClass("show");
	$("#alarm_popup").addClass("show");
	if ($(window).width() <= 1080) {
		$("body").addClass("popup_hidden");	
	}
}
// profile popup
function profile_popup() {
	$(".popup").removeClass("show");
	$("#profile_popup").addClass("show");
	if ($(window).width() <= 1080) {
		$("body").addClass("popup_hidden");	
	}
}
// mobile fixnav button
function fixnav_button() {
	$(".header .h_top .h_sidebox .fixnav").toggleClass("collapsed");
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
$(document).ready(function () {
	const index = parseInt($('.swiper.tab_swiper').attr('data-index'), 10) || 0;

	const tab_swiper = new Swiper('.tab_swiper', {
		observer: true,
		observeParents: true,
		slidesPerView: 'auto',
		spaceBetween: 12,
		speed: 500,
		initialSlide: index,
		breakpoints: {
			1080: {
				spaceBetween: 16,
			},
		}
	})
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


// header title
$(function () {
	const wrap = document.getElementById("wrap");

	function setHeader() {
		const titleEl = document.querySelector(".header .h_title .page_title .tit");
		const iconEl = document.querySelector(".header .h_title .page_title .icon");

		if (wrap && titleEl && iconEl) {
			titleEl.textContent = wrap.dataset.title || "";
			iconEl.className = "ph-fill icon " + (wrap.dataset.icon || "");
			return true; 
		}
		return false;
	}

	if (!setHeader()) {
		const interval = setInterval(() => {
			if (setHeader()) clearInterval(interval);
		}, 100); 
	}
});


/* 250908 추가작업 */
$(document).on('click', '.mob_filter_wrap  .mob_search_open', function () {
    $(".mob_filter_wrap  .content_search").addClass("show");
});
$(document).on('click', '.mob_filter_wrap  .mob_search_close', function () {
    $(".mob_filter_wrap  .content_search").removeClass("show");
});


/* 250922 추가작업 */
/* workfloor tab */
$(document).ready(function () {
	const index_pc = parseInt($('.swiper.workfloor_tab_pc').attr('data-index'), 10) || 0;
	const workfloor_tab_pc = new Swiper('.workfloor_tab_pc', {
		observer: true,
		observeParents: true,
		slidesPerView: 'auto',
		speed: 500,
		initialSlide: index_pc,
	})

	const index_mob = parseInt($('.swiper.workfloor_tab_mob').attr('data-index'), 10) || 0;
	const workfloor_tab_mob = new Swiper('.workfloor_tab_mob', {
		observer: true,
		observeParents: true,
		slidesPerView: 'auto',
		speed: 500,
		initialSlide: index_mob,
	})
});


/* 251220 추가작업 */
// connect popup
function connect_popup() {
	$(".popup").removeClass("show");
	$("#connect_popup").addClass("show");
	if ($(window).width() <= 1080) {
		$("body").addClass("popup_hidden");	
	}
}


// 251224 수정작업
$(document).on('click', '.good_write_info .productInfoBox .productInfoAddBtn', function () {
    $(this).closest('.productInfoBox').addClass('show');
});

$(document).on('click', '.good_write_info .productInfoBox .productInfoSaveBtn', function () {
    $(this).closest('.productInfoBox').removeClass('show');
});


// 260127 추가작업
document.addEventListener('DOMContentLoaded', () => {
  const banners = document.querySelectorAll('.top_banner');

  banners.forEach(banner => {
    const input = banner.querySelector('.input');
    const preview = banner.querySelector('.preview');
    const labelTxt = banner.querySelector('.label .txt');
    const deleteBtn = banner.querySelector('.delete_btn');

    // 파일 선택 시
    input.addEventListener('change', () => {
      const file = input.files[0];
      if (!file) return;

      // 이미지 파일만 허용
      if (!file.type.startsWith('image/')) {
        alert('이미지 파일만 업로드 가능합니다.');
        input.value = '';
        return;
      }

      const reader = new FileReader();
      reader.onload = e => {
        preview.innerHTML = `<img src="${e.target.result}" class="img" alt="">`;
        banner.classList.add('attached');
        if (labelTxt) labelTxt.style.display = 'none';
      };
      reader.readAsDataURL(file);
    });

    // 삭제 버튼
    deleteBtn.addEventListener('click', () => {
      input.value = '';
      preview.innerHTML = '';
      banner.classList.remove('attached');
      if (labelTxt) labelTxt.style.display = '';
    });
  });
});



// 260223 수정작업
// 회원정보 hover시 팝업 노출
$(function () {
	if ($(window).width() > 1080) {
		$('.tbl_customer_info').on('mouseenter', function(){
			$(this).find('.member_info_popup').addClass('show');
		});

		$('.tbl_customer_info').on('mouseleave', function(){
			$(this).find('.member_info_popup').removeClass('show');
		});
	} else {
		$('.tbl_customer_info').on('click', function (e) {
			e.stopPropagation();
			$('.member_info_popup').removeClass('show');
			$(this).find('.member_info_popup').addClass('show');
		});
		
		$(document).on('click', function () {
			$('.member_info_popup').removeClass('show');
		});
	}
});

// 프로필 이미지 등록
$(document).ready(function() {
    $('#memberInfo_modal .profile_btn').on('click', function() {
        $('#profileFile').click();
    });

    $('#memberInfo_modal #profileFile').on('change', function(e) {
        const file = e.target.files[0];
        const $label = $(this).siblings('.label');

        if (file) {
            if (!file.type.match('image.*')) {
                alert('이미지 파일만 선택 가능합니다.');
                $(this).val(''); 
                return;
            }

            const reader = new FileReader();
            reader.onload = function(event) {
                const imgTag = `<img src="${event.target.result}" alt="미리보기" style="width:100%; height:100%; object-fit:cover;">`;
                $label.html(imgTag);
            };
            reader.readAsDataURL(file); // 파일을 읽어 Data URL로 변환
        }
    });
});

