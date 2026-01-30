<!-- footer -->
<footer id="footer" class="footer">
	<div class="f_inner inner">
		<div class="f_top">
			<div class="balloon">
				<img src="<?php echo $path ?>img/f_balloon.png" alt="" class="img">
			</div>
			<div class="logobox">
				<img src="<?php echo $path ?>img/logo_w.png" alt="" class="logo">
			</div>
		</div>	
		<ul class="f_contbox accordion mob_acc">
			<li class="f_contitem f_contitem1">
				<p class="f_tit acc_tit">
					<span class="tit">Info</span>
					<span class="arrow"></span>
				</p>
				<ul class="acc_cont">
					<li class="f_cont">
						<div class="f_infobox">
							<p class="f_txt">
								<span class="tit">상호명.</span>
								<span class="desc">벌룬어드벤처코리아</span>
							</p>
							<p class="f_txt">
								<span class="tit">대표.</span>
								<span class="desc">강서구</span>
							</p>
							<p class="f_txt">
								<span class="tit">전화.</span>
								<span class="desc">010-5412-8200</span>
							</p>
							<p class="f_txt">
								<span class="tit">팩스.</span>
								<span class="desc">00-0000-0000</span>
							</p>
							<p class="f_txt">
								<span class="tit">주소.</span>
								<span class="desc">충청남도 서천군 한산면 충절로1173번길 11</span>
							</p>
							<p class="f_txt">
								<span class="tit">사업자등록번호.</span>
								<span class="desc">756-79-00152</span>
							</p>
							<p class="f_txt">
								<span class="tit">전자상거래허가.</span>
								<span class="desc">2022-경기포천-0356</span>
							</p>
							<p class="f_txt">
								<span class="tit">개인정보관리책임자.</span>
								<span class="desc">강서구</span>
							</p>
							<p class="f_txt">
								<span class="tit">이메일.</span>
								<span class="desc">koreaballoon@gmail.com</span>
							</p>
						</div>
					</li>
				</ul>
			</li>
			<li class="f_contitem f_contitem2">
				<p class="f_tit acc_tit">
					<span class="tit">Guide</span>
					<span class="arrow"></span>
				</p>
				<ul class="acc_cont">
					<li class="f_cont">
						<div class="f_navbox">
							<div class="btn" onclick="terms_popup()">서비스이용약관</div>
							<div class="btn" onclick="privacy_popup()">개인정보처리방침</div>
							<div class="btn" onclick="refund_popup()">취소 및 환불 정책</div>
						</div>
					</li>
				</ul>
			</li>
			<li class="f_contitem f_contitem3">
				<p class="f_tit">Contact us</p>
				<div class="f_cont">
					<div class="f_contact">
						<div class="contact_tit">
							<span class="number">010-5412-8200</span>
							<a href="tel:+10-5412-8200" class="button typeC auto inq_btn">문의하기</a>
						</div>
						<div class="txtbox">
							<p class="txt">평일 오전 9:00 ~ 오후 6:00</p>
							<p class="txt">점심 오후 12:00 ~ 오후 1:00</p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="f_bottom">
			<p class="copyright">
				©BALLOON ADVENTURE KOREA. <br class="tablet">
				ALL RIGHTS RESERVED.
			</p>
			<div class="sns_box">
				<a href="https://www.youtube.com/@balloonadventurekorea" class="link" target="_balnk">Youtube</a>
				<a href="https://www.instagram.com/balloonadventure_korea/" class="link" target="_balnk">Instagram</a>
				<a href="https://blog.naver.com/balloon_tour" class="link" target="_balnk">Blog</a>
				<a href="https://www.facebook.com/profile.php?id=100065093346920#" class="link" target="_balnk">Facebook</a>
				<a href="" class="link" target="_balnk">Kakao</a>
			</div>
		</div>
	</div>
</footer>


<?php include $path."common/terms_popup.php"; ?>

<?php include $path."common/privacy_popup.php" ?>

<?php include $path."common/refund_popup.php" ?>