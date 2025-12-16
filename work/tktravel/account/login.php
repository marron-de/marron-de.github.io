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


    <div class="wrap account_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section ver2 ac_sec login">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_tit center">로그인</p>
					</div>
					<div class="tab_navbox">
						<div class="tab_nav on">
							<a href="#none" class="link">회원 로그인</a>
						</div>
						<div class="tab_nav">
							<a href="<?php echo $path?>account/login_guest.php" class="link">비회원 주문조회</a>
						</div>
					</div>
					<div class="login_box">
						<div class="login_form">
							<div class="input_wrap">
								<div class="input_box input_box_view">
									<label class="label_text">아이디</label>
									<div class="input_item">
										<input type="text" class="input_text" placeholder="아이디를 입력해 주세요 ">
										<button type="button" class="view_btn on"></button>
									</div>
								</div>
								<div class="input_box input_box_view">
									<label class="label_text">비밀번호</label>
									<div class="input_item">
										<input type="password" class="input_text" placeholder="비밀번호를 입력해 주세요">
										<button type="button" class="view_btn"></button>
									</div>
								</div>
								<div class="form_bottom">
									<div class="check_box">
										<input type="checkbox" id="id_save" class="input_check" checked>
										<label for="id_save" class="label_check">아이디 저장</label>
									</div>
									<div class="sch_box">
										<a href="<?php echo $path?>account/search_id.php" class="link">아이디 찾기</a>
										<span class="bar"></span>
										<a href="<?php echo $path?>account/search_pwd.php" class="link">비밀번호 찾기</a>
									</div>
								</div>
							</div>
							<div class="btn_box">
								<button type="button" class="button typeA">로그인</button>
								<a href="<?php echo $path ?>account/join_terms.php" type="button" class="button typeB">회원가입</a>
							</div>
						</div>
						<div class="login_sns">
							<!-- 여행대장
							<button type="button" class="sns_btn">
								<img src="<?php echo $path ?>img/login_kakao.png" alt="" class="icon">
								<span class="txt">카카오</span>
							</button>
							<button type="button"  class="sns_btn">
								<img src="<?php echo $path ?>img/login_naver.png" alt="" class="icon">
								<span class="txt">네이버</span>
							</button>
							-->
							<button type="button"  class="sns_btn">
								<img src="<?php echo $path ?>img/login_facebook.png" alt="" class="icon">
								<span class="txt">페이스북</span>
							</button>
							<button type="button"  class="sns_btn">
								<img src="<?php echo $path ?>img/login_google.png" alt="" class="icon">
								<span class="txt">구글</span>
							</button>
							<button type="button"  class="sns_btn">
								<img src="<?php echo $path ?>img/login_line.png" alt="" class="icon">
								<span class="txt">LINE</span>
							</button>
						</div>
						<div class="login_notice">
							<p class="txt">
								안녕하세요! 고객님! 편리하고 빠르게 로그인을 하셔서 여행상품을 구매해주세요!  <br>
								비회원 로그인시 이름과 연락처로 구매한 상품을 확인하실 수 있습니다. 
								<br><br>
								베네피아 회원분은 베네피아 사이트에서  <br>
								<span class="bold">[여행/레저] -> [레저입장권] -> [TK 트래블]</span>을 클릭하시면 자동로그인이 됩니다.
							</p>
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