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
									<img src="<?php echo $path ?>img/join_search.png" alt="" class="icon">
								</p>
								<p class="s_sub">
									아이디를 잊으셨나요? <br>
									등록하신 정보로 바로 찾을 수 있습니다.
								</p>
							</div>
							<div class="form_box">
								<div class="form_item full input_box">
									<input type="text" class="input_text mx408" placeholder="이름을 입력해 주세요">
								</div>
								<!-- 260223 추가작업 -->
								<div class="form_item full input_box">
									<div class="input_flex">
										<input type="text" class="input_text mx408" placeholder="휴대폰번호를 입력해 주세요" value="01012345678">
										<button type="button" class="input_btn send">인증번호 재전송</button>
									</div>
									<p class="input_status point">입력하신 번호로 인증번호가 발송되었습니다.</p>
								</div>
								<div class="form_item full input_box add_input_box">
									<div class="input_flex">
										<input type="text" class="input_text mx408" placeholder="인증번호 입력">
										<button type="button" class="input_btn">확인</button>
									</div>
									<p class="input_status">인증번호가 오지 않는다면, 입력하신 이름과 번호가 일치하는지 확인해 주세요</p>
								</div>
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