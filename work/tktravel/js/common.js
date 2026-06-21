
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

// accordion function
(function (jQuery) {
	const lnbUI = {
		click: function (targetSelector, speed) {
			const self = this;
			const elements = jQuery(targetSelector);
			self.speed = speed || 400;

			elements.each(function () {
				if (jQuery(this).find('> ul').length === 0) {
					jQuery(this).addClass('noDepth');
				}
			});

			elements.on('click', '.acc_tit', function (event) {
				const clickedElement = jQuery(this);
				const clickedItem = clickedElement.parent();
				const nestedList = clickedElement.next();
				const accordionContainer = clickedElement.closest('.accordion');
				const isTypeB = accordionContainer.hasClass('typeB');
				const isTypeC = accordionContainer.hasClass('typeC');
				const isArrow = jQuery(event.target).hasClass('arrow');
				const isCheckbox = jQuery(event.target).is('input[type="checkbox"]');

				if (window.innerWidth <= 1080 && clickedItem.hasClass('menuitem')) return;


				if (isCheckbox) return;
				if (isTypeC && !isArrow) return;

				event.stopPropagation();

				if (!isTypeB && !isTypeC) {
					clickedItem.siblings().removeClass('show').find('ul').slideUp(self.speed);
				}

				if (nestedList.is(':visible')) {
					clickedItem.removeClass('show');
					nestedList.slideUp(self.speed);
				} else {
					clickedItem.addClass('show');
					nestedList.slideDown(self.speed);
				}
			});
		}
	};

	jQuery(function () {
		lnbUI.click('.accordion:not(.mob_acc) li', 400);

		if (window.innerWidth <= 1080) {
			lnbUI.click('.accordion.mob_acc li', 400);
		}
	});
})(jQuery);
$(document).ready(function () {
  $(".accordion.mob_acc li a.acc_tit").on("click", function (e) {
    if ($(window).width() <= 1080) {
      e.preventDefault();
    }
  });
});

// tab function
$(document).ready(function () {

	function activateTab(tabWrap, target) {
		let tabs = tabWrap.find(".tab_nav");
		let contents = tabWrap.find(".tab_cont");
		let idx = tabs.index(target);

		tabs.removeClass("on");
		target.addClass("on");
		contents.removeClass("on");
		contents.eq(idx).addClass("on");
	}

	$(".tab_wrap").each(function () {
		let tabWrap = $(this);

		if ($(window).width() >= 1080 && tabWrap.hasClass("hover_type")) {
			tabWrap.find(".tab_nav").hover(function () {
				activateTab(tabWrap, $(this));
			});
		} else {
			tabWrap.find(".tab_nav").click(function () {
				activateTab(tabWrap, $(this));
			});
		}
	});
});

// tab swiper
$(document).ready(function () {
	const index = parseInt($('.swiper.tab_swiper').attr('data-index'), 10) || 0;

	const tab_default_swiper = new Swiper('.tab_swiper:not(.tab_round_swiper)', {
		observer: true,
		observeParents: true,
		slidesPerView: 'auto',
		speed: 500,
		initialSlide: index,
	})

	const tab_round_swiper = new Swiper('.tab_swiper.tab_round_swiper', {
		observer: true,
		observeParents: true,
		slidesPerView: 'auto',
		spaceBetween: 10,
		speed: 500,
		initialSlide: index,
		breakpoints: {
			1080: {
				spaceBetween: 12,
			},
		},
	})
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
			showOtherMonths: true,
			yearSuffix: "년"
		});

		const today = new Date();
		const year = today.getFullYear();
		const month = String(today.getMonth() + 1).padStart(2, '0');
		const day = String(today.getDate()).padStart(2, '0');
		const formatted = `${year}-${month}-${day}`;
		$(".datepicker.today").attr("placeholder", formatted);

		$(".datepicker").datepicker({
			// maxDate: 'today'
		});
	}
});

// modal
$(document).ready(function () {
	$(".modal .modal_close").click(function () {
		$("body").removeClass("hidden")
		$("body").removeClass("modal_open")
		$(".modal").removeClass("show")
	})
});
$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$("body").removeClass("modal_open")
		$(".modal").removeClass("show")
	}
});

// popup
$(document).ready(function () {
	$(".popup .pop_close").click(function () {
		$("body").removeClass("pop_open")
		$(this).closest(".popup").removeClass("show")
	})
})
$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0) {		
		$("body").removeClass("pop_open")
		$(this).closest(".popup").removeClass("show")
	}
});

