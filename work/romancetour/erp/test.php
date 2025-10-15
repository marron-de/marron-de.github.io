<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>테스트</title>

    <?php include "script.php" ?>

</head>

<body>


    <div class="wrap">


    	<?php include "header.php" ?>

        <!-- container -->
        <div class="container">

            <section class="main_section ms1">
                <div class="inner">
                    <div class="select_box">
                        <select class="select select2" data-th="선택해주세요">
                            <option value="" data-hidden="true">선택해주세요</option>
                            <option value="선택1">선택1</option>
                            <option value="선택2">선택2</option>
                            <option value="선택3">선택3</option>
                        </select>
                    </div>
					<div class="select_box">
						<select class="select select2" data-class="ver2">
							<option value="에디터 사용" data-class="typeA" selected>에디터 사용</option>
							<option value="PDF로 등록" data-class="typeC">PDF로 등록</option>
						</select>
					</div>
                    <div class="input_box">
                        <input type="text" class="input_text datepicker">
                    </div>
                </div>
            </section>

            <section class="main_section ms2">
                <div class="inner">
                </div>
            </section>

        </div>


    	<?php include "footer.php" ?>

        <!-- modal -->
        <div class="modal">
            <div class="modal_box">
                <p class="modal_tit">타이틀</p>
                <p class="modal_desc">설명 텍스트입니다.</p>
                <div class="modal_btnbox">
                    <button class="modal_btn typeB modal_close">확인</button>
                </div>
            </div>
        </div>

    </div>



    <!-- JS -->
    <script src="js/common.js"></script>



</body>

</html>