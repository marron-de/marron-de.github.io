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



<div class="wrap main_wrap">

	<!-- common header -->
	<?php include_once(G5_THEME_PATH.'/common_header.php'); ?>

	<!-- container -->
	<div class="container">

		<section id="hero" class="main_section main_hero">
			<video autoplay muted playsinline loop>
				<source src="<?php echo G5_THEME_URL ?>/img/main/main_01_sample.mp4" type="mp4">
				<source src="<?php echo G5_THEME_URL ?>/img/main/main_01_sample.mp4" type="video/webm">
			</video>
			<div class="hero_box">
				<div class="tmt_pizza">
					<img src="<?php echo G5_THEME_URL ?>/img/main/T.M.T 1.png" alt="티엠티피자">
				</div>
				<p>
					<span>T</span>OO<br>
					<span>M</span>UCH<br>
					<span>T</span>OPPING
				</p>
			</div>
		</section>

		<section id="brand" class="main_section main_brand">
			<div class="inner brand_box">
				<ul class="br_list">
					<li><img src="<?php echo G5_THEME_URL ?>/img/main/gpgp.png" alt="good price, good pizza"></li>
					<li class="br_card card_01">
						<img src="<?php echo G5_THEME_URL ?>/img/main/br_list_1.jpg" alt="TOGETHER">
						<div class="card_text">
							<p class="br_tit">TOGETHER</p>
							<p class="br_txt">
								고객님, 점주님들과 <br>
								소통하며 <span>함께</span>나아가는 <br>
								브랜드입니다
							</p>
						</div>
					</li>
					<li class="br_card card_02">
						<img src="<?php echo G5_THEME_URL ?>/img/main/br_list_2.jpg" alt="MAKE">
						<div class="card_text">
							<p class="br_tit">MAKE</p>
							<p class="br_txt">
								합리적인 가격에 <br>
								최상의 퀄리티를 <br>
								<span>만들어</span>냅니다
							</p>
						</div>
					</li>
					<li class="br_card card_03">
						<img src="<?php echo G5_THEME_URL ?>/img/main/br_list_3.jpg" alt="TREND">
						<div class="card_text">
							<p class="br_tit">TREND</p>
							<p class="br_txt">
								끊임없이 도전하고 <br>
								시도하며 <span>시장 흐름</span>을<br>
								빠르게 앞서 갑니다
							</p>
						</div>
					</li>
				</ul>
			</div>
		</section>

		<section id="menu" class="main_section main_menu">
			<div class="inner itr_menu_inner">
				<h1><img src="<?php echo G5_THEME_URL ?>/img/main/main_menu.png" alt="메인메뉴"></h1>
				<ul class="itr_menu_box">
					<li class="itr_menu_list">
						<a href="/menu.php">
							<div class="menu_img">
								<img src="<?php echo G5_THEME_URL ?>/img/sub_02/menu_19_pepperoni.png" alt="꽉채운페퍼로니피자">
								<ul class="menu_price">
									<li>
										<span class="col_s size_cip">S</span>
										<p>10,900 <span>원</span></p>
									</li>
									<li>
										<span class="col_r size_cip">R</span>
										<p>17,900 <span>원</span></p>
									</li>
									<li>
										<span class="col_l size_cip">L</span>
										<p>21,900 <span>원</span></p>
									</li>
								</ul>
							</div>
							<ul class="menu_name">
								<li class="m_name_kr">
									꽉채운페퍼로니피자
								</li>
								<li class="m_name_en">
									Fully Loaded Pepperoni Pizza
								</li>
							</ul>
						</a>
					</li>
					<li class="itr_menu_list">
						<a href="/menu.php">
							<div class="menu_img">
								<img src="<?php echo G5_THEME_URL ?>/img/main/sweetphotato.png" alt="달콤고구마무스피자">
								<ul class="menu_price">
									<li>
										<span class="col_s size_cip">S</span>
										<p>10,900 <span>원</span></p>
									</li>
									<li>
										<span class="col_r size_cip">R</span>
										<p>17,900 <span>원</span></p>
									</li>
									<li>
										<span class="col_l size_cip">L</span>
										<p>21,900 <span>원</span></p>
									</li>
								</ul>
							</div>
							<ul class="menu_name">
								<li class="m_name_kr">
									달콤고구마무스피자
								</li>
								<li class="m_name_en">
									Sweet photato Mousse Pizza
								</li>
							</ul>
						</a>
					</li>
					<li class="itr_menu_list">
						<a href="/menu.php">
							<div class="menu_img">
								<img src="<?php echo G5_THEME_URL ?>/img/sub_02/menu_03_nacho.png" alt="나쵸피자">
								<ul class="menu_price">
									<li>
										<span class="col_s size_cip">S</span>
										<p>10,900 <span>원</span></p>
									</li>
									<li>
										<span class="col_r size_cip">R</span>
										<p>17,900 <span>원</span></p>
									</li>
									<li>
										<span class="col_l size_cip">L</span>
										<p>21,900 <span>원</span></p>
									</li>
								</ul>
							</div>
							<ul class="menu_name">
								<li class="m_name_kr">
									나쵸피자
								</li>
								<li class="m_name_en">
									Nacho pizza
								</li>
							</ul>
							<ul class="menu_effect">
								<li class="new_eff">
									<img src="<?php echo G5_THEME_URL ?>/img/main/new_effect.svg" alt="신메뉴">
									<p class="eff_txt">NEW</p>
								</li>
						</ul>
						</a>
					</li>
					<li class="itr_menu_list">
						<a href="/menu.php">
							<div class="menu_img">
								<img src="<?php echo G5_THEME_URL ?>/img/sub_02/menu_01_tmt.png" alt="티엠티피자">
								<ul class="menu_price">
									<li>
										<span class="col_s size_cip">S</span>
										<p>10,900 <span>원</span></p>
									</li>
									<li>
										<span class="col_r size_cip">R</span>
										<p>17,900 <span>원</span></p>
									</li>
									<li>
										<span class="col_l size_cip">L</span>
										<p>21,900 <span>원</span></p>
									</li>
								</ul>
							</div>
							<ul class="menu_name">
								<li class="m_name_kr">
									티엠티피자
								</li>
								<li class="m_name_en">
									TMT Pizza
								</li>
							</ul>
							<ul class="menu_effect">
								<li class="best_eff">
									<img src="<?php echo G5_THEME_URL ?>/img/main/best_effect.svg" alt="베스트 메뉴">
									<p class="eff_txt">BEST</p>
								</li>
							</ul>
						</a>
					</li>
				</ul>
				<div class="more_btn">
					<button class="menu_more_btn">
						<a href="/menu.php">메뉴 전체보기</a>
					</button>
				</div>
			</div>
			<div class="img_slide"></div>
		</section>

		<section id="contact" class="main_section main_contact">
			<div class="inner contact_inner">
				<img src="<?php echo G5_THEME_URL ?>/img/main/main_contact.png" alt="contact us">
				<ul class="contact_box">
					<li class="contact_video"><iframe width="960" height="580" src="https://www.youtube.com/embed/ZwW_Aq2lIyE?si=hSh5HMj4avUyv2Di" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></li>
					<li class="contact_text">
						<p>
						수 많은 점주님들이<br>
						<span class="con_tx_c1">티엠티</span><span class="con_tx_c2">피자</span>를<br>
						<strong>선택</strong>할 수 밖에 없었던<br>
						<strong>진짜 이유!</strong>
						</p>
						<button>
							<a href="/franchise.php">창업 알아보기</a>
						</button>
					</li>
				</ul>
			</div>
		</section>

		<section id="community" class="main_section main_community">
			<ul class="inner comm_inner">
				<li><img class="commu_tit" src="<?php echo G5_THEME_URL ?>/img/main/main_community.png" alt="community"></li>
				<li class="commu_box">
					<ul class="event_box">
						<li class="event_list">
							<a href="#none">
								<div class="photo_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/event_1.png" alt="신메뉴 에그마요 피자 출시!">
								</div> 
								<div class="text_box">
									<p class="event_tit"><strong>[신메뉴]</strong></p>
									<p class="event_txt">에그마요 피자 출시!</p>
								</div>
							</a>
						</li>
						<li class="event_list">
							<a href="#none">
								<div class="photo_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/event_2.png" alt="2025 우수가맹점 경산 옥산점">
								</div>
								<div class="text_box">
									<p class="event_tit"><strong>[2025 우수가맹점]</strong></p>
									<p class="event_txt">경산 옥산점</p>
								</div>
							</a>
						</li>
						<li class="event_list">
							<a href="#none">
								<div class="photo_box">
									<img src="<?php echo G5_THEME_URL ?>/img/main/event_3.png" alt="신메뉴 바삭바삭 나쵸피자 출시!">
								</div>
								<div class="text_box">
									<p class="event_tit"><strong>[신메뉴]</strong></p>
									<p class="event_txt">바삭바삭 나쵸피자 출시!</p>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="comm_btn">
					<button><a href="/community">자세히 보기</a></button>
				</li>
			</ul>
		</section>

	</div>

	<!-- common footer -->
	<?php include_once(G5_THEME_PATH.'/common_footer.php'); ?>

</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');