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
        <div id="roomOption_popup" class="modal ver2 show">
            <div class="modal_box">
				<div class="modal_head">
                	<p class="tit">객실 및 인원 수</p>
					<button type="button" class="modal_close"></button>
				</div>
				<div class="modal_body">
					<div class="input_box">
						<div class="input_item">
							<p class="label_text">객실</p>
							<div class="control_box">
								<button type="button" class="input_control input_minus"></button>
								<input type="text" class="input_count" value="1">
								<button type="button" class="input_control input_plus"></button>				
							</div>			
						</div>
						<div class="input_item">
							<p class="label_text">성인</p>
							<div class="control_box">
								<button type="button" class="input_control input_minus"></button>
								<input type="text" class="input_count" value="2">
								<button type="button" class="input_control input_plus"></button>				
							</div>			
						</div>
						<div class="input_item">
							<p class="label_text">아동</p>
							<div class="control_box">
								<button type="button" class="input_control input_minus"></button>
								<input type="text" class="input_count" value="0">
								<button type="button" class="input_control input_plus"></button>				
							</div>			
						</div>
					</div>
				</div>
                <div class="modal_btnbox">
                    <button class="modal_btn typeA full">선택</button>
                </div>
            </div>
        </div>
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>


</body>

</html>
