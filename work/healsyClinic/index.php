<!DOCTYPE html>
<html lang="en" style="scroll-behavior: unset;">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Healsy Clinic</title>

	<?php include "script.php" ?>

	<!-- fullpage.js -->
	<link rel="stylesheet" href="css/fullpage.css">
	<script src="js/fullpage.js"></script>


	<!-- hammer -->
	<script src="js/hammer.min.js"></script>

</head>

<body>


	<div class="wrap main_wrap">

		<!-- header -->
		<header class="header white" id="header">
			<div class="inner h_inner">
				<div class="h_logo">
					<a href="index.php">
						<img src="img/logo_w.png" alt="" class="logo logo_w" />
						<img src="img/logo_b.png" alt="" class="logo logo_b" />
					</a>
				</div>
				<div class="h_navbox">
					<div class="h_side">
						<a href="" class="side_btn">Appointments</a>
					</div>
				</div>
				<button type="button" class="menu_open"></button>
			</div>
		</header>

		<?php include "navbox.php" ?>

		<!-- container -->
		<div class="container">
			<div id="fullpage">
				<section class="section main_section ms1 move topArea" data-aos="fade" id="section0">
					<div class="vidbox">
						<video id="ms1_video" class="video" src="video/main_video.mp4" loop muted autoplay playsinline data-autoplay></video>
					</div>
					<div class="txtbox inner full move" data-aos="fade-left" data-aos-duration="500" aos-anchor>
						<p class="tit">Tailored Orthotic Solutions</p>
						<p class="tit2">for Everyday Wellness</p>
						<p class="desc">
							Step into a Healthier Life <br class="tablet">
							Personalised <br class="pc"> Foot Care, <br class="tablet">
							Right Where You Are
						</p>
					</div>
					<div class="anibox">
						<div class="dotbox move" data-aos="fade-out">
							<div class="dot"></div>
							<div class="dot"></div>
							<div class="dot"></div>
							<div class="dot"></div>
							<div class="dot"></div>

							<div class="dot"></div>
							<div class="dot"></div>
							<div class="dot"></div>
							<div class="dot"></div>
							<div class="dot"></div>

							<div class="dot"></div>
							<div class="dot"></div>
							<div class="dot"></div>
							<div class="dot"></div>
							<div class="dot"></div>

							<div class="dot tablet"></div>
							<div class="dot tablet"></div>
							<div class="dot tablet"></div>
							<div class="dot tablet"></div>
							<div class="dot tablet"></div>

							<div class="dot tablet"></div>
							<div class="dot tablet"></div>
							<div class="dot tablet"></div>
							<div class="dot tablet"></div>
							<div class="dot tablet"></div>
						</div>
						<div class="logobox move" data-aos="fade-out" data-aos-duration="500">
							<img src="img/logo.png" alt="" class="logo">
						</div>
					</div>
				</section>

				<section class="section main_section ms2 subContent" id="section1">
					<div class="m_contbox contbox">
						<div class="cont_left">
							<div class="bgbox">
								<img src="img/ms2_img1.jpg" alt="" class="bg pc">
								<img src="img/ms2_img1_mob.jpg" alt="" class="bg tablet">
							</div>
							<div class="txtbox">
								<p class="m_txt1">
									Integrated Care, <br class="pc">
									Backed by <br class="tablet"> Evidence <br class="pc">
									and Expertise
								</p>
							</div>
						</div>
						<div class="cont_right">
							<div class="txtbox">
								<p class="m_txt2">
									Healsy Physio & <br class="pc">
									Podiatry Clinic
								</p>
								<p class="m_txt3">
									Our approach is deeply rooted in the philosophy of Healthcare 3.0. This means we go beyond traditional care, committed to delivering advanced, high-quality healthcare by leveraging cutting-edge technology and data. Our mission is to genuinely empower individuals, providing them with the insights and tools needed to actively participate in optimising their own health and long-term well-being. We believe in a collaborative journey, where innovation meets personalised care to achieve exceptional outcomes.
								</p>
								<div class="more_btnbox">
									<a href="about/about.php" class="more_btn">
										<span class="txt">View More</span>
										<span class="icon"></span>
									</a>
								</div>
							</div>
							<div class="imgbox">
								<img src="img/ms2_img2.png" alt="" class="img">
							</div>
						</div>
					</div>
				</section>

				<section class="section main_section ms3" id="section2">
					<div class="swiper ms3_swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide main_section ms3_1">
								<div class="m_contbox contbox">
									<div class="cont_top">
										<div class="bgbox">
											<img src="img/ms3_top.jpg" alt="" class="bg pc">
											<img src="img/ms3_top_mob.jpg" alt="" class="bg tablet">
										</div>
										<div class="inner">
											<p class="m_txt1 pc">
												Supported by a Multidisciplinary Team <br> of Experts
											</p>
											<p class="m_txt1 tablet">
												Supported by a Multidisciplinary Team of Experts
											</p>
										</div>
									</div>
									<div class="cont_bottom">
										<div class="leftbox">
											<div class="txtbox">
												<p class="m_txt2">
													Skilled. Caring. Committed
												</p>
												<p class="m_txt3">
													Our dedicated clinicians and support staff work together to deliver personalised orthotic care tailored to your lifestyle. From your first visit to long-term care, we’re here to support every step you take.
												</p>
												<div class="more_btnbox pc">
													<a href="ourTeam/ourTeam.php" class="more_btn">
														<span class="txt">View More</span>
														<span class="icon"></span>
													</a>
												</div>
											</div>
											<div class="slide_controls pc">
												<div class="swiper-button-box swiper_btns">
													<div class="swiper-button-prev prev_btn"></div>
													<span class="btn_bar"></span>
													<div class="swiper-button-next next_btn"></div>
												</div>
												<!-- <div class="swiper-scrollbar scrollbar"></div>	 -->
    											<div class="swiper-pagination progressbar"></div>
											</div>
										</div>
										<div class="rightbox">
											<div class="swiper ms3_sec_swiper1">
												<div class="swiper-wrapper">
													<div class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Elizabeth Yang</p>
															<p class="desc">Physiotherapist & Director</p>
														</div>
													</div>
													<div class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Elizabeth Yang</p>
															<p class="desc">Physiotherapist & Director</p>
														</div>
													</div>
													<div class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Elizabeth Yang</p>
															<p class="desc">Physiotherapist & Director</p>
														</div>
													</div>
													<div class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Elizabeth Yang</p>
															<p class="desc">Physiotherapist & Director</p>
														</div>
													</div>
													<div class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Elizabeth Yang</p>
															<p class="desc">Physiotherapist & Director</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="leftbox tablet">
											<div class="slide_controls">
												<div class="swiper-button-box swiper_btns">
													<div class="swiper-button-prev prev_btn"></div>
													<span class="btn_bar"></span>
													<div class="swiper-button-next next_btn"></div>
												</div>
												<!-- <div class="swiper-scrollbar scrollbar"></div> -->
												<div class="swiper-pagination progressbar"></div>
											</div>
											<div class="more_btnbox">
												<a href="ourTeam/ourTeam.php" class="more_btn">
													<span class="txt">View More</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide main_section ms3_2">
								<div class="m_contbox contbox">
									<div class="cont_top inner">
										<div class="leftbox">
											<p class="m_txt2">
												Our Services <br>
												Expert Care Across Every Step
											</p>
										</div>
										<div class="rightbox">
											<p class="m_txt3">
												At our orthotic clinic, we take the time to truly understand your needs. With custom-fit solutions and evidence-based care, we help you move better, feel better, and live more comfortably — every step of the way.
											</p>
										</div>
									</div>
									<div class="cont_bottom inner">
										<div class="swiper ms3_sec_swiper2">
											<div class="swiper-wrapper">
												<div class="swiper-slide item item1">
													<a href="service/service.php" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum1.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">Physiotherapy</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																Expert physiotherapists offer personalised, evidence-based care to restore movement, reduce pain, and achieve your health goals, effectively managing injuries and chronic conditions.
															</p>
														</div>
													</a>
												</div>
												<div class="swiper-slide item item2">
													<a href="service/service.php" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum2.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">Podiatry</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																Experienced podiatrists provide specialised foot and lower limb care, from routine issues to complex biomechanical assessments, ensuring comfortable and confident movement.
															</p>
														</div>
													</a>
												</div>
												<div class="swiper-slide item item3">
													<a href="service/service.php" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum3.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">Strengthening & Conditioning</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																Tailored Strengthening & Conditioning programs enhance physical performance, resilience, and injury prevention by building strength, endurance, and optimising movement for all levels.
															</p>
														</div>
													</a>
												</div>
												<div class="swiper-slide item item4">
													<a href="service/service.php" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum4.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">Clinical Pilates</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																Expert-guided Clinical Pilates offers transformative benefits : enhancing core stability, flexibility, posture, and body awareness for rehabilitation and injury prevention.
															</p>
														</div>
													</a>
												</div>
												<div class="swiper-slide item item5">
													<a href="service/service.php" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum5.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">Sports / Remedial Massage</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																Targeted soft-tissue therapy to release tension and speed recovery. Helps manage training load, reduce soreness and enhance mobility.
															</p>
														</div>
													</a>
												</div>
												<div class="swiper-slide item item6">
													<a href="service/service.php" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum6.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">Custom Orthotics</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																Precision-crafted Custom Orthotics provide optimal foot alignment, support, comfort, and pain reduction, improving gait and posture for unique foot mechanics.
															</p>
														</div>
													</a>
												</div>
												<div class="swiper-slide item item7">
													<a href="service/service.php" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum7.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">Taping / AirCast Boots / Bracing</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																Our therapists expertly apply Taping, Airboots, and Bracing solutions for effective support, protection, enhanced stability, and safe return to activity.
															</p>
														</div>
													</a>
												</div>
												<div class="swiper-slide item item8">
													<a href="service8.php" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum8.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">EMS / ESWT / High Power Laser</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																Experience advanced relief with EMS, ESWT, and High Power Laser. These cutting-edge modalities accelerate healing, reduce pain, and effectively treat stubborn conditions.
															</p>
														</div>
													</a>
												</div>
												<div class="swiper-slide item item9">
													<a href="service/service.php" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum9.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">NDIS / Workcover / DVA / CTP</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																We proudly support clients through NDIS, WorkCover, DVA, and CTP funding, streamlining access to high-quality, deserving care.
															</p>
														</div>
													</a>
												</div>
											</div>
										</div>
										<div class="slide_controls">
											<div class="swiper-button-box swiper_btns">
												<div class="swiper-button-prev prev_btn"></div>
												<span class="btn_bar"></span>
												<div class="swiper-button-next next_btn"></div>
											</div>
											<div class="swiper-pagination progressbar"></div>
											<!-- <div class="swiper-scrollbar scrollbar"></div> -->
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide main_section ms3_3">
								<div class="m_contbox contbox">
									<div class="cont_top inner">
										<p class="m_txt2">
											Clinical Evidence & Expertise, <br>
											reflected in every space
										</p>
										<p class="m_txt3">
											We provide personalised orthotic care designed <br class="pc">
											to improve your mobility and comfort — helping 
											<br class="pc">
											you move better every day.
										</p>
										<div class="more_btnbox pc">
											<a href="location/location.php" class="more_btn">
												<span class="txt">View More</span>
												<span class="icon"></span>
											</a>
										</div>
									</div>
									<div class="cont_bottom">
										<div class="swiper ms3_sec_swiper3">
											<div class="swiper-wrapper">
												
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum5.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum1.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum2.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum3.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum4.jpg" alt="" class="img">
													</div>
												</div>

												<!-- swiper loop : 복제 슬라이드 추가 -->
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum5.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum1.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum2.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum3.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum4.jpg" alt="" class="img">
													</div>
												</div>
											</div>
										</div>
										<div class="more_btnbox tablet">
											<a href="location/location.php" class="more_btn">
												<span class="txt">View More</span>
												<span class="icon"></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section main_section ms4" id="section3">
					<div class="m_contbox inner">
						<div class="titbox">
							<a href="news/news.php" class="titlink m_txt2">
								<span class="txt">News</span>
								<span class="arrow"></span>
							</a>
						</div>
						<div class="contbox">
							<div class="item">
								<a href="news/newsDetail.php" class="link">
									<p class="tit">We’re Now Open on Saturdays</p>
									<p class="date">25.06.27</p>
									<p class="desc">
										We’re excited to announce that Healsy Orthotic Clinic is now open on Saturdays for your convenience. Book your weekend appointments today and take a step closer to better foot health. We’re excited to announce that Healsy Orthotic Clinic
									</p>
								</a>
							</div>
							<div class="item">
								<a href="news/newsDetail.php" class="link">
									<p class="tit">We’re Now Open on Saturdays</p>
									<p class="date">25.06.27</p>
									<p class="desc">
										We’re excited to announce that Healsy Orthotic Clinic is now open on Saturdays for your convenience. Book your weekend appointments today and take a step closer to better foot health. We’re excited to announce that Healsy Orthotic Clinic
									</p>
								</a>
							</div>
							<div class="item">
								<a href="news/newsDetail.php" class="link">
									<p class="tit">We’re Now Open on Saturdays</p>
									<p class="date">25.06.27</p>
									<p class="desc">
										We’re excited to announce that Healsy Orthotic Clinic is now open on Saturdays for your convenience. Book your weekend appointments today and take a step closer to better foot health. We’re excited to announce that Healsy Orthotic Clinic
									</p>
								</a>
							</div>
							<div class="item">
								<a href="news/newsDetail.php" class="link">
									<p class="tit">We’re Now Open on Saturdays</p>
									<p class="date">25.06.27</p>
									<p class="desc">
										We’re excited to announce that Healsy Orthotic Clinic is now open on Saturdays for your convenience. Book your weekend appointments today and take a step closer to better foot health. We’re excited to announce that Healsy Orthotic Clinic
									</p>
								</a>
							</div>
							<div class="item">
								<a href="news/newsDetail.php" class="link">
									<p class="tit">We’re Now Open on Saturdays</p>
									<p class="date">25.06.27</p>
									<p class="desc">
										We’re excited to announce that Healsy Orthotic Clinic is now open on Saturdays for your convenience. Book your weekend appointments today and take a step closer to better foot health. We’re excited to announce that Healsy Orthotic Clinic
									</p>
								</a>
							</div>
							<div class="item">
								<a href="news/newsDetail.php" class="link">
									<p class="tit">We’re Now Open on Saturdays</p>
									<p class="date">25.06.27</p>
									<p class="desc">
										We’re excited to announce that Healsy Orthotic Clinic is now open on Saturdays for your convenience. Book your weekend appointments today and take a step closer to better foot health. We’re excited to announce that Healsy Orthotic Clinic
									</p>
								</a>
							</div>
						</div>
					</div>
				</section>

				<section class="section main_section ms5" id="section4">
					<div class="m_contbox contbox inner">
						<div class="cont_left">
							<div class="titbox">
								<p class="m_txt2">Healsy Physio & Podiatry Clinic</p>
							</div>
							<div class="mapbox">
								<!-- <img src="img/map_img.png" alt="" class="map"> -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.3087390101623!2d150.98405907570262!3d-33.72683177328124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a1bcf0bdbe8d%3A0xa2c33fd3c9776b5e!2zU2hvcCAyMy8xNSBEZSBDbGFtYmUgRHIsIENhc3RsZSBIaWxsIE5TVyAyMTU0IOyYpOyKpO2KuOugiOydvOumrOyVhA!5e0!3m2!1sko!2skr!4v1759156742485!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
							</div>
							<div class="infobox">
								<p class="address">Shop 23, 15 De Clambe Drive Castle Hill NSW 2154
								</p>
								<p class="time">Monday to Friday: 7:30am – 8pm l Saturday : 9am – 3pm l Sunday: Closed</p>
								<div class="descbox">
									<div class="descitem">
										<span class="tit">Email</span>
										<span class="desc">contact@healsyclinic.com.au</span>
									</div>
									<div class="descitem">
										<span class="tit">Tel</span>
										<span class="desc">(+61) 02 9159 3977</span>
									</div>
								</div>
							</div>
						</div>
						<div class="cont_right">
							<div class="titbox">
								<p class="m_txt2">Contact Us</p>
							</div>
							<form action="" class="form">
								<div class="form_box">
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
									<div class="input_box ver2">
										<label class="label_text">Message</label>
										<textarea class="input_text" placeholder="Please enter your message."></textarea>
									</div>
								</div>
								<div class="form_btnbox">
									<button type="button" class="form_submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</section>

				<section class="section main_section ms6 fp-auto-height" id="section5">		
					<!-- data-reverse="true" -->
					<div class="marquee" data-duration="1.5">
						<div class="marquee_group">
							<div class="item">
								<img src="img/logo_b.png" alt="" class="img">
							</div>
							<div class="item">
								<img src="img/sample_logo1.png" alt="" class="img">
							</div>
							<div class="item">
								<img src="img/sample_logo2.png" alt="" class="img">
							</div>
							<div class="item">
								<img src="img/sample_logo4.png" alt="" class="img">
							</div>
							<div class="item">
								<img src="img/sample_logo5.png" alt="" class="img">
							</div>
						</div>
					</div>			
					<?php include "footer.php" ?>
				</section>
			</div>
		</div>

	</div>



	<!-- JS -->
	<script src="js/common.js"></script>
	<script src="js/main.js"></script>


	<script>
	</script>



</body>

</html>