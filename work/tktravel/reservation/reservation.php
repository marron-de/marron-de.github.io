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


    <div class="wrap reserve_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section re_sec">
				<div class="inner sub_titbox">
					<p class="s_tit">예약하기</p> 
				</div>
				<div class="inner layout">
					<div class="cont_area">
						<div class="re_sec re_sec_detail">
							<div class="re_box">
								<div class="re_contbox">
									<p class="prd_tit">롯데월드 샤론캣 드레스 체험권</p>
									<div class="prd_info">
										<div class="titbox">
											<p class="date">
												2025.12.08 19:00~03:00 / 1일투어
											</p>
											<button type="button" class="more_btn">
												<span class="txt">서비스 포함/불포함 확인</span>
												<span class="arrow"></span>
											</button>
										</div>
										<div class="contbox">
											<div class="contitem">
												<p class="tit">서비스 포함</p>
												<div class="descbox">
													<p class="dot_txt">야간 스키 장비(스키, 폴, 스노슈) / 스키 리프트 허가</p>
													<p class="dot_txt">개인 레슨</p>
												</div>
											</div>
											<div class="contitem">
												<p class="tit">서비스 불포함</p>
												<div class="descbox">
													<p class="dot_txt">개인 비용</p>
													<p class="dot_txt">개인 보험</p>
													<p class="dot_txt">스카프, 장갑, 헬멧 (스키어는 헬멧을 착용해야 하며, 직접 가져오거나 현장에서 대여할 수 있습니다.)</p>
													<p class="dot_txt">케이블카 티켓 (관광을 위한 산 정상까지 왕복) </p>
												</div>
											</div>
										</div>
									</div>
									<div class="prd_opt">
										<div class="titbox">
											<p class="tit">[샤론캣 플레이] 드레스 대여 A타입(30분)</p>
											<p class="price">상품 금액  :  56,500원</p>
										</div>
										<div class="contbox">
											<div class="contitem">
												<div class="top">
													<p class="txt">성인</p>
													<p class="count">1명</p>
												</div>
												<div class="bottom">
													<p class="price">
														<span class="num">56,500</span>원
													</p>
												</div>
											</div>
											<div class="contitem">
												<div class="top">
													<p class="txt">아동</p>
													<p class="count">0명</p>
												</div>
												<div class="bottom">
													<p class="price">
														<span class="num">0</span>원
													</p>
												</div>
											</div>
											<div class="contitem">
												<div class="top">
													<p class="txt">추가옵션</p>
													<p class="count">0개</p>
												</div>
												<div class="bottom">
													<p class="price">
														<span class="num">0</span>원
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="re_sec re_sec_info">
							<div class="re_box re_box1">
								<div class="re_titbox">
									<p class="re_tit">예약자 정보</p>
								</div>
								<div class="re_contbox">
									<div class="form_box">
										<div class="form_item input_box">
											<p class="label_text felxible">
												<span class="required">성명</span>
												<span class="point">성명은 영어로 입력해 주세요</span>
											</p>
											<input type="text" class="input_text" placeholder="이름을 입력해주세요" value="홍길동">
										</div>
										<div class="form_item input_box">
											<p class="label_text">
												<span class="required">성별</span>
											</p>
											<div class="radio_wrap mh">
												<div class="radio_box ">
													<input type="radio" name="gender" id="gender_w" class="input_radio" checked>
													<label for="gender_w" class="label_radio">여성</label>
												</div>
												<div class="radio_box">
													<input type="radio" name="gender" id="gender_m" class="input_radio">
													<label for="gender_m" class="label_radio">남성</label>
												</div>
											</div>
										</div>
										<div class="form_item input_box">
											<p class="label_text">
												<span class="required">국적</span>
											</p>
											<div class="select_box">
												<select class="select">
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
											<p class="label_text">
												<span class="required">휴대폰</span>
											</p>
											<input type="text" class="input_text" placeholder="휴대폰 번호를 입력해 주세요">
										</div>
										<div class="form_item input_box">
											<p class="label_text">
												<span class="required">이메일</span>
											</p>
											<input type="text" class="input_text" placeholder="이메일를 입력해 주세요">
										</div>
										<!-- 260706 수정작업 start -->
										<div class="form_item input_box">
											<p class="label_text felxible">
												<span class="required">SNS 아이디</span>
											</p>
											<div class="input_flex">
												<div class="select_box sns_select">
													<select class="select">
														<option value="카카오톡">카카오톡</option>
														<option value="페이스북">페이스북</option>
														<option value="구글">구글</option>
														<option value="LINE">LINE ID</option>
													</select>
												</div>
												<input type="text" class="input_text" placeholder="아이디를 입력해 주세요">
												<div class="sns_linebox">
													<button type="button" class="input_btn line_upload" onclick="line_popup()">
														<img src="<?php echo $path ?>img/ms17_down_icon.png" alt="" class="icon">
														<span class="txt">UPLOAD</span>
													</button>
													<div class="line_qr">
														<img src="<?php echo $path ?>img/QR_img.png" alt="" class="img">
													</div>
												</div>
											</div>
										</div>
										<!-- 260706 수정작업 end -->
										<div class="form_item input_box full">
											<label class="label_text">특별 요청</label>
											<textarea class="input_text h100" placeholder="특별요청사항/SNS ID/항공편/미팅시간/호텔명/호텔주소를 꼭 입력해 주세요!"></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="re_box re_box2">
								<div class="re_titbox">
									<p class="re_tit">참가자 정보</p>
									<div class="check_box">
										<input type="checkbox" name="infoSame" id="infoSame" class="input_check">
										<label for="infoSame" class="label_check">위의 예약 정보와 동일</label>
									</div>
								</div>
								<div class="re_contbox">
									<div class="tbl_box mob_tbl">
										<table class="tbl">
											<colgroup>
												<col style="width: 80px;">
												<col style="width: 120px;">
												<col style="width: 120px;">
												<col style="width: 120px;">
												<col style="width: 160px;">
												<col style="width: 200px;">
											</colgroup>
											<thead>
												<tr>
													<th>구분</th>
													<th>성명</th>
													<th>성별</th>
													<th>국적</th>
													<th>휴대폰</th>
													<th>미팅 포인트</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td data-th="구분">성인</td>
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
														<div class="select_box">
															<select class="select full">
																<option value="">선택</option>
																<option value="미팅 포인트1">미팅 포인트1</option>
																<option value="미팅 포인트2">미팅 포인트2</option>
																<option value="미팅 포인트3">미팅 포인트3</option>
															</select>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="re_box re_box3">
								<div class="re_titbox">
									<p class="re_tit">상세 정보</p>
								</div>
								<div class="re_contbox">
									<div class="form_box">
										<div class="form_item input_box">
											<p class="label_text">
												<span class="required">탑승지</span>
											</p>
											<div class="select_box">
												<select class="select">
													<option value="">탑승지를 선택해주세요</option>
													<option value="탑승지1">탑승지1</option>
													<option value="탑승지2">탑승지2</option>
													<option value="탑승지3">탑승지3</option>
													<option value="탑승지4">탑승지4</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="re_sec re_sec_pay">
							<div class="re_box">
								<div class="re_titbox">
									<p class="re_tit">결제 수단</p>
								</div>
								<div class="re_contbox">
									<!-- 260408 수정작업 -->
									<div class="paybox">
										<div class="payitem on">
											<img src="<?php echo $path ?>img/pay_visa.png" alt="" class="icon">
										</div>
										<div class="payitem">
											<img src="<?php echo $path ?>img/pay_master.png" alt="" class="icon">
										</div>
										<div class="payitem">
											<p class="txt">CREDIT CARD</p>
										</div>
										<div class="payitem">
											<img src="<?php echo $path ?>img/pay_wechat.png" alt="" class="icon">
										</div>
										<div class="payitem">
											<img src="<?php echo $path ?>img/pay_alipay.png" alt="" class="icon">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="re_sec re_sec_point">
							<div class="re_box">
								<div class="re_titbox">
									<p class="re_tit">포인트 사용</p>
									<p class="point">
										<span class="txt">사용가능 포인트</span>
										<span class="num">1,000p</span>
									</p>
								</div>
								<div class="re_contbox">
									<div class="input_box point_box">
										<div class="input_item">
											<input type="text" class="input_text" placeholder="0원">
											<button type="button" class="input_btn">전액사용</button>
										</div>
										<p class="input_status">10,000원 이상 결제시 1 포인트 이상 사용 가능</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="side_area">
						<div class="mob_side_box">
							<div class="btn_box">
								<p class="total">총 56,500원</p>
								<button type="button" class="button typeA reserve_btn">결제하기</button>
							</div>
						</div>
						<div class="side_box">
							<div class="titbox">
								<p class="tit">결제정보</p>
							</div>
							<div class="info_box">
								<div class="item">
									<p class="tit">총 상품금액</p>
									<p class="desc">56,500원</p>
								</div>
								<div class="item">
									<p class="tit">할인 금액</p>
									<p class="desc"><span class="point">-20,000</span>원</p>
								</div>
								<div class="item">
									<p class="tit">포인트</p>
									<p class="desc"><span class="point">-500</span>원</p>
								</div>		
								<div class="item total">
									<p class="tit">최종 결제 금액</p>
									<p class="desc">36,000원</p>
								</div>
							</div>	
							<div class="term_box">
								<div class="check_box allCheck">
									<input type="checkbox" name="terms" id="allTerms" class="input_check">
									<label for="allTerms" class="label_check all_check">모든 약관 동의</label>
								</div>
								<div class="check_box">
									<input type="checkbox" name="terms" id="terms" class="input_check" checked>
									<label for="terms" class="label_check">
										<span class="bold">(필수)</span> 이용약관 동의
									</label>
									<button type="button" class="more_btn" onclick="terms_popup()"></button>
								</div>
								<div class="check_box">
									<input type="checkbox" name="terms" id="privacy" class="input_check">
									<label for="privacy" class="label_check">
										<span class="bold">(필수)</span> 개인정보 수집 및 이용 동의
									</label>
									<button type="button" class="more_btn" onclick="privacy_popup()"></button>
								</div>
								<div class="check_box">
									<input type="checkbox" name="terms" id="refund" class="input_check">
									<label for="refund" class="label_check">
										<span class="bold">(필수)</span> 취소 및 환불 안내
									</label>
									<button type="button" class="more_btn" onclick="refund_popup()"></button>
								</div>
							</div>
							<div class="btnbox">
								<a href="<?php echo $path ?>reservation/complete.php" type="button" class="button typeA pay_btn">56,500원 결제하기</a>
							</div>	
						</div>			
					</div>
				</div>
			</section>

        </div>


    	<?php include "../common/fixed_nav.php" ?>

    	<?php include "../common/footer.php" ?>


		<!-- 260706 수정작업 -->
		<div id="line_popup" class="modal">
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

		
		<!-- 서비스이용약관 popup -->
		<div id="terms_popup" class="modal ver2 term_popup">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">서비스이용약관</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body">
					<div class="term_area">
						<div class="term_txtbox">
							<p class="title">제 1 장 총칙</p>
							<p class="sub">제 1 조 (목적)</p>
							<p class="desc">
								1. 이 약관은 전기통신사업법 및 동법 시행령에 의하여 'TK 트래블'(이하 당사라 한다)가 제공하는 인터넷 여행 서비스(이하 서비스)인 'TK 트래블' 의 이용조건, 절차, 그리고 회원규칙에 관한 사항과 기타 필요한 사항을 규정함을 목적으로 합시다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제2 조 (약관의 효력과 준용)</p>
							<p class="desc">
								1. 이 약관의 내용은 서비스 화면에 게시하거나 기타의 방법으로 회원에게 공지함으로서 효력을 발생합니다. <br>
								2. 당사는 이 규정을 변경할 수 있으며, 변경된 규정은 제1항과 같은 방법으로 규정함으로써 효력을 발생합니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 3 조 (약관 외 준칙)</p>
							<p class="desc">
								1. 이 약관에 명시되지 않은 사항은 전기통신본법, 전기통신사업사업법 및 기타관계 법령의 규정에 따릅니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 4 조 (용어의 정의)</p>
							<p class="desc">
								1. 이 규정에서 사용하는 용어의 정의는 다음과 같습니다. <br>
								가. 이용자 : 당사가 제공하는 서비스를 이용하는 모든 자 <br>
								나. 회원 : 이용자 중 당사와 서비스 이용계약을 체결한 자 <br>
								다. 아이디 : 회원식별과 회원의 서비스 이용을 위하여 회원이 선정하고 회사가 승인한 문자 또는 이루어진 조합 <br>
								라. 비밀번호 : 회원이 부여받은 아이디(ID)와 일치된 회원임을 확인하고, 회원 자신의 비밀을 보호하기 위하여 정한 문자와 숫자의 조합 <br>
								마. 해지 : 회사 또는 회원이 서비스 개통 후 이용계약을 해약하는 것
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">제 2 장  회원가입과 서비스 이용 계약</p>
							<p class="sub">제 5 조 (이용계약의 성립)</p>
							<p class="desc">
								1. 이용 계약은 이용자의 이용 신청에 대한 당사의 이용 응낙과 이용자의 약관 내용에 대한 동의로 성립됩니다. <br>
								2. 회원에 가입하여 서비스를 이용하고자 하는 희망자는 당사에서 요청하는 개인 신상정보를 제공해야 합니다. <br>
								3. 회원에 가입하여 서비스를 이용하고자 하는 희망자는 지정된 온라인 가입신청 양식에 정보를 필수로 제공하며, 그 외의 정보는 선택사항으로 합니다. <br>
								-이용자 번호(ID)  <br>
								-비밀번호(PASSWORD)  <br>
								-이름(실명/영문명)  <br>
								-전화번호와 주소 <br>
								4. 위의 내용 이외에도 당사가 필요하다고 인정되는 내용을 추가로 덧붙일 수 있으며, 이 사실을 공고합니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 6 조 (이용신청의 승낙)</p>
							<p class="desc">
								1. 당사는 이용자가 제2장 3조에서 정한 사항을 정확히 기재하여 이용신청을 하였을 때 승낙합니다. <br>
								2. 당사는 다음에 해당하는 이용신청에 대하여서는 승낙을 유보할 수 있습니다. <br>
								- 설비에 여유가 없거나 기술상 지장이 있는 경우 <br>
								- 기타 본사가 필요하다고 인정되는 경우 <br>
								3. 당사는 다음에 해당하는 이용신청에 대하여서는 이를 응낙하지 아니할 수 있습니다. <br>
								- 이름이 실명이 아닌 경우 <br>
								- 다른 사람의 명의를 사용하여 신청한 경우 <br>
								- 이용신청시 필요내용을 허의로 기재하여 신청한 경우 <br>
								- 사회의 안녕질서 또는 미풍양속을 저해할 목적으로 신청한 경우 <br>
								- 기타 당사가 정한 이용신청요건이 미비된 경우 <br>
								- 기타 당사가 정한 이용신청요건이 미비되었을 때
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 7 조 (계약사항의 변경)</p>
							<p class="desc">
								1. 회원은 이용신청시 기재한 사항이 변경되었을 경우에는 온라인을 통해 수정을 해야합니다. 수저을 하지 않아서 발생하는 이용자의 피해에 대한 책임은 이용자에게 있습니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 8 조 (개인정보의 보호)</p>
							<p class="desc">
								1. 당사는 서비스 이용자의 정보수집시 반드시 당해 이용자의 동의를 얻어 필요한 최소한의 정보만을 수집하며, 이용자는 온라인을 통하여 수시로 본인의 신장정보를 열람, 정정 또는 삭제할 수 있습니다. <br>
								2. 당사는 이용고객의 개인 신상정보를 본인의 동이없이는 절대 제3자에게 제공, 분실 또는 유출하여서는 아니되며 이를 지키지 않아서 발생하는 고객의 모든 피해에 대한 책임은 당사에 있습니다. 단, 다음의 각호에 해당하는 경우에는 예외로 합니다. <br>
								가. 전기통신기본법 등 관계법령에 의해 국가기관 등의 요구가 있는 경우 <br>
								나. 범죄에 대한 수사상의 목적이 있거나 정보통신윤리위원회의 요청이 있는 경우 <br>
								다. 배송 업무상 배송업체에게 고객의 정보를 알려주는 경우 <br>
								라. 은행업무상 관련사항에 한하여 일부 정보를 공유하는 경우 <br>
								마. 특정인을 식별할 수 없는 통계작성, 홍보자료, 학술연구 등의 목적인 경우 <br>
								바. 기타 관계법령에서 정한 절차에 따른 요청이 있는 경우 <br>
								이용자의 동의 없이 개인정보가 유출되는 등 부당한 사례에 발견했을 때에는 전화 02-654-4111, 전자우편 speedtour@speedtour.co.kr, 한국소비자보호원, 경실련 등을 통해 신고할 수 있으며, 이에 대해 본사는 적절한 조치를 취할 의무가 있습니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">제 3 장 서비스 이용</p>
							<p class="sub">제 9 조 (회원 아이디, 이메일, 비밀번호 관리에 대한 의무)</p>
							<p class="desc">
								1. 아이디, 이메일과 비밀번호에 관한 모든 관리책임은 회원에게 있습니다. 회원에게 부여된 아이디(ID), 이메일(E-mail), 비밀번호의 관리소홀, 부정사용에 의하여 발생하는 모든 결과에 대한 책임은 회원에게 있습니다. <br>
								2. 자신의 아이디(ID), 이메일(E-mail)과 비밀번호가 부정하게 사용된 경우 회원은 반드시 당사에 그 사실을 통보해야 합니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 10 조 (서비스 종류)</p>
							<p class="desc">
								1. 당사는 서비스의 내용과 종류를 변경할 수 있으며, 변경사항은 공주사항을 통하여 공지합니다. 서비스의 종류는 아래와 같습니다. <br>
								가. 인터넷 온라인을 통한 항공/호텔예약/판매 <br>
								나. 인터넷 온라인을 통한 여행상품 예약/판매 <br>
								다. 기타 여행관련 상품 및 정보 서비스
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 11 조 (정보의 제공)</p>
							<p class="desc">
								1.당사는 이용자가 서비스 이용 중 필요가 있다고 인정되는 다양한 정보에 대해서 전자우편, 유선매체, 서신우편 등의 방법으로 이용자에게 제공할 수 있습니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 12 조 (서비스 제공의 중지)</p>
							<p class="desc">
								1. 당사는 다음 각 호에 해당하는 경우 서비스의 일부 혹은 전부의 제공을 중지할 수 있습니다 <br>
								가. 서비스용 설비의 보수 등 공사로 인한 부득이한 경우 <br>
								나. 전기통신사업법에 규정된 기간통신사업자가 전기통신서비스를 중지했을 경우 <br>
								다. 국가비상사태, 정전, 서비스 설비의 장애 또는 서비스 이용의 폭주등으로 정상적인 서비스 이용에 지장이 있는 경우
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 13 조 (당사의 서비스 유지책임)</p>
							<p class="desc">
								1. 당사는 서비스 제공설비를 항상 운용가능한 상태로 유지하고 서비스 제공을 위한 설비에 장애가 발생하거나 또는 그 설비가 멸실될 때에는 이를 신속하게 수리, 복구합니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 14 조 (이용자의 의무)</p>
							<p class="desc">
								1. 이용자는 서비스를 이용할 때 다음 각호의 행위를 하지 않아야 합니다. <br>
								가. 부정한 ID를 사용하는 행위 <br>
								나. 서비스에서 얻은 정보를 회사의 사전승낙없이 회원의 이용이외의 목적으로 복제하거나 이를 출판 및 방송 등에 사용하거나 제3자에게 제공하는 행위 <br>
								다. 제3자의 저작권 등 기타 권리를 침해하는 행위 <br>
								리. 범죄와 결부된다고 객관적으로 판단되는 행위 <br>
								마. 기타 관계법령에 위배되는 행위 <br>
								2. 이용자는 이 규정에서 규정하는 사항과 서비스 이용안내, 공지사항에 기재하거나 별도로 공지한 이용제한 사항을 준수하여야 합니다. <br>
								3. 이용자는 회사의 사전승낙없이는 서비스를 이용하여 영업활동을 할 수 없으며, 영업활동의 결과와 이용자가 규정에 위반한 영업활동을 이용하여 발생한 결과에 대하여 책임을 지지 않습니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">제 4 장 서비스 이용요금</p>
							<p class="sub">제 15 조 (요금의 체계 등)</p>
							<p class="desc">
								1. 당사가 제공하는 서비스 요금체계는 다음과 같습니다. <br>
								-가입 : 무료 <br>
								-여행관련 정보열람 : 무료 <br>
								-여행관련 서비스 예약 및 판매 : 유료 <br>
								-당사는 서비스 요금을 변경할 수 있으며, 요금에 관한 세부사항은 따로 공지합니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">제 5 장 계약의 해지 및 서비스 이용제한</p>
							<p class="sub">제 16 조 (계약해지)</p>
							<p class="desc">
								1. 회원이 이용계약을 해지하고자 하는 때에는 회원본인이 온라인을 통해 회사에 해지 신청을 하여야 합니다. <br>
								2. 당사는 회원이 다음 각 호에 해당하는 행위를 하였을 경우 사전통지없이 이용계약을 해지하거나 기간을 정하여 서비스 이용을 중지할 수 있습니다. <br>
								가. 부정한 ID를 사용하거나 이메일(E-mail) 및 비밀번호를 도용한 경우 <br>
								나. 서비스 운영을 고의로 방해한 경우 <br>
								다. 공공질서 및 미풍양속에 저해되는 내용을 고의로 유포시킨 경우 <br>
								라. 타인의 명예를 손상시키거나 불이익을 주는 경우 <br>
								마. 회원이 국익 또는 사회적 공익을 저해할 목적으로 서비스 이용을 계획 또는 실행하는 경우 <br>
								바. 기타 회사가 정한 이용조건에 위배되는 경우
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 17 조 (이용제한에 관한 사항)</p>
							<p class="desc">
								1. 당사가 제 5 장 제1조 2항 각호의 규정에 의하여 이용제한을 하고자 하는 경우에는 그 사유과 일시, 기간, 기타사항을 정하여 이메일(E-mail)이나 기타방법에 의하여 해당 이용자나 대리인에게 통지합니다. 단, 회사가 긴급하게 이용을 정지할 필요가 있다고 인정하는 경우에는 그러하지 아니합니다. <br>
								2. 제1항의 규정에 의해 이용제한의 통지를 받은 이용자 또는 대리인은 그 이용정지의 통지에 대하여 이의가 있을 경우 이의신청을 할 수 있습니다. <br>
								3. 당사는 제2항의 규정에 의한 이의신청에 대하여 그 확인을 위한 기간까지 이용정지를 일시 연기할 수 있으며, 그 결과를 이용자 또는 그 대리인에게 통지합니다. <br>
								4. 회사는 이용정지 기간중에 그 이용정지 사유가 해소된 것이 확인된 경우에는 이용정지 조치를 즉시 해제합니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">제 6장  손해배상 및 면책조항</p>
							<p class="sub">제 18 조 (손해배상에 관한 사항)</p>
							<p class="desc">
								1. 당사는 무료 서비스 이용과 관련하여 이용자에게 발생한 어떠한 손해에 관하여도 책임지지 않습니다. <br>
								2. 당사는 유료로 제공되는 서비스와 관련되어 회사의 귀책사유로 발생하는 모든 손해에 관하여 관계법률이 정하는 손해배상을 해당회원에게 하여야 합니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 19 조 (면책조항)</p>
							<p class="desc">
								1. 당사는 천재지변 또는 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 관한 책임이 면제됩니다. <br>
								2. 당사는 회원의 귀책사유로 인한 서비스 이용의 장애에 대하여 책임을 지지 않습니다. <br>
								3. 당사는 회원이 서비스를 이용하여 기대되는 손익이나 서비스를 통하여 얻은 자료로 인한 손해에 관하여 책임을 지지 않습니다. <br>
								4. 당사는 회원이 서비스에 게제한 정보, 자료, 사실의 신뢰도, 정확성 등 내용에 관하여는 책임을 지지 않습니다
							</p>
						</div>
						<div class="term_txtbox">
							<p class="sub">제 20 조 (관할법원)</p>
							<p class="desc">
								1. 서비스의 이용으로 발생한 분쟁에 대해 소송이 제기될 경우 회사의 본사 소재지를 관할하는 법원을 관할법원으로 합니다.
							</p>
						</div>
					</div>
				</div>
			</div>
        </div>

		<!-- 개인정보처리방침 popup -->
		<div id="privacy_popup" class="modal ver2 term_popup">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">개인정보처리방침</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body">
					<div class="term_area">
						<div class="term_txtbox">
							<p class="desc">
								'TK 트래블'은 (이하 '회사'는) 고객님의 개인정보를 중요시하며, "정보통신망 이용촉진 및 정보보호"에 관한 법률을 준수하고 있습니다. 회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.
								<br><br>
								회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">1. 수집하는 개인정보 항목</p>
							<p class="desc">
								회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다. <br>
								ο 수집항목 : 이름 , 생년월일 , 성별 , 로그인ID , 비밀번호 , 비밀번호 질문과 답변 , 자택 전화번호 , 자택 주소 , 휴대전화번호 , 이메일 ,  회사전화번호 , 결혼여부 , 기념일 , 법정대리인정보 , 은행계좌 정보 , 서비스 이용기록 , 접속 로그 , 쿠키 , 접속 IP 정보 , 결제기록 <br>
								ο 개인정보 수집방법 : 홈페이지 , 서면양식 , 전화/팩스를 통한 회원가입 , 경품 행사 응모 , 배송 요청 , 제휴사로부터의 제공 , 생성정보 수집 툴을 통한 수집
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">2. 개인정보의 수집 및 이용목적</p>
							<p class="desc">
								회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다. <br>
								ο 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산 콘텐츠 제공 , 구매 및 요금 결제 , 물품배송 또는 청구지 등 발송 , 금융거래 본인 인증 및 금융 서비스 , 요금추심 <br>
								ο 회원 관리  <br>
								회원제 서비스 이용에 따른 본인확인 , 개인 식별 , 불량회원의 부정 이용 방지와 비인가 사용 방지 , 가입 의사 확인 , 연령확인 , 만14세 미만 아동 개인정보 수집 시 법정 대리인 동의여부 확인 , 불만처리 등 민원처리 , 고지사항 전달 <br>
								ο 마케팅 및 광고에 활용  <br>
								신규 서비스(제품) 개발 및 특화 , 이벤트 등 광고성 정보 전달 , 인구통계학적 특성에 따른 서비스 제공 및 광고 게재 , 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">제3. 개인정보의 보유 및 이용기간</p>
							<p class="desc">
								원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.
								<br><br>
								보존 항목 : 이름 , 생년월일 , 휴대전화번호 <br>
								보존 근거 : 고객관리 <br>
								보존 기간 : 3년
								<br><br>
								그리고 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다. <br>
								표시/광고에 관한 기록 : 6개월 (전자상거래등에서의 소비자보호에 관한 법률) <br>
								계약 또는 청약철회 등에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률) <br>
								대금결제 및 재화 등의 공급에 관한 기록 : 5년 (전자상거래등에서의 소비자보호에 관한 법률) <br>
								소비자의 불만 또는 분쟁처리에 관한 기록 : 3년 (전자상거래등에서의 소비자보호에 관한 법률) <br>
								신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년 (신용정보의 이용 및 보호에 관한 법)
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">4. 개인정보의 파기절차 및 방법</p>
							<p class="desc">
								회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체없이 파기합니다. 파기절차 및 방법은 다음과 같습니다. <br>
								ο 파기절차 회원님이 회원가입 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어집니다. <br>
								별도 DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 보유되어지는 이외의 다른 목적으로 이용되지 않습니다. <br>
								ο 파기방법 <br>
								- 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다. <br>
								- 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">5. 개인정보 제공</p>
							<p class="desc">
								회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다. <br>
								- 이용자들이 사전에 동의한 경우 <br>
								- 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">6. 수집한 개인정보의 위탁</p>
							<p class="desc">
								회사는 고객님의 동의없이 고객님의 정보를 외부 업체에 위탁하지 않습니다. 향후 그러한 필요가 생길 경우, 위탁 대상자와 위탁 업무 내용에 대해 고객님에게 통지하고 필요한 경우 사전 동의를 받도록 하겠습니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">7. 이용자 및 법정대리인의 권리와 그 행사방법</p>
							<p class="desc">
								이용자 및 법정 대리인은 언제든지 등록되어 있는 자신 혹은 당해 만 14세 미만 아동의 개인정보를 조회하거나 수정할 수 있으며 가입해지를 요청할 수도 있습니다. <br>
								이용자 혹은 만 14세 미만 아동의 개인정보 조회/수정을 위해서는 ‘개인정보변경’(또는 ‘회원정보수정’ 등)을 가입해지(동의철회)를 위해서는 “회원탈퇴”를 클릭 하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다. <br>
								혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체없이 조치하겠습니다. <br>
								귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자 에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하여 정정이 이루어지도록 하겠습니다. <br>
								회사는 이용자 혹은 법정 대리인의 요청에 의해 해지 또는 삭제된 개인정보는 “회사 가 수집하는 개인정보의 보유 및 이용기간”에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">8. 쿠키(Cookie)를 설치, 운영하고 있는 이용자는 이를 거부할 수 있습니다.</p>
							<p class="desc">
								쿠키는 이용자에게 보다 빠르고 편리한 웹사이트 사용을 지원하고 맞춤형 서비스를 제공하기 위해 사용됩니다. <br>
								ο 쿠키란 무엇일까요? <br>
								쿠키란 웹사이트를 운영하는데 이용되는 서버가 이용자의 브라우저에 보내는 아주 작은 텍스트 파일로서 이용자의 컴퓨터에 저장됩니다. <br>
								ο 쿠키를 왜 사용하나요? <br>
								쿠키를 통해 이용자가 선호하는 설정 등을 저장하여 이용자에게 보다 빠른 웹 환경을 지원하며, 편리한이용을 위해 서비스 개선에 활용합니다. 이를 통해 이용자는 보다 손쉽게 서비스를 이용할 수 있게 됩니다. <br>
								또한 여러 서비스의 접속 빈도, 방문 시간, 각종 이벤트 참여 정도, 방문 회수 등을 분석하여 이용자의 취향과 관심분야를 파악합니다. 이를 바탕으로 광고를 포함한 개인 맞춤형 서비스를 제공합니다. <br>
								ο 쿠키를 수집하지 못하게 거부하고 싶다면? <br>
								이용자는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 이용자는 웹 브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수도 있습니다. <br>
								다만 쿠키 설치를 거부할 경우 웹 사용이 불편해지며 로그인이 필요한 일부 서비스 이용에 어려움이 있을 수 있습니다. <br>
								설정 방법의 예 <br>
								1) Internet Explorer의 경우 : <br>
								웹 브라우저 상단의 도구 메뉴 > 인터넷 옵션 > 개인정보 > 설정 <br>
								2) Chrome의 경우 : <br>
								웹 브라우저 우측의 설정 메뉴 > 화면 하단의 고급 설정 표시 > 개인정보의 콘텐츠 설정 버튼 > 쿠키
							</p>
						</div>
						<div class="term_txtbox">
							<p class="title">9. 개인정보의 안전성 확보 조치</p>
							<p class="desc">
								회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다. 
								<br><br>
								고객서비스담당 부서 : 070-8276-1919 <br>
								전화번호 : 070-8276-1919 <br>
								이메일 : op@tktravelkorea.com <br>
								개인정보관리책임자 성명 : 강일구 <br>
								전화번호 : 02-6298-8004 <br>
								이메일 : tktrvel@tktravelkorea.com
								<br><br>
								귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다. <br>
								기타 개인정보침해에 대한 신고나 상담이 필요하신 경우에는 아래 기관에 문의하시기 바랍니다. <br>
								.개인분쟁조정위원회 (www.1336.or.kr/1336) <br>
								.정보보호마크인증위원회 (www.eprivacy.or.kr/02-580-0533~4) <br>
								.대검찰청 인터넷범죄수사센터 (http://icic.sppo.go.kr/02-3480-3600) <br>
								.경찰청 사이버테러대응센터 (www.ctrc.go.kr/02-392-0330) 
							</p>
						</div>
					</div>
				</div>
			</div>
        </div>

		<!-- 취소 및 환불 안내 popup -->
		<div id="refund_popup" class="modal ver2 term_popup">
            <div class="modal_box">
				<div class="modal_head">
					<p class="tit">취소 및 환불 안내</p>
					<button type="button" class="modal_close"></button>
				</div>
                <div class="modal_body">
					<div class="term_area">
						<div class="term_txtbox">
							<p class="title">[취소 및 환불규정]</p>
							<p class="dot_txt desc">
								예약 취소는 체험 예약일 7일 전까지만 가능하며 7일 전 취소에 한하여 100%를 환불 합니다. 체험 예약일 6일 전부터는 취소가 불가하며 환불되지 않습니다.
							</p>
							<p class="dot_txt desc">
								예약을 변경하시는 경우에도 1항의 환불규정이 동일하게 적용되며, 고객이 직접 기존 예약 취소 후 다시 예약해야 합니다.
							</p>
							<p class="dot_txt desc">
								아래의 경우를 포함하여 체험 예약일의 예약 시간 이후로는 체험 상품 의 이용료는 환불되지 않습니다. <br>
								- 체험 상품의 서비스 전-중-후 모든 과정 중에서 발생하는 손님의 단순 변심으로 인한 환불 요청 <br>
								- 상품 별로 지정된 분장 및 헤어 스타일링, 장신구 등이 손님의 취향과 다름을 사유로 환불 요청
							</p>
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