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
					<div class="boview_wrap">
						<div class="topbox">
							<p class="title">
								게시물 제목입니다. 게시물 제목입니다. 게시물 제목입니다. 게시물 제목입니다.
							</p>
							<div class="info">
								<p class="txt">전국플랜트건설노동조합</p>
								<div class="bar"></div>
								<p class="txt">2026.01.16</p>
							</div>
						</div>
						<div class="contbox">
							<img src="<?php echo $path ?>img/view_img.jpg" alt="">
							<br><br>
							<p>
								게시물 내용입니다. 게시물 내용입니다. 게시물 내용입니다. 
								<br>
								게시물 내용입니다. 게시물 내용입니다. 게시물 내용입니다. 
								<br>
								게시물 내용입니다. 게시물 내용입니다. 게시물 내용입니다. 
								<br>
								게시물 내용입니다. 게시물 내용입니다. 게시물 내용입니다. 
							</p>
						</div>
						<div class="bottombox">
							<div class="leftbox">
								<a href="" class="paging_btn">
									<div class="btn">
										<img src="<?php echo $path ?>img/ico_prev.png" alt="" class="icon">
										<span class="txt">이전글</span>
									</div>
									<p class="title">이전글이 없습니다.</p>
								</a>
							</div>
							<a href="list_gallery.php" class="button typeB auto wid140">목록</a>
							<div class="rightbox">
								<a href="" class="paging_btn">
									<div class="btn">
										<span class="txt">다음글</span>
										<img src="<?php echo $path ?>img/ico_next.png" alt="" class="icon">
									</div>
									<p class="title">테스트 타이틀입니다. 테스트 타이틀입니다. 테스트 타이틀입니다. </p>
								</a>
							</div>
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