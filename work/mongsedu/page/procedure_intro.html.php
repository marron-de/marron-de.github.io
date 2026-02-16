<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;
?>


<div class="sub-page page-procedure">
	<div class="banner_area ver2 procedure long">
        <div class="container" data-aos="fade-up">
			<div class="banner">
				<a href="<?php echo G5_URL ?>/page/?pid=procedure_banner" class="link">
					<div class="bgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_ban_bg.jpg" alt="" class="pc img">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_ban_bg_mob.jpg" alt="" class="tablet img">
					</div>
					<div class="txtbox">
						<p class="sub">교직원들이 만든 <br class="tablet">전문적인 교육업체</p>
						<p class="tit">
							몽선생의 컨설팅은  <br class="tablet">
							<span class="color">이런점이 달라요!</span>
						</p>
					</div>
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_ban_img.png" alt="" class="pc img">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_ban_img_mob.png" alt="" class="tablet img">
					</div>
				</a>
			</div>
        </div>
    </div>

    <div class="link_area">
        <div class="container swiper link_swiper" data-gappc="10" data-gapmob="16" data-aos="fade-up">
            <div class="swiper-wrapper procedure_link">
				<a href="" class="link swiper-slide">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_tab_icon1.png" alt="" class="icon">
						<span class="count">1</span>
					</div>
					<p class="tit">말레이시아 국제학교</p>
				</a>
				<a href="" class="link swiper-slide">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_tab_icon2.png" alt="" class="icon">
						<span class="count">2</span>
					</div>
					<p class="tit">싱가포르 국제학교</p>
				</a>
				<a href="" class="link swiper-slide">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_tab_icon3.png" alt="" class="icon">
						<span class="count">3</span>
					</div>
					<p class="tit">싱가포르 국립대</p>
				</a>
				<a href="" class="link swiper-slide">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_tab_icon4.png" alt="" class="icon">
						<span class="count">4</span>
					</div>
					<p class="tit">싱가포르 사립대</p>
				</a>
				<a href="" class="link swiper-slide">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_tab_icon5.png" alt="" class="icon">
						<span class="count">5</span>
					</div>
					<p class="tit">싱가포르 예술대</p>
				</a>
				<a href="" class="link swiper-slide">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_tab_icon6.png" alt="" class="icon">
					</div>
					<p class="tit">말레이시아 사립대</p>
				</a>
				<a href="" class="link swiper-slide">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_tab_icon7.png" alt="" class="icon">
					</div>
					<p class="tit">말라야 국립대</p>
				</a>
				<a href="" class="link swiper-slide">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_tab_icon8.png" alt="" class="icon">
					</div>
					<p class="tit">홍콩 대학</p>
				</a>
				<a href="" class="link swiper-slide">
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/procedure_tab_icon9.png" alt="" class="icon">
					</div>
					<p class="tit">UC 계열 주립대</p>
				</a>
            </div>
			<div class="swiper-scrollbar scrollbar"></div>
        </div>
    </div>

    <div class="msection counsel_area tabs hover_effect pro_sec1">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area green between">
				<div class="title">
					<span class="tit">국제학교 <span class="color1">입학/수속 서비스</span></span>
				</div>
                <div class="tab">
                    <ul class="tab_tit">
                        <li><a href="#" class="show" id="tab-11">말레이시아</a></li>
                        <li><a href="#" id="tab-12">싱가포르</a></li>
                        <li><a href="#" id="tab-13">베트남/태국</a></li>
                    </ul>
                </div>
            </div>
			<div class="counsel_list tabs_cont ver2">
                <ul class="panel">
                    <li id="content-11">
                        <ul>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail03'">
                                <div class="img_area">
                                    <p class="nation">수수료 0원</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure01.jpg" alt="ZERO 무료 수속">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color1">유학원 수수료 ZERO</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">국제학교 무료수속</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국제학교</p>
                                        <span class="title">비용 0원! ZERO 무료 수속</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail02'">
                                <div class="img_area">
                                    <p class="nation">수속 서비스</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure03.jpg" alt="입학 수속 서비스">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color3">입학수속 서비스</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">명문국제학교</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>1티어 명문 국제학교</p>
                                        <span class="title">입학 수속 서비스</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail05'">
                                <div class="img_area">
                                    <p class="nation">현지 서비스</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure02.jpg" alt="현지 학교/거주지 답사">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color2">현지 지사장 동행</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">답사 프로그램</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국제학교</p>
                                        <span class="title">현지 학교/거주지 답사</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail01'">
                                <div class="img_area">
                                    <p class="nation">현지 서비스</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure04.jpg" alt="초기정착 서비스">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color2">1달 관리</span>
											<div class="flagbox">
												<img  src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="" class="flag">
											</div>
										</div>
										<p class="title">초기정착 서비스</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국제학교</p>
                                        <span class="title">초기정착 서비스</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail04'">
                                <div class="img_area">
                                    <p class="nation">입학시험 대비</p>
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_procedure05.jpg" alt="국제학교 입학시험 대비반">
									<div class="img_bottom2">
										<div class="top">
											<span class="tag color4">국제학교</span>
										</div>
										<p class="title">입학시험 대비반</p>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>입학시험 커리큘럼</p>
                                        <span class="title">국제학교 입학시험 대비반</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="content-12">
                        <ul>
						</ul>
					</li>
                    <li id="content-13">
                        <ul>
						</ul>
					</li>
                </ul>
			</div>
        </div>
    </div>

    <div class="msection counsel_area ci hover_effect pro_sec2">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area green">
				<div class="title">
					<span class="tit">아시아대학 <span class="color1">입학수속/컨설팅</span></span>
				</div>
            </div>
            <div class="counsel_list procedure asia">
                <ul class="panel">
                    <li>
                        <ul>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail21'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln01.jpg" alt="무료 수속서비스">
									<div class="img_txtbox">
										<p class="sub">교직원 출신 관리</p>
										<p class="tit">
											<span class="color color1">싱가포르 사립대</span><br>
											무료 입학수속
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>싱가포르 사립대</p>
                                        <span class="title">무료 수속서비스</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail22'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln02.jpg" alt="수속서비스 안내">
									<div class="img_txtbox">
										<p class="sub">국내 유일! 대표사무소</p>
										<p class="tit">
											<span class="color color2">싱가포르 예술대</span><br>
											입학 컨설팅
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>싱가포르 예술대</p>
                                        <span class="title">무료수속&입학컨설팅</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail23'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln03.jpg" alt="NUS 출신 관리! 입학 컨설팅">
									<div class="img_txtbox">
										<p class="sub">NUS 출신 관리!</p>
										<p class="tit">
											<span class="color color3">싱가포르 국립대</span><br>
											입학 컨설팅
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포르">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>싱가포르 국립대</p>
                                        <span class="title">입학 컨설팅</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail24'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln04.jpg" alt="홍콩대학 입학 컨설팅 안내">
									<div class="img_txtbox">
										<p class="sub">HKU 의대생 관리</p>
										<p class="tit">
											<span class="color color4">홍콩대학</span><br>
											입학컨설팅
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="홍콩">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>홍콩대학</p>
                                        <span class="title">입학 컨설팅</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail25'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln05.jpg" alt="무료 입학 수속 서비스">
									<div class="img_txtbox">
										<p class="sub">교직원 출신 관리</p>
										<p class="tit">
											<span class="color color5">말레이시아 사립대</span><br>
											무료 입학수속
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 사립대</p>
                                        <span class="title">무료 수속서비스</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail26'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln06.jpg" alt="무료 입학 수속 서비스">
									<div class="img_txtbox">
										<p class="sub">말레이시아의 서울대</p>
										<p class="tit">
											<span class="color color6">말레이시아 국립대</span><br>
											입학 컨설팅
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>말레이시아 국립대</p>
                                        <span class="title">입학 컨설팅</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail27'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln07.jpg" alt="모나쉬대학 입학 수속 서비스">
									<div class="img_txtbox">
										<p class="tit">
											<span class="color color7">호주 모나쉬<br>말레이시아 캠퍼스</span><br>
											입학수속
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_malay.svg" alt="말레이시아">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>호주 모나쉬대학</p>
                                        <span class="title">무료수속&비자수속</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail28'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln08.jpg" alt="한국 글로벌 캠퍼스 입학 컨설팅">
									<div class="img_txtbox">
										<p class="tit">
											<span class="color color8">송도<br>글로벌 캠퍼스</span><br>
											입학 컨설팅
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="한국">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>송도 글로벌캠퍼스</p>
                                        <span class="title">입학컨설팅</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail29'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln09.jpg" alt="송도,서강 글로벌캠퍼스 수속 서비스 안내">
									<div class="img_txtbox">
										<p class="tit">
											<span class="color color9">
												서강 <br>
												글로벌 패스웨이
											</span><br>
											무료 입학수속
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="한국">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>서강 글로벌 패스웨이</p>
                                        <span class="title">무료 수속서비스</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=procedure_detail30'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_counseln10.jpg" alt="송도,서강 글로벌캠퍼스 수속 서비스 안내">
									<div class="img_txtbox">
										<p class="sub bk">한국 특례입학</p>
										<p class="tit bk">
											<span class="color color10">3특/12특</span><br>
											한국 대학 특례입학
										</p>
									</div>
                                    <img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="한국">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p>한국 대학교</p>
                                        <span class="title">특례 입학컨설팅</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection counsel_area sec pro_sec3 hover_effect">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area">
				<div class="title">
					<span class="tit">미국+아시아 <span class="color1">입학수속/컨설팅</span></span>
				</div>
            </div>
            <div class="counsel_list ver3 procedure s4">
                <ul class="panel">
                    <li>
                        <ul class="mentor_list">
                            <li>
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb2_procedure01.jpg" alt="한국에서 미국대학 편입준비">
									<div class="img_txtbox">
										<p class="tit">
											<span class="color gra1">한국에서</span><br>
											<span class="color gra2">미국대학 편입준비</span>
										</p>
										<p class="sub">서강 글로벌 캠퍼스</p>
									</div>
									<div class="img_bottom3">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="한국">
										</div>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">한국에서 미국대학 편입준비</span>
										<div class="tagbox">
											<p class="tag">한국</p>
										</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb2_procedure02.jpg" alt="UC버클리 출신 관리하는 입학컨설팅">
									<div class="img_txtbox">
										<p class="tit">
											<span class="color gra3">
												버클리 출신 <br class="tablet">
												직접 관리
											</span>
										</p>
										<p class="sub">UC대학 관리형 컨설팅</p>
									</div>
									<div class="img_bottom3">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="미국">
										</div>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">UC버클리 출신 관리하는 입학컨설팅</span>
										<div class="tagbox">
											<p class="tag">미국</p>
										</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb2_procedure03.jpg" alt="패스웨이 과정으로 미국대학 쉽게가기">
									<div class="img_txtbox">
										<p class="tit">
											<span class="color gra4">패스웨이<span class="white">로</span></span><br>
											<span class="mob_color1">미국대학</span> 쉽게가기
										</p>
										<p class="sub">낮은 내신점수? 걱정 NO</p>
									</div>
									<div class="img_bottom3">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="미국">
										</div>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">패스웨이 과정으로 미국대학 쉽게가기</span>
										<div class="tagbox">
											<p class="tag">미국</p>
										</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb2_procedure04.jpg" alt="국내 내신으로 미국 TOP100대학 입학" class="pc">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb2_procedure04_m.jpg" alt="국내 내신으로 미국 TOP100대학 입학" class="tablet">
									<div class="img_txtbox ver2">
										<p class="tag">너도 갈 수 있어!</p>
										<p class="sub mob_color2">내신 · 수능 반영 되니까!</p>
										<p class="tit">
											<span class="color gra5">미국 탑 100 대학</span>
										</p>
									</div>
									<div class="img_bottom3">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="미국">
										</div>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">국내 내신으로 미국 TOP 100 대학 입학</span>
										<div class="tagbox">
											<p class="tag">미국</p>
										</div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb2_procedure05.jpg" alt="미국+싱가포르 2개국 입학 컨설팅">
									<div class="img_txtbox ver3">
										<p class="sub">미국·아시아 대학 동시준비</p>
										<p class="tit">
											<span class="color gra6">프리미엄 합격 컨설팅</span>
										</p>
									</div>
									<div class="img_bottom3">
										<div class="flagbox">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="미국">
											<img class="flag" src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_singapore.svg" alt="싱가포드">
										</div>
									</div>
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <span class="title">미국+싱가포르 2개국 입학 컨설팅</span>
										<div class="tagbox">
											<p class="tag">미국</p>
										</div>
                                    </a>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

	<div class="msection class_area tabs main pro_sec4">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area red" id="row-4">
				<div class="title">
					<span class="tit">
						유학준비에 필요한 수업! <br class="tablet">
						<span class="color1">몽선생이 준비했어요!</span> 
					 </span>
				</div>
            </div>
            <div class="class_list s4 big swiper tab_swiper" data-gappc="12" data-gapmob="10">
                <ul class="panel swiper-wrapper">
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail04'" class="swiper-slide">
						<div class="text_area">
							<p class="proc"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수속하기"> 유학CLASS</p>
							<span class="title">
								국제학교 입학시험<br/>
								테스트 대비반
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class01.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class01_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail01'" class="swiper-slide">
						<div class="text_area">
							<p class="proc"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수속하기"> 유학CLASS</p>
							<span class="title">
								2개월 완성!<br/>
								듀오링고 실전반
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class02.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class02_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail08'" class="swiper-slide">
						<div class="text_area">
							<p class="proc"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수속하기"> 유학CLASS</p>
							<span class="title">
								원어민 1:1과외<br/>
								영어 기초문법완성
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class03.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class03_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail07'" class="swiper-slide">
						<div class="text_area">
							<p class="proc"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수속하기"> 유학CLASS</p>
							<span class="title">
								해외대학 미리준비<br/>
								전공이론&에세이반
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class04.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class04_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
					<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail05'" class="swiper-slide">
						<div class="text_area">
							<p class="class"><img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_class.svg" alt="수업듣기"> 유학CLASS</p>
							<span class="title">
								IELTS 과외<br/>
								6.0 목표 달성반
							</span>
						</div>
						<div class="img_area">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class05.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img pc">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thum_class05_mob.jpg" alt="UC버클리 출신 관리하는 입학컨설팅" class="img tablet">
						</div>
					</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection faq_area pro_sec5">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area">
                <span><b>FAQ</b> 자주 묻는 질문</span>
            </div>
            <div class="faq-box">
                <ul class="faq_list">
                    <li>
                        <div class="question">무료수속 서비스는 유학원 비용이 0원인가요?</div>
                        <div class="answer">네 맞습니다. 무료 수속서비스는 저희 몽선생에 어떠한 비용을 납부하지 않고 학교 입학 수속을 보다 편리하게 받을 수 있습니다. 학비와 기타 비용은 모두 동일하기 때문에, 혼자서 어렵게 할 필요 없이 무료 수속서비스를 맡기는 것이 좋습니다.</div>
                    </li>
                    <li>
                        <div class="question">비용 없이 무료수속을 신청하면 어떤 서비스를 받을 수 있나요?</div>
                        <div class="answer">학교 선택부터 입학 절차까지 전 과정에 대한 올인원 지원 서비스를 받을 수 있습니다. 학생에게 맞는 학교·전공 매칭, 필요한 서류 안내, 원서 작성 지원, 그리고 출국 후 현지 정착 가이드까지 유학 준비의 시작부터 정착 단계까지 모든 과정을 무료로 도와드립니다.</div>
                    </li>
                    <li>
                        <div class="question">대학 입학 컨설팅은 어떤 내용이 포함되어 있나요?</div>
                        <div class="answer">입학 컨설팅은 세계 최상위권 명문대를 목표로 할 때 제공되는 전문 맞춤 전략 서비스입니다. 경쟁률이 높은 대학·전공에 맞춘 에세이 코칭, 포트폴리오 지도, 합격 전략 설계 등이 포함되어정밀한 준비가 필요한 학생에게 적합합니다.</div>
                    </li>
                    <li>
                        <div class="question">국제학교 답사 프로그램은 아무 때나 신청할 수 있나요?</div>
                        <div class="answer">국제학교 답사는 학교와 일정을 조율해야 하기 때문에, 최소 2~3주 전에는 연락 주셔야 희망하는 날짜에 최대한 맞춰볼 수 있습니다.</div>
                    </li>
                    <li>
                        <div class="question">국제학교 유료수속과 무료수속의 차이점이 무엇인가요?</div>
                        <div class="answer">협력된 국제학교의 경우, 학교가 대신 유학원 수수료를 납부해 주기 때문에 수속하는 부모님들께 따로 유학원 비용 청구가 되지 않습니다. 다만, 일부 명문 국제학교의 경우에는 학교가 납부해주는 비용이 없기 때문에 유료수속으로 진행됩니다.</div>
                    </li>
                    <li>
                        <div class="question">수속을 맡기게 되면 어떤식으로 관리받게 되나요?</div>
                        <div class="answer">현지 학교 경험이 풍부한 담당 실장님 배정되게 되고, 이 후 1:1 관리를 원칙으로 하고 있으며 카카오톡을 통해 실시간 질의응답을 답변해주고 기타 수속 진행사항을 주간 간격으로 보고하게 됩니다.</div>
                    </li>
                    <li>
                        <div class="question">예술대 무료수속과 입학컨설팅의 차이점은 무엇인가요?</div>
                        <div class="answer">무료수속은 유학원에 비용을 납부하지 않고 서류안내, 원서접수 및 학교 행정을 보다 쉽고 간편하게 맡길 수 있으며 입학 컨설팅의 경우 포트폴리오 작품구성/관리, 인터뷰, 에세이 등의 모든 입학준비사항을 케어받을 수 있는 서비스 입니다.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>