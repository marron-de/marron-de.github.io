// 팝업 공통
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})

$(".full_modal .modal_head .back_btn").click(function () {
	$(this).closest(".full_modal").removeClass("show");
})

$(".full_modal .modal_head .close_btn").click(function () {
	$("body").removeClass("hidden2")
	$(this).closest(".full_modal").removeClass("show");
})

$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0 && $(".full_modal").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$("body").removeClass("hidden2")
		$(".modal").removeClass("show")
	}
});


// 메뉴 공통
$(".header .menu_btn").click(function () {
	let loginStatus = $('.wrap.main_wrap').attr('data-login');
	if (loginStatus === 'login') {
		$("body").addClass("hidden2")
		$("#myLounge_modal").addClass("show");
	} else {
		$("body").addClass("hidden2")
		$("#login_modal").addClass("show");
	}
});


// 02_제휴문의
function inquiry_modal() {
	$("body").addClass("hidden2")
	$("#inquiry_modal").addClass("show")
}

$("#inquiry_modal .modal_head .back_btn").click(function () {
	$("body").removeClass("hidden2")
})


// 03_로그인 01_디폴트
$('#login_modal .submit_btn').on('click', function () {
	const id = $('#login_modal #login_id');
	const email = id.val();
	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // 이메일 형식 검증 정규식
	
	// 이메일 입력 확인
    if (!email) {
        id.focus();
        return;
    }

	// 이메일 형식 확인
	if (email && !emailRegex.test(email)) {
		$("#loginEmail_popup").addClass("show");
        return;
	}
});

$("#loginEmail_popup .modal_close").click(function () {
	const id = $('#login_modal #login_id');
	id.focus();
})

function joinTerms_modal() {
	$("body").addClass("hidden2")
	$("#joinTerms_modal").addClass("show")
}

function schPwd_modal() {
	$("body").addClass("hidden2")
	$("#schPwd_modal").addClass("show")
}


// 04_마이라운지 01_디폴트
$("#myLounge_modal .member_box .plan_btn").click(function () {
	$("body").addClass("hidden2")
	$("#planPurchase_modal").addClass("show")
})

function numberList_modal() {
	$("body").addClass("hidden2")
	$("#numberList_modal").addClass("show")
}

function payList_modal() {
	$("body").addClass("hidden2")
	$("#payList_modal").addClass("show")
}

function autoSend_modal() {
	$("body").addClass("hidden2")
	$("#autoSend_modal").addClass("show")
}

function withdraw_modal() {
	$("body").addClass("hidden2")
	$("#withdraw_modal").addClass("show")
}


// 04_마이라운지 02_번호생성내역
$("#numberList_modal .number_box:not('.notDrawn') .del_btn").click(function () {
	$("body").addClass("hidden")
	$("#deleteNumber_popup").addClass("show")
})


// 04_마이라운지 04_자동발송설정
$("#autoSend_modal .modal_foot .plan_btn").click(function () {
	$("body").addClass("hidden2")
	$("#planPurchase_modal").addClass("show")
})


// 04_마이라운지 05_회원탈퇴
$("#withdraw_modal .modal_foot .back_btn").click(function () {
	$("#withdraw_modal").removeClass("show")
})

$("#withdraw_modal .modal_foot .submit_btn").click(function () {
	$("#withdrawchk_popup").addClass("show")
})


// 04_마이라운지 05_회원탈퇴 03_플랜구매 
const planSwiper = new Swiper(".plan_swiper", {
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 16,
});

$("#planPurchase_modal .modal_head .back_btn").click(function () {
	let loginStatus = $('.wrap.main_wrap').attr('data-login');
	if (loginStatus !== 'login') {
		$("body").removeClass("hidden2")
		$("#planPurchase_modal").removeClass("show")
	} 
})


// 05_회원가입 01_약관동의
$(document).ready(function () {
	$('#joinTerms_modal #allTerms').on('change', function () {
		const isChecked = $(this).is(':checked');
		$('#joinTerms_modal .term_box .input_check').prop('checked', isChecked);
	});

	$('#joinTerms_modal .term_box .input_check').on('change', function () {
		const allChecked = $('#joinTerms_modal .term_item .input_check').not('#allTerms').length ===
			$('#joinTerms_modal .term_item .input_check:checked').not('#allTerms').length;
		$('#joinTerms_modal #allTerms').prop('checked', allChecked);
	});
});

