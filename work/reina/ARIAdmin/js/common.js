// 공통 - 아코디언 기능
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


// 공통 - 탭
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


// 공통 - datepicker
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


// 공통 - select2 
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
		let placeholder = select.data("placeholder") || "";

        let container = select.select2({
            templateResult: formatOption,
            templateSelection: formatOption,
            dropdownCssClass: customClass,
    		width: '100%',
			placeholder: placeholder,
			allowClear: false,
        }).next('.select2-container');

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


// 공통 - 모달
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


// 공통 - 팝업 공통
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
$(".select_popup .opt_popbtn").click(function () {
    const popup = $(this).closest(".select_popup");
    popup.find(".opt_popbtn").removeClass("selected");
    $(this).addClass("selected");

    const input = $(this).find('input[type="radio"]');
    if (input.length) {
        input.prop("checked", true).trigger("change");
    }
});
$(".select_popup .opt_close").click(function () {
	$(".opt_popup").removeClass("show")
})


// 공통 - 네비게이션 버튼
$(".navigation .nav_btn").click(function () {
	$(".layout").toggleClass("closed")
})
$(".navigation .nav_open").click(function () {
	$(".layout").removeClass("closed")
})


// 공통 - 네비게이션 툴팁
$(".navigation .nav .acc_tit").hover(
  function () { $(this).addClass("hover"); },
  function () { $(this).removeClass("hover");}
);


// 공통 - 페이지 필터
$(".top_filer .option_btn").click(function () {
	$(".top_filer .option_btn").addClass("hide")
	$(".top_filer .option_close").removeClass("hide")
	$(".top_filer .option_popup").addClass("show")
})
$(".top_filer .option_close").click(function () {
	$(".top_filer .option_btn").removeClass("hide")
	$(".top_filer .option_close").addClass("hide")
	$(".top_filer .option_popup").removeClass("show")
})
$(".top_filer .sort_btn").click(function () {
	$(".top_filer .sort_popup").addClass("show")
})
$(".top_filer .filter_btn").click(function () {
	$(".top_filer .filter_popup").addClass("show")
})


// 공통 - 툴팁
$(".tooltip_box").hover(
  function () { $(this).addClass("hover"); },
  function () { $(this).removeClass("hover");}
);


// 공통 - 테이블 전체 체크
$(function() {
    let table = $(".tbl");

    table.find(".allCheck").on("change", function() {
        let checked = $(this).prop("checked");
        table.find('td[data-th="checkbox"] .input_check').prop("checked", checked);
    });

    table.on("change", 'td[data-th="checkbox"] .input_check', function() {
        let total = table.find('td[data-th="checkbox"] .input_check').length;
        let checkedCount = table.find('td[data-th="checkbox"] .input_check:checked').length;
        table.find(".allCheck").prop("checked", total === checkedCount);
    });
});


// 로그인 - 인툿 비밀번호 토글 버튼
$('.input_secret .secret_btn').on('click', function() {
    $(this).toggleClass('on');
    
    const pwdInput = $(this).closest('.input_secret').find('input');
	    
    if (pwdInput.attr('type') === 'password') {
        pwdInput.attr('type', 'text');
    } else {
        pwdInput.attr('type', 'password');
    }
});


// 지원 분야 선택 popup
$('#selectField_modal .field_selectbox .acc_cont .listbox .item').hover(
  function () { $(this).addClass("hover"); },
  function () { $(this).removeClass("hover");}
);
$('#selectField_modal .field_resultbox .result_box .item').hover(
  function () { $(this).addClass("hover"); },
  function () { $(this).removeClass("hover");}
);


// 파일 등록 
$(document).ready(function () {
    $('.input_filebox').each(function () {
        const box = $(this);
        const input = box.find('.input_file');
        const label = box.find('.label_file');
        const previewImg = box.find('.upload_box .img');
        const delBtn = box.find('.del_btn');

        input.on('change', function () {
            const file = this.files[0];
            
            if (file) {
                if (!file.type.match('image.*')) {
                    alert('이미지 파일만 등록 가능합니다.');
                    $(this).val('');
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImg.attr('src', e.target.result);
                    box.addClass('upload');
                };
                reader.readAsDataURL(file);
            } else {
                resetFileInput();
            }
        });

        delBtn.on('click', function () {
            resetFileInput();
        });

        function resetFileInput() {
            input.val('');
            previewImg.attr('src', '');
            box.removeClass('upload');
        }

        label.on('dragover', function (e) {
            e.preventDefault();
            e.stopPropagation();
            box.addClass('dragover');
        });

        label.on('dragleave drop', function (e) {
            e.preventDefault();
            e.stopPropagation();
            box.removeClass('dragover');
        });

        label.on('drop', function (e) {
            const files = e.originalEvent.dataTransfer.files;
            if (files && files.length > 0) {
                input[0].files = files;
                input.trigger('change');
            }
        });
    });
});