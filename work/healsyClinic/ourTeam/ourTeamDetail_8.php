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
							<p class="tit">Joy Lee</p>
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
							<p class="desc">
								With over eight years in healthcare administration and management, including two years specialising in physiotherapy practice operations, I possess a comprehensive understanding of delivering seamless, supportive, and compassionate client service. I am dedicated to cultivating a professional yet welcoming clinic environment where every client feels genuinely heard, valued, and cared for.
								<br><br>
								My diverse background in the health industry has honed my communication, organisational, and problem-solving abilities. This expertise enables me to confidently manage front-desk coordination, intricate scheduling, and patient inquiries with both efficiency and empathy. I firmly believe that genuine connection and trust are the cornerstones of exceptional healthcare.
								<br><br>
								As a Administrator, my primary goal is to ensure each client feels comfortable and confident throughout their entire treatment journey. Outside of my professional life, I cherish spending time in nature and playing golf, activities that help me maintain a balanced and focused perspective.
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