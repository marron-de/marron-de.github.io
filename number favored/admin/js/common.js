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

    $(".datepicker").datepicker({
      maxDate: 'today',
    });
  }
});


// 팝업 공통
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


// 필터 버튼
$('.filter_box .filter_btn').on('click', function () {
    $(this).siblings().removeClass('on');   
    $(this).addClass('on');
});


// 03_회원정보 01_회원목록
$('.memberList_wrap .tbl_wrap .detail_btn').on('click', function () {
    $("#memberInformation_popup").addClass("show")
});


// 03_회원정보 02_회원현황 03_회원정보클릭시popup
$(document).ready(function () {
    let popup = $("#memberInformation_popup .planchage_popup");
    let toggleBtn = $("#memberInformation_popup .planChange_btn");
    let input = $("#memberInformation_popup .input_plan");

    // 팝업 열기/닫기 토글
    toggleBtn.on('click', function () {
        popup.toggleClass("show");
    });

    // 팝업 외부 클릭 시 닫기
    $(document).on('mouseup', function (e) {
        const isOutsideClick = !popup.is(e.target) && popup.has(e.target).length === 0;
        const isNotButtonClick = !toggleBtn.is(e.target) && toggleBtn.has(e.target).length === 0;

        if (isOutsideClick && isNotButtonClick) {
            popup.removeClass("show");
        }
    });

    // Plan 버튼 클릭 시 데이터 업데이트
    popup.on('click', '.plan_btn', function () {
        const selectedPlan = $(this).data('plan'); 
        input.data('plan', selectedPlan).attr('data-plan', selectedPlan);
        popup.removeClass("show");
    });
});


// 04_매출관리 02_결제내역 02_매출상세보기popup
$('.paymentList_wrap .tbl_wrap .view_btn').on('click', function () {
    $("#salesDetails_popup").addClass("show")
});


// 06_설정 01_당첨번호 01_디폴트
$('.winningNumber_wrap .tbl_wrap .number_btn').on('click', function () {
    $("#winningList_popup").addClass("show")
});

$('.winningNumber_wrap .tbl_wrap .edit_btn').on('click', function () {
    $("#winningRegistration_popup").addClass("show")
});

$('.winningNumber_wrap .page_bottom .registration_btn').on('click', function () {
    $("#winningRegistration_popup").addClass("show")
});


// 06_설정 01_당첨번호 02_당첨번호입력popup
$('#winningRegistration_popup .submit_btn').on('click', function () {
    $("#winningRegistration_popup").removeClass("show")
    $("#numberRegistration_popup").addClass("show")
});

// 06_설정 01_당첨번호 03_당첨번호등록popup
$('#winningRegistration_popup .submit_btn').on('click', function () {
    $("#numberRegistration_popup").addClass("show")
});


