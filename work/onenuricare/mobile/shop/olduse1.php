<?php
include_once('./_common.php');

//define("_INDEX_", TRUE);
$mNum='2';
$sNum='2';
$g5['m']="노인복지용구란";
$g5['s']="급여안내";
include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');

?>

<style>
	.neromap.mob {display: none;}
	#sct_ct_1 ul {display: flex;}
	#sct_ct_1 ul li.on a { color: #fff;}

	@media (max-width: 969px) {
		 #sct_ct_1 { margin-top: 24px;}
	}
</style>

<aside id="sct_ct_1" class="sct_ct">
    <ul>
        <li class="on">
			<a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse1.php" class="btn_hover box">급여안내</a>
        </li>
		<li class="">
			<a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse2.php" class="btn_hover box">사용 가능 개수</a>
        </ul>
</aside>

<div class="old_img">
  <img src="<?php echo G5_THEME_IMG_URL ?>/tb01.jpg" alt="">
</div>


<?php
include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
?>
