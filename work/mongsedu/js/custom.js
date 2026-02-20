// AOS
AOS.init({
	duration: 800,
	easing: "ease-out",
	// disable: 'tablet',
})
window.addEventListener('load', function () {
	AOS.refresh();
});


// layout
function updateLayoutMargin() {
    const windowWidth = window.innerWidth;
    const maxWidth = 1200;
    const widthPercentage = 0.9;

    const contentWidth = Math.min(windowWidth * widthPercentage, maxWidth);
    const margin = (windowWidth - contentWidth) / 2;

    document.body.style.setProperty('--margin-left', `${margin}px`);
    document.body.style.setProperty('--margin-right', `${margin}px`);
}
window.addEventListener('resize', updateLayoutMargin);
document.addEventListener('DOMContentLoaded', updateLayoutMargin);


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
		lnbUI.click('.accordion li', 400)
	});
}(jQuery));


// tab function
$(document).ready(function () {
	$(".tab_navbox:not(.notab) .tab_nav").click(function () {
		let clickedTab = $(this);
		let tabWrap = clickedTab.closest(".tab_wrap");
		let allTabs = tabWrap.find(".tab_nav");
		let allContents = tabWrap.find(".tab_cont");
		let idx = allTabs.index(clickedTab);

		allTabs.removeClass("on");
		clickedTab.addClass("on");
		allContents.removeClass("on");
		allContents.eq(idx).addClass("on");

		setTimeout(function () {
			AOS.refreshHard();
		}, 150);

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


// select2 
$(function() {
	function formatOption(data) {
		if (!data.id) return data.text || '';
		if (!data.element) return null; 
		if ($(data.element).data('hidden')) return null;

		let icon = $(data.element).data('icon');
		return $('<span>')
			.append(icon ? '<img src="' + icon + '" class="icon">' : '')
			.append('<span class="txt">' + data.text + '</span>');
	}

	$(".select2").each(function() {
		let select = $(this);
		let customClass = select.data("class") || "";
		let placeholder = select.data("placeholder");

		let options = {
			templateResult: formatOption,
			templateSelection: formatOption,
			dropdownCssClass: customClass,
			width: '100%',
			allowClear: false,
		};

		if (placeholder) {
			options.placeholder = placeholder;
		}

		let container = select.select2(options).next('.select2-container');

		if (customClass && !container.hasClass(customClass)) {
			container.addClass(customClass);
		}

		let initialDataClass = select.find("option:selected").data("class");
		if (initialDataClass) container.attr("data-class", initialDataClass);

		select.on("change", function() {
			let newDataClass = $(this).find("option:selected").data("class") || '';
			container.attr("data-class", newDataClass);
		});
	});
});
$(document).on("mouseup", ".select2-dropdown, .select2-dropdown *", function (e) {
    e.stopPropagation();
});
$('.select').each(function () {
  const el = $(this);

  const updateSelected = () => {
    const val = el.val();
    const target = el.hasClass('select2')
      ? el.next('.select2-container')
      : el;

    if (val && val !== '0') {
      target.addClass('selected');
    } else {
      target.removeClass('selected');
    }
  };

  el.on('change', updateSelected);
  updateSelected();
});


// modal
$(".cm_modal .cm_modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".cm_modal").removeClass("show")
})
$(document).mouseup(function (e) {
	$('.cm_modal.show').each(function () {

		if ($(this).hasClass('notclose')) return;

		if ($(this).find('.cm_modal_box').has(e.target).length === 0) {
			$(this).removeClass('show');
			$('body').removeClass('hidden');
		}
	});
});


// popup
$(document).ready(function () {
	$(".cm_popup .cm_pop_close").click(function () {
		$("body").removeClass("pop_open")
		$(this).closest(".cm_popup").removeClass("show")
	})
})
$(document).mouseup(function (e) {
	if ($(".cm_popup").has(e.target).length === 0) {		
		$("body").removeClass("pop_open")
		$(this).closest(".cm_popup").removeClass("show")
	}
});


// marquee
const marquees = Array.from(document.querySelectorAll(".marquee"));
class Marquee {
  constructor({ el }) {
    this.el = el;
    this.marqueeAnimation = [
      { transform: "translateX(0)" },
      { transform: `translateX(calc(-100% - var(--gap,0)))` }
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
    for (const m of this.marquee_groups) {
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
  }

  cloneMarqueeGroup() {
    let clone = this.el.querySelector(".marquee_group").cloneNode(true);
    clone.classList.add("clone");
    this.el.appendChild(clone);
    this.marquee_groups = Array.from(
      this.el.querySelectorAll(".marquee_group")
    );
  }
}
for (const m of marquees) new Marquee({ el: m });



/* 헤더 */
// topbanner	
$(".top_banner .close_btn").click(function () {
	$(".top_banner").addClass("hide")
})

// header nav
$(document).on('mouseenter', '.h_bottom .h_nav > li', function () {
    const li = $(this);
	li.addClass('on');
    if (li.children('.h_nav_ul').length) {
        $('.h_bottom').addClass('hover');
    }
});
$(document).on('mouseleave', '.h_bottom .h_nav > li', function () {
    $(this).removeClass('on');
    $('.h_bottom').removeClass('hover');
});
$(document).on('mouseenter', '.h_bottom .h_nav_ul > li > a', function () {
    const li = $(this).parent('li');
    li.addClass('on');
});
$(document).on('mouseleave', '.h_bottom .h_nav_ul > li', function () {
    $(this).removeClass('on');
});
$(document).on("click", ".header .h_inner .h_nav > li > .link.point", function(e){
  if (window.innerWidth >= 1080) {
    e.preventDefault();
  }
});



// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").on("click", function () {
		$("body").addClass("open");
		$(".navbox").addClass("open");
	});
	$(".navbox .menu_close").on("click", function () {
		$("body").removeClass("open");
		$(".navbox").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".navbox").has(e.target).length === 0) {
		$("body").removeClass("open");
		$(".navbox").removeClass("open");
	}
});

// header nav
function setActiveMenu() {
	const search = window.location.search;
	
	if (search.indexOf('pid=counsel') !== -1 && search.indexOf('pid=counsel05') === -1 && search.indexOf('pid=counsel_banner') === -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(1).addClass('active');
	}
	
	if (search.indexOf('pid=procedure_') !== -1 && search.indexOf('pid=procedure_banner') === -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(2).addClass('active');
	}

	if (search.indexOf('pid=class_') !== -1 && search.indexOf('pid=class_banner') === -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(3).addClass('active');
	}

	if (search.indexOf('pid=univ_') !== -1 || search.indexOf('pid=guidebook') !== -1 ||search.indexOf('pid=faq') !== -1) {
		$('.header .h_inner .h_nav.h_side > li').eq(0).addClass('active');
	}

	if (search.indexOf('bo_table=notice') !== -1 || search.indexOf('bo_table=qa') !== -1 || search.indexOf('bo_table=admission') !== -1 ||search.indexOf('pid=counsel05') !== -1) {
		$('.header .h_inner .h_nav.h_side > li').eq(1).addClass('active');
	}
	
	if (search.indexOf('pid=ebook') !== -1) {
		$('.header .h_inner .h_nav.h_side > li').eq(2).addClass('active');
	}

	if (search.indexOf('pid=counsel_banner') !== -1 || search.indexOf('pid=procedure_banner') !== -1 || search.indexOf('pid=class_banner') !== -1 ||search.indexOf('pid=company') !== -1 ||search.indexOf('pid=map') !== -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(0).addClass('active');
	}

	if (search.indexOf('pid=special_duolingo') !== -1 || search.indexOf('pid=special_sogang') !== -1 || search.indexOf('pid=special_preparatory') !== -1 || search.indexOf('pid=special_malay') !== -1 || search.indexOf('pid=special_singapore') !== -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(4).addClass('active');
	}
}

$(document).ready(setActiveMenu);
window.addEventListener('pageshow', setActiveMenu);


/* 메인 */
function main_sch_popup() {
	$(".main-contents .mv_wrap .text_area .sch_popup").addClass("show");
}
const sampSwiper = new Swiper(".main-contents .sampSwiper", {
	effect: 'cards',
	direction: 'vertical',
	// grabCursor: true,
	loop:true,
	cardsEffect: {
		perSlideRotate: 0, 
		perSlideOffset: 10,
		rotate: false,
	},
	pagination: {
	el: '.sampSwiper .pagination',
	type: 'custom',
	clickable: true,
		renderCustom: function (swiper, current, total) {
			return '<span class="swiper-pagination-current">' + current + '</span>' + '<span class="swiper-pagination-bar"></span>' + '<span class="swiper-pagination-total">' + total + '</span>';
		}
	},
	navigation: {
		nextEl: ".sampSwiper .next_btn",
		prevEl: ".sampSwiper .prev_btn",
	},
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	on: {
		init: function () {
			const color = this.slides[this.activeIndex].getAttribute('data-color');
			this.el.classList.add(color + '_ver');
		},
		slideChange: function () {
			this.el.classList.remove('white_ver', 'black_ver');
			const color = this.slides[this.activeIndex].getAttribute('data-color');
			this.el.classList.add(color + '_ver');
		}
	},
	
});
const icon_swiper = new Swiper(".icon_swiper", {
	direction: 'vertical',
	loop:true,
	speed: 500,
	autoplay: {
		delay: 750,
		disableOnInteraction: false,
	},	
});



/* 상담하기 */
// 선생님 스와이퍼
$(document).ready(function () {
	if ($(window).width() > 1080) {
		$('.mentor_swiper:not(.ver2):not(.why_swiper)').each(function () {
			new Swiper(this, {
				observer: true,
				observeParents: true,
				slidesPerView: 'auto',
				// slidesPerView: 4,
				speed: 500,
				spaceBetween: 10,
				grabCursor: true,
				navigation: {
					nextEl: $(this).closest('.mentor_wrap').find('.mentor_controls .next_btn')[0],
					prevEl: $(this).closest('.mentor_wrap').find('.mentor_controls .prev_btn')[0],
				},
			});
		});
	}
});

// 선생님 상세 팝업
const mentorpop_swiper = new Swiper('.mentorpop_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	spaceBetween: 40,
	autoHeight: false,
	navigation: {
		nextEl: ".mentor_modal .next_btn",
		prevEl: ".mentor_modal .prev_btn",
	},
	breakpoints: {
		1080: {
		autoHeight: true,
		},
	},
})
function mentor_modal(i) {
	$("body").addClass('hidden');
	$(".mentor_modal").addClass('show');
	mentorpop_swiper.slideTo(i-1, 0);
}
$('.mentor_modal .next_btn, .mentor_modal .prev_btn').on('mouseup', function(e){
	e.stopPropagation();
});



