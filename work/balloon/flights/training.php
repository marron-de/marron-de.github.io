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
									<a href="<?php echo $path ?>certification/certification.php" class="link">인증현황</a>
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
								<span class="txt">교육비행</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>flights/free.php" class="link">열기구 자유비행</a>
									<a href="<?php echo $path ?>flights/promo.php" class="link">홍보비행</a>
									<a href="<?php echo $path ?>flights/training.php" class="link on">교육비행</a>
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
								<p class="s_txt1">FLIGHT 03</p>
								<p class="s_txt3">Pilot Training Flight</p>
							</div>
						</div>
						<div class="rightbox">
							<p class="fli_tit">교육비행</p>
							<p class="fli_desc">
								교육비행은 직접 열기구를 조종하며 하늘을 나는 꿈을 실현할 수 있도록 돕는 전문 교육 과정입니다. <br>
								만 14세 이상이면 누구나 도전할 수 있으며, 국토교통부 기준에 따라 학과 및 실기 교육을 통해  <br class="pc">
								자가용·사업용 열기구 조종사 자격 취득을 목표로 합니다. 
								벌룬투어의 전문 교관진이 기초부터 비행 실습까지 안전하고 체계적으로 교육을 진행합니다.
							</p>
						</div>
					</div>
					<div class="slidebox">
						<div class="swiper flight_swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-1.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-2.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-3.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-4.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-5.jpg" alt="" class="img">
								</div>
							</div>
							<div class="swiper-button-prev prev_btn white"></div>      
							<div class="swiper-button-next next_btn white"></div>
						</div>
						<div class="swiper flight_thumbox">
							<div class="swiper-wrapper">
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-1.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-2.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-3.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-4.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_3-5.jpg" alt="" class="img">
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