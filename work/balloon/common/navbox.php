<!-- navbox -->
<div class="navbox">	
	<div class="nav_head">
		<div class="h_inner inner">
			<div class="h_left">		
				<div class="logobox">
					<a href="<?php echo $path ?>index.php">
						<img src="<?php echo $path ?>img/logo.png" alt="" class="logo" />
						<img src="<?php echo $path ?>img/logo_w.png" alt="" class="logo_w" />
					</a>
				</div>
			</div>	
			<div class="h_right">
				<a href="<?php echo $path ?>account/login.php" class="side_btn pc">
					<i class="ph ph-sign-in"></i>
				</a>
				<!-- 로그아웃
				<a href="<?php echo $path ?>account/login.php" class="side_btn pc">
					<i class="ph ph-sign-out"></i>
				</a> 
				-->
				<a href="<?php echo $path ?>mypage/profile_edit.php" class="side_btn pc"><i class="ph ph-user"></i></a>
				<button type="button" class="side_btn menu_close"><i class="ph ph-x"></i></button>
			</div>
		</div>
	</div>
	<div class="nav_menupop inner">
		<div class="nav_title">
			Personalised experiences, <br>
			lasting memories
		</div>
		<ul class="nav_menu">
			<li class="nav_menuitem">
				<a href="<?php echo $path ?>company/about.php" class="title">About Us</a>
				<ul class="nav_menucont">
					<li><a href="<?php echo $path ?>company/about.php" class="link">회사소개</a></li>
					<li><a href="<?php echo $path ?>company/about.php#keymember" class="link">파일럿소개</a></li>
					<li><a href="<?php echo $path ?>company/about.php#location" class="link">오시는길</a></li>
				</ul>
			</li>
			<li class="line"></li>
			<li class="nav_menuitem">
				<a href="<?php echo $path ?>certification/certification.php" class="title">Certification</a>
				<ul class="nav_menucont">
					<li><a href="<?php echo $path ?>certification/certification.php" class="link">인증현황</a></li>
				</ul>
			</li>
			<li class="line"></li>
			<li class="nav_menuitem">
				<a href="<?php echo $path ?>flights/free.php" class="title">Balloon Flights</a>
				<ul class="nav_menucont">
					<li><a href="<?php echo $path ?>flights/free.php" class="link">열기구자유여행</a></li>
					<li><a href="<?php echo $path ?>flights/promo.php" class="link">홍보비행</a></li>
					<li><a href="<?php echo $path ?>flights/training.php" class="link">교육비행</a></li>
					<li><a href="<?php echo $path ?>flights/event.php" class="link">이벤트비행</a></li>
					<li><a href="<?php echo $path ?>flights/unmanned.php" class="link">무인모형열기구</a></li>
					<li><a href="<?php echo $path ?>flights/competition.php" class="link">열기구대회</a></li>
				</ul>
			</li>
			<li class="line"></li>
			<li class="nav_menuitem">
				<a href="<?php echo $path ?>reservation/list.php" class="title">Book Now</a>				
				<ul class="nav_menucont">
					<li><a href="<?php echo $path ?>reservation/list.php" class="link">예약하기</a></li>
				</ul>
			</li>
			<li class="line"></li>
			<li class="nav_menuitem">
				<a href="<?php echo $path ?>" class="title">Community</a>
				<ul class="nav_menucont">
					<li><a href="<?php echo $path ?>community/notice.php"  class="link">공지사항</a></li>
					<li><a href="<?php echo $path ?>community/gallery.php"  class="link">여행사진</a></li>
					<li><a href="<?php echo $path ?>community/contact.php"  class="link">문의하기</a></li>
					<li><a href="<?php echo $path ?>community/balloonTechLab.php"  class="link">열기구 비행안전 기술연구소</a></li>
					<li><a href="<?php echo $path ?>community/pilotCamp.php"  class="link">조종사 체험 캠프</a></li>
				</ul>
			</li>
			<li class="line"></li>
			<li class="nav_menuitem">
				<a href="<?php echo $path ?>mypage/profile_edit.php" class="title">My Page</a>
				<ul class="nav_menucont">
					<li><a href="<?php echo $path ?>mypage/profile_edit.php" class="link">회원 정보</a></li>					
					<li><a href="<?php echo $path ?>mypage/bookings.php" class="link">예약 조회</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="nav_menubox">
		<!-- 로그인 -->
		<div class="headbox login">
			<div class="profile_box">
				<div class="profile">
					<div class="thum">
						<img src="<?php echo $path ?>img/profile_thum.jpg" alt="" class="img">
					</div>
					<div class="txt">
						<span class="name">홍길동</span>
						<button type="button" class="profile_btn" onclick="profile_popup()">프로필 관리</button>
					</div>
				</div>
			</div>
			<div class="btnbox">
				<a href="<?php echo $path ?>mypage/travel.php" class="button typeB">나의 예약</a>
				<a href="<?php echo $path ?>account/login.php" class="button typeA">로그아웃</a>
			</div>			
		</div>
		<!-- 로그아웃 -->
		<div class="headbox logout">
			<p class="title">
				회원가입하고 <br>다양한 혜택 받으세요 🎉
			</p>
			<div class="btnbox">
				<a href="<?php echo $path ?>mypage/travel.php" class="button typeB">나의 예약</a>
				<a href="<?php echo $path ?>account/login.php" class="button typeA">로그인/회원가입</a>
			</div>			
		</div>
		<div class="bodybox">
			<div class="menuwrap inner tab_wrap">
				<div class="tab_navbox">
					<div class="tab_nav on">
						<span class="link">예약 상품 / 서비스</span>
					</div>
					<div class="tab_nav">
						<span class="link">커뮤니티</span>
					</div>
				</div>
				<div class="tab_contbox">
					<ul class="tab_cont on bodyitem accordion">
						<li>
							<div class="title acc_tit">
								<span class="tit">회사소개</span>
								<span class="icon"></span>
							</div>
							<ul class="acc_cont">
								<li><a href="<?php echo $path ?>company/about.php" class="link">회사소개</a></li>
								<li><a href="<?php echo $path ?>company/about.php#keymember" class="link">파일럿소개</a></li>
								<li><a href="<?php echo $path ?>company/about.php#location" class="link">오시는길</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo $path ?>certification/certification.php" class="title acc_tit">
								<span class="tit">인증현황</span>
							</a>
						</li>
						<li>
							<div class="title acc_tit">
								<span class="tit">열기구체험</span>
								<span class="icon"></span>
							</div>
							<ul class="acc_cont">
								<li><a href="<?php echo $path ?>flights/free.php" class="link">열기구자유여행</a></li>
								<li><a href="<?php echo $path ?>flights/promo.php" class="link">홍보비행</a></li>
								<li><a href="<?php echo $path ?>flights/training.php" class="link">교육비행</a></li>
								<li><a href="<?php echo $path ?>flights/event.php" class="link">이벤트비행</a></li>
								<li><a href="<?php echo $path ?>flights/unmanned.php" class="link">무인모형열기구</a></li>
								<li><a href="<?php echo $path ?>flights/competition.php" class="link">열기구대회</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo $path ?>reservation/list.php" class="title acc_tit">
								<span class="tit">예약하기</span>
							</a>
						</li>
						<!-- <li class="bar"></li>
						<li class="mob_show">
							<a href="<?php echo $path ?>schedule/schedule2.php" class="title">
								<span class="tit">출발일정</span>
							</a>
						</li> -->
					</ul>	
					<ul class="tab_cont bodyitem">
						<li><a href="<?php echo $path ?>community/notice.php"  class="title link">공지사항</a></li>
						<li><a href="<?php echo $path ?>community/gallery.php"  class="title link">여행사진</a></li>
						<li><a href="<?php echo $path ?>community/contact.php"  class="title link">문의하기</a></li>
						<li><a href="<?php echo $path ?>community/balloonTechLab.php"  class="title link">열기구 비행안전 기술연구소</a></li>
						<li><a href="<?php echo $path ?>community/pilotCamp.php"  class="title link">조종사 체험 캠프</a></li>
					</ul>	
				</div>
			</div>
		</div>	
		<div class="footbox">
			<div class="titbox">
				<img src="<?php echo $path ?>img/ic_help.png" alt="" class="icon">
				<span class="txt">도움이 필요하신가요?</span>
			</div>
			<a href="<?php echo $path ?>cs/qna_online.php" class="inq_btn">1:1 문의하기</a>
		</div>	
	</div>
