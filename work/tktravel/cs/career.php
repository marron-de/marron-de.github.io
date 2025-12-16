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


    <div class="wrap company_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section cs_sec">
				<div class="inner layout">
					<div class="side_area fixed">			
    					<?php include "../common/side_menu_cs.php" ?>
    					<?php include "../common/customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_titbox2 no_border">
							<div class="mob_view">
								<p class="s_tit">고객센터</p>
								<div class="breadcrumb">
									<a href="<?php echo $path ?>index.php" class="home"></a>
									<span class="bar"></span>
									<span class="catetit">고객센터</span>
									<span class="bar"></span>
									<div class="catebox">
										<button type="button" class="catetit cate_btn">
											<span class="txt">채용안내</span>
											<span class="arrow"></span>
										</button>
										<div class="popup cate_popup">
											<div class="linkbox">
												<a href="<?php echo $path ?>cs/notice.php" class="link">공지사항</a>
												<a href="<?php echo $path ?>cs/qna_online.php" class="link">문의하기</a>
												<a href="<?php echo $path ?>cs/gallery.php" class="link">여행사진</a>
												<a href="<?php echo $path ?>cs/event.php" class="link">이벤트</a>
												<a href="<?php echo $path ?>cs/career.php" class="link">채용안내</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<p class="s_subtit">채용안내</p>							
						</div>
						<div class="contbox cs_list">
							<div class="tbl_cont">
								<div class="tbl_box">
									<table class="tbl medium">
										<colgroup>
											<col data-th="번호" style="width:70px;">
											<col data-th="제목" style="width:650px;">
											<col data-th="작성자" style="width:100px;">
											<col data-th="등록일" style="width:120px;">
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
											<tr>
												<td colspan="999" class="no_item">
													<div class="no_post">
														<span class="icon"></span>
														<span class="txt">검색 결과가 없습니다.</span>
													</div>
												</td>
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
	<script>
  		 $(function() {
			$('.side_menu .side_menulist .menuitem').eq(4).addClass('active');
		});
	</script>



</body>

</html>