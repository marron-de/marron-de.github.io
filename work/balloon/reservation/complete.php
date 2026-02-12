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

			<section class="sub_section re_sec complete">
				<div class="inner">
					<div class="sub_titbox ver2">
						<p class="s_tit flexible">
							<span class="txt">결제완료</span>
							<img src="<?php echo $path ?>img/ic_complete.png" alt="" class="icon">
						</p>
						<p class="s_desc">
							결제가 완료되었습니다. <br>
							예약내역은 예약조회에서 확인하실 수 있습니다.
						</p>
					</div>
					<div class="infobox">
						<p class="title">부여 열기구 자유여행 탑승권</p>
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
									1인 탑승권(주중 성인) + 1인 탑승권(주중 소인)
								</p>
							</div>
							<div class="descitem">
								<p class="tit">상품 일정</p>
								<p class="desc">
									2026.01.16 (금)
								</p>
							</div>
							<div class="descitem total">
								<p class="tit">결제 금액</p>
								<p class="desc">
									460,000원
								</p>
							</div>
						</div>
					</div>
					<div class="button_box">
						<a href="<?php echo $path ?>mypage/bookings.php" class="button typeB">예약조회</a>
						<a href="<?php echo $path ?>index.php" class="button typeA">메인으로</a>
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