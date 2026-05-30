<?php
/**
 * theme file : /theme/THEME_NAME/index.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<style>
	.header .top_banner {display: flex;}
</style>


<div id="banner_modal" class="cm_modal banner_modal">	
	<div class="cm_modal_inner">
		<div class="top_btns">
			<button href="" class="today_btn pc">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/today_btn_x.png" alt="" class="icon">	
				<span class="txt">오늘 그만보기</span>
			</button>
			<button type="button" class="cm_modal_close"></button>
		</div>
		<div class="cm_modal_box">
			<div class="swiper banner_swiper">
				<div class="swiper-wrapper">
					<!-- <div class="swiper-slide item item1">
						<div class="bgbox">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner1_bg.jpg" alt="" class="bg pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner1_bg_mob.jpg" alt="" class="bg tablet">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner1_img.png" alt="" class="img">
						</div>
						<div class="txtbox">
							<div class="topbox">
								<span class="badge">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/ic_live.png" alt="" class="icon">
									<span class="txt">온라인</span>
								</span>
							</div>
							<div class="bottombox">
								<p class="sub">5월28일(목)</p>
								<p class="tit">
									말레이시아 국제학교 설명회 <br>
									16년 경력자 참여
								</p>
								<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=31" class="btn typeB">설명회 바로가기</a>
							</div>
						</div>
					</div> -->
					<div class="swiper-slide item item5">
						<div class="bgbox">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner5_bg.jpg" alt="" class="bg pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner5_bg_mob.jpg" alt="" class="bg tablet">
						</div>
						<div class="txtbox">
							<div class="topbox">
								<span class="badge">온라인 설명회</span>
							</div>
							<div class="bottombox">
								<p class="sub">6월27일(토) 11:00</p>
								<p class="tit">
									<span class="color">싱가포르 | 말레이시아</span>
									<br>
									명문 사립대 입학설명회
								</p>
								<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=36" class="btn typeF">설명회 바로가기</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide item item2">
						<div class="bgbox">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner2_bg.jpg" alt="" class="bg pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner2_bg_mob.jpg" alt="" class="bg tablet">
						</div>
						<div class="txtbox">
							<div class="topbox">
								<span class="badge">온라인 설명회</span>
							</div>
							<div class="bottombox">
								<p class="sub">6월27일(토) 13:00</p>
								<p class="tit">
									아시아 TOP 예술대 <br>
									LASALLE 입학설명회
								</p>
								<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=35" class="btn typeB">설명회 바로가기</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide item item4">
						<div class="bgbox">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner4_bg.jpg" alt="" class="bg pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner4_bg_mob.jpg" alt="" class="bg tablet">
						</div>
						<div class="txtbox">
							<div class="topbox">
								<span class="badge">온라인 설명회</span>
							</div>
							<div class="bottombox">
								<p class="sub">6월27일(토) 17:30</p>
								<p class="tit">
									<span class="color">2027학년도 대비</span>
									<br>
									싱가포르 | 홍콩 국립대 설명회
								</p>
								<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=34" class="btn typeE">설명회 바로가기</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide item item3">
						<div class="bgbox">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner3_bg.jpg" alt="" class="bg pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner3_bg_mob.jpg" alt="" class="bg tablet">
						</div>
						<div class="txtbox">
							<div class="topbox"></div>
							<div class="bottombox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/main_banner3_talk.png" alt="" class="talk_img">
								<p class="tit">
									몽선생의 클래스 매칭
								</p>
								<p class="desc">
									검증된 선생님과 <span class="color">완벽한 유학</span>을 준비하고 싶다면?
								</p>
								<a href="<?php echo G5_URL ?>/page/?pid=class_intro" class="btn typeC">클래스 바로가기</a>
							</div>
						</div>
					</div>
				</div>
				<div class="banner_controls">
					<div class="swiper-button-prev prev_btn"></div>
					<div class="swiper-pagination pagination"></div>
					<div class="swiper-button-next next_btn"></div>
				</div>
			</div>
			<div class="cs_modal_btnbox tablet">
				<button type="button" class="today_btn">오늘 그만보기</button>
				<div class="swiper-pagination pagination"></div>
				<button type="button" class="cm_modal_close">닫기</button>
			</div>
		</div>
	</div>
</div>

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
                        <div class="swiper-slide" data-color="black" onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_intro'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv02.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv02_mob.png" class="tablet">
						</div>
                        <div class="swiper-slide" data-color="black" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_intro'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv03.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv03_mob.png" class="tablet">
						</div>
                        <div class="swiper-slide" data-color="white" onclick="location.href='<?php echo G5_URL ?>/page/?pid=special_duolingo'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv04.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv04_mob.png" class="tablet">
						</div>
                        <div class="swiper-slide" data-color="white" onclick="location.href='<?php echo G5_URL ?>/page/?pid=special_singapore'">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv05.png" class="pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/main/img_mv05_mob.png" class="tablet">
						</div>
                        <div class="swiper-slide" data-color="white" onclick="location.href='<?php echo G5_URL ?>/page/?pid=special_malay'">
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
						<a onclick="nocontent_modal()"><!--신규페이지작업-->
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
			<!--
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
										<span class="sub">싱가포르 라셀 예술대</span>
										<span class="tit">대면 입시 설명회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst03.jpg" alt="싱가포르 라셀 예술대 입학설명회">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">싱가포르</span>
										<span class="place offline">오프라인</span>
									</div>
                                    <span class="title">싱가포르 라셀 예술대 <br>대면 입시 설명회</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">서울 강남역 '공간더하기'</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2026년 05월 16일 토요일 11:00</p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">20명</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=12">자세히 보기</a>
                                    <a class="btn confirm" href="<?php echo G5_URL ?>/page/?pid=counsel03">설명회 신청</a>
                                </div>
                            </li>
                            <li class="swiper-slide">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
									<p class="title">
										<span class="sub">말레이시아 국제학교</span>
										<span class="tit">1:1 개별 대면 상담회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst02.jpg" alt="말레이시아 국제학교 1:1 개별 상담회 영어진단평가 체험">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">말레이시아</span>
										<span class="place offline">오프라인</span>
									</div>
                                    <span class="title">말레이시아 국제학교 1:1 개별 상담회 영어진단평가 체험</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">몽선생 강남지점</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2026년 4월 10일(금), 11일(토), 12일(일) </p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">20팀</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=11">자세히 보기</a>
                                    <a class="btn confirm" href="<?php echo G5_URL ?>/page/?pid=counsel03">설명회 신청</a>
                                </div>
                            </li>
                            <li class="swiper-slide end">
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
                                    <a class="btn normal" href="#none">자세히 보기</a>
                                    <a class="btn confirm" href="#none" onclick="showToast('신청 마감된 설명회입니다', 'emoji2')">신청마감</a>
                                </div>
                            </li>
                            <li class="swiper-slide end">
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
                                    <a class="btn normal" href="#none">자세히 보기</a>
                                    <a class="btn confirm" href="#none" onclick="showToast('신청 마감된 설명회입니다', 'emoji2')">신청마감</a>
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
                                    <a class="btn confirm" href="#none" onclick="showToast('신청 마감된 설명회입니다', 'emoji2')">신청마감</a>
                                </div>
                            </li>
                        </ul>
                    </li>					
                    <li id="content-2" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                         <ul class="swiper-wrapper">
                             <li class="swiper-slide">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
									<p class="title">
										<span class="sub">말레이시아 국제학교</span>
										<span class="tit">1:1 개별 대면 상담회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst02.jpg" alt="말레이시아 국제학교 1:1 개별 상담회 영어진단평가 체험">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">말레이시아</span>
										<span class="place offline">오프라인</span>
									</div>
                                    <span class="title">말레이시아 국제학교 1:1 개별 상담회 영어진단평가 체험</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">몽선생 강남지점</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2026년 4월 10일(금), 11일(토), 12일(일) </p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">20팀</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=11">자세히 보기</a>
                                    <a class="btn confirm" href="<?php echo G5_URL ?>/page/?pid=counsel03">설명회 신청</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="content-3" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                         <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <div class="img_area">
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
									<p class="title">
										<span class="sub">싱가포르 라셀 예술대</span>
										<span class="tit">대면 입시 설명회</span>
									</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_pst03.jpg" alt="싱가포르 라셀 예술대 입학설명회">
                                </div>
                                <div class="text_area">
									<div class="badgebox">
										<span class="nation">싱가포르</span>
										<span class="place offline">오프라인</span>
									</div>
                                    <span class="title">싱가포르 라셀 예술대 <br>대면 입시 설명회</span>
                                    <ul>
                                        <li>
                                            <p class="tit">장소</p>
                                            <p class="txt">서울 강남역 '공간더하기'</p>
                                        </li>
                                        <li>
                                            <p class="tit">일시</p>
                                            <p class="txt">2026년 05월 16일 토요일 11:00</p>
                                        </li>
                                        <li>
                                            <p class="tit">정원</p>
                                            <p class="txt">20명</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn_area">
                                    <a class="btn normal" href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission&wr_id=12">자세히 보기</a>
                                    <a class="btn confirm" href="<?php echo G5_URL ?>/page/?pid=counsel03">설명회 신청</a>
                                </div>
                            </li>
                            <li class="swiper-slide end">
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
                                    <a class="btn normal" href="#none">자세히 보기</a>
                                    <a class="btn confirm" href="#none" onclick="showToast('신청 마감된 설명회입니다', 'emoji2')">신청마감</a>
                                </div>
                            </li>
                            <li class="swiper-slide end">
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
                                    <a class="btn normal" href="#none">자세히 보기</a>
                                    <a class="btn confirm" href="#none" onclick="showToast('신청 마감된 설명회입니다', 'emoji2')">신청마감</a>
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
                                    <a class="btn confirm" href="#none" onclick="showToast('신청 마감된 설명회입니다', 'emoji2')">신청마감</a>
                                </div>
                            </li>
                        </ul>                        
                    </li>
                    <li id="content-4" class="swiper tab_swiper" data-gappc="12" data-gapmob="8">
                         <ul class="swiper-wrapper">

                        </ul>
                    </li>
                </ul>
            </div>
			-->
			<?php echo eb_latest('1775642588'); ?>
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
                    <span class="pc">나도 할 수 있을까 고민이 된다면</span> 
                    <span class="bold">수강생들의 성공 경험</span>을 들어보세요!
                </p>
            </div>
            <div class="review_list swiper tab_swiper" data-gappc="12" data-gapmob="8">
                <ul class="swiper-wrapper">
                    <li class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=8rPfGBfnd7Y" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_review01.png" alt="NUS 합격">
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
                        <a href="https://youtu.be/eAGc-3y5N2w" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_review02.png" alt="NUS 합격">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <p>싱가포르 사립대 수속생</p>
                                <span class="title">유학원 선택 잘했어요!</span>
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
                        <a href="https://www.youtube.com/watch?v=NSKT2IAkMsY" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_review03.png" alt="NUS 합격">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <p>포트폴리오를 다 도와주셨어요!</p>
                                <span class="title">싱가포르 예술대 합격생</span>
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
                        <a href="https://youtu.be/cHvx5Et1bw8" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube01.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">싱가포르 라셀 예술대 50명 합격 데이터가 증명하는, 2026 입시 큰 변화 3가지!</span>
                                <p>조회수 613회 · 1개월 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=YZX8C3tgY7I" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube02.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">부모님들이 꼭 물어보는 싱가포르 대학 유학질문 7가지! (취업률, 대학수준, 비용 등)</span>
                                <p>조회수 1.8천회 · 2개월 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=IBHhYlqQeo4" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube03.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">[인터뷰] 전세계 37위 명문 대학을 말레이시아에서?! 호주 모나쉬 대학 입학한 유학생 이야기</span>
                                <p>조회수 4.4천회 · 10개월 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="https://youtu.be/LZKHbAkjnAY" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube04.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">부모님들이 꼭 물어보는 싱가포르 대학 유학질문 7가지! (취업률, 대학수준, 비용 등)</span>
                                <p>조회수 1.8천회 · 2개월 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="https://youtu.be/vggD8UDJstA" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube05.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">말레이시아 선웨이 국제학교, "유독 중학생에게 인기 좋은 이유" (교장 인터뷰/ 설명회 현장)</span>
                                <p>조회수  259회 · 2일 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="https://youtu.be/9RFvO-cGQw0" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube06.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">중학생이 유학가기 좋은 말레이시아 국제학교 3곳 (ELC, 가든, BSKL)</span>
                                <p>조회수 3.6천회 · 6개월 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide">
                        <a href="https://youtu.be/6_SkjZIBaj8?si=RKbVRfcl4C9wDYZD" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube07.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">[사연] 말레이시아 국제학교 3년차, 성적 하위권 학생의 현실적 진로 대안!</span>
                                <p>조회수 2.9천회 · 7개월 전</p>
                            </div>
                        </a>
                    </li>
                    <li class="swiper-slide"i>
                        <a href="https://youtu.be/Is3le9niLO0" target="_blank">
                            <div class="img_area">
                                <img class="img" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_youtube08.jpg" alt="">
                                <img class="play" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_play.svg" alt="play">
                            </div>
                            <div class="text_area">
                                <span class="title">말레이시아 국제학교 입학 순위, 100명의 부모님이 실제 선택한 곳은? (이 영상 하나로 끝)</span>
                                <p>조회수 2.9천회 · 2개월 전</p>
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
					<a href="https://youtu.be/eGZ-7EH42Zs" class="more_btn" target="_blank">
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
    
    <div class="msection faq_area tabs main_sec9">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area green" id="row-4">				
				<div class="title">
					<span class="tit">자주하는 질문 <span class="color1">BEST</span></span>
				</div>
                <div class="tab swiper tab_swiper" data-gappc="0" data-gapmob="12">
                    <ul class="tab_tit swiper-wrapper">
                        <li class="swiper-slide"><a href="#" class="show" id="tab-41">말레이시아 국제학교</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-42">싱가포르 대학</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-43">말레이시아 대학</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-44">유학 상담 · 수속</a></li>
                    </ul>
                </div>
            </div>
            <div class="tabs_cont">
                <ul class="panel faq-box">
                    <li id="content-41">
                        <ul class="faq_list">
							<li>
								<div class="question">
									말레이시아 국제학교 학비는 보통 얼마인가요?
								</div>
								<div class="answer">
									학교 등급에 따라 연간 1,000만 원~3,500만 원까지 다양합니다. 가성비 높은 학교부터 명문 보딩스쿨까지 예산에 맞춘 선택이 가능합니다.
								</div>
							</li>
							<li>
								<div class="question">
									쿠알라룸푸르와 조호바루 중 어느 지역의 국제학교가 더 유리할까요?
								</div>
								<div class="answer">
									인프라와 교육열은 쿠알라룸푸르가 높고, 쾌적한 주거 환경과 통학 편의성은 조호바루가 강점입니다. 가족의 생활 패턴에 따라 결정해야 합니다.
								</div>
							</li>
							<li>
								<div class="question">
									영국식과 미국식 교육 커리큘럼의 차이점은 무엇인가요?
								</div>
								<div class="answer">
									영국식(IGCSE/A-Level)은 학업적 깊이가 있고, 미국식(AP)은 창의성과 활동을 중시합니다. 자녀의 향후 대학 진학 국가를 고려하는 것이 좋습니다.
								</div>
							</li>
							<li>
								<div class="question">
									가디언(보호자) 비자 발급 절차와 부모님이 동반할 때 주의사항은 무엇인가요?
								</div>
								<div class="answer">
									학생 비자 1건당 부모 중 1명이 동반 비자를 받을 수 있습니다. 최근 심사가 까다로워졌으므로 전문 수속 대행을 통하는 것이 안전합니다.
								</div>
							</li>
							<li>
								<div class="question">
									말레이시아 국제학교 졸업 후 해외 명문대 진학 사례가 많은가요?
								</div>
								<div class="answer">
									말레이시아 국제학교 졸업생들은 뛰어난 영어 실력을 바탕으로 영국, 호주, 미국뿐 아니라 아시아권 명문대로 다수 진학하고 있습니다.
								</div>
							</li>
							<li>
								<div class="question">
									입학 시기는 언제인가요? (9월 학기 vs 1월 학기 준비 전략)
								</div>
								<div class="answer">
									보통 8~9월이 신학기이며, 1월에도 중도 입학이 가능합니다. 다만 인기 학교는 대기가 길 수 있으니 최소 6개월 전 준비를 권장합니다.
								</div>
							</li>
                		</ul>
                    </li>
                    <li id="content-42">
                        <ul class="faq_list">
							<li>
								<div class="question">
									싱가포르 대학은 한국 내신 몇 등급이면 지원 가능한가요?
								</div>
								<div class="answer">
									싱가포르 국립대인 NUS, NTU, SMU는 일반적으로 한국 내신 1~2등급 이상의 최상위권 성적이 필요합니다.
									또한 AP, SAT, IB 같은 추가 공인시험 점수가 요구되는 경우가 많습니다.
									반면 싱가포르 사립대 SIM, PSB, Kaplan, JCU 등은 고등학교 평균 내신 약 55~70점 이상이면 지원 가능한 경우가 많으며, 예술대학은 포트폴리오 중심 평가로 내신 반영 비율이 낮은 편입니다.
								</div>
							</li>
							<li>
								<div class="question">
									검정고시로 싱가포르 대학 지원이 가능한가요?
								</div>
								<div class="answer">
									네, 가능합니다. 싱가포르 국립대 NUS, NTU, SMU는 검정고시만으로 입학하기 매우 어렵지만, 사립대 SIM, PSB, Kaplan, JCU 및 예술대학은 검정고시 성적을 인정하는 경우가 많습니다.특히 검정고시 이후 파운데이션 과정이나 디플로마 과정을 통해 싱가포르 대학으로 진학하는 사례도 많습니다.
								</div>
							</li>
							<li>
								<div class="question">
									SIM·PSB·JCU 같은 싱가포르 사립대의 장점은 무엇인가요?
								</div>
								<div class="answer">
									싱가포르 사립대의 가장 큰 장점은 한국 학생도 비교적 현실적으로 해외 명문대 학위를 취득할 수 있다는 점입니다.
									SIM, PSB, JCU 등의 대학은 영국·호주 본교 학위를 운영하는 경우가 많으며, 일부 과정은 교환학생이나 해외 캠퍼스 이동도 가능합니다.
									또한 한국보다 졸업 기간이 짧은 경우가 많고, 영어 환경 속에서 해외 취업 경험까지 연결할 수 있다는 장점이 있습니다.
								</div>
							</li>
							<li>
								<div class="question">
									싱가포르 사립대 졸업 후 취업은 가능한가요?
								</div>
								<div class="answer">
									싱가포르 사립대 졸업 후 현지 및 해외 취업에 성공하는 사례는 꾸준히 있습니다. 싱가포르 사립대학 평균 취업률은 약 60% 이상으로 조사된 바 있으며(출처: SkillsFuture Singapore), 국제학생 비율이 높은 환경 특성상 글로벌 취업을 준비하는 학생들도 많습니다. 또한 싱가포르는 아시아 금융·IT·물류 허브 국가로 평가되며, 미국·영국 대비 상대적으로 취업 비자 제도가 유연한 편이라는 장점이 있습니다.
								</div>
							</li>
							<li>
								<div class="question">
									NUS·NTU는 어떤 학생들이 합격하나요?
								</div>
								<div class="answer">
									NUS, NTU, SMU 같은 싱가포르 국립대는 한국 특목고·자사고·국제학교 출신 학생들의 지원 비율이 높습니다.
									특히 IB, AP, A-Level 등의 국제 커리큘럼 성적이 매우 중요하게 평가됩니다.
									예를 들어 IB 기준으로는 평균 40점 이상 수준의 최상위권 성적이 합격권으로 평가되며, 전세계 상위권 학생들과 경쟁해야 하기 때문에 높은 학업 역량이 요구됩니다.
								</div>
							</li>
							<li>
								<div class="question">
									싱가포르 대학 학비와 생활비는 얼마나 드나요?
								</div>
								<div class="answer">
									싱가포르 사립대 SIM, PSB, Kaplan, JCU 등은 전체 졸업까지 학비 포함 약 6천만~8천만원 수준이 일반적입니다.
									국립대 NUS, NTU, SMU는 학비와 생활비를 포함하면 전체 유학 비용이 약 1억~1억5천만원 이상 들어갈 수 있습니다.
									예술대학 LASALLE은 전공에 따라 차이가 있지만 일반적으로 약 1억원 내외의 비용이 발생합니다.
								</div>
							</li>
							<li>
								<div class="question">
									싱가포르 대학 입학 시 영어 점수 기준은 어떻게 되나요?
								</div>
								<div class="answer">
									싱가포르 대학은 대부분 IELTS 또는 TOEFL 같은 영어 공인점수를 요구합니다. 사립대 SIM, PSB, Kaplan, JCU 등은 일반적으로 IELTS 5.5~6.0 수준을 요구하며, 조건부 입학이나 영어과정(EAP)을 제공하는 학교도 있습니다. 국립대 NUS, NTU, SMU는 훨씬 높은 영어 능력을 요구하며, IELTS 6.5~7.0 이상의 점수가 필요한 경우가 많습니다.
								</div>
							</li>
                		</ul>
                    </li>
                    <li id="content-43">
                        <ul class="faq_list">
							<li>
								<div class="question">
									말레이시아 대학 졸업장은 한국에서도 인정되나요?
								</div>
								<div class="answer">
									네, 말레이시아 대학 졸업장은 대부분 한국에서도 정식 학력으로 인정됩니다. 다만 한국 교육부 인정 여부와 전공별 인증 조건은 학교에 따라 차이가 있을 수 있습니다. 특히 모나쉬 말레이시아, 노팅엄 말레이시아 같은 해외분교 형태의 대학은 본교와 동일한 학위를 발급하기 때문에 국제적으로 인지도가 높은 편입니다.
								</div>
							</li>
							<li>
								<div class="question">
									말레이시아 대학 학비는 어느정도 들어가나요?
								</div>
								<div class="answer">
									말레이시아 대학은 졸업까지 학비가 약 5천만원 수준으로 한국 대학 등록금과 비슷하며, 실제 유학생활 (기숙사,용돈) 등도 저렴한 편이라 졸업까지 약 7천~9천만원이 총 유학비용으로 지출됩니다. 
								</div>
							</li>
							<li>
								<div class="question">
									말레이시아 대학 순위는 어느 정도인가요?
								</div>
								<div class="answer">
									말레이시아에는 세계대학순위(QS 기준)에 진입한 대학들이 많이 있습니다. 대표적으로 말라야대학교(UM)는 세계 100위권 수준으로 평가되며, UKM·USM·UPM 같은 국립대도 아시아권에서 경쟁력이 높은 편입니다. 사립대 기준으로는 Taylor’s University, Sunway University, UCSI 등이 국제학생들에게 인기가 많습니다.
								</div>
							</li>
							<li>
								<div class="question">
									말레이시아 대학은 영어로 수업하나요?
								</div>
								<div class="answer">
									대부분의 말레이시아 사립대학과 국제과정은 영어로 수업을 진행합니다. 특히 해외분교 대학이나 국제학생 비율이 높은 대학들은 영어 사용 환경이 매우 강한 편입니다. 다만 일부 국립대 전공이나 현지 과정은 말레이어 수업이 포함될 수 있기 때문에 전공별 확인이 필요합니다.
								</div>
							</li>
							<li>
								<div class="question">
									모나쉬·테일러스·선웨이의 차이는 무엇인가요?
								</div>
								<div class="answer">
									Monash Malaysia는 호주 모나쉬대학교의 말레이시아 캠퍼스로, 본교와 동일한 학위를 제공하는 해외분교 형태입니다. Taylor’s University는 호텔경영·비즈니스·디자인 분야가 강점인 말레이시아 대표 사립대이며, 국제학생 비율이 높은 편입니다. Sunway University는 영국 Lancaster University와 복수학위 프로그램으로 유명하며, 시설과 캠퍼스 환경이 우수하다는 평가를 받고 있습니다.
								</div>
							</li>
							<li>
								<div class="question">
									말레이시아 대학 편입은 쉬운 편인가요?
								</div>
								<div class="answer">
									말레이시아 대학은 미국·영국식 학점 시스템을 사용하는 경우가 많아 편입이 비교적 유연한 편입니다. 특히 디플로마 → 학사과정, 또는 타국 대학으로의 학점 인정 사례도 많은 편입니다. 다만 전공 연계성, GPA, 영어 성적에 따라 인정 범위는 달라질 수 있습니다.
								</div>
							</li>
							<li>
								<div class="question">
									한국 내신이 낮아도 말레이시아 대학 진학이 가능한가요?
								</div>
								<div class="answer">
									네, 가능합니다. 말레이시아 사립대학은 한국 내신 4~6등급 수준 학생들도 지원 가능한 경우가 많으며, 파운데이션 과정을 통해 대학 진학이 가능한 학교들도 많습니다. 특히 입시 경쟁보다는 영어 능력과 기본 학업 역량을 중심으로 평가하는 경우가 많아 한국 학생들에게 진입장벽이 비교적 낮은 편입니다.
								</div>
							</li>
							<li>
								<div class="question">
									말레이시아 대학 졸업 후 영국·호주 편입도 가능한가요?
								</div>
								<div class="answer">
									네, 가능합니다. 말레이시아 대학은 영국·호주 대학과 연계된 트위닝(Twinning) 프로그램이나 Credit Transfer 시스템을 운영하는 경우가 많습니다. 이를 통해 말레이시아에서 1~2년 공부 후 영국·호주 본교로 편입하거나, 최종 학위를 해외 본교에서 받는 방식도 가능합니다.
								</div>
							</li>
                		</ul>
                    </li>
                    <li id="content-44">
                        <ul class="faq_list">
							<li>
								<div class="question">
									유학 상담은 어디서 받을 수 있나요?
								</div>
								<div class="answer">
									몽선생 유학원은 서울 강남역 도보 1분 거리에 위치하고 있습니다. 사전 예약 후 방문하시면 싱가포르·말레이시아 유학 상담을 편하게 받을 수 있으며, 학생 성향과 예산에 맞춘 1:1 맞춤 상담이 진행됩니다.
								</div>
							</li>
							<li>
								<div class="question">
									몽선생 유학원은 어느 국가를 전문적으로 다루나요?
								</div>
								<div class="answer">
									몽선생 유학원은 싱가포르·말레이시아 대학 교직원 출신 전문가들이 직접 운영하는 유학원입니다. 
									특히 대표 원장은 싱가포르에서 약 12년간 국제교류부서 팀장으로 근무하며 실제 학교 행정과 국제학생 관리 경험을 보유하고 있습니다. 단순 유학 알선이 아닌, 현지 교육 시스템과 입학 프로세스를 실제 경험한 전문가 중심의 상담이 강점입니다. 
								</div>
							</li>
							<li>
								<div class="question">
									유학 상담 시간은 얼마나 진행되나요?
								</div>
								<div class="answer">
									평균적으로 약 60분 내외의 1:1 심층 유학 상담이 진행됩니다. 담당 실장과 학생의 성적, 영어 실력, 예산, 진로 방향 등을 종합적으로 분석하여 국가·학교·전공별 맞춤 상담을 제공합니다.
								</div>
							</li>
							<li>
								<div class="question">
									온라인 상담도 가능한가요?
								</div>
								<div class="answer">
									네, 가능합니다. 해외 거주자나 지방 거주자를 위해 ZOOM 기반 실시간 온라인 유학 상담도 운영하고 있습니다. 온라인 상담 역시 오프라인과 동일하게 1:1 맞춤 방식으로 진행됩니다.
								</div>
							</li>						
							<li>
								<div class="question">
									유학 전에 준비할 수 있는 수업이나 프로그램도 있나요?
								</div>
								<div class="answer">
									네, 준비 과정이 마련되어 있습니다. 몽선생 유학원은 국제학교 입학시험 대비, IELTS·SAT·AP 같은 영어 및 공인시험 준비, 해외대학 예습반 등 다양한 맞춤형 교육 프로그램을 운영하고 있습니다. 특히 국제학교부터 해외대학 진학까지 연결되는 장기 로드맵 형태의 준비가 가능하다는 점이 특징입니다.
								</div>
							</li>
							<li>
								<div class="question">
									무료 수속은 무엇인가요?
								</div>
								<div class="answer">
									무료 수속은 별도의 유학원 수속비 없이 학교 지원 및 입학 절차를 진행하는 방식입니다. 일부 싱가포르·말레이시아 대학 및 국제학교는 학교 공식 파트너 유학원을 통해 진행될 경우 수속비가 발생하지 않는 경우가 있습니다. 다만 학교별 정책과 지원 과정에 따라 포함 범위는 달라질 수 있습니다.
								</div>
							</li>
							<li>
								<div class="question">
									말레이시아 현지 정착 서비스는 어디까지 지원되나요?
								</div>
								<div class="answer">
									말레이시아 현지 정착 서비스는 공항 픽업, 숙소 계약, 은행 계좌 개설, 통신 개통, 학교 등교 준비 등 초기 생활 적응 과정 전반을 지원합니다. 또한 보호자 동반 정착, 생활 안내, 지역 정보 제공 등 말레이시아 현지 생활에 필요한 부분들도 함께 안내하고 있습니다.
								</div>
							</li>
							<li>
								<div class="question">
									말레이시아 현지 직원이나 법인 운영도 하고 있나요?
								</div>
								<div class="answer">
									네, 말레이시아 현지 직원 및 법인 운영이 이루어지고 있습니다. 몽선생 유학원은 2000년대 초반부터 쿠알라룸프 현지에서 활동해온 담당자가 상주하고 있으며, 말레이시아 현지 법인 사업자 등록도 운영 중입니다. 이를 통해 한국과 말레이시아 양국에서 안정적인 학생 관리 및 현지 지원 시스템을 제공하고 있습니다.
								</div>
							</li>
                		</ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</div>