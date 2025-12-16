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
										<a href="<?php echo $path ?>mypage/travel.php" class="link on">여행상품</a>
										<a href="<?php echo $path ?>mypage/hotel.php" class="link">호텔예약</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="my_reserve">
						<p class="s_subtit">여행 상품</p>
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
										<p class="date">결제일시 :  2025년 11월 25일 11:25AM</p>
									</div>
								</div>
								<div class="prdbox">
									<div class="imgbox">
										<a href="<?php echo $path ?>product/view.php" class="link">
											<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<p class="title">
											롯데월드 샤론캣 드레스 체험권 <br>
											[샤론캣 플레이] 드레스 대여 A타입(30분)
										</p>
										<div class="descbox">
											<div class="descitem">
												<p class="tit">대인 자유이용권 / 2개</p>
												<p class="desc">10,000원</p>
											</div>
											<div class="descitem">
												<p class="tit">소인 자유이용권 / 2개</p>
												<p class="desc">10,000원</p>
											</div>
											<div class="descitem total">
												<p class="tit">총 상품 금액</p>
												<p class="desc">20,000원</p>
											</div>
										</div>
									</div>
								</div>
								<div class="btnbox">
									<a href="<?php echo $path ?>" class="button typeB">예약상세</a>
									<a href="<?php echo $path ?>cs/qna_online.php" class="button typeB">문의하기</a>
									<a href="<?php echo $path ?>reservation/reservation.php" class="button typeA">결제하기</a>
									<a href="<?php echo $path ?>product/view.php#Review" class="button typeE">리뷰작성</a>
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
										<p class="date">결제일시 :  2025년 11월 25일 11:25AM</p>
									</div>
								</div>
								<div class="prdbox">
									<div class="imgbox">
										<a href="<?php echo $path ?>product/view.php" class="link">
											<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<p class="title">
											롯데월드 샤론캣 드레스 체험권 <br>
											[샤론캣 플레이] 드레스 대여 A타입(30분)
										</p>
										<div class="descbox">
											<div class="descitem">
												<p class="tit">대인 자유이용권 / 2개</p>
												<p class="desc">10,000원</p>
											</div>
											<div class="descitem">
												<p class="tit">소인 자유이용권 / 2개</p>
												<p class="desc">10,000원</p>
											</div>
											<div class="descitem total">
												<p class="tit">총 상품 금액</p>
												<p class="desc">20,000원</p>
											</div>
										</div>
									</div>
								</div>
								<div class="btnbox">
									<a href="<?php echo $path ?>" class="button typeB">예약상세</a>
									<a href="<?php echo $path ?>cs/qna_online.php" class="button typeB">문의하기</a>
									<button type="button" class="button typeB">취소요청</button>
									<a href="<?php echo $path ?>product/view.php#Review" class="button typeE">리뷰작성</a>
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
										<p class="date">결제일시 :  2025년 11월 25일 11:25AM</p>
									</div>
								</div>
								<div class="prdbox">
									<div class="imgbox">
										<a href="<?php echo $path ?>product/view.php" class="link">
											<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<p class="title">
											롯데월드 샤론캣 드레스 체험권 <br>
											[샤론캣 플레이] 드레스 대여 A타입(30분)
										</p>
										<div class="descbox">
											<div class="descitem">
												<p class="tit">대인 자유이용권 / 2개</p>
												<p class="desc">10,000원</p>
											</div>
											<div class="descitem">
												<p class="tit">소인 자유이용권 / 2개</p>
												<p class="desc">10,000원</p>
											</div>
											<div class="descitem total">
												<p class="tit">총 상품 금액</p>
												<p class="desc">20,000원</p>
											</div>
										</div>
									</div>
								</div>
								<div class="btnbox">
									<a href="<?php echo $path ?>" class="button typeB">예약상세</a>
									<a href="<?php echo $path ?>cs/qna_online.php" class="button typeB">문의하기</a>
									<button type="button" class="button typeB">취소요청</button>
									<a href="<?php echo $path ?>product/view.php#Review" class="button typeE">리뷰작성</a>
								</div>
							</div>
							<div class="item">
								<div class="topbox">
									<div class="leftbox">
										<div class="state">
											<span class="badge type_complete2">행사완료</span>
											<span class="txt">이용완료</span>
										</div>
									</div>
									<div class="rightbox">
										<p class="date">결제일시 :  2025년 11월 25일 11:25AM</p>
									</div>
								</div>
								<div class="prdbox">
									<div class="imgbox">
										<a href="<?php echo $path ?>product/view.php" class="link">
											<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
										</a>
									</div>
									<div class="txtbox">
										<p class="title">
											롯데월드 샤론캣 드레스 체험권 <br>
											[샤론캣 플레이] 드레스 대여 A타입(30분)
										</p>
										<div class="descbox">
											<div class="descitem">
												<p class="tit">대인 자유이용권 / 2개</p>
												<p class="desc">10,000원</p>
											</div>
											<div class="descitem">
												<p class="tit">소인 자유이용권 / 2개</p>
												<p class="desc">10,000원</p>
											</div>
											<div class="descitem total">
												<p class="tit">총 상품 금액</p>
												<p class="desc">20,000원</p>
											</div>
										</div>
									</div>
								</div>
								<div class="btnbox">
									<a href="<?php echo $path ?>" class="button typeB">예약상세</a>
									<a href="<?php echo $path ?>cs/qna_online.php" class="button typeB">문의하기</a>
									<button type="button" class="button typeB" disabled>취소요청</button>
									<a href="<?php echo $path ?>product/view.php#Review" class="button typeE">리뷰작성</a>
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


    	<?php include "../common/fixed_nav.php" ?>

    	<?php include "../common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include "../common/footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>



</body>

</html>