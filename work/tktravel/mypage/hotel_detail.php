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
									<span class="txt">호텔예약</span>
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
						<p class="s_subtit">호텔 예약 상세</p>
						<div class="infobox">
							<div class="infoitem">
								<p class="title">기본 정보</p>
								<div class="listbox">
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
									<div class="item full">
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
							<div class="infoitem">
								<p class="title">예약 정보</p>
								<div class="listbox">
									<div class="item full">
										<div class="tit">호텔 이름</div>
										<div class="desc">인천 글로스터 호텔</div>
									</div>
									<div class="item full">
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
										<div class="tit">아동 인원</div>
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
									<div class="item full">
										<div class="tit">바우처</div>
										<div class="desc"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="button_box">
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