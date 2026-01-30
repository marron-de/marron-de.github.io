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


    <div class="wrap mypage_wrap">     


    	<?php include $path."common/header.php" ?>

    	<?php include $path."common/fixed_nav.php" ?>

    	<?php include $path."common/navbox.php" ?>


		<!-- container -->
		<div class="container">

			<div class="sub_topbanner">
				<div class="banner">
					<p class="sub">My Account</p>
					<p class="tit">마이페이지</p>
					<div class="breadcrumb">
						<a href="<?php echo $path ?>index.php" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">마이페이지</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>company/about.php" class="link">회사소개</a>
									<a href="<?php echo $path ?>flights/free.php" class="link">열기구체험</a>
									<a href="<?php echo $path ?>reservation/list.php" class="link">예약하기</a>
									<a href="<?php echo $path ?>community/notice.php" class="link">커뮤니티</a>
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link on">마이페이지</a>
								</div>
							</div>
						</div>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">예약조회</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">회원정보</a>
									<a href="<?php echo $path ?>mypage/profile_delete.php" class="link">회원탈퇴</a>
									<a href="<?php echo $path ?>mypage/bookings.php" class="link on">예약조회</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="sub_section my_sec">
				<div class="inner mob_inner">
					<div class="board_titbox">
						<p class="s_tit">예약조회</p>
						<p class="desc">MY BOOKINGS</p>
					</div>
					<div class="my_reserve">
						<div class="contbox">
							<div class="item">
								<div class="topbox">
									<div class="leftbox">
										<div class="state">
											<span class="badge type_wait">결제대기</span>
											<span class="txt">무통장 입금</span>
										</div>
									</div>
									<div class="rightbox">
										<p class="date">결제일시 :  2026년 01월 16일 11:25AM</p>
									</div>
								</div>
								<div class="prdbox">
									<div class="imgbox">
										<a href="<?php echo $path ?>reservation/view.php" class="link">
											<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<p class="title">
											부여 열기구 자유여행 탑승권
										</p>
										<div class="descbox">
											<div class="descitem">
												<p class="tit">1인 탑승권(주중 성인) / 2개</p>
												<p class="desc">180,000원</p>
											</div>
											<div class="descitem">
												<p class="tit">1인 탑승권(주중 소인) / 1개</p>
												<p class="desc">120,000원</p>
											</div>
											<div class="descitem total">
												<p class="tit">총 상품 금액</p>
												<p class="desc">480,000원</p>
											</div>
										</div>
									</div>
								</div>
								<div class="btnbox">
									<a href="<?php echo $path ?>" class="button typeB">예약상세</a>
									<a href="<?php echo $path ?>community/contact.php" class="button typeB">문의하기</a>
									<a href="<?php echo $path ?>reservation/reservation.php" class="button typeA">결제하기</a>
									<a href="<?php echo $path ?>reservation/view.php#Review" class="button typeF">리뷰작성</a>
								</div>
							</div>
							<div class="item">
								<div class="topbox">
									<div class="leftbox">
										<div class="state">
											<span class="badge type_cancel">취소완료</span>
											<span class="txt">신용카드 취소</span>
										</div>
									</div>
									<div class="rightbox">
										<p class="date">결제일시 :  2026년 01월 16일 11:25AM</p>
									</div>
								</div>
								<div class="prdbox">
									<div class="imgbox">
										<a href="<?php echo $path ?>reservation/view.php" class="link">
											<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<p class="title">
											부여 열기구 자유여행 탑승권
										</p>
										<div class="descbox">
											<div class="descitem">
												<p class="tit">1인 탑승권(주중 성인) / 2개</p>
												<p class="desc">180,000원</p>
											</div>
											<div class="descitem">
												<p class="tit">1인 탑승권(주중 소인) / 1개</p>
												<p class="desc">120,000원</p>
											</div>
											<div class="descitem total">
												<p class="tit">총 상품 금액</p>
												<p class="desc">480,000원</p>
											</div>
										</div>
									</div>
								</div>
								<div class="btnbox">
									<a href="<?php echo $path ?>" class="button typeB">예약상세</a>
									<a href="<?php echo $path ?>community/contact.php" class="button typeB">문의하기</a>
									<button type="button" class="button typeB">취소요청</button>
									<a href="<?php echo $path ?>reservation/view.php#Review" class="button typeF">리뷰작성</a>
								</div>
							</div>
							<div class="item">
								<div class="topbox">
									<div class="leftbox">
										<div class="state">
											<span class="badge type_complete">결제완료</span>
											<span class="txt">신용카드 결제</span>
										</div>
									</div>
									<div class="rightbox">
										<p class="date">결제일시 :  2026년 01월 16일 11:25AM</p>
									</div>
								</div>
								<div class="prdbox">
									<div class="imgbox">
										<a href="<?php echo $path ?>reservation/view.php" class="link">
											<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<p class="title">
											부여 열기구 자유여행 탑승권
										</p>
										<div class="descbox">
											<div class="descitem">
												<p class="tit">1인 탑승권(주중 성인) / 2개</p>
												<p class="desc">180,000원</p>
											</div>
											<div class="descitem">
												<p class="tit">1인 탑승권(주중 소인) / 1개</p>
												<p class="desc">120,000원</p>
											</div>
											<div class="descitem total">
												<p class="tit">총 상품 금액</p>
												<p class="desc">480,000원</p>
											</div>
										</div>
									</div>
								</div>
								<div class="btnbox">
									<a href="<?php echo $path ?>" class="button typeB">예약상세</a>
									<a href="<?php echo $path ?>community/contact.php" class="button typeB">문의하기</a>
									<button type="button" class="button typeB">취소요청</button>
									<a href="<?php echo $path ?>reservation/view.php#Review" class="button typeF">리뷰작성</a>
								</div>
							</div>
							<div class="item">
								<div class="topbox">
									<div class="leftbox">
										<div class="state">
											<span class="badge type_complete2">사용완료</span>
											<span class="txt">이용완료</span>
										</div>
									</div>
									<div class="rightbox">
										<p class="date">결제일시 :  2026년 01월 16일 11:25AM</p>
									</div>
								</div>
								<div class="prdbox">
									<div class="imgbox">
										<a href="<?php echo $path ?>reservation/view.php" class="link">
											<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<p class="title">
											부여 열기구 자유여행 탑승권
										</p>
										<div class="descbox">
											<div class="descitem">
												<p class="tit">1인 탑승권(주중 성인) / 2개</p>
												<p class="desc">180,000원</p>
											</div>
											<div class="descitem">
												<p class="tit">1인 탑승권(주중 소인) / 1개</p>
												<p class="desc">120,000원</p>
											</div>
											<div class="descitem total">
												<p class="tit">총 상품 금액</p>
												<p class="desc">480,000원</p>
											</div>
										</div>
									</div>
								</div>
								<div class="btnbox">
									<a href="<?php echo $path ?>" class="button typeB">예약상세</a>
									<a href="<?php echo $path ?>community/contact.php" class="button typeB">문의하기</a>
									<button type="button" class="button typeB" disabled>취소요청</button>
									<a href="<?php echo $path ?>reservation/view.php#Review" class="button typeF">리뷰작성</a>
								</div>
							</div>
						</div>
						<div class="pagination">
							<button type="button" class="page page_btn prev"></button>
							<a href="" class="page page_link active">1</a>
							<a href="" class="page page_link">2</a>
							<span class="page page_ellipsis">...</span>
							<a href="" class="page page_link">9</a>
							<a href="" class="page page_link">10</a>
							<button type="button" class="page page_btn next"></button>
						</div>
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