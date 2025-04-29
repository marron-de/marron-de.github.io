
/* 슬라이드 */
const sec8_swiper = new Swiper(".sec8_swiper", {
    speed: 600,
	loop:true,
	spaceBetween: 30,

	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	
    navigation: {
        nextEl: '.sec8 .next_btn',
        prevEl: '.sec8 .prev_btn',
    },

	pagination: {
		el: '.sec8 .pagination',
		clickable: true,
	},
});
