/* 메뉴 기능 */
function m_menu_ope() {
	$("body").addClass("hidden");
	$("body").addClass("menu_open");
	$(".header").addClass("open");
	$(".menu_box").addClass("open");
}

function m_menu_clo() {
	$("body").removeClass("hidden");
	$("body").removeClass("menu_open");
	$(".header").removeClass("open");
	$(".menu_box").removeClass("open");
}

$(document).mouseup(function (e) {
	if ($(".menu_box").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$("body").removeClass("menu_open");
		$(".header").removeClass("open");
		$(".menu_box").removeClass("open");
	}
});



/* Top 버튼 기능 */
$(document).ready(function () {
	$('#top_btn').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
});



/* 아코디언 기능 */
/* 2025.01.20 수정 */
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
				// $siblings.removeClass('show');
				// $siblings.find('ul').slideUp(400);

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



/* 탭 기능 */
$(document).ready(function () {

	$(".tab_nav").click(function () {

		let target = $(this);
		let tabNavbox = target.closest('ul')
		let tabNav = tabNavbox.find(".tab_nav")
		let idx = tabNav.index(this);

		let tabWrap = tabNavbox.closest("div");
		let tabContbox = tabWrap.find(".tab_contbox");
		let tabCont = tabContbox.find(".tab_cont");

		tabNav.removeClass("on")
		tabNav.eq(idx).addClass("on")

		tabCont.removeClass("on")
		tabCont.eq(idx).addClass("on")

	})

});



/* select2 기능  */
$(document).ready(function() {
    $('.select2').each(function() {
        const $this = $(this);
        const parentClass = $this.closest('.wrap').attr('class').split(' ').find(function(className) {
            return className.indexOf('_wrap') !== -1;
        });
        
        if (parentClass) {
            const containerId = 'select2-container-' + parentClass.replace('_wrap', '') + '_select';
            
            $this.select2({
                templateResult: function(data) {
                    if ($(data.element).data('hidden')) {
                        return null;
                    }
                    return data.text;
                },
                templateSelection: function(data) {
                    return data.text;
                },
                dropdownCssClass: containerId,
                escapeMarkup: function(markup) {
                    return markup;
                }
            });
        }
    });
});



/* 레이아웃 여백 조절 기능 */
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



/* 모달 기능 */
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



/* review section */
const reviewCommonOptions = {
    loop: true,
    speed: 500,
	pagination: {
        clickable: true,
    },
};

const review_swiper1 = new Swiper(".review_swiper1", {
    ...reviewCommonOptions, // 공통 옵션 적용
    pagination: {
        ...reviewCommonOptions.pagination,
        el: ".review_swiper1 .pagination", // 개별 설정
    },
    navigation: {
        nextEl: '.review_swiper1 .next_btn',
		prevEl: '.review_swiper1 .prev_btn', // 개별 설정
    },
});

const review_swiper2 = new Swiper(".review_swiper2", {
    ...reviewCommonOptions, // 공통 옵션 적용
    pagination: {
        ...reviewCommonOptions.pagination,
        el: ".review_swiper2 .pagination", // 개별 설정
    },
    navigation: {
        nextEl: '.review_swiper2 .next_btn',
		prevEl: '.review_swiper2 .prev_btn', // 개별 설정
    },
});

const review_swiper3 = new Swiper(".review_swiper3", {
    ...reviewCommonOptions, // 공통 옵션 적용
    pagination: {
        ...reviewCommonOptions.pagination,
        el: ".review_swiper3 .pagination", // 개별 설정
    },
    navigation: {
        nextEl: '.review_swiper3 .next_btn',
		prevEl: '.review_swiper3 .prev_btn', // 개별 설정
    },
});

const review_swiper4 = new Swiper(".review_swiper4", {
    ...reviewCommonOptions, // 공통 옵션 적용
    pagination: {
        ...reviewCommonOptions.pagination,
        el: ".review_swiper4 .pagination", // 개별 설정
    },
    navigation: {
        nextEl: '.review_swiper4 .next_btn',
		prevEl: '.review_swiper4 .prev_btn', // 개별 설정
    },
});



