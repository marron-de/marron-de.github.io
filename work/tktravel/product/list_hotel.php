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
										<label for="selftTheme-1" class="label_check">호텔</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-2" class="input_check">
										<label for="selftTheme-2" class="label_check">리조트</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-3" class="input_check">
										<label for="selftTheme-3" class="label_check">풀빌라</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-4" class="input_check">
										<label for="selftTheme-4" class="label_check">민박</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-5" class="input_check">
										<label for="selftTheme-5" class="label_check">게스트하우스</label>
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
								<p class="tit">호텔 등급</p>
								<div class="range_box" data-mode="grade">
									<div class="range_slider">
										<input type="range" id="input_left" min="1" max="5" value="1" step="0"/>
										<input type="range" id="input_right" min="1" max="5"  value="5" step="0"/>
									</div>
									<div class="slider">
										<div class="track"></div>
										<div class="range"></div>
										<div class="thumb thumb_left"></div>
										<div class="thumb thumb_right"></div>
									</div>
									<label class="label_range">
										<span class="min">1</span>등급 ~ 
										<span class="max">5</span>등급 이하
									</label>
								</div>
							</div>
							<div class="item">
								<p class="tit">호텔명 검색</p>
								<div class="input_box">
									<input type="text" class="input_text" placeholder="호텔명을 입력해주세요.">
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
					<div class="cont_area no_pt">
						<div class="pr_list_filter">
							<div class="ft_item" onclick="roomDate_popup()">
								<p class="tit">체크인/체크아웃 날짜</p>
								<p class="desc">
									<!-- 날짜를 선택해주세요. -->
									11.01 (토) - 11.03(월), 1박  </p>
							</div>
							<div class="ft_item" onclick="roomOption_popup()">
								<p class="tit">객실 및 인원 수</p>
								<p class="desc">
									<!-- 객실 및 인원 수를 선택해주세요. -->
									성인 2인, 객실 1개
								</p>
							</div>
							<button type="button" class="button typeA ft_btn">
								<img src="<?php echo $path ?>img/ic_search_w.png" alt="" class="icon">
								<span class="txt">검색</span>
							</button>
						</div>
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
							<a href="<?php echo $path ?>product/view_hotel.php" class="item event_ing">
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
										<p class="location">인천</p>
										<button type="button" class="wish_btn on"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
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
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item event_ing">
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
										<p class="location">인천</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
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
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item event_ing">
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
										<p class="location">인천</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
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
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
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
										<p class="location">인천</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
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
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
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
										<p class="location">인천</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
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
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">인천</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
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
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">인천</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
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
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">인천</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
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
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="event"></div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">인천</p>
										<button type="button" class="wish_btn"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
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


		<!-- 할인호텔 날짜선택 popup -->
		<div id="roomDate_popup" class="modal ver2 date_popup">
            <div class="modal_box">
				<div class="modal_head">
                	<p class="tit">체크인/체크아웃 날짜</p>
					<button type="button" class="modal_close"></button>
				</div>
				<div class="modal_body">
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
									</div>
									<div class="date hide">
										<span class="num">27</span>
									</div>
									<div class="date hide">
										<span class="num">28</span>
									</div>
									<div class="date hide">
										<span class="num">29</span>
									</div>
									<div class="date hide">
										<span class="num">30</span>
									</div>
									<div class="date hide">
										<span class="num">31</span>
									</div>
									<div class="date blue">
										<span class="num">1</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">2</span>
									</div>
									<div class="date">
										<span class="num">3</span>
									</div>
									<div class="date">
										<span class="num">4</span>
									</div>
									<div class="date">
										<span class="num">5</span>
									</div>
									<div class="date">
										<span class="num">6</span>
									</div>
									<div class="date">
										<span class="num">7</span>
									</div>
									<div class="date blue">
										<span class="num">8</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">9</span>
									</div>
									<div class="date">
										<span class="num">10</span>
									</div>
									<div class="date">
										<span class="num">11</span>
									</div>
									<div class="date">
										<span class="num">12</span>
									</div>
									<div class="date">
										<span class="num">13</span>
									</div>
									<div class="date">
										<span class="num">14</span>
									</div>
									<div class="date blue">
										<span class="num">15</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">16</span>
									</div>
									<div class="date">
										<span class="num">17</span>
									</div>
									<div class="date selected period check_in">
										<span class="num">18</span>
									</div>
									<div class="date period">
										<span class="num">19</span>
									</div>
									<div class="date period">
										<span class="num">20</span>
									</div>
									<div class="date period">
										<span class="num">21</span>
									</div>
									<div class="date blue selected period check_out">
										<span class="num">22</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">23</span>
									</div>
									<div class="date">
										<span class="num">24</span>
									</div>
									<div class="date">
										<span class="num">25</span>
									</div>
									<div class="date">
										<span class="num">26</span>
									</div>
									<div class="date">
										<span class="num">27</span>
									</div>
									<div class="date">
										<span class="num">28</span>
									</div>
									<div class="date blue">
										<span class="num">29</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">30</span>
									</div>
									<div class="date hide">
										<span class="num">1</span>
									</div>
									<div class="date hide">
										<span class="num">2</span>
									</div>
									<div class="date hide">
										<span class="num">3</span>
									</div>
									<div class="date hide">
										<span class="num">4</span>
									</div>
									<div class="date hide">
										<span class="num">5</span>
									</div>
									<div class="date blue hide">
										<span class="num">6</span>
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
									</div>
									<div class="date">
										<span class="num">1</span>
									</div>
									<div class="date">
										<span class="num">2</span>
									</div>
									<div class="date">
										<span class="num">3</span>
									</div>
									<div class="date">
										<span class="num">4</span>
									</div>
									<div class="date">
										<span class="num">5</span>
									</div>
									<div class="date">
										<span class="num">6</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">7</span>
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
									<div class="date">
										<span class="num">11</span>
									</div>
									<div class="date">
										<span class="num">12</span>
									</div>
									<div class="date blue">
										<span class="num">13</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
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
									<div class="date">
										<span class="num">18</span>
									</div>
									<div class="date">
										<span class="num">19</span>
									</div>
									<div class="date blue">
										<span class="num">20</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
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
									<div class="date">
										<span class="num">25</span>
									</div>
									<div class="date">
										<span class="num">26</span>
									</div>
									<div class="date">
										<span class="num">27</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
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
									<div class="date hide">
										<span class="num">1</span>
									</div>
									<div class="date hide">
										<span class="num">2</span>
									</div>
									<div class="date blue hide">
										<span class="num">3</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>

		<!-- 할인호텔 객실및인원수 popup -->
		<div id="roomOption_popup" class="modal ver2">
            <div class="modal_box">
				<div class="modal_head">
                	<p class="tit">객실 및 인원 수</p>
					<button type="button" class="modal_close"></button>
				</div>
				<div class="modal_body">
					<div class="input_box">
						<div class="input_item">
							<p class="label_text">객실</p>
							<div class="control_box">
								<button type="button" class="input_control input_minus"></button>
								<input type="text" class="input_count" value="1">
								<button type="button" class="input_control input_plus"></button>				
							</div>			
						</div>
						<div class="input_item">
							<p class="label_text">성인</p>
							<div class="control_box">
								<button type="button" class="input_control input_minus"></button>
								<input type="text" class="input_count" value="2">
								<button type="button" class="input_control input_plus"></button>				
							</div>			
						</div>
						<div class="input_item">
							<p class="label_text">아동</p>
							<div class="control_box">
								<button type="button" class="input_control input_minus"></button>
								<input type="text" class="input_count" value="0">
								<button type="button" class="input_control input_plus"></button>				
							</div>			
						</div>
					</div>
				</div>
                <div class="modal_btnbox">
                    <button class="modal_btn typeA full">선택</button>
                </div>
            </div>
        </div>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>
	<script>
  		 $(function() {
			$('.navbox .nav_menu .item').eq(6).addClass('active');
			nav_menu_swiper.slideTo(0, 500);
		});
	</script>



</body>

</html>