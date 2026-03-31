<?php
include_once('../project/common.php');
include_once('../project/lib/latest.lib.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>❤️서율의 생일파티에 초대합니다❤️</title>


    <!-- Seo -->
    <meta name="viewport" content="width=360, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="canonical" href="http://marronde.com/seoyul/" />
    <meta name="title" content="❤️서율의 생일파티에 초대합니다❤️" />
    <meta name="description" content="작은 기적이 큰 사랑이 된 날, 함께해 주시길 바랍니다." />
    <meta name="keyword" content="모바일청첩장" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="❤️서율의 생일파티에 초대합니다❤️" />
    <meta property="og:description" content="작은 기적이 큰 사랑이 된 날, 함께해 주시길 바랍니다." />
    <meta property="og:image" content="http://marronde.com/seoyul/img/og_image.jpg" />
    <meta property="og:site_name" content="❤️서율의 생일파티에 초대합니다❤️" />
    <meta property="og:url" content="http://marronde.com/seoyul/" />


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
						<p class="deco_txt" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".ms1">Save the Date</p>
						<p class="date" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".ms1">
							04.25
						</p>						
					</div>
					<div class="imgbox">
						<img src="img/ms1_img.png" alt="" class="img" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".ms1">
						<img src="img/ms1_img_deco.png" alt="" class="deco" data-aos="fade" data-aos-delay="800" data-aos-anchor=".ms1">
					</div>
					<p class="title" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".ms1">
						서율의 생일파티에 초대합니다
					</p>
					<div class="desbox" data-aos="fade-up" data-aos-delay="400" data-aos-anchor=".ms1">
						<p class="desc">2026년 04월 25일 토요일 오후 12시</p>
						<p class="desc bold">양산 트리폰즈</p>
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
							따스한 봄날, <br>
							선물처럼 찾아온 서율이
							<br><br>
							저희 곁에 온 서율이가 <br>
							어느덧 첫 생일을 맞이했습니다.
							<br><br>
							방긋방긋 미소가 예쁜 서율이의 <br>
							소중한 첫걸음을 오셔서 <br>
							함께 축하해 주시고 응원해 주세요.
                        </p>
                    </div>
                </div>
            </section>

            <section class="main_section ms3">
                <div class="inner">
                        <div class="m_titbox column" data-aos="fade-up">
                        <p class="m_txt1">Gallery</p>
                        <p class="m_txt2">추억을 함께 나누어요</p>
                    </div>
                    <div class="ms3_contbox" data-aos="fade-up">
                        <div class="swiper ms3_swiper">
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
                                <div class="swiper-slide">
                                    <img src="img/pic_19.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_20.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="img/pic_21.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_22.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_23.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_24.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_25.jpg" alt="">
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
                        <div class="swiper ms3_thum">
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
                                <div class="swiper-slide">
                                    <img src="img/pic_19.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_20.jpg" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="img/pic_21.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_22.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_23.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_24.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="img/pic_25.jpg" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination pagination"></div>
                        </div>
                    </div>
                </div>
            </section>

			<div class="main_section ms_banner">
				<div class="inner">
					<div class="vidbox" data-aos="fade-up">
						<video muted playsinline loop preload="auto" class="video">
							<source src="video/banner_vid1.mp4#t=0.001" type="video/mp4">
						</video>
						<button type="button" class="play_btn"></button>
					</div>
					<div class="txtbox" data-aos="fade-up">
						<span class="bold">반짝이는 첫 번째 생일</span>
						<br><br>
						이 세상에 온 지 365일,<br>
						매일 새롭게 빛나 온 서율이와 함께<br>
						특별한 하루를 나누고 싶어요 ✨
						<br><br>
						소중한 분들의 자리를 기다립니다
					</div>
				</div>
			</div>

            <section class="main_section ms4">
                <div class="inner">
                    <div class="m_titbox column" data-aos="fade-up">
                        <p class="m_txt1">Date</p>
                        <p class="m_txt2">날짜를 확인하세요</p>
                    </div>
                    <div class="ms4_contbox" data-aos="fade-up">
                        <div class="calendarbox">
                            <div class="titbox">
                                <p class="date">2026.04.25</p>
                                <p class="time">토요일 오후 12시</p>
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
                                        <div class="day"></div>
                                        <div class="day">1</div>
                                        <div class="day">2</div>
                                        <div class="day">3</div>
                                        <div class="day">4</div>
                                    </div>
                                    <div class="day_row">
                                        <div class="day">5</div>
                                        <div class="day">6</div>
                                        <div class="day">7</div>
                                        <div class="day">8</div>
                                        <div class="day">9</div>
                                        <div class="day">10</div>
                                        <div class="day">11</div>
                                    </div>
                                    <div class="day_row">
                                        <div class="day">12</div>
                                        <div class="day">13</div>
                                        <div class="day">14</div>
                                        <div class="day">15</div>
                                        <div class="day">16</div>
                                        <div class="day">17</div>
                                        <div class="day">18</div>
                                    </div>
                                    <div class="day_row">
                                        <div class="day">19</div>
                                        <div class="day">20</div>
                                        <div class="day">21</div>
                                        <div class="day">22</div>
                                        <div class="day">23</div>
                                        <div class="day">24</div>
                                        <div class="day point">
											<span class="num">25</span>
										</div>
                                    </div>
                                    <div class="day_row">
                                        <div class="day">26</div>
                                        <div class="day">27</div>
                                        <div class="day">28</div>
                                        <div class="day">29</div>
                                        <div class="day">30</div>
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
                                    서율이의 첫번째 생일이 <span class="day">00일</span> 남았습니다
                                </p>
                                <p class="msg after">
                                    서율이의 첫번째 생일이 <span class="day">00일</span> 지났습니다
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="main_section ms5">
                <div class="inner">
                    <div class="m_titbox column" data-aos="fade-up">
                        <p class="m_txt1">Location</p>
                        <p class="m_txt2">오시는 길</p>
                    </div>
                    <div class="ms5_contbox">
                        <div class="detail_box" data-aos="fade-up">
                            <p class="title">
                               	양산 트리폰즈 (그린하우스)
                            </p>
                            <p class="address">
								경남 양산시 하북면 삼감리 14
                            </p>
                            <a href="tel:+055-381-5308" class="call">
                                <span class="icon"></span>
                                <span class="number">055-381-5308</span>
                            </a>
                        </div>
						<div class="map_box" data-aos="fade-up">
							<img src="img/map_img.png" alt="" class="img">
						</div>
                        <div class="navi_box" data-aos="fade-up">
                            <div class="item">
                                <a href="https://naver.me/FoXAMclP" class="link" target="_blank">
                                    <img src="img/ico_navermap.png" alt="" class="icon">
                                    <span class="txt">네이버</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://tmap.life/fa64c783" class="link" target="_blank">
                                    <img src="img/ico_tmap.png" alt="" class="icon">
                                    <span class="txt">티맵</span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="https://place.map.kakao.com/2009642465" class="link" target="_blank">
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
                                        용연초등학교역 하차 (도보 17분)  <br>
										11번 버스, 12번 버스, 12-1번 버스 이용
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tit">택시</div>
                                <div class="descbox">
                                    <p class="desc">
                                        1호선 노포역 하차 후  택시 이용  <br>
										(약 25~30분 소요)
                                    </p>
                                    <p class="desc">
                                        2호선 양산역 하차 후  택시 이용  <br>
										(약 20~25분 소요)
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="tit">자가용</div>
                                <div class="descbox">
                                    <p class="desc">
										트리폰즈 주차장 이용 가능
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="main_section ms6">
                <div class="inner">
                    <div class="m_titbox column" data-aos="fade-up">
                        <p class="m_txt1">Contact</p>
                        <p class="m_txt2">참석 여부를 알려주세요</p>
                    </div>
                    <div class="ms6_contbox" data-aos="fade-up">
						<div class="contact_info">
							<div class="item">
								<span class="sub">아빠</span>
								<span class="tit">박시한</span>
								<div class="btnbox">
									<a href="tel:010-2598-9378" class="call_btn"></a>
									<a href="sms:010-2598-9378" class="msg_btn"></a>
								</div>
							</div>
							<div class="item">
								<span class="sub">엄마</span>
								<span class="tit">장민혜</span>
								<div class="btnbox">
									<a href="tel:010-3305-7951" class="call_btn"></a>
									<a href="sms:010-3305-7951" class="msg_btn"></a>
								</div>
							</div>
						</div>
                    </div>
                    <div class="ms6_banner">
						<div class="vidbox" data-aos="fade-up">
							<video muted playsinline loop preload="auto" class="video">
								<source src="video/banner_vid2.mp4#t=0.001" type="video/mp4">
							</video>
							<button type="button" class="play_btn"></button>
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
                                <span class="txt">계좌번호</span>
                                <span class="arrow"></span>
                            </div>
                            <ul class="account_info">
                                <li>
                                    <div class="info">
                                        <p class="account">농협은행 352-1456-0837-03</p>
                                        <p class="name">박시한</p>
                                    </div>
                                    <div class="copy_btn" data-copy="농협은행 352-1456-0837-03">
                                        <span class="icon"></span>
                                        <span class="txt">복사</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <p class="account">농협은행 352-2223-1363-13</p>
                                        <p class="name">장민혜</p>
                                    </div>
                                    <div class="copy_btn" data-copy="농협은행 352-2223-1363-13">
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

                    <?php echo latest("seoyulist", "seoyul", 600, 99);?>

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
                <p class="copyright">© 2026 Seoyul All Rights Reserved.</p>
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
                        <div class="swiper-slide">
                            <img src="img/pic_19.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_20.jpg" alt="">
                        </div>

                        <div class="swiper-slide">
                            <img src="img/pic_21.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_22.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_23.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_24.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="img/pic_25.jpg" alt="">
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
                    <?php echo latest("seoyulwrite", "seoyul", 10, 99);?>
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