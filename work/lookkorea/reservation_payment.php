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


    <div class="wrap reserve_wrap">     


    	<?php include "header.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section re_sec">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_tit center">예약하기</p>
					</div>
					<div class="step_box">
						<div class="item on check">
							<p class="txt">
								<span class="num">STEP 1</span>
								<span class="tit">예약 정보</span>
							</p>
							<div class="circle"></div>
						</div>
						<div class="line on"></div>
						<div class="item on check">
							<p class="txt">
								<span class="num">STEP 2</span>
								<span class="tit">예약자 정보</span>
							</p>
							<div class="circle"></div>
						</div>
						<div class="line on"></div>
						<div class="item on">
							<p class="txt">
								<span class="num">STEP 3</span>
								<span class="tit">결제 정보</span>
							</p>
							<div class="circle"></div>
						</div>
					</div>
					<div class="re_contbox">
						<div class="paywrap">
							<p class="s_subtit bold">결제 정보</p>
							<div class="pay_cont">
								<div class="pay_box pay_box1">
									<p class="title">상품 정보</p>
									<div class="tbl_box mob_tbl">
										<table class="tbl">
											<colgroup>
												<col width="200">
												<col width="600">
												<col width="150">
												<col width="140">
											</colgroup>
											<thead>
												<tr>
													<th>예약 번호</th>
													<th>상품명</th>
													<th>출발 일정</th>
													<th>결제 금액</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-th="예약 번호">
														D17487797537B8F244
													</td>
													<td data-th="상품명" class="full_td">
														야간 스키 장비 이용권 + 스키 리프트권/1일권(주중)
													</td>
													<td data-th="출발 일정">2025년 12월 8일</td>
													<td data-th="결제 금액">110,000원</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="pay_box pay_box2">
									<div class="title">특별 할인</div>
									<div class="tbl_box mob_tbl">
										<table class="tbl ver2 price_tbl">
											<colgroup>
												<col width="358">
												<col width="240">
												<col width="240">
												<col width="240">
											</colgroup>
											<thead>
												<tr>
													<th>상품명</th>
													<th>총 상품금액</th>
													<th>카드 결제 할인</th>
													<th>결제 예정 금액</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-th="상품명">야간 스키 장비 이용권 + 스키 리프트권/1일권(주중)</td>
													<td data-th="총 상품금액">
														<p class="price">
															<span class="number">110,000</span>원
														</p>
													</td>
													<td data-th="카드 결제 할인">
														<p class="price">
															<span class="number sale">-25,000</span>원
														</p>
													</td>
													<td data-th="결제 예정 금액">
														<p class="price">
															<span class="number">85,000</span>원
														</p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="pay_box pay_box3">
									<div class="title">예약자 정보</div>
									<div class="info_list">
										<div class="item">
											<div class="tit">성명</div>
											<div class="desc">홍길동</div>
										</div>
										<div class="item">
											<div class="tit">국적</div>
											<div class="desc">대한민국</div>
										</div>
										<div class="item">
											<div class="tit">SNS 아이디</div>
											<div class="desc">test</div>
										</div>
										<div class="item">
											<div class="tit">휴대폰</div>
											<div class="desc">010-1234-5678</div>
										</div>
										<div class="item">
											<div class="tit">이메일</div>
											<div class="desc">test@testmail.com</div>
										</div>
									</div>
								</div>
								<div class="pay_box pay_box4">
									<div class="title">결제 수단</div>
									<div class="contbox">
										<div class="pay_method">
											<div class="item">
												<input type="radio" name="pay_method" id="pay_method1-1" class="input"> 
												<label for="pay_method1-1" class="label">신용카드</label>
											</div>
											<div class="item">
												<input type="radio" name="pay_method" id="pay_method1-2" class="input"> 
												<label for="pay_method1-2" class="label">실시간 계좌이체</label>
											</div>
											<div class="item">
												<input type="radio" name="pay_method" id="pay_method1-3" class="input"> 
												<label for="pay_method1-3" class="label">무통장입금</label>
											</div>
										</div>
										<div class="pay_methodbox">
											<p class="tit">간편결제</p>
											<div class="pay_method ver2">
												<div class="item">
													<input type="radio" name="pay_method" id="pay_method2-1" class="input" checked> 
													<label for="pay_method2-1" class="label">
														<img src="img/pay_kakao.png" alt="" class="icon">
														<span class="txt">카카오페이</span>
													</label>
												</div>
												<div class="item">
													<input type="radio" name="pay_method" id="pay_method2-2" class="input"> 
													<label for="pay_method2-2" class="label">
														<img src="img/pay_naver.png" alt="" class="icon">
														<span class="txt">네이버페이</span>
													</label>
												</div>
												<div class="item">
													<input type="radio" name="pay_method" id="pay_method2-3" class="input"> 
													<label for="pay_method2-3" class="label">
														<img src="img/pay_payco.png" alt="" class="icon">
														<span class="txt">페이코</span>
													</label>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							
						</div>					
						<div class="button_box">
							<button type="button" class="button typeB">취소</button>
							<button type="button" class="button typeA">결제</button>
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


</body>

</html>