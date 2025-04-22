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

$(".modal .modal_close").click(function () {
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



// 레이아웃 - 헤더
$(".header .alarm_btn, .menu_offcanvas .alarm_btn").click(function () {
	$(".alarm_popup").addClass("show");
});

$(".alarm_popup .close_btn").click(function () {
	$(".alarm_popup").removeClass("show");
});

$(".header .menu_btn").click(function () {
	$(".menu_offcanvas").addClass("show");
});



// 레이아웃 - 옵션 버튼
$(document).ready(function() {
	$(".opt_btn").click(function () {
		$(this).siblings(".opt_popup").addClass("show")
	})
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

$(".sec_top .rightbox .align_btn").click(function () {
	$(this).siblings(".align_popup").addClass("show")
})



// 01온보딩_03약관동의
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



// 05마이페이지_03계정
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
