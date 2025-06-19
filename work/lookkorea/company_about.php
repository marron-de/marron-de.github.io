<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOK KOREA</title>

    <?php include "script.php" ?>

</head>

<body>


    <div class="wrap company_wrap">     


    	<?php include "header2.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section sub_common co_sec">
				<div class="inner layout">
					<div class="side_area">			
    					<?php include "side_menu2.php" ?>
    					<?php include "customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_cont company_cont">
							<div class="about_box">
								<div class="about_item1">
									<div class="imgbox"></div>
									<div class="txtbox">
										<div class="titbox">
											<p class="title">
												평범한 일상 속에도, <br>
												당신만의 특별한 풍경이 <br>
												펼쳐지기를 바랍니다.
											</p>
										</div>
										<div class="descbox">
											<p class="desc">
												<span class="bold">LOOK KOREA</span>는 단순히 예약 서비스를 <br>
												제공하는 것을 넘어 여행을 준비하는 모든 과정에서 고객과 함께하며, 출발 전부터 여행이 끝난 후까지 모든 여정을 세심하게 지원합니다.
												<br><br>
												고객이 편리하고 만족스러운 여행 경험을 할 수 있도록 직관적인 서비스와 신뢰할 수 있는 정보를 제공하며, 세밀한 여행 설계를 통해 여행의 본질에 집중할 수 있도록 돕는 것을 최우선으로 합니다.
												<br><br>
												여행의 시작부터 마무리까지, 그리고 그 사이의
												모든 순간에 <span class="bold">LOOK KOREA</span>가 늘 곁에서 든든한 동반자가 되어 드릴 것을 약속합니다.
											</p>
										</div>
									</div>
								</div>
								<div class="about_item2">
									<div class="titbox">
										<p class="tit">Our Values</p>
										<p class="desc">
											LOOK KOREA는 여행의 모든 순간에 <br class="tablet">
											 의미와 감동을 더합니다.
										</p>
									</div>
									<div class="imgbox"></div>
									<div class="descbox">
										<div class="descitem">
											<p class="tit">Beyond Travel</p>
											<p class="desc">
												단순한 이동이 아닌 삶에 <br>
												스며드는 경험을 만듭니다.
											</p>
										</div>
										<div class="descbar"></div>
										<div class="descitem">
											<p class="tit">Curated Journeys</p>
											<p class="desc">
												당신만을 위한 섬세한 
												<br>여정이 시작됩니다.
											</p>
										</div>
										<div class="descbar"></div>
										<div class="descitem">
											<p class="tit">Thoughtful Moments</p>
											<p class="desc">
												여행의 순간마다 <br>
												마음을 담았습니다.
											</p>
										</div>
									</div>
								</div>
							</div>
						
						</div>										
					</div>
				</div>
			</section>

        </div>


    	<?php include "fixed_nav.php" ?>

    	<?php include "footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="js/common.js"></script>

	<!-- 화면 : 사이드메뉴 active -->
	<script>
  		 $(function() {
			$('.side_menu .side_menulist .menuitem').eq(0).addClass('active');
		});
	</script>


</body>

</html>