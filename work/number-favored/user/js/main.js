
// 01_메인 : 번호생성
document.addEventListener('DOMContentLoaded', () => {
	const mainSwipers = [];
	let isButtonClicked = false; // 버튼 클릭 여부 플래그

	for (let i = 1; i <= 6; i++) {
		const mainSwiperContainer = document.querySelector(`#slot${i} .swiper-wrapper`);
		const slotElement = document.querySelector(`#slot${i}`);
		const initialNum = document.querySelector(`#slot${i}`).getAttribute('data-num');			

		// 1~45 숫자 슬라이드 추가
		for (let j = 1; j <= 45; j++) {
			const slide = document.createElement('div');
			slide.classList.add('swiper-slide');
			slide.textContent = j;
			mainSwiperContainer.appendChild(slide);
		}

		// Swiper.js 인스턴스 생성
		const mainSwiper = new Swiper(`#slot${i}`, {
			direction: 'vertical',
			loop: true,
			speed: 500,
			initialSlide: initialNum - 1,
			on: {
				slideChange: function () {
					const slotBox = document.querySelector(`#slot${i}`).closest('.slot_box');
					const currentSlideIndex = this.realIndex + 1;
					const colorClass = getColorClass(currentSlideIndex);

					['color1', 'color2', 'color3', 'color4', 'color5'].forEach(color => {
						slotBox.classList.remove(color);
					});

					slotBox.classList.add(colorClass);
				},
			},
		});

		// 슬라이드 변경 시작 이벤트
		mainSwiper.on('slideChangeTransitionStart', function () {
			const slotBox = document.querySelector(`#slot${i}`).closest('.slot_box');

			// 버튼 클릭이 아닌 경우에만 fixed 추가
			if (!isButtonClicked && !slotBox.classList.contains('fixed')) {
				slotBox.classList.add('fixed');
			}
		});

		mainSwipers.push(mainSwiper);
	}

	document.getElementById('spin_button').addEventListener('click', () => {

		const wrapElement = document.querySelector('.wrap.main_wrap');
		const loginStatus = wrapElement.getAttribute('data-login');

		if (loginStatus === 'login') {
			console.log('로그인 상태입니다.');

			isButtonClicked = true; // 버튼 클릭 플래그 활성화
			const randomNumbers = getUniqueRandomNumbers();

			mainSwipers.forEach((swiper, index) => {
				const targetIndex = randomNumbers[index] - 1;
				swiper.slideToLoop(targetIndex, 1000); // 2초 동안 스핀
			});

			const slotBoxes = document.querySelectorAll('.jackpotbox .slot_box');
			slotBoxes.forEach(slotBox => {
				slotBox.classList.remove('fixed');
			});

			// 일정 시간 후 버튼 클릭 플래그 초기화
			setTimeout(() => {
				isButtonClicked = false;
			}, 1000);
		} else {
			console.log('로그아웃 상태입니다.');
			$("body").addClass("hidden")
			$("#login_popup").addClass("show")

		}
	});

});

// 01_메인 : 번호생성 - 색상 클래스 함수
function getColorClass(number) {
	if (number >= 1 && number <= 10) return 'color1';
	if (number >= 11 && number <= 20) return 'color2';
	if (number >= 21 && number <= 30) return 'color3';
	if (number >= 31 && number <= 40) return 'color4';
	if (number >= 41 && number <= 45) return 'color5';
	return '';
}

// 01_메인 : 번호생성 - 중복 없는 랜덤 숫자 6개 추출
function getUniqueRandomNumbers() {
	const numbers = Array.from({
		length: 45
	}, (_, i) => i + 1); // 1~45 배열 생성
	for (let i = numbers.length - 1; i > 0; i--) {
		const randomIndex = Math.floor(Math.random() * (i + 1));
		[numbers[i], numbers[randomIndex]] = [numbers[randomIndex], numbers[i]]; // 배열 섞기
	}
	return numbers.slice(0, 6); // 랜덤으로 6개 추출
}

// 01_메인 : 번호표시
$(".main_wrap .sec2 .sendEmail_btn").click(function () {
    let userStatus = $('.wrap.main_wrap').attr('data-user');
    if (userStatus === 'basic') {
		$("body").addClass("hidden")
        $("#basicPlan_popup").addClass("show");
    }
    if (userStatus === 'free') {
		$("body").addClass("hidden")
        $("#plan_popup").addClass("show");
    }
});
$(".main_wrap .sec2 .retry_btn.disabled").click(function () {
	$("body").addClass("hidden")
	$("#plan_popup").addClass("show")
})

// 01_메인 : Plan_2. 앱
$(".main_wrap .sec6 .plan_btn").click(function () {
	$("body").addClass("hidden2")
	$("#planPurchase_modal").addClass("show")	
})