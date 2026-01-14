<!-- navbox -->
<div class="navbox">	
	<div class="nav_inner inner">
		<div class="swiper nav_menu">
			<div class="swiper-wrapper">
				<div class="swiper-slide item menu">
					<span class="icon"></span>
					<span class="txt">전체메뉴</span>
				</div>
				<div class="swiper-slide item code-d">
					<div class="badge typeC">Best</div>
					<a href="<?php echo $path ?>product/list.php" class="link">당일 투어</a>
				</div>
				<div class="swiper-slide item code-p">
					<a href="" class="link">패키지 투어</a>
				</div>
				<div class="swiper-slide item code-t">
					<a href="" class="link">티켓</a>
				</div>
				<div class="swiper-slide item code-b">
					<div class="badge typeD">추천</div>
					<a href="" class="link">공항 픽업샌딩</a>
				</div>
				<div class="swiper-slide item code-c">
					<a href="" class="link">차량 렌탈</a>
				</div>
				<div class="swiper-slide item code-h">
					<div class="badge typeA">New</div>
					<a href="<?php echo $path ?>product/list_hotel.php" class="link">할인 호텔</a>
				</div>
				<div class="swiper-slide item code-k">
					<a href="" class="link">K-POP 콘서트</a>
				</div>
				<div class="swiper-slide item calendar">
					<a href="<?php echo $path ?>schedule/schedule2.php" class="link">
						<img src="<?php echo $path ?>img/ic_calendar.png" alt="" class="icon">
						<span class="txt">출발일정</span>
					</a>
				</div>
			</div>
		</div>
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
				<div class="infobox">
					<div class="item">
						<p class="tit">포인트</p>
						<p class="desc">1,000원</p>
					</div>
					<div class="item">
						<p class="tit">쿠폰</p>
						<p class="desc">10장</p>
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
				회원가입하고 다양한 혜택 받으세요 🎉
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
						<span class="link">여행 상품 / 서비스</span>
					</div>
					<div class="tab_nav">
						<span class="link">고객센터</span>
					</div>
				</div>
				<div class="tab_contbox">
					<ul class="tab_cont on bodyitem menubox accordion mob_acc">
						<li>
							<a href=""  class="title acc_tit">
								<span class="tit">당일 투어</span><span class="icon"></span>
							</a>
							<ul class="acc_cont">
								<li><a href="" class="link">포시즌 투어</a></li>
								<li><a href="" class="link">봄 여행</a></li>
								<li><a href="" class="link">여름 여행</a></li>
								<li><a href="" class="link">가을 여행</a></li>
								<li><a href="" class="link">겨울 여행</a></li>
								<li><a href="" class="link">가족 여행</a></li>
								<li><a href="" class="link">문화 투어</a></li>
								<li><a href="" class="link">야외 활동</a></li>
							</ul>
						</li>
						<li>
							<a href=""  class="title acc_tit">
								<span class="tit">패키지 투어</span><span class="icon"></span>
							</a>
							<ul class="acc_cont">
								<li><a href="" class="link">포시즌 투어</a></li>
								<li><a href="" class="link">봄 여행</a></li>
								<li><a href="" class="link">여름 여행</a></li>
								<li><a href="" class="link">가을 여행</a></li>
								<li><a href="" class="link">겨울 여행</a></li>
								<li><a href="" class="link">가족 여행</a></li>
								<li><a href="" class="link">문화 투어</a></li>
								<li><a href="" class="link">야외 활동</a></li>
							</ul>
						</li>
						<li>
							<a href=""  class="title acc_tit">
								<span class="tit">티켓</span><span class="icon"></span>
							</a>
							<ul class="acc_cont">
								<li><a href="" class="link">입장권</a></li>
								<li><a href="" class="link">테마파크</a></li>
								<li><a href="" class="link">야외 활동</a></li>
								<li><a href="" class="link">전망대 & 케이블카</a></li>
								<li><a href="" class="link">한방 미뇽 & 음식</a></li>
								<li><a href="" class="link">한국 eSIM</a></li>
							</ul>
						</li>
						<li>
							<a href=""  class="title acc_tit">
								<span class="tit">공항 픽업샌딩</span><span class="icon"></span>
							</a>
							<ul class="acc_cont">
								<li><a href="" class="link">인천공항 - 서울</a></li>
								<li><a href="" class="link">김포공항 - 서울</a></li>
								<li><a href="" class="link">김해공항 - 부산</a></li>
								<li><a href="" class="link">양양공항 - 강원도</a></li>
								<li><a href="" class="link">대구공항 - 대구</a></li>
								<li><a href="" class="link">제주공항 - 제주</a></li>
							</ul>
						</li>
						<li>
							<a href=""  class="title acc_tit">
								<span class="tit">차량 렌탈</span><span class="icon"></span>
							</a>
							<ul class="acc_cont">
								<li><a href="" class="link">스키장 셔틀버스</a></li>
								<li><a href="" class="link">편도 스키장 전세</a></li>
								<li><a href="" class="link">개인 차량 전세</a></li>
								<li><a href="" class="link">개인 투어</a></li>
							</ul>
						</li>
						<li>
							<a href=""  class="title acc_tit">
								<span class="tit">할인 호텔</span><span class="icon"></span>
							</a>
							<ul class="acc_cont">
								<li><a href="" class="link">연예인 특집</a></li>
								<li><a href="" class="link">스키 리조트 호텔</a></li>
								<li><a href="" class="link">서울 지역</a></li>
								<li><a href="" class="link">경기도</a></li>
								<li><a href="" class="link">인천광역시</a></li>
								<li><a href="" class="link">부산광역시</a></li>
								<li><a href="" class="link">제주도 지역</a></li>
								<li><a href="" class="link">전라도</a></li>
								<li><a href="" class="link">경상도</a></li>
								<li><a href="" class="link">충청도 지역</a></li>
								<li><a href="" class="link">특별 프로젝트</a></li>
							</ul>
						</li>
						<li>
							<a href="" class="title acc_tit">
								<span class="tit">K-POP 콘서트</span><span class="icon"></span>
							</a>
							<ul class="acc_cont">
								<li><a href="" class="link">2025 K-POP 원데이 그룹</a></li>
								<li><a href="" class="link">2025 K-POP 원데이 그룹</a></li>
								<li><a href="" class="link">2025 K-POP 원데이 그룹</a></li>
								<li><a href="" class="link">2025 K-POP 원데이 그룹</a></li>
								<li><a href="" class="link">2025 K-POP 원데이 그룹</a></li>
								<li><a href="" class="link">2025 K-POP 원데이 그룹</a></li>
								<li><a href="" class="link">2025 K-POP 원데이 그룹</a></li>
								<li><a href="" class="link">2025 K-POP 원데이 그룹</a></li>
							</ul>
						</li>
						<li class="bar"></li>
						<li class="mob_show">
							<a href="<?php echo $path ?>schedule/schedule2.php" class="title">
								<span class="tit">출발일정</span>
							</a>
						</li>
					</ul>	
					<div class="tab_cont bodyitem csbox">
						<div class="csitem">
							<div class="cs_tit"><a href="<?php echo $path ?>cs/notice.php"  class="cstit">고객센터</a></div>
							<div class="cs_list">
								<li><a href="<?php echo $path ?>cs/notice.php"  class="link">공지사항</a></li>
								<li><a href="<?php echo $path ?>cs/qna_online.php"  class="link">문의하기</a></li>
								<li><a href="<?php echo $path ?>cs/gallery.php"  class="link">여행사진</a></li>
								<li><a href="<?php echo $path ?>cs/event.php"  class="link">이벤트</a></li>
								<li><a href="<?php echo $path ?>cs/career.php"  class="link">채용안내</a></li>
								<li class="tablet"><a href="<?php echo $path ?>group/reservation.php"  class="link">단체문의</a></li>
							</div>
						</div>
						<div class="csitem">
							<a href="" class="banner banner1">
								<img src="<?php echo $path ?>img/banner_gift.png" alt="" class="icon">
								<div class="txtbox">
									<p class="tit">신규가입 이벤트</p>
									<p class="desc">신규가입 시 쿠폰증정!</p>
								</div>
							</a>
							<a href="" class="banner banner2">
								<img src="<?php echo $path ?>img/banner_best.png" alt="" class="icon">
								<div class="txtbox">
									<p class="tit">베스트 여행지</p>
									<p class="desc">핫한 여행지, 바로 여기!</p>
								</div>
							</a>
						</div>
					</div>	
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
				<div class="infobox">
					<div class="item">
						<p class="tit">포인트</p>
						<p class="desc">1,000원</p>
					</div>
					<div class="item">
						<p class="tit">쿠폰</p>
						<p class="desc">10장</p>
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
								<input type="checkbox" id="sns_line" class="input_switch">
								<label for="sns_line" class="label_switch">
									<img src="<?php echo $path ?>img/sns_line.png" alt="" class="icon">
									<span class="txt">LINE 연동</span>
								</label>
							</div>
							<div class="switch_box reverse">
								<input type="checkbox" id="sns_whatsapp" class="input_switch">
								<label for="sns_whatsapp" class="label_switch">
									<img src="<?php echo $path ?>img/sns_whatsapp.png" alt="" class="icon">
									<span class="txt">Whatsapp 연동</span>
								</label>
							</div>
							<div class="switch_box reverse">
								<input type="checkbox" id="sns_messenge" class="input_switch">
								<label for="sns_messenge" class="label_switch">
									<img src="<?php echo $path ?>img/sns_messenger.png" alt="" class="icon">
									<span class="txt">메신저 연동</span>
								</label>
							</div>
							<div class="switch_box reverse">
								<input type="checkbox" id="sns_naver" class="input_switch">
								<label for="sns_naver" class="label_switch">
									<img src="<?php echo $path ?>img/sns_naver.png" alt="" class="icon">
									<span class="txt">네이버 연동</span>
								</label>
							</div>
							<div class="switch_box reverse">
								<input type="checkbox" id="sns_facebook" class="input_switch">
								<label for="sns_facebook" class="label_switch">
									<img src="<?php echo $path ?>img/sns_facebook.png" alt="" class="icon">
									<span class="txt">페이스북 연동</span>
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