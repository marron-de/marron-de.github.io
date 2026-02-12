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


    <div class="wrap certification_wrap">     


    	<?php include $path."common/header.php" ?>

    	<?php include $path."common/fixed_nav.php" ?>

    	<?php include $path."common/navbox.php" ?>


		<!-- container -->
		<div class="container">

			<div class="sub_topbanner">
				<div class="banner">
					<p class="sub">Certification</p>
					<p class="tit">인증현황</p>
					<div class="breadcrumb">
						<a href="<?php echo $path ?>index.php" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">인증현황</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>company/about.php" class="link">회사소개</a>
									<a href="<?php echo $path ?>certification/certification.php" class="link on">인증현황</a>
									<a href="<?php echo $path ?>flights/free.php" class="link">열기구체험</a>
									<a href="<?php echo $path ?>reservation/list.php" class="link">예약하기</a>
									<a href="<?php echo $path ?>community/notice.php" class="link">커뮤니티</a>
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">마이페이지</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="sub_section cert_sec">
				<div class="inner2">
					<div class="sub_titbox">
						<p class="s_txt1">Certification</p>
						<p class="s_txt2">인증현황</p>
					</div>
					<div class="contbox">
						<div class="item" onclick="certificate_popup()">
							<div class="imgbox">
								<img src="<?php echo $path ?>img/certificate.jpg" alt="" class="img">
								<button type="button" class="more_btn"></button>
							</div>
							<div class="txtbox">
								<p class="date">2026.02.12</p>
								<p class="tit">초경량비행장치 안전성인증서</p>
							</div>
						</div>
						<div class="item" onclick="certificate_popup()">
							<div class="imgbox">
								<img src="<?php echo $path ?>img/certificate.jpg" alt="" class="img">
								<button type="button" class="more_btn"></button>
							</div>
							<div class="txtbox">
								<p class="date">2026.02.12</p>
								<p class="tit">샘플 인증서</p>
							</div>
						</div>
						<div class="item" onclick="certificate_popup()">
							<div class="imgbox">
								<img src="<?php echo $path ?>img/certificate.jpg" alt="" class="img">
								<button type="button" class="more_btn"></button>
							</div>
							<div class="txtbox">
								<p class="date">2026.02.12</p>
								<p class="tit">샘플 인증서</p>
							</div>
						</div>
						<div class="item" onclick="certificate_popup()">
							<div class="imgbox">
								<img src="<?php echo $path ?>img/certificate.jpg" alt="" class="img">
								<button type="button" class="more_btn"></button>
							</div>
							<div class="txtbox">
								<p class="date">2026.02.12</p>
								<p class="tit">샘플 인증서</p>
							</div>
						</div>
						<div class="item" onclick="certificate_popup()">
							<div class="imgbox">
								<img src="<?php echo $path ?>img/certificate.jpg" alt="" class="img">
								<button type="button" class="more_btn"></button>
							</div>
							<div class="txtbox">
								<p class="date">2026.02.12</p>
								<p class="tit">샘플 인증서</p>
							</div>
						</div>
						<div class="item" onclick="certificate_popup()">
							<div class="imgbox">
								<img src="<?php echo $path ?>img/certificate.jpg" alt="" class="img">
								<button type="button" class="more_btn"></button>
							</div>
							<div class="txtbox">
								<p class="date">2026.02.12</p>
								<p class="tit">샘플 인증서</p>
							</div>
						</div>
						<div class="item" onclick="certificate_popup()">
							<div class="imgbox">
								<img src="<?php echo $path ?>img/certificate.jpg" alt="" class="img">
								<button type="button" class="more_btn"></button>
							</div>
							<div class="txtbox">
								<p class="date">2026.02.12</p>
								<p class="tit">샘플 인증서</p>
							</div>
						</div>
						<div class="item" onclick="certificate_popup()">
							<div class="imgbox">
								<img src="<?php echo $path ?>img/certificate.jpg" alt="" class="img">
								<button type="button" class="more_btn"></button>
							</div>
							<div class="txtbox">
								<p class="date">2026.02.12</p>
								<p class="tit">샘플 인증서</p>
							</div>
						</div>
					</div>
				</div>
			</section>
        </div>


    	<?php include $path."common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include $path."common/footer.php" ?>


    	<?php include $path."certification/certificate_popup.php" ?>

		
    </div>


    <!-- JS -->
    <script src="<?php echo $path ?>js/common.js"></script>


</body>

</html>