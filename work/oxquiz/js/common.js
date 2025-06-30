
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


function movestep(step) {
	$('.page_section').removeClass('show');
	$('.p' + step + 'Sec').addClass('show');
	$('.wrap').attr('data-step', step);
	window.scrollTo(0, 0);
}


function updateShortScreenClass() {
  if ($(window).width() >= 1280) {
    if ($(window).height() <= 920) {
      $('body').addClass('short_view');
    } else {
      $('body').removeClass('short_view');
    }
  } else {
    $('body').removeClass('short_view');
  }
}

$(document).ready(function () {
  updateShortScreenClass();
  $(window).on('resize', updateShortScreenClass);
});
