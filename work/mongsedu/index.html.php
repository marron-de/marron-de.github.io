<?php
/**
 * theme file : /theme/THEME_NAME/index.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<style>
	.header .top_banner {display: flex;}
</style>

<div class="main-contents">
    <div class="main_banner">
        <div class="container" data-aos="fade">
            <div class="mv_wrap">
                <div class="text_area">
					<p class="sub">SINCE 2006, 아시아교육전문</p>
					<p class="tit">
						<span class="typing">
							<span class="before">국제학교</span>
							<span class="after ani">국제학교</span>
						</span>
						부터 해외대학 입학까지
					</p>
					<div class="sch_box">
						<button type="button" class="sch_btn" onclick="main_sch_popup()">
							<span class="txt">어떤 교육상담이 필요하세요?</span>
							<span class="arrow"></span>
						</button>
						<div class="cm_popup sch_popup">
							<button type="button" class="sch_btn cm_pop_close">
								<span class="txt">어떤 교육상담이 필요하세요?</span>
								<span class="arrow"></span>
							</button>
							<ul class="linkbox">
								<li><a href="<?php echo G5_URL ?>/page/?pid=counsel_detail01" class="link">말레이시아 국제학교</a></li>
								<li><a href="<?php echo G5_URL ?>/page/?pid=counsel_detail07" class="link">싱가포르 사립대</a></li>
								<li><a href="<?php echo G5_URL ?>/page/?pid=counsel_detail09" class="link">싱가포르/홍콩 국립대</a></li>
								<li><a href="<?php echo G5_URL ?>/page/?pid=counsel_detail08" class="link">싱가포르 예술대</a></li>
								<li><a href="<?php echo G5_URL ?>/page/?pid=counsel_detail06" class="link">말레이시아 대학</a></li>
								<li><a href="<?php echo G5_URL ?>/page/?pid=counsel_detail10" class="link">송도/서강 글로벌캠퍼스</a></li>
								<li><a href="<?php echo G5_URL ?>/page/?pid=counsel_detail05" class="link">국제학교 영어진단 테스트</a></li>
								<li><a href="" class="link">아시아+미국 대학</a></li><!--신규페이지작업-->
							</ul>
						</div>
					</div>
                    <div class="tag_area swiper tab_swiper" data-gappc="6" data-gapmob="6">
						<div class="swiper-wrapper">
							<a href="<?php echo G5_URL ?>/page/?pid=counsel_detail01" class="swiper-slide">말레이시아 국제학교</a>
							<a href="<?php echo G5_URL ?>/page/?pid=counsel_detail07" class="swiper-slide">싱가폴사립대</a>
							<a href="<?php echo G5_URL ?>/page/?pid=counsel_detail08" class="swiper-slide">싱가폴예술대</a>
							<a href="<?php echo G5_URL ?>/page/?pid=counsel_detail06" class="swiper-slide">말레이시아대학</a>
						</div>
                    </div>
                </div>
                <div class="swiper sampSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-color="white" onclick="location.href='<?php echo G5_URL ?>/page/?pid=why'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv01.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv01_mob.png" class="tablet">
						</div>
                        <div class="swiper-slide" data-color="black" onclick="location.href='<?php echo G5_URL ?>/page/?pid=why'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv02.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv02_mob.png" class="tablet">
						</div>
                        <div class="swiper-slide" data-color="black" onclick="location.href='<?php echo G5_URL ?>/page/?pid=why'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv03.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv03_mob.png" class="tablet">
						</div>
                        <div class="swiper-slide" data-color="white" onclick="location.href='<?php echo G5_URL ?>/page/?pid=why'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv04.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv04_mob.png" class="tablet">
						</div>
                        <div class="swiper-slide" data-color="white" onclick="location.href='<?php echo G5_URL ?>/page/?pid=why'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv05.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv05_mob.png" class="tablet">
						</div>
                        <div class="swiper-slide" data-color="white" onclick="location.href='<?php echo G5_URL ?>/page/?pid=why'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv06.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv06_mob.png" class="tablet">
						</div>
                    </div>
					<div class="sampSwiper_controls">
						<div class="swiper-button-prev prev_btn"></div>
						<div class="swiper-pagination pagination"></div>
						<div class="swiper-button-next next_btn"></div>
					</div>
                </div>
            </div>
			<div class="main_link swiper link_swiper" data-gappc="48" data-gapmob="16">
				<ul class="swiper-wrapper">
					<li class="swiper-slide">
						<a href=""><!--신규페이지작업-->
							<div class="swiper icon_swiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide item">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink01_1.png" alt="" class="icon">
									</div>
									<div class="swiper-slide item">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink01_2.png" alt="" class="icon">
									</div>
									<div class="swiper-slide item">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink01_3.png" alt="" class="icon">
									</div>
								</div>
							</div>
							<!-- <img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink01.png" alt="상담 가능 분야"> -->
							<span>상담 가능 분야</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="<?php echo G5_URL ?>/page/?pid=mentor">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink02.png" alt="상담사 소개">
							<span>상담사 소개</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="<?php echo G5_URL ?>/page/?pid=map">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink03.png" alt="상담장소">
							<span>상담장소</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink04.png" alt="최신 설명회">
							<span>최신 설명회</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="http://www.smfair.kr/" target="_blank">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink05.png" alt="유학박람회">
							<span>유학박람회</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="https://www.youtube.com/@%EB%AA%BD%EC%84%A0%EC%83%9D" target="_blank">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink06.png" alt="몽선생특강">
							<span>몽선생특강</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="https://youtu.be/eGZ-7EH42Zs" target="_blank">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink07.png" alt="TV 출연">
							<span>TV 출연</span>
						</a>
					</li>
					<li class="swiper-slide">
						<a href="<?php echo G5_URL ?>/page/?pid=why">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/mlink08.png" alt="몽선생 장점">
							<span>몽선생 장점</span>
						</a>
					</li>
				</ul>
				<div class="swiper-scrollbar scrollbar"></div>
			</div>
        </div>
    </div>

    <div class="msection presentation_area tabs main_sec1">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area" id="row-1">
				<div class="title">
					<span class="live_badge">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/ic_live.png" alt="" class="icon">
						<span class="txt">LIVE</span>
					</span>
					<span class="tit">이 달의 최신 <span class="color2">설명회</span></span>
				</div>
                <div class="tab">
                    <ul class="tab_tit">
                        <li><a href="#" class="show" id="tab-1">전체보기</a></li>
                        <li><a href="#" id="tab-2">국제학교</a></li>
                        <li><a href="#" id="tab-3">해외대학</a></li>
                        <li><a href="#" id="tab-4">기타</a></li>
                    </ul>
                </div>
            </div>
            <div class="presentation_list tabs_cont">
                <ul class="panel">
                    <li id="content-1" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
									<p class="title">
										<span class="sub">싱가포르 사립대</span>
										<span class="tit">온라인 입시 설명회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst01.jpg" alt="싱가포르 사립대 온라인 입시 설명회">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">싱가포르</span>
										<span class="place online">온라인</span>
									</div>
                                    <span class="title">싱가포르 사립대 온라인 입시 설명회 07/26</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">온라인</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2025년 07월 26일 토요일 12:00</p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">30명</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=9">자세히 보기</a>
                                    <a class="btn confirm" href="<?php echo G5_URL ?>/page/?pid=counsel03">설명회 신청</a>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
									<p class="title">
										<span class="sub">말라야 사립대</span>
										<span class="tit">대면 입시 설명회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst02.jpg" alt="말라야 사립대 대면 입시 설명회">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">말레이시아</span>
										<span class="place offline">오프라인</span>
									</div>
                                    <span class="title">말라야 사립대 대면 입시 설명회</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">서울 강남</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2025년 07월 26일 토요일 12:00</p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">30명</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=9">자세히 보기</a>
                                    <a class="btn confirm" href="<?php echo G5_URL ?>/page/?pid=counsel03">설명회 신청</a>
                                </div>
                            </li>
                            <li class="swiper-slide end">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
									<p class="title">
										<span class="sub">싱가포르 사립대&예술대</span>
										<span class="tit">온라인 입시 설명회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst03.jpg" alt="싱가포르 사립대&예술대 온라인 입시 설명회">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">싱가포르</span>
										<span class="place online">온라인</span>
									</div>
                                    <span class="title">싱가폴 사립대&예술대 온라인 입시 설명회</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">서울 강남</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2025년 07월 26일 토요일 12:00</p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">30명</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="#none">자세히 보기</a>
                                    <a class="btn confirm" href="#none">신청마감</a>
                                </div>
                            </li>
                            <li class="swiper-slide end">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
									<p class="title">
										<span class="sub">싱가포르 사립대&예술대</span>
										<span class="tit">온라인 입시 설명회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst03.jpg" alt="싱가포르 사립대&예술대 온라인 입시 설명회">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">싱가포르</span>
										<span class="place online">온라인</span>
									</div>
                                    <span class="title">싱가폴 사립대&예술대 온라인 입시 설명회</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">서울 강남</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2025년 07월 26일 토요일 12:00</p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">30명</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="#none">자세히 보기</a>
                                    <a class="btn confirm" href="#none">신청마감</a>
                                </div>
                            </li>
                        </ul>
                    </li>					
                    <li id="content-2" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                         <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
									<p class="title">
										<span class="sub">싱가포르 사립대</span>
										<span class="tit">온라인 입시 설명회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst01.jpg" alt="싱가포르 사립대 온라인 입시 설명회">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">싱가포르</span>
										<span class="place online">온라인</span>
									</div>
                                    <span class="title">싱가포르 사립대 온라인 입시 설명회 07/26</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">온라인</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2025년 07월 26일 토요일 12:00</p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">30명</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=9">자세히 보기</a>
                                    <a class="btn confirm" href="<?php echo G5_URL ?>/page/?pid=counsel03">설명회 신청</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="content-3" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                         <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
									<p class="title">
										<span class="sub">말라야 사립대</span>
										<span class="tit">대면 입시 설명회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst02.jpg" alt="말라야 사립대 대면 입시 설명회">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">말레이시아</span>
										<span class="place offline">오프라인</span>
									</div>
                                    <span class="title">말라야 사립대 대면 입시 설명회</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">서울 강남</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2025년 07월 26일 토요일 12:00</p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">30명</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=9">자세히 보기</a>
                                    <a class="btn confirm" href="<?php echo G5_URL ?>/page/?pid=counsel03">설명회 신청</a>
                                </div>
                            </li>
                        </ul>                        
                    </li>
                    <li id="content-4" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                         <ul class="swiper-wrapper">
                            <li class="swiper-slide end">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
									<p class="title">
										<span class="sub">싱가포르 사립대&예술대</span>
										<span class="tit">온라인 입시 설명회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst03.jpg" alt="싱가포르 사립대&예술대 온라인 입시 설명회">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">싱가포르</span>
										<span class="place online">온라인</span>
									</div>
                                    <span class="title">싱가폴 사립대&예술대 온라인 입시 설명회</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">서울 강남</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2025년 07월 26일 토요일 12:00</p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">30명</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="#none">자세히 보기</a>
                                    <a class="btn confirm" href="#none">신청마감</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection counsel_area tabs hover_effect main_sec2">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area" id="row-2">
				<div class="title">
					<span class="tit">만족도100% <span class="color2">입학상담</span></span>
				</div>
                <div class="tab">
                    <ul class="tab_tit">
                        <li><a href="#" class="show" id="tab-21">전체보기</a></li>
                        <li><a href="#" id="tab-22">국제학교</a></li>
                        <li><a href="#" id="tab-23">해외대학</a></li>
                    </ul>
                </div>
            </div>
            <div class="counsel_list tabs_cont">
                <ul class="panel">
                    <li id="content-21" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                        <ul class="swiper-wrapper">
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail07'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">싱가포르</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel06.jpg" alt="싱가포르 대학 상담" class="img">
									<div class="shape color6"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher6.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="tit">싱가폴 사립대 상담</span>
                                        <p>SIM, PSB, KAPLAN, JCU 등</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail01'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">말레이시아</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel01.jpg" alt="말레이시아 국제학교">
									<div class="shape color1"></div>
									<div class="img_bottom">
										<div class="flagbox">
                                    		<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher1.png" alt="">
                                	</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">말레이시아 국제학교</span>
                                        <p>쿠알라룸푸르 전 지역 / 50여개</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail08'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">싱가포르</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel03.jpg" alt="홍콩 대학 상담">
									<div class="shape color3"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher3.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">싱가포르 예술대 상담</span>
                                        <p>LASALLE / NAFA</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail09'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">싱가포르/홍콩</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel08.jpg" alt="송도 글로벌 캠퍼스">
									<div class="shape color8"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag pc" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="홍콩">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher8.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">싱가포르/홍콩 국립대 상담</span>
                                        <p>NUS, NTU, SMU, HKUS, HKUST 등</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail05'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">입학시험대비</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel05.jpg" alt="입학시험 모의테스트 상담">
									<div class="shape color5"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher5.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">주요 국제학교 입학시험 상담</span>
                                        <p>주요 국제학교 80개 대상</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="content-22" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                        <ul class="swiper-wrapper">
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail01'" class="swiper-slide">								
                                <div class="img_area">
                                    <p class="nation">말레이시아</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel01.jpg" alt="말레이시아 국제학교" class="img">
									<div class="shape color1"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher1.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">말레이시아 국제학교</span>
                                        <p>쿠알라룸푸르 전 지역 / 50여개</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail02'" class="swiper-slide">						
                                <div class="img_area">
                                    <p class="nation">한국</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel02.jpg" alt="한국 인가/비인가" class="img">
									<div class="shape color2"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="한국">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher2.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">한국 인가/비인가</span>
                                        <p>송도/제주 외 전 지역 비인가 학교</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail03'" class="swiper-slide">					
                                <div class="img_area">
                                    <p class="nation">싱가포르</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel03.jpg" alt="싱가포르 국제학교" class="img">
									<div class="shape color3"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher3.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">싱가포르 국제학교</span>
                                        <p>주요 국제학교 20여개</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail05'" class="swiper-slide">			
                                <div class="img_area">
                                    <p class="nation">말레이시아/싱가포르</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel05.jpg" alt="입학시험 모의테스트 상담" class="img">
									<div class="shape color5"></div>
									<div class="img_bottom">
										<div class="flagbox">
                                    		<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
                                    		<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher5.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">주요 국제학교 입학시험 상담</span>
                                        <p>주요 국제학교 80개 대상</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail11'" class="swiper-slide">	
                                <div class="img_area">
                                    <p class="nation">베트남/태국</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel04.jpg" alt="베트남/태국 국제학교" class="img">
									<div class="shape color4"></div>
									<div class="img_bottom">
										<div class="flagbox">
                                    		<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_biet.svg" alt="베트남">
                                    		<img class="flag pc" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_thai.svg" alt="태국" class="">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher4.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">베트남/태국 국제학교</span>
                                        <p>주요 국제학교 10여개</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="content-23" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                        <ul class="swiper-wrapper">
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail07'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">싱가포르</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel06.jpg" alt="싱가포르 대학 상담" class="img">
									<div class="shape color6"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher6.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="tit">싱가폴 사립대 상담</span>
                                        <p>SIM, PSB, KAPLAN, JCU 등</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail08'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">싱가포르</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel03.jpg" alt="홍콩 대학 상담">
									<div class="shape color3"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher3.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">싱가포르 예술대 상담</span>
                                        <p>LASALLE / NAFA</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail09'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">싱가포르/홍콩</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel08.jpg" alt="송도 글로벌 캠퍼스">
									<div class="shape color8"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag pc" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="홍콩">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher8.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">싱가포르/홍콩 국립대 상담</span>
                                        <p>NUS, NTU, SMU, HKUS, HKUST 등</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail06'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">말레이시아</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel09.jpg" alt="싱가포르 대학 상담">
									<div class="shape color9"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="홍콩">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher9.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">말레이시아 대학 종합상담</span>
                                        <p>사립대 교직원 10년 경력자</p>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=counsel_detail10'" class="swiper-slide">
                                <div class="img_area">
                                    <p class="nation">한국</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counsel10.jpg" alt="싱가포르 대학 상담">
									<div class="shape color10"></div>
									<div class="img_bottom">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="홍콩">
										</div>
										<img class="teacher" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_teacher10.png" alt="">
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">송도,서강 글로벌캠퍼스</span>
                                        <p>한국에서 미국대학 편입과정</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection review_area main_sec3">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area green youtube" id="row-2">				
				<div class="title">
					<span class="tit">몽선생 <span class="color1">수속후기</span></span>
				</div>
                <p class="desc">
                    나도 할 수 있을까 고민이 된다면 </br>
                    <span class="bold">수강생들의 성공 경험</span>을 들어보세요!
                </p>
            </div>
            <div class="review_list swiper tab_swiper" data-gappc="12" data-gapmob="8">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=8rPfGBfnd7Y" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_review01.png" alt="NUS 합격">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <p>몽선생 컨설팅 통해서 합격했어요!</p>
                                <span class="title">싱가포르 국립대 합격생</span>
                            </div>
                            <div class="etc">
                                <span class="point">
                                    <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_star.svg" alt="star">
                                    <b>5.0</b>
                                </span>
                                <span class="more">
                                    <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go.svg" alt="go">
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=eAGc-3y5N2w" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_review02.png" alt="NUS 합격">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <p>몽선생 컨설팅 통해서 합격했어요!</p>
                                <span class="title">싱가포르 국립대 합격생</span>
                            </div>
                            <div class="etc">
                                <span class="point">
                                    <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_star.svg" alt="star">
                                    <b>5.0</b>
                                </span>
                                <span class="more">
                                    <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go.svg" alt="go">
                                </span>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=3bFjjIRr5wI" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_review03.png" alt="NUS 합격">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <p>몽선생 컨설팅 통해서 합격했어요!</p>
                                <span class="title">싱가포르 국립대 합격생</span>
                            </div>
                            <div class="etc">
                                <span class="point">
                                    <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_star.svg" alt="star">
                                    <b>5.0</b>
                                </span>
                                <span class="more">
                                    <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go.svg" alt="go">
                                </span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="msection counsel_area tabs hover_effect main_sec4">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area green" id="row-3">				
				<div class="title">
					<span class="tit">전문적인 <span class="color1">유학수속/컨설팅</span></span>
				</div>
                <div class="tab">
                    <ul class="tab_tit">
                        <li><a href="#" class="show" id="tab-31">전체보기</a></li>
                        <li><a href="#" id="tab-32">국제학교</a></li>
                        <li><a href="#" id="tab-33">해외대학</a></li>
                    </ul>
                </div>
            </div>
            <div class="counsel_list ver2 tabs_cont">
                <ul class="panel">
                    <li id="content-31" class="swiper tab_swiper" data-gappc="12" data-gapmob="10">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail03'">
                                <div class="img_area">
                                    <p class="nation">수수료 0원</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure01.jpg" alt="ZERO 무료 수속">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color1">유학원 수수료 ZERO</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">국제학교 무료수속</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국제학교</p>
                                        <span class="title">비용 0원! ZERO 무료 수속</span>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail21'">
                                 <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln01.jpg" alt="무료 수속서비스">
									<div class="img_txtbox">
										<p class="sub">교직원 출신 관리</p>
										<p class="tit">
											<span class="color color1">싱가포르 사립대</span><br>
											무료 입학수속
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>싱가포르 사립대</p>
                                        <span class="title">무료 수속서비스</span>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail22'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln02.jpg" alt="수속서비스 안내">
									<div class="img_txtbox">
										<p class="sub">국내 유일! 대표사무소</p>
										<p class="tit">
											<span class="color color2">싱가포르 예술대</span><br>
											입학 컨설팅
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>싱가포르 예술대</p>
                                        <span class="title">무료수속&입학컨설팅</span>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail25'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln05.jpg" alt="무료 입학 수속 서비스">
									<div class="img_txtbox">
										<p class="sub">교직원 출신 관리</p>
										<p class="tit">
											<span class="color color5">말레이시아 사립대</span><br>
											무료 입학수속
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 사립대</p>
                                        <span class="title">무료 수속서비스</span>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail05'">
								<div class="img_area">
                                    <p class="nation">현지 서비스</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure02.jpg" alt="현지 학교/거주지 답사">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color2">현지 지사장 동행</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">답사 프로그램</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국제학교</p>
                                        <span class="title">현지 학교/거주지 답사</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="content-32" class="swiper tab_swiper" data-gappc="12" data-gapmob="10">
                        <ul class="swiper-wrapper">
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail03'">
								<div class="img_area">
                                    <p class="nation">수수료 0원</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure01.jpg" alt="ZERO 무료 수속">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color1">유학원 수수료 ZERO</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">국제학교 무료수속</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국제학교</p>
                                        <span class="title">비용 0원! ZERO 무료 수속</span>
                                    </a>
                                </div>
							</li>
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail02'">
								<div class="img_area">
                                    <p class="nation">수속 서비스</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure03.jpg" alt="입학 수속 서비스">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color3">입학수속 서비스</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">명문국제학교</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>1티어 명문 국제학교</p>
                                        <span class="title">입학 수속 서비스</span>
                                    </a>
                                </div>
							</li>
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail05'">
								<div class="img_area">
                                    <p class="nation">현지 서비스</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure02.jpg" alt="현지 학교/거주지 답사">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color2">현지 지사장 동행</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">답사 프로그램</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국제학교</p>
                                        <span class="title">현지 학교/거주지 답사</span>
                                    </a>
                                </div>
							</li>
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail01'">
								<div class="img_area">
                                    <p class="nation">현지 서비스</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure04.jpg" alt="초기정착 서비스">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color2">1달 관리</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">초기정착 서비스</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국제학교</p>
                                        <span class="title">초기정착 서비스</span>
                                    </a>
                                </div>
							</li>
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail04'">
								<div class="img_area">
                                    <p class="nation">입학시험 대비</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure05.jpg" alt="국제학교 입학시험 대비반">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color4">국제학교</span>
										</div>
										<p class="title">입학시험 대비반</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>입학시험 커리큘럼</p>
                                        <span class="title">국제학교 입학시험 대비반</span>
                                    </a>
                                </div>
							</li>
						</ul>
                    </li>
                    <li id="content-33" class="swiper tab_swiper" data-gappc="12" data-gapmob="10">
                        <ul class="swiper-wrapper">
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail21'">
								<div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln01.jpg" alt="무료 수속서비스">
									<div class="img_txtbox">
										<p class="sub">교직원 출신 관리</p>
										<p class="tit">
											<span class="color color1">싱가포르 사립대</span><br>
											무료 입학수속
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>싱가포르 사립대</p>
                                        <span class="title">무료 수속서비스</span>
                                    </a>
                                </div>
							</li>
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail22'">
								 <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln02.jpg" alt="수속서비스 안내">
									<div class="img_txtbox">
										<p class="sub">국내 유일! 대표사무소</p>
										<p class="tit">
											<span class="color color2">싱가포르 예술대</span><br>
											입학 컨설팅
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>싱가포르 예술대</p>
                                        <span class="title">무료수속&입학컨설팅</span>
                                    </a>
                                </div>
							</li>
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail23'">
								<div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln03.jpg" alt="NUS 출신 관리! 입학 컨설팅">
									<div class="img_txtbox">
										<p class="sub">NUS 출신 관리!</p>
										<p class="tit">
											<span class="color color3">싱가포르 국립대</span><br>
											입학 컨설팅
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>싱가포르 국립대</p>
                                        <span class="title">입학 컨설팅</span>
                                    </a>
                                </div>
							</li>
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail26'">
								<div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln06.jpg" alt="무료 입학 수속 서비스">
									<div class="img_txtbox">
										<p class="sub">말레이시아의 서울대</p>
										<p class="tit">
											<span class="color color6">말레이시아 국립대</span><br>
											입학 컨설팅
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국립대</p>
                                        <span class="title">입학 컨설팅</span>
                                    </a>
                                </div>
							</li>
							<li class="swiper-slide" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail27'">
								<div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln07.jpg" alt="모나쉬대학 입학 수속 서비스">
									<div class="img_txtbox">
										<p class="tit">
											<span class="color color7">호주 모나쉬<br>말레이시아 캠퍼스</span><br>
											입학수속
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>호주 모나쉬대학</p>
                                        <span class="title">무료수속&비자수속</span>
                                    </a>
                                </div>
							</li>
						</ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="msection class_area tabs main main_sec5">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area red" id="row-4">
				<div class="title">
					<span class="tit">검증된 <span class="color1">유학 CLASS</span></span>
				</div>
            </div>
            <div class="class_list s4 big swiper tab_swiper" data-gappc="12" data-gapmob="10">
                <ul class="panel swiper-wrapper">
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail04'" class="swiper-slide">
						<div class="text_area">
							<p class="proc"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수속하기"> 유학CLASS</p>
							<span class="title">
								국제학교 입학시험<br/>
								테스트 대비반
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class01.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class01_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail01'" class="swiper-slide">
						<div class="text_area">
							<p class="proc"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수속하기"> 유학CLASS</p>
							<span class="title">
								2개월 완성!<br/>
								듀오링고 실전반
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class02.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class02_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail08'" class="swiper-slide">
						<div class="text_area">
							<p class="proc"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수속하기"> 유학CLASS</p>
							<span class="title">
								원어민 1:1과외 <br>
								실전 스피킹+기초문법
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class03.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class03_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail07'" class="swiper-slide">
						<div class="text_area">
							<p class="proc"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수속하기"> 유학CLASS</p>
							<span class="title">
								해외대학 미리준비<br/>
								전공이론&에세이반
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class04.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class04_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail03'"class="swiper-slide">
						<div class="text_area">
							<p class="class"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수업듣기"> 유학CLASS</p>
							<span class="title">
								합격률 95%! <br>
								예술대 포트폴리오반
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class05.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class05_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection board_area main_sec6">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area">
				<div class="title">
					<span class="tit">찐 경험자들이 함께하는 몽선생</span>
				</div>
				<p class="desc">국제학교, 해외대학 둘 다 잘하는 곳을 선택하세요.</p>
            </div>
            <div class="board_cont">
                <ul>
                    <li class="half">
                        <a class="item">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_award.jpg" alt="합격자 명단" class="pc">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_award_mob.jpg" alt="합격자 명단" class="tablet">
                        </a>
                        <a href="<?php echo G5_URL ?>/page/?pid=why" class="item">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_why.jpg" alt="Why 몽선생" class="pc">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_why_mob.jpg" alt="Why 몽선생" class="tablet">
                        </a>
                    </li>
                    <li class="notice">
                        <div class="b_title">
                            <span>공지사항</span>
                            <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" class="more"><img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_more.svg" alt="더보기"></a>
                        </div>
                        <ul class="brd_list">
                            <li>
                                <a href="" target="_blank">
                                    <span class="tit">
                                        <b>1</b>
                                        [공지] 24년 2월3일(토), 싱가포르 대학원/석사 입학설명회 (SMU, NUS참가)
                                    </span>
                                    <p class="date">25.01.15</p>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <span class="tit">
                                        <b>2</b>
                                        [컨설팅] 미국대학 자소서/에세이 무료첨삭 서비스 안내
                                    </span>
                                    <p class="date">25.01.15</p>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <span class="tit">
                                        <b>3</b>
                                        [공지] 해외대학 자소서 첨삭 서비스 OPEN (미국, 싱가폴, 홍콩, 영국)
                                    </span>
                                    <p class="date">25.01.15</p>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <span class="tit">
                                        <b>4</b>
                                        [강좌안내] 3개월만에 끝내는 해외대학 전공 대비반 (전공별 미리 학가능)
                                    </span>
                                    <p class="date">25.01.15</p>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <span class="tit">
                                        <b>5</b>
                                        [컨설팅] 미국과 아시아대학 동시 접수! 국내 유일 해외대학 입학컨설팅
                                    </span>
                                    <p class="date">25.01.15</p>
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <span class="tit">
                                        <b>6</b>
                                        [컨설팅] 미국과 아시아대학 동시 접수! 국내 유일 해외대학 입학컨설팅
                                    </span>
                                    <p class="date">25.01.15</p>
                                </a>
                            </li>
                        </ul>
                        <!-- <div class="bg"></div> -->
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection review_area ytb_ver main_sec7">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area black youtube" id="row-2">				
				<div class="title">
					<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_youtube.svg" alt="youtube" class="icon">
					<span class="tit">몽선생 유튜브</span>
				</div>
                <p class="desc">
                    솔직한 유학 정보가 필요하다면? </br>
                    <span class="bold">몽선생의 유튜브</span>에서 확인하세요!
                </p>
                <a href="https://www.youtube.com/channel/UCbxH8_UgfZNjiyVJsWHaFDg" target="_blank" class="link">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_go.svg" alt="go"> 
					<span class="txt">몽선생 유튜브 바로가기</span>
				</a>
            </div>
            <div class="review_list youtube swiper tab_swiper" data-gappc="12" data-gapmob="8">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <a href="#">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube01.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">[인터뷰] 미국, 영국 대신 싱가폴 유학을 선택한 이유? (미술.. 디자인 전공 분야)</span>
                                <p>조회수 1만회 · 7개월 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="#">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube02.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">[사연] 동국대 포기하고 유학 간다고!? 20대 대학생의 진로 고민.. 해결 방법을 알려줄게요</span>
                                <p>조회수 821회 · 2주 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="#">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube03.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">초등 (1-3) 저학년 때 가기좋은 말레이시아 국제학교 3곳 - ISP, 킹헨리, 세인트조셉</span>
                                <p>조회수 1.1천회 · 4주 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="#">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube04.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">1천만원 대..학비가 저렴한 말레이시아 국제학교 3곳 - 헬프, 텐비, 테일러스 (커리큘럼, 학비, 거주지역</span>
                                <p>조회수 1.9천회 · 1개월 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="#">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube05.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">대학 유학비용 한 방에 해결! 6개국 전격 비교 (미국vs캐나다vs영국.. 그리고 호주, 싱가폴, 말레이시아)</span>
                                <p>조회수 1천회 · 7일 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="#">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube06.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">[인터뷰] 미국, 영국 대신 싱가폴 유학을 선택한 이유? (미술.. 디자인 전공 분야)</span>
                                <p>조회수 1천회 · 7일 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="#">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube07.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">[사연] 고1..자퇴 후 유학이요!? 한 순간에 나락... 절대 가지마세요!</span>
                                <p>조회수 1천회 · 7일 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide"i>
                        <a href="#">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube08.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">제주 vs 말레이시아 국제학교의 학비와 비용 차이 알아보기 (NLCS, SJA, KIS, GIS, ISKL, IGB 등..</span>
                                <p>조회수 1천회 · 7일 전</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
		<div class="container" data-aos="fade-up">
			<div class="ytb_banner">
				<div class="bgbox">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_ytb_banner.jpg" alt="" class="img pc">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_ytb_banner_m.jpg" alt="" class="img tablet">
				</div>
				<div class="txtbox">
					<p class="tit">언론도 주목하는 몽선생</p>
					<a href="" class="more_btn" target="_blank">
						<span class="txt">TV 출연 방송 바로보기</span>
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/banner_btn_arrow.svg" alt="" class="icon">
					</a>
				</div>
			</div>
		</div>
    </div>

    <div class="msection award_area main_sec8">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area green center" id="row-2">
                <p class="desc">수 많은 합격생과 후기들이</p>
				<div class="title">
                	<p class="tit"><span class="color1">몽선생</span>을 증명합니다</p>
				</div>
            </div>		
          	<div class="award_wrap marquee" data-duration="3">
				<div class="award_group marquee_group">
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review01.png" alt="" class="img">
                            <p class="type">합격레터</p>
                        </div>
                        <div class="text_area">
                            <p class="tit">
								싱가포르 예술대 <br>
								최다 합격생배출
							</p>
                            <p class="sub">합격률 97%</p>
                            <p class="country">싱가포르</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review02.png" alt="" class="img">
                        </div>
                        <div class="text_area">
                            <p class="tit">
								전세계 20위! <br>
								UC 버클리대학 관리
							</p>
                            <p class="sub">현지 출신자 직접 컨설팅</p>
                            <p class="country">미국</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review03.png" alt="" class="img">
                            <p class="type">합격레터</p>
                        </div>
                        <div class="text_area">
                            <p class="tit">
								전세계 13위! <br>
								난양공과대학교 NUS 합격
							</p>
                            <p class="sub">컨설팅 관리</p>
                            <p class="country">싱가포르</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review04.png" alt="" class="img">
                        </div>
                        <div class="text_area">
                            <p class="tit">
								전세계 26위! <br>
								HKU 홍콩대학교 합격 
							</p>
                            <p class="sub">컨설팅 관리</p>
                            <p class="country">홍콩</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review05.png" alt="" class="img">
                            <span class="type">합격레터</span>
                        </div>
                        <div class="text_area">
                            <p class="tit">
								전세계 13위! <br>
								난양공과대학교 NUS 합격
							</p>
                            <p class="sub">컨설팅 관리</p>
                            <p class="country">싱가포르</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review06.png" alt="" class="img">
                        </div>
                        <div class="text_area">
                            <p class="tit">
								전세계 13위! <br>
								난양공과대학교 NUS 합격
							</p>
                            <p class="sub">컨설팅 관리</p>
                            <p class="country">싱가포르</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review07.png" alt="" class="img">
                            <span class="type">합격레터</span>
                        </div>
                        <div class="text_area">
                            <p class="tit">
								UM 말라야 <br>
								국립대학교 합격
							</p>
                            <p class="sub">컨설팅 관리</p>
                            <p class="country">말레이시아</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review08.png" alt="" class="img">
                        </div>
                        <div class="text_area">
                            <p class="tit">
								미국대학 순위 23위! <br>
								입학 컨설팅 관리
							</p>
                            <p class="sub">현지 유학 출신자 상담</p>
                            <p class="country">미국</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review09.png" alt="" class="img">
                            <span class="type">합격레터</span>
                        </div>
                        <div class="text_area">
                            <p class="tit">
								UM 말라야 <br>
								국립대학교 합격
							</p>
                            <p class="sub">컨설팅 관리</p>
                            <p class="country">말레이시아</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review10.png" alt="" class="img">
                        </div>
                        <div class="text_area">
                            <p class="tit">
								난양공과대학교 <br>
								전세계 26위
							</p>
                            <p class="sub">컨설팅 관리</p>
                            <p class="country">싱가포르</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review11.png" alt="" class="img">
                            <span class="type">합격레터</span>
                        </div>
                        <div class="text_area">
                            <p class="tit">
								UM 말라야 <br>
								국립대학교 합격
							</p>
                            <p class="sub" class="sub">컨설팅 관리</p>
                            <p class="country">말레이시아</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/main/img_review12.png" alt="" class="i,g">
                        </div>
                        <div class="text_area">
                            <p class="tit">
								HKUST 과기대학교 <br>
								전세계 60위
							</p>
                            <p class="sub">컨설팅 관리</p>
                            <p class="country">홍콩</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>