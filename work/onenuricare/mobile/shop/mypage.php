<?php
include_once('./_common.php');

$g5['title'] = '마이페이지';

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');

$sql="select count(*) cnt from {$g5['g5_shop_order_table']} where mb_id = '{$member['mb_id']}' and od_status in('주문','입금','준비','배송','완료')";
$tmp_row=sql_fetch($sql);
$order_count=$tmp_row['cnt'];

$sql="select count(*) cnt from {$g5['g5_shop_wish_table']} where mb_id = '{$member['mb_id']}'";
$tmp_row=sql_fetch($sql);
$wish_count=$tmp_row['cnt'];

$sql="select count(*) cnt from {$g5['g5_shop_cart_table']} where mb_id = '{$member['mb_id']}' and ct_direct='0' and ct_select = '0'";
$tmp_row=sql_fetch($sql);
$cart_count=$tmp_row['cnt'];

?>
<style>
    #container_title{display: none;}
    .neromap{display: none}
</style>

<section class="my_wrap">
    <h2 class="or_title">마이페이지</h2>
    <div class="my_area">
        <div class="left">
			<?php if($is_admin){?>
            <ul>
                <li><h3>주문관리</h3></li>
                <li><a href="<?php echo G5_SHOP_URL; ?>/orderlist.php">주문내역</a></li>
                <!--<li><a href="--><?php //echo G5_SHOP_URL; ?><!--/myapplylist.php">구매신청</a></li>-->
            </ul>
			<?php }?>
            <ul>
                <li><h3>나의 쇼핑</h3></li>
                <li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php">주문 조회</a></li>
            </ul>
            <ul>
                <li><h3>나의 활동</h3></li>
                <li><a href="<?php echo G5_SHOP_URL; ?>/my_itemuselist.php">상품리뷰</a></li>
                <li><a href="<?php echo G5_SHOP_URL; ?>/wishlist.php">찜한 상품</a></li>
                <li><a href="<?php echo G5_SHOP_URL; ?>/myorderaddress.php">배송지 관리</a></li>
				<li><a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">회원정보수정</a></li>
                <li><a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=member_leave.php" onclick="return member_leave();">회원탈퇴</a></li>
            </ul>
        </div>
        <div class="right">
            <div class="my_info_wrap">
                <h3><b><?=$member['mb_name']?></b>님</h3>
                <div class="box_wrap">
                    <a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php" class="box">
                        <!-- <img src="<?php echo G5_THEME_IMG_URL ?>/my1.png" alt=""> -->
						<i data-lucide="scroll-text" class="svgicon"></i>
                        <h4>주문</h4>
                        <h5><b><?=number_format($order_count)?></b>건</h5>
                    </a>
                    <a href="<?=G5_SHOP_URL?>/wishlist.php" class="box">
                        <!-- <img src="<?php echo G5_THEME_IMG_URL ?>/my2.png" alt=""> -->
						<i data-lucide="heart" class="svgicon"></i>
                        <h4>찜한 상품</h4>
                        <h5><b><?=number_format($wish_count)?></b>개</h5>
                    </a>
                    <a href="<?=G5_SHOP_URL?>/cart.php" class="box">
                        <!-- <img src="<?php echo G5_THEME_IMG_URL ?>/my3.png" alt=""> -->
						<i data-lucide="shopping-bag" class="svgicon"></i>
                        <h4>장바구니</h4>
                        <h5><b><?=number_format($cart_count)?></b>건</h5>
                    </a>
                    <?php if($is_admin) : ?>
                    <a href="#" class="box">
                        <!-- <i class="ri-money-dollar-box-line" style="font-size: 46px;"></i> -->
						<i data-lucide="circle-dollar-sign" class="svgicon"></i>
                        <h4>예치금</h4>
                        <h5><b><?=number_format($member['mb_point'])?></b>원</h5>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="my_order">
                <h2>최근 주문 정보</h2>
				<?php
				// 최근 주문내역
				define("_ORDERINQUIRY_", true);

				$limit = " limit 0, 4 ";
				include G5_MSHOP_PATH.'/orderinquiry.sub.php';
				?>

            </div>
        </div>
    </div>
</section>


<script>
$(function() {
    $(".win_coupon").click(function() {
        var new_win = window.open($(this).attr("href"), "win_coupon", "left=100,top=100,width=700, height=600, scrollbars=1");
        new_win.focus();
        return false;
    });
});

function member_leave()
{
    return confirm('정말 회원에서 탈퇴 하시겠습니까?')
}
</script>

<?php
include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
?>