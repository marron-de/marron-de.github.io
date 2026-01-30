<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>벌룬어드벤처코리아</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap flights_wrap">     


    	<?php include $path."common/header.php" ?>

    	<?php include $path."common/fixed_nav.php" ?>

    	<?php include $path."common/navbox.php" ?>


		<!-- container -->
		<div class="container">

			<div class="sub_topbanner">
				<div class="banner">
					<p class="sub">Balloon Flights</p>
					<p class="tit">열기구체험</p>
					<div class="breadcrumb">
						<a href="<?php echo $path ?>index.php" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">열기구체험</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>company/about.php" class="link">회사소개</a>
									<a href="<?php echo $path ?>flights/free.php" class="link on">열기구체험</a>
									<a href="<?php echo $path ?>reservation/list.php" class="link">예약하기</a>
									<a href="<?php echo $path ?>community/notice.php" class="link">커뮤니티</a>
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">마이페이지</a>
								</div>
							</div>
						</div>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">열기구 자유비행</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>flights/free.php" class="link on">열기구 자유비행</a>
									<a href="<?php echo $path ?>flights/promo.php" class="link">홍보비행</a>
									<a href="<?php echo $path ?>flights/training.php" class="link">교육비행</a>
									<a href="<?php echo $path ?>flights/event.php" class="link">이벤트비행</a>
									<a href="<?php echo $path ?>flights/unmanned.php" class="link">무인모형열기구</a>
									<a href="<?php echo $path ?>flights/competition.php" class="link">열기구대회</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="sub_section fli_sec">
				<div class="inner2">
					<div class="txtbox">
						<div class="leftbox">
							<div class="sub_titbox">
								<p class="s_txt1">FLIGHT 01</p>
								<p class="s_txt3">Private Flight</p>
							</div>
						</div>
						<div class="rightbox">
							<p class="fli_tit">열기구 자유비행</p>
							<p class="fli_desc">
								열기구로 유명한 관광지에서는 대기가 가장 안정되는 일출 시간대에 열기구 자유비행이 진행됩니다. <br class="pc">
								모든 비행은 단체가 아닌 4인 이하 프라이빗 비행으로 운영되어, 보다 여유롭고 안전한 경험을 제공합니다. <br>
								비행 전에는 거대한 풍선이 천천히 부풀어 오르는 준비 과정을 직접 체험하게 되며, <br class="pc">
								비행 후 착륙과 함께 샴페인 세레머니, 비행 인증서 발급, 기념 촬영 순서로 일정이 마무리됩니다.
							</p>
							<div class="bottom">
								<p class="fli_sub">열기구 자유비행 일정</p>
								<div class="stepbox">
									<p class="txt">일출 시간 이륙장 집결</p>
									<span class="arrow"></span>
									<p class="txt">인플레이션 체험</p>
									<span class="arrow"></span>
									<p class="txt">자유비행</p>
									<span class="arrow"></span>
									<p class="txt">착륙</p>
									<span class="arrow"></span>
									<p class="txt">인증서 발급 및 기념 촬영</p>
								</div>
							</div>
						</div>
					</div>
					<div class="slidebox">
						<div class="swiper flight_swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-6.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-1.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-2.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-3.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-4.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-5.jpg" alt="" class="img">
								</div>
							</div>
							<div class="swiper-button-prev prev_btn white"></div>      
							<div class="swiper-button-next next_btn white"></div>
						</div>
						<div class="swiper flight_thumbox">
							<div class="swiper-wrapper">
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-6.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-1.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-2.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-3.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-4.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_1-5.jpg" alt="" class="img">
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
        </div>


    	<?php include $path."common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include $path."common/footer.php" ?>

		
    </div>


    <!-- JS -->
    <script src="<?php echo $path ?>js/common.js"></script>


</body>

</html>