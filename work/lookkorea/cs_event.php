<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOK KOREA</title>

    <?php include "script.php" ?>

</head>

<body>


    <div class="wrap cs_wrap">     


    	<?php include "header2.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section sub_common cs_sec">
				<div class="inner layout">
					<div class="side_area">			
    					<?php include "side_menu3.php" ?>
    					<?php include "customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_cont cs_list">
							<div class="tbl_cont">
								<div class="tbl_top">
									<div class="tbl_tabs">
										<div class="tab on">진행중인 이벤트</div>
										<div class="tab">종료된 이벤트</div>
									</div>
								</div>
								<div class="gall_box ver2">
									<div class="item">
										<a href="" class="link">
											<div class="imgbox">
												<img src="img/event_img1.png" alt="" class="img">
											</div>
											<div class="txtbox">
												<p class="tit">리뷰작성 시 숙박 이용권 증정 이벤트</p>
												<p class="desc">2025.05.26 ~ 2025.06.06</p>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="" class="link">
											<div class="imgbox">
												<img src="img/event_img2.png" alt="" class="img">
											</div>
											<div class="txtbox">
												<p class="tit">신규가입 시 쿠폰 증정 이벤트</p>
												<p class="desc">2025.05.26 ~ 2025.06.06</p>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="" class="link">
											<div class="imgbox">
												<img src="img/event_img1.png" alt="" class="img">
											</div>
											<div class="txtbox">
												<p class="tit">리뷰작성 시 숙박 이용권 증정 이벤트</p>
												<p class="desc">2025.05.26 ~ 2025.06.06</p>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="" class="link">
											<div class="imgbox">
												<img src="img/event_img2.png" alt="" class="img">
											</div>
											<div class="txtbox">
												<p class="tit">신규가입 시 쿠폰 증정 이벤트</p>
												<p class="desc">2025.05.26 ~ 2025.06.06</p>
											</div>
										</a>
									</div>
								</div>							
								<div class="tbl_search">
									<div class="select_box">
										<select class="select full">
											<option value="제목 + 내용">제목 + 내용</option>
											<option value="제목">제목</option>
											<option value="내용">내용</option>
											<option value="작성자">작성자</option>
										</select>
									</div>
									<div class="input_box flexible">
										<input type="text" class="input_text" placeholder="검색어를 입력해 주세요">
										<button type="button" class="input_btn sch">
											<img src="img/ic_search_w.png" alt="" class="icon">
										</button>
									</div>
								</div>
							</div>
							<div class="pagination">
								<button type="button" class="page page_btn start"></button>
								<button type="button" class="page page_btn prev"></button>
								<a href="" class="page page_link">1</a>
								<a href="" class="page page_link active">2</a>
								<a href="" class="page page_link">3</a>
								<a href="" class="page page_link">4</a>
								<button type="button" class="page page_btn next"></button>
								<button type="button" class="page page_btn end"></button>
							</div>
						</div>										
					</div>
				</div>
			</section>

        </div>


    	<?php include "fixed_nav.php" ?>

    	<?php include "footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="js/common.js"></script>

	<!-- 화면 : 사이드메뉴 active -->
	<script>
  		 $(function() {
			$('.side_menu .side_menulist .menuitem').eq(4).addClass('active');
			$('.side_menu .side_menulist .menuitem').eq(4).addClass('show');
		});
	</script>


</body>

</html>