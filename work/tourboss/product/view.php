<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행대장</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap product_wrap view">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
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
				<div class="inner layout">
					<div class="cont_area">
						<div class="view_top">		
							<div class="titbox">
								<p class="tit">롯데월드 샤론캣 드레스 체험권</p>
								<p class="desc">롯데월드에서 공주·왕자로 변신! 드레스 대여부터 메이크업, 퍼레이드 체험까지 올인원 키즈 프리미엄 패키지</p>
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
										<button type="button" class="sns_btn wish_btn"></button>
										<!-- <a href="#Map" type="button" class="sns_btn map_btn"></a> -->
									</div>
								</div>
							</div>
							<div class="infobox">
								<div class="infoitem">
									<p class="tit">상품종류</p>
									<p class="desc">이벤트 참여형 상품</p>
								</div>
								<div class="infoitem">
									<p class="tit">소요시간</p>
									<p class="desc">2~3시간</p>
								</div>
								<div class="infoitem">
									<p class="tit">교환 장소</p>
									<p class="desc">서울 송파구 올림픽로 240 롯데월드 1층</p>
								</div>
								<div class="infoitem">
									<p class="tit">티켓종류</p>
									<p class="desc">모바일 바우처</p>
								</div>
								<div class="infoitem">
									<p class="tit">사용방법</p>
									<p class="desc">모바일 바우처 제시</p>
								</div>
								<div class="infoitem">
									<p class="tit">판매가</p>
									<p class="desc">30,000원 부터</p>
								</div>
							</div>
							<div class="keybox">
								<p class="tit">
									<span class="txt">KEY POINTS</span>
									<img src="<?php echo $path ?>img/ic_twinkle.png" alt="" class="icon">
								</p>
								<p class="desc">
									아이에게 주는 단 하루의 마법 같은 경험! <br>
									롯데월드에서 드레스·메이크업을 받고 진짜 공주·왕자가 되어 퍼레이드에 참여해요. <br>
									전문 스타일링부터 런웨이까지, 프리미엄 올인원 체험으로 특별한 하루를 완성하세요.
								</p>
							</div>
						</div>
						<div class="view_content">
							<div class="tab_navbox">
								<div class="tab_nav">
									<a href="#Options" class="link">예약</a>
								</div>
								<div class="tab_nav">
									<a href="#Detail" class="link">소개</a>
								</div>
								<div class="tab_nav">
									<a href="#Policy" class="link">취소/환불</a>
								</div>
								<div class="tab_nav">
									<a href="#Review" class="link">리뷰</a>
								</div>
							</div>
							<div class="view_contbox">								
								<section id="Options" class="vc_sec vc_sec_option">
									<div class="vc_box vc_box1">
										<div class="select_datebox">
											<div class="titbox">
												<div class="leftbox">
													<div class="cal_date">
														<select class="date_select">
															<option value="2020">2020년</option>
															<option value="2021">2021년</option>
															<option value="2022">2022년</option>
															<option value="2023">2023년</option>
															<option value="2024">2024년</option>
															<option value="2025" selected>2025년</option>
															<option value="2026">2026년</option>
															<option value="2027">2027년</option>
															<option value="2028">2028년</option>
															<option value="2029">2029년</option>
															<option value="2030">2030년</option>
														</select>
														<select class="date_select">
															<option value="1">1월</option>
															<option value="2">2월</option>
															<option value="3">3월</option>
															<option value="4">4월</option>
															<option value="5">5월</option>
															<option value="6">6월</option>
															<option value="7">7월</option>
															<option value="8">8월</option>
															<option value="9">9월</option>
															<option value="10">10월</option>
															<option value="11" selected>11월</option>
															<option value="12">12월</option>
														</select>
													</div>
													<div class="cal_controls">
														<button type="button" class="cal_btn prev"></button>
														<button type="button" class="cal_btn next"></button>
													</div>
												</div>
												<div class="rightbox">
													<button type="button" class="fulldate_btn">
														<span class="txt">전체보기</span>
														<span class="icon"></span>
													</button>
												</div>
											</div>
											<div class="contbox">
												<div class="swiper date_swiper" data-today="2025-11-18">
													<div class="swiper-wrapper">
														<div class="swiper-slide item blue">
															<div class="day">토</div>
															<div class="date">
																<span class="num">1</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item red">
															<div class="day">일</div>
															<div class="date">
																<span class="num">2</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">월</div>
															<div class="date">
																<span class="num">3</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">화</div>
															<div class="date">
																<span class="num">4</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">수</div>
															<div class="date">
																<span class="num">5</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">목</div>
															<div class="date">
																<span class="num">6</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">금</div>
															<div class="date">
																<span class="num">7</span>
																<span class="price">5.65만원</span>
															</div>
														</div>

														<div class="swiper-slide item blue">
															<div class="day">토</div>
															<div class="date">
																<span class="num">8</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item red">
															<div class="day">일</div>
															<div class="date">
																<span class="num">9</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">월</div>
															<div class="date">
																<span class="num">10</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">화</div>
															<div class="date">
																<span class="num">11</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">수</div>
															<div class="date">
																<span class="num">12</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">목</div>
															<div class="date">
																<span class="num">13</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">금</div>
															<div class="date">
																<span class="num">14</span>
																<span class="price">5.65만원</span>
															</div>
														</div>

														<div class="swiper-slide item blue">
															<div class="day">토</div>
															<div class="date">
																<span class="num">15</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item red">
															<div class="day">일</div>
															<div class="date">
																<span class="num">16</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">월</div>
															<div class="date">
																<span class="num">17</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">화</div>
															<div class="date">
																<span class="num">18</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">수</div>
															<div class="date">
																<span class="num">19</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">목</div>
															<div class="date">
																<span class="num">20</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">금</div>
															<div class="date">
																<span class="num">21</span>
																<span class="price">5.65만원</span>
															</div>
														</div>

														<div class="swiper-slide item blue">
															<div class="day">토</div>
															<div class="date">
																<span class="num">22</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item red">
															<div class="day">일</div>
															<div class="date">
																<span class="num">23</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">월</div>
															<div class="date">
																<span class="num">24</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">화</div>
															<div class="date">
																<span class="num">25</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">수</div>
															<div class="date">
																<span class="num">26</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">목</div>
															<div class="date">
																<span class="num">27</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="day">금</div>
															<div class="date">
																<span class="num">28</span>
																<span class="price">5.65만원</span>
															</div>
														</div>

														<div class="swiper-slide item blue">
															<div class="day">토</div>
															<div class="date">
																<span class="num">29</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
														<div class="swiper-slide item red">
															<div class="day">일</div>
															<div class="date">
																<span class="num">30</span>
																<span class="price">5.65만원</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="calender_wrap" data-today="2025-11-18">
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
															<option value="2025" selected>2025년</option>
															<option value="2026">2026년</option>
															<option value="2027">2027년</option>
															<option value="2028">2028년</option>
															<option value="2029">2029년</option>
															<option value="2030">2030년</option>
														</select>
														<select class="date_select">
															<option value="1">1월</option>
															<option value="2">2월</option>
															<option value="3">3월</option>
															<option value="4">4월</option>
															<option value="5">5월</option>
															<option value="6">6월</option>
															<option value="7">7월</option>
															<option value="8">8월</option>
															<option value="9">9월</option>
															<option value="10">10월</option>
															<option value="11" selected>11월</option>
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
															<span class="num">26</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">27</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">28</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">29</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">30</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">31</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date blue">
															<span class="num">1</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">2</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">3</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">4</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">5</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">6</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">7</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date blue">
															<span class="num">8</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">9</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">10</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">11</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">12</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">13</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">14</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date blue">
															<span class="num">15</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">16</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">17</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">18</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">19</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">20</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">21</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date blue">
															<span class="num">22</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">23</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">24</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">25</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">26</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">27</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">28</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date blue">
															<span class="num">29</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">30</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">1</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">2</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">3</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">4</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">5</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date blue hide">
															<span class="num">6</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
												</div>
											</div>
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
															<option value="2025" selected>2025년</option>
															<option value="2026">2026년</option>
															<option value="2027">2027년</option>
															<option value="2028">2028년</option>
															<option value="2029">2029년</option>
															<option value="2030">2030년</option>
														</select>
														<select class="date_select">
															<option value="1">1월</option>
															<option value="2">2월</option>
															<option value="3">3월</option>
															<option value="4">4월</option>
															<option value="5">5월</option>
															<option value="6">6월</option>
															<option value="7">7월</option>
															<option value="8">8월</option>
															<option value="9">9월</option>
															<option value="10">10월</option>
															<option value="11">11월</option>
															<option value="12" selected>12월</option>
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
															<span class="num">30</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">1</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">2</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">3</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">4</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">5</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">6</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">7</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">8</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">9</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">10</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">11</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">12</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date blue">
															<span class="num">13</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">14</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">15</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">16</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">17</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">18</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">19</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date blue">
															<span class="num">20</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">21</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">22</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">23</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">24</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">25</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">26</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">27</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
													<div class="week_date">
														<div class="date red">
															<span class="num">28</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">29</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">30</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date">
															<span class="num">31</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">1</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date hide">
															<span class="num">2</span>
															<span class="price">5.65만원</span>
														</div>
														<div class="date blue hide">
															<span class="num">3</span>
															<span class="price">5.65만원</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="radio_wrap">
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt1" class="input_radio prd_opt">
												<label for="prd_opt1" class="label_radio">[샤론캣 플레이] 드레스 대여 A타입(30분)</label>
											</div>
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt2" class="input_radio prd_opt">
												<label for="prd_opt2" class="label_radio">[샤론캣 플레이] 드레스 대여 B타입(30분)</label>
											</div>
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt3" class="input_radio prd_opt">
												<label for="prd_opt3" class="label_radio">[샤론캣 플레이] 드레스 대여 A타입(60분)</label>
											</div>
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt4" class="input_radio prd_opt">
												<label for="prd_opt4" class="label_radio">[샤론캣 플레이] 드레스 대여 B타입(60분)</label>
											</div>
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt5" class="input_radio prd_opt">
												<label for="prd_opt5" class="label_radio">[샤론캣 플레이] 드레스 대여 A타입(120분)</label>
											</div>
											<div class="radio_box">
												<input type="radio" name="prd_opt" id="prd_opt6" class="input_radio prd_opt">
												<label for="prd_opt6" class="label_radio">[샤론캣 플레이] 드레스 대여 B타입(120분)</label>
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
													<p class="title">현청앞 현민광장</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_map.png" alt="" class="icon">
															<a href="https://maps.app.goo.gl/JrKq3RDhZPYsPxN99" class="txt" target="_blank">현민광장</a>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															오키나와 국제거리 입구에 위치한 현청앞 현민광장(県庁前県民広場) <br>
															&lt;승/하차지1&gt; <br>
															출발시간 : 09:00 <br>
															도착시간 : 19:00 <br>
															* 도착시간은 현지 사정에 따라 변경되는 경우가 있습니다. <br>
															* 승/하차지는 다르셔도 괜찮습니다. 당일 가이드님에게 전달후 자유롭게 하차를 해주시길 바라겠습니다.
														</p>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
												</div>
											</div>
											<div class="item">
												<div class="stepbox">
													<div class="dot"></div>
													<div class="line"></div>
												</div>
												<div class="contbox">
													<p class="title">아메리칸빌리지</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_time.png" alt="" class="icon">
															<span class="txt">60분 소요</span>
														</p>
														<span class="bar"></span>
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_map.png" alt="" class="icon">
															<a href="https://maps.app.goo.gl/LvGVezEP3jDNTb39A" class="txt" target="_blank">챠탄쵸 관광협회</a>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															[ 아메리칸빌리지 탑승지]의 경우 중간 경유지의 특성상 당일 교통 상황에 따라서 늦어 지는 경우도 있습니다. ] <br>
															출발시간 : 약09:30 <br>
															도착시간 : 약17:30 <br>
															* 도착시간은 현지 사정에 따라 변경 되는 경우가 있습니다. <br>
															* 북부 관광후 제일 마지막 방문지이며, 약 1시간 자유시간후 개인적으로 하차(해산) 혹은 해당 투어버스를 이용하여 현청앞으로 이동 <br>
															[ 아메리칸빌리지 탑승지]의 경우 중간 경유지의 특성상 당일 교통 상황에 따라서 늦어 지는 경우도 있습니다. ] <br>
															출발시간 : 약09:30 <br>
															도착시간 : 약17:30 <br>
															* 도착시간은 현지 사정에 따라 변경 되는 경우가 있습니다. <br>
															* 북부 관광후 제일 마지막 방문지이며, 약 1시간 자유시간후 개인적으로 하차(해산) 혹은 해당 투어버스를 이용하여 현청앞으로 이동
														</p>
														<button type="button" class="descmore">
															<span class="txt">더보기</span>
															<span class="icon"></span>
														</button>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
												</div>
											</div>
											<div class="item">
												<div class="stepbox">
													<div class="dot"></div>
													<div class="line"></div>
												</div>
												<div class="contbox">
													<p class="title">현청앞 현민광장</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_time.png" alt="" class="icon">
															<span class="txt">60분 소요</span>
														</p>
														<span class="bar"></span>
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_map.png" alt="" class="icon">
															<a href="https://maps.app.goo.gl/JrKq3RDhZPYsPxN99" class="txt" target="_blank">현민광장</a>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															오키나와 국제거리 입구에 위치한 현청앞 현민광장(県庁前県民広場) <br>
															&lt;승/하차지1&gt; <br>
															출발시간 : 09:00 <br>
															도착시간 : 19:00 <br>
															* 도착시간은 현지 사정에 따라 변경되는 경우가 있습니다. <br>
															* 승/하차지는 다르셔도 괜찮습니다. 당일 가이드님에게 전달후 자유롭게 하차를 해주시길 바라겠습니다.
														</p>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
												</div>
											</div>
											<div class="item">
												<div class="stepbox">
													<div class="dot"></div>
													<div class="line"></div>
												</div>
												<div class="contbox">
													<p class="title">아메리칸빌리지</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_time.png" alt="" class="icon">
															<span class="txt">60분 소요</span>
														</p>
														<span class="bar"></span>
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_map.png" alt="" class="icon">
															<a href="https://maps.app.goo.gl/LvGVezEP3jDNTb39A" class="txt" target="_blank">챠탄쵸 관광협회</a>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															[ 아메리칸빌리지 탑승지]의 경우 중간 경유지의 특성상 당일 교통 상황에 따라서 늦어 지는 경우도 있습니다. ] <br>
															출발시간 : 약09:30 <br>
															도착시간 : 약17:30 <br>
															* 도착시간은 현지 사정에 따라 변경 되는 경우가 있습니다. <br>
															* 북부 관광후 제일 마지막 방문지이며, 약 1시간 자유시간후 개인적으로 하차(해산) 혹은 해당 투어버스를 이용하여 현청앞으로 이동 <br>
															[ 아메리칸빌리지 탑승지]의 경우 중간 경유지의 특성상 당일 교통 상황에 따라서 늦어 지는 경우도 있습니다. ] <br>
															출발시간 : 약09:30 <br>
															도착시간 : 약17:30 <br>
															* 도착시간은 현지 사정에 따라 변경 되는 경우가 있습니다. <br>
															* 북부 관광후 제일 마지막 방문지이며, 약 1시간 자유시간후 개인적으로 하차(해산) 혹은 해당 투어버스를 이용하여 현청앞으로 이동
														</p>
														<button type="button" class="descmore">
															<span class="txt">더보기</span>
															<span class="icon"></span>
														</button>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
												</div>
											</div>
											<div class="item">
												<div class="stepbox">
													<div class="dot"></div>
													<div class="line"></div>
												</div>
												<div class="contbox">
													<p class="title">현청앞 현민광장</p>
													<div class="info">
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_time.png" alt="" class="icon">
															<span class="txt">60분 소요</span>
														</p>
														<span class="bar"></span>
														<p class="infotxt">
															<img src="<?php echo $path ?>img/ic_min_map.png" alt="" class="icon">
															<a href="https://maps.app.goo.gl/JrKq3RDhZPYsPxN99" class="txt" target="_blank">현민광장</a>
														</p>
													</div>
													<div class="descbox">
														<p class="desc">
															오키나와 국제거리 입구에 위치한 현청앞 현민광장(県庁前県民広場) <br>
															&lt;승/하차지1&gt; <br>
															출발시간 : 09:00 <br>
															도착시간 : 19:00 <br>
															* 도착시간은 현지 사정에 따라 변경되는 경우가 있습니다. <br>
															* 승/하차지는 다르셔도 괜찮습니다. 당일 가이드님에게 전달후 자유롭게 하차를 해주시길 바라겠습니다.
														</p>
													</div>
												</div>
												<div class="imgbox">
													<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
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
														야간 스키 장비(스키, 폴, 스노슈) / 스키 리프트 허가
													</p>
													<p class="dot_txt">
														개인 레슨
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
														개인 보험
													</p>
													<p class="dot_txt">
														<span class="txt">스카프, 장갑, 헬멧</span>
														<span class="small">
															(스키어는 헬멧을 착용해야 하며, 직접 가져오거나 현장에서 대여할 수 있습니다.)
														</span>
													</p>
													<p class="dot_txt">
														<span class="txt">케이블카 티켓</span>
														<span class="small">
															(관광을 위한 산 정상까지 왕복) 
														</span>
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
												예약 완료 후 변경 및 취소 정책(개인적 및 기타 요인)
											</p>
											<p class="dot_txt">
												출발 10일 전(포함)에 취소 시 100% 환불.
											</p>
											<p class="dot_txt">
												출발 4~9일 전에 취소 시 50% 환불.
											</p>
											<p class="dot_txt">
												출발 1~3일 전에 취소하는 경우 환불은 불가합니다. 출발 24시간 이내에는 변경이 불가능합니다
											</p>
											<p class="dot_txt">
												신용카드 결제의 경우, 결제 완료 후 거래를 취소할 경우 5%의 수수료가 부과됩니다. 예약을 취소하거나 변경해야 하는 경우 영업시간 내에 고객센터로 문의해 주시기 바랍니다.
											</p>
											<p class="dot_txt">
												평일, 주말, 공휴일 오후 6시 이후에 취소 또는 변경을 요청하시면 다음 영업일에 처리됩니다.
											</p>
										</div>
									</div>

									<div class="vc_box vc_box2">
										<div class="vc_titbox">
											<p class="vc_title">주의사항</p>
										</div>
										<div class="vc_contbox">
											<p class="dot_txt">
												예약 완료 후 변경 및 취소 정책(개인적 및 기타 요인)
											</p>
											<p class="dot_txt">
												출발 10일 전(포함)에 취소 시 100% 환불.
											</p>
											<p class="dot_txt">
												출발 4~9일 전에 취소 시 50% 환불.
											</p>
											<p class="dot_txt">
												출발 1~3일 전에 취소하는 경우 환불은 불가합니다. 출발 24시간 이내에는 변경이 불가능합니다
											</p>
											<p class="dot_txt">
												신용카드 결제의 경우, 결제 완료 후 거래를 취소할 경우 5%의 수수료가 부과됩니다. 예약을 취소하거나 변경해야 하는 경우 영업시간 내에 고객센터로 문의해 주시기 바랍니다.
											</p>
											<p class="dot_txt">
												평일, 주말, 공휴일 오후 6시 이후에 취소 또는 변경을 요청하시면 다음 영업일에 처리됩니다.
											</p>
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
														<p class="rv_txt"><span class="bold">2</span></p>
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
															<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img4.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img4.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>

														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
															<div class="hover">
																<span class="icon"></span>
																<span class="txt">더보기</span>
															</div>
														</div>
														<div class="swiper-slide item">
															<img src="<?php echo $path ?>img/prd_view_img4.jpg" alt="" class="img">
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
																	<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
																	<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
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
																	<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
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
														<a href="<?php echo $path ?>product/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
																<button type="button" class="wish_btn"></button>
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">튀르키예 일주 9일 YP</p>
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
														<a href="<?php echo $path ?>product/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic2.jpg" alt="" class="img">
																<button type="button" class="wish_btn"></button>
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">튀르키예 일주 9일 YP</p>
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
														<a href="<?php echo $path ?>product/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic3.jpg" alt="" class="img">
																<button type="button" class="wish_btn"></button>
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">튀르키예 일주 9일 YP</p>
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
														<a href="<?php echo $path ?>product/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic4.jpg" alt="" class="img">
																<button type="button" class="wish_btn"></button>
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">튀르키예 일주 9일 YP</p>
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
														<a href="<?php echo $path ?>product/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic5.jpg" alt="" class="img">
																<button type="button" class="wish_btn"></button>
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">튀르키예 일주 9일 YP</p>
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
														<a href="<?php echo $path ?>product/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic6.jpg" alt="" class="img">
																<button type="button" class="wish_btn"></button>
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">튀르키예 일주 9일 YP</p>
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
														<a href="<?php echo $path ?>product/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic7.jpg" alt="" class="img">
																<button type="button" class="wish_btn"></button>
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">튀르키예 일주 9일 YP</p>
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
														<a href="<?php echo $path ?>product/view.php" class="swiper-slide item">
															<div class="imgbox">
																<img src="<?php echo $path ?>img/prd_pic8.jpg" alt="" class="img">
																<button type="button" class="wish_btn"></button>
															</div>
															<div class="txtbox">
																<div class="titbox">
																	<p class="tit">튀르키예 일주 9일 YP</p>
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
								<a href="<?php echo $path ?>reservation/reservation.php" type="button" class="button typeA after reserve_btn">56,500원 예약하기</a>
							</div>				
						</div>
						<div class="side_box">
							<div class="sns_box">
								<button type="button" class="sns_btn share_btn"></button>
								<button type="button" class="sns_btn wish_btn"></button>
								<!-- <a href="#Map" type="button" class="sns_btn map_btn"></a> -->
							</div>
							<div class="quantity_box">
								<div class="item">
									<div class="txtbox">
										<p class="tit">
											성인<span class="small">(12세 이상)</span>
										</p>
										<p class="price">45,000원</p>
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
										<p class="price">20,000원</p>
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
									<p class="desc">2025년 11월 18일</p>
								</div>
								<div class="item">
									<p class="tit">옵션</p>
									<p class="desc">[샤론캣 플레이] 드레스 대여 A타입(30분)</p>
								</div>
								<div class="item">
									<p class="tit">인원</p>
									<p class="desc">3인 (성인 2명/아동 1명)</p>
								</div>		
								<div class="total">
									<p class="tit">총 금액</p>
									<p class="price">56,500원</p>
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


    	<?php include "../common/fixed_nav.php" ?>

    	<?php include "../common/footer.php" ?>


		<!-- 사진 전체보기 popup -->
		<div id="gallery_popup" class="modal ver2 photo_modal">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">사진 전체보기</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body photo_wrap">
					<div class="swiper photo_list gall_photo_list">
						<div class="swiper-wrapper">
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
							</div>
							
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
							</div>

							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
							</div>							
						</div>		
						<div class="swiper-button-prev prev_btn"></div>      
						<div class="swiper-button-next next_btn"></div>	
					</div>
					<div class="swiper photo_thum gall_photo_thum">
						<div class="swiper-wrapper">
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
							</div>
							
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
							</div>

							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_pic4.jpg" alt="" class="img">
							</div>							
						</div>			
					</div>
				</div>
			</div>
        </div>

		<!-- 리뷰작성 popup -->
		<div id="rv_write_popup" class="modal ver2">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">리뷰 작성</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body">
					<div class="rate_box">
						<div class="top">
							<div class="title">만족도</div>
							<div class="rating_box">
								<div class="rating">
									<input type="radio" id="star1-5" name="rating1" value="5" class="input_star" />
									<label for="star1-5" class="label_star"></label>
									<input type="radio" id="star1-4" name="rating1" value="4" class="input_star" checked />
									<label for="star1-4" class="label_star"></label>
									<input type="radio" id="star1-3" name="rating1" value="3" class="input_star" />
									<label for="star1-3" class="label_star"></label>
									<input type="radio" id="star1-2" name="rating1" value="2" class="input_star" />
									<label for="star1-2" class="label_star"></label>
									<input type="radio" id="star1-1" name="rating1" value="1" class="input_star" />
									<label for="star1-1" class="label_star"></label>
								</div>
							</div>
						</div>
					</div>
					<div class="input_box">
						<label class="label_text">어떤 점이 좋았나요?</label>
						<textarea class="input_text" placeholder="내용을 입력해 주세요"></textarea>
					</div>
					<div class="file_box">
						<label for="rv_file" class="label_file">
							<span class="icon"></span>
							<span class="name">파일을 선택해주세요</span>
							<span class="delete"></span>
						</label>
						<input type="file" id="rv_file" class="input_file" multiple></input>
						<div class="btnbox">
							<button type="button" class="button typeB auto file_btn">파일첨부</button>
						</div>
					</div>
				</div>
                <div class="modal_btnbox">
                    <button class="modal_btn typeA">작성하기</button>
                </div>
			</div>
        </div>

		<!-- 포토리뷰 popup -->
		<div id="rv_photo_popup" class="modal ver2 photo_modal">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">포토 리뷰</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body photo_wrap">
					<div class="swiper photo_list rv_photo_list">
						<div class="swiper-wrapper">
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img4.jpg" alt="" class="img">
							</div>
							
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img4.jpg" alt="" class="img">
							</div>

							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img4.jpg" alt="" class="img">
							</div>							
						</div>		
						<div class="swiper-button-prev prev_btn"></div>      
						<div class="swiper-button-next next_btn"></div>	
					</div>
					<div class="swiper photo_thum rv_photo_thum">
						<div class="swiper-wrapper">
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img4.jpg" alt="" class="img">
							</div>
							
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img4.jpg" alt="" class="img">
							</div>

							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img1.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img2.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img3.jpg" alt="" class="img">
							</div>
							<div class="swiper-slide item">
								<img src="<?php echo $path ?>img/prd_view_img4.jpg" alt="" class="img">
							</div>							
						</div>			
					</div>
				</div>
			</div>
        </div>
		
		<!-- 옵션선택 popup --> <!-- 모바일 노출 -->
		<div id="detailOption_popup" class="modal ver2">
            <div class="modal_box">
				<div class="modal_head">
                	<p class="tit">옵션선택</p>
					<button type="button" class="modal_close"></button>
				</div>
				<div class="modal_body">
					<div class="calender_wrap" data-today="2025-11-18">
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
										<option value="2025" selected>2025년</option>
										<option value="2026">2026년</option>
										<option value="2027">2027년</option>
										<option value="2028">2028년</option>
										<option value="2029">2029년</option>
										<option value="2030">2030년</option>
									</select>
									<select class="date_select">
										<option value="1">1월</option>
										<option value="2">2월</option>
										<option value="3">3월</option>
										<option value="4">4월</option>
										<option value="5">5월</option>
										<option value="6">6월</option>
										<option value="7">7월</option>
										<option value="8">8월</option>
										<option value="9">9월</option>
										<option value="10">10월</option>
										<option value="11" selected>11월</option>
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
										<span class="num">26</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">27</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">28</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">29</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">30</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">31</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date blue">
										<span class="num">1</span>
										<span class="price">5.65만원</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">2</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">3</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">4</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">5</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">6</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">7</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date blue">
										<span class="num">8</span>
										<span class="price">5.65만원</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">9</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">10</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">11</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">12</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">13</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">14</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date blue">
										<span class="num">15</span>
										<span class="price">5.65만원</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">16</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">17</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date selected">
										<span class="num">18</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">19</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">20</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">21</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date blue">
										<span class="num">22</span>
										<span class="price">5.65만원</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">23</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">24</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">25</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">26</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">27</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date">
										<span class="num">28</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date blue">
										<span class="num">29</span>
										<span class="price">5.65만원</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">30</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">1</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">2</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">3</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">4</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date hide">
										<span class="num">5</span>
										<span class="price">5.65만원</span>
									</div>
									<div class="date blue hide">
										<span class="num">6</span>
										<span class="price">5.65만원</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="line"></div>
					<div class="input_box">
						<p class="label_text">상품 종류</p>
						<div class="select_box">
							<select class="select">
								<option value="[샤론캣 플레이] 드레스 대여 A타입(30분)">[샤론캣 플레이] 드레스 대여 A타입(30분)</option>
								<option value="[샤론캣 플레이] 드레스 대여 B타입(30분)">[샤론캣 플레이] 드레스 대여 B타입(30분)</option>
								<option value="[샤론캣 플레이] 드레스 대여 A타입(60분)">[샤론캣 플레이] 드레스 대여 A타입(60분)</option>
								<option value="[샤론캣 플레이] 드레스 대여 B타입(60분)">[샤론캣 플레이] 드레스 대여 B타입(60분)</option>
								<option value="[샤론캣 플레이] 드레스 대여 A타입(120분)">[샤론캣 플레이] 드레스 대여 A타입(120분)</option>
								<option value="[샤론캣 플레이] 드레스 대여 B타입(120분)">[샤론캣 플레이] 드레스 대여 B타입(120분)</option>
							</select>
						</div>
					</div>
					<div class="line"></div>
					<div class="input_box">
						<p class="label_text">인원 수</p>
						<div class="quantity_box">
							<div class="item">
								<div class="txtbox">
									<p class="tit">
										성인<span class="small">(12세 이상)</span>
									</p>
									<p class="price">45,000원</p>
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
									<p class="price">20,000원</p>
								</div>
								<div class="control_box ver2">
									<button type="button" class="input_control input_minus"></button>
									<input type="text" class="input_count" value="1">
									<button type="button" class="input_control input_plus"></button>				
								</div>	
							</div>	
						</div>	
					</div>
					<div class="btn_box">
						<p class="total">총 56,500원</p>
						<a href="<?php echo $path ?>reservation/reservation.php" type="button" class="button typeA reserve_btn">예약하기</a>
					</div>
				</div>
            </div>
        </div>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>



</body>

</html>