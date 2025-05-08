
function m_menu() {
	
	$("body").toggleClass("hidden");
	$(".header").toggleClass("open");
	$(".nav_box").toggleClass("open");
	$(".nav_icon").toggleClass("open");

}


$(document).mouseup(function (e) {

	if ($(".nav_box").has(e.target).length === 0 && $(".menu_icon").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$('.header').removeClass("open");
		$(".nav_box").removeClass("open");
		$(".nav_icon").removeClass("open");
	}

});


