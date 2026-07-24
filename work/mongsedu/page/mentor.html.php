<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;
?>


<div class="sub-page page-counsel page-mentor">
	<div class="banner_area ver2 counsel long">
        <div class="container" data-aos="fade-up">
			<div class="banner">
				<a href="<?php echo G5_URL ?>/page/?pid=counsel_banner" class="link">
					<div class="bgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/counsel_ban_bg.jpg" alt="" class="pc img">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/counsel_ban_bg_mob.jpg" alt="" class="tablet img">
					</div>
					<div class="txtbox">
						<p class="sub">
							해외 학교 교직원 출신의 <br class="tablet">차별점!
						</p>
						<p class="tit">
							<span class="color">20년 경력자의 전문 상담을</span> 
							<br class="tablet">
							받아보세요
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

    <div class="msection men_sec tabs">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area" id="row-1">
				<div class="title">
					<span class="tit">국가별 멘토</span>
				</div>
                <div class="tab swiper tab_swiper" data-gappc="12" data-gapmob="12">
                    <ul class="tab_tit swiper-wrapper">
                        <li class="swiper-slide"><a href="#" class="show" id="tab-1">전체보기</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-2">대표원장</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-3">싱가포르</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-4">말레이시아</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-5">CLASS</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-6">한국</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-7">미국/영국</a></li>
                    </ul>
                </div>
            </div>
            <div class="mentor_list tabs_cont">
				<ul class="panel">
					<li id="content-1">
						<ul>
							<li class="item" onclick="mentor_modal(1);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t1.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t1.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_world.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">대표원장 몽선생</p>
										<p class="desc">아시아 교육 전문가</p>
									</div>
									<div class="bottom">
										<p class="tag">해외대학 입시 전체</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(2);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t2.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t2.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이지형 부원장</p>
										<p class="desc">칭화대 국제관계 석사</p>
									</div>
									<div class="bottom">
										<p class="tag">국제학교 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(3);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t3.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t3.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">유성준 멘토</p>
										<p class="desc">NUS 국립대 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">싱가포르 국립대 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(5);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t5.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t5.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">임우철 실장</p>
										<p class="desc">싱가포르 대학 전문</p>
									</div>
									<div class="bottom">
										<p class="tag">싱가포르 대학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(6);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t6.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t6.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">김형수 팀장</p>
										<p class="desc">SHAPE MBA 수료</p>
									</div>
									<div class="bottom">
										<p class="tag">해외대학 입학수속 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(9);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t9.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t9.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">홍수진 실장</p>
										<p class="desc">교육업 경력 10년</p>
									</div>
									<div class="bottom">
										<p class="tag">CLASS 통합관리</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(7);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t7.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t7.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이수연 실장</p>
										<p class="desc">말레이시아 사립대 교직원 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">말레이시아 대학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(8);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t8.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t8.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">김소연 실장</p>
										<p class="desc">kaplan 재단 교직원 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">미국/아시아 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(21);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t21.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t21.jpg" alt="" class="img tablet">
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
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(11);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t11.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t11.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">Dennis 멘토</p>
										<p class="desc">연세대학교 컴퓨터과학</p>
									</div>
									<div class="bottom">
										<p class="tag">해외대학 대비반</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(4);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t4.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t4.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이진영 멘토</p>
										<p class="desc">홍콩대 의대 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">홍콩대학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(10);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t10.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t10.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">강종민 지사장</p>
										<p class="desc">말레이시아 세기대학원 졸업</p>
									</div>
									<div class="bottom">
										<p class="tag">말레이시아 조기유학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(17);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t17.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t17.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이은빈 멘토</p>
										<p class="desc">듀오링고 만점에 가까운 실력자</p>
									</div>
									<div class="bottom">
										<p class="tag">라이팅 & 스피킹 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(14);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t14.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t14.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">태정인 멘토</p>
										<p class="desc">UCLA 정치학과 졸업</p>
									</div>
									<div class="bottom">
										<p class="tag">미국 유학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<!-- <li class="item" onclick="mentor_modal(15);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t15.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t15.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">임지영 멘토</p>
										<p class="desc">미국 조지타운대학 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">미국 유학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li> -->
							<li class="item" onclick="mentor_modal(12);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t12.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t12.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">조수호 멘토</p>
										<p class="desc">라셀 예술대 그래픽</p>
									</div>
									<div class="bottom">
										<p class="tag">예술대 수업 (통합)</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(13);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t13.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t13.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이희재 멘토</p>
										<p class="desc">미국 UC 버클리대학 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">미국 유학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(18);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t18.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t18.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">Amy 멘토</p>
										<p class="desc">Middlesex University London</p>
									</div>
									<div class="bottom">
										<p class="tag">듀오링고 수업</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<!-- <li class="item" onclick="mentor_modal(19);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t19.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t19.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">Jenna 멘토</p>
										<p class="desc">인사이드 MBA 졸업</p>
									</div>
									<div class="bottom">
										<p class="tag">듀오링고 수업</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li> -->
							<li class="item" onclick="mentor_modal(16);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t16.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t16.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_uk.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">조서연 멘토</p>
										<p class="desc">LSE 런던정경대 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">영국 유학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(20);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t20.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t20.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">lya 멘토</p>
										<p class="desc">Laguna State University</p>
									</div>
									<div class="bottom">
										<p class="tag">국제학교 대비반 수업</span></p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(22);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t22.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t22.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">Raphael 멘토</p>
										<p class="desc">국제학교 출신 교포 강사</p>
									</div>
									<div class="bottom">
										<p class="tag">아이엘츠 수업</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(24);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t23.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t23.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이찬빈 멘토</p>
										<p class="desc">라셀 예술대 디자인 전공</p>
									</div>
									<div class="bottom">
										<p class="tag">예술대 수업 (그래픽)</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(25);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t24.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t24.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이승연 멘토</p>
										<p class="desc">드로잉·페인팅 포트폴리오</p>
									</div>
									<div class="bottom">
										<p class="tag">예술대 수업 (순수미술)</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(26);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t25.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t25.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">박주인 멘토</p>
										<p class="desc">3D·렌더링·그래픽 포트폴리오</p>
									</div>
									<div class="bottom">
										<p class="tag">예술대 수업 (제품/패션)</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<!-- <li class="item" onclick="mentor_modal(27);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t26.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t26.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">최승일 멘토</p>
										<p class="desc">3D·렌더링·그래픽 포트폴리오</p>
									</div>
									<div class="bottom">
										<p class="tag">예술대 수업 (제품/패션)</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li> -->
						</ul>
					</li>
					<li id="content-2">
						<ul>
							<li class="intro_sec">
								<div class="contbox">
									<div class="imgbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_ceo_pc.jpg" alt="" class="img pc">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_ceo_m.jpg" alt="" class="img tablet">
										<span class="tag">아시아 교육 전문가</span>
									</div>
									<div class="txtbox">
										<div class="titbox">
											<p class="title">
												해외대학교 교직원 출신경력! 
												<span class="color">REAL전문가</span>
											</p>
										</div>
										<div class="txtcont">
											<div class="top">
												<p class="name">임홍철</p>
												<p class="small">대표원장</p>
											</div>
											<div class="bottom">
												<div class="bottom_item">
													<p class="title">학력</p>
													<div class="desc_box">
														<p class="desc">서강대학교 경영대학원, 석사 MBA (재학)</p>
														<p class="desc">영국 Coventry 대학, 학사 Business Marketing (졸업)</p>
													</div>
												</div>
												<div class="bottom_item">
													<p class="title">경력</p>
													<div class="desc_box ver2">
														<p class="desc">현) 주식회사 몽선생대표</p>
														<p class="desc">현) SM글로벌 에듀케이션 원장</p>
														<p class="desc ver2">전) 사립대학 REG 그룹, 한국사무소 소장</p>
														<p class="desc ver2">전) 싱가포르 교육부 Edutrust 감사 업무 팀장</p>
														<p class="desc ver2">전) 싱가포르 사립대학 총괄매니저 10년 경력</p>
														<p class="desc ver2">한국유학협회 KOSA 정회원사</p>
														<p class="desc ver2">영국문화원 공식 인증사</p>
														<p class="desc ver2">공공기관, 대학협회, 행사 및 설명회 강연 다수</p>
														<p class="desc ver2">내일신문, 싱가포르 잡지사, 프라임경제 및 인터뷰 등 다수</p>
														<p class="desc ver2">여행가방 싱가포르 전문가 TV출연</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<li id="content-3">
						<ul>
							<li class="item" onclick="mentor_modal(3);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t3.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t3.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">유성준 멘토</p>
										<p class="desc">NUS 국립대 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">싱가포르 국립대 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(5);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t5.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t5.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">임우철 실장</p>
										<p class="desc">싱가포르 대학 전문</p>
									</div>
									<div class="bottom">
										<p class="tag">싱가포르 대학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(6);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t6.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t6.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">김형수 팀장</p>
										<p class="desc">SHAPE MBA 수료</p>
									</div>
									<div class="bottom">
										<p class="tag">해외대학 입학수속 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(1);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t1.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t1.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_world.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">대표원장 몽선생</p>
										<p class="desc">아시아 교육 전문가</p>
									</div>
									<div class="bottom">
										<p class="tag">해외대학 입시 전체</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
						</ul>
					</li>
					<li id="content-4">
						<ul>
							<li class="item" onclick="mentor_modal(7);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t7.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t7.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이수연 실장</p>
										<p class="desc">말레이시아 사립대 교직원 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">말레이시아 대학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(10);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t10.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t10.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">강종민 지사장</p>
										<p class="desc">말레이시아 세기대학원 졸업</p>
									</div>
									<div class="bottom">
										<p class="tag">말레이시아 조기유학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(2);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t2.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t2.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이지형 부원장</p>
										<p class="desc">칭화대 국제관계 석사</p>
									</div>
									<div class="bottom">
										<p class="tag">국제학교 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
						</ul>
					</li>
					<li id="content-5">
						<ul>
							<li class="item" onclick="mentor_modal(9);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t9.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t9.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">홍수진 실장</p>
										<p class="desc">교육업 경력 10년</p>
									</div>
									<div class="bottom">
										<p class="tag">CLASS 통합관리</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(11);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t11.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t11.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">Dennis 멘토</p>
										<p class="desc">연세대학교 컴퓨터과학</p>
									</div>
									<div class="bottom">
										<p class="tag">해외대학 대비반</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(12);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t12.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t12.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">조수호 멘토</p>
										<p class="desc">라셀 예술대 그래픽</p>
									</div>
									<div class="bottom">
										<p class="tag">예술대 수업 (통합)</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(17);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t17.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t17.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이은빈 멘토</p>
										<p class="desc">듀오링고 만점에 가까운 실력자</p>
									</div>
									<div class="bottom">
										<p class="tag">라이팅 & 스피킹 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<!-- <li class="item" onclick="mentor_modal(19);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t19.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t19.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">Jenna 멘토</p>
										<p class="desc">인사이드 MBA 졸업</p>
									</div>
									<div class="bottom">
										<p class="tag">듀오링고 수업</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li> -->
							<li class="item" onclick="mentor_modal(18);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t18.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t18.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">Amy 멘토</p>
										<p class="desc">Middlesex University London</p>
									</div>
									<div class="bottom">
										<p class="tag">듀오링고 수업</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(20);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t20.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t20.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">lya 멘토</p>
										<p class="desc">Laguna State University</p>
									</div>
									<div class="bottom">
										<p class="tag">국제학교 대비반 수업</span></p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(22);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t22.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t22.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">Raphael 멘토</p>
										<p class="desc">국제학교 출신 교포 강사</p>
									</div>
									<div class="bottom">
										<p class="tag">아이엘츠 수업</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(24);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t23.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t23.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이찬빈 멘토</p>
										<p class="desc">라셀 예술대 디자인 전공</p>
									</div>
									<div class="bottom">
										<p class="tag">예술대 수업 (그래픽)</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(25);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t24.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t24.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이승연 멘토</p>
										<p class="desc">라셀 예술대 순수미술 전공</p>
									</div>
									<div class="bottom">
										<p class="tag">예술대 수업 (순수미술)</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(26);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t25.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t25.jpg" alt="" class="img tablet">
									<div class="class_tag">class</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">박주인 멘토</p>
										<p class="desc">라셀 예술대 그래픽 전공</p>
									</div>
									<div class="bottom">
										<p class="tag">예술대 수업 (제품/패션)</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
						</ul>
					</li>
					<li id="content-6">
						<ul>
							<li class="item" onclick="mentor_modal(21);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t21.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t21.jpg" alt="" class="img tablet">
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
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(23);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t8.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t8.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">김소연 실장</p>
										<p class="desc">kaplan 재단 교직원 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">미국/아시아 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
						</ul>
					</li>
					<li id="content-7">
						<ul>
							<li class="item" onclick="mentor_modal(8);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t8.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t8.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">김소연 실장</p>
										<p class="desc">kaplan 재단 교직원 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">미국/아시아 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(14);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t14.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t14.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">태정인 멘토</p>
										<p class="desc">UCLA 정치학과 졸업</p>
									</div>
									<div class="bottom">
										<p class="tag">미국 유학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(16);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t16.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t16.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_uk.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">조서연 멘토</p>
										<p class="desc">LSE 런던정경대 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">영국 유학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
							<li class="item" onclick="mentor_modal(13);">
								<div class="imgbox">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor2_csl_t13.png" alt="" class="img pc">
									<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/mentor_csl_t13.jpg" alt="" class="img tablet">
									<div class="flagbox">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
									</div>
								</div>
								<div class="txtbox">
									<div class="top">
										<p class="name">이희재 멘토</p>
										<p class="desc">미국 UC 버클리대학 출신</p>
									</div>
									<div class="bottom">
										<p class="tag">미국 유학 전문</p>
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
									</div>
									<div class="btn">자세히 보기</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
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

<?php include_once(EYOOM_THEME_PATH.'/page/mentor_modal.php'); ?>