/* 2025.01.20 추가 */
/* buycar list */
// filter 모두포함 기능
$(document).ready(function() {
    $('.all_checked input').on('change', function() {
        const groupName = $(this).attr('name');
        const isChecked = $(this).prop('checked');
        if (isChecked) {
            $(`input[name="${groupName}"]`).not(this).prop('checked', false);
        } else {
            $(`input[name="${groupName}"]`).prop('checked', false);
        }
    });

    $('input[type="checkbox"]').not('[id$="-1"]').on('change', function() {
        const groupName = $(this).attr('name');
        const checkedCount = $(`input[name="${groupName}"]:checked`).length;
        const allChecked = $(`input[name="${groupName}"]`).length;
        if (checkedCount > 0) {
            $(`input[name="${groupName}"]`).first().prop('checked', false);
        } else {
            $(`input[name="${groupName}"]`).first().prop('checked', true);
        }
    });
});

// filter checkbox 기능 
$(document).ready(function() {
    $('.buycar_list_wrap .car_filter .filter_box .input_check').on('change', function() {
        let parentCheckBox = $(this).closest('.check_box');
        if ($(this).prop('checked')) {
            parentCheckBox.addClass('checked');
        } else {
            parentCheckBox.removeClass('checked');
        }
    });
});

// filter scrollbar 커스텀
(function($) {
    $(document).ready(function() {
        $(".buycar_list_wrap .car_filter .filter_box .item .acc_cont .filter_check").mCustomScrollbar({
            theme: "dark"
        });
    });
})(jQuery);

// select2 id 값 추가 기능
$(document).ready(function() {
    $('.select2').each(function() {
        const $this = $(this);
        $this.select2();

        $this.on('select2:open', function (event) {
            const dataId = $(this).data('id');
            if (dataId) {
                const openContainer = $('span.select2-container--open');
                openContainer.attr('id', 'select2_container_' + dataId);
            }
        });
    });
});



/* buycar detail */
// 제품 이미지
const detail_prd_thum = new Swiper(".detail_prd_thum", {
    slidesPerView: "auto",
    spaceBetween: 4,
    loop:true,
    speed: 500,  
    navigation: {
        nextEl: '.detail_img .bottombox > .right .next_btn',
        prevEl: '.detail_img .bottombox > .right .prev_btn',
    },
    scrollbar: {
        el: ".detail_prd_thum .scrollbar",
        draggable: true,
    }
});

const detail_prd_img = new Swiper(".detail_prd_img", {
    loop:true,
    speed: 500,
    navigation: {
        nextEl: '.detail_prd_img .next_btn',
        prevEl: '.detail_prd_img .prev_btn',
    },
    pagination: {
        el: '.detail_prd_img .pagination',
        type: 'custom',
        clickable: true,
        renderCustom: function (swiper, current, total) {
            return '<span class="swiper-pagination-current">' + ('0' + current).slice(-2) + '</span>' + ' / ' + '<span class="swiper-pagination-total">' + ('0' + total).slice(-2) + '</span>';
        }
    },
    thumbs: {
        swiper: detail_prd_thum,
    },
});



