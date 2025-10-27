
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


// 체크박스
$(".check_box .input_check").on("change", function () {
  const parent = $(this).closest(".check_box");
  if ($(this).is(":checked")) {
    parent.addClass("checked");
  } else {
    parent.removeClass("checked");
  }
});


// 대기화면 채팅버튼
$(".waiting_wrap .waiting_top .chat_btn").click(function () {
	$(".chat_popup").addClass("show")
})
$(document).mouseup(function (e) {
	if ($(".chat_popup").has(e.target).length === 0) {
		$(".chat_popup").removeClass("show")
	}
});