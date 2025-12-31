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
						<p class="sub_title">Practitioner</p>
					</div>
					<div class="topbox">
						<div class="txtbox">
							<p class="tit">Jonathan Phlek Duch</p>
							<p class="desc">Accredited Exercise physiologist</p>
							<p class="certi">
								Bachelor of Exercise Physiology, ESSA
							</p>
							<a href="booking/booking.php" type="button" class="button">
								<img src="../img/ico_calendar.png" alt="" class="icon">
								<span class="txt">BOOK NOW</span>
							</a>
						</div>
						<div class="imgbox">
							<img src="../img/profile_pc_detail_johnathan.png" alt="" class="img">
						</div>
					</div>
					<div class="contbox">
						<div class="contitem">
							<p class="desc lt2">
								Jonathan is an Exercise Physiologist driven by a genuine passion for helping people improve their health, confidence, and quality of life through movement. His approach is grounded in the belief that exercise should be accessible, meaningful, and empowering for everyone. With a strong background in competitive powerlifting, martial arts, and freestyle wrestling, Jonathan understands the mechanics of training smart and the value of cultivating resilience, humility, and consistency—qualities he instils in his clients. His journey into this profession was sparked by realising the positive impact he could make by sharing his knowledge of health and fitness. This insight led him to pursue and complete a Bachelor of Exercise Physiology at UNSW.
								<br><br>
								His clinical experience highlighted exercise as vital healthcare for chronic conditions, solidifying his dedication to safe, effective and highly personalised exercise programs focused on trust and supportive environment. Above all, Jonathan’s passion lies in helping people overcome barriers, feel confident in their bodies, and build sustainable habits for long-term wellbeing. It is truly a privilege for him to guide others toward feeling stronger, calmer, and more capable in their everyday life.
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