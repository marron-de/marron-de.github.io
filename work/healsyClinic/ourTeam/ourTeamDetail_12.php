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
							<p class="tit">Ciara Lawne</p>
							<p class="desc">
								Retail Assistant
							</p>
							<a href="/booking/booking.php" type="button" class="button">
								<img src="../img/ico_calendar.png" alt="" class="icon">
								<span class="txt">BOOK NOW</span>
							</a>
						</div>
						<div class="imgbox">
							<img src="../img/profile_pc_detail_ciara.png" alt="" class="img">
						</div>
					</div>
					<div class="contbox">
						<div class="contitem">
							<p class="desc lt1">
								Hi, I’m Ciara Lawne. I’m currently pursuing a Bachelor of Chiropractic Science. I have a strong interest in health, human movement, and empowering individuals to feel their best. Over the past few years, my experience in both retail and as a receptionist at an allied health clinic has provided me with invaluable skills in client care and a profound understanding of the healthcare environment.
								<br><br>
								These roles have honed my ability to connect with clients, manage administrative tasks efficiently, and contribute to a supportive clinic atmosphere. I am passionate about creating positive interactions and ensuring every client feels welcomed and understood.
								<br><br>
								In my free time, I maintain an active lifestyle by going to the gym, preparing healthy meals, or enjoying the beach. These activities foster balance during my studies and continuously fuel my passion for overall well-being. I am eager to connect with others and actively contribute to a space dedicated to helping people lead healthier, more comfortable lives.
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