$("#joinTerms_modal .modal_foot .back_btn").click(function () {
	$("#joinTerms_modal").removeClass("show")
})

$("#joinTerms_modal .modal_foot .submit_btn").click(function () {
	$("#joinTerms_modal").removeClass("show")
	$("#joinInfo_modal").addClass("show")
})


// 05_회원가입 02_정보입력
$("#joinInfo_modal .modal_foot .submit_btn").click(function () {
    const id = $('#joinInfo_modal #join_id');
    const pwd = $('#joinInfo_modal #join_pwd');
    const pwdchk = $('#joinInfo_modal #join_pwdchk');
    const email = id.val();
    const password = pwd.val();
    const passwordCheck = pwdchk.val();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // 이메일 입력 확인
    if (!email) {
        id.focus();
        return;
    }

    // 이메일 형식 확인
    if (!emailRegex.test(email)) {
        $("#joinEmail_popup").addClass("show");
        return;
    }

    // 비밀번호 입력 확인
    if (!password) {
        pwd.focus();
        return;
    }

    // 비밀번호 확인 입력 확인
    if (!passwordCheck) {
        pwdchk.focus();
        return;
    }

    // 비밀번호 일치 확인
    if (password !== passwordCheck) {
        $("#joinPwd_popup").addClass("show");
        return;
    }

    // 모든 조건 만족 시
    $("#joinDone_popup").addClass("show");
});

$("#joinDone_popup .modal_close").click(function () {
	$("#joinInfo_modal").removeClass("show")
	$("#joinDone_popup").removeClass("show")
})


// 06_비밀번호찾기
$('#schPwd_modal .submit_btn').on('click', function () {
	const id = $('#schPwd_modal #sch_id');
	const email = id.val();
	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // 이메일 형식 검증 정규식
	
	// 이메일 입력 확인
    if (!email) {
        id.focus();
        return;
    }

	// 이메일 형식 확인
	if (email && !emailRegex.test(email)) {
		$("#schEmail_popup").addClass("show")
        return;
	}

    // 모든 조건 만족 시
    $("#sendEmail_popup").addClass("show");
});

$("#schEmail_popup .modal_close").click(function () {
	const id = $('#schPwd_modal #sch_id');
	id.focus();
})

$("#sendEmail_popup .modal_close").click(function () {
	$("#schPwd_modal").removeClass("show")
	$("#sendEmail_popup").removeClass("show")
})


// 07_비밀번호재설정 02_재설정popup
$("#resetPwd_popup .modal_foot .submit_btn").click(function () {
    const pwd = $('#resetPwd_popup #reset_pwd');
    const pwdchk = $('#resetPwd_popup #reset_pwdchk');
    const password = pwd.val();
    const passwordCheck = pwdchk.val();

    // 비밀번호 입력 확인
    if (!password) {
        $("#resetPwdError_popup").addClass("show");
        return;
    }

    // 비밀번호 확인 입력 확인
    if (!passwordCheck) {
        $("#resetPwdError_popup").addClass("show");
        return;
    }

    // 비밀번호 일치 확인
    if (password !== passwordCheck) {
        $("#resetPwdChk_popup").addClass("show");
        return;
    }

    // 모든 조건 만족 시
    $("#resetPwdDone_popup").addClass("show");
});

$("#resetPwdDone_popup .modal_close").click(function () {
	$("#resetPwd_popup").removeClass("show")
	$("#resetPwdDone_popup").removeClass("show")
	window.location.href = "./page01_02.html";
})

$("#resetPwdChk_popup .modal_close").click(function () {
	$("#resetPwd_popup").addClass("show")
	$("#resetPwdChk_popup").removeClass("show")
})

$("#resetPwdError_popup .modal_close").click(function () {
	$("#resetPwd_popup").addClass("show")
	$("#resetPwdError_popup").removeClass("show")
})