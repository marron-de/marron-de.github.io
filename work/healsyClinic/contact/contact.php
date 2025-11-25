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
						<p class="sub_title">Contact Us</p>
					</div>
					<form id="frmSendMailForm" name="frmSendMailForm" target="ifrmProcess" action="/mail/send_mail.php" method="post">
						<div class="form_box">
							<div class="leftbox">
								<div class="input_box">
									<label class="label_text">Name</label>
									<input type="text" class="input_text" name="cs_name" placeholder="Please enter your name">
								</div>
								<div class="input_box">
									<label class="label_text">Email</label>
									<input type="text" class="input_text" name="cs_email" placeholder="Please enter your email">
								</div>
								<div class="input_box">
									<label class="label_text">Telephone</label>
									<input type="text" class="input_text" name="cs_phoneNumber" placeholder="Please enter your contact number">
								</div>
							</div>
							<div class="rightbox">
								<div class="input_box ver2">
									<div class="label_box">
										<label class="label_text">How Can We Help?</label>
										<p class="label_desc">Send Us Your Inquiry</p>
									</div>
									<textarea class="input_text" name="cs_message" placeholder="Please enter your message"></textarea>
								</div>
							</div>
						</div>
						<p class="recaptcha-notice">
							This site is protected by reCAPTCHA and the Google
							<a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
							and
							<a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">Terms of Service</a>
							apply.
						</p>

						<!-- reCAPTCHA v3 hidden field -->
						<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

						<div class="form_btnbox">
							<button type="submit" class="button" id="submitBtn">
								<span class="btn-spinner" aria-hidden="true"></span>
								<span class="btn-label">Submit</span>
							</button>
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

	<script src="https://www.google.com/recaptcha/enterprise.js?render=6Le4chMsAAAAAIPA3uk1d577uu-Tmi71vzToPXoO"></script>
	<script src="../js/mail.js"></script>


</body>

</html>