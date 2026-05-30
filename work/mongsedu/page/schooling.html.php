<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;
?>


<div class="sub-page page-counsel page-schooling">

	<div class="banner_area">
		<div class="imgbox">
			<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/school_ban_img.jpg" alt="" class="img pc">
			<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/school_ban_img_m.jpg" alt="" class="img tablet">
		</div>
    </div>

	<div class="msection schooling_sec2">
        <div class="container contbox" data-aos="fade-up">
			<div class="leftbox">
				<div class="tit_badge">아시아 맞춤형 스쿨링/캠프</div>
				<p class="tit">
					<span class="no_typing">아이의 첫 해외경험,</span>
					<span class="typing typing1">
						<span class="before">몽선생이 안전하게 설계합니다.</span>
						<span class="after ani">몽선생이 안전하게 설계합니다.</span>
					</span>
				</p>				
				<p class="desc">검증된 스쿨링/캠프, 몽선생이 직접 선별합니다!</p>
			</div>
			<div class="rightbox">
				<div class="tagbox">
					<span class="tag">#국제학교</span>
					<span class="tag">#아시아</span>
					<span class="tag">#스쿨링</span>
					<span class="tag">#한달살기</span>
				</div>
				<div class="kakao_box">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_sec2_icon.png" alt="" class="icon">
						<p class="tit">
							말레이시아, 태국, 싱가포르 필리핀까지! <br>
							<span class="bold">엄선된 방학 프로그램이 준비되어 있어요.</span>
						</p>
					</div>
					<div class="txtbox">
						<a href="https://pf.kakao.com/_fxmxmWV" class="btn" target="_blank">카톡 무료 상담하기</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="msection schooling_sec3">
        <div class="container" data-aos="fade-up">
			<div class="titbox">
				<p class="tit">아시아 국가별 캠프 알아보기</p>
			</div>
			<div class="swiper campflag_swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide item">
						<a href="#none" class="link" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/campflag_malay.png" alt="" class="img">
							</div>
							<div class="txtbox">
								<p class="tit">스쿨링/캠프</p>
								<p class="desc">쿠알라룸프</p>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="#none" class="link" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/campflag_malay.png" alt="" class="img">
							</div>
							<div class="txtbox">
								<p class="tit">방학캠프</p>
								<p class="desc">조호바루</p>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="#none" class="link" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/campflag_singapore.png" alt="" class="img">
							</div>
							<div class="txtbox">
								<p class="tit">방학캠프</p>
								<p class="desc">싱가포르</p>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="#none" class="link" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/campflag_thai.png" alt="" class="img">
							</div>
							<div class="txtbox">
								<p class="tit">방학캠프</p>
								<p class="desc">방콕</p>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="#none" class="link" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/campflag_pili.png" alt="" class="img">
							</div>
							<div class="txtbox">
								<p class="tit">방학캠프</p>
								<p class="desc">필리핀</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="msection schooling_sec4 tabs">
       <div class="container" data-aos="fade-up">
            <div class="ms title_area" id="row-1">
                <div class="tab swiper tab_swiper" data-gappc="0" data-gapmob="5">
                    <ul class="tab_tit swiper-wrapper">
                        <li class="swiper-slide"><a href="#" class="show" id="tab-11" data-cate="ALL">전체보기</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-12" data-cate="SCH">스쿨링</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-13" data-cate="LNG">어학원캠프</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-14" data-cate="RES">기숙형캠프</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-15" data-cate="REC">추천 프로그램</a></li>
                    </ul>
                </div>
            </div>
            <div class="schcamp_list tabs_cont">
                <ul class="panel">
                    <li id="content-11">
						<div class="schlist_wrap">
							<div class="schlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper schlist_swiper sch_list">
								<div class="swiper-wrapper">
									<div class="swiper-slide item SCH REC" onclick="location.href='<?php echo G5_URL ?>/page/?pid=schooling_detail01'">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum1.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
											<div class="bottom">
												<div class="deco_img">
													<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_sticker1.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">말레이시아</p>
												<p class="tag state">모집중</p>
											</div>
											<div class="titbox">
												<p class="tit">말레이시아 EATON 국제학교, 쿠알라룸프</p>
												<p class="desc">2027년1월 국제학교 정규수업 스쿨링</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2027/1/11 ~ 1/29</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">유치~중등</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">레지던스 포함</p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">5,000,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">4,800,000원</span>
															<span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">5%</span>
															</span>
														</span>
													</p>
												</div>
												<a href="#none" class="more">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide item RES REC" onclick="location.href='<?php echo G5_URL ?>/page/?pid=schooling_detail02'">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum2.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
											<div class="bottom">
												<div class="deco_img">
													<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_sticker2.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">말레이시아</p>
												<p class="tag state">모집중</p>
											</div>
											<div class="titbox">
												<p class="tit">말레이시아 Epsom 국제학교, 쿠알라룸프</p>
												<p class="desc">2027년 1월,  영국식 보딩 겨울방학캠프</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2027년 1월예정 (2주~4주)</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">초등고학년~중고등</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">기숙사 포함</p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">3,350,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">할인없음</span>
															<!-- <span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">20%</span>
															</span> -->
														</span>
													</p>
												</div>
												<a href="#none" class="more">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide item RES" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum3.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
											<div class="bottom"></div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">말레이시아</p>
												<p class="tag state">모집중</p>
											</div>
											<div class="titbox">
												<p class="tit">말레이시아 UCSI 국제학교, 쿠알라룸프</p>
												<p class="desc">2026년 7월, 국제학교 보딩 영어캠프</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2026/7/19 ~ 8/02</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">만 7-14세</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">기숙사 포함</p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">3,050,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">2,860,000원</span>
															<span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">6.2%</span>
															</span>
														</span>
													</p>
												</div>
												<a href="#none" class="more" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide item RES" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum4.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
											<div class="bottom"></div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">말레이시아</p>
												<p class="tag state">모집중</p>
											</div>
											<div class="titbox">
												<p class="tit">말레이시아 Raffles 국제학교, 조호바루</p>
												<p class="desc">2026년 7월, 국제학교 영어캠프(보딩/통학 선택)</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2026/6/29~8/21 (기간 선택)</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">만6세~만16세</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">기숙사/ 기숙사 미포함도 선택 가능 </p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">3,200,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">2,800,000원</span>
															<span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">5%</span>
															</span>
														</span>
													</p>
												</div>
												<a href="#none" class="more" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide item SCH REC" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum5.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_thai.svg" alt="" class="flag">
											</div>
											<div class="bottom">
												<div class="deco_img">
													<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_sticker1.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">태국</p>
												<p class="tag state">모집중</p>
											</div>
											<div class="titbox">
												<p class="tit">태국 Regent 국제학교, 방콕</p>
												<p class="desc">2026년 7월, 국제학교 통학 영어캠프</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2026/7/20 ~ 2026/8/14 (1-4주 선택가능)</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">만 3세~12세</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">호텔 포함 </p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">5,620,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">5,000,000원</span>
															<span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">20%</span>
															</span>
														</span>
													</p>
												</div>
												<a href="#none" class="more" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide item SCH REC" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum6.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_thai.svg" alt="" class="flag">
											</div>
											<div class="bottom">
												<div class="deco_img">
													<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_sticker1.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">태국</p>
												<p class="tag state">모집중</p>
											</div>
											<div class="titbox">
												<p class="tit">태국 Anglo 국제학교, 방콕</p>
												<p class="desc">2026년 7월, 국제학교 통학 영어캠프</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2026/7/14 ~ 2026/8/7</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">3세 ~ 11세</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">호텔 포함 </p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">5,400,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">할인없음</span>
															<!-- <span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">20%</span>
															</span> -->
														</span>
													</p>
												</div>
												<a href="#none" class="more" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide item LNG REC" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum7.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_ph.svg" alt="" class="flag">
											</div>
											<div class="bottom">
												<div class="deco_img">
													<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_sticker2.png" alt="">
												</div>
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">필리핀</p>
												<p class="tag state">모집중</p>
											</div>
											<div class="titbox">
												<p class="tit">필리핀 파인스 어학원, 바기오</p>
												<p class="desc">2027년 겨울방학 가족 영어캠프</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2026/12/27~2/20 (4주, 6주, 8주 선택)</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">7세~15세</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">바기오 파인스 메인캠퍼스 기숙사</p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">3,660,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">할인없음</span>
															<!-- <span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">20%</span>
															</span> -->
														</span>
													</p>
												</div>
												<a href="#none" class="more" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>									
									<div class="swiper-slide item LNG" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum8.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_ph.svg" alt="" class="flag">
											</div>
											<div class="bottom"></div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">필리핀</p>
												<p class="tag state">모집중</p>
											</div>
											<div class="titbox">
												<p class="tit">필리핀 블루오션 어학원, 세부</p>
												<p class="desc">2027년 겨울방학 어학원 캠프</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2026/11/29~2/20 (4주, 6주, 8주, 12주 선택)</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">7세 ~ 16세</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">EGI 리조트 호텔</p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">6,800,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">할인없음</span>
															<!-- <span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">20%</span>
															</span> -->
														</span>
													</p>
												</div>
												<a href="#none" class="more" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum9.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
											</div>
											<div class="bottom"></div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">싱가포르</p>
												<p class="tag state">모집중</p>
											</div>
											<div class="titbox">
												<p class="tit">싱가포르 CIS 캐나다 국제학교</p>
												<p class="desc">2026년 7월, 국제학교 통학 영어캠프</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2026/6/15 ~ 2026/7/31</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">4세 ~ 17세</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">미포함</p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">910,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">할인없음</span>
															<!-- <span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">20%</span>
															</span> -->
														</span>
													</p>
												</div>
												<a href="#none" class="more" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
									<div class="swiper-slide item LNG end" onclick="showToast('마감된 스쿨링/캠프입니다', 'emoji2')">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum10.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
											</div>
											<div class="bottom"></div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">싱가포르</p>
												<p class="tag state">마감</p>
											</div>
											<div class="titbox">
												<p class="tit">싱가포르 CIS 캐나다 국제학교</p>
												<p class="desc">2026년 7월, 국제학교 통학 영어캠프</p>
											</div>
											<div class="infobox">
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon1.png" alt="" class="icon">
														<span class="txt">기간</span>
													</div>
													<p class="desc">2026/6/15 ~ 2026/7/31</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon2.png" alt="" class="icon">
														<span class="txt">대상</span>
													</div>
													<p class="desc">4세 ~ 17세</p>
												</div>
												<div class="infoitem">
													<div class="tit">
														<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_info_icon3.png" alt="" class="icon">
														<span class="txt">숙소</span>
													</div>
													<p class="desc">미포함</p>
												</div>
											</div>
											<div class="bottom">
												<div class="pricebox">
													<p class="price ori">
														<span class="tit">정상가</span>
														<span class="desc">910,000원</span>
													</p>
													<p class="price total">
														<span class="tit">할인가</span>
														<span class="desc">
															<span class="number">할인없음</span>
															<!-- <span class="sale">
																<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
																<span class="percent">20%</span>
															</span> -->
														</span>
													</p>
												</div>
												<a href="#none" class="more" onclick="showToast('스쿨링/캠프 준비중입니다', 'emoji1')">
													<span class="txt">상세보기</span>
													<span class="icon"></span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </li>
                    <li id="content-12">
						<div class="schlist_wrap">
							<div class="schlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper schlist_swiper sch_list">
								<div class="swiper-wrapper">
									
								</div>
							</div>
						</div>
                    </li>
                    <li id="content-13">
						<div class="schlist_wrap">
							<div class="schlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper schlist_swiper sch_list">
								<div class="swiper-wrapper">
										
								</div>
							</div>
						</div>
                    </li>
                    <li id="content-14">
						<div class="schlist_wrap">
							<div class="schlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper schlist_swiper sch_list">
								<div class="swiper-wrapper">
									
								</div>
							</div>
						</div>
                    </li>
                    <li id="content-15">
						<div class="schlist_wrap">
							<div class="schlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper schlist_swiper sch_list">
								<div class="swiper-wrapper">
									
								</div>
							</div>
						</div>
                    </li>
                </ul>
            </div>
        </div>
	</div>

	<div class="msection schooling_sec5">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area">
				<div class="title">
					<span class="tit"><span class="color2">숏클립</span> 스쿨링/캠프 알아보기</span>
				</div>
				<div class="sec5_controls">
					<div class="swiper-button-prev prev_btn"></div>
					<div class="swiper-button-next next_btn"></div>
				</div>
            </div>
			<div class="swiper shortclip_swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum1.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">Q&A</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">말레이시아</p>
										<p class="bg">스쿨링의 장점은?</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum2.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">Q&A</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">아시아 전역 캠프/스쿨링</p>
										<p class="bg">가격 한번에 비교</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum3.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">태국 캠프</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">태국은 어떨까?</p>
										<p class="bg">3주 방학캠프 이런점이</p>
										<p class="bg">좋아요</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum4.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">필리핀</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">필리핀</p>
										<p class="bg">“이런분들만 가세요”</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum5.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">말레이시아 캠프</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">말레이시아 캠프 모음</p>
										<p class="bg">가격, 프로그램 비교</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum1.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">Q&A</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">말레이시아</p>
										<p class="bg">스쿨링의 장점은?</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum2.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">Q&A</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">아시아 전역 캠프/스쿨링</p>
										<p class="bg">가격 한번에 비교</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum3.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">태국 캠프</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">태국은 어떨까?</p>
										<p class="bg">3주 방학캠프 이런점이</p>
										<p class="bg">좋아요</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum4.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">필리핀</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">필리핀</p>
										<p class="bg">“이런분들만 가세요”</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="swiper-slide item">
						<a href="" class="link" target="_blank">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/shorts_thum5.jpg" alt="" class="img">
								<span class="play"></span>
							</div>
							<div class="txtbox">
								<div class="top">
									<span class="cate">말레이시아 캠프</span>
								</div>
								<div class="bottom">
									<div class="tit">
										<p class="txt">말레이시아 캠프 모음</p>
										<p class="bg">가격, 프로그램 비교</p>
									</div>
									<div class="more">
										<span class="txt">자세히보기</span>
										<span class="arrow"></span>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="msection schooling_sec6">
        <div class="container" data-aos="fade-up">
			<div class="banner">
				<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission" class="link">
					<div class="bgbox">						
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/schl_ban_bg.jpg" alt="" class="pc img">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/schl_ban_bg_mob.jpg" alt="" class="tablet img">
					</div>
					<div class="titbox">
						<p class="tit">
							어떤 캠프가 좋을지 모르겠다면 <br>
							<span class="bold">설명회에서 만나보세요.</span>
						</p>
					</div>
					<div class="more">
						<span class="txt">캠프 설명회 알아보기</span>
						<span class="arrow"></span>
					</div>
				</a>
			</div>
		</div>
	</div>

    <div class="msection faq_area schooling_sec7">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area notab">
                <span>자주 묻는 질문</span>
            </div>
            <div class="faq-box">
                <ul class="faq_list">
                    <li>
                        <div class="question">말레이시아 국제학교 학비는 보통 얼마인가요?</div>
                        <div class="answer">학교 등급에 따라 연간 1,000만 원~3,500만 원까지 다양합니다. 가성비 높은 학교부터 명문 보딩스쿨까지 예산에 맞춘 선택이 가능합니다.​</div>
                    </li>
                    <li>
                        <div class="question">쿠알라룸푸르와 조호바루 중 어느 지역의 국제학교가 더 유리할까요?​</div>
                        <div class="answer">인프라와 교육열은 쿠알라룸푸르가 높고, 쾌적한 주거 환경과 통학 편의성은 조호바루가 강점입니다. 가족의 생활 패턴에 따라 결정해야 합니다.</div>
                    </li>
                    <li>
                        <div class="question">가디언(보호자) 비자 발급 절차와 부모님이 동반할 때 주의사항은 무엇인가요?​</div>
                        <div class="answer">학생 비자 1건당 부모 중 1명이 동반 비자를 받을 수 있습니다. 최근 심사가 까다로워졌으므로 전문 수속 대행을 통하는 것이 안전합니다.</div>
                    </li>
                    <li>
                        <div class="question">말레이시아 국제학교 졸업 후 해외 명문대 진학 사례가 많은가요?​</div>
                        <div class="answer">말레이시아 국제학교 졸업생들은 뛰어난 영어 실력을 바탕으로 영국, 호주, 미국뿐 아니라 아시아권 명문대로 다수 진학하고 있습니다.​</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function () {
    $(".tab_tit a[data-cate]").not("[data-cate='ALL']").each(function () {
        const cate = $(this).data("cate");
        const tabId = $(this).attr("id").replace("tab-", "content-");
        const $target = $("#" + tabId + " .swiper-wrapper");

        const $items = $("#content-11 .swiper-wrapper .swiper-slide").filter(function () {
            return $(this).hasClass(cate);
        });

        if ($items.length > 0) {
            $target.append($items.clone(true));
        } else {
            $target.append(`
                <div class="swiper-slide item no_item">
                    <div class="no_item_txt">스쿨링/캠프 준비중입니다.</div>
                </div>
            `);
        }
    });
});
</script>


