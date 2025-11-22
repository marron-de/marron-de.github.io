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
							<p class="tit">Brian Park</p>
							<p class="desc">
								Co-Founder <br>
								Director <br>
								Principal Physiotherapist
							</p>
							<p class="certi">
								APA Titled Sports and Exercise Physiotherapist, MACP, APAM
								<br>
								Master of Sports and Exercise Physiotherapy
								<br>
								Bachelor of Applied Science (Phtsiotherapy)
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
								As Practice Principal, Brian is a member of the Australian College of Physiotherapists, the Australian Physiotherapy Association, and the Sports Physiotherapy Association. He holds an undergraduate physiotherapy degree from the University of Sydney and further honed his expertise by completing the rigorous Master of Physiotherapy program at La Trobe University, which provided a comprehensive grounding in sports and exercise physiotherapy. Through this advanced training, Brian earned the esteemed title of APA Sports & Exercise Physiotherapist. This qualification is signifying a recognised mark of distinction within the physiotherapy profession.
								<br><br>
								Brian is a modern physiotherapist dedicated to empowering patients with the tools for effective, long-term symptom management through up-to-date evidence-based practice. He possesses a vast range of clinical experience, working with private patients and providing strengthening, conditioning, and management for elite sports teams and athletes, successfully guiding them back to ultimate performance. With expertise in biomechanical analysis and a comprehensive understanding of underlying pathophysiology, he crafts tailored self-management strategies designed to help individuals confidently navigate and overcome recurrent issues, delivering high-quality care.
								<br><br>
								Brian is passionate about providing personalised guidance and reassurance, meticulously working with his clientele to ensure a safe and successful return to their sport and daily activities, aligning with their unique performance goals and lifestyle needs. Drawing from significant experience, including his role as a senior physiotherapist with renowned neurosurgeon Professor Owler's team, Brian also possesses a special interest and advanced expertise in managing complex and serious spine-related pathologies.
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