
// pdf button (인쇄기하기 버튼으로 임시작업)
$('.pdf_btn').on('click', function() {
    window.print();
});


// progress width
function updateProgressWidths() {
    $('.progressbox .progress').each(function() {
        const progressWidth = $(this).width();
        $(this).css('--progress-width', progressWidth + 'px');
    });
}
$(document).ready(function() {
    updateProgressWidths();
});
$(window).on('resize', updateProgressWidths);
