<?php
include_once('./_common.php');

define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');

?>

<script src="<?php echo G5_JS_URL; ?>/swipe.js"></script>
<script src="<?php echo G5_JS_URL; ?>/shop.mobile.main.js"></script>

<?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>
<?php
if (!$_COOKIE['ck_top_banner_close']){
    //echo display_banner( '왼쪽');
}
?>


<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/swiper.css">
<style>
.swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }
.swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
</style>
<div class="swiper-main-wrap">
	<div class="swiper-main">
		<div class="swiper-wrapper">
			<div class="swiper-slide" data-color="white">
				<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/visual01.png?ver=26071903" class="pc_view">
				<img src="<?php echo G5_THEME_IMG_URL; ?>/mvisual01.png?ver=26071903" class="mobile_view"> -->
				<img src="<?php echo G5_THEME_URL; ?>/newimg/main_slide1.jpg" class="pc_view">
				<img src="<?php echo G5_THEME_URL; ?>/newimg/main_slide1_m.jpg" class="mobile_view">
			</div>
            <div class="swiper-slide" data-color="black">
				<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/visual02.png?ver=26071903" class="pc_view">
				<img src="<?php echo G5_THEME_IMG_URL; ?>/mvisual02.png?ver=26071903" class="mobile_view"> -->
				<img src="<?php echo G5_THEME_URL; ?>/newimg/main_slide2.jpg" class="pc_view">
				<img src="<?php echo G5_THEME_URL; ?>/newimg/main_slide2_m.jpg" class="mobile_view">
			</div>
			<div class="swiper-slide" data-color="black">
				<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/visual03.png?ver=26071903" class="pc_view">
				<img src="<?php echo G5_THEME_IMG_URL; ?>/mvisual03.png?ver=26071903" class="mobile_view"> -->
				<img src="<?php echo G5_THEME_URL; ?>/newimg/main_slide3.jpg" class="pc_view">
				<img src="<?php echo G5_THEME_URL; ?>/newimg/main_slide3_m.jpg" class="mobile_view">
			</div>
			<div class="swiper-slide" data-color="black">
				<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/visual04.png?ver=26071903" class="pc_view">
				<img src="<?php echo G5_THEME_IMG_URL; ?>/mvisual04.png?ver=26071903" class="mobile_view"> -->
				<img src="<?php echo G5_THEME_URL; ?>/newimg/main_slide4.jpg" class="pc_view">
				<img src="<?php echo G5_THEME_URL; ?>/newimg/main_slide4_m.jpg" class="mobile_view">
			</div>
		</div>
	</div>
    <div class="swiper-pagination main_paging"></div>
    <div class="v1-next">></div>
    <div class="v1-prev"><</div>

    <!--<div class="ma_banner">-->
    <!--  <div class="width">-->
    <!--    <a class="">전국 주문 가능</a>-->
    <!--    <a class="">고급 수입 전동침대</a>-->
    <!--    <a class="">산소발생기 당일설치</a>-->
    <!--    <a class="">365일 24시간 연중무휴</a>-->
    <!--  </div>-->
    <!--  <div class="swiper-pagination"></div>-->
    <!--</div>-->

    <script src="<?php echo G5_THEME_JS_URL; ?>/swiper.min.js"></script>
  	  <script>
		$(function(){
				var swiper2 = new Swiper('.swiper-main', {
					autoHeight: true,
					slidesPerView: 1,
					loop: true,
						speed:500,
						//effect: 'fade',
						autoplay: {
							delay:3000,
							disableOnInteraction: false,
						},
					pagination: {
						el: '.main_paging',
						clickable: true,
					},
					navigation: {
						nextEl: ".v1-next",
						prevEl: ".v1-prev",
					},
				thumbs: {
					swiper: swiper,
				},
				on: {
						init: function () {
							const currentColor = $(this.slides[this.activeIndex]).attr('data-color');
							$('.main_paging').removeClass('white black').addClass(currentColor);
						},
						slideChange: function () {
							const currentColor = $(this.slides[this.activeIndex]).attr('data-color');
							$('.main_paging').removeClass('white black').addClass(currentColor);
						}
					}
			});
			var swiper = new Swiper(".swiper-banner", {
				slidesPerView: 4,
			watchSlidesProgress: true,
		});

		});
  	  </script>
