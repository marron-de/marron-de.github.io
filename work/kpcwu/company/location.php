<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행대장</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap company_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section co_sec">
				<div class="inner layout">
					<div class="side_area fixed">			
    					<?php include "../common/side_menu_co.php" ?>
    					<?php include "../common/customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_titbox2">
							<div class="mob_view">
								<p class="s_tit">회사소개</p>
								<div class="breadcrumb">
									<a href="<?php echo $path ?>index.php" class="home"></a>
									<span class="bar"></span>
									<span class="catetit">회사소개</span>
									<span class="bar"></span>
									<div class="catebox">
										<button type="button" class="catetit cate_btn">
											<span class="txt">오시는길</span>
											<span class="arrow"></span>
										</button>
										<div class="popup cate_popup">
											<div class="linkbox">
												<a href="<?php echo $path ?>company/about.php" class="link">회사소개</a>
												<a href="<?php echo $path ?>company/location.php" class="link">오시는길</a>
												<a href="<?php echo $path ?>company/partner.php" class="link">제휴문의</a>
												<a href="<?php echo $path ?>company/terms.php" class="link">서비스이용약관</a>
												<a href="<?php echo $path ?>company/privacy.php" class="link">개인정보처리방침</a>
												<a href="<?php echo $path ?>company/refund.php" class="link">취소 및 환불 정책</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<p class="s_subtit">오시는길</p>							
						</div>
						<div class="contbox">
							<div class="location_box">
								<div class="topbox">
									<p class="address">
										서울시 동대문구 신이문로 39  <br>
										명정빌딩 5층 (02409)
									</p>
									<div class="infobox">
										<div class="item">
											<img src="<?php echo $path ?>img/com_location_icon1.png" alt="" class="icon">
											<p class="tit">070-8276-1919</p>
										</div>
										<span class="bar"></span>
										<div class="item">
											<img src="<?php echo $path ?>img/com_location_icon2.png" alt="" class="icon">
											<p class="tit">02-6383-8003</p>
										</div>
										<span class="bar"></span>
										<div class="item">
											<img src="<?php echo $path ?>img/com_location_icon3.png" alt="" class="icon">
											<p class="tit">cs@tktravelkorea.com</p>
										</div>
									</div>
								</div>
								<div class="map_box">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1879.5166699217943!2d127.06488151717544!3d37.60315547449195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca262b8296b8d%3A0xc5d030ada6004426!2sTK%20Travel%20Korea!5e0!3m2!1sko!2skr!4v1749820598625!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</section>

        </div>


    	<?php include "../common/fixed_nav.php" ?>

    	<?php include "../common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include "../common/footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>
	<script>
  		 $(function() {
			$('.side_menu .side_menulist .menuitem').eq(1).addClass('active');
		});
	</script>



</body>

</html>