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


    <div class="wrap reserve_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section ver2 re_sec complete">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_tit flexible">
							<span class="txt">결제완료</span>
							<img src="<?php echo $path ?>img/ic_complete.png" alt="" class="icon">
						</p>
						<p class="s_sub">
							결제가 완료되었습니다. <br>
							예약내역은 예약조회에서 확인하실 수 있습니다.
						</p>
					</div>
					<div class="infobox">
						<p class="title">롯데월드 샤론캣 드레스 체험권</p>
						<div class="descbox">
							<div class="descitem">
								<p class="tit">예약 번호</p>
								<p class="desc">
									D17487797537B8F244
								</p>
							</div>
							<div class="descitem">
								<p class="tit">상품 옵션</p>
								<p class="desc">
									[샤론캣 플레이] 드레스 대여 A타입(30분)
								</p>
							</div>
							<div class="descitem">
								<p class="tit">상품 일정</p>
								<p class="desc">
									2025.12.08 19:00~03:00
								</p>
							</div>
							<div class="descitem total">
								<p class="tit">결제 금액</p>
								<p class="desc">
									56,000원
								</p>
							</div>
						</div>
					</div>
					<div class="button_box">
						<a href="<?php echo $path ?>mypage/travel.php" class="button typeB">예약조회</a>
						<a href="<?php echo $path ?>index.php" class="button typeA">메인으로</a>
					</div>
				</div>
			</section>

        </div>


    	<?php include "../common/fixed_nav.php" ?>

    	<?php include "../common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include "../common/footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>



</body>

</html>