// 아코디언 기능
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


// 탭
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

    $(".datepicker").datepicker({
      maxDate: 'today',
    });
  }

  if ($(".datepicker_lnline").length) {
    $.datepicker.setDefaults({
	inline: true,
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

    $(".datepicker_lnline").datepicker({
		defaultDate: "2025-02-12"
	});
  }  
});


// select2 
$(document).ready(function() {
    function formatOption(data) {
        if (!data.id || $(data.element).data('hidden')) {
            return null; 
        }

        let iconUrl = $(data.element).data('icon');
        let $option = $('<span></span>');

        if (iconUrl) {
            $option.append('<img src="' + iconUrl + '" alt="" class="icon">');
        }
        $option.append('<span class="txt">' + data.text + '</span>');

        return $option;
    }
	$(".select2").each(function() {
        let customClass = $(this).data("class") || ""; 

        $(this).select2({
            templateResult: formatOption,
            templateSelection: formatOption,
            dropdownCssClass: customClass,  
        });
		
		let $selectContainer = $(this).next('.select2-container');
        
        if (!$selectContainer.hasClass(customClass)) {
            $selectContainer.addClass(customClass);
        }
    });
});


// 모달 공통
$(".modal .close_btn").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})

$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0 && $(".ui-datepicker").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
	}
});


// 오프캔버스 공통
$(".offcanvas .close_btn").click(function () {
	$(".offcanvas").removeClass("show")
})
$(".offcanvas .arrowclose_btn").click(function () {
	$(".offcanvas").removeClass("show")
})

$(document).mouseup(function (e) {
	if ($(".offcanvas").has(e.target).length === 0) {
		$(".offcanvas").removeClass("show")
	}
});


// 팝업 공통
$(".popup .pop_close").click(function () {
	$(this).closest(".popup").removeClass("show")
})

$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0 ) {
		$(".popup").removeClass("show")
	}
});

$(".opt_popup .opt_popbtn").click(function () {
    const popup = $(this).closest(".opt_popup");
    popup.find(".opt_popbtn").removeClass("selected");
    $(this).addClass("selected");

    const input = $(this).find('input[type="radio"]');
    if (input.length) {
        input.prop("checked", true).trigger("change");
    }
});

$(".opt_popup .opt_close").click(function () {
	$(".opt_popup").removeClass("show")
})


// 레이아웃 - 사이드
$(".navbox .sidenav .logo_btn").click(function () {
	$("#compayLogoPopup").addClass("show")
})

$("#compayLogoPopup #logoFile").change(function (e) {
    const file = e.target.files[0];
    if (file && file.type === "image/png") {
        const reader = new FileReader();
        reader.onload = function (event) {
            $(".popup .img").attr("src", event.target.result);
        };
        reader.readAsDataURL(file);
    } else {
        alert("PNG 파일만 업로드 가능합니다.");
        $("#logoFile").val("");
    }
});

const workspace = new Swiper('.navbox .contnav .workspace', {	
	speed:500,
	pagination: {
		el: '.navbox .contnav .workspace .swiper-pagination',
		clickable: true,
	}
})

function workspacePopup() {
	$(".workspace_popup").slideToggle("slow")
}


// 레이아웃 - 페이지 헤더
$(".page_header .alarm_btn").click(function () {
	$(".page_header .alarm_popup").addClass("show")
})


// 레이아웃 - 페이지 필터
$(".top_filer .align_btn").click(function () {
	$(".top_filer .align_popup").addClass("show")
})

$(".top_filer .filter_btn").click(function () {
	$(".top_filer .filter_popup").addClass("show")
})

$(".cont_top_filter .step_btn").click(function () {
	$(".cont_top_filter .step_popup").addClass("show")
})

$(".cont_top_filter .tblopt_btn").click(function () {
	$(".cont_top_filter .tblopt_popup").addClass("show")
})


