
// AOS
AOS.init({
	duration: 500,
	easing: "linear",
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

  $(".tab_nav").on("click", function () {
    const clicked = $(this);
	
    const tabWrap = clicked.closest(".tab_wrap");
    const tabNavs = tabWrap.find(".tab_nav");
    const tabConts = tabWrap.find(".tab_cont");

    const index = tabNavs.index(clicked);

    tabNavs.removeClass("on");
    clicked.addClass("on");

    tabConts.removeClass("on");
    tabConts.eq(index).addClass("on");
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


// main section2 (gsap)
gsap.registerPlugin(ScrollTrigger);
// gsap.set(".ms2 .img1", { left: "-2.5%" });
// gsap.set(".ms2 .img2", { left: "81%" });
// gsap.set(".ms2 .txtbox .tit", { scale: 0.2 });
// gsap.set(".ms2 .txtbox .desc", { opacity: 0 });
gsap.timeline({
	scrollTrigger: {
		trigger: ".ms2",
		pin: ".ms2 .pinbox",
		start: "top top",
		end: "+=200%",
		scrub: 1,
		anticipatePin: 1
	}
})
// .to(".ms2 .img1", { left: "28%", ease: "power1.out" }, 0.2)
// .to(".ms2 .img2", { left: "50.5%", ease: "power1.out" }, 0.2)
// .to(".ms2 .txtbox .tit", { scale: 1, ease: "power2.out" }, 0.3)
// .to(".ms2 .txtbox .desc", { opacity: 1, ease: "power2.out" }, 0.4);


// main section5
$('.ms5 .thumbox li').on('click', function(e) {
  e.preventDefault();
  const ms5_index = $(this).index();
  $(this).addClass('on').siblings().removeClass('on');
  const ms5_imgs = $('.ms5 .imgbox .img');
  ms5_imgs.removeClass('on').eq(ms5_index).addClass('on');
});


// main section8
const video = document.querySelector('.ms8_video');
const vidbox = document.querySelector('.ms8 .vidbox');
const playBtn = document.querySelector('.ms8 .play_btn');

playBtn.addEventListener('click', function (e) {
  e.stopPropagation();

  if (!video.paused && !video.ended) {
    video.pause();
    vidbox.classList.remove('on');
    return;
  }

  vidbox.classList.add('on');
  video.play().catch(function (e) {
    console.warn('Play error:', e);
  });
});

vidbox.addEventListener('click', function () {
  if (!video.paused && !video.ended) {
    video.pause();
    vidbox.classList.remove('on');
  }
});

video.addEventListener('ended', function () {
  vidbox.classList.remove('on');
});

