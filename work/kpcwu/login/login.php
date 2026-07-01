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
			
			<section class="section login_sec1">
				<div class="inner">
					<p class="login_title">로그인</p>
					<div class="login_form">
						<div class="input_box input_box_view">
							<label class="label_text">아이디</label>
							<div class="input_item">
								<input type="text" class="input_text" placeholder="아이디 입력">
								<button type="button" class="view_btn on"></button>
							</div>
						</div>
						<div class="input_box input_box_view">
							<label class="label_text">비밀번호</label>
							<div class="input_item">
								<input type="password" class="input_text" placeholder="비밀번호 입력">
								<button type="button" class="view_btn"></button>
							</div>
						</div>
						<div class="login_schbox">
							<div class="check_box">
								<input type="checkbox" id="id_save" class="input_check" checked>
								<label for="id_save" class="label_check">아이디 저장</label>
							</div>
							<div class="sch_box">
								<a href="" class="link">아이디 찾기</a>
								<span class="bar"></span>
								<a href="" class="link">비밀번호 찾기</a>
							</div>
						</div>
						<button type="button" class="button typeA big full round login_btn">로그인</button>
					</div>
					<div class="login_sns">
						<p class="title">
							<span class="line"></span>
							<span class="txt">또는</span>
							<span class="line"></span>
						</p>
						<div class="bntbox">
							<button type="button" class="btn kakao">
								<img src="<?php echo $path ?>img/login_naver.png" alt="" class="icon">
								<span class="txt">로그인</span>
							</button>
							<button type="button"  class="btn naver">
								<img src="<?php echo $path ?>img/login_kakao.png" alt="" class="icon">
								<span class="txt">로그인</span>
							</button>
							<button type="button"  class="btn google">
								<img src="<?php echo $path ?>img/login_google.png" alt="" class="icon">
								<span class="txt">로그인</span>
							</button>
						</div>
					</div>
					<div class="login_join">
						<p class="tit">
							<span class="bold">전국플랜트건설노동조합</span>에 가입하여 함께하세요
						</p>
						<a href="" class="link">회원가입</a>
					</div>
				</div>
			</section>

        </div>

    	<?php include "../common/footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>

</body>

</html>