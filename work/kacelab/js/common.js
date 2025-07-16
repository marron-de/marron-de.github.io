const pageContainer = document.querySelector(".container");
const bWidth = window.innerWidth;


// scroll smooth
const scroller = new LocomotiveScroll({
	el: pageContainer,
	smooth: true
});


document.addEventListener('DOMContentLoaded', function () {
	function ScrollUpdateDelay() {
		setTimeout(function () {
			scroller.update();
		}, 1000);
	}
	ScrollUpdateDelay();
});


// AOS
AOS.init({
	duration: 800,
	// disable: 'tablet',
})

window.addEventListener('load', function () {
	AOS.refresh();
});


let observer = new IntersectionObserver( (entries, observer) => {
	entries.forEach(entry => {
			if (entry.isIntersecting){
					entry.target.classList.add('aos-animate');
			} else {
					entry.target.classList.remove('aos-animate');
			}
	});
});
document.querySelectorAll('[data-aos]').forEach(aosElem => {
	observer.observe(aosElem)
});


// header navbox button 
function menu_toggle() {
	// $("body").toggleClass("hidden");
	$(".header").toggleClass("open");
	$(".nav_box").toggleClass("open");
	$(".menu_icon .menu_linebox").toggleClass("open");
}


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
		// lnbUI.click('#nav li', 400)
	});

}(jQuery));


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


// marquees
const marquees = Array.from(document.querySelectorAll(".marquee"));

class Marquee {
    constructor({ el }) {
        this.el = el;
        this.marqueeAnimation = [
            { transform: "translateX(0)" },
            { transform: `translateX(calc(-100% - var(--marquee_gap,0)))` }
        ];

        this.marqueeTiming = {
            duration: this.el.dataset.duration * 10000,
            direction: this.el.dataset.reverse ? "reverse" : "normal",
            iterations: Infinity
        };
        this.animations = [];
        this.SLOWDOWN_RATE = 0.2;
        this.cloneMarqueeGroup();
        this.init();
    }

    init() {
        for (const m of this.marquee__groups) {
            let q = m.animate(this.marqueeAnimation, this.marqueeTiming);

            this.animations.push(q);
        }

        this.initEvents();
    }

    slowDownAnimations() {
        for (const a of this.animations) {
            a.playbackRate = this.SLOWDOWN_RATE;
        }
    }

    resumeAnimationSpeed() {
        for (const a of this.animations) {
            a.playbackRate = true;
        }
    }

    initEvents() {
        this.el.addEventListener("mouseenter", () => this.slowDownAnimations());
        this.el.addEventListener("mouseleave", () => this.resumeAnimationSpeed());

        if (this.el.classList.contains('ms3_marquee')) {
            this.initScrollEvent();
        }
    }

    initScrollEvent() {
			window.addEventListener('scroll', () => {
        const scrollSpeed = Math.abs(window.scrollY - this.lastScrollY);
        this.adjustAnimationSpeed(scrollSpeed);
        this.lastScrollY = window.scrollY;
    	});
    }

    adjustAnimationSpeed(scrollSpeed) {
			const maxPlaybackRate = 3; // 최대 재생 속도
			const maxScrollSpeed = 1000; // 최대 스크롤 속도
	
			// 현재 스크롤 속도에 따라 재생 속도를 계산
			const playbackRate = Math.min(1 + (scrollSpeed / maxScrollSpeed) * (maxPlaybackRate - 1), maxPlaybackRate);
	
			// 계산된 재생 속도를 애니메이션에 적용
			for (const a of this.animations) {
					a.playbackRate = playbackRate;
			}
		}
	

    cloneMarqueeGroup() {
        let clone = this.el.querySelector(".marquee_group").cloneNode(true);
        clone.classList.add("clone");
        this.el.appendChild(clone);
        this.marquee__groups = Array.from(
            this.el.querySelectorAll(".marquee_group")
        );
    }
}

for (const m of marquees) {
    new Marquee({ el: m });
}


// input check
document.addEventListener('DOMContentLoaded', function() {
  const inputs = document.querySelectorAll('input[required], textarea[required], select[required]');

  inputs.forEach(input => {
      input.addEventListener('input', function() {
          if (input.value !== '') {
              input.parentElement.classList.remove('error');
          }
      });
  });
});

$('.input_file').on('change', function () {
	let files = $(this)[0].files;
	let filenames = [];

	for (let i = 0; i < files.length; i++) {
			let file = files[i];
			let ext = file.name.split('.').pop().toLowerCase();
			let fileNameWithoutExtension = file.name.split('.').slice(0, -1).join('.');
			let filenameDisplay = '';

			if ($(this).hasClass('extension')) {
					filenameDisplay = '<span class="txt1">' + fileNameWithoutExtension + '</span><span class="txt2">' + ext + '</span>';
			} else {
					filenameDisplay = file.name;
			}

			if ($(this).hasClass('only_img')) {
					if (!(ext === 'jpg' || ext === 'jpeg' || ext === 'png' || ext === 'gif')) {
							alert('올바른 확장자가 아닙니다. 파일을 다시 확인해주세요.');
							$(this).val('');
							return;
					}
			}

			filenames.push(filenameDisplay);
	}

	if ($(this).hasClass('extension')) {
			$(this).siblings('.file_name').html(filenames.join(', '));
	} else {
			$(this).siblings('.file_name').val(filenames.join(', '));
	}

	$(this).closest('.file_box').addClass('attached');
});


function resetForm() {
	document.getElementById("sendmail").reset();
	$("#sendmail .error").removeClass("error");   
}


window.addEventListener("orientationchange", function() {
	location.reload();
});


$(document).ready(function () {
	$(".darkmode_btn").click(function () {
			$("body").toggleClass("dark_mode");
			let darkModeEnabled = $("body").hasClass("dark_mode");
			localStorage.setItem("darkModeEnabled", darkModeEnabled);
	});


	let darkModeEnabled = localStorage.getItem("darkModeEnabled");
	if (darkModeEnabled === "true") {
			$("body").addClass("dark_mode");
	}
});

