
// AOS
AOS.init({
	duration: 800,
	// disable: 'tablet',
})

window.addEventListener('load', function () {
	AOS.refresh();
});


// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").on("click", function () {
		$("body").addClass("hidden");
		$(".header").addClass("open");
		$(".navbox").addClass("open");
	});
	$(".navbox .menu_close").on("click", function () {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".navbox").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".navbox").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".navbox").removeClass("open");
	}
});


// top button
$(document).ready(function () {
	$('#top_btn').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
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


// scroll nav
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

		// if (st > lastScrollTop && st > navbarHeight) {
		// 	// 스크롤을 내렸을 때                
		// 	$("#header").addClass("hide")

		// } else {
		// 	// 스크롤을 올렸을 때 
		// 	$("#header").removeClass("hide")

		// }

		lastScrollTop = st; // 현재 멈춘 위치를 기준점으로 재설정
	}
})


// scroll animation
$(window).on('scroll resize', function (e) {

	let scroll_top = $(window).scrollTop(),
		section_progress = scroll_top / ($(document).height() - $(window).height());
	section_progress = isFinite(section_progress) ? section_progress : 0;

	$('html').attr('style', '--progress: ' + section_progress);

	$('.sequence').each(function (i) {
		let $sequence = $(this);
		let trigger_top = scroll_top,
			sequence_top = $sequence.offset().top,
			sequence_bottom = sequence_top + $sequence.outerHeight() - $(window).height(),
			sequence_progress;
		let progress_in = $sequence.data('progress-in') || 0;

		sequence_top = sequence_top - ($(window).height() * progress_in);

		if (trigger_top <= sequence_top) {
			sequence_progress = 0;
		} else if (trigger_top > sequence_top && trigger_top <= sequence_bottom) {
			sequence_progress = (trigger_top - sequence_top) / (sequence_bottom -
				sequence_top);
		} else {
			sequence_progress = 1;
		}

		$sequence.attr('style', '--progress: ' + sequence_progress);
	});
}).resize();


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
	const index = parseInt($('.swiper.tab_swiper').attr('data-index'), 10) || 0;

	const tab_swiper = new Swiper('.tab_swiper', {
		observer: true,
		observeParents: true,
		slidesPerView: 'auto',
		speed: 500,
		initialSlide: index,
	})
});

// datepicker 설정
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

		$(".datepicker").datepicker({
			maxDate: 'today'
		});
	}
});


// mCustomScrollbar
(function($) {
    $(document).ready(function() {
        if ($(".customScrollbar").length) { 
            $(".customScrollbar").mCustomScrollbar({
                theme: "dark",
                scrollInertia: 300,
				axis:"x"
            });
        }
    });
})(jQuery);


// select2 
$(function() {
	function formatOption(data) {
		if (!data.id) return data.text || '';
		if (!data.element) return null; 
		if ($(data.element).data('hidden')) return null;

		let icon = $(data.element).data('icon');
		return $('<span>')
			.append(icon ? '<img src="' + icon + '" class="icon">' : '')
			.append('<span class="txt">' + data.text + '</span>');
	}

	$(".select2").each(function() {
		let select = $(this);
		let customClass = select.data("class") || "";
		let placeholder = select.data("placeholder");

		let options = {
			templateResult: formatOption,
			templateSelection: formatOption,
			dropdownCssClass: customClass,
			width: '100%',
			allowClear: false,
		};

		if (placeholder) {
			options.placeholder = placeholder;
		}

		let container = select.select2(options).next('.select2-container');

		if (customClass && !container.hasClass(customClass)) {
			container.addClass(customClass);
		}

		let initialDataClass = select.find("option:selected").data("class");
		if (initialDataClass) container.attr("data-class", initialDataClass);

		select.on("change", function() {
			let newDataClass = $(this).find("option:selected").data("class") || '';
			container.attr("data-class", newDataClass);
		});
	});
});
$(document).on("mouseup", ".select2-dropdown, .select2-dropdown *", function (e) {
    e.stopPropagation();
});


// layout
function updateScrollbarWidth(swiper) {
    const totalSlides = swiper.slides.length; // 전체 슬라이드 개수
    const visibleSlides = swiper.params.slidesPerView; // 보여질 슬라이드 개수
    const scrollbarEl = swiper.scrollbar.el; // 스크롤바 엘리먼트

    if (scrollbarEl) {
        const scrollbarWidth = (visibleSlides / totalSlides) * 100; // 스크롤바 크기 비율 계산
        scrollbarEl.querySelector('.swiper-scrollbar-drag').style.width = `${scrollbarWidth}%`;
    }
}

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

// swiper scroll update
// $(window).on('load', function() {
//     setTimeout(() => {
//         ms1_imgbox.update();
//     }, 100);
// });


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