// multi range
$(".range_box").each(function () {
	const rangeBox = $(this);

	const inputLeft = rangeBox.find("input[type=range]").first();
	const inputRight = rangeBox.find("input[type=range]").last();

	const thumbLeft = rangeBox.find(".thumb_left");
	const thumbRight = rangeBox.find(".thumb_right");
	const rangeFill = rangeBox.find(".range");

	const label_min = rangeBox.find(".label_range .min");
	const label_max = rangeBox.find(".label_range .max");

	const rangeMin = Number(inputLeft.attr("min"));
	const rangeMax = Number(inputLeft.attr("max"));

	if (!inputLeft.val()) inputLeft.val(rangeMin);
	if (!inputRight.val()) inputRight.val(rangeMax);

	const updateLabel = () => {
		label_min.text(Number(inputLeft.val()).toLocaleString());
		label_max.text(Number(inputRight.val()).toLocaleString());
	};

	const setLeftValue = () => {
		let left = Number(inputLeft.val());
		let right = Number(inputRight.val());

		// 겹침 완전 허용 → left > right 일 때만 막기
		if (left > right) {
			left = right;
			inputLeft.val(left);
		}

		const percent = ((left - rangeMin) / (rangeMax - rangeMin)) * 100;

		thumbLeft.css("left", percent + "%");
		rangeFill.css("left", percent + "%");

		updateLabel();
	};

	const setRightValue = () => {
		let left = Number(inputLeft.val());
		let right = Number(inputRight.val());

		// 겹침 완전 허용 → right < left 일 때만 막기
		if (right < left) {
			right = left;
			inputRight.val(right);
		}

		const percent = ((right - rangeMin) / (rangeMax - rangeMin)) * 100;

		thumbRight.css("right", 100 - percent + "%");
		rangeFill.css("right", 100 - percent + "%");

		updateLabel();
	};

	setLeftValue();
	setRightValue();

	inputLeft.on("input", setLeftValue);
	inputRight.on("input", setRightValue);
});

// breadcrumb
$(document).ready(function () {	
    $('.breadcrumb .cate_btn').on('click', function (e) {
        e.stopPropagation();
        const box = $(this).closest('.catebox');
        if (box.hasClass('show')) {
            $("body").removeClass('pop_open');
            box.removeClass('show');
            return;
        }		
        $('.catebox').not(box).removeClass('show');		
        $("body").addClass('pop_open');
        box.addClass('show');
    });
	
    $('.cate_popup').on('click', function (e) {
        e.stopPropagation();
    });
	
    $(document).on('click', function () {
		$("body").removeClass('pop_open');
        $('.catebox').removeClass('show');
    });

});



/* header */
// search button
$(document).ready(function () {
    $(".header .input_box_sch .input_text").on("click", function (e) {
        e.stopPropagation();

        const input = $(this);
        const schBox = input.closest(".schbox");
        const popup = schBox.find(".search_popup");

        input.addClass("active");
        popup.addClass("show");

        // 다른 검색 팝업 닫기
        $(".schbox .search_popup").not(popup).removeClass("show");
        $(".schbox .input_text").not(input).removeClass("active");
    });

    // 외부 클릭 시 팝업 닫기
    $(document).on("click", function (e) {
        if ($(e.target).closest(".schbox").length === 0) {
            $(".schbox .search_popup").removeClass("show");
            $(".schbox .input_text").removeClass("active");
        }
    });
});

// language button
$(document).ready(function () {
	$(".lang_selbtn").on("click", function (e) {
		e.stopPropagation();

		const selbtn = $(this);
		const langBox = selbtn.closest(".lang_box");
		const popup = langBox.find(".lang_popup");
		const body = $("body");

		const isOpen = popup.hasClass("open");

		$(".lang_popup").removeClass("open");
		$(".lang_selbtn").removeClass("active");

		if (!isOpen) {
			selbtn.addClass("active");
			popup.addClass("open");
			body.addClass("lang_open");
		}
	});

	$(".lang_box .lang_popup .item").on("click", function (e) {
		e.stopPropagation(); 

		const item = $(this);
		const popup = item.closest(".lang_popup");
		
		popup.find(".item").removeClass("active");
		item.addClass("active");

		const iconClass = item.find(".icon").attr("class");
		const txt = item.find(".txt").text();
		$(".lang_selbtn").find(".icon").attr("class", iconClass);
		$(".lang_selbtn").find(".txt").text(txt);


		$(".lang_popup").removeClass("open");
		$(".lang_selbtn").removeClass("active");
		$("body").removeClass("lang_open");
	});

	$(document).on("click", function (e) {
		if ($(e.target).closest(".lang_box").length === 0) {
			$(".lang_selbtn").removeClass("active");
			$(".lang_popup").removeClass("open");
			$("body").removeClass("lang_open");
		}
	});
});



/* navbox */
const nav_menu_swiper = new Swiper('.navbox .nav_menu', {
	observer: true, 	
	observeParents: true, 
	slidesPerView: 'auto',
	speed: 500,
})

