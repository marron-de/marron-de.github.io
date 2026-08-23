<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_CSS_URL.'/style.css">', 0);
add_javascript('<script src="'.G5_THEME_JS_URL.'/jquery.shop.list.js"></script>', 10);
?>

<?php if($config['cf_kakao_js_apikey']) { ?>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script src="<?php echo G5_JS_URL; ?>/kakaolink.js"></script>
<script>
    // 사용할 앱의 Javascript 키를 설정해 주세요.
    Kakao.init("<?php echo $config['cf_kakao_js_apikey']; ?>");
</script>
<?php } ?>
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
<!-- <div class="sct-size"> 
    <button type="button" class="btn-size" id="btn-big">이미지크게보기</button>
    <button type="button" class="btn-size active" id="btn-small">이미지작게보기</button>
</div> -->
<!-- 상품진열 10 시작 { -->
<div class="sct_wrap nomargin" >
<?php
$li_width = intval(100 / $this->list_mod);
$li_width_style = ' style="width:'.$li_width.'%;"';

for ($i=0; $row=sql_fetch_array($result); $i++) {
    if ($i == 0) {
        if ($this->css) {
            echo "<ul id=\"sct_wrap\" class=\"{$this->css}\">\n";
        } else {
            echo "<ul id=\"sct_wrap\" class=\"sct sct_20\">\n";
        }
    }

    if($i % $this->list_mod == 0)
        $li_clear = ' sct_clear';
    else
        $li_clear = '';

    echo "<li class=\"sct_li\"><div class=\"sct_li_wr\">\n";

    echo "<div class=\"img_wr\">";

    if ($this->href) {
        echo "<a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\"><div class=\"sct_img\">\n";
    }

    if ($this->view_it_img) {
        //echo get_it_image($row['it_id'], $this->img_width, $this->img_height, '', '', stripslashes($row['it_name']))."\n";
		echo "<img src=\"".G5_DATA_URL."/item/{$row['it_img1']}\" alt=\"".stripslashes($row['it_name'])."\" style=\"object-fit:contain;\">";
    }

    if ($this->href) {
        echo "</div></a>\n";
    }

    // echo "<div class=\"sct_btn\">
    //         <div class=\"sct_cart_btn\">";
	// echo "<button type=\"button\" class=\"btn_cart\" data-it_id=\"{$row['it_id']}\"><span class=\"sound_only\">장바구니</span><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></button>";
	// //if($member['mb_id']){
	// echo "<button type=\"button\" class=\"btn_wish\" data-it_id=\"{$row['it_id']}\"><span class=\"sound_only\">위시리스트</span><i class=\"fa fa-heart\" aria-hidden=\"true\"></i></button>";
	// //}

	echo"<div class=\"sct_btn\">";
	echo "<div class=\"sct_cart_btn\"><button type=\"button\" class=\"btn_cart\" data-it_id=\"{$row['it_id']}\"><i data-lucide=\"shopping-cart\" class=\"svgicon\"></i></button></div>";
	// if($member['mb_id']){
	echo "<div class=\"sct_wish_btn\"><button type=\"button\" class=\"btn_wish\" data-it_id=\"{$row['it_id']}\"><i data-lucide=\"heart\" class=\"svgicon\"></i></button></div>";
	// }


	echo "
            </div>
        </div>\n";

    echo "</div>";

        echo "<div class=\"sct_cartop\"></div>\n";
		echo "<div class=\"sct_txt\"><div class=\"sct_icon_wr\">".item_icon2($row)."</div>\n";
    if ($this->href) {
        echo "<a href=\"{$this->href}{$row['it_id']}\" class=\"sct_a\">\n";
    }

    if ($this->view_it_name) {
        echo '<div class="it_name">'.stripslashes($row['it_name']).'</div>';
    }
	if($row['it_name_sub']){
		echo '<div class="it_basic">'.$row['it_name_sub'].'</div>';
	}

    if ($this->href) {
        echo "</a>\n";
    }
        echo "</div>\n";
    if ($this->view_it_price) {
        echo "<div class=\"sct_cost\">\n";
        echo display_price(get_price($row), $row['it_tel_inq'])."\n";
        echo "</div>\n";
    }

    // echo "<div class=\"sct_icon_wr\">".item_icon2($row)."</div>\n";

	if((substr($row['ca_id'],0,2)=="10" || substr($row['ca_id'],0,2)=="20")){
		$it_price=get_price($row);
		$it_price2=round($it_price*0.015)*10;
		$it_price3=round($it_price*0.009)*10;
		$it_price4=round($it_price*0.006)*10;

		echo '<div class="assist_wrap">';
		echo '<p>본인부담금</p>';
		echo '<table>';
		echo '<tr><!--<th>공단고시가</th>--><td class="price1">'.display_price($it_price).'</td></tr>';
		echo '<tr><th>본인부담금 (15% 기준)</th><td class="price2">'.display_price($it_price2).'</td></tr>';
		echo '<tr><th>본인부담금 (9%)</th><td>'.display_price($it_price3).'</td></tr>';
		echo '<tr><th>본인부담금 (6%)</th><td>'.display_price($it_price4).'</td></tr>';
        // if($row['it_1']){
        //     echo '<tr><td class="it_1" colspan=2><img src="'.G5_THEME_IMG_URL.'/new_260225.png" alt="">'.$row['it_1'].'</td></tr>';
        // }
		echo '</table></div>';
		if($row['it_1']){
			echo '<div class="it_txt"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="circle-alert" aria-hidden="true" class="lucide lucide-circle-alert svgicon"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="12"></line><line x1="12" x2="12.01" y1="16" y2="16"></line></svg><span class="txt">'.$row['it_1'].'</span></div>';
		}
	}else{
		// echo '<div class="assist_wrap">';
		// echo '<table>';
        // if($row['it_1']){
        //     echo '<tr><td class="it_1" colspan=2><img src="'.G5_THEME_IMG_URL.'/new_260225.png" alt="">'.$row['it_1'].'</td></tr>';
        // }
		// echo '</table></div>';
		if($row['it_1']){
			echo '<div class="it_txt"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="circle-alert" aria-hidden="true" class="lucide lucide-circle-alert svgicon"><circle cx="12" cy="12" r="10"></circle><line x1="12" x2="12" y1="8" y2="12"></line><line x1="12" x2="12.01" y1="16" y2="16"></line></svg><span class="txt">'.$row['it_1'].'</span></div>';
		}
	}

    echo "</li>\n";
}

if ($i > 0) echo "</ul>\n";

if($i == 0) echo "<p class=\"sct_noitem\">등록된 상품이 없습니다.</p>\n";
?>

</div>
<script>

    $(".sct-size button").click(function () {
        $(".sct-size button").removeClass("active");
        $(this).addClass("active");
    });
    $("#btn-small").click(function () {
        $(".sct_wrap").removeClass("big").addClass("small");
    });
    $("#btn-big").click(function () {
        $(".sct_wrap").removeClass("small").addClass("big");
    });

</script>
<!-- } 상품진열 10 끝 -->
