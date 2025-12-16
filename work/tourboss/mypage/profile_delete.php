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


    <div class="wrap mypage_wrap">     


    	<?php include "../common/header_login.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section my_sec">
				<div class="inner mob_inner">
					<div class="sub_titbox">
						<p class="s_tit">마이페이지</p>
						<div class="breadcrumb">
							<a href="<?php echo $path ?>index.php" class="home"></a>
							<span class="bar"></span>
							<span class="catetit">마이페이지</span>
							<span class="bar"></span>
							<div class="catebox">
								<button type="button" class="catetit cate_btn">
									<span class="txt">회원 정보</span>
									<span class="arrow"></span>
								</button>
								<div class="popup cate_popup">
									<div class="linkbox">
										<a href="<?php echo $path ?>mypage/travel.php" class="link">예약 조회</a>
										<a href="<?php echo $path ?>mypage/wishlist.php" class="link">찜한 상품</a>
										<a href="<?php echo $path ?>mypage/point.php" class="link">포인트</a>
										<a href="<?php echo $path ?>mypage/profile_edit.php" class="link on">회원 정보</a>
									</div>
								</div>
							</div>
							<span class="bar"></span>
							<div class="catebox">
								<button type="button" class="catetit cate_btn">
									<span class="txt">회원 탈퇴</span>
									<span class="arrow"></span>
								</button>
								<div class="popup cate_popup">
									<div class="linkbox">
										<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">회원 정보 수정</a>
										<a href="<?php echo $path ?>mypage/profile_delete.php" class="link on">회원 탈퇴</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="my_withdraw">
						<p class="s_subtit">회원 탈퇴</p>
						<div class="withdraw_box">
							<div class="sub_titbox">
								<p class="s_tit">정말 떠나시려구요? 😢</p>
								<p class="s_sub">
									간단한 본인정보 확인후 회원탈퇴가 가능합니다. <br>
									더 좋은 여행상품과 서비스를 제공하기 위해 노력하겠습니다.
								</p>
							</div>
							<div class="form_box">
								<div class="input_box">
									<label class="label_text">성명</label>
									<input type="text" class="input_text" placeholder="성명을 입력해 주세요 ">
								</div>
								<div class="input_box">
									<label class="label_text">아이디</label>
									<input type="text" class="input_text" placeholder="아이디를 입력해 주세요 ">
								</div>
								<div class="input_box">
									<label class="label_text">이메일</label>
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
								<div class="input_box">
									<label class="label_text">비밀번호</label>
									<input type="password" class="input_text" placeholder="비밀번호를 입력해 주세요">
								</div>
							</div>
						</div>
						<div class="button_box">
							<button type="button" class="button typeB medium">취소</ㅠ>
							<button type="button" class="button typeA medium">회원 탈퇴</button>
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