/* 상세	*/
$(".page-detail .tooltip .close_btn").click(function () {
	$(".page-detail .tooltip").addClass("hide")
})

// URL 복사
$(document).on("click", ".page-detail .share", function () {
  const currentUrl = window.location.href;

  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(currentUrl)
      .then(function () {
        alert("링크가 복사되었습니다");
      })
      .catch(function () {
        fallbackCopy(currentUrl);
      });
  } else {
    fallbackCopy(currentUrl);
  }
});
$(document).on("click", ".board-view .share_btn", function () {
  const currentUrl = window.location.href;

  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(currentUrl)
      .then(function () {
        alert("링크가 복사되었습니다");
      })
      .catch(function () {
        fallbackCopy(currentUrl);
      });
  } else {
    fallbackCopy(currentUrl);
  }
});
function fallbackCopy(text) {
  const textarea = $("<textarea>");
  $("body").append(textarea);
  textarea.val(text).select();
  document.execCommand("copy");
  textarea.remove();
  alert("링크가 복사되었습니다");
}

// 탭 버튼 활성화
$(function () {
	const tabs = $('.tab.sticky .tab_tit li a');
	if (!tabs.length) return;

	const triggerOffset = 100;

	$(window).on('scroll', function () {
		const scrollTop = $(window).scrollTop();
		const triggerLine = scrollTop + triggerOffset;

		let currentId = null;

		tabs.each(function () {
			const target = $(this).attr('href');
			const targetEl = $(target);
			if (!targetEl.length) return;

			if (triggerLine >= targetEl.offset().top) {
				currentId = target;
			}
		});

		if (!currentId) {
			currentId = tabs.eq(0).attr('href');
		}

		tabs.removeClass('show');
		tabs.filter('[href="' + currentId + '"]').addClass('show');
	});
});


