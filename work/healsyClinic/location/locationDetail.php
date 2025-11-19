<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Healsy Clinic</title>

	<?php include "../script.php" ?>

</head>

<body>


	<div class="wrap locationDetail_wrap">

		<?php include "../header.php" ?>

		<?php include "../navbox.php" ?>

		<!-- container -->
		<div class="container">
			<section class="section ss1">
				<div class="inner">
					<div class="sub_titbox">
						<p class="sub_title">Healsy Clinic.</p>
					</div>
					<div class="titbox">
						<p class="title">Clinic Info</p>
					</div>
					<div class="contbox">
						<div class="leftbox">
							<div class="mapbox">
								<!-- <img src="../img/map_img2.png" alt="" class="map"> -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6636.617460488626!2d150.986634!3d-33.726832!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a1bcf0bdbe8d%3A0xa2c33fd3c9776b5e!2sShop%2023%2F15%20De%20Clambe%20Dr%2C%20Castle%20Hill%20NSW%202154%2C%20Australia!5e0!3m2!1sen!2skr!4v1762837092604!5m2!1sen!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
							</div>
						</div>
						<div class="rightbox">
							<div class="infobox">
								<p class="address">Shop 23, 15 De Clambe Drive Castle Hill NSW 2154</p>
								<p class="time">
									Monday to Friday: 7:30am - 8pm <span class="pc_view">l</span>
									<br class="tablet"> Saturday : 9am - 5pm l Sunday: Closed
								</p>
								<div class="descbox">
									<div class="descitem">
										<span class="tit">Email</span>
										<span class="desc">info@healsyclinic.com.au</span>
									</div>
									<div class="descitem">
										<span class="tit">Tel</span>
										<span class="desc">(+61) 02 9159 3977</span>
									</div>
								</div>
							</div>
							<div class="slidebox location_slidebox">
								<div class="controls">
									<div class="swiper-pagination pagination"></div>
									<div class="swiper-button-box swiper_btns pc">
										<div class="swiper-button-prev prev_btn"></div>
										<span class="btn_bar"></span>
										<div class="swiper-button-next next_btn"></div>
									</div>
								</div>
								
								<div class="swiper location_swiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide item">
											<div class="imgbox">
												<img src="../img/location_thum1.png" alt="" class="img">
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="imgbox">
												<img src="../img/location_thum2.png" alt="" class="img">
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="imgbox">
												<img src="../img/location_thum3.png" alt="" class="img">
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="imgbox">
												<img src="../img/location_thum4.png" alt="" class="img">
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="imgbox">
												<img src="../img/location_thum5.png" alt="" class="img">
											</div>
										</div>
									</div>
								</div>
								<div class="controls2">
									<div class="swiper-button-box swiper_btns tablet">
										<div class="swiper-button-prev prev_btn"></div>
										<span class="btn_bar"></span>
										<div class="swiper-button-next next_btn"></div>
									</div>
									<!-- <div class="swiper-scrollbar scrollbar"></div> -->
									<div class="swiper-pagination progressbar"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="btnbox">
						<a href="location.php" class="button">List</a>
					</div>
				</div>
			</section>
		</div>

		<?php include "../footer.php" ?>

	</div>



	<!-- JS -->
	<script src="../js/common.js"></script>
	<script>
  		 $(function() {
			$('.nav_box .nav > li').eq(5).addClass('active');
		});
	</script>




</body>

</html>