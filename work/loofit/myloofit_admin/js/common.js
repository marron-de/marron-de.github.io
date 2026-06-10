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

$('.chartfilter_box .filter_btn').on('click', function () {
    $(this).siblings().removeClass('on');   
    $(this).addClass('on');
});


// 리스트타입 
$(document).ready(function() {
	$(".list_type .opt_btn").click(function () {
		$(this).siblings(".opt_popup").addClass("show")
	})
});


// 01기업목록_05상세보기popup_01디폴트
$(".input_logo .file_input").change(function() {
    const logoFile = this.files[0]; 
    const logoImage = $(this).closest('.input_logo').find('.imgbox img');  
    if (logoFile) {
        const reader = new FileReader();
        reader.onload = function(event) {
            logoImage.attr("src", event.target.result);
        };
        reader.readAsDataURL(logoFile);
    } 
});


// 01기업목록_08등록카드보기popup
$("#companyInfo_offcanvas .register_btn").click(function () {
	$("#companyInfo_offcanvas .register_popup").addClass("show")
})
