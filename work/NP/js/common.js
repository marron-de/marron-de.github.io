
// layout
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1320;
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



// main section1 
const obj = document.querySelector('.ms1 .imgbox');

obj.className = 'imgbox step1';

const tl = gsap.timeline({ repeat: -1, repeatDelay: 1.5 });

tl.to({}, { duration: 0.1, onStart: () => obj.className = 'imgbox step1' })
  .to({}, { duration: 1.5, onStart: () => obj.className = 'imgbox step2' })
  .to({}, { duration: 1.5, onStart: () => obj.className = 'imgbox step3' });


// PC 전용 hover
function pcMode() {
  $('.ms1 .imgbox')
    .on('mouseenter', function () {
      $(this).addClass('hover');
      tl.pause();
    })
    .on('mouseleave', function () {
      $(this).removeClass('hover');
      tl.resume();
    });
}

// 모바일(1080px 이하) 전용 클릭 토글
function mobileMode() {
  let isPaused = false;

  $('.ms1 .imgbox').on('click', function () {
    $(this).toggleClass('hover');

    if (isPaused) {
      tl.resume();
      isPaused = false;
    } else {
      tl.pause();
      isPaused = true;
    }
  });
}

// 분기 실행
$(document).ready(function () {
  if (window.innerWidth <= 1080) {
    mobileMode();
  } else {
    pcMode();
  }
});



// main section2
$(document).ready(function() {
  const target = $('.ms2 .contbox .imgbox');
  const cont = $('.ms2 .contbox');

  function pcMode() {
    target.on('mouseenter', function() {
      cont.addClass('hover');
    });

    target.on('mouseleave', function() {
      cont.removeClass('hover');
    });
  }

  function mobileMode() {
    target.on('click', function() {
      cont.toggleClass('hover');
    });
  }

  function initMode() {
    target.off();
    if (window.innerWidth <= 1080) {
      mobileMode();
    } else {
      pcMode();
    }
  }

  initMode();
  $(window).on('resize', initMode);
});


// main section4
$(document).ready(function() {
  $('.ms4 .contbox .item')
    .on('mouseenter', function() {
      $(this).addClass('hover');
    })
    .on('mouseleave', function() {
      $(this).removeClass('hover');
    });
});


// main section5
$('.ms5 .contbox .item').on('click', function () {
  $(this).addClass('active').siblings().removeClass('active');
});


// main section6
$('.ms6 .contbox .imgitem').on('mouseenter', function () {
  const box = $(this).closest('.contbox');
  box.addClass('hover');
  $(this).addClass('active');
});

$('.ms6 .contbox .imgitem').on('mouseleave', function () {
  const box = $(this).closest('.contbox');
  box.removeClass('hover');
  $(this).removeClass('active');
});


// main section7
$(function () {
  $('.ms7 .contwrap').hover(
    function() {
      $(this).find('.contbox').addClass('hover');
    },
    function() {
      $(this).find('.contbox').removeClass('hover');
    }
  );
  $('.ms7 .contwrap .item').hover(
    function() {
      $(this).addClass('active');
    },
    function() {
      $(this).removeClass('active');
    }
  );
});
