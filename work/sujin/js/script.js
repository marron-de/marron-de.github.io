// AOS
AOS.init({
	duration: 1000,
	// disable: 'tablet',
})

window.addEventListener('load', function () {
	AOS.refresh();
});


// bgm function
$(document).ready(function () {
	let bgm = $('#bgm')[0];
	let volumeBtn = $('.volume_btn');

	bgm.play().then(() => {
		volumeBtn.addClass('on');
	}).catch(error => {
		console.log('자동 재생이 제한되었습니다:', error);
	});

	$('.volume_btn').click(function () {
		if (bgm.paused) {
			bgm.play();
			volumeBtn.addClass('on');
		} else {
			bgm.pause();
			volumeBtn.removeClass('on');
		}
	});

	bgm.addEventListener('ended', function () {
		bgm.currentTime = 0;
		bgm.play();
		volumeBtn.addClass('on');
	});
});


// top button function
$(document).ready(function () {
	let topBtn = $('.top_btnbox .top_btn');

	topBtn.click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 500);
	});
});


// countdown
function updateCountdown() {
	let targetDate = new Date("2026-04-25T12:00:00");
	let now = new Date();
	let timeDifference = targetDate - now;

	let days, hours, minutes, seconds;

	if (timeDifference < 0) {
		$(".ms4 .numberbox #days").text("00");
		$(".ms4 .numberbox #hours").text("00");
		$(".ms4 .numberbox #minutes").text("00");
		$(".ms4 .numberbox #seconds").text("00");

		$(".ms4 .msgbox .msg.before").removeClass("on");
		$(".ms4 .msgbox .msg.after").addClass("on");

		let daysPassed = Math.floor(Math.abs(timeDifference) / (1000 * 60 * 60 * 24));
		$(".ms4 .msgbox .msg.after .day").text(daysPassed + "일");

	} else {

		$(".ms4 .msgbox .msg.before").addClass("on");
		$(".ms4 .msgbox .msg.after").removeClass("on");

		days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
		hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
		seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

		$(".ms4 .numberbox #days").text(String(days).padStart(2, "0"));
		$(".ms4 .numberbox #hours").text(String(hours).padStart(2, "0"));
		$(".ms4 .numberbox #minutes").text(String(minutes).padStart(2, "0"));
		$(".ms4 .numberbox #seconds").text(String(seconds).padStart(2, "0"));

		$(".ms4 .msgbox .msg.before .day").text(days + "일");
	}
}
setInterval(updateCountdown, 1000);


// main section3
const ms3_thum = new Swiper(".ms3_thum", {
	spaceBetween: 8,
	slidesPerView: 5,
	slidesPerGroup: 5,
	speed: 500,
	loop: true,

	pagination: {
		el: '.ms3_thum .pagination',
		clickable: true,
	},
});

const ms3_swiper = new Swiper(".ms3_swiper", {
	spaceBetween: 10,
	speed: 500,
	loop: true,

	pagination: {
		el: '.ms3_swiper .pagination',
		type: "fraction",
	},

	navigation: {
		nextEl: ".ms3_swiper .next_btn",
		prevEl: ".ms3_swiper .prev_btn",
	},

	thumbs: {
		swiper: ms3_thum
	},
});

const gall_swiper = new Swiper(".gall_swiper", {
	spaceBetween: 10,
	speed: 500,
	loop: true,

	pagination: {
		el: '.gall_swiper .pagination',
		type: "fraction",
	},

	navigation: {
		nextEl: ".gall_swiper .next_btn",
		prevEl: ".gall_swiper .prev_btn",
	},

	thumbs: {
		swiper: ms3_swiper
	},
});


// video banner
$(document).ready(() => {
    $('.vidbox').each(function() {
        const vidBox = $(this);
        const video = vidBox.find('video').get(0);
        const playBtn = vidBox.find('.play_btn');

        const togglePlay = () => {
            if (video.paused) {
                video.play();
            } else {
                video.pause();
            }
        };

        playBtn.on('click', togglePlay);
        $(video).on('click', togglePlay);

        $(video).on('play', () => {
            vidBox.addClass('play');
        }).on('pause ended', () => {
            vidBox.removeClass('play');
        });

        video.pause();
        video.currentTime = 0;
        vidBox.removeClass('play');
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
				// $siblings.removeClass('show');
				// $siblings.find('ul').slideUp(400);

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
		lnbUI.click('#account_box li', 400)
	});

}(jQuery));


// account copy 
$(document).ready(function () {
    $(".ms7 .account_info .copy_btn").click(function () {
        let accountNumber = $(this).data("copy");

        let tempInput = $("<input>");
        $("body").append(tempInput);
        tempInput.val(accountNumber).select();
        
        document.execCommand("copy");
        
        tempInput.remove();

        alert("계좌번호가 복사되었습니다");
    });
});


// kakao share
Kakao.init('db31dcc70ae61ff4772e8e2195b6fcd3');
document.getElementById("kakao_share").addEventListener("click", function () {
	Kakao.Share.sendDefault({
		objectType: "feed",
		content: {
			title: "❤️서율의 생일파티에 초대합니다❤️",
			description: "작은 기적이 큰 사랑이 된 날, \n함께해 주시길 바랍니다.",
			imageUrl: "http://marronde.com/seoyul/img/kakao_share_img.jpg", 
			link: {
				mobileWebUrl: "http://marronde.com/seoyul/",
				webUrl: "http://marronde.com/seoyul/"
			}
		},
		buttons: [
			{
				title: "서율이 축하하기",
				link: {
					mobileWebUrl: "http://marronde.com/seoyul/",
					webUrl: "http://marronde.com/seoyul/"
				}
			}
		],
	});
});


// modal
$(document).ready(function () {
	// gallery modal
	$(".ms3_swiper .swiper-slide").click(function () {
		$("body").addClass("hidden");
		$(".gall_modal").addClass("show");
	});
	
	// write modal
	$(".ms8 .guestbook_bottom #write_btn").click(function () {
		$("body").addClass("hidden");
		$(".write_modal").addClass("show");
	});

	// modal close
	$(".modal .modal_close").click(function () {
		$("body").removeClass("hidden");
		$(".modal").removeClass("show");
	});
});
$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".modal").removeClass("show");
	}
});