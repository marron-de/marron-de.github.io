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


    <div class="wrap reservation_wrap ver2">     


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
									<a href="<?php echo $path ?>certification/certification.php" class="link">인증현황</a>
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

			<section class="sub_section re_sec">
				<div class="inner2 layout">
					<div class="cont_area">
						<div class="re_sec re_sec_detail">
							<div class="re_box">
								<div class="re_contbox">
									<p class="prd_tit">부여 열기구 자유여행 탑승권</p>
									<div class="prd_info">
										<div class="titbox">
											<p class="date">
												2026.01.16 (금)
											</p>
											<button type="button" class="more_btn">
												<span class="txt">서비스 포함/불포함 확인</span>
												<span class="arrow"></span>
											</button>
										</div>
										<div class="contbox">
											<div class="contitem">
												<p class="tit">서비스 포함</p>
												<div class="descbox">
													<p class="dot_txt">전문 조종사 및 운영 스태프 동승</p>
													<p class="dot_txt">비행 전 안전 브리핑 및 인플레이션 체험</p>
													<p class="dot_txt">비행인증서 발급</p>
													<p class="dot_txt">기념촬영</p>
													<p class="dot_txt">탑승자 보험 가입</p>
												</div>
											</div>
											<div class="contitem">
												<p class="tit">서비스 불포함</p>
												<div class="descbox">
													<p class="dot_txt">개인 비용</p>
													<p class="dot_txt">개인 간식 및 음료</p>
													<p class="dot_txt">개인 촬영 장비 대여</p>
													<p class="dot_txt">기상 악화로 인한 일정 변경 시 발생하는 개인 비용</p>
												</div>
											</div>
										</div>
									</div>
									<div class="prd_opt">
										<div class="titbox">
											<p class="tit">1인 탑승권(주중 성인) + 1인 탑승권(주중 소인)</p>
											<p class="price">상품 금액  :  480,000원</p>
										</div>
										<div class="contbox">
											<div class="contitem">
												<div class="top">
													<p class="txt">성인</p>
													<p class="count">2명</p>
												</div>
												<div class="bottom">
													<p class="price">
														<span class="num">380,000</span>원
													</p>
												</div>
											</div>
											<div class="contitem">
												<div class="top">
													<p class="txt">아동</p>
													<p class="count">1명</p>
												</div>
												<div class="bottom">
													<p class="price">
														<span class="num">120,000</span>원
													</p>
												</div>
											</div>
											<div class="contitem">
												<div class="top">
													<p class="txt">추가옵션</p>
													<p class="count">0개</p>
												</div>
												<div class="bottom">
													<p class="price">
														<span class="num">0</span>원
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="re_sec re_sec_info">
							<div class="re_box re_box1">
								<div class="re_titbox">
									<p class="re_tit">예약자 정보</p>
								</div>
								<div class="re_contbox">
									<div class="form_box">
										<div class="form_item input_box">
											<p class="label_text felxible">
												<span class="required">성명</span>
											</p>
											<input type="text" class="input_text" placeholder="이름을 입력해주세요" value="홍길동">
										</div>
										<div class="form_item input_box">
											<p class="label_text">
												<span class="required">성별</span>
											</p>
											<div class="radio_wrap mh">
												<div class="radio_box ">
													<input type="radio" name="gender" id="gender_w" class="input_radio" checked>
													<label for="gender_w" class="label_radio">여성</label>
												</div>
												<div class="radio_box">
													<input type="radio" name="gender" id="gender_m" class="input_radio">
													<label for="gender_m" class="label_radio">남성</label>
												</div>
											</div>
										</div>
										<div class="form_item input_box">
											<p class="label_text">
												<span class="required">국적</span>
											</p>
											<div class="select_box">
												<select class="select">
													<option value="">국적을 선택해주세요</option>
													<option value="kr">대한민국</option>
													<option value="us">미국</option>
													<option value="jp">일본</option>
													<option value="cn">중국</option>
													<option value="de">독일</option>
												</select>
											</div>
										</div>
										<div class="form_item input_box">
											<label class="label_text required">
												<span class="required">휴대폰</span>
											</label>
											<input type="text" class="input_text" placeholder="휴대폰 번호를 입력해 주세요">
										</div>
										<div class="form_item input_box">
											<p class="label_text">
												<span class="required">이메일</span>
											</p>
											<input type="text" class="input_text" placeholder="이메일를 입력해 주세요">
										</div>
										<div class="form_item input_box">
											<label class="label_text">
												<span class="required">SNS 아이디</span>
											</label>
											<div class="input_flex">
												<div class="select_box sns_select">
													<select class="select">
														<option value="카카오톡">카카오톡</option>
														<option value="페이스북">페이스북</option>
														<option value="구글">구글</option>
														<option value="네이버">네이버</option>
													</select>
												</div>
												<input type="text" class="input_text" placeholder="아이디를 입력해 주세요">
											</div>
										</div>
										<div class="form_item input_box full">
											<label class="label_text">문의사항</label>
											<textarea class="input_text h100" placeholder="문의사항을 입력해주세요."></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="re_box re_box2">
								<div class="re_titbox">
									<p class="re_tit">
										<span class="tit">
										참가자 정보</span>
										<span class="point">탑승객 전원의 정보를 입력해주세요</span>
									</p>
									<div class="check_box">
										<input type="checkbox" name="infoSame" id="infoSame" class="input_check">
										<label for="infoSame" class="label_check">위의 예약 정보와 동일</label>
									</div>
								</div>
								<div class="re_contbox">
									<div class="tbl_box mob_tbl">
										<table class="tbl">
											<colgroup>
												<col style="width: 120px;">
												<col style="width: 120px;">
												<col style="width: 120px;">
												<col style="width: 150px;">
												<col style="width: 100px;">									
												<col style="width: 160px;">
												<col style="width: 80px;">
											</colgroup>
											<thead>
												<tr>
													<th>구분</th>
													<th>성명</th>
													<th>성별</th>
													<th>생년월일</th>
													<th>몸무게</th>
													<th>휴대폰</th>
													<th>처리</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-th="구분">
														<div class="select_box">
															<select class="select full">
																<option value="">선택</option>
																<option value="성인">성인</option>
																<option value="아동">아동</option>
															</select>
														</div>
													</td>
													<td data-th="성명">
														<div class="input_box">
															<input type="text" class="input_text" placeholder="성명">
														</div>
													</td>
													<td data-th="성별">
														<div class="select_box">
															<select class="select full">
																<option value="">선택</option>
																<option value="여성">여성</option>
																<option value="남성">남성</option>
															</select>
														</div>
													</td>
													<td data-th="생년월일">
														<div class="input_box">
															<input type="text" class="input_text" placeholder="YYYY-MM-DD">
														</div>
													</td>
													<td data-th="몸무게">
														<div class="input_box">
															<div class="input_flex">
																<input type="text" class="input_text input_weight" value="0">
																<span class="input_txt">kg</span>
															</div>
														</div>
													</td>
													<td data-th="휴대폰">
														<div class="input_box">
															<input type="text" class="input_text" placeholder="000-0000-0000">
														</div>
													</td>
													<td data-th="처리">
														<button type="button" class="icon_btn del_btn">
															<img src="<?php echo $path ?>img/del_icon.png" alt="" class="icon">
														</button>
													</td>
												</tr>
												<tr>
													<td data-th="구분">
														<div class="select_box">
															<select class="select full">
																<option value="">선택</option>
																<option value="성인">성인</option>
																<option value="아동">아동</option>
															</select>
														</div>
													</td>
													<td data-th="성명">
														<div class="input_box">
															<input type="text" class="input_text" placeholder="성명">
														</div>
													</td>
													<td data-th="성별">
														<div class="select_box">
															<select class="select full">
																<option value="">선택</option>
																<option value="여성">여성</option>
																<option value="남성">남성</option>
															</select>
														</div>
													</td>
													<td data-th="생년월일">
														<div class="input_box">
															<input type="text" class="input_text" placeholder="YYYY-MM-DD">
														</div>
													</td>
													<td data-th="몸무게">
														<div class="input_box">
															<div class="input_flex">
																<input type="text" class="input_text input_weight" value="0">
																<span class="input_txt">kg</span>
															</div>
														</div>
													</td>
													<td data-th="휴대폰">
														<div class="input_box">
															<input type="text" class="input_text" placeholder="000-0000-0000">
														</div>
													</td>
													<td data-th="처리">
														<button type="button" class="icon_btn del_btn">
															<img src="<?php echo $path ?>img/plus_icon.png" alt="" class="icon">
														</button>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="re_sec re_sec_pay">
							<div class="re_box">
								<div class="re_titbox">
									<p class="re_tit">결제 수단</p>
								</div>
								<div class="re_contbox">
									<div class="paybox">
										<div class="payitem on">
											<span class="badge">즉시할인</span>
											<p class="txt">퀵계좌이체</p>
										</div>
										<div class="payitem">
											<p class="txt">신용·체크카드</p>
										</div>
										<div class="payitem">
											<span class="badge">할인혜택</span>
											<img src="<?php echo $path ?>img/pay_tosspay.png" alt="" class="icon">
										</div>
										<div class="payitem">
											<img src="<?php echo $path ?>img/pay_npay.png" alt="" class="icon">
										</div>
										<div class="payitem">
											<img src="<?php echo $path ?>img/pay_kakaopay.png" alt="" class="icon">
										</div>
										<!-- <div class="payitem">
											<img src="<?php echo $path ?>img/pay_payco.png" alt="" class="icon">
										</div> -->
										<!-- TK TRAVEL
										<div class="payitem">
											<img src="<?php echo $path ?>img/pay_wechat.png" alt="" class="icon">
										</div>
										<div class="payitem">
											<img src="<?php echo $path ?>img/pay_alipay.png" alt="" class="icon">
										</div>
										-->
									</div>
									<div class="paybanner">
										<div class="banner typeA">
											<img src="<?php echo $path ?>img/pay_coupon.png" alt="" class="icon">
											<p class="txt">
												<span class="color">
													퀵계좌이체는 250원 할인
												</span>
											</p>
											<button type="button" class="btn">할인받기</button>
										</div>
										<div class="banner typeB">
											<img src="<?php echo $path ?>img/pay_shinhan.png" alt="" class="icon">
											<p class="txt">신한카드 최대 3개월 무이자 할부</p>
										</div>
										<div class="descbox">
											<p class="desc">
												<span class="bold">퀵계좌이체</span> · 1만원 이상 결제 시 0.5% 즉시할인 (최대 100만원 할인)
											</p>
											<button type="button" class="more_btn">
												<span class="txt">신용카드 무이자 할부 안내</span>
												<span class="arrow"></span>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="side_area">
						<div class="mob_side_box">
							<div class="btn_box">
								<p class="total">총 480,000원</p>
								<button type="button" class="button typeA reserve_btn">결제하기</button>
							</div>
						</div>
						<div class="side_box">
							<div class="titbox">
								<p class="tit">결제정보</p>
							</div>
							<div class="info_box">
								<div class="item">
									<p class="tit">총 상품금액</p>
									<p class="desc">480,000원</p>
								</div>
								<div class="item">
									<p class="tit">할인 금액</p>
									<p class="desc"><span class="point">-20,000</span>원</p>
								</div>
								<div class="item total">
									<p class="tit">최종 결제 금액</p>
									<p class="desc">460,000원</p>
								</div>
							</div>	
							<div class="term_box">
								<div class="check_box allCheck">
									<input type="checkbox" name="terms" id="allTerms" class="input_check">
									<label for="allTerms" class="label_check all_check">모든 약관 동의</label>
								</div>
								<div class="check_box">
									<input type="checkbox" name="terms" id="terms" class="input_check" checked>
									<label for="terms" class="label_check">
										<span class="bold">(필수)</span> 이용약관 동의
									</label>
									<button type="button" class="more_btn" onclick="terms_popup()"></button>
								</div>
								<div class="check_box">
									<input type="checkbox" name="terms" id="privacy" class="input_check">
									<label for="privacy" class="label_check">
										<span class="bold">(필수)</span> 개인정보 수집 및 이용 동의
									</label>
									<button type="button" class="more_btn" onclick="privacy_popup()"></button>
								</div>
								<div class="check_box">
									<input type="checkbox" name="terms" id="refund" class="input_check">
									<label for="refund" class="label_check">
										<span class="bold">(필수)</span> 취소 및 환불 안내
									</label>
									<button type="button" class="more_btn" onclick="refund_popup()"></button>
								</div>
							</div>
							<div class="btnbox">
								<a href="<?php echo $path ?>reservation/complete.php" type="button" class="button typeA pay_btn">460,000원 결제하기</a>
							</div>	
						</div>			
					</div>
				</div>
			</section>
			
        </div>


    	<?php include $path."common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include $path."common/footer.php" ?>
		
    </div>


    <!-- JS -->
    <script src="<?php echo $path ?>js/common.js"></script>


</body>

</html>