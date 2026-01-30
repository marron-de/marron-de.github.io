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

			<div class="sub_topbanner">
				<div class="banner">
					<p class="sub">Book Now</p>
					<p class="tit">예약하기</p>
					<div class="breadcrumb">
						<a href="<?php echo $path ?>index.php" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">예약하기</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>company/about.php" class="link">회사소개</a>
									<a href="<?php echo $path ?>flights/free.php" class="link">열기구체험</a>
									<a href="<?php echo $path ?>reservation/list.php" class="link on">예약하기</a>
									<a href="<?php echo $path ?>community/notice.php" class="link">커뮤니티</a>
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">마이페이지</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="sub_section pr_sec list">
				<div class="inner layout">
					<div class="side_area pr_filter">
						<div class="ft_top">
							<p class="ft_tit">
								<span class="txt">조건 검색</span>
								<span class="count">1</span>
							</p>
						</div>
						<div class="ft_list">
							<!--
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
							-->
							<div class="item">
								<p class="tit">테마</p>
								<div class="check_wrap ver3">
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-1" class="input_check" checked>
										<label for="selftTheme-1" class="label_check">자유비행</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-2" class="input_check">
										<label for="selftTheme-2" class="label_check">홍보비행</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-3" class="input_check">
										<label for="selftTheme-3" class="label_check">교육비행</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-4" class="input_check">
										<label for="selftTheme-4" class="label_check">이벤트비행</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-5" class="input_check">
										<label for="selftTheme-5" class="label_check">무인모형열기구</label>
									</div>
									<div class="check_box">
										<input type="checkbox" name="selftTheme" id="selftTheme-6" class="input_check">
										<label for="selftTheme-6" class="label_check">열기구대회</label>
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
								<p class="tit">상품명 검색</p>
								<div class="input_box">
									<input type="text" class="input_text" placeholder="상품명을 입력해주세요.">
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
						<div class="pr_list_filter">
							<div class="ft_item" onclick="flightDate_popup()">
								<p class="tit">비행 일정</p>
								<p class="desc">
									<!-- 날짜를 선택해주세요. -->
									2026.01.16 (금) 
								</p>
							</div>
							<div class="ft_item" onclick="personnel_popup()">
								<p class="tit">인원 수</p>
								<p class="desc">
									<!-- 객실 및 인원 수를 선택해주세요. -->
									성인 2인, 아동 1인
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
							<div class="no_item">
								<div class="no_post">
									<span class="icon"></span>
									<p class="txt">등록된 상품이 없습니다.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
        </div>


    	<?php include $path."common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include $path."common/footer.php" ?>


    	<?php include $path."reservation/schedule_popup.php" ?>

    	<?php include $path."reservation/flightDate_popup.php" ?>

    	<?php include $path."reservation/personnel_popup.php" ?>

		

		

		
    </div>


    <!-- JS -->
    <script src="<?php echo $path ?>js/common.js"></script>


</body>

</html>