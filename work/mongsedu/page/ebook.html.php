<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;

$catalogfrm_url = EYOOM_CORE_URL.'/page/proc/catalogfrm_send.php';
$ebookfrm_url = EYOOM_CORE_URL.'/page/proc/ebookfrm_send.php';

include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');

// 첫 번째 캡챠 (ebookfrm용)
$captcha_html  = captcha_html();
$captcha_js    = chk_captcha_js();


?>

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
						CLASS 수업 <br class="tablet">
						커리큘럼 / 전자북 <br>
						국가별 무료책자 신청
					</p>
				</div>
			</div>
        </div>
    </div>
    
    <div class="msection class_area ebook_sec1">
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
                    <li onclick="ebook_modal(2)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook02.jpg" alt="서울 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">해외대학 대비반 </span>
							<p>국립대, 사립대, 전공별 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(3)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook03.jpg" alt="도쿄 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">포트폴리오반 </span>
							<p>국립대, 사립대, 국제학생 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(4)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook04.jpg" alt="런던 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">영어기초훈련반</span>
							<p>국립대, 사립대, 직업 상담</p>
                        </div>
                    </li>
                    <li onclick="ebook_modal(5)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook05.jpg" alt="뉴욕 대학 상담">
                        </div>
                        <div class="text_area">
							<span class="title">국제학교대비반 </span>
							<p>국립대, 사립대, 대인관계 상담</p>
                        </div>
                    </li>
                    <li onclick="nocontent_modal()">
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

    <!-- <div class="msection ebook_area ebook_sec2">
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
    </div> -->

    <div class="msection class_area ebook_sec3">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area class">
				<p class="title">
					<span class="tit">국가별 유학정보 / 카달로그</span>
				</p>
            </div>
            <div class="ebook_list">
                <ul>
                    <li onclick="ebook2_modal(1)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook2_1.jpg" alt="유학서비스 책자">
                        </div>
                        <div class="text_area">
							<span class="title">유학서비스 책자</span>
							<p>SIM, PSB, KAPAN, JCU 등</p>
                        </div>
                    </li>
                    <li onclick="ebook2_modal(2)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook2_2.jpg" alt="말레이시아 국제학교 책자">
                        </div>
                        <div class="text_area">
							<span class="title">말레이시아 국제학교 책자</span>
							<p>40여개 학교정보, MAP</p>
                        </div>
                    </li>
                    <li onclick="ebook2_modal(3)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook2_3.jpg" alt="싱가포르 대학 책자">
                        </div>
                        <div class="text_area">
							<span class="title">싱가포르 대학 책자</span>
							<p>국립대, 사립대, 예술대 통합본</p>
                        </div>
                    </li>
                    <li onclick="ebook2_modal(4)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook2_4.jpg" alt="말레이시아 대학 책자">
                        </div>
                        <div class="text_area">
							<span class="title">말레이시아 대학 책자</span>
							<p>사립대, 국립대 통합본</p>
                        </div>
                    </li>
                    <li onclick="ebook2_modal(5)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook2_5.jpg" alt="홍콩 대학 책자">
                        </div>
                        <div class="text_area">
							<span class="title">홍콩 대학 책자</span>
							<p>3대 공립대 통합본</p>
						</div>
                    </li>
                    <li onclick="ebook2_modal(6)">
                        <div class="img_area">
                            <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/thumb_ebook2_6.jpg" alt="미국 대학 책자">
                        </div>
                        <div class="text_area">
							<span class="title">미국 대학 책자</span>
							<p>주요 TOP 100대학</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="msection class_area ci sec ebook_sec4">
        <div class="container" data-aos="fade-up">
            <div class="ms title_area class">
				<p class="title">
					<span class="tit">몽선생 수속 서비스 LIST 안내서</span>
				</p>
            </div>
            <div class="ebook_list2">
				 <ul>
                    <li onclick="nocontent_modal()">
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
                    <li onclick="nocontent_modal()">
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
                    <li onclick="nocontent_modal()">
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
                    <li onclick="nocontent_modal()">
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
                    <li onclick="nocontent_modal()">
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
                    <li onclick="nocontent_modal()">
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

    <div class="msection ebook_form ebook_sec5">
        <div class="container">
            <div class="frm_titbox" data-aos="fade-up">
                <p class="sub">무료 접수 신청</p >
                <p class="tit">몽선생의 유학정보 <br class="tablet">카달로그를 받아보고 싶다면?</p >
            </div>
            <div class="frm_form">
				<form name="ebookfrm" id="ebookfrm" action="<?php echo $ebookfrm_url; ?>" method="POST" enctype="multipart/form-data" class="frm" data-aos="fade-up">
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
									<input type="text" name="frm_tel" class="input_text" placeholder="연락처" required>							
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
							<div class="form_item">
								<div class="vc-captcha">
									<?php echo $captcha_html; ?>
								</div>
							</div>
						</div>
						<div class="form_btnbox flex last">
							<div class="term_box">
								<div class="check_box">
									<input type="checkbox" name="frm_agree" class="input_check" id="frm_agree" required>
									<label for="frm_agree" class="label_check">개인정보수집 및 이용안내 동의</label>
								</div>
								<button type="button" class="term_view" onclick="privacy_modal()">내용보기</button>
							</div>
							<button type="button" class="form_btn submit_btn" onclick="formSubmit_modal()">카달로그 신청하기</button>
						</div>	
					
					</div>
				</form>
            </div>
        </div>
    </div>
