<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_MSHOP_SKIN_URL.'/style.css">', 0);
add_javascript('<script src="'.G5_THEME_JS_URL.'/jquery.shop.list.js"></script>', 10);
?>
<style>
.assist_wrap{color:#333;margin-top:10px;font-size:1.167em;}
.assist_wrap p{display:block;width:95%;margin:0 auto;text-align:center;border-top: 1px solid #e0e0e0;padding-top: 10px;}
.assist_wrap table{margin:0 auto;}
.assist_wrap th{text-align:right;font-weight:400;}
.assist_wrap td{padding-left:20px;text-align:right;}
@media all and (max-width: 500px) {
	.assist_wrap td{padding-left:10px;}
}

</style>

<script src="<?php echo G5_JS_URL ?>/jquery.fancylist.js"></script>
<?php if($config['cf_kakao_js_apikey']) { ?>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script src="<?php echo G5_JS_URL; ?>/kakaolink.js"></script>
<script>
    // 사용할 앱의 Javascript 키를 설정해 주세요.
    Kakao.init("<?php echo $config['cf_kakao_js_apikey']; ?>");
</script>
<?php } ?>

 
    <!-- 상품진열 10 시작 { -->
    <?php
    $li_width = intval(100 / $this->list_mod);
    $li_width_style = ' style="width:'.$li_width.'%;"';

    for ($i=0; $row=sql_fetch_array($result); $i++) {
        if ($i == 0) {
            if ($this->css) {
                echo "<ul class=\"{$this->css} main_item\">\n";
            } else {
                echo "<ul class=\"main_item sct sct_10\">\n";
            }
        }

        echo "<li class=\"sct_li\"><div class=\"sct_li_wr\">\n";

        echo"<div class=\"img_wr\">";

        if ($this->href) {
            echo "<div class=\"sct_img\"><a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
        }

        if ($this->view_it_img) {
            echo get_it_image($row['it_id'], $this->img_width, $this->img_height, '', '', stripslashes($row['it_name']))."\n";
        }

        if ($this->href) {
            echo "</a></div>\n";
        }
  
        echo"<div class=\"sct_btn\">";
			echo "<div class=\"sct_cart_btn\"><button type=\"button\" class=\"btn_cart\" data-it_id=\"{$row['it_id']}\"><i data-lucide=\"shopping-cart\" class=\"svgicon\"></i></button></div>";
			if($member['mb_id']){
			echo "<div class=\"sct_wish_btn\"><button type=\"button\" class=\"btn_wish\" data-it_id=\"{$row['it_id']}\"><i data-lucide=\"heart\" class=\"svgicon\"></i></button></div>";
			}
		echo "</div>\n";

        echo"</div>";

        echo "<div class=\"sct_cartop\"></div>\n";


        if ($this->view_it_id) {
            echo "<div class=\"sct_id\">&lt;".stripslashes($row['it_id'])."&gt;</div>\n";
        }

        if ($this->href) {
            echo "<div class=\"sct_txt\"><a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
        }

        if ($this->view_it_name) {
        	echo '<div class="it_name">'.stripslashes($row['it_name']).'</div>';
        }
		if($row['it_name_sub']){
			echo '<div class="it_basic">'.$row['it_name_sub'].'</div>';
		}

        if ($this->href) {
            echo "</a></div>\n";
        }

        if ($this->view_it_icon) {
            echo "<div class=\"sct_icon_wr\">".item_icon2($row)."</div>\n";
        }
if((substr($row['ca_id'],0,2)=="10" || substr($row['ca_id'],0,2)=="20")){
		$it_price=get_price($row);
		$it_price2=round($it_price*0.015)*10;
		$it_price3=round($it_price*0.009)*10;
		$it_price4=round($it_price*0.006)*10;

		echo '<div class="assist_wrap">';
		echo '<table>';
		echo '<tr><!--<th>공단고시가</th>--><td class="price1">'.display_price($it_price).'</td></tr>';
		echo '<tr><th>본인부담금(15% 기준)</th><td class="price2">'.display_price($it_price2).'</td></tr>';
		echo '</table>';
}

        echo "</div></li>\n";
    }

    if ($i > 0) echo "</ul>\n";

    if($i == 0) echo "<p class=\"sct_noitem\">등록된 상품이 없습니다.</p>\n";
    ?>



<!-- } 상품진열 10 끝 -->
