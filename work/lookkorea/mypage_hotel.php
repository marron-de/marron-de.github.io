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
									<p class="title">호텔 예약</p>
									<div class="btnbox">
										<button type="button" class="button typeA auto">결제</button>
										<button type="button" class="button typeA auto">신청 취소</button>
									</div>
								</div>
								<div class="tbl_box">
									<table class="tbl ver2 medium">
										<colgroup>
											<col width="52">
											<col width="102">
											<col width="215">
											<col width="190">
											<col width="96">
											<col width="100">
											<col width="95">
											<col width="90">
										</colgroup>
										<thead>
											<tr>
												<th>
													<div class="check_box">
														<input type="checkbox" class="input_check" name="tbl_chk" id="tbl_allChk">
													</div>
												</th>
												<th>날짜</th>
												<th>호텔 이름</th>
												<th>객실 유형</th>
												<th>체크인</th>
												<th>체크아웃</th>
												<th>결제 금액</th>
												<th>처리 상태</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="chk">
													<div class="check_box">
														<input type="checkbox" class="input_check" name="tbl_chk" id="tbl_chk1" checked>
													</div>
												</td>
												<td>
													2025.06.05
												</td>
												<td class="full_td">
													<p class="txt">
														홍천 대명 소노 비발디파크 리조트 (SONOBELLE)
													</p>
												</td>
												<td>
													패밀리룸 <br>
													<span class="small">
													(더블 침대 1개) [2인 조식 포함]
													</span>
												</td>
												<td>2025.06.11</td>
												<td>2025.06.12</td>
												<td>850,000원</td>
												<td>
													<span class="bold">결제대기중</span>
												</td>
											</tr>
											<tr>
												<td class="chk">
													<div class="check_box">
														<input type="checkbox" class="input_check" name="tbl_chk" id="tbl_chk2">
													</div>
												</td>
												<td>
													2025.06.05
												</td>
												<td class="full_td">
													<p class="txt">
														인천 글로스터 호텔
													</p>
												</td>
												<td>
													패밀리룸 <br>
													<span class="small">
													(더블 침대 1개) [2인 조식 포함]
													</span>
												</td>
												<td>2025.06.11</td>
												<td>2025.06.12</td>
												<td>850,000원</td>
												<td>
													<span class="bold">결제완료</span>
												</td>
											</tr>
											<tr>
												<td class="chk">
													<div class="check_box">
														<input type="checkbox" class="input_check" name="tbl_chk" id="tbl_chk3">
													</div>
												</td>
												<td>
													2025.06.05
												</td>
												<td class="full_td">
													<p class="txt">
														인천 글로스터 호텔
													</p>
												</td>
												<td>
													패밀리룸 <br>
													<span class="small">
													(더블 침대 1개) [2인 조식 포함]
													</span>
												</td>
												<td>2025.06.11</td>
												<td>2025.06.12</td>
												<td>850,000원</td>
												<td>
													<span class="bold">결제완료</span>
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
			$('.side_menu .side_menulist .menuitem').eq(0).find(".side_menu_sublist .item").eq(1).addClass('on');
		});
	</script>


</body>

</html>