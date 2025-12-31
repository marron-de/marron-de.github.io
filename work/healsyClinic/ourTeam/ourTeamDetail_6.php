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
							<p class="tit">Minnie Edwards</p>
							<p class="desc">
								Clinical Pilates Instructor
							</p>
							<a href="/booking/booking.php" type="button" class="button">
								<img src="../img/ico_calendar.png" alt="" class="icon">
								<span class="txt">BOOK NOW</span>
							</a>
						</div>
						<div class="imgbox">
							<img src="../img/profile_pc_detail_minnie.png" alt="" class="img">
						</div>
					</div>
					<div class="contbox">
						<div class="contitem">
							<p class="desc lt1">
								Minnie graduated with first-class honours in dance and choreography in 2020, which propelled her training in Pilates teaching. Her approach to movement is rooted in the belief that it’s never a one-size-fits-all practice. The strength of Pilates lies in its ability to adapt to the unique needs of each individual, making it a highly beneficial and versatile form of bodywork. Minnie cultivates a space that helps you feel at home in your body, with classes that blend classical and contemporary Pilates repertoire. She creates flow through movement while giving anatomical knowledge designed to help you feel at ease, connected, and capable.
								<br><br>
								Specialising in Pilates for orthopaedic conditions and sports massage therapy, Minnie has a deep understanding of body mechanics which she applies to assess and address movement patterns, tailor Pilates programmes, rehabilitation techniques, and exercises that support performance and recovery. Whether you’re a beginner building a solid foundation or an experienced practitioner refining technique and deepening your connection to movement, Minnie’s classes are designed for you. Her aim is for you to experience the transformative benefits of Pilates in a space where you can restore, rekindle, and revive.
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