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


    <div class="wrap product_wrap list">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section pr_sec list">
				<div class="inner layout">
					<div class="side_area pr_filter">
						<div class="ft_top">
							<p class="ft_tit">
								<span class="txt">조건 검색</span>
								<span class="count">1</span>
							</p>
							<div class="switch_box">
								<input type="checkbox" class="input_switch" id="eventView">
								<label for="eventView" class="label_switch">이벤트 모아보기</label>
							</div>
						</div>
						<div class="ft_list">
							<div class="item">
								<p class="tit">지역</p>
								<ul class="accordion select_box filter_ver">
									<li>
										<div class="acc_tit select selected" data-placeholder="지역을 선택해 주세요">
											<img src="<?php echo $path ?>img/ic_selft_map.png" alt="" class="icon">
											<span class="txt">2개 선택중</span>
											<span class="arrow"></span>
										</div>
										<ul class="select_wrap">
											<div class="select_list">
												<div class="input_box">
													<input type="text" class="input_text" placeholder="검색어를 입력해주세요.">
													<button type="button" class="sch_btn"></button>
												</div>
												<div class="check_wrap ver2">
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-1" class="input_check">
														<label for="selftLocation-1" class="label_check all_check">전체보기</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-2" class="input_check" checked>
														<label for="selftLocation-2" class="label_check">서울</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-3" class="input_check" checked>
														<label for="selftLocation-3" class="label_check">인천</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-4" class="input_check">
														<label for="selftLocation-4" class="label_check">강화도</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-5" class="input_check">
														<label for="selftLocation-5" class="label_check">수원</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-6" class="input_check">
														<label for="selftLocation-6" class="label_check">경기도</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-7" class="input_check">
														<label for="selftLocation-7" class="label_check">강릉</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-8" class="input_check">
														<label for="selftLocation-8" class="label_check">경상북도</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-9" class="input_check">
														<label for="selftLocation-9" class="label_check">경상남도</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-10" class="input_check">
														<label for="selftLocation-10" class="label_check">경주</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-11" class="input_check">
														<label for="selftLocation-11" class="label_check">전라북도</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-12" class="input_check">
														<label for="selftLocation-12" class="label_check">충청북도</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-13" class="input_check">
														<label for="selftLocation-13" class="label_check">대구</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-14" class="input_check">
														<label for="selftLocation-14" class="label_check">부산</label>
													</div>
													<div class="check_box">
														<input type="checkbox" name="selftLocation" id="selftLocation-15" class="input_check">
														<label for="selftLocation-15" class="label_check">제주</label>
													</div>
												</div>
											</div>
										</ul>
									</li>
									
								</ul>
							</div>	
							<div class="item">
								<p class="tit">테마</p>
								<div class="check_wrap ver3">
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-1" class="input_check" checked>
										<label for="selftTheme-1" class="label_check">액티비티</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-2" class="input_check">
										<label for="selftTheme-2" class="label_check">입장권</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-3" class="input_check">
										<label for="selftTheme-3" class="label_check">수상레저</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-4" class="input_check">
										<label for="selftTheme-4" class="label_check">하늘여행</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-5" class="input_check">
										<label for="selftTheme-5" class="label_check">하늘여행</label>
									</div>
								</div>
							</div>
							<div class="item">
								<p class="tit">1인당 가격</p>
								<div class="range_box" data-mode="price">
									<div class="range_slider">
										<input type="range" id="input_left" min="0" max="1000000" value="100000" step="10000"/>
										<input type="range" id="input_right" min="0" max="1000000"  value="1000000" step="10000"/>
									</div>
									<div class="slider">
										<div class="track"></div>
										<div class="range"></div>
										<div class="thumb thumb_left"></div>
										<div class="thumb thumb_right"></div>
									</div>
									<label class="label_range">
										<span class="min">100,000</span> 원 ~ 
										<span class="max">1,000,000</span> 원이상
									</label>
								</div>
							</div>
							<div class="item">
								<p class="tit">투어명 검색</p>
								<div class="input_box">
									<input type="text" class="input_text" placeholder="투어명을 입력해주세요.">
								</div>
							</div>
						</div>
						<div class="ft_bottom">
							<div class="btnbox">
								<button type="button" class="button typeD icon_ver">
									<img src="<?php echo $path ?>img/ic_refresh.png" alt="" class="icon">
								</button>
								<button type="button" class="button typeA">적용</button>
							</div>
						</div>						
					</div>
					<div class="cont_area">
						<div class="pr_list_top">
							<div class="leftbox">		
								<p class="total">
									Total
									<span class="num">10</span>
								</p>	
							</div>
							<div class="rightbox">
								<div class="switch_box">
									<input type="checkbox" class="input_switch" id="eventViewMob">
									<label for="eventViewMob" class="label_switch">이벤트 모아보기</label>
								</div>
								<div class="select_box">
									<select id="listSort_select" class="select sort_select">
										<option value="popular">인기순</option>
										<option value="latest">최신순</option>
										<option value="high_price">가격 높은순</option>
										<option value="low_price">가격 낮은순</option>
									</select>
								</div>
								<button type="button" class="mob_filter_btn tablet"></button>
							</div>
						</div>
						<div class="prd_listbox">
							<a href="<?php echo $path ?>product/view.php" class="item event_ing">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
									<div class="top">
										<span class="txt">best</span>
										<span class="num">1</span>
									</div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">서울</p>
										<button type="button" class="wish_btn on"></button>
									</div>
									<div class="titbox">
										<p class="tit">튀르키예 일주 9일 YP</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
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
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
										<button type="button" class="schedule_btn"></button>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item event_ing">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
									<div class="top">
										<span class="txt">best</span>
										<span class="num">2</span>
									</div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">서울</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">튀르키예 일주 9일 YP</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
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
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
										<button type="button" class="schedule_btn"></button>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item event_ing">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
									<div class="top">
										<span class="txt">best</span>
										<span class="num">3</span>
									</div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">서울</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">튀르키예 일주 9일 YP</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
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
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
										<button type="button" class="schedule_btn"></button>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
									<div class="top">
										<span class="txt">best</span>
										<span class="num">4</span>
									</div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">서울</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">튀르키예 일주 9일 YP</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
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
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
										<button type="button" class="schedule_btn"></button>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
									<div class="top">
										<span class="txt">best</span>
										<span class="num">5</span>
									</div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">서울</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">튀르키예 일주 9일 YP</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
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
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
										<button type="button" class="schedule_btn"></button>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">서울</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">튀르키예 일주 9일 YP</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
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
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
										<button type="button" class="schedule_btn"></button>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">서울</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">튀르키예 일주 9일 YP</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
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
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
										<button type="button" class="schedule_btn"></button>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">서울</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">튀르키예 일주 9일 YP</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
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
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
										<button type="button" class="schedule_btn"></button>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">서울</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">튀르키예 일주 9일 YP</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
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
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
										<button type="button" class="schedule_btn"></button>
									</div>
								</div>
							</a>
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
	<script>
  		 $(function() {
			$('.navbox .nav_menu .item').eq(1).addClass('active');
			nav_menu_swiper.slideTo(0, 500);
		});
	</script>



</body>

</html>