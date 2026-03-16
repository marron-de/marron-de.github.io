// layout
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1280;
    const widthPercentage = 0.9;

    let calculatedWidth = windowWidth * widthPercentage;
    if (calculatedWidth > maxWidth) {
        calculatedWidth = maxWidth;
    }

    const marginLeft = (windowWidth - calculatedWidth) / 2;

    $('body').css('--margin-left', marginLeft + 'px');
    $('body').css('--margin-right', marginLeft + 'px');
});
$(document).ready(function() {
    $(window).trigger('resize');
});


// AOS
AOS.init({
	duration: 1000,
	easing: 'ease-out-expo',
})
window.addEventListener('load', function () {
	AOS.refresh();
});


/* form modal */
function form_modal() {
	$("body").addClass("hidden");
	$("#form_modal").addClass("show")
}
$("#form_modal .modal_close_btn").click(function () {
	$("body").removeClass("hidden")
	$("#form_modal").removeClass("show")
})
$('.input_box .input_etc').on('input', function() {
    if ($(this).val().trim() !== '') {
        $(this).addClass('is_filled');
    } else {
        $(this).removeClass('is_filled');
    }
});

// 질문5 직접입력 초괴화
$('#question5_etc').on('input', function() {
    if ($(this).val().trim() !== '') {
        $(this).addClass('is_filled');
        $('input[name="question5"]').prop('checked', false); 
    } else {
        $(this).removeClass('is_filled');
    }
});
$('input[name="question5"]').on('change', function() {
    $('#question5_etc').val('').removeClass('is_filled'); 
});


// alert modal
function showAlert(tit, desc) {
    $('#form_alert_modal .modal_tit').text(tit);
    $('#form_alert_modal .modal_desc').text(desc);
    $('#form_alert_modal .modal_close').hide();
    $('#form_alert_modal').addClass('show');

    $('#form_alert_modal .modal_confirm').off('click').on('click', function() {
        $('#form_alert_modal').removeClass('show');
    });
}
function showConfirm(tit, desc, callback) {
    $('#form_alert_modal .modal_tit').text(tit);
    $('#form_alert_modal .modal_desc').text(desc);
    $('#form_alert_modal .modal_close').show();
    $('#form_alert_modal').addClass('show');

    $('#form_alert_modal .modal_confirm').off('click').on('click', function() {
        $('#form_alert_modal').removeClass('show');
        callback();
    });

    $('#form_alert_modal .modal_close').off('click').on('click', function() {
        $('#form_alert_modal').removeClass('show');
    });
}
$(document).mouseup(function(e) {
    if ($('#form_alert_modal .modal_box').has(e.target).length === 0) {
        $('#form_alert_modal').removeClass('show');
    }
});


// form send
function sendMail() {

    if (form.name.value == '') {
        showAlert('다시 확인해주세요', '이름을 입력해주세요.');
        return;
    }

    if (form.company.value == '') {
        showAlert('다시 확인해주세요', '업체명을 입력해주세요.');
        return;
    }

    if (form.contact.value == '') {
        showAlert('다시 확인해주세요', '연락처를 입력해주세요.');
        return;
    }

    if (form.email.value == '') {
        showAlert('다시 확인해주세요', '이메일을 입력해주세요.');
        return;
    }

    if (!form.term_privacy.checked) {
        showAlert('동의가 필요해요', '개인정보 수집 및 이용에 동의해주세요.');
        return;
    }

    showConfirm('상담 신청', '메일을 전송하겠습니까?', function() {
        form.submit();
    });

}


/* term modal */
function term_modal() {
	$("#term_modal").addClass("show")
}
$("#term_modal .modal_close_btn").click(function () {
	$("#term_modal").removeClass("show")
})


