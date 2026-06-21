// layout
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1440;
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


// AOS
AOS.init({
	duration: 800,
})
window.addEventListener('load', function () {
	AOS.refresh();
});


// lucide
lucide.createIcons();


// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").on("click", function () {
		$("body").addClass("hidden");
		$(".navbox").addClass("open");
	});
	$(".navbox .menu_close").on("click", function () {
		$("body").removeClass("hidden");
		$(".navbox").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".navbox").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".navbox").removeClass("open");
	}
});


// top button
$(document).ready(function () {
	$('#top_btn').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 400);
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


// tab swiper
$(document).ready(function () {
	$('.tab_swiper').each(function () {

		const $this = $(this);
		const index = parseInt($this.attr('data-index'), 10) || 0;
		const gapPc = parseInt($this.data('gappc'), 10) || 0;
		const gapMob = parseInt($this.data('gapmob'), 10) || 0;

		new Swiper(this, {
			observer: true,
			observeParents: true,
			slidesPerView: 'auto',
			spaceBetween: gapMob,
			speed: 500,
			initialSlide: index,
			breakpoints: {
				1080: {
					spaceBetween: gapPc,
				},
			},
		});

	});
});


/* modal */
$(".modal .modal_close").click(function () {
	$("body").removeClass("open")
	$(".modal").removeClass("show")
})
$(document).mouseup(function (e) {
	if ($(".modal .modal_inner").has(e.target).length === 0) {
		$("body").removeClass("open")
		$(".modal").removeClass("show")
	}
});


// main
const ms1_swiper = new Swiper('.ms1_swiper', {
	observer: true,
	observeParents: true,
	effect: 'fade',
	loop:true,
	speed: 500,
	spaceBetween: 40,
	pagination: {
	el: '.pagination',
		type: 'custom',
		clickable: true,
		renderCustom: function (swiper, current, total) {
			return '<span class="swiper-pagination-current">' + ('0' + current).slice(-2) + '</span>' + ' / ' + '<span class="swiper-pagination-total">' + ('0' + total).slice(-2) + '</span>';
		}
	},
	navigation: {
		nextEl: ".ms1_swiper .next_btn",
		prevEl: ".ms1_swiper .prev_btn",
	},
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},
	breakpoints: {
		1080: {
			spaceBetween: 24,
		},
	}
})

$('.ms2 .item .imgbox .img').each(function() {
    const imgbox = $(this).closest('.imgbox');
    const boxH = imgbox.outerHeight();

    $(this).on('load', function() {
        const imgH = this.naturalHeight * ($(this).width() / this.naturalWidth);
        const moveY = -(imgH - boxH);

        imgbox.closest('.item').on('mouseenter', function() {
            $(this).find('.img').css('transform', 'translateY(' + moveY + 'px)');
        }).on('mouseleave', function() {
            $(this).find('.img').css('transform', 'translateY(0)');
        });
    });

    if (this.complete) $(this).trigger('load');
});


// detail modal
function setIframeScale(previewbox) {

    // PC
    const pcPreview = previewbox.find('.pc_preview');
    if (pcPreview.hasClass('on')) {
        const pcScreen = pcPreview.find('.screen');
        const pcIframe = pcScreen.find('iframe');
        const pcScale = pcScreen.outerWidth() / 1920;
        const pcH = pcScreen.outerHeight() / pcScale;

        pcIframe.css({
            width: '1920px',
            height: pcH + 'px',
            transform: `scale(${pcScale})`,
            transformOrigin: '0 0'
        });
    }

    // MOB
    const mobPreview = previewbox.find('.mob_preview');
    if (mobPreview.hasClass('on')) {
        const mobScreen = mobPreview.find('.screen');
        const mobIframe = mobScreen.find('iframe');
        const mobScale = mobScreen.outerWidth() / 375;
        const mobH = mobScreen.outerHeight() / mobScale;

        mobIframe.css({
            width: '375px',
            height: mobH + 'px',
            transform: `scale(${mobScale})`,
            transformOrigin: '0 0'
        });
    }
}

$(".ms2 .item .detail_btn").click(function () {
    $("body").addClass("open")
    $(".detail_modal").addClass("show")
    $(".detail_modal .btnbox .screen_btn").removeClass("on");
    $(".detail_modal .previewbox .preview").removeClass("on");

    if ($(this).hasClass("pc_btn")) {
        $(".detail_modal .pc_preview").addClass("on");
        $(".detail_modal .pc_btn").addClass("on");
    } else if ($(this).hasClass("mob_btn")) {
        $(".detail_modal .mob_preview").addClass("on");
        $(".detail_modal .mob_btn").addClass("on");
    }

    setIframeScale($(".detail_modal .previewbox"));
})

$(document).ready(function() {

    $('.detail_modal .pc_btn').on('click', function() {
        $('.detail_modal .previewbox .preview').removeClass('on'); 
        $('.detail_modal .pc_preview').addClass('on');
        $('.screen_btn').removeClass('on');
        $(this).addClass('on');
        setIframeScale($('.detail_modal .previewbox'));
    });

    $('.detail_modal .mob_btn').on('click', function() {
        $('.detail_modal .previewbox .preview').removeClass('on'); 
        $('.detail_modal .mob_preview').addClass('on');
        $('.screen_btn').removeClass('on');
        $(this).addClass('on');
        setIframeScale($('.detail_modal .previewbox'));
    });

});