// 타일리스트 
$(document).ready(function() {
    $(".tile_type .tile_select").on("change", function() {
        let selectedValue = $(this).val(); 
        $(this).siblings(".dot").attr("data-th", selectedValue);
    });

    // 초기 값 설정 (페이지 로드 시)
    $(".tile_type .tile_select").each(function() {
        let initialValue = $(this).val();
        $(this).siblings(".dot").attr("data-th", initialValue);
    });

	$(".tile_type .opt_btn").click(function () {
		$(this).siblings(".opt_popup").addClass("show")
	})
});


// 리스트타입 
$(document).ready(function() {
	$(".list_type .opt_btn").click(function () {
		$(this).siblings(".opt_popup").addClass("show")
	})
});


// 칸반보드 타일리스트 
$(document).ready(function() {
	$(".board_type .opt_btn").click(function () {
		$(this).siblings(".opt_popup").addClass("show")
	})

	$(".board_type .itemopt_btn").click(function () {
		$(this).siblings(".itemopt_popup").addClass("show")
	})
	
	$(".board_type .board_item .bottom").hover(
		function () {
			$(this).siblings(".evaluationStatus_popup").addClass("show");
		},
		function () {
			$(this).siblings(".evaluationStatus_popup").removeClass("show");
		}
	);	
	
	$(".board_type .board_item .result_btn").click(function () {
		$(this).siblings(".result_popup").addClass("show")
	})
});

$('.board_type_swiper').each(function () {
    const swiperContainer = $(this);
    const totalSlides = swiperContainer.find('.swiper-slide').length;

    const board_type_swiper = new Swiper(swiperContainer.get(0), {    
        speed: 500,
        slidesPerView: 'auto',
        spaceBetween: 24,    
        freeMode: true,
        initialSlide: totalSlides - 1,    
		touchStartPreventDefault: false,  
        touchMoveStopPropagation: false, 
    });
});


// 01온보딩_04약관동의
$(document).ready(function () {
	const allAgree = $(".login_wrap.terms_ver #allAgree");
	const checkboxes = $(".login_wrap.terms_ver .term_check .input_check");

	allAgree.on("change", function () {
		checkboxes.prop("checked", $(this).prop("checked"));
	});

	checkboxes.on("change", function () {
		const isAllChecked = checkboxes.length === $(".term_check .input_check:checked").length;
		allAgree.prop("checked", isAllChecked);
	});
});


// 02메인_01채용공고_06공고생성_01기본정보설정_01디폴트
$(document).ready(function() {
    $("#pdfSubmission").on("change", function() {
        if ($(this).is(":checked")) {
            $(this).closest(".switch_box").next(".error_box").removeClass("hide");
        } else {
            $(this).closest(".switch_box").next(".error_box").addClass("hide"); 
        }
    });
});


// 02메인_01채용공고_06공고생성_04평가자설정
$(".employ_estimator .align_btn").click(function () {
	$(".employ_estimator .align_popup").addClass("show")
})


// 02메인_02칸반보드_04리스트_04불합격_02검색필터case1
$(".filter_popup .opt_popbtn").click(function () {
    const popup = $(this).closest(".opt_popup");
    const input = $(this).find('input[type="radio"]');
    const selectedFilter = input.attr("id"); 
    popup.find(".opt_cont .contitem").removeClass("show");
    popup.find(".opt_cont ." + selectedFilter).addClass("show");
});


// 02메인_02칸반보드_04리스트_04불합격_08면접일정동시등록popup
$(document).ready(function () {
	$('.input_box.file_ver .file_btn').on('click', function () {
	  const fileInput = $(this).siblings('.file_input');
	  fileInput.click();
	});
  
	$('.input_box.file_ver .file_input').on('change', function () {
	  const fileName = this.files[0]?.name || '';
	  const fileNameInput = $(this).siblings('.file_name');
	  fileNameInput.val(fileName);
	});
});


// 03지원자화면_01지원서case
$(".top_filer .function_btn").click(function () {
	$(".top_filer .function_popup").addClass("show")
})

$(".top_filer .expansion_btn").click(function () {
	$(".expansion_offcanvas").addClass("show")
})

$(".volunteer_wrap .navbox .centerbox .add_btn").click(function () {
	$(this).siblings(".add_popup").addClass("show");
})

