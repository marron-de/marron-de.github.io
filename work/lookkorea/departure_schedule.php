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


    <div class="wrap departure_wrap">     


    	<?php include "header.php" ?>

    	<?php include "navbox.php" ?>


		<!-- main section -->
		<div class="container">

			<section class="sub_section de_sec">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_subtit bold">출발 일정 확인</p>
					</div>
					<div class="pr_list_topbox">
						<div class="input_box flexible">
							<p class="label_text">출발일</p>
							<div class="input_flex">
								<input type="text" class="input_text datepicker today">
								<span class="txt">~</span>
								<input type="text" class="input_text datepicker today">
							</div>
						</div>
						<div class="input_box flexible">
							<p class="label_text">카테고리</p>
							<div class="select_box">
								<select class="select">
									<option value="선택">선택</option>
									<option value="카테고리1">카테고리1</option>
									<option value="카테고리1">카테고리2</option>
									<option value="카테고리3">카테고리3</option>
								</select>
							</div>
						</div>
						<div class="input_box flexible">
							<p class="label_text">기간</p>
							<div class="select_box">
								<select class="select">
									<option value="선택">선택</option>
									<option value="1박 2일">1박 2일</option>
									<option value="2박 2일">2박 3일</option>
									<option value="3박 4일">3박 4일</option>
								</select>
							</div>
						</div>
						<div class="input_box flexible input_box_file">
							<p class="label_text">상품명</p>
							<input type="text" class="input_text" placeholder="상품명을 입력해 주세요">
							<button type="button" class="input_btn">검색</button>
						</div>
					</div>
					<div class="tbl_box">
						<table class="tbl">
							<colgroup>
								<col width="130">						
								<col width="120">						
								<col width="120">						
								<col width="430">						
								<col width="100">						
								<col width="100">						
								<col width="100">						
								<col width="100">					
							</colgroup>
							<thead>
								<tr>
									<th>출발일</th>
									<th>카테고리</th>
									<th>기간</th>
									<th>상품명</th>
									<th>예약 인원</th>
									<th>잔여 좌석</th>
									<th>최대 인원</th>
									<th>출발 상태</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="4" class="date">
										2025.06.02
									</td>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울출발] 경상북도 문경 야외활동 자연힐링 럭셔리 캠핑 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										충청북도 증평군 벨포레 리조트 1박 2일 패키지
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>0</td>
									<td>
										<span class="badge typeC">예약가능</span>
									</td>
								</tr>
								<tr class="line">
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										장링 동해 우링에는 들판, 계곡, 벽, 골목이 있는 색다른 세상이 있습니다. 야외 활동을 위한 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>

								<tr>
									<td rowspan="3" class="date">
										2025.06.03
									</td>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울출발] 경상북도 문경 야외활동 자연힐링 럭셔리 캠핑 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr class="line">
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										충청북도 증평군 벨포레 리조트 1박 2일 패키지
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>0</td>
									<td>
										<span class="badge typeC">예약가능</span>
									</td>
								</tr>
								
								<tr>
									<td rowspan="5" class="date">
										2025.06.04
									</td>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울출발] 경상북도 문경 야외활동 자연힐링 럭셔리 캠핑 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										충청북도 증평군 벨포레 리조트 1박 2일 패키지
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>0</td>
									<td>
										<span class="badge typeC">예약가능</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										장링 동해 우링에는 들판, 계곡, 벽, 골목이 있는 색다른 세상이 있습니다. 야외 활동을 위한 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr class="line">
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										춘천 남이섬 자연치유 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>

								<tr>
									<td rowspan="4" class="date">
										2025.06.05
									</td>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울출발] 경상북도 문경 야외활동 자연힐링 럭셔리 캠핑 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										충청북도 증평군 벨포레 리조트 1박 2일 패키지
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>0</td>
									<td>
										<span class="badge typeC">예약가능</span>
									</td>
								</tr>
								<tr class="line">
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										장링 동해 우링에는 들판, 계곡, 벽, 골목이 있는 색다른 세상이 있습니다. 야외 활동을 위한 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>

								<tr>
									<td rowspan="3" class="date">
										2025.06.06
									</td>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울출발] 경상북도 문경 야외활동 자연힐링 럭셔리 캠핑 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr class="line">
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										충청북도 증평군 벨포레 리조트 1박 2일 패키지
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>0</td>
									<td>
										<span class="badge typeC">예약가능</span>
									</td>
								</tr>

								<tr>
									<td rowspan="5" class="date">
										2025.06.07
									</td>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										[서울출발] 경상북도 문경 야외활동 자연힐링 럭셔리 캠핑 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										충청북도 증평군 벨포레 리조트 1박 2일 패키지
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>0</td>
									<td>
										<span class="badge typeC">예약가능</span>
									</td>
								</tr>
								<tr>
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										장링 동해 우링에는 들판, 계곡, 벽, 골목이 있는 색다른 세상이 있습니다. 야외 활동을 위한 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr class="line">
									<td>버스 투어</td>
									<td>1박 2일</td>
									<td class="full_td">
										춘천 남이섬 자연치유 2일 1박 투어
									</td>
									<td>
										0
									</td>
									<td class="red">0</td>
									<td>42</td>
									<td>
										<span class="badge typeA">대기중</span>
									</td>
								</tr>

							</tbody>
						</table>
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