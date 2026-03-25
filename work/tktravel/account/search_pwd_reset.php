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
									<span class="txt">비밀번호 재설정</span>
									<img src="<?php echo $path ?>img/ic_complete.png" alt="" class="icon">
								</p>
								<p class="s_sub">
									새 비밀번호를 입력해 주세요.
								</p>
							</div>
							<div class="form_box">
								<div class="form_item full input_box">
									<input type="text" class="input_text" placeholder="새 비밀번호를 입력해 주세요.">
								</div>
								<div class="form_item full input_box">
									<input type="text" class="input_text" placeholder="새 비밀번호를 재입력해 주세요.">
								</div>
								<div class="form_item full input_box">
									<input type="text" class="input_text" placeholder="본인 생년월일을 입력해 주세요. ex)19950131">
								</div>
							</div>
							<div class="button_box">
								<button type="button" class="button typeA">확인</button>
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