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
							<p class="tit">Tony Choo</p>
							<p class="desc">
								Co-Founder <br>
								Principal Podiatrist 
							</p>
							<button type="button" class="button">
								<img src="../img/ico_calendar.png" alt="" class="icon">
								<span class="txt">BOOK NOW</span>
							</button>
						</div>
						<div class="imgbox">
							<img src="../img/teamDetail_img.png" alt="" class="img">
						</div>
					</div>
					<div class="contbox">
						<div class="contitem">
							<p class="tit">A&nbsp; self-introduction</p>
							<p class="desc lt2">
								Tony is a warm, enthusiastic podiatrist dedicated to delivering evidence-based, patient-centered care. He is highly focused on improving mobility, comfort, and confidence for his patients. He takes time to understand each person’s goals, tailoring practical treatment plans that fit into their everyday lives.
								<br><br>
								His primary clinical focus is lower-limb biomechanics and orthotic therapy. Tony performs comprehensive assessments of gait, foot alignment, and function, then develops individualised treatment plans. These often include customised orthoses aimed at improving alignment, enhancing function, and relieving pain associated with conditions ranging from sports injuries to persistent heel, forefoot, or knee pain. He emphasises root-cause analysis and provides clear, jargon-free explanations so patients fully understand why a treatment is recommended.
								<br><br>
								Tony also holds a strong interest in paediatric foot development. He enjoys working with children, supporting young patients and their families with gentle, evidence-informed care for concerns like flat feet, growth monitoring, and activity-related discomfort.
								<br><br>
								Committed to continuous learning and professional development, Tony continually updates his knowledge and skills to provide best-practice care. His ultimate goal is to help each patient move more comfortably and confidently, enabling them to return to the activities they value.
							</p>
						</div>
						<div class="contitem">
							<p class="tit">Licenses & Certifications</p>
							<div class="descbox">
								<p class="desc dot">Bachelor of Podiatry, MAPodA</p>
							</div>
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