// pc navbox button 
$(document).ready(function () {
	$(".navbox .nav_menu .menu").on("click", function () {
		$(".navbox").toggleClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(window).width() > 1080) {
		if ($(".navbox .nav_menubox").has(e.target).length === 0) {
			$(".navbox").removeClass("open");
		}
	}
});

// mobile navbox button
$(document).ready(function () {
  $(".header .menu_open").on("click", function () {
    if ($("body").hasClass("menu")) {
      $("body").removeClass("menu");
      $(".navbox").removeClass("open");
      $(".nav_menubox").removeClass("open");
    } else {
      $("body").addClass("menu");
      $(".navbox").addClass("open");
      $(".nav_menubox").addClass("open");
    }
  });
});


// mobile profile popup
function profile_popup() {
	$("#profile_popup").addClass('show');
}
$(document).ready(function () {
	$('#profile_popup #profile_btn').on('click', function () {
		$('#profile_input').click();
	});

	$('#profile_popup #profile_input').on('change', function () {
		const file = this.files[0];
		if (!file) return;

		const reader = new FileReader();
		reader.onload = function (e) {
			$('#profile_preview').attr('src', e.target.result);
		};
		reader.readAsDataURL(file);
	});

	$('#profile_popup .change_btn').on('click', function () {
		const btn = $(this);
		const input = btn.closest('.cont_cont').find('.input_text');

		if (btn.text() === '변경') {
			input.addClass('focus')
			input.prop('readonly', false).focus();
			btn.text('수정');
		}
		else {
			input.removeClass('focus')
			input.prop('readonly', true);
			btn.text('변경');
		}
	});

});

// mobile search popup
$(document).ready(function () {
	$(".mob_nav .search_open").on("click", function () {
		$("body").addClass("menu");
		$(".header .h_left .schbox").addClass("show");
	});
	$(".header .h_left .schbox .search_close").on("click", function () {
		$("body").removeClass("menu");
		$(".header .h_left .schbox").removeClass("show");
	});
});

/* mobile side menu (수정필요) */
$(document).ready(function () {
  $(".side_menu .side_menulist .menuitem .acc_tit").on("click", function (e) {
    if ($(window).width() <= 1080) {
      const currentItem = $(this).closest(".menuitem");

      if (currentItem.hasClass("show")) {
        currentItem.removeClass("show"); 
      } else {
        $(".side_menu .side_menulist .menuitem").removeClass("show"); 
        currentItem.addClass("show");
      }
    }
  });
});



/* fixed nav */
// top button
$(document).ready(function () {
	$('.fixed_nav .top_btn').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
});



/* footer */
// board swiper
document.querySelectorAll('.footer .f_top .swiperbox').forEach(function (el) {
	new Swiper(el, {
		observer: true,
		observeParents: true,
		direction: 'vertical',
		spaceBetween: 10,
		speed: 500,
		loop:true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
	});
});



/* 메인 */
// main popup
const main_popup_swiper = new Swiper('.main_popup_swiper', {
	observer: true,
	observeParents: true,
	loop: true,
	speed:500,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.main_popup_swiper .paging',
		clickable: true,
	},
})

// main section1
// 수동 복제
function cloneSlides(selector, multiply = 3) {
	const container = document.querySelector(selector);
	if (!container) return;

	const wrapper = container.querySelector('.swiper-wrapper');
	const slides = Array.from(wrapper.children)
		.filter(slide => !slide.hasAttribute('data-clone'));

	const originalCount = slides.length;
	const cloneCount = originalCount * (multiply - 1);

	for (let i = 0; i < cloneCount; i++) {
		const clone = slides[i % originalCount].cloneNode(true);
		clone.setAttribute('data-clone', 'true');
		wrapper.appendChild(clone);
	}

	return originalCount; // 원본 개수 반환
}
function renderPagination(swiper, originalCount) {
	const fixedCurrent = (swiper.realIndex % originalCount) + 1;

	const currentStr = ('0' + fixedCurrent).slice(-2);
	const totalStr = ('0' + originalCount).slice(-2);

	return `<span class="current">${currentStr}</span> / <span class="total">${totalStr}</span>`;
}
function initBullets(total) {
    const paging = document.querySelector('.ms1 .paging');
    let html = '';

    for (let i = 1; i <= total; i++) {
        html += `<span class="swiper-pagination-bullet" data-index="${i}"></span>`;
    }
    paging.innerHTML = html;
}
function updateBullets(swiper, total) {
    const bullets = document.querySelectorAll('.ms1 .paging .swiper-pagination-bullet');
    const current = (swiper.realIndex % total) + 1;

    bullets.forEach((b, i) => {
        b.classList.toggle('swiper-pagination-bullet-active', (i + 1) === current);
    });
}
// 260621 수정작업
const originalMS1 = cloneSlides('.ms1_swiper', 3);
const ms1_swiper = new Swiper('.ms1_swiper', {
    observer: true,
    observeParents: true,
    speed: 500,
    loop: true,
    centeredSlides: true,
    spaceBetween: 20,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    // 추가
    pagination: {
        el: '.ms1 .paging',
        type: 'bullets',
        clickable: true,
    },
    navigation: {
        nextEl: '.ms1 .next_btn',
        prevEl: '.ms1 .prev_btn',
    },
    on: {
        init(swiper) {
            initBullets(originalMS1);
            updateBullets(swiper, originalMS1);
            applyBreakpoint(swiper);
        },
        slideChange(swiper) {
            updateBullets(swiper, originalMS1);
        },
        resize(swiper) {
            applyBreakpoint(swiper);
        }
    },
});
function applyBreakpoint(swiper) {
    const w = swiper.el.offsetWidth;

    if (w >= 1080) {
        swiper.params.slidesPerView = 'auto';
        swiper.params.spaceBetween = 40;
        swiper.params.pagination.type = 'custom';
        swiper.params.pagination.renderCustom = function(sw) {
            return renderPagination(sw, originalMS1);
        };
        swiper.update();
        swiper.pagination.init();
        swiper.pagination.render();
        swiper.pagination.update();
    } else {
        swiper.params.slidesPerView = 1;
        swiper.params.spaceBetween = 20;
        swiper.params.pagination.type = 'bullets';
        swiper.params.pagination.renderCustom = undefined;
        swiper.update();
        swiper.pagination.init();
        swiper.pagination.render();
        swiper.pagination.update();
        // bullets 덮어쓰기 방지
        initBullets(originalMS1);
        updateBullets(swiper, originalMS1);
    }
}

