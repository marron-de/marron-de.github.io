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


    <div class="wrap cs_wrap">     


    	<?php include $path."common/header.php" ?>

    	<?php include $path."common/fixed_nav.php" ?>

    	<?php include $path."common/navbox.php" ?>


		<!-- container -->
		<div class="container">

			<div class="sub_topbanner">
				<div class="banner">
					<p class="sub">Community</p>
					<p class="tit">커뮤니티</p>
					<div class="breadcrumb">
						<a href="<?php echo $path ?>index.php" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">커뮤니티</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>company/about.php" class="link">회사소개</a>
									<a href="<?php echo $path ?>certification/certification.php" class="link">인증현황</a>
									<a href="<?php echo $path ?>flights/free.php" class="link">열기구체험</a>
									<a href="<?php echo $path ?>reservation/list.php" class="link">예약하기</a>
									<a href="<?php echo $path ?>community/notice.php" class="link on">커뮤니티</a>
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">마이페이지</a>
								</div>
							</div>
						</div>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">공지사항</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>community/notice.php" class="link on">공지사항</a>
									<a href="<?php echo $path ?>community/gallery.php" class="link">갤러리</a>
									<a href="<?php echo $path ?>community/contact.php" class="link">문의하기</a>
									<a href="<?php echo $path ?>community/balloonTechLab.php" class="link">열기구 비행안전 기술연구소</a>
									<a href="<?php echo $path ?>community/pilotCamp.php" class="link">조종사 체험 캠프</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="sub_section cs_sec">
				<div class="inner2">
					<div class="board_titbox">
						<p class="tit">공지사항</p>
						<p class="desc">NOTICE</p>
					</div>
					<div class="contbox cs_list">
						<div class="tbl_cont">
							<div class="tbl_top">
								<div class="leftbox">
									<p class="total">
										Total <span class="bold">10</span>
									</p>
								</div>
								<div class="rightbox">									
									<div class="tbl_search input_box">
										<div class="input_flex">
											<div class="select_box">
												<select class="select">
													<option value="제목 + 내용">제목 + 내용</option>
													<option value="제목">제목</option>
													<option value="내용">내용</option>
													<option value="작성자">작성자</option>
												</select>
											</div>
											<div class="input_box flexible">
												<input type="text" class="input_text" placeholder="검색어를 입력해 주세요">
												<button type="button" class="input_btn">
													<img src="<?php echo $path ?>img/ic_search_w.png" alt="" class="icon">
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tbl_box">
								<table class="tbl medium">
									<colgroup>
										<col data-th="번호" style="width: 100px;">
										<col data-th="제목" style="width: 820px;">
										<col data-th="작성자" style="width: 200px;">
										<col data-th="등록일" style="width: 160px;">
									</colgroup>
									<thead>
										<tr>
											<th data-th="번호">번호</th>
											<th data-th="제목">제목</th>
											<th data-th="작성자">작성자</th>
											<th data-th="등록일">등록일</th>
										</tr>
									</thead>
									<tbody>
										<tr class="notcie">
											<td data-th="번호">
												<span class="notice_badge">공지</span>
											</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
										<tr>
											<td data-th="번호">2</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다. 테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
										<tr>
											<td data-th="번호">3</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다. 테스트 게시물 제목입니다.테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
										<tr>
											<td data-th="번호">4</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
										<tr>
											<td data-th="번호">5</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
										<tr>
											<td data-th="번호">6</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다. 테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
										<tr>
											<td data-th="번호">7</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다. 테스트 게시물 제목입니다.테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
										<tr>
											<td data-th="번호">8</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다. 테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
										<tr>
											<td data-th="번호">9</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
										<tr>
											<td data-th="번호">10</td>
											<td data-th="제목" class="full_td">
												<a href="<?php echo $path ?>community/board_view.php" class="link">
													테스트 게시물 제목입니다. 테스트 게시물 제목입니다.
												</a>
											</td>
											<td data-th="작성자">벌룬 어드벤처 코리아</td>
											<td data-th="등록일">2026.01.16</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tbl_bottom">
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