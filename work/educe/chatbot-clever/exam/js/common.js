
/* AI 버튼 */
$(document).on('mouseenter', '#aiBtn', function () {
  $(this).addClass("show");
});
$(document).on('mouseleave', '#aiBtn', function () {
  $(this).removeClass("show");
});


/* 유형분석 버튼 */
$(document).on('click', '.exam_wrap .btn_analysis', function () {
    $(".exam_wrap").addClass("result_open");

    $(".exam_wrap .exam_bottom .exam_button").removeClass("on");
    $(".exam_wrap .result_cont").removeClass("show");

    $(this).addClass("on");
    $(".exam_wrap .result_analysis").addClass("show");
});


/* 정답 및 심화해설 버튼 */
$(document).on('click', '.exam_wrap .btn_answer', function () {
    $(".exam_wrap").addClass("result_open");

    $(".exam_wrap .exam_bottom .exam_button").removeClass("on");
    $(".exam_wrap .result_cont").removeClass("show");

    $(this).addClass("on");
    $(".exam_wrap .result_answer").addClass("show");
});


/* 유사예제 버튼 */
$(document).on('click', '.exam_wrap .btn_example', function () {
    $(".exam_wrap").addClass("result_open");

    $(".exam_wrap .exam_bottom .exam_button").removeClass("on");
    $(".exam_wrap .result_cont").removeClass("show");

    $(this).addClass("on");
    $(".exam_wrap .result_example").addClass("show");
});


/* 풀이및정답 버튼 */
$(document).on('click', '.exam_wrap .result_example .more_answer', function () {
    $(".exam_wrap #answerItembox").addClass("show");

	const btn = $(this);

	if (btn.text() === "풀이 및 정답") {
        btn.attr("href", "#answerItembox");
        btn.text("유사문제");
    } else {
        btn.attr("href", "#exampleItembox");
        btn.text("풀이 및 정답");
    }
});