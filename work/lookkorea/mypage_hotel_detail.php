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
									<p class="title">기본 정보</p>
									<div class="info_list">
										<div class="item">
											<div class="tit">바우처 번호</div>
											<div class="desc">1234567890</div>
										</div>
										<div class="item">
											<div class="tit">날짜</div>
											<div class="desc">2025.06.05</div>
										</div>
										<div class="item">
											<div class="tit">성명</div>
											<div class="desc">홍길동</div>
										</div>
										<div class="item">
											<div class="tit">국적</div>
											<div class="desc">대한민국</div>
										</div>
										<div class="item">
											<div class="tit">휴대폰</div>
											<div class="desc">010-1234-5678</div>
										</div>
										<div class="item">
											<div class="tit">전화번호</div>
											<div class="desc">02-1234-5678</div>
										</div>
										<div class="item">
											<div class="tit">이메일</div>
											<div class="desc">test@testmail.com</div>
										</div>
										<div class="item">
											<div class="tit">SNS 아이디</div>
											<div class="desc">test</div>
										</div>
										<div class="item w100">
											<div class="tit">특별 요청</div>
											<div class="desc">
												특별 요청입니다. 특별 요청입니다. <br>
												특별 요청입니다. 특별 요청입니다. <br>
												특별 요청입니다. 특별 요청입니다. <br>
												특별 요청입니다. 특별 요청입니다.
											</div>
										</div>
									</div>
								</div>
								<div class="info_listbox">
									<p class="title">예약 정보</p>
									<div class="info_list">
										<div class="item">
											<div class="tit">호텔 이름</div>
											<div class="desc">인천 글로스터 호텔</div>
										</div>
										<div class="item">
											<div class="tit">객실 유형</div>
											<div class="desc">디럭스 더블 (더블 침대 1개) [2인 조식 포함]</div>
										</div>
										<div class="item">
											<div class="tit">체크인</div>
											<div class="desc">2025.06.11</div>
										</div>
										<div class="item">
											<div class="tit">체크아웃</div>
											<div class="desc">2025.06.12</div>
										</div>
										<div class="item">
											<div class="tit">숙박 일수</div>
											<div class="desc">1박</div>
										</div>
										<div class="item">
											<div class="tit">객실 수</div>
											<div class="desc">1</div>
										</div>
										<div class="item">
											<div class="tit">성인 인원</div>
											<div class="desc">1명</div>
										</div>
										<div class="item">
											<div class="tit">어린이 인원</div>
											<div class="desc">0명</div>
										</div>
										<div class="item">
											<div class="tit">추가 옵션</div>
											<div class="desc">얼리 체크인 : 0</div>
										</div>
										<div class="item">
											<div class="tit">처리 상태</div>
											<div class="desc">
												<span class="bold">결제대기중</span>
											</div>
										</div>
										<div class="item">
											<div class="tit">결제 금액</div>
											<div class="desc">850,000원</div>
										</div>
										<div class="item">
											<div class="tit">미결제 금액</div>
											<div class="desc">850,000원</div>
										</div>
										<div class="item w100">
											<div class="tit">영수증</div>
											<div class="desc"></div>
										</div>
									</div>
								</div>
								<div class="button_box">
									<button type="button" class="button medium typeB auto">목록</button>
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