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
							<p class="tit">Kacey Shin</p>
							<p class="desc">
								Retail Assistant
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
							<p class="desc">
								Kacey, a University of New South Wales student, brings several years of experience in delivering personalised solutions across various customer service and client-facing roles. As Healsy's Retail Assistant, she blends a strong interest in health, design, and human connection to craft meaningful experiences for every customer entering our clinic.
								<br><br>
								At Healsy, Kacey is instrumental in guiding clients through our insole selection process. Her expertise spans everything from pressure scans and 3D foot assessments to clearly explaining which materials and features best suit individual needs. Renowned for her clear communication and approachable manner, Kacey ensures each customer feels fully supported and confident in their choices.
								<br><br>
								Passionate about translating complex clinical information into practical, easy-to-understand advice, Kacey believes that comfort, posture, and performance truly start from the ground up. She is proud to be part of a team that combines innovation with genuine care to significantly improve people’s daily movement and overall well-being.
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