</div>

<!-- 프로필관리 popup --> <!-- 모바일 노출 -->
<div id="profile_popup" class="modal ver2">
	<div class="modal_box">
		<div class="modal_head">
			<p class="tit">프로필 관리</p>
			<button type="button" class="modal_close"></button>
		</div>
		<div class="modal_body">
			<div class="headbox">
				<div class="profile">
					<div class="imgbox">
						<div class="photo">
							<img src="<?php echo $path ?>img/profile_thum.jpg" alt="" class="img" id="profile_preview">
						</div>
						<button type="button" class="photo_btn" id="profile_btn"></button>
						<input type="file" id="profile_input" accept="image/*" class="profile_input">
					</div>
					<div class="txtbox">
						<p class="name">홍길동</p>
						<p class="mail">test@test.com</p>
					</div>
				</div>
			</div>
			<div class="bodybox">
				<div class="contbox">
					<div class="contitem">
						<p class="cont_tit">이름</p>
						<div class="cont_cont">
							<div class="input_box">
								<input type="text" class="input_text" value="홍길동" readonly>
								<p class="input_status">인증완료</p>
							</div>
							<button type="button" class="button typeD change_btn">변경</button>
						</div>
					</div>
					<div class="contitem">
						<p class="cont_tit">휴대폰 번호</p>
						<div class="cont_cont">
							<div class="input_box">
								<input type="text" class="input_text" value="+82 01012345678" readonly>
								<p class="input_status">인증완료</p>
							</div>
							<button type="button" class="button typeD change_btn">변경</button>
						</div>
					</div>
					<div class="contitem">
						<p class="cont_tit">이메일</p>
						<p class="cont_desc">test@test.com</p>
					</div>
					<div class="contitem">
						<p class="cont_tit">SNS 연동</p>
						<div class="cont_cont switch_wrap">
							<div class="switch_box reverse">
								<input type="checkbox" id="sns_kakao" class="input_switch" checked>
								<label for="sns_kakao" class="label_switch">
									<img src="<?php echo $path ?>img/sns_kakao.png" alt="" class="icon">
									<span class="txt">카카오 연동</span>
								</label>
							</div>
							<div class="switch_box reverse">
								<input type="checkbox" id="sns_facebook" class="input_switch">
								<label for="sns_facebook" class="label_switch">
									<img src="<?php echo $path ?>img/sns_facebook.png" alt="" class="icon">
									<span class="txt">페이스북 연동</span>
								</label>
							</div>
							<div class="switch_box reverse">
								<input type="checkbox" id="sns_google" class="input_switch">
								<label for="sns_google" class="label_switch">
									<img src="<?php echo $path ?>img/sns_google.png" alt="" class="icon">
									<span class="txt">구글 연동</span>
								</label>
							</div>
							<div class="switch_box reverse">
								<input type="checkbox" id="sns_naver" class="input_switch">
								<label for="sns_naver" class="label_switch">
									<img src="<?php echo $path ?>img/sns_naver.png" alt="" class="icon">
									<span class="txt">네이버 연동</span>
								</label>
							</div>
						</div>
					</div>
					<div class="contitem">
						<p class="cont_tit">비밀번호</p>
						<div class="cont_cont">
							<div class="input_box">
								<input type="password" class="input_text" value="•••••••" readonly>
							</div>
							<button type="button" class="button typeD change_btn">변경</button>
						</div>
					</div>
				</div>
				<div class="line"></div>
				<div class="contbox">
					<div class="contitem">
						<div class="cont_cont switch_box reverse">
							<input type="checkbox" id="email_optin" class="input_switch" checked>
							<label for="email_optin" class="label_switch">이메일 수신</label>
						</div>
					</div>
					<div class="contitem">
						<div class="cont_cont switch_box reverse">
							<input type="checkbox" id="sms_optin" class="input_switch" checked>
							<label for="sms_optin" class="label_switch">SMS 수신</label>
						</div>
					</div>
					<div class="contitem">
						<div class="cont_cont switch_box reverse">
							<input type="checkbox" id="push_optin" class="input_switch" checked>
							<label for="push_optin" class="label_switch">앱 푸쉬</label>
						</div>
					</div>
					<div class="contitem">
						<div class="cont_cont switch_box reverse">
							<input type="checkbox" id="location_optin" class="input_switch" checked>
							<label for="location_optin" class="label_switch">위치 정보 수집</label>
						</div>
					</div>
				</div>
				<div class="btnbox">
					<button type="button" class="button typeB">계정 삭제하기</button>
				</div>
			</div>
		</div>
	</div>
</div>