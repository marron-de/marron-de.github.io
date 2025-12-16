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

			<section class="sub_section ac_sec join">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_tit">회원가입</p>
					</div>
					<div class="step_box">
						<div class="item">
							<p class="tit">STEP 1</p>
							<p class="desc">약관동의</p>
						</div>
						<div class="arrow"></div>
						<div class="item">
							<p class="tit">STEP 2</p>
							<p class="desc">정보입력</p>
						</div>
						<div class="arrow"></div>
						<div class="item on">
							<p class="tit">STEP 3</p>
							<p class="desc">가입완료</p>
						</div>
					</div>
					<div class="join_layout">	
						<div class="ac_box">
							<div class="sub_titbox">
								<p class="s_tit flexible">
									<span class="txt">가입완료</span>
									<img src="<?php echo $path ?>img/ic_complete.png" alt="" class="icon">
								</p>
								<p class="s_sub">
									가입이 완료되었습니다. <br>
									회원만을 위한 특별 서비스를 즐겨보세요.
								</p>
							</div>
							<div class="infobox">
								<div class="item">
									<p class="tit">아이디</p>
									<p class="desc">test1234</p>
								</div>
							</div>
							<div class="button_box">
								<a href="<?php echo $path ?>account/login.php" class="button typeB">로그인</a>
								<a href="<?php echo $path ?>index.php" class="button typeA">메인으로</a>
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



</body>

</html>