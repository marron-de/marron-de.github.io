<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행대장</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap">      
        <div class="popup main_popup mob_ver show">
            <div class="popup_box">
                <div class="slidebox">					
					<div class="swiper main_mobpopup_swiper">
						<div class="swiper-wrapper">
							<a href="" class="swiper-slide item">
								<img src="<?php echo $path ?>img/mob_main_popup1.jpg" alt="" class="img">
							</a>
							<a href="" class="swiper-slide item">
								<img src="<?php echo $path ?>img/mob_main_popup2.jpg" alt="" class="img">
							</a>
						</div>						
					</div>	
				</div>
                <div class="pop_btnbox">
                    <button class="pop_btn today_btn">오늘 그만보기</button>
					<div class="swiper-pagination paging"></div>
                    <button class="pop_btn pop_close">닫기</button>
                </div>
            </div>
        </div>
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>


</body>

</html>
