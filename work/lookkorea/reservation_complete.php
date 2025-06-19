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
						<div class="item on check">
							<p class="txt">
								<span class="num">STEP 3</span>
								<span class="tit">결제 정보</span>
							</p>
							<div class="circle"></div>
						</div>
					</div>
					<div class="re_contbox">
						<div class="complete_box">
							<div class="titbox">
								<img src="img/move_check.gif" alt="" class="icon">
								<p class="tit">결제완료</p>
								<p class="desc">
									결제가 완료되었습니다. <br>
									예약내역은 예약조회에서 확인하실 수 있습니다.
								</p>
							</div>
							<div class="infobox">
								<div class="item">
									<p class="tit">예약 번호</p>
									<p class="desc">D17487797537B8F244</p>
								</div>
								<div class="item">
									<p class="tit">상품명</p>
									<p class="desc">야간 스키 장비 이용권 + 스키 리프트권/1일권(주중)</p>
								</div>
								<div class="item">
									<p class="tit">출발 일정</p>
									<p class="desc">2025년 12월 8일</p>
								</div>
							</div>
						</div>
									
						<div class="button_box">
							<button type="button" class="button typeB">예약조회</button>
							<button type="button" class="button typeA">메인으로</button>
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