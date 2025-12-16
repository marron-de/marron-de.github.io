<!-- header -->
<header class="header">
    <div class="inner h_inner">
		<div class="h_left">		
			<div class="logobox">
				<a href="<?php echo $path ?>index.php"><img src="<?php echo $path ?>img/logo.png" alt="" /></a>
			</div>
			<div class="schbox">
				<div class="titbox">
					<div class="tit">검색</div>
					<div class="close_btn search_close"></div>
				</div>
				<div class="bodybox">
					<div class="input_box input_box_sch">
						<input type="text" class="input_text" placeholder="어디로 여행을 떠나세요?">
						<button type="button" class="sch_btn"></button>
					</div>
					<div class="popup search_popup">
						<div class="pop_body">
							<div class="contbox">
								<div class="contitem">
									<div class="cont_tit">
										<span class="tit">인기검색어</span>
										<span class="desc">2025.11.01 기준</span>
									</div>
									<div class="lankwrap">
										<div class="lankbox">
											<div class="item">
												<a href="" class="link">
													<span class="num">1</span>
													<span class="tit">당일 투어</span>
												</a>
											</div>
											<div class="item">
												<a href="" class="link">
													<span class="num">2</span>
													<span class="tit">패키지 투어</span>
												</a>
											</div>
											<div class="item">
												<a href="" class="link">
													<span class="num">3</span>
													<span class="tit">K-POP</span>
												</a>
											</div>
											<div class="item">
												<a href="" class="link">
													<span class="num">4</span>
													<span class="tit">할인 호텔</span>
												</a>
											</div>
											<div class="item">
												<a href="" class="link">
													<span class="num">5</span>
													<span class="tit">스키투어</span>
												</a>
											</div>
										</div>
										<div class="lankbox">
											<div class="item">
												<a href="" class="link">
													<span class="num">6</span>
													<span class="tit">당일 투어</span>
												</a>
											</div>
											<div class="item">
												<a href="" class="link">
													<span class="num">7</span>
													<span class="tit">패키지 투어</span>
												</a>
											</div>
											<div class="item">
												<a href="" class="link">
													<span class="num">8</span>
													<span class="tit">K-POP</span>
												</a>
											</div>
											<div class="item">
												<a href="" class="link">
													<span class="num">9</span>
													<span class="tit">할인 호텔</span>
												</a>
											</div>
											<div class="item">
												<a href="" class="link">
													<span class="num">10</span>
													<span class="tit">스키투어</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="contitem">
									<div class="cont_tit">
										<span class="tit">추천해시태그</span>
										<span class="desc"></span>
									</div>
									<div class="badgebox">
										<a href="" class="badge">#당일투어</a>
										<a href="" class="badge">#패키지투어</a>
										<a href="" class="badge">#K-POP</a>
										<a href="" class="badge">#할인호텔</a>
										<a href="" class="badge">#스키투어</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="h_right">	
			<div class="top_nav">
				<li>
					<a href="<?php echo $path ?>mypage/travel.php" class="link">
						예약조회
					</a>
				</li>
				<li>
					<a href="<?php echo $path ?>group/reservation.php" class="link">
						단체문의
					</a>
				</li>
				<li>
					<a href="<?php echo $path ?>cs/notice.php" class="link">
						고객센터
					</a>
				</li>
				<li>
					<a href="<?php echo $path ?>mypage/travel.php" class="link">
						마이페이지
					</a>
				</li>
				<li>
					<a href="<?php echo $path ?>index.php" class="link ver2">
						로그아웃
					</a>
				</li>
			</div>	
			<!-- 모바일 노출 start-->
			<div class="sidebox tablet">
				<button type="button" class="btn menu_open"></button>
			</div>
			<!-- 모바일 노출 end -->
		</div>
    </div>
</header>

<script>
	$(function () {
		$('body').addClass('logged');
	});
</script>