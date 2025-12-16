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
        <div id="qna_pwd_popup" class="modal show">
            <div class="modal_box">
                <p class="modal_tit">비밀번호 입력</p>
                <p class="modal_desc">
					게시글 비밀번호를 입력해 주세요
				</p>
				<div class="input_box">
					<input type="text" class="input_text" placeholder="비밀번호를 입력해주세요.">
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
