<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<div class="latest_top_wr" style="display:none">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_list', 'free', 4, 23);		// 최소설치시 자동생성되는 자유게시판
	echo latest('theme/pic_list', 'qa', 4, 23);			// 최소설치시 자동생성되는 질문답변게시판
	echo latest('theme/pic_list', 'notice', 4, 23);		// 최소설치시 자동생성되는 공지사항게시판
    ?>
</div>

<div class="latest_wr" style="display:none">
    <!-- 사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('theme/pic_block', 'gallery', 4, 23);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr" style="display:none">
	<!-- 최신글 시작 { -->
    <?php
    //  최신글
    $sql = " select bo_table
                from `{$g5['board_table']}` a left join `{$g5['group_table']}` b on (a.gr_id=b.gr_id)
                where a.bo_device <> 'mobile' ";
    if(!$is_admin)
	$sql .= " and a.bo_use_cert = '' ";
    $sql .= " and a.bo_table not in ('notice', 'gallery') ";     //공지사항과 갤러리 게시판은 제외
    $sql .= " order by b.gr_order, a.bo_order ";
    $result = sql_query($sql);
    for ($i=0; $row=sql_fetch_array($result); $i++) {
		$lt_style = '';
    	if ($i%3 !== 0 ) $lt_style = "margin-left:2%";
    ?>
    <div style="float:left;<?php echo $lt_style ?>" class="lt_wr">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', $row['bo_table'], 6, 24);
        ?>
    </div>
    <?php
    }
    ?>
    <!-- } 최신글 끝 -->
</div>



