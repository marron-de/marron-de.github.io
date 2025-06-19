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


    <div class="wrap reserve_wrap">     


    	<?php include "header.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section re_sec">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_tit center">예약하기</p>
					</div>
					<div class="step_box">
						<div class="item on check">
							<p class="txt">
								<span class="num">STEP 1</span>
								<span class="tit">예약 정보</span>
							</p>
							<div class="circle"></div>
						</div>
						<div class="line on"></div>
						<div class="item on">
							<p class="txt">
								<span class="num">STEP 2</span>
								<span class="tit">예약자 정보</span>
							</p>
							<div class="circle"></div>
						</div>
						<div class="line"></div>
						<div class="item">
							<p class="txt">
								<span class="num">STEP 3</span>
								<span class="tit">결제 정보</span>
							</p>
							<div class="circle"></div>
						</div>
					</div>
					<div class="re_contbox">
						<div class="formwrap">
							<p class="s_subtit bold">예약자 정보</p>
							<div class="form_box">
								<div class="form_item input_box">
									<label class="label_text required">성명</label>
									<input type="text" class="input_text" placeholder="성명을 입력해 주세요" value="홍길동">
									<p class="input_status error">
										* 성명은 영어로 입력해 주세요
									</p>
								</div>
								<div class="form_item input_box">
									<label class="label_text required">성별</label>
									<div class="radio_wrap">
										<div class="radio_box mh">
											<input type="radio" name="frm_gender" id="frm_gender1" class="input_radio" checked>
											<label for="frm_gender1" class="label_radio">여성</label>
										</div>
										<div class="radio_box mh">
											<input type="radio" name="frm_gender" id="frm_gender2" class="input_radio">
											<label for="frm_gender2" class="label_radio">남성</label>
										</div>
									</div>
								</div>
								<div class="form_item input_box">
									<label class="label_text required">국적</label>
									<div class="select_box">
										<select class="select full">
											<option value="">국적을 선택해주세요</option>
											<option value="kr">대한민국</option>
											<option value="us">미국</option>
											<option value="jp">일본</option>
											<option value="cn">중국</option>
											<option value="de">독일</option>
										</select>
									</div>
								</div>
								<div class="form_item input_box">
									<label class="label_text required">휴대폰</label>
									<input type="text" class="input_text" placeholder="휴대폰 번호를 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<label class="label_text required">이메일</label>
									<input type="text" class="input_text" placeholder="이메일을 입력해 주세요">
								</div>
								<div class="form_item input_box">
									<label class="label_text required">SNS 아이디</label>
									<div class="input_flex">
										<div class="select_box">
											<select class="select">
												<option value="카카오톡">카카오톡</option>
												<option value="페이스북">페이스북</option>
												<option value="구글">구글</option>
											</select>
										</div>
										<input type="text" class="input_text" placeholder="아이디를 입력해 주세요">
									</div>
								</div>
								<div class="form_item input_box full">
									<label class="label_text">특별 요청</label>
									<textarea class="input_text" placeholder="특별요청사항/SNS ID/항공편/미팅시간/호텔명/호텔주소를 꼭 입력해 주세요!"></textarea>
								</div>
							</div>
						</div>
						<div class="tblwrap">
							<div class="tbl_titbox">								
								<p class="s_subtit bold">참가자 정보</p>
								<div class="check_box">
									<input type="checkbox" id="infoSame" class="input_check">
									<label for="infoSame" class="label_check">위의 예약 정보와 동일</label>
								</div>
							</div>
							<div class="tbl_box mob_tbl">
								<table class="tbl">
									<colgroup>
										<col width="92">
										<col width="152">
										<col width="132">
										<col width="152">
										<col width="182">
										<col width="370">
									</colgroup>
									<thead>
										<tr>
											<th>범주</th>
											<th>성명</th>
											<th>성별</th>
											<th>국적</th>
											<th>휴대폰</th>
											<th>미팅 포인트</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-th="구분">홍길동</td>
											<td data-th="성명">
												<div class="input_box">
													<input type="text" class="input_text">
												</div>
											</td>
											<td data-th="성별">
												<div class="select_box">
													<select class="select full">
														<option value="여성">여성</option>
														<option value="남성">남성</option>
													</select>
												</div>
											</td>
											<td data-th="국적">
												<div class="input_box">
													<input type="text" class="input_text">
												</div>
											</td>
											<td data-th="휴대폰">
												<div class="input_box">
													<input type="text" class="input_text">
												</div>
											</td>
											<td data-th="미팅 포인트">
												<div class="input_box">
													<input type="text" class="input_text">
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>							
						<div class="button_box">
							<button type="button" class="button typeB">취소</button>
							<button type="button" class="button typeA">예약하기</button>
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