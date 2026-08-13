<?php
include_once('./_common.php');

$g5['title'] = '주문 내역 수정';

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>
<?php
$sql = " select * from {$g5['g5_shop_order_table']} where od_id = '$od_id' ";
$od = sql_fetch($sql);
if (! (isset($od['od_id']) && $od['od_id'])) {
    alert("해당 주문번호로 주문서가 존재하지 않습니다.");
}

$html_receipt_chk = '<input type="checkbox" id="od_receipt_chk" value="'.$od['od_misu'].'" onclick="chk_receipt_price()">
<label for="od_receipt_chk">결제금액 입력</label><br>';

// 상품목록
$sql = " select a.it_id, a.it_name, a.ct_price, a.cp_price, a.ct_send_cost, a.it_sc_type, a.ct_copay, a.ct_status, b.ca_id  
								from {$g5['g5_shop_cart_table']} a left join {$g5['g5_shop_item_table']} b on ( a.it_id = b.it_id )
								where od_id = '{$od['od_id']}'
								group by a.it_id
								order by ct_id";
$result = sql_query($sql);
$cart_count = sql_num_rows($result);

// 상품을 분류별로 나누기
$benefit_items = array(); // 10, 20 분류 상품
$normal_items = array();  // 그 외 상품

while($row = sql_fetch_array($result)) {
    $ca_prefix = substr($row['ca_id'], 0, 2);
    if($ca_prefix == '10' || $ca_prefix == '20') {
        $benefit_items[] = $row;
    } else {
        $normal_items[] = $row;
    }
}
?>
<style>
.btn_list {margin:10px 0} /* 목록용 */
.btn_list .btn_02{height:28px;padding:0 5px;border:0;}

