<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK 웹테크</title>

    <?php include "script.php" ?>

</head>

<body>


    <div class="wrap">

        <!-- detail modal -->
        <div class="modal detail_modal show">
			<div class="modal_inner">
				<div class="modal_topbox">
					<div class="leftbox"></div>
					<div class="rightbox">
						<button type="button" class="modal_close"></button>
					</div>
				</div>
				<div class="modal_box">
					<div class="detail_box">
						<div class="txtbox">
							<p class="cate">
								ICT 솔루션 도입
							</p>
							<p class="tit">
								여행사 홈페이지 및 APP 개발 서비스
							</p>
							<p class="desc">
								프로젝트 설명글입니다. 프로젝트 설명글입니다. <br>
								프로젝트 설명글입니다. 프로젝트 설명글입니다. <br>
								프로젝트 설명글입니다. 프로젝트 설명글입니다. 
							</p>
							<div class="btnbox">
								<button type="button" class="screen_btn pc_btn on"><i data-lucide="monitor"></i></button>
								<button type="button" class="screen_btn mob_btn"><i data-lucide="smartphone"></i></button>
							</div>
							<a href="https://tktest.shop/org_user/tktravel/index.php" class="more_link" target="_blank">
								<span class="txt">사이트 바로가기</span>
								<i class="icon" data-lucide="arrow-up-right"></i>
							</a>
						</div>
						<div class="previewbox">
							<div class="preview pc_preview on">
								<div class="device"></div>
								<div class="screen">
									<iframe src="https://tktest.shop/org_user/tktravel/index.php" frameborder="0"></iframe>
								</div>
							</div>
							<div class="preview mob_preview">
								<div class="device">
									<div class="topbar"></div>
								</div>
								<div class="screen">
									<iframe src="https://tktest.shop/org_user/tktravel/index.php" frameborder="0"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>

    </div>



    <!-- JS -->
    <script src="js/common.js"></script>



</body>

</html>