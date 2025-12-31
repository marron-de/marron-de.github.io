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
							<p class="tit">Erin Mcgiffen</p>
							<p class="desc">
								Administrative Staff
							</p>
							<a href="/booking/booking.php" type="button" class="button">
								<img src="../img/ico_calendar.png" alt="" class="icon">
								<span class="txt">BOOK NOW</span>
							</a>
						</div>
						<div class="imgbox">
							<img src="../img/profile_pc_detail_erin.png" alt="" class="img">
						</div>
					</div>
					<div class="contbox">
						<div class="contitem">
							<p class="desc lt1">
								With eight years of comprehensive experience in the health and fitness industry, I bring a diverse and valuable skill set to our team. My background includes six years in reception and administration, a Bachelor of Exercise and Sport Science, and four years as a certified Level 2 Sports Trainer. In this role, I actively provided vital injury management, essential sports strapping, and critical first aid services.
								<br><br>
								This extensive experience has familiarised me with numerous sports, common injuries, and the profound support physiotherapy offers, from both a professional's and an athlete's perspective. Such insights have equipped me to excel in clear communication, demonstrate genuine empathy, effectively manage high-pressure situations, and provide tailored support to patients. I take immense pride in being approachable and fostering a professional, supportive environment where every client feels truly understood, respected, and valued throughout their recovery journey.
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