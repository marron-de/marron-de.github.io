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

    <div class="univ_info tabs swiper tab_swiper" data-index="2" data-gappc="0" data-gapmob="0">
        <ul class="container swiper-wrapper" data-aos="fade">
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info_intro">홈</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info01">국제학교</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info02">해외대학</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=guidebook">가이드북</a>
            </li>
            <li class="active swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=faq">자주 묻는 질문</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_adv">학교 광고판</a>
            </li>
        </ul>
    </div>

    <div class="msection faq_area">
		<div class="container" data-aos="fade-up">
            <div class="ms title_area notab">
                <span><b>FAQ</b> 자주 묻는 질문</span>
            </div>
            <div class="faq-box">
                <ul class="faq_list">
                    <li>
                        <div class="question">상담 시간은 얼마나 걸리나요?</div>
                        <div class="answer">유학상담은 기본적으로 "무상"으로 가능합니다.</div>
                    </li>
                    <li>
                        <div class="question">방문상담은 어디서 이루어지나요?</div>
                        <div class="answer">유학상담은 기본적으로 "무상"으로 가능합니다.</div>
                    </li>
                    <li>
                        <div class="question">어떤 상담을 신청할 수 있나요?</div>
                        <div class="answer">유학상담은 기본적으로 "무상"으로 가능합니다.</div>
                    </li>
                    <li>
                        <div class="question">주말에도 상담이 가능한가요?</div>
                        <div class="answer">유학상담은 기본적으로 "무상"으로 가능합니다.</div>
                    </li>
                    <li>
                        <div class="question">상담비용은 있나요?</div>
                        <div class="answer">유학상담은 기본적으로 "무상"으로 가능합니다.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>