// main section3
const ms2_prd_swiper = new Swiper('.ms2_prd_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 1,
	spaceBetween: 20,
	breakpoints: {
		1080: {
			slidesPerView: 'auto',
			spaceBetween: 40,
		},
	},
});

// main product
$('.prd_slidebox').each(function() {
  const el = this;
  const swiperEl = $(el).find('.prd_swiper:not(.ver2)')[0];
  const nextBtn = $(el).find('.next_btn')[0];
  const prevBtn = $(el).find('.prev_btn')[0];
  const swiperEl2 = $(el).find('.prd_swiper.ver2')[0];
  const scrollbar = $(el).find('.scrollbar')[0];

  const prd_swiper = new Swiper(swiperEl, {
    observer: true,
    observeParents: true,
    speed: 500,
	slidesPerView: 'auto',
    spaceBetween: 12,
    navigation: {
      nextEl: nextBtn,
      prevEl: prevBtn,
    },
    breakpoints: {
      1080: {
        spaceBetween: 20
      },
    }
  });

  const prd_swiper2 = new Swiper(swiperEl2, {
    observer: true,
    observeParents: true,
    speed: 500,
	slidesPerView: 'auto',
    spaceBetween: 12,
	scrollbar: {
		el: scrollbar,
		draggable: true,
	},
    breakpoints: {
      1080: {
        spaceBetween: 20
      },
    }
  });
});
$('.prd_swiper .item .imgbox .wish_btn').on('click', function (e) {
	e.preventDefault(); 
    e.stopPropagation();
    $(this).toggleClass('on');
});

// main banner
const m_banner_swiper = new Swiper('.m_banner_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	spaceBetween: 12,
	speed: 500,
	breakpoints: {
		1080: {
			spaceBetween: 30,
		},
	},
})

// main section13
const ms13_swiper = new Swiper('.ms13_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	// 260408 수정작업
	// loop: true,
	slidesPerView: 'auto',
	spaceBetween: 20,		
	pagination: {
		el: '.ms13_swiper .paging',
		clickable: true,
	},
	// 260408 수정작업
    navigation: {
      nextEl: ".ms13 .controls .next_btn",
      prevEl: ".ms13 .controls .prev_btn",
    },
	breakpoints: {
		1080: {
			slidesPerView: 3,
		},
	},
});

// main section14
$('.ms14 .tab_cont').each(function() {
  const el = this;
  const swiperEl = $(el).find('.ms14_swiper')[0];

  const ms14_swiper = new Swiper(swiperEl, {
    observer: true,
	observeParents: true,
	direction: 'horizontal',
	speed: 500,
	loop: true,
	slidesPerView: 'auto',
	spaceBetween: 24,	
	breakpoints: {
		1080: {
			direction: 'vertical',
			spaceBetween: 30,
		},
	},
  });
});

// main section15
const originalMS15 = cloneSlides('.ms15_swiper', 3);
const ms15_swiper = new Swiper('.ms15_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	loop: true,
	centeredSlides: true,
	slidesPerView: 1,
	spaceBetween: 20,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},	
	breakpoints: {
		1080: {
			speed: 6000,
			slidesPerView: 'auto',
			spaceBetween: 24,
			allowTouchMove: false,
			autoplay: {
				delay: 0,
				disableOnInteraction: false,
			},
		},
	},
});	

// main event
const m_event_swiper = new Swiper('.m_event_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	loop: true,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.m_event_swiper .paging',
		type: 'custom',
		clickable: true,
		renderCustom: function (swiper, current, total) {
			return '<span class="current">' + ('0' + current).slice(-2) + '</span>' + ' / ' + '<span class="total">' + ('0' + total).slice(-2) + '</span>';
		}
	},
})

// EVENT 특가 popup
function event_popup() {
	$("body").addClass('hidden');
	$("#event_popup").addClass('show');
}



/* 제품 목록 */
// product filter
$(document).ready(function () {

    $(".select_box.filter_ver").each(function () {
        const box = $(this);
        const accTit = box.find(".select .txt");
        const accHead = box.find(".select");

        const placeholder = accHead.data("placeholder") || "선택하세요";
        const textAllSelected = "전부 선택됨";

        const checkboxes = box.find("input[type=checkbox]");
        const allCheck = box.find(".all_check").prev("input[type=checkbox]");

        function updateCount() {
            const normalChecks = checkboxes.not(allCheck);
            const checkedList = normalChecks.filter(":checked");
            const count = checkedList.length;
			
            if (count === normalChecks.length) {
                allCheck.prop("checked", true);
            } else {
                allCheck.prop("checked", false);
            }
			
            if (count === normalChecks.length && count > 0) {
                accTit.text(textAllSelected);
                accHead.addClass("selected");
                return;
            }

            if (count > 0) {
                accTit.text(count + "개 선택중");
                accHead.addClass("selected");
            } else {
                accTit.text(placeholder);
                accHead.removeClass("selected");
            }
        }
		
        allCheck.on("change", function () {
            const isChecked = $(this).is(":checked");
            checkboxes.not(allCheck).prop("checked", isChecked);
            updateCount();
        });
		
        checkboxes.not(allCheck).on("change", updateCount);

        updateCount();
    });
});

