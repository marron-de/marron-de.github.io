<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK TRAVEL</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap company_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section cs_sec">
				<div class="inner layout">
					<div class="side_area fixed">			
    					<?php include "../common/side_menu_cs.php" ?>
    					<?php include "../common/customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_titbox2 no_border">
							<div class="mob_view">
								<p class="s_tit">고객센터</p>
								<div class="breadcrumb">
									<a href="<?php echo $path ?>index.php" class="home"></a>
									<span class="bar"></span>
									<span class="catetit">고객센터</span>
									<span class="bar"></span>
									<div class="catebox">
										<button type="button" class="catetit cate_btn">
											<span class="txt">문의하기</span>
											<span class="arrow"></span>
										</button>
										<div class="popup cate_popup">
											<div class="linkbox">
												<a href="<?php echo $path ?>cs/notice.php" class="link">공지사항</a>
												<a href="<?php echo $path ?>cs/qna_online.php" class="link">문의하기</a>
												<a href="<?php echo $path ?>cs/gallery.php" class="link">여행사진</a>
												<a href="<?php echo $path ?>cs/event.php" class="link">이벤트</a>
												<a href="<?php echo $path ?>cs/career.php" class="link">채용안내</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<p class="s_subtit">문의하기</p>							
						</div>
						<div class="contbox cs_write">
							<div class="form_box">
								<div class="form_item input_box align_center">
									<p class="label_text">제목</p>
									<div class="input_flex">
										<div class="select_box">
											<select class="select">
												<option value="">문의 종류 선택</option>
												<option value="온라인 문의">온라인 문의</option>
												<option value="기업/단체 문의">기업/단체 문의</option>
											</select>
										</div>
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
								<a href="<?php echo $path ?>cs/qna_online.php" class="button typeB auto">목록</a>
								<button type="button" class="button typeA auto">작성하기</button>
							</div>	
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
	<script>
  		 $(function() {
			$('.side_menu .side_menulist .menuitem').eq(1).addClass('active');
		});
	</script>



</body>

</html>