// 상담학교 리스트 타이틀 너비
$(window).on("load", function(){

  $(".page-detail .counselingbox").each(function(){

    const box = $(this);
    const titElements = box.find(".tit");
    if (!titElements.length) return;

    let maxWidth = 0;

    titElements.each(function(){
      const width = this.getBoundingClientRect().width;
      if (width > maxWidth) {
        maxWidth = width;
      }
    });

    const rootSize = parseFloat(getComputedStyle(document.documentElement).fontSize);
    const maxWidthRem = maxWidth / rootSize;

    box[0].style.setProperty("--title-width", maxWidthRem + "rem");

  });

});






// 학교 리스트
$(".school_moreview").click(function () {
	$(this).toggleClass('on');
	$(this).parent('div').siblings('.school_listbox').toggleClass('on');
})
$(".school_moreview2").click(function () {
	$(this).closest('.school_listbox').addClass('on');
})

// 질문 스와이퍼
const question_swiper = new Swiper('.question_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	speed: 500,
	spaceBetween: 10,
	grabCursor: true,	
	breakpoints: {
		1080: {
			spaceBetween: 8,
		},
	},
})



/* 학교정보	*/
// 검색
function univsch_popup() {
	$("body").addClass("pop_open");
	$(".page-univ .univsch_popup").addClass("show");
	$(".page-univ .tit_area.board .search_box").addClass("on");
}
$(document).on("mouseup", function (e) {
	if (
		!$(e.target).closest(".page-univ .univsch_popup, .page-univ .search_inputbox").length
	) {
		$("body").removeClass("pop_open");
		$(".page-univ .univsch_popup").removeClass("show");
		$(".page-univ .tit_area.board .search_box").removeClass("on");
	}
});
``
$('.page-univ .search_inputbox .input').on('input', function () {
	const btn = $(this).siblings('.del_btn');
	if ($(this).val().trim() !== '') {
		btn.addClass('show')
	} else {
		btn.removeClass('show');
	}
});

