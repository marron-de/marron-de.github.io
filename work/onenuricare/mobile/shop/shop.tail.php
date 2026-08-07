<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>

</div><!-- container End -->

<!-- <div class="footer_wrap">
	<p style="padding-bottom:10px;">
        <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">이용약관</a>
		<span style="display:inline-block;padding:0px 5px;">|</span>
        <a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리보호방침</a>
	</p>
	<span> <?php echo $default['de_admin_company_name']; ?></span>
	<span style="display:inline-block;padding:0px 5px;">|</span>
	<span>대표 : <?php echo $default['de_admin_company_owner']; ?></span>
	<span style="display:inline-block;padding:0px 5px;">|</span>
	<span><?php echo $default['de_admin_company_addr']; ?></span><br>

	<span>사업자등록번호 : <?php echo $default['de_admin_company_saupja_no']; ?></span>
	<span style="display:inline-block;padding:0px 5px;">|</span>
	<span>통신판매업신고번호 : <?php echo $default['de_admin_tongsin_no']; ?></span><br>

	<span>전화 : <?php echo $default['de_admin_company_tel']; ?>, 010-5405-1955</span>
	<span style="display:inline-block;padding:0px 5px;">|</span>
	<span>팩스 : <?php echo $default['de_admin_company_fax']; ?></span>
	<p style="padding-top:30px;font-weight:300;">
		Copyright &copy; 2001-2013 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.
	</p> -->

