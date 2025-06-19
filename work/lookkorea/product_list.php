<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOK KOREA</title>

    <?php include "script.php" ?>

</head>

<body>


    <div class="wrap product_wrap list">     


    	<?php include "header.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section pr_sec list">
				<div class="inner layout">
					<div class="side_area popup filter_popup">
						<p class="filter_tit">필터</p>
						<ul class="accordion typeB filter_box">
							<li class="filter_item show">
								<div class="acc_tit">
									<span class="txt">테마 선택</span>
									<span class="arrow"></span>
								</div>
								<ul class="acc_cont" style="display: block;">
									<div class="srcoll_area">
										<div class="check_wrap">
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_1" class="input_check" checked>
												<label for="ft1_1" class="label_check">사계절 투어</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_2" class="input_check">
												<label for="ft1_2" class="label_check">봄 여행</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_3" class="input_check">
												<label for="ft1_3" class="label_check">여름 여행</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_4" class="input_check">
												<label for="ft1_4" class="label_check">가을 여행</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_5" class="input_check">
												<label for="ft1_5" class="label_check">겨울 여행</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_6" class="input_check">
												<label for="ft1_6" class="label_check">가족 여행</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_7" class="input_check">
												<label for="ft1_7" class="label_check">문화 투어</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_8" class="input_check">
												<label for="ft1_8" class="label_check">야외 활동</label>
											</div>
										</div>
									</div>
								</ul>
							</li>
							<li class="filter_item show">
								<div class="acc_tit">
									<span class="txt">여행지</span>
									<span class="arrow"></span>
								</div>
								<ul class="acc_cont" style="display: block;">
									<div class="srcoll_area">
										<div class="check_wrap">
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_1" class="input_check" checked>
												<label for="ft2_1" class="label_check">서울</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_2" class="input_check">
												<label for="ft2_2" class="label_check">인천</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_3" class="input_check">
												<label for="ft2_3" class="label_check">강화도</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_4" class="input_check">
												<label for="ft2_4" class="label_check">수원</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_5" class="input_check">
												<label for="ft2_5" class="label_check">경기도</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_6" class="input_check">
												<label for="ft2_6" class="label_check">강릉</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_7" class="input_check">
												<label for="ft2_7" class="label_check">경상북도</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_8" class="input_check">
												<label for="ft2_8" class="label_check">경상남도</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_9" class="input_check">
												<label for="ft2_9" class="label_check">경주</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_10" class="input_check">
												<label for="ft2_10" class="label_check">전라북도</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_11" class="input_check">
												<label for="ft2_11" class="label_check">충청북도</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_12" class="input_check">
												<label for="ft2_12" class="label_check">대구</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_13" class="input_check">
												<label for="ft2_13" class="label_check">부산</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_14" class="input_check">
												<label for="ft2_14" class="label_check">제주</label>
											</div>
										</div>
									</div>
								</ul>
							</li>
						</ul>
					</div>
					<div class="cont_area">
						<div class="sub_titbox flexible">
							<div class="left">								
								<p class="s_subtit">
									총 <span class="bold num">53</span>개
								</p>
							</div>
							<div class="right">
								<button class="mob_filter_btn">
									<span class="icon"></span>
									<span class="txt">필터</span>
								</button>
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
						<div class="prd_listbox">
							<div class="prd_itembox open">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic1.jpg" alt="" class="img">
											<div class="top">
												<span class="txt">TOP</span>
												<span class="num">1</span>
											</div>
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													홍천 대명 소노 비발디파크 야간 스키 이용권 / 야간 스키 개인 레슨
												</a>
												<p class="desc">
													한국 인기 스키장 - 홍천 대명 소노 비발디파크 <br>
													야간 스키 코스, 하루 만에 스키를 배워보세요!!
												</p>
											</div>
											<div class="pricebox sale">
												<p class="price">1,358,000원</p>
												<div class="salebox">
													<p class="percent">25%</p>
													<p class="sale">1,018,500원</p>
												</div>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic2.jpg" alt="" class="img">
											<div class="top">
												<span class="txt">TOP</span>
												<span class="num">2</span>
											</div>
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													[서울 출발] 진해 로맨틱 벚꽃길 1일 투어
												</a>
												<p class="desc">
													서울에서 출발하여 개인차량으로 한국의 벚꽃놀이 명소인 진해까지 왕복 여행을 떠나보세요 .
													<br>진해 경화역으로 이동하여 철도 양편에 벚꽃나무가 만들어낸 아름다운 벚꽃 터널을 따라 체크인을 한 진해 경화역으로 이동하여 철도 양편에 벚꽃나무가 만들어낸 아름다운 벚꽃 터널을 따라 체크인을 한
												</p>
											</div>
											<div class="pricebox">
												<p class="price">1,358,000원</p>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic3.jpg" alt="" class="img">
											<div class="top">
												<span class="txt">TOP</span>
												<span class="num">3</span>
											</div>
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													홍천 대명 소노 비발디파크 야간 스키 이용권 / 야간 스키 개인 레슨
												</a>
												<p class="desc">
													한국 인기 스키장 - 홍천 대명 소노 비발디파크 <br>
													야간 스키 코스, 하루 만에 스키를 배워보세요!!
												</p>
											</div>
											<div class="pricebox sale">
												<p class="price">1,358,000원</p>
												<div class="salebox">
													<p class="percent">25%</p>
													<p class="sale">1,018,500원</p>
												</div>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic4.jpg" alt="" class="img">
											<div class="top">
												<span class="txt">TOP</span>
												<span class="num">4</span>
											</div>
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													[서울 출발] 진해 로맨틱 벚꽃길 1일 투어
												</a>
												<p class="desc">
													서울에서 출발하여 개인차량으로 한국의 벚꽃놀이 명소인 진해까지 왕복 여행을 떠나보세요 .
													<br>진해 경화역으로 이동하여 철도 양편에 벚꽃나무가 만들어낸 아름다운 벚꽃 터널을 따라 체크인을 한 진해 경화역으로 이동하여 철도 양편에 벚꽃나무가 만들어낸 아름다운 벚꽃 터널을 따라 체크인을 한
												</p>
											</div>
											<div class="pricebox">
												<p class="price">1,358,000원</p>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic5.jpg" alt="" class="img">
											<div class="top">
												<span class="txt">TOP</span>
												<span class="num">5</span>
											</div>
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													홍천 대명 소노 비발디파크 야간 스키 이용권 / 야간 스키 개인 레슨
												</a>
												<p class="desc">
													한국 인기 스키장 - 홍천 대명 소노 비발디파크 <br>
													야간 스키 코스, 하루 만에 스키를 배워보세요!!
												</p>
											</div>
											<div class="pricebox sale">
												<p class="price">1,358,000원</p>
												<div class="salebox">
													<p class="percent">25%</p>
													<p class="sale">1,018,500원</p>
												</div>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic1.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													홍천 대명 소노 비발디파크 야간 스키 이용권 / 야간 스키 개인 레슨
												</a>
												<p class="desc">
													한국 인기 스키장 - 홍천 대명 소노 비발디파크 <br>
													야간 스키 코스, 하루 만에 스키를 배워보세요!!
												</p>
											</div>
											<div class="pricebox sale">
												<p class="price">1,358,000원</p>
												<div class="salebox">
													<p class="percent">25%</p>
													<p class="sale">1,018,500원</p>
												</div>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic2.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													[서울 출발] 진해 로맨틱 벚꽃길 1일 투어
												</a>
												<p class="desc">
													서울에서 출발하여 개인차량으로 한국의 벚꽃놀이 명소인 진해까지 왕복 여행을 떠나보세요 .
													<br>진해 경화역으로 이동하여 철도 양편에 벚꽃나무가 만들어낸 아름다운 벚꽃 터널을 따라 체크인을 한 진해 경화역으로 이동하여 철도 양편에 벚꽃나무가 만들어낸 아름다운 벚꽃 터널을 따라 체크인을 한
												</p>
											</div>
											<div class="pricebox">
												<p class="price">1,358,000원</p>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic3.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													홍천 대명 소노 비발디파크 야간 스키 이용권 / 야간 스키 개인 레슨
												</a>
												<p class="desc">
													한국 인기 스키장 - 홍천 대명 소노 비발디파크 <br>
													야간 스키 코스, 하루 만에 스키를 배워보세요!!
												</p>
											</div>
											<div class="pricebox sale">
												<p class="price">1,358,000원</p>
												<div class="salebox">
													<p class="percent">25%</p>
													<p class="sale">1,018,500원</p>
												</div>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic4.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													[서울 출발] 진해 로맨틱 벚꽃길 1일 투어
												</a>
												<p class="desc">
													서울에서 출발하여 개인차량으로 한국의 벚꽃놀이 명소인 진해까지 왕복 여행을 떠나보세요 .
													<br>진해 경화역으로 이동하여 철도 양편에 벚꽃나무가 만들어낸 아름다운 벚꽃 터널을 따라 체크인을 한 진해 경화역으로 이동하여 철도 양편에 벚꽃나무가 만들어낸 아름다운 벚꽃 터널을 따라 체크인을 한
												</p>
											</div>
											<div class="pricebox">
												<p class="price">1,358,000원</p>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic5.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<div class="top">
											<div class="titbox">
												<div class="badgebox">
													<span class="badge typeC">TOUR</span>
													<span class="badge typeB">NEW</span>
													<span class="badge typeA">HOT</span>
													<span class="badge typeD">BEST</span>
												</div>
												<a href="" class="tit">
													홍천 대명 소노 비발디파크 야간 스키 이용권 / 야간 스키 개인 레슨
												</a>
												<p class="desc">
													한국 인기 스키장 - 홍천 대명 소노 비발디파크 <br>
													야간 스키 코스, 하루 만에 스키를 배워보세요!!
												</p>
											</div>
											<div class="pricebox sale">
												<p class="price">1,358,000원</p>
												<div class="salebox">
													<p class="percent">25%</p>
													<p class="sale">1,018,500원</p>
												</div>
											</div>
										</div>
										<div  class="bottom">
											<div class="rvinfo">
												<p class="people">
													<span class="num">26,6800명</span>의 회원님들이 구매했어요
												</p>
												<div class="rate">
													<span class="icon"></span>
													<span class="txt">4.5</span>
												</div>
											</div>
											<button type="button" class="button auto typeA round date_btn">
												출발일 확인
											</button>
										</div>
									</div>
								</div>
								<div class="prd_date">
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
											<button class="data_btn">지난 달</button>
											<button class="data_btn">다음달</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
															<button type="button" class="tbl_btn disabled">매진</button>
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
												<span class="txt">VIEW MORE</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
									<button type="button" class="date_close">
										<img src="img/prd_close.png" alt="">
									</button>
								</div>
							</div>
						</div>
						<div class="pagination">
							<button type="button" class="page page_btn start"></button>
							<button type="button" class="page page_btn prev"></button>
							<a href="" class="page page_link">1</a>
							<a href="" class="page page_link active">2</a>
							<a href="" class="page page_link">3</a>
							<a href="" class="page page_link">4</a>
							<button type="button" class="page page_btn next"></button>
							<button type="button" class="page page_btn end"></button>
						</div>
					</div>
				</div>
			</section>

        </div>


    	<?php include "fixed_nav.php" ?>

    	<?php include "footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="js/common.js"></script>

	<!-- 화면 : 당일 여행 active -->
	<script>
  		 $(function() {
			$('.navbox .nav_menu .item').eq(0).addClass('active');
			nav_menu_swiper.slideTo(0, 500);
		});
	</script>


</body>

</html>