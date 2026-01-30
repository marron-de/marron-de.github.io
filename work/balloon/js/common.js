
/* common */
// AOS
AOS.init({
	duration: 600,
	easing: "ease-out",
	// disable: 'tablet',
})
window.addEventListener('load', function () {
	AOS.refresh();
});

// layout
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1600;
    const maxWidth2 = 1280;
    const widthPercentage = 0.9;

    let calculatedWidth = windowWidth * widthPercentage;
    if (calculatedWidth > maxWidth) {
        calculatedWidth = maxWidth;
    }

    let calculatedWidth2 = windowWidth * widthPercentage;
    if (calculatedWidth2 > maxWidth2) {
        calculatedWidth2 = maxWidth2;
    }

    const marginLeft = (windowWidth - calculatedWidth) / 2;
    const marginLeft2 = (windowWidth - calculatedWidth2) / 2;

    $('body').css('--margin-left', marginLeft + 'px');
    $('body').css('--margin-right', marginLeft + 'px');

    $('body').css('--margin-left2', marginLeft2 + 'px');
    $('body').css('--margin-right2', marginLeft2 + 'px');
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

		if (st > navbarHeight) {
			$("#header").addClass("down")
		}

		if (st < navbarHeight) {
			$("#header").removeClass("down")
		}

		lastScrollTop = st; 
	}
})

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
		$(".modal").removeClass("show")
	})
});
$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
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



/* navbox */
// navbox button
$(document).ready(function () {
  $(".header .menu_open").on("click", function () {
      $("body").addClass("menu");
      $(".navbox").addClass("open");
  });

  $(".navbox .menu_close").on("click", function () {
      $("body").removeClass("menu");
      $(".navbox").removeClass("open");
  });

  $(".navbox .nav_menupop .nav_menu .nav_menucont > li .link").on("click", function () {
      $("body").removeClass("menu");
      $(".navbox").removeClass("open");
  });

  $(".navbox .nav_menubox .bodyitem > li .acc_cont > li .link").on("click", function () {
      $("body").removeClass("menu");
      $(".navbox").removeClass("open");
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



/* 01 메인 */
// main navigation
document.querySelectorAll('.main_nav a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault(); // 해시 이동 차단

    const targetId = this.dataset.target;
    const target = document.getElementById(targetId);
    if (!target) return;

    const targetY =
      target.getBoundingClientRect().top + window.scrollY;

    window.scrollTo({
      top: targetY,
      behavior: 'smooth'
    });
  });
});

// main section3 swiper
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
const originalMS3 = cloneSlides('.ms3_swiper', 3);
const ms3_swiper = new Swiper('.ms3_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	loop: true,
	slidesPerView: 'auto',
	spaceBetween: 20,
	allowTouchMove: true,
	initialSlide: 0,
	breakpoints: {
		1080: {
			spaceBetween: 40,
			allowTouchMove: false,
			initialSlide: 6,
		},
	},
	on: {
		init() {
			const activeItem = $('.ms3 .swiper-slide-active');
			activeItem.addClass('effect hover');
		},
		slideChangeTransitionEnd() {
			const activeItem = $('.ms3 .swiper-slide-active');	
			setTimeout(() => {
				activeItem.addClass('effect hover');
			}, 500);
		}
	}
});
$('.ms3_swiper .prev_btn').on('click', function () {
	handleManualSlide('prev');
});
$('.ms3_swiper .next_btn').on('click', function () {
	handleManualSlide('next');
});
function handleManualSlide(direction) {
	const swiper = ms3_swiper;
	const activeItem = $('.ms3 .swiper-slide-active');
	activeItem.removeClass('hover');
	setTimeout(function () {
		activeItem.removeClass('effect');
		setTimeout(function () {
			if (direction === 'next') {
				swiper.slideNext();
			} else {
				swiper.slidePrev();
			}
		}, 200);
	}, 400);
}



/* 02 회사소개*/
const com_swiper1 = new Swiper('.com_swiper1', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 20,
	breakpoints: {
		1080: {
			spaceBetween: 40,
		},
	},
});

const com_swiper2 = new Swiper('.com_swiper2', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 20,
	autoHeight: true,
	breakpoints: {
		1080: {
			spaceBetween: 40,
		},
	},
});



/* 03 열기구체험*/
const flight_thumbox = new Swiper('.flight_thumbox', {
	observer: true,
	observeParents: true,
	speed: 500,
	loop:true,
	slidesPerView: 'auto',
	spaceBetween: 8,
	breakpoints: {
		1080: {
			spaceBetween: 10,
		},
	},
});
const flight_swiper = new Swiper('.flight_swiper', {
	observer: true,
	observeParents: true,
	loop:true,
	speed: 500,
	thumbs: {
		swiper: flight_thumbox
	},
    navigation: {
      nextEl: ".flight_swiper .next_btn",
      prevEl: ".flight_swiper .prev_btn",
    },	
});



/* 04 예약하기 - 예약상품 */
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

// 출발일정 popup
$(document).ready(function () {
	$(".prd_listbox .item .schedule_btn").on("click", function (e) {
		e.preventDefault(); 
    	e.stopPropagation();
		$("body").addClass('hidden');
		$("#schedule_popup").addClass('show');
	});
});

// 비행일정 선택 popup
function flightDate_popup() {
	$("body").addClass('hidden');
	$("#flightDate_popup").addClass('show');
}

// 인원수 popup
function personnel_popup() {
	$("body").addClass('hidden');
	$("#personnel_popup").addClass('show');
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



/* 04 예약하기 - 예약상세 */
// product gallery popup
function gallery_popup() {
	$("body").addClass('hidden');
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

// week swiper
const week_swiper = new Swiper('.week_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 8,
	autoHeight: true,
	breakpoints: {
		1080: {
			spaceBetween: 10,
		},
	},
});

// calender select
$(function () {
  $('.pr_sec.view .calender').on('click', '.date:not(.hide)', function () {
    $('.calender .date').removeClass('selected');
    $(this).addClass('selected');
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

// share popup
$(document).ready(function () {
	$(".pr_sec.view .share_btn").click(function (e) {
		e.preventDefault(); 
		$("body").addClass('hidden');
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

// product swiper
$('.prd_slidebox').each(function() {
  const el = this;
  const swiperEl = $(el).find('.prd_swiper')[0];
  const nextBtn = $(el).find('.next_btn')[0];
  const prevBtn = $(el).find('.prev_btn')[0];

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
});

// mobile detail option select
$(document).on("change", '.pr_sec.view .vc_sec_option input[name="prd_opt"]', function () {
	$(".pr_sec.view .pr_result").addClass("selected");
});

// mobile detail info popup
$(document).ready(function () {
	$(".pr_sec.view .pr_result .mob_side_box .opt_btn").on("click", function () {
		$("body").addClass('filter_open');
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



/* 04 예약하기 - 예약결제 */
// detail info more button
$(document).ready(function() {
    $(".re_sec .re_sec_detail .more_btn").on("click", function() {
        const prdInfo = $(this).closest(".prd_info");
        prdInfo.toggleClass("hide"); 
    });
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



/* 05 커뮤니티 */
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



/* 06계정 */
// login input text show
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



/* 07 마이페이지 */
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