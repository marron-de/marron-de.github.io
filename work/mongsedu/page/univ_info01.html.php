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
					<div class="button"><input type="submit" value="검색"></div>
					<input type="text" class="input" placeholder="원하시는 학교 정보를 쉽게 만나보세요." required>
					<button type="button" class="del_btn">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_delete.svg" alt="" class="icon">
					</button>
				</div>
				<div class="cm_popup univsch_popup">
					<ul class="linkbox">
						<li><a class="link tit">자주 찾는 학교</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_result&kw=National%20University%20of%20Singapore" class="link">National University of Singapore (NUS)</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_result&kw=가든%20국제학교" class="link">가든 국제학교</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_result&kw=Kaplan%20Singapore" class="link">Kaplan Singapore</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_result&kw=Lasalle%20College%20of%20the%20Arts" class="link">Lasalle College of the Arts</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_result&kw=세인트조셉%20국제학교" class="link">세인트조셉 국제학교</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_result&kw=Taylors%20University" class="link">Taylors University</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_result&kw=Monash%20University" class="link">Monash University</a></li>
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
                        <!-- <li class="swiper-slide"><a href="#" class="show" id="tab-11">전체보기</a></li> -->
                        <li class="swiper-slide"><a href="#" class="show" id="tab-12">쿠알라룸프</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-13">조호바루</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-15">태국</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-14">싱가포르</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-16">베트남</a></li>
                    </ul>
                </div>
            </div>
            <div class="counsel_list tabs_cont">
                <ul class="panel">
                    <!-- <li id="content-11">
						<div class="univ_list grid_ver">
							<?php include (EYOOM_THEME_PATH.'/page/univ_malay2_slide.php'); ?>			
							<?php include (EYOOM_THEME_PATH.'/page/univ_thai_slide.php'); ?>
							<?php include (EYOOM_THEME_PATH.'/page/univ_biet_slide.php'); ?>
						</div>
                    </li> -->
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
                    <li id="content-15">
						<div class="univ_list grid_ver">
							<?php include (EYOOM_THEME_PATH.'/page/univ_thai_slide.php'); ?>
						</div>
                    </li>
                    <li id="content-14">
						<div class="univ_list grid_ver">
							<?php include (EYOOM_THEME_PATH.'/page/univ_no_slide.php'); ?>
						</div>
                    </li>
                    <li id="content-16">
						<div class="univ_list grid_ver">
							<?php include (EYOOM_THEME_PATH.'/page/univ_biet_slide.php'); ?>
						</div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
</div>

<?php include (EYOOM_THEME_PATH.'/page/univ_modal.php'); ?>