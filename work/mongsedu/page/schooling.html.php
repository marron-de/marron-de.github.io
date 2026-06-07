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
									<div class="swiper-slide item RES" onclick="location.href='<?php echo G5_URL ?>/page/?pid=schooling_detail03'">
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
									<div class="swiper-slide item RES" onclick="location.href='<?php echo G5_URL ?>/page/?pid=schooling_detail04'">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum4.jpg" alt="" class="img">
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
									<div class="swiper-slide item SCH REC" onclick="location.href='<?php echo G5_URL ?>/page/?pid=schooling_detail05'">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum5.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_thai.svg" alt="" class="flag">
											</div>
											<div class="bottom">
												<div class="deco_img">
													<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_sticker2.png" alt="">
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
									<div class="swiper-slide item SCH REC" onclick="location.href='<?php echo G5_URL ?>/page/?pid=schooling_detail06'">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum6.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_thai.svg" alt="" class="flag">
											</div>
											<div class="bottom">
												<div class="deco_img"></div>
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
									<div class="swiper-slide item LNG REC" onclick="location.href='<?php echo G5_URL ?>/page/?pid=schooling_detail07'">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum7.jpg" alt="" class="img">
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
									<div class="swiper-slide item LNG" onclick="location.href='<?php echo G5_URL ?>/page/?pid=schooling_detail08'">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_thum8.jpg" alt="" class="img">
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
                        <div class="question">어떤 국가의 스쿨링 및 캠프를 운영하나요?</div>
                        <div class="answer">몽선생은 말레이시아, 싱가포르, 태국, 필리핀 등 다양한 국가의 영어 캠프 및 스쿨링 프로그램을 안내하고 있습니다. 학생의 연령, 영어 수준, 예산에 따라 적합한 국가를 추천해 드려요.​</div>
                    </li>
                    <li>
                        <div class="question">영어 실력이 부족해도 참여할 수 있나요?​</div>
                        <div class="answer">네, 대부분의 스쿨링·캠프는 영어 실력이 완벽하지 않아도 참여할 수 있어요. 다만 국제학교 정규수업에 참여하는 스쿨링은 기본적인 듣기와 생활 영어가 있으면 적응이 더 수월해요. 일반 영어캠프의 경우 현지에서 레벨테스트를 진행한 뒤, 학생의 영어 수준에 맞는 반으로 배정되어 수업이 진행돼요.</div>
                    </li>
                    <li>
                        <div class="question">우리 아이에게 어느 나라가 가장 잘 맞을까요?​</div>
                        <div class="answer">말레이시아는 국제학교 경험과 비용 균형이 좋아요. 싱가포르는 학업 분위기와 도시 안전성이 강점이에요. 태국은 어린 학생이 부담 없이 참여하기 좋은 데이캠프와 활동형 프로그램이 많아요. 필리핀은 1:1 영어 수업 비중이 높아 단기간 영어 실력 향상을 원하는 학생에게 잘 맞아요.</div>
                    </li>
                    <li>
                        <div class="question">스쿨링과 영어캠프는 어떤 차이가 있나요?​</div>
                        <div class="answer">스쿨링은 실제 국제학교 정규수업에 참여하거나 학교 생활을 경험하는 프로그램에 가까워요. 영어캠프는 영어 수업, 스포츠, 액티비티, 프로젝트 활동을 중심으로 구성되는 단기 프로그램이에요. 국제학교 적응을 목표로 한다면 스쿨링, 단기간 영어 노출과 즐거운 경험이 목적이라면 캠프가 더 잘 맞아요.</div>
                    </li>
                    <li>
                        <div class="question">몽선생 단독 프로그램인 이튼 국제학교 스쿨링은 다른 캠프와 무엇이 다른가요?​</div>
                        <div class="answer">이튼 국제학교 스쿨링은 단순히 영어 수업만 듣는 캠프가 아니라, 실제 국제학교 정규수업과 학교생활을 경험하는 프로그램에 가까워요. 현지 커리큘럼 안에서 수업을 듣고, 다국적 학생들과 함께 생활하며 자연스럽게 영어를 사용하는 환경을 경험할 수 있습니다. 또한 학교 중심 운영으로 생활관리까지 체계적으로 이루어져, 아이가 국제학교 분위기와 수업 방식에 미리 적응해볼 수 있다는 점이 일반 영어캠프와 가장 큰 차이예요.</div>
                    </li>
                    <li>
                        <div class="question">아이 혼자 해외 캠프에 보내도 괜찮을까요?​</div>
                        <div class="answer">캠프 유형에 따라 달라요. 말레이시아와 필리핀의 보딩형 캠프는 기숙사 생활과 생활 관리가 포함되는 경우가 많아 아이 혼자 참여하기 좋아요. 반면 싱가포르나 태국의 데이캠프는 숙소가 제공되지 않는 경우가 많아 부모 동반이나 보호자 체류가 필요한 경우가 많아요.</div>
                    </li>
                    <li>
                        <div class="question">캠프 기간은 몇 주가 적당한가요?</div>
                        <div class="answer">처음 해외 캠프를 경험하는 학생은 2주 프로그램으로 시작하는 것이 부담이 적어요. 영어 실력 향상이나 생활 적응까지 기대한다면 3~4주 이상이 더 효과적이에요. 특히 9세~11세는 적응 기간을 고려해야 하고, 12세~14세는 목표에 따라 집중형 프로그램을 선택하는 것이 좋아요.</div>
                    </li>
                    <li>
                        <div class="question">비용에는 보통 무엇이 포함되나요?​</div>
                        <div class="answer">프로그램마다 다르지만 일반적으로 수업료, 교재 또는 활동비, 식사, 액티비티, 보험, 공항 픽업, 기숙사 또는 숙소가 포함될 수 있어요. 다만 항공권, 개인 용돈, 보호자 숙소, 주말 선택 액티비티, 비자 비용은 별도인 경우가 많기 때문에 신청 전 포함·불포함 항목을 꼭 확인해야 해요.​</div>
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


