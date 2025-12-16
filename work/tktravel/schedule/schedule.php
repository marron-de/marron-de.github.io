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


    <div class="wrap schedule_wrap">     


    	<?php include "../common/header.php" ?>

    	<?php include "../common/navbox.php" ?>


		<!-- section -->
		<div class="container">

			<section class="sub_section sc_sec">
				<div class="inner">
					<div class="sub_titbox">
						<p class="s_tit">출발 일정 확인</p>
					</div>
					<div class="pr_list_filter">
						<div class="ft_item ft_item1" onclick="scheduleDate_popup()">
							<p class="tit">출발일/도착일 날짜</p>
							<p class="desc">날짜를 선택해주세요.</p>
						</div>
						<div class="ft_item ft_item2">
							<p class="tit">카테고리</p>
							<div class="select_box">
								<select class="select">
									<option value="선택">선택</option>
									<option value="카테고리1">카테고리1</option>
									<option value="카테고리1">카테고리2</option>
									<option value="카테고리3">카테고리3</option>
								</select>
							</div>
						</div>
						<div class="ft_item ft_item2">
							<p class="tit">기간</p>
							<div class="select_box">
								<select class="select">
									<option value="선택">선택</option>
									<option value="1박 2일">1박 2일</option>
									<option value="2박 2일">2박 3일</option>
									<option value="3박 4일">3박 4일</option>
								</select>
							</div>
						</div>
						<div class="ft_item ft_item3">
							<p class="tit">상품명</p>
							<div class="input_box">
								<input type="text" class="input_text" placeholder="상품명을 입력해주세요."> 
							</div>
						</div>
						<button type="button" class="button typeA ft_btn">
							<img src="<?php echo $path ?>img/ic_search_w.png" alt="" class="icon">
							<span class="txt">검색</span>
						</button>
					</div>
					<div class="tbl_box mob_tbl">
						<table class="tbl schedule_tbl">
							<colgroup>
								<col style="width:120px">						
								<col style="width:120px">						
								<col style="width:120px">						
								<col style="width:440px">						
								<col style="width:100px">						
								<col style="width:100px">						
								<col style="width:100px">						
								<col style="width:100px">					
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
									<td rowspan="4" class="date" data-th="출발일">
										2025.11.03
									</td>
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">42</td>
									<td data-th="출발 상태">
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">42</td>
									<td data-th="출발 상태">
										<span class="badge typeA">대기중</span>
									</td>									
								</tr>
								<tr>
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										충청북도 증평군 벨포레 리조트 1박 2일 패키지
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">0</td>
									<td data-th="출발 상태">
										<span class="badge typeC">예약가능</span>
									</td>	
								</tr>
								<tr class="line">
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										장링 동해 우링에는 들판, 계곡, 벽, 골목이 있는 색다른 세상이 있습니다. 야외 활동을 위한 2일 1박 투어
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">0</td>
									<td data-th="출발 상태">
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								
								<tr>
									<td rowspan="4" class="date" data-th="출발일">
										2025.11.02
									</td>
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">42</td>
									<td data-th="출발 상태">
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">42</td>
									<td data-th="출발 상태">
										<span class="badge typeA">대기중</span>
									</td>									
								</tr>
								<tr>
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										충청북도 증평군 벨포레 리조트 1박 2일 패키지
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">0</td>
									<td data-th="출발 상태">
										<span class="badge typeC">예약가능</span>
									</td>	
								</tr>
								<tr class="line">
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										장링 동해 우링에는 들판, 계곡, 벽, 골목이 있는 색다른 세상이 있습니다. 야외 활동을 위한 2일 1박 투어
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">0</td>
									<td data-th="출발 상태">
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								
								<tr>
									<td rowspan="4" class="date" data-th="출발일">
										2025.11.01
									</td>
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">42</td>
									<td data-th="출발 상태">
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
								<tr>
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										[서울 출발] 경상북도 영주 세계문화유산 막걸리 체험 1박 2일 투어
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">42</td>
									<td data-th="출발 상태">
										<span class="badge typeA">대기중</span>
									</td>									
								</tr>
								<tr>
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										충청북도 증평군 벨포레 리조트 1박 2일 패키지
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">0</td>
									<td data-th="출발 상태">
										<span class="badge typeC">예약가능</span>
									</td>	
								</tr>
								<tr class="line">
									<td data-th="카테고리">버스 투어</td>
									<td data-th="기간">1박 2일</td>
									<td class="full_td" data-th="상품명">
										장링 동해 우링에는 들판, 계곡, 벽, 골목이 있는 색다른 세상이 있습니다. 야외 활동을 위한 2일 1박 투어
									</td>
									<td data-th="예약 인원">0</td>
									<td class="red" data-th="잔여 좌석">0</td>
									<td data-th="최대 인원">0</td>
									<td data-th="출발 상태">
										<span class="badge typeA">대기중</span>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>
			</section>

        </div>


    	<?php include "../common/fixed_nav.php" ?>

    	<?php include "../common/mob_nav.php" ?> <!-- 모바일 노출 -->

    	<?php include "../common/footer.php" ?>


		<!-- 일정 날짜선택 popup -->
		<div id="scheduleDate_popup" class="modal ver2 date_popup">
            <div class="modal_box">
				<div class="modal_head">
                	<p class="tit">출발일/도착일 날짜</p>
					<button type="button" class="modal_close"></button>
				</div>
				<div class="modal_body">
					<div class="calender_wrap">
						<div class="calender ver2">
							<div class="cal_head">
								<button type="button" class="cal_btn prev"></button>
								<div class="cal_date">
									<select class="date_select">
										<option value="2020">2020년</option>
										<option value="2021">2021년</option>
										<option value="2022">2022년</option>
										<option value="2023">2023년</option>
										<option value="2024">2024년</option>
										<option value="2025" selected>2025년</option>
										<option value="2026">2026년</option>
										<option value="2027">2027년</option>
										<option value="2028">2028년</option>
										<option value="2029">2029년</option>
										<option value="2030">2030년</option>
									</select>
									<select class="date_select">
										<option value="1">1월</option>
										<option value="2">2월</option>
										<option value="3">3월</option>
										<option value="4">4월</option>
										<option value="5">5월</option>
										<option value="6">6월</option>
										<option value="7">7월</option>
										<option value="8">8월</option>
										<option value="9">9월</option>
										<option value="10">10월</option>
										<option value="11" selected>11월</option>
										<option value="12">12월</option>
									</select>
								</div>
								<button type="button" class="cal_btn next"></button>
							</div>
							<div class="cal_body">
								<div class="week_day">
									<div class="day red">S</div>
									<div class="day">M</div>
									<div class="day">T</div>
									<div class="day">W</div>
									<div class="day">T</div>
									<div class="day">F</div>
									<div class="day blue">S</div>
								</div>
								<div class="week_date">
									<div class="date red hide">
										<span class="num">26</span>
									</div>
									<div class="date hide">
										<span class="num">27</span>
									</div>
									<div class="date hide">
										<span class="num">28</span>
									</div>
									<div class="date hide">
										<span class="num">29</span>
									</div>
									<div class="date hide">
										<span class="num">30</span>
									</div>
									<div class="date hide">
										<span class="num">31</span>
									</div>
									<div class="date blue">
										<span class="num">1</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">2</span>
									</div>
									<div class="date">
										<span class="num">3</span>
									</div>
									<div class="date">
										<span class="num">4</span>
									</div>
									<div class="date">
										<span class="num">5</span>
									</div>
									<div class="date">
										<span class="num">6</span>
									</div>
									<div class="date">
										<span class="num">7</span>
									</div>
									<div class="date blue">
										<span class="num">8</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">9</span>
									</div>
									<div class="date">
										<span class="num">10</span>
									</div>
									<div class="date">
										<span class="num">11</span>
									</div>
									<div class="date">
										<span class="num">12</span>
									</div>
									<div class="date">
										<span class="num">13</span>
									</div>
									<div class="date">
										<span class="num">14</span>
									</div>
									<div class="date blue">
										<span class="num">15</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">16</span>
									</div>
									<div class="date">
										<span class="num">17</span>
									</div>
									<div class="date selected period check_in">
										<span class="num">18</span>
									</div>
									<div class="date period">
										<span class="num">19</span>
									</div>
									<div class="date period">
										<span class="num">20</span>
									</div>
									<div class="date period">
										<span class="num">21</span>
									</div>
									<div class="date blue selected period check_out">
										<span class="num">22</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">23</span>
									</div>
									<div class="date">
										<span class="num">24</span>
									</div>
									<div class="date">
										<span class="num">25</span>
									</div>
									<div class="date">
										<span class="num">26</span>
									</div>
									<div class="date">
										<span class="num">27</span>
									</div>
									<div class="date">
										<span class="num">28</span>
									</div>
									<div class="date blue">
										<span class="num">29</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">30</span>
									</div>
									<div class="date hide">
										<span class="num">1</span>
									</div>
									<div class="date hide">
										<span class="num">2</span>
									</div>
									<div class="date hide">
										<span class="num">3</span>
									</div>
									<div class="date hide">
										<span class="num">4</span>
									</div>
									<div class="date hide">
										<span class="num">5</span>
									</div>
									<div class="date blue hide">
										<span class="num">6</span>
									</div>
								</div>
							</div>
						</div>
						<div class="calender ver2">
							<div class="cal_head">
								<button type="button" class="cal_btn prev"></button>
								<div class="cal_date">
									<select class="date_select">
										<option value="2020">2020년</option>
										<option value="2021">2021년</option>
										<option value="2022">2022년</option>
										<option value="2023">2023년</option>
										<option value="2024">2024년</option>
										<option value="2025" selected>2025년</option>
										<option value="2026">2026년</option>
										<option value="2027">2027년</option>
										<option value="2028">2028년</option>
										<option value="2029">2029년</option>
										<option value="2030">2030년</option>
									</select>
									<select class="date_select">
										<option value="1">1월</option>
										<option value="2">2월</option>
										<option value="3">3월</option>
										<option value="4">4월</option>
										<option value="5">5월</option>
										<option value="6">6월</option>
										<option value="7">7월</option>
										<option value="8">8월</option>
										<option value="9">9월</option>
										<option value="10">10월</option>
										<option value="11">11월</option>
										<option value="12" selected>12월</option>
									</select>
								</div>
								<button type="button" class="cal_btn next"></button>
							</div>
							<div class="cal_body">
								<div class="week_day">
									<div class="day red">S</div>
									<div class="day">M</div>
									<div class="day">T</div>
									<div class="day">W</div>
									<div class="day">T</div>
									<div class="day">F</div>
									<div class="day blue">S</div>
								</div>
								<div class="week_date">
									<div class="date red hide">
										<span class="num">30</span>
									</div>
									<div class="date">
										<span class="num">1</span>
									</div>
									<div class="date">
										<span class="num">2</span>
									</div>
									<div class="date">
										<span class="num">3</span>
									</div>
									<div class="date">
										<span class="num">4</span>
									</div>
									<div class="date">
										<span class="num">5</span>
									</div>
									<div class="date">
										<span class="num">6</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">7</span>
									</div>
									<div class="date">
										<span class="num">8</span>
									</div>
									<div class="date">
										<span class="num">9</span>
									</div>
									<div class="date">
										<span class="num">10</span>
									</div>
									<div class="date">
										<span class="num">11</span>
									</div>
									<div class="date">
										<span class="num">12</span>
									</div>
									<div class="date blue">
										<span class="num">13</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">14</span>
									</div>
									<div class="date">
										<span class="num">15</span>
									</div>
									<div class="date">
										<span class="num">16</span>
									</div>
									<div class="date">
										<span class="num">17</span>
									</div>
									<div class="date">
										<span class="num">18</span>
									</div>
									<div class="date">
										<span class="num">19</span>
									</div>
									<div class="date blue">
										<span class="num">20</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">21</span>
									</div>
									<div class="date">
										<span class="num">22</span>
									</div>
									<div class="date">
										<span class="num">23</span>
									</div>
									<div class="date">
										<span class="num">24</span>
									</div>
									<div class="date">
										<span class="num">25</span>
									</div>
									<div class="date">
										<span class="num">26</span>
									</div>
									<div class="date">
										<span class="num">27</span>
									</div>
								</div>
								<div class="week_date">
									<div class="date red">
										<span class="num">28</span>
									</div>
									<div class="date">
										<span class="num">29</span>
									</div>
									<div class="date">
										<span class="num">30</span>
									</div>
									<div class="date">
										<span class="num">31</span>
									</div>
									<div class="date hide">
										<span class="num">1</span>
									</div>
									<div class="date hide">
										<span class="num">2</span>
									</div>
									<div class="date blue hide">
										<span class="num">3</span>
									</div>
								</div>
							</div>
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