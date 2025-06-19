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


    <div class="wrap group_wrap">     


    	<?php include "header.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section gr_sec">
				<div class="inner layout">
					<div class="side_area">						
    					<?php include "customer_banner.php" ?>
					</div>
					<div class="cont_area">
						<div class="sub_titbox">
							<p class="s_subtit bold">단체 예약</p>
						</div>
						<div class="form_wrap">
							<p class="form_tit">연락처 정보</p>
							<div class="form_box">
								<div class="form_item input_box">
									<label class="label_text">회사/기관명</label>
									<input type="text" class="input_text" placeholder="회사/기관명을 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<label class="label_text">부서명 / 직책</label>
									<div class="input_flex">
										<input type="text" class="input_text" placeholder="부서명">
										<input type="text" class="input_text" placeholder=" 직책">
									</div>
								</div>
								<div class="form_item input_box">
									<label class="label_text required">담당자 이름</label>
									<input type="text" class="input_text" placeholder="담당자 이름을 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<label class="label_text required">휴대폰</label>
									<input type="text" class="input_text" placeholder="휴대폰 번호를 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<label class="label_text">이메일</label>
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
							</div>
						</div>						
						<div class="form_wrap">
							<p class="form_tit">행사 관련 정보</p>
							<div class="form_box">
								<div class="form_item input_box wid1">
									<label class="label_text required">행사 참가자 수</label>
									<input type="text" class="input_text" placeholder="예상 인원을 입력해 주세요">
									<p class="input_status ">
										(행사 규모에 따라 현지 담당자와 사전 점검 또는 방문 시연이 진행될 수 있습니다.)
									</p>
								</div>
								<div class="form_item input_box wid2">
									<label class="label_text required">출발 예정일</label>
									<input type="text" class="input_text datepicker" placeholder="출발 예정일을 선택해 주세요.">
								</div>
								<div class="form_item input_box wid1">
									<label class="label_text required">예정 목적지</label>
									<input type="text" class="input_text" placeholder="예: 홍콩, 대만">
									<p class="input_status">
										방문하고자 하는 목적지를 입력해 주세요. (여행이 금지된 국가를 제외한 전 세계에서 이용 가능합니다.)
									</p>
								</div>
								<div class="form_item input_box wid2">
									<label class="label_text">희망 숙박 등급</label>
									<div class="select_box">
										<select class="select full">
											<option value="">호텔 등급 선택</option>
											<option value="5">5성급</option>
											<option value="4">4성급</option>
											<option value="3">3성급</option>
											<option value="2">2성급</option>
											<option value="1">1성급</option>
											<option value="etc">기타 / 등급 없음</option>
										</select>
									</div>
								</div>
								<div class="form_item input_box wid3">
									<label class="label_text">MICE 행사 포함</label>
									<div class="radio_wrap">
										<div class="radio_box">
											<input type="radio" name="group_opt1" id="group_opt1-1" class="input_radio">
											<label for="group_opt1-1" class="label_radio">예</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="group_opt1" id="group_opt1-2" class="input_radio" checked>
											<label for="group_opt1-2" class="label_radio">
												<span class="txt">아니요</span>
												<span class="small">(회의, 인센티브, 컨퍼런스, 전시회)</span>
											</label>
										</div>
									</div>
								</div>
								<div class="form_item input_box wid3">
									<label class="label_text">만찬·홀 예약</label>
									<div class="radio_wrap">
										<div class="radio_box">
											<input type="radio" name="group_opt2" id="group_opt2-1" class="input_radio">
											<label for="group_opt2-1" class="label_radio">예</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="group_opt2" id="group_opt2-2" class="input_radio" checked>
											<label for="group_opt2-2" class="label_radio">
												<span class="txt">아니요</span>
												<span class="small">(회사 전용 홀, 회사 주최 단독 만찬 개최 여부)</span>
											</label>
										</div>
									</div>
								</div>
								<div class="form_item input_box wid3">
									<label class="label_text">기관 및 기업 방문</label>
									<div class="radio_wrap">
										<div class="radio_box">
											<input type="radio" name="group_opt3" id="group_opt3-1" class="input_radio">
											<label for="group_opt1-1" class="label_radio">예</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="group_opt3" id="group_opt3-2" class="input_radio" checked>
											<label for="group_opt3-2" class="label_radio">아니요</label>
										</div>
									</div>
								</div>
								<div class="form_item full input_box">
									<label class="label_text">기타 참고사항</label>
									<textarea  class="input_text" placeholder="기타 참고사항을 입력해 주세요"></textarea>
								</div>
							</div>
						</div>						
						<div class="button_box">
							<button type="button" class="button typeA">요청하기</button>
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


</body>

</html>