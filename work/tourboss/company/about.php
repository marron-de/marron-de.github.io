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


    <div class="wrap company_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section co_sec">
				<div class="inner layout">
					<div class="side_area fixed">			
    					<?php include "../common/side_menu_co.php" ?>
    					<?php include "../common/customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_titbox2">
							<div class="mob_view">
								<p class="s_tit">회사소개</p>
								<div class="breadcrumb">
									<a href="<?php echo $path ?>index.php" class="home"></a>
									<span class="bar"></span>
									<span class="catetit">회사소개</span>
									<span class="bar"></span>
									<div class="catebox">
										<button type="button" class="catetit cate_btn">
											<span class="txt">회사소개</span>
											<span class="arrow"></span>
										</button>
										<div class="popup cate_popup">
											<div class="linkbox">
												<a href="<?php echo $path ?>company/about.php" class="link">회사소개</a>
												<a href="<?php echo $path ?>company/location.php" class="link">오시는길</a>
												<a href="<?php echo $path ?>company/partner.php" class="link">제휴문의</a>
												<a href="<?php echo $path ?>company/terms.php" class="link">서비스이용약관</a>
												<a href="<?php echo $path ?>company/privacy.php" class="link">개인정보처리방침</a>
												<a href="<?php echo $path ?>company/refund.php" class="link">취소 및 환불 정책</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<p class="s_subtit">회사 소개</p>							
						</div>
						<div class="contbox">
							<div class="about_box">
								<div class="about_item about_item1">
									<div class="topbox">
										<div class="txtbox">
											<p class="tit">여행대장은</p>
											<p class="desc">
												한국여행 전문 인바운드 여행사로서, 맞춤형 투어와 액티비티를 제공하며 <br class="pc">
												고객에게 최고의 여행 경험과 행복을 선사하는 성장하는 여행 기업입니다.
											</p>
										</div>
										<div class="imgbox">
											<img src="<?php echo $path ?>img/com_about_img1.jpg" alt="" class="img">
										</div>
									</div>
									<div class="about_titbox">
										<p class="sub">About Us</p>
										<p class="tit">
											경험과노하우 최고의 상품개발력 기획력,  <br>
											운영, 해외 유통력을 보유한 기업
										</p>
										<p class="desc">
											TK트래블은 1,000개가 넘는 국내 여행상품을 개발 및 제작하고 국내 지자체, <br class="pc">
											한국관광공사와 협력하여 홍보 마케팅 및 여행상품 유통을 꾸준히 지속해 오고 있습니다. 
											<br><br>
											2015년 설립이후 현재까지 방한 외국인 모객인원이 매년 200%씩 증가 하고있습니다.
											<br><br>
											이런 인프라와 데이터를 기반으로 해외 현지 여행사 및 대리점에서 빠르고 편리하게 한국 여행상품을 
											<br class="pc">
											예약할 수 있는 B2B 글로벌 네트워크 솔루션을 자체 개발하여 쉽고 빠른 여행 예약 트래블 테크를 만들어 가고 있습니다. 
											<br><br>
											또한 국내외 지자체 전담여행사 선정으로 특화 상품을 개발하여 마케팅, 홍보, 유통 서비스를 협력하여 발전시켜 나아가고 있습니다.
										</p>
									</div>
								</div>
								<div class="about_item about_item2">
									<div class="about_titbox">
										<p class="sub">History</p>
										<p class="tit">주요연혁</p>
									</div>
									<div class="about_cont">
										<div class="item">
											<p class="year">2024</p>
											<div class="descbox">
												<div class="desc">
													<!-- 260329 추가작업 -->
													<p class="txt">문화체육부지역관광특화상품 공모전 선정</p>
													<div class="imgbox">
														<img src="<?php echo $path ?>img/sample_img.jpg" alt="" class="img">
														<button type="button" class="more_btn" onclick="history_popup()"></button>
													</div>
												</div>
												<div class="desc">
													<!-- 260329 추가작업 -->
													<p class="txt">여행대장 아웃바운드 런칭 및 국내 복지몰 API연동 개발</p>
													<!-- 260330 추가작업 -->
													<div class="imgbox">
														<img src="<?php echo $path ?>img/sample_img.jpg" alt="" class="img">
														<button type="button" class="more_btn" onclick="history_popup()"></button>
													</div>
												</div>
												<div class="desc">
													<p class="txt">강릉시 중화권 해외 전담여행사 선정</p>
												</div>
											</div>
										</div>
										<div class="item">
											<p class="year">2023</p>
											<div class="descbox">
												<div class="desc">
													<p class="txt">SBS, JTBC, KBS 멜론뮤직어워드 콘서트 10개 티켓유통</p>
												</div>
												<div class="desc">
													<p class="txt">경상북도 "하늘여행" 열기구 운영사 선정 (4개시군)</p>
												</div>
												<div class="desc">
													<p class="txt">충청북도 해외 전담여행사 선정</p>
												</div>
												<div class="desc">
													<p class="txt">인천시 해외 전담여행사 선정</p>
												</div>
												<div class="desc">
													<p class="txt">강원도, 경상북도 해외 전담여행사 선정</p>
												</div>
											</div>
										</div>
										<div class="item">
											<p class="year">2022</p>
											<div class="descbox">
												<div class="desc">
													<p class="txt">한국관광공사 바우처 사업 "제공기업" 선정</p>
												</div>
												<div class="desc">
													<p class="txt">문화체육부 "성장관광벤처기업에 선정</p>
												</div>
											</div>
										</div>
										<div class="item">
											<p class="year">2021</p>
											<div class="descbox">
												<div class="desc">
													<p class="txt">경상북도 도지사 "경북관광활성화 표창장 수상</p>
												</div>
												<div class="desc">
													<!-- 260329 추가작업 -->
													<p class="txt">한국관광공사 "여행가는달 쿠팡 기획전 운영사 선정</p>
													<!-- 260330 추가작업 -->
													<div class="imgbox">
														<img src="<?php echo $path ?>img/sample_img.jpg" alt="" class="img">
														<button type="button" class="more_btn" onclick="history_popup()"></button>
													</div>
												</div>
												<div class="desc">
													<!-- 260329 추가작업 -->
													<p class="txt">인천관광공사 미식 관광상품 공모전 우수상" 수상</p>
													<!-- 260330 추가작업 -->
													<div class="imgbox">
														<img src="<?php echo $path ?>img/sample_img.jpg" alt="" class="img">
														<button type="button" class="more_btn" onclick="history_popup()"></button>
													</div>
												</div>
												<div class="desc">
													<p class="txt">경상북도, 인천, 강원도, 충청북도 국외 전담여행사 선정</p>
												</div>
											</div>
										</div>
										<div class="item">
											<p class="year">2020</p>
											<div class="descbox">
												<div class="desc">
													<!-- 260329 추가작업 -->
													<p class="txt">경상북도, 인천관광공사,강원도 국외 전담여행사 선정</p>
													<!-- 260330 추가작업 -->
													<div class="imgbox">
														<img src="<?php echo $path ?>img/sample_img.jpg" alt="" class="img">
														<button type="button" class="more_btn" onclick="history_popup()"></button>
													</div>
												</div>
											</div>
										</div>
										<div class="item">
											<p class="year">2019</p>
											<div class="descbox">
												<div class="desc">
													<p class="txt">MBC 월드 한류콘텐츠 공식 외국인 총판업체 선정</p>
												</div>
												<div class="desc">
													<p class="txt">강원도 전라북도 경상북도 전담여행사 지정</p>
												</div>
											</div>
										</div>
										<div class="item">
											<p class="year">2018</p>
											<div class="descbox">
												<div class="desc">
													<p class="txt">경상북도 국외 외국인 유치 실적 감사패 수상</p>
												</div>
												<div class="desc">
													<p class="txt">INK콘서트, BBQxSBS슈퍼콘서트,MMA(멜론뮤직)</p>
												</div>
											</div>
										</div>
										<div class="item">
											<p class="year">2017</p>
											<div class="descbox">
												<div class="desc">
													<p class="txt">경기도청 외국인 문화대축전 전담여행사 진행</p>
												</div>
												<div class="desc">
													<p class="txt">경상북도문화관광공사 전담여행사 지정</p>
												</div>
											</div>
										</div>
										<div class="item">
											<p class="year">2016</p>
											<div class="descbox">
												<div class="desc">
													<p class="txt">홍콩 EGL / TRAVEL FEVER / TRAVEL EXPERT</p>
												</div>
												<div class="desc">
													<p class="txt">대만 COLA TOUR / EZ TRAVEL / LION 업무제휴</p>
												</div>
											</div>
										</div>
										<div class="item">
											<p class="year">2015</p>
											<div class="descbox">
												<div class="desc">
													<p class="txt">TK트래블 창설 및 KLOOK 및 KKDAY 업무제휴</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="about_item about_item3">
									<div class="about_titbox">
										<p class="sub">Vision</p>
										<p class="tit">비전</p>
									</div>
									<div class="about_cont">
										<div class="leftbox">
											<div class="imgbox">
												<img src="<?php echo $path ?>img/com_about_img2.jpg" alt="" class="img">
											</div>
											<p class="tit">Vision</p>
										</div>
										<div class="rightbox">
											<div class="item">
												<p class="num">01</p>
												<p class="tit">
													<span class="txt">Human</span>
													<span class="small">사람</span>
												</p>
												<p class="desc">
													여행객의 행복과 안녕을 증진하고  인간의 삶의 질을 <br>
													향상시키고 지역 인구의 소멸을 막기 위한 노력 실천
												</p>
											</div>
											<div class="line"></div>
											<div class="item">
												<p class="num">02</p>
												<p class="tit">
													<span class="txt">Innovation</span>
													<span class="small">특화</span>
												</p>
												<p class="desc">
													사회와 지역 경제의 발전을 촉진하며,  <br>
													새로운 문제에 대한 해결책을 찾고 기회를 창출
												</p>
											</div>
											<div class="line"></div>
											<div class="item">
												<p class="num">03</p>
												<p class="tit">
													<span class="txt">Technology</span>
													<span class="small">기술</span>
												</p>
												<p class="desc">
													연구개발 지원, 기술 창업 지원 기술 발전을  <br>
													지원하기 위해 필요한 인프라를 구축
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

        </div>


    	<?php include "../common/fixed_nav.php" ?>

    	<?php include "../common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include "../common/footer.php" ?>

		  
		<!-- 260330 추가작업  -->
        <div id="history_popup" class="modal ver2 photo_modal">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">연혁 이미지보기</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body photo_wrap">
					<div class="imgbox">
						<img src="<?php echo $path ?>img/sample_img.jpg" alt="" class="img">
					</div>
				</div>
			</div>
        </div>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>
	<script>
  		 $(function() {
			$('.side_menu .side_menulist .menuitem').eq(0).addClass('active');
		});
	</script>



</body>

</html>