<div id="ft">
	<h2><?php echo $config['cf_title']; ?> 정보</h2>
	<ul id="ft_link">
		<div class="ft_info">
			<li><a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a></li>
			<li><a href="<?php echo get_pretty_url('content', 'privacy'); ?>"><b>개인정보처리방침</b></a></li>
			<li><a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a></li>
		</div>
		<div class="fsns">
			<a href="https://pf.kakao.com/_mxbxaMb/chat" target="_blank"><img
					src="<?php echo G5_THEME_IMG_URL ?>/fkakao.png" alt=""></a>
			<a href="https://blog.naver.com/euro_feel" target="_blank"><img
					src="<?php echo G5_THEME_IMG_URL ?>/fnaver.png" alt=""></a>
		</div>
	</ul>
	<div class="ft_wr">
		<div class="ft_all_wrap">
			<div class="footer_mobile_partner">
				<!-- <img src="<?php echo G5_THEME_IMG_URL ?>/partner_1.png"> -->
				<!-- <img src="<?php echo G5_THEME_IMG_URL ?>/partner_2.png"> -->
				<img src="<?php echo G5_THEME_URL ?>/newimg/ft_logo1.svg">
				<img src="<?php echo G5_THEME_URL ?>/newimg/ft_logo2.svg">
			</div>
			<div id="ft_cs" class="ft_con">
				<h3><a href="<?php echo G5_BBS_URL; ?>/faq.php">고객센터</a></h3>
				<a href="tel:1533-8025" class="ft_call">1533-8025</a>
				<div class="info_desc">
					<p>연중무휴</p>
					<p>상담가능 시간</p>
					<p>매일 9:00 - 20:00</p>
				</div>
			</div>
			<div id="ft_bank" class="ft_con">
				<h3>입금안내</h3>
				<div class="info_desc">
					<p>계좌번호 : 010-5405-1955</p>
					<p>은행 : 하나은행</p>
					<p>예금주 : 김성연 (원누리케어)</p>
				</div>
				<!-- <select class="df-bank-link lang-sec-ko back_link" name="selectbank" onchange="window.open(this.value)"><option value=""> 인터넷뱅킹 바로가기 </option>
                <option value="https://www.kbstar.com"> 국민은행 </option>
                <option value="https://banking.nonghyup.com"> NH 농협 </option>
                <option value="https://www.citibank.co.kr/"> 씨티은행 </option>
                <option value="https://www.shinhan.com"> 신한은행 </option>
                <option value="https://www.ibk.co.kr/"> 기업은행 </option>
                <option value="https://www.kebhana.com"> 하나은행 </option>
                <option value="https://open.standardchartered.co.kr/"> 제일은행 </option>
                <option value="https://www.wooribank.com"> 우리은행 </option>
                <option value="https://www.suhyup-bank.com"> 수협은행 </option>
                <option value="https://www.kdb.co.kr"> 산업은행 </option>
                <option value="https://www.pusanbank.co.kr"> 부산은행 </option>
                <option value="https://www.kjbank.com"> 광주은행 </option>
                <option value="https://www.kyongnambank.co.kr"> 경남은행 </option>
                <option value="https://www.daegubank.co.kr"> 대구은행 </option>
                <option value="https://www.jbbank.co.kr"> 전북은행 </option>
                <option value="https://www.chejubank.co.kr"> 제주은행 </option>
                <option value="https://www.epostbank.go.kr"> 우체국 </option>
                <option value="https://www.kakaobank.com/"> 카카오뱅크 </option>
                <option value="https://www.kbanknow.com/"> 케이뱅크 </option>
              </select> -->
				<!-- <div class="sns_wrap">
					<a href="#"><i class="fa-brands fa-facebook"></i></a>
					<a href="#"><i class="fa-brands fa-twitter"></i></a>
					<a href="#"><i class="fa-brands fa-instagram"></i></a>
				</div> -->
			</div>
			<div id="ft_info" class="ft_con">
				<h3>회사정보</h3>
				<div class="info_wrap info_desc">
					<p>상호명 : 원누리케어</p>
					<p>사업자등록번호 : 212-50-00699</p>
					<p>대표 : 김성연 | 전화 1533-8025</p>
					<p>서울시 영등포구 국회대로38길 8, 4층 403호, B660호</p>
					<p>통신판매번호 : 제 2025-서울영등포-1866호</p>
				</div>
				<div class="ft_toggle">
					<span class="txt">더보기</span>
					<i class="svgicon" data-lucide="chevron-down"></i>
					<!-- <span class="ft_arrow"></span> -->
				</div>
				<div class="info_wrap ft_branch info_desc">
					<h3>지사</h3>
					<div class="info_desc">
						<p>상호명 : 원누리케어</p>
						<p>사업자등록번호 : 147-14-03133</p>
						<p>대표 : 김성연 | 전화 010-5405-1955</p>
						<p>경북 안동시 경동로1282</p>
						<p>통신판매번호 : 제 2026-경북안동-0188호</p>
					</div>
				</div>
			</div>
			<div id="ft_partner" class="ft_con">
				<ul>
					<li>
						<!-- <img src="<?php echo G5_THEME_IMG_URL ?>/partner_1.png"> -->
						<img src="<?php echo G5_THEME_URL ?>/newimg/ft_logo1.svg">
					</li>
					<li>
						<!-- <img src="<?php echo G5_THEME_IMG_URL ?>/partner_2.png"> -->
						<img src="<?php echo G5_THEME_URL ?>/newimg/ft_logo2.svg">
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="ft_copy">Copyright © 원누리케어. All Rights Reserved.</div>
</div>
<div class="qbanner quick">

	<a href="tel:010-5405-1955" class="qmob"><img src="<?php echo G5_THEME_URL ?>/img/nmq1.png" alt=""></a>
	<a href="https://pf.kakao.com/_mxbxaMb/chat" target="_blank"><img src="<?php echo G5_THEME_URL ?>/img/nmq2.png"
			alt=""></a>
	<a href="#" id="ft_to_top"><i class="fa-solid fa-angles-up"></i><span>맨위로</span></a>
	<button type="button" name="button" id="quickbtnClose" onclick="quick_close();"><i
			class="ri-arrow-right-double-line"></i></button>
	<button type="button" name="button" id="quickbtnOpen" onclick="quick_open();"><i
			class="ri-arrow-left-double-line"></i></button>
</div>

<script>
$(document).ready(function(){
    $('#ft_info .ft_toggle').on('click', function(){
        $(this).toggleClass('active');
        $(this).next('.ft_branch').slideToggle(300);
    });
});
</script>

<script>
    function quick_close() {
        $('.qbanner').animate({
            right: '-135px'
        });
        $('#quickbtnOpen').css({
            display: 'block'
        });
        $('#quickbtnClose').css({
            display: 'none'
        });

    }

    function quick_open() {
        $('.qbanner').animate({
            right: '10px'
        });
        $('#quickbtnOpen').css({
            display: 'none'
        });
        $('#quickbtnClose').css({
            display: 'block'
        });

    }
