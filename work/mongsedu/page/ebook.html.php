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

<div class="sub-page page-class">
	<div class="banner_area ebook">
        <div class="container-fluid p-0">
            <!-- <img class="pc" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/bg_brochures.jpg" alt=""> -->
             <div class="pc text_area">
                <p>Brochures & Service Guide</p>
                <span>
                    CLASS 수업 커리큘럼 / 전자북<br/>
                    국가별 무료책자 신청
                </span>
             </div>
            <img class="mobile" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/banner_ebook_m.png" alt="">
        </div>
    </div>
    
    <div class="msection class_area">
        <div class="container">
            <div class="ms title_area class">
                <span>CLASS 수업 커리큘럼 / 안내문</span>
            </div>
            <div class="ebook_list">
                <ul>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook01.png" alt="싱가포르 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">듀오링고 정규반 </span>
                                <p>국립대, 사립대, 예술대 통합상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook02.png" alt="서울 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">해외대학 대비반 </span>
                                <p>국립대, 사립대, 전공별 상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook03.png" alt="도쿄 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">예술대 포트폴리오반 </span>
                                <p>국립대, 사립대, 국제학생 상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook04.png" alt="런던 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">영어기초훈련반</span>
                                <p>국립대, 사립대, 직업 상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook05.png" alt="뉴욕 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">국제학교대비반 </span>
                                <p>국립대, 사립대, 대인관계 상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook06.png" alt="시드니 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">IELTS 소규모반</span>
                                <p>국립대, 사립대, 심리 상담</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection ebook_area">
        <div class="container">
            <div class="ms title_area class">
                <span>HOT 인기 전자북🔥</span>
            </div>
            <div class="ebook_intro">
                <ul>
                    <li>
                        <!-- <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_ebook_intro.png" alt="듀오링고">
                        </div> -->
                        <div class="text_area">
                            <div class="tit_area">
                                <span class="title">듀오링고 기출문제 실전교재</span>
                                <p class="tag blue">HOT</p>
                                <p class="tag new">최신ebook</p>
                                <p class="desc">#2025년 최신 개정판 I 저자 : 몽선생</p>
                            </div>
                            <p>
                                원어민 직강을 통해 듀오링고 기출문제를 분석하며 핵심 출제 패턴을 확실하게 잡을 수 있는 실전 시험 준비 교재입니다.
                                실제 시험과 동일한 유형과 난이도로 구성되어 듀오링고 점수 향상을 위한 최적의 실전 대비를 제공합니다.
                            </p>
                            <div class="btn_area">
                                <div class="final_cost">
                                    <p>
                                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                        10%
                                    </p>
                                    <span>
                                        <b>19,800원</b>
                                    </span>
                                </div>
                                <a href="#none" class="nstore_go"><img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/btn_nstore.svg" alt=""></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection class_area">
        <div class="container">
            <div class="ms title_area class">
                <span>국가별 유학정보 / 카달로그</span>
            </div>
            <div class="ebook_list">
                <ul>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook07.png" alt="싱가포르 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">싱가포르 대학 상담</span>
                                <p>국립대, 사립대, 예술대 통합상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook08.png" alt="서울 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">서울 대학 상담</span>
                                <p>국립대, 사립대, 전공별 상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook09.png" alt="도쿄 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">도쿄 대학 상담</span>
                                <p>국립대, 사립대, 국제학생 상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook10.png" alt="런던 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">런던 대학 상담</span>
                                <p>국립대, 사립대, 국제학생 상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook11.png" alt="뉴욕 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">뉴욕 대학 상담</span>
                                <p>국립대, 사립대, 대인관계 상담</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebook12.png" alt="시드니 대학 상담">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">시드니 대학 상담</span>
                                <p>국립대, 사립대, 심리 상담</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection class_area ci sec">
        <div class="container">
            <div class="ms title_area class">
                <span>몽선생 수속 서비스 LIST 안내서</span>
            </div>
            <div class="ebook_list pcd">
                <ul>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebookpcd01.png" alt="싱가포르 사립대 서비스 상세내역">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">
                                    싱가포르 사립대 <br/>
                                    서비스 상세내역
                                </span>
                                <p>미국</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebookpcd02.png" alt="싱가포르 국립대 서비스 상세내역">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">
                                    싱가포르 국립대 <br/>
                                    서비스 상세내역
                                </span>
                                <p>싱가포르</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebookpcd03.png" alt="싱가포르 예술대 서비스 상세내역">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">
                                    싱가포르 예술대 <br/>
                                    서비스 상세내역
                                </span>
                                <p>싱가포르</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebookpcd04.png" alt="말레이시아 대학 서비스 상세내역">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">
                                    말레이시아 대학<br/>
                                    서비스 상세내역
                                </span>
                                <p>말레이시아</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebookpcd05.png" alt="말레이시아 국제학교 서비스 상세내역">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">
                                    말레이시아 국제학교 <br/>
                                    서비스 상세내역
                                </span>
                                <p>말레이시아</p>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_ebookpcd06.png" alt="미국대학 서비스 상세내역">
                        </div>
                        <div class="text_area">
                            <a href="#none">
                                <span class="title">
                                    미국대학 서비스 상세내역
                                </span>
                                <p>미국</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="msection ebook_form">
        <div class="container">
            <div class="frame-1">
                <span class="free-registration">무료 접수 신청</span >
                <span class="slogan-related-to-catalog">카달로그와 관련된<br/>슬로건이 들어갑니다.</span >
            </div>
            <div class="frame-2">
                <span class="personal-info">개인정보</span>
                <div class="frame-3">
                    <div class="frame-4">
                        <input type="text" class="inp" placeholder="성함을 입력해주세요.">
                    </div>
                    <div class="frame-5">
                        <input type="text" class="inp" placeholder="전화번호를 - 없이 입력해주세요.">
                    </div>
                    <div class="frame-6">
                        <input type="text" class="inp" placeholder="이메일을 입력해주세요.">
                    </div>
                    <div class="frame-7">
                        <textarea class="inp" placeholder="문의사항을 입력해주세요."></textarea>
                    </div>
                </div>
                <div class="frame-8">
                    <div class="frame-9">
                        <div class="frame-a">
                            <div class="rectangle"></div>
                            <span class="personal-info-agreement">개인정보 수집 및 이용안내 동의</span >
                        </div>
                        <a href="#none" class="content-view">내용 보기</a>
                    </div>
                    <div class="btn">
                        <div class="frame-b">
                            <button type="button" class="catalog-request">카달로그 신청</ㅠ>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>