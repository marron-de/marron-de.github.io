<!-- header -->
<header class="header header-wrap <?php if(!defined('_INDEX_')) { ?>page-header-wrap<?php } ?>">

	<div class="top-header" style="display:none;">
		<div class="container">
			<div class="row align-items-center position-relative">
				<div class="col-lg-6 d-none d-lg-block">
					<ul class="top-header-nav list-unstyled thn-start">
					<?php if ($eyoom['is_shop_theme'] == 'y') { ?>
						<?php if (defined('_SHOP_') && $eyoom['use_layout_community'] == 'y') { ?>
						<li class="cs-nav c-nav"><a href="<?php echo G5_URL; ?>"><span class="deactivate">커뮤니티</span></a></li>
						<li class="cs-nav s-nav"><a href="<?php echo G5_SHOP_URL; ?>" class="disabled"><span class="activate">쇼핑몰</span></a></li>
						<?php } else if (defined('G5_USE_SHOP') && G5_USE_SHOP) { ?>
						<li class="cs-nav c-nav"><a href="<?php echo G5_URL; ?>" class="disabled"><span class="activate">커뮤니티</span></a></li>
						<li class="cs-nav s-nav"><a href="<?php echo G5_SHOP_URL; ?>"><span class="deactivate">쇼핑몰</span></a></li>
						<?php } ?>
					<?php } ?>
						<li>
							<?php echo eb_connect('basic_top'); ?>
						</li>
						<?php if ($is_admin) { // 관리자일 경우 ?>
						<li>
							<div class="eyoom-form">
								<input type="hidden" name="edit_mode" id="edit_mode" value="<?php echo $eyoom_default['edit_mode']; ?>">
								<label class="toggle">
									<input type="checkbox" id="btn_edit_mode" <?php echo $eyoom_default['edit_mode'] == 'on' ? 'checked':''; ?>><i></i><span class="text-black"><span class="fas fa-sliders-h m-r-5"></span>편집모드</span>
								</label>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-lg-6 clearfix">
					<ul class="top-header-nav list-unstyled thn-end">
						<?php if ($is_member) {  ?>
							<?php if ($is_admin) {  ?>
						<li><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>"><i class="fas fa-cog text-crimson"></i>관리자</a></li>
							<?php }  ?>
						<li><a href="<?php echo G5_BBS_URL ?>/logout.php"><i class="fas fa-sign-out-alt"></i>로그아웃</a></li>
						<?php } else {  ?>
						<li><a href="<?php echo G5_BBS_URL ?>/login.php"><i class="fas fa-unlock-alt"></i>로그인</a></li>
						<li><a href="<?php echo G5_BBS_URL ?>/register.php"><i class="fas fa-user-plus"></i>회원가입</a></li>
						<?php }  ?>
						<li class="dropdown">
							<a class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
								<i class="fas fa-plus-circle"></i>추가메뉴
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a href="<?php echo G5_BBS_URL ?>/new.php">새글</a>
								<a href="<?php echo G5_BBS_URL ?>/best.php">인기게시물</a>
								<a href="<?php echo G5_BBS_URL ?>/faq.php">자주묻는 질문</a>
								<a href="<?php echo G5_BBS_URL ?>/qalist.php">1:1문의</a>
								<?php if ($is_member) { // 회원일 경우 ?>
								<a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">회원정보수정</a>
								<?php } ?>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="top_banner">
		<div class="container">
			<a href="#none" class="txtbox">
				<p class="txt tit"><span class="bold">몽선생</span>의 클래스 매칭</p>
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/top_banner_icon.png" alt="" class="icon">
				<p class="txt desc">
					검증된 선생님과 
					<span class="bold color">완벽한 유학</span>
					을 준비하고 싶다면?
				</p>
			</a>
			<a href="" class="btn tablet">클래스 바로가기</a>
			<button href="" class="today_btn tablet">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/today_btn_x.png" alt="" class="icon">	
				<span class="txt">오늘 하루 동안 이 창을 열지 않음</span>
			</button>
			<button type="button" class="close_btn"></button>
		</div>
	</div>

	<div class="h_bottom">
		<div class="container h_inner">
			<div class="h_logo">
				<button type="button" class="back_btn"></button>
				<a href="<?php echo G5_URL; ?>">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/logo.svg" class="logo_img" alt="<?php echo $config['cf_title']; ?>">
				</a>
				<button type="button" class="menu_open tablet"></button>
			</div>
			<ul class="h_nav">
				<li class="menu_li">
					<a href="<?php echo G5_URL ?>/page/?pid=counsel_banner" class="link">
						<span class="txt">유학원 소개</span>
						<span class="arrow"></span>
					</a>
					<ul class="h_nav_ul">
						<!-- <li>
							<a href="<?php echo G5_URL ?>/page/?pid=" class="link">전문분야</a>
						</li> -->
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=counsel_banner" class="link">상담안내</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=procedure_banner" class="link">수속안내</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=class_banner" class="link">100% 맞춤 학습</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=company" class="link">유학원소개</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=why" class="link">WHY 몽선생</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=map" class="link">찾아오는 길</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_URL ?>/page/?pid=counsel_intro" class="link">
						<span class="txt">상담받기</span>
					</a>
				</li>
				<li>
					<a href="<?php echo G5_URL ?>/page/?pid=procedure_intro" class="link">
						<span class="txt">수속하기</span>
					</a>
				</li>
				<li>
					<a href="<?php echo G5_URL ?>/page/?pid=class_intro" class="link">
						<span class="txt">수업듣기</span>
					</a>
				</li>
				<li>
					<a href="<?php echo G5_URL ?>/page/?pid=special_duolingo" class="link point">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_special_icon.svg" alt="" class="icon1">
						<span class="txt">SPECIAL</span>
					</a>
					<ul class="h_nav_ul">
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=special_duolingo" class="link">원어민 듀오링고실전</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=special_sogang" class="link">몽선생X서강글로벌</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=special_preparatory" class="link">해외대학 대비반</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=special_malay" class="link">ZERO 말레이시아 국제학교</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=special_singapore" class="link">싱가포르 사립대 성공PACK</a>
						</li>
					</ul>
				</li>
			</ul>
			<ul class="h_nav h_side">
				<li class="menu_li">
					<a href="<?php echo G5_URL ?>/page/?pid=univ_info_intro" class="link">
						<div class="iconbox">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_icon1_off.svg" alt="" class="icon2 before">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_icon1_on.svg" alt="" class="icon2 after">
						</div>
						<span class="txt">학교정보</span>
						<span class="arrow"></span>
					</a>
					<ul class="h_nav_ul">
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=univ_info01" class="link">국제학교</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=univ_info02" class="link">해외대학</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=guidebook" class="link">가이드북</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=faq" class="link">자주 묻는 질문</a>
						</li>
						<li>
							<a href="<?php echo G5_URL ?>/page/?pid=univ_adv" class="link">학교 광고판</a>
						</li>
					</ul>
				</li>
				<li class="menu_li">
					<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" class="link">
						<div class="iconbox">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_icon2_off.svg" alt="" class="icon2 before">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_icon2_on.svg" alt="" class="icon2 after">
						</div>
						<span class="txt">커뮤니티</span>
						<span class="arrow"></span>
					</a>
					<ul class="h_nav_ul">
						<li>
							<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" class="link">공지사항/유학문의</a>
						</li>
						<li>
							<a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=qa" class="link">상담신청</a>
						</li>
						<li>
							<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission" class="link">설명회</a>
						</li>
						<li>
							<a href="http://www.smfair.kr/" class="link" target="_blank">박람회</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo G5_URL ?>/page/?pid=ebook" class="link">
						<div class="iconbox">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_icon3_off.svg" alt="" class="icon2 before">
							<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_icon3_on.svg" alt="" class="icon2 after">
						</div>
						<span class="txt">전자북/책자</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

</header>

<!-- navbox -->
<div class="navbox">	
	<div class="headbox container">
		<button type="button" class="menu_close">
			<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_close.svg" alt="">
		</button>
	</div>
	<div class="titbox">
		<p class="tit">MENU</p>
	</div>
	<div class="menuwrap">
		<ul class="menubox accordion">	
			<li>
				<span class="acc_tit">
					<span class="txt">유학원 소개</span>
					<span class="arrow"></span>
				</span>
				<ul class="acc_cont">
					<!-- <li>
						<a href="<?php echo G5_URL ?>/page/?pid=" class="link">전문분야</a>
					</li> -->
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=counsel_banner" class="link">상담안내</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=procedure_banner" class="link">수속안내</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=class_banner" class="link">100% 맞춤 학습</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=company" class="link">유학원소개</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=why" class="link">WHY 몽선생</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=map" class="link">찾아오는 길</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo G5_URL ?>/page/?pid=counsel_intro" class="title">
					<span class="txt">상담받기</span>
				</a>
			</li>
			<li>
				<a href="<?php echo G5_URL ?>/page/?pid=procedure_intro" class="title">
					<span class="txt">수속하기</span>
				</a>
			</li>
			<li>
				<a href="<?php echo G5_URL ?>/page/?pid=class_intro" class="title">
					<span class="txt">수업듣기</span>
				</a>
			</li>
			<li class="special">
				<span class="acc_tit">
					<span class="txt">SPECIAL</span>
					<span class="arrow"></span>
				</span>
				<ul class="acc_cont">
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=special_duolingo" class="link">원어민 듀오링고실전</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=special_sogang" class="link">몽선생X서강글로벌</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=special_preparatory" class="link">해외대학 대비반</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=special_malay" class="link">ZERO 말레이시아 국제학교</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=special_singapore" class="link">싱가포르 사립대 성공PACK</a>
					</li>
				</ul>
			</li>
		</ul>
		<ul class="menubox side_ver accordion">	
			<li>
				<span class="acc_tit">
					<div class="iconbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_icon1_off.svg" alt="" class="icon2 before">
					</div>
					<span class="txt">학교정보</span>
					<span class="arrow"></span>
				</span>
				<ul class="acc_cont">
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=univ_info01" class="link">국제학교</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=univ_info02" class="link">해외대학</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=guidebook" class="link">가이드북</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=faq" class="link">자주 묻는 질문</a>
					</li>
					<li>
						<a href="<?php echo G5_URL ?>/page/?pid=univ_adv" class="link">학교 광고판</a>
					</li>
				</ul>
			</li>
			<li>
				<span class="acc_tit">
					<div class="iconbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_icon2_off.svg" alt="" class="icon2 before">
					</div>
					<span class="txt">커뮤니티</span>
					<span class="arrow"></span>
				</span>
				<ul class="acc_cont">
					<li>
						<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" class="link">공지사항/유학문의</a>
					</li>
					<li>
						<a href="<?php echo G5_BBS_URL ?>/write.php?bo_table=qa" class="link">상담신청</a>
					</li>
					<li>
						<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission" class="link">설명회</a>
					</li>
					<li>
						<a href="http://www.smfair.kr/" class="link" target="_blank">박람회</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo G5_URL ?>/page/?pid=ebook" class="acc_tit">
					<div class="iconbox">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/menu_icon3_off.svg" alt="" class="icon2 before">
					</div>
					<span class="txt">전자북/책자</span>
				</a>
			</li>
		</ul>
	</div>
</div>