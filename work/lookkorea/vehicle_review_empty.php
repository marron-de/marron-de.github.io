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


    <div class="wrap vehicle_wrap">     


    	<?php include "header.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section ve_sec">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_subtit bold">실시간 차량예약</p>
					</div>
					
					<div class="vhc_banner">
						<div class="titbox">
							<p class="tit">
								<span class="bold">LOOK KOREA</span>와 함께라면, <br>
								한국 여행이 더 편리해집니다!
							</p>
						</div>
						<div class="infobox">
							<div class="item">
								<img src="img/vhc_ban_icon1.png" alt="" class="icon">
								<p class="txt">24시간 픽업</p>
							</div>
							<div class="bar"></div>
							<div class="item">
								<img src="img/vhc_ban_icon2.png" alt="" class="icon">
								<p class="txt">고급 차량 운행</p>
							</div>
							<div class="bar"></div>
							<div class="item">
								<img src="img/vhc_ban_icon3.png" alt="" class="icon">
								<p class="txt">외국인 전담 상담</p>
							</div>
						</div>
					</div>

					<div class="vhc_faq">
						<ul class="faq accordion">
							<li class="show">
								<div class="acc_tit">
									<div class="icon Montserrat">Q</div>
									<div class="tit">차량 예약 비용에 포함되는 항목과 포함되지 않는 항목은 무엇입니까?</div>
									<div class="arrow"></div>
								</div>
								<ul class="acc_cont" style="display: block;">
									<li>
										<div class="icon Montserrat">A</div>
										<div class="content">
											차량 비용, 운전 비용, 연료 비용, 통행료 및 주차 비용이 포함됩니다. / 운전자 팁, 추가 시간 요금 및 기타 개인 비용은 포함되지 않습니다.
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div class="acc_tit">
									<div class="icon Montserrat">Q</div>
									<div class="tit">운전사에게 팁을 추가로 주어야 합니까?</div>
									<div class="arrow"></div>
								</div>
								<ul class="acc_cont">
									<li>
										<div class="icon Montserrat">A</div>
										<div class="content">
											꼭 그럴 필요는 없지만, 운전기사의 서비스에 만족하셨다면 감사의 마음을 표현하시면 됩니다.
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div class="acc_tit">
									<div class="icon Montserrat">Q</div>
									<div class="tit">만남의 장소는 어디인가요?</div>
									<div class="arrow"></div>
								</div>
								<ul class="acc_cont">
									<li>
										<div class="icon Montserrat">A</div>
										<div class="content">
											호텔에서 픽업하시는 경우, 호텔 1층 로비에서 만나실 수 있습니다.  <br>
											다른 장소에서 픽업하시는 경우, 차량 예약을 위해 정확한 만남 주소를 알려주셔야 합니다.
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div class="acc_tit">
									<div class="icon Montserrat">Q</div>
									<div class="tit">아기/어린아이는 차량에서 어떻게 이동할 수 있나요?</div>
									<div class="arrow"></div>
								</div>
								<ul class="acc_cont">
									<li>
										<div class="icon Montserrat">A</div>
										<div class="content">
											유아/어린이도 1인으로 간주됩니다. 유아용 카시트가 필요하신 경우, 추가 요금으로 제공됩니다.
										</div>
									</li>
								</ul>
							</li>
							<li>
								<div class="acc_tit">
									<div class="icon Montserrat">Q</div>
									<div class="tit">픽업이나 하차 장소를 추가할 수 있나요?</div>
									<div class="arrow"></div>
								</div>
								<ul class="acc_cont">
									<li>
										<div class="icon Montserrat">A</div>
										<div class="content">
											픽업 또는 하차 장소는 자유롭게 추가하실 수 있습니다. 단, 추가 장소는 추가 요금이 부과됩니다.
										</div>
									</li>
								</ul>
							</li>
						</ul>
						<button type="button" class="view_more">
							<span class="txt">view more</span>
							<span class="arrow"></span>
						</button>
					</div>

					<div class="tab_wrap vhc_tabs" id="tabTarget">
						<div class="tab_navbox">
							<div class="tab_nav">
								<a href="#tabTarget" class="link">차량 예약</a>
							</div>
							<div class="tab_nav on">
								<a href="#tabTarget" class="link">여행자 리뷰</a>
							</div>
							<div class="tab_nav">
								<a href="#tabTarget" class="link">드라이버 소개</a>
							</div>
						</div>
						<div class="tab_contbox">
							<div class="tab_cont tab_cont1">
								<div class="tab_form">
									<div class="tab_formitem tab_formitem1">
										<div class="titbox input_box">
											<p class="label_text required">출발지/목적지를 선택해주세요</p>
											<div class="notice_box">
												<button type="button" class="notice_btn">
													<span class="icon"></span>
													<span class="txt">유의사항</span>
												</button>	
												<div class="popup notice_popup">
													<div class="pop_titbox">
														<p class="title">유의사항</p>
														<button type="button" class="pop_close"></button>
													</div>
													<div class="pop_infobox">
														LOOK KOREA은 끊임없는 노력과 발전을 통해 고품질 차량 서비스를 제공해 왔습니다.  아래 유의사항을 참고하시어 예약 시 도움이 되시기를 바랍니다.
													</div>
													<div class="pop_termbox">
														<div class="terms">
															<p class="txt">
																<span class="num">1.</span> LOOK KOREA 차량 상품의 기본 가격에는 유류비와 통행료가 포함되어 있습니다.
																<br>
																(유류비 및 통행료 불포함으로 표시된 상품을 제외한 모든 차량은 포함됩니다.)
															</p>
															<p class="txt">
																<span class="num">2.</span> 차량은 예약제이므로 목적지에 따라 렌털 시간이 다르므로, 상품을 구매하기 전에 자세한 내용을 확인하시기 바랍니다.
															</p>
															<p class="txt">
																<span class="num">3.</span> 1일 전세 상품의 경우, 사전에 일정을 계획하고 정확한 정보를 미리 메모해 두는 것이 좋습니다. 당일 여정 변경은 가능하지만, 예약하신 상품과 맞지 않는 여정을 추가하려는 경우 여정 추가가 불가능하거나 추가 요금이 발생할 수 있으며, 추가 요금은 당일 운전기사에게 현금으로 지불하셔야 합니다.
															</p>
															<p class="txt">
																<span class="num">4.</span> 11인승 최대 정원은 8명, 25인승 최대 정원은 16명, 28인승 최대 정원은 28명, 45인승 최대 정원은 42명입니다. 수하물(대형 캐리어 등)이 있는 경우, 탑승 인원이 그에 따라 감소합니다.
															</p>
															<p class="txt">
																<span class="num">5.</span> 차량 예약 시 수하물과 인원을 꼭 확인해주세요. 문의 사항이 있거나 확실하지 않은 경우 1:1 게시판을 통해 문의해 주시면 확인해 드리겠습니다. 예약 전에 탑승 인원과 수하물을 꼭 다시 한번 확인해 주세요.
															</p>
															<p class="txt">
																<span class="num">6.</span> 대부분의 주문은 즉시 확인 및 예약됩니다. (차량 예약이 불가능한 경우, 예약 후 24시간 이내에 연락드리겠습니다.) 단, 출발 1~2일 전 또는 출발 당일에 차량을 예약하시는 경우, 예약 전에 1:1 게시판이나 기타 SNS를 통해 차량 예약 가능 여부를 문의해 주시기 바랍니다.
															</p>
															<p class="txt">
																<span class="num">7.</span> 차량 예약 시 날짜, 인원, 차량 종류, 경로, 미팅 시간, 미팅 장소 등을 반드시 확인하시기 바랍니다. 저희 TK Travel은 고객의 예약을 임의로 변경하거나 수정하지 않습니다.
																<br>
																따라서 정보가 부정확할 경우, 저희가 해당 정보를 제공해 드리기 어려우니, 예약 시 위 정보를 반드시 확인하여 불필요한 오해를 피하시기 바랍니다.
															<p class="txt">
																<span class="num">8.</span> 추가 요금을 요구하는 운전자를 만나거나, 여행 일정에 맞지 않는 장소로 이동하거나, 운전자의 서비스가 불친절한 경우, 즉시 TK Travel에 연락하세요.
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="contbox">
											<div class="cont_select">
												<div class="title">
													출발지
												</div>
												<div class="selbox">
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-1" checked>
														<label for="vhc_departure1-1" class="label">인천국제공항</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-2">
														<label for="vhc_departure1-2" class="label">김포국제공항</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-3">
														<label for="vhc_departure1-3" class="label">김해국제공항</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-4">
														<label for="vhc_departure1-4" class="label">대구 국제공항</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-5">
														<label for="vhc_departure1-5" class="label">서울시</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-6">
														<label for="vhc_departure1-6" class="label">서울 남동쪽</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-7">
														<label for="vhc_departure1-7" class="label">서울 북동쪽</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-8">
														<label for="vhc_departure1-8" class="label">인천/부천</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-9">
														<label for="vhc_departure1-9" class="label">안양시/안산시</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-10">
														<label for="vhc_departure1-10" class="label">사우스 시티</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-11">
														<label for="vhc_departure1-11" class="label">수원</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-12">
														<label for="vhc_departure1-12" class="label">부산시내</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-13">
														<label for="vhc_departure1-13" class="label">부산(해운대)</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-14">
														<label for="vhc_departure1-14" class="label">대구시</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-15">
														<label for="vhc_departure1-15" class="label">에버랜드/용인</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-16">
														<label for="vhc_departure1-16" class="label">소노 홍천 대명점</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-17">
														<label for="vhc_departure1-17" class="label">안양시/안산시</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-18">
														<label for="vhc_departure1-18" class="label">부산시내</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-19">
														<label for="vhc_departure1-19" class="label">사우스 시티</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-20">
														<label for="vhc_departure1-20" class="label">수원</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-21">
														<label for="vhc_departure1-21" class="label">엘리시안 강춘</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure1" class="radio" id="vhc_departure1-22">
														<label for="vhc_departure1-22" class="label">용평/알펜시아</label>
													</div>

												</div>
											</div>
											<div class="cont_line"></div>
											<div class="cont_select">
												<div class="title">
													목적지
												</div>
												<div class="selbox">
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-1">
														<label for="vhc_departure2-1" class="label">서울시</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-2">
														<label for="vhc_departure2-2" class="label">서울 남동쪽</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-3">
														<label for="vhc_departure2-3" class="label">서울 북동쪽</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-4">
														<label for="vhc_departure2-4" class="label">인천/부천</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-5">
														<label for="vhc_departure2-5" class="label">안양시/안산시</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-6">
														<label for="vhc_departure2-6" class="label">사우스 시티</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-7">
														<label for="vhc_departure2-7" class="label">수원</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-8">
														<label for="vhc_departure2-8" class="label">소노 홍천 대명점</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-9">
														<label for="vhc_departure2-9" class="label">수원</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-10">
														<label for="vhc_departure2-10" class="label">엘리시안 강춘</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-11">
														<label for="vhc_departure2-11" class="label">용평/알펜시아</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-12">
														<label for="vhc_departure2-12" class="label">김포국제공항</label>
													</div>
													<div class="item">
														<input type="radio" name="vhc_departure2" class="radio" id="vhc_departure2-13">
														<label for="vhc_departure2-13" class="label">서울 렌터카 서비스</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab_formitem tab_formitem2">
										<div class="contbox">
											<div class="input_box">
												<p class="label_text required">
													상품을 선택해주세요
												</p>
												<div class="radio_wrap">
													<div class="radio_box">
														<input type="radio" name="vhc_prd" id="vhc_prd1" class="input_radio" checked>
														<label for="vhc_prd1" class="label_radio">공항 픽업</label>
													</div>
												</div>
											</div>
											<div class="input_box">
												<p class="label_text sub">
													상품 내용을 선택해주세요
												</p>
												<div class="radio_wrap">
													<div class="radio_box">
														<input type="radio" name="vhc_cont1" id="vhc_cont1-1" class="input_radio" checked>
														<label for="vhc_cont1-1" class="label_radio">터미널 1</label>
													</div>
													<div class="radio_box">
														<input type="radio" name="vhc_cont1" id="vhc_cont1-2" class="input_radio">
														<label for="vhc_cont1-2" class="label_radio">터미널 2</label>
													</div>
												</div>
											</div>
											<div class="input_box">
												<p class="label_text sub">
													상품 내용을 선택해주세요
												</p>
												<div class="radio_wrap wid3">
													<div class="radio_box">
														<input type="radio" name="vhc_cont2" id="vhc_cont2-1" class="input_radio" checked>
														<label for="vhc_cont2-1" class="label_radio">1~3월, 6~9월, 12월 (05:01~22:00)</label>
													</div>
													<div class="radio_box">
														<input type="radio" name="vhc_cont2" id="vhc_cont2-2" class="input_radio">
														<label for="vhc_cont2-2" class="label_radio">1~3월, 6~9월, 12월 (22:01~05:00)</label>
													</div>
													<div class="radio_box">
														<input type="radio" name="vhc_cont2" id="vhc_cont2-3" class="input_radio">
														<label for="vhc_cont2-3" class="label_radio">5월, 11월 (05:01-22:00)</label>
													</div>
													<div class="radio_box">
														<input type="radio" name="vhc_cont2" id="vhc_cont2-4" class="input_radio">
														<label for="vhc_cont2-4" class="label_radio">5월, 11월 (22:01-05:00)</label>
													</div>
													<div class="radio_box">
														<input type="radio" name="vhc_cont2" id="vhc_cont2-5" class="input_radio">
														<label for="vhc_cont2-5" class="label_radio">4월, 10월 (05:01-22:00)</label>
													</div>
													<div class="radio_box">
														<input type="radio" name="vhc_cont2" id="vhc_cont2-6" class="input_radio">
														<label for="vhc_cont2-6" class="label_radio">4월, 10월 (22:01-05:00)</label>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="tab_formitem tab_formitem3">
										<div class="titbox input_box">
											<p class="label_text required">
												차량 이용일을 선택해 주세요
											</p>
										</div>
										<div class="contbox">
											<div class="input_box flexible">
												<input type="text" class="input_text datepicker today">
												<span class="label_text">~</span>
												<input type="text" class="input_text datepicker today">
											</div>
											<div class="input_box flexible">
												<span class="label_text">총</span>
												<input type="text" class="input_text input_day" value="1">
												<span class="label_text">일</span>
											</div>
										</div>
										<p class="note_txt">
											<span class="icon"></span>
											<span class="txt">왕복 항공권을 예약하려면 귀국 날짜를 선택하세요.</span>
										</p>
									</div>
									<div class="tab_formitem tab_formitem4">
										<div class="titbox input_box">
											<p class="label_text required">
												인원수를 선택해주세요
											</p>
										</div>
										<div class="contbox">
											<div class="input_box flexible">
												<span class="label_text">어른</span>
												<div class="control_box">
													<button type="button" class="input_control input_minus"></button>
													<input type="text" class="input_count" value="1">
													<button type="button" class="input_control input_plus"></button>				
												</div>
											</div>
											<div class="input_box flexible">
												<span class="label_text">어린이</span>
												<div class="control_box">
													<button type="button" class="input_control input_minus"></button>
													<input type="text" class="input_count" value="1">
													<button type="button" class="input_control input_plus"></button>				
												</div>
											</div>
											<div class="age_info">
												<span class="icon"></span>
												<span class="txt">성인(12세 이상) / 어린이(0~11세)</span>
											</div>
										</div>
										<p class="note_txt">
											<span class="icon"></span>
											<span class="txt">인원수에 맞게 적절한 차량을 선택해주세요.</span>
										</p>
									</div>
									<div class="tab_formitem tab_formitem5">
										<div class="titbox input_box">
											<p class="label_text required">
												모델과 수량을 선택해주세요
											</p>
										</div>
										<div class="contbox">
											<div class="slidebox vhc_listbox">
												<div class="swiper vhc_list">
													<div class="swiper-wrapper">
														<div class="swiper-slide item">
															<div class="titbox">
																<p class="tit">STARIA</p>
																<p class="person">11인승</p>
															</div>
															<div class="imgbox">
																<img src="img/vhc_car1.png" alt="" class="img">
																<div class="badge">11인승</div>
															</div>
															<div class="txtbox">
																<div class="infobox">
																	<div class="infoitem">
																		<p class="tit">좌석 수</p>
																		<p class="desc">9석</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">수하물 개수</p>
																		<p class="desc">6개</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">최대 인원</p>
																		<p class="desc">6명</p>
																	</div>
																</div>
																<div class="select_box">
																	<select class="select full">
																		<option value="">수량을 선택해주세요</option>
																		<option value="1">1대</option>
																		<option value="2">2대</option>
																		<option value="3">3대</option>
																		<option value="4">4대</option>
																		<option value="5">5대</option>
																	</select>
																</div>
															</div>
															<div class="pricebox">
																<p class="price">
																	<span class="num">110,000</span>원
																</p>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="titbox">
																<p class="tit">SOLATI</p>
																<p class="person">15인승</p>
															</div>
															<div class="imgbox">
																<img src="img/vhc_car2.png" alt="" class="img">
																<div class="badge">15인승</div>
															</div>
															<div class="txtbox">
																<div class="infobox">
																	<div class="infoitem">
																		<p class="tit">좌석 수</p>
																		<p class="desc">15석</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">수하물 개수</p>
																		<p class="desc">10개</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">최대 인원</p>
																		<p class="desc">15명</p>
																	</div>
																</div>
																<div class="select_box">
																	<select class="select full">
																		<option value="">수량을 선택해주세요</option>
																		<option value="1">1대</option>
																		<option value="2">2대</option>
																		<option value="3">3대</option>
																		<option value="4">4대</option>
																		<option value="5">5대</option>
																	</select>
																</div>
															</div>
															<div class="pricebox">
																<p class="price">
																	<span class="num">44,000</span>원
																</p>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="titbox">
																<p class="tit">COUNTY</p>
																<p class="person">20인승</p>
															</div>
															<div class="imgbox">
																<img src="img/vhc_car3.png" alt="" class="img">
																<div class="badge">20인승</div>
															</div>
															<div class="txtbox">
																<div class="infobox">
																	<div class="infoitem">
																		<p class="tit">좌석 수</p>
																		<p class="desc">16석</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">수하물 개수</p>
																		<p class="desc">12개</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">최대 인원</p>
																		<p class="desc">16명</p>
																	</div>
																</div>
																<div class="select_box">
																	<select class="select full">
																		<option value="">수량을 선택해주세요</option>
																		<option value="1">1대</option>
																		<option value="2">2대</option>
																		<option value="3">3대</option>
																		<option value="4">4대</option>
																		<option value="5">5대</option>
																	</select>
																</div>
															</div>
															<div class="pricebox">
																<p class="price">
																	<span class="num">440,000</span>원
																</p>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="titbox">
																<p class="tit">PREMIUM BUS</p>
																<p class="person">28인승</p>
															</div>
															<div class="imgbox">
																<img src="img/vhc_car4.png" alt="" class="img">
																<div class="badge">28인승</div>
															</div>
															<div class="txtbox">
																<div class="infobox">
																	<div class="infoitem">
																		<p class="tit">좌석 수</p>
																		<p class="desc">27석</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">수하물 개수</p>
																		<p class="desc">40개</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">최대 인원</p>
																		<p class="desc">27명</p>
																	</div>
																</div>
																<div class="select_box">
																	<select class="select full">
																		<option value="">수량을 선택해주세요</option>
																		<option value="1">1대</option>
																		<option value="2">2대</option>
																		<option value="3">3대</option>
																		<option value="4">4대</option>
																		<option value="5">5대</option>
																	</select>
																</div>
															</div>
															<div class="pricebox">
																<p class="price">
																	<span class="num">960,000</span>원
																</p>
															</div>
														</div>
														<div class="swiper-slide item">
															<div class="titbox">
																<p class="tit">TRAVEL BUS</p>
																<p class="person">45인승</p>
															</div>
															<div class="imgbox">
																<img src="img/vhc_car5.png" alt="" class="img">
																<div class="badge">45인승</div>
															</div>
															<div class="txtbox">
																<div class="infobox">
																	<div class="infoitem">
																		<p class="tit">좌석 수</p>
																		<p class="desc">43석</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">수하물 개수</p>
																		<p class="desc">40개</p>
																	</div>
																	<div class="infoitem">
																		<p class="tit">최대 인원</p>
																		<p class="desc">43명</p>
																	</div>
																</div>
																<div class="select_box">
																	<select class="select full">
																		<option value="">수량을 선택해주세요</option>
																		<option value="1">1대</option>
																		<option value="2">2대</option>
																		<option value="3">3대</option>
																		<option value="4">4대</option>
																		<option value="5">5대</option>
																	</select>
																</div>
															</div>
															<div class="pricebox">
																<p class="price">
																	<span class="num">658,000</span>원
																</p>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-button-prev prev_btn"></div>      
												<div class="swiper-button-next next_btn"></div>
											</div>											
											<div class="tblbox mob_tbl">
												<table class="tbl">
													<colgroup>
														<col width="120">
														<col width="80">
														<col width="670">
														<col width="150">
														<col width="100">
														<col width="80">
													</colgroup>
													<thead>
														<tr>
															<th>출발지</th>
															<th>목적지</th>
															<th>선택 상품</th>
															<th>출발 일정</th>
															<th>차량 유형</th>
															<th>차량 수</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td data-th="출발지">인천국제공항</td>
															<td data-th="목적지">서울시</td>
															<td data-th="선택 상품">공항 픽업 / 터미널1 / 1월-3월, 6월-9월, 12월 (05:01-22:00)</td>
															<td data-th="출발 일정">2025년 12월 8일</td>
															<td data-th="차량 유형">STARIA</td>
															<td data-th="차량 수">1</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="totalbox">
												<p class="txt">total</p>
												<p class="price">
													<span class="num">850,000</span>원
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="tab_info">
									<div class="info_item">
										<p class="tit">미팅 포인트</p>
										<p class="desc">인천국제공항 제1여객터미널</p>
									</div>
									<div class="info_item">
										<p class="tit">지침</p>
										<p class="desc">항공편명과 목적지를 정확하게 입력해 주시기 바랍니다. 잘못된 정보로 인해 발생하는 문제에 대해 회사는 책임을 지지 않습니다.</p>
									</div>
								</div>
								<div class="button_box">
									<button type="button" class="button typeA">예약하기</button>
								</div>
							</div>
							<div class="tab_cont tab_cont2 on">
								<div class="rv_top">
									<div class="item">
										<p class="rv_tit">만족도</p>
										<div class="rv_cont1">
											<span class="star"></span>
											<p class="rv_txt">
												<span class="bold">0</span>
												<span>/</span>
												<span>5</span>
											</p>
										</div>
									</div>
									<div class="line"></div>
									<div class="item">
										<p class="rv_tit">리뷰 개수</p>
										<div class="rv_cont2">
											<p class="rv_txt"><span class="bold">0</span></p>
										</div>
									</div>
									<div class="line"></div>
									<div class="item">
										<div class="rv_cont3">
											<div class="barwrap">
												<div class="barbox">
													<div class="bar" style="height: 0px;"></div>
												</div>
												<p class="txt">5점</p>
											</div>
											<div class="barwrap">
												<div class="barbox">
													<div class="bar" style="height: 0px;"></div>
												</div>
												<p class="txt">4점</p>
											</div>
											<div class="barwrap">
												<div class="barbox">
													<div class="bar" style="height: 0px;"></div>
												</div>
												<p class="txt">3점</p>
											</div>
											<div class="barwrap">
												<div class="barbox">
													<div class="bar" style="height: 0px;"></div>
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
									<div class="line"></div>
									<div class="item">
										<div class="rv_cont4">
											<p class="txt">고객님의 리뷰를 공유해주세요!</p>
											<button type="button" class="button typeA auto rv_write_btn">리뷰 작성</button>
										</div>
									</div>
								</div>
								<div class="rv_list">
									<div class="titbox">
										<div class="title">
											여행자 리뷰 <span class="num">(0)</span>
										</div>
										<div class="filter">
											<button type="button" class="ft_btn on">
												<span class="dot"></span>
												<span class="txt">추천순</span>
											</button>
											<button type="button" class="ft_btn">
												<span class="dot"></span>
												<span class="txt">최신순</span>
											</button>
											<button type="button" class="ft_btn">
												<span class="dot"></span>
												<span class="txt">평점 높은 순</span>
											</button>
											<button type="button" class="ft_btn">
												<span class="dot"></span>
												<span class="txt">평점 낮은 순</span>
											</button>
										</div>
									</div>
									<div class="contbox">
										<div class="rv_card">		
											<div class="no_post">
												<span class="icon"></span>
												<p class="txt">작성된 리뷰가 없습니다.</p>
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
							<div class="tab_cont tab_cont3">
								<div class="driver_box">
									<div class="cardbox">	
										<div class="top">
											<div class="item">
												<div class="imgbox">
													<img src="img/vhc_driver_profile1.jpg" alt="" class="img">
												</div>
												<p class="txt">
													<span class="bold">이현석 기사님</span> <br>
													배정됨
												</p>
											</div>
											<div class="item">
												<div class="imgbox">
													<img src="img/vhc_driver_car1.jpg" alt="" class="img">
												</div>
												<p class="txt">
													<span class="bold">버스</span> <br>
													11인승 차량
												</p>
											</div>
										</div>
										<div class="bottom">
											<div class="total">
												<div class="tit">만족도</div>
												<div class="rate">
													<span class="icon"></span>
													<div class="desc">
														<span class="bold">5</span>
														<span>/</span>
														<span>5</span>
													</div>
												</div>
											</div>
											<div class="bar"></div>
											<div class="list">
												<div class="item">
													<p class="tit">친절도</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">차량상태</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">안전운행</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">시간엄수</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="cardbox">	
										<div class="top">
											<div class="item">
												<div class="imgbox">
													<img src="img/vhc_driver_profile2.jpg" alt="" class="img">
												</div>
												<p class="txt">
													<span class="bold">천종환 기사님</span> <br>
													배정됨
												</p>
											</div>
											<div class="item">
												<div class="imgbox">
													<img src="img/vhc_driver_car1.jpg" alt="" class="img">
												</div>
												<p class="txt">
													<span class="bold">버스</span> <br>
													11인승 차량
												</p>
											</div>
										</div>
										<div class="bottom">
											<div class="total">
												<div class="tit">만족도</div>
												<div class="rate">
													<span class="icon"></span>
													<div class="desc">
														<span class="bold">4.5</span>
														<span>/</span>
														<span>5</span>
													</div>
												</div>
											</div>
											<div class="bar"></div>
											<div class="list">
												<div class="item">
													<p class="tit">친절도</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">차량상태</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">안전운행</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">시간엄수</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="cardbox">	
										<div class="top">
											<div class="item">
												<div class="imgbox">
													<img src="img/vhc_driver_profile3.jpg" alt="" class="img">
												</div>
												<p class="txt">
													<span class="bold">문창민 기사님</span> <br>
													배정됨
												</p>
											</div>
											<div class="item">
												<div class="imgbox">
													<img src="img/vhc_driver_car1.jpg" alt="" class="img">
												</div>
												<p class="txt">
													<span class="bold">버스</span> <br>
													11인승 차량
												</p>
											</div>
										</div>
										<div class="bottom">
											<div class="total">
												<div class="tit">만족도</div>
												<div class="rate">
													<span class="icon"></span>
													<div class="desc">
														<span class="bold">5</span>
														<span>/</span>
														<span>5</span>
													</div>
												</div>
											</div>
											<div class="bar"></div>
											<div class="list">
												<div class="item">
													<p class="tit">친절도</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">차량상태</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">안전운행</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">시간엄수</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="cardbox">	
										<div class="top">
											<div class="item">
												<div class="imgbox">
													<img src="img/vhc_driver_profile4.jpg" alt="" class="img">
												</div>
												<p class="txt">
													<span class="bold">김대영 기사님</span> <br>
													배정됨
												</p>
											</div>
											<div class="item">
												<div class="imgbox">
													<img src="img/vhc_driver_car1.jpg" alt="" class="img">
												</div>
												<p class="txt">
													<span class="bold">버스</span> <br>
													11인승 차량
												</p>
											</div>
										</div>
										<div class="bottom">
											<div class="total">
												<div class="tit">만족도</div>
												<div class="rate">
													<span class="icon"></span>
													<div class="desc">
														<span class="bold">4.5</span>
														<span>/</span>
														<span>5</span>
													</div>
												</div>
											</div>
											<div class="bar"></div>
											<div class="list">
												<div class="item">
													<p class="tit">친절도</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">차량상태</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">안전운행</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star"></span>
													</div>
												</div>
												<div class="item">
													<p class="tit">시간엄수</p>
													<div class="rate">
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star on"></span>
														<span class="star"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>

        </div>


    	<?php include "fixed_nav.php" ?>

    	<?php include "footer.php" ?>


		<!-- review write modal -->
		<div class="modal rv_write_modal">
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
						<div class="bottom">
							<div class="item">
								<p class="title">친절도</p>
								<div class="rating_box">
									<div class="rating">
										<input type="radio" id="star2-5" name="rating2" value="5" class="input_star" checked/>
										<label for="star2-5" class="label_star"></label>
										<input type="radio" id="star2-4" name="rating2" value="4" class="input_star" />
										<label for="star2-4" class="label_star"></label>
										<input type="radio" id="star2-3" name="rating2" value="3" class="input_star" />
										<label for="star2-3" class="label_star"></label>
										<input type="radio" id="star2-2" name="rating2" value="2" class="input_star" />
										<label for="star2-2" class="label_star"></label>
										<input type="radio" id="star2-1" name="rating2" value="1" class="input_star" />
										<label for="star2-1" class="label_star"></label>
									</div>
								</div>
							</div>
							<div class="item">
								<p class="title">차량상태</p>
								<div class="rating_box">
									<div class="rating">
										<input type="radio" id="star3-5" name="rating3" value="5" class="input_star" checked/>
										<label for="star3-5" class="label_star"></label>
										<input type="radio" id="star3-4" name="rating3" value="4" class="input_star" />
										<label for="star3-4" class="label_star"></label>
										<input type="radio" id="star3-3" name="rating3" value="3" class="input_star" />
										<label for="star3-3" class="label_star"></label>
										<input type="radio" id="star3-2" name="rating3" value="2" class="input_star" />
										<label for="star3-2" class="label_star"></label>
										<input type="radio" id="star3-1" name="rating3" value="1" class="input_star" />
										<label for="star3-1" class="label_star"></label>
									</div>
								</div>
							</div>
							<div class="item">
								<p class="title">안전운행</p>
								<div class="rating_box">
									<div class="rating">
										<input type="radio" id="star4-5" name="rating4" value="5" class="input_star" checked/>
										<label for="star4-5" class="label_star"></label>
										<input type="radio" id="star4-4" name="rating4" value="4" class="input_star" />
										<label for="star4-4" class="label_star"></label>
										<input type="radio" id="star4-3" name="rating4" value="3" class="input_star" />
										<label for="star4-3" class="label_star"></label>
										<input type="radio" id="star4-2" name="rating4" value="2" class="input_star" />
										<label for="star4-2" class="label_star"></label>
										<input type="radio" id="star4-1" name="rating4" value="1" class="input_star" />
										<label for="star4-1" class="label_star"></label>
									</div>
								</div>
							</div>
							<div class="item">
								<p class="title">시간엄수</p>
								<div class="rating_box">
									<div class="rating">
										<input type="radio" id="star5-5" name="rating5" value="5" class="input_star" checked/>
										<label for="star5-5" class="label_star"></label>
										<input type="radio" id="star5-4" name="rating5" value="4" class="input_star" />
										<label for="star5-4" class="label_star"></label>
										<input type="radio" id="star5-3" name="rating5" value="3" class="input_star" />
										<label for="star5-3" class="label_star"></label>
										<input type="radio" id="star5-2" name="rating5" value="2" class="input_star" />
										<label for="star5-2" class="label_star"></label>
										<input type="radio" id="star5-1" name="rating5" value="1" class="input_star" />
										<label for="star5-1" class="label_star"></label>
									</div>
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
						<input type="file" id="rv_file" class="input_file"></input>
						<div class="btnbox">
							<button type="button" class="button typeB auto file_btn">파일첨부</button>
							<button type="button" class="button typeA auto">작성하기</button>
						</div>
					</div>
				</div>
			</div>
        </div>


		<!-- review photo modal -->
		<div class="modal rv_photo_modal">
			<div class="modal_box swiper rv_photo_list">
				<div class="swiper-wrapper">
					<div class="swiper-slide item">
						<img src="img/rv_photo1.jpg" alt="" class="img">
					</div>
					<div class="swiper-slide item">
						<img src="img/rv_photo2.jpg" alt="" class="img">
					</div>
					<div class="swiper-slide item">
						<img src="img/rv_photo3.jpg" alt="" class="img">
					</div>
					<div class="swiper-slide item">
						<img src="img/rv_photo4.jpg" alt="" class="img">
					</div>

					<div class="swiper-slide item">
						<img src="img/rv_photo1.jpg" alt="" class="img">
					</div>
					<div class="swiper-slide item">
						<img src="img/rv_photo2.jpg" alt="" class="img">
					</div>
					<div class="swiper-slide item">
						<img src="img/rv_photo3.jpg" alt="" class="img">
					</div>
					<div class="swiper-slide item">
						<img src="img/rv_photo4.jpg" alt="" class="img">
					</div>
					
					<div class="swiper-slide item">
						<img src="img/rv_photo1.jpg" alt="" class="img">
					</div>
					<div class="swiper-slide item">
						<img src="img/rv_photo2.jpg" alt="" class="img">
					</div>
					<div class="swiper-slide item">
						<img src="img/rv_photo3.jpg" alt="" class="img">
					</div>
					<div class="swiper-slide item">
						<img src="img/rv_photo4.jpg" alt="" class="img">
					</div>
				</div>				
				
				<div class="swiper-pagination paging fraction black"></div>						
				<div class="swiper-button-prev prev_btn"></div>      
				<div class="swiper-button-next next_btn"></div>
			</div>
		</div>

		
    </div>



    <!-- JS -->
    <script src="js/common.js"></script>


</body>

</html>