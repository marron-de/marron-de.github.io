<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK TRAVEL</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap mypage_wrap">     


    	<?php include "../common/header_login.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section my_sec">
				<div class="inner mob_inner">
					<div class="sub_titbox">
						<p class="s_tit">마이페이지</p>
						<div class="breadcrumb">
							<a href="<?php echo $path ?>index.php" class="home"></a>
							<span class="bar"></span>
							<span class="catetit">마이페이지</span>
							<span class="bar"></span>
							<div class="catebox">
								<button type="button" class="catetit cate_btn">
									<span class="txt">예약 조회</span>
									<span class="arrow"></span>
								</button>
								<div class="popup cate_popup">
									<div class="linkbox">
										<a href="<?php echo $path ?>mypage/travel.php" class="link on">예약 조회</a>
										<a href="<?php echo $path ?>mypage/wishlist.php" class="link">찜한 상품</a>
										<a href="<?php echo $path ?>mypage/point.php" class="link">포인트</a>
										<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">회원 정보</a>
									</div>
								</div>
							</div>
							<span class="bar"></span>
							<div class="catebox">
								<button type="button" class="catetit cate_btn">
									<span class="txt">여행상품</span>
									<span class="arrow"></span>
								</button>
								<div class="popup cate_popup">
									<div class="linkbox">
										<a href="<?php echo $path ?>mypage/travel.php" class="link">여행상품</a>
										<a href="<?php echo $path ?>mypage/hotel.php" class="link on">호텔예약</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="my_form">
						<p class="s_subtit">결제 상세</p>
						<div class="infobox">
							<div class="infoitem">
								<p class="title">상품 정보</p>
								<div class="listbox">
									<div class="item full">
										<div class="tit">상품명</div>
										<div class="desc">롯데월드 샤론캣 드레스 체험권 / [샤론캣 플레이] 드레스 대여 A타입(30분)</div>
									</div>
									<div class="item">
										<div class="tit">예약 번호</div>
										<div class="desc">D17743392064475C78</div>
									</div>
									<div class="item">
										<div class="tit">예약일</div>
										<div class="desc">2025.06.12</div>
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
									<div class="item full">
										<div class="tit">할인 정보</div>
										<div class="item_flex">
											<div class="descbox">
												<p class="desc">계좌이체 : 850,000원</p>
												<p class="desc">신용카드 : 850,000원</p>
											</div>
											<div class="note">* 금액은 자동으로 미국 달러로 변환됩니다.</div>
										</div>
									</div>
								</div>
							</div>
							<div class="infoitem">
								<p class="title">고객 정보</p>
								<div class="listbox">
									<div class="item">
										<div class="tit">예약자명</div>
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
										<div class="tit">이메일</div>
										<div class="desc">test@testmail.com</div>
									</div>
									<div class="item">
										<div class="tit">SNS 아이디</div>
										<div class="desc">test (카카오톡)</div>
									</div>
								</div>
							</div>
							<div class="infoitem">
								<p class="title">결제 수단</p>
								<div class="paybox">
									<!-- 260408 수정작업 -->
									<div class="payitem on">
										<img src="<?php echo $path ?>img/pay_visa.png" alt="" class="icon">
									</div>
									<div class="payitem">
										<img src="<?php echo $path ?>img/pay_master.png" alt="" class="icon">
									</div>
									<div class="payitem">
										<p class="txt">CREDIT CARD</p>
									</div>
									<div class="payitem">
										<img src="<?php echo $path ?>img/pay_wechat.png" alt="" class="icon">
									</div>
									<div class="payitem">
										<img src="<?php echo $path ?>img/pay_alipay.png" alt="" class="icon">
									</div>
								</div>
							</div>
						</div>
						<div class="button_box ver2">
							<a href="<?php echo $path ?>mypage/hotel.php" class="button typeB medium">목록</a>
							<a href="<?php echo $path ?>reservation/reservation.php" class="button typeA medium">결제</a>
						</div>
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