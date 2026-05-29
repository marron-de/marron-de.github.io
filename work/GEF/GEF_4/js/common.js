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

}(jQuery));``


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
			dateFormat: "yy.mm.dd",
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
		const formatted = `${year}.${month}.${day}`;
		$(".datepicker.today").attr("placeholder", formatted);

		$(".datepicker").datepicker({
			maxDate: 'today'
		});

		$(".date_item .btn").on("click", function () {
			$(this).siblings(".datepicker").datepicker("show");
		});
	}
});


/* modal */
$(".modal .modal_close").click(function () {
    $("body").removeClass("hidden");
    $(".modal").removeClass("show");
});
$(document).mouseup(function (e) {
    const $target = $(e.target);
	
    if ($target.closest(".ui-datepicker").length > 0) return;
    if ($target.closest(".ui-datepicker-header").length > 0) return;

    if ($(".modal .modal_box").has(e.target).length === 0) {
        $("body").removeClass("hidden");
        $(".modal").removeClass("show");
    }
});


/* popup */
$(".popup .pop_close").click(function () {
	$(this).closest(".popup").removeClass("show");
})
$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".popup").removeClass("show")
	}
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


/* header */
// header keyword swiper
const keyword_swiper = new Swiper(".keyword_swiper", { 
	observer: true, 	
	observeParents: true,  	 
	loop: true, 
	speed: 500,
	direction: 'vertical',
	slidesPerView: 'auto',
	spaceBetween: 12,
	autoplay: {        
		delay: 3000,        
		disableOnInteraction: false,      
	},
});

// header mymenu button
$(document).ready(function () {
	$(".header .my_btn").on("click", function () {
		$(".mypage_popup").addClass("show");
	});
});

// header notice swiper
const notice_swiper = new Swiper(".notice_swiper", { 
	observer: true, 	
	observeParents: true,  	 
	loop: true, 
	speed: 500,
	direction: 'vertical',
	slidesPerView: 'auto',
	spaceBetween: 12,
	autoplay: {        
		delay: 3000,        
		disableOnInteraction: false,      
	},
});

// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").on("click", function () {
		$("body").addClass("hidden");
		$(".navbox").addClass("open");
	});
	$(".navbox .menu_close").on("click", function () {
		$("body").removeClass("hidden");
		$(".navbox").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".navbox").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".navbox").removeClass("open");
	}
});

// search modal
$('.rangeslider').each(function() {
    const slider = this; 
    const minVal = Number($(slider).data('min')) || 0;
    const maxVal = Number($(slider).data('max')) || 100000;
	
    noUiSlider.create(slider, {
        start: [minVal, maxVal], 
        connect: true,
        range: {
            'min': minVal,
            'max': maxVal
        }
    });
	
    slider.noUiSlider.on('update', function(values, handle) {
        const minKm = Math.round(values[0]);
        const maxKm = Math.round(values[1]);
    });
});
$(".search_btn").click(function (e) {
    e.preventDefault(); 
    $("body").addClass("hidden");
    $(".search_modal").addClass("show");
});



/* product */
// select width
$('.custom_select').each(function () {
    const select = $(this);
    
    function resizeSelect() {
        const selectedText = select.find('option:selected').text();
        
        const tempSpan = $('<span>')
            .text(selectedText)
            .css({
                'position': 'absolute',
                'visibility': 'hidden',
                'white-space': 'pre',
                'font-size': select.css('font-size'),
                'font-family': select.css('font-family'),
                'font-weight': select.css('font-weight'),
                'letter-spacing': select.css('letter-spacing')
            });
            
        $('body').append(tempSpan);
        const textWidth = tempSpan.width();
        tempSpan.remove();
        
        const paddingAndIconSpace = 0; 
        
        select.width(textWidth + paddingAndIconSpace);
    }

    select.on('change', resizeSelect);
    resizeSelect();
});

// width button
$(".wish_btn").click(function (e) {
    e.preventDefault(); 
    $(this).toggleClass("on");
});



