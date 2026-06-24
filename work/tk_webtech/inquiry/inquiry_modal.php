<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK 웹테크</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap">

        <!-- inquiry modal -->
		<div class="modal inquiry_modal show">
			<div class="modal_inner">
				<div class="modal_topbox">
					<div class="leftbox"></div>
					<div class="rightbox">
						<button type="button" class="modal_close"></button>
					</div>
				</div>
				<div class="modal_box">
					<div class="titbox">
						<p class="tit">온라인 견적 문의</p>
					</div>
					<div class="form_wrap">
						<form action="" class="form">
							<div class="form_box">
								<div class="form_item input_box w50">
									<p class="label_text">
										상담 날짜
									</p>
									<input type="text" class="input_text datepicker" value="2026.06.20">
								</div>
								<div class="form_item input_box w50">
									<p class="label_text">
										상담 시간
									</p>
									<div class="input_flex">
										<div class="radio_box">
											<input type="radio" name="time" id="time1" checked class="input_radio">
											<label for="time1" class="label_radio">오전</label>
										</div>
										<div class="radio_box">
											<input type="radio" name="time" id="time2" class="input_radio">
											<label for="time2" class="label_radio">오후</label>
										</div>
										<div class="input_flex time_flex">
											<div class="select_box">
												<select class="select">
													<option value="01">01</option>
													<option value="02">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
												</select>
											</div>
											<span class="input_txt">:</span>
											<div class="select_box">
												<select class="select">
													<option value="10">10</option>
													<option value="15">15</option>
													<option value="20">20</option>
													<option value="25">25</option>
													<option value="30">30</option>
													<option value="35">35</option>
													<option value="40">40</option>
													<option value="45">45</option>
													<option value="50">50</option>
													<option value="55">55</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form_item input_box w50">
									<p class="label_text">
										담당자 성함 (직급)<span class="required">*</span>
									</p>
									<input type="text" class="input_text" placeholder="담당자 성함 (직급) 입력">
								</div>
								<div class="form_item input_box w50">
									<p class="label_text">
										이메일 주소<span class="required">*</span>
									</p>
									<input type="text" class="input_text" placeholder="이메일 주소 입력">
								</div>
								<div class="form_item input_box w50">
									<p class="label_text">
										전화번호<span class="required">*</span>
									</p>
									<input type="text" class="input_text" placeholder="전화번호 입력">
								</div>
								<div class="form_item input_box w50">
									<p class="label_text">
										업체명(여행사명)<span class="required">*</span>
									</p>
									<input type="text" class="input_text" placeholder="업체명(여행사명) 입력">
								</div>
								<div class="form_item input_box w50">
									<p class="label_text">
										소재지<span class="required">*</span>
									</p>
									<div class="select_box">
										<select class="select">
											<option value="서울">서울</option>
											<option value="부산">부산</option>
											<option value="대구">대구</option>
											<option value="인천">인천</option>
											<option value="광주">광주</option>
											<option value="대전">대전</option>
											<option value="울산">울산</option>
											<option value="세종">세종</option>
											<option value="경기">경기</option>
											<option value="강원">강원</option>
											<option value="충북">충북</option>
											<option value="충남">충남</option>
											<option value="전북">전북</option>
											<option value="전남">전남</option>
											<option value="경북">경북</option>
											<option value="경남">경남</option>
											<option value="제주">제주</option>
											<option value="기타">기타</option>
										</select>
									</div>
								</div>
								<div class="form_item input_box w50">
									<p class="label_text">
										문의신청 경로<span class="required">*</span>
									</p>
									<div class="select_box">
										<select class="select">
											<option value="네이버검색">네이버검색</option>
											<option value="구글검색">구글검색</option>
											<option value="지인소개">지인소개</option>
											<option value="인터넷기사">인터넷기사</option>
											<option value="신문광고">신문광고</option>
											<option value="페이스북">페이스북</option>
											<option value="인스타그램">인스타그램</option>
											<option value="유튜브채널">유튜브채널</option>
											<option value="기타">기타</option>
										</select>
									</div>
								</div>
								<div class="form_item input_box">
									<p class="label_text">
										개발요청 내용
									</p>
									<div class="input_box">
										<textarea class="input_text" placeholder="개발요청 내용 입력"></textarea>
									</div>
								</div>
							</div>
							<div class="term_box">
								<div class="term_item show">
									<div class="term_top">
										<div class="leftbox">
											<p class="tit">
												개인정보 수집·이용 동의 
												<span class="color">(필수)</span>
											</p>
										</div>
										<div class="rightbox">
											<div class="check_box">
												<input type="checkbox" name="term1" id="term1" class="input_check" checked>
												<label for="term1" class="label_check">동의함</label>
											</div>
											<button type="button" class="acc_arrow"></button>
										</div>
									</div>
									<div class="term_cont">
										<div class="term_txtbox">
											<p class="dot_desc">
												수집 항목: 이름, 연락처(휴대전화), 이메일
											</p>
											<p class="dot_desc">
												이용 목적: 어딩 서비스 신청/문의에 대한 상담 및 안내, 자료·견적·도입 관련 정보 전달
											</p>
											<p class="dot_desc">
												보유·이용 기간: 동의일로부터 24개월 보관 후 지체 없이 파기
											</p>
											<p class="dot_desc">
												동의 거부 권리 및 불이익: 동의를 거부할 권리가 있으나, 미동의 시 상담 및 안내 제공이 제한될 수 있습니다.
											</p>
										</div>
									</div>
								</div>
								<div class="term_item show">
									<div class="term_top">
										<div class="leftbox">
											<p class="tit">
												이용약관 동의
												<span class="color">(필수)</span>
											</p>
										</div>
										<div class="rightbox">
											<div class="check_box">
												<input type="checkbox" name="term2" id="term2" class="input_check">
												<label for="term2" class="label_check">동의함</label>
											</div>
											<button type="button" class="acc_arrow"></button>
										</div>
									</div>
									<div class="term_cont">
										<div class="term_txtboxs">
											<div class="term_txtitem">
												<p class="tit">
													제1조 (목적) 
												</p>
												<p class="desc">
													본 약관은 이용자가 '웹테크'(또는 서비스명)에서 제공하는 온라인 예약 및 문의 서비스를 이용함에 있어 회사와 이용자의 권리, 의무 및 책임사항을 규정함을 목적으로 합니다.
												</p>
											</div>
											<div class="term_txtitem">
												<p class="tit">
													제2조 (이용자의 의무)
												</p>
												<p class="desc">
													이용자는 서비스 신청 시 실제 본인의 정확한 정보를 제공해야 하며, 타인의 정보를 도용하거나 허위 사실을 기재해서는 안 됩니다.
												</p>
											</div>
											<div class="term_txtitem">
												<p class="tit">
													제3조 (서비스의 제공 및 변경)
												</p>
												<p class="desc">
													회사는 이용자의 예약 및 문의 요청에 대해 성실히 답변 및 서비스를 제공하되, 회사의 사정이나 불가항력적인 사유가 있는 경우 서비스 제공이 제한되거나 변경될 수 있습니다.
												</p>
											</div>
											<div class="term_txtitem">
												<p class="tit">
													제4조 (면책조항)
												</p>
												<p class="desc">
													회사는 이용자가 기재한 정보의 오류로 인해 발생한 문제에 대해서는 책임을 지지 않으며, 천재지변 등 불가항력적인 사유로 서비스를 제공할 수 없는 경우 책임이 면제됩니다.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="term_item show">
									<div class="term_top">
										<div class="leftbox">
											<p class="tit">
												광고 수신 동의
												<span class="bold">(선택)</span>
											</p>
										</div>
										<div class="rightbox">
											<div class="check_box">
												<input type="checkbox" name="term3" id="term3" class="input_check">
												<label for="term3" class="label_check">동의함</label>
											</div>
											<button type="button" class="acc_arrow"></button>
										</div>
									</div>
									<div class="term_cont">
										<div class="term_txtbox">
											<p class="dot_desc">
												이용 목적: 서비스/신규 기능 안내, 이벤트·프로모션·혜택 정보 제공
											</p>
											<p class="dot_desc">
												수집 항목: 이름, 연락처(휴대전화·이메일)
											</p>
											<p class="dot_desc">
												보유·이용 기간: 동의 철회 시까지
											</p>
											<p class="dot_desc">
												동의 거부 권리: 선택 사항이며, 미동의 시에도 상담·서비스 이용에는 제한이 없습니다. 
												<br>
												다만 혜택/프로모션 안내가 제외될 수 있습니다.
											</p>
											<p class="dot_desc">
												전송 매체: 문자(SMS/LMS), 카카오 알림톡, 이메일, 앱/웹 알림
											</p>
											<p class="dot_desc">
												철회 방법: 고객센터 또는 메시지 내 수신거부 기능을 통해 언제든지 철회 가능
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="form_btnbox">
								<button type="button" class="button typeA form_btn">
									예약하기
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>

    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>



</body>

</html>