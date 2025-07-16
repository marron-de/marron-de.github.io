const who_swiper = new Swiper('.who_swiper', {

  loop: true,
  speed: 800,
  slidesPerView: 2,
  spaceBetween: '8%',
  centeredSlides: true,
  grabCursor: true,

  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },

});


const culture_swiper = new Swiper('.culture_swiper', {

  loop: true,
  speed: 500,

  spaceBetween: 0,

  pagination: {
    el: '.OurCulture_popup .pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.OurCulture_popup .next_btn',
    prevEl: '.OurCulture_popup .prev_btn',
  },

  breakpoints: { 
    1025: {
      spaceBetween: 30,
    }, 
  }

});


$(document).ready(function () {

  $(".OurCulture_page .ss1_culture .gall_item:not(.blank)").click(function () {
    $(".OurCulture_popup").addClass("show")
  })

  $(".OurCulture_popup .popup_close").click(function () {
    $(".OurCulture_popup").removeClass("show")
  })


  $('.Counseling_page .secret_mode').click(function (e) {
    e.preventDefault();
    alert('비공개 글입니다.');
  });

  $(".Counseling_page .question_btn").click(function () {
    $(".Counseling_popup").addClass("show")
  })

  $(".Counseling_popup .btn_cancel").click(function () {
    $(".Counseling_popup").removeClass("show")
    $(".Counseling_popup .error").removeClass("error");    
  })

  
  // 임시
  $(".Career_page .file_send").click(function () {
    alert("이력서 첨부! (임시 알림창)")   
  })

});


$(document).mouseup(function (e) {
  if ($(".OurCulture_popup.show .popup_contbox").has(e.target).length === 0 && $(".OurCulture_page .ss1_culture .gall_item:not(.blank)").has(e.target).length === 0) {
      $(".OurCulture_popup").removeClass("show");
  }
});

$(document).mouseup(function (e) {
  if ($(".Counseling_popup.show .popup_contbox").has(e.target).length === 0 && $(".question_btn").has(e.target).length === 0) {
      $(".Counseling_popup").removeClass("show");
      $(".Counseling_popup .error").removeClass("error");      
  }
});

function copyTextToClipboard(text) {
  const $tempInput = $('<input>');
  $('body').append($tempInput);
  $tempInput.val(text).select();
  document.execCommand('copy');
  $tempInput.remove();
  alert("주소 복사되었습니다");
}

$(document).ready(function() {
  $('.copy_btn').click(function() {
      let textToCopy = $(this).attr('data-text');
      copyTextToClipboard(textToCopy);
  });
});