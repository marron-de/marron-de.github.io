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
								<p class="tit">호텔 디자이너스 인천</p>
								<p class="desc">호텔 디자이너스 인천은 감각적인 디자인과 쾌적한 객실을 갖춘 프리미엄 비즈니스 호텔입니다. <br>인천 도심에 위치해 교통이 편리하며, 여행객과 출장객 모두에게 최적의 숙박 환경을 제공합니다.</p>
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
										<a href="#Map" type="button" class="sns_btn map_btn"></a>
									</div>
								</div>
							</div>
							<div class="infobox">
								<div class="infoitem full grade">
									<p class="tit">호텔 등급</p>
									<p class="desc">5성급</p>
								</div>
								<div class="infoitem full map">
									<p class="tit">위치</p>
									<p class="desc">인천광역시 남동구 남동대로765번길 8 호텔 디자이너스 인천</p>
								</div>
							</div>
							<div class="keybox">
								<p class="tit">
									<span class="txt">KEY POINTS</span>
									<img src="<?php echo $path ?>img/ic_twinkle.png" alt="" class="icon">
								</p>
								<p class="desc">
									호텔 디자이너스 인천은 감각적인 디자인과 쾌적한 객실을 갖춘 프리미엄 비즈니스 호텔입니다. <br>
									인천 도심에 위치해 교통이 편리하며, 여행객과 출장객 모두에게 최적의 숙박 환경을 제공합니다.
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
									<a href="#Map" class="link">위치</a>
								</div>
								<div class="tab_nav">
									<a href="#Review" class="link">리뷰</a>
								</div>
							</div>
							<div class="view_contbox">								
								<section id="Options" class="vc_sec vc_sec_option">
									<div class="vc_box vc_box2">
										<div class="pr_list_filter">
											<div class="ft_item" onclick="roomDate_popup()">
												<p class="tit">체크인/체크아웃 날짜</p>
												<p class="desc">
													<!-- 날짜를 선택해주세요. -->
													11.01 (토) - 11.03(월), 1박  
												</p>
											</div>
											<div class="ft_item" onclick="roomOption_popup()">
												<p class="tit">객실 및 인원 수</p>
												<p class="desc">
													<!-- 객실 및 인원 수를 선택해주세요. -->
													성인 2인, 객실 1개
												</p>
											</div>
											<button type="button" class="button typeA ft_btn">
												<span class="txt">검색</span>
											</button>
										</div>
										<div class="tagbox">
											<span class="tag">조식포함</span>
											<span class="tag">무료취소</span>
											<span class="tag">이벤트 상품</span>
										</div>
										<div class="select_roombox">
											<div class="item">
												<div class="room_info">
													<div class="titbox">
														<p class="tit">디럭스 더블 룸</p>
														<div class="checkinout">
															<span class="icon"></span>
															<div class="time">
																<span class="txt">체크인</span>
																<span class="bold">15:00</span>
															</div>
															<span class="bar"></span>
															<div class="time">
																<span class="txt">체크아웃</span>
																<span class="bold">12:00</span>
															</div>
														</div>
													</div>
													<div class="contbox">
														<div class="imgbox">
															<div class="swiper room_swiper">
																<div class="swiper-wrapper">
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img1.jpg" alt="" class="img">
																	</div>
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img2.jpg" alt="" class="img">
																	</div>
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img3.jpg" alt="" class="img">
																	</div>
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img4.jpg" alt="" class="img">
																	</div>
																</div>
															</div>	
															<button type="button" class="roomview_btn" onclick="gallery_popup()">
																<img src="<?php echo $path ?>img/ic_pic_w.png" alt="" class="icon">
																<span class="count">1/24</span>
															</button>
														</div>
														<div class="txtbox">
															<div class="infobox">
																<div class="infoitem">
																	<img src="<?php echo $path ?>img/ic_room_icon1.png" alt="" class="icon">
																	<span class="txt">기준 2인 / 최대 2인</span>
																</div>
																<div class="infoitem">
																	<img src="<?php echo $path ?>img/ic_room_icon2.png" alt="" class="icon">
																	<span class="txt">세금 및 봉사료 포함</span>
																</div>
																<div class="infoitem">
																	<img src="<?php echo $path ?>img/ic_room_icon3.png" alt="" class="icon">
																	<span class="txt">체크인 11일 전까지 무료 취소</span>
																</div>
															</div>
															<div class="pricebox">
																<div class="leftbox">
																	<p class="point">1박당</p>
																	<p class="price">56,500원</p>
																</div>
																<div class="rightbox">
																	<button type="button" class="button typeB opt_btn">옵션 선택</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="room_option show">
													<div class="optitem option_select">
														<div class="input_box">
															<p class="label_text">침대 타입 선택</p>
															<div class="select_box">
																<select class="select prd_opt">
																	<option value="">선택</option>
																	<option value="single">싱글</option>
																	<option value="doublebed">더블베드</option>
																</select>
															</div>
														</div>
														<div class="input_box">
															<p class="label_text">추가 옵션 선택</p>
															<div class="select_box">
																<select class="select">
																	<option value="">선택</option>
																	<option value="add opt1">추가옵션1</option>
																	<option value="add opt2">추가옵션2</option>
																</select>
															</div>
														</div>
													</div>
													<div class="optitem optoin_result">
														<div class="descbox">
															<div class="descitem">
																<p class="tit">객실요금</p>
																<p class="desc">56,500원</p>
															</div>
															<div class="descitem">
																<p class="tit">옵션요금</p>
																<p class="desc">0원</p>
															</div>
															<div class="descitem total">
																<p class="tit">총 금액</p>
																<p class="desc">56,500원</p>
															</div>
														</div>
														<a href="<?php echo $path ?>reservation/reservation4.php" type="button" class="button typeA reserve_btn">예약하기</a>
													</div>
												</div>
												<button type="button" class="room_close_btn">
													<span class="txt">접기</span>
													<span class="arrow"></span>
												</button>
											</div>
											<div class="item">
												<div class="room_info">
													<div class="titbox">
														<p class="tit">싱글 트윈 룸</p>
														<div class="checkinout">
															<span class="icon"></span>
															<div class="time">
																<span class="txt">체크인</span>
																<span class="bold">15:00</span>
															</div>
															<span class="bar"></span>
															<div class="time">
																<span class="txt">체크아웃</span>
																<span class="bold">12:00</span>
															</div>
														</div>
													</div>
													<div class="contbox">
														<div class="imgbox">
															<div class="swiper room_swiper">
																<div class="swiper-wrapper">
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img1.jpg" alt="" class="img">
																	</div>
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img2.jpg" alt="" class="img">
																	</div>
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img3.jpg" alt="" class="img">
																	</div>
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img4.jpg" alt="" class="img">
																	</div>
																</div>
															</div>	
															<button type="button" class="roomview_btn" onclick="gallery_popup()">
																<img src="<?php echo $path ?>img/ic_pic_w.png" alt="" class="icon">
																<span class="count">1/24</span>
															</button>
														</div>
														<div class="txtbox">
															<div class="infobox">
																<div class="infoitem">
																	<img src="<?php echo $path ?>img/ic_room_icon1.png" alt="" class="icon">
																	<span class="txt">기준 2인 / 최대 2인</span>
																</div>
																<div class="infoitem">
																	<img src="<?php echo $path ?>img/ic_room_icon2.png" alt="" class="icon">
																	<span class="txt">세금 및 봉사료 포함</span>
																</div>
																<div class="infoitem">
																	<img src="<?php echo $path ?>img/ic_room_icon3.png" alt="" class="icon">
																	<span class="txt">체크인 11일 전까지 무료 취소</span>
																</div>
															</div>
															<div class="pricebox">
																<div class="leftbox">
																	<p class="point">1박당</p>
																	<p class="price">62,150원</p>
																</div>
																<div class="rightbox">
																	<button type="button" class="button typeB opt_btn">옵션 선택</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="room_option">
													<div class="optitem option_select">
														<div class="input_box">
															<p class="label_text">침대 타입 선택</p>
															<div class="select_box">
																<select class="select prd_opt">
																	<option value="">선택</option>
																	<option value="single">싱글</option>
																	<option value="doublebed">더블베드</option>
																</select>
															</div>
														</div>
														<div class="input_box">
															<p class="label_text">추가옵션 선택</p>
															<div class="select_box">
																<select class="select">
																	<option value="">선택</option>
																	<option value="add opt1">추가옵션1</option>
																	<option value="add opt2">추가옵션2</option>
																</select>
															</div>
														</div>
													</div>
													<div class="optitem optoin_result">
														<div class="descbox">
															<div class="descitem">
																<p class="tit">객실요금</p>
																<p class="desc">56,500원</p>
															</div>
															<div class="descitem">
																<p class="tit">옵션요금</p>
																<p class="desc">0원</p>
															</div>
															<div class="descitem total">
																<p class="tit">총 금액</p>
																<p class="desc">56,500원</p>
															</div>
														</div>
														<a href="<?php echo $path ?>reservation/reservation4.php" type="button" class="button typeA reserve_btn">예약하기</a>
													</div>
												</div>
												<button type="button" class="room_close_btn">
													<span class="txt">접기</span>
													<span class="arrow"></span>
												</button>
											</div>
											<div class="item">
												<div class="room_info">
													<div class="titbox">
														<p class="tit">패밀리 트윈 룸</p>
														<div class="checkinout">
															<span class="icon"></span>
															<div class="time">
																<span class="txt">체크인</span>
																<span class="bold">15:00</span>
															</div>
															<span class="bar"></span>
															<div class="time">
																<span class="txt">체크아웃</span>
																<span class="bold">12:00</span>
															</div>
														</div>
													</div>
													<div class="contbox">
														<div class="imgbox">
															<div class="swiper room_swiper">
																<div class="swiper-wrapper">
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img1.jpg" alt="" class="img">
																	</div>
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img2.jpg" alt="" class="img">
																	</div>
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img3.jpg" alt="" class="img">
																	</div>
																	<div class="swiper-slide roomitem">
																		<img src="<?php echo $path ?>img/room_view_img4.jpg" alt="" class="img">
																	</div>
																</div>
															</div>	
															<button type="button" class="roomview_btn" onclick="gallery_popup()">
																<img src="<?php echo $path ?>img/ic_pic_w.png" alt="" class="icon">
																<span class="count">1/24</span>
															</button>
														</div>
														<div class="txtbox">
															<div class="infobox">
																<div class="infoitem">
																	<img src="<?php echo $path ?>img/ic_room_icon1.png" alt="" class="icon">
																	<span class="txt">기준 2인 / 최대 2인</span>
																</div>
																<div class="infoitem">
																	<img src="<?php echo $path ?>img/ic_room_icon2.png" alt="" class="icon">
																	<span class="txt">세금 및 봉사료 포함</span>
																</div>
																<div class="infoitem">
																	<img src="<?php echo $path ?>img/ic_room_icon3.png" alt="" class="icon">
																	<span class="txt">체크인 11일 전까지 무료 취소</span>
																</div>
															</div>
															<div class="pricebox">
																<div class="leftbox">
																	<p class="point">1박당</p>
																	<p class="price">73,450원</p>
																</div>
																<div class="rightbox">
																	<button type="button" class="button typeB opt_btn">옵션 선택</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="room_option">
													<div class="optitem option_select">
														<div class="input_box">
															<p class="label_text">침대 타입 선택</p>
															<div class="select_box">
																<select class="select prd_opt">
																	<option value="">선택</option>
																	<option value="single">싱글</option>
																	<option value="doublebed">더블베드</option>
																</select>
															</div>
														</div>
														<div class="input_box">
															<p class="label_text">추가옵션 선택</p>
															<div class="select_box">
																<select class="select">
																	<option value="">선택</option>
																	<option value="add opt1">추가옵션1</option>
																	<option value="add opt2">추가옵션2</option>
																</select>
															</div>
														</div>
													</div>
													<div class="optitem optoin_result">
														<div class="descbox">
															<div class="descitem">
																<p class="tit">객실요금</p>
																<p class="desc">56,500원</p>
															</div>
															<div class="descitem">
																<p class="tit">옵션요금</p>
																<p class="desc">0원</p>
															</div>
															<div class="descitem total">
																<p class="tit">총 금액</p>
																<p class="desc">56,500원</p>
															</div>
														</div>
														<a href="<?php echo $path ?>reservation/reservation4.php" type="button" class="button typeA reserve_btn">예약하기</a>
													</div>
												</div>
												<button type="button" class="room_close_btn">
													<span class="txt">접기</span>
													<span class="arrow"></span>
												</button>
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
												<img src="<?php echo $path ?>img/deatil_img2.jpg" alt="">				
											</div>			
											<div class="view_morebox">
												<button type="button" class="view_more">
													<span class="txt">더보기</span>
													<span class="arrow"></span>
												</button>
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
												<div class="descbox ver2">
													<p class="dot_txt">TV</p>
													<p class="dot_txt">드라이기</p>
													<p class="dot_txt">FREE WIFI</p>
													<p class="dot_txt">헤어브러쉬</p>
													<p class="dot_txt">린스</p>
													<p class="dot_txt">미니바</p>
													<p class="dot_txt">안전금고</p>
													<p class="dot_txt">샴푸</p>
													<p class="dot_txt">비누</p>
													<p class="dot_txt">슬리퍼</p>
													<p class="dot_txt">에어컨</p>
													<p class="dot_txt">커피포트</p>
													<p class="dot_txt">콘센트</p>
													<p class="dot_txt">전화기</p>
													<p class="dot_txt">타올</p>
													<p class="dot_txt">세탁기</p>
													<p class="dot_txt">테이블,의자</p>
													<p class="dot_txt">알람시계</p>
													<p class="dot_txt">여분베게</p>
													<p class="dot_txt">온도조절기</p>
												</div>
											</div>
											<div class="item">
												<div class="titbox">
													<img src="<?php echo $path ?>img/ic_circle_icon2.png" alt="" class="icon">
													<p class="tit">서비스 불포함</p>
												</div>
												<div class="descbox ver2">
													<p class="dot_txt">발코니</p>
													<p class="dot_txt">샤워캡</p>
													<p class="dot_txt">욕조</p>
													<p class="dot_txt">체중계</p>
													<p class="dot_txt">치약&칫솔</p>
													<p class="dot_txt">소파</p>
													<p class="dot_txt">책상</p>
													<p class="dot_txt">식기도구</p>
													<p class="dot_txt">식기세척기</p>
													<p class="dot_txt">키꽂이</p>
													<p class="dot_txt">싱크대</p>
													<p class="dot_txt">안내책자</p>
													<p class="dot_txt">여분이불</p>
													<p class="dot_txt">옷장</p>
													<p class="dot_txt">욕실전화기</p>
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
								
								<section id="Map" class="vc_sec vc_sec_map">	
									<div class="vc_box">
										<div class="vc_titbox">
											<p class="vc_title">위치</p>
										</div>
										<div class="vc_contbox">
											<div class="mapbox">
												<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.4087857343707!2d126.7046597253784!3d37.45106910000024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b7bc2b0ed4e4f%3A0x3ad99fe0f354bd53!2z7Zi47YWUIOuNlCDrlJTsnpDsnbTrhIjsiqQg7J247LKc!5e0!3m2!1sko!2skr!4v1765185462423!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
											</div>
											<div class="infobox">
												<div class="item">
													<img src="<?php echo $path ?>img/ic_map_icon1.png" alt="" class="icon">
													<p class="txt">인천광역시 남동구 남동대로765번길 8 호텔 디자이너스 인천</p>
												</div>
												<div class="item">
													<img src="<?php echo $path ?>img/ic_map_icon2.png" alt="" class="icon">
													<p class="txt">070-8276-1919</p>
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
						<div class="mob_side_box">
							<div class="btnbox">
								<a href="#Options" class="button typeA before select_btn">객실 선택</a>
								<button type="button" class="button typeB after opt_btn">옵션확인</button>
								<a href="<?php echo $path ?>reservation/reservation.php" type="button" class="button typeA after reserve_btn">56,500원 예약하기</a>
							</div>				
						</div>

						</div>
						<div class="side_box">
							<div class="sns_box">
								<button type="button" class="sns_btn share_btn"></button>
								<button type="button" class="sns_btn wish_btn"></button>
								<a href="#Map" type="button" class="sns_btn map_btn"></a>
							</div>							
							<div class="info_box mob_view">
								<div class="item">
									<p class="tit">숙박일</p>
									<p class="desc">11.01 (토) - 11.03(월), 1박</p>
								</div>
								<div class="item">
									<p class="tit">객실 타입</p>
									<p class="desc">디럭스 더블 룸</p>
								</div>
								<div class="item">
									<p class="tit">침대 타입</p>
									<p class="desc">싱글</p>
								</div>
								<div class="item">
									<p class="tit">추가 옵션 </p>
									<p class="desc">추가 옵션1</p>
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
							<div class="info_box ver2">
								<p class="point">1박당</p>	
								<div class="total">
									<p class="tit">최저가 객실</p>
									<p class="price">56,500원</p>
								</div>
							</div>	
							<div class="btnbox">
								<a href="#Options" class="button typeA room_btn">객실 선택</a>
								<button type="button" class="button typeB opt_btn">옵션수정</button>
								<a href="<?php echo $path ?>reservation/reservation.php" type="button" class="button typeA reserve_btn2">예약하기</a>
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
		
		<!-- 옵션선택 popup --> <!-- 모바일 노출 -->
		<div id="detailOption_popup" class="modal ver2 date_popup">
            <div class="modal_box">
				<div class="modal_head">
                	<p class="tit">옵션선택</p>
					<button type="button" class="modal_close"></button>
				</div>
				<div class="modal_body">
					<div class="calender_wrap">
						<div class="calender ver2" data-today="2025-11-18">
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
					</div>
					<div class="line"></div>
					<div class="input_box">
						<p class="label_text">객실 타입</p>
						<div class="select_box">
							<select class="select">
								<option value="디럭스 더블 룸">디럭스 더블 룸</option>
								<option value="싱글 트윈 룸">싱글 트윈 룸</option>
								<option value="패밀리 트윈 룸">패밀리 트윈 룸</option>
							</select>
						</div>
					</div>
					<div class="line"></div>
					<div class="input_box">
						<p class="label_text">침대 타입</p>
						<div class="select_box">
							<select class="select prd_opt">
								<option value="">선택</option>
								<option value="single">싱글</option>
								<option value="doublebed">더블베드</option>
							</select>
						</div>
					</div>
					<div class="input_box">
						<p class="label_text">추가 옵션</p>
						<div class="select_box">
							<select class="select">
								<option value="">선택</option>
								<option value="add opt1">추가옵션1</option>
								<option value="add opt2">추가옵션2</option>
							</select>
						</div>
					</div>
					<div class="line"></div>
					<div class="input_box">
						<p class="label_text">객실 및 인원 수</p>
						<div class="quantity_box">
							<div class="item">
								<div class="txtbox">
									<p class="tit">객실</p>
								</div>
								<div class="control_box ver2">
									<button type="button" class="input_control input_minus"></button>
									<input type="text" class="input_count" value="1">
									<button type="button" class="input_control input_plus"></button>				
								</div>	
							</div>	
							<div class="item">
								<div class="txtbox">
									<p class="tit">
										성인<span class="small">(12세 이상)</span>
									</p>
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

		<!-- 260120 추가작업 -->
		<!-- 공유하기 popup -->
		<div id="share_popup" class="modal ver2">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">공유하기</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body">
					<div class="sns_box">
						<div class="item">
							<a href="" class="link">
								<img src="<?php echo $path ?>img/share_kakao.png" alt="" class="icon">
								<p class="txt">카카오톡</p>
							</a>
						</div>
						<div class="item">
							<a href="" class="link">
								<img src="<?php echo $path ?>img/share_naver.png" alt="" class="icon">
								<p class="txt">네이버</p>
							</a>
						</div>
						<div class="item">
							<a href="" class="link">
								<img src="<?php echo $path ?>img/share_facebook.png" alt="" class="icon">
								<p class="txt">페이스북</p>
							</a>
						</div>
						<div class="item">
							<a href="" class="link">
								<img src="<?php echo $path ?>img/share_instargram.png" alt="" class="icon">
								<p class="txt">인스타그램</p>
							</a>
						</div>
						<div class="item">
							<button type="button" class="link copy_btn">
								<img src="<?php echo $path ?>img/share_url.png" alt="" class="icon">
								<p class="txt">URL 복사</p>
							</button>
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