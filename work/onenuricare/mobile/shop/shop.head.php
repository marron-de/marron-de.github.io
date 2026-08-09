<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

set_cart_id(0);
$tmp_cart_id = get_session('ss_cart_id');

add_javascript('<script src="'.G5_THEME_JS_URL.'/owl.carousel.min.js"></script>', 10);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_JS_URL.'/owl.carousel.css">', 0);

if($mNum==""){
$mNum = 0; $sNum = 0;
//   $fileName ="sub2_3.php";  // 파일명이 와 같은 형식일 경우 대메뉴 및 소메뉴명 작동됨
$fileName =  basename($_SERVER["SCRIPT_NAME"]);
if ($bo_table) $fileName = $bo_table;   // 게시판류가 있을경우 파일명보다 게시판 종류가 메뉴결정에 우선함

if (preg_match('/([a-z]+)([0-9]+)_([0-9]+)/', $fileName , $matches) == true){
	$mNum = $matches[2];
	$sNum = $matches[3];
}
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
<script src="
https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/build/pdf.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/pdfjs-dist@3.9.179/web/pdf_viewer.min.css
" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="quick_cart">
    <a href="/shop/cart.php" class="qcart">장바구니 <span><?php echo get_cart_count($tmp_cart_id); ?></span></a>
	<?php
	$tv_datas = get_view_today_items(true);
	$tv_datas_count=count($tv_datas);
	//echo print_r($tv_datas);
	?>
    <ul>
        <li><h6>최근 본 상품 <span><?=$tv_datas_count?></span></h6></li>
		<li>
 <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />

<style>
	.quickswiper {width: 130px;/*height: 520px;*/border-radius: 16px;overflow: hidden;background: #fff;}
	.quickswiper .swiper-slide {display: grid;grid-template-columns: 1fr;/*grid-template-rows: repeat(4, 1fr);*/gap: 0;padding: 0;}
	.quickswiper .swiper-slide .slide-item {width: 130px;height: 130px;display: flex;justify-content: center;align-items: center;}
	.quickswiper .swiper-slide .slide-item a {display: block;width: 100%;height: 100%;}
	.quickswiper .swiper-slide .slide-item img {width: 100%;height: 100%;object-fit: cover;}
	.quickswiper-controls {position: relative;display: flex;align-items:center;    justify-content: space-between; gap: 5px;margin: 12px 0;}
	.quickswiper-controls .swiper-button-prev,
	.quickswiper-controls .swiper-button-next {position: static !important;color: #000;width: 24px;height: 24px !important;font-size: 14px;cursor: pointer;font-weight: bold;background-size: 16px 16px !important; margin: 0; filter: brightness(0.2); }
	.quickswiper-controls .swiper-button-prev::after,.swiper-button-next::after {content: none;}
	.quickswiper-controls .swiper-pagination {position: static !important;width: auto !important;font-size: 14px;font-weight: 600;color: var(--brand-primary);margin: 0;}
</style>

  <!-- Swiper 구조 -->
  <div class="slider-container">
    <div class="quickswiper">
      <div class="swiper-wrapper">
		<?php
		if ($tv_datas) {
			$total_items = count($tv_datas);
			$items_per_slide = 4;
			$slides = array_chunk($tv_datas, $items_per_slide);
			
			foreach($slides as $slide_items) {
				echo '<div class="swiper-slide">'.PHP_EOL;
				
				foreach($slide_items as $rowx) {
					if(!$rowx['it_id']) continue;
					
					$tv_it_id = $rowx['it_id'];
					$it_name = get_text($rowx['it_name']);
					$img = get_it_image($tv_it_id, 130, 130, $tv_it_id, '', $it_name);
					
					echo '<div class="slide-item">'.$img.'</div>'.PHP_EOL;
				}
				
				echo '</div>'.PHP_EOL;
			}
		}
		?>

      </div>
    </div>

    <!-- 하단 버튼 -->
	<?php
	if ($tv_datas) {
	?>
    <div class="quickswiper-controls">
      <div class="swiper-button-prev"></div>
	  <div class="swiper-pagination"></div>
      <div class="swiper-button-next"></div>
    </div>
	<?php
	}
	?>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    const quickswiper = new Swiper('.quickswiper', {
      //direction: 'vertical',
	  slidesPerView: 1,
      loop: true,
      speed: 600,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
	  pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
      },
      mousewheel: true,
    });

// let lastScroll = 0;
// window.addEventListener('scroll', () => {
//   const current = window.scrollY;
//   const layer = document.querySelector('.quick_cart');
//   if (current > lastScroll) {
//     // 스크롤 아래로
//     layer.style.top = 'auto';
//     layer.style.bottom = '310px';
//   } else {
//     // 스크롤 위로
//     layer.style.bottom = 'auto';
//     layer.style.top = '220px';
//   }
//   lastScroll = current;
// });
  </script>
		</li>
    </ul>
</div>

<div class="top_banner">
	<div class="cont">
		<div class="item">
			<!-- <img src="<?=G5_THEME_IMG_URL?>/car_icon.png" class="icon"> -->
			<img src="<?=G5_THEME_URL?>/newimg/tb_icon1.png" class="icon">
			<span class="txt">전국 무료 설치</span>
		</div> 
		<div class="item pc">
			<!-- <img src="<?=G5_THEME_IMG_URL?>/box_icon.png" class="icon"> -->
			<img src="<?=G5_THEME_URL?>/newimg/tb_icon2.png" class="icon">
			<span class="txt">빠른 배송</span>
		</div> 
		<div class="item">
			<!-- <img src="<?=G5_THEME_IMG_URL?>/phone_icon.png" class="icon"> -->
			<img src="<?=G5_THEME_URL?>/newimg/tb_icon3.png" class="icon">
			<span class="txt">010-5405-1955</span>
		</div> 
	</div>
</div>

<header id="hd">
    <?php if ((!$bo_table || $w == 's' ) && defined('_INDEX_')) { ?><h1><?php echo $config['cf_title'] ?></h1><?php } ?>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
    <?php if(defined('_INDEX_')) { // index에서만 실행
        include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>
	<!--
    <?php if ($is_admin) {  ?>
    <div class="hd-admin">
        <span><strong>관리자</strong>로 접속하셨습니다.</span>
        <a href="<?php echo G5_THEME_ADM_URL ?>" target="_blank">테마관리</a>
        <a href="<?php echo G5_ADMIN_URL ?>/shop_admin/" target="_blank">관리자</a>
    </div>
    <?php } ?>
	--->

    <!--<ul class="main_admin ">-->
    <!--    <li><a href="--><?php //echo G5_URL ?><!--/adm">관리자</a></li>-->
    <!--    <li><a href="--><?php //echo G5_BBS_URL ?><!--/logout.php">로그아웃</a></li>-->
    <!---->
    <!--</ul>-->

	<style>
		.top_search_wrap { position: relative; width: 350px; margin-right: 40px;margin-left:10px; }
		.top_search_wrap .frm_input { width: 100%; height: 46px; padding: 0 44px 0 16px; border: 1px solid #ddd; border-radius: 100px; font-size: 16px; outline: none; }
		.top_search_wrap .frm_input::placeholder { color: #aaa; }
		.top_search_wrap .btn_search { position: absolute; right: 16px; top: 50%; width: 24px; height: 24px; border: none; background: none; cursor: pointer; display: flex; align-items: center; justify-content: center; padding: 0; transform: translateY(-50%);}
		.top_search_wrap .btn_search .svgicon { width: 100; color: var(--brand-primary); }

		.icon_menu_wrap .svgicon {display:inline-block;height:30px;margin: 0 auto;vertical-align:top;}
	</style>

    <div id="hd_tnb">
		<div class="h_inner">
			<div class="leftbox">
				<button type="button" id="hd_ct">
					<!-- <i class="ri-menu-line"></i> -->					 
					<i data-lucide="text-align-justify" class="svgicon"></i>
				</button>
				<div class="top_search_wrap">
				<form name="frmsearch1" action="<?php echo G5_SHOP_URL; ?>/search.php" onsubmit="return search_submit(this);" class="all_search">
					<input type="text" name="q" value="<?php echo stripslashes(get_text(get_search_string($q))); ?>" id="sch_str" required class="frm_input"  placeholder="제품명을 검색하세요">
					<button type="submit" class="btn_search" id="btnTopSearch">
						<!-- <img src="<?=G5_THEME_IMG_URL?>/icon_search.png" class=""> -->
						<i data-lucide="search" class="svgicon"></i>
					</button>
				</form>
				<script>
				function search_submit(f) {
					if (f.q.value.length < 2) {
						alert("검색어는 두글자 이상 입력하십시오.");
						f.q.select();
						f.q.focus();
						return false;
					}
					return true;
				}
				</script>
				</div>
				<button type="button" class="pop_search_btn" id="btnOpenSearch">
					<!-- <img src="<?=G5_THEME_IMG_URL?>/icon_search.png" class=""> -->
					<i data-lucide="search" class="svgicon"></i>
				</button>
			</div>
			<div id="logo">
				<a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_THEME_IMG_URL; ?>/logo.png?ver=<?php echo G5_CSS_VER; ?>" alt="<?php echo $config['cf_title']; ?> 메인"></a>
			</div>
			<div class="rightbox">
				<div class="hd_log pc_hide">
					<?php if ($is_member) { ?>
					<!-- <a href="#" class="tnb_cart tnb_mob">예치금 <b><?=number_format($member['mb_point'])?></b>원</a> -->
					<a href="<?php echo G5_BBS_URL ?>/logout.php" class="tnb_cart "><span></span>로그아웃</a>
					<a href="<?php echo G5_SHOP_URL ?>/orderinquiry.php" class="tnb_cart "><span></span>주문조회</a>
					<?php } else { ?>
					<a href="<?php echo G5_BBS_URL ?>/login.php" class="tnb_cart "><span></span>로그인</a>
					<a href="<?php echo G5_BBS_URL ?>/register.php" class="tnb_cart "><span></span>회원가입</a>
					<a href="<?php echo G5_SHOP_URL ?>/orderinquiry.php" class="tnb_cart "><span></span>주문조회</a>
					<?php }?>
				</div>
				<ul class="hour_call">
					<li class="hour_mem">
						<?php if ($is_member) { ?>
						<!--<a href="<?php echo G5_BBS_URL ?>/logout.php" class="icon_menu_wrap" style="display:block;font-size:29px;">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<span>로그아웃</span>
						</a>-->
						<a href="<?php echo G5_SHOP_URL; ?>/mypage.php" class="icon_menu_wrap">
							<!-- <img src="<?=G5_THEME_IMG_URL?>/icon_mypage.png" class=""> -->
							<i data-lucide="user-round" class="svgicon"></i>
							<span>마이페이지</span>
						</a>
						<a href="<?php echo G5_SHOP_URL; ?>/cart.php" class="icon_menu_wrap">
							<!-- <img src="<?=G5_THEME_IMG_URL?>/icon_cart.png" class=""> -->
							<i data-lucide="shopping-bag" class="svgicon"></i>
							<span>장바구니</span>
							<span class="num"><?php echo get_cart_count($tmp_cart_id); ?></span>
						</a>
						<a href="<?php echo G5_MSHOP_URL; ?>/wishlist.php" class="icon_menu_wrap">
							<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/icon_zzim.png" class=""> -->
							<i data-lucide="heart" class="svgicon"></i>
							<span>찜</span>
						</a>
						<?php }else{?>
						<!--<a href="<?php echo G5_BBS_URL ?>/login.php" class="icon_menu_wrap">
							<i class="fa fa-lock" aria-hidden="true" style="display:block;font-size:29px;"></i>
							<span>로그인</span>
						</a>-->
						<a href="<?php echo G5_SHOP_URL; ?>/mypage.php" class="icon_menu_wrap">
							<!-- <img src="<?=G5_THEME_IMG_URL?>/icon_mypage.png" class=""> -->
							<i data-lucide="user-round" class="svgicon"></i>
							<span>마이페이지</span>
						</a>
						<a href="<?php echo G5_SHOP_URL; ?>/cart.php" class="icon_menu_wrap">
							<!-- <img src="<?=G5_THEME_IMG_URL?>/icon_cart.png" class=""> -->
							<i data-lucide="shopping-bag" class="svgicon"></i>
							<span>장바구니</span>
							<span class="num"><?php echo get_cart_count($tmp_cart_id); ?></span>
						</a>
						<?php }?>
					</li>
				</ul>				
			</div>
        </div>
    </div>
	<style>
		/* 전체 카테고리 버튼 */
		#mega_cat_btn{}
		#mega_cat_btn .ico_bar{display:flex;flex-direction:column;gap:4px;width:18px;margin-right:10px;}
		#mega_cat_btn .ico_bar span{display:block;height:2px;background:#000;border-radius:1px;}
		#mega_cat_btn:hover{color:#1a7f8d;}

		/* 드롭다운 컨테이너 */
		#mega_drop{display:none;position:absolute; top: calc(100% - 10px);left:0;z-index:9999;width:440px;background:#fff;border:1px solid #ddd; box-shadow: 0 8px 24px rgba(0, 0, 0, .13); border-radius: 16px; overflow: hidden;}		
		#mega_drop .cf {display: flex;}

		/* 1차 카테고리 리스트 */
		#mega_drop .cat1_list{width:220px;border-right:1px solid #ececec;height:464px;}
		#mega_drop .cat1_list li{list-style:none;}
		#mega_drop .cat1_list li > a { display: flex;  align-items: center;  justify-content: space-between; padding: 0 16px;  height: 50px;  color: #111;  text-decoration: none;  font-size: 16px; border-bottom: 1px solid #f5f5f5;  transition: background .12s, color .12s;}
		
		#mega_drop .cat1_list li > a:hover,#mega_drop .cat1_list li > a.on{background:rgba(223, 237, 255, 0.5);color: var(--brand-primary);font-weight:bold;}
		#mega_drop .cat1_list li > a .arr{font-size:11px;color:#ccc;}
		#mega_drop .cat1_list li > a.on .arr{color: var(--brand-primary);}

		/* 2차 서브 패널 */
		#mega_drop .sub_panel{display:none;width:220px;padding:0px 0px;height:464px; padding-right: 8px;}
		#mega_drop .sub_panel.on{display:block;}
		#mega_drop .sub_panel h4{font-size:16px;font-weight:bold;color:#2196a6;margin-bottom:12px;padding-bottom:9px;border-bottom:1px solid #e8e8e8;}
		#mega_drop .sub_panel ul{display:flex;flex-direction: column;list-style:none; height: 100%; overflow: auto;}
		#mega_drop .sub_panel ul::-webkit-scrollbar {display: block; width: 4px; height: 4px;}
		#mega_drop .sub_panel ul::-webkit-scrollbar-thumb {display: block; background: #073260; border-radius: 10px;}
		#mega_drop .sub_panel ul::-webkit-scrollbar-track {display: block; background: #ececec; border-radius: 10px; margin: 8px 0;}
		#mega_drop .sub_panel ul li{float:left;width:100%;}
		#mega_drop .sub_panel ul li a { display: flex;  align-items: center; height: 50px;  padding: 0 16px; text-align: left;  font-size: 16px; color: #111;  text-decoration: none; transition: all .12s;}
		#mega_drop .sub_panel ul li a .txt {flex: 1;}
		#mega_drop .sub_panel ul li a .arr {transition: all .12s; opacity: 0; font-size:11px; color: var(--brand-primary);}
		#mega_drop .sub_panel ul li a:hover {color: var(--brand-primary);}
		#mega_drop .sub_panel ul li a:hover .arr {opacity: 1; }
		#mega_drop .cf::after{content:'';display:table;clear:both;}
	</style>
</header>

<div class="hd_all_wr">
	<div class="hd_wr">
		<div class="top_menu mob_menu">
			<?php include_once(G5_THEME_MSHOP_PATH.'/category.php'); // 분류 ?>
		</div>
		<div id="navi_wrap" class="navi_wrap">
			<div class="pc">
				<ul class="cate topcate">
					<li id="mega_cat_btn"><a href="javascript:void(0)" >
						<span class="ico_bar">
						<span></span><span></span><span></span>
						</span>
						전체 카테고리</a>

					<!-- ▼ 메가 드롭다운 패널 -->
					<div id="mega_drop">
						<div class="cf">
							<!-- 1차 카테고리 -->
							<?php
								$cate1_data=array();
								$sql="select * from g5_shop_category where ca_use='1' and length(ca_id)=2 order by ca_order, ca_id";
								$tmp_result=sql_query($sql);
								while($tmp_row=sql_fetch_array($tmp_result)){
									$cate1_data[]=$tmp_row;
								}
							?>

							<ul class="cat1_list">
							<?php
							for($i=0;$i<count($cate1_data);$i++){
							?>
								<li>
									<a href="https://dnbnmall.com/shop/list.php?ca_id=<?=$cate1_data[$i]['ca_id']?>" data-sub="<?=$cate1_data[$i]['ca_id']?>">
										<span class="txt"><?=$cate1_data[$i]['ca_name']?> </span>
										<span class="arr"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
									</a>
								</li>
							<?php
							}
							?>
								<!--<li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">업체소개</a></li>
								<li><a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse1.php" data-sub="99">노인복지용구란 <span class="arr">▶</span></a></li>
								<li><a href="<?php echo G5_BBS_URL; ?>/faq.php">자주 묻는 질문</a></li>-->
							</ul>

							<!-- 2차 서브 패널 -->
							<?php
							for($i=0;$i<count($cate1_data);$i++){
								$sql="select * from g5_shop_category where ca_use='1' and length(ca_id)=4 and ca_id like '".$cate1_data[$i]['ca_id']."__'";
								$cate2_result=sql_query($sql);
							?>
							<div class="sub_panel" id="sub_<?=$cate1_data[$i]['ca_id']?>">
								<ul>
								<?php
								for($j=0;$cate2_data=sql_fetch_array($cate2_result);$j++){
								?>
									<li>
										<a href="https://dnbnmall.com/shop/list.php?ca_id=<?=$cate2_data['ca_id']?>">
											<span class="txt"><?=$cate2_data['ca_name']?></span>
											<span class="arr"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
										</a>
									</li>
								<?php
								}
								?>
								</ul>
							</div>
							<?php
							}
							?>
							<div class="sub_panel" id="sub_99">
								<ul>
									<li><a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse1.php">복지용구 급여안내</a></li>
									<li><a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse2.php">복지용구 사용 가능 개수</a></li>
								</ul>
							</div>
						</div><!-- .cf -->
					</div><!-- #mega_drop -->
					<!-- ═══════════════════════════════════════════════
						메가 드롭다운 jQuery 핵심 스크립트
					═══════════════════════════════════════════════ -->
					<script>
						$(function(){
							var $catBtn   = $('#mega_cat_btn');
							var $megaDrop = $('#mega_drop');
							var $cat1     = $('.cat1_list a');
							var $panels   = $('.sub_panel');
							var hideTimer;

							/* 첫 번째 1차 항목 활성화 */
							function activateFirst(){
								if($cat1.filter('.on').length===0){
									switchSub($cat1.first());
								}
							}

							/* 서브 패널 전환 */
							function switchSub($el){
								$cat1.removeClass('on');
								$panels.removeClass('on');
								$el.addClass('on');
								$('#sub_'+$el.data('sub')).addClass('on');
							}

							/* 전체 카테고리 버튼 hover */
							$catBtn.on('mouseenter',function(){
								clearTimeout(hideTimer);
								$megaDrop.stop(true,true).fadeIn(150);
								activateFirst();
							});

							/* 버튼 영역 벗어날 때 - drop으로 이동이면 유지 */
							$catBtn.on('mouseleave',function(e){
								var to=e.relatedTarget||e.toElement;
								if($megaDrop.is(to)||$megaDrop.find(to).length){return;}
								hideTimer=setTimeout(function(){$megaDrop.fadeOut(150);},120);
							});

							/* 드롭다운 안으로 들어오면 유지 */
							$megaDrop.on('mouseenter',function(){
								clearTimeout(hideTimer);
							});

							/* 드롭다운 완전히 벗어나면 닫기 */
							// $megaDrop.on('mouseleave',function(){
							// 	hideTimer=setTimeout(function(){$megaDrop.fadeOut(150);},120);
							// });
							$megaDrop.on('mouseleave', function(e){
								const to = e.relatedTarget || e.toElement;
								if(catBtn.is(to) || catBtn.find(to).length){
									return;
								}

								clearTimeout(hideTimer);
								hideTimer = setTimeout(function(){
									$megaDrop.fadeOut(150);
								}, 120);
							});

							/* 1차 카테고리 hover → 서브 전환 */
							$cat1.on('mouseenter',function(){
								switchSub($(this));
							});

							/* 1차 링크 클릭: 페이지 이동 허용 */
							$cat1.on('click',function(){
								/* href 기본 동작 */
							});
						});
					</script>

					</li>
					<li>
						<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=10">복지용구 대여품목</a>
						<?php
						$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '10' and ca_use = '1' order by ca_order, ca_id ";
						$result2 = sql_query($sql2);
						$count = sql_num_rows($result2);
						if($count>0){
						?>
						<ul class="sub_cate sub_cate1">
						<?php
							for ($j=0; $row2=sql_fetch_array($result2); $j++){
						?>
												<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
						<?php
							}
						?>
										</ul>
						<?php
						}
						?>
					</li>
					<li>
						<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=20">복지용구 구입품목</a>
						<?php
						$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '20' and ca_use = '1' order by ca_order, ca_id ";
						$result2 = sql_query($sql2);
						$count = sql_num_rows($result2);
						if($count>0){
						?>
						<ul class="sub_cate sub_cate2">
						<?php
							for ($j=0; $row2=sql_fetch_array($result2); $j++){
						?>
							<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
						<?php
							}
						?>
						</ul>
						<?php
						}
						?>
					</li>
					<li>
						<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=30">산소발생기</a>
						<?php
						$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '30' and ca_use = '1' order by ca_order, ca_id ";
						$result2 = sql_query($sql2);
						$count = sql_num_rows($result2);
						if($count>0){
						?>
						<ul class="sub_cate sub_cate3">
						<?php
							for ($j=0; $row2=sql_fetch_array($result2); $j++){
						?>
												<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
						<?php
							}
						?>
										</ul>
						<?php
						}
						?>
					</li>
					<li>
						<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=40">중고제품</a>
						<?php
						$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '40' and ca_use = '1' order by ca_order, ca_id ";
						$result2 = sql_query($sql2);
						$count = sql_num_rows($result2);
						if($count>0){
						?>
						<ul class="sub_cate sub_cate1">
						<?php
							for ($j=0; $row2=sql_fetch_array($result2); $j++){
						?>
												<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
						<?php
							}
						?>
										</ul>
						<?php
						}
						?>
					</li>
					<li>
						<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=50">비급여(요양용품)</a>
						<?php
						$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '50' and ca_use = '1' order by ca_order, ca_id ";
						$result2 = sql_query($sql2);
						$count = sql_num_rows($result2);
						if($count>0){
						?>
						<ul class="sub_cate sub_cate1">
						<?php
							for ($j=0; $row2=sql_fetch_array($result2); $j++){
						?>
												<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
						<?php
							}
						?>
										</ul>
						<?php
						}
						?>
					</li>
				</ul>
			</div>
			<?php if(false && defined('_INDEX_')) { ?>
			<style>
			#sct_ct_1 ul{text-align:left;display:flex;flex-wrap:wrap;}
			#sct_ct_1 ul li{width:200px;border:1px solid #ccc;padding:5px 0px;margin:5px;text-align:center;color:#000;}
			@media (max-width: 970px){
				#sct_ct_1 ul{text-align:center;}
				#sct_ct_1 ul li{width:auto;font-size: 14px;letter-spacing: 0px;/*margin:-1px 0px 0px -1px;*/margin:5px;padding:0px 20px !important;background:#f1f1f1;border-radius:10px;border:none;}
			}
			@media (max-width:  640px){
				/*#sct_ct_1 ul li{width:33.3%;font-size: 14px;letter-spacing: 0px;margin:-1px 0px 0px -1px;}*/
			}</style>
			<div id="cate_slide" class="mobile" style="overflow:hidden;">
				<ul class="cate topcate">
				<?php
				$cate_arr=array("1010"=>"전동침대","1020"=>"수동휠체어","1030"=>"실외경사로","2010"=>"이동변기","2020"=>"보행기&middot;워커","2030"=>"목욕의자","2040"=>"욕창예방매트리스","2050"=>"욕창예방방석","2060"=>"안전손잡이","2070"=>"미끄럼방지매트","2080"=>"자세변환용구","2090"=>"실내경사로","20a0"=>"지팡이","20b0"=>"간이변기","20c0"=>"요실금팬티","20d0"=>"미끄럼방지양말","30"=>"산소발생기","40"=>"중고제품","60"=>"재활CPM","50"=>"비급여(요양용품)");
				foreach($cate_arr as $ca_id=>$ca_name){
				?>
					<li>
						<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$ca_id?>"><?=$ca_name?></a>
						<?php
						$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '{$ca_id}' and ca_use = '1' order by ca_order, ca_id ";
						$result2 = sql_query($sql2);
						$count = sql_num_rows($result2);
						if($count>0){
						?>
						<ul class="sub_cate sub_cate1">
						<?php
							for ($j=0; $row2=sql_fetch_array($result2); $j++){
						?>
												<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
						<?php
							}
						?>
										</ul>
						<?php
						}
						?>
					</li>
				<?php
				}
				?>
				</ul>
			</div>
			<div class="navi_wrap_btn"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
			<?php } ?>
			<?php if(!defined('_INDEX_') && ($mNum=="2" || $mNum=="2")) {?>
				<div class="neromap mob">
					<? include_once(G5_THEME_MSHOP_PATH.'/neromap.php'); ?>
				</div>
			<?php }?>
		</div>
		<div id="navi_wrap2" class="navi_wrap2">
			<ul class="cate">
				<li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">업체소개</a>
					<ul class="sub_cate sub_cate1">
						<li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">소개</a></li>
						<!-- <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=info">원메디의 차별화</a></li>--->
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=10">복지용구 대여품목</a>
					<?php
					$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '10' and ca_use = '1' order by ca_order, ca_id ";
					$result2 = sql_query($sql2);
					$count = sql_num_rows($result2);
					if($count>0){
					?>
					<ul class="sub_cate sub_cate1">
					<?php
						for ($j=0; $row2=sql_fetch_array($result2); $j++){
					?>
											<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
					<?php
						}
					?>
									</ul>
					<?php
					}
					?>
				</li>
				<li>
					<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=20">복지용구 구입품목</a>
					<?php
					$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '20' and ca_use = '1' order by ca_order, ca_id ";
					$result2 = sql_query($sql2);
					$count = sql_num_rows($result2);
					if($count>0){
					?>
					<ul class="sub_cate sub_cate2">
					<?php
						for ($j=0; $row2=sql_fetch_array($result2); $j++){
					?>
											<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
					<?php
						}
					?>
									</ul>
					<?php
					}
					?>
				</li>
				<li>
					<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=30">산소발생기</a>
					<?php
					$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '30' and ca_use = '1' order by ca_order, ca_id ";
					$result2 = sql_query($sql2);
					$count = sql_num_rows($result2);
					if($count>0){
					?>
					<ul class="sub_cate sub_cate3">
					<?php
						for ($j=0; $row2=sql_fetch_array($result2); $j++){
					?>
											<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
					<?php
						}
					?>
									</ul>
					<?php
					}
					?>
				</li>
				<li>
					<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=50">비급여(요양용품)</a>
					<?php
					$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '50' and ca_use = '1' order by ca_order, ca_id ";
					$result2 = sql_query($sql2);
					$count = sql_num_rows($result2);
					if($count>0){
					?>
					<ul class="sub_cate sub_cate1">
					<?php
						for ($j=0; $row2=sql_fetch_array($result2); $j++){
					?>
											<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
					<?php
						}
					?>
									</ul>
					<?php
					}
					?>
				</li>
				<li>
					<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=40">중고제품</a>
					<?php
					$sql2 = " select ca_id, ca_name from {$g5['g5_shop_category_table']} where LENGTH(ca_id) = '4' and SUBSTRING(ca_id,1,2) = '40' and ca_use = '1' order by ca_order, ca_id ";
					$result2 = sql_query($sql2);
					$count = sql_num_rows($result2);
					if($count>0){
					?>
					<ul class="sub_cate sub_cate1">
					<?php
						for ($j=0; $row2=sql_fetch_array($result2); $j++){
					?>
											<li><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$row2['ca_id']?>"><?=$row2['ca_name']?></a></li>
					<?php
						}
					?>
									</ul>
					<?php
					}
					?>
				</li>
				<li><a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse1.php">노인복지용구란</a>
					<ul class="sub_cate sub_cate1">
						<li><a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse1.php">복지용구 급여안내</a></li>
						<li><a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse2.php">복지용구 사용 가능 개수</a></li>
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=60">재활CPM</a>
				</li>
				<li><a href="<?php echo G5_BBS_URL; ?>/faq.php">자주 묻는 질문</a></li>
			</ul>
		</div>
		<div class="mob_menu">
			<!--<button type="button" id="hd_ct"><i class="ri-menu-line"></i></button>-->
			<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/tel.png" class="tel"> -->
		</div>
	</div>
</div>
<?// php include_once(G5_MSHOP_SKIN_PATH.'/boxcategory.skin.php'); // 상품분류 ?>

<script>
$( document ).ready( function() {
        var jbOffset = $( '.hd_all_wr' ).offset();
        $( window ).scroll( function() {
			if ( $( document ).scrollTop() > jbOffset.top ) {
					$( '.hd_all_wr' ).addClass( 'fixed' );
					$( '#hd' ).addClass( 'fixed' );
					$( '#container' ).addClass( 'fixed' );
			}else{
					$( '.hd_all_wr' ).removeClass( 'fixed' );
					$( '#hd' ).removeClass( 'fixed' );
					$( '#container' ).removeClass( 'fixed' );
			}
        });

	$("#navi_wrap ul.topcate > li").on("mouseenter", function(){
		$(this).addClass("navi_li_over");
	});
	$("#navi_wrap ul.topcate > li").on("mouseleave", function(){
		$(this).removeClass("navi_li_over");
	});
});
</script>


<!-- 검색 레이어 -->
<div class="search_layer" id="searchLayer">
	<div class="search_layer_top">
		<button type="button" class="btn_search_close" id="btnSearchClose">
			<svg viewBox="0 0 24 24" fill="none" stroke="#222" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg>
		</button>
		<div class="search_input_wrap">
			<div class="search_input_box">
				<svg viewBox="0 0 24 24" fill="none" stroke="#999" stroke-width="2"><circle cx="11" cy="11" r="7"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
				<input type="text" id="searchLayerInput" placeholder="제품명을 검색하세요">
			</div>
			<button type="button" class="btn_search_submit" id="btnSearchSubmit">검색</button>
		</div>
	</div>

	<div class="search_layer_body">
		<div class="search_section">
			<h3 class="sec_tit">
				<svg viewBox="0 0 24 24" fill="#f5842a"><path d="M12 2c1 3-2 4-2 7a4 4 0 0 0 8 0c0-1-.3-2-1-3 2 1 4 3.5 4 7a7 7 0 0 1-14 0c0-4 2-6 3-7 1-1 1.5-2.5 2-4z"></path></svg>
				인기 검색어
			</h3>
			<div class="keyword_list" id="popularKeywords">
				<button type="button">전동침대</button>
				<button type="button">욕창</button>
				<button type="button">안전손잡이</button>
			</div>
		</div>

		<div class="search_section">
			<div class="recent_top_row">
				<h3 class="sec_tit">
					<svg viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2"><circle cx="12" cy="12" r="9"></circle><polyline points="12 7 12 12 16 14"></polyline></svg>
					최근 검색어
				</h3>
				<button type="button" class="btn_clear_all" id="btnClearAll" style="display:none;">전체삭제</button>
			</div>
			<div class="recent_list" id="recentList"></div>
			<div class="recent_empty" id="recentEmpty">
				<svg viewBox="0 0 24 24" fill="none" stroke="#1b2a4e" stroke-width="1.5"><path d="M14 3H6a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h9"></path><line x1="7" y1="8" x2="12" y2="8"></line><line x1="7" y1="12" x2="12" y2="12"></line><circle cx="16" cy="17" r="3"></circle><line x1="18.2" y1="19.2" x2="20.5" y2="21.5"></line></svg>
				<p class="tit">최근 검색어가 없습니다.</p>
				<p class="desc">필요한 복지용구를 검색해 보세요.</p>
			</div>
		</div>
	</div>
</div>
<style>
.pop_search_btn { border: none; background: none; padding: 0; cursor: pointer; }
.pop_search_btn svg { width: 22px; height: 22px; color: var(--brand-primary);}
.search_layer { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: #fff; z-index: 9999; display: none; flex-direction: column; overflow-y: auto; }
.search_layer.on { display: flex; }
.search_layer_top { display: flex; align-items: center; gap: 10px; padding: 14px 16px; }
.btn_search_close { border: none; background: none; padding: 4px; cursor: pointer; flex-shrink: 0; }
.btn_search_close svg { width: 22px; height: 22px; }
.search_input_wrap { display: flex; align-items: center; flex: 1; gap: 8px; }
.search_input_box { display: flex; align-items: center; flex: 1; height: 46px; border: 1px solid #ddd; border-radius: 8px; padding: 0 14px; gap: 8px; }
.search_input_box svg { width: 20px; height: 20px; flex-shrink: 0; stroke: var(--brand-primary); }
.search_input_box input { border: none; outline: none; flex: 1; font-size: 15px; height:35px;}
.search_input_box input::placeholder { color: #aaa; }
.search_input_box input:focus{border:none !important;}
.btn_search_submit { height: 46px; padding: 0 18px; border: none; border-radius: 8px; background: #1b2a4e; color: #fff; font-size: 15px; font-weight: 600; cursor: pointer; flex-shrink: 0; }
.search_layer_body { padding: 8px 16px 40px; }
.search_section { padding: 22px 0; }
.search_section + .search_section { border-top: 8px solid #f5f6f8; }
.search_section .sec_tit { display: flex; align-items: center; gap: 6px; font-size: 15px; font-weight: 700; color: #222; margin-bottom: 16px; }
.search_section .sec_tit svg { width: 18px; height: 18px; }
.keyword_list { display: flex; flex-wrap: wrap; gap: 10px; }
.keyword_list button { border: 1px solid #e5e5e5; background: #f8f9fa; border-radius: 20px; padding: 8px 12px; font-size: 13px; color: #333; cursor: pointer; }
.keyword_list button:active { background: #eef1f5; }
.recent_list { display: flex; flex-direction: column; }
.recent_list .recent_item { display: flex; align-items: center; justify-content: space-between; padding: 10px 0; font-size: 14px; color: #333; }
.recent_list .recent_item .kw { cursor: pointer; }
.recent_list .recent_item .btn_del { border: none; background: none; cursor: pointer; padding: 4px; color: #aaa; font-size: 16px; }
.recent_top_row { display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; }
.recent_top_row .sec_tit { margin-bottom: 0; }
.recent_top_row .btn_clear_all { border: none; background: none; color: #999; font-size: 12.5px; cursor: pointer; }
.recent_empty { display: flex; flex-direction: column; align-items: center; padding: 30px 0 10px; }
.recent_empty svg { width: 56px; height: 56px; margin-bottom: 16px; }
.recent_empty .tit { font-size: 15px; font-weight: 700; color: #333; margin-bottom: 6px; }
.recent_empty .desc { font-size: 13px; color: #999; }
.search_section + .search_section { border-top: 2px solid #f5f6f8;}
</style>
<script>
$(function () {
	var STORAGE_KEY = 'wnr_recent_search';

	// 검색 레이어 열기
	$('#btnOpenSearch').on('click', function () {
		$('#searchLayer').addClass('on');
		$('#searchLayerInput').focus();
		renderRecentList();
	});

	// 검색 레이어 닫기
	$('#btnSearchClose').on('click', function () {
		$('#searchLayer').removeClass('on');
	});

	// 인기 검색어 클릭 -> 바로 검색
	$('#popularKeywords').on('click', 'button', function () {
		var kw = $(this).text();
		doSearch(kw);
	});

	// 검색 버튼 / 엔터
	$('#btnSearchSubmit').on('click', function () {
		doSearch($.trim($('#searchLayerInput').val()));
	});
	$('#searchLayerInput').on('keydown', function (e) {
		if (e.key === 'Enter') doSearch($.trim($(this).val()));
	});

	// 최근 검색어 클릭 -> 재검색
	$('#recentList').on('click', '.kw', function () {
		doSearch($(this).text());
	});

	// 최근 검색어 개별 삭제
	$('#recentList').on('click', '.btn_del', function () {
		var kw = $(this).siblings('.kw').text();
		var list = getRecentList().filter(function (item) { return item !== kw; });
		saveRecentList(list);
		renderRecentList();
	});

	// 전체 삭제
	$('#btnClearAll').on('click', function () {
		saveRecentList([]);
		renderRecentList();
	});

	function getRecentList() {
		try {
			return JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
		} catch (e) {
			return [];
		}
	}

	function saveRecentList(list) {
		localStorage.setItem(STORAGE_KEY, JSON.stringify(list));
	}

	function addRecentKeyword(kw) {
		var list = getRecentList().filter(function (item) { return item !== kw; });
		list.unshift(kw);
		if (list.length > 10) list = list.slice(0, 10);
		saveRecentList(list);
	}

	function renderRecentList() {
		var list = getRecentList();
		var $recentList = $('#recentList');
		$recentList.empty();

		if (list.length === 0) {
			$('#recentEmpty').show();
			$('#btnClearAll').hide();
			return;
		}

		$('#recentEmpty').hide();
		$('#btnClearAll').show();

		$.each(list, function (i, kw) {
			var $item = $('<div class="recent_item"></div>');
			$item.append('<span class="kw">' + kw + '</span>');
			$item.append('<button type="button" class="btn_del">&times;</button>');
			$recentList.append($item);
		});
	}

	function doSearch(keyword) {
		if (!keyword) {
			alert('검색어를 입력해 주세요.');
			return;
		}
		addRecentKeyword(keyword);
		location.href = '<?php echo G5_SHOP_URL; ?>/search.php?q=' + encodeURIComponent(keyword);
	}

	renderRecentList();
});
</script>



<?php
if(basename($_SERVER['SCRIPT_NAME']) == 'faq.php')
    $g5['title'] = '자주 묻는 질문';
?>
<?php
if(basename($_SERVER['SCRIPT_NAME']) == 'olduse1.php')
    $g5['title'] = '복지용구 급여안내';
?>
<?php
if(basename($_SERVER['SCRIPT_NAME']) == 'olduse2.php')
    $g5['title'] = '복지용구 사용 가능 개수';
?>
<div id="container" class="container">
<?php if(!defined('_INDEX_')) {?>
	<div id="sct_location">
		<a href='<?php echo G5_SHOP_URL; ?>/' class="">HOME</a>
	<?php if(basename($PHP_SELF)=="item.php"){?>
		<i class="fa fa-angle-right" aria-hidden="true" style="font-sieze:1.0em"></i> <?=$g5['title']?>
	<?php }elseif(basename($PHP_SELF)=="list.php"){?>
<?php
$navi_datas = $ca_ids = array();
$is_item_view = (isset($it_id) && isset($it) && isset($it['it_id']) && $it_id === $it['it_id']) ? true : false;

if( !$is_item_view && $ca_id ){
    $navi_datas = get_shop_navigation_data(true, $ca_id);
    $ca_ids = array(
        'ca_id' => substr($ca_id,0,2),
        'ca_id2' => substr($ca_id,0,4),
        'ca_id3' => substr($ca_id,0,6),
        );
} else if( $is_item_view && isset($it) && is_array($it) ) {
    $navi_datas = get_shop_navigation_data(true, $it['ca_id']);
    $ca_ids = array(
        'ca_id' => substr($it['ca_id'],0,2),
        'ca_id2' => substr($it['ca_id'],0,4),
        'ca_id3' => substr($it['ca_id'],0,6)
        );
}
//echo print_r($ca_ids);
if ( is_array($navi_datas) && $navi_datas ){
	if( isset($navi_datas[0]) && $navi_datas[0] ){
		$sql="select ca_id, ca_name from {$g5['g5_shop_category_table']} where ca_id='{$ca_ids['ca_id']}' ";
		$tmp_row=sql_fetch($sql);
		$navi_arr[]='<a href="'.shop_category_url($tmp_row['ca_id']).'">'.$tmp_row['ca_name'].'</a>';
	}
	if( isset($navi_datas[1]) && $navi_datas[1] ){
		$sql="select ca_id, ca_name from {$g5['g5_shop_category_table']} where ca_id='{$ca_ids['ca_id2']}' ";
		$tmp_row=sql_fetch($sql);
		$navi_arr[]='<a href="'.shop_category_url($tmp_row['ca_id']).'">'.$tmp_row['ca_name'].'</a>';
	}
	if( isset($navi_datas[2]) && $navi_datas[2] ){
		$sql="select ca_id, ca_name from {$g5['g5_shop_category_table']} where ca_id='{$ca_ids['ca_id3']}' ";
		$tmp_row=sql_fetch($sql);
		$navi_arr[]='<a href="'.shop_category_url($tmp_row['ca_id']).'">'.$tmp_row['ca_name'].'</a>';
	}
}
?>


		<i class="fa fa-angle-right" aria-hidden="true"></i> <?=implode(' <i class="fa fa-angle-right" aria-hidden="true"></i> ', $navi_arr)?>
	<?php }elseif(in_array(basename($PHP_SELF), array("orderlist.php","orderview.php","orderinquiry.php","orderinquiryview.php","wishlist.php","myorderaddress.php","register_form.php"))) {?>
		<i class="fa fa-angle-right" aria-hidden="true" style="font-sieze:1.0em"></i> <a href="/shop/mypage.php">마이페이지</a> <i class="fa fa-angle-right" aria-hidden="true" style="font-sieze:1.0em"></i> <a href="#"><?=$g5['title']?></a>
	<?php }else{?>
		<i class="fa fa-angle-right" aria-hidden="true" style="font-sieze:1.0em"></i> <a href="#"><?=$g5['title']?></a>
	<?php }?>
	</div>
<?php }?>
<?php
if(basename($PHP_SELF)=="item.php"){
}else{
?>
<?php
	if(false && basename($PHP_SELF)=="list.php"){
?>
<style>
.pc_maincate{display:flex;flex-wrap:wrap;gap:10px;}
.pc_maincate li{margin-bottom:5px;}
.pc_maincate li a{display:block;background:#f1f1f1;padding: 5px 20px;border-radius: 20px;width:170px;text-align:center;}
</style>
	<div>
		<ul class="pc_maincate">
		<?php
		$cate_arr=array("1010"=>"전동침대","1020"=>"수동휠체어","1030"=>"실외경사로","2010"=>"이동변기","2020"=>"보행기&middot;워커","2030"=>"목욕의자","2040"=>"욕창예방매트리스","2050"=>"욕창예방방석","2060"=>"안전손잡이","2070"=>"미끄럼방지매트","2080"=>"자세변환용구","2090"=>"실내경사로","20a0"=>"지팡이","20b0"=>"간이변기","20c0"=>"요실금팬티","20d0"=>"미끄럼방지양말","20e0"=>"구강세척기","30"=>"산소발생기","40"=>"중고제품","60"=>"재활CPM","50"=>"비급여(요양용품)");
		foreach($cate_arr as $ca_id=>$ca_name){
		?>
			<li>
				<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$ca_id?>"><?=$ca_name?></a>
			</li>
		<?php
		}
		?>
		</ul>
	</div>
<?php
	}
?>
<?php
	if($ca_id=="10"){
		$g5[m] = "복지용구 대여품목";
		$g5[s] = "전동침대";
	}
 ?>
   <h1 id="container_title"><span><?php echo $g5['title'] ?></span></h1>
<?php }?>