</script>
<!--<div class="quick">-->
<!--	<a href="tel:010-5405-1955"><img src="--><?php //echo G5_THEME_URL ?><!--/img/nmq1.png" alt=""></a>-->
<!--    <a href="https://pf.kakao.com/_mxbxaMb/chat" target="_blank"><img src="--><?php //echo G5_THEME_URL ?><!--/img/nmq2.png" alt=""></a>-->
<!--    <a href="#" id="ft_to_top"><i class="fa-solid fa-angles-up"></i><span >맨위로</span></a>-->
<!---->
<!--	<a href="--><?php //echo G5_THEME_URL ?><!--/mobile/shop/olduse1.php"><img src="--><?php //echo G5_THEME_URL ?><!--/img/mq3.png" alt=""></a>-->
<!--</div>-->
<!--<div class="quick_mob mob">-->
<!--	<a href="tel:010-5405-1955"><i class="fa-solid fa-phone"></i>전화상담</a>-->
<!--	<a href="https://pf.kakao.com/_mxbxaMb/chat" target="_blank"><img src="--><?php //echo G5_THEME_IMG_URL ?><!--/qu2.png" alt="">카톡상담</a>-->
<!--	<a href="https://blog.naver.com/euro_feel" target="_blank"><img src="--><?php //echo G5_THEME_IMG_URL ?><!--/qu3.png" alt="">네이버블로그</a>-->
<!--	<a href="--><?php //echo G5_THEME_URL ?><!--/mobile/shop/olduse1.php">복지용구<br>알아보기</a>-->
<!--	<a href="#" id="top_btn"> <i class="fa-solid fa-angle-up"></i> TOP</a>-->
<!--</div>-->
	<!-- <button type="button" id="top_btn" onclick="go_top()" style="cursor:pointer;"><img src="<?php echo G5_THEME_IMG_URL; ?>/top_btn.png" alt="상단으로" onclick="go_top()" style="cursor:pointer;"></button> -->
    <script>

    $(function() {
		$(document).on("click","#top_btn", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
 		$(document).on("click touchend","#top_btn", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
 		$(document).on("click touchstart","#top_btn", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
   });
   function go_top(){
	$("html, body").animate({scrollTop:0}, '500');
	return fasel;

}

    </script>
</div>

<!--
<div id="ft">
    <h2><?php echo $config['cf_title']; ?> 정보</h2>
    <ul id="ft_link">
        <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a></li>
        <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">서비스이용약관</a></li>
        <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보 취급방침</a></li>
    </ul>
    <div class="ft_wr">
        <div id="ft_cs" class="ft_con">
            <h3><a href="<?php echo G5_BBS_URL; ?>/faq.php">CS CENTER</a></h3>
            <div>
                <?php
                $save_file = G5_DATA_PATH.'/cache/theme/everyday/footerinfo.php';
                if(is_file($save_file))
                    include($save_file);
                ?>
                <strong class="cs_tel"><?php echo get_text($footerinfo['tel']); ?></strong>
                <p class="cs_info"><?php echo get_text($footerinfo['etc'], 1); ?></p>
                <a href="<?php echo G5_BBS_URL; ?>/qalist.php" class="qa_link">문의게시판</a>
            </div>
        </div>
        <div id="ft_bank" class="ft_con">
            <h3>BANK INFO</h3>
            <div>
                <?php
                $save_file = G5_DATA_PATH.'/cache/theme/everyday/footerinfo.php';
                if(is_file($save_file))
                    include($save_file);
                ?>
                <p class="name">예금주 : <?php echo get_text($footerinfo['depositor']); ?></p>
                <span class="account"><?php echo get_text($footerinfo['account'], 1); ?></span>
            </div>
        </div>
        <div class="ft_con">
            <?php echo latest('theme/shop_basic', 'notice', 5, 30); ?>
        </div>
        <div id="ft_if" class="ft_con">
            <h3>COMPANY</h3>
            <strong> <?php echo $default['de_admin_company_name']; ?></strong>
            <span>주소 : <?php echo $default['de_admin_company_addr']; ?></span><br>
            <span>사업자등록번호 : <?php echo $default['de_admin_company_saupja_no']; ?></span>
            <span>대표 : <?php echo $default['de_admin_company_owner']; ?></span>
            <span>전화 : <?php echo $default['de_admin_company_tel']; ?></span>
            <span>팩스 :. <?php echo $default['de_admin_company_fax']; ?></span>
            <span>운영자 <?php echo $admin['mb_name']; ?></span><br>
            <span>통신판매업신고번호 : <?php echo $default['de_admin_tongsin_no']; ?></span>
            <span>개인정보 보호책임자 : <?php echo $default['de_admin_info_name']; ?></span>

            <?php if ($default['de_admin_buga_no']) echo '<span>부가통신사업신고번호 : '.$default['de_admin_buga_no'].'</span>'; ?>

        </div>
        <div class="copy">Copyright &copy; 2001-2013 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.  </div>

    </div>
    <button type="button" id="top_btn"><img src="<?php echo G5_THEME_IMG_URL; ?>/top_btn.png" alt="상단으로"></button>
    <script>

    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>
--->

<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');
?>
