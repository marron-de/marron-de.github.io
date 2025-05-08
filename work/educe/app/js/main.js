const ms1_swiper = new Swiper('.ms1_swiper', {
	loop: true,
	speed: 500,

	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},

	pagination: {
		el: '.ms1_swiper .pagination',
		clickable: true,
	},
})

const ms3_swiper = new Swiper('.ms3_swiper', {
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 12,
})

const ms4_swiper = new Swiper('.ms4_swiper', {
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 12,
})

const ms5_swiper = new Swiper('.ms5_swiper', {
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 12,
})

function mainPopup1() {
	let loginStatus = $('.wrap.main_wrap').attr('data-login');
	if (loginStatus !== 'login') {
		$("body").addClass("hidden")
		$("#ticketPurchaseChk_popup").addClass("show");
	}
}

function mainPopup2() {
	let loginStatus = $('.wrap.main_wrap').attr('data-login');
	$("body").addClass("hidden2")
	$("#selfIntroduction_popup").addClass("show");
	if (loginStatus !== 'login') {
		$("#selfIntroduction_popup .modal_modal").addClass("show");
	}
}

function mainPopup3() {
	let loginStatus = $('.wrap.main_wrap').attr('data-login');
	$("body").addClass("hidden2")
	$("#corporateAnalysis_popup").addClass("show");
	if (loginStatus !== 'login') {
		$("#corporateAnalysis_popup .modal_modal").addClass("show");
	}
}