</div>


<section>
	<style>
	.maincate_wrap{width:100%;max-width:1300px;margin:0 auto;}
	.maincate{display:flex;flex-wrap:wrap;height:96px;overflow:hidden;}
	.maincate_wrap.active .maincate{height:auto;}
	.maincate li{width:170px;/*border:1px solid #f6f6f6;*/text-align:center;padding:12px 0;}
	.maincate li a{font-size:15px;}
	.maincate li p{margin-bottom:10px;}
	.maincate_wrap_btn{position:relative;padding:5px;text-align:center;background:#fff;}
	.maincate_wrap.hmob .maincate_wrap_btn{position:relative;padding:10px;text-align:center;background:#fff;border:2px solid #ccc;border-radius:10px;margin:10px;}

	.maincate li img{height:30px;}
	.hpc .maincate{gap: 7px 1%;}
	.hpc .maincate li{border: none; border-radius: 30px; padding: 12px 0; background: #f9f9f9;}
	.hpc .maincate{padding: 12px 0px;}
	@media (max-width: 1270px) {
		.maincate_wrap{padding-top:50px;}
		.maincate li{width:20%;}
	}
	@media (max-width: 950px) {
		.maincate_wrap{padding-top:0px;}
		.maincate_wrap h2{text-align:center;color:#06194e;font-size:18px;padding:10px;}
		.maincate li{width:25%;}
		.maincate li a{font-size:14px;}
		.maincate_box{width:52px;height:52px;padding:10px;background:#fafafc;border:1px solid #f4f5f8;border-radius:50%;margin:0 auto;}
	}
	.hpc{display: block !important;}
	.hmob{display: none !important;}

	@media all and (max-width: 950px){
		.hpc{display: none !important;}
		.hmob{display: block !important;}
	}
	</style>

	<div class="maincate_wrap active hpc">
		<h2>복지용구 한눈에 보기</h2>
		<ul class="maincate">
		<?php
		// $cate_arr = array(
		// 	"1010" => array("name" => "전동침대",         "icon" => "icon_1010.png"),
		// 	"1020" => array("name" => "수동휠체어",       "icon" => "icon_1020.png"),
		// 	"1040" => array("name" => "실외경사로",       "icon" => "icon_1040.png"),
		// 	"2010" => array("name" => "이동변기",         "icon" => "icon_2010.png"),
		// 	"2020" => array("name" => "보행기&middot;워커", "icon" => "icon_2020.png"),
		// 	"2030" => array("name" => "목욕의자",         "icon" => "icon_2030.png"),
		// 	"2040" => array("name" => "욕창예방매트",     "icon" => "icon_2040.png"),
		// 	"2050" => array("name" => "욕창예방방석",     "icon" => "icon_2050.png"),
		// 	"2060" => array("name" => "안전손잡이",       "icon" => "icon_2060.png"),
		// 	"2070" => array("name" => "미끄럼방지매트",   "icon" => "icon_2070.png"),
		// 	"2080" => array("name" => "자세변환용구",     "icon" => "icon_2080.png"),
		// 	"2090" => array("name" => "실내경사로",       "icon" => "icon_2090.png"),
		// 	"20a0" => array("name" => "지팡이",           "icon" => "icon_20a0.png"),
		// 	"20b0" => array("name" => "간이변기",         "icon" => "icon_20b0.png"),
		// 	"20c0" => array("name" => "요실금팬티",       "icon" => "icon_20c0.png"),
		// 	"20d0" => array("name" => "미끄럼방지양말",   "icon" => "icon_20d0.png"),
		// 	"20e0" => array("name" => "구강세척기",       "icon" => "icon_20e0.png"),
		// 	"30"   => array("name" => "산소발생기",       "icon" => "icon_30.png"),
		// 	"40"   => array("name" => "중고제품",         "icon" => "icon_40.png"),
		// 	"50"   => array("name" => "비급여요양용품",   "icon" => "icon_50.png"),
		// );
		$cate_arr = array(
			"1010" => array("name" => "전동침대",         "icon" => "cate_icon1.png"),
			"1020" => array("name" => "수동휠체어",       "icon" => "cate_icon2.png"),
			"1040" => array("name" => "실외경사로",       "icon" => "cate_icon3.png"),
			"2010" => array("name" => "이동변기",         "icon" => "cate_icon4.png"),
			"2020" => array("name" => "보행기&middot;워커", "icon" => "cate_icon5.png"),
			"2030" => array("name" => "목욕의자",         "icon" => "cate_icon6.png"),
			"2040" => array("name" => "욕창예방매트",     "icon" => "cate_icon7.png"),
			"2050" => array("name" => "욕창예방방석",     "icon" => "cate_icon8.png"),
			"2060" => array("name" => "안전손잡이",       "icon" => "cate_icon9.png"),
			"2070" => array("name" => "미끄럼방지매트",   "icon" => "cate_icon10.png"),
			"2080" => array("name" => "자세변환용구",     "icon" => "cate_icon11.png"),
			"2090" => array("name" => "실내경사로",       "icon" => "cate_icon12.png"),
			"20a0" => array("name" => "지팡이",           "icon" => "cate_icon13.png"),
			"20b0" => array("name" => "간이변기",         "icon" => "cate_icon14.png"),
			"20c0" => array("name" => "요실금팬티",       "icon" => "cate_icon15.png"),
			"20d0" => array("name" => "미끄럼방지양말",   "icon" => "cate_icon16.png"),
			"20e0" => array("name" => "구강세척기",       "icon" => "cate_icon17.png"),
			"30"   => array("name" => "산소발생기",       "icon" => "cate_icon18.png"),
			"40"   => array("name" => "중고제품",         "icon" => "cate_icon19.png"),
			"50"   => array("name" => "비급여요양용품",   "icon" => "cate_icon20.png"),
		);
		foreach($cate_arr as $ca_id=>$ca_name){
		?>
			<li>
				<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$ca_id?>">
					<div class="imgbox">
						<!-- <img src="<?=G5_THEME_IMG_URL?>/<?=$ca_name['icon']?>?ver=26071901"> -->
						<img src="<?=G5_THEME_URL?>/newimg/<?=$ca_name['icon']?>?ver=26071901">
					</div>
					<p class="tit"><?=$ca_name['name']?></p>
				</a>
			</li>
		<?php
		}
		?>
		</ul>
		<div class="maincate_wrap_btnbox">
			<div class="maincate_wrap_btn">
				<i class="fa fa-chevron-up" aria-hidden="true"></i>
			</div>
		</div>
	</div>

	<div>
		<div class="maincate_wrap active hmob">
			<h2>복지용구 한눈에 보기</h2>
			<ul class="maincate">
				<?php
				// $cate_arr = array(
				// 	"1010" => array("name" => "전동침대",         "icon" => "icon_1010.png"),
				// 	"1020" => array("name" => "수동휠체어",       "icon" => "icon_1020.png"),
				// 	"1040" => array("name" => "실외경사로",       "icon" => "icon_1040.png"),
				// 	"2010" => array("name" => "이동변기",         "icon" => "icon_2010.png"),
				// 	"2020" => array("name" => "보행기&middot;워커", "icon" => "icon_2020.png"),
				// 	"2030" => array("name" => "목욕의자",         "icon" => "icon_2030.png"),
				// 	"2040" => array("name" => "욕창예방매트",     "icon" => "icon_2040.png"),
				// 	"2050" => array("name" => "욕창예방방석",     "icon" => "icon_2050.png"),
				// 	"2060" => array("name" => "안전손잡이",       "icon" => "icon_2060.png"),
				// 	"2070" => array("name" => "미끄럼방지매트",   "icon" => "icon_2070.png"),
				// 	"2080" => array("name" => "자세변환용구",     "icon" => "icon_2080.png"),
				// 	"2090" => array("name" => "실내경사로",       "icon" => "icon_2090.png"),
				// 	"20a0" => array("name" => "지팡이",           "icon" => "icon_20a0.png"),
				// 	"20b0" => array("name" => "간이변기",         "icon" => "icon_20b0.png"),
				// 	"20c0" => array("name" => "요실금팬티",       "icon" => "icon_20c0.png"),
				// 	"20d0" => array("name" => "미끄럼방지양말",   "icon" => "icon_20d0.png"),
				// 	"20e0" => array("name" => "구강세척기",       "icon" => "icon_20e0.png"),
				// 	"30"   => array("name" => "산소발생기",       "icon" => "icon_30.png"),
				// 	"40"   => array("name" => "중고제품",         "icon" => "icon_40.png"),
				// 	"50"   => array("name" => "비급여요양용품",   "icon" => "icon_50.png"),
				// );
				$cate_arr = array(
					"1010" => array("name" => "전동침대",         "icon" => "cate_icon1.png"),
					"1020" => array("name" => "수동휠체어",       "icon" => "cate_icon2.png"),
					"1040" => array("name" => "실외경사로",       "icon" => "cate_icon3.png"),
					"2010" => array("name" => "이동변기",         "icon" => "cate_icon4.png"),
					"2020" => array("name" => "보행기&middot;워커", "icon" => "cate_icon5.png"),
					"2030" => array("name" => "목욕의자",         "icon" => "cate_icon6.png"),
					"2040" => array("name" => "욕창예방매트",     "icon" => "cate_icon7.png"),
					"2050" => array("name" => "욕창예방방석",     "icon" => "cate_icon8.png"),
					"2060" => array("name" => "안전손잡이",       "icon" => "cate_icon9.png"),
					"2070" => array("name" => "미끄럼방지매트",   "icon" => "cate_icon10.png"),
					"2080" => array("name" => "자세변환용구",     "icon" => "cate_icon11.png"),
					"2090" => array("name" => "실내경사로",       "icon" => "cate_icon12.png"),
					"20a0" => array("name" => "지팡이",           "icon" => "cate_icon13.png"),
					"20b0" => array("name" => "간이변기",         "icon" => "cate_icon14.png"),
					"20c0" => array("name" => "요실금팬티",       "icon" => "cate_icon15.png"),
					"20d0" => array("name" => "미끄럼방지양말",   "icon" => "cate_icon16.png"),
					"20e0" => array("name" => "구강세척기",       "icon" => "cate_icon17.png"),
					"30"   => array("name" => "산소발생기",       "icon" => "cate_icon18.png"),
					"40"   => array("name" => "중고제품",         "icon" => "cate_icon19.png"),
					"50"   => array("name" => "비급여요양용품",   "icon" => "cate_icon20.png"),
				);
				foreach($cate_arr as $ca_id=>$ca_name){
					?>
					<li>
						<a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=<?=$ca_id?>">
							<div class="imgbox">
								<!-- <img src="<?=G5_THEME_URL?>/<?=$ca_name['icon']?>?ver=26071901"> -->
								<img src="<?=G5_THEME_URL?>/newimg/<?=$ca_name['icon']?>?ver=26071901">
							</div>
							<p class="tit"><?=$ca_name['name']?></p>
						</a>
					</li>
					<?php
				}
				?>
			</ul>
			<div class="maincate_wrap_btnbox">
				<div class="maincate_wrap_btn">
					<!-- 전체 카테고리 보기  -->
					<i class="fa fa-chevron-up" aria-hidden="true"></i>
				</div>
			</div>
		</div>

	</div>

</section>


<style>
	.main_search{max-width:900px;margin:0 auto;padding:12px 20px 64px;box-sizing:border-box;width:100%;}
	.main_search .search_box{display:flex;align-items:center;background:#fff;box-sizing:border-box;width:100%;}
	.main_search .search_box input[type="text"]{flex:1;min-width:0;border:none;outline:none;background:transparent;height:40px;}
	.main_search .search_box input[type="text"]::placeholder{color:#999;}
	.main_search .search_box .btn_search{border:none;color:#fff;border-radius:100px;cursor:pointer;white-space:nowrap;flex-shrink:0;}
	.main_search .search_box .btn_search:hover{background:#14305f;}
	.main_search .search_keyword{display:flex;align-items:center;gap:10px;margin-top:16px;flex-wrap:wrap;}
	.main_search .search_keyword .kw_title{font-size:14px;font-weight:700;color:#333; margin-right: 10px;}
	.main_search .search_keyword a{font-size:14px;color:#555;text-decoration:none;background: #f0f1f5;padding: 5px 10px;border-radius: 20px;}
	@media (max-width: 950px){
		.main_search .search_box input[type="text"]{height: 30px;}
	}
	@media (max-width:419px){
		.main_search{padding:24px 16px 50px;}
		.main_search .search_keyword{gap:8px; margin-top: 12px;}
		.main_search .search_keyword .kw_title{font-size:13px;}
		.main_search .search_keyword a{font-size:12px;padding:4px 8px;}
	}
</style>
<div class="main_search">
	<form name="fsearch" id="fsearch" method="get" action="<?php echo G5_SHOP_URL; ?>/search.php">
		<div class="search_box">
			<div class="ico_search">
				<i data-lucide="search" class="svgicon"></i>
			</div>
			<!-- <svg class="ico_search" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="11" cy="11" r="7" stroke="#999" stroke-width="2"/>
				<line x1="16.5" y1="16.5" x2="21" y2="21" stroke="#999" stroke-width="2" stroke-linecap="round"/>
			</svg> -->
			<input type="text" name="q" id="main_q" placeholder="제품명을 검색하세요" autocomplete="off">
			<button type="submit" class="btn_search">검색</button>
		</div>
		<div class="search_keyword">
			<span class="kw_title">인기검색어</span>
			<a href="#" data-kw="전동침대">#전동침대</a>
			<a href="#" data-kw="욕창">#욕창매트</a>
			<a href="#" data-kw="안전손잡이">#안전손잡이</a>
			<span class="pc">
			<a href="#" data-kw="이동변기">#이동변기</a>
			<a href="#" data-kw="보행기">#보행기</a>
			</span>
		</div>
	</form>
</div>
<script>
$(document).ready(function(){
    $('#fsearch').on('submit', function(){
        var kw = $.trim($('#main_q').val());
        if(kw === ''){
            alert('검색어를 입력해 주세요.');
            $('#main_q').focus();
            return false;
        }
    });

    $('.main_search .search_keyword a').on('click', function(e){
        e.preventDefault();
        $('#main_q').val($(this).data('kw'));
        $('#fsearch').trigger('submit');
    });
});
</script>


<div id="list_wrap">
	<div class="mid_bannerbox">
		<div class="mid_banner width">
			<a href="tel:01054051955" class="mid_box">
				<span class="mid_icon">
					<img src="<?php echo G5_THEME_URL; ?>/newimg/midb1.png" alt="">
					<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/midb1.png" alt=""></span> -->
				</span>
				<span>
					<h2>제품상담문의</h2>
					<h5><b>010-5405-1955</b></h5>
					<p>
						<b>365일 연중무휴</b>  <br class="tablet">
						친절히 상담해
						드리겠습니다.
					</p>
				</span>
			</a>
			<a href="https://blog.naver.com/euro_feel" target="_blank" class="mid_box">
				<span class="mid_icon">
					<img src="<?php echo G5_THEME_URL; ?>/newimg/midb2.png" alt="">
					<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/midb2.png" alt=""></span> -->
				</span>
				<span>
					<h2>원누리케어 블로그</h2>
					<p>
						복지용구 전국지점 운영 <br class="tablet">
						<b>원누리케어 블로그</b> 
						바로가기
					</p>
				</span>
			</a>
			<a href="<?php echo G5_BBS_URL ?>/faq.php" class="mid_box">
				<span class="mid_icon">
					<img src="<?php echo G5_THEME_URL; ?>/newimg/midb3.png" alt="">
					<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/midb3.png" alt=""></span> -->
				</span>
				<span>
					<h2>자주묻는 질문</h2>
					<p>
						이용하면서 궁금한  <br class="tablet">
						내용들을 모아두었습니다.
					</p>
				</span>
			</a>
			<a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse1.php" class="mid_box">
				<span class="mid_icon">
					<img src="<?php echo G5_THEME_URL; ?>/newimg/midb4.png" alt="">
					<!-- <img src="<?php echo G5_THEME_IMG_URL; ?>/midb4_2.png" alt="" style="width: 65px;"> -->
				</span>
				<span>
					<h2>노인복지용구란?</h2>
					<p>
						복지용구에 대한 <br class="tablet">
						자세한 설명을 확인하세요 
					</p>
				</span>
			</a>
		</div>
	</div>

    <?php include_once(G5_MSHOP_SKIN_PATH.'/main.event.skin.php'); // 이벤트 ?>

        <!---
		<div class="sct-size">
            <button type="button" class="btn-size" id="btn-big">이미지크게보기</button>
            <button type="button" class="btn-size active" id="btn-small">이미지작게보기</button>
        </div>
		---->

        <?php if($default['de_mobile_type1_list_use']) { ?>
        <div class="sct_wrap">
            <h2><a href="<?php echo G5_SHOP_URL; ?>/list.php?ca_id=1010"><strong>인기 대여제품</strong>을 소개합니다</a></h2>
            <?php
			$skin_file=G5_SHOP_SKIN_PATH.'/main.60.skin.php';
			$list = new item_list($skin_file, 2, 1, 413, 413);
			$list->set_list_skin($skin_file);
            $list->set_mobile(true);
			$list->set_category("1010", 1);
			$list->set_category("1010", 2);
			$list->set_category("1010", 3);
			$list->set_type(4);
            //$list->set_main(1);
            $list->set_view('it_id', false);
            $list->set_view('it_name', true);
            $list->set_view('it_cust_price', true);
            $list->set_view('it_price', true);
            $list->set_view('it_icon', false);
            $list->set_view('sns', true);
            echo $list->run();
            ?>
        </div>
        <?php } ?>

        <!--<div class="today_wrap">-->
        <!--  <div class="width">-->
        <!--    <h2> <b>현황</b></h2>-->
        <!--    <p>매년 성장하는 원누리케어는 꾸준히 사랑을 받으며 <br>고객님들께 신뢰를 쌓고 있습니다.</p>-->
        <!--    <div class="to_box_wrap">-->
        <!--      <div class="to_box">-->
        <!--        <img src="--><?php //echo G5_THEME_IMG_URL ?><!--/to1.png" alt="">-->
        <!--        <h3>복지용구 대여 현황</h3>-->
        <!--        <h4><b>540</b>건</h4>-->
        <!--      </div>-->
        <!--      <div class="to_box">-->
        <!--        <img src="--><?php //echo G5_THEME_IMG_URL ?><!--/to2.png" alt="">-->
        <!--        <h3>이용고객 현황 (누적)</h3>-->
        <!--        <h4><b>6705</b>명</h4>-->
        <!--      </div>-->
        <!--      <div class="to_box">-->
        <!--        <img src="--><?php //echo G5_THEME_IMG_URL ?><!--/to3.png" alt="">-->
        <!--        <h3>일 평균 방문자수</h3>-->
        <!--        <h4><b>200</b>명</h4>-->
        <!--      </div>-->
        <!--      <div class="to_box">-->
        <!--        <img src="--><?php //echo G5_THEME_IMG_URL ?><!--/to4.png" alt="">-->
        <!--        <h3>since</h3>-->
        <!--        <h4><b>2018</b>년</h4>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->



        <?php if($default['de_mobile_type1_list_use']) { ?>
        <div class="sct_wrap">
            <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=1"><strong>베스트 제품</strong>을 소개합니다</a></a></h2>
            <?php
            $list = new item_list();
            $list->set_mobile(true);
            $list->set_type(1);
            $list->set_view('it_id', false);
            $list->set_view('it_name', true);
            $list->set_view('it_cust_price', true);
            $list->set_view('it_price', true);
            $list->set_view('it_icon', false);
            $list->set_view('sns', true);
            echo $list->run();
            ?>
        </div>
        <?php } ?>

        <div class="adver_wrap">
          <div class="width">
            <div class="adv_text">
              <h2><b>특장점 소개</b></h2>
              <p>일반 의료기기 업체와 달리 <br>
              복지 용구사업에 초점을 두고 체계적으로 <br>
              운영하고 있습니다.
              </p>
              <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company" class="more_btn">
				<span class="txt">업체소개 바로가기</span>
				<i data-lucide="chevron-right" class="svgicon"></i>
				<!-- <img src="<?php echo G5_THEME_IMG_URL ?>/adbtn.png" alt=""> -->
			</a>
            </div>
            <div class="adv_box_wrap">
              <div class="mid_box">
                <span class="mid_icon"><img src="<?php echo G5_THEME_URL ?>/newimg/adv1.png" alt=""></span>
                <span>
                  <p>전국침대, 이동욕조, 안전손잡이</p>
                  <h2>전국 설치가능</h2>
                </span>
              </div>
              <div class="mid_box">
                <span class="mid_icon"><img src="<?php echo G5_THEME_URL ?>/newimg/adv2.png" alt=""></span>
                <span>
                  <h2>가구형 고급 수입 <br class="tablet"> 침대 보유</h2>
                  <p>4모터, 사이드업 기능</p>
                </span>
              </div>
              <div class="mid_box">
                <span class="mid_icon"><img src="<?php echo G5_THEME_URL ?>/newimg/adv3.png" alt=""></span>
                <span>
                  <h2>전국 무료설치 및<br>				  전제품 무료배송</h2>
                  <p>전국침대, 이동욕조, 안전손잡이</p>
                </span>
              </div>
              <div class="mid_box">
                <span class="mid_icon"><img src="<?php echo G5_THEME_URL ?>/newimg/adv4.png" alt=""></span>
                <span>
                  <h2>산소발생기 전국 당일설치</h2>
                  <p>산소방, 응급환자 <br class="tablet">빠른 설치</p>
                </span>
              </div>
              <div class="mid_box">
                <span class="mid_icon"><img src="<?php echo G5_THEME_URL ?>/newimg/adv5.png" alt=""></span>
                <span>
                  <h2>중고 의료용 침대</h2>
                  <p>3모터, 무상 A/S</p>
                  <h2>중고 휠체어 다량 보유</h2>
                </span>
              </div>
              <div class="mid_box">
                <span class="mid_icon"><img src="<?php echo G5_THEME_URL ?>/newimg/adv6.png" alt=""></span>
                <span>
                  <p>무릎, 어깨 재활 치료기</p>
                  <h2>CPM 전국 대여 가능</h2>
                </span>
              </div>
            </div>
          </div>
        </div>

		<?php if($default['de_mobile_type2_list_use']) { ?>
        <div class="sct_wrap">
            <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=2"><strong>신제품</strong>을 소개합니다</a></h2>
            <?php
            $list = new item_list();
            $list->set_mobile(true);
            $list->set_type(3);
            $list->set_view('it_id', false);
            $list->set_view('it_name', true);
            $list->set_view('it_cust_price', false);
            $list->set_view('it_price', true);
            $list->set_view('it_icon', false);
            $list->set_view('sns', true);
            echo $list->run();
            ?>
        </div>
        <?php } ?>

		 <?php if($default['de_mobile_type3_list_use']) { ?>
        <div class="sct_wrap">
            <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=3"></a></h2>
            <?php
            $list = new item_list();
            $list->set_mobile(true);
            $list->set_type(3);
            $list->set_view('it_id', false);
            $list->set_view('it_name', true);
            $list->set_view('it_cust_price', true);
            $list->set_view('it_price', true);
            $list->set_view('it_icon', false);
            $list->set_view('sns', true);
            echo $list->run();
            ?>
        </div>
        <?php } ?>


        <?php if($default['de_mobile_type5_list_use']) { ?>
        <div class="sct_wrap">
            <h2><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5">SALE ITEM</a></h2>
            <?php
            $list = new item_list();
            $list->set_mobile(true);
            $list->set_type(5);
            $list->set_view('it_id', false);
            $list->set_view('it_name', true);
            $list->set_view('it_cust_price', true);
            $list->set_view('it_price', true);
            $list->set_view('it_icon', false);
            $list->set_view('sns', true);
            echo $list->run();
            ?>
        </div>
        <?php } ?>


<!--        --><?php
//        // 상품리뷰
//        $sql = " select a.is_id, a.is_subject, a.is_content, a.it_id, b.it_name
//                    from `{$g5['g5_shop_item_use_table']}` a join `{$g5['g5_shop_item_table']}` b on (a.it_id=b.it_id)
//                    where a.is_confirm = '1'
//                    order by a.is_id desc
//                    limit 0,10 ";
//        $result = sql_query($sql);
//
//        for($i=0; $row=sql_fetch_array($result); $i++) {
//            if($i == 0) {
//                echo '<div id="idx_review" class="sct_wrap">'.PHP_EOL;
//                echo '<h2><a href="'.G5_SHOP_URL.'/itemuselist.php">REVIEW</a></h2>'.PHP_EOL;
//                echo '<div class="review owl-carousel">'.PHP_EOL;
//            }
//
//            $review_href = G5_SHOP_URL.'/item.php?it_id='.$row['it_id'];
//        ?>
<!--            <div class="rv_li rv_--><?php //echo $i;?><!--">-->
<!--                <div class="li_wr">-->
<!--                    <a href="--><?php //echo $review_href; ?><!--" class="rv_img">--><?php //echo get_itemuselist_thumbnail($row['it_id'], $row['is_content'], 300, 350); ?><!--</a>-->
<!--                    <div class="txt_wr">-->
<!--                        <span class="rv_tit">--><?php //echo get_text(cut_str($row['is_subject'], 20)); ?><!--</span>-->
<!--                        <a href="--><?php //echo $review_href; ?><!--" class="rv_prd">--><?php //echo $row['it_name']; ?><!--</a>-->
<!--                        <p>--><?php //echo get_text(cut_str(strip_tags($row['is_content']), 90), 1); ?><!--</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        --><?php
//        }
//
//        if($i > 0) {
//            echo '</div>'.PHP_EOL;
//            echo '</div>'.PHP_EOL;
//        }
//        ?>
<!---->

<!--        <script>-->
<!--        $(function(){-->
<!--        $('#idx_review .review').owlCarousel({-->
<!--            loop:true,-->
<!--            margin:15,-->
<!--            nav:true,-->
<!--            autoplay:true,-->
<!--            responsive:{-->
<!--                0:{-->
<!--                    items:1-->
<!--                },-->
<!--                430:{-->
<!--                    items:2-->
<!--                },-->
<!--                600:{-->
<!--                    items:3-->
<!--                },-->
<!--                1000:{-->
<!--                    items:5-->
<!--                }-->
<!--            }-->
<!--        })-->
<!--        });-->
<!--        </script>-->


</div>

<!--<div class="review_wrap sct_wrap">-->
<!--    <div class="width">-->
<!--        <div class="title">-->
<!--            <h2><a href="--><?php //echo G5_BBS_URL ?><!--/board.php?bo_table=review">베스트 리뷰</a></h2>-->
<!--            <p>주문하신 고객님들의 후기입니다.</p>-->
<!--        </div>-->
<!--        <div class="latest">-->
<!--            --><?php
//            echo latest('theme/pic_review', 'review', 4, 30);
//            ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<script>

    $(".sct-size  button").click(function () {
        $(".sct-size  button").removeClass("active");
        $(this).addClass("active");
    });
    $("#btn-small").click(function () {
        $(".sct_wrap").removeClass("big").addClass("small");
    });
    $("#btn-big").click(function () {
        $(".sct_wrap").removeClass("small").addClass("big");
    });

$("#container").removeClass("container").addClass("idx-container");
</script>

<?php
include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');
?>
