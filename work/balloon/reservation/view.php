<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>벌룬어드벤처코리아</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap reservation_wrap">     


    	<?php include $path."common/header.php" ?>

    	<?php include $path."common/fixed_nav.php" ?>

    	<?php include $path."common/navbox.php" ?>


		<!-- container -->
		<div class="container">
			
			<section class="sub_section pr_sec view">
				<div class="inner view_gallery">
					<div class="gallbox box1">
						<div class="gallitem">
							<img src="<?php echo $path?>img/prd_view_pic1.jpg" alt="" class="img">
							<button type="button" class="gallview_btn" onclick="gallery_popup()">
								<img src="<?php echo $path ?>img/ic_pic_w.png" alt="" class="icon">
								<span class="txt">전체보기</span>
								<span class="count">1/24</span>
							</button>
						</div>
					</div>
					<div class="gallbox box2">
						<div class="gallitem">
							<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
						</div>
						<div class="gallitem">
							<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
						</div>
						<div class="gallitem">
							<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
						</div>
						<div class="gallitem">
							<img src="<?php echo $path ?>img/prd_view_pic5.jpg" alt="" class="img">
						</div>
					</div>
				</div>

				<div class="inner2 layout">
					<div class="cont_area">
						<div class="view_top">		
							<div class="titbox">
								<p class="tit">부여 열기구 자유여행 탑승권</p>
								<p class="desc">
									베테랑 파일럿과 함께하는 안전하고 즐거운 비행! 기념사진 촬영도 하고 각종 이벤트 진행도 가능합니다!
								</p>
								<div class="badgebox">
									<span class="badge typeB">NEW</span>
									<span class="badge typeC">HOT</span>
									<span class="badge typeD">BEST</span>
									<span class="badge typeE">TICKET</span>
								</div>
								<div class="detailbox">
									<div class="de_item">
										<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
										<span class="txt">
											<span class="bold">4.3</span>/5
										</span>
									</div>
									<div class="de_item">
										<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
										<span class="txt">
											<span class="bold">13,463</span>개의 후기
										</span>
									</div>
									<div class="sns_box">
										<button type="button" class="sns_btn share_btn"></button>
										<a href="#Map" type="button" class="sns_btn map_btn"></a>
									</div>
								</div>
							</div>
							<div class="infobox">
								<div class="infoitem">
									<p class="tit">상품종류</p>
									<p class="desc">자유비행</p>
								</div>
								<div class="infoitem">
									<p class="tit">주의사항</p>
									<p class="desc">예약후 현장으로 전화 필수!</p>
								</div>
								<div class="infoitem">
									<p class="tit">교환 장소</p>
									<p class="desc">부여군 부여읍 구교리 금강 둔치 일원</p>
								</div>
								<div class="infoitem">
									<p class="tit">사용기간</p>
									<p class="desc">지정한 날짜에 사용가능</p>
								</div>
								<div class="infoitem">
									<p class="tit">소요시간</p>
									<p class="desc">1시간</p>
								</div>
								<div class="infoitem">
									<p class="tit">판매가</p>
									<p class="desc">120,000원 부터</p>
								</div>
							</div>
							<div class="keybox">
								<p class="tit">
									<span class="txt">KEY POINTS</span>
									<img src="<?php echo $path ?>img/ic_twinkle.png" alt="" class="icon">
								</p>
								<p class="desc">
									온라인으로 상품을 구매하시면 카카오 알림톡을 통해 바코드가 발송됩니다. <br>
									현장에 도착하신 후 바코드를 제시해주시면 체험이 진행됩니다. <br>
									전체 체험 소요시간은 약 2~3시간이며, 실제 열기구 비행 시간은 약 30분에서 1시간 정도입니다.
								</p>
							</div>
						</div>
						<div class="view_content">
							<div class="tab_navbox">
								<div class="tab_nav on">
									<a href="#Options" class="link">예약</a>
								</div>
								<div class="tab_nav">
									<a href="#Detail" class="link">소개</a>
								</div>
								<div class="tab_nav">
									<a href="#Policy" class="link">취소/환불</a>
								</div>
								<div class="tab_nav">
									<a href="#Map" class="link">위치</a>
								</div>
								<div class="tab_nav">
									<a href="#Review" class="link">리뷰</a>
								</div>
							</div>
							<div class="view_contbox">								
								<section id="Options" class="vc_sec vc_sec_option">
									<div class="vc_box vc_box1">
										<div class="weather_box">
											<div class="datebox">
												<p class="desc">2026.01</p>
												<p class="tit">16일(금)</p>
											</div>
											<div class="swiper week_swiper weekbox">
												<div class="swiper-wrapper">
													<div class="swiper-slide item">
														<p class="day">Mon</p>
														<div class="icon">
															<img src="<?php echo $path ?>img/weather_icon1.png" alt="" class="img">
														</div>
														<p class="rain">30%</p>
														<p class="wind">
															<span class="icon" style="transform: rotate(-45deg);"></span>
															<span class="txt">강</span>
														</p>
													</div>
													<div class="swiper-slide item">
														<p class="day">Tue</p>
														<div class="icon">
															<img src="<?php echo $path ?>img/weather_icon5.png" alt="" class="img">
														</div>
														<p class="rain">30%</p>
														<p class="wind">
															<span class="icon" style="transform: rotate(-90deg);"></span>
															<span class="txt">약</span>
														</p>
													</div>
													<div class="swiper-slide item">
														<p class="day">Wed</p>
														<div class="icon">
															<img src="<?php echo $path ?>img/weather_icon3.png" alt="" class="img">
														</div>
														<p class="rain">20%</p>
														<p class="wind">
															<span class="icon" style="transform: rotate(-90deg);"></span>
															<span class="txt">약</span>
														</p>
													</div>
													<div class="swiper-slide item">
														<p class="day">Thu</p>
														<div class="icon">
															<img src="<?php echo $path ?>img/weather_icon6.png" alt="" class="img">
														</div>
														<p class="rain">50%</p>
														<p class="wind">
															<span class="icon" style="transform: rotate(-90deg);"></span>
															<span class="txt">약간 강</span>
														</p>
													</div>
													<div class="swiper-slide item on">
														<p class="day">Fri</p>
														<div class="icon">
															<img src="<?php echo $path ?>img/weather_icon8.png" alt="" class="img">
														</div>
														<p class="rain">70%</p>
														<p class="wind">
															<span class="icon" style="transform: rotate(-45deg);"></span>
															<span class="txt">약간 강</span>
														</p>
													</div>
													<div class="swiper-slide item">
														<p class="day blue">Sat</p>
														<div class="icon">
															<img src="<?php echo $path ?>img/weather_icon9.png" alt="" class="img">
														</div>
														<p class="rain">20%</p>
														<p class="wind">
															<span class="icon" style="transform: rotate(-90deg);"></span>
															<span class="txt">강</span>
														</p>
													</div>
													<div class="swiper-slide item">
														<p class="day red">Sun</p>
														<div class="icon">
															<img src="<?php echo $path ?>img/weather_icon10.png" alt="" class="img">
														</div>
														<p class="rain">30%</p>
														<p class="wind">
															<span class="icon" style="transform: rotate(-45deg);"></span>
															<span class="txt">약</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="calender_wrap">
											<div class="calender ver2">
												<div class="cal_head">
													<button type="button" class="cal_btn prev"></button>
													<div class="cal_date">
														<select class="date_select">
															<option value="2020">2020년</option>
															<option value="2021">2021년</option>
															<option value="2022">2022년</option>
															<option value="2023">2023년</option>
															<option value="2024">2024년</option>
															<option value="2025">2025년</option>
															<option value="2026" selected>2026년</option>
															<option value="2027">2027년</option>
															<option value="2028">2028년</option>
															<option value="2029">2029년</option>
															<option value="2030">2030년</option>
														</select>
														<select class="date_select">
															<option value="1" selected>01월</option>
															<option value="2">02월</option>
															<option value="3">03월</option>
															<option value="4">04월</option>
															<option value="5">05월</option>
															<option value="6">06월</option>
															<option value="7">07월</option>
															<option value="8">08월</option>
															<option value="9">09월</option>
															<option value="10">10월</option>
															<option value="11">11월</option>
															<option value="12">12월</option>
														</select>
													</div>
													<button type="button" class="cal_btn next"></button>
												</div>
												<div class="cal_body">
													<div class="week_day">
														<div class="day red">S</div>
														<div class="day">M</div>
														<div class="day">T</div>
														<div class="day">W</div>
														<div class="day">T</div>
														<div class="day">F</div>
														<div class="day blue">S</div>
													</div>
													<div class="week_date">
														<div class="date red hide">
															<span class="num">28</span>
															<span class="price">12만원</span>
														</div>
														<div class="date hide">
															<span class="num">29</span>
															<span class="price">12만원</span>
														</div>
														<div class="date hide">
															<span class="num">30</span>
															<span class="price">12만원</span>
														</div>
														<div class="date hide">
															<span class="num">31</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">1</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">2</span>
															<span class="price">12만원</span>
														</div>
														<div class="date blue">
															<span class="num">3</span>
															<span class="price">12만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">4</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">5</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">6</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">7</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">8</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">9</span>
															<span class="price">12만원</span>
														</div>
														<div class="date blue">
															<span class="num">10</span>
															<span class="price">12만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">11</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">12</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">13</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">14</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">15</span>
															<span class="price">12만원</span>
														</div>
														<div class="date selected">
															<span class="num">16</span>
															<span class="price">12만원</span>
														</div>
														<div class="date blue">
															<span class="num">17</span>
															<span class="price">12만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">18</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">19</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">20</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">21</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">22</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">23</span>
															<span class="price">12만원</span>
														</div>
														<div class="date blue">
															<span class="num">24</span>
															<span class="price">12만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">25</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">26</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">27</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">28</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">29</span>
															<span class="price">12만원</span>
														</div>
														<div class="date">
															<span class="num">30</span>
															<span class="price">12만원</span>
														</div>
														<div class="date blue">
															<span class="num">31</span>
															<span class="price">12만원</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="radio_wrap">
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt1" class="input_radio prd_opt">
												<label for="prd_opt1" class="label_radio">1인 탑승권(주중 성인)</label>
											</div>
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt2" class="input_radio prd_opt">
												<label for="prd_opt2" class="label_radio">1인 탑승권(주중 소인)</label>
											</div>
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt3" class="input_radio prd_opt">
												<label for="prd_opt3" class="label_radio">1인 탑승권(주말 성인)</label>
											</div>
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt4" class="input_radio prd_opt">
												<label for="prd_opt4" class="label_radio">1인 탑승권(주말 소인)</label>
											</div>
										</div>
									</div>
								</section>
																
								<section id="Detail" class="vc_sec vc_sec_detail">
									<div class="vc_box vc_box1">
										<div class="vc_titbox">
											<p class="vc_title">소개</p>
										</div>
										<div class="vc_contbox">
											<div class="imgbox">
												<img src="<?php echo $path ?>img/deatil_img1.jpg" alt="">				
											</div>			
											<div class="view_morebox">
												<button type="button" class="view_more">
													<span class="txt">더보기</span>
													<span class="arrow"></span>
												</button>
											</div>	
										</div>	
									</div>

									<div class="vc_box vc_box2">
										<div class="vc_titbox">
											<p class="vc_title">일정안내</p>
										</div>
										<div class="vc_contbox">
											<div class="item">
												<div class="stepbox">
													<div class="dot"></div>
													<div class="line"></div>
												</div>
												<div class="contbox">
													<p class="title">일출 시간 이륙장 집결</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_map.png" alt="" class="icon">
															<a href="" class="txt" target="_blank">금강 둔치 일원</a>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															일출 시간에 맞춰 이륙장으로 모여 간단한 일정 안내와 안전 브리핑을 진행합니다.
														</p>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
												</div>
											</div>
											<div class="item">
												<div class="stepbox">
													<div class="dot"></div>
													<div class="line"></div>
												</div>
												<div class="contbox">
													<p class="title">인플레이션 체험</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_time.png" alt="" class="icon">
															<span class="txt">40분 소요</span>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															열기구에 뜨거운 공기를 주입하는 과정을 직접 보고 체험하며 비행 준비를 합니다.
														</p>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
												</div>
											</div>
											<div class="item">
												<div class="stepbox">
													<div class="dot"></div>
													<div class="line"></div>
												</div>
												<div class="contbox">
													<p class="title">자유비행</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_time.png" alt="" class="icon">
															<span class="txt">60분 소요</span>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															바람의 흐름을 따라 하늘을 나는 열기구 자유비행을 즐깁니다.
														</p>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
												</div>
											</div>
											<div class="item">
												<div class="stepbox">
													<div class="dot"></div>
													<div class="line"></div>
												</div>
												<div class="contbox">
													<p class="title">착륙</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_time.png" alt="" class="icon">
															<span class="txt">60분 소요</span>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															바람의 흐름을 따라 하늘을 나는 열기구 자유비행을 즐깁니다.
														</p>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
												</div>
											</div>
											<div class="item">
												<div class="stepbox">
													<div class="dot"></div>
													<div class="line"></div>
												</div>
												<div class="contbox">
													<p class="title">인증서 발급 및 기념 촬영</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_time.png" alt="" class="icon">
															<span class="txt">20분 소요</span>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															비행을 기념하는 인증서를 발급받고 기념사진 촬영으로 일정을 마무리합니다.
														</p>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
												</div>
											</div>
										</div>	
									</div>
								
									<div class="vc_box vc_box3">
										<div class="vc_titbox">
											<p class="vc_title">서비스 포함/불포함</p>
										</div>
										<div class="vc_contbox">
											<div class="item">
												<div class="titbox">
													<img src="<?php echo $path ?>img/ic_circle_icon1.png" alt="" class="icon">
													<p class="tit">서비스 포함</p>
												</div>
												<div class="descbox">
													<p class="dot_txt">
														전문 조종사 및 운영 스태프 동승
													</p>
													<p class="dot_txt">
														비행 전 안전 브리핑 및 인플레이션 체험
													</p>
													<p class="dot_txt">
														비행인증서 발급
													</p>
													<p class="dot_txt">
														기념촬영
													</p>
													<p class="dot_txt">
														탑승자 보험 가입
													</p>
												</div>
											</div>
											<div class="item">
												<div class="titbox">
													<img src="<?php echo $path ?>img/ic_circle_icon2.png" alt="" class="icon">
													<p class="tit">서비스 불포함</p>
												</div>
												<div class="descbox">
													<p class="dot_txt">
														개인 비용
													</p>
													<p class="dot_txt">
														개인 간식 및 음료
													</p>
													<p class="dot_txt">
														개인 촬영 장비 대여
													</p>
													<p class="dot_txt">
														기상 악화로 인한 일정 변경 시 발생하는 개인 비용
													</p>
												</div>
											</div>
										</div>									
									</div>
								</section>
								
								<section id="Policy" class="vc_sec vc_sec_policy">	
									<div class="vc_box vc_box1">
										<div class="vc_titbox">
											<p class="vc_title">취소/환불 규정</p>
										</div>
										<div class="vc_contbox">
											<p class="dot_txt">
												개인적인 사정으로 티켓&투어 예약 취소 시 <br>
												- 티켓 사용 <span class="bold">7일 전까지</span> 예약 취소 시 :<span class="bold"> 100% 환불</span> <br>
												- 티켓 사용 <span class="bold">6일 ~1일 전</span> 취소 시 : <span class="bold">50% 환불</span> <br>
												- <span class="bold">당일 취소 시 : 환불 불가!</span>
											</p>
											<p class="dot_txt">
												<span class="bold">기상악화로 인하여 체험이 불가능한 경우 100% 환불됩니다.</span>
											</p>
											<p class="dot_txt">
												<span class="bold">교통사고 및 교통 체증 등의 개인적 사유로 도착이 지연된 경우 환불이 불가능함을 양해바랍니다.</span>
											</p>
											<p class="dot_txt">
												사용 일자 변경은 티켓 사용일 3일 전까지만 가능하며, 변경 원하시는 날짜에 진행이 가능한경우만 가능합니다. <br>
												그 이후는 변경이 불가하므로 취소 및 환불 규정에 따른 취소로 처리되어 수수료가 발생됩니다.
											</p>
											<p class="dot_txt">
												예약하신 상품의 예약취소와 변경은 영업시간에 고객센터로 문의해주세요.
											</p>
											<p class="dot_txt">
												영업일 18시 이후, 주말/공휴일 취소건은 다음 정상영업일 취소로 산정됩니다.
											</p>
											<p class="dot_txt">
												운영시간 : 평일 : 13:00~22:00 / 토,일,공휴일 : 10:00~23:00
											</p>
											<p class="dot_txt">
												단체예약 시 010-8413-3252로 문의 부탁드립니다. (운영시간 협의 가능)
											</p>
										</div>
									</div>

									<div class="vc_box vc_box2">
										<div class="vc_titbox">
											<p class="vc_title">주의사항</p>
										</div>
										<div class="vc_contbox">
											<p class="dot_txt">
												최소 체험 인원은 2명입니다.
											</p>
											<p class="dot_txt">
												해당 티켓은 1인 이용권 입니다.
											</p>
											<p class="dot_txt">
												<span class="bold">체험 당일 현장 기상 악화 시 비행이 취소될 수 있습니다.</span>
											</p>
											<p class="dot_txt">
												<span class="bold">현장 기상악화로 비행이 불가능한 경우 예약비 반환 또는 탑승 변경 신청이 가능합니다.</span>
											</p>
											<p class="dot_txt">
												자유롭고 간현한 복장(동절기 패딩등 방한복 권장)
											</p>
											<p class="dot_txt">
												샌들 및 하이필 금지, 운동화 권장
											</p>
											<p class="dot_txt">
												탑승객 개인별 마실 물 지참
											</p>
											<p class="dot_txt">
												임산부, 노약자, 10세 이하 아동 보호자 없이 탑승금지
											</p>
											<p class="dot_txt">
												현장 도착시 "열기구체험 비행동의서" 정독 후 작성
											</p>
											<p class="dot_txt">
												삼각대, 30cm이상 셀카봉, 큰가방 등은 탑재 불가
											</p>
											<p class="dot_txt">
												안전한 여행을 위해 운행수칙을 준수해 주시기 바랍니다.
											</p>
										</div>
									</div>	
								</section>
								
								<section id="Map" class="vc_sec vc_sec_map">	
									<div class="vc_box">
										<div class="vc_titbox">
											<p class="vc_title">위치</p>
										</div>
										<div class="vc_contbox">
											<div class="mapbox">
												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.3923286288905!2d126.80273107624501!3d36.083923207747404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357068c9bcdfdfbb%3A0xa206072898477!2z7Lap7LKt64Ko64-EIOyEnOyynOq1sCDtlZzsgrDrqbQg7Lap7KCI66GcMTE3M-uyiOq4uCAxMQ!5e0!3m2!1sko!2skr!4v1769661144854!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
											</div>
											<div class="infobox">
												<div class="item">
													<img src="<?php echo $path ?>img/ic_map_icon1.png" alt="" class="icon">
													<p class="txt">부여군 부여읍 구교리 금강 둔치 일원</p>
												</div>
												<div class="item">
													<img src="<?php echo $path ?>img/ic_map_icon2.png" alt="" class="icon">
													<p class="txt">010-5412-8200</p>
												</div>
											</div>
										</div>
									</div>
								</section>
								
								<section id="Review" class="vc_sec vc_sec_review">
									<div class="vc_box vc_box1">
										<div class="vc_titbox">
											<p class="vc_title">리뷰</p>
											<button type="button" class="button typeA auto rv_write_btn" onclick="rv_write_popup()">리뷰 작성</button>
										</div>
										<div class="vc_contbox">
											<div class="rv_top">
												<div class="item">
													<p class="rv_tit">만족도</p>
													<div class="rv_cont1">
														<span class="star"></span>
														<p class="rv_txt">
															<span class="bold">4.6</span>
															<span>/</span>
															<span>5</span>
														</p>
													</div>
												</div>
												<div class="line"></div>
												<div class="item">
													<p class="rv_tit">리뷰 개수</p>
													<div class="rv_cont2">
														<p class="rv_txt"><span class="bold">3</span></p>
													</div>
												</div>
												<div class="line"></div>
												<div class="item">
													<div class="rv_cont3">
														<div class="barwrap">
															<div class="barbox">
																<div class="bar" style="height: 40px;"></div>
															</div>
															<p class="txt">5점</p>
														</div>
														<div class="barwrap">
															<div class="barbox">
																<div class="bar" style="height: 30px;"></div>
															</div>
															<p class="txt">4점</p>
														</div>
														<div class="barwrap">
															<div class="barbox">
																<div class="bar" style="height: 20px;"></div>
															</div>
															<p class="txt">3점</p>
														</div>
														<div class="barwrap">
															<div class="barbox">
																<div class="bar" style="height: 20px;"></div>
															</div>
															<p class="txt">2점</p>
														</div>
														<div class="barwrap">
															<div class="barbox">
																<div class="bar" style="height: 0px;"></div>
															</div>
															<p class="txt">1점</p>
														</div>
													</div>
												</div>
											</div>
											<div class="rv_photo">
												<div class="swiper rv_photo_swiper">
													<div class="swiper-wrapper">
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>

														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														
													</div>			
												</div>
											</div>
											<div class="rv_list">
												<div class="titbox">
													<div class="leftbox">		
														<p class="total">
															Total
															<span class="num">3</span>
														</p>	
													</div>
													<div class="rightbox">
														<div class="switch_box">
															<input type="checkbox" class="input_switch" id="reviewPhoto">
															<label for="reviewPhoto" class="label_switch">포토 리뷰</label>
														</div>
														<div class="select_box">
															<select id="reviewSort_select" class="select sort_select">
																<option value="popular">추천순</option>
																<option value="latest">최신순</option>
																<option value="high_rate">평점 높은순</option>
																<option value="low_rate">평점 낮은순</option>
															</select>
														</div>
													</div>
												</div>
												<div class="contbox">
													<div class="rv_card">
														<div class="card_cont">
															<div class="topbox">
																<div class="rate">
																	<span class="star on"></span>
																	<span class="star on"></span>
																	<span class="star on"></span>
																	<span class="star on"></span>
																	<span class="star on"></span>
																</div>
																<div class="name">
																	<p class="tit">홍길동</p>
																	<p class="date">2025.05.26</p>
																</div>
															</div>
															<div class="content">
																<div class="txtbox">
																	<div class="text">
																		테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 
																	</div>
																	<button type="button" class="review_more">
																		<span class="txt">더보기</span>
																		<span class="icon"></span>
																	</button>
																</div>
																<div class="imgbox">
																	<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
																	<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
																</div>
															</div>
														</div>
													</div>
													<div class="rv_card">
														<div class="card_cont">
															<div class="topbox">
																<div class="rate">
																	<span class="star on"></span>
																	<span class="star on"></span>
																	<span class="star on"></span>
																	<span class="star on"></span>
																	<span class="star on"></span>
																</div>
																<div class="name">
																	<p class="tit">홍길동</p>
																	<p class="date">2025.05.26</p>
																</div>
															</div>
															<div class="content">
																<div class="txtbox">
																	<div class="text">
																		테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다.   <br>
																		테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다. 
																	</div>
																</div>
																<div class="imgbox">
																	<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
																</div>
															</div>
														</div>
													</div>
													<div class="rv_card">
														<div class="card_cont">
															<div class="topbox">
																<div class="rate">
																	<span class="star on"></span>
																	<span class="star on"></span>
																	<span class="star on"></span>
																	<span class="star on"></span>
																	<span class="star on"></span>
																</div>
																<div class="name">
																	<p class="tit">홍길동</p>
																	<p class="date">2025.05.26</p>
																</div>
															</div>
															<div class="content">
																<div class="txtbox">
																	<div class="text">
																		테스트 리뷰입니다. 테스트 리뷰입니다. 테스트 리뷰입니다.  
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>									
											</div>
											<div class="pagination">
												<button type="button" class="page page_btn prev"></button>
												<a href="" class="page page_link active">1</a>
												<a href="" class="page page_link">2</a>
												<span class="page page_ellipsis">...</span>
												<a href="" class="page page_link">9</a>
												<a href="" class="page page_link">10</a>
												<button type="button" class="page page_btn next"></button>
											</div>
										</div>	
									</div>

									<div class="vc_box vc_box2">
										<div class="vc_titbox">
											<p class="vc_title">이런 상품은 어떠세요?</p>
										</div>
										<div class="vc_contbox">
											<div class="slidebox prd_slidebox">
												<div class="swiper prd_swiper">
													<div class="swiper-wrapper">
														<a href="<?php echo $path ?>reservation/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic.jpg" alt="" class="img">
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">부여 열기구 자유여행 탑승권</p>
																</div>
																<div class="pricebox">
																	<p class="price">1,018,500원</p>
																	<p class="ori">1,358,000원</p>
																</div>
																<div class="detailbox">
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
																		<span class="txt">5.0</span>
																	</div>
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
																		<span class="txt">13,463</span>
																	</div>
																</div>
																<div class="badgebox">
																	<span class="badge typeB">NEW</span>
																	<span class="badge typeC">HOT</span>
																	<span class="badge typeD">BEST</span>
																	<span class="badge typeA">TOUR</span>
																	<span class="badge typeE">TICKET</span>
																</div>
															</div>
														</a>
														<a href="<?php echo $path ?>reservation/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic.jpg" alt="" class="img">
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">부여 열기구 자유여행 탑승권</p>
																</div>
																<div class="pricebox">
																	<p class="price">120,000원</p>
																	<p class="ori">160,000원</p>
																</div>
																<div class="detailbox">
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
																		<span class="txt">5.0</span>
																	</div>
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
																		<span class="txt">13,463</span>
																	</div>
																</div>
																<div class="badgebox">
																	<span class="badge typeB">NEW</span>
																	<span class="badge typeC">HOT</span>
																	<span class="badge typeD">BEST</span>
																	<span class="badge typeA">TOUR</span>
																	<span class="badge typeE">TICKET</span>
																</div>
															</div>
														</a>
														<a href="<?php echo $path ?>reservation/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic.jpg" alt="" class="img">
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">부여 열기구 자유여행 탑승권</p>
																</div>
																<div class="pricebox">
																	<p class="price">120,000원</p>
																	<p class="ori">160,000원</p>
																</div>
																<div class="detailbox">
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
																		<span class="txt">5.0</span>
																	</div>
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
																		<span class="txt">13,463</span>
																	</div>
																</div>
																<div class="badgebox">
																	<span class="badge typeB">NEW</span>
																	<span class="badge typeC">HOT</span>
																	<span class="badge typeD">BEST</span>
																	<span class="badge typeA">TOUR</span>
																	<span class="badge typeE">TICKET</span>
																</div>
															</div>
														</a>

														<a href="<?php echo $path ?>reservation/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic.jpg" alt="" class="img">
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">부여 열기구 자유여행 탑승권</p>
																</div>
																<div class="pricebox">
																	<p class="price">1,018,500원</p>
																	<p class="ori">1,358,000원</p>
																</div>
																<div class="detailbox">
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
																		<span class="txt">5.0</span>
																	</div>
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
																		<span class="txt">13,463</span>
																	</div>
																</div>
																<div class="badgebox">
																	<span class="badge typeB">NEW</span>
																	<span class="badge typeC">HOT</span>
																	<span class="badge typeD">BEST</span>
																	<span class="badge typeA">TOUR</span>
																	<span class="badge typeE">TICKET</span>
																</div>
															</div>
														</a>
														<a href="<?php echo $path ?>reservation/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic.jpg" alt="" class="img">
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">부여 열기구 자유여행 탑승권</p>
																</div>
																<div class="pricebox">
																	<p class="price">120,000원</p>
																	<p class="ori">160,000원</p>
																</div>
																<div class="detailbox">
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
																		<span class="txt">5.0</span>
																	</div>
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
																		<span class="txt">13,463</span>
																	</div>
																</div>
																<div class="badgebox">
																	<span class="badge typeB">NEW</span>
																	<span class="badge typeC">HOT</span>
																	<span class="badge typeD">BEST</span>
																	<span class="badge typeA">TOUR</span>
																	<span class="badge typeE">TICKET</span>
																</div>
															</div>
														</a>
														<a href="<?php echo $path ?>reservation/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic.jpg" alt="" class="img">
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">부여 열기구 자유여행 탑승권</p>
																</div>
																<div class="pricebox">
																	<p class="price">120,000원</p>
																	<p class="ori">160,000원</p>
																</div>
																<div class="detailbox">
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
																		<span class="txt">5.0</span>
																	</div>
																	<div class="de_item">
																		<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
																		<span class="txt">13,463</span>
																	</div>
																</div>
																<div class="badgebox">
																	<span class="badge typeB">NEW</span>
																	<span class="badge typeC">HOT</span>
																	<span class="badge typeD">BEST</span>
																	<span class="badge typeA">TOUR</span>
																	<span class="badge typeE">TICKET</span>
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="swiper-button-prev prev_btn"></div>      
												<div class="swiper-button-next next_btn"></div>
											</div>
										</div>	
									</div>
								</section>
							</div>
						</div>
					</div>
					<div class="side_area pr_result">
						<div class="mob_side_box">
							<div class="btnbox">
								<a href="#Options" class="button typeA before select_btn">예약하기</a>
								<button type="button" class="button typeB after opt_btn">옵션확인</button>
								<a href="<?php echo $path ?>reservation/reservation.php" type="button" class="button typeA after reserve_btn">480,000원 예약하기</a>
							</div>				
						</div>
						<div class="side_box">
							<div class="sns_box">
								<button type="button" class="sns_btn share_btn"></button>
								<a href="#Map" type="button" class="sns_btn map_btn"></a>
							</div>
							<div class="quantity_box">
								<div class="item">
									<div class="txtbox">
										<p class="tit">
											성인<span class="small">(12세 이상)</span>
										</p>
										<p class="price">180,000원</p>
									</div>
									<div class="control_box ver2">
										<button type="button" class="input_control input_minus"></button>
										<input type="text" class="input_count" value="2">
										<button type="button" class="input_control input_plus"></button>				
									</div>	
								</div>	
								<div class="item">
									<div class="txtbox">
										<p class="tit">아동</p>
										<p class="price">120,000원</p>
									</div>
									<div class="control_box ver2">
										<button type="button" class="input_control input_minus"></button>
										<input type="text" class="input_count" value="1">
										<button type="button" class="input_control input_plus"></button>				
									</div>	
								</div>	
							</div>	
							<div class="info_box">
								<div class="item">
									<p class="tit">날짜</p>
									<p class="desc">2026년 01월 16일</p>
								</div>
								<div class="item">
									<p class="tit">옵션</p>
									<p class="desc">1인 탑승권(주중 성인) + 1인 탑승권(주중 소인)</p>
								</div>
								<div class="item">
									<p class="tit">인원</p>
									<p class="desc">3인 (성인 2명/아동 1명)</p>
								</div>		
								<div class="total">
									<p class="tit">총 금액</p>
									<p class="price">480,000원</p>
								</div>
							</div>	
							<div class="btnbox">
								<a href="#Options" class="button typeB date_btn">날짜 선택</a>
								<button type="button" class="button typeB opt_btn">옵션수정</button>
								<a href="<?php echo $path ?>reservation/reservation.php" type="button" class="button typeA reserve_btn">예약하기</a>
							</div>				
						</div>				
					</div>
				</div>
			</section>
			
        </div>


    	<?php include $path."common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include $path."common/footer.php" ?>


    	<?php include $path."reservation/gallery_popup.php" ?>

    	<?php include $path."reservation/rv_write_popup.php" ?>

    	<?php include $path."reservation/rv_photo_modal.php" ?>

    	<?php include $path."reservation/share_popup.php" ?>

    	<?php include $path."reservation/detailOption_popup.php" ?> <!-- 모바일 노출 -->
		
    </div>


    <!-- JS -->
    <script src="<?php echo $path ?>js/common.js"></script>


</body>

</html>