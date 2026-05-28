<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;
?>


<div class="sub-page page-counsel page-univ">
	<div class="tit_area board">
        <div class="container" data-aos="fade-up">
            <span class="title">학교정보</span>
			<div class="search_box">
				<div class="search_inputbox" onclick="univsch_popup()">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_search_blue.svg" alt="" class="icon">
					<input type="text" class="input" placeholder="원하시는 학교 정보를 쉽게 만나보세요." required>
					<button type="button" class="del_btn">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_delete.svg" alt="" class="icon">
					</button>
				</div>
				<div class="cm_popup univsch_popup">
					<ul class="linkbox">
						<li><a href="<?php echo G5_URL ?>/page/?pid=faq" class="link tit">자주 받는 상담</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_info01&tab=12&from=search" class="link">말레이시아 국제학교 상담</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_info02&tab=23&from=search" class="link">싱가포르 대학 상담</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_info02&tab=22&from=search" class="link">말레이시아 대학 상담</a></li>
						<li><a href="#none" class="link"  onclick="showToast('학교 정보 준비중입니다')">한국 국제학교 배치 상담</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_info02&tab=25&from=search" class="link">송도 글로벌 캠퍼스</a></li>
					</ul>
				</div>
			</div>
        </div>
    </div>

    <div class="univ_info tabs ver2 swiper tab_swiper" data-index="0" data-gappc="0" data-gapmob="0">
        <ul class="container swiper-wrapper" data-aos="fade">
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info_intro">홈</a>
            </li>
            <li class="active swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info01">국제학교</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info02">해외대학</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=guidebook">가이드북</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=faq">자주 묻는 질문</a>
            </li>
            <li  class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_adv">학교 광고판</a>
            </li>
        </ul>
    </div>

    <div class="msection univ_info_list sec tabs ver2 nomargin">
		<div class="container" data-aos="fade-up">
            <div class="ms title_area" id="row-1">
				<div class="title">
					<span class="tit">국제학교</span>
				</div>
                <div class="tab swiper tab_swiper" data-gappc="12" data-gapmob="12">
                    <ul class="tab_tit swiper-wrapper">
                        <li class="swiper-slide"><a href="#" class="show" id="tab-11">전체보기</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-12">말레이시아</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-13">싱가포르</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-14">한국 비인가</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-15">한국 인가</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-16">태국/베트남</a></li>
                    </ul>
                </div>
            </div>
            <div class="counsel_list tabs_cont">
                <ul class="panel">
                    <li id="content-11">
						<div class="univ_list grid_ver">
							<?php include (EYOOM_THEME_PATH.'/page/univ_malay2_slide.php'); ?>			
							<?php include (EYOOM_THEME_PATH.'/page/univ_thai_slide.php'); ?>
							<?php include (EYOOM_THEME_PATH.'/page/univ_biet_slide.php'); ?>
						</div>
                    </li>
                    <li id="content-12">
						<div class="univ_list grid_ver">							
							<?php include (EYOOM_THEME_PATH.'/page/univ_malay2_slide.php'); ?>	
						</div>
                    </li>
                    <li id="content-13">
						<div class="univ_list grid_ver">
							<?php include (EYOOM_THEME_PATH.'/page/univ_no_slide.php'); ?>
						</div>
                    </li>
                    <li id="content-14">
						<div class="univ_list grid_ver">							
							<?php include (EYOOM_THEME_PATH.'/page/univ_no_slide.php'); ?>
						</div>
                    </li>
                    <li id="content-15">
						<div class="univ_list grid_ver">
							<?php include (EYOOM_THEME_PATH.'/page/univ_no_slide.php'); ?>
						</div>
                    </li>
                    <li id="content-16">
						<div class="univ_list grid_ver">
							<?php include (EYOOM_THEME_PATH.'/page/univ_thai_slide.php'); ?>
							<?php include (EYOOM_THEME_PATH.'/page/univ_biet_slide.php'); ?>
						</div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
</div>

<?php include (EYOOM_THEME_PATH.'/page/univ_modal.php'); ?>