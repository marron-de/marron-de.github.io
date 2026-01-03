<?php if( $bo_table == "store") { ?>

<div class="wrap store_wrap">

	<!-- common header -->
	<?php include_once(G5_THEME_PATH.'/common_header.php'); ?>

	<div class="lnb_wrap sub_03_lnb">
		<div class="lnb_inner">
			<p class="lnb_tit">STORE</p>
		</div>
	</div>

	<!-- conrtents -->
	<div class="container sub_container inner">

		<h1 class="store_title">티엠티피자 <strong>매장찾기</strong></h1>

    	<div class="store_cont board_cont">

<?php } else if($bo_table == "news") { ?>

<div class="wrap community_wrap">

	<!-- common header -->
	<?php include_once(G5_THEME_PATH.'/common_header.php'); ?>

	<div class="lnb_wrap sub_05_lnb">
		<div class="lnb_inner">
			<p class="lnb_tit">COMMUNITY</p>
		</div>
	</div>

	<!-- contents -->
	<div class="container sub_container inner">

    	<div class="community_cont board_cont">
				
			<ul class="tab_navbox">
				<li class="tab_nav on">
					<a href="/news" class="link">새소식</a>
				</li>
				<li class="tab_nav">
					<a href="/story" class="link">가맹점이야기</a>
				</li>
			</ul>

                                   
<?php } else if($bo_table == "story") { ?>

<div class="wrap community_wrap">

	<!-- common header -->
	<?php include_once(G5_THEME_PATH.'/common_header.php'); ?>

	<div class="lnb_wrap sub_05_lnb">
		<div class="lnb_inner">
			<p class="lnb_tit">COMMUNITY</p>
		</div>
	</div>

	<!-- contents -->
	<div class="container sub_container inner">

    	<div class="community_cont board_cont">
				
			<ul class="tab_navbox">
				<li class="tab_nav">
					<a href="/news" class="link">새소식</a>
				</li>
				<li class="tab_nav on">
					<a href="/story" class="link">가맹점이야기</a>
				</li>
			</ul>

                                   
<?php } else {} ?>