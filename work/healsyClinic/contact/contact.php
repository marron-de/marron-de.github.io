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


	<div class="wrap contact_wrap">

		<?php include "../header.php" ?>

		<?php include "../navbox.php" ?>

		<!-- container -->
		<div class="container">
			<section class="section ss1">
				<div class="inner">
					<div class="sub_titbox">
						<p class="sub_title">Contact Us.</p>
					</div>
					<form action="" class="form">
						<div class="form_box">
							<div class="leftbox">
								<div class="input_box">
									<label class="label_text">Name</label>
									<input type="text" class="input_text" placeholder="Please enter your name.">
								</div>
								<div class="input_box">
									<label class="label_text">Email</label>
									<input type="text" class="input_text" placeholder="Please enter your email.">
								</div>
								<div class="input_box">
									<label class="label_text">Telephone</label>
									<input type="text" class="input_text" placeholder="+1234567890" value="+1234567890">
								</div>
							</div>
							<div class="rightbox">
								<div class="input_box ver2">
									<label class="label_text">Message</label>
									<textarea class="input_text" placeholder="Please enter your message."></textarea>
								</div>
							</div>
						</div>
						<div class="form_btnbox">
							<button type="button" class="button">Submit</button>
						</div>
					</form>
				</div>
			</section>
		</div>

		<?php include "../footer.php" ?>

	</div>



	<!-- JS -->
	<script src="../js/common.js"></script>
	<script>
  		 $(function() {
			$('.nav_box .nav > li').eq(6).addClass('active');
		});
	</script>




</body>

</html>