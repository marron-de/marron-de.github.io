<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;
?>


<div class="sub-page page-counsel prd">
	<div class="banner_area prd_top">
        <div class="container">
            <img class="mobile" src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdtop_m.png" alt="">
            <div class="text_area pc">
                <span>
                    오직 몽선생에서만<br/>
                    만날 수 있는 책임감 있는<br/>
                    유학서비스를 소개합니다.
                </span>
                <p>현지 거주 15년 경력자의 경험담 제공</p>
            </div>
            <div class="img_area pc">
                <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdtop.png" alt="">
            </div>
        </div>
    </div>

    <div class="prd_info">
        <div class="container">
            <div class="title_area">
                <span>
                    <b>업계 1위, 누적관리 1만명+</b><br>
                    현장 경험이 풍부한 몽선생 수속서비스
                </span>
            </div>
            <div class="prd_info_list">
                <ul>
                    <li>
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdbanner01.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdbanner02.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdbanner03.png" alt="">
                    </li>
                </ul>
            </div>
            <a href="" class="go btn">수속서비스 전체보기</a>
        </div>
    </div>

    <div class="prd_benefit">
        <div class="container">
            <div class="title_area">
                <span>
                    <b>이런 점은 확실히 다릅니다!</b><br>
                    몽선생의 3가지 차별화된 수속 서비스!
                </span>
            </div>
            <div class="prd_bnflist01">
                <ul>
                    <li>
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdbanner04.png" alt="">
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/txt_prdbanner04.png" alt="">
                    </li>
                    <li>
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdbanner05.png" alt="">
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/txt_prdbanner05.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="prd_service">
        <div class="container">
            <div class="title_area">
                <span>
                    국가마다 다른 입학 절차,<br>
                    몽선생은 국가별 담당 실장 체제로<br>
                    <b>1:1 맞춤 서비스를 제공합니다</b>
                </span>
            </div>
            <div class="swiper mvSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdbanner06.png"></div>
                    <div class="swiper-slide"><img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdbanner07.png"></div>
                    <div class="swiper-slide"><img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdbanner08.png"></div>
                </div>
            </div>
            <!-- Swiper JS -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
            <script>
                const mySwiper = new Swiper('.mvSwiper', {
                    // Other Swiper options...
                    slidesPerView: '1', // Allows slides to have different widths
                    centeredSlides: true, // This is the key for center mode
                    breakpoints: {
                        426: {
                        slidesPerView: 2,
                        },
                        769: {
                        slidesPerView: 3,
                        }
                    }
                });
            </script>
        </div>
    </div>

    <div class="prd_data">
         <div class="container">
            <div class="title_area">
                <span>
                    걱정하지 말고 맡겨주세요!<br/>
                    누적1만명, 최다 수속생 데이터가 증명합니다.
                </span>
                <p>
                    몽선생은 2015년 부터 많은 합격생을 배출하여 다양한 합격사례 데이터를 제공합니다. <br/>
                    학생의 학력, 성적 및 여러 상황과 조건에 맞는 최적화된 학교 선택이 가능합니다.
                </p>
            </div>
            <div class="img_area">
                <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/img_prdbanner09.png">
            </div>
         </div>
    </div>
</div>