<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->
    <script>
        $(function() {
            for (let i = 1; i <= 33; i++) {
                $(".pop-btn" + i).on("click", function() {
                    $("#popup" + i).fadeIn(500);
                });
            }
        });

        function pop_close() {
            for (let i = 1; i <= 33; i++) {
                $("#popup" + i).fadeOut(300);
            }
        }
    </script>
<!-- Smartlog -->
    <script type="text/javascript">
        var hpt_info={'_account':'UHPT-32473', '_server': 'a29'};
    </script>
    <script language="javascript" src="//cdn.smlog.co.kr/core/smart.js" charset="utf-8"></script>
    <noscript><img src="//a29.smlog.co.kr/smart_bda.php?_account=32473" style="display:none;width:0;height:0;" border="0"/></noscript>


<!-- 260725 추가 start-->
<script src="<?php echo G5_THEME_JS_URL ?>/custom.js?ver=<?php echo G5_JS_VER; ?>"></script>
<!-- 260725 추가 end-->

</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다. ?>