<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>전국플랜트건설노동조합</title>

    <?php include "../script.php" ?>

</head>

<body>


    <div class="wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>

		<!-- container -->
		<div class="container">

			<div class="subtop ver2">
				<div class="inner">
					<p class="tit">조합가입안내</p>
					<p class="desc">About Us</p>
					<div class="breadcrumb">
						<a href="" class="home"></a>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">소개</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="" class="link">소개</a>
									<a href="" class="link">소식</a>
									<a href="" class="link">지부소식</a>
									<a href="" class="link">자료</a>
								</div>
							</div>
						</div>
						<span class="bar"></span>
						<div class="catebox">
							<button type="button" class="catetit cate_btn">
								<span class="txt">조합가입안내</span>
								<span class="arrow"></span>
							</button>
							<div class="popup cate_popup">
								<div class="linkbox">
									<a href="" class="link">플랜트건설노조는</a>
									<a href="" class="link">조직현황</a>
									<a href="" class="link">임원소개</a>
									<a href="" class="link">걸어온 길</a>
									<a href="" class="link">오시는 길</a>
									<a href="" class="link">조합가입안내</a>
									<a href="" class="link">규약</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="tab_swiperbox inner">
				<div class="swiper tab_swiper tab_navbox auto gap0" data-gappc="0" data-gapmob="10">
					<div class="swiper-wrapper">
						<div class="swiper-slide tab_nav">
							<a href="join_info.php" class="link">가입안내</a>
						</div>
						<div class="swiper-slide tab_bar"></div>
						<div class="swiper-slide tab_nav on">
							<a href="join_online.php" class="link">온라인조합원 가입</a>
						</div>
					</div>
				</div>
			</div>

			<section class="section joinonline_sec1">
				<div class="inner">
					<div class="sub_titbox">
						<p class="sub_txt1">Membership</p>
						<p class="sub_txt2">온라인조합원 가입</p>
					</div>
					<form class="contbox">
						<div class="form_wrap">
							<div class="form_box">
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											성명<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="성명 입력">
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											주민등록번호<span class="required">*</span>
										</p>
										<div class="input_flex">
											<input type="text" class="input_text wid120 center" placeholder="0000000">
											<p class="form_text">-</p>
											<div class="input_flex gap4 full numbers">
												<input type="text" class="input_text center" placeholder="0">
												<div class="asterisks">
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">소속지부</p>
										<input type="text" class="input_text" placeholder="소속지부 이볅" value="반도체 사업단" readonly>
									</div>
								</div>
								<div class="form_item wid100">
									<div class="input_box">
										<p class="label_text">
											주소<span class="required">*</span>
										</p>
										<div class="input_flex">
											<input type="text" class="input_text wid120 center zipbtn" placeholder="우편번호" readonly>
											<input type="text" class="input_text full" placeholder="기본주소">
											<button type="button" class="button typeA input_btn">주소 검색</button>
										</div>
										<input type="text" class="input_text w100" placeholder="나머지 주소 (선택 입력 가능)">
									</div>
								</div>
								<div class="form_item wid100">
									<div class="input_box">
										<p class="label_text">
											거소지(숙소)<span class="required">*</span>
										</p>
										<div class="input_flex">
											<input type="text" class="input_text wid120 center zipbtn" placeholder="우편번호" readonly>
											<input type="text" class="input_text full" placeholder="기본주소">
											<button type="button" class="button typeA input_btn">주소 검색</button>
										</div>
										<input type="text" class="input_text w100" placeholder="나머지 주소 (선택 입력 가능)">
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											휴대전화<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="휴대전화 입력">
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											비상연락처<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="비상연락처 입력">
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											관계<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="관계 입력">
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											직종<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="직종 입력">
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											기능정도<span class="required">*</span>
										</p>
										<div class="input_flex">
											<div class="input_flex gap8">
												<p class="form_text">기능공</p>
												<input type="text" class="input_text wid64 center" placeholder="0">
												<p class="form_text">년</p>
											</div>
											<p class="form_text bar">/</p>
											<div class="input_flex gap8">
												<p class="form_text">보조공</p>
												<input type="text" class="input_text wid64 center" placeholder="0">
												<p class="form_text">년</p>
											</div>
										</div>
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											경력<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="경력 입력">
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											근무현장<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="근무현장 입력">
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											업체명<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="업체명 입력">
									</div>
								</div>
								<div class="form_item wid33">
									<div class="input_box">
										<p class="label_text">
											추천인
										</p>
										<input type="text" class="input_text" placeholder="추천인 입력">
									</div>
								</div>
								<div class="form_item wid100">
									<div class="input_box">
										<p class="label_text">
											가입자 신분증<span class="required">*</span>
										</p>
										<div class="input_flex file_box">
											<input type="file" name="frm_file1" id="frm_file1" class="input_file">
											<div class="label_file full">신분증 이미지 등록</div>
											<label for="frm_file1" class="btn_file button typeA input_btn">파일 선택</label>
										</div>
										<p class="input_desc">
											5MB 이하의 이미지 파일(JPG, PNG)만 등록 가능합니다.
										</p>
									</div>
								</div>
								<div class="form_item wid100">
									<div class="form_notebox">
										<p class="form_text bold point">
											조합비 : CMS 월 10,000원 + 원천징수 1% / 가입비 : 30,000원(조끼, 머리띠 지급)
										</p>
										<div class="form_descbox term_item">
											<div class="descbox">
												<p class="desc dot">
													가입비 납부 계좌 : 농협 175838-51-017411 전국플랜트건설노동조합
												</p>
												<p class="desc dot">
													단체협약 체결 업체 근무 시 월 임금수령액의 1%를 조합비로 원천징수 한다.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="form_item wid100">
									<div class="form_descbox term_item">
										<div class="descbox">
											<p class="desc dot">
												상기 본인은 전국플랜트건설노동조합의 목적과 사업에 동의하고, 규약에 명시된 조합원의 의무와 책임을 다하겠습니다.
											</p>
											<p class="desc dot">
												상기 본인은 가입비 및 가입 당월부터 전국플랜트건설노동조합의 조합원으로서 규약과 단체협약이 정한 조합비 등을 임금에서 원천징수 의무 공제하고, 조합비에 대한 CMS 납부 의무를 성실히 지키겠습니다.
											</p>
											<p class="desc dot">
												상기 본인은 전국플랜트건설노동조합의 조합원으로서 긍지와 자부심을 가지고, 노동조합의 모든 활동에 적극 참여하겠습니다.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="form_btnbox">
								<button type="button" class="button typeB big round">중복 확인</button>
							</div>
						</div>			
						
						<div class="form_wrap">
							<p class="form_tit">조합비 CMS 출금 동의서</p>
							<div class="form_box">
								<div class="form_item wid50">
									<div class="input_box">
										<p class="label_text">
											예금주 성명<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="예금주 성명 입력">
									</div>
								</div>
								<div class="form_item wid50">
									<div class="input_box">
										<p class="label_text">
											주민등록번호<span class="required">*</span>
										</p>
										<div class="input_flex">
											<input type="text" class="input_text wid120 center" placeholder="0000000">
											<p class="form_text">-</p>
											<div class="input_flex gap4 full numbers">
												<input type="text" class="input_text center" placeholder="0">
												<div class="asterisks">
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
													<i data-lucide="asterisk" class="icon"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form_item wid50">
									<div class="input_box">
										<p class="label_text">
											은행명<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="은행명 입력">
									</div>
								</div>
								<div class="form_item wid50">
									<div class="input_box">
										<p class="label_text">
											계좌번호<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="계좌번호 입력">
									</div>
								</div>
								<div class="form_item wid50">
									<div class="input_box">
										<p class="label_text">
											예금주 연락처<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="예금주 연락처 입력">
									</div>
								</div>
								<div class="form_item wid50">
									<div class="input_box">
										<p class="label_text">
											예금주와의 관계<span class="required">*</span>
										</p>
										<input type="text" class="input_text" placeholder="예금주와의 관계 입력">
									</div>
								</div>
								<div class="form_item wid100">
									<div class="input_box">
										<p class="label_text">
											출금 계좌 통장 사본<span class="required">*</span>
										</p>
										<div class="input_flex file_box">
											<input type="file" name="frm_file2" id="frm_file2" class="input_file">
											<div class="label_file full">출금 계좌 통장 사본 등록</div>
											<label for="frm_file2" class="btn_file button typeA input_btn">파일 선택</label>
										</div>
										<p class="input_desc">
											5MB 이하의 이미지 파일(JPG, PNG)만 등록 가능합니다.
										</p>
									</div>
								</div>
								<div class="form_item wid100">
									<div class="form_descbox term_item">
										<div class="descbox">
											<p class="desc dot">
												결제일은 <span class="under">매월 10일에 조합비 1만원</span>이 인출되며, 미출금 시 당월 25일 재인출됩니다.
											</p>
											<p class="desc dot">
												은행명은 작성 시 농협은 농협중앙회와 단위농협을 반드시 구분하여 기재해 주시기를 바랍니다.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="form_termbox">
							<div class="form_term show">
								<div class="term_titbox">
									<p class="tit">
										개인정보 및 이용 동의 <span class="color">(필수)</span>
									</p>
									<div class="check_box">
										<input type="checkbox" name="frm_check" id="frm_check1" class="input_check">
										<label for="frm_check1" class="label_check">동의함</label>
									</div>
									<button type="button" class="more_btn"></button>
								</div>
								<div class="term_box">
									<div class="term_item">
										<div class="descbox">
											<p class="desc dot">
												수집 및 이용목적 : 노동조합 조직활동에 필요한 회원정보관리 및 CMS 출금이체를 통한 요금 수납
											</p>
											<p class="desc dot">
												수집항목(개인정보) : 성명, 주민등록번호, 주소, 휴대전화, 비상연락처 및 관계, 직종, 기능정도, 경력, 근무현장, 업체명, 추천인, 예금주 성명, 은행명, 계좌번호, 예금주 연락처 및 관계
											</p>
											<p class="desc dot">
												보유 및 이용기간 : 노동조합 탈퇴일 후 5년까지
											</p>
											<p class="desc dot">
												신청자는 개인정보 수집 및 이용을 거부할 권리가 있으며, 권리행사 시 조합원 가입 및 출금이체 신청이 거부될 수 있습니다.
											</p>
											<p class="desc dot">
												수집 및 이용목적 : 노동조합 조직활동에 필요한 회원정보관리 및 CMS 출금이체를 통한 요금 수납
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="form_term">
								<div class="term_titbox">
									<p class="tit">
										개인정보 제3자 제공 동의 <span class="color">(필수)</span>
									</p>
									<div class="check_box">
										<input type="checkbox" name="frm_check2" id="frm_check2" class="input_check">
										<label for="frm_check2" class="label_check">동의함</label>
									</div>
									<button type="button" class="more_btn"></button>
								</div>
								<div class="term_box">									
									<div class="term_item">
										<div class="descbox">
											<p class="desc dot">
												개인정보를 제공받는 자 : 사단법인 금융결제원
											</p>
											<p class="desc dot">
												개인정보를 제공받는 자의 개인정보 이용 목적 : CMS출금이체 서비스 제공 및 출금동의 확인, 출금이체 신규 등록 및 해지 사실 통지
											</p>
											<p class="desc dot">
												개인정보를 제공받는 자의 개인정보 보유 및 이용기간 : CMS출금이체 서비스 제공 및 출금동의 확인 목적을 달성할 때 까지
											</p>
											<p class="desc dot">
												신청자는 개인정보를 금융결제원에 제공하는 것을 거부할 권리가 있으며, 거부시 출금이체 신청이 거부될 수 있습니다.
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="form_term">
								<div class="term_titbox">
									<p class="tit">
										출금이체 동의여부 및 해지사실 통지 안내 <span class="color">(필수)</span>
									</p>
									<div class="check_box">
										<input type="checkbox" name="frm_check3" id="frm_check3" class="input_check">
										<label for="frm_check3" class="label_check">동의함</label>
									</div>
									<button type="button" class="more_btn"></button>
								</div>
								<div class="term_box">
									<div class="term_item">
										<div class="descbox">
											<p class="desc">
												CMS 이용약관에 따라 은행 등 금융회사 및 금융결제원은 CMS 제도의 안정적 운영을 위하여 고객의 (은행 등 금융회사 및 이용기관 보유) 연락처 정보를 활용하여 문자메세지, 유선 등으로 고객의 출금이체 동의여부 및 해지사실을 통지할 수 있습니다.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="form_signbox">
							<p class="top_tit">
								 본인은 금융거래 정보의 제공 및 개인정보의 수집 및 이용, 
								 <br>
								 제3자 제공에 동의하며 노동조합 가입 및 조합비 납부를 위해 위 계좌에 의한 CMS 출금에 동의하며 서명날인 합니다.
							</p>
							<div class="input_box sign_inputbox">
								<div class="input_flex">
									<p class="form_text bold">신청인</p>
									<input type="text" class="input_text wid240" placeholder="신청인 성명 입력">
									<p class="form_text bold gray">(서명)</p>
								</div>
							</div>
							<div class="sign_picbox">
								<p class="tit">
									위 내용에 동의하시면 아래칸에 서명을 해주셔야 합니다.
								</p>
								<div class="signbox">
									<div class="sign"></div>
									<button type="button" class="reset_btn">서명 초기화</button>
								</div>
							</div>
							<div class="form_btnbox">
								<button type="button" class="button typeA big round">신청하기</button>
							</div>
						</div>
					
					</form>	
				</div>
			</section>			

        </div>

    	<?php include "../common/footer.php" ?>

		
    </div>



    <!-- JS -->
    <script src="../js/common.js"></script>
	<script>	
		$(".header .h_nav > li").eq(0).addClass("active")
	</script>



</body>

</html>