</div>

<div id="ebook_modal1" class="cm_modal detail_modal ebook_modal ver2">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box">
			<div class="titbox">
				<p class="title">
					<span class="tit">듀오링고 DET 실전반!</span>
					<span class="small">원어민 소규모 수업구성</span>
				</p>
			</div>
			<div class="tblbox">
				<div class="item">
					<div class="top">
						<p class="txt">수업방식</p>
					</div>
					<div class="bottom">
						<p class="txt">ZOOM <br class="tablet">온라인 수업</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">커리큘럼 과정</p>
					</div>
					<div class="bottom">
						<p class="txt">2개월</p>
						<p class="small">(24강)</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">총 강습시간</p>
					</div>
					<div class="bottom">
						<p class="txt">24시간</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">수업 정원</p>
					</div>
					<div class="bottom">
						<p class="txt">소규모 그룹</p>
						<p class="small">(최대 6명)</p>
					</div>
				</div>
			</div>
			<div class="classbox">
				<p class="title">수업 목표</p>
				<div class="descbox">
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							원어민 수업 소규모 수업을 통해 집중력 높은 수업 제공
						</span>
					</p>
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							최신 기출 문제 풀이 중심 수업으로 시험에 대한 이해력 향상
						</span>
					</p>
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							기초부터 고급까지 학생 레벨에 맞춘 1:1 수업 추가 학습 가능
						</span>
					</p>
				</div>
			</div>
			<div class="note_box">
				<p class="note_txt">*원어민 선생님과 듀오링고 기출 문제를 집중적으로 풀고 단기간에 효과를 볼 수 있어요.</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA modal_close">닫기</button>
				<a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=qa" class="btn typeC">상담신청 후 리스트 받기</a>
			</div>
		</div>
	</div>
</div>

<div id="ebook_modal2" class="cm_modal detail_modal ebook_modal ver2">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box">
			<div class="titbox">
				<p class="title">
					<span class="tit">해외대학 수업 대비반</span>
					<span class="small">2개월 완성! 미리 학점대비</span>
				</p>
			</div>
			<div class="tblbox">
				<div class="item">
					<div class="top">
						<p class="txt">수업방식</p>
					</div>
					<div class="bottom">
						<p class="txt">ZOOM <br class="tablet">온라인 수업</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">커리큘럼 과정</p>
					</div>
					<div class="bottom">
						<p class="txt">2개월</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">총 강습횟수</p>
					</div>
					<div class="bottom">
						<p class="txt">24강</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">수업 정원</p>
					</div>
					<div class="bottom">
						<p class="txt">소규모 그룹</p>
						<p class="small">(최대 6명)</p>
					</div>
				</div>
			</div>
			<div class="classbox">
				<p class="title">수업 목표</p>
				<div class="descbox">
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							해외대학 1학년 4과목 미리 수강 (예습)
						</span>
					</p>
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							영어 토론, 에세이, 발표 능력을 체계적으로 훈련
						</span>
					</p>
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							상황별 영어 및 롤플레이를 통해 실제 대학 생활 적응과 커뮤니케이션 역량 강화
						</span>
					</p>
				</div>
			</div>
			<div class="note_box">
				<p class="note_txt">*영어가 완성되지 않은 예비 유학생을 위한, 실전 대학 수업 대비반 수업 입니다.</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA modal_close">닫기</button>
				<a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=qa" class="btn typeC">상담신청 후 리스트 받기</a>
			</div>
		</div>
	</div>
