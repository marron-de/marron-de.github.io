<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_CSS_URL.'/style.css">', 0);
?>

<?php if($config['cf_kakao_js_apikey']) { ?>
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script src="<?php echo G5_JS_URL; ?>/kakaolink.js"></script>
<script>
    // 사용할 앱의 Javascript 키를 설정해 주세요.
    Kakao.init("<?php echo $config['cf_kakao_js_apikey']; ?>");
</script>
<?php } ?>

<form name="fitem" action="<?php echo $action_url; ?>" method="post" onsubmit="return fitem_submit(this);">
<input type="hidden" name="it_id[]" value="<?php echo $it['it_id']; ?>">
<input type="hidden" name="sw_direct">
<input type="hidden" name="url">

<div id="sit_ov_wrap">
    <?php
    // 이미지(중) 썸네일
    $thumb_img = '';
    $thumb_img_w = 600; // 넓이
    $thumb_img_h = 600; // 높이
    for ($i=1; $i<=10; $i++)
    {
        if(!$it['it_img'.$i])
            continue;

        $thumb = get_it_thumbnail($it['it_img'.$i], $thumb_img_w, $thumb_img_h);

        if(!$thumb)
            continue;

        $thumb_img .= '<div>';
        $thumb_img .= '<a href="'.G5_SHOP_URL.'/largeimage.php?it_id='.$it['it_id'].'&amp;no='.$i.'" class="popup_item_image slide_img" target="_blank">'.$thumb.'</a>';
        $thumb_img .= '</div>'.PHP_EOL;
    }
    if ($thumb_img)
    {
        echo '<div id="sit_pvi">'.PHP_EOL;
        echo '<div id="sit_pvi_slide" class="owl-carousel">'.PHP_EOL;
        echo $thumb_img;
        echo '</div>'.PHP_EOL;
        echo '</div>';
    }
    ?>

<script>

