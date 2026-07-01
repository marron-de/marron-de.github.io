<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전국플랜트건설노동조합</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>

		<!-- container -->
		<div class="container">

			<div class="subtop">
				<div class="inner">
					<p class="tit">성명/보도</p>
					<p class="desc">News</p>
					<div class="breadcrumb">
						<a href="" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">소식</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="" class="link">소개</a>
									<a href="" class="link">소식</a>
									<a href="" class="link">지부소식</a>
									<a href="" class="link">자료</a>
								</div>
							</div>
						</div>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">성명/보도</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="" class="link">성명/보도</a>
									<a href="" class="link">알림</a>
									<a href="" class="link">중앙소식</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="section">
				<div class="inner">
					<div class="bowrite_wrap">
						<div class="form_box">
							<div class="form_item">
								<p class="form_label">제목</p>
								<div class="input_box">
									<div class="input_flex">
										<input type="text" class="input_text full" placeholder="제목을 입력해주세요.">
										<div class="check_box">
											<input type="checkbox" class="input_check" id="secret_mode" checked>
											<label for="secret_mode" class="label_check">비밀글</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form_item">
								<p class="form_label">작성자</p>
								<div class="input_box">
									<input type="text" class="input_text" placeholder="작성자를 입력해주세요." value="홍길동">
								</div>
							</div>
							<div class="form_item">
								<p class="form_label">내용</p>
								<div class="input_box">
									<textarea class="input_text" placeholder="내용을 입력해 주세요"></textarea>
								</div>
							</div>
							<div class="form_item">
								<p class="form_label">첨부파일</p>
								<div class="input_box">
									<div class="input_flex file_box">
										<input type="file" name="frm_file1" id="frm_file1" class="input_file">
										<div class="label_file full">파일을 첨부해주세요</div>
										<label for="frm_file1" class="btn_file button typeA input_btn">파일 선택</label>
									</div>
								</div>
							</div>
							<div class="form_item">
								<p class="form_label">첨부파일</p>
								<div class="input_box">
									<div class="input_flex file_box">
										<input type="file" name="frm_file1" id="frm_file1" class="input_file">
										<div class="label_file full">파일을 첨부해주세요</div>
										<label for="frm_file1" class="btn_file button typeA input_btn">파일 선택</label>
									</div>
								</div>
							</div>
						</div>
						<div class="bottombox">
							<a href="list_gallery.php" class="button typeB auto wid140">목록</a>
							<button type="button" class="button typeA auto wid140">작성하기</button>
						</div>
					</div>
				</div>
			</section>

        </div>

    	<?php include "../common/footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>
	<script>	
		$(".header .h_nav > li").eq(0).addClass("active")
	</script>


</body>

</html>