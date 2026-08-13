<?php
include_once('./_common.php');

$g5['title'] = '주문내역';

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');

?>
<style>
    #container_title{display: none;}
    .neromap{display: none}
h2.list_title{font-size:28px;}
@media (max-width: 969px) {
	h2.list_title{font-size:18px;}
}
</style>
<h2 class="list_title pc">주문내역</h2>

<div class="sod_inquiry_sch">
	<form name="searchform" method="get">
		<input type="text" name="stx">
		<button type="submit"><i data-lucide="search" class="svgicon"></i></button>
	</form>
</div>

<div id="sod_inquiry">
<form name="listform" method="post" action="<?=G5_SHOP_URL?>/orderlistdelete.php">
<input type="hidden" name="page" value="<?=$page?>">
<input type="hidden" name="stx" value="<?=$stx?>">
        <?php
		$page_rows=10;
		$limit=array();
		if($stx){
			$limit[]="(od_id like '%{$stx}%' or od_name like '%{$stx}%' or od_hp like '%{$stx}%' or od_b_name like '%{$stx}%' or od_b_hp like '%{$stx}%')";
		}
		$wheres="";
		if(count($limit)>0){
			$wheres=" and ".implode(" and ",$limit);
		}
		$sql = " select count(*) cnt from {$g5['g5_shop_order_table']} where (1) {$wheres} ";
		$row=sql_fetch($sql);
		$total_count = $row['cnt'];

		if ($page < 1) { $page = 1; }
		$total_page  = ceil($total_count / $page_rows);  // 전체 페이지 계산
		$from_record = ($page - 1) * $page_rows; // 시작 열을 구함

        $sql = " select * 
                   from {$g5['g5_shop_order_table']}
                  where (1) {$wheres} 
                  order by od_id desc
                  limit {$from_record}, $page_rows ";
        $result = sql_query($sql);
        for ($i=0; $row=sql_fetch_array($result); $i++)
        {

			$pay_sell_price=0;
			$qty=0;
			$sql = " select it_id, it_name, cp_price, ct_send_cost, it_sc_type, ct_copay 
								from {$g5['g5_shop_cart_table']}
								where od_id = '{$row['od_id']}'
								group by it_id
								order by ct_id ";
			$cart_result = sql_query($sql);
			for($i=0; $cart_row=sql_fetch_array($cart_result); $i++) {
				$sql = " select SUM(IF(io_type = 1, (io_price * ct_qty)*ct_copay_rate/100, ((ct_price + io_price) * ct_qty)*ct_copay_rate/100)) as copay_tot_price,
										SUM(IF(io_type = 1, (io_price)*ct_copay_rate/100, ((ct_price + io_price))*ct_copay_rate/100)) as copay_item_price,
										SUM(IF(io_type = 1, (io_price * ct_qty), ((ct_price + io_price) * ct_qty))) as price3,
										SUM(ct_point * ct_qty) as point,
										SUM(ct_qty) as qty
									from {$g5['g5_shop_cart_table']}
									where it_id = '{$cart_row['it_id']}'
									  and od_id = '{$row['od_id']}'";
				$sum = sql_fetch($sql);
				$pay_sell_price=$pay_sell_price+$sum['copay_tot_price'];
				$qty=$qty+$sum['qty'];
			}

            // 주문상품
            $sql = " select it_name, ct_option
                        from {$g5['g5_shop_cart_table']}
                        where od_id = '{$row['od_id']}'
                        order by io_type, ct_id
                        limit 1 ";
            $ct = sql_fetch($sql);
            $ct_name = get_text($ct['it_name']).' '.get_text($ct['ct_option']);

            $sql = " select count(*) as cnt
                        from {$g5['g5_shop_cart_table']}
                        where od_id = '{$row['od_id']}' ";
            $ct2 = sql_fetch($sql);
            if($ct2['cnt'] > 1)
                $ct_name .= ' 외 '.($ct2['cnt'] - 1).'건';

            switch($row['od_status']) {
                case '주문':
                    $od_status = '<span class="status_01">주문신청</span>';
					$od_status = '주문신청';
                    break;
                case '입금':
                    $od_status = '<span class="status_02">주문신청</span>';
					$od_status = '주문신청';
                    break;
                case '준비':
                    $od_status = '<span class="status_03">상품준비중</span>';
					$od_status = '상품준비중';
                    break;
                case '배송':
                    $od_status = '<span class="status_04">상품배송</span>';
					$od_status = '상품배송';
                    break;
                case '완료':
                    $od_status = '<span class="status_05">주문완료</span>';
					$od_status = '주문완료';
                    break;
                case '취소':
                    $od_status = '<span class="status_06">취소완료</span>';
					$od_status = '취소완료';
                    break;
            }

            $od_invoice = '';
            if($row['od_delivery_company'] && $row['od_invoice'])
                $od_invoice = '<span class="inv_inv"><i class="fa fa-truck" aria-hidden="true"></i> <strong>'.get_text($row['od_delivery_company']).'</strong> '.get_text($row['od_invoice']).'</span>';

            $uid = md5($row['od_id'].$row['od_time'].$row['od_ip']);
        ?>
	<div class="apply_wrap">
		<div class="tit"><input type="checkbox" name="chk[]" value="<?php echo $row['od_id']; ?>" style="margin-right: 7px;"> 주문번호 : <a href="<?php echo G5_SHOP_URL; ?>/orderview.php?od_id=<?php echo $row['od_id']; ?>&amp;uid=<?php echo $uid; ?>" class="idtime_link"><?=$row['od_id']?> - <?=$row['od_name']?></a></div>
<?php
			$pay_sell_price=0;
			$total_real_price=0;
			$qty=0;
			$sql = " select a.it_id, a.it_name, a.ct_price, a.cp_price, a.ct_send_cost, a.it_sc_type, a.ct_copay, a.ct_status, b.ca_id  
								from {$g5['g5_shop_cart_table']} a left join {$g5['g5_shop_item_table']} b on ( a.it_id = b.it_id )
								where od_id = '{$row['od_id']}'
								group by a.it_id
								order by ct_id";
			$cart_result = sql_query($sql);
			$cart_count = sql_num_rows($cart_result);
			// 상품을 분류별로 나누기
			$benefit_items = array(); // 10, 20 분류 상품
			$normal_items = array();  // 그 외 상품

			$item_count=0;
			$cancel_count=0;
			while($cart_row = sql_fetch_array($cart_result)) {
				$ca_prefix = substr($cart_row['ca_id'], 0, 2);
				if($ca_prefix == '10' || $ca_prefix == '20') {
					$benefit_items[] = $cart_row;
				} else {
					$normal_items[] = $cart_row;
				}
				$item_count++;
				if($cart_row['ct_status']=="취소"){
					$cancel_count++;
				}
			}
?>
<?php
			$benefit_tot_price = 0;
			$benefit_tot_ct_price = 0;
			foreach($benefit_items as $cart_row) {
				$sql = "
select
    ROUND(SUM(
        IF(io_type = 1,
            (io_price * ct_qty) * ct_copay_rate / 100,
            ((ct_price + io_price) * ct_qty) * ct_copay_rate / 100
        )
    ), -1) as copay_tot_price,

    ROUND(
        IF(io_type = 1,
            (io_price) * ct_copay_rate / 100,
            ((ct_price + io_price)) * ct_copay_rate / 100
        )
    , -1) as copay_item_price,

    SUM(
        IF(io_type = 1,
            (io_price * ct_qty),
            ((ct_price + io_price) * ct_qty)
        )
    ) as price,

    SUM(ct_point * ct_qty) as point,
    SUM(ct_qty) as qty
from {$g5['g5_shop_cart_table']}
where it_id = '{$cart_row['it_id']}'
  and od_id = '{$row['od_id']}'
";
				$sum = sql_fetch($sql);
				$qty=$qty+$sum['qty'];
				$total_real_price+=$sum['copay_tot_price'];

				$it=sql_fetch("select * from {$g5['g5_shop_item_table']} where it_id='{$cart_row['it_id']}'");
				$image = get_it_image($cart_row['it_id'], 180, 180);
				if(substr($it['ca_id'],0,2)=="10"){
					$sum['copay_tot_price']=0;
				}
				$sell_price = $sum['copay_tot_price'];
				if($cart_row['ct_status']=="주문" || $cart_row['ct_status']=="입금" || $cart_row['ct_status']=="준비" || $cart_row['ct_status']=="배송" || $cart_row['ct_status']=="완료"){
					$pay_sell_price=$pay_sell_price+$sum['copay_tot_price'];
					$benefit_tot_price+=$sum['price'];
					$benefit_tot_ct_price += $sell_price;
				}

				$it_options = print_item_options3($cart_row['it_id'], $row['od_id']);

				if($cart_row['ct_copay']=="A"){
					$copay="본인부담금 일반 15%";
				}elseif($cart_row['ct_copay']=="B"){
					$copay="본인부담금 감경 9%";
				}elseif($cart_row['ct_copay']=="C"){
					$copay="본인부담금 감경 6%";
				}elseif($cart_row['ct_copay']=="D"){
					$copay="본인부담금 의료급여 6%";
				}elseif($cart_row['ct_copay']=="E"){
					$copay="본인부담금 기초수급자 (0 원)";
				}elseif($cart_row['ct_copay']=="F"){
					$copay="";
				}

				// 배송비
				switch($cart_row['ct_send_cost'])
				{
					case 1:
						$ct_send_cost = '착불';
						break;
					case 2:
						$ct_send_cost = '무료';
						break;
					default:
						$ct_send_cost = '선불';
						break;
				}

				// 조건부무료
				if($cart_row['it_sc_type'] == 2) {
					$sendcost = get_item_sendcost($cart_row['it_id'], $sum['copay_tot_price'], $sum['qty'], $row['od_id']);

					if($sendcost == 0)
						$ct_send_cost = '무료';
				}

?>
		<div class="top">
			<span class="aimg"><a href="<?=G5_SHOP_URL?>/item.php?it_id=<?=$cart_row['it_id']?>"><?=$image?></a></span>
			<div class="text">
				<div class="txt">
					<h3><a href="<?=G5_SHOP_URL?>/item.php?it_id=<?=$cart_row['it_id']?>"><?=$cart_row['it_name']?></a>
					<?php
					if($cart_row['ct_status']=="취소"){
						if($item_count==$cancel_count){
							$ct_status="취소";
						}else{
							$ct_status="부분취소";
						}
					?>
					<span class=""><?=$ct_status?></span>
					<?php
					}
					?>
					</h3>
					<ul>
						<?=$it_options?>
						<?php if($copay){?><li><?=$copay?></li><?php }?>
						<li><a href="<?=G5_BBS_URL?>/write.php?bo_table=review&it_id=<?=$cart_row['it_id']?>">상품후기</a></li>
					</ul>
				</div>
				<div class="dl_wrap">
					<dl>
						<dt>공단고시가</dt>
						<dd><?=number_format($cart_row['ct_price'])?>원</dd>
					</dl>
					<dl>
						<dt>본인부담금</dt>
						<dd><?=number_format($sum['copay_item_price'])?>원</dd>
					</dl>
					<dl>
						<dt>배송비</dt>
						<dd><?=$ct_send_cost;?></dd>
					</dl>
					<dl>
						<dt>수량</dt>
						<dd><?=$sum['qty'];?></dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="total_price total_span"><span>소계 </span><strong><?php echo number_format($sell_price); ?></strong>원</div>
<?php
			}
?>
    <?php 
	if(count($benefit_items) > 0) { 
        $tot_price = $tot_sell_price + $send_cost;
        if($benefit_tot_price > 0) {
	?>
    <div class="sod_ta_wr" style="margin:20px 0 30px 0;">
        <dl id="m_sod_bsk_tot">
            <dt>공단고시가 합계</dt>
            <dd><strong><?php echo number_format($benefit_tot_price); ?> 원</strong></dd>
            <dt class="sod_bsk_cnt">본인부담금 합계</dt>
            <dd class="sod_bsk_cnt"><strong><?php echo number_format($benefit_tot_ct_price); ?></strong> 원</dd>
        </dl>
    </div>
        <?php } ?>
    <?php } ?>

<?php
			$nomal_tot_ct_price = 0;
			foreach($normal_items as $cart_row) {
				$sql = "
select
    ROUND(SUM(
        IF(io_type = 1,
            (io_price * ct_qty) * ct_copay_rate / 100,
            ((ct_price + io_price) * ct_qty) * ct_copay_rate / 100
        )
    ), -1) as copay_tot_price,

    ROUND(
        IF(io_type = 1,
            (io_price) * ct_copay_rate / 100,
            ((ct_price + io_price)) * ct_copay_rate / 100
        )
    , -1) as copay_item_price,

    SUM(
        IF(io_type = 1,
            (io_price * ct_qty),
            ((ct_price + io_price) * ct_qty)
        )
    ) as price,

    SUM(ct_point * ct_qty) as point,
    SUM(ct_qty) as qty
from {$g5['g5_shop_cart_table']}
where it_id = '{$cart_row['it_id']}'
  and od_id = '{$row['od_id']}'
";
				$sum = sql_fetch($sql);
				$qty=$qty+$sum['qty'];
				$total_real_price+=$sum['copay_tot_price'];

				$it=sql_fetch("select * from {$g5['g5_shop_item_table']} where it_id='{$cart_row['it_id']}'");
				$image = get_it_image($cart_row['it_id'], 180, 180);
				if(substr($it['ca_id'],0,2)=="10"){
					$sum['copay_tot_price']=0;
				}
				$sell_price = $sum['copay_tot_price'];
				if($cart_row['ct_status']=="주문" || $cart_row['ct_status']=="입금" || $cart_row['ct_status']=="준비" || $cart_row['ct_status']=="배송" || $cart_row['ct_status']=="완료"){
					$pay_sell_price=$pay_sell_price+$sum['copay_tot_price'];
					$nomal_tot_ct_price += $sell_price;
				}

				$it_options = print_item_options3($cart_row['it_id'], $row['od_id']);

				if($cart_row['ct_copay']=="A"){
					$copay="본인부담금 일반 15%";
				}elseif($cart_row['ct_copay']=="B"){
					$copay="본인부담금 감경 9%";
				}elseif($cart_row['ct_copay']=="C"){
					$copay="본인부담금 감경 6%";
				}elseif($cart_row['ct_copay']=="D"){
					$copay="본인부담금 의료급여 6%";
				}elseif($cart_row['ct_copay']=="E"){
					$copay="본인부담금 기초수급자 (0 원)";
				}elseif($cart_row['ct_copay']=="F"){
					$copay="";
				}

				// 배송비
				switch($cart_row['ct_send_cost'])
				{
					case 1:
						$ct_send_cost = '착불';
						break;
					case 2:
						$ct_send_cost = '무료';
						break;
					default:
						$ct_send_cost = '선불';
						break;
				}

				// 조건부무료
				if($cart_row['it_sc_type'] == 2) {
					$sendcost = get_item_sendcost($cart_row['it_id'], $sum['copay_tot_price'], $sum['qty'], $row['od_id']);

					if($sendcost == 0)
						$ct_send_cost = '무료';
				}

?>
		<div class="top">
			<span class="aimg"><?=$image?></span>
			<div class="text">
				<div class="txt">
					<h3><a href="<?=G5_SHOP_URL?>/item.php?it_id=<?=$cart_row['it_id']?>"><?=$cart_row['it_name']?></a>
					<?php
					if($cart_row['ct_status']=="취소"){
						if($item_count==$cancel_count){
							$ct_status="취소";
						}else{
							$ct_status="부분취소";
						}
					?>
					<span class=""><?=$ct_status?></span>
					<?php
					}
					?>
					</h3>

					<ul>
						<?=$it_options?>
						<?php if($copay){?><li>· <?=$copay?></li><?php }?>
						<li><a href="<?=G5_BBS_URL?>/write.php?bo_table=review&it_id=<?=$cart_row['it_id']?>">상품후기</a></li>
					</ul>
				</div>
				<div class="dl_wrap">
					<dl>
						<dt>판매가</dt>
						<dd><?=number_format($cart_row['ct_price'])?>원</dd>
					</dl>
					<dl>
						<dt>배송비</dt>
						<dd><?=$ct_send_cost;?></dd>
					</dl>
					<dl>
						<dt>수량</dt>
						<dd><?=$sum['qty'];?></dd>
					</dl>
				</div>
			</div>
		</div>
		<div class="total_price total_span"><span>소계 </span><strong><?php echo number_format($sell_price); ?></strong>원</div>
<?php
			}
?>
			<dl id="m_sod_bsk_tot">
				<dt style="font-weight: 500;">상품 금액 합계</dt>
				<dd><strong style="color: #073260; font-size: 19px; font-weight: 600"><?php echo number_format($pay_sell_price); ?> </strong>원</dd>
			</dl>


		<ul class="cancel_box">
			<li>
			<span>
			<?php
			echo print_status($row['od_status']);
			?>
			</span>
			<!--
			<?php if($row['od_status']!="취소" && $row['od_status']!="취소신청"){?><a href="javascript:void(0)" class="pop_cancel" data-od-id="<?=$row['od_id']?>">취소신청</a><?php }?>
			-->
			<!--
			<select name="" style="width:150px;height:40px;border:1px solid #d0d0d0" onchange="set_status(this, '<?=$row['od_id']?>')">
				<option value="주문" <?=$row['od_status']=="주문"?"selected":"";?>>주문</option>
				<option value="입금" <?=$row['od_status']=="입금"?"selected":"";?>>입금</option>
				<option value="준비" <?=$row['od_status']=="준비"?"selected":"";?>>준비</option>
				<option value="배송" <?=$row['od_status']=="배송"?"selected":"";?>>배송</option>
				<option value="완료" <?=$row['od_status']=="완료"?"selected":"";?>>완료</option>
				<option value="취소신청" <?=$row['od_status']=="취소신청"?"selected":"";?>>취소신청</option>
				<option value="취소" <?=$row['od_status']=="취소"?"selected":"";?>>취소</option>
				<option value="반품" <?=$row['od_status']=="반품"?"selected":"";?>>반품</option>
				<option value="품절" <?=$row['od_status']=="품절"?"selected":"";?>>품절</option>
			</select>
			-->
			</li>
		</ul>

	</div>
<?php
		}
        if ($i == 0)
            echo '<div class="empty_list">주문 내역이 없습니다.</div>';
?>

<div class="btn_area">
	<button type="button" class="btn"  onclick="order_del()">선택삭제</button>
	<a href="/shop/orderlist.php" class="btn">전체목록</a>
</div>

<?php echo get_paging($config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?$qstr&amp;page="); ?>

</form>
</div>


<script>
$(function() {
    $(".win_coupon").click(function() {
        var new_win = window.open($(this).attr("href"), "win_coupon", "left=100,top=100,width=700, height=600, scrollbars=1");
        new_win.focus();
        return false;
    });
});
function set_status(obj, od_id){
	if(confirm("상태를 ["+obj.value+"]로 변경하시겠습니까?")){
		location.href="/shop/order_status_change.php?status="+obj.value+"&od_id="+od_id;
	}else{
		location.reload();
	}
}
function member_leave()
{
    return confirm('정말 회원에서 탈퇴 하시겠습니까?')
}
function order_del(){
	if($("input[name='chk[]']:checked").length==0){
		alert("삭제할 주문을 하나이상 선택하세요.");
		return;
	}
	if(!confirm("선택한 자료를 정말 삭제하시겠습니까?\n삭제 후 복구하실수 없습니다.")){
		return;
	}

	document.listform.submit();


}
</script>
<?php
include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
?>