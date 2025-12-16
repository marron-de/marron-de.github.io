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
											<span class="txt">공지사항</span>
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
							<p class="s_subtit">공지사항</p>							
						</div>
						<div class="contbox cs_view">
							<div class="titbox">
								<p class="tit">
									게시물 제목입니다. 게시물 제목입니다. 게시물 제목입니다. 게시물 제목입니다.
								</p>
								<div class="info">
									<span class="badge typeC">카테고리</span>
									<span class="txt writer">TK 트래블</span>
									<span class="bar"></span>
									<span class="txt date">2025.05.26</span>
								</div>
							</div>
							<div class="contbox">
								<img src="<?php echo $path ?>img/view_img.jpg" alt="">
								<br><br>
								<p>
									게시물 내용입니다. 게시물 내용입니다. 게시물 내용입니다. 
									<br>
									게시물 내용입니다. 게시물 내용입니다. 게시물 내용입니다. 
									<br>
									게시물 내용입니다. 게시물 내용입니다. 게시물 내용입니다. 
									<br>
									게시물 내용입니다. 게시물 내용입니다. 게시물 내용입니다. 
								</p>
							</div>
							<div class="button_box">
								<a href="<?php echo $path ?>cs/notice.php" class="button medium typeB auto">목록</a>
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
			$('.side_menu .side_menulist .menuitem').eq(0).addClass('active');
		});
	</script>



</body>

</html>