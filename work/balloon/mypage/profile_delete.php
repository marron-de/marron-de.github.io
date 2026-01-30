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
								<span class="txt">회원탈퇴</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">회원정보</a>
									<a href="<?php echo $path ?>mypage/profile_delete.php" class="link on">회원탈퇴</a>
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
						<p class="s_tit">회원탈퇴</p>
						<p class="desc">DELETE ACCOUNT</p>
					</div>
					<div class="my_withdraw">
						<div class="withdraw_box">
							<div class="sub_titbox">
								<p class="s_tit">정말 떠나시려구요? 😢</p>
								<p class="s_desc">
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


    	<?php include $path."common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include $path."common/footer.php" ?>
		
    </div>


    <!-- JS -->
    <script src="<?php echo $path ?>js/common.js"></script>


</body>

</html>