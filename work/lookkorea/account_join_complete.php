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


    <div class="wrap account_wrap">     


    	<?php include "header.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section ac_sec join">
				<div class="inner">
					<div class="s_titbox">
						<div class="s_tit center">회원가입</div>
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
					<div class="join_box">	
						<div class="join_inner complete_box">
							<div class="titbox">
								<img src="img/move_check.gif" alt="" class="icon">
								<p class="tit">가입완료</p>
								<p class="desc">
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
						</div>
					</div>
					<div class="button_box">
						<button type="button" class="button typeB">로그인</button>
						<button type="button" class="button typeA">메인으로</button>
					</div>					
				</div>
			</section>

        </div>


    	<?php include "fixed_nav.php" ?>

    	<?php include "footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="js/common.js"></script>


</body>

</html>