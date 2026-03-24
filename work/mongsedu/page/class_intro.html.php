<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;
?>


<div class="sub-page page-class">
	<div class="banner_area ver2 class long">
        <div class="container" data-aos="fade-up">
			<div class="banner">
				<a href="<?php echo G5_URL ?>/page/?pid=class_banner" class="link">
					<div class="bgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/class_ban_bg.jpg" alt="" class="pc img">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/class_ban_bg_mob.jpg" alt="" class="tablet img">
					</div>
					<div class="txtbox">
						<p class="sub">검증된 선생님을 매칭해요</p>
						<p class="tit">
							유학 준비 걱정 No!  <br class="tablet">
							<span class="color">완벽한 학습 제공</span>
						</p>
					</div>
					<div class="imgbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/class_ban_img.png" alt="" class="pc img">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/class_ban_img_mob.png" alt="" class="tablet img">
					</div>
				</a>
			</div>
        </div>
    </div>
    
    <div class="msection class_area tabs">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area class flex_ver" id="row-1">
                <div class="tab">
                    <ul class="tab_tit ver2">
                        <li><a href="#" class="show" id="tab-1">클래스 보기</a></li>
                        <li><a href="#" id="tab-2">커리큘럼</a></li>
                        <li><a href="#" id="tab-3">수업 비용</a></li>
                        <!-- <li><a href="#" id="tab-4">선생님</a></li> -->
                    </ul>
                </div>
				<a href="https://pf.kakao.com/_fxmxmWV" class="kakao_btn" target="_blank">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_kakao.png" alt="" class="icon">
					<span class="txt pc">빠른 상담</span>
					<span class="txt tablet">몽선생 카카오톡 상담 바로가기</span>
				</a>
            </div>
            <div class="counsel_list tabs_cont class">
                <ul class="panel">
                    <li id="content-1">
                        <ul>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail04'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl01_1.jpg" alt="5강이면 끝! 국제학교 시험대비반">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <p class="best">BEST</p>
                                            <p class="type">체험반</p>
                                            <p class="type">정규반</p>
                                        </div>
                                        <p class="red">CAT4, MAP 테스트 준비</p>
                                        <span class="title">국제학교 입학시험 대비반</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl02_1.jpg" alt="2개월 완성반 듀오링고 DET 소규모 수업">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <p class="best">BEST</p>
                                            <p class="type">
												<span class="pc">영어공인점수</span>
												<span class="tablet">영어공인</span>
											</p>
                                            <p class="type">소규모</p>
                                        </div>
                                        <p class="red">원어민 소규모수업</p>
                                        <span class="title">2개월 완성! 듀오링고 DET 온라인 강습반</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail06'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl03_1.jpg" alt="학점관리 미리하기! 해외대학 전공 체험반">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <p class="best">BEST</p>
                                            <p class="type">
												<span class="pc">영어수업</span>
												<span class="tablet">영어</span>
											</p>
                                            <p class="type">
												<span class="pc">1:1수업</span>
												<span class="tablet">1:1</span>
											</p>
                                        </div>
                                        <p class="red">원어민 선생님관리</p>
                                        <span class="title">1달안에 잡아주는 영어 기초 훈련반</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail02'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl07_1.jpg" alt="하루 30분의 기적, 원어민 화상영어">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <p class="best">BEST</p>
                                            <p class="type">
												<span class="pc">전공이론</span>
												<span class="tablet">이론</span>
											</p>
                                            <p class="type">과제연습</p>
                                        </div>
                                        <p class="red">대학 1학년 실전연습</p>
                                        <span class="title">학점관리 준비! 해외대학 전공 예습반</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail03'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl08_1.jpg" alt="1달안에 잡아주는 영어 기초 훈련반">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <p class="best">BEST</p>
                                            <p class="type">
												<span class="pc">온라인수업</span>
												<span class="tablet">온라인</span>
											</p>
                                            <p class="type">
												<span class="pc">1:1관리</span>
												<span class="tablet">1:1</span>
											</p>
                                        </div>
                                        <p class="red">졸업생 직접 강의</p>
                                        <span class="title">완벽하게 준비하는 포트폴리오 (작품/실기)</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail07'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl06_1.jpg" alt="IB 고득점자의 1:1 맞춤 과외">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <p class="best">BEST</p>
                                            <!-- <p class="type">발표수업</p> -->
                                            <p class="type">소규모</p>
                                        </div>
                                        <p class="red">실전 과제/시험 준비</p>
                                        <span class="title">미리 준비하는 대학 토론/에세이</span>
                                    </a>
                                </div>
                            </li>
							<li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail08'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl05_1.jpg" alt="졸업생과 함께 예술대 포트폴리오">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <p class="best">BEST</p>
                                            <p class="type">
												<span class="pc">1:1수업</span>
												<span class="tablet">1:1</span>
											</p>
                                            <p class="type">2달완성</p>
                                        </div>
                                        <p class="red">주3회로 유학생활 준비</p>
                                        <span class="title">해외생활 실전 스피킹 연습</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail05'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl04_1.jpg" alt="대학 수업 미리 준비, 에세이 & 토론 집중반">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <!-- <p class="best">BEST</p> -->
                                            <p class="type">
												<span class="pc">영어공인점수</span>
												<span class="tablet">영어공인</span>
											</p>
                                            <p class="type">소규모</p>
                                        </div>
                                        <p class="red">고득점 강사 밀착관리</p>
                                        <span class="title">IELTS 6.0 목표! 단기 속성 목표반</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail09'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl09_1.jpg" alt="1달안에 잡아주는 영어 기초 훈련반">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <!-- <p class="best">BEST</p> -->
                                            <p class="type">1:1</p>
                                            <p class="type">개별학습지도</p>
                                        </div>
                                        <p class="red">고득점 선생님들의</p>
                                        <span class="title">국제학교 중/고등 학과목 밀착과외</span>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail10'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl10_1.jpg" alt="1달안에 잡아주는 영어 기초 훈련반">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <div class="badge">
                                            <p class="best">BEST</p>
                                            <p class="type">대학수업지도</p>
                                            <!-- <p class="type">과제/시험풀이</p> -->
                                        </div>
                                        <p class="red">검증된 선배들 매칭</p>
                                        <span class="title">졸업걱정 NO! 해외대학 학과목 밀착과외!</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="content-2" style="display:none;">
                        <ul class="curri">
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail04'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl01_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
											<p class="tag">#1:1 클래스</p>
											<p class="tag">#영어</p>
										</div>
                                        <span class="title">
                                            5강이면 끝!<br/>
                                            국제학교 시험대비반
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                말레이시아, 싱가포르 등  해외 국제학교 입학에 필요한 테스트를 사전에 준비할 수 있는 모의 테스트 중심의 실전 완성 프로그램 입니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl02_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#2개월</p>
                                        	<p class="tag">#온라인</p>
										</div>
                                        <span class="title">
                                            2개월 완성!<br/>
                                            듀오링고 DET 온라인 강습반
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                최대 6명 정원, 2개월 과정으로 DET 전문 원어민 선생님이 상세하게 영어로 풀어주는 DET 시험대비 전문 과정입니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail06'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl03_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#기초</p>
                                        	<p class="tag">#영어</p>
										</div>
                                        <span class="title">
                                            원어민과 한달만에 끝내는<br/>
                                            영어 기초문법
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                영어 기초가 부족한 학생들을 위해 1:1 맞춤 수업을 제공하여 문법·어휘·스피킹을 단계적으로 학습 할 수 있는 프로그램입니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail05'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl04_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#2개월</p>
                                        	<p class="tag">#온라인</p>
										</div>
                                        <span class="title">
                                            IELTS <br/>
                                            소규모 과외수업
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                최대 4명 정원, 3개월 과정으로 IELTS 6.0 목표달성을 위해 검증된 선생님과 소규모 과외로 꼼꼼한 학습을 제공합니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail08'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl05_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#1:1클래스</p>
                                        	<p class="tag">#영어</p>
										</div>
                                        <span class="title">
                                            하루 30분의 기적<br/>
                                            원어민 화상영어
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                최대 4명 정원, 3개월 과정으로 IELTS 6.0 목표달성을 위해 검증된 선생님과 소규모 과외로 꼼꼼한 학습을 제공합니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail07'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl06_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#에세이</p>
                                        	<p class="tag">#토론</p>
										</div>
                                        <span class="title">
                                            대학수업 미리 준비<br/>
                                            에세이 & 토론 집중반
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail02'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl07_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#3개월</p>
                                        	<p class="tag">#대학전공</p>
										</div>
                                        <span class="title">
                                            학점관리 미리하기!<br/>
                                            해외대학 전공 체험반
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail03'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl08_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#예술대</p>
                                        	<p class="tag">#포트폴리오</p>
										</div>
                                        <span class="title">
                                            졸업생과 함께 만드는<br/>
                                            예술대 포트폴리오
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail09'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl09_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#1:1클래스</p>
                                        	<p class="tag">#개별학습지도</p>
										</div>
                                        <span class="title">
                                            IB 고득점자의<br/>
                                            1:1 맞춤 과외
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail10'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl10_2.jpg" alt="">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
										<div class="tagbox">
                                        	<p class="tag">#1:1클래스</p>
                                        	<p class="tag">#개별학습지도</p>
										</div>
                                        <span class="title">
                                            졸업걱정 NO! <br/>
                                            해외대학 학과목 밀착과외!
                                        </span>
                                        <div class="descript">
                                            <span>강의 소개</span>
                                            <p>
                                                직접 작성한 에세이, 이력서, 이메일 등 영문서를 업로드하고 수업에서 교정받을 수 있습니다.
                                            </p>
                                        </div>
                                        <div class="btn_area sb np">
                                            <p><span class="pc">커리큘럼</span> 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li id="content-3" style="display:none;">
                        <ul class="curri price">
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail04_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl01_2.jpg" alt="국제학교 입학 시험 대비반!">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">
                                        국제학교 입학 시험 대비반<br/>
                                        자체문제(CAT4,MAP) 문제집 제공
                                    </span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span> 1:1 수업 (50분)</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <span>1회 체험반 수업권</span>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩100,000</p>
                                            <p class="now">80,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>20%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>80,000원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail01_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl02_2.jpg" alt="2개월 16시간 완성! 듀오링고 DET 실전반 수업">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">
                                        듀오링고 DET 실전반<br/>
                                        2개월 16시간 완성 (추가로 8시간 무상제공)
                                    </span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span>
                                                소규모 수업(60분)
                                            </span>
										</li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <span>16회 수업권</span>
                                            <p>수강기간 8주 (2개월)</p>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩1,150,000</p>
                                            <p class="now">980,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>10%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>61,250원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail06_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl03_2.jpg" alt="개별 맞춤! 1:1 영어기초반">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">개별 맞춤! 1:1 영어기초반</span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span>
                                                1:1 수업 (60분)
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <p>&nbsp;</p>
                                            <span>12회 수강권</span>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩1,000.000</p>
                                            <p class="now">800,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>20%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>66,666원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail05_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl04_2.jpg" alt="3개월 60시간 완성! 아이엘츠 소규모 과외 수업">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">
                                        IELTS 소규모 과외<br/>
                                        3개월  60시간 완성(온오프)
                                    </span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span>
                                                오프라인 수업 
                                            </span>
                                            <p>30시간</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <span>30회 수업권</span>
                                            <p>수강기간 12주 (3개월)</p>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩3,900,000</p>
                                            <p class="now">3,000,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>30%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>100,000원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail08_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl05_2.jpg" alt="2개월 24시간 완성! 1:1 영어회화(유학영어) 수업">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">1:1 영어회화(유학실전스피킹)</span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span>
                                                1:1 수업(60분)
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <span>24회 수업권</span>
                                            <p>수강기간 8주 (2개월)</p>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩1,320,000</p>
                                            <p class="now">1,200,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>10%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>50,000원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail07_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl06_2.jpg" alt="개별 맞춤! 1:1 영어기초반">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">개별 맞춤! 1:1 영어기초반</span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span>
                                                1:1수업 (회당 60분)
                                            </span>
                                            <p>
                                                12회
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <span>12회 수업권</span>
                                            <p>수강기간 4주 (1개월)</p>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩1,000,000</p>
                                            <p class="now">800,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>20%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>66,666원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail02_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl07_2.jpg" alt="2개월 24시간 완성! / 해외대학 대비반 패키지 수업">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">
                                        해외대학 대비반 패키지<br/>
                                        2개월 24시간 완성
                                    </span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span>
                                                소규모 수업(60~90분)
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <span>24회 수업권</span>
                                            <p>수강기간 8주 (2개월)</p>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩1,540,000</p>
                                            <p class="now">1,400,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>10%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>58,333원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail03_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl08_2.jpg" alt="2개월 24시간 완성! / 해외대학 대비반 패키지 수업">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">졸업생이 함께 만들어주는 포트폴리오 강습</span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span>
                                                1:1 수업(60분)
                                            </span>
                                            <p>
                                                12회
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <span>1개월 수업권</span>
                                            <p>수강횟수 8회</p>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩980,000</p>
                                            <p class="now">850,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>10%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>106,250원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail09_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl09_2.jpg" alt="2개월 24시간 완성! / 해외대학 대비반 패키지 수업">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">졸업생이 함께 만들어주는 포트폴리오 강습</span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span>
                                                1:1 수업(60분)
                                            </span>
                                            <p>
                                                12회
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <span>1개월 수업권</span>
                                            <p>수강횟수 8회</p>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩980,000</p>
                                            <p class="now">850,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>10%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>106,250원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail10_01'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_classl10_2.jpg" alt="2개월 24시간 완성! / 해외대학 대비반 패키지 수업">
                                </div>
                                <div class="benefit_area">
                                    <span class="title">학점관리 밀착과외! 선배와 1:1수업</span>
                                    <ul>
                                        <li>
											<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_classono.svg" alt="">
                                            <span>
                                                1:1 수업(60분)
                                            </span>
                                            <p>
                                                16회
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text_area">
                                    <div class="cost_info">
                                        <div class="info">
                                            <span>20회 수업권</span>
                                            <p>수강기간 1과목 (2개월)</p>
                                        </div>
                                        <div class="cost">
                                            <p class="old">₩2,000,000</p>
                                            <p class="now">1,500,000원</p>
                                        </div>
                                        <div class="final_cost">
											<div class="sale">
												<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_sale_c.svg" alt="">
                                            	<p>25%</p>
											</div>
                                            <div class="price">
												<span class="count">1/회</span>
                                                <b>93,750원</b>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="btn_area">
									<p>수업문의</p>
									<img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
								</div>
                            </li>
                        </ul>
                    </li>
                    <li id="content-4" style="display:none;">
                        <ul class="mentor">
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail01_02'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_clsmentor01.png" alt="듀오링고">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p class="red">듀오링고</p>
                                        <span class="title">Amy 원어민 선생님</span>
                                        <div class="btn_area sb np">
                                            <p>선생님 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail02_02'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_clsmentor02.png" alt="해외대학 대비반">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p class="red">해외대학 대비반</p>
                                        <span class="title">김소연 선생님</span>
                                        <div class="btn_area sb np">
                                            <p>선생님 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail03_02'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_mentor03.png" alt="조수호 멘토">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p class="red">라셀 예술대 그래픽</p>
                                        <span class="title">조수호 선생님</span>
                                        <div class="btn_area sb np">
                                            <p>선생님 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail04_02'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_mentor04.png" alt="Iya 선생님">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p class="red">국제학교 입학 테스트 대비반</p>
                                        <span class="title">Iya 선생님</span>
                                        <div class="btn_area sb np">
                                            <p>선생님 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail05_02'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_mentor05.png" alt="Raphael 선생님">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p class="red">IELTS 고득점 강사</p>
                                        <span class="title">Raphael 선생님</span>
                                        <div class="btn_area sb np">
                                            <p>선생님 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li onclick="location.href='<?php echo G5_URL ?>/page/?pid=class_detail06_02'">
                                <div class="img_area">
                                    <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/thumb_mentor06.png" alt="Rua 선생님">
                                </div>
                                <div class="text_area">
                                    <a href="#none">
                                        <p class="red">1:1 영어회화(유학영어)</p>
                                        <span class="title">Rua 선생님</span>
                                        <div class="btn_area sb np">
                                            <p>선생님 자세히보기</p>
                                            <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/ico_go_red.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="class_mid_banner">
        <div class="container" data-aos="fade-up">
            <div class="text_area">
				<div class="titbox">
					<p class="tit">
						<span class="txt">몽선생 클래스 매칭의 장점 4가지!</span>
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_matching.png" alt="" class="icon">
					</p>
					<p class="desc">
						누적관리 1만명, 지금까지 쌓아온 경험과 노하우로<br/>
						유학생에게 필요한 수업을 제공합니다.
					</p>
				</div>
                <ul>
                    <li class="red">
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/check_red.svg" alt="">
                        <span>직접 검증한 선생님 매칭!</span>
                        <p>
                            현지 대학 출신·유학 경험이 있는 
                            검증된 선생님이 직접 지도하며,
                            학생 목표에  적합한 선생님을 매칭합니다.
                        </p>
                    </li>
                    <li class="blue">
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/check_blue.svg" alt="">
                        <span>유학에 꼭 필요한 맞춤수업</span>
                        <p>
                            국제학교 입학시험 대비반과
                            해외대학 수업까지, 유학수업에 꼭 맞춘
                            커리큘럼과 강의를 제공합니다.
                        </p>
                    </li>
                    <li class="red">
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/check_red.svg" alt="">
                        <span>학습 관리자의 1:1관리</span>
                        <p>매 수업마다 학습 진도와 과제를 점검하고, 약점과 부족한 부분을 실시간으로 보완하며, 목표 대학까지 계획대로 도달하도록 끝까지 관리합니다.</p>
                    </li>
                    <li class="blue">
                        <img src="<?php echo EYOOM_THEME_URL; ?>/image/sub/check_blue.svg" alt="">
                        <span>실제 후기가 증명!</span>
                        <p>높은 만족도의 리얼 후기와 합격·성적향상 사례가 쌓여 있으며, 결과로 수업의 가치를 증명합니다.</p>
                    </li>
                </ul>
            </div>
            <div class="img_area">
				<div class="mob_txtbox">
					<p class="tit">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_matching.png" alt="" class="icon">
						<span class="txt">몽선생 클래스 수업의 장점 4가지!</span>
					</p>
					<p class="desc">
						누적관리 1만명, 지금까지 쌓아온 경험과 노하우로<br/>
						유학생에게 필요한 수업을 제공합니다.
					</p>
				</div>
				<div class="phonebox">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/phone_gif.gif" alt="" class="gif">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/phone_img.png" alt="" class="phone">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/phone_deco.png" alt="" class="deco">
				</div>
            </div>
        </div>
    </div>

    <div class="msection faq_area">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area red notab">
				<div class="title">
					<p class="tit">
                		<span class="color3">FAQ</span> 자주 묻는 질문
					</p>
				</div>
            </div>
            <div class="faq-box">
                <ul class="faq_list">
                    <li>
                        <div class="question">CLASS는 어떻게 진행되나요?</div>
                        <div class="answer">모든 클래스는 온라인 수업 ZOOM을 통해 실시간으로 진행됩니다.</div>
                    </li>
                    <li>
                        <div class="question">선생님들은 몽선생에서 직접 매칭하나요?</div>
                        <div class="answer">네 맞습니다! 오래된 경력과 해외 경력이 있는 외국인 선생님을 직접 매칭합니다.</div>
                    </li>
                    <li>
                        <div class="question">1:1 수업의 경우 스케줄 조정이 가능한가요?</div>
                        <div class="answer">최대한 학생의 시간을 맞추어 진행되어 개별 스케줄을 따로 계획할 수 있습니다.</div>
                    </li>
                    <li>
                        <div class="question">학습관리자의 역할은 무엇인가요?</div>
                        <div class="answer">수업 후에 과제 체크, 학습방향 점검 및 전제적인 학습을 관리해주고 있습니다.</div>
                    </li>
                    <li>
                        <div class="question">수업 문의를 빠르게 할 수 있는 방법이 있나요?</div>
                        <div class="answer">010 8114 9003 으로 연락주시면 학습담당자와 소통할 수 있어요.</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>