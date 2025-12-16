<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK TRAVEL</title>

    <?php include "../script.php" ?>

</head>

<body class="modal_open">


    <div class="wrap">      
        <div id="roomDate_popup" class="modal ver2 date_popup show">
            <div class="modal_box">
				<div class="modal_head">
                	<p class="tit">체크인/체크아웃 날짜</p>
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
