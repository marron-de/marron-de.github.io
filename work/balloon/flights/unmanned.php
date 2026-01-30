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
								<span class="txt">무인모형열기구</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>flights/free.php" class="link">열기구 자유비행</a>
									<a href="<?php echo $path ?>flights/promo.php" class="link">홍보비행</a>
									<a href="<?php echo $path ?>flights/training.php" class="link">교육비행</a>
									<a href="<?php echo $path ?>flights/event.php" class="link">이벤트비행</a>
									<a href="<?php echo $path ?>flights/unmanned.php" class="link on">무인모형열기구</a>
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
								<p class="s_txt1">FLIGHT 05</p>
								<p class="s_txt3">RC Model Balloon</p>
							</div>
						</div>
						<div class="rightbox">
							<p class="fli_tit">무인모형열기구</p>
							<p class="fli_desc">
								RC HOT AIR BALLOON, MODEL BALLOON이라 불리는 모형 열기구는
								<br class="pc">
								길이 약 5~7m 규모로, 리모컨을 통해 화염을 제어하며 조종하는 열기구입니다. <br>
								국내에서는 아직 생소하지만, 유럽 등에서는 정식 대회가 열릴 만큼 <br class="pc">
								하나의 독립된 콘텐츠로 자리 잡고 있습니다. <br>
								축제와 행사 현장에서 관람형 퍼포먼스로 활용되며, 밤하늘을 수놓는 <br class="pc">
								나이트 글로우(Night Glow) 연출은 불꽃놀이를 넘어서는 인상적인 장면을 만들어냅니다.
							</p>
						</div>
					</div>
					<div class="slidebox">
						<div class="swiper flight_swiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-1.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-2.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-3.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-4.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-5.jpg" alt="" class="img">
								</div>
							</div>
							<div class="swiper-button-prev prev_btn white"></div>      
							<div class="swiper-button-next next_btn white"></div>
						</div>
						<div class="swiper flight_thumbox">
							<div class="swiper-wrapper">
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-1.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-2.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-3.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-4.jpg" alt="" class="img">
								</div>
								<div class="swiper-slide item">
									<img src="<?php echo $path ?>img/fli_sec_5-5.jpg" alt="" class="img">
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