<div class="wrap new_main_wrap">

	<!-- common header -->
	<?php include_once(G5_THEME_PATH.'/common_header.php'); ?>

	<!-- container -->
	<div class="container">

		<section id="hero" class="main_section ms1 mh100vh">
			<div class="swiper ms1_swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide item item1">
						<div class="txtbox">
							<h2 class="tit" data-swiper-parallax="-300">빵 끝까지 맛있다</h2>
							<p class="desc" data-swiper-parallax="-400">
								최적의 숙성 발효과정을 거친 <br class="tablet">
								티엠티 피자의 <br class="pc">
								1등급 프리미엄 도우는 <br class="tablet">
								피자를 끝까지 즐길 수 있습니다
							</p>
						</div>
					</div>
					<div class="swiper-slide item item2">
						<div class="txtbox">
							<h3 class="desc" data-swiper-parallax="-300">
								한 번 먹고 끝나는 피자가 아닌, <br class="tablet">
								계속 찾게되는 피자를 만드는
							</h3>
							<p class="tit" data-swiper-parallax="-400">
								우리는 <br class="tablet">티엠티피자 입니다
							</p>
						</div>
					</div>
				</div>
				<div class="swiper-button-prev prev_btn"></div>
				<div class="swiper-button-next next_btn"></div>
			</div>
			<div class="scroll">
				<img src="<?php echo G5_THEME_URL ?>/img/new/ms1_scroll.png" alt="" class="icon">
				<span class="txt">Scroll down</span>
			</div>
		</section>

		<section id="brand" class="main_section ms2 mh100vh">
			<div class="cont cont01">
				<div class="inner2 cont_box">
					<div class="tit_box pc">
						<p class="tit tit01">
							<span class="txt">
								반짝하고 사라지는 브랜드가 아닌
								<span class="copy">반짝하고 사라지는 브랜드가 아닌</span>
							</span>
						</p>
						<p class="tit tit02">
							<span class="txt">
								모두 오래가는 브랜드.
								<span class="copy">모두 오래가는 브랜드.</span>
							</span>
						</p>
						<p class="tit tit03">
							<span class="txt">
								티엠티피자가 지향하는 방향성입니다.
								<span class="copy">티엠티피자가 지향하는 방향성입니다.</span>
							</span>
						</p>
					</div>
					<div class="tit_box tablet">
						<p class="tit tit01">
							<span class="txt">
								반짝하고 사라지는
								<span class="copy">반짝하고 사라지는</span>
							</span>
						</p>
						<p class="tit tit02">
							<span class="txt">
								브랜드가 아닌
								<span class="copy">브랜드가 아닌</span>
							</span>
						</p>
						<p class="tit tit03">
							<span class="txt">
								모두 오래가는 브랜드.
								<span class="copy">모두 오래가는 브랜드.</span>
							</span>
						</p>
						<p class="tit tit04">
							<span class="txt">
								티엠티피자가
								<span class="copy">티엠티피자가</span>
							</span>
						</p>
						<p class="tit tit05">
							<span class="txt">
								지향하는 방향성입니다.
								<span class="copy">지향하는 방향성입니다.</span>
							</span>
						</p>
					</div>
				</div>
			</div>
			<a href="tel:1833-9455" class="inq_circle">
				<img src="<?php echo G5_THEME_URL ?>/img/new/ms2_call_icon.png" alt="" class="icon">
				<p class="txt">가맹상담 <br>1833-9455</p>
			</a>
		</section>

		<section id="menu" class="main_section ms3 mh100vh">
			<div class="inner2">
				<div class="titbox">
					<img src="<?php echo G5_THEME_URL ?>/img/new/ms3_titimg.png" alt="메인 메뉴" class="tit_img">
				</div>
				<div class="swiper ms3_swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide item">
							<a href="/menu.php" class="link">
								<div class="imgbox">
									<img src="<?php echo G5_THEME_URL ?>/img/sub_02/menu_01_tmt.jpg" alt="티엠티피자" class="img">
									<div class="badge_effect">
										<img src="<?php echo G5_THEME_URL ?>/img/main/best_effect.svg" alt="베스트 메뉴" class="bg">
										<p class="txt">BEST</p>
									</div>
								</div>
								<div class="txtbox">
									<p class="tit">티엠티피자</p>
									<p class="desc">TMT Pizza</p>
								</div>		
								<ul class="hoverbox">
									<li>
										<span class="size typeS">S</span>
										<p class="price">13,900 <span class="small">원</span></p>
									</li>
									<li>
										<span class="size typeR">R</span>
										<p class="price">20,900 <span class="small">원</span></p>
									</li>
									<li>
										<span class="size typeL">L</span>
										<p class="price">24,900 <span class="small">원</span></p>
									</li>
								</ul>
							</a>
						</div>
						<div class="swiper-slide item">
							<a href="/menu.php" class="link">
								<div class="imgbox">
									<img src="<?php echo G5_THEME_URL ?>/img/sub_02/menu_00_truffle.jpg" alt="트러플머쉬룸피자" class="img">
									<div class="badge_effect">
										<img src="<?php echo G5_THEME_URL ?>/img/main/new_effect2.svg" alt="메뉴" class="bg">
										<p class="txt">NEW</p>
									</div>
								</div>
								<div class="txtbox">
									<p class="tit">트러플머쉬룸피자</p>
									<p class="desc">Truffle Mushroom Pizza</p>
								</div>		
								<ul class="hoverbox">
									<li>
										<span class="size typeS">S</span>
										<p class="price">13,900 <span class="small">원</span></p>
									</li>
									<li>
										<span class="size typeR">R</span>
										<p class="price">20,900 <span class="small">원</span></p>
									</li>
									<li>
										<span class="size typeL">L</span>
										<p class="price">24,900 <span class="small">원</span></p>
									</li>
								</ul>
							</a>
						</div>
						<div class="swiper-slide item">
							<a href="/menu.php" class="link">
								<div class="imgbox">
									<img src="<?php echo G5_THEME_URL ?>/img/sub_02/menu_02_egg.jpg" alt="에그마요피자" class="img">
								</div>
								<div class="txtbox">
									<p class="tit">에그마요피자</p>
									<p class="desc">Egg Mayo Pizza</p>
								</div>		
								<ul class="hoverbox">
									<li>
										<span class="size typeS">S</span>
										<p class="price">13,900 <span class="small">원</span></p>
									</li>
									<li>
										<span class="size typeR">R</span>
										<p class="price">20,900 <span class="small">원</span></p>
									</li>
									<li>
										<span class="size typeL">L</span>
										<p class="price">24,900 <span class="small">원</span></p>
									</li>
								</ul>
							</a>
						</div>
						<div class="swiper-slide item">
							<a href="/menu.php" class="link">
								<div class="imgbox">
									<img src="<?php echo G5_THEME_URL ?>/img/sub_02/menu_03_nacho.jpg" alt="쵸피" class="img">
								</div>
								<div class="txtbox">
									<p class="tit">나쵸피자</p>
									<p class="desc">Nacho Pizza</p>
								</div>		
								<ul class="hoverbox">
									<li>
										<span class="size typeS">S</span>
										<p class="price">13,900 <span class="small">원</span></p>
									</li>
									<li>
										<span class="size typeR">R</span>
										<p class="price">20,900 <span class="small">원</span></p>
									</li>
									<li>
										<span class="size typeL">L</span>
										<p class="price">24,900 <span class="small">원</span></p>
									</li>
								</ul>
							</a>
						</div>
					</div>
				</div>
				<div class="btnbox">
					<a href="/menu.php" class="m_more_btn">
						<span class="txt">메뉴 전체 보기</span>
						<img src="<?php echo G5_THEME_URL ?>/img/new/more_svg.svg" alt="" class="icon">
					</a>
				</div>
			</div>
		</section>

		<section id="contact" class="main_section ms4">
			<div class="contbox">
				<div class="txtbox">
					<h3 class="desc">점주님이 티엠티피자를 선택한 진짜 이유!</h3>
					<h1 class="tit">
						현직 티엠티피자 <br>
						점주님의 리얼 인터뷰
					</h1>
					<a href="https://www.youtube.com/@tmtcompany_official" class="m_more_btn" target="_blank">
						<span class="txt">자세히 보기</span>
						<img src="<?php echo G5_THEME_URL ?>/img/new/more_svg.svg" alt="" class="icon">
					</a>
					<div class="controls ms4_controls">
						<div class="swiper-button-prev prev_btn"></div>
						<div class="swiper-button-next next_btn"></div>
					</div>
				</div>
				<div class="slidebox">
					<div class="swiper ms4_swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide item">
								<a href="https://www.youtube.com/watch?v=bkNrHx_uJOg" class="link" target="_blank">
									<img src="<?php echo G5_THEME_URL ?>/img/new/ms4_ytb_thum1.jpg" alt="치위생사 퇴사 후 창업, 원금회수 6개월 🔥 ㅣ 티엠티피자 양산웅상점 솔직한이야기" class="img">
								</a>
							</div>
							<div class="swiper-slide item">
								<a href="https://www.youtube.com/watch?v=6HlnLFZTLm8" class="link" target="_blank">
									<img src="<?php echo G5_THEME_URL ?>/img/new/ms4_ytb_thum2.jpg" alt="직원에서 점주님으로, 눈물의 인터뷰😂😂 ｜티엠티피자 경산옥산점 감동스토리" class="img">
								</a>
							</div>
							<div class="swiper-slide item">
								<a href="https://www.youtube.com/watch?v=Ft0zC1VG7yk" class="link" target="_blank">
									<img src="<?php echo G5_THEME_URL ?>/img/new/ms4_ytb_thum3.jpg" alt="💰억소리나는 매출을 유지하는 비법💰｜티엠티피자 경북대점 솔직운영후기" class="img">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="ms4_marquee marquee" data-duration="6">
				<div class="marquee_group">
					<div class="item">WE MAKE PIZZAS YOU’LL WANT EVERY DAT</div>
					<div class="item">WE MAKE PIZZAS YOU’LL WANT EVERY DAT</div>
					<div class="item">WE MAKE PIZZAS YOU’LL WANT EVERY DAT</div>
					<div class="item">WE MAKE PIZZAS YOU’LL WANT EVERY DAT</div>
					<div class="item">WE MAKE PIZZAS YOU’LL WANT EVERY DAT</div>
				</div>
			</div>
		</section>

		<section id="community" class="main_section ms5">
			<div class="inner2">
				<div class="titbox">
					<img src="<?php echo G5_THEME_URL ?>/img/new/ms5_titimg.png" alt="메인 메뉴" class="tit_img">
				</div>
				<div class="slidebox">
					<div class="swiper ms5_swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide item">
								<a href="#none" class="link">	
									<div class="imgbox">
										<img src="<?php echo G5_THEME_URL ?>/img/main/event_4.jpg" alt="신메뉴 트러플머쉬룸 피자 출시!"  class="img">
									</div>
									<div class="txtbox">
										<p class="tit">[신메뉴]</p>
										<p class="desc">트러플머쉬룸 피자 출시!</p>
									</div>
								</a>
							</div>
							<div class="swiper-slide item">
								<a href="#none" class="link">	
									<div class="imgbox">
										<img src="<?php echo G5_THEME_URL ?>/img/main/event_5.jpg" alt="2025 우수가맹점 울산 신천점"  class="img">
									</div>
									<div class="txtbox">
										<p class="tit">[2025 우수가맹점]</p>
										<p class="desc">울산 신천점</p>
									</div>
								</a>
							</div>
							<div class="swiper-slide item">
								<a href="#none" class="link">	
									<div class="imgbox">
										<img src="<?php echo G5_THEME_URL ?>/img/main/event_6.jpg" alt="미미네 유기견 보호소 봉사활동"  class="img">
									</div>
									<div class="txtbox">
										<p class="tit">[봉사]</p>
										<p class="desc">미미네 행복한 보호소 봉사활동</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="btnbox">
					<a href="/news" class="m_more_btn">
						<span class="txt">자세히 보기</span>
						<img src="<?php echo G5_THEME_URL ?>/img/new/more_svg.svg" alt="" class="icon">
					</a>
				</div>
			</div>
		</section>

	</div>

	<!-- common footer -->
	<?php include_once(G5_THEME_PATH.'/common_footer.php'); ?>

</div>


<script src="<?php echo G5_THEME_URL ?>/js/new_main.js"></script>


<?php
include_once(G5_THEME_PATH.'/tail.php');