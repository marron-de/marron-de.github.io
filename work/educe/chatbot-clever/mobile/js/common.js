/* 아코디언 기능 */
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


/* 헤더 기능 */
$(".header .menu_btn").click(function () {
	$(".hamburger_box").addClass("show")
})
$(".header .back_btn").click(function () {
	window.history.back();
})


/* 푸터 기능 */
$(".footer .f_title").click(function () {
	$(".footer").toggleClass("collapsed")
	$(".footer .f_info").slideToggle()
})

$(".footer .f_family_btn").click(function () {
	$(".footer .f_family").toggleClass("show")
	$(".footer .f_family .f_family_cont").slideToggle()
})


/* 팝업 기능 */
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})

$(".full_modal .modal_head .back_btn").click(function () {
	$(this).closest(".full_modal").removeClass("show");
})

$(".full_modal .modal_head .close_btn").click(function () {
	$("body").removeClass("hidden2")
	$(this).closest(".full_modal").removeClass("show");
})

$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0 && $(".full_modal").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$("body").removeClass("hidden2")
		$(".modal").removeClass("show")
	}
});


/* 카테고리 기능 */
$(document).ready(function () {
    if ($('.category_swiper').length) {
        const initialSlide = $('.category_swiper').attr('data-initial') || 0;        
        const category_swiper = new Swiper('.category_swiper', {
            speed: 500,
            slidesPerView: 'auto',
            initialSlide: initialSlide,
			allowSlideClick: false,
			slideToClickedSlide: false,
			touchMoveStopPropagation: false,
        });

        $(category_swiper.slides).each(function () {
            $(this).removeClass('swiper-slide-active');
        });

		const activeSlide = category_swiper.slides[initialSlide];
        // $(activeSlide).addClass('active');
    }
});


/* 탭 기능 */
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


/* select 필터 기능 */
$(document).ready(function () {
    $('.acc_select_box').each(function () {
        let selectBox = $(this);
        let select = selectBox.find('.select');
        let optList = selectBox.find('.opt_list');
        let options = optList.find('.opt_btn');

        options.each(function () {
            let value = $(this).data('value');
            let isHidden = $(this).attr('hidden') !== undefined;
            let isDisabled = $(this).attr('disabled') !== undefined;

            select.append(
                '<option value="' +
                    value +
                    '"' +
                    (isDisabled ? ' disabled' : '') +
                    (isHidden ? ' hidden' : '') +
                    '>' +
                    $(this).text() +
                    '</option>'
            );

            if ($(this).attr('checked') !== undefined && !isDisabled) {
                select.val(value);
                $(this).addClass('selected');
            }
        });

        select.on('change', function () {
            let selectedValue = select.val();
            options.each(function () {
                if ($(this).data('value') === selectedValue) {
                    $(this).addClass('selected');
                } else {
                    $(this).removeClass('selected');
                }
            });
        });

        options.on('click', function () {
            if ($(this).attr('disabled') === undefined) {
                let selectedValue = $(this).data('value');
                select.val(selectedValue).trigger('change');
                optList.hide();
            }
        });

        selectBox.find('.select_btn').on('click', function (e) {
            e.stopPropagation();
            $('.acc_select_box').not(selectBox).each(function () {
                $(this).find('.opt_list').hide();
                $(this).removeClass('show');
            });
            optList.toggle();
            selectBox.toggleClass('show');
        });

        $(document).on('click', function () {
            optList.hide();
            selectBox.removeClass('show');
        });

        select.trigger('change');
    });
});

$(".select_linkbox .select_btn").click(function () {
	let target = $(this).parent();
	target.toggleClass("show")
})

$(document).mouseup(function (e) {
	if ($(".select_linkbox ").has(e.target).length === 0) {
		$(".select_linkbox").removeClass("show")
	}
});


/* input 파일 기능 */
$(document).ready(function() {
    $('.input_box').each(function() {
        let fileInput = $(this).find('.input_file');
        let fileNameDisplay = $(this).find('.file_name');
        let selectButton = $(this).find('.small_btn');
        let fileBox = $(this).find('.file_box');

        selectButton.on('click', function() {
            fileInput.click();
        });

        fileInput.on('change', function() {
            if (fileInput[0].files.length > 0) {
                let fileName = fileInput[0].files[0].name;
                fileNameDisplay.text(fileName);
                fileBox.addClass('attached');
            } else {
                fileNameDisplay.text('첨부파일명');
                fileBox.removeClass('attached');
            }
        });
    });
});


/* 02_햄버거 */
$(".hamburger_box .close_btn").click(function () {
	$(".hamburger_box").removeClass("show")
})


/* 04_온보딩 02_회원가입 02_약관2 */
$(document).ready(function () {
    $('.join2_wrap #allAgree').on('change', function () {
        const isChecked = $(this).is(':checked');
        $('.join2_wrap .check_boxwrap .input_check').prop('checked', isChecked);
    });

    $('.join2_wrap .check_boxwrap .input_check').on('change', function () {
        const total = $('.join2_wrap .check_boxwrap .input_check').length;
        const checked = $('.join2_wrap .check_boxwrap .input_check:checked').length;

        $('.join2_wrap #allAgree').prop('checked', total === checked);
    });
});


/* 05_취업전략 02_합격자스펙검색엔진 14_직무적합도검사 */
$(document).ready(function () {
    if ($('.job_swiper').length && $('.job_tab').length) { 

        const job_tab = new Swiper('.job_tab', {
            speed: 500,
            slidesPerView: 'auto',
        });

        const job_swiper = new Swiper('.job_swiper', {
            speed: 500,
            thumbs: {
                swiper: job_tab, 
            },
        });
    }
});


/* 09_고객센터 03_제휴문의 */
$(document).ready(function () {
    $('.partnershipInquiry_wrap #allAgree').on('change', function () {
        const isChecked = $(this).is(':checked');
        $('.partnershipInquiry_wrap .check_boxwrap .input_check').prop('checked', isChecked);
    });

    $('.partnershipInquiry_wrap .check_boxwrap .input_check').on('change', function () {
        const total = $('.partnershipInquiry_wrap .check_boxwrap .input_check').length;
        const checked = $('.partnershipInquiry_wrap .check_boxwrap .input_check:checked').length;

        $('.partnershipInquiry_wrap #allAgree').prop('checked', total === checked);
    });
});


