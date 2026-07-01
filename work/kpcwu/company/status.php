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
					<p class="tit">조직현황</p>
					<p class="desc">About Us</p>
					<div class="breadcrumb">
						<a href="" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">소개</span>
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
								<span class="txt">조직현황</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="" class="link">플랜트건설노조는</a>
									<a href="" class="link">조직현황</a>
									<a href="" class="link">임원소개</a>
									<a href="" class="link">걸어온 길</a>
									<a href="" class="link">오시는 길</a>
									<a href="" class="link">조합가입안내</a>
									<a href="" class="link">규약</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<section class="section status_sec1">
				<div class="inner">
					<div class="contbox">
						<div class="mapbox">
							<img src="<?php echo $path ?>img/status_map1.png" alt="" class="map">
						</div>
						<div class="txtbox">							
							<div class="topbox">
								<p class="sub_txt2 tit">노동조합</p>
								<p class="desc">서울특별시 영등포구 대림로 146 2층</p>
								<div class="infobox">
									<div class="item">
										<img src="<?php echo $path ?>img/ico_call.png" alt="" class="icon">
										<p class="txt">02-834-5375</p>
									</div>
									<div class="bar"></div>
									<div class="item">
										<img src="<?php echo $path ?>img/ico_fax.png" alt="" class="icon">
										<p class="txt">02-843-1436</p>
									</div>
								</div>
							</div>
							<div class="mapbtn">
								<button type="button" class="btn on" onclick="status_map(1)">노동조합</button>
								<button type="button" class="btn" onclick="status_map(1)">포항지부</button>
								<button type="button" class="btn" onclick="status_map(1)">여수지부</button>
								<button type="button" class="btn" onclick="status_map(1)">전남동부경남서부지부</button>
								<button type="button" class="btn" onclick="status_map(1)">울산지부</button>
								<button type="button" class="btn" onclick="status_map(1)">충남지부</button>
								<button type="button" class="btn" onclick="status_map(1)">전북지부</button>
								<button type="button" class="btn" onclick="status_map(1)">경인지부</button>
								<button type="button" class="btn" onclick="status_map(1)">강원충북지부</button>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section status_sec2">
				<div class="inner">
					<div class="contbox">
						<div class="txtbox">
							<div class="sub_titbox">
								<p class="sub_txt1">Organization</p>
								<p class="sub_txt2">8개 지부와 산하에 직종별 분회로 구성</p>
							</div>
							<div class="descbox">
								<p class="desc">
									<span class="txt">
										8개 지부
										<span class="small">
											(포항지부, 여수지부, 전남동부경남서부지부, 울산지부, 충남지부, 전북지부, 경인지부, 강원충북지부)
										</span>
									</span>
								</p>
								<p class="desc">
									<span class="txt">
										각 지부 산하에 직종별 분회가 있습니다. 
										<span class="small">(분회 구성은 지부마다 상이 함)</span>
									</span>
								</p>
							</div>
						</div>
						<div class="imgbox">
							<div class="item top">
								<p class="tit">총회</p>
							</div>
							<div class="line"></div>
							<div class="item">
								<p class="tit">대의원대회</p>
							</div>
							<div class="line"></div>
							<div class="item">
								<p class="tit">운영위원회</p>
							</div>
							<div class="line"></div>
							<div class="item full">
								<p class="tit">8개 지부</p>
								<p class="desc">포항, 여수, 전남동부경남서부, 울산,충남, 전북, 경인, 강원충북</p>
							</div>
							<div class="line"></div>
							<div class="item">
								<p class="desc">직종별 분회</p>
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