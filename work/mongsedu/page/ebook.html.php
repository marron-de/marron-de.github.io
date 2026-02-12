<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<style>
    .frame-1 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: center;
        flex-wrap: nowrap;
        flex-shrink: 0;
        gap: 8px;
        position: relative;
        width: 256px;
        padding: 44px 0 0;
    }
    .free-registration {
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        height: 19px;
        color: #8095aa;
        font-family: Pretendard, var(--default-font-family);
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
        text-align: left;
        white-space: nowrap;
        letter-spacing: -0.64px;
        z-index: 1;
    }
    .slogan-related-to-catalog {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        flex-shrink: 0;
        position: relative;
        width: 256px;
        height: 96px;
        color: #212121;
        font-family: Pretendard, var(--default-font-family);
        font-size: 32px;
        font-weight: 700;
        line-height: 48px;
        text-align: left;
        text-overflow: initial;
        letter-spacing: -0.96px;
        z-index: 2;
        overflow: hidden;
    }
    .frame-2 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        flex-wrap: nowrap;
        flex-grow: 1;
        flex-shrink: 0;
        flex-basis: 0;
        gap: 20px;
        position: relative;
        min-width: 0;
        z-index: 3;
    }
    .personal-info {
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        height: 24px;
        color: #454545;
        font-family: Pretendard, var(--default-font-family);
        font-size: 20px;
        font-weight: 700;
        line-height: 24px;
        text-align: left;
        white-space: nowrap;
        letter-spacing: -0.6px;
        z-index: 4;
    }
    .frame-3 {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        align-self: stretch;
        flex-wrap: nowrap;
        flex-shrink: 0;
        gap: 16px;
        position: relative;
        z-index: 5;
    }
    .frame-4 {
        display: flex;
        align-items: flex-start;
        align-self: stretch;
        flex-wrap: nowrap;
        flex-shrink: 0;
        gap: 10px;
        position: relative;
        padding: 16px 20px;
        background: #ffffff;
        z-index: 6;
        border-radius: 8px;
    }
    .hong-gil-dong {
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        height: 19px;
        color: #454545;
        font-family: Pretendard, var(--default-font-family);
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
        text-align: left;
        white-space: nowrap;
        letter-spacing: -0.48px;
        z-index: 7;
    }
    .frame-5 {
        display: flex;
        align-items: flex-start;
        align-self: stretch;
        flex-wrap: nowrap;
        flex-shrink: 0;
        gap: 10px;
        position: relative;
        padding: 16px 20px;
        background: #ffffff;
        z-index: 8;
        border-radius: 8px;
    }
    .no-input {
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        height: 19px;
        color: #c2c2c2;
        font-family: Pretendard, var(--default-font-family);
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
        text-align: left;
        white-space: nowrap;
        letter-spacing: -0.48px;
        z-index: 9;
    }
    .frame-6 {
        display: flex;
        align-items: flex-start;
        align-self: stretch;
        flex-wrap: nowrap;
        flex-shrink: 0;
        gap: 10px;
        position: relative;
        padding: 16px 20px;
        background: #ffffff;
        z-index: 10;
        border-radius: 8px;
    }
    .email-disabled {
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        height: 19px;
        color: #c2c2c2;
        font-family: Pretendard, var(--default-font-family);
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
        text-align: left;
        white-space: nowrap;
        letter-spacing: -0.48px;
        z-index: 11;
    }
    .frame-7 {
        display: flex;
        align-items: flex-start;
        align-self: stretch;
        flex-wrap: nowrap;
        flex-shrink: 0;
        gap: 10px;
        position: relative;
        height: 150px;
        padding: 16px 20px;
        background: #ffffff;
        z-index: 12;
        border-radius: 8px;
    }
    .inquiry-disabled {
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        height: 19px;
        color: #c2c2c2;
        font-family: Pretendard, var(--default-font-family);
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
        text-align: left;
        white-space: nowrap;
        letter-spacing: -0.48px;
        z-index: 13;
    }
    .frame-8 {
        display: flex;
        align-items: center;
        justify-content: space-between;
        align-self: stretch;
        flex-wrap: nowrap;
        flex-shrink: 0;
        position: relative;
        z-index: 14;
    }
    .frame-9 {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        flex-shrink: 0;
        gap: 16px;
        position: relative;
        width: 316px;
        z-index: 15;
    }
    .frame-a {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        flex-shrink: 0;
        gap: 10px;
        position: relative;
        width: 242px;
        z-index: 16;
    }
    .rectangle {
        flex-shrink: 0;
        position: relative;
        width: 20px;
        height: 20px;
        background: #ffffff;
        border: 1px solid #d9d9d9;
        z-index: 17;
        border-radius: 4px;
    }
    .personal-info-agreement {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        width: 212px;
        height: 22px;
        color: #454545;
        font-family: Pretendard, var(--default-font-family);
        font-size: 18px;
        font-weight: 400;
        line-height: 21.604px;
        text-align: center;
        white-space: nowrap;
        letter-spacing: -0.54px;
        z-index: 18;
    }
    .content-view {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        width: 58px;
        height: 19px;
        color: #c2c2c2;
        font-family: Pretendard, var(--default-font-family);
        font-size: 16px;
        font-weight: 600;
        line-height: 19px;
        text-align: center;
        text-decoration: underline;
        white-space: nowrap;
        letter-spacing: -0.48px;
        z-index: 19;
    }
    .btn {
        flex-shrink: 0;
        position: relative;
        width: 345px;
        height: 56px;
        z-index: 20;
        border-radius: 10px;
    }
    .frame-b {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: nowrap;
        gap: 10px;
        position: absolute;
        width: 345px;
        height: 56px;
        top: 0;
        left: 0;
        padding: 16px 120px;
        background: #398a8f;
        z-index: 21;
        border-radius: 10px;
    }
    .catalog-request {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        flex-shrink: 0;
        flex-basis: auto;
        position: relative;
        width: 105px;
        height: 24px;
        color: #ffffff;
        font-family: Pretendard, var(--default-font-family);
        font-size: 20px;
        font-weight: 700;
        line-height: 24px;
        text-align: center;
        white-space: nowrap;
        letter-spacing: -0.6px;
        z-index: 22;
    }

