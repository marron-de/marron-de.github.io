<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;
?>


<div class="sub-page page-counsel page-why">
	<div class="banner_area ver2 counsel long">
        <div class="container" data-aos="fade-up">
			<div class="banner">
				<a class="link">
					<div class="bgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/counsel_ban_bg.jpg" alt="" class="pc img">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/counsel_ban_bg_mob.jpg" alt="" class="tablet img">
					</div>
					<div class="txtbox">
						<p class="sub">
							해외 학교 교직원 출신의 차별점!
						</p>
						<p class="tit">
							20년 경력자의 <br class="tablet">
							<span class="color">전문 상담을 받아보세요</span>
						</p>
					</div>
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/counsel_ban_img.png" alt="" class="pc img">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/counsel_ban_img_mob.png" alt="" class="tablet img">
					</div>
				</a>
			</div>
        </div>
    </div>

	<div class="title_area_wrap">
		<div class="container stickybox" data-aos="fade" data-aos-anchor=".page-why">
			<div class="tab sticky swiper link_swiper" data-gappc="0" data-gapmob="0">
				<ul class="tab_tit swiper-wrapper">
					<li class="swiper-slide"><a href="#sec01" class="show">교직원 출신 상담/수속</a></li>
					<li class="swiper-slide"><a href="#sec03">CLASS 학습지원</a></li>
					<li class="swiper-slide"><a href="#sec04">최다 합격생 배출</a></li>
					<li class="swiper-slide"><a href="#sec05">현지 정착지원</a></li>
					<li class="swiper-slide"><a href="#sec06">TEAM 멘토링 시스템</a></li>
				</ul>
			</div>
		</div>
	</div>

    <div id="sec01" class="sec why_intro01">
        <div class="container" data-aos="fade-up">
            <div class="text_area">
                <p class="sub_txt1 ver3">
                    <b>교직원 출신 유학원은,</b><br/>
                    상담의 퀄리티부터 차이가 납니다.
                </p>
                <p class="sub_txt3">
                    몽선생은 일반 유학원과 다르게 해외대학 교직원 출신자들이 만든 유학원 입니다.
                    각 국가별 입학 사정의 경험으로, 누구보다 가장 전문적인 상담을 약속합니다.
                </p>
            </div>
            <div class="img_area">
                <img class="pc" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_why01.png" alt="몽선생의 상담 자격">
                <img class="tablet" src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_why01_m.png" alt="몽선생의 상담 자격">
            </div>
        </div>
    </div>

    <div id="sec02" class="sec msection counsel_area mentor why">
        <div class="container mentor_slidebox why_wrap" data-aos="fade-up">
            <div class="sub_titbox">
				<div class="leftbox">
					<span class="sub_txt1 ver3"><b class="color2">교직원 출신</b> 몽선생 멘토 소개</span>
					</div>
				<div class="controlsbox mentor_controls">
					<div class="swiper-button-prev prev_btn"></div>
					<div class="swiper-button-next next_btn"></div>
				</div>
            </div>
			<div class="slidebox">
				<div class="swiper mentor_swiper why_swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t1.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_world.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">대표원장 몽선생</p>
									<p class="desc">아시아 교육 전문가</p>
								</div>
								<div class="bottom">
									<p class="tag">해외대학 입시 전체</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t2.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">이지형 부원장</p>
									<p class="desc">칭화대 국제관계 석사</p>
								</div>
								<div class="bottom">
									<p class="tag">국제학교 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t3.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">유성준 멘토</p>
									<p class="desc">NUS 국립대 출신</p>
								</div>
								<div class="bottom">
									<p class="tag">싱가포르 국립대 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t4.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">이진영 멘토</p>
									<p class="desc">홍콩대 의대생 출신</p>
								</div>
								<div class="bottom">
									<p class="tag">홍콩대학 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t5.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">Tei 실장</p>
									<p class="desc">싱가포르 사립대 출신</p>
								</div>
								<div class="bottom">
									<p class="tag">싱가포르 대학 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t6.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">김형수 팀장</p>
									<p class="desc">서강대 shape mba 재학중</p>
								</div>
								<div class="bottom">
									<p class="tag">해외대학 입학수속 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t7.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">이수연 실장</p>
									<p class="desc">말레이시아 사립대 교직원 출신</p>
								</div>
								<div class="bottom">
									<p class="tag">말레이시아 대학 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t8.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">김소연 실장</p>
									<p class="desc">kaplan 재단 교직원 출신</p>
								</div>
								<div class="bottom">
									<p class="tag">미국/아시아 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t9.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt=""
										class="flag">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">홍수진 실장</p>
									<p class="desc">교육업 경력 10년</p>
								</div>
								<div class="bottom">
									<p class="tag">CLASS 통합관리</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t10.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">강종민 지사장</p>
									<p class="desc">말레이시아 세기대학원 졸업</p>
								</div>
								<div class="bottom">
									<p class="tag">말레이시아 조기유학 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t11.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_science.png" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">Dennis 멘토</p>
									<p class="desc">연세대학교 컴퓨터과학</p>
								</div>
								<div class="bottom">
									<p class="tag">해외대학 대비반</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t12.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">조수호 멘토</p>
									<p class="desc">라셀 예술대 그래픽</p>
								</div>
								<div class="bottom">
									<p class="tag">예술대 수업 (통합)</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t13.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">이희재 멘토</p>
									<p class="desc">미국 UC 버클리대학 출신</p>
								</div>
								<div class="bottom">
									<p class="tag">미국 유학 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t14.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">태정인 멘토</p>
									<p class="desc">UCLA 정치학과 졸업</p>
								</div>
								<div class="bottom">
									<p class="tag">미국 유학 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<!-- <div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t15.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">임지영 멘토</p>
									<p class="desc">미국 조지타운대학 출신</p>
								</div>
								<div class="bottom">
									<p class="tag">미국 유학 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div> -->
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t16.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_uk.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">조서연 멘토</p>
									<p class="desc">LSE 런던정경대 출신</p>
								</div>
								<div class="bottom">
									<p class="tag">영국 유학 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t17.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_canada.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">이은빈 멘토</p>
									<p class="desc">듀오링고 만점에 가까운 실력자</p>
								</div>
								<div class="bottom">
									<p class="tag">라이팅 & 스피킹 전문</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t18.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">Amy 멘토</p>
									<p class="desc">Middlesex University London</p>
								</div>
								<div class="bottom">
									<p class="tag">듀오링고 수업</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t19.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_france.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">Jenna 멘토</p>
									<p class="desc">인사이드 MBA 졸업</p>
								</div>
								<div class="bottom">
									<p class="tag">듀오링고 수업</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t20.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_world.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">Lya 멘토</p>
									<p class="desc">Laguna State University</p>
								</div>
								<div class="bottom">
									<p class="tag">국제학교 대비반 수업</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t21.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="" class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">김연수 실장</p>
									<p class="desc">영유아 교육 행정경력 8년</p>
								</div>
								<div class="bottom">
									<p class="tag">국제학교 전문 코디네이터</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
						<div class="swiper-slide item" onclick="location.href='<?php echo G5_BBS_URL ?>/write.php?bo_table=qa'">
							<div class="imgbox">
								<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t22.jpg" alt=""
									class="img">
								<div class="flagbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_world.svg" alt=""
										class="flag">
								</div>
							</div>
							<div class="txtbox">
								<div class="top">
									<p class="name">Raphael 멘토</p>
									<p class="desc">국제학교 출신 교포 강사</p>
								</div>
								<div class="bottom">
									<p class="tag">아이엘츠 수업 </p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt=""
										class="more">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>

    <div id="sec03" class="sec msection class_area why_class">
        <div class="container why_wrap" data-aos="fade-up">
			<div class="sub_titbox">
				<div class="leftbox">
					<p class="sub_txt4">유학의 시작은! 학습 준비부터 시작합니다.</p>
					<p class="sub_txt1 ver3">
						<span class="color2">영어 수업, 에세이 수업 등</span> 자체 학습 제공
					</p>
					<p class="sub_txt3">
						상담과 입학수속 그리고 수업까지 한번에 관리하는 유학원은 몽선생이 유일합니다! <br>
						국제학교 부터, 해외대학 입학까지 필요한 수업을 몽선생이 제공합니다.
					</p>
				</div>				
				<div class="controlsbox">
					<div class="swiper-button-prev prev_btn"></div>
					<div class="swiper-button-next next_btn"></div>
				</div>
			</div>
             <div class="counsel_list class">
                <ul class="panel">
                    <li id="content-2" class="swiper why_swiper">
                        <ul class="curri swiper-wrapper">
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail04'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl01_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
											<p class="tag">#1:1 클래스</p>
											<p class="tag">#영어</p>
										</div>
                                        <span class="title">
                                            5강이면 끝!<br/>
                                            국제학교 시험대비반
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                말레이시아, 싱가포르 등  해외 국제학교 입학에 필요한 테스트를 사전에 준비할 수 있는 모의 테스트 중심의 실전 완성 프로그램 입니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl02_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#2개월</p>
                                        	<p class="tag">#온라인</p>
										</div>
                                        <span class="title">
                                            2개월 완성!<br/>
                                            듀오링고 DET 온라인 강습반
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                최대 6명 정원, 2개월 과정으로 DET 전문 원어민 선생님이 상세하게 영어로 풀어주는 DET 시험대비 전문 과정입니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail06'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl03_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#기초</p>
                                        	<p class="tag">#영어</p>
										</div>
                                        <span class="title">
                                            원어민과 한달만에 끝내는<br/>
                                            영어 기초문법
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                영어 기초가 부족한 학생들을 위해 1:1 맞춤 수업을 제공하여 문법·어휘·스피킹을 단계적으로 학습 할 수 있는 프로그램입니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail05'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl04_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#2개월</p>
                                        	<p class="tag">#온라인</p>
										</div>
                                        <span class="title">
                                            IELTS <br/>
                                            소규모 과외수업
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                최대 4명 정원, 3개월 과정으로 IELTS 6.0 목표달성을 위해 검증된 선생님과 소규모 과외로 꼼꼼한 학습을 제공합니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail08'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl05_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#1:1클래스</p>
                                        	<p class="tag">#영어</p>
										</div>
                                        <span class="title">
                                            하루 30분의 기적<br/>
                                            원어민 화상영어
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                최대 4명 정원, 3개월 과정으로 IELTS 6.0 목표달성을 위해 검증된 선생님과 소규모 과외로 꼼꼼한 학습을 제공합니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail07'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl06_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#에세이</p>
                                        	<p class="tag">#토론</p>
										</div>
                                        <span class="title">
                                            대학수업 미리 준비<br/>
                                            에세이 & 토론 집중반
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail02'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl07_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#3개월</p>
                                        	<p class="tag">#대학전공</p>
										</div>
                                        <span class="title">
                                            학점관리 미리하기!<br/>
                                            해외대학 전공 체험반
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail03'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl08_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#예술대</p>
                                        	<p class="tag">#포트폴리오</p>
										</div>
                                        <span class="title">
                                            졸업생과 함께 만드는<br/>
                                            예술대 포트폴리오
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail09'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl09_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#1:1클래스</p>
                                        	<p class="tag">#개별학습지도</p>
										</div>
                                        <span class="title">
                                            IB 고득점자의<br/>
                                            1:1 맞춤 과외
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide item" onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail10'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl10_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#1:1클래스</p>
                                        	<p class="tag">#개별학습지도</p>
										</div>
                                        <span class="title">
                                            졸업걱정 NO! <br/>
                                            해외대학 학과목 밀착과외!
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p>커리큘럼 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="sec04" class="sec msection why_class">
        <div class="container" data-aos="fade-up">
			<div class="sub_titbox">
				<p class="sub_txt1 ver3">
					<span class="color2">최대 수속생관리!</span>  <br class="tablet">
					국제학교~해외대학까지 한 번에
				</p>
			</div>
			<div class="contbox">
				<div class="leftbox">
					<div class="top">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/why_sec5_icon.png" alt="" class="icon">
						<p class="sub">국제학교/해외대학 입학 현황</p>
						<p class="tit">
							총 
							<span class="color"><span class="countup" data-count="5500" data-time="1200">0</span>여건</span>
							이상
						</p>
						<p class="desc">
							몽선생은 2015년 부터 많은 매년 300여명 수속생을 배출하여 다양한 사례를 제공합니다. 국제학교 부터 해외대학 입학까지 원스탑 관리가 되는 완벽한 교육업체 입니다.
						</p>
					</div>
					<div class="databox">
						<p class="txt">‧ 2013~2023년 몽선생 대표원장 관리생 집계</p>
						<p class="txt">‧ 국제학교, 대학, 대학원 등 전체 포함</p>
					</div>
				</div>
				<div class="rightbox">
					<p class="title">국가별 관리 학교 LIST</p>
					<div class="infobox">
						<div class="item">
							<p class="tit">국제학교</p>
							<p class="desc">말레이시아 40여개, 싱가포르 20여개</p>
						</div>
						<div class="item">
							<p class="tit">싱가폴 대학</p>
							<p class="desc">국립대, 사립대, 예술대 통합관리</p>
						</div>
						<div class="item">
							<p class="tit">말레이시아</p>
							<p class="desc">국립대, 사립대, 직영캠퍼스 통합관리</p>
						</div>
						<div class="item">
							<p class="tit">미국</p>
							<p class="desc">UC계열 주립대, 전미 TOP 100위권 대학</p>
						</div>
					</div>
					<p class="desc">
						이 외에도 많은 대학 및 기관과 긴밀히 파트너쉽을 구축하여 <br>
						학생들이 합격할 수 있는 다양한 입시 전략 방법을 제시합니다.
					</p>
				</div>
			</div>
        </div>
    </div>

    <div id="sec05" class="sec msection why_class">
        <div class="container" data-aos="fade-up">
			<div class="contbox">
				<div class="txtbox">
					<div class="topbox">
					<p class="sub_txt1">
						현지 관리를 통한 <span class="color2">안전 정착 지원!</span> 
					</p>
					<p class="sub_txt3">
						해외에 체류하다 보면 많은 도움이 필요합니다.  <br>
						응급상황, 학교와의 소통, 그리고 낯선 해외 생활에서 발생할 수 있는 예기치 못한 상황들을 담당 상담사를 통해 문제 해결방법을 조언 받을 수 있습니다.
					</p>
					</div>
					<div class="descbox">	
						<p class="tit">
							<span class="txt">현지 문제 해결</span>
							<span class="small">실시간 비상 연락망</span>
						</p>
						<p class="desc">
							현지에서 발생되는 어려움을 교직원 출신 상담/수속 직원에게 소통하고, 현지 비상 직원을 통해 도움을 받을 수 있습니다.
						</p>
					</div>
				</div>
				<div class="imgbox">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/why_sec5_img.png" alt="" class="img pc">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/why_sec5_img_m.png" alt="" class="img tablet">
				</div>
			</div>
        </div>
    </div>

    <div id="sec06" class="sec why">
        <div class="container" data-aos="fade-up">
			<div class="contbox">
				<div class="imgbox">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/why_sec6_img.png" alt="" class="img pc">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/why_sec6_img_m.png" alt="" class="img tablet">
				</div>
				<div class="txtbox">
					<p class="sub_txt4">Different Point</p>
					<p class="sub_txt1">
						한명의 상담사가 아니다! <br class="tablet">
						<span class="color2">TEAM으로 움직인다</span> 
					</p>
					<p class="sub_txt3">
						몽선생의 Team 멘토링 시스템은 한 명의 상담사가 고객을 관리하지 않고, 현지 학교 출신(학습담당), 유학수속 (행정담당) 으로 구분되어 팀 멘토링 시스템으로 한 명의 학생을 다수의 상담사가 관리합니다.
					</p>
				</div>
			</div>
        </div>
    </div>
</div>