
// AOS
AOS.init({
	duration: 800,
	// disable: 'tablet',
})

window.addEventListener('load', function () {
	AOS.refresh();
});


// header navbox button 
function m_menu_ope() {
	$("body").addClass("hidden");
	$(".header").addClass("open");
	$(".nav_box").addClass("open");
}

function m_menu_clo() {
	$("body").removeClass("hidden");
	$(".header").removeClass("open");
	$(".nav_box").removeClass("open");
}

$(document).mouseup(function (e) {
	if ($(".nav_box").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
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
		lnbUI.click('#nav li', 400)
	});

}(jQuery));


// scroll nav
$(function () {
	let didScroll;
	let lastScrollTop = 0;
	let delta = 5; // 이벤트를 발생시킬 스크롤의 이동 범위
	let navbarHeight = $("#header").outerHeight();

	$(window).scroll(function (event) {
		didScroll = true;
	});

	hasScrolled();

	setInterval(function () {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 250); // 스크롤이 멈춘 후 동작이 실행되기 까지의 딜레이

	function hasScrolled() {
		let st = $(this).scrollTop(); // 현재 window의 scrollTop 값

		// delta로 설정한 값보다 많이 스크롤 되어야 실행된다.
		if (Math.abs(lastScrollTop - st) <= delta)
			return;

		if (st > 0) {
			$("body").addClass("down")
		} else {
			$("body").removeClass("down")
		}

		if (st > navbarHeight) {
			$("#header").addClass("down")
		}

		if (st < navbarHeight) {
			$("#header").removeClass("down")
		}

		// if (st > lastScrollTop && st > navbarHeight) {
		// 	// 스크롤을 내렸을 때                
		// 	$("#header").addClass("hide")

		// } else {
		// 	// 스크롤을 올렸을 때 
		// 	$("#header").removeClass("hide")

		// }

		lastScrollTop = st; // 현재 멈춘 위치를 기준점으로 재설정
	}
})


// scroll animation
$(window).on('scroll resize', function (e) {

	let scroll_top = $(window).scrollTop(),
		section_progress = scroll_top / ($(document).height() - $(window).height());
	section_progress = isFinite(section_progress) ? section_progress : 0;

	$('html').attr('style', '--progress: ' + section_progress);

	$('.sequence').each(function (i) {
		let $sequence = $(this);
		let trigger_top = scroll_top,
			sequence_top = $sequence.offset().top,
			sequence_bottom = sequence_top + $sequence.outerHeight() - $(window).height(),
			sequence_progress;
		let progress_in = $sequence.data('progress-in') || 0;

		sequence_top = sequence_top - ($(window).height() * progress_in);

		if (trigger_top <= sequence_top) {
			sequence_progress = 0;
		} else if (trigger_top > sequence_top && trigger_top <= sequence_bottom) {
			sequence_progress = (trigger_top - sequence_top) / (sequence_bottom -
				sequence_top);
		} else {
			sequence_progress = 1;
		}

		$sequence.attr('style', '--progress: ' + sequence_progress);
	});
}).resize();


// tab function
$(document).ready(function () {

	$(".tab_nav").click(function () {

		let target = $(this);
		let tabNavbox = target.closest('ul')
		let tabNav = tabNavbox.find(".tab_nav")
		let idx = tabNav.index(this);

		let tabWrap = tabNavbox.closest("div");
		let tabContbox = tabWrap.find(".tab_contbox");
		let tabCont = tabContbox.find(".tab_cont");

		tabNav.removeClass("on")
		tabNav.eq(idx).addClass("on")

		tabCont.removeClass("on")
		tabCont.eq(idx).addClass("on")

	})

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


/* modal */
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})

$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
	}
});