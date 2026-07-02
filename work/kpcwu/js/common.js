
// layout
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1280;
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


// AOS
AOS.init({
	duration: 800,
	easing: "ease-in",
})


// lucide
lucide.createIcons();


// accordion
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
	$(".tab_nav").click(function () {
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


// tab swiper
$(document).ready(function () {
	$('.tab_swiper').each(function () {

		const $this = $(this);
		const index = parseInt($this.attr('data-index'), 10) || 0;
		const gapPc = parseInt($this.data('gappc'), 10) || 0;
		const gapMob = parseInt($this.data('gapmob'), 10) || 0;

		new Swiper(this, {
			observer: true,
			observeParents: true,
			slidesPerView: 'auto',
			spaceBetween: gapMob,
			speed: 500,
			initialSlide: index,
			breakpoints: {
				1080: {
					spaceBetween: gapPc,
				},
			},
		});

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
			// yearSuffix: "년",

			changeMonth: true,
			changeYear: true,
				onChangeMonthYear: function () {
				setTimeout(function () {
					$(".ui-datepicker-year option").each(function () {
						const year = $(this).val();
						$(this).text(year + "년");
					});
				}, 0);
			},
			beforeShow: function () {
				setTimeout(function () {
					$(".ui-datepicker-year option").each(function () {
						const year = $(this).val();
						$(this).text(year + "년");
					});
				}, 0);
			}
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
$(".modal .modal_close").click(function () {
	$("body").removeClass("open")
	$(".modal").removeClass("show")
})
$(document).mouseup(function (e) {
    if ($(".modal .modal_box").has(e.target).length === 0 && 
        !$(e.target).closest('.ui-datepicker').length && 
        !$(e.target).closest('#ui-datepicker-div').length) {
        
        $("body").removeClass("hidden");
        $("body").removeClass("open");
        $(".modal").removeClass("show");
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


// breadcrumb
$(document).ready(function () {	
    $('.breadcrumb .cate_btn').on('click', function (e) {
        e.stopPropagation();
        const box = $(this).closest('.catebox');
        if (box.hasClass('show')) {
            $("body").removeClass('open');
            box.removeClass('show');
            return;
        }		
        $('.catebox').not(box).removeClass('show');		
        $("body").addClass('open');
        box.addClass('show');
    });
	
    $('.cate_popup').on('click', function (e) {
        e.stopPropagation();
    });
	
    $(document).on('click', function () {
		$("body").removeClass('open');
        $('.catebox').removeClass('show');
    });

});


// header search
$(document).ready(function () {
	$(document).on("click", ".header .search_btn", function (e) {
		e.stopPropagation();
		const isOn = $(this).hasClass("on");

		if (isOn) {
			$("body").removeClass("search");
			$(".header .search_btn").removeClass("on");
			$(".search_modal").removeClass("open");
		} else {
			$("body").addClass("search");
			$(".header .search_btn").addClass("on");
			$(".search_modal").addClass("open");

			$("body").removeClass("menu");
			$(".header").removeClass("menu");
			$(".header .menu_btn").removeClass("on");
			$(".navbox").removeClass("open");
		}
	});
});
$(document).mouseup(function (e) {
	if ($(".search_modal").has(e.target).length === 0 && !$(e.target).closest(".header .search_btn").length) {
		$("body").removeClass("search");
		$(".header .search_btn").removeClass("on");
		$(".search_modal").removeClass("open");
	}
});


// header navbox
$(document).ready(function () {
    $(document).on("click", ".header .menu_btn:not(.on)", function (e) {
        e.stopPropagation();
        $("body").addClass("menu");
        $(".header").addClass("menu");
        $(".header .menu_btn").addClass("on");
        $(".navbox").addClass("open");

        $("body").removeClass("search");
        $(".header .search_btn").removeClass("on");
        $(".search_modal").removeClass("open");
    });

    $(document).on("click", ".header .menu_btn.on", function (e) {
        e.stopPropagation();
        $("body").removeClass("menu");
        $(".header").removeClass("menu");
        $(".header .menu_btn").removeClass("on");
        $(".navbox").removeClass("open");
    });
});



/* 메인*/
const ms1_swiper = new Swiper('.ms1_swiper', {
	observer: true,
	observeParents: true,
	effect: 'fade',
	loop:true,
	speed: 500,
	pagination: {
		el: '.ms1_swiper .paging',
		clickable: true,
	},
	navigation: {
		nextEl: ".ms1_swiper .next_btn",
		prevEl: ".ms1_swiper .prev_btn",
	},
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
})


// 조직현황
function status_map(index) {
    $(".status_sec1 .mapbtn button").removeClass("on");
    $(".status_sec1 .mapbtn button").eq(index - 1).addClass("on");

    $(".status_sec1 .mapbox .map").attr("src", "../img/status_map" + index + ".png");

    const infoData = [
        {
            title: "노동조합",
            address: "서울특별시 영등포구 대림로 146 2층",
            tel: "02-834-5375",
            fax: "02-843-1436"
        },
        {
            title: "포항지부",
            address: "경상북도 포항시 남구 중앙로91번길 6 , 2층",
            tel: "054-283-2221",
            fax: "054-277-2932"
        },
        {
            title: "여수지부",
            address: "전남 여수시 중흥동 1772-10",
            tel: "061-683-5406",
            fax: "061-683-5407"
        },
        {
            title: "전남동부경남서부지부",
            address: "전라남도 광양시 광양읍 익신산단1길 59 2층",
            tel: "061-762-9688",
            fax: "061-762-9687"
        },
        {
            title: "울산지부",
            address: "울산광역시 울주군 청량읍 용암길 13",
            tel: "052-269-0482",
            fax: "052-268-0483"
        },
        {
            title: "충남지부",
            address: "충청남도 서산시 대산읍 망일산로 589",
            tel: "041-667-3979",
            fax: "041-669-3922"
        },
        {
            title: "전북지부",
            address: "전라북도 군산시 동아로 11",
            tel: "063-910-5272",
            fax: "063-467-5272"
        },
        {
            title: "경인지부",
            address: "인천시 서구 백범로 622번길 9(가좌동) 근로자문화센터 별관 1층",
            tel: "032-517-7114",
            fax: "032-521-8109"
        },
        {
            title: "강원충북지부",
            address: "강원도 동해시 감추6길 34 4층",
            tel: "033-532-7669",
            fax: "033-533-7669"
        }
    ];

    const currentInfo = infoData[index - 1];

    if (currentInfo) {
        $(".status_sec1 .txtbox .sub_txt2").text(currentInfo.title);
        $(".status_sec1 .txtbox .desc").text(currentInfo.address);
        $(".status_sec1 .txtbox .infobox .item").eq(0).find(".txt").text(currentInfo.tel);
        $(".status_sec1 .txtbox .infobox .item").eq(1).find(".txt").text(currentInfo.fax);
    }
}
$(document).ready(function () {
    $(".status_sec1 .mapbtn button").removeClass("on");
    $(".status_sec1 .mapbtn button").eq(0).addClass("on");

    $(".status_sec1 .mapbtn button").each(function (i) {
        $(this).attr("onclick", "status_map(" + (i + 1) + ")");
    });
});


// 걸어온 길
$(function () {
	const historyBox = $('.history_sec1 .history_box');
	const historyItems = $('.history_sec1 .history_item');

	if (!historyBox.length || !historyItems.length) {
		return;
	}

	const lastIndex = historyItems.length - 1;

	function updateProgress() {
		const winH = $(window).height();
		const docH = $(document).height();
		const scrollTop = $(window).scrollTop();
		const isBottom = scrollTop + winH >= docH - 2;
		const boxTop = historyBox.offset().top;
		const boxHeight = historyBox.outerHeight();

		const currentScrollY = scrollTop + (winH * 0.5) - boxTop;
		let linePercent = (currentScrollY / boxHeight) * 100;

		if (isBottom) {
			linePercent = 100;
		}

		linePercent = Math.max(0, Math.min(100, linePercent));
		historyBox.css('--height', linePercent + '%');

		historyItems.each(function (index) {
			const historyItem = $(this);
			const top = historyItem.offset().top - scrollTop;
			const start = winH;
			const end = winH * 0.5;
			let percent = (start - top) / (start - end) * 100;

			percent = Math.max(0, Math.min(100, percent));

			if (index === lastIndex && isBottom) {
				percent = 100;
			}

			if (percent >= 100) {
				historyItem.addClass('on');
			} else {
				historyItem.removeClass('on');
			}
		});
	}

	$(window).on('scroll resize', updateProgress);
	updateProgress();
});


// 조합가입안내 - 가입안내
$(function () {
	const inputFile = $('.input_file');

	if (!inputFile.length) {
		return;
	}

	inputFile.on('change', function () {
		const fileName = this.files.length ? this.files[0].name : '';
		const labelFile = $(this).siblings('.label_file');
		labelFile.text(fileName);
		if (fileName) {
			labelFile.addClass('on');
		} else {
			labelFile.removeClass('on');
		}
	});
});
$(function () {
	const moreBtn = $('.form_termbox .form_term .more_btn');

	if (!moreBtn.length) {
		return;
	}

	moreBtn.on('click', function () {
		$(this).closest('.form_term').toggleClass('show');
	});
});


// 규약
$(function () {
	const termHistory = $('.term_history');
 
	if (!termHistory.length) {
		return;
	}
 
	termHistory.find('.titbox button').on('click', function () {
		const wrap = $(this).closest('.term_history');
		const txt = $(this).find('.txt');
 
		wrap.toggleClass('on');
		txt.text(wrap.hasClass('on') ? '접기' : '더보기');
	});
});


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