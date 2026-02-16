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

    <div class="univ_info tabs ver2 swiper tab_swiper" data-index="0" data-gappc="0" data-gapmob="0">
        <ul class="container swiper-wrapper" data-aos="fade">
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info_intro">홈</a>
            </li>
            <li class="active swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info01">국제학교</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info02">해외대학</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=guidebook">가이드북</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=faq">자주 묻는 질문</a>
            </li>
            <li  class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_adv">학교 광고판</a>
            </li>
        </ul>
    </div>

    <div class="msection univ_info_list ci sec tabs">
		<div class="container" data-aos="fade-up">
            <div class="ms title_area" id="row-1">
				<div class="title">
					<span class="tit">국제학교</span>
				</div>
                <div class="tab swiper tab_swiper" data-gappc="16" data-gapmob="12">
                    <ul class="tab_tit swiper-wrapper">
                        <li class="swiper-slide"><a href="#" class="show" id="tab-11">전체보기</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-12">말레이시아</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-13">싱가포르</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-14">한국 비인가</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-15">한국 인가</a></li>
                        <li class="swiper-slide"><a href="#" id="tab-16">태국/베트남</a></li>
                    </ul>
                </div>
            </div>
            <div class="counsel_list tabs_cont">
                <ul class="panel">
                    <li id="content-11">
						<div class="univlist_wrap">
							<div class="univlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper univlist_swiper univ_list grid_ver">
								<div class="swiper-wrapper">
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain2.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain3.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain4.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain2.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>

									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain1.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain3.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain4.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain2.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>

									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain1.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain3.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_usa.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain4.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_kr.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain2.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </li>
                    <li id="content-12">
						<div class="univlist_wrap">
							<div class="univlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper univlist_swiper univ_list grid_ver">
								<div class="swiper-wrapper">
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain2.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </li>
                    <li id="content-13">
						<div class="univlist_wrap">
							<div class="univlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper univlist_swiper univ_list grid_ver">
								<div class="swiper-wrapper">
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain2.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain3.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </li>
                    <li id="content-14">
						<div class="univlist_wrap">
							<div class="univlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper univlist_swiper univ_list grid_ver">
								<div class="swiper-wrapper">
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain3.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </li>
                    <li id="content-15">
						<div class="univlist_wrap">
							<div class="univlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper univlist_swiper univ_list grid_ver">
								<div class="swiper-wrapper">
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain4.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </li>
                    <li id="content-16">
						<div class="univlist_wrap">
							<div class="univlist_controls">
								<div class="swiper-button-prev prev_btn"></div>
								<div class="swiper-button-next next_btn"></div>
							</div>
							<div class="swiper univlist_swiper univ_list grid_ver">
								<div class="swiper-wrapper">
									<div class="swiper-slide item" onclick="univ_modal(1);">
										<div class="imgbox">
											<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/img_univmain1.jpg" alt="" class="img">
											<div class="flagbox">
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/flag_hk.svg" alt="" class="flag">
											</div>
										</div>
										<div class="txtbox">
											<div class="hashtag">
												<p class="tag">#싱가포르</p>
												<p class="tag">#사립대</p>
											</div>
											<p class="title">
												Kaplan University <br>
												카플란 사립대학교
											</p>
											<div class="bottom">
												<p class="txt">학교 자세히보기</p>
												<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/ic_more.svg" alt="" class="more">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </li>
                </ul>
            </div>
        </div>
	</div>
</div>


<div id="univ_modal_1" class="cm_modal detail_modal univ_modal">	
	<div class="cm_modal_inner">
		<div class="cm_modal_box">
			<button type="button" class="cm_modal_close"></button>
			<div class="titbox">
				<p class="title">
					<span class="tit">Taylor’s University</span>
					<span class="small">테일러스 대학교</span>
				</p>
				<p class="desc">
					테일러스 대학교는 말레이시아 수방자야에 있는 사립 대학교이다. 1969년에 개교했으며 2006년과 2010년에 각각 컬리지 부문 및 대학 부문에서 수상을 타기도 했었다. 파운데이션, 디플로마, 디그리, 졸업후과정, 전문교육의 5단계의 교육시스템을 제공하고 있습니다.
				</p>
			</div>
			<div class="infobox">
				<div class="item">
					<p class="tit">설립년도</p>
					<p class="desc">1964년</p>
				</div>
				<div class="item">
					<p class="tit">재학생 수</p>
					<p class="desc">약 17,000여 명</p>
				</div>
				<div class="item">
					<p class="tit">평가</p>
					<p class="desc">EduTrust 4년 인증기관(1등급) / 선호도 2위(Singapore Job Central)</p>
				</div>
				<div class="item">
					<p class="tit">대표전공</p>
					<p class="desc">경영학, 경제학, 국제경영학, 회계, 경영분석, 컴퓨터공학</p>
				</div>
				<div class="item">
					<p class="tit">평균학비(연간)</p>
					<p class="desc">약 3,500~8,000만원</p>
				</div>
			</div>
			<div class="note_box">
				<p class="note_txt">*미국대학은 일반적으로 국내고 내신과 영어공인시험이 요구되고, 대학에 따라사 SAT 및 자소서를 추가로 요청합니다.</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA">이전 대학</button>
				<button type="button" class="btn typeB">다음 대학</button>
			</div>
		</div>
	</div>
</div>