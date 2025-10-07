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


	<div class="wrap about_wrap">

		<?php include "../header.php" ?>

		<?php include "../navbox.php" ?>

		<!-- container -->
		<div class="container">
			<section class="section ss1">
				<div class="inner">
					<div class="topbox">
						<div class="txtbox">
							<p class="sub_title">About.</p>
						</div>
						<div class="imgbox">
							<img src="../img/about_img.jpg" alt="" class="img pc">
							<img src="../img/about_img_mob.jpg" alt="" class="img tablet">
						</div>
					</div>
					<div class="contbox">
						<div class="item">
							<p class="tit">Healsy</p>
							<p class="sub">HEALSY : Proactive Care, personalised, and preventative healthcare</p>
							<p class="desc">
								Our approach is deeply rooted in the philosophy of Healthcare 3.0. This means we go beyond traditional care, committed to delivering advanced, high-quality healthcare by leveraging cutting-edge technology and data. Our mission is to genuinely empower individuals, providing them with the insights and tools needed to actively participate in optimising their own health and long-term well-being. We believe in a collaborative journey, where innovation meets personalised care to achieve exceptional outcomes.
							</p>
						</div>
						<div class="item">
							<p class="tit">Philosophy</p>
							<p class="sub">Beyond Injury Care <br class="tablet">
								 — Committed to Lasting Wellbeing</p>
							<p class="desc">
								Healsy is committed to delivering high-quality, tailored healthcare services that address not only injury-specific conditions but also the multifactorial aspects related to each client’s concerns. Our professional team brings extensive experience across various clinical domains and is dedicated to providing care informed by the latest evidence and best practice guidelines. As part of our clinical approach, we focus not only on immediate pain relief and functional recovery, but also on long-term outcomes. We take into account each client’s individual goals and lifestyle to help prevent recurrence and support sustained improvements—empowering them to enjoy their sports, work, and daily activities with confidence.
							</p>
						</div>
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