.compare_wrap {margin:0 0 120px;zoom:1}
.compare_wrap:after {display:block;visibility:hidden;clear:both;content:""}
.compare_wrap section {margin: 0 0 10px;}
.compare_wrap h3 {margin:10px 0 ;text-align:center;text-align:left}
.compare_wrap .tbl_frm {margin:0}
.compare_wrap .frm_input {background:#fff}
.compare_wrap .btn_confirm {padding:10px 0 0}
.compare_left {float:left;width:49%}
.compare_right {float:right;width:49%}

.tbl_frm01 th{border-top:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6;background:#f6f6f6;padding: 10px;width:200px;text-align:left}
.tbl_frm01 td {border-top:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6;padding: 10px;text-align:left;}
.tbl_frm01 textarea {height:150px}
.tbl_frm01 #captcha {margin:0;padding:0;border:0;background:transparent}
.tbl_frm01 #captcha input {margin-left:5px;text-align:center}
.h2_frm{text-align:left;color:#3f51b5;font-size:1.09em;font-weight:bold;margin:20px 0 10px}

.color_01{background:#fe528f}
.color_02{background:#68d0a7}
.color_03{background:#b668d0}
.color_04{background:#ffa700}
.color_05{background:#688fef}
.color_06{border:#f7d9d9}

.color_st01{background:#fe528f;color:#fff;display:inline-block;padding:0 3px;font-size:0.92em;line-height:18px}
.color_st02{background:#68d0a7;color:#fff;display:inline-block;padding:0 3px;font-size:0.92em;line-height:18px}
.color_st03{background:#b668d0;color:#fff;display:inline-block;padding:0 3px;font-size:0.92em;line-height:18px}
.color_st04{background:#ffa700;color:#fff;display:inline-block;padding:0 3px;font-size:0.92em;line-height:18px}
.color_st05{background:#688fef;color:#fff;display:inline-block;padding:0 3px;font-size:0.92em;line-height:18px}
.color_st06{color:#ff0000;border:1px solid #ff0000;display:inline-block;padding:0 3px;font-size:0.92em;line-height:18px}

.local_desc01 {margin:10px 0 10px ;padding:10px 20px;border:1px solid #f2f2f2;background:#f9f9f9}
.local_desc01 strong {color:#ff3061}
.local_desc01 a {text-decoration:underline}

table {clear:both;width:100%;border-collapse:collapse;border-spacing:0;}
@media screen and (max-width:750px) {
    .tbl_head01{overflow-y: scroll}
    .tbl_head01 table{width: 720px}
	.compare_wrap {margin:0 0 80px;}
}
@media screen and (max-width:650px) {
	.compare_left{width:100%;}
	.compare_right{width:100%;}
	.tbl_frm01 th{width:auto;min-width:100px;max-width:100px;}
}
</style>
<div class="ordview_wrap">
	<section id="anc_sodr_list">
		<h2 class="h2_frm">주문상품 목록</h2>


		<form name="frmorderform" method="post" action="./orderformcartupdate.php" onsubmit="return form_submit(this);">
		<input type="hidden" name="od_id" value="<?php echo $od_id; ?>">
		<input type="hidden" name="mb_id" value="<?php echo $od['mb_id']; ?>">
		<input type="hidden" name="od_email" value="<?php echo $od['od_email']; ?>">
		<input type="hidden" name="sort1" value="<?php echo $sort1; ?>">
		<input type="hidden" name="sort2" value="<?php echo $sort2; ?>">
		<input type="hidden" name="sel_field" value="<?php echo $sel_field; ?>">
		<input type="hidden" name="search" value="<?php echo $search; ?>">
		<input type="hidden" name="page" value="<?php echo $page;?>">
		<input type="hidden" name="pg_cancel" value="0">

	<?php
	$chk_cnt = 0;
	$total_od_price=$total_real_price=0;
	$pay_sell_price=0;
	$i=0;
	?>
		<div class="tbl_head01 tbl_wrap">
	<?php
	if(count($benefit_items)>0){
	?>
			<table>
			<caption>주문 상품 목록</caption>
			<colgroup>
				<col style="width: 50px;">
				<col style="width: 240px;">
				<col style="width: 450px;">
				<col style="width: 130px;">
				<col style="width: 130px;">
				<col style="width: 140px;">
				<col style="width: 140px;">
			</colgroup>
			<thead>
			<tr>
				<th scope="col">
					<label for="sit_select_all" class="sound_only">주문 상품 전체</label>
					<input type="checkbox" id="sit_select_all">
				</th>
				<th scope="col">상품명</th>
				<th scope="col">옵션항목</th>
				<th scope="col">상태</th>
				<th scope="col">수량</th>
				<th scope="col">공단공시가</th>
				<th scope="col">본인부담금</th>
			</tr>
			</thead>
			<tbody>
	<?php
		$benefit_tot_price = 0;
		$benefit_tot_ct_price = 0;
		foreach($benefit_items as $row) {

				// 상품이미지
				$image = get_it_image($row['it_id'], 50, 50);

				// 상품의 옵션정보
				$sql = " select ct_id, it_id, ct_price, ct_point, ct_qty, ct_option, ct_status, cp_price, ct_stock_use, ct_point_use, ct_send_cost, io_type, io_price, ct_copay_rate 
							from {$g5['g5_shop_cart_table']}
							where od_id = '{$od['od_id']}'
							and it_id = '{$row['it_id']}'
							order by io_type asc, ct_id asc ";
				$res = sql_query($sql);
				$rowspan = sql_num_rows($res);

				// 합계금액 계산
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
	where it_id = '{$row['it_id']}'
	and od_id = '{$od['od_id']}'
	";
				$sum = sql_fetch($sql);
				$it=sql_fetch("select * from {$g5['g5_shop_item_table']} where it_id='{$row['it_id']}'");
				if(substr($it['ca_id'],0,2)=="10"){
					$sum['copay_tot_price']=0;
				}
				if($row['ct_status']=="주문" || $row['ct_status']=="입금" || $row['ct_status']=="준비" || $row['ct_status']=="배송" || $row['ct_status']=="완료"){
					$pay_sell_price=$pay_sell_price+$sum['copay_tot_price'];
					$sell_price = $sum['copay_tot_price'];
					$benefit_tot_price+=$sum['price'];
					$benefit_tot_ct_price += $sell_price;
				}

				// 배송비
				switch($row['ct_send_cost'])
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
				if($row['it_sc_type'] == 2) {
					$sendcost = get_item_sendcost($row['it_id'], $sum['copay_tot_price'], $sum['qty'], $od['od_id']);

					if($sendcost == 0)
						$ct_send_cost = '무료';
				}

				for($k=0; $opt=sql_fetch_array($res); $k++) {
					if($opt['io_type'])
						$opt_price = $opt['io_price'];
					else
						$opt_price = $opt['ct_price'] + $opt['io_price'];

					// 소계
					$ct_price['stotal'] = $opt_price * $opt['ct_qty'];
					$ct_point['stotal'] = $opt['ct_point'] * $opt['ct_qty'];

					if($row['ct_status']=="주문" || $row['ct_status']=="입금" || $row['ct_status']=="준비" || $row['ct_status']=="배송" || $row['ct_status']=="완료"){
						$total_od_price+=$ct_price['stotal'];
					}
					$item_total_price=round($opt_price * $opt['ct_qty'] * $opt['ct_copay_rate'] /100/10)*10;
					if(substr($it['ca_id'],0,2)=="10"){
						$item_total_price=0;
					}
					$total_real_price+=$opt_price * $opt['ct_qty'] * $opt['ct_copay_rate'] /100;

					switch($opt['ct_status']) {
						case '주문':
							$ct_status = '주문신청';
							break;
						case '입금':
							$ct_status = '주문신청';
							break;
						case '준비':
							$ct_status = '상품준비중';
							break;
						case '배송':
							$ct_status = '상품배송';
							break;
						case '완료':
							$ct_status = '주문완료';
							break;
						case '교환':
							$ct_status = '교환완료';
							break;
						case '반품':
							$ct_status = '반품완료';
							break;
						case '취소':
							$ct_status = '취소완료';
							break;
						default:
							$ct_status = $opt['ct_status'];
							break;
					}
				
				?>
				<tr>
					<?php if($k == 0) { ?>
					<td rowspan="<?php echo $rowspan; ?>" class="td_chk">
						<label for="sit_sel_<?php echo $i; ?>" class="sound_only"><?php echo $row['it_name']; ?> 옵션 전체선택</label>
						<input type="checkbox" id="sit_sel_<?php echo $i; ?>" name="it_sel[]">
					</td>
					<td rowspan="<?php echo $rowspan; ?>" class="td_left">
						<a href="<?=G5_SHOP_URL?>/item.php?it_id=<?=$row['it_id']?>"><?php echo $image; ?> <?php echo stripslashes($row['it_name']); ?></a>
						<?php if($od['od_tax_flag'] && $row['ct_notax']) echo '[비과세상품]'; ?>
					</td>
					<?php } ?>
					<td class="td_left">
						<label for="ct_chk_<?php echo $chk_cnt; ?>" class="sound_only"><?php echo get_text($opt['ct_option']); ?></label>
						<input type="checkbox" name="ct_chk[<?php echo $chk_cnt; ?>]" id="ct_chk_<?php echo $chk_cnt; ?>" value="<?php echo $chk_cnt; ?>" class="sct_sel_<?php echo $i; ?>">
						<input type="hidden" name="ct_id[<?php echo $chk_cnt; ?>]" value="<?php echo $opt['ct_id']; ?>">
						<?php echo get_text($opt['ct_option']); ?>
						(본인부담금 <?=$opt['ct_copay_rate']?>%)
					</td>
					<td class="" style="width:80px;"><?php echo $ct_status; ?></td>
					<td class="td_num">
						<label for="ct_qty_<?php echo $chk_cnt; ?>" class="sound_only"><?php echo get_text($opt['ct_option']); ?> 수량</label>
						<input type="text" name="ct_qty[<?php echo $chk_cnt; ?>]" id="ct_qty_<?php echo $chk_cnt; ?>" value="<?php echo $opt['ct_qty']; ?>" required class="frm_input required" size="3">
					</td>
					<td class="td_num" style="min-width:90px;"><?php echo number_format($ct_price['stotal']); ?></td>
					<td class="td_num" style="min-width:90px;"><?php echo number_format($item_total_price); ?></td>
				</tr>
				<?php
					$chk_cnt++;
					$i++;
				}
				?>
	<?php
		}
	?>
			</tbody>
			</table>
	<?php
	}
	?>
	<?php
	if(count($normal_items) > 0) {
	?>
			<br>
			<table>
			<caption>주문 상품 목록</caption>
			<thead>
			<tr>
				<th scope="col">
					<label for="sit_select_all" class="sound_only">주문 상품 전체</label>
					<input type="checkbox" id="sit_select_all">
				</th>
				<th scope="col">상품명</th>
				<th scope="col">옵션항목</th>
				<th scope="col">상태</th>
				<th scope="col">수량</th>
				<th scope="col" colspan=2>판매가</th>
			</tr>
			</thead>
			<tbody>
	<?php
		$nomal_tot_ct_price = 0;
		foreach($normal_items as $row) {

				// 상품이미지
				$image = get_it_image($row['it_id'], 50, 50);

				// 상품의 옵션정보
				$sql = " select ct_id, it_id, ct_price, ct_point, ct_qty, ct_option, ct_status, cp_price, ct_stock_use, ct_point_use, ct_send_cost, io_type, io_price, ct_copay_rate 
							from {$g5['g5_shop_cart_table']}
							where od_id = '{$od['od_id']}'
							and it_id = '{$row['it_id']}'
							order by io_type asc, ct_id asc ";
				$res = sql_query($sql);
				$rowspan = sql_num_rows($res);

				// 합계금액 계산
				$sql = " select SUM(IF(io_type = 1, (io_price * ct_qty)*ct_copay_rate/100, ((ct_price + io_price) * ct_qty)*ct_copay_rate/100)) as copay_tot_price,
											(IF(io_type = 1, (io_price)*ct_copay_rate/100, ((ct_price + io_price))*ct_copay_rate/100)) as copay_item_price,
											SUM(IF(io_type = 1, (io_price * ct_qty), ((ct_price + io_price) * ct_qty))) as price,
											SUM(ct_point * ct_qty) as point,
											SUM(ct_qty) as qty
										from {$g5['g5_shop_cart_table']}
										where it_id = '{$row['it_id']}'
										and od_id = '{$od['od_id']}'";
				$sum = sql_fetch($sql);
				$it=sql_fetch("select * from {$g5['g5_shop_item_table']} where it_id='{$row['it_id']}'");
				if(substr($it['ca_id'],0,2)=="10"){
					$sum['copay_tot_price']=0;
				}

				if($row['ct_status']=="주문" || $row['ct_status']=="입금" || $row['ct_status']=="준비" || $row['ct_status']=="배송" || $row['ct_status']=="완료"){
					$pay_sell_price=$pay_sell_price+$sum['copay_tot_price'];
					$sell_price = $sum['copay_tot_price'];
					$nomal_tot_ct_price += $sell_price;
				}

				// 배송비
				switch($row['ct_send_cost'])
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
				if($row['it_sc_type'] == 2) {
					$sendcost = get_item_sendcost($row['it_id'], $sum['copay_tot_price'], $sum['qty'], $od['od_id']);

					if($sendcost == 0)
						$ct_send_cost = '무료';
				}

				for($k=0; $opt=sql_fetch_array($res); $k++) {
					if($opt['io_type'])
						$opt_price = $opt['io_price'];
					else
						$opt_price = $opt['ct_price'] + $opt['io_price'];

					// 소계
					$ct_price['stotal'] = $opt_price * $opt['ct_qty'];
					$ct_point['stotal'] = $opt['ct_point'] * $opt['ct_qty'];

					if($row['ct_status']=="주문" || $row['ct_status']=="입금" || $row['ct_status']=="준비" || $row['ct_status']=="배송" || $row['ct_status']=="완료"){
						$total_od_price+=$ct_price['stotal'];
						$total_real_price+=$opt_price * $opt['ct_qty'] * $opt['ct_copay_rate'] /100;
					}

					switch($opt['ct_status']) {
						case '주문':
							$ct_status = '주문신청';
							break;
						case '입금':
							$ct_status = '주문신청';
							break;
						case '준비':
							$ct_status = '상품준비중';
							break;
						case '배송':
							$ct_status = '상품배송';
							break;
						case '완료':
							$ct_status = '주문완료';
							break;
						case '교환':
							$ct_status = '교환완료';
							break;
						case '반품':
							$ct_status = '반품완료';
							break;
						case '취소':
							$ct_status = '취소완료';
							break;
						default:
							$ct_status = $opt['ct_status'];
							break;
					}

				?>
				<tr>
					<?php if($k == 0) { ?>
					<td rowspan="<?php echo $rowspan; ?>" class="td_chk">
						<label for="sit_sel_<?php echo $i; ?>" class="sound_only"><?php echo $row['it_name']; ?> 옵션 전체선택</label>
						<input type="checkbox" id="sit_sel_<?php echo $i; ?>" name="it_sel[]">
					</td>
					<td rowspan="<?php echo $rowspan; ?>" class="td_left">
						<?php echo $image; ?> <?php echo stripslashes($row['it_name']); ?>
						<?php if($od['od_tax_flag'] && $row['ct_notax']) echo '[비과세상품]'; ?>
					</td>
					<?php } ?>
					<td class="td_left">
						<label for="ct_chk_<?php echo $chk_cnt; ?>" class="sound_only"><?php echo get_text($opt['ct_option']); ?></label>
						<input type="checkbox" name="ct_chk[<?php echo $chk_cnt; ?>]" id="ct_chk_<?php echo $chk_cnt; ?>" value="<?php echo $chk_cnt; ?>" class="sct_sel_<?php echo $i; ?>">
						<input type="hidden" name="ct_id[<?php echo $chk_cnt; ?>]" value="<?php echo $opt['ct_id']; ?>">
						<?php echo get_text($opt['ct_option']); ?>
					</td>
					<td class="" style="width:80px;"><?php echo $ct_status; ?></td>
					<td class="td_num">
						<label for="ct_qty_<?php echo $chk_cnt; ?>" class="sound_only"><?php echo get_text($opt['ct_option']); ?> 수량</label>
						<input type="text" name="ct_qty[<?php echo $chk_cnt; ?>]" id="ct_qty_<?php echo $chk_cnt; ?>" value="<?php echo $opt['ct_qty']; ?>" required class="frm_input required" size="3">
					</td>
					<td class="td_num" style="min-width:90px;" colspan=2><?php echo number_format($ct_price['stotal']); ?></td>
				</tr>
				<?php
					$chk_cnt++;
				$i++;
				}
				?>
	<?php
		}
	?>
			</tbody>
			</table>
	<?php
	}
	?>
		</div>
		<?php echo $pg_anchor; ?>
		<div class="local_desc02 local_desc">
			<p class="txt">
				<!--현재 주문상태 <strong>--><?php //echo print_status($od['od_status']) ?><!--</strong>-->
				<!--|-->
				<!--주문일시 <strong>--><?php //echo substr($od['od_time'],0,16); ?><!-- (--><?php //echo get_yoil($od['od_time']); ?><!--)</strong>-->
				<!--|-->
				공단고시가 합계 <strong style="font-weight: 600;"><?php echo number_format($total_od_price); ?></strong>원
			</p>
			<p class="txt">
				본인부담금 합계 <strong style="font-weight: 600;"><?php echo number_format($nomal_tot_ct_price+$benefit_tot_ct_price); ?></strong>원
			</p>
			<?php if ($default['de_hope_date_use']) { ?><p>희망배송일은 <?php echo $od['od_hope_date']; ?> (<?php echo get_yoil($od['od_hope_date']); ?>) 입니다.</p><?php } ?>
			<?php if($od['od_mobile']) { ?>
				<p>모바일 쇼핑몰의 주문입니다.</p>
			<?php } ?>
		</div>
		<div class="tbl_total">
			<p class="txt">
				상품 금액 합계 <strong style="font-weight: 600; color: #073260;"><?php echo number_format($pay_sell_price); ?></strong>원
			</p>
		</div>

		<div class="btn_list02 btn_list">
			<input type="hidden" name="chk_cnt" value="<?php echo $chk_cnt; ?>" style="display:none;">
			<div class="tit">주문 및 장바구니 상태 변경</div>
			
			<div class="btnbox">
				<!--<button type="submit" name="ct_status" value="입금" class="btn_02 color_02" onclick="document.pressed=this.value">입금확인</button>-->
				<button type="submit" name="ct_status" value="완료" class="btn_02 <?=$od['od_status']=="완료"?"color_02":"color_06";?>" onclick="document.pressed=this.value" style="margin-right:10px;">주문완료</button>
				<button type="submit" name="ct_status" value="취소" class="btn_02 <?=$od['od_status']=="취소"?"color_02":"color_06";?>" onclick="document.pressed=this.value" style="margin-right:10px;">취소완료</button>
				<button type="submit" name="ct_status" value="반품" class="btn_02 <?=$od['od_status']=="반품"?"color_02":"color_06";?>" onclick="document.pressed=this.value" style="margin-right:10px;">반품완료</button>
				<button type="submit" name="ct_status" value="교환" class="btn_02 <?=$od['od_status']=="교환"?"color_02":"color_06";?>" onclick="document.pressed=this.value">교환완료</button>
				<!--
				<input type="submit" name="ct_status" value="주문" onclick="document.pressed=this.value" class="btn_02 color_01">
				<input type="submit" name="ct_status" value="입금" onclick="document.pressed=this.value" class="btn_02 color_02">
				<input type="submit" name="ct_status" value="준비" onclick="document.pressed=this.value" class="btn_02 color_03">
				<input type="submit" name="ct_status" value="배송" onclick="document.pressed=this.value" class="btn_02 color_04">
				<input type="submit" name="ct_status" value="취소" onclick="document.pressed=this.value" class="btn_02 color_06">
				<input type="submit" name="ct_status" value="반품" onclick="document.pressed=this.value" class="btn_02 color_06">
				<input type="submit" name="ct_status" value="교환" onclick="document.pressed=this.value" class="btn_02 color_06">
				<input type="submit" name="ct_status" value="품절" onclick="document.pressed=this.value" class="btn_02 color_06">
				-->
			</div>
	</div>
		
		<?php
		if($od['od_cancel_memo'] || $od['od_cancel_bank'] || $od['od_cancel_account'] || $od['od_cancel_name']){
		?>
		<div class="tbl_frm01">
			<table>
			<colgroup>
				<col class="grid_3"><col>
			</colgroup>
			<tbody>
			<tr>
				<th scope="row">취소사유</th>
				<td><?php echo get_text($od['od_cancel_memo']); ?></td>
			</tr>
			<tr>
				<th scope="row">환불 은행</th>
				<td><?php echo get_text($od['od_cancel_bank']); ?></td>
			</tr>
			<tr>
				<th scope="row">환불계좌번호</th>
				<td><?php echo get_text($od['od_cancel_account']); ?></td>
			</tr>
			<tr>
				<th scope="row">환불계좌주명</th>
				<td><?php echo get_text($od['od_cancel_name']); ?></td>
			</tr>
			</tbody>
			</table>
		</div>
		<?php
		}
		?>



		<div class="local_desc01 local_desc">
			<p>주문, 입금, 준비, 배송, 완료는 장바구니와 주문서 상태를 모두 변경하지만, 취소, 반품, 품절은 장바구니의 상태만 변경하며, 주문서 상태는 변경하지 않습니다.</p>
			<p>개별적인(이곳에서의) 상태 변경은 모든 작업을 수동으로 처리합니다. 예를 들어 주문에서 입금으로 상태 변경시 입금액(결제금액)을 포함한 모든 정보는 수동 입력으로 처리하셔야 합니다.</p>
		</div>

		</form>

		<?php if ($od['od_mod_history']) { ?>
		<section id="sodr_qty_log">
			<h3>주문 수량변경 및 주문 전체취소 처리 내역</h3>
			<div>
				<?php echo conv_content($od['od_mod_history'], 0); ?>
			</div>
		</section>
		<?php } ?>

	</section>
	<section class="" style="display:none ">
		<h2 class="h2_frm">결제상세정보</h2>
		<?php echo $pg_anchor; ?>

		<form name="frmorderreceiptform" action="./orderformreceiptupdate.php" method="post" autocomplete="off">
		<input type="hidden" name="od_id" value="<?php echo $od_id; ?>">
		<input type="hidden" name="sort1" value="<?php echo $sort1; ?>">
		<input type="hidden" name="sort2" value="<?php echo $sort2; ?>">
		<input type="hidden" name="sel_field" value="<?php echo $sel_field; ?>">
		<input type="hidden" name="search" value="<?php echo $search; ?>">
		<input type="hidden" name="page" value="<?php echo $page; ?>">
		<input type="hidden" name="od_name" value="<?php echo $od['od_name']; ?>">
		<input type="hidden" name="od_hp" value="<?php echo $od['od_hp']; ?>">
		<input type="hidden" name="od_tno" value="<?php echo $od['od_tno']; ?>">
		<input type="hidden" name="od_escrow" value="<?php echo $od['od_escrow']; ?>">
		<input type="hidden" name="od_pg" value="<?php echo $od['od_pg']; ?>">

		<div class="compare_wrap">

			<section id="anc_sodr_chk" class="compare_left">
				<h3>결제상세정보 확인</h3>

				<div class="tbl_frm01">
					<table>
					<caption>결제상세정보</caption>
					<colgroup>
						<col class="grid_3">
						<col>
					</colgroup>
					<tbody>
					<?php if ($od['od_settle_case'] == '무통장' || $od['od_settle_case'] == '가상계좌' || $od['od_settle_case'] == '계좌이체') { ?>
					<?php if ($od['od_settle_case'] == '무통장' || $od['od_settle_case'] == '가상계좌') { ?>
					<tr>
						<th scope="row">계좌번호</th>
						<td><?php echo get_text($od['od_bank_account']); ?></td>
					</tr>
					<?php } ?>
					<tr>
						<th scope="row"><?php echo $od['od_settle_case']; ?> 입금액</th>
						<td><?php echo display_price($od['od_receipt_price']); ?></td>
					</tr>
					<tr>
						<th scope="row">입금자</th>
						<td><?php echo get_text($od['od_deposit_name']); ?></td>
					</tr>
					<tr>
						<th scope="row">입금확인일시</th>
						<td>
							<?php if ($od['od_receipt_time'] == 0) { ?>입금 확인일시를 체크해 주세요.
							<?php } else { ?><?php echo $od['od_receipt_time']; ?> (<?php echo get_yoil($od['od_receipt_time']); ?>)
							<?php } ?>
						</td>
					</tr>
					<?php } ?>

					<?php if ($od['od_settle_case'] == '휴대폰') { ?>
					<tr>
						<th scope="row">휴대폰번호</th>
						<td><?php echo get_text($od['od_bank_account']); ?></td>
						</tr>
					<tr>
						<th scope="row"><?php echo $od['od_settle_case']; ?> 결제액</th>
						<td><?php echo display_price($od['od_receipt_price']); ?></td>
					</tr>
					<tr>
						<th scope="row">결제 확인일시</th>
						<td>
							<?php if ($od['od_receipt_time'] == 0) { ?>결제 확인일시를 체크해 주세요.
							<?php } else { ?><?php echo $od['od_receipt_time']; ?> (<?php echo get_yoil($od['od_receipt_time']); ?>)
							<?php } ?>
						</td>
					</tr>
					<?php } ?>

					<?php if ($od['od_settle_case'] == '신용카드') { ?>
					<tr>
						<th scope="row" class="sodr_sppay">신용카드 결제금액</th>
						<td>
							<?php if ($od['od_receipt_time'] == "0000-00-00 00:00:00") {?>0원
							<?php } else { ?><?php echo display_price($od['od_receipt_price']); ?>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<th scope="row" class="sodr_sppay">카드 승인일시</th>
						<td>
							<?php if ($od['od_receipt_time'] == "0000-00-00 00:00:00") {?>신용카드 결제 일시 정보가 없습니다.
							<?php } else { ?><?php echo substr($od['od_receipt_time'], 0, 20); ?>
							<?php } ?>
						</td>
					</tr>
					<?php } ?>

					<?php if ($od['od_settle_case'] == 'KAKAOPAY') { ?>
					<tr>
						<th scope="row" class="sodr_sppay">KAKOPAY 결제금액</th>
						<td>
							<?php if ($od['od_receipt_time'] == "0000-00-00 00:00:00") {?>0원
							<?php } else { ?><?php echo display_price($od['od_receipt_price']); ?>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<th scope="row" class="sodr_sppay">KAKAOPAY 승인일시</th>
						<td>
							<?php if ($od['od_receipt_time'] == "0000-00-00 00:00:00") {?>신용카드 결제 일시 정보가 없습니다.
							<?php } else { ?><?php echo substr($od['od_receipt_time'], 0, 20); ?>
							<?php } ?>
						</td>
					</tr>
					<?php } ?>

					<?php if ($od['od_settle_case'] == '간편결제' || ($od['od_pg'] == 'inicis' && is_inicis_order_pay($od['od_settle_case']) ) ) { ?>
					<tr>
						<th scope="row" class="sodr_sppay"><?php echo $s_receipt_way; ?> 결제금액</th>
						<td>
							<?php if ($od['od_receipt_time'] == "0000-00-00 00:00:00") {?>0원
							<?php } else { ?><?php echo display_price($od['od_receipt_price']); ?>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<th scope="row" class="sodr_sppay"><?php echo $s_receipt_way; ?> 승인일시</th>
						<td>
							<?php if ($od['od_receipt_time'] == "0000-00-00 00:00:00") { echo $s_receipt_way; ?> 결제 일시 정보가 없습니다.
							<?php } else { ?><?php echo substr($od['od_receipt_time'], 0, 20); ?>
							<?php } ?>
						</td>
					</tr>
					<?php } ?>

					<?php if ($od['od_settle_case'] != '무통장') { ?>
					<tr>
						<th scope="row">결제대행사 링크</th>
						<td>
							<?php
							if ($od['od_settle_case'] != '무통장') {
								switch($od['od_pg']) {
									case 'lg':
										$pg_url  = 'http://pgweb.uplus.co.kr';
										$pg_test = '토스페이먼츠';
										if ($default['de_card_test']) {
											$pg_url = 'http://pgweb.uplus.co.kr/tmert';
											$pg_test .= ' 테스트 ';
										}
										break;
									case 'inicis':
										$pg_url  = 'https://iniweb.inicis.com/';
										$pg_test = 'KG이니시스';
										break;
									case 'KAKAOPAY':
										$pg_url  = 'https://mms.cnspay.co.kr';
										$pg_test = 'KAKAOPAY';
										break;
									default:
										$pg_url  = 'http://admin8.kcp.co.kr';
										$pg_test = 'KCP';
										if ($default['de_card_test']) {
											// 로그인 아이디 / 비번
											// 일반 : test1234 / test12345
											// 에스크로 : escrow / escrow913
											$pg_url = 'http://testadmin8.kcp.co.kr';
											$pg_test .= ' 테스트 ';
										}

									}
								echo "<a href=\"{$pg_url}\" target=\"_blank\">{$pg_test}바로가기</a><br>";
							}
							//------------------------------------------------------------------------------
							?>
						</td>
					</tr>
					<?php } ?>

					<?php if($od['od_tax_flag']) { ?>
					<tr>
						<th scope="row">과세공급가액</th>
						<td><?php echo display_price($od['od_tax_mny']); ?></td>
					</tr>
					<tr>
						<th scope="row">과세부가세액</th>
						<td><?php echo display_price($od['od_vat_mny']); ?></td>
					</tr>
					<tr>
						<th scope="row">비과세공급가액</th>
						<td><?php echo display_price($od['od_free_mny']); ?></td>
					</tr>
					<?php } ?>
					<tr>
						<th scope="row">주문금액할인</th>
						<td><?php echo display_price($od['od_coupon']); ?></td>
					</tr>
					<tr>
						<th scope="row">포인트</th>
						<td><?php echo display_point($od['od_receipt_point']); ?></td>
					</tr>
					<tr>
						<th scope="row">결제취소/환불액</th>
						<td><?php echo display_price($od['od_refund_price']); ?></td>
					</tr>
					<?php if ($od['od_invoice']) { ?>
					<tr>
						<th scope="row">배송회사</th>
						<td><?php echo $od['od_delivery_company']; ?> <?php echo get_delivery_inquiry($od['od_delivery_company'], $od['od_invoice'], 'dvr_link'); ?></td>
					</tr>
					<tr>
						<th scope="row">운송장번호</th>
						<td><?php echo $od['od_invoice']; ?></td>
					</tr>
					<tr>
						<th scope="row">배송일시</th>
						<td><?php echo is_null_time($od['od_invoice_time']) ? "" : $od['od_invoice_time']; ?></td>
					</tr>
					<?php } ?>
					<tr>
						<th scope="row"><label for="od_send_cost">배송비</label></th>
						<td>
							<?php echo number_format($od['od_send_cost']); ?> 원
						</td>
					</tr>
					<?php if($od['od_send_coupon']) { ?>
					<tr>
						<th scope="row">배송비할인</th>
						<td><?php echo display_price($od['od_send_coupon']); ?></td>
					</tr>
					<?php } ?>
					<tr>
						<th scope="row"><label for="od_send_cost2">추가배송비</label></th>
						<td>
							<?php echo number_format($od['od_send_cost2']); ?> 원
						</td>
					</tr>
					<?php
					if ($od['od_misu'] == 0 && $od['od_receipt_price'] && ($od['od_settle_case'] == '무통장' || $od['od_settle_case'] == '가상계좌' || $od['od_settle_case'] == '계좌이체')) {
					?>
					<tr>
						<th scope="row">현금영수증</th>
						<td>
						<?php
						if ($od['od_cash']) {
							if($od['od_pg'] == 'lg') {
								require G5_SHOP_PATH.'/settle_lg.inc.php';

								switch($od['od_settle_case']) {
									case '계좌이체':
										$trade_type = 'BANK';
										break;
									case '가상계좌':
										$trade_type = 'CAS';
										break;
									default:
										$trade_type = 'CR';
										break;
								}
								$cash_receipt_script = 'javascript:showCashReceipts(\''.$LGD_MID.'\',\''.$od['od_id'].'\',\''.$od['od_casseqno'].'\',\''.$trade_type.'\',\''.$CST_PLATFORM.'\');';
							} else if($od['od_pg'] == 'inicis') {
								$cash = unserialize($od['od_cash_info']);
								$cash_receipt_script = 'window.open(\'https://iniweb.inicis.com/DefaultWebApp/mall/cr/cm/Cash_mCmReceipt.jsp?noTid='.$cash['TID'].'&clpaymethod=22\',\'showreceipt\',\'width=380,height=540,scrollbars=no,resizable=no\');';
							} else {
								require G5_SHOP_PATH.'/settle_kcp.inc.php';

								$cash = unserialize($od['od_cash_info']);
								$cash_receipt_script = 'window.open(\''.G5_CASH_RECEIPT_URL.$default['de_kcp_mid'].'&orderid='.$od_id.'&bill_yn=Y&authno='.$cash['receipt_no'].'\', \'taxsave_receipt\', \'width=360,height=647,scrollbars=0,menus=0\');';
							}
						?>
							<a href="javascript:;" onclick="<?php echo $cash_receipt_script; ?>">현금영수증 확인</a>
						<?php } else { ?>
							<a href="javascript:;" onclick="window.open('<?php echo G5_SHOP_URL; ?>/taxsave.php?od_id=<?php echo $od_id; ?>', 'taxsave', 'width=550,height=400,scrollbars=1,menus=0');">현금영수증 발급</a>
						<?php } ?>
						</td>
					</tr>
					<?php
					}
					?>

					</tbody>
					</table>
				</div>
			</section>

			<section id="anc_sodr_paymo" class="compare_right">
				<h3>결제상세정보 수정</h3>

				<div class="tbl_frm01">
					<table>
					<caption>결제상세정보 수정</caption>
					<colgroup>
						<col class="grid_3">
						<col>
					</colgroup>
					<tbody>
					<?php if ($od['od_settle_case'] == '무통장' || $od['od_settle_case'] == '가상계좌' || $od['od_settle_case'] == '계좌이체') { ########## 시작?>
					<?php
					if ($od['od_settle_case'] == '무통장')
					{
						// 은행계좌를 배열로 만든후
						$str = explode("\n", $default['de_bank_account']);
						$bank_account = '<select name="od_bank_account" id="od_bank_account" style="width:100%;">'.PHP_EOL;
						$bank_account .= '<option value="">선택하십시오</option>'.PHP_EOL;
						for ($i=0; $i<count($str); $i++) {
							$str[$i] = str_replace("\r", "", $str[$i]);
							$bank_account .= '<option value="'.$str[$i].'" '.get_selected($od['od_bank_account'], $str[$i]).'>'.$str[$i].'</option>'.PHP_EOL;
						}
						$bank_account .= '</select> ';
					}
					else if ($od['od_settle_case'] == '가상계좌')
						$bank_account = $od['od_bank_account'].'<input type="hidden" name="od_bank_account" value="'.$od['od_bank_account'].'">';
					else if ($od['od_settle_case'] == '계좌이체')
						$bank_account = $od['od_settle_case'];
					?>

					<?php if ($od['od_settle_case'] == '무통장' || $od['od_settle_case'] == '가상계좌') { ?>
					<tr>
						<th scope="row"><label for="od_bank_account">계좌번호</label></th>
						<td><?php echo $bank_account; ?></td>
					</tr>
					<?php } ?>

					<tr>
						<th scope="row"><label for="od_receipt_price"><?php echo $od['od_settle_case']; ?> 입금액</label></th>
						<td>
							<?php echo $od['od_receipt_price']; ?> 원
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="od_deposit_name">입금자명</label></th>
						<td>
							<?php if ($config['cf_sms_use'] && $default['de_sms_use4']) { ?>
							<input type="checkbox" name="od_sms_ipgum_check" id="od_sms_ipgum_check">
							<label for="od_sms_ipgum_check">SMS 입금 문자전송</label>
							<br>
							<?php } ?>
							<?php echo get_text($od['od_deposit_name']); ?>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="od_receipt_time">입금 확인일시</label></th>
						<td>
							<?php echo is_null_time($od['od_receipt_time']) ? "" : $od['od_receipt_time']; ?>
						</td>
					</tr>
					<?php } ?>

					<?php if ($od['od_settle_case'] == '휴대폰') { ?>
					<tr>
						<th scope="row">휴대폰번호</th>
						<td><?php echo get_text($od['od_bank_account']); ?></td>
					</tr>
					<tr>
						<th scope="row"><label for="od_receipt_price"><?php echo $od['od_settle_case']; ?> 결제액</label></th>
						<td>
							<?php echo number_format($od['od_receipt_price']); ?> 원
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="op_receipt_time">휴대폰 결제일시</label></th>
						<td>
							<?php echo is_null_time($od['od_receipt_time']) ? "" : $od['od_receipt_time']; ?>
						</td>
					</tr>
					<?php } ?>

					<?php if ($od['od_settle_case'] == '신용카드') { ?>
					<tr>
						<th scope="row" class="sodr_sppay"><label for="od_receipt_price">신용카드 결제금액</label></th>
						<td>
							<?php echo number_format($od['od_receipt_price']); ?> 원
						</td>
					</tr>
					<tr>
						<th scope="row" class="sodr_sppay"><label for="od_receipt_time">카드 승인일시</label></th>
						<td>
							<?php echo is_null_time($od['od_receipt_time']) ? "" : $od['od_receipt_time']; ?>
						</td>
					</tr>
					<?php } ?>

					<?php if ($od['od_settle_case'] == 'KAKAOPAY') { ?>
					<tr>
						<th scope="row" class="sodr_sppay"><label for="od_receipt_price">KAKAOPAY 결제금액</label></th>
						<td>
							<?php echo $html_receipt_chk; ?>
							<input type="text" name="od_receipt_price" id="od_receipt_price" value="<?php echo $od['od_receipt_price']; ?>" class="frm_input" size="10"> 원
						</td>
					</tr>
					<tr>
						<th scope="row" class="sodr_sppay"><label for="od_receipt_time">KAKAOPAY 승인일시</label></th>
						<td>
							<input type="checkbox" name="od_card_chk" id="od_card_chk" value="<?php echo date("Y-m-d H:i:s", G5_SERVER_TIME); ?>" onclick="if (this.checked == true) this.form.od_receipt_time.value=this.form.od_card_chk.value; else this.form.od_receipt_time.value = this.form.od_receipt_time.defaultValue;">
							<label for="od_card_chk">현재 시간으로 설정</label><br>
							<input type="text" name="od_receipt_time" value="<?php echo is_null_time($od['od_receipt_time']) ? "" : $od['od_receipt_time']; ?>" id="od_receipt_time" class="frm_input" size="19" maxlength="19">
						</td>
					</tr>
					<?php } ?>

					<?php if ($od['od_settle_case'] == '간편결제' || ($od['od_pg'] == 'inicis' && is_inicis_order_pay($od['od_settle_case']) )) { ?>
					<tr>
						<th scope="row" class="sodr_sppay"><label for="od_receipt_price"><?php echo $s_receipt_way; ?> 결제금액</label></th>
						<td>
							<?php echo $html_receipt_chk; ?>
							<input type="text" name="od_receipt_price" id="od_receipt_price" value="<?php echo $od['od_receipt_price']; ?>" class="frm_input" size="10"> 원
						</td>
					</tr>
					<tr>
						<th scope="row" class="sodr_sppay"><label for="od_receipt_time"><?php echo $s_receipt_way; ?> 승인일시</label></th>
						<td>
							<input type="checkbox" name="od_card_chk" id="od_card_chk" value="<?php echo date("Y-m-d H:i:s", G5_SERVER_TIME); ?>" onclick="if (this.checked == true) this.form.od_receipt_time.value=this.form.od_card_chk.value; else this.form.od_receipt_time.value = this.form.od_receipt_time.defaultValue;">
							<label for="od_card_chk">현재 시간으로 설정</label><br>
							<input type="text" name="od_receipt_time" value="<?php echo is_null_time($od['od_receipt_time']) ? "" : $od['od_receipt_time']; ?>" id="od_receipt_time" class="frm_input" size="19" maxlength="19">
						</td>
					</tr>
					<?php } ?>

					<tr>
						<th scope="row"><label for="od_receipt_point">포인트 결제액</label></th>
						<td><?php echo number_format($od['od_receipt_point']); ?> 점</td>
					</tr>
					<tr>
						<th scope="row"><label for="od_refund_price">결제취소/환불 금액</label></th>
						<td>
							<?php echo number_format($od['od_refund_price']); ?> 원
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="od_invoice">운송장번호</label></th>
						<td>
							<?php echo $od['od_invoice']; ?>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="od_delivery_company">배송회사</label></th>
						<td>
							<?php echo $od['od_delivery_company']; ?>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="od_invoice_time">배송일시</label></th>
						<td>
							<?php echo is_null_time($od['od_invoice_time']) ? "" : $od['od_invoice_time']; ?>
						</td>
					</tr>

					</tbody>
					</table>
				</div>
			</section>

		</div>


		</form>
	</section>

	<section>
		<h2 class="h2_frm">주문자/배송지 정보</h2>
		<?php echo $pg_anchor; ?>

		<form name="frmorderform3" action="./orderviewformupdate.php" method="post">
		<input type="hidden" name="od_id" value="<?php echo $od_id; ?>">
		<input type="hidden" name="sort1" value="<?php echo $sort1; ?>">
		<input type="hidden" name="sort2" value="<?php echo $sort2; ?>">
		<input type="hidden" name="sel_field" value="<?php echo $sel_field; ?>">
		<input type="hidden" name="search" value="<?php echo $search; ?>">
		<input type="hidden" name="page" value="<?php echo $page; ?>">
		<input type="hidden" name="mod_type" value="info">

		<div class="compare_wrap">

			<section id="anc_sodr_orderer" class="compare_left">
				<h3>주문하신 분</h3>

				<div class="tbl_frm01">
					<table>
					<caption>주문자/배송지 정보</caption>
					<!-- <colgroup>
						<col class="grid_4" style="width:auto;max-width:100px;">
						<col>
					</colgroup> -->
					<tbody>
					<tr>
						<th scope="row"><label for="od_name"><span class="sound_only">주문하신 분 </span>이름</label></th>
						<td><?php echo get_text($od['od_name']); ?></td>
					</tr>
					<tr>
						<th scope="row"><label for="od_hp"><span class="sound_only">주문하신 분 </span>전화번호</label></th>
						<td><?php echo get_text($od['od_hp']); ?></td>
					</tr>
					<tr>
						<th scope="row"><span class="sound_only">주문하시는 분 </span>주소</th>
						<td>
							<?php echo get_text($od['od_zip1']).get_text($od['od_zip2']); ?><br>
							<?php echo get_text($od['od_addr1']); ?><br>
							<?php echo get_text($od['od_addr2']); ?><br>
							<?php echo get_text($od['od_addr3']); ?><br>
							<?php echo get_text($od['od_addr_jibeon']); ?><br>
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="od_email"><span class="sound_only">주문하신 분 </span>E-mail</label></th>
						<td><?php echo $od['od_email']; ?></td>
					</tr>
					<tr>
						<th scope="row"><span class="sound_only">주문하신 분 </span>결제 수단</th>
						<td><?php echo $od['od_settle_case']; ?></td>
					</tr>
					<?php
					if($od['od_settle_case']=="무통장"){
					?>
					<tr>
						<th scope="row"><span class="sound_only">주문하신 분 </span>입금자명</th>
						<td><?php echo $od['od_deposit_name']; ?></td>
					</tr>
					<?php }?>
					</tbody>
					</table>
				</div>
			</section>

			<section id="anc_sodr_taker" class="compare_right">
				<h3>받으시는 분</h3>

				<div class="tbl_frm01">
					<table>
					<caption>받으시는 분 정보</caption>
					<colgroup>
						<col class="grid_4" style="width:auto;max-width:100px;">
						<col>
					</colgroup>
					<tbody>
					<tr>
						<th scope="row"><label for="od_b_name"><span class="sound_only">받으시는 분 </span>이름</label></th>
						<td><?php echo get_text($od['od_b_name']); ?></td>
					</tr>
					<tr>
						<th scope="row"><label for="od_b_hp"><span class="sound_only">받으시는 분 </span>전화번호</label></th>
						<td><?php echo get_text($od['od_b_hp']); ?></td>
					</tr>
					<tr>
						<th scope="row"><span class="sound_only">받으시는 분 </span>주소</th>
						<td>
							<!--<?php echo get_text($od['od_b_zip1']).get_text($od['od_b_zip2']); ?><br>-->
							<?php echo get_text($od['od_b_addr1']); ?><br>
							<?php echo get_text($od['od_b_addr2']); ?><br>
							<?php echo get_text($od['od_b_addr3']); ?><br>
						</td>
					</tr>

					<?php if ($default['de_hope_date_use']) { ?>
					<tr>
						<th scope="row"><label for="od_hope_date">희망배송일</label></th>
						<td>
							<?php echo $od['od_hope_date']; ?> (<?php echo get_yoil($od['od_hope_date']); ?>)
						</td>
					</tr>
					<?php } ?>

					<tr>
						<th scope="row">전달 메세지</th>
						<td><?php if ($od['od_memo']) echo get_text($od['od_memo'], 1);else echo "없음";?></td>
					</tr>
					<tr>
						<th scope="row">수급자 성함</th>
						<td><?php echo $od['receiver_name'];?></td>
					</tr>
					<tr>
						<th scope="row">장기요양인정번호(사진)</th>
						<td>
						<?php 
						if ($od['receiver_file1']){
							echo '<a href="'.G5_DATA_URL.'/order/'.$od['receiver_file1'].'" target=_blank><img src="'.G5_DATA_URL.'/order/'.$od['receiver_file1'].'" style="max-width:100%;height:100px;"></a>';
							echo '<a class="del_btn" href="javascript:orderfile_del(\''.$od['od_id'].'\')">삭제</a>';
						}
						?>
						</td>
					</tr>
					</tbody>
					</table>
				</div>
			</section>

		</div>

		<!--<div class="btn_confirm01 btn_confirm">
			<input type="submit" value="주문자/배송지 정보 수정" class="btn_submit btn ">
			<a href="./orderlist.php?<?php echo $qstr; ?>" class="btn">목록</a>
		</div>-->

		</form>
	</section>

	<div class="btn_confirm01 btn_confirm">
		<!--<input type="submit" value="결제/배송내역 수정" class="btn_submit btn">-->
		<?php if($od['od_misu'] < 0 && ($od['od_receipt_price'] - $od['od_refund_price']) > 0 && ($od['od_settle_case'] == '신용카드' || $od['od_settle_case'] == '계좌이체' || $od['od_settle_case'] == 'KAKAOPAY')) { ?>
			<a href="./orderpartcancel.php?od_id=<?php echo $od_id; ?>" id="orderpartcancel" class="btn btn_02"><?php echo $od['od_settle_case']; ?> 부분취소</a>
		<?php } ?>
		<a href="./orderlist.php?<?php echo $qstr; ?>" class="btn btn_02">목록</a>
	</div>
</div>



<script>
$(function() {
    // 전체 옵션선택
    $("#sit_select_all").click(function() {
        if($(this).is(":checked")) {
            $("input[name='it_sel[]']").attr("checked", true);
            $("input[name^=ct_chk]").attr("checked", true);
        } else {
            $("input[name='it_sel[]']").attr("checked", false);
            $("input[name^=ct_chk]").attr("checked", false);
        }
    });

    // 상품의 옵션선택
    $("input[name='it_sel[]']").click(function() {
        var cls = $(this).attr("id").replace("sit_", "sct_");
        var $chk = $("input[name^=ct_chk]."+cls);
        if($(this).is(":checked"))
            $chk.attr("checked", true);
        else
            $chk.attr("checked", false);
    });

    // 개인결제추가
    $("#personalpay_add").on("click", function() {
        var href = this.href;
        window.open(href, "personalpaywin", "left=100, top=100, width=700, height=560, scrollbars=yes");
        return false;
    });

    // 부분취소창
    $("#orderpartcancel").on("click", function() {
        var href = this.href;
        window.open(href, "partcancelwin", "left=100, top=100, width=600, height=350, scrollbars=yes");
        return false;
    });
});

function form_submit(f)
{
    var check = false;
    var status = document.pressed;

    for (i=0; i<f.chk_cnt.value; i++) {
        if (document.getElementById('ct_chk_'+i).checked == true)
            check = true;
    }

    if (check == false) {
        alert("처리할 자료를 하나 이상 선택해 주십시오.");
        return false;
    }

    var msg = "";

    <?php if($od['od_settle_case'] == '신용카드' || $od['od_settle_case'] == 'KAKAOPAY' || $od['od_settle_case'] == '간편결제' || ($od['od_pg'] == 'inicis' && is_inicis_order_pay($od['od_settle_case']) )) { ?>
    if(status == "취소" || status == "반품" || status == "품절") {
        var $ct_chk = $("input[name^=ct_chk]");
        var chk_cnt = $ct_chk.length;
        var chked_cnt = $ct_chk.filter(":checked").length;
        <?php if($od['od_pg'] == 'KAKAOPAY') { ?>
        var cancel_pg = "카카오페이";
        <?php } else { ?>
        var cancel_pg = "PG사의 <?php echo $od['od_settle_case']; ?>";
        <?php } ?>

        if(chk_cnt == chked_cnt) {
            if(confirm(cancel_pg+" 결제를 함께 취소하시겠습니까?\n\n한번 취소한 결제는 다시 복구할 수 없습니다.")) {
                f.pg_cancel.value = 1;
                msg = cancel_pg+" 결제 취소와 함께 ";
            } else {
                f.pg_cancel.value = 0;
                msg = "";
            }
        }
    }
    <?php } ?>

    if (confirm(msg+"\'" + status + "\' 상태를 선택하셨습니다.\n\n선택하신대로 처리하시겠습니까?")) {
        return true;
    } else {
        return false;
    }
}

function del_confirm()
{
    if(confirm("주문서를 삭제하시겠습니까?")) {
        return true;
    } else {
        return false;
    }
}

// 기본 배송회사로 설정
function chk_delivery_company()
{
    var chk = document.getElementById("od_delivery_chk");
    var company = document.getElementById("od_delivery_company");
    company.value = chk.checked ? chk.value : company.defaultValue;
}

// 현재 시간으로 배송일시 설정
function chk_invoice_time()
{
    var chk = document.getElementById("od_invoice_chk");
    var time = document.getElementById("od_invoice_time");
    time.value = chk.checked ? chk.value : time.defaultValue;
}

// 결제금액 수동 설정
function chk_receipt_price()
{
    var chk = document.getElementById("od_receipt_chk");
    var price = document.getElementById("od_receipt_price");
    price.value = chk.checked ? (parseInt(chk.value) + parseInt(price.defaultValue)) : price.defaultValue;
}

function orderfile_del(od_id){
	if(confirm("첨부파일을 삭제하시겠습니까?")){
		$.ajax({
			type:"get",
			url:"/shop/ajax.order_file_del.php",
			data:"od_id="+od_id,
			success:function(res){
				location.reload();
			},
		});

	}
}
</script>
<?php
include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
?>