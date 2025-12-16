<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK TRAVEL</title>

    <?php include "../script.php" ?>

</head>

<body class="modal_open">


    <div class="wrap">      
       <div id="rv_write_popup" class="modal ver2 show">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">리뷰 작성</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body">
					<div class="rate_box">
						<div class="top">
							<div class="title">만족도</div>
							<div class="rating_box">
								<div class="rating">
									<input type="radio" id="star1-5" name="rating1" value="5" class="input_star" />
									<label for="star1-5" class="label_star"></label>
									<input type="radio" id="star1-4" name="rating1" value="4" class="input_star" checked />
									<label for="star1-4" class="label_star"></label>
									<input type="radio" id="star1-3" name="rating1" value="3" class="input_star" />
									<label for="star1-3" class="label_star"></label>
									<input type="radio" id="star1-2" name="rating1" value="2" class="input_star" />
									<label for="star1-2" class="label_star"></label>
									<input type="radio" id="star1-1" name="rating1" value="1" class="input_star" />
									<label for="star1-1" class="label_star"></label>
								</div>
							</div>
						</div>
					</div>
					<div class="input_box">
						<label class="label_text">어떤 점이 좋았나요?</label>
						<textarea class="input_text" placeholder="내용을 입력해 주세요"></textarea>
					</div>
					<div class="file_box">
						<label for="rv_file" class="label_file">
							<span class="icon"></span>
							<span class="name">파일을 선택해주세요</span>
							<span class="delete"></span>
						</label>
						<input type="file" id="rv_file" class="input_file" multiple></input>
						<div class="btnbox">
							<button type="button" class="button typeB auto file_btn">파일첨부</button>
						</div>
					</div>
				</div>
                <div class="modal_btnbox">
                    <button class="modal_btn typeA">작성하기</button>
                </div>
			</div>
        </div>
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>


</body>

</html>
