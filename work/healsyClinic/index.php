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
					<a href="/index.php">
						<img src="img/logo_w.png" alt="" class="logo logo_w" />
						<img src="img/logo_b.png" alt="" class="logo logo_b" />
					</a>
				</div>
				<div class="h_navbox">
					<div class="h_side">
						<a href="/booking/booking.php" class="side_btn">Appointments</a>
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
						<video id="ms1_video" class="video" src="video/Healsy_Store_V1_v2.mp4" loop muted autoplay playsinline data-autoplay></video>
					</div>
					<div class="txtbox inner full move" data-aos="fade-left" data-aos-duration="500" aos-anchor>
						<p class="tit">Tailored Orthotic Solutions</p>
						<p class="tit2">for Everyday Wellness</p>
						<p class="desc">
							Step into a Healthier Life <br>
							Personalised Foot Care, <br class="tablet">
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
													<a href="ourTeam/ourTeamDetail_1.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Brian Park</p>
															<p class="desc">Physiotherapist</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_2.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">John Yo Han, Sung</p>
															<p class="desc">Physiotherapist</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_3.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Tony Choo</p>
															<p class="desc">Podiatrist</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_4.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Jacky Liu</p>
															<p class="desc">Podiatrist</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_5.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Jonathan Phlek Duch</p>
															<p class="desc">Exercise Physiologist</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_6.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Minnie Edwards</p>
															<p class="desc">Clinical Pilates Instructor</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_7.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">YeonJu, Park</p>
															<p class="desc">Clinical Pilates Instructor</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_8.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Joy Lee</p>
															<p class="desc">Administrative Staff</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_9.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Erin Mcgiffen</p>
															<p class="desc">Administrative Staff</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_10.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Marisa Carnevale</p>
															<p class="desc">Administrative Staff</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_11.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Kacey Shin</p>
															<p class="desc">Retail Assistant</p>
														</div>
													</a>
													<a href="ourTeam/ourTeamDetail_12.php" class="swiper-slide item">
														<div class="imgbox">
															<img src="img/ms3_1_thum2.png" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">Ciara Lawne</p>
															<p class="desc">Retail Assistant</p>
														</div>
													</a>
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
													<a href="service/service.php?tab=1" class="link">
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
													<a href="service/service.php?tab=2" class="link">
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
													<a href="service/service.php?tab=3" class="link">
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
													<a href="service/service.php?tab=4" class="link">
														<div class="imgbox">
															<img src="img/ms3_2_thum4.jpg" alt="" class="img">
														</div>
														<div class="txtbox">
															<p class="tit">
																<span class="txt">Clinical Pilates</span>
																<span class="icon"></span>
															</p>
															<p class="desc">
																Expert-guided Clinical Pilates offers transformative benefits: enhancing core stability, flexibility, posture, and body awareness for rehabilitation and injury prevention.
															</p>
														</div>
													</a>
												</div>
												<div class="swiper-slide item item5">
													<a href="service/service.php?tab=5" class="link">
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
													<a href="service/service.php?tab=6" class="link">
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
													<a href="service/service.php?tab=7" class="link">
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
													<a href="service/service.php?tab=8" class="link">
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
													<a href="service/service.php?tab=9" class="link">
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
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum5.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum6.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum7.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum8.jpg" alt="" class="img">
													</div>
												</div>
												<div class="swiper-slide item">
													<div class="imgbox">
														<img src="img/ms3_3_thum9.jpg" alt="" class="img">
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

				<!--
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
				-->

				<section class="section main_section ms5" id="section4">
					<div class="m_contbox contbox inner">
						<div class="cont_left">
							<div class="titbox">
								<p class="m_txt2">Healsy Physio & Podiatry Clinic</p>
							</div>
							<div class="mapbox">
								<!-- <img src="img/map_img.png" alt="" class="map"> -->
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6636.617460488626!2d150.986634!3d-33.726832!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a1bcf0bdbe8d%3A0xa2c33fd3c9776b5e!2sShop%2023%2F15%20De%20Clambe%20Dr%2C%20Castle%20Hill%20NSW%202154%2C%20Australia!5e0!3m2!1sen!2skr!4v1762837092604!5m2!1sen!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
							</div>
							<div class="infobox">
								<p class="address">Shop 23, 15 De Clambe Drive Castle Hill NSW 2154
								</p>
								<p class="time">Monday to Friday: 7:30am - 8pm l Saturday : 9am - 5pm l Sunday: Closed</p>
								<div class="descbox">
									<div class="descitem">
										<span class="tit">E-mail</span>
										<span class="desc">info@healsyclinic.com.au</span>
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
							<form id="frmSendMailForm" name="frmSendMailForm" target="ifrmProcess" action="/mail/send_mail.php" method="post">
								<div class="form_box">
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
									<div class="input_box ver2">
										<div class="label_box">
											<label class="label_text">How Can We Help?</label>
											<p class="label_desc">Send Us Your Inquiry</p>
										</div>
										<textarea class="input_text" name="cs_message" placeholder="Please enter your message"></textarea>
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
					
					<!-- footer -->
					<footer class="footer" id="footer">
						<div class="inner f_inner">
							<div class="f_left">
								<div class="f_logo">
									<img src="/img/logo_b.png" alt="">
								</div>
								<div class="f_info">
									<p class="info_top">
										Shop 23, 15 De Clambe Drive Castle Hill NSW 2154
									</p>
									<div class="info_bottom">
										<div class="item">
											<span class="tit">E-mail.</span>
											<span class="desc">info@healsyclinic.com.au</span>
										</div>
										<div class="item">
											<span class="tit">Tel.</span>
											<span class="desc">(+61) 02 9159 3977</span>
										</div>
									</div>
								</div>
								<div class="f_nav">
									<li><a class="link privacy_btn">Privacy Policy</a></li>
								</div>
							</div>
							<div class="f_right">
								<p class="f_copyright">
									<img src="/img/copy_logo.png" alt="" class="logo">
									<span class="txtarea">
										<span class="txt">WALTER WALKER AU No.1 Pty Limited @ 2025.</span>
										<span class="txt">All right reserved.</span>
									</span>
								</p>
							</div>
						</div>
					</footer>
				</section>
			</div>
		</div>

		<!-- Privacy Policy -->
		<div class="modal" id="privacy_modal">
			<div class="modal_box contact_box">
				<div class="logobox">
					<img src="img/logo.png" alt="" class="logo">
				</div>
				<div class="txtbox">			
					<div class="tit_box">
						<button type="button" class="close_btn modal_close"></button>
						<p class="form_tit">Privacy policy</p>
					</div>
					<div class="contbox">
						<div class="item">
							<p class="tit">At Healsy Physiotherapy and Podiatry Clinic</p>
							<p class="desc">
								we are committed to protecting your privacy. This policy outlines how we collect, use, store, and disclose your personal information in accordance with the Australian Privacy Principles.
							</p>
						</div>
						<div class="item">
							<p class="tit">INFORMATION WE COLLECT</p>
							<div class="descwrap">
								<p class="desc">
									When you visit our website, interact with our staff, utilise our software, or use our products and services, we may collect the following personal information ("Personal Data")
								</p>
								<div class="descbox">
									<p class="txt">Full name</p>
									<p class="txt">Company name</p>
									<p class="txt">Occupation</p>
									<p class="txt">EE-mailaddress</p>
									<p class="txt">Phone number</p>
									<p class="txt">Payment details</p>
									<p class="txt">Billing address</p>
									<p class="txt">Geographic location</p>
									<p class="txt">IP address</p>
									<p class="txt">Survey responses, reviews and testimonials</p>
								</div>	
							</div>			
							<div class="descwrap">
								<p class="desc">
									We may also collect information in relation to your Patients including
								</p>
								<div class="descbox">
									<p class="txt">Names</p>
									<p class="txt">Gender</p>
									<p class="txt">Date of Birth</p>
									<p class="txt">Medical Scans results</p>
									<p class="txt">Reviews and testimonials</p>
								</div>			
								<p class="desc">
									You can access or amend your Personal Data by logging into your account or contacting us directly. <br>
									Please note that any information you publish on our website (e.g. blog comments or testimonials) may be publicly accessible. Even if you delete this content, cached versions may still be viewable elsewhere.
								</p>
							</div>	
						</div>
						<div class="item">
							<p class="tit">USE OF YOUR INFORMATION</p>
							<div class="descwrap">
								<p class="desc">
									We use your Personal Data to
								</p>
								<div class="descbox">
									<p class="txt">Provide and deliver our products and services</p>
									<p class="txt">Process payments</p>
									<p class="txt">Communicate with you</p>
									<p class="txt">Send updates, offers, and service notifications</p>
									<p class="txt">Gather feedback and measure customer satisfaction</p>
									<p class="txt">Personalise your website experience</p>
								</div>
								<p class="desc">
									You will only receive marketing communications if you have opted in. You can unsubscribe at any time via the link in our emails or by contacting us.
								</p>
							</div>
							<div class="descwrap">
								<p class="desc">
									Our website also uses digital identifiers such as cookies to enhance your browsing experience by
								</p>
								<div class="descbox">
									<p class="txt">Analysing website traffic and usage</p>
									<p class="txt">Enable social media sharing features</p>
									<p class="txt">Provide targeted advertising through third-party platforms</p>
								</div>
								<p class="desc">
									Most browsers accept cookies automatically, but you can disable them via your browser settings. Doing so may limit some functionality of our website.
								</p>
							</div>
							<div class="descwrap">
								<p class="desc">
									We may use anonymised and aggregated data (non-personally identifiable information) to
								</p>
								<div class="descbox">
									<p class="txt">Improve our services and website functionality</p>
									<p class="txt">Analyse customer behaviour and website usage</p>
									<p class="txt">Serve targeted advertisements via platforms such as Google Ads and Facebook</p>
								</div>
							</div>
						</div>
						<div class="item">
							<p class="tit">STORAGE AND SECURITY OF DATA</p>
							<p class="desc">
								We take reasonable steps to protect your Personal Data from loss, misuse, unauthorised access, or disclosure via the following protocols.
							</p>
							<div class="descbox">
								<p class="txt">All data is stored securely on our protected servers.</p>
								<p class="txt">Personal data stored in paper records at our company will be physically secured.</p>
								<p class="txt">We will not record any payment information. Credit card data is encrypted during transmission and is not stored on our systems.</p>
								<p class="txt">Personal Data may be stored or processed outside of Australia, but only in countries that provide adequate data protection.</p>
								<p class="txt">We retain Personal Data for only as long as necessary to provide services and comply with our legal obligations.</p>
								<p class="txt">If a data breach occurs and your information is affected, we will notify you in accordance with applicable laws.</p>
							</div>
						</div>
						<div class="item">
							<p class="tit">SHARING OF YOUR INFORMATION</p>
							<div class="descwrap">
								<p class="desc">
									We do not sell, trade, or rent your Personal Data to any third party. <br>
									Your information may be shared with third parties only when necessary to
								</p>
								<div class="descbox">
									<p class="txt">Fulfill purchases and process payments</p>
									<p class="txt">Provide technical and marketing support</p>
									<p class="txt">Deliver IT infrastructure and related services</p>
									<p class="txt">Comply with legal or regulatory requirements</p>
									<p class="txt">Protect our rights, property, or safety</p>
								</div>
								<p class="desc">
									Any third-party service providers we engage are required to uphold the same privacy standards outlined in this policy and are prohibited from using your data for any purpose other than providing services on our behalf.
								</p>
							</div>
						</div>
						<div class="item">
							<p class="tit">ACCESS TO PERSONAL INFORMATION</p>
							<p class="desc">
								If you ask us, we will give you access to the personal information we hold about you. We will always confirm your identity before giving access to your personal information. 
								However, there are circumstances under Australian privacy laws where we may not give you access to the personal information we hold about you. For example, we can’t give you access if it would unreasonably affect someone else’s privacy or if giving you access poses a serious threat to someone’s life, health or safety.
							</p>
						</div>
						<div class="item">
							<p class="tit">LEGAL DISCLOSURES</p>
							<p class="desc">
								We may disclose Personal Data if required by law or in connection with legal proceedings, regulatory investigations, or enforcement actions. <br>
								In the event of a business transfer (e.g. merger or sale), customer information may be transferred to the new owner under a confidentiality agreement.
							</p>
						</div>
						<div class="item">
							<p class="tit">EXTERNAL LINKS</p>
							<p class="desc">
								Our website may contain links to third-party websites for your convenience. We are not responsible for the privacy practices or content of external sites. We encourage you to review their privacy policies before providing any personal information.
							</p>
						</div>
						<div class="item">
							<p class="tit">CHANGE IN PRIVACY POLICY</p>
							<p class="desc">
								We may from time to time update our privacy policy to ensure remains current. If we decide to so, all updates will be effective immediately upon being published.
							</p>
						</div>
						<div class="item">
							<p class="tit">CONTACT US</p>
							<p class="desc">
								If you have any queries or concerns about our privacy policy or the use of your Personal Data, please contact us at contact@heasly.com.au 
							</p>
						</div>
					</div>
					<div class="btnbox">
						<button type="button" class="close_btn modal_close">CLOSE</button>
					</div>
				</div>
			</div>
		</div>

	</div>



	<!-- JS -->
	<script src="js/common.js"></script>
	<script src="js/main.js"></script>

	<script src="https://www.google.com/recaptcha/enterprise.js?render=6Le4chMsAAAAAIPA3uk1d577uu-Tmi71vzToPXoO"></script>
	<script src="js/mail.js"></script>

	<!-- Do not delete -->
	<?php
	$devIp = '61.82.158.881';
	$isDev = ($_SERVER['REMOTE_ADDR'] === $devIp);
	?>
	<iframe name="ifrmProcess" src="" style="width:100%; height:<?= $isDev ? '400' : '0' ?>px; display:<?= $isDev ? 'block' : 'none' ?>;" bgcolor="#000"></iframe>


	<script>
	</script>



</body>

</html>