</div>

<div id="ebook_modal3" class="cm_modal detail_modal ebook_modal ver2">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box">
			<div class="titbox">
				<p class="title">
					<span class="tit">포트폴리오 합격반!</span>
					<span class="small">95% 이상의 합격률 달성</span>
				</p>
			</div>
			<div class="tblbox">
				<div class="item">
					<div class="top">
						<p class="txt">수업방식</p>
					</div>
					<div class="bottom">
						<p class="txt">ZOOM <br class="tablet">온라인 수업</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">커리큘럼 과정</p>
					</div>
					<div class="bottom">
						<p class="txt">월 8회</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">강습시간</p>
					</div>
					<div class="bottom">
						<p class="txt">60분</p>
						<p class="small">(1회당)</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">수업 정원</p>
					</div>
					<div class="bottom">
						<p class="txt">1:1 수업</p>
					</div>
				</div>
			</div>
			<div class="classbox">
				<p class="title">수업 목표</p>
				<div class="descbox">
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							합격률 95% 이상의 완벽한 포트폴리오 학습 제공
						</span>
					</p>
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							현지 졸업생 선생님들의 완벽한 노하우와 실습 능력 제공
						</span>
					</p>
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							최신 입학 조건 반영하여 전공별 핵심적인 작품 구성 
						</span>
					</p>
				</div>
			</div>
			<div class="note_box">
				<p class="note_txt">*그림과 전공 작품 모든 것을 빠르고 효과적으로 준비할 수 있는 프로그램 입니다.</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA modal_close">닫기</button>
				<a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=qa" class="btn typeC">상담신청 후 리스트 받기</a>
			</div>
		</div>
	</div>
</div>

<div id="ebook_modal4" class="cm_modal detail_modal ebook_modal ver2">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box">
			<div class="titbox">
				<p class="title">
					<span class="tit">영어 기초반 (1:1과외)</span>					
					<span class="small">기초부터 차근차근</span>
				</p>
			</div>
			<div class="tblbox">
				<div class="item">
					<div class="top">
						<p class="txt">수업방식</p>
					</div>
					<div class="bottom">
						<p class="txt">ZOOM <br class="tablet">온라인 수업</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">커리큘럼 과정</p>
					</div>
					<div class="bottom">
						<p class="txt">1개월</p>
						<p class="small">(12강)</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">총 강습시간</p>
					</div>
					<div class="bottom">
						<p class="txt">12시간</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">수업 정원</p>
					</div>
					<div class="bottom">
						<p class="txt">1:1 맞춤 수업</p>
					</div>
				</div>
			</div>
			<div class="classbox">
				<p class="title">수업 목표</p>
				<div class="descbox">
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							원어민 강사와의 1:1 수업을 통해 공인인증 시험과 유사한 환경을 경험하며, 자연스럽게 실전 감각과 문제 해결 능력 UP
						</span>
					</p>
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							시험에 자주 등장하는 문법 포인트를 중심으로 핵심 개념을 짚고, 실제 시험에 대비한 문장 구성 및 오류 수정 훈련을 반복훈련 
						</span>
					</p>
				</div>
			</div>
			<div class="note_box">
				<p class="note_txt">*레벨테스트를 통해, 영어 레벨을 확인하고 수강 기간을 맞춤으로 설정할 수 있어요.</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA modal_close">닫기</button>
				<a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=qa" class="btn typeC">상담신청 후 리스트 받기</a>
			</div>
		</div>
	</div>
</div>

