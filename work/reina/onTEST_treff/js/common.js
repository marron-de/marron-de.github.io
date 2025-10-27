
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


// 05TREFF슈퍼바이저_02진행중인시험목록 
$(".treffExamList_wrap .list_section .contbox .item").hover(
  function () { $(this).addClass("hover"); },
  function () { $(this).removeClass("hover");}
);
