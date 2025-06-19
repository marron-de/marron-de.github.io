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
						<div class="sub_cont cs_view">
							<div class="titbox">
								<p class="tit">
									게시물 제목입니다. 게시물 제목입니다. 게시물 제목입니다. 게시물 제목입니다.
								</p>
								<div class="info">
									<span class="txt writer">LOOK KOREA</span>
									<span class="bar"></span>
									<span class="txt date">2025.05.26</span>
								</div>
							</div>
							<div class="contbox">
								<img src="img/view_img.jpg" alt="">
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
								<button type="button" class="button medium typeB auto">목록</button>
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
			$('.side_menu .side_menulist .menuitem').eq(0).addClass('active');
			$('.side_menu .side_menulist .menuitem').eq(0).addClass('show');
		});
	</script>


</body>

</html>