<div id="ebook_modal5" class="cm_modal detail_modal ebook_modal ver2">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box">
			<div class="titbox">
				<p class="title">
					<span class="tit">국제학교 입학시험 대비반</span>
					<span class="small">체험반과 정규반 등록 가능</span>
				</p>
			</div>
			<div class="tblbox">
				<div class="item">
					<div class="top">
						<p class="txt">수업방식</p>
					</div>
					<div class="bottom">
						<p class="txt">ZOOM <br class="tablet">온라인 수업</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">커리큘럼 과정</p>
					</div>
					<div class="bottom">
						<p class="txt">1개월</p>
						<p class="small">(10강)</p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">총 강습시간</p>
					</div>
					<div class="bottom">
						<p class="txt">50분 <span class="small">(1회당)</span></p>
					</div>
				</div>
				<div class="item">
					<div class="top">
						<p class="txt">수업 정원</p>
					</div>
					<div class="bottom">
						<p class="txt">1:1 맞춤 수업</p>
					</div>
				</div>
			</div>
			<div class="classbox">
				<p class="title">수업 목표</p>
				<div class="descbox">
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							원어민 강사와의 1:1 수업을 통해 공인인증 시험과 유사한 환경을 경험하며, 자연스럽게 실전 감각과 문제 해결 능력 UP
						</span>
					</p>
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							시험에 자주 등장하는 문법 포인트를 중심으로 핵심 개념을 짚고, 실제 시험에 대비한 문장 구성 및 오류 수정 훈련을 반복훈련
						</span>
					</p>
					<p class="desc">
						<span class="icon"></span>
						<span class="txt">
							개인 스케줄과 시간관리가 될 수 있는 학습관리자 배정
						</span>
					</p>
				</div>
			</div>
			<div class="note_box">
				<p class="note_txt">*체험 클래스 1회를 통해 수업을 미리 확인하고 등록할 수 있어요.</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA modal_close">닫기</button>
				<a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=qa" class="btn typeC">상담신청 후 리스트 받기</a>
			</div>
		</div>
	</div>
</div>

<div id="ebook2_modal" class="cm_modal detail_modal ebook2_modal">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box">
			<div class="titbox">
				<p class="title">
					<span class="tit"></span>
					<span class="small"></span>
				</p>
			</div>			
			<div class="swiprbox">
				<div class="swiper ebook2_swiper ebook2_swiper1 on">
					<div class="swiper-wrapper">
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img1.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img2.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img3.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img4.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img5.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img6.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img7.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img8.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img9.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img10.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m1_img11.jpg" alt="" class="img">
						</div>
					</div>
					<div class="swiper-scrollbar scrollbar"></div>
				</div>		
				<div class="swiper ebook2_swiper ebook2_swiper2">
					<div class="swiper-wrapper">
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m2_img1.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m2_img2.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m2_img3.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m2_img4.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m2_img5.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m2_img6.jpg" alt="" class="img">
						</div>
					</div>
					<div class="swiper-scrollbar scrollbar"></div>
				</div>	
				<div class="swiper ebook2_swiper ebook2_swiper3">
					<div class="swiper-wrapper">
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m3_img1.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m3_img2.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m3_img3.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m3_img4.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m3_img5.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m3_img6.jpg" alt="" class="img">
						</div>
					</div>
					<div class="swiper-scrollbar scrollbar"></div>
				</div>	
				<div class="swiper ebook2_swiper ebook2_swiper4">
					<div class="swiper-wrapper">
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m4_img1.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m4_img2.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m4_img3.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m4_img4.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m4_img5.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m4_img6.jpg" alt="" class="img">
						</div>
					</div>
					<div class="swiper-scrollbar scrollbar"></div>
				</div>	
				<div class="swiper ebook2_swiper ebook2_swiper5">
					<div class="swiper-wrapper">
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img1.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img2.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img3.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img4.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img5.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img6.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img7.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img8.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img9.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img10.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img11.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img12.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img13.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img14.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img15.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img16.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img17.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img18.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m5_img19.jpg" alt="" class="img">
						</div>
					</div>
					<div class="swiper-scrollbar scrollbar"></div>
				</div>	
				<div class="swiper ebook2_swiper ebook2_swiper6">
					<div class="swiper-wrapper">
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img1.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img2.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img3.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img4.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img5.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img6.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img7.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img8.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img9.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img10.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img11.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img12.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img13.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img14.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img15.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img16.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img17.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img18.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img19.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img20.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img21.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img22.jpg" alt="" class="img">
						</div>
						<div class="swiper-slide item">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/eb2_m6_img23.jpg" alt="" class="img">
						</div>
					</div>
					<div class="swiper-scrollbar scrollbar"></div>
				</div>	
			</div>
			<form name="catalogform" id="catalogform" action="<?php echo $catalogfrm_url; ?>" method="POST" enctype="multipart/form-data" class="frm">
				<input type="hidden" name="frm_catalog" value="">
				<input type="text" name="hp_field" style="display:none !important" tabindex="-1" autocomplete="off" value="">
				<div class="form_wrap">
					<p class="form_note">*기재된 메일주소로 전체 카달로그를 보내드립니다.</p>
					<div class="form_box">
						<div class="form_item">
							<div class="input_box">
								<p class="label_text">
									이름<span class="required">*</span>
								</p>
								<input type="text" name="frm_name" class="input_text" placeholder="" required>							
							</div>
						</div>
						<div class="form_item">
							<div class="input_box">
								<p class="label_text">
									연락처<span class="required">*</span>
								</p>
								<input type="text" name="frm_tel" class="input_text" placeholder="-  없이 입력 숫자만 입력" required>							
							</div>
						</div>
						<div class="form_item">
							<div class="input_box">
								<p class="label_text">
									이메일<span class="required">*</span>
								</p>
								<input type="text" name="frm_email" class="input_text" placeholder="" required>
							</div>
						</div>
					</div>
				</div>
				<div class="form_btnbox">
					<div class="check_box">
						<input type="checkbox" name="frm_agree" class="input_check" id="ct1_agree" required>
						<label for="ct1_agree" class="label_check">개인정보수집 및 이용안내 동의</label>
					</div>
					<button type="button" class="term_view" onclick="privacy_modal()">내용보기</button>
				</div>					
			</form>
			<div class="btnbox">
				<button type="button" class="btn typeA modal_close">닫기</button>
				<button type="button" class="btn typeC" onclick="catalogSubmit_modal()">카달로그 신청</button>
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

