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


    <div class="wrap mypage_wrap">     


    	<?php include $path."common/header.php" ?>

    	<?php include $path."common/fixed_nav.php" ?>

    	<?php include $path."common/navbox.php" ?>


		<!-- container -->
		<div class="container">

			<div class="sub_topbanner">
				<div class="banner">
					<p class="sub">My Account</p>
					<p class="tit">마이페이지</p>
					<div class="breadcrumb">
						<a href="<?php echo $path ?>index.php" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">마이페이지</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>company/about.php" class="link">회사소개</a>
									<a href="<?php echo $path ?>flights/free.php" class="link">열기구체험</a>
									<a href="<?php echo $path ?>reservation/list.php" class="link">예약하기</a>
									<a href="<?php echo $path ?>community/notice.php" class="link ">커뮤니티</a>
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link on">마이페이지</a>
								</div>
							</div>
						</div>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">회원정보</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox ">
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link on">회원정보</a>
									<a href="<?php echo $path ?>mypage/profile_delete.php" class="link">회원탈퇴</a>
									<a href="<?php echo $path ?>mypage/bookings.php" class="link">예약조회</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="sub_section my_sec">
				<div class="inner mob_inner">
					<div class="board_titbox">
						<p class="s_tit">회원정보</p>
						<p class="desc">ACCOUNT INFORMATION</p>
					</div>
					<div class="my_form ver2">
						<div class="infobox">
							<div class="infoitem">
								<div class="titbox">
									<p class="title">기본 정보</p>
									<a href="<?php echo $path ?>mypage/profile_delete.php" class="link">회원 탈퇴하기</a>
								</div>
								<div class="listbox">
									<div class="item align_center">
										<div class="tit">성명</div>
										<div class="desc">홍길동</div>
									</div>
									<div class="item align_center">
										<div class="tit">아이디</div>
										<div class="desc">test</div>
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
										<div class="tit">이메일</div>
										<div class="desc">
											<div class="input_box">
												<input type="text" class="input_text" placeholder="이메일을 입력해 주세요" value="test@testmail.com">
											</div>
										</div>
									</div>
									<div class="item align_center full">
										<div class="tit">현재 비밀번호</div>
										<div class="desc mx288">
											<div class="input_box">
												<div class="input_item">
													<input type="text" class="input_text" placeholder="비밀번호를 입력해 주세요">
													<button type="button" class="input_btn">변경</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="infoitem">
								<p class="title">추가 정보</p>
								<div class="listbox">
									<div class="item full align_center">
										<div class="tit">성별</div>
										<div class="desc">
											<div class="radio_wrap">
												<div class="radio_box">
													<input type="radio" name="frm_gender" id="frm_gender1" class="input_radio" checked="">
													<label for="frm_gender1" class="label_radio">여성</label>
												</div>
												<div class="radio_box">
													<input type="radio" name="frm_gender" id="frm_gender2" class="input_radio">
													<label for="frm_gender2" class="label_radio">남성</label>
												</div>
											</div>
										</div>
									</div>
									<div class="item full align_center ver2">
										<div class="tit">SNS 아이디</div>
										<div class="desc">
											<div class="input_box">
												<div class="input_flex">
													<div class="select_box sns_box">
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
						</div>
						<div class="button_box">
							<button type="button" class="button typeB medium">취소</ㅠ>
							<button type="button" class="button typeA medium">확인</button>
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