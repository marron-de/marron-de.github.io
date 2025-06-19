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

			<section class="sub_section ac_sec login">
				<div class="inner">
					<div class="s_titbox">
						<div class="s_tit center">로그인</div>
					</div>
					<div class="tab_wrap">
						<div class="tab_navbox">
							<div class="tab_nav">
								<span class="link">회원</span>
							</div>
							<div class="tab_nav on">
								<span class="link">비회원</span>
							</div>
						</div>
						<div class="tab_contbox">
							<div class="tab_cont">
								<div class="login_box">
									<div class="login_form">
										<div class="input_wrap">
											<div class="input_box">
												<label class="label_text">아이디</label>
												<input type="text" class="input_text" placeholder="아이디를 입력해 주세요 ">
											</div>
											<div class="input_box">
												<label class="label_text">비밀번호</label>
												<input type="password" class="input_text" placeholder="비밀번호를 입력해 주세요  ">
											</div>
											<div class="form_bottom">
												<div class="check_box">
													<input type="checkbox" id="login_save" class="input_check" checked>
													<label for="login_save" class="label_check">로그인 정보 저장</label>
												</div>
												<a href="" class="link">아이디 · 비밀번호 찾기</a>
											</div>
										</div>
										<button type="button" class="button typeA login_btn">로그인</button>
									</div>
									<div class="login_sns">
										<div class="titbox">
											<span class="txt">간편 로그인</span>
										</div>
										<div class="snsbox">
											<div class="item">
												<img src="img/login_kakao.png" alt="" class="icon">
												<span class="txt">카카오</span>
											</div>
											<div class="item">
												<img src="img/login_google.png" alt="" class="icon">
												<span class="txt">구글</span>
											</div>
											<div class="item">
												<img src="img/login_naver.png" alt="" class="icon">
												<span class="txt">네이버</span>
											</div>
											<div class="item">
												<img src="img/login_facebook.png" alt="" class="icon">
												<span class="txt">페이스북</span>
											</div>
										</div>
									</div>
									<div class="login_jogin">
										<div class="txtbox">
											<p class="tit">아직 LOOK KOREA의 회원이 아니신가요?</p>
											<p class="desc">회원가입 시 여행 상품을 쉽고 빠르게 예약할 수 있어요.</p>
										</div>
										<a href="" class="button typeB join_btn">회원가입</a>
									</div>
								</div>
							</div>
							<div class="tab_cont on">
								<div class="login_box">
									<div class="login_form">
										<div class="input_wrap">
											<div class="input_box">
												<label class="label_text">성명</label>
												<input type="text" class="input_text" placeholder="성명을 입력해 주세요">
											</div>
											<div class="input_box">
												<label class="label_text">이메일</label>
												<input type="text" class="input_text" placeholder="이메일을 입력해 주세요 ">
											</div>
											<div class="input_box">
												<label class="label_text">휴대폰</label>
												<input type="text" class="input_text" placeholder="휴대폰 번호를 입력해 주세요 ">
											</div>
										</div>
										<button type="button" class="button typeA login_btn">비회원 로그인</button>
										<div class="note_list">
											<p class="txt">비회원으로 예약하시는 경우, 고객님의 성함과 연락처를 통해 구매하신 상품을 확인하실 수 있습니다.</p>
											<p class="txt">회원 로그인 없이 상품 구매 시 포인트 적립이 어렵습니다.</p>
										</div>
									</div>
									<div class="login_sns">
										<div class="titbox">
											<span class="txt">간편 로그인</span>
										</div>
										<div class="snsbox">
											<div class="item">
												<img src="img/login_kakao.png" alt="" class="icon">
												<span class="txt">카카오</span>
											</div>
											<div class="item">
												<img src="img/login_google.png" alt="" class="icon">
												<span class="txt">구글</span>
											</div>
											<div class="item">
												<img src="img/login_naver.png" alt="" class="icon">
												<span class="txt">네이버</span>
											</div>
											<div class="item">
												<img src="img/login_facebook.png" alt="" class="icon">
												<span class="txt">페이스북</span>
											</div>
										</div>
									</div>
									<div class="login_jogin">
										<div class="txtbox">
											<p class="tit">아직 LOOK KOREA의 회원이 아니신가요?</p>
											<p class="desc">회원가입 시 여행 상품을 쉽고 빠르게 예약할 수 있어요.</p>
										</div>
										<a href="" class="button typeB join_btn">회원가입</a>
									</div>
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


</body>

</html>