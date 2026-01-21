<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK TRAVEL</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap schedule_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section sc_sec">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_tit">출발 일정 확인</p>
					</div>
					<div class="list_filter">
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
									<div class="swiper tab_swiper tab_round_swiper">
										<div class="swiper-wrapper tab_navbox round_ver">
											<div class="swiper-slide tab_nav on">
												<span class="link">출발상품</span>
											</div>
											<div class="swiper-slide tab_nav">
												<span class="link">추천상품</span>
											</div>
											<div class="swiper-slide tab_nav">
												<span class="link">추천상품2</span>
											</div>
											<div class="swiper-slide tab_nav">
												<span class="link">추천상품3</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="contbox">
								<div class="swiper date_swiper" data-today="2025-11-18">
									<div class="swiper-wrapper">
										<div class="swiper-slide item">
											<div class="day">월</div>
											<div class="date">
												<span class="num">3</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">화</div>
											<div class="date">
												<span class="num">4</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">수</div>
											<div class="date">
												<span class="num">5</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">목</div>
											<div class="date">
												<span class="num">6</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">금</div>
											<div class="date">
												<span class="num">7</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item blue">
											<div class="day">토</div>
											<div class="date">
												<span class="num">1</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item red">
											<div class="day">일</div>
											<div class="date">
												<span class="num">2</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item blue">
											<div class="day">토</div>
											<div class="date">
												<span class="num">8</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item red">
											<div class="day">일</div>
											<div class="date">
												<span class="num">9</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">월</div>
											<div class="date">
												<span class="num">10</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">화</div>
											<div class="date">
												<span class="num">11</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">수</div>
											<div class="date">
												<span class="num">12</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">목</div>
											<div class="date">
												<span class="num">13</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">금</div>
											<div class="date">
												<span class="num">14</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item blue">
											<div class="day">토</div>
											<div class="date">
												<span class="num">15</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item red">
											<div class="day">일</div>
											<div class="date">
												<span class="num">16</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">월</div>
											<div class="date">
												<span class="num">17</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">화</div>
											<div class="date">
												<span class="num">18</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">수</div>
											<div class="date">
												<span class="num">19</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">목</div>
											<div class="date">
												<span class="num">20</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">금</div>
											<div class="date">
												<span class="num">21</span>
												<span class="count">5</span>
											</div>
										</div>

										<div class="swiper-slide item blue">
											<div class="day">토</div>
											<div class="date">
												<span class="num">22</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item red">
											<div class="day">일</div>
											<div class="date">
												<span class="num">23</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">월</div>
											<div class="date">
												<span class="num">24</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">화</div>
											<div class="date">
												<span class="num">25</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">수</div>
											<div class="date">
												<span class="num">26</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">목</div>
											<div class="date">
												<span class="num">27</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">금</div>
											<div class="date">
												<span class="num">28</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item blue">
											<div class="day">토</div>
											<div class="date">
												<span class="num">29</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item red">
											<div class="day">일</div>
											<div class="date">
												<span class="num">30</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">월</div>
											<div class="date">
												<span class="num">1</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">화</div>
											<div class="date">
												<span class="num">2</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">수</div>
											<div class="date">
												<span class="num">3</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">목</div>
											<div class="date">
												<span class="num">4</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item">
											<div class="day">금</div>
											<div class="date">
												<span class="num">5</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item blue">
											<div class="day">토</div>
											<div class="date">
												<span class="num">6</span>
												<span class="count">5</span>
											</div>
										</div>
										<div class="swiper-slide item red">
											<div class="day">일</div>
											<div class="date">
												<span class="num">7</span>
												<span class="count">5</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bestprd_box">
						<p class="title">많이 찾으시는 인기 상품</p>
						<!-- 260121 추가작업 : is_loading 클래스 추가 -->
						<div class="slidebox prd_slidebox on is_loading">
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
					<div class="prd_list_wrap">
						<div class="pr_list_top">
							<div class="leftbox">		
								<p class="total">
									Total
									<span class="num">10</span>
								</p>	
							</div>
							<div class="rightbox">
								<div class="select_box">
									<select id="listSort_select" class="select sort_select">
										<option value="popular">인기순</option>
										<option value="latest">최신순</option>
										<option value="high_price">가격 높은순</option>
										<option value="low_price">가격 낮은순</option>
									</select>
								</div>
							</div>
						</div>
						<!-- 260121 추가작업 : is_loading 클래스 추가 -->
						<div class="prd_listbox is_loading">
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
								</div>
								<div class="txtbox">
									<div class="topbox">
										<span class="badge typeB">당일</span>
										<span class="date">1월 1·5·17, 5월 24~27, 7월 3·10</span>
									</div>
									<div class="titbox">
										<p class="tit">
											롯데월드 샤론캣 드레스 체험권 [샤론캣 플레이] 드레스 대여 A타입(30분)
										</p>
									</div>
									<div class="bottombox">
										<div class="pricebox">
											<p class="price">1,018,500원</p>
											<p class="ori">1,358,000원</p>
										</div>
										<button type="button" class="schedule_btn">출발일 확인</button>
									</div>
									<div class="servicebox">
										<p class="tit">
											<span class="icon"></span>
											<span class="txt">서비스 포함</span>
										</p>
										<p class="desc">버스비, 가이드비, 곤돌라 탑승비(왕복), 중식</p>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
								</div>
								<div class="txtbox">
									<div class="topbox">
										<span class="badge typeB">1박 2일</span>
										<span class="date">1월 1·5·17, 5월 24~27, 7월 3·10</span>
									</div>
									<div class="titbox">
										<p class="tit">
											롯데월드 샤론캣 드레스 체험권 [샤론캣 플레이] 드레스 대여 A타입(30분)
										</p>
									</div>
									<div class="bottombox">
										<div class="pricebox">
											<p class="price">1,018,500원</p>
											<p class="ori">1,358,000원</p>
										</div>
										<button type="button" class="schedule_btn">출발일 확인</button>
									</div>
									<div class="servicebox">
										<p class="tit">
											<span class="icon"></span>
											<span class="txt">서비스 포함</span>
										</p>
										<p class="desc">버스비, 가이드비, 곤돌라 탑승비(왕복), 중식</p>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
								</div>
								<div class="txtbox">
									<div class="topbox">
										<span class="badge typeB">당일</span>
										<span class="date">1월 1·5·17, 5월 24~27, 7월 3·10</span>
									</div>
									<div class="titbox">
										<p class="tit">
											롯데월드 샤론캣 드레스 체험권 [샤론캣 플레이] 드레스 대여 A타입(30분)
										</p>
									</div>
									<div class="bottombox">
										<div class="pricebox">
											<p class="price">1,018,500원</p>
											<p class="ori">1,358,000원</p>
										</div>
										<button type="button" class="schedule_btn">출발일 확인</button>
									</div>
									<div class="servicebox">
										<p class="tit">
											<span class="icon"></span>
											<span class="txt">서비스 포함</span>
										</p>
										<p class="desc">버스비, 가이드비, 곤돌라 탑승비(왕복), 중식</p>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
								</div>
								<div class="txtbox">
									<div class="topbox">
										<span class="badge typeB">1박 2일</span>
										<span class="date">1월 1·5·17, 5월 24~27, 7월 3·10</span>
									</div>
									<div class="titbox">
										<p class="tit">
											롯데월드 샤론캣 드레스 체험권 [샤론캣 플레이] 드레스 대여 A타입(30분)
										</p>
									</div>
									<div class="bottombox">
										<div class="pricebox">
											<p class="price">1,018,500원</p>
											<p class="ori">1,358,000원</p>
										</div>
										<button type="button" class="schedule_btn">출발일 확인</button>
									</div>
									<div class="servicebox">
										<p class="tit">
											<span class="icon"></span>
											<span class="txt">서비스 포함</span>
										</p>
										<p class="desc">버스비, 가이드비, 곤돌라 탑승비(왕복), 중식</p>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
								</div>
								<div class="txtbox">
									<div class="topbox">
										<span class="badge typeB">당일</span>
										<span class="date">1월 1·5·17, 5월 24~27, 7월 3·10</span>
									</div>
									<div class="titbox">
										<p class="tit">
											롯데월드 샤론캣 드레스 체험권 [샤론캣 플레이] 드레스 대여 A타입(30분)
										</p>
									</div>
									<div class="bottombox">
										<div class="pricebox">
											<p class="price">1,018,500원</p>
											<p class="ori">1,358,000원</p>
										</div>
										<button type="button" class="schedule_btn">출발일 확인</button>
									</div>
									<div class="servicebox">
										<p class="tit">
											<span class="icon"></span>
											<span class="txt">서비스 포함</span>
										</p>
										<p class="desc">버스비, 가이드비, 곤돌라 탑승비(왕복), 중식</p>
									</div>
								</div>
							</a>
						</div>
						<div class="prd_bottom">
							<div class="pagination">
								<button type="button" class="page page_btn prev"></button>
								<a href="" class="page page_link active">1</a>
								<a href="" class="page page_link">2</a>
								<span class="page page_ellipsis">...</span>
								<a href="" class="page page_link">9</a>
								<a href="" class="page page_link">10</a>
								<button type="button" class="page page_btn next"></button>
							</div>	
							<div class="prd_search input_box">
								<div class="input_box flexible">
									<input type="text" class="input_text" placeholder="상품명을 입력해 주세요">
									<button type="button" class="input_btn">
										<img src="<?php echo $path ?>img/ic_search_w.png" alt="" class="icon">
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

        </div>


    	<?php include "../common/fixed_nav.php" ?>

    	<?php include "../common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include "../common/footer.php" ?>


		<!-- 출발일정 popup -->
		<div id="schedule_popup" class="modal ver2">
            <div class="modal_box">
				<div class="modal_head">
                	<p class="tit">출발일정</p>
					<button type="button" class="modal_close"></button>
				</div>
				<div class="modal_body">
					<div class="prd_datebox">
						<div class="prd_calender">
							<div class="calender">
								<div class="cal_head">
									<p class="date">2025년 05월</p>
									<div class="control">
										<button type="button" class="cal_btn prev"></button>
										<button type="button" class="cal_btn next"></button>
									</div>
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
										<div class="date red hide">27</div>
										<div class="date hide">28</div>
										<div class="date hide">29</div>
										<div class="date hide">30</div>
										<div class="date hide">1</div>
										<div class="date hide">2</div>
										<div class="date blue">
											<span class="num">3</span>
										</div>
									</div>
									<div class="week_date">
										<div class="date red">
											<span class="num">4</span>
										</div>
										<div class="date enabled">
											<span class="num">5</span>
										</div>
										<div class="date enabled">
											<span class="num">6</span>
										</div>
										<div class="date enabled">
											<span class="num">7</span>
											<span class="price"></span>
										</div>
										<div class="date">
											<span class="num">8</span>
										</div>
										<div class="date">
											<span class="num">9</span>
										</div>
										<div class="date">
											<span class="num">10</span>
										</div>
									</div>
									<div class="week_date">
										<div class="date red">
											<span class="num">11</span>
										</div>
										<div class="date disabled">
											<span class="num">12</span>
										</div>
										<div class="date">
											<span class="num">13</span>
										</div>
										<div class="date disabled">
											<span class="num">14</span>
										</div>
										<div class="date">
											<span class="num">15</span>
										</div>
										<div class="date">
											<span class="num">16</span>
										</div>
										<div class="date">
											<span class="num">17</span>
										</div>
									</div>
									<div class="week_date">
										<div class="date red">
											<span class="num">18</span>
										</div>
										<div class="date confirmed">
											<span class="num">19</span>
										</div>
										<div class="date">
											<span class="num">20</span>
										</div>
										<div class="date">
											<span class="num">21</span>
										</div>
										<div class="date">
											<span class="num">22</span>
										</div>
										<div class="date">
											<span class="num">23</span>
										</div>
										<div class="date">
											<span class="num">24</span>
										</div>
									</div>
									<div class="week_date">
										<div class="date red">
											<span class="num">25</span>
										</div>
										<div class="date checking">
											<span class="num">26</span>
										</div>
										<div class="date">
											<span class="num">27</span>
										</div>
										<div class="date">
											<span class="num">28</span>
										</div>
										<div class="date">
											<span class="num">29</span>
										</div>
										<div class="date">
											<span class="num">30</span>
										</div>
										<div class="date">
											<span class="num">31</span>
										</div>
									</div>
								</div>
							</div>
							<div class="cal_state">
								<div class="item state1">
									<span class="dot"></span>
									<span class="txt">예약가능</span>
								</div>
								<div class="item state2">
									<span class="dot"></span>
									<span class="txt">확인완료</span>
								</div>
								<div class="item state3">
									<span class="dot"></span>
									<span class="txt">확인중</span>
								</div>
								<div class="item state4">
									<span class="dot"></span>
									<span class="txt">마감</span>
								</div>
							</div>
						</div>
						<div class="prd_tbl">
							<div class="tbl_top">
								<button class="data_btn">
									<img src="<?php echo $path ?>img/ic_arrow_left.png" alt="" class="icon">
									<span class="txt">이전</span>
								</button>
								<button class="data_btn">
									<span class="txt">다음</span>
									<img src="<?php echo $path ?>img/ic_arrow_right.png" alt="" class="icon">
								</button>
							</div>
							<div class="tbl_box">
								<table class="tbl small">
									<thead>
										<tr>
											<th>출발 날짜</th>
											<th>가격</th>
											<th>예약 상태</th>
											<th>예약</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>12.01</td>
											<td>1,018,500원</td>
											<td>마감</td>
											<td>
												<button type="button" class="tbl_btn disabled">마감</button>
											</td>
										</tr>
										<tr>
											<td>12.01</td>
											<td>1,018,500원</td>
											<td>예약가능</td>
											<td>
												<button type="button" class="tbl_btn">예약</button>
											</td>
										</tr>
										<tr>
											<td>12.01</td>
											<td>1,018,500원</td>
											<td>예약가능</td>
											<td>
												<button type="button" class="tbl_btn">예약</button>
											</td>
										</tr>
										<tr>
											<td>12.01</td>
											<td>1,018,500원</td>
											<td>마감</td>
											<td>
												<button type="button" class="tbl_btn disabled">마감</button>
											</td>
										</tr>
										<tr>
											<td>12.01</td>
											<td>1,018,500원</td>
											<td>예약가능</td>
											<td>
												<button type="button" class="tbl_btn">예약</button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tbl_bottom">
								<button type="button" class="view_more">
									<span class="txt">더보기</span>
									<span class="arrow"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>



</body>

</html>