// wish button
$('.prd_listbox .item .txtbox .wish_btn').on('click', function (e) {
	e.preventDefault(); 
    e.stopPropagation();
    $(this).toggleClass('on');
});

// schedule popup
$(document).ready(function () {
	$(".prd_listbox .item .schedule_btn").on("click", function (e) {
		e.preventDefault(); 
    	e.stopPropagation();
		$("body").addClass('hidden');
		$("#schedule_popup").addClass('show');
	});
});

// 할인호텔 날짜선택 popup
function roomDate_popup() {
	$("body").addClass('hidden');
	$("body").addClass('modal_open');
	$("#roomDate_popup").addClass('show');
}
// 할인호텔 날짜선택 popup period calender (기간선택만 구현)
$(document).ready(function () {
	let checkIn = null;
	let checkOut = null;

	function getDateObj(dateEl) {
		const cal = dateEl.closest(".calender");
		const selects = cal.find(".date_select");
		const y = Number(selects.eq(0).val());
		const m = Number(selects.eq(1).val());
		const d = Number(dateEl.find(".num").text());
		return new Date(y, m - 1, d);
	}

	function clearAll() {
		$(".calender_wrap .date").removeClass("check_in check_out period selected");
	}

	function markRange() {
		$(".calender_wrap .calender").each(function () {
			const cal = $(this);
			const selects = cal.find(".date_select");
			const y = Number(selects.eq(0).val());
			const m = Number(selects.eq(1).val());

			cal.find(".date").each(function () {
				const item = $(this);
				if (item.hasClass("hide")) return;

				const d = Number(item.find(".num").text());
				const cur = new Date(y, m - 1, d);

				if (cur.getTime() === checkIn.getTime()) {
					item.addClass("check_in selected");
				}
				if (checkOut && cur.getTime() === checkOut.getTime()) {
					item.addClass("check_out selected");
				}
				if (checkOut && cur > checkIn && cur < checkOut) {
					item.addClass("period");
				}
			});
		});
	}

	$(document).on("click", ".date_popup .calender_wrap .date:not(.hide)", function () {
		const el = $(this);
		const pick = getDateObj(el);

		if (!checkIn || (checkIn && checkOut)) {
			checkIn = pick;
			checkOut = null;
			clearAll();
			markRange();
			return;
		}

		if (!checkOut) {
			if (pick < checkIn) {
				checkOut = checkIn;
				checkIn = pick;
			} else {
				checkOut = pick;
			}
			clearAll();
			markRange();
		}
	});
});

// 할인호텔 객실및인원수 popup
function roomOption_popup() {
	$("body").addClass('hidden');
	$("body").addClass('modal_open');
	$("#roomOption_popup").addClass('show');
}

// 수량조절 button
$(document).ready(function () {
	$(".control_box .input_plus").on("click", function () {
		const input = $(this).siblings('.input_count');
		let value = parseInt(input.val(), 10);
		if (isNaN(value)) value = 0;
		input.val(value + 1);
	});

	$(".control_box .input_minus").on("click", function () {
	const input = $(this).siblings('.input_count');
		let value = parseInt(input.val(), 10);
		if (isNaN(value)) value = 0;
		const isRoom = $(this).closest('.input_item').find('.label_text').text().includes('객실');
		const min = isRoom ? 1 : 0;
		if (value > min) {
			input.val(value - 1);
		}
	});
});

// mobile filter button
$(document).ready(function () {
	$(".pr_sec.list .mob_filter_btn").on("click", function () {
		$("body").addClass('filter_open');
		$(".pr_sec.list .pr_filter").addClass('show');
	});
});
$(document).mouseup(function (e) {
	if ($(".pr_sec.list .pr_filter").has(e.target).length === 0) {		
		$("body").removeClass('filter_open');
		$(".pr_sec.list .pr_filter").removeClass("show")
	}
});



/* 제품 상세 */
// product gallery popup
function gallery_popup() {
	$("body").addClass('hidden');
	$("body").addClass('modal_open');
	$("#gallery_popup").addClass('show');
}
const gall_photo_thum = new Swiper('.gall_photo_thum', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 10,
	breakpoints: {
		1080: {
			spaceBetween: 8,
		},
	},
});
const gall_photo_list = new Swiper('.gall_photo_list', {
	observer: true,
	observeParents: true,
	speed: 500,
	thumbs: {
		swiper: gall_photo_thum
	},
    navigation: {
      nextEl: ".gall_photo_list .next_btn",
      prevEl: ".gall_photo_list .prev_btn",
    },
});

