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
						<li><a href="" class="link tit">자주 받는 상담</a></li>
						<li><a href="" class="link">말레이시아 국제학교 상담</a></li>
						<li><a href="" class="link">싱가포르 대학 상담</a></li>
						<li><a href="" class="link">말레이시아 대학 상담</a></li>
						<li><a href="" class="link">한국 국제학교 배치 상담</a></li>
						<li><a href="" class="link">송도 글로벌 캠퍼스</a></li>
					</ul>
				</div>
			</div>
        </div>
    </div>

    <div class="univ_info tabs swiper tab_swiper" data-index="0" data-gappc="0" data-gapmob="0">
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
            <li class="active swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=guidebook">가이드북</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=faq">자주 묻는 질문</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_adv">학교 광고판</a>
            </li>
        </ul>
    </div>

	<div class="msection univ_guide tabs">
		<div class="container" data-aos="fade-up">
            <div class="ms title_area" id="row-3">
				<div class="title">
					<span class="tit">가이드북</span>
				</div>
                <div class="tab">
                    <ul class="tab_tit">
                        <li><a href="#" class="show" id="tab-31">전체보기</a></li>
                        <li><a href="#" id="tab-32">국제학교</a></li>
                        <li><a href="#" id="tab-33">해외대학</a></li>
                    </ul>
                </div>
            </div>
			<div class="counsel_list tabs_cont">
                <ul class="panel">
                    <li id="content-31">
						<div class="guide_list">
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">말레이시아 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">말레이시아 국제학교 커리큘럼/학교 유형</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">말레이시아 국제학교 유학의 장/단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">싱가포르 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">싱가포르 국제학교 커리큘럼/학교유형</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">싱가포르 국제학교 유학의 장/단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">한국 비인가 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">한국 비인가 국제학교 리스트/유형</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">한국 인가 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">한국 인가 국제학교 리스트/유형</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">베트남/태국 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">베트남/태국 국제학교 장단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">싱가포르 대학 유학의 장단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">싱가포르 대학 유형/입학조건 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">말레이시아 대학 유학의 장단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">말레이시아 대학 유형/입학조건 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">미국 대학 유학의 장단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">미국 대학 유형/입학조건 정리</span>
								</a>
							</div>
						</div>
					</li>
                    <li id="content-32">
						<div class="guide_list">
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">말레이시아 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">말레이시아 국제학교 커리큘럼/학교 유형</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">말레이시아 국제학교 유학의 장/단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">싱가포르 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">싱가포르 국제학교 커리큘럼/학교유형</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">싱가포르 국제학교 유학의 장/단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">한국 비인가 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">한국 비인가 국제학교 리스트/유형</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">한국 인가 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">한국 인가 국제학교 리스트/유형</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">베트남/태국 국제학교 학비 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">국제학교</span>
									<span class="txt">베트남/태국 국제학교 장단점</span>
								</a>
							</div>							
						</div>
					</li>
                    <li id="content-33">
						<div class="guide_list">
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">싱가포르 대학 유학의 장단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">싱가포르 대학 유형/입학조건 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">말레이시아 대학 유학의 장단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">말레이시아 대학 유형/입학조건 정리</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">미국 대학 유학의 장단점</span>
								</a>
							</div>
							<div class="item">
								<a href="<?php echo EYOOM_THEME_URL; ?>/img/download/test.svg" class="link" download>
									<span class="cate">해외대학</span>
									<span class="txt">미국 대학 유형/입학조건 정리</span>
								</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>