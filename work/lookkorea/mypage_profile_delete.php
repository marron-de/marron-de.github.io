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
							<div class="withdraw_box">
								<div class="form_wrap">
									<div class="titbox">
										<p class="tit">기본정보 확인 후 회원탈퇴가 가능합니다.</p>
										<p class="desc">더 나은 서비스를 제공해드리기 위해 노력하겠습니다.</p>
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
									<button type="button" class="button medium typeB auto">취소</button>
									<button type="button" class="button medium typeA auto">회원 탈퇴</button>
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
			$('.side_menu .side_menulist .menuitem').eq(2).find(".side_menu_sublist .item").eq(1).addClass('on');
		});
	</script>


</body>

</html>