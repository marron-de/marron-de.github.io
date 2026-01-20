<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여행대장</title>

    <?php include "../script.php" ?>

</head>

<body class="modal_open">


    <div class="wrap">      
        <div id="share_popup" class="modal ver2 show">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">공유하기</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body">
					<div class="sns_box">
						<div class="item">
							<a href="" class="link">
								<img src="<?php echo $path ?>img/share_kakao.png" alt="" class="icon">
								<p class="txt">카카오톡</p>
							</a>
						</div>
						<div class="item">
							<a href="" class="link">
								<img src="<?php echo $path ?>img/share_naver.png" alt="" class="icon">
								<p class="txt">네이버</p>
							</a>
						</div>
						<div class="item">
							<a href="" class="link">
								<img src="<?php echo $path ?>img/share_facebook.png" alt="" class="icon">
								<p class="txt">페이스북</p>
							</a>
						</div>
						<div class="item">
							<a href="" class="link">
								<img src="<?php echo $path ?>img/share_instargram.png" alt="" class="icon">
								<p class="txt">인스타그램</p>
							</a>
						</div>
						<div class="item">
							<button type="button" class="link copy_btn">
								<img src="<?php echo $path ?>img/share_url.png" alt="" class="icon">
								<p class="txt">URL 복사</p>
							</button>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>


</body>

</html>