$("#sit_pvi_slide").owlCarousel({
    autoplay: true,
    center: true,
    loop: false,
    nav: true,
    responsiveClass:true,
    items:1
})
</script>
<style>
.wish_wrap{position:absolute;top:45px;right:0px;}
button.detail_btn_wish{width:24px;height:24px;background:#fff;border:none;background-image:url(/img/ico_detail_wish.svg);background-size: contain;background-color: #fff;}
button.detail_btn_wish.on{background-image:url(/img/ico_detail_wish_on.svg);}
</style>
    <div class="sit_ov_height">
    <section id="sit_ov" class="2017_renewal_itemform static">
        <div class="btn_buy_wr"><button type="button" class="op_btn">옵션선택하기 <i class="fa fa-angle-double-up" aria-hidden="true"></i></button> </div>
        <h2>상품간략정보 및 구매기능</h2>

        <div class="scroll_no">
            <div class="sit_ov_wr">
                <strong id="sit_title"><?php echo stripslashes($it['it_name']); ?></strong>
                <?php if($it['it_basic']) { ?><p id="sit_desc"><?php echo $it['it_basic']; ?></p><?php } ?>
                <?php if($is_orderable) { ?>
                <p id="sit_opt_info">
                    상품 선택옵션 <?php echo $option_count; ?> 개, 추가옵션 <?php echo $supply_count; ?> 개
                </p>
                <?php } ?>
				<div class="wish_wrap">
				<button type="button" class="btn_wish detail_btn_wish <?=$is_wish?"on":"";?>" data-it_id="<?=$it['it_id']?>"><!--<img src="<?=G5_THEME_IMG_URL?>/ico_detail_wish.svg">--></button>
				</div>

                <div class="sit_ov_tbl">
                    <table >
                    <colgroup>
                        <col class="grid_2">
                        <col>
                    </colgroup>
                    <tbody>

                    <?php
                    $ct_send_cost_label = '배송비결제';

                    if($it['it_sc_type'] == 1)
                        $sc_method = '무료배송';
                    else {
                        if($it['it_sc_method'] == 1)
                            $sc_method = '수령후 지불';
                        else if($it['it_sc_method'] == 2) {
                            $ct_send_cost_label = '<label for="ct_send_cost">배송비결제</label>';
                            $sc_method = '<select name="ct_send_cost" id="ct_send_cost">
                                              <option value="0">주문시 결제</option>
                                              <option value="1">수령후 지불</option>
                                          </select>';
                        }
                        else
                            $sc_method = '주문시 결제';
                    }
                    ?>
                    <tr>
                        <th><?php echo $ct_send_cost_label; ?></th>
                        <td><?php echo $sc_method; ?></td>
                    </tr>


	            <?php if (!$it['it_use']) { // 판매가능이 아닐 경우 ?>
	            <tr>
	                <th scope="row">판매가격</th>
	                <td>판매중지</td>
	            </tr>
	            <?php } else if ($it['it_tel_inq']) { // 전화문의일 경우 ?>
	            <tr>
	                <th scope="row">판매가격</th>
	                <td>전화문의</td>
	            </tr>
	            <?php } else { // 전화문의가 아닐 경우?>
<?php
	$it_price=get_price($it);
	$it_price2=round($it_price*0.015)*10;
	$it_price3=round($it_price*0.009)*10;
	$it_price4=round($it_price*0.006)*10;

	if(substr($it['ca_id'],0,2)=="10"){
		$price_text="공단고시가(월 대여료)";
		$price_text2="공단고시가(월 대여료)";
	}else{
		if(substr($it['ca_id'],0,2)=="20"){
			$price_text="공단고시가";
			$price_text2="공단고시가";
		}else{
			$price_text="소비자가";
			$price_text2="소비자가";
		}
	}
?>

	            <tr>
	                <th scope="row"><?=$price_text?></th>
	                <td><input type="hidden" id="it_price" value="<?php echo get_price($it); ?>">
	                    <?php echo display_price($it_price); ?>
					</td>
				</tr>
<?php
//if(substr($it['ca_id'],0,2)!="30" && substr($it['ca_id'],0,2)!="40" && substr($it['ca_id'],0,2)!="50" && substr($it['ca_id'],0,2)!="60"){
if(substr($it['ca_id'],0,2)=="10" || substr($it['ca_id'],0,2)=="20"){
?>
				<tr class="tr_price">
					<td colspan=2>
						<table cellspacing=0 class="price_info" style="width:90%;">
							<tr class="top">
								<th><?=$price_text2?></td>
								<td><?php echo display_price($it_price); ?></td>
							</tr>
							<tr>
								<th>본인부담금 15%</td>
								<td><?php echo display_price($it_price2); ?></td>
							</tr>
							<tr>
								<th>본인부담금 9%</td>
								<td><?php echo display_price($it_price3); ?></td>
							</tr>
							<tr>
								<th>본인부담금 6%</td>
								<td><?php echo display_price($it_price4); ?></td>
							</tr>
						</table>
	                </td>
	            </tr>
<?php }?>
	            <?php } ?>





                    <?php if ($it['it_maker']) { ?>
                    <tr>
                        <th scope="row">제조사</th>
                        <td><?php echo $it['it_maker']; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if ($it['it_origin']) { ?>
                    <tr>
                        <th scope="row">원산지</th>
                        <td><?php echo $it['it_origin']; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if ($it['it_brand']) { ?>
                    <tr>
                        <th scope="row">브랜드</th>
                        <td><?php echo $it['it_brand']; ?></td>
                    </tr>
                    <?php } ?>
                    <?php if ($it['it_model']) { ?>
                    <tr>
                        <th scope="row">모델</th>
                        <td><?php echo $it['it_model']; ?></td>
                    </tr>
                    <?php } ?>


                    <?php
                    /* 재고 표시하는 경우 주석 해제
                    <tr>
                        <th scope="row">재고수량</th>
                        <td><?php echo number_format(get_it_stock_qty($it_id)); ?> 개</td>
                    </tr>
                    */
                    ?>

                    <?php if (false && $config['cf_use_point']) { // 포인트 사용한다면 ?>
                    <tr>
                        <th scope="row"><label for="disp_point">포인트</label></th>
                        <td>
                            <?php
                            if($it['it_point_type'] == 2) {
                                echo '구매금액(추가옵션 제외)의 '.$it['it_point'].'%';
                            } else {
                                $it_point = get_item_point($it);
                                echo number_format($it_point).'점';
                            }
                            ?>
                        </td>
                    </tr>
                    <?php } ?>

                    <?php if($it['it_buy_min_qty']) { ?>
                    <tr>
                        <th>최소구매수량</th>
                        <td><?php echo number_format($it['it_buy_min_qty']); ?> 개</td>
                    </tr>
                    <?php } ?>
                    <?php if($it['it_buy_max_qty']) { ?>
                    <tr>
                        <th>최대구매수량</th>
                        <td><?php echo number_format($it['it_buy_max_qty']); ?> 개</td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                </div>

            </div>
        </div>
<?php
$new_it_price=$it_price;
if(substr($it['ca_id'],0,2)=="10" || substr($it['ca_id'],0,2)=="20"){
	//$new_it_price=$it_price2;
	$new_it_price=$it_price;
?>
		<div>
			<section class="sit_option">
				<label>본인부담금</label>
				<div class="sit_ov_wr">
<?php
if(substr($it['ca_id'],0,2)!="10"){
	$default_copay="F";
	$default_copay_text="등급 해당 없음";
}else{
	$default_copay="A";
	$default_copay_text="일반수급자(15%)";
}
$default_copay="";
$default_copay_text="본인부담금 선택";
?>
<div class="dropdown-container">
	<div class="dropdown-header" id="dropdown-trigger">
		<input type="hidden" name="copay" id="copay" value="<?=$default_copay?>">
		<span id="selected-option"><?=$default_copay_text?></span>
		<i class="dropdown-arrow"></i>
	</div>
	<div class="dropdown-options" id="dropdown-options">
		<div class="dropdown-option" data-value="A" data-text="일반수급자(15%)">일반수급자(15%)<br><strong><?=number_format($it_price2)?> 원</strong></div>
		<div class="dropdown-option" data-value="B" data-text="감경대상자(9%)">감경대상자(9%)<br><strong><?=number_format($it_price3)?> 원</strong></div>
		<div class="dropdown-option" data-value="C" data-text="감경대상자(6%)">감경대상자(6%)<br><strong><?=number_format($it_price4)?> 원</strong></div>
		<div class="dropdown-option" data-value="E" data-text="기초수급자(0%)">기초수급자(0%)<br><strong>0 원</strong></div>
		<?php if(substr($it['ca_id'],0,2)!="10"){?>
		<div class="dropdown-option" data-value="F" data-text="등급 해당 없음">등급 해당 없음<br><strong><?=number_format($it_price)?> 원</strong></div>
		<?php }?>
	</div>
</div>
<script>
$(document).ready(function() {
	// 드롭다운 토글
	$('#dropdown-trigger').on('click', function(e) {
		e.stopPropagation();
		$(this).toggleClass('active');
		$('#dropdown-options').toggleClass('show');
	});
	
	// 옵션 선택
	$('.dropdown-option').on('click', function(e) {
		e.stopPropagation();
		var selectedValue = $(this).data('value');
		var selectedText = $(this).data('text');
		$("#od_settle_case").val(selectedValue);
		
		// 드롭다운 업데이트
		$('#copay').val(selectedValue);
		$('#selected-option').text(selectedText);
		$('#dropdown-trigger').removeClass('active');
		$('#dropdown-options').removeClass('show');

		set_copay();
	});
	
	// 드롭다운 외부 클릭 시 닫기
	$(document).on('click', function() {
		$('#dropdown-trigger').removeClass('active');
		$('#dropdown-options').removeClass('show');
	});
            
});
</script>

					<!--
					<select name="copay" id="copay" class="frm_input" onchange="set_copay()">
						<option value="A">일반 15% (<?=number_format($it_price2)?> 원)</option>
						<option value="B">감경 9% (<?=number_format($it_price3)?> 원)</option>
						<option value="C">감경 6% (<?=number_format($it_price4)?> 원)</option>
						<option value="E">기초수급자 (0 원)</option>
						<?php if(substr($it['ca_id'],0,2)!="10"){?>
						<option value="F">등급 해당 없음 (<?=number_format($it_price)?> 원)</option>
						<?php }?>
					</select>
					-->
				</div>
			</section>
		</div>
<?php
}else{
?>
<input type="hidden" name="copay" id="copay" value="F">
<?php
}
?>
        <div class="scroll_show">
<?php
if(substr($it['ca_id'],0,2)!="30" && substr($it['ca_id'],0,2)!="40"){
?>
				<!-- <div>
					<table class="sit_ov_tbl" style="width:100%;border-top:none;">
					<colgroup>
						<col class="grid_3">
						<col>
					</colgroup>
					<tbody>

					<tr>
						<th scope="row">수급자성함[필수]</th>
						<td><input type="text" name="info_1" value="" id="info_1" class="frm_input" style="width:100%;"></td>
					</tr>
					<<tr>
						<th scope="row">장기요양인정번호[필수]</th>
						<td><input type="text" name="info_2" value="L" id="info_2" class="frm_input" style="width:100%;"></td>
					</tr>
					</table>
				</div> -->
<?php
}
?>
            <?php
            if($option_item) {
            ?>
            <section class="sit_option">
                <!-- <h3>선택옵션</h3> -->
                <table class="sit_op_sl">
                <colgroup>
                    <col class="grid_2">
                    <col>
                </colgroup>
                <tbody>
                <?php // 선택옵션
                echo $option_item;
                ?>
                </tbody>
                </table>
            </section>
            <?php
            }
            ?>

            <?php
            if($supply_item) {
            ?>
            <section class="sit_option">
                <h3>추가옵션</h3>
                <table class="sit_op_sl">
                <colgroup>
                    <col class="grid_2">
                    <col>
                </colgroup>
                <tbody>
                <?php // 추가옵션
                echo $supply_item;
                ?>
                </tbody>
                </table>
            </section>
            <?php
            }
            ?>

            <?php if ($it['it_use'] && !$it['it_tel_inq'] && !$is_soldout) { ?>
            <div id="sit_sel_option">
            <?php
            if(!$option_item) {
                if(!$it['it_buy_min_qty'])
                    $it['it_buy_min_qty'] = 1;
            ?>
                <ul id="sit_opt_added">
                    <li class="sit_opt_list">
                        <input type="hidden" name="io_type[<?php echo $it_id; ?>][]" value="0">
                        <input type="hidden" name="io_id[<?php echo $it_id; ?>][]" value="">
                        <input type="hidden" name="io_value[<?php echo $it_id; ?>][]" value="<?php echo $it['it_name']; ?>">
                        <input type="hidden" class="io_price" value="0">
                        <input type="hidden" class="io_stock" value="<?php echo $it['it_stock_qty']; ?>">
                        <div class="opt_name">
                            <span class="sit_opt_subj"><?php echo $it['it_name']; ?></span>
                        </div>
                        <div class="opt_count">
                            <label for="ct_qty_<?php echo $i; ?>" class="sound_only">수량</label>
                            <button type="button" class="sit_qty_minus"><i class="fa fa-minus" aria-hidden="true"></i><span class="sound_only">감소</span></button>
                            <input type="text" name="ct_qty[<?php echo $it_id; ?>][]" value="<?php echo $it['it_buy_min_qty']; ?>" id="ct_qty_<?php echo $i; ?>" class="num_input" size="5">
                            <button type="button" class="sit_qty_plus"><i class="fa fa-plus" aria-hidden="true"></i><span class="sound_only">증가</span></button>
                            <span class="sit_opt_prc" style="display:none;">+0원</span>
							<span id="sit_opt_price" style="float:right;display: block;padding: 0 3px;text-align: right;line-height: 30px;font-size: 1.183em;font-weight: bold;"><?=display_price($new_it_price)?></span>
                        </div>
                    </li>
                </ul>
                <script>
                $(function() {
                    price_calculate();
                });
                </script>
            <?php } ?>
            </div>

            <div id="sit_tot_price" style="display:;"></div>
            <?php } ?>

            <?php if($is_soldout) { ?>
            <p id="sit_ov_soldout">상품의 재고가 부족하여 구매할 수 없습니다.</p>
            <?php } ?>

            <!--<div class="cart_plus">-->
            <!--  <button type="button" style="width:100%;background:#7092bf;text-align:center;cursor:pointer;" onclick="apply_write()" value="구매요청서" class="sit_btn_apply">바로 주문하기</button>-->
            <!--</div>-->
	    <!--    <div id="sit_ov_btn_new">-->
		<!--		<button type="submit" style="width:32%;background:#fff;text-align:center;cursor:pointer;border:1px solid #222; color:#222;" onclick="document.pressed=this.value;" value="장바구니" class="sit_btn_cart">-->
        <!--            <img src="--><?php //echo G5_THEME_IMG_URL ?><!--/scart.png" alt=""><b>장바구니</b></button>-->
        <!--<div class="new_call" style="width:32%;background:#262561;text-align:center;cursor:pointer;" onclick="kakaotalk()"><a href="tel:010-5405-1955" target="_blank"><i class="fa-solid fa-phone"></i> 전화상담</a></div>-->
		<!--		 <div style="width:32%;background:#fff112;text-align:center;cursor:pointer;" onclick="kakaotalk()"><a href="http://pf.kakao.com/_mxbxaMb/chat" target="_blank"><img src="/img/kakaotalk.png"></a></div> -->
        <!--<div class="new_call" style="width:32%;background:#fff112;text-align:center;cursor:pointer;" onclick="kakaotalk()"><a href="http://pf.kakao.com/_mxbxaMb/chat" target="_blank" style="color:#333"><i class="ri-kakao-talk-fill"></i> 카톡상담</a></div>-->
		<!--	</div>-->
            <div id="sit_ov_btn_new">

                <button type="button" style="width:32;background:#073260;text-align:center;cursor:pointer;" onclick="apply_write()" value="구매요청서" class="sit_btn_apply">구매하기</button>
                <button type="submit" style="width:49%;background:#fff;text-align:center;cursor:pointer;border:1px solid #ccc; color:#333;" onclick="document.pressed=this.value;" value="장바구니" class="sit_btn_cart">
                    <b>장바구니</b></button>
                <!--<div class="new_call" style="width:32%;background:#262561;text-align:center;cursor:pointer;" onclick="kakaotalk()"><a href="tel:010-5405-1955" target="_blank"><i class="fa-solid fa-phone"></i> 전화주문</a></div>-->
                <!-- <div style="width:32%;background:#fff112;text-align:center;cursor:pointer;" onclick="kakaotalk()"><a href="http://pf.kakao.com/_mxbxaMb/chat" target="_blank"><img src="/img/kakaotalk.png"></a></div> -->
            </div>
      <div class="sit_notice">
	  <?php
	  if(is_mobile()) {
		  echo '<a href="tel:01054051955">';
	  }else{
		  echo '<a href="http://pf.kakao.com/_DxgkxbX/chat">';
	  }
	  ?>
	  	<!-- <img src="<?=G5_THEME_IMG_URL?>/calling.png?ver=1" title="24시간 연중무휴 야간상담 가능"></a> -->
	  	<img src="<?=G5_THEME_URL?>/newimg/calling.jpg" title="24시간 연중무휴 야간상담 가능"></a>
        <!--<h3>24시간 연중무휴 야간상담 가능</h3>-->
        <!--<p><b>주문하기</b> - 홈페이지로 바로 주문하기&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>-->
        <!--<p><b>전화상담</b> - 담당자와 전화 상담 후 주문하기</p>-->
        <!--<p><b>카톡상담</b> - 담당자와 카톡 상담 후 주문하기</p>-->
      </div>

            <div id="sit_ov_btn" style="display:none;">
                <?php if ($is_orderable) { ?>
                <input type="submit" onclick="document.pressed=this.value;" value="바로구매" id="sit_btn_buy">
                <input type="submit" onclick="document.pressed=this.value;" value="장바구니" id="sit_btn_cart">
                <?php } ?>
                <?php if(!$is_orderable && $it['it_soldout'] && $it['it_stock_sms']) { ?>
                <a href="javascript:popup_stocksms('<?php echo $it['it_id']; ?>');" id="sit_btn_buy">재입고알림</a>
                <?php } ?>
                <a href="javascript:item_wish(document.fitem, '<?php echo $it['it_id']; ?>');" id="sit_btn_wish">위시리스트</a>
                <?php
                    $href = G5_SHOP_URL.'/iteminfo.php?it_id='.$it_id;
                    ?>
                    <a href="javascript:popup_item_recommend('<?php echo $it['it_id']; ?>');" id="sit_btn_rec">추천하기</a>
                <?php if ($naverpay_button_js) { ?>
                <div class="naverpay-item"><?php echo $naverpay_request_js.$naverpay_button_js; ?></div>
                <?php } ?>
            </div>
        </div>

         <div id="sit_star_sns" class="scroll_no">
            <?php
            $sns_title = get_text($it['it_name']).' | '.get_text($config['cf_title']);
            $sns_url  = G5_SHOP_URL.'/item.php?it_id='.$it['it_id'];

            if ($score = get_star_image($it['it_id'])) { ?>
            <span class="sound_only">고객평점 <?php echo $score?>개</span>
            <img src="<?php echo G5_SHOP_URL; ?>/img/s_star<?php echo $score?>.png" alt="" class="sit_star" width="100"> <span class="st_bg"></span>
            <?php } ?>


             <!--<i class="fa fa-commenting-o" aria-hidden="true"></i><span class="sound_only">리뷰</span> <?php echo $item_use_count; ?>-->
            <span class="st_bg"></span> <i class="fa fa-heart-o" aria-hidden="true"></i><span class="sound_only">위시</span> <?php echo get_wishlist_count_by_item($it['it_id']); ?>
            <button type="button" class="btn_sns_share"><i class="fa fa-share-alt" aria-hidden="true"></i><span class="sound_only">sns 공유</span></button>
            <div class="sns_area">
                <?php echo get_sns_share_link('facebook', $sns_url, $sns_title, G5_MSHOP_SKIN_URL.'/img/facebook.png'); ?>
                <?php echo get_sns_share_link('twitter', $sns_url, $sns_title, G5_MSHOP_SKIN_URL.'/img/twitter.png'); ?>
                <?php echo get_sns_share_link('googleplus', $sns_url, $sns_title, G5_MSHOP_SKIN_URL.'/img/gplus.png'); ?>
                <?php echo get_sns_share_link('kakaotalk', $sns_url, $sns_title, G5_MSHOP_SKIN_URL.'/img/sns_kakao.png'); ?>

            </div>
        </div>
        <script>
        $(".btn_sns_share").click(function(){
            $(".sns_area").show();
        });
        $(document).mouseup(function (e){
            var container = $(".sns_area");
            if( container.has(e.target).length === 0)
            container.hide();
        });


        </script>
    </section>
    </div>
</div>


<?php
$od_ids = array();
$sql = " select distinct od_id from {$g5['g5_shop_cart_table']} where it_id = '$it_id' and ct_status in ('입금', '준비', '배송', '완료') order by od_id desc limit 50 ";
$result = sql_query($sql);
for($k=0; $row=sql_fetch_array($result); $k++) {
    if($row['od_id'])
        $od_ids[] = $row['od_id'];
}

if(!empty($od_ids)) {
    $sql = " select it_id, it_name, sum(ct_qty) as qty from {$g5['g5_shop_cart_table']} where od_id in ( '".implode("', '", $od_ids)."' ) and it_id <> '$it_id' group by it_id order by qty desc limit 6 ";
    $result = sql_query($sql);

    if(sql_num_rows($result)) {
?>

<!-- 같이구매한상품 시작 { -->
<section id="sit_relbuy">
    <h2>이상품과 <strong>같이 구매한 상품</strong>입니다 </h2>
    <ul id="sct_relbuyitem">
        <?php
        for($k=0; $row=sql_fetch_array($result); $k++) {
            $name = get_text($row['it_name']);
            $img  = get_it_image($row['it_id'], 230, 230, false, '', $name);
            $href = G5_SHOP_URL.'/item.php?it_id='.$row['it_id'];

            if(!$img)
                continue;
        ?>
        <li>
            <a href="<?php echo $href; ?>" class="sct_a"><?php echo $img; ?></a>
        </li>
        <?php
        }
        ?>
    </ul>
</section>

<?php
    }
}
?>

<?php
	$sql = "SELECT COUNT(*) as cnt FROM g5_write_setup WHERE wr_1 = '{$it_id}'";
	$row = sql_fetch($sql);
	$gallery_count = $row['cnt'];
?>
<style>
.tab_wrap { background: #fff;}  /* 배경색 필수 */
.sanchor{width:100%;}
.sanchor li{width:30%;}
.tab_wrap.tab_fixed {
    position: fixed;
    top: 0px;             /* 상단 메뉴 바로 아래 */
    left: 0;
    width: 100%;
    z-index: 99;           /* 상단 메뉴 z-index보다 낮게 */
    box-shadow: 0 2px 6px rgba(0,0,0,.1);
}

.tab_wrap_placeholder {
    height: 0;
    overflow: hidden;
}
@media screen and (max-width:768px){
	.tab_wrap.tab_fixed{top: 0px; }
}
</style>
<!-- 상품 정보 시작 { -->
<div class="tab_wrap">
    <ul class="sanchor">
        <li><a href="#sit_inf" class="sanchor_on">상품정보</a></li>
		<?php if($it['it_2']){?><li><a href="#sit_gallery">설치사진 <span class="item_use_count"><?php echo $gallery_count; ?></span></a></li><?php }?>
        <li><a href="#sit_use">상품후기 <span class="item_use_count"><?php echo $item_use_count; ?></span></a></li>
    </ul>
</div>
<div class="tab_wrap_placeholder"></div> 
<section id="sit_inf" class="sit_con">
    <h2>상품 정보</h2>
    <?php if ($it['it_basic']) { // 상품 기본설명 ?>
    <h3>상품 기본설명</h3>
    <div id="sit_inf_basic">
         <?php echo $it['it_basic']; ?>
    </div>
    <?php } ?>

    <?php if ($it['it_explan']) { // 상품 상세설명 ?>
    <h3>상품 상세설명</h3>

		<style>
		.video {width: 100%;max-width: 924px;margin: 30px auto;border-radius: 30px;background-color: #f0f0f0;padding: 0px;box-sizing: border-box;}
		.video-container {position: relative;width: 100%;height: auto;padding-top: 50%;}
		.video-container iframe {z-index: 1;top: 0;left: 0;position: absolute;width: 100%;height: 100%;}
		</style>
		<?php if ($it['it_explan_movie']) { // 상품 상세설명 ?>
		<style>
		video { width:100%;max-width:924px;height:auto;}
		</style>
		<div style="margin:20px auto;text-align:center;">
		<video width="640" height="360" controls preload="metadata">
		  <source src="<?=G5_DATA_URL."/movie/".$it['it_explan_movie']?>" type="video/mp4">
		</video>
		</div>
		<?php } ?>
		<?php if ($it['it_explan_youtube']) { // 상품 상세설명 ?>
		<div class="video">
			<div class="video-container">
			  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?=$it['it_explan_youtube']?>?controls=0&autoplay=1&mute=1&" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<?php } ?>

    <div id="sit_inf_explan">
        <?php echo conv_content($it['it_explan'], 1); ?>
    </div>
    <?php } ?>

    <?php
    if ($it['it_info_value']) { // 상품 정보 고시
        $info_data = unserialize(stripslashes($it['it_info_value']));
        if(is_array($info_data)) {
            $gubun = $it['it_info_gubun'];
            $info_array = $item_info[$gubun]['article'];
    ?>
    <h3>상품 정보 고시</h3>
    <table id="sit_inf_open">
    <colgroup>
        <col class="grid_4">
        <col>
    </colgroup>
    <tbody>
    <?php
    foreach($info_data as $key=>$val) {
        $ii_title = $info_array[$key][0];
        $ii_value = $val;
    ?>
    <tr>
        <th scope="row"><?php echo $ii_title; ?></th>
        <td><?php echo $ii_value; ?></td>
    </tr>
    <?php } //foreach?>
    </tbody>
    </table>
    <!-- 상품정보고시 end -->
    <?php
        } else {
            if($is_admin) {
                echo '<p>상품 정보 고시 정보가 올바르게 저장되지 않았습니다.<br>config.php 파일의 G5_ESCAPE_FUNCTION 설정을 addslashes 로<br>변경하신 후 관리자 &gt; 상품정보 수정에서 상품 정보를 다시 저장해주세요. </p>';
            }
        }
    } //if
    ?>

</section>
<!-- } 상품 정보 끝 -->

<!-- 사용후기 시작 { -->
<?php 
if($it['it_2']){
	$sql = "SELECT COUNT(*) as cnt FROM g5_write_setup WHERE wr_1 = '{$it_id}'";
	$row = sql_fetch($sql);
	$gallery_count = $row['cnt'];
?>
<section id="sit_gallery" class="sit_con">
    <h2>설치사진</h2>
    <div id="itemgallery">
		<?php include_once('./itemgallery.php'); ?>
	</div>

</section>
<?php }?>

<section id="sit_use" class="sit_con">
    <h2>사용후기</h2>
    <div id="itemuse"><?php include_once('./itemuse.php'); ?></div>
</section>
<!-- } 사용후기 끝 -->

<script>
$(function() {
    var HEADER_H  = 80;   /* 상단 고정 메뉴 높이 */
    var $tabWrap  = $('.tab_wrap');
    var $ph       = $('.tab_wrap_placeholder');
    var tabOffset = $tabWrap.offset().top;  /* 초기 위치 저장 */
    var tabHeight = $tabWrap.outerHeight();
    var OFFSET    = HEADER_H + tabHeight;    /* 섹션 감지 기준 오프셋 */
    var isScrolling = false;               /* 클릭 스크롤 중 자동감지 방지 */

    /* ---- sticky ---- */
    function onScroll() {
        var st = $(window).scrollTop();

        /* 고정 여부 */
        if (st >= tabOffset - HEADER_H) {
            if (!$tabWrap.hasClass('tab_fixed')) {
                $tabWrap.addClass('tab_fixed');
                $ph.css('height', tabHeight);
				$(".hd_log").hide();
				$("#hd_tnb").hide();
				$(".hd_all_wr").hide();
            }
        } else {
            if ($tabWrap.hasClass('tab_fixed')) {
                $tabWrap.removeClass('tab_fixed');
                $ph.css('height', 0);
				$(".hd_log").show();
				$("#hd_tnb").show();
				$(".hd_all_wr").show();
            }
        }

        /* 클릭으로 스크롤 중이면 자동 활성화 건너뜀 */
        if (isScrolling) return;

        /* ---- 섹션 자동 활성화 ---- */
        var current = '';

        $('.sit_con').each(function() {
            var secTop = $(this).offset().top - OFFSET - 10;
            if (st >= secTop) {
                current = $(this).attr('id');
			console.log(current);
            }
        });

        if (current) {
            $('.sanchor a').removeClass('sanchor_on');
            $('.sanchor a[href="#' + current + '"]').addClass('sanchor_on');
        }
    }

    $(window).on('scroll', onScroll);

    /* ---- 탭 클릭 ---- */
    $('.sanchor a').on('click', function(e) {
        e.preventDefault();

        $('.sanchor a').removeClass('sanchor_on');
        $(this).addClass('sanchor_on');

        var target    = $(this).attr('href');
        var targetTop = $(target).offset().top - OFFSET;

        isScrolling = true;  /* 자동감지 잠금 */

        $('html, body').animate(
            { scrollTop: targetTop },
            400,
            'swing',
            function() {
                isScrolling = false;  /* 애니메이션 끝나면 해제 */
            }
        );
    });

    /* 초기 로드 시 한 번 실행 */
    onScroll();
});
/* ===== placeholder 높이 JS 보완 (선택사항) ===== */
/*
$(window).on('scroll', function() {
    if ($tabWrap.hasClass('tab_fixed')) {
        $('.tab_wrap_placeholder').css('height', tabHeight);
    } else {
        $('.tab_wrap_placeholder').css('height', 0);
    }
});
*/
</script>



<script>
$(window).on("load", function() {
    $("#sit_inf_explan").viewimageresize2();
});
</script>

</form>


<script>
$(window).bind("pageshow", function(event) {
    if (event.originalEvent.persisted) {
        document.location.reload();
    }
});

$(function(){
    // 상품이미지 슬라이드
    var time = 500;
    var idx = idx2 = 0;
    var slide_width = $("#sit_pvi_slide").width();
    var slide_count = $("#sit_pvi_slide li").size();
    $("#sit_pvi_slide li:first").css("display", "block");
    if(slide_count > 1)
        $(".sit_pvi_btn").css("display", "inline");

    $("#sit_pvi_prev").click(function() {
        if(slide_count > 1) {
            idx2 = (idx - 1) % slide_count;
            if(idx2 < 0)
                idx2 = slide_count - 1;
            $("#sit_pvi_slide li:hidden").css("left", "-"+slide_width+"px");
            $("#sit_pvi_slide li:eq("+idx+")").filter(":not(:animated)").animate({ left: "+="+slide_width+"px" }, time, function() {
                $(this).css("display", "none").css("left", "-"+slide_width+"px");
            });
            $("#sit_pvi_slide li:eq("+idx2+")").css("display", "block").filter(":not(:animated)").animate({ left: "+="+slide_width+"px" }, time,
                function() {
                    idx = idx2;
                }
            );
        }
    });

    $("#sit_pvi_next").click(function() {
        if(slide_count > 1) {
            idx2 = (idx + 1) % slide_count;
            $("#sit_pvi_slide li:hidden").css("left", slide_width+"px");
            $("#sit_pvi_slide li:eq("+idx+")").filter(":not(:animated)").animate({ left: "-="+slide_width+"px" }, time, function() {
                $(this).css("display", "none").css("left", slide_width+"px");
            });
            $("#sit_pvi_slide li:eq("+idx2+")").css("display", "block").filter(":not(:animated)").animate({ left: "-="+slide_width+"px" }, time,
                function() {
                    idx = idx2;
                }
            );
        }
    });

    // 상품이미지 크게보기
    $(".popup_item_image").click(function() {
        var url = $(this).attr("href");
        var top = 10;
        var left = 10;
        var opt = 'scrollbars=yes,top='+top+',left='+left;
        popup_window(url, "largeimage", opt);

        return false;
    });

    $(document).on("click", ".btn_wish", function(e) {
        e.preventDefault();

        it_id=$(this).data("it_id");
        $.post(
            g5_shop_url + "/ajax.action.php",
            { it_id: it_id, action : "wish_update" },
            function(error) {
                if(error != "OK") {
                    alert(error.replace(/\\n/g, "\n"));
                    return false;
                }
                
                //mainCart.update_wish_side();
                alert("상품을 위시리스트에 담았습니다.");
				$(".btn_wish").addClass("on");
                return;
            }
        );

    });

});
// 상품보관
function item_wish(f, it_id)
{
    f.url.value = "<?php echo G5_SHOP_URL; ?>/wishupdate.php?it_id="+it_id;
    f.action = "<?php echo G5_SHOP_URL; ?>/wishupdate.php";
    f.submit();
}

// 추천메일
function popup_item_recommend(it_id)
{
    if (!g5_is_member)
    {
        if (confirm("회원만 추천하실 수 있습니다."))
            document.location.href = "<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo urlencode(G5_SHOP_URL."/item.php?it_id=$it_id"); ?>";
    }
    else
    {
        url = "<?php echo G5_SHOP_URL; ?>/itemrecommend.php?it_id=" + it_id;
        opt = "scrollbars=yes,width=616,height=420,top=10,left=10";
        popup_window(url, "itemrecommend", opt);
    }
}

// 재입고SMS 알림
function popup_stocksms(it_id)
{
    url = "<?php echo G5_SHOP_URL; ?>/itemstocksms.php?it_id=" + it_id;
    opt = "scrollbars=yes,width=616,height=420,top=10,left=10";
    popup_window(url, "itemstocksms", opt);
}

function fsubmit_check(f)
{
    // 판매가격이 0 보다 작다면
    if (document.getElementById("it_price").value < 0) {
        alert("전화로 문의해 주시면 감사하겠습니다.");
        return false;
    }

    if($(".sit_opt_list").size() < 1) {
        alert("상품의 선택옵션을 선택해 주십시오.");
        return false;
    }

    var val, io_type, result = true;
    var sum_qty = 0;
    var min_qty = parseInt(<?php echo $it['it_buy_min_qty']; ?>);
    var max_qty = parseInt(<?php echo $it['it_buy_max_qty']; ?>);
    var $el_type = $("input[name^=io_type]");

    $("input[name^=ct_qty]").each(function(index) {
        val = $(this).val();

        if(val.length < 1) {
            alert("수량을 입력해 주십시오.");
            result = false;
            return false;
        }

        if(val.replace(/[0-9]/g, "").length > 0) {
            alert("수량은 숫자로 입력해 주십시오.");
            result = false;
            return false;
        }

        if(parseInt(val.replace(/[^0-9]/g, "")) < 1) {
            alert("수량은 1이상 입력해 주십시오.");
            result = false;
            return false;
        }

        io_type = $el_type.eq(index).val();
        if(io_type == "0")
            sum_qty += parseInt(val);
    });

    if(!result) {
        return false;
    }

    if(min_qty > 0 && sum_qty < min_qty) {
        alert("선택옵션 개수 총합 "+number_format(String(min_qty))+"개 이상 주문해 주십시오.");
        return false;
    }

    if(max_qty > 0 && sum_qty > max_qty) {
        alert("선택옵션 개수 총합 "+number_format(String(max_qty))+"개 이하로 주문해 주십시오.");
        return false;
    }

    return true;
}

// 바로구매, 장바구니 폼 전송
function fitem_submit(f)
{
    f.action = "<?php echo $action_url; ?>";
    f.target = "";

    if (document.pressed == "장바구니") {
        f.sw_direct.value = 0;
    } else { // 바로구매
        f.sw_direct.value = 1;
    }

    // 판매가격이 0 보다 작다면
    if (document.getElementById("it_price").value < 0) {
        alert("전화로 문의해 주시면 감사하겠습니다.");
        return false;
    }

	if(f.copay.value==""){
		alert("본인부담금을 선택해 주십시오.");
		return false;
	}

    if($(".sit_opt_list").size() < 1) {
        alert("상품의 선택옵션을 선택해 주십시오.");
        return false;
    }

	if(typeof(f.info_1)!="undefined"){
		if(f.info_1.value==""){
			alert("수급자성함을 입력해주세요.");
			return false;
		}
	}
	if(typeof(f.info_2)!="undefined"){
		if(f.info_2.value==""){
			alert("장기요양인정번호를 입력해주세요.");
			return false;
		}
	}

    var val, io_type, result = true;
    var sum_qty = 0;
    var min_qty = parseInt(<?php echo $it['it_buy_min_qty']; ?>);
    var max_qty = parseInt(<?php echo $it['it_buy_max_qty']; ?>);
    var $el_type = $("input[name^=io_type]");

    $("input[name^=ct_qty]").each(function(index) {
        val = $(this).val();

        if(val.length < 1) {
            alert("수량을 입력해 주십시오.");
            result = false;
            return false;
        }

        if(val.replace(/[0-9]/g, "").length > 0) {
            alert("수량은 숫자로 입력해 주십시오.");
            result = false;
            return false;
        }

        if(parseInt(val.replace(/[^0-9]/g, "")) < 1) {
            alert("수량은 1이상 입력해 주십시오.");
            result = false;
            return false;
        }

        io_type = $el_type.eq(index).val();
        if(io_type == "0")
            sum_qty += parseInt(val);
    });

    if(!result) {
        return false;
    }

    if(min_qty > 0 && sum_qty < min_qty) {
        alert("선택옵션 개수 총합 "+number_format(String(min_qty))+"개 이상 주문해 주십시오.");
        return false;
    }

    if(max_qty > 0 && sum_qty > max_qty) {
        alert("선택옵션 개수 총합 "+number_format(String(max_qty))+"개 이하로 주문해 주십시오.");
        return false;
    }

    return true;
}

function apply_write(){
	f=document.fitem;
	if(f.copay.value==""){
		alert("본인부담금을 선택해 주십시오.");
		return false;
	}
    if($(".sit_opt_list").size() < 1) {
        alert("상품의 선택옵션을 선택해 주십시오.");
        return false;
    }

	if(typeof(f.info_1)!="undefined"){
		if(f.info_1.value==""){
			alert("수급자성함을 입력해주세요.");
			return;
		}
	}
	if(typeof(f.info_2)!="undefined"){
		if(f.info_2.value=="" || f.info_2.value.length<2){
			alert("장기요양인정번호를 입력해주세요.");
			return;
		}
	}
	f.sw_direct.value="1";

	f.action="/shop/cartupdate.php";
	f.submit();
	/**
	form_data=$("#fitem").sericalize();
	$.ajax({
		type:"post",
		url:"",
		data:form_data,
		success:function(){
		},
	});
	*/
}

$(function(){
    // Check the initial Poistion of the Sticky Header
	/**
    var stickyHeaderTop = $('#sit_ov_btn').offset().top+$('#sit_ov').height()/2;

    $(window).scroll(function(){
        if( $(window).scrollTop() > stickyHeaderTop ) {
                $('#sit_ov').addClass("fixed");
                $('#sit_ov').removeClass("static");
                $('.gg').height();
        } else {
                $('#sit_ov').removeClass("fixed");
                $('#sit_ov').addClass("static");
        }
    });

    $('.op_btn').click(function() {
        $('.scroll_show').toggle();
     });

    $(".sit_ov_height").css('height', $("#sit_ov").height());
	*/

 });

</script>

<?php /* 2017 리뉴얼한 테마 적용 스크립트입니다. 기존 스크립트를 오버라이드 합니다. */ ?>
<script src="<?php echo G5_JS_URL; ?>/shop.override.js?ver=<?=G5_CSS_VER?>"></script>
