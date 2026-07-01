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
					<p class="tit">포항</p>
					<p class="desc">Branch News</p>
					<div class="breadcrumb">
						<a href="" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">지부소식</span>
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
								<span class="txt">포항</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<li><a href="" class="link">포항</a></li>
									<li><a href="" class="link">여수</a></li>
									<li><a href="" class="link">전남동부/경남서부</a></li>
									<li><a href="" class="link">울산</a></li>
									<li><a href="" class="link">충남</a></li>
									<li><a href="" class="link">전북</a></li>
									<li><a href="" class="link">경인</a></li>
									<li><a href="" class="link">강원/충북</a></li>
									<li><a href="" class="link">반도체사업단</a></li>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="section">
				<div class="inner">
					<div class="bolist_wrap">
						<div class="topbox">
							<div class="leftbox">
								<p class="total">
									Total <span class="num">0</span>
								</p>
							</div>
							<div class="rightbox">
								<div class="select_box">
									<select class="select">
										<option value="제목">제목</option>
										<option value="내용">내용</option>
										<option value="제목 + 내용" selected>제목 + 내용</option>
									</select>
								</div>
								<div class="input_box">
									<input type="text" class="input_text" placeholder="검색어를 입력해 주세요">
								</div>
								<button type="button" class="button icon_button typeA">
									<img src="<?php echo $path ?>img/ico_serach_wt.png" alt="" class="icon">
								</button>
							</div>
						</div>
						<div class="list_tblbox">
							<table class="tbl">
								<colgroup>
									<col style="width: 80px;">
									<col style="width: 840px;">
									<col style="width: 200px;">
									<col style="width: 160px;">
								</colgroup>
								<tbody>
									<tr class="no_post">
										<td colspan="999" class="no_item">
											<div class="no_postbox">
												<i data-lucide="circle-alert" class="icon"></i>
												<span class="txt">검색 결과가 없습니다.</span>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="bottombox">
							<div class="leftbox"></div>
							<div class="pagination">
								<div class="page page_btn start"></div>
								<div class="page page_btn prev"></div>
								<div class="page_linkbox">
									<p class="page page_link active">1</p>
									<p class="page page_link">2</p>
									<p class="page_ellipsis">...</p>
									<p class="page page_link">9</p>
									<p class="page page_link">0</p>
								</div>
								<div class="page page_btn next"></div>
								<div class="page page_btn end"></div>
							</div>
							<div class="rightbox">
								<a href="write.php" class="button typeA auto wid140">작성하기</a>
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