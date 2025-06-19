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


    <div class="wrap mypage_wrap">     


    	<?php include "header2.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section sub_common my_sec">
				<div class="inner layout">
					<div class="side_area">			
    					<?php include "side_menu1.php" ?>
    					<?php include "customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_cont mypage_cont">
							<div class="info_listwrap">
								<div class="info_listbox">
									<p class="title">기본 정보</p>
									<div class="info_list">
										<div class="item">
											<div class="tit">성명</div>
											<div class="desc">홍길동</div>
										</div>
										<div class="item">
											<div class="tit">아이디</div>
											<div class="desc">test</div>
										</div>
										<div class="item align_center">
											<div class="tit">이메일</div>
											<div class="desc">
												<div class="input_box">
													<input type="text" class="input_text" placeholder="이메일을 입력해 주세요" value="test@testmail.com">
												</div>
											</div>
										</div>
										<div class="item align_center">
											<div class="tit">휴대폰</div>
											<div class="desc">
												<div class="input_box">
													<input type="text" class="input_text" placeholder="휴대폰 번호를 입력해 주세요" value="010-1234-5678">
												</div>
											</div>
										</div>
										<div class="item align_center">
											<div class="tit">현재 비밀번호</div>
											<div class="desc">
												<div class="input_box input_box_file">
													<input type="text" class="input_text" placeholder="비밀번호를 입력해 주세요">
													<button class="input_btn">변경</button>
												</div>
											</div>
										</div>
										<div class="item"></div>
									</div>
								</div>
								<div class="info_listbox">
									<p class="title">추가 정보</p>
									<div class="info_list">
										<div class="item align_center">
											<div class="tit">성별</div>
											<div class="desc">
												<div class="radio_wrap">
													<div class="radio_box mh">
														<input type="radio" name="frm_gender" id="frm_gender1" class="input_radio" checked="">
														<label for="frm_gender1" class="label_radio">여성</label>
													</div>
													<div class="radio_box mh">
														<input type="radio" name="frm_gender" id="frm_gender2" class="input_radio">
														<label for="frm_gender2" class="label_radio">남성</label>
													</div>
												</div>
											</div>
										</div>
										<div class="item align_center">
											<div class="tit">SNS 아이디</div>
											<div class="desc">
												<div class="input_box">
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
											</div>
										</div>
										<div class="item align_center">
											<div class="tit">국적</div>
											<div class="desc">
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
										</div>
										<div class="item align_center">
											<div class="tit">언어</div>
											<div class="desc">
												<div class="select_box">
													<select class="select full">
														<option value="">언어를 선택해주세요</option>
														<option value="kr">한국어</option>
														<option value="us">영어</option>
														<option value="jp">일본어</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="check_wrap terms_check">
										<div class="check_box">
											<input type="checkbox" name="terms" id="terms4" class="input_check">
											<label for="terms4" class="label_check">
												(선택) SMS 수신 동의 
											</label>
										</div>
										<div class="check_box auto">
											<input type="checkbox" name="terms" id="terms5" class="input_check">
											<label for="terms5" class="label_check">
												(선택) 이메일 수신 동의
											</label>
										</div>
									</div>
								</div>
								<div class="button_box">
									<button type="button" class="button medium typeB auto">취소</button>
									<button type="button" class="button medium typeA auto">확인</button>
								</div>
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

	<!-- 화면 : 사이드메뉴 active -->
	<script>
  		 $(function() {
			$('.side_menu .side_menulist .menuitem').eq(2).addClass('active');
			$('.side_menu .side_menulist .menuitem').eq(2).addClass('show');
			$('.side_menu .side_menulist .menuitem').eq(2).find(".acc_cont").show();
			$('.side_menu .side_menulist .menuitem').eq(2).find(".side_menu_sublist .item").eq(0).addClass('on');
		});
	</script>


</body>

</html>