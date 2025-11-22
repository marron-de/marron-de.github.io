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


	<div class="wrap location_wrap">

		<?php include "../header.php" ?>

		<?php include "../navbox.php" ?>

		<!-- container -->
		<div class="container">
			<section class="section ss1">
				<div class="inner">
					<div class="sub_titbox">
						<p class="sub_title">Location</p>
					</div>
					<div class="schwrap">
						<div class="schbox">
							<span class="sch_icon"></span>
							<input type="text" class="sch_input" placeholder="Please enter your search term.">
							<button type="button" class="sch_btn">Search</button>
						</div>
					</div>
					<div class="contbox">
						<div class="item">
							<a href="locationDetail.php" class="link">
								<div class="imgbox">
									<img src="../img/location_img1.png" alt="" class="img pc">
									<img src="../img/location_img1_mob.png" alt="" class="img tablet">
								</div>
								<div class="txtbox">
									<p class="tit">Healsy Clinic</p>
									<p class="desc1">Shop 23, 15 De Clambe Drive Castle Hill NSW 2154</p>
									<p class="desc2">Tel. (+61) 02 9159 3977</p>
								</div>
							</a>
						</div>
						<!-- <div class="item">
							<a href="locationDetail.php" class="link">
								<div class="imgbox">
									<img src="../img/location_img2.png" alt="" class="img">
								</div>
								<div class="txtbox">
									<p class="tit">Healsy Clinic</p>
									<p class="desc1">Level 2/63 Dixon St Sydney, NSW 2000</p>
									<p class="desc2">Tel. 1234567890</p>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="locationDetail.php" class="link">
								<div class="imgbox">
									<img src="../img/location_img3.png" alt="" class="img">
								</div>
								<div class="txtbox">
									<p class="tit">Healsy Clinic</p>
									<p class="desc1">Level 2/63 Dixon St Sydney, NSW 2000</p>
									<p class="desc2">Tel. 1234567890</p>
								</div>
							</a>
						</div> -->
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