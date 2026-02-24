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


    <div class="wrap account_wrap">     


    	<?php include $path."common/header.php" ?>

    	<?php include $path."common/fixed_nav.php" ?>

    	<?php include $path."common/navbox.php" ?>


		<!-- container -->
		<div class="container">

			<section class="sub_section ver2 ac_sec join">
				<div class="inner2">
					<div class="sub_titbox">
						<p class="s_tit">계정찾기</p>
					</div>
					<div class="join_layout">	
						<div class="ac_box">
							<div class="sub_titbox">
								<p class="s_tit flexible">
									<span class="txt">비밀번호 찾기</span>
									<img src="<?php echo $path ?>img/join_search.png" alt="" class="icon">
								</p>
								<p class="s_desc">
									비밀번호를 잊으셨나요? <br>
									본인 확인을 통해 비밀번호를 재설정 하실 수 있습니다.
								</p>
							</div>
							<div class="form_box">
								<!-- <div class="form_item full input_box">
									<input type="text" class="input_text" placeholder="아이디를 입력해 주세요">
								</div> -->
								<div class="form_item full input_box">
									<input type="text" class="input_text" placeholder="이름을 입력해 주세요">
								</div>
								<div class="form_item full input_box">
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
								<!-- <div class="form_item sch_box">
									<p class="txt">아이디를 모르시나요?</p>
									<a href="<?php echo $path ?>account/search_id.php" class="link">아이디찾기</a>
								</div> -->
								<div class="form_item full input_box pwd_input_box">
									<p class="label_text">
										비밀번호 찾기 방법을 선택해주세요.
									</p>
									<div class="radio_wrap">
										<div class="radio_box">
											<input type="radio" name="pwd_method" id="pwd_method_1" class="input_radio" checked>
											<label for="pwd_method_1" class="label_radio">이메일로 받기</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="pwd_method" id="pwd_method_2" class="input_radio">
											<label for="pwd_method_2" class="label_radio">휴대폰으로 받기</label>
										</div>
									</div>
								</div>
							</div>
							<div class="button_box">
								<button type="button" class="button typeA">비밀번호 찾기</button>
							</div>	
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