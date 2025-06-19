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
		lnbUI.click('.accordion li', 400);

		if (window.innerWidth <= 1080) {
			lnbUI.click('.navbox .nav_menubox .menubox li', 400);
		}
	});
})(jQuery);

// tab function
$(document).ready(function () {
	$(".tab_wrap .tab_nav").click(function () {
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
		$(this).closest(".popup").removeClass("show")
	})
})
$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0 ) {		
		$("body").removeClass("popup");
		$(".popup").removeClass("show")
	}
});



/* header */
// language button
$(document).ready(function () {
	$(".lang_selbtn").on("click", function (e) {
		e.stopPropagation();

		const selbtn = $(this);
		const langBox = selbtn.closest(".lang_box");
		const popup = langBox.find(".lang_popup");

		const isOpen = popup.hasClass("open");

		$(".lang_popup").removeClass("open");
		$(".lang_selbtn").removeClass("active");

		if (!isOpen) {
			selbtn.addClass("active");
			popup.addClass("open");
		}
	});

	$(document).on("click", function (e) {
		if ($(e.target).closest(".lang_box").length === 0) {
			$(".lang_selbtn").removeClass("active");
			$(".lang_popup").removeClass("open");
		}
	});
});

// mobile search button 
$(document).ready(function () {
	$(".header .search_open").on("click", function () {
		$(".header").toggleClass("sch_open");
	});
});
$(document).mouseup(function (e) {
	if ($(".header .h_bottom .schbox .input_box_sch").has(e.target).length === 0 && $(".header .sidebox").has(e.target).length === 0) {
		$(".header").removeClass("sch_open");
	}
});



/* navbox */
const nav_menu_swiper = new Swiper('.navbox .nav_menu', {
	observer: true, 	
	observeParents: true, 
	slidesPerView: 'auto',
	spaceBetween: 20,
	speed: 500,
	breakpoints: {
		1080: {
			spaceBetween: 0,
		},
	}
})

// pc navbox button 
$(document).ready(function () {
	$(".navbox .nav_menu > li.menu").on("click", function () {
		$(".navbox").toggleClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".navbox .nav_menubox").has(e.target).length === 0) {
		$(".navbox").removeClass("open");
	}
});

// mobile navbox button 
$(document).ready(function () {
	$(".header .menu_open").on("click", function () {
		$("body").addClass("menu");
		$(".nav_menubox").addClass("open");
	});
	$(".navbox .menu_close").on("click", function () {
		$("body").removeClass("menu");
		$(".nav_menubox").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".navbox").has(e.target).length === 0) {
		$("body").removeClass("menu");
		$(".nav_menubox").removeClass("open");
	}
});
$(document).ready(function () {
  $(".nav_menubox .menubox > li .acc_tit").on("click", function (e) {
    if ($(window).width() <= 1080) {
      e.preventDefault();
    }
  });
});



/* mobile side menu */
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



/* 메인 */
// main section1
const ms1_swiper = new Swiper('.ms1_swiper', {
	observer: true,
	observeParents: true,
	loop: true,
	speed:500,
	effect : 'fade',
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.ms1_swiper .paging',
		clickable: true,
	},
})

// main section2
const ms2_thum = new Swiper('.ms2_thum', {
	observer: true,
	observeParents: true,
	direction: 'vertical',
	speed: 500,
	loop: true,
	slidesPerView: 'auto',
  	slidesPerGroup: 5,
	allowTouchMove: false,
	simulateTouch: false,
});
const ms2_swiper = new Swiper('.ms2_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	loop: true,
	slidesPerView: 1.5,
	centeredSlides: true,
	spaceBetween: 16,
	thumbs: {
		swiper: ms2_thum
	},
	pagination: {
		el: ".ms2_swiper .pagination",
		type: "progressbar",
	},
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	breakpoints: {
		1080: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
	},
});