// tab nav active
$(function () {
  const tabNavs = $(".pr_sec.view .tab_nav");
  const sections = $(".pr_sec.view .vc_sec");

  function onScroll() {
    const scrollPos = $(window).scrollTop() + 200;

    sections.each(function (i) {
      const sectionTop = $(this).offset().top;
      const sectionBottom = sectionTop + $(this).outerHeight();

      if (scrollPos >= sectionTop && scrollPos < sectionBottom) {
        tabNavs.removeClass("on");
        tabNavs.eq(i).addClass("on");
        return false;
      }
    });
  }
  $(window).on("scroll", onScroll);
  onScroll();
});

// date swiper
$(document).ready(function () {
    const swiperEl = $('.swiper.date_swiper');
    const todayString = swiperEl.attr('data-today');
    let todayDate = 1;

    if (todayString) {
        todayDate = parseInt(todayString.split('-')[2], 10);
    }

    const slides = swiperEl.find('.swiper-slide');
    let todayIndex = 0;

    slides.each(function (i) {
        const num = parseInt($(this).find('.num').text(), 10);
        if (num === todayDate) {
            $(this).addClass('today').addClass('selected');
            todayIndex = i;
        }
    });

    const date_swiper = new Swiper('.date_swiper', {
        observer: true,
        observeParents: true,
        slidesPerView: 'auto',
		spaceBetween: 8,
        speed: 500,
        initialSlide: todayIndex,
        breakpoints: {
            1080: {
                spaceBetween: 0
            }
        }
    });
	
	slides.on('click', function () {
        slides.removeClass('selected');
        $(this).addClass('selected');
    });
});
$(document).ready(function () {
	$(".select_datebox .fulldate_btn").on("click", function () {
		const btn = $(this)
		const wrap = $(this).closest(".select_datebox").siblings(".calender_wrap");

		btn.toggleClass('active');
		wrap.toggleClass('show');

		const todayStr = wrap.data('today');
		if (!todayStr) return;

		const parts = todayStr.split('-');
		const tYear = Number(parts[0]);
		const tMonth = Number(parts[1]);
		const tDay = Number(parts[2]);

		wrap.find('.calender').each(function () {
			const cal = $(this);

			const year = Number(cal.find('.date_select').eq(0).val());
			const month = Number(cal.find('.date_select').eq(1).val());

			cal.find('.date').removeClass('today selected');

			if (year !== tYear || month !== tMonth) return;

			cal.find('.date').each(function () {
				const num = Number($(this).find('.num').text());
				if (num === tDay) {
					$(this).addClass('today selected');
				}
			});
		});
	});
});

// calender select
$(function () {
  $('.pr_sec.view .calender').on('click', '.date:not(.hide)', function () {
    $('.calender .date').removeClass('selected');
    $(this).addClass('selected');
  });
});

// room swiper
$('.select_roombox .item').each(function() {
  const el = this;
  const swiperEl = $(el).find('.room_swiper')[0];

  const room_swiper = new Swiper(swiperEl, {
    observer: true,
    observeParents: true,
    speed: 500,
  });
});

// room optoin
$(document).ready(function () {
	$(".pr_sec.view .vc_sec_option .select_roombox .room_info .opt_btn").on("click", function () {
		const wrap = $(this).closest(".item"); 
		wrap.find(".room_option").addClass("show");
	});

	$(".pr_sec.view .vc_sec_option .select_roombox .room_close_btn").on("click", function () {
		$(this).siblings(".room_option").removeClass("show");
	});

	$(document).on('change', '.option_select select', function () {
		let item = $(this).closest('.pr_sec.view .vc_sec_option .select_roombox .item');
		let container = item.closest('.pr_sec.view .vc_sec_option .select_roombox');

		container.find('.item').removeClass('selected');

		if ($(this).val() !== '') {
			item.addClass('selected');
			$(".pr_sec.view .pr_result").addClass("selected");
		}
	});
});

// detail more veiw button 
$(document).ready(function () {
	$(".pr_sec.view .vc_sec_detail .vc_box1 .view_more").on("click", function () {
		const contbox = $('.pr_sec.view .vc_sec_detail .vc_box1 .vc_contbox');
		const txt = $(this).find('.txt');

		contbox.toggleClass('show');

		if (txt.text() === '더보기') {
			txt.text('접기');
		} else {
			txt.text('더보기');
		}
	});
	
	$(".pr_sec.view .vc_sec_detail .vc_box2 .descmore").on("click", function () {
		const contbox = $(this).closest(".descbox");
		const txt = $(this).find('.txt');

		contbox.toggleClass('show');

		if (txt.text() === '더보기') {
			txt.text('접기');
		} else {
			txt.text('더보기');
		}
	});
	
	$(".pr_sec.view .vc_sec_review .vc_box1 .review_more").on("click", function () {
		const contbox = $(this).closest(".txtbox");
		const txt = $(this).find('.txt');

		contbox.toggleClass('show');

		if (txt.text() === '더보기') {
			txt.text('접기');
		} else {
			txt.text('더보기');
		}
	});
});

