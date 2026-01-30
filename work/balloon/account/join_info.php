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
						<p class="s_tit">회원가입</p>
					</div>
					<div class="step_box">
						<div class="item">
							<p class="tit">STEP 1</p>
							<p class="desc">약관동의</p>
						</div>
						<div class="arrow"></div>
						<div class="item on">
							<p class="tit">STEP 2</p>
							<p class="desc">정보입력</p>
						</div>
						<div class="arrow"></div>
						<div class="item">
							<p class="tit">STEP 3</p>
							<p class="desc">가입완료</p>
						</div>
					</div>
					<div class="join_form">	
						<div class="required_txt">
							<p class="txt">필수 입력 항목</p>
						</div>					
						<div class="formwrap">
							<div class="form_box">
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">아이디</span>
									</p>
									<div class="input_flex">
										<input type="text" class="input_text" placeholder="영문 소문자/숫자 4~20자">
										<button class="input_btn">중복확인</button>
									</div>
								</div>
								<div class="form_item input_box">
									<p class="label_text">SNS 아이디</p>
									<div class="input_flex">
										<div class="select_box sns_select">
											<select class="select">
												<option value="카카오톡">카카오톡</option>
												<option value="페이스북">페이스북</option>
												<option value="구글">구글</option>
												<option value="네이버">네이버</option>
											</select>
										</div>
										<input type="text" class="input_text" placeholder="아이디를 입력해 주세요">
									</div>
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">비밀번호</span>
									</p>
									<input type="password" class="input_text" placeholder="4~20자 이상 입력 필수">
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">비밀번호 확인</span>
									</p>
									<input type="password" class="input_text" placeholder="비밀번호를 다시 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">성명</span>
									</p>
									<input type="text" class="input_text" placeholder="성명을 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">성별</span>
									</p>
									<div class="radio_wrap mh">
										<div class="radio_box">
											<input type="radio" name="frm_gender" id="frm_gender1" class="input_radio" checked>
											<label for="frm_gender1" class="label_radio">여성</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="frm_gender" id="frm_gender2" class="input_radio">
											<label for="frm_gender2" class="label_radio">남성</label>
										</div>
									</div>
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">휴대폰</span>
									</p>
									<input type="text" class="input_text" placeholder="(예 : +국가 코드 0000-0000)">
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">이메일</span>
									</p>
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<p class="label_text">이메일 수신 동의</p>
									<div class="radio_wrap mh">
										<div class="radio_box">
											<input type="radio" name="email_agree" id="email_agree1" class="input_radio" checked>
											<label for="email_agree1" class="label_radio">수신</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="email_agree" id="email_agree2" class="input_radio">
											<label for="email_agree2" class="label_radio">수신거부</label>
										</div>
									</div>
								</div>
								<div class="form_item input_box">
									<p class="label_text">SMS 수신 동의</p>
									<div class="radio_wrap mh">
										<div class="radio_box">
											<input type="radio" name="sms_agree" id="sms_agree1" class="input_radio" checked>
											<label for="sms_agree1" class="label_radio">수신</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="sms_agree" id="sms_agree2" class="input_radio">
											<label for="sms_agree2" class="label_radio">수신거부</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="button_box">
						<a href="<?php echo $path ?>account/join_terms.php" class="button typeB">이전</a>
						<a href="<?php echo $path ?>account/join_complete.php" class="button typeA">가입하기</a>
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