<!-- header -->
<header id="header" class="header">
    <div class="inner h_inner">
		<div class="h_left">		
			<div class="logobox">
				<a href="<?php echo $path ?>index.php">
					<img src="<?php echo $path ?>img/logo.png" alt="" class="logo" />
					<img src="<?php echo $path ?>img/logo_w.png" alt="" class="logo_w" />
				</a>
			</div>
		</div>
		<div class="h_nav">
			<li>
				<a href="<?php echo $path ?>company/about.php" class="link">About Us</a>
			</li>
			<li>
				<a href="<?php echo $path ?>flights/free.php" class="link">Balloon Flights</a>
			</li>
			<li>
				<a href="<?php echo $path ?>reservation/list.php" class="link">Book Now</a>
			</li>
			<li>
				<a href="<?php echo $path ?>community/notice.php" class="link">Community</a>
			</li>
		</div>	
		<div class="h_right">
			<!-- 로그인
			<a href="<?php echo $path ?>account/login.php" class="side_btn">
				<i class="ph ph-sign-in"></i>
			</a>
			-->
			<a href="<?php echo $path ?>account/login.php" class="side_btn">
				<i class="ph ph-sign-out"></i>
			</a> 
			<a href="<?php echo $path ?>mypage/profile_edit.php" class="side_btn pc"><i class="ph ph-user"></i></a>
			<button type="button" class="side_btn menu_open"><i class="ph ph-list"></i></button>
		</div>
    </div>
</header>