$('.page-univ .search_inputbox .del_btn').on('click', function (e) {
	e.stopPropagation(); 
	const input = $(this).siblings('.input');
	input.val('').trigger('input').focus();
});


// 학교정보 메인 리스트
const univ_swiper = new Swiper('.univ_swiper', {
	observer: true,
	observeParents: true,
	speed: 500,
	spaceBetween: 20,
	pagination: {
		el: ".univ_swiper .pagination",
		type: "fraction",
	},
	navigation: {
		nextEl: ".univ_swiper .next_btn",
		prevEl: ".univ_swiper .prev_btn",
	},
})

// 학교정보 스와이퍼
$(document).ready(function () {
	$('.univlist_swiper:not(.grid_ver)').each(function () {
		new Swiper(this, {
			observer: true,
			observeParents: true,
			slidesPerView: 'auto',
			speed: 500,
			spaceBetween: 10,
			grabCursor: true,
			navigation: {
				nextEl: $(this).closest('.univlist_wrap').find('.univlist_controls .next_btn')[0],
				prevEl: $(this).closest('.univlist_wrap').find('.univlist_controls .prev_btn')[0],
			},
			breakpoints: {
				1080: {
					slidesPerView: 4,
					spaceBetween: 12,
				},
			},
		});
	});
	if ($(window).width() > 1080) {
		$('.univlist_swiper.grid_ver').each(function () {
			new Swiper(this, {
				observer: true,
				observeParents: true,
				slidesPerView: '4',
				slidesPerGroup: 4,
				speed: 500,
				spaceBetween: 10,
				grabCursor: true,
				grid: {
					rows: 2,
					fill: 'column'
				},
				navigation: {
					nextEl: $(this).closest('.univlist_wrap').find('.univlist_controls .next_btn')[0],
					prevEl: $(this).closest('.univlist_wrap').find('.univlist_controls .prev_btn')[0],
				},
			});
		});
	}
});

