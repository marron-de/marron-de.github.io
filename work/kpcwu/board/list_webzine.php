<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전국플랜트건설노동조합</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>

		<!-- container -->
		<div class="container">

			<div class="subtop ver2">
				<div class="inner">
					<p class="tit">선전자료</p>
					<p class="desc">Library</p>
					<div class="breadcrumb">
						<a href="" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">자료</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="" class="link">소개</a>
									<a href="" class="link">소식</a>
									<a href="" class="link">지부소식</a>
									<a href="" class="link">자료</a>
								</div>
							</div>
						</div>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">선전자료</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<li><a href="" class="link">선전자료</a></li>
									<li><a href="" class="link">미디어자료</a></li>
									<li><a href="" class="link">문서자료</a></li>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tab_swiperbox inner">
				<div class="swiper tab_swiper tab_navbox auto gap0" data-gappc="0" data-gapmob="10">
					<div class="swiper-wrapper">
						<div class="swiper-slide tab_nav">
							<a href="" class="link">교육지</a>
						</div>
						<div class="swiper-slide tab_bar"></div>
						<div class="swiper-slide tab_nav on">
							<a href="" class="link">카드뉴스</a>
						</div>
						<div class="swiper-slide tab_bar"></div>
						<div class="swiper-slide tab_nav">
							<a href="" class="link">현수막</a>
						</div>
						<div class="swiper-slide tab_bar"></div>
						<div class="swiper-slide tab_nav">
							<a href="" class="link">피켓 시안</a>
						</div>
						<div class="swiper-slide tab_bar"></div>
						<div class="swiper-slide tab_nav">
							<a href="" class="link">포스터</a>
						</div>
						<div class="swiper-slide tab_bar"></div>
						<div class="swiper-slide tab_nav">
							<a href="" class="link">웹자보</a>
						</div>
					</div>
				</div>
			</div>
			
			<section class="section">
				<div class="inner">
					<div class="bolist_wrap">
						<div class="topbox">
							<div class="leftbox">
								<p class="total">
									Total <span class="num">0</span>
								</p>
							</div>
							<div class="rightbox">
								<div class="select_box">
									<select class="select">
										<option value="제목">제목</option>
										<option value="내용">내용</option>
										<option value="제목 + 내용" selected>제목 + 내용</option>
									</select>
								</div>
								<div class="input_box">
									<input type="text" class="input_text" placeholder="검색어를 입력해 주세요">
								</div>
								<button type="button" class="button icon_button typeA">
									<img src="<?php echo $path ?>img/ico_serach_wt.png" alt="" class="icon">
								</button>
							</div>
						</div>
						<div class="list_webzinebox">
							<table class="tbl">
								<colgroup>
									<col style="width: 220px;">
									<col style="width: 1060px;">
								</colgroup>
								<tbody>
									<tr>
										<td data-th="이미지" class="img">
											<div class="imgbox">
												<img src="<?php echo $path ?>img/bo_pic1.jpg" alt="" class="img cover">
											</div>
										</td>
										<td data-th="제목" class="full_td2">
											<a href="view.php" class="link">
												<p class="tit">테스트 게시물 제목입니다.</p>
												<p class="desc">
													테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.
												</p>
												<div class="info">
													<span class="txt">
														전국플랜트건설노동조합
													</span>
													<span class="bar">|</span>
													<span class="txt">
														2026.01.16
													</span>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td data-th="이미지" class="img">
											<div class="imgbox">
												<img src="<?php echo $path ?>img/bo_pic2.jpg" alt="" class="img cover">
											</div>
										</td>
										<td data-th="제목" class="full_td2">
											<a href="view.php" class="link">
												<p class="tit">테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.</p>
												<p class="desc">
													테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.
												</p>
												<div class="info">
													<span class="txt">
														전국플랜트건설노동조합
													</span>
													<span class="bar">|</span>
													<span class="txt">
														2026.01.16
													</span>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td data-th="이미지" class="img">
											<div class="imgbox">
												<img src="<?php echo $path ?>img/bo_pic3.jpg" alt="" class="img cover">
											</div>
										</td>
										<td data-th="제목" class="full_td2">
											<a href="view.php" class="link">
												<p class="tit">테스트 게시물 제목입니다.</p>
												<p class="desc">
													테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.
												</p>
												<div class="info">
													<span class="txt">
														전국플랜트건설노동조합
													</span>
													<span class="bar">|</span>
													<span class="txt">
														2026.01.16
													</span>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td data-th="이미지" class="img">
											<div class="imgbox">
												<img src="<?php echo $path ?>img/bo_pic1.jpg" alt="" class="img cover">
											</div>
										</td>
										<td data-th="제목" class="full_td2">
											<a href="view.php" class="link">
												<p class="tit">테스트 게시물 제목입니다.</p>
												<p class="desc">
													테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.
												</p>
												<div class="info">
													<span class="txt">
														전국플랜트건설노동조합
													</span>
													<span class="bar">|</span>
													<span class="txt">
														2026.01.16
													</span>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td data-th="이미지" class="img">
											<div class="imgbox">
												<img src="<?php echo $path ?>img/bo_pic2.jpg" alt="" class="img cover">
											</div>
										</td>
										<td data-th="제목" class="full_td2">
											<a href="view.php" class="link">
												<p class="tit">테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.</p>
												<p class="desc">
													테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.
												</p>
												<div class="info">
													<span class="txt">
														전국플랜트건설노동조합
													</span>
													<span class="bar">|</span>
													<span class="txt">
														2026.01.16
													</span>
												</div>
											</a>
										</td>
									</tr>
									<tr>
										<td data-th="이미지" class="img">
											<div class="imgbox">
												<img src="<?php echo $path ?>img/bo_pic3.jpg" alt="" class="img cover">
											</div>
										</td>
										<td data-th="제목" class="full_td2">
											<a href="view.php" class="link">
												<p class="tit">테스트 게시물 제목입니다.</p>
												<p class="desc">
													테스트 게시물 제목입니다.테스트 게시물 제목입니다.테스트 게시물 제목입니다.
												</p>
												<div class="info">
													<span class="txt">
														전국플랜트건설노동조합
													</span>
													<span class="bar">|</span>
													<span class="txt">
														2026.01.16
													</span>
												</div>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="bottombox">
							<div class="leftbox"></div>
							<div class="pagination">
								<div class="page page_btn start"></div>
								<div class="page page_btn prev"></div>
								<div class="page_linkbox">
									<p class="page page_link active">1</p>
									<p class="page page_link">2</p>
									<p class="page_ellipsis">...</p>
									<p class="page page_link">9</p>
									<p class="page page_link">0</p>
								</div>
								<div class="page page_btn next"></div>
								<div class="page page_btn end"></div>
							</div>
							<div class="rightbox">
								<a href="write.php" class="button typeA auto wid140">작성하기</a>
							</div>
						</div>
					</div>
				</div>
			</section>

        </div>

    	<?php include "../common/footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>
	<script>	
		$(".header .h_nav > li").eq(0).addClass("active")
	</script>



</body>

</html>