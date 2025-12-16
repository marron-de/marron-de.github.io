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
						<div class="tab_nav">
							<a href="<?php echo $path?>account/login.php" class="link">회원 로그인</a>
						</div>
						<div class="tab_nav on">
							<a href="#none" class="link">비회원 주문조회</a>
						</div>
					</div>
					<div class="login_box">
						<div class="login_form">
							<div class="input_wrap">
								<div class="input_box">
									<label class="label_text">이름</label>
									<input type="text" class="input_text" placeholder="아이디를 입력해 주세요">
								</div>
								<div class="input_box">
									<label class="label_text">이메일</label>
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
								<div class="input_box">
									<label class="label_text">휴대폰</label>
									<input type="text" class="input_text" placeholder="휴대폰 번호를 입력해 주세요 ">
								</div>
							</div>
							<div class="btn_box">
								<button type="button" class="button typeA">확인</button>
							</div>
						</div>
						<div class="login_notice">
							<p class="txt">
								※ 비회원 예약 시 입력하신 정보와 동일하게 로그인하면 기존 예약 내역을 확인할 수 있습니다. <br>
								※ 비회원으로 접속하셔서 상품 구매 시 포인트 적립이 어렵습니다.
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