/* full_modal */
$(document).mouseup(function (e) {
	if ($(".full_modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".full_modal").removeClass("show")
	}
});

$(document).ready(function() {
    $(".full_modal .close_btn").click(function () {
		$("body").removeClass("hidden")
		$(".full_modal").removeClass("show")    
    })
});

(function($) {
    $(document).ready(function() {
        $(".full_modal .modal_body .contbox").mCustomScrollbar({
            theme: "dark"
        });
    });
})(jQuery);



/* 지역 popup  */
$(document).ready(function() {
    $('.buycar_detail_wrap .side_wrap .infobox .infolist .infoitem .acc_contbox > .item .select_item .select_tit').on('click', function() {
        $('.buycar_detail_wrap .side_wrap .infobox .infolist .infoitem .acc_contbox > .item .select_item').removeClass('show');
        $(this).closest('.select_item').toggleClass('show');
    });

    $('.buycar_detail_wrap .side_wrap .infobox .infolist .infoitem .acc_contbox > .item .select_item .input_radio').on('change', function() {
        $(this).closest('.select_item').find('.title').text($(this).next('label').text());
        $(this).closest('.select_item').removeClass('show');
    });
});

$(document).mouseup(function (e) {
    if ($(e.target).closest('.buycar_detail_wrap .side_wrap .infobox .infolist .infoitem .acc_contbox > .item .select_item').length === 0) {
        $('.buycar_detail_wrap .side_wrap .infobox .infolist .infoitem .acc_contbox > .item .select_item').removeClass('show');
    }
});

(function($) {
    $(document).ready(function() {
        $(".buycar_detail_wrap .side_wrap .infobox .infolist .infoitem .acc_contbox > .item .select_item .select_popup").mCustomScrollbar({
            theme: "dark"
        });
    });
})(jQuery);



/* pastHistory popup */
function pastHistory() {
	$("body").addClass("hidden")
	$("#pastHistory_popup").addClass("show");
}



/* performance popup */
function performance() {
	$("body").addClass("hidden")
	$("#performance_popup").addClass("show");
}



/* optInfo popup */
function optInfo() {
	$("body").addClass("hidden")
	$("#optInfo_popup").addClass("show");
}



/* car filter popup */
// range slider
const currentYear = new Date().getFullYear();
const rangeslider1 = document.getElementById('rangeslider1');
if (rangeslider1) {
    noUiSlider.create(rangeslider1, {
        start: [2001, 2017],
        connect: true,
        range: {
            'min': 2001,
            'max': currentYear 
        }
    });
    
    rangeslider1.noUiSlider.on('update', function(values, handle) {
        const minYear = Math.round(values[0]);
        const maxYear = Math.round(values[1]);
        console.log(`연식 : ${minYear} - ${maxYear}`);
    });
}

const rangeslider2 = document.getElementById('rangeslider2');
if (rangeslider2) {
    noUiSlider.create(rangeslider2, {
        start: [0, 133220],
        connect: true,
        range: {
            'min': 0,
            'max': 200000
        }
    });
    
    rangeslider2.noUiSlider.on('update', function(values, handle) {
        const minKm = Math.round(values[0]);
        const maxKm = Math.round(values[1]);
        console.log(`주행거리 : ${minKm} - ${maxKm} km`);
    });
}


/* car detail popup */
$(document).ready(function() {
    $(".car_filter_popup .filter_box #mobfilter1 .select_btn").click(function () {
		$(".car_detail_popup.popup1").addClass("show")   
    })

    $(".car_detail_popup .back_btn").click(function () {
		$(this).closest(".car_detail_popup").removeClass("show")   
    })

    $(".car_detail_popup .reset_btn").click(function () {
        let popup = $(this).closest(".car_detail_popup");
        popup.find("input[type='radio']").prop("checked", false);
        popup.find("input[type='checkbox']").prop("checked", false);
    })
});

(function ($) {
    $(function () {
        $('.car_detail_popup  .accordion .acc_tit').on('click', 'input[type="checkbox"]', function (e) {
            e.stopPropagation();
        });
    });
}(jQuery));

function nextStep(num) {
    $(".car_detail_popup.popup" + num).addClass("show");
}



/* buycar detail */
// detail img popup
$(document).ready(function() {
    $(".buycar_detail_wrap .detail_img .mob_popup .close_btn").click(function () {
		$(".buycar_detail_wrap .detail_img .mob_popup").hide()   
    })
});

// detail side button
function detailSideBtn() {
	$("body").addClass("hidden")
	$(".buycar_detail_wrap .side_wrap").addClass("show");
}

// detail sidebox
$(document).mouseup(function (e) {
	if ($(".buycar_detail_wrap .side_wrap .side_cont").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".buycar_detail_wrap .side_wrap").removeClass("show")
	}
});