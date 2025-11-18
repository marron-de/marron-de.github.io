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
							<p class="tit">Jun Park</p>
							<p class="desc">Accredited Exercise physiologist</p>
							<p class="certi">
								Master of Clinical Exercise Physiology <br>
								Bachelor of Exercise & Sports Science
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
								With over 11 years of dedicated experience in the health and fitness industry, Jun is deeply committed to facilitating lasting improvements in strength, mobility, and overall well-being through evidence-based exercise and rehabilitation. For the past five years, Jun has specialised in delivering personalised personal training and exercise physiology services, expertly integrating clinical exercise science into bespoke programs tailored to each client’s unique needs and goals.
								<br><br>
								Jun's diverse background includes extensive partnerships and contracts with various fitness facilities, where they have not only delivered specialised Exercise Physiology services but also led and mentored teams of personal trainers. This leadership experience underscores a commitment to excellence and a collaborative spirit.
								<br><br>
								As Jun embarks on this next professional chapter within our multidisciplinary environment, they are eager to expand their reach and expertise. They are passionate about continuing to guide clients towards healthier, stronger, and more confident versions of themselves — whether through consistent exercise routines, targeted rehabilitation, or sustainable long-term lifestyle changes. Jun takes immense pride in offering a professional, personalised, and science-driven approach to every session, ensuring each client moves better, feels stronger, and ultimately lives a healthier, more fulfilling life.
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