
/* Top 버튼 기능 */
$(document).ready(function () {
	$('#top_btn').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
});



/* 레이아웃 여백 조절 기능 */
function updateScrollbarWidth(swiper) {
    const totalSlides = swiper.slides.length; // 전체 슬라이드 개수
    const visibleSlides = swiper.params.slidesPerView; // 보여질 슬라이드 개수
    const scrollbarEl = swiper.scrollbar.el; // 스크롤바 엘리먼트

    if (scrollbarEl) {
        const scrollbarWidth = (visibleSlides / totalSlides) * 100; // 스크롤바 크기 비율 계산
        scrollbarEl.querySelector('.swiper-scrollbar-drag').style.width = `${scrollbarWidth}%`;
    }
}

$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1280;
    const widthPercentage = 0.9;

    let calculatedWidth = windowWidth * widthPercentage;
    if (calculatedWidth > maxWidth) {
        calculatedWidth = maxWidth;
    }

    const marginLeft = (windowWidth - calculatedWidth) / 2;

    $('body').css('--margin-left', marginLeft + 'px');
    $('body').css('--margin-right', marginLeft + 'px');
});

$(document).ready(function() {
    $(window).trigger('resize');
});



/* 슬라이드 */
const sec3_swiper = new Swiper(".sec3_swiper", {
	grabCursor: true,
	slidesPerView: 1.5,
	spaceBetween: 24,
	speed: 500,	
    centeredSlides: true,
	breakpoints: {
		1080: {
			slidesPerView: 'auto',
			spaceBetween: 40,			
			centeredSlides: false,
		},
	},
});


const sec5_swiper = new Swiper(".sec5_swiper", {
    speed: 500,
    navigation: {
        nextEl: '.sec5 .sec5_controls .next_btn',
        prevEl: '.sec5 .sec5_controls .prev_btn',
    },
});
