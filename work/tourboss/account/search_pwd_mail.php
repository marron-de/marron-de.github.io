<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행대장</title>

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
									<span class="txt">비밀번호 찾기</span>
									<img src="<?php echo $path ?>img/ic_complete.png" alt="" class="icon">
								</p>
								<p class="s_sub">
									<span class="point">test@gmail.com</span> 
									 으로 <br class="tablet">비밀번호 재설정 이메일을 발송하였습니다.
								</p>
							</div>
							<div class="infobox column_ver">
								<div class="item">
									<p class="tit">이메일을 받지 못하셨나요?</p>
									<p class="desc">
										스팸함을 확인해보시거나, 입력하신 회원정보가 일치하는지 확인해주세요.  <br>
										아이디를 잊으신 경우, 먼저 아이디 찾기를 진행해주세요.
									</p>
								</div>
							</div>
							<div class="button_box">
								<a href="<?php echo $path ?>account/login.php" class="button typeB">로그인</a>
								<a href="<?php echo $path ?>account/search_id.php" class="button typeA">아이디 찾기</a>
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