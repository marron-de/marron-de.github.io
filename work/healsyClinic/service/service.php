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


	<div class="wrap service_wrap">

		<?php include "../header.php" ?>

		<?php include "../navbox.php" ?>

		<!-- container -->
		<div class="container">
			<section class="section ss1">
				<div class="sub_titbox inner">
					<p class="sub_title">Service.</p>
				</div>
				<div class="swiper tab_navbox tabs_swiper service_nav" data-index="0">
					<div class="swiper-wrapper">
						<div class="swiper-slide tab_nav" data-tab="1">
							<span class="link" data-text="Physiotherapy">
								Physiotherapy
							</span>
						</div>
						<div class="swiper-slide tab_nav" data-tab="2">
							<span class="link" data-text="Podiatry">
								Podiatry
							</span>
						</div>
						<div class="swiper-slide tab_nav" data-tab="3">
							<span class="link" data-text="Strengthening & Conditioning">
								Strengthening & Conditioning
							</span>
						</div>
						<div class="swiper-slide tab_nav" data-tab="4">
							<span class="link" data-text="Clinical Pilates">
								Clinical Pilates
							</span>
						</div>
						<div class="swiper-slide tab_nav" data-tab="5">
							<span class="link" data-text="Sports / Remedial Massage">
								Sports / Remedial Massage
							</span>
						</div>
						<div class="swiper-slide tab_nav" data-tab="6">
							<span class="link" data-text="Custom Orthotics">
								Custom Orthotics
							</span>
						</div>
						<div class="swiper-slide tab_nav" data-tab="7">
							<span class="link" data-text="Taping / AirCast Boots / Bracing">
								Taping / AirCast Boots / Bracing
							</span>
						</div>
						<div class="swiper-slide tab_nav" data-tab="8">
							<span class="link" data-text="EMS / ESWT / High Power Laser">
								EMS / ESWT / High Power Laser
							</span>
						</div>
						<div class="swiper-slide tab_nav" data-tab="9">
							<span class="link" data-text="NDIS / Workcover / DVA / CTP">
								NDIS / Workcover / DVA / CTP
							</span>
						</div>
					</div>
				</div>
				<div class="inner service_contents">
					<div class="service_content service_content1">
						<?php include "service_content1.php" ?>
					</div>
					<div class="service_content service_content2">
						<?php include "service_content2.php" ?>
					</div>
					<div class="service_content service_content3">
						<?php include "service_content3.php" ?>
					</div>
					<div class="service_content service_content4">
						<?php include "service_content4.php" ?>
					</div>
					<div class="service_content service_content5">
						<?php include "service_content5.php" ?>
					</div>
					<div class="service_content service_content6">
						<?php include "service_content6.php" ?>
					</div>
					<div class="service_content service_content7">
						<?php include "service_content7.php" ?>
					</div>
					<div class="service_content service_content8">
						<?php include "service_content8.php" ?>
					</div>
					<div class="service_content service_content9">
						<?php include "service_content9.php" ?>
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
			$('.nav_box .nav > li').eq(2).addClass('active');
		});
	</script>




</body>

</html>