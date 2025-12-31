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
							<p class="tit">YeonJu, Park</p>
							<p class="desc">
								Clinical Pilates Instructor
							</p>
							<a href="/booking/booking.php" type="button" class="button">
								<img src="../img/ico_calendar.png" alt="" class="icon">
								<span class="txt">BOOK NOW</span>
							</a>
						</div>
						<div class="imgbox">
							<img src="../img/profile_pc_detail_yeonju.png" alt="" class="img">
						</div>
					</div>
					<div class="contbox">
						<div class="contitem">
							<p class="desc lt1">
								Yeonju Park is a passionate and dedicated Classical Pilates instructor, meticulously trained in the renowned Romana’s Pilates method. This authentic lineage, known for preserving Joseph Pilates' original teachings, deeply resonates with Yeonju's commitment to precision, control, and fluid movement. She firmly believes in its power to help clients cultivate profound core stability, achieve balanced posture, and develop graceful, efficient movement patterns.
								<br><br>
								With a background enriched by years of swimming and contemporary dance, Yeonju has always possessed a keen interest in the intricate harmony between strength and flexibility. After relocating to Australia and raising four children, she personally experienced significant physical changes that profoundly heightened her awareness of optimal posture and crucial spinal health. To further complement her Classical Pilates expertise, Yeonju also pursued studies in SNPE (Self-Natural Posture Exercise), a specialised posture-correction program focusing intently on alignment and spinal balance.
								<br><br>
								Yeonju is committed to continuous professional growth, consistently expanding her expertise by studying diverse body types, ages, and professions. Through her compassionate, structured, and mindful teaching approach, she expertly guides clients to restore their natural alignment, build profound strength, and ultimately experience the transformative and lasting benefits of authentic Romana’s Pilates.
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