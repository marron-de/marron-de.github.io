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
							<div class="tbl_cont">
								<div class="tbl_titbox">
									<p class="title">여행 상품</p>
									<div class="btnbox">
										<button type="button" class="button typeA auto">신청 취소</button>
									</div>
								</div>
								<div class="tbl_box">
									<table class="tbl ver2 medium">
										<colgroup>
											<col width="160">
											<col width="112">
											<col width="320">
											<col width="70">
											<col width="95">
											<col width="90">
											<col width="93">
										</colgroup>
										<thead>
											<tr>
												<th>날짜</th>
												<th>바우처 번호</th>
												<th>상품명/여행 일정</th>
												<th>인원수</th>
												<th>결제 금액</th>
												<th>처리 상태</th>
												<th>취소</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													주문일 : 2025.06.05 <br>
													사용일자 : 2025.12.08
												</td>
												<td>1234567890</td>
												<td class="full_td">
													<p class="txt">
														홍천 대명 소노 비발디파크 야간 스키 이용권/야간 스키 개인 레슨/야간 스키 장비 이용권 + 스키 리프트권/1 홍천 대명 소노 비발디파크 야간 스키 이용권/야간 스키 개인 레슨/야간 스키 장비 이용권 + 스키 리프트권/1
													</p>
												</td>
												<td>1</td>
												<td>850,000원</td>
												<td>
													<span class="bold">결제대기중</span>
												</td>
												<td>
													<span class="bold"></span>
												</td>
											</tr>
											<tr>
												<td>
													주문일 : 2025.06.05 <br>
													사용일자 : 2025.12.08
												</td>
												<td>1234567890</td>
												<td class="full_td">
													<p class="txt">
														[서울 출발] 진해 로맨틱 벚꽃길 1일 투어
													</p>
												</td>
												<td>1</td>
												<td>850,000원</td>
												<td>
													<span class="bold">결제완료</span>
												</td>
												<td>
													<span class="bold"></span>
												</td>
											</tr>
											<tr>
												<td>
													주문일 : 2025.06.05 <br>
													사용일자 : 2025.12.08
												</td>
												<td>1234567890</td>
												<td class="full_td">
													<p class="txt">
														[서울 출발] 진해 로맨틱 벚꽃길 1일 투어
													</p>
												</td>
												<td>1</td>
												<td>850,000원</td>
												<td>
													<span class="bold">결제완료</span>
												</td>
												<td>
													<span class="bold">취소완료</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<p class="note_txt small">
									* 홈페이지에서는 직접 주문을 취소하실 수 없습니다. 취소를 원하시는 경우 cs@tktravelkorea.com으로 이메일을 보내주시면 24시간(영업일 기준) 이내에 처리해 드리겠습니다.
								</p>
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
			$('.side_menu .side_menulist .menuitem').eq(0).find(".side_menu_sublist .item").eq(0).addClass('on');
		});
	</script>


</body>

</html>