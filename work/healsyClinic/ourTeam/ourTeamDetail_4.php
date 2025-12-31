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
							<p class="tit">Jacky Liu</p>
							<p class="desc">Podiatrist </p>
							<p class="certi">
								Bachelor of Health Science (Podiatry)
							</p>
							<a href="/booking/booking.php" type="button" class="button">
								<img src="../img/ico_calendar.png" alt="" class="icon">
								<span class="txt">BOOK NOW</span>
							</a>
						</div>
						<div class="imgbox">
							<img src="../img/profile_pc_detail_jacky.png" alt="" class="img">
						</div>
					</div>
					<div class="contbox">
						<div class="contitem">
							<p class="desc">
								Jacky was born in New Zealand and grew up in Auckland, where he completed his Bachelor of Podiatry in 2016. After graduating, he moved to Sydney, Australia, drawn by the opportunity to further develop his podiatric skills and expand his career in a dynamic healthcare environment.
								<br><br>
								Over the first five years of his career, Jacky specialised in providing podiatry care within aged-care settings, from residential facilities to community work across both local and regional areas of NSW. This experience strengthened his clinical precision, empathy, and communication skills, which he now brings to every patient interaction.
								<br><br>
								While Jacky continues to enjoy all aspects of podiatry, he has developed a growing interest in biomechanical and sports-related podiatry. He is now focusing on expanding his knowledge and expertise in this area, helping active individuals optimise their performance, manage injuries, and maintain long-term lower-limb health. He gains great satisfaction from seeing patients get back on their feet and return to doing what they love.
								<br><br>
								Combining his technical expertise with a gentle and attentive approach, Jacky prides himself on providing treatments with the utmost care and minimal discomfort. Ensuring every patient feels supported and confident in their foot health.
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