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


    <div class="wrap group_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section gr_sec">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_tit">단체문의</p>
					</div>
					<div class="contbox">
						<div class="contitem">
							<div class="cont_tit">
								<span class="txt">연락처 정보</span>
							</div>
							<div class="form_box">
								<div class="form_item input_box">
									<p class="label_text">회사/단체명</p>
									<input type="text" class="input_text" placeholder="회사/기관명을 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<p class="label_text">부서명 / 직책</p>
									<div class="input_flex">
										<input type="text" class="input_text" placeholder="부서명">
										<input type="text" class="input_text" placeholder="직책">
									</div>
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">담당자 이름</span>
									</p>
									<input type="text" class="input_text" placeholder="담당자 이름을 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">휴대폰</span>
									</p>
									<input type="text" class="input_text" placeholder="휴대폰 번호를 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<p class="label_text">이메일</p>
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
							</div>
						</div>
						<div class="contitem">
							<div class="cont_tit">
								<span class="txt">행사관련 정보</span>
							</div>
							<div class="form_box">
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">예상행사인원</span>
									</p>
									<input type="text" class="input_text" placeholder="예상 인원을 입력해 주세요">
									<p class="input_status">
										(행사 인원 규모에 맞춰 현지동반과 사전답사 및 방문 프리젠테이션 등을 진행합니다.)
									</p>
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">예상출발일</span>
									</p>
									<input type="text" class="input_text datepicker" placeholder="출발 예정일을 선택해 주세요." readonly>
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">예정방문지</span>
									</p>
									<input type="text" class="input_text" placeholder="예: 홍콩, 대만">
									<p class="input_status">
										행사 예정 여행지를 기재바랍니다. <br class="tablet">
										( 여행금지 국가외 전세계 현지 수배가능합니다.)
									</p>
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										<span class="required">희망숙박등급</span>
									</p>
									<div class="select_box">
										<select class="select">
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
								<div class="form_item full input_box">
									<p class="label_text">MICE 행사 포함</p>
									<div class="radio_wrap">
										<div class="radio_box">
											<input type="radio" name="group_opt1" id="group_opt1-1" class="input_radio">
											<label for="group_opt1-1" class="label_radio">진행</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="group_opt1" id="group_opt1-2" class="input_radio" checked>
											<label for="group_opt1-2" class="label_radio">
												<span class="txt">진행안함</span>
												<span class="small">(Meeting, Incentive, Conference, Exhibition)</span>
											</label>
										</div>
									</div>
								</div>
								<div class="form_item full input_box">
									<p class="label_text">단독만찬</p>
									<div class="radio_wrap">
										<div class="radio_box">
											<input type="radio" name="group_opt2" id="group_opt2-1" class="input_radio">
											<label for="group_opt2-1" class="label_radio">진행</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="group_opt2" id="group_opt2-2" class="input_radio" checked>
											<label for="group_opt2-2" class="label_radio">
												<span class="txt">진행안함</span>
												<span class="small">(업체 전용홀, 업체가 주최하는 단독 만찬 진행여부)</span>
											</label>
										</div>
									</div>
								</div>
								<div class="form_item full input_box">
									<p class="label_text">기관및 업체방문</p>
									<div class="radio_wrap">
										<div class="radio_box">
											<input type="radio" name="group_opt3" id="group_opt3-1" class="input_radio">
											<label for="group_opt3-1" class="label_radio">방문함</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="group_opt3" id="group_opt3-2" class="input_radio" checked>
											<label for="group_opt3-2" class="label_radio">방문안함</label>
										</div>
									</div>
								</div>
								<div class="form_item full input_box">
									<p class="label_text">기타 참고사항</p>
									<textarea  class="input_text" placeholder="기타 참고사항을 입력해 주세요"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="button_box center">
						<button type="button" class="button typeA">문의하기</button>
					</div>
				</div>
			</section>

        </div>


    	<?php include "../common/fixed_nav.php" ?>

    	<?php include "../common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include "../common/footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>



</body>

</html>