// main product
$('.m_prd_section .prd_slidebox').each(function() {
  const el = this;
  const swiperEl = $(el).find('.prd_swiper')[0];
  const nextBtn = $(el).find('.next_btn')[0];
  const prevBtn = $(el).find('.prev_btn')[0];

  const prd_swiper = new Swiper(swiperEl, {
    observer: true,
    observeParents: true,
    speed: 500,
    loop: true,
    slidesPerView: 1.5,
    spaceBetween: 16,
    navigation: {
      nextEl: nextBtn,
      prevEl: prevBtn,
    },
    breakpoints: {
      1080: {
        slidesPerView: 'auto',
        spaceBetween: 20
      },
    }
  });
});
$(function () {
  $('.m_prd_section').each(function () {
    const section = $(this);

    section.find('.prd_tabs .tab').click(function () {
      const idx = $(this).index();
      section.find('.prd_tabs .tab').removeClass('on');
      $(this).addClass('on');
      section.find('.prd_slidebox').removeClass('on').eq(idx).addClass('on');
    });
  });
});

// main section4
const ms4_swiper = new Swiper('.ms4_swiper', {
	observer: true,
	observeParents: true,
	speed:500,
	loop: true,
	spaceBetween: 16,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	 pagination: {
	 	el: '.ms4_swiper .paging',
	 	type: 'custom',
	 	clickable: true,
	 	renderCustom: function (swiper, current, total) {
	 		return '<span class="current">' + ('0' + current).slice(-2) + '</span>' + ' / ' + '<span class="total">' + ('0' + total).slice(-2) + '</span>';
	 	}
	 },
})

// main section7
$(function () {
  const video = $('.ms7_video').get(0);
  const vidbox = $('.ms7 .vid_box');
  const playBtn = $('.ms7 .play_btn');
  if (!video) return;

  playBtn.on('click', e => {
    e.stopPropagation();
    if (!video.paused && !video.ended) {
      video.pause();
      vidbox.removeClass('on');
      return;
    }
    vidbox.addClass('on');
    video.play().catch(e => console.warn('Play error:', e));
  });

  vidbox.on('click', () => {
    if (!video.paused && !video.ended) {
      video.pause();
      vidbox.removeClass('on');
    }
  });

  video.addEventListener('ended', () => vidbox.removeClass('on'));

  $('.ms7 .vid_list .item').on('click', function () {
    const src = $(this).data('video');
    const poster = $(this).data('poster');

    if (!video.paused && !video.ended) video.pause();

    $(video).attr('src', src);
    video.poster = poster;
	vidbox.removeClass('on');
    video.load();
  });
});

// main section10
const ms10_swiper = new Swiper('.ms10_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	loop: true,
	slidesPerView: 1.5,
	spaceBetween: 16,	
    navigation: {
      nextEl: ".ms10 .slidebox .next_btn",
      prevEl: ".ms10 .slidebox .prev_btn",
    },
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	breakpoints: {
		1080: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
	},
});

// main section11
const ms11_swiper = new Swiper('.ms11_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	loop: true,
	slidesPerView: 1.5,
	spaceBetween: 16,	
    navigation: {
      nextEl: ".ms11 .controls .next_btn",
      prevEl: ".ms11 .controls .prev_btn",
    },
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	breakpoints: {
		1080: {
			slidesPerView: 3,
			spaceBetween: 20,
		},
	},
});

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



/* 제품 목록 */
// product list date button
$(document).ready(function () {
	$(".pr_sec.list .date_btn").on("click", function () {
		$(this).closest('.prd_itembox').toggleClass('open');
	});
	
	$(".pr_sec.list .date_close").on("click", function () {
		$(this).closest('.prd_itembox').removeClass('open');
	});
});

// plus + minus button
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
		$("body").addClass('popup');
		$(".pr_sec.list .filter_popup").addClass('show');
	});
});



/* 제품 상세 */
// pr view thum
const pr_view_thum = new Swiper('.pr_view_thum', {
	observer: true,
	observeParents: true,
	direction: 'horizontal',
	speed: 500,
	slidesPerView: 4,
	spaceBetween: 10,
	scrollbar: {
		el: '.pr_sec.view .view_top .scrollbar',
		draggable: true,
	},
	breakpoints: {
		1080: {
			slidesPerView: 5,
			direction: 'vertical',
		},
	},
});
// pr view list
const pr_view_list = new Swiper('.pr_view_list', {
	observer: true,
	observeParents: true,
	speed: 500,
	loop: true,
	spaceBetween: 10,
	thumbs: {
		swiper: pr_view_thum
	},
    navigation: {
      nextEl: ".pr_view_list .next_btn",
      prevEl: ".pr_view_list .prev_btn",
    },
});