</style>

<div class="sub-page page-class page-ebook">
	<div class="banner_area ver2 ebook">
        <div class="container" data-aos="fade-up">
			<div class="banner">
				<div class="bgbox">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ebook_top_ban.jpg" alt="" class="pc img">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ebook_top_ban_mob.jpg" alt="" class="tablet img">
				</div>
				<div class="txtbox">
					<p class="sub">Brochures & Service Guide</p>
					<p class="tit">
						CLASS 수업 커리큘럼 / 전자북 <br>
						국가별 무료책자 신청
					</p>
				</div>
			</div>
        </div>
    </div>
    
    <div class="msection class_area">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area class">
				<p class="title">
					<span class="tit">CLASS 수업 커리큘럼 / 안내문</span>
				</p>
            </div>
            <div class="ebook_list">
                <ul>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook01.jpg" alt="싱가포르 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">듀오링고 정규반 </span>
							<p>국립대, 사립대, 예술대 통합상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook02.jpg" alt="서울 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">해외대학 대비반 </span>
							<p>국립대, 사립대, 전공별 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook03.jpg" alt="도쿄 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">예술대 포트폴리오반 </span>
							<p>국립대, 사립대, 국제학생 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook04.jpg" alt="런던 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">영어기초훈련반</span>
							<p>국립대, 사립대, 직업 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook05.jpg" alt="뉴욕 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">국제학교대비반 </span>
							<p>국립대, 사립대, 대인관계 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook06.jpg" alt="시드니 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">IELTS 소규모반</span>
							<p>국립대, 사립대, 심리 상담</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection ebook_area">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area class">
				<p class="title">
					<span class="tit">HOT 인기 전자북🔥</span>
				</p>
            </div>
            <div class="ebook_intro ebook_swiperbox">
				<div class="swiper ebook_swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide item">
							<div class="imgbox">
                            	<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_ebook_intro.jpg" alt="듀오링고" class="img">
							</div>
							<div class="txtbox">
								<div class="titbox">
									<div class="top">
										<p class="title">듀오링고</p>
										<div class="tagbox">
											<span class="tag best">BEST</span>
											<span class="tag">최신 ebook</span>
										</div>
									</div>
									<p class="sub">#2025년 최신 개정판 I 저자 : 몽선생</p>
								</div>
								<p class="desc">
									원어민 직강을 통해 듀오링고 기출문제를 분석하며 핵심 출제 패턴을 확실하게 잡을 수 있는 실전 시험 준비 교재입니다.
									실제 시험과 동일한 유형과 난이도로 구성되어 듀오링고 점수 향상을 위한 최적의 실전 대비를 제공합니다.
								</p>
								<div class="btnbox">
									<div class="sale">
										<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
										<span class="num">10%</span>
									</div>
									<div class="price">
										<p class="ori">₩22,000</p>
										<p class="now">19,800원</p>
									</div>
									<a href="" class="naver_btn">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/nstore_icon.svg" alt="" class="icon">
										<span class="txt">네이버 스토어 바로가기</span>
									</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide item">
							<div class="imgbox">
                            	<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_ebook_intro.jpg" alt="듀오링고" class="img">
							</div>
							<div class="txtbox">
								<div class="titbox">
									<div class="top">
										<p class="title">듀오링고2</p>
										<div class="tagbox">
											<span class="tag best">BEST</span>
											<span class="tag">최신 ebook</span>
										</div>
									</div>
									<p class="sub">#2025년 최신 개정판 I 저자 : 몽선생</p>
								</div>
								<p class="desc">
									원어민 직강을 통해 듀오링고 기출문제를 분석하며 핵심 출제 패턴을 확실하게 잡을 수 있는 실전 시험 준비 교재입니다.
									실제 시험과 동일한 유형과 난이도로 구성되어 듀오링고 점수 향상을 위한 최적의 실전 대비를 제공합니다.
								</p>
								<div class="btnbox">
									<div class="sale">
										<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="" class="icon">
										<span class="num">10%</span>
									</div>
									<div class="price">
										<p class="ori">₩22,000</p>
										<p class="now">19,800원</p>
									</div>
									<a href="" class="naver_btn">
										<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/nstore_icon.svg" alt="" class="icon">
										<span class="txt">네이버 스토어 바로가기</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next next_btn"></div>
				<div class="swiper-button-prev prev_btn"></div>
            </div>
        </div>
    </div>

    <div class="msection class_area">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area class">
				<p class="title">
					<span class="tit">국가별 유학정보 / 카달로그</span>
				</p>
            </div>
            <div class="ebook_list">
                <ul>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook07.jpg" alt="싱가포르 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">싱가포르 대학 상담</span>
							<p>국립대, 사립대, 예술대 통합상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook08.jpg" alt="서울 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">서울 대학 상담</span>
							<p>국립대, 사립대, 전공별 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook09.jpg" alt="도쿄 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">도쿄 대학 상담</span>
							<p>국립대, 사립대, 국제학생 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook10.jpg" alt="런던 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">런던 대학 상담</span>
							<p>국립대, 사립대, 국제학생 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook11.jpg" alt="뉴욕 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">뉴욕 대학 상담</span>
							<p>국립대, 사립대, 대인관계 상담</p>
						</div>
                    </li>
                    <li onclick="ebook_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook12.jpg" alt="시드니 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">시드니 대학 상담</span>
							<p>국립대, 사립대, 심리 상담</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection class_area ci sec">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area class">
				<p class="title">
					<span class="tit">몽선생 수속 서비스 LIST 안내서</span>
				</p>
            </div>
            <div class="ebook_list2">
				 <ul>
                    <li onclick="ebook_modal(1)">
						<div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebookpcd01.jpg" alt="싱가포르 사립대 서비스 상세내역" class="img">
							<div class="img_txtbox">
								<p class="tit">싱가포르 사립대</p>
								<p class="sub">서비스 상세내역</p>
							</div>
							<div class="img_bottom">
								<div class="flagbox">
									<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
								</div>
							</div>
						</div>
						<div class="text_area">
							<span class="title">
								싱가포르 사립대 
								서비스 상세내역
							</span>
							<div class="tagbox">
								<p class="tag">싱가포르</p>
							</div>
						</div>
					</li>
                    <li onclick="ebook_modal(1)">
						<div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebookpcd02.jpg" alt="싱가포르 국립대 서비스 상세내역" class="img">
							<div class="img_txtbox">
								<p class="tit">싱가포르 국립대</p>
								<p class="sub">서비스 상세내역</p>
							</div>
							<div class="img_bottom">
								<div class="flagbox">
									<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
								</div>
							</div>
						</div>
						<div class="text_area">
							<span class="title">
								싱가포르 국립대 
								서비스 상세내역
							</span>
							<div class="tagbox">
								<p class="tag">싱가포르</p>
							</div>
						</div>
					</li>
                    <li onclick="ebook_modal(1)">
						<div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebookpcd03.jpg" alt="싱가포르 예술대 서비스 상세내역" class="img">
							<div class="img_txtbox">
								<p class="tit">싱가포르 예술대</p>
								<p class="sub">서비스 상세내역</p>
							</div>
							<div class="img_bottom">
								<div class="flagbox">
									<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
								</div>
							</div>
						</div>
						<div class="text_area">
							<span class="title">
								싱가포르 예술대 
								서비스 상세내역
							</span>
							<div class="tagbox">
								<p class="tag">싱가포르</p>
							</div>
						</div>
					</li>
                    <li onclick="ebook_modal(1)">
						<div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebookpcd04.jpg" alt="말레이시아 대학 서비스 상세내역" class="img">
							<div class="img_txtbox">
								<p class="tit">말레이시아 대학</p>
								<p class="sub">서비스 상세내역</p>
							</div>
							<div class="img_bottom">
								<div class="flagbox">
									<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
								</div>
							</div>
						</div>
						<div class="text_area">
							<span class="title">
								말레이시아 대학 
								서비스 상세내역
							</span>
							<div class="tagbox">
								<p class="tag">말레이시아</p>
							</div>
						</div>
					</li>
                    <li onclick="ebook_modal(1)">
						<div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebookpcd05.jpg" alt="말레이시아 국제학교 서비스 상세내역" class="img">
							<div class="img_txtbox">
								<p class="tit">말레이시아 국제학교</p>
								<p class="sub">서비스 상세내역</p>
							</div>
							<div class="img_bottom">
								<div class="flagbox">
									<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
								</div>
							</div>
						</div>
						<div class="text_area">
							<span class="title">
								말레이시아 국제학교 
								서비스 상세내역
							</span>
							<div class="tagbox">
								<p class="tag">말레이시아</p>
							</div>
						</div>
					</li>
                    <li onclick="ebook_modal(1)">
						<div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebookpcd06.jpg" alt="미국대학 서비스 상세내역" class="img">
							<div class="img_txtbox">
								<p class="tit">미국대학</p>
								<p class="sub">서비스 상세내역</p>
							</div>
							<div class="img_bottom">
								<div class="flagbox">
									<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="미국">
								</div>
							</div>
						</div>
						<div class="text_area">
							<span class="title">
								미국대학 
								서비스 상세내역
							</span>
							<div class="tagbox">
								<p class="tag">미국</p>
							</div>
						</div>
					</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="msection ebook_form">
        <div class="container">
            <div class="frm_titbox" data-aos="fade-up">
                <p class="sub">무료 접수 신청</p >
                <p class="tit">몽선생의 유학정보 카달로그를 받아보고 싶다면?</p >
            </div>
            <div class="frm_form">
				<form name="frm" id="frm" action="" method="POST" enctype="multipart/form-data" class="frm" data-aos="fade-up">
					<div class="form_wrap">
						<p class="form_tit">원활한 소통을 위해 아래 정보들을 입력해주세요.</p>
						<div class="form_box">
							<div class="form_item">
								<div class="input_box">
									<input type="text" name="frm_name" class="input_text" placeholder="이름" required>							
								</div>
							</div>
							<div class="form_item">
								<div class="input_box">
									<input type="text" name="frm_tel" class="input_text" placeholder="-  없이 입력해주세요." required>							
								</div>
							</div>
							<div class="form_item">
								<div class="input_box">
									<input type="text" name="frm_email" class="input_text" placeholder="이메일" required>
								</div>
							</div>
							<div class="form_item">
								<div class="input_box">
									<textarea name="frm_content" class="input_text" placeholder="문의사항" required></textarea>
								</div>
							</div>
						</div>
						<div class="form_btnbox flex last">
							<div class="term_box">
								<div class="check_box">
									<input type="checkbox" name="frm_agree" class="input_check" id="frm_agree" required>
									<label for="frm_agree" class="label_check">개인정보수집 및 이용안내 동의</label>
								</div>
								<button type="button" class="term_viw" onclick="privacy_modal()">내용보기</button>
							</div>
							<button type="button" class="form_btn submit_btn">카달로그 신청하기</button>
						</div>	
					
					</div>
				</form>
            </div>
        </div>
    </div>