// review write popup
function rv_write_popup() {
	$("body").addClass('hidden');
	$("body").addClass('modal_open');
	$("#rv_write_popup").addClass('show');
}
$(function () {
  const fileInput = $('#rv_write_popup #rv_file');
  const fileBox = $('#rv_write_popup .file_box');
  const fileNameDisplay = $('#rv_write_popup .label_file .name');
  const fileBtn = $('#rv_write_popup .file_btn');
  const deleteBtn = $('#rv_write_popup .label_file .delete');

  fileInput.on('change', function () {
    const files = this.files;

    if (files.length > 0) {
      const names = Array.from(files).map(f => f.name).join(', ');
      fileNameDisplay.text(names);
      fileBox.addClass('attached');
    } else {
      fileNameDisplay.text('파일을 선택해주세요');
      fileBox.removeClass('attached');
    }
  });

  fileBtn.on('click', function () {
    fileInput.trigger('click');
  });

  deleteBtn.on('click', function (e) {
    e.preventDefault();
    fileInput.val('');  
    fileNameDisplay.text('파일을 선택해주세요');
    fileBox.removeClass('attached');
  });
});

// review photo 
const rv_photo_swiper = new Swiper('.rv_photo_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 10,
});
$(document).ready(function () {
	$(".rv_photo_swiper .swiper-slide").click(function () {
		$("body").addClass('hidden');
		$("body").addClass('modal_open');
		$('#rv_photo_popup').addClass('show');
	})
});
const rv_photo_thum = new Swiper('.rv_photo_thum', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 10,
	breakpoints: {
		1080: {
			spaceBetween: 8,
		},
	},
});
const rv_photo_list = new Swiper('.rv_photo_list', {
	observer: true,
	observeParents: true,
	speed: 500,
	thumbs: {
		swiper: rv_photo_thum
	},
    navigation: {
      nextEl: ".rv_photo_list .next_btn",
      prevEl: ".rv_photo_list .prev_btn",
    },
});

// wish button
$(document).ready(function () {
	$(".pr_sec.view .wish_btn").on("click", function () {
		$(this).toggleClass('on');
	});
});

// mobile detail option select
$(document).on("change", '.pr_sec.view .vc_sec_option input[name="prd_opt"]', function () {
	$(".pr_sec.view .pr_result").addClass("selected");
});

// mobile detail info popup
$(document).ready(function () {
	$(".pr_sec.view .pr_result .mob_side_box .opt_btn").on("click", function () {
		$("body").addClass('pr_side_open');
		$(".pr_sec.view .pr_result").addClass('show');
	});
});
$(document).mouseup(function (e) {
	if ($(".pr_sec.view .pr_result .side_box").has(e.target).length === 0) {
		$("body").removeClass('pr_side_open');
		$(".pr_sec.view .pr_result").removeClass("show");
	}
});

// mobile detail option popup
$(document).ready(function () {
	$(".pr_sec.view .pr_result .side_box .opt_btn").on("click", function () {
		$("body").addClass('hidden');
		$(".pr_sec.view .pr_result").removeClass("show");
		$("#detailOption_popup").addClass('show');
	});
});
$(function () {
  $('#detailOption_popup:not(.date_popup) .calender').on('click', '.date:not(.hide)', function () {
    $('.calender .date').removeClass('selected');
    $(this).addClass('selected');
  });
});



/* 예약하기 */
// detail info more button
$(document).ready(function() {
    $(".re_sec .re_sec_detail .more_btn").on("click", function() {
        const prdInfo = $(this).closest(".prd_info");
        prdInfo.toggleClass("hide"); 
    });
});

// vehicle select
const vhc_list = new Swiper('.vhc_list', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 24,
    navigation: {
      nextEl: ".vhc_listbox .next_btn",
      prevEl: ".vhc_listbox .prev_btn",
    },
	breakpoints: {
		1080: {
			spaceBetween: 30,
		},
	},
});

// payment select
$(document).ready(function() {
  $(".re_sec .re_sec_pay .paybox .payitem").on("click", function() {
    $(".re_sec .re_sec_pay .paybox .payitem").removeClass("on");
    $(this).addClass("on");
  });
});

// terms check
$(document).ready(function () {
  $("#allTerms").on("click", function () {
    const isChecked = $(this).is(':checked');
    $('input[name="terms"]').prop('checked', isChecked);
  });

  $('input[name="terms"]:not(#allTerms)').on("click", function () {
    const allChecked =
      $('input[name="terms"]:not(#allTerms)').length ===
      $('input[name="terms"]:not(#allTerms):checked').length;

    $('#allTerms').prop('checked', allChecked);
  });
});

// terms popup
function terms_popup() {
	$("body").addClass('hidden');
	$("#terms_popup").addClass('show');
}

// privacy popup
function privacy_popup() {
	$("body").addClass('hidden');
	$("#privacy_popup").addClass('show');
}

// refund popup
function refund_popup() {
	$("body").addClass('hidden');
	$("#refund_popup").addClass('show');
}

// mobile info popup
$(document).ready(function () {
	$(".re_sec .side_area .mob_side_box .reserve_btn").on("click", function () {
		$("body").addClass('re_side_open');
		$(".re_sec .side_area").addClass('show');
	});
});
$(document).mouseup(function (e) {
	if ($(".re_sec .side_area .side_box").has(e.target).length === 0 && $(".term_popup .modal_box").has(e.target).length === 0) {
		$("body").removeClass('re_side_open');
		$(".re_sec .side_area").removeClass("show");
	}
});



/* 출발 일정 확인 */
// 일정 날짜선택 popup
function scheduleDate_popup() {
	$("body").addClass('hidden');
	$("body").addClass('modal_open');
	$("#scheduleDate_popup").addClass('show');
}



