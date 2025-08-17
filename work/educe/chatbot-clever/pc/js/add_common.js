

/* modal */
$(document).on('click', '.modal .modal_close', function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})
$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
	}
});


/* popup */
$(document).on("click", ".popup .pop_close", function () {
  $(this).closest(".popup").removeClass("show");
});
$(document).on("mouseup", function (e) {
  $(".popup.show").each(function () {
    const popup = $(this);
    const box = popup.find(".pop_box").length ? popup.find(".pop_box") : popup;
    if (!box.is(e.target) && box.has(e.target).length === 0) {
      popup.removeClass("show");
    }
  });
});


/* AI 버튼 */
$(document).on('mouseenter', '#aiBtn', function () {
  $(this).addClass("show");
});
$(document).on('mouseleave', '#aiBtn', function () {
  $(this).removeClass("show");
});


/* clvr popup menu button */
$(document).on('click', '.clvr_popup .pop_menu', function () {
    $(".clvr_popup .clvr_menu_popup").addClass("show");
});


/* clvr menu popup hover*/
$(document).on('mouseenter', '.clvr_menu_popup .menu_box .item', function () {
  $(this).addClass("hover");
});
$(document).on('mouseleave', '.clvr_menu_popup .menu_box .item', function () {
  $(this).removeClass("hover");
});


/* clvr popup menu button */
$(document).on('click', '.clvr_menu_popup .otp_btn', function (e) {
  e.stopPropagation();
  const popup = $(this).siblings('.clvr_menuopt_popup');
  $('.clvr_menuopt_popup').not(popup).removeClass('show');
  popup.toggleClass('show');
});
$(document).on('click', function (e) {
  if (!$(e.target).closest('.clvr_menu_popup .item').length) {
    $('.clvr_menuopt_popup').removeClass('show');
  }
});


/* clvr_popup swiper */
const ms1_latest2 = new Swiper('.result_source_swiper', {
	observer: true,
	observeParents: true,
	loop: true,
	speed:500,
	slidesPerView: 'auto',
	spaceBetween: 12,
    navigation: {
      nextEl: ".clvr_result .next_btn",
      prevEl: ".clvr_result .prev_btn",
    },
})