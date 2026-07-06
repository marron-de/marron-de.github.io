<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK TRAVEL</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap">      
        <div id="line_popup" class="modal show">
            <div class="modal_box">
                <p class="modal_tit">LINE QR 이미지</p>
                <p class="modal_desc">
					QR 이미지를 업로드 해주세요.
				</p>
				<div class="input_box">
					<div class="input_box_file">
						<label for="bo_file1" class="input_name">
							<span class="txt">파일을 첨부해주세요</span>
							<span class="delete"></span>
						</label>
						<input type="file" id="bo_file1" class="input_file" placeholder="파일을 첨부해주세요">
						<button type="button" class="input_btn">파일 선택</button>
					</div>
				</div>
                <div class="modal_btnbox">
                    <button class="modal_btn typeA">확인</button>
                    <button class="modal_btn typeB modal_close">취소 </button>
                </div>
            </div>
        </div>
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>


</body>

</html>
