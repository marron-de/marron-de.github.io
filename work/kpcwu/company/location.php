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

			<div class="subtop">
				<div class="inner">
					<p class="tit">오시는 길</p>
					<p class="desc">About Us</p>
					<div class="breadcrumb">
						<a href="" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">소개</span>
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
								<span class="txt">오시는 길</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="" class="link">플랜트건설노조는</a>
									<a href="" class="link">조직현황</a>
									<a href="" class="link">임원소개</a>
									<a href="" class="link">걸어온 길</a>
									<a href="" class="link">오시는 길</a>
									<a href="" class="link">조합가입안내</a>
									<a href="" class="link">규약</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="section location_sec1">
				<div class="inner">
					<div class="map_box">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1879.5166699217943!2d127.06488151717544!3d37.60315547449195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca262b8296b8d%3A0xc5d030ada6004426!2sTK%20Travel%20Korea!5e0!3m2!1sko!2skr!4v1749820598625!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" class="map" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="contbox">
						<div class="sub_titbox">
							<p class="sub_txt1">Location</p>
							<p class="sub_txt2">전국플랜트건설노동조합</p>
						</div>
						<div class="txtbox">
							<p class="addr">
								<img src="<?php echo $path ?>img/ico_map.png" alt="" class="icon">
								<span class="txt">서울 영등포구 대림로 146 어수빌딩 2층</span>
							</p>
							<div class="info">
								<div class="item">
									<p class="tit">전화</p>
									<p class="desc">02-834-5375</p>
								</div>
								<div class="item">
									<p class="tit">팩스</p>
									<p class="desc">02-843-1436</p>
								</div>
								<div class="item">
									<p class="tit">메일</p>
									<p class="desc">kpcwu5375@gmail.com</p>
								</div>
							</div>
							<div class="snsbox">
								<a href="tel:+02-834-5375" class="link">
									<img src="<?php echo $path ?>img/sns_call.png" alt="">
								</a>
								<a href="mailto:kpcwu5375@gmail.com" class="link">
									<img src="<?php echo $path ?>img/sns_mail.png" alt="">
								</a>
								<a href="" class="link" target="_blank">
									<img src="<?php echo $path ?>img/sns_facebook.png" alt="">
								</a>
								<a href="" class="link" target="_blank">
									<img src="<?php echo $path ?>img/sns_youtube.png" alt="">
								</a>
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