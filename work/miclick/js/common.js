// 기존 - gnb 관련 코드 분리
$(document).ready(function() {
	let posY;

	// GNB 열기 버튼 클릭 시
	$('.btn-gnb').on('click', function() {
		posY = $(window).scrollTop();
		$('html, body').addClass('not-scroll');
		$('nav').addClass('active');
		$('#container').css('top', -posY);
		$('.md_overlay_gnb').addClass('active');
		return false;
	});

	// GNB 닫기 (뒤로가기 버튼)
	$('nav .btn-back').on('click', function() {
		$('html, body').removeClass('not-scroll');
		$('nav').removeClass('active');
		$('#container').css('top', 'auto');
		posY = $(window).scrollTop(posY);
		$('.md_overlay_gnb').removeClass('active');
		return false;
	});

	// 오버레이 클릭 시 GNB 닫기
	$('.md_overlay_gnb').on('click', function() {
		$('html, body').removeClass('not-scroll');
		$('nav').removeClass('active');
		$('#container').css('top', 'auto');
		posY = $(window).scrollTop(posY);
		$('.md_overlay_gnb').removeClass('active');
		return false;
	});
});


// accordion function
(function ($) {

	const lnbUI = {
		click: function (target, speed) {
			let _self = this,
				$target = $(target);
			_self.speed = speed || 400;

			$target.each(function () {
				if (findChildren($(this))) {
					return;
				}
				$(this).addClass('noDepth');
			});

			function findChildren(obj) {
				return obj.find('> ul').length > 0;
			}

			$target.on('click', '.acc_tit', function (e) {
				e.stopPropagation();
				let $this = $(this),
					$depthTarget = $this.next(),
					$siblings = $this.parent().siblings();

				$this.parent('li').find('ul li').removeClass('show');
				$siblings.removeClass('show');
				$siblings.find('ul').slideUp(400);

				if ($depthTarget.css('display') == 'none') {
					_self.activeOn($this);
					$depthTarget.slideDown(_self.speed);
				} else {
					$depthTarget.slideUp(_self.speed);
					_self.activeOff($this);
				}

			})

		},
		activeOff: function ($target) {
			$target.parent().removeClass('show');
		},
		activeOn: function ($target) {
			$target.parent().addClass('show');
		},

	};

	// navbox
	$(function () {
		lnbUI.click('.accordion li', 400)
	});

}(jQuery));


// tab function
$(document).ready(function () {
	$(".tab_nav").click(function () {
		let clickedTab = $(this);
		let tabWrap = clickedTab.closest(".tab_wrap");
		let allTabs = tabWrap.find(".tab_nav");
		let allContents = tabWrap.find(".tab_cont");
		let idx = allTabs.index(clickedTab);

		allTabs.removeClass("on");
		clickedTab.addClass("on");
		allContents.removeClass("on");
		allContents.eq(idx).addClass("on");
	});
});


// layout
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


// 메인
const ms1_swiper = new Swiper('.ms1_swiper', {
	observer: true,
	observeParents: true,
	loop: true,
	speed:500,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.ms1_swiper .pagination',
		clickable: true,
	},
})

const ms3_swiper = new Swiper('.ms3_swiper', {
	observer: true,
	observeParents: true,
	speed:500,	
	slidesPerView: 'auto',
	spaceBetween: 20,
	centeredSlides: true,
	initialSlide: 1,
	breakpoints: {
		720: {
			spaceBetween: 40,
		},
	},
})

$('.ms3card_slidebox').each(function () {
	const el = this;
	const slideEl = $(el).find('.ms3card_swiper')[0];
	const nextBtn = $(el).find('.next_btn')[0];
	const prevBtn = $(el).find('.prev_btn')[0];
	const pagination = $(el).find('.pagination')[0];
	new Swiper(slideEl, {
		observer: true,
		observeParents: true,          
		freeMode: true,
        direction: 'vertical',
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
		speed: 500,
		slidesPerView: 'auto',
		pagination: {
			el: pagination,
			type: 'custom',
			clickable: true,
			renderCustom: function (swiper, current, total) {
				return '<span class="current">' + current + '</span><span class="bar"></span><span class="total">' + total  + '</span>';
			}
		},
		navigation: {
			nextEl: nextBtn,
			prevEl: prevBtn,
		},
	});
});

const ms4_swiper = new Swiper('.ms4_swiper', {
	observer: true,
	observeParents: true,
	speed:500,	
	slidesPerView: 'auto',
})

const ms5_swiper = new Swiper('.ms5_swiper', {
	observer: true,
	observeParents: true,
	speed:500,	
	slidesPerView: 'auto',
})

$('.ms7 .tab_cont').each(function () {
	const el = this;
	const thumEl = $(el).find('.ms7_thum')[0];
	const slideEl = $(el).find('.ms7_slide')[0];
	const nextBtn = $(el).find('.next_btn')[0];
	const prevBtn = $(el).find('.prev_btn')[0];

	const ms7_thum = new Swiper(thumEl, {
		observer: true,
		observeParents: true,
		speed: 500,
		slidesPerView: 'auto',
	});

	const ms7_slide = new Swiper(slideEl, {
		observer: true,
		observeParents: true,
		speed: 500,
		navigation: {
			nextEl: nextBtn,
			prevEl: prevBtn,
		},
		thumbs: {
			swiper: ms7_thum,
		},
	});
});

$('.tab_swiper').each(function () {
  new Swiper(this, {
    observer: true,
    observeParents: true,
    speed: 500,
    slidesPerView: 'auto',
  });
});

$('.card_swiper').each(function () {
  new Swiper(this, {
    observer: true,
    observeParents: true,
    speed: 500,
    slidesPerView: 'auto',
  });
});