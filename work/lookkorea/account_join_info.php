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
					<div class="join_box">	
						<div class="required_txt">
							<p class="txt">필수 입력 항목</p>
						</div>					
						<div class="join_inner formwrap">
							<div class="form_box">
								<div class="form_item input_box">
									<label class="label_text required">아이디</label>
									<div class="input_flex input_box_file">
										<input type="text" class="input_text" placeholder="영문 소문자/숫자 4~20자">
										<button class="input_btn">중복확인</button>
									</div>
								</div>
								<div class="form_item input_box">
									<label class="label_text">SNS 아이디</label>
									<div class="input_flex">
										<div class="select_box">
											<select class="select">
												<option value="카카오톡">카카오톡</option>
												<option value="페이스북">페이스북</option>
												<option value="구글">구글</option>
											</select>
										</div>
										<input type="text" class="input_text" placeholder="아이디를 입력해 주세요">
									</div>
								</div>
								<div class="form_item input_box">
									<label class="label_text required">비밀번호</label>
									<input type="password" class="input_text" placeholder="4~20자 이상 입력 필수">
								</div>
								<div class="form_item input_box">
									<label class="label_text required">비밀번호 확인</label>
									<input type="password" class="input_text" placeholder="비밀번호를 다시 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<label class="label_text required">성명(Full Name)</label>
									<input type="text" class="input_text" placeholder="성명은 영어로 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<label class="label_text required">성별</label>
									<div class="radio_wrap">
										<div class="radio_box mh">
											<input type="radio" name="frm_gender" id="frm_gender1" class="input_radio" checked>
											<label for="frm_gender1" class="label_radio">여성</label>
										</div>
										<div class="radio_box mh">
											<input type="radio" name="frm_gender" id="frm_gender2" class="input_radio">
											<label for="frm_gender2" class="label_radio">남성</label>
										</div>
									</div>
								</div>
								<div class="form_item input_box">
									<label class="label_text required">성(Last Name)</label>
									<input type="text" class="input_text" placeholder="여권과 동일하게 입력 (예 : HONG )">
								</div>
								<div class="form_item input_box">
									<label class="label_text required">이름(First Name)</label>
									<input type="text" class="input_text" placeholder="여권과 동일하게 입력 (예 : GilDong)">
								</div>
								<div class="form_item input_box">
									<label class="label_text required">국적</label>
									<div class="select_box">
										<select class="select full">
											<option value="">국적을 선택해주세요</option>
											<option value="kr">대한민국</option>
											<option value="us">미국</option>
											<option value="jp">일본</option>
											<option value="cn">중국</option>
											<option value="de">독일</option>
										</select>
									</div>
								</div>
								<div class="form_item input_box">
									<label class="label_text required">언어</label>
									<div class="select_box">
										<select class="select full">
											<option value="">언어를 선택해주세요</option>
											<option value="kr">한국어</option>
											<option value="us">영어</option>
											<option value="jp">일본어</option>
										</select>
									</div>
								</div>
								<div class="form_item input_box">
									<label class="label_text required">휴대폰</label>
									<input type="text" class="input_text" placeholder="(예 : +국가 코드 0000-0000)">
								</div>
								<div class="form_item input_box">
									<label class="label_text required">이메일</label>
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
							</div>
						</div>
					</div>
					<div class="button_box">
						<button type="button" class="button typeB">취소</button>
						<button type="button" class="button typeA">가입하기</button>
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