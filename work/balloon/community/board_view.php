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
								<div class="linkbox on">
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
					<div class="contbox cs_view">
						<div class="titbox">
							<p class="tit">
								게시물 제목입니다. 게시물 제목입니다. 게시물 제목입니다. 게시물 제목입니다.
							</p>
							<div class="info">
								<span class="txt writer">벌룬 어드벤처 코리아</span>
								<span class="bar"></span>
								<span class="txt date">2026.01.16</span>
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
							<a href="<?php echo $path ?>community/notice.php" class="button typeB auto">목록</a>
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