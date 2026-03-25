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
						<p class="s_tit">계정찾기</p>
					</div>
					<div class="join_layout">	
						<div class="ac_box">
							<div class="sub_titbox">
								<p class="s_tit flexible">
									<span class="txt">아이디 찾기</span>
									<img src="<?php echo $path ?>img/ic_complete.png" alt="" class="icon">
								</p>
								<p class="s_sub">
									계정 확인이 완료되었습니다. <br>
									지금 바로 로그인하여 다양한 혜택을 이용해 보세요.
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
								<a href="<?php echo $path ?>account/search_pwd.php" class="button typeA">비밀번호 찾기</a>
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