$(".expansion_offcanvas .close_btn").click(function () {
	$(".expansion_offcanvas").removeClass("show")
})

$(".expansion_offcanvas .cmt_btn").click(function () {
	$(this).siblings(".cmt_popup").addClass("show");
})

$(document).mouseup(function (e) {
	if ($(".expansion_offcanvas").has(e.target).length === 0 ) {
		$(".expansion_offcanvas").removeClass("show")
	}
});

$(document).ready(function () {
	$('.textarea_mode').on('input', function () {
		if ($(this).text().trim() === '') {
			$(this).addClass('empty');
		} else {
			$(this).removeClass('empty');
		}
	});

	$('.textarea_mode').each(function () {
		if ($(this).text().trim() === '') {
			$(this).addClass('empty');
		}
	});
});


// 03지원자화면_01지원서case
$("#directlyRegisterPopup .add_btn").click(function () {
	$("#directlyRegisterPopup .addmem_popup").toggleClass("show")
})


// 04통계_01채용통계
$('.chartfilter_box .filter_btn').on('click', function () {
    $(this).siblings().removeClass('on');   
    $(this).addClass('on');
});


// 07마이페이지_02계정정보관리
$(document).ready(function () {
    $("#preview").on("change", function (event) {
        const file = event.target.files[0];
        if (!file) return;

        const img = new Image();
        img.src = URL.createObjectURL(file);

        img.onload = function () {
            if (img.width < 200 || img.height < 200) {
                alert("이미지 크기가 200 x 200px 이상이어야 합니다.");
                $("#preview").val(""); 
                return;
            }
            $(".profile_upload .preview img").attr("src", img.src);
        };
    });
});


// 08설정_06메일발송popup_01디폴트
$('.input_textbox').on('click', function (e) {
	if ($(e.target).closest('.badge').length) {
		return;
	}

	const editableText = $(this).find('.editable_text');
	const inputPopup = $(this).siblings('.input_popup');
	if (editableText.length) {
		$(this).addClass('editable');
		editableText.focus();
		inputPopup.addClass('show');
	}
	e.stopPropagation();
});

$('.input_popup .input_btn').on('click', function () {
	const selectedText = $(this).text();
	const inputTextbox = $(this).closest('.input_popup').siblings('.input_textbox');
	const editableText = inputTextbox.find('.editable_text');
	const badgeBox = inputTextbox.find('.badgebox');
	const badge = $('<div class="badge typeB"><span class="txt"></span><button class="remove_btn"></button></div>');
	badge.find('.txt').text(selectedText);

	badgeBox.append(badge);
	$(this).closest('.input_textbox').removeClass('editable');
	$(this).closest('.input_popup').removeClass('show');
	editableText.val('');
});

$('.input_textbox .badgebox').on('click', '.remove_btn', function () {
	$(this).closest('.badge').remove();
});

$('.address_btn').on('click', function (e) {
	const inputPopup = $(this).siblings('.address_popup');
	inputPopup.addClass('show');
	e.stopPropagation();
});
  
$(document).on('click', function (e) {
	if (!$(e.target).closest('.input_textbox').length) {
		$('.input_textbox').removeClass('editable');
		$('.input_popup').removeClass('show');
	}
});

$('.input_box.file_ver .file_input').on('change', function () {
	const fileName = this.files[0]?.name || '';
	const fileNameInput = $(this).siblings('.file_name');
	fileNameInput.val(fileName);
});
  

// 08설정_15카드등록case
$(document).ready(function () {
    const allAgree = $("#cardRegistration_offcanvas #allAgree");
    const checkboxes = $("#cardRegistration_offcanvas .chk_list .input_check");

    allAgree.on("change", function () {
        checkboxes.prop("checked", $(this).prop("checked"));
    });

    checkboxes.on("change", function () {
        const isAllChecked = checkboxes.length === $("#cardRegistration_offcanvas .chk_list .input_check:checked").length;
        allAgree.prop("checked", isAllChecked);
    });
});
