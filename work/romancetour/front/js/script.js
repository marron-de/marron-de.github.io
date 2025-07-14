
/* 버스 좌석보기 팝업 */
$(".seatPopup_show").click(function () {
	$(".busSeat_modal").addClass("show")
})

$(".busSeat_modal .modal_close").click(function () {
	$(".busSeat_modal").removeClass("show")
})

$(document).mouseup(function (e) {
	if ($(".busSeat_modal .modal_box").has(e.target).length === 0) {
		$(".busSeat_modal").removeClass("show")
	}
});


/* 버스 좌석선택 */
function checkScrollbar() {
  $('.seat_section .select_cont .seat_select .selectbox').each(function () {
    const box = $(this);
    if (box[0].scrollHeight > box.innerHeight()) {
      box.addClass('has_scroll');
    } else {
      box.removeClass('has_scroll');
    }
  });
}
$(window).on('load resize', checkScrollbar);

$(".seat_section .select_cont .seat_select .selectbox .item").click(function () {
	$(".seat_section .select_cont .seat_select .selectbox .item").removeClass("active")
	$(this).addClass("active")
})
