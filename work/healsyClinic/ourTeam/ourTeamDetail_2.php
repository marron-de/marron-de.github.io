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
							<p class="tit">John Yo Han, Sung</p>
							<p class="desc">Associate Physiotherapist</p>
							<p class="certi">
								Bachelor of Physiotherapy, APAM
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
								John is a highly compassionate and enthusiastic Physiotherapist, driven by a genuine passion for guiding patients toward optimal health and recovery since 2021. His clinical practice is built upon a solid foundation of diverse experience, encompassing the nuanced assessment and treatment of acute and chronic musculoskeletal injuries, specialised rehabilitation for sports-related trauma, and comprehensive pre and post-operative care.
								<br><br>
								Embracing a holistic treatment philosophy, John expertly integrates hands-on manual therapy techniques with evidence-based, individualised exercise prescription. His primary goal for every patient is to alleviate pain, restore functional movement, and significantly enhance their overall physical well-being. John is a strong advocate for patient-centered care, meticulously prioritising education to ensure each individual thoroughly understands their condition and feels empowered to actively participate in achieving their specific recovery goals.
								<br><br>
								Having personally experienced and navigated various injuries, John brings a profound sense of empathy and unique insight into the critical importance of receiving the right guidance and support throughout the rehabilitation process. Outside of his dedicated work at the clinic, John embraces an active and balanced lifestyle, frequently engaging in community soccer, futsal, and Oztag, and cherishes the quality time he spends with his family and friends.
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