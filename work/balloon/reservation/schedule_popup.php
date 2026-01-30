<!-- 출발일정 popup -->
<div id="schedule_popup" class="modal ver2">
	<div class="modal_box">
		<div class="modal_head">
			<p class="tit">출발일정</p>
			<button type="button" class="modal_close"></button>
		</div>
		<div class="modal_body">
			<div class="prd_datebox">
				<div class="prd_calender">
					<div class="calender">
						<div class="cal_head">
							<p class="date">2025년 05월</p>
							<div class="control">
								<button type="button" class="cal_btn prev"></button>
								<button type="button" class="cal_btn next"></button>
							</div>
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
								<div class="date red hide">27</div>
								<div class="date hide">28</div>
								<div class="date hide">29</div>
								<div class="date hide">30</div>
								<div class="date hide">1</div>
								<div class="date hide">2</div>
								<div class="date blue">
									<span class="num">3</span>
								</div>
							</div>
							<div class="week_date">
								<div class="date red">
									<span class="num">4</span>
								</div>
								<div class="date enabled">
									<span class="num">5</span>
								</div>
								<div class="date enabled">
									<span class="num">6</span>
								</div>
								<div class="date enabled">
									<span class="num">7</span>
									<span class="price"></span>
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
							</div>
							<div class="week_date">
								<div class="date red">
									<span class="num">11</span>
								</div>
								<div class="date disabled">
									<span class="num">12</span>
								</div>
								<div class="date">
									<span class="num">13</span>
								</div>
								<div class="date disabled">
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
							</div>
							<div class="week_date">
								<div class="date red">
									<span class="num">18</span>
								</div>
								<div class="date confirmed">
									<span class="num">19</span>
								</div>
								<div class="date">
									<span class="num">20</span>
								</div>
								<div class="date">
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
							</div>
							<div class="week_date">
								<div class="date red">
									<span class="num">25</span>
								</div>
								<div class="date checking">
									<span class="num">26</span>
								</div>
								<div class="date">
									<span class="num">27</span>
								</div>
								<div class="date">
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
							</div>
						</div>
					</div>
					<div class="cal_state">
						<div class="item state1">
							<span class="dot"></span>
							<span class="txt">예약가능</span>
						</div>
						<div class="item state2">
							<span class="dot"></span>
							<span class="txt">확인완료</span>
						</div>
						<div class="item state3">
							<span class="dot"></span>
							<span class="txt">확인중</span>
						</div>
						<div class="item state4">
							<span class="dot"></span>
							<span class="txt">마감</span>
						</div>
					</div>
				</div>
				<div class="prd_tbl">
					<div class="tbl_top">
						<button class="data_btn">
							<img src="<?php echo $path ?>img/ic_arrow_left.png" alt="" class="icon">
							<span class="txt">이전</span>
						</button>
						<button class="data_btn">
							<span class="txt">다음</span>
							<img src="<?php echo $path ?>img/ic_arrow_right.png" alt="" class="icon">
						</button>
					</div>
					<div class="tbl_box">
						<table class="tbl small">
							<thead>
								<tr>
									<th>출발 날짜</th>
									<th>가격</th>
									<th>예약 상태</th>
									<th>예약</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>12.01</td>
									<td>1,018,500원</td>
									<td>마감</td>
									<td>
										<button type="button" class="tbl_btn disabled">마감</button>
									</td>
								</tr>
								<tr>
									<td>12.01</td>
									<td>1,018,500원</td>
									<td>예약가능</td>
									<td>
										<button type="button" class="tbl_btn">예약</button>
									</td>
								</tr>
								<tr>
									<td>12.01</td>
									<td>1,018,500원</td>
									<td>예약가능</td>
									<td>
										<button type="button" class="tbl_btn">예약</button>
									</td>
								</tr>
								<tr>
									<td>12.01</td>
									<td>1,018,500원</td>
									<td>마감</td>
									<td>
										<button type="button" class="tbl_btn disabled">마감</button>
									</td>
								</tr>
								<tr>
									<td>12.01</td>
									<td>1,018,500원</td>
									<td>예약가능</td>
									<td>
										<button type="button" class="tbl_btn">예약</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tbl_bottom">
						<button type="button" class="view_more">
							<span class="txt">더보기</span>
							<span class="arrow"></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>