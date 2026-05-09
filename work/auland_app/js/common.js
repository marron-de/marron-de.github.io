
// navmenu button 
$(document).ready(function () {
	$(".header .menu_open").on("click", function () {
		$("body").addClass("hidden");
		$(".header").addClass("open");
		$(".nav_menu").addClass("open");
	});
	$(".nav_menu .menu_close").on("click", function () {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_menu").removeClass("open");
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
	$(".tab_wrap .tab_nav").click(function () {
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
    $('.tab_swiper').each(function (i, el) {
        const index = parseInt($(el).attr('data-index'), 10) || 0;

        new Swiper(el, {
            observer: true,
            observeParents: true,
            slidesPerView: 'auto',
			spaceBetween: 20,
            speed: 500,
            initialSlide: index,

			breakpoints: {
				1080: {
					spaceBetween: 0,
				},
			}

        });
    });
});


// modal 
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


// tooltip
$('.alert_icon').on('click', function(e) {
    e.stopPropagation();
    $(this).find('.tooltip').toggleClass('show');
});
$(document).on('click', function() {
    $('.tooltip').removeClass('show');
});


// progress width
function updateProgressWidths() {
    $('.progressbox .progress').each(function() {
        const progressWidth = $(this).width();
        $(this).css('--progress-width', progressWidth + 'px');
    });
}
$(document).ready(function() {
    updateProgressWidths();
});
$(window).on('resize', updateProgressWidths);


// 01온보딩_02인트로
const intro_swiper = new Swiper('.intro_swiper', {
	loop:true,
	speed: 500,
	effect: 'fade',
	fadeEffect: {
	crossFade: true
	},
	pagination: {
		el: '.intro_swiper .pagination',
		clickable: true,
	},
});


// 01온보딩_05회원가입_02약관동의
$(document).ready(function() {
    $('#allCheck').on('change', function() {
        $('.sub_check').prop('checked', $(this).prop('checked'));
    });
    $('.sub_check').on('change', function() {
        $('#allCheck').prop('checked', $('.sub_check').length === $('.sub_check:checked').length);
    });
});


// 02검사하기_01홈
const exam_index = parseInt($('.exam_swiper').attr('data-index'), 10) || 0;
const exam_swiper = new Swiper('.exam_swiper', {
    initialSlide: exam_index, // 
    loop: true,
    speed: 500,
    spaceBetween: 40,
    pagination: {
        el: '.exam_swiper .pagination',
        clickable: true,
    },
});


// 04검사가이드_02저학년검사안내&03고학년검사안내
$(function() {
    $('.vidcont').each(function() {
        const cont = $(this);
        const videoElement = cont.find('.video');
        const video = videoElement[0];
        const playBtn = cont.find('.play_btn, .play_video');
		
        const clickTargets = playBtn.add(videoElement);

        clickTargets.on('click', function() {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        });

        videoElement.on('play', function() {
            cont.find('.play_btn').addClass('on');
            cont.find('.play_video').addClass('hide');
        });

        videoElement.on('pause', function() {
            cont.find('.play_btn').removeClass('on');
            cont.find('.play_video').removeClass('hide');
        });

        videoElement.on('timeupdate', function() {
            const current = video.currentTime;
            const duration = video.duration;
            const progress = (current / duration) * 100;

            cont.find('.bar').css('width', progress + '%');
            cont.find('.now').text(formatTime(current));
        });

        function formatTime(seconds) {
            const min = Math.floor(seconds / 60);
            const sec = Math.floor(seconds % 60);
            return min + ":" + (sec < 10 ? '0' + sec : sec);
        }
    });
});