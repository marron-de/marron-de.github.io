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


	<div class="wrap teamDetail_wrap">

		<?php include "../header.php" ?>

		<?php include "../navbox.php" ?>

		<!-- container -->
		<div class="container">
			<section class="section ss1">
				<div class="inner">
					<div class="sub_titbox">
						<p class="sub_title">Practitioner.</p>
					</div>
					<div class="topbox">
						<div class="txtbox">
							<p class="tit">Marisa Carnevale</p>
							<p class="desc">
								Administrative Staff
							</p>
							<a href="/booking/booking.php" type="button" class="button">
								<img src="../img/ico_calendar.png" alt="" class="icon">
								<span class="txt">BOOK NOW</span>
							</a>
						</div>
						<div class="imgbox">
							<img src="../img/teamDetail_img.png" alt="" class="img">
						</div>
					</div>
					<div class="contbox">
						<div class="contitem">
							<p class="desc lt1">
								Hi, I’m Marisa, one of the receptionists here at the clinic, and likely among the first friendly faces you’ll encounter. With over 16 years in healthcare reception, I genuinely enjoy contributing to a team dedicated to helping individuals feel and move better. My role centers on ensuring your clinic experience is seamless, welcoming, and stress-free. This includes everything from efficient appointment booking and answering questions to maintaining smooth operations behind the scenes.
								<br><br>
								I understand that visiting a clinic can sometimes be daunting, particularly when managing pain or recovering from an injury. Therefore, my priority is always to cultivate a calm, friendly environment where you feel consistently supported and cared for from the moment you arrive.
								<br><br>
								Outside of work, I love staying active with tennis, exploring new places through travel, and discovering fantastic dining experiences. These passions help me maintain a balanced and positive outlook. I look forward to ensuring your time at our clinic is a comfortable and positive one.
							</p>
						</div>
					</div>
					<div class="btnbox">
						<a href="ourTeam.php" class="button">List</a>
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
			$('.nav_box .nav > li').eq(0).addClass('active');
		});
	</script>




</body>

</html>