<div class="cm_modal formSubmit_modal">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box btn_ver">
			<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/modal_check2.svg" alt="" class="modal_icon">
			<div class="modal_txtbox">
				<p class="modal_tit">카달로그를 신청할까요?</p>
				<p class="modal_desc">
					조금만 기기려주시면 <br>
					이메일로 카달로그를 보내드리겠습니다.
				</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA cm_modal_close">닫기</button>
				<button type="button" class="btn typeC" onclick="form_submit()">신청하기</button>
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

	/* 폼 제출 팝업 */
	function formSubmit_modal() {
		const form = $('#ebookfrm');
		const name    = form.find('[name="frm_name"]').val().trim();
		const tel     = form.find('[name="frm_tel"]').val().trim();
		const email   = form.find('[name="frm_email"]').val().trim();
		const content = form.find('[name="frm_content"]').val().trim();
		const agree   = form.find('[name="frm_agree"]').is(':checked');

		if (!name) {
			showToast('이름을 입력해주세요.', 'emoji1');
			form.find('[name="frm_name"]').focus();
			return;
		}
		if (!tel) {
			showToast('연락처를 입력해주세요.', 'emoji1');
			form.find('[name="frm_tel"]').focus();
			return;
		}
		if (!email) {
			showToast('이메일을 입력해주세요.', 'emoji1');
			form.find('[name="frm_email"]').focus();
			return;
		}
		if (!content) {
			showToast('문의사항을 입력해주세요.', 'emoji1');
			form.find('[name="frm_content"]').focus();
			return;
		}

		<?php echo $captcha_js; ?>

		if (!agree) {
			showToast('개인정보수집 및 이용안내에 동의해주세요.', 'emoji1');
			return;
		}
		
		$('body').addClass('hidden');
		$('.formSubmit_modal').addClass('show');
	}

	/* 폼 제출 */
	function form_submit() {
        const form = $('#ebookfrm');
        const name = form.find('[name="frm_name"]').val().trim();
        const tel  = form.find('[name="frm_tel"]').val().trim();
		
        if (!name || !tel) {
            showToast('입력 정보가 올바르지 않습니다.', 'emoji2');
            return false;
        }
		
        form.submit();
    }


	/* 카달로그 신청 폼 제출 */
	function catalogSubmit_modal() {
		const form = $('#catalogform');
		const name = form.find('[name="frm_name"]').val().trim();
		const tel = form.find('[name="frm_tel"]').val().trim();
		const email = form.find('[name="frm_email"]').val().trim();
		const agree = form.find('[name="frm_agree"]').is(':checked');
		
		if (form.find('[name="hp_field"]').val() !== '') {
			return; // 봇 차단, 조용히 막음
		}

		if (!name) {
			showToast('이름을 입력해주세요.', 'emoji1');
			form.find('[name="frm_name"]').focus();
			return;
		}
		if (!tel) {
			showToast('연락처를 입력해주세요.', 'emoji1');
			form.find('[name="frm_tel"]').focus();
			return;
		}
		if (!email) {
			showToast('이메일을 입력해주세요.', 'emoji1');
			form.find('[name="frm_email"]').focus();
			return;
		}

		if (!agree) {
			showToast('개인정보수집 및 이용안내에 동의해주세요.', 'emoji1');
			return;
		}

		form.submit();
	}

</script>