/* main */
// main section1
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
    const ms1_pag = document.querySelector('.ms1 .ms1_pag');
    let html = '';

    for (let i = 1; i <= total; i++) {
        html += `<span class="swiper-pagination-bullet" data-index="${i}"></span>`;
    }
    ms1_pag.innerHTML = html;
}
function updateBullets(swiper, total) {
    const bullets = document.querySelectorAll('.ms1 .ms1_pag .swiper-pagination-bullet');
    const current = (swiper.realIndex % total) + 1;

    bullets.forEach((b, i) => {
        b.classList.toggle('swiper-pagination-bullet-active', (i + 1) === current);
    });
}
const originalMS1 = cloneSlides('.ms1_swiper', 3);
const ms1_swiper = new Swiper(".ms1_swiper", { 
	observer: true, 	
	observeParents: true,  	 
	loop: true, 
	speed: 500,
	slidesPerView: 1,
	spaceBetween: 0,
	initialSlide: 1,
	navigation: {
		nextEl: '.ms1 .next_btn',
		prevEl: '.ms1 .prev_btn',
	},
	pagination: {
		el: '.ms1 .ms1_pag',
		clickable: true,
		renderCustom: function (swiper) {
			return renderPagination(swiper, originalMS1);
		},
	},
	on: {
        init(swiper) {
            initBullets(originalMS1);
            updateBullets(swiper, originalMS1);
        },
        slideChange(swiper) {
            updateBullets(swiper, originalMS1);
        }
    },
	autoplay: {        
		delay: 5000,        
		disableOnInteraction: false,      
	},
	breakpoints: {
		1080: {
			slidesPerView: 2,
			spaceBetween: 40,
		},
	}
});



/* product detail */
if ($(".prddetail_sec").length) {
	$(window).on("scroll", function () {
		const $sec = $(".prddetail_sec");
		const $box = $(".d_rightbox");

		const secTop = $sec.offset().top;
		const secBottom = secTop + $sec.outerHeight();
		const scrollTop = $(window).scrollTop();
		const boxHeight = $box.outerHeight();

		if (scrollTop >= secTop && scrollTop + boxHeight <= secBottom) {
			$sec.addClass("is_fixed").removeClass("is_bottom");
		} else if (scrollTop + boxHeight > secBottom) {
			$sec.addClass("is_bottom").removeClass("is_fixed");
		} else {
			$sec.removeClass("is_fixed is_bottom");
		}
	});
}
const detail_thum = new Swiper(".detail_thum", { 
	observer: true, 	
	observeParents: true,  	 
	loop: true, 
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 10,
});
const detail_pic = new Swiper(".detail_pic", { 
	observer: true, 	
	observeParents: true,  	 
	loop: true, 
	speed: 500,
	navigation: {
		nextEl: '.detail_pic .next_btn',
		prevEl: '.detail_pic .prev_btn',
	},
    thumbs: {
        swiper: detail_thum,
    },
});



/* join */
// joign check
const allCheck = $('#agreeAll');
const subChecks = $('.form_item:not(.allCheck) .input_check');
allCheck.on('change', function () {
    subChecks.prop('checked', $(this).prop('checked'));
});
subChecks.on('change', function () {
    const isAllChecked = subChecks.length === subChecks.filter(':checked').length;
    allCheck.prop('checked', isAllChecked);
});

// file preview
$("#myprofile").on("change", function () {
    const file = this.files[0];
    if (!file) return;
    const preview = $(this).closest(".form_item").find(".file_preview");
    const reader = new FileReader();

    reader.onload = function (e) {
        preview.find(".img").attr("src", e.target.result);
        preview.find(".tit").text(file.name + " | " + Math.round(file.size / 1024) + "kb");
        preview.show();
    };

    reader.readAsDataURL(file);
});
$(document).on("click", ".file_preview .del_btn", function () {
    const $formItem = $(this).closest(".form_item");
    $formItem.find(".input_file").val("");
    $formItem.find(".file_preview").hide();
});



/* mypage */
const mytab_index = parseInt($(".mytab_swiper").attr('data-index'), 10) || 0;
const mytab_swiper = new Swiper(".mytab_swiper", { 
	observer: true, 	
	observeParents: true,  	 
	speed: 500,
	direction: 'horizontal',
	slidesPerView: 'auto',
	spaceBetween: 32,
	initialSlide: mytab_index,
	breakpoints: {
		1080: {
			direction: 'vertical',
			spaceBetween: 0,
		},
	},
});
