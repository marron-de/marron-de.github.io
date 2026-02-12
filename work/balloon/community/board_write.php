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


    <div class="wrap cs_wrap">     


    	<?php include $path."common/header.php" ?>

    	<?php include $path."common/fixed_nav.php" ?>

    	<?php include $path."common/navbox.php" ?>


		<!-- container -->
		<div class="container">

			<div class="sub_topbanner">
				<div class="banner">
					<p class="sub">Community</p>
					<p class="tit">커뮤니티</p>
					<div class="breadcrumb">
						<a href="<?php echo $path ?>index.php" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">커뮤니티</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>company/about.php" class="link">회사소개</a>
									<a href="<?php echo $path ?>certification/certification.php" class="link">인증현황</a>
									<a href="<?php echo $path ?>flights/free.php" class="link">열기구체험</a>
									<a href="<?php echo $path ?>reservation/list.php" class="link">예약하기</a>
									<a href="<?php echo $path ?>community/notice.php" class="link on">커뮤니티</a>
									<a href="<?php echo $path ?>mypage/profile_edit.php" class="link">마이페이지</a>
								</div>
							</div>
						</div>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">공지사항</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="<?php echo $path ?>community/notice.php" class="link on">공지사항</a>
									<a href="<?php echo $path ?>community/gallery.php" class="link">갤러리</a>
									<a href="<?php echo $path ?>community/contact.php" class="link">문의하기</a>
									<a href="<?php echo $path ?>community/balloonTechLab.php" class="link">열기구 비행안전 기술연구소</a>
									<a href="<?php echo $path ?>community/pilotCamp.php" class="link">조종사 체험 캠프</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="sub_section cs_sec">
				<div class="inner2">
					<div class="board_titbox">
						<p class="tit">공지사항</p>
						<p class="desc">NOTICE</p>
					</div>
					<div class="contbox cs_write">
						<div class="form_box">
							<div class="form_item input_box align_center">
								<p class="label_text">제목</p>
								<div class="input_flex">
									<input type="text" class="input_text" placeholder="제목을 입력해주세요.">
									<div class="check_box">
										<input type="checkbox" class="input_check" id="secret_mode" checked>
										<label for="secret_mode" class="label_check">비밀글</label>
									</div>
								</div>
							</div>
							<div class="form_item input_box align_center">
								<p class="label_text">작성자</p>
								<input type="text" class="input_text" placeholder="작성자를 입력해주세요." value="홍길동">
							</div>
							<div class="form_item input_box">
								<p class="label_text">내용</p>
								<textarea class="input_text" placeholder="내용을 입력해 주세요"></textarea>
							</div>
							<div class="form_item input_box align_center">
								<p class="label_text">첨부파일 #1</p>
								<div class="input_box_file">
									<label for="bo_file1" class="input_name">
										<span class="txt">파일을 첨부해주세요</span>
										<span class="delete"></span>
									</label>
									<input type="file" id="bo_file1" class="input_file" placeholder="파일을 첨부해주세요">
									<button type="button" class="input_btn">파일 선택</button>
								</div>
							</div>
							<div class="form_item input_box align_center">
								<p class="label_text">첨부파일 #2</p>
								<div class="input_box_file">
									<label for="bo_file2" class="input_name">
										<span class="txt">파일을 첨부해주세요</span>
										<span class="delete"></span>
									</label>
									<input type="file" id="bo_file2" class="input_file" placeholder="파일을 첨부해주세요">
									<button type="button" class="input_btn">파일 선택</button>
								</div>
							</div>
						</div>
						<div class="button_box">
							<a href="<?php echo $path ?>community/notice.php" class="button typeB auto">목록</a>
							<button type="button" class="button typeA auto">작성하기</button>
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