// 학교정보 상세 모달
function univ_modal(i) {
	$("body").addClass('hidden');
	$("#univ_modal_"+i).addClass('show');
}



/* 전자북/책자 */
// 전자북/책자 상세 모달
function ebook_modal(i) {
	$("body").addClass('hidden');
	$("#ebook_modal"+i).addClass('show');
}

// 전자북 스와이퍼
const ebook_swiper = new Swiper('.ebook_swiper', {
	observer: true,
	observeParents: true,
	effect : 'fade',
	fadeEffect: { 
	crossFade: true 
	},
	speed: 500,
	spaceBetween: 40,
	navigation: {
		nextEl: ".ebook_swiperbox .next_btn",
		prevEl: ".ebook_swiperbox .prev_btn",
	},
})



/* 유학생 소개 */
// 상담안내
const mentor_swiper2 = new Swiper('.mentor_swiper.ver2', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	centeredSlides: true,
	loop:true,
	speed: 500,
	spaceBetween: 10,
	grabCursor: true,
	initialSlide: 2, 
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
})

// 상담안내
const prdservice_swiper = new Swiper('.prdservice_swiper', {
	observer: true,
	observeParents: true,
	centeredSlides: true,
	loop:true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 16,
	grabCursor: true,
	navigation: {
		nextEl: ".prdservice_swiper .next_btn",
		prevEl: ".prdservice_swiper .prev_btn",
	},
	breakpoints: {
		1080: {
			spaceBetween: 24,
		},
	},
})

// 몽쌤소개
const company_swiper = new Swiper('.company_swiper', {
	observer: true,
	observeParents: true,
	centeredSlides: true,
	loop:true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 12,
	grabCursor: true,
	initialSlide: 2,
	navigation: {
		nextEl: ".company_swiper .next_btn",
		prevEl: ".company_swiper .prev_btn",
	},
	breakpoints: {
		1080: {
			spaceBetween: 24,
		},
	},
})

// 찾아오시는길
$(document).on('click', '.page-map .copy_btn', function (e) {
	e.preventDefault();
	const text = $('#address').text().trim();
	navigator.clipboard.writeText(text).then(function () {
		const $txt = $(this).find('.txt');
		$txt.text('복사 완료!');
		setTimeout(function () {
			$txt.text('주소복사');
		}, 2000);
	}.bind(this)).catch(function () {
		alert('복사에 실패했습니다.');
	});
});



/* Why 몽선생 */
$(document).ready(function () {
	$('.why_swiper').each(function () {
		new Swiper(this, {
			observer: true,
			observeParents: true,
			slidesPerView: 'auto',
			speed: 500,
			spaceBetween: 8,
			grabCursor: true,
			navigation: {
				nextEl: $(this).closest('.why_wrap').find('.controlsbox .next_btn')[0],
				prevEl: $(this).closest('.why_wrap').find('.controlsbox .prev_btn')[0],
			},
			breakpoints: {
				1080: {
					spaceBetween: 12,
				},
			},
		});
	});
});

// 카운트업
document.addEventListener('DOMContentLoaded', () => {
  const countEls = document.querySelectorAll('.countup');

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) { // 화면에 보이면
        const el = entry.target;
        const end = Number(el.dataset.count);
        const duration = Number(el.dataset.time) || 2000;
        let startTime = null;

        function animate(time) {
          if (!startTime) startTime = time;
          const progress = Math.min((time - startTime) / duration, 1);

          const value = Math.floor(end * progress);
          el.textContent = value.toLocaleString();

          if (progress < 1) {
            requestAnimationFrame(animate);
          }
        }

        requestAnimationFrame(animate);
        obs.unobserve(el); // 한 번 실행 후 관찰 종료
      }
    });
  }, { threshold: 0.2 }); // 10% 보이면 실행

  countEls.forEach(el => observer.observe(el));
});


/* SPECIAL */
// 대학교 더보기
$(document).on('click', '.univ_listwrap .more_univ', function () {
	const wrap = $(this).closest('.univ_listwrap');
	const list = wrap.find('.univ_listbox');
	const btntxt = $(this).find(".change");

	list.toggleClass('hide');

	if (list.hasClass('hide')) {
		btntxt.text('더보기');
	} else {
		btntxt.text('숨기기');
	}
});


