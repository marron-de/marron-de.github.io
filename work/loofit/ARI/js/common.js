
// progress width
function updateProgressWidths() {
  $('.progressbox .progress').each(function() {
    var progressWidth = $(this).width();
    $(this).css('--progress-width', progressWidth + 'px');
  });
}
updateProgressWidths();
$(window).on('resize', updateProgressWidths);
