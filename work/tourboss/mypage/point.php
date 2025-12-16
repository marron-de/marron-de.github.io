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
									<span class="txt">포인트</span>
									<span class="arrow"></span>
								</button>
								<div class="popup cate_popup">
									<div class="linkbox">
										<a href="<?php echo $path ?>mypage/travel.php" class="link">예약 조회</a>
										<a href="<?php echo $path ?>mypage/wishlist.php" class="link">찜한 상품</a>
										<a href="<?php echo $path ?>mypage/point.php" class="link on">포인트</a>
										<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">회원 정보</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="my_point">
						<p class="s_subtit">포인트</p>	
						<div class="point_detail">
							<div class="leftbox">
								<div class="item">
									<p class="tit">총 적립 포인트</p>
									<p class="desc">1,000P</p>
								</div>
								<div class="bar"></div>
								<div class="item">
									<p class="tit">사용한 포인트</p>
									<p class="desc">800P</p>
								</div>
								<div class="bar"></div>
								<div class="item">
									<p class="tit">소멸예정 포인트</p>
									<p class="desc">200P</p>
								</div>
							</div>
							<div class="rightbox">
								<p class="tit">사용 가능 포인트</p>
								<p class="point">
									<span class="txt">3,000 </span>
									<span class="icon"></span>
								</p>
								<p class="desc">3개월 이내 소멸예정 :  200P</p>
							</div>
						</div>
						<div class="point_tbl tab_wrap">
							<div class="tab_navbox round_ver">
								<div class="tab_nav on">
									<span class="link">전체</span>
								</div>
								<div class="tab_nav">
									<span class="link">적립</span>
								</div>
								<div class="tab_nav">
									<span class="link">사용</span>
								</div>
							</div>
							<div class="tab_contbox">
								<div class="tab_cont on">
									<div class="tbl_box mob_tbl">
										<table class="tbl">
											<colgroup>
												<col style="width: 100px;">	
												<col style="width: 100px;">	
												<col style="width: 80px;">	
												<col style="width: 200px;">	
												<col style="width: 80px;">	
												<col style="width: 80px;">	
												<col style="width: 100px;">	
											</colgroup>
											<thead>
												<tr>
													<th>적립일</th>
													<th>유효기간</th>
													<th>구분</th>
													<th>내용</th>
													<th>적립</th>
													<th>사용</th>
													<th>잔여</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-th="적립일">2025.11.01</td>
													<td data-th="유효기간">2025.11.30</td>
													<td data-th="구분">
														<span class="cate typeA">적립</span>
													</td>
													<td data-th="내용" class="full_td">
														회웝 가입 축하 포인트
													</td>
													<td data-th="적립">1,000p</td>
													<td data-th="사용">0p</td>
													<td data-th="잔여">1,000p</td>
												</tr>
												<tr>
													<td data-th="적립일">2025.11.01</td>
													<td data-th="유효기간">2025.11.30</td>
													<td data-th="구분">
														<span class="cate typeB">사용</span>
													</td>
													<td data-th="내용" class="full_td">
														결제 포인트 사용
													</td>
													<td data-th="적립">0p</td>
													<td data-th="사용">500p</td>
													<td data-th="잔여">500p</td>
												</tr>
												<tr>
													<td data-th="적립일">2025.11.01</td>
													<td data-th="유효기간">2025.11.30</td>
													<td data-th="구분">
														<span class="cate typeB">사용</span>
													</td>
													<td data-th="내용" class="full_td">
														가입 축하 포인트
													</td>
													<td data-th="적립">0p</td>
													<td data-th="사용">300p</td>
													<td data-th="잔여">200p</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab_cont">
									<div class="tbl_box mob_tbl">
										<table class="tbl">
											<colgroup>
												<col style="width: 100px;">	
												<col style="width: 100px;">	
												<col style="width: 80px;">	
												<col style="width: 200px;">	
												<col style="width: 80px;">	
												<col style="width: 80px;">	
												<col style="width: 100px;">	
											</colgroup>
											<thead>
												<tr>
													<th>적립일</th>
													<th>유효기간</th>
													<th>구분</th>
													<th>내용</th>
													<th>적립</th>
													<th>사용</th>
													<th>잔여</th>
												</tr>
											</thead>
											<tbody>
												<tr class="no_tr">
													<td colspan="999">
														<div class="no_post">
															<span class="icon"></span>
															<span class="txt">포인트 적립 내역이 없습니다.</span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="tab_cont">
									<div class="tbl_box mob_tbl">
										<table class="tbl">
											<colgroup>
												<col style="width: 100px;">	
												<col style="width: 100px;">	
												<col style="width: 80px;">	
												<col style="width: 200px;">	
												<col style="width: 80px;">	
												<col style="width: 80px;">	
												<col style="width: 100px;">	
											</colgroup>
											<thead>
												<tr>
													<th>적립일</th>
													<th>유효기간</th>
													<th>구분</th>
													<th>내용</th>
													<th>적립</th>
													<th>사용</th>
													<th>잔여</th>
												</tr>
											</thead>
											<tbody>
												<tr class="no_tr">
													<td colspan="999">
														<div class="no_post">
															<span class="icon"></span>
															<span class="txt">포인트 사용 내역이 없습니다.</span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
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