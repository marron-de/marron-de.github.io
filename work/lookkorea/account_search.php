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

			<section class="sub_section ac_sec search">
				<div class="inner">
					<div class="s_titbox">
						<div class="s_tit center">아이디 · 비밀번호 찾기</div>
					</div>
					<div class="search_box">
						<div class="search_item">
							<p class="title">아이디 찾기</p>
							<div class="input_wrap">
								<div class="input_box">
									<input type="text" class="input_text" placeholder="성명을 입력해 주세요">
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
								<button type="button" class="button typeA auto confirm_btn">확인</button>
							</div>
						</div>	
						<div class="search_line"></div>
						<div class="search_item">
							<p class="title">비밀번호 재설정</p>
							<div class="input_wrap">
								<div class="input_box">
									<input type="text" class="input_text" placeholder="아이디를 입력해 주세요">
									<input type="text" class="input_text" placeholder="성명을 입력해 주세요">
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
								<button type="button" class="button typeA auto confirm_btn">확인</button>
							</div>
						</div>	
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