</div>


<div id="ebook_modal1" class="cm_modal detail_modal ebook_modal">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box">
			<div class="titbox">
				<p class="title">
					<span class="tit">제목이 들어갑니다.</span>
					<span class="small">부제목이 들어갑니다.</span>
				</p>
				<p class="desc">
					줄거리가 짧게 들어갑니다. <br>
					서비스 내역은 클릭하게 되면 이런식으로 팝업이 뜨는데요. 저희 엑셀로 된 자료를 드릴거에요. 상단 제목만 잘보이게 하고, 엑셀의 상세 내용은 블러처리하고 하단에 상담 신청 후 리스트 받기 이런거를 넣으시면 되어요.
				</p>
			</div>
			<div class="contbox">
				<div class="contitem">
					<p class="cont_tit">무료 접수 신청</p>
					<p class="cont_desc">
						줄거리가 짧게 들어갑니다. <br>
						서비스 내역은 클릭하게 되면 이런식으로 팝업이 뜨는데요. 저희 엑셀로 된 자료를 드릴거에요. 상단 제목만 잘보이게 하고, 엑셀의 상세 내용은 블러처리하고 하단에 상담 신청 후 리스트 받기 이런거를 넣으시면 되어요.
					</p>
				</div>
				<div class="contitem">
					<p class="cont_desc">
						줄거리가 짧게 들어갑니다. <br>
						서비스 내역은 클릭하게 되면 이런식으로 팝업이 뜨는데요. 저희 엑셀로 된 자료를 드릴거에요. 상단 제목만 잘보이게 하고, 엑셀의 상세 내용은 블러처리하고 하단에 상담 신청 후 리스트 받기 이런거를 넣으시면 되어요.
					</p>
				</div>
			</div>
			<div class="note_box">
				<p class="note_txt">*미국대학은 일반적으로 국내고 내신과 영어공인시험이 요구되고, 대학에 따라사 SAT 및 자소서를 추가로 요청합니다.</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA">닫기</button>
				<button type="button" class="btn typeC">상담신청 후 리스트 받기</button>
			</div>
		</div>
	</div>
</div>


<div class="cm_modal privacy_modal">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box">
			<p class="modal_tit">개인정보수집 및 이용안내</p>
			<div class="term_box">
				<?php @include_once(EYOOM_THEME_PATH . '/page/privacy.html.php') ?>
			</div>
		</div>
	</div>
</div>



<script>

	/* 개인정보 팝업 */
	function privacy_modal() {
		$("body").addClass('hidden');
		$(".privacy_modal").addClass('show');
	}

</script>