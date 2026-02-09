

$(document).ready(function () {

	$(".test_btn").click(function () {
		$(".ticket_wrap").addClass("show")
	})

	$(".ticket_wrap .ticket_top .close_btn").click(function () {
		$(".ticket_wrap").removeClass("show")
	})

	$(".ticket_wrap .notice_btn").click(function () {
		$(".ticket_wrap .ticket_box").addClass("flip")
	})

	$(".ticket_wrap .notice_close").click(function () {
		$(".ticket_wrap .ticket_box").removeClass("flip")
	})

	$(".ticket_wrap .info_btn").click(function () {
		$(".ticket_wrap .ticket_info_popup").addClass("show")
	})

	$(".ticket_info_popup .popup_btnbox .close_btn").click(function () {
		$(".ticket_wrap .ticket_info_popup").removeClass("show")
	})

	$(".ticket_info_popup .popup_btnbox .check_btn").click(function () {
		$(".ticket_wrap .popup_checkpopup").addClass("show")
	})

	$(".ticket_info_popup .popup_checkpopup .close_btn").click(function () {
		$(".ticket_wrap .popup_checkpopup").removeClass("show")
	})

});


const ticket_info_slider = new Swiper(".ticket_info_slider", {
		
	effect : 'fade',
	fadeEffect: { 
	crossFade: true 
	},

	loop: true,

	autoplay: {
		delay: 2000,
		disableOnInteraction: false,
	},

	pagination: {
		el: ".ticket_info_slider .pagination",
	},

});


const popup_cont_slider1 = new Swiper(".popup_cont_slider.slider1", {
		
	effect : 'fade',

	speed:500,
	loop: true,

	pagination: {
		el: ".popup_cont_slider.slider1 .pagination",
	},

});

const popup_cont_slider2 = new Swiper(".popup_cont_slider.slider2", {
		
	effect : 'fade',
	fadeEffect: { 
	crossFade: true 
	},

	speed:500,
	loop: true,

	controller: {
		control: popup_cont_slider1,  
	}

});

popup_cont_slider1.controller.control = popup_cont_slider2;