// 싱가포르 사립대 특별혜택 스와이퍼
const singa_swiper = new Swiper('.singa_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	centeredSlides: false,
	loop:false,
	speed: 500,
	spaceBetween: 8,
	grabCursor: true,
	initialSlide: 0, 
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
	breakpoints: {
		1080: {
			spaceBetween: 10,
			centeredSlides: true,
			loop:true,
			initialSlide: 2, 
		},
	},
})



/* 모바일 */

// 상단배너 닫기
$(document).ready(function () {
	if ($(window).width() < 1080) {

		$(document).mouseup(function (e) {
			if ($('.top_banner .container').has(e.target).length === 0) {
				$('.top_banner').addClass('hide');
			}
		});

		$('.header .h_inner .back_btn').on('click', function() {
			window.history.back(); 
		});
	}
});

// mobile nav active
function setActiveNavi() {
	const search = window.location.search;
	const path = window.location.pathname;

	$('.navibar .navitem').removeClass('on');

	if (path === '/' || path.includes('index')) {
		$('.navibar .navitem').eq(0).addClass('on');
	}

	if (search.includes('bo_table=admission')) {
		$('.navibar .navitem').eq(3).addClass('on');
	}
}
$(document).ready(setActiveNavi);
window.addEventListener('pageshow', setActiveNavi);


// link swiper
$(document).ready(function () {
	$('.link_swiper').each(function () {

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
			scrollbar: {
				el: $this.find('.swiper-scrollbar')[0],
				draggable: true,
			},
			breakpoints: {
				1080: {
					spaceBetween: gapPc,
				},
			},
		});

	});
});


// 상세 html 요소 위치이동
$(document).ready(function () {
	const handleElementMove = () => {
		const winWidth = $(window).width();
		const search = window.location.search;

		const isDetail = search.includes('pid=class_detail') || search.includes('pid=counsel_detail') || search.includes('pid=procedure_detail');

		const isClassDetail = search.includes('pid=class_detail');
		const isProcedureDetail = search.includes('pid=procedure_detail');
		const isCounselDetail = search.includes('pid=counsel_detail');

		if (winWidth < 1080 && isDetail) {
			$('.header').addClass('detail');
			$('.page-detail .frame-15d .button').appendTo('.page-detail').addClass("fixed_btnbox");
			$('.counsel-btn, .eb-backtotop').addClass('hide');
			$('.navibar').addClass('hide');

			if (isClassDetail) {
				$('.page-detail .frame-16 .frame-1d').prependTo('.page-detail .frame-157');
				$('.page-detail .frame-1c').appendTo('.page-detail .frame-152');
			}

			if (isProcedureDetail) {
				$('.page-detail .frame-16').prependTo('.page-detail .frame-14f');

				const navItems = $('.page-detail .floating_cont .frame-152');
				const contentItems = $('.page-detail .floating_cont .frame-158');
				navItems.each(function (index) {
					$(this).prependTo(contentItems.eq(index));
				});
				$(document)
				.off('click', '.tab_cont')
				.on('click', '.tab_cont', function () {
					const $this = $(this);
					if ($this.hasClass('on')) {
						$this.removeClass('on');
					} else {
						$('.tab_cont').removeClass('on');
						$this.addClass('on');
					}
				});
			}

			if (isCounselDetail) {				
				$('.page-detail .frame-16').prependTo('.page-detail .frame-14f');
			}
		}


	};
	handleElementMove();
});


// 기타페이지 html 요소 위치이동
$(document).ready(function () {
	const handleElementMove = () => {
		const winWidth = $(window).width();
		const search = window.location.search;

		if (winWidth < 1080) {
			if (search.includes('pid=counsel') || search.indexOf('bo_table=qa')) {

				$('.page-form .counsel_wrap .counsel_titbox .cs_top').prependTo('.page-form .counsel_wrap');
				
			}			
			if (search.includes('pid=special_singapore')) {		

				  $('.page-singapore .singa_sec2 .contbox').each(function () {
					const bottom = $(this).find('.msg_box');
					bottom.appendTo($(this));
				});
				
			}			
		}
	};
	handleElementMove();
});