// wish button
$(document).ready(function () {
	$(".pr_sec.view .wish_btn").on("click", function () {
		$(this).toggleClass('on');
	});
});

// tab nav active
$(function () {
  const tabNavs = $(".pr_sec.view .tab_nav");
  const sections = $(".pr_sec.view .vc_box");

  function onScroll() {
    const scrollPos = $(window).scrollTop() + 100;

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
});

// calender
$(function () {
  $('.pr_sec.view .calender_box').on('click', '.date:not(.disabled)', function () {
    $('.calender_box .date').removeClass('selected');
    $(this).addClass('selected');
  });
});

// detail more veiw button
$(document).ready(function () {
	$(".pr_sec.view .vc4_box .view_more").on("click", function () {
		const contbox = $('.pr_sec.view .vc4_box .contbox');
		const txt = $(this).find('.txt');

		contbox.toggleClass('show');

		if (txt.text() === 'VIEW MORE') {
			txt.text('HIDE');
		} else {
			txt.text('VIEW MORE');
		}
	});
});

// mobile detail popup button
$(document).ready(function () {
	$(".pr_sec.view .mob_bottom_nav .reserve_btn").on("click", function () {
		$(".pr_sec.view .detail_popup").toggleClass('show');
		$("body").addClass('popup');
	});
});



/* 예약하기 */
// check button
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



/* 실시간 차량예약 */
// notcie popup button
$(document).ready(function () {
  $(".ve_sec .tab_formitem1 .notice_btn").on("click", function () {
    $(".ve_sec .tab_formitem1 .notice_popup").addClass("show");
  });
});

// vehicle select
const vhc_list = new Swiper('.vhc_list', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 1,
	spaceBetween: 15,
    navigation: {
      nextEl: ".vhc_listbox .next_btn",
      prevEl: ".vhc_listbox .prev_btn",
    },
	breakpoints: {
		1080: {
			slidesPerView: 'auto',
			spaceBetween: 30,
		},
	},
});

// review write modal
$(document).ready(function () {
	$(".ve_sec .rv_write_btn").click(function () {
		$(".rv_write_modal").addClass("show")
	})
});

// review write modal file
$(function () {
  const fileInput = $('.rv_write_modal #rv_file');
  const fileBox = $('.rv_write_modal .file_box');
  const fileNameDisplay = $('.rv_write_modal .label_file .name');
  const fileBtn = $('.rv_write_modal .file_btn');
  const deleteBtn = $('.rv_write_modal .label_file .delete');


  fileInput.on('change', function () {
    const fileName = this.files.length > 0 ? this.files[0].name : '파일을 선택해주세요';
    fileNameDisplay.text(fileName);

    if (this.files.length > 0) {
      fileBox.addClass('attached');
    } else {
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

// review phooto thumbnail
const rv_photo_thum = new Swiper('.rv_photo_thum', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 10,
    navigation: {
      nextEl: ".rv_photo_thum .next_btn",
      prevEl: ".rv_photo_thum .prev_btn",
    },
});

// review phooto list modal
const rv_photo_list = new Swiper('.rv_photo_list', {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 20,
	centeredSlides: true,
    navigation: {
      nextEl: ".rv_photo_list .next_btn",
      prevEl: ".rv_photo_list .prev_btn",
    },
	pagination: {
		el: '.rv_photo_list .paging',
		type: 'custom',
		clickable: true,
		renderCustom: function (swiper, current, total) {
			return '<span class="current">' + ('0' + current).slice(-2) + '</span>' + ' / ' + '<span class="total">' + ('0' + total).slice(-2) + '</span>';
		}
	 },
	breakpoints: {
		1080: {
			spaceBetween: 30,
		},
	},
});

// review phooto list modal show
$(document).ready(function () {
	$(".rv_photo_thum .swiper-slide").click(function () {
		const index = $(this).index();

		$('.rv_photo_modal').addClass('show');

		rv_photo_list.slideTo(index, 0);
	})
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
// cs _password modal
$(document).ready(function () {
	$(".tbl .secret_mode").click(function (e) {
		e.preventDefault(); 
		$('.cs_psw_modal').addClass('show');
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
