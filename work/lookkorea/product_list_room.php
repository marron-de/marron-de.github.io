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
				<div class="inner pr_list_topbox">
					<div class="input_box flexible">
						<p class="label_text">체크인 날짜</p>
						<input type="text" class="input_text datepicker today">
					</div>
					<div class="input_box flexible">
						<p class="label_text">체크아웃 날짜</p>
						<input type="text" class="input_text datepicker today">
					</div>
					<div class="input_box flexible2">
						<div class="input_item">
							<p class="label_text">객실 수</p>
							<div class="control_box">
								<button type="button" class="input_control input_minus"></button>
								<input type="text" class="input_count" value="1">
								<button type="button" class="input_control input_plus"></button>				
							</div>			
						</div>
						<div class="input_item">
							<p class="label_text">어른</p>
							<div class="control_box">
								<button type="button" class="input_control input_minus"></button>
								<input type="text" class="input_count" value="0">
								<button type="button" class="input_control input_plus"></button>				
							</div>			
						</div>
						<div class="input_item">
							<p class="label_text">어린이 </p>
							<div class="control_box">
								<button type="button" class="input_control input_minus"></button>
								<input type="text" class="input_count" value="0">
								<button type="button" class="input_control input_plus"></button>				
							</div>			
						</div>
					</div>
					<div class="input_box input_box_file">
						<input type="text" class="input_text" placeholder="목적지/호텔">
						<button type="button" class="input_btn">검색</button>
					</div>
				</div>
				<div class="inner layout">
					<div class="side_area popup filter_popup">
						<p class="filter_tit">필터</p>
						<ul class="accordion typeB filter_box">
							<li class="filter_item show">
								<div class="acc_tit">
									<span class="txt">호텔 평점</span>
									<span class="arrow"></span>
								</div>
								<ul class="acc_cont" style="display: block;">
									<div class="srcoll_area">
										<div class="check_wrap">
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_1" class="input_check" checked>
												<label for="ft1_1" class="label_check star_ver">
													<span class="txt">5점</span>
													<div class="stars">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on "></span>
													</div>
												</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_2" class="input_check">
												<label for="ft1_2" class="label_check star_ver">
													<span class="txt">4점</span>
													<div class="stars">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star"></span>
													</div>
												</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_3" class="input_check">
												<label for="ft1_3" class="label_check star_ver">
													<span class="txt">3점</span>
													<div class="stars">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star"></span>
														<span class="star "></span>
													</div>
												</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_4" class="input_check">
												<label for="ft1_4" class="label_check star_ver">
													<span class="txt">2점</span>
													<div class="stars">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star"></span>
														<span class="star"></span>
														<span class="star"></span>
													</div>
												</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft1" id="ft1_5" class="input_check">
												<label for="ft1_5" class="label_check star_ver">
													<div class="stars">
														<span class="txt">1점</span>
														<div class="stars">
															<span class="star on"></span>
															<span class="star"></span>
															<span class="star"></span>
															<span class="star"></span>
															<span class="star "></span>
														</div>
													</div>
												</label>
											</div>
										</div>
									</div>
								</ul>
							</li>
							<li class="filter_item show">
								<div class="acc_tit">
									<span class="txt">호텔 테마</span>
									<span class="arrow"></span>
								</div>
								<ul class="acc_cont" style="display: block;">
									<div class="srcoll_area">
										<div class="check_wrap">
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_1" class="input_check" checked>
												<label for="ft2_1" class="label_check">호텔</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_2" class="input_check">
												<label for="ft2_2" class="label_check">의지</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_3" class="input_check">
												<label for="ft2_3" class="label_check">풀 빌라</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_4" class="input_check">
												<label for="ft2_4" class="label_check">숙박 및 아침 식사</label>
											</div>
											<div class="check_box">
												<input type="checkbox" name="ft2" id="ft2_5" class="input_check">
												<label for="ft2_5" class="label_check">유스 호스텔</label>
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
									총 <span class="bold num">4</span>개
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
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic9.jpg" alt="" class="img">
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
													인천 글로스터 호텔
												</a>
												<p class="desc">
													인천광역시 남동구에 위치한 글로스터 호텔은 상동호수공원, 부천식물원 등의 명소와 상점, 레스토랑까지 쉽게 이동할 수 있는 거리에 있습니다. 24시간 체크인, 현대적인 피트니스 센터, 호텔 내 레스토랑 인천광역시 남동구에 위치한 글로스터 호텔은 상동호수공원, 부천식물원 등의 명소와 상점, 레스토랑까지 쉽게 이동할 수 있는 거리에 있습니다. 24시간 체크인, 현대적인 피트니스 센터, 호텔 내 레스토랑 ...
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
											<a href="" class="button auto typeA round hotel_btn">
												호텔 정보 확인
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic10.jpg" alt="" class="img">
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
													인천 글로스터 호텔
												</a>
												<p class="desc">
													인천광역시 남동구에 위치한 글로스터 호텔은 상동호수공원,  <br>
													부천식물원 등의 명소와 상점, 레스토랑까지 쉽게 이동할 수 있는 거리에 있습니다. 
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
											<button type="button" class="button auto typeA round hotel_btn">
												호텔 정보 확인
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic9.jpg" alt="" class="img">
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
													인천 글로스터 호텔
												</a>
												<p class="desc">
													인천광역시 남동구에 위치한 글로스터 호텔은 상동호수공원, 부천식물원 등의 명소와 상점, 레스토랑까지 쉽게 이동할 수 있는 거리에 있습니다. 24시간 체크인, 현대적인 피트니스 센터, 호텔 내 레스토랑 인천광역시 남동구에 위치한 글로스터 호텔은 상동호수공원, 부천식물원 등의 명소와 상점, 레스토랑까지 쉽게 이동할 수 있는 거리에 있습니다. 24시간 체크인, 현대적인 피트니스 센터, 호텔 내 레스토랑 ...
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
											<a href="" class="button auto typeA round hotel_btn">
												호텔 정보 확인
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic10.jpg" alt="" class="img">
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
													인천 글로스터 호텔
												</a>
												<p class="desc">
													인천광역시 남동구에 위치한 글로스터 호텔은 상동호수공원,  <br>
													부천식물원 등의 명소와 상점, 레스토랑까지 쉽게 이동할 수 있는 거리에 있습니다. 
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
											<button type="button" class="button auto typeA round hotel_btn">
												호텔 정보 확인
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic9.jpg" alt="" class="img">
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
													인천 글로스터 호텔
												</a>
												<p class="desc">
													인천광역시 남동구에 위치한 글로스터 호텔은 상동호수공원, 부천식물원 등의 명소와 상점, 레스토랑까지 쉽게 이동할 수 있는 거리에 있습니다. 24시간 체크인, 현대적인 피트니스 센터, 호텔 내 레스토랑 인천광역시 남동구에 위치한 글로스터 호텔은 상동호수공원, 부천식물원 등의 명소와 상점, 레스토랑까지 쉽게 이동할 수 있는 거리에 있습니다. 24시간 체크인, 현대적인 피트니스 센터, 호텔 내 레스토랑 ...
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
											<a href="" class="button auto typeA round hotel_btn">
												호텔 정보 확인
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="prd_itembox">
								<div class="prd_item">
									<div class="imgbox">
										<a href="" class="link">
											<img src="img/prd_pic10.jpg" alt="" class="img">
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
													인천 글로스터 호텔
												</a>
												<p class="desc">
													인천광역시 남동구에 위치한 글로스터 호텔은 상동호수공원,  <br>
													부천식물원 등의 명소와 상점, 레스토랑까지 쉽게 이동할 수 있는 거리에 있습니다. 
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
											<button type="button" class="button auto typeA round hotel_btn">
												호텔 정보 확인
											</button>
										</div>
									</div>
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

	<!-- 화면 : 숙박 예약 active -->
	<script>
  		 $(function() {
			$('.navbox .nav_menu .item').eq(5).addClass('active');
			nav_menu_swiper.slideTo(5, 500);
		});
	</script>


</body>

</html>