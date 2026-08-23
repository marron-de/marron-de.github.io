<?php
include_once('../project/common.php');
include_once('../project/lib/latest.lib.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>명학❤️수진의 모바일청첩장</title>


    <!-- Seo -->
    <meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="canonical" href="http://marronde.com/sujin/" />
    <meta name="title" content="명학❤️수진의 모바일청첩장" />
    <meta name="description" content="두 사람의 특별한 날, 함께해 주시길 바랍니다." />
    <meta name="keyword" content="모바일청첩장" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="명학❤️수진의 모바일청첩장" />
    <meta property="og:description" content="두 사람의 특별한 날, 함께해 주시길 바랍니다." />
    <meta property="og:image" content="http://marronde.com/sujin/img/og_image.jpg" />
    <meta property="og:site_name" content="명학❤️수진의 모바일청첩장" />
    <meta property="og:url" content="http://marronde.com/sujin/" />


    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


    <!-- Jquery -->
    <script src="js/jquery-3.4.1.min.js"></script>


    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
	
	
    <!-- Font -->
    <link rel="stylesheet" href="css/fonts.css" />
    <link href="https://marron-de.github.io/font/Pretendard/Pretendard.css" rel="stylesheet" />
    <link href="https://marron-de.github.io/font/Paperlogy/Paperlogy.css" rel="stylesheet" />


    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />

</head>


<body>
    <div class="wrap">

        <!-- header -->
        <header class="header" id="header">
            <div class="h_inner">
                <div class="volume_btn">
                    <span class="icon"></span>
                </div>
            </div>
        </header>

        <!-- top button -->
        <div class="top_btnbox">
            <div class="top_btn"></div>
        </div>

        <!-- page background -->
        <div class="page_bgbox">
            <div class="bg_imgbox">
                <img src="img/page_bg.png" alt="" class="bg_img">
            </div>
        </div>

        <!-- bgm -->
        <audio id="bgm" loop >
            <source src="bgm/bgm.mp3" type="audio/mp3" />
        </audio>
		<p style="display: none;">출처 : https://www.youtube.com/watch?v=_YdFyzU8ryA</p>

        <!-- section -->
        <div class="container">
            <section class="main_section ms1">
                <div class="inner">
					<div class="topbox">
						<img src="img/ms1_top_deco.png" alt="" class="deco" data-aos="fade" data-aos-anchor=".ms1" data-aos-delay="800">
						<img src="img/ms1_top_img.png" alt="" class="ribbon"  data-aos="fade" data-aos-delay="400" data-aos-anchor=".ms1">
						<p class="deco_txt" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".ms1">Our Wedding Day</p>
						<p class="date" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".ms1">
							12.19
						</p>						
					</div>
					<div class="imgbox">
						<img src="img/ms1_img.png" alt="" class="img" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".ms1">
						<img src="img/ms1_img_deco.png" alt="" class="deco" data-aos="fade" data-aos-delay="800" data-aos-anchor=".ms1">
					</div>
					<div class="desbox" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".ms1">
						<p class="desc">12월 19일 토요일 오전 11시 30분</p>
						<p class="tit">W웨딩 목화웨딩컨벤션 15층, 벨리스홀</p>
					</div>
                </div>
            </section>

            <section class="main_section ms2">
                <div class="inner">
                    <div class="ms2_contbox" data-aos="fade-up">
                        <div class="m_titbox column" data-aos="fade-up">
                            <p class="m_txt1">invitation</p>
                            <p class="m_txt2">소중한 분들을 초대합니다</p>
                        </div>
                        <p class="greetings" data-aos="fade-up">
							함께하는 아홉 번째 겨울에 저희 결혼합니다.
							<br><br>
							어떤 날은 처음 만나 떨렸던 그날처럼. <br>
							어떤 날은 편안하고 오래된 친구처럼. <br>
							모든 순간 서로 아끼고 사랑하겠습니다.
							<br><br>
							"우리"라는 이름의 첫 시작. <br>
							설렘의 순간에 소중한 분들을 초대합니다.
                        </p>
						<div class="name_box" data-aos="fade-up">
                            <div class="name_row">
                                <span class="name">이동기</span>
                                <span class="dot"></span>
                                <span class="name">박종엽</span>
                                <span class="small">의 &nbsp;장남</span>
                                <span class="name">이명학</span>
                            </div>
                            <div class="name_row">
                                <span class="name">조만제</span>
                                <span class="dot"></span>
                                <span class="name">정세정</span>
                                <span class="small">의 &nbsp;장녀</span>
                                <span class="name">조수진</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="main_section ms3">
                <div class="inner">
                    <div class="m_titbox column" data-aos="fade-up">
                        <p class="m_txt1">Date</p>
                        <p class="m_txt2">날짜를 확인하세요</p>
                    </div>
                    <div class="ms3_contbox" data-aos="fade-up">
                        <div class="calendarbox">
                            <div class="titbox">
                                <p class="date">2026.12.29</p>
                                <p class="time">토요일 오전 11시 30분</p>
                            </div>
                            <div class="calendar">
                                <div class="week_box">
                                    <div class="week">S</div>
                                    <div class="week">M</div>
                                    <div class="week">T</div>
                                    <div class="week">W</div>
                                    <div class="week">T</div>
                                    <div class="week">F</div>
                                    <div class="week">S</div>
                                </div>
                                <div class="day_box">
                                    <div class="day_row">
                                        <div class="day"></div>
                                        <div class="day"></div>
                                        <div class="day">1</div>
                                        <div class="day">2</div>
                                        <div class="day">3</div>
                                        <div class="day">4</div>
                                        <div class="day">5</div>
                                    </div>
                                    <div class="day_row">
                                        <div class="day">6</div>
                                        <div class="day">7</div>
                                        <div class="day">8</div>
                                        <div class="day">9</div>
                                        <div class="day">10</div>
                                        <div class="day">11</div>
                                        <div class="day">12</div>
                                    </div>
                                    <div class="day_row">
                                        <div class="day">13</div>
                                        <div class="day">14</div>
                                        <div class="day">15</div>
                                        <div class="day">16</div>
                                        <div class="day">17</div>
                                        <div class="day">18</div>
                                        <div class="day point">
											<span class="num">19</span>
										</div>
                                    </div>
                                    <div class="day_row">
                                        <div class="day">20</div>
                                        <div class="day">21</div>
                                        <div class="day">22</div>
                                        <div class="day">23</div>
                                        <div class="day">24</div>
                                        <div class="day">25</div>
                                        <div class="day">26</div>
                                    </div>
                                    <div class="day_row">
                                        <div class="day">27</div>
                                        <div class="day">28</div>
                                        <div class="day">29</div>
                                        <div class="day">30</div>
                                        <div class="day">31</div>
                                        <div class="day"></div>
                                        <div class="day"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="counterbox" data-aos="fade-up">
                            <div class="titbox">
                                <div class="word">Days</div>
                                <div class="word">Hour</div>
                                <div class="word">Min</div>
                                <div class="word">Sec</div>
                            </div>
                            <div class="numberbox">
                                <div class="number days" id="days">00</div>
                                <div class="division">:</div>
                                <div class="number hours" id="hours">00</div>
                                <div class="division">:</div>
                                <div class="number minutes" id="minutes">00</div>
                                <div class="division">:</div>
                                <div class="number seconds" id="seconds">00</div>
                            </div>
                            <div class="msgbox">
                                <p class="msg before on">
                                    명학, 수진의 결혼식이 <span class="day">00일</span> 남았습니다
                                </p>
                                <p class="msg after">
                                    명학, 수진의 결혼식이 <span class="day">00일</span> 지났습니다
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<section class="main_section ms4">
				<div class="inner">
					<div class="imgbox" data-aos="fade-up">
						<img src="img/ms4_img.jpg" alt="">
					</div>
					<p class="txt" data-aos="fade-up">
						사람이 온다는 건 실은 어마어마한 일이다. <br>
						그는 그의 과거와 현재와 그리고 <br>
						그의 미래와 함께 오기 때문이다. <br>
						한 사람의 일생이 오기 때문이다. 
						<br><br>
						<span class="bold">
							- 정현종, '방문객' -
						</span>
					</p>
				</div>
			</section>

            <section class="main_section ms5">
                <div class="inner">
                        <div class="m_titbox column" data-aos="fade-up">
                        <p class="m_txt1">Gallery</p>
                        <p class="m_txt2">추억을 함께 나누어요</p>
                    </div>
                    <div class="ms5_contbox" data-aos="fade-up">
                        <div class="swiper ms5_swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="img/pic_1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_4.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_5.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="img/pic_6.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_7.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_8.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_9.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_10.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="img/pic_11.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_12.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_13.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_14.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="img/pic_15.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_16.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_17.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_18.jpg" alt="">
                                </div>								
                            </div>
                            <div class="swiper-button-prev prev_btn">
                                <img src="img/swiper_prev.png" alt="">
                            </div>
                            <div class="swiper-button-next next_btn">
                                <img src="img/swiper_next.png" alt="">
                            </div>
                            <div class="swiper-pagination pagination"></div>
                        </div>
                        <div class="swiper ms5_thum">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="img/pic_1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_4.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_5.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="img/pic_6.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_7.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_8.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_9.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_10.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="img/pic_11.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_12.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_13.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_14.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_15.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="img/pic_16.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_17.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_18.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="main_section ms6">
                <div class="inner">
                    <div class="m_titbox column" data-aos="fade-up">
                        <p class="m_txt1">Location</p>
                        <p class="m_txt2">오시는 길</p>
                    </div>
                    <div class="ms6_contbox">
                        <div class="detail_box" data-aos="fade-up">
                            <p class="title">
                               	W웨딩 목화웨딩컨벤션 15층, 벨리스홀
                            </p>
                            <p class="address">
								부산광역시 연제구 중앙대로 1125
                            </p>
                            <a href="tel:+051-714-2243" class="call">
                                <span class="icon"></span>
                                <span class="number">051-714-2243</span>
                            </a>
                        </div>
						<div class="map_box" data-aos="fade-up">
							<img src="img/map_img.png" alt="" class="img">
						</div>
                        <div class="navi_box" data-aos="fade-up">
                            <div class="item">
                                <a href="https://naver.me/5BcjMgrU" class="link" target="_blank">
                                    <img src="img/ico_navermap.png" alt="" class="icon">
                                    <span class="txt">네이버</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://tmap.life/37e867ac" class="link" target="_blank">
                                    <img src="img/ico_tmap.png" alt="" class="icon">
                                    <span class="txt">티맵</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://place.map.kakao.com/24484800" class="link" target="_blank">
                                    <img src="img/ico_kakaomap.png" alt="" class="icon">
                                    <span class="txt">카카오</span>
                                </a>
                            </div>
                        </div>
                        <div class="info_box" data-aos="fade-up">
                            <div class="item">
                                <div class="tit">버스</div>
                                <div class="descbox">
                                    <p class="desc">
                                        연산역 정류장 하차 (도보 1분) <br>
										51, 86, 87, 99, 100-1번 이용
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tit">지하철</div>
                                <div class="descbox">
                                    <p class="desc">
                                        연산역 1,3호선 7번 출구에서 171m
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tit">자가용</div>
                                <div class="descbox">
                                    <p class="desc">
										건물 내 3시간 무료주차 <br>
										건물 외 2시간 무료주차
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="main_section ms7">
                <div class="inner">
                    <div class="m_titbox column" data-aos="fade-up">
                        <p class="m_txt1">Account</p>
                        <p class="m_txt2">축하의 마음 전하기</p>
                    </div>
                    <p class="info_txt" data-aos="fade-up">
                        축하의 마음을 담아 마음을 전해 주세요 <br>
    					복사 버튼을 클릭해 계좌번호를 복사할 수 있습니다
                    </p>
                    <ul id="account_box" class="ms7_contbox" data-aos="fade-up">
                        <li class="show">
                            <div href="#none" class="acc_tit">
                                <span class="txt">신랑측 계좌번호</span>
                                <span class="arrow"></span>
                            </div>
                            <ul class="account_info">
                                <li>
                                    <div class="info">
                                        <p class="account">국민은행 993253-03-357</p>
                                        <p class="name">이명학</p>
                                    </div>
                                    <div class="copy_btn" data-copy="국민은행 993253-03-357">
                                        <span class="icon"></span>
                                        <span class="txt">복사</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <p class="account">신한은행 110-459-540909</p>
                                        <p class="name">이동기</p>
                                    </div>
                                    <div class="copy_btn" data-copy="신한은행 110-459-540909">
                                        <span class="icon"></span>
                                        <span class="txt">복사</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <p class="account">부산은행 054-12-054129-5</p>
                                        <p class="name">박종엽</p>
                                    </div>
                                    <div class="copy_btn" data-copy="부산은행 054-12-054129-5">
                                        <span class="icon"></span>
                                        <span class="txt">복사</span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="show">
                            <div href="#none" class="acc_tit">
                                <span class="txt">신부측 계좌번호</span>
                                <span class="arrow"></span>
                            </div>
                            <ul class="account_info">
                                <li>
                                    <div class="info">
                                        <p class="account">카카오뱅크 3333-10-5892282</p>
                                        <p class="name">조수진</p>
                                    </div>
                                    <div class="copy_btn" data-copy="카카오뱅크 3333-10-5892282">
                                        <span class="icon"></span>
                                        <span class="txt">복사</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <p class="account">농협은행 924-02-057513</p>
                                        <p class="name">조만제</p>
                                    </div>
                                    <div class="copy_btn" data-copy="농협은행 924-02-057513">
                                        <span class="icon"></span>
                                        <span class="txt">복사</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <p class="account">부산은행 010-7703-1947</p>
                                        <p class="name">정세정</p>
                                    </div>
                                    <div class="copy_btn" data-copy="부산은행 010-7703-1947">
                                        <span class="icon"></span>
                                        <span class="txt">복사</span>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="main_section ms8">
                <div class="inner">
                    <div class="m_titbox column" data-aos="fade-up">
                        <p class="m_txt1" data-aos="fade">Guestbook</p>
                        <p class="m_txt2" data-aos="fade">소중한 한마디 남겨주세요</p>
                    </div>

                    <?php echo latest("sujinist", "sujin", 600, 99);?>

                </div>
            </section>

        </div>

		<!-- footer -->
        <footer class="footer">
            <div class="f_inner">
                <div id="kakao_share" class="kakao_share">
                    <div class="icon"></div>
                    <div class="txt">카카오톡으로 초대장 보내기</div>
                </div>
                <p class="copyright">© 2026 marronde All Rights Reserved.</p>
            </div>
        </footer>

        <!-- gallery modal -->
        <div class="modal gall_modal">
            <div class="modal_box">
                <div class="modal_close white"></div>
                <div class="swiper gall_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="img/pic_1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_4.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_5.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/pic_6.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_7.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_8.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_9.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_10.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/pic_11.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_12.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_13.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_14.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_15.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/pic_16.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_17.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_18.jpg" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-prev prev_btn">
                        <img src="img/swiper_prev.png" alt="">
                    </div>
                    <div class="swiper-button-next next_btn">
                        <img src="img/swiper_next.png" alt="">
                    </div>
                    <div class="swiper-pagination pagination"></div>
                </div>
            </div>
        </div>

        <!-- write modal -->
        <div class="modal write_modal">
            <div class="modal_box">
                <div class="modal_head">
                    <p class="modal_title">축하글 남기기</p>
                    <div class="modal_close"></div>
                </div>
                <div class="modal_content">
                    <?php echo latest("sujinwrite", "sujin", 10, 99);?>
                </div>
            </div>
        </div>

    </div>


    <!-- kakao -->
    <script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>

    <!-- JS -->
    <script src="js/script.js"></script>
</body>

</html>