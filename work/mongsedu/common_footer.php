<!-- footer -->
<footer class="footer">
	<div class="f_inner container">
		<div class="f_logo">
			<a href="<?php echo G5_URL; ?>">
				<img src="<?php echo EYOOM_THEME_URL; ?>/image/logo.svg" class="img" alt="<?php echo $config['cf_title']; ?>">
			</a>
		</div>
		<div class="f_navbox">
			<ul class="f_nav">
				<li><a href="<?php echo G5_URL ?>/page/?pid=company" class="link">회사소개</a></li>
				<li><a href="<?php echo G5_URL ?>/page/?pid=why" class="link">WHY 몽선생</a></li>
				<li><a href="<?php echo G5_URL ?>/page/?pid=map" class="link">찾아오는 길</a></li>
			</ul>
			<ul class="f_nav">
				<li><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" class="link">공지사항</a></li>
				<li><a href="<?php echo get_eyoom_pretty_url('page','provision'); ?>" class="link">이용약관</a></li>
				<li><a href="<?php echo get_eyoom_pretty_url('page','privacy'); ?>" class="link">개인정보처리방침</a></li>
			</ul>
		</div>
		<div class="f_contact">
			<div class="item">
				<div class="f_tit">상담하기</div>
				<div class="descbox">
					<a href="tel:02-6052-9003" class="desc">02-6052-9003</a>
					<a href="https://pf.kakao.com/_fxmxmWV" class="desc" target="_blank">카카오톡 상담하기</a>
					<a href="<?php echo G5_URL ?>/page/?pid=counsel" class="desc">방문상담신청 </a>
					<!-- <p class="desc ver2">
						10:00 - 18:00 <br class="tablet">
						(점심시간 12:00 - 13:00) <br>
						주말, 공휴일 휴무 -->
					</p>
				</div>
			</div>
			<div class="item">
				<div class="f_tit">고객센터</div>
				<div class="descbox">
					<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" class="desc">공지사항</a>
					<a href="<?php echo G5_URL ?>/page/?pid=faq" class="desc">자주 하는 질문</a>
					<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice" class="desc">커뮤니티</a>
				</div>
			</div>
		</div>
		<div class="f_contbox">
			<div class="leftbox">				
				<p class="infotxt">
					<span class="txt"><?php echo $bizinfo['bi_company_name']; ?></span>
					<span class="divider">|</span>
					<span class="txt">대표</span> <?php echo $bizinfo['bi_company_ceo']; ?></>
					<br>
					<span class="txt">사업자 등록번호 : </span><?php echo $bizinfo['bi_company_bizno']; ?>
					<br>
					<!-- <?php echo $bizinfo['bi_company_zip']; ?> -->
					<?php echo $bizinfo['bi_company_addr1']; ?> 
					<?php echo $bizinfo['bi_company_addr2']; ?> 
					<!-- <?php echo $bizinfo['bi_company_addr3']; ?> -->
					<br><br>
					<span class="txt">전화 <?php echo $bizinfo['bi_cs_tel1']; ?></span>
					<!-- <span class="divider">|</span> -->
					<!-- <span class="txt">팩스 <?php echo $bizinfo['bi_cs_fax']; ?></span> -->
					<span class="divider pc">|</span>
					<br class="tablet">
					<span class="txt">이메일 <?php echo $bizinfo['bi_cs_email']; ?></span>
					<br>
					<span class="txt">통신판매업 <?php echo $bizinfo['bi_company_sellno']; ?></span>
				</p>
				<p class="copyright">
					Copyright © 2026 Mongs All rights reserved.
				</p>
			</div>
			<div class="rightbox">
				<div class="snsbox">
					<a href="https://blog.naver.com/mongssing" class="snslink" target="_blank">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/sns_blog.png" alt="">
					</a>
					<a href="https://www.youtube.com/@%EB%AA%BD%EC%84%A0%EC%83%9D" class="snslink" target="_blank">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/sns_youtube.png" alt="">
					</a>
					<a href="https://pf.kakao.com/_fxmxmWV" class="snslink" target="_blank">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/sns_kakaotalk.png" alt="">
					</a>
					<a href="https://www.instagram.com/mongsedu/" class="snslink" target="_blank">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/sns_instagram.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>


<div class="navibar">
	<div class="navitem">
		<a href="<?php echo G5_URL; ?>" class="link">
			<div class="iconbox">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon1_off.png" alt="" class="icon off">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon1_on.png" alt="" class="icon on">
			</div>
			<p class="tit">home</p>
		</a>
	</div>
	<div class="navitem">
		<a href="tel:+10-8114-9003" class="link">
			<div class="iconbox">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon2_off.png" alt="" class="icon off">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon2_on.png" alt="" class="icon on">
			</div>
			<p class="tit">전화상담</p>
		</a>
	</div>
	<div class="navitem">
		<a href="https://pf.kakao.com/_fxmxmWV" class="link" target="_blank">
			<div class="iconbox">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon3_off.png" alt="" class="icon off">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon3_on.png" alt="" class="icon on">
			</div>
			<p class="tit">카톡상담</p>
		</a>
	</div>
	<div class="navitem">
		<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=admission" class="link">
			<div class="iconbox">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon4_off.png" alt="" class="icon off">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon4_on.png" alt="" class="icon on">
			</div>
			<p class="tit">설명회</p>
		</a>
	</div>
	<div class="navitem">
		<a href="https://www.youtube.com/channel/UCbxH8_UgfZNjiyVJsWHaFDg" class="link" target="_blank">
			<div class="iconbox">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon5_off.png" alt="" class="icon off">
				<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/nav_icon5_on.png" alt="" class="icon on">
			</div>
			<p class="tit">유튜브</p>
		</a>
	</div>
</div>