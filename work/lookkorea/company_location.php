<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOK KOREA</title>

    <?php include "script.php" ?>

</head>

<body>


    <div class="wrap company_wrap">     


    	<?php include "header2.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section sub_common co_sec">
				<div class="inner layout">
					<div class="side_area">			
    					<?php include "side_menu2.php" ?>
    					<?php include "customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_cont company_cont">
							<div class="location_box">
								<div class="map_box">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1879.5166699217943!2d127.06488151717544!3d37.60315547449195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca262b8296b8d%3A0xc5d030ada6004426!2sTK%20Travel%20Korea!5e0!3m2!1sko!2skr!4v1749820598625!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
								<div class="bottom">
									<p class="title">
										작은 설렘이 큰 여행이 되는 곳, <span class="bold">LOOK KOREA</span>
									</p>
									<div class="infobox">
										<div class="item">
											<div class="iconbox">
												<img src="img/com_location_icon1.png" alt="" class="icon">
											</div>
											<div class="txtbox">
												<p class="tit">ADDRESS</p>
												<p class="desc">서울시 동대문구 신이문로 39 명정빌딩 5층 (02409)</p>
											</div>
										</div>
										<div class="item">
											<div class="iconbox">
												<img src="img/com_location_icon2.png" alt="" class="icon">
											</div>
											<div class="txtbox">
												<p class="tit">TEL</p>
												<p class="desc">02-6298-8000</p>
											</div>
										</div>
										<div class="item">
											<div class="iconbox">
												<img src="img/com_location_icon3.png" alt="" class="icon">
											</div>
											<div class="txtbox">
												<p class="tit">FAX</p>
												<p class="desc">02-6383-8003</p>
											</div>
										</div>
										<div class="item">
											<div class="iconbox">
												<img src="img/com_location_icon1.png" alt="" class="icon">
											</div>
											<div class="txtbox">
												<p class="tit">E-MAIL</p>
												<p class="desc">web@tktravelkorea.com</p>
											</div>
										</div>
									</div>
								</div>
								
							</div>						
						</div>										
					</div>
				</div>
			</section>

        </div>


    	<?php include "fixed_nav.php" ?>

    	<?php include "footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="js/common.js"></script>

	<!-- 화면 : 사이드메뉴 active -->
	<script>
  		 $(function() {
			$('.side_menu .side_menulist .menuitem').eq(1).addClass('active');
		});
	</script>


</body>

</html>