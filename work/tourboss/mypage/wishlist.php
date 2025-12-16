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
									<span class="txt">찜한 상품</span>
									<span class="arrow"></span>
								</button>
								<div class="popup cate_popup">
									<div class="linkbox">
										<a href="<?php echo $path ?>mypage/travel.php" class="link">예약 조회</a>
										<a href="<?php echo $path ?>mypage/wishlist.php" class="link on">찜한 상품</a>
										<a href="<?php echo $path ?>mypage/point.php" class="link">포인트</a>
										<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">회원 정보</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="my_wish">
						<div class="titbox">
							<p class="s_subtit">찜한 상품</p>						
							<div class="btnbox">
								<button type="button" class="button typeA">전체 선택</button>
								<button type="button" class="button typeB">선택 삭제</button>
							</div>
						</div>
						<div class="prd_listbox">
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="check_box">
										<input type="checkbox" class="input_check" checked>
									</div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">인천</p>
										<button type="button" class="wish_btn on"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
											<div class="detailbox">
												<div class="de_item">
													<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
													<span class="txt">5.0</span>
												</div>
												<div class="de_item">
													<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
													<span class="txt">13,463</span>
												</div>
											</div>
											<div class="badgebox">
												<span class="badge typeB">NEW</span>
												<span class="badge typeC">HOT</span>
												<span class="badge typeD">BEST</span>
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="check_box">
										<input type="checkbox" class="input_check">
									</div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">인천</p>
										<button type="button" class="wish_btn on"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
											<div class="detailbox">
												<div class="de_item">
													<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
													<span class="txt">5.0</span>
												</div>
												<div class="de_item">
													<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
													<span class="txt">13,463</span>
												</div>
											</div>
											<div class="badgebox">
												<span class="badge typeB">NEW</span>
												<span class="badge typeC">HOT</span>
												<span class="badge typeD">BEST</span>
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="check_box">
										<input type="checkbox" class="input_check">
									</div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">인천</p>
										<button type="button" class="wish_btn on"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
											<div class="detailbox">
												<div class="de_item">
													<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
													<span class="txt">5.0</span>
												</div>
												<div class="de_item">
													<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
													<span class="txt">13,463</span>
												</div>
											</div>
											<div class="badgebox">
												<span class="badge typeB">NEW</span>
												<span class="badge typeC">HOT</span>
												<span class="badge typeD">BEST</span>
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
									</div>
								</div>
							</a>
							<a href="<?php echo $path ?>product/view_hotel.php" class="item">
								<div class="imgbox">
									<img src="<?php echo $path ?>img/prd_pic1.jpg" alt="" class="img">
									<div class="check_box">
										<input type="checkbox" class="input_check">
									</div>
								</div>
								<div class="txtbox">
									<div class="topbox">
										<p class="location">인천</p>
										<button type="button" class="wish_btn on"></button>
									</div>
									<div class="titbox">
										<p class="tit">인천 글로스터 호텔</p>
									</div>
									<div class="pricebox">
										<p class="price">1,018,500원</p>
										<p class="ori">1,358,000원</p>
									</div>
									<div class="bottombox">
										<div class="leftbox">
											<div class="detailbox">
												<div class="de_item">
													<img src="<?php echo $path ?>img/prd_rate.png" alt="" class="icon">
													<span class="txt">5.0</span>
												</div>
												<div class="de_item">
													<img src="<?php echo $path ?>img/prd_talk.png" alt="" class="icon">
													<span class="txt">13,463</span>
												</div>
											</div>
											<div class="badgebox">
												<span class="badge typeB">NEW</span>
												<span class="badge typeC">HOT</span>
												<span class="badge typeD">BEST</span>
												<span class="badge typeE">TICKET</span>
											</div>
										</div>
									</div>
								</div>
							</a>
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