/* 로그인 */
// input text show
$(document).ready(function () {
  $(".input_box_view").each(function () {
    const wrap = $(this); 
    wrap.find(".view_btn").on("click", function () {
      const btn = $(this);
      const input = wrap.find(".input_text");

      const currentType = input.attr("type");

      if (currentType === "password") {
        input.attr("type", "text");
        btn.addClass("on");
      } else {
        input.attr("type", "password");
        btn.removeClass("on");
      }
    });
  });
});



/* 마이페이지 */
// check button
$(document).ready(function () {
  $("#tbl_allChk").on("click", function () {
    const isChecked = $(this).is(':checked');
    $('input[name="tbl_chk"]').prop('checked', isChecked);
  });

  $('input[name="tbl_chk"]:not(#tbl_allChk)').on("click", function () {
    const allChecked =
      $('input[name="tbl_chk"]:not(#tbl_allChk)').length ===
      $('input[name="tbl_chk"]:not(#tbl_allChk):checked').length;

    $('#tbl_allChk').prop('checked', allChecked);
  });
});



/* 10 고객센터 */
// qna pwd popup
$(document).ready(function () {
	$(".tbl .secret_mode").click(function (e) {
		e.preventDefault(); 
		$("body").addClass('hidden');
		$('#qna_pwd_popup').addClass('show');
	})
});

// write file 
$(function () {
  $('.input_box_file').each(function () {
    const box = $(this);
    const input = box.find('.input_file');
    const label = box.find('.input_name');
    const text = label.find('.txt');
    const btn = box.find('.input_btn');
    const del = label.find('.delete');

    btn.on('click', function (e) {
      e.preventDefault();
      input.trigger('click');
    });

    label.on('click', function (e) {
      if ($(e.target).hasClass('delete')) return;
      e.preventDefault();
      input.trigger('click');
    });

    input.on('change', function () {
      const name = this.files.length ? this.files[0].name : '파일을 첨부해주세요';
      text.text(name);
      box.toggleClass('attached', this.files.length > 0);
    });

    del.on('click', function (e) {
      e.preventDefault();
      input.val('');
      text.text('파일을 첨부해주세요');
      box.removeClass('attached');
    });
  });
});



// 260120 추가작업
// 제품 상세 공유하기 팝업
$(document).ready(function () {
	$(".pr_sec.view .share_btn").click(function (e) {
		e.preventDefault(); 
		$("body").addClass('hidden');
		$("body").addClass('modal_open');
		$('#share_popup').addClass('show');
	})
});

$(document).ready(function () {
	$("#share_popup .copy_btn").on("click", function () {
		
		if (navigator.clipboard) {
			navigator.clipboard.writeText(window.location.href).then(function () {
				alert("URL이 복사되었습니다.");
			});
		} else {
			const temp = $("<input>");
			$("body").append(temp);
			temp.val(window.location.href).select();
			document.execCommand("copy");
			temp.remove();
			alert("URL이 복사되었습니다.");

			$("body").removeClass('hidden');
			$("body").removeClass('modal_open');
			$('#share_popup').removeClass('show');
		}

	});
});



// 260121 추가작업
// 효과 구현을 위해 임시 추가하였고 실제로는 상품로드 완료되면 동작하게 작업 
setTimeout(function () {
	$('.prd_listbox')
		.removeClass('is_loading')
}, 1000);

setTimeout(function () {
	$('.prd_slidebox')
		.removeClass('is_loading')
}, 1000);



//  260330 추가작업
// about history popup
function history_popup() {
	$("body").addClass('hidden');
	$("body").addClass('modal_open');
	$("#history_popup").addClass('show');
}


// 260416 수정작업
// currency button
$(document).ready(function () {
	$(".lang_selbtn").on("click", function (e) {
		e.stopPropagation();
		$(".currency_popup").removeClass("open");
	});

	$(".currency_selbtn").on("click", function (e) {
		e.stopPropagation();

		const selbtn = $(this);
		const currenBox = selbtn.closest(".currency_box");
		const popup = currenBox.find(".currency_popup");
		const body = $("body");

		const isOpen = popup.hasClass("open");

		$(".lang_popup").removeClass("open");
		$(".currency_popup").removeClass("open");
		$(".currency_selbtn").removeClass("active");

		if (!isOpen) {
			selbtn.addClass("active");
			popup.addClass("open");
			body.addClass("currency_open");
		}
	});

	$(".currency_box .currency_popup .item").on("click", function (e) {
		e.stopPropagation(); 

		const item = $(this);
		const popup = item.closest(".currency_popup");
		
		popup.find(".item").removeClass("active");
		item.addClass("active");

		const txt = item.find(".tit").text();
		$(".currency_selbtn").find(".txt").text(txt);

		$(".currency_popup").removeClass("open");
		$(".currency_selbtn").removeClass("active");
		$("body").removeClass("currency_open");
	});

	$(document).on("click", function (e) {
		if ($(e.target).closest(".currency_box").length === 0) {
			$(".currency_selbtn").removeClass("active");
			$(".currency_popup").removeClass("open");
			$("body").removeClass("currency_open");
		}
	});
});