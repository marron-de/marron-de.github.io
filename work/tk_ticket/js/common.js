

$(document).ready(function () {

	// 티켓 노출/미노출
	$(".test_btn").click(function () {
		$(".ticket_wrap").addClass("show")
	})

	$(".ticket_wrap .ticket_top .close_btn").click(function () {
		$(".ticket_wrap").removeClass("show")
	})

	// 유의사항 노출/미노출
	$(".ticket_wrap .notice_btn").click(function () {
		$(".ticket_wrap .ticket_box").addClass("flip")
	})
	$(".ticket_wrap .notice_close").click(function () {
		$(".ticket_wrap .ticket_box").removeClass("flip")
	})

	// 예매정보 노출/미노출
	$(".ticket_wrap .info_btn").click(function () {
		$(".ticket_wrap .ticket_info_popup").addClass("show")
	})
	$(".ticket_info_popup .popup_close").click(function () {
		$(".ticket_wrap .ticket_info_popup").removeClass("show")
	})

	// 직원확인 노출/미노출
	$(".ticket_info_popup .popup_btnbox .check_btn").click(function () {
		$(".ticket_wrap .popup_checkpopup").addClass("show")
	})
	$(".ticket_info_popup .popup_checkpopup .close_btn").click(function () {
		$(".ticket_wrap .popup_checkpopup").removeClass("show")
	})
	
	// 팝업 바깥 영역 클릭
	$(document).mouseup(function (e) {
    if ($(".ticket_wrap .popup_checkpopup").hasClass("show")) {
        if ($(".popup_checkpopup .chekbox").has(e.target).length === 0) {
            $(".ticket_wrap .popup_checkpopup").removeClass("show");
        }
        return;
    }
    if ($(".ticket_info_popup .popup_inner").has(e.target).length === 0) {
        $(".ticket_wrap .ticket_info_popup").removeClass("show");
    }
});

});


// 티켓 상품정보 swiper
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


// QR보기(QR이미지 & 예매정보) swiper
const popup_cont_slider1 = new Swiper(".popup_cont_slider.slider1", {		
	speed:500,
	spaceBetween: 20,
    navigation: {
      nextEl: ".popup_cont_slider.slider1 .next_btn",
      prevEl: ".popup_cont_slider.slider1 .prev_btn",
    },	
	// pagination: {
	// 	el: ".popup_cont_slider.slider1 .pagination",
	// },

});
const popup_cont_slider2 = new Swiper(".popup_cont_slider.slider2", {
	speed:500,
	spaceBetween: 20,
	controller: {
		control: popup_cont_slider1,  
	}
});
popup_cont_slider1.controller.control = popup_cont_slider2;