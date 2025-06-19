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


    <div class="wrap cs_wrap">     


    	<?php include "header2.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section sub_common cs_sec">
				<div class="inner layout">
					<div class="side_area">			
    					<?php include "side_menu3.php" ?>
    					<?php include "customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_cont cs_write">
							<div class="info_list">
								<div class="item align_center">
									<div class="tit">제목</div>
									<div class="desc">
										<div class="input_box">
											<div class="input_flex">
												<div class="select_box">
													<select class="select full">
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
									</div>
								</div>
								<div class="item align_center">
									<div class="tit">작성자</div>
									<div class="desc">
										<div class="input_box">
											<input type="text" class="input_text" placeholder="작성자를 입력해주세요." value="홍길동">
										</div>
									</div>
								</div>
								<div class="item">
									<div class="tit">내용</div>
									<div class="desc">
										<div class="input_box">
											<textarea class="input_text" placeholder="내용을 입력해 주세요"></textarea>
										</div>
									</div>
								</div>
								<div class="item align_center">
									<div class="tit">첨부파일</div>
									<div class="desc">
										<div class="input_box input_box_file">
											<label for="bo_file1" class="input_name">
												<span class="txt">파일을 첨부해주세요</span>
												<span class="delete"></span>
											</label>
											<input type="file" id="bo_file1" class="input_file" placeholder="파일을 첨부해주세요">
											<button type="button" class="input_btn">파일 선택</button>
										</div>
									</div>
								</div>
								<div class="item align_center">
									<div class="tit">첨부파일</div>
									<div class="desc">
										<div class="input_box input_box_file">
											<label for="bo_file2" class="input_name">
												<span class="txt">파일을 첨부해주세요</span>
												<span class="delete"></span>
											</label>
											<input type="file" id="bo_file2" class="input_file" placeholder="파일을 첨부해주세요">
											<button type="button" class="input_btn">파일 선택</button>
										</div>
									</div>
								</div>
							</div>
							<div class="button_box">
								<button type="button" class="button medium typeB auto">목록</button>
								<button type="button" class="button medium typeA auto">작성하기</button>
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
			$('.side_menu .side_menulist .menuitem').eq(1).addClass('active');
			$('.side_menu .side_menulist .menuitem').eq(1).addClass('show');
			$('.side_menu .side_menulist .menuitem').eq(1).find(".acc_cont").show();
			$('.side_menu .side_menulist .menuitem').eq(1).find(".side_menu_sublist .item").eq(0).addClass('on');
		});
	</script>


</body>

</html>