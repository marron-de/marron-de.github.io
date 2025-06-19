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


    <div class="wrap mypage_wrap">     


    	<?php include "header2.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section sub_common my_sec">
				<div class="inner layout">
					<div class="side_area">			
    					<?php include "side_menu1.php" ?>
    					<?php include "customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_cont mypage_cont">							
							<div class="info_listwrap">								
								<div class="info_listbox">
									<p class="title">상품 정보</p>
									<div class="tbl_box mob_tbl">
										<table class="tbl medium">
											<colgroup>
												<col width="168">
												<col width="584">
												<col width="98">
												<col width="90">
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
													<td data-th="예약 번호"> L1749119484A30770E </td>
													<td  data-th="상품명" class="full_td">
														인천 글로스터 호텔 / 인천 글로스터 호텔 <br>
														디럭스 더블 (더블베드 1개) [2인 조식 포함]
													</td>
													<td data-th="출발 일정">2025.06.11</td>
													<td data-th="결제 금액">110,000원</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="info_listbox">
									<p class="title">특별 할인</p>
									<div class="tbl_box mob_tbl">
										<table class="tbl ver2 price_tbl medium">
											<colgroup>
												<col width="400">
												<col width="180">
												<col width="180">
												<col width="180">
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
													<td data-th="상품명" class="full_td">
														인천 글로스터 호텔 / 인천 글로스터 호텔 디럭스 더블 (더블베드 1개)
														<br> [2인 조식 포함]
													</td>
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
								<div class="info_listbox">
									<p class="title">예약자 정보</p>
									<div class="info_list">
										<div class="item w100">
											<div class="tit">성명</div>
											<div class="desc">홍길동</div>
										</div>
										<div class="item w100">
											<div class="tit">국적</div>
											<div class="desc">대한민국</div>
										</div>
										<div class="item w100">
											<div class="tit">SNS 아이디</div>
											<div class="desc">test</div>
										</div>
										<div class="item w100">
											<div class="tit">휴대폰</div>
											<div class="desc">010-1234-5678</div>
										</div>
										<div class="item w100">
											<div class="tit">이메일</div>
											<div class="desc">test@testmail.com</div>
										</div>
									</div>
								</div>
								<div class="info_listbox">
									<p class="title">결제 수단</p>
									<div class="pay_contbox">
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
								<div class="button_box">
									<button type="button" class="button medium typeA auto">결제</button>
								</div>
							</div>
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

	<!-- 화면 : 사이드메뉴 active -->
	<script>
  		 $(function() {
			$('.side_menu .side_menulist .menuitem').eq(0).addClass('active');
			$('.side_menu .side_menulist .menuitem').eq(0).addClass('show');
			$('.side_menu .side_menulist .menuitem').eq(0).find(".acc_cont").show();
			$('.side_menu .side_menulist .menuitem').eq(0).find(".side_menu_sublist .item").eq(1).addClass('on');
		});
	</script>


</body>

</html>