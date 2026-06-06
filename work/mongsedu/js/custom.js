// AOS
AOS.init({
	duration: 800,
	easing: "ease-out",
	// disable: 'tablet',
})
window.addEventListener('load', function () {
	AOS.refresh();
});


// lucide
lucide.createIcons();


// layout
function updateLayoutMargin() {
    const windowWidth = window.innerWidth;
    const maxWidth = 1200;
    const widthPercentage = 0.9;

    const contentWidth = Math.min(windowWidth * widthPercentage, maxWidth);
    const margin = (windowWidth - contentWidth) / 2;

    document.body.style.setProperty('--margin-left', `${margin}px`);
    document.body.style.setProperty('--margin-right', `${margin}px`);

    const sideMenu = document.querySelector('.sticky_sidemenu');
    if (sideMenu) {
		sideMenu.classList.add('show');
    }
}
window.addEventListener('resize', updateLayoutMargin);
document.addEventListener('DOMContentLoaded', updateLayoutMargin);


// accordion
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
                const $this = $(this);

                if ($this.closest('.arrow_ver').length) {
                    if (!$(e.target).closest('.arrow').length) return;
                }

                let $depthTarget = $this.next(),
                    $siblings = $this.parent().siblings();

                $this.parent('li').find('ul li').removeClass('show');

                if ($depthTarget.css('display') == 'none') {
                    _self.activeOn($this);
                    $depthTarget.slideDown(_self.speed);
                } else {
                    $depthTarget.slideUp(_self.speed);
                    _self.activeOff($this);
                }
            });
        },
        activeOff: function ($target) {
            $target.parent().removeClass('show');
        },
        activeOn: function ($target) {
            $target.parent().addClass('show');
        },
    };

    $(function () {
        lnbUI.click('.accordion li', 400);
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
$(".cm_modal .cm_modal_close, .cm_modal .modal_close").click(function () {
	$(this).closest('.cm_modal').removeClass("show");
	if ($(".cm_modal.show").length === 0) {
        $("body").removeClass("hidden");
    }
})
$(document).mouseup(function (e) {
    const openModals = $('.cm_modal.show');
    
    if (openModals.length > 0) {
        const $lastModal = openModals.last();

        if ($lastModal.hasClass('notclose')) return;

        if ($lastModal.find('.cm_modal_box').has(e.target).length === 0) {
            $lastModal.removeClass('show');
            
            if ($('.cm_modal.show').length === 0) {
                $('body').removeClass('hidden');
            }
        }
    }
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
	if (window.innerWidth > 1080) {
        const li = $(this);
        li.addClass('on');
        if (li.children('.h_nav_ul').length) {
            $('.h_bottom').addClass('hover');
        }
    }
});
$(document).on('mouseleave', '.h_bottom .h_nav > li', function () {
   if (window.innerWidth > 1080) {
        $(this).removeClass('on');
        $('.h_bottom').removeClass('hover');
    }
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

	if (search.indexOf('pid=schooling') !== -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(4).addClass('active');
	}

	if (search.indexOf('pid=special_duolingo') !== -1 || search.indexOf('pid=special_sogang') !== -1 || search.indexOf('pid=special_preparatory') !== -1 || search.indexOf('pid=special_malay') !== -1 || search.indexOf('pid=special_singapore') !== -1) {
		$('.header .h_inner .h_nav:not(.h_side) > li').eq(5).addClass('active');
	}
}
$(document).ready(setActiveMenu);
window.addEventListener('pageshow', setActiveMenu);

// header link active
$(document).ready(function () {
    const urlParams = new URLSearchParams(window.location.search);
    const currentPid = urlParams.get('pid');
    const currentBoTable = urlParams.get('bo_table');
    const currentPath = window.location.pathname;

    $('.h_nav .link, .h_nav .h_nav_ul .link').each(function () {
        const href = $(this).attr('href');
        if (!href) return;

        const url = new URL(href, window.location.origin);
        const linkPid = url.searchParams.get('pid');
        const linkBoTable = url.searchParams.get('bo_table');
        const linkPath = url.pathname;

        let isActive = false;

        if (linkPid && currentPid) {
            if (linkPid === currentPid) isActive = true;
        } else if (linkBoTable && currentBoTable) {
            if (linkBoTable === currentBoTable && linkPath === currentPath) isActive = true;
        } else if (!linkPid && !currentPid && !linkBoTable && !currentBoTable) {
            if (linkPath === currentPath) isActive = true;
        }

        if (isActive) {
            $(this).addClass('on');
            $(this).closest('.menu_li').children('.link').addClass('on');
        }
    });
});


// top button
$(document).ready(function () {
	$('.sticky_sidemenu .top_btn').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 400);
		return false;
	});
});


// 상단배너 팝업
const bannerSwiper = new Swiper(".banner_modal .banner_swiper", {
	observer: true,
	observeParents: true,
	effect : 'fade',
	fadeEffect: { 
	crossFade: true 
	},
    loop: true,
    speed: 500,
    pagination: {
        el: window.innerWidth >= 1080 ? '.banner_controls .pagination' : '.cs_modal_btnbox .pagination',
        type: 'custom',
        clickable: true,
        renderCustom: function (swiper, current, total) {
            return '<span class="swiper-pagination-current">' + current + '</span>' + 
                   '<span class="swiper-pagination-bar"></span>' + 
                   '<span class="swiper-pagination-total">' + total + '</span>';
        }
    },
    navigation: {
        nextEl: ".banner_controls .next_btn",
        prevEl: ".banner_controls .prev_btn",
    },
	autoplay: {
		delay: 3000,
		disableOnInteraction: false,
	},
    on: {
        resize: function () {
            const newEl = window.innerWidth >= 1080 ? '.banner_controls .pagination' : '.cs_modal_btnbox .pagination';
            if (this.params.pagination.el !== newEl) {
                this.params.pagination.el = newEl;
                this.pagination.destroy();
                this.pagination.init();
                this.pagination.render();
                this.pagination.update();
            }
        }
    }
});

$(document).ready(function () {
    const banner = $('#banner_modal');
    const cookieName = 'banner_hide_today';

    function setCookie(name, value, exp) {
        const date = new Date();
        date.setTime(date.getTime() + exp * 24 * 60 * 60 * 1000);
        document.cookie = name + '=' + value + ';expires=' + date.toUTCString() + ';path=/';
    }

    function getCookie(name) {
        const value = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
        return value ? value[2] : null;
    }

    if (getCookie(cookieName) !== 'Y') {
        banner.addClass('show');
    }

    $('.banner_modal .today_btn').on('click', function (e) {
        e.preventDefault();
        setCookie(cookieName, 'Y', 1);
        banner.removeClass('show');
    });

    $('.banner_modal .cm_modal_close').on('click', function () {
        banner.removeClass('show');
    });
});



/* 메인 */
function main_sch_popup() {
	$(".main-contents .mv_wrap .text_area .sch_popup").addClass("show");
}
const sampSwiper = new Swiper(".main-contents .sampSwiper", {
	effect: window.innerWidth <= 1080 ? 'slide' : 'cards',
	direction: 'horizontal',
	// grabCursor: true,
	loop:true,
	speed:500,
	cardsEffect: {
		perSlideRotate: 0, 
		perSlideOffset: 10,
		rotate: false,
        slideShadows: false,
	},
	spaceBetween: 20,
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
	breakpoints: {
		1080: {
			direction: 'vertical',
            effect: 'cards',
			spaceBetween: 0,
		},
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
    autoHeight: true,
    navigation: {
        nextEl: ".mentor_modal .next_btn",
        prevEl: ".mentor_modal .prev_btn",
    },
    on: {
        slideChangeTransitionEnd: function () {
            this.updateAutoHeight();
        },
    },
});
function mentor_modal(num) {
    $("body").addClass('hidden');
    $(".mentor_modal").addClass('show');

    const slides = document.querySelectorAll('.mentorpop_swiper .swiper-slide');
    let targetIndex = 0;
    slides.forEach((slide, index) => {
        if (slide.dataset.num == num) {
            targetIndex = index;
        }
    });

    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
            mentorpop_swiper.slideTo(targetIndex, 0);
            mentorpop_swiper.update();
            mentorpop_swiper.updateAutoHeight(0);
        });
    });
}
$('.mentor_modal .next_btn, .mentor_modal .prev_btn').on('mouseup', function(e){
	e.stopPropagation();
});
document.addEventListener('DOMContentLoaded', function () {
  const hash = window.location.hash;
  if (hash === '#class') {
    const radio = document.querySelector('input[name="cs_type"][value="수업"]');
    if (radio) {
      radio.checked = true;
      radio.dispatchEvent(new Event('change', { bubbles: true }));
    }
  } else if (hash === '#schooling') {
    const radio = document.querySelector('input[name="cs_type"][value="캠프/스쿨링"]');
    if (radio) {
      radio.checked = true;
      radio.dispatchEvent(new Event('change', { bubbles: true }));
    }
  }
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



/* 수속하기 */
// 미국+아시아 입학수속/컨설팅 상세 모달
function pro_modal(i) {
	$("body").addClass('hidden');
	$("#pro_modal"+i).addClass('show');
}
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
// 학교정보 검색
$(document).ready(function() {
    const searchInput = $('.page-univ .board .search_inputbox .input');
    const deleteBtn = $('.page-univ .board .search_inputbox .del_btn');

    searchInput.on('keydown', function(e) {
        if (e.key === 'Enter') {
            const kw = $(this).val().trim();
            if (kw) {
                location.href = '/page/?pid=univ_result&kw=' + encodeURIComponent(kw);
            }
        }
    });

    searchInput.on('keyup input', function() {
        const value = $(this).val().toLowerCase().trim();

        $('.univlist_swiper .item').each(function() {
            const titleText = $(this).find('.title').text().toLowerCase();
            const hashText = $(this).find('.hashtag').text().toLowerCase();

            if (titleText.indexOf(value) > -1 || hashText.indexOf(value) > -1) {
                $(this).removeClass('hide');
            } else {
                $(this).addClass('hide');
            }
        });

        $('.univlist_swiper').each(function() {
            if (this.swiper) {
                this.swiper.update();
                this.swiper.slideTo(0);
            }
        });
    });

    deleteBtn.on('click', function() {
        searchInput.val('').trigger('input');
    });
});
$(function() {
    function getUrlParam(name) {
        const search = location.search.substr(1);
        if (!search) return "";
        const params = search.split("&");
        for (let i = 0; i < params.length; i++) {
            const temp = params[i].split("=");
            if (temp[0] === name) return temp[1];
        }
        return "";
    }

    const fromSearch = getUrlParam('from');
    const tabIdNum = getUrlParam('tab');

    if (fromSearch === 'search' && tabIdNum) {
        const targetTabAnchor = $('#tab-' + tabIdNum);

        if (targetTabAnchor.length) {
            $('.tab_tit li a').removeClass('show');
            $('.counsel_list .panel > li').hide();

            targetTabAnchor.addClass('show').trigger('click');

            setTimeout(function() {
                const $swiperContainer = $('.tab_swiper');
                if ($swiperContainer.length && $swiperContainer[0].swiper) {
                    const tabIndex = targetTabAnchor.closest('.swiper-slide').index();
                    $swiperContainer[0].swiper.slideTo(tabIndex, 300);
                }
            }, 200);
        }
    }
});



/* 전자북/책자 */
// 전자북/책자 상세 모달
function ebook_modal(i) {
	$("body").addClass('hidden');
	$("#ebook_modal"+i).addClass('show');
}
function ebook2_modal(i) {
    $("body").addClass('hidden');
    $("#ebook2_modal").addClass('show');

    $(".ebook2_swiper").removeClass('on');
    $(".ebook2_swiper" + i).addClass('on');

    if (i == 1) {
        $("#ebook2_modal .tit").text("유학서비스 책자");
        $("#ebook2_modal .small").text("SIM, PSB, KAPAN, JCU 등");
        $("#ebook2_modal [name='frm_catalog']").val("유학서비스 책자");
    } else if (i == 2) {
        $("#ebook2_modal .tit").text("말레이시아 국제학교 책자");
        $("#ebook2_modal .small").text("40여개 학교정보, MAP");
        $("#ebook2_modal [name='frm_catalog']").val("말레이시아 국제학교 책자");
    } else if (i == 3) {
        $("#ebook2_modal .tit").text("싱가포르 대학 책자");
        $("#ebook2_modal .small").text("국립대, 사립대, 예술대 통합본");
        $("#ebook2_modal [name='frm_catalog']").val("싱가포르 대학 책자");
    } else if (i == 4) {
        $("#ebook2_modal .tit").text("말레이시아 대학 책자");
        $("#ebook2_modal .small").text("사립대, 국립대 통합본");
        $("#ebook2_modal [name='frm_catalog']").val("말레이시아 대학 책자");
    } else if (i == 5) {
        $("#ebook2_modal .tit").text("홍콩 대학 책자");
        $("#ebook2_modal .small").text("3대 공립대 통합본");
        $("#ebook2_modal [name='frm_catalog']").val("홍콩 대학 책자");
    } else if (i == 6) {
        $("#ebook2_modal .tit").text("미국 대학 책자");
        $("#ebook2_modal .small").text("주요 TOP 100대학");
        $("#ebook2_modal [name='frm_catalog']").val("미국 대학 책자");
    }				
}
function ebook3_modal(i) {
	$("body").addClass('hidden');
	$("#ebook3_modal"+i).addClass('show');
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
const ebook2_swiper = new Swiper('.ebook2_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	spaceBetween: '4',
	speed: 500,
	scrollbar: {
		el: ".ebook2_swiper .scrollbar",
		draggable: true,
	},
	breakpoints: {
		1080: {
			spaceBetween: '8',
		},
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
		delay: 1500,
		disableOnInteraction: false,
	},
})


// 상담안내
function cloneSlides(selector, multiply = 3) {
    const containers = document.querySelectorAll(selector);
    if (!containers.length) return;

    containers.forEach(container => {
        const wrapper = container.querySelector('.swiper-wrapper');
        const slides = Array.from(wrapper.children)
            .filter(slide => !slide.hasAttribute('data-clone'));

        const originalCount = slides.length;
        const cloneCount = originalCount * (multiply - 1);

        for (let i = 0; i < cloneCount; i++) {
            const clone = slides[i % originalCount].cloneNode(true);
            clone.setAttribute('data-clone', 'true');
            wrapper.appendChild(clone);
        }
    });
}
cloneSlides('.prdservice_swiper', 3);
$('.prdservice_swiper').each(function () {
    const swiper = $(this);
    const isVisible = swiper.closest('.tab_cont').hasClass('on');

    new Swiper(this, {
        observer: true,
        observeParents: true,
        centeredSlides: true,
        loop: isVisible,
        speed: 500,
        slidesPerView: 'auto',
        spaceBetween: 16,
        grabCursor: true,
        navigation: {
            nextEl: swiper.find('.next_btn')[0],
            prevEl: swiper.find('.prev_btn')[0],
        },
        breakpoints: {
            1080: {
                spaceBetween: 24,
            },
        }
    });
});
function setTitleWidth(scope) {
    const target = scope
        ? $(scope).find(".prdservice_swiper .item .infoitem .descbox")
        : $(".prdservice_swiper .item .infoitem .descbox");

    target.each(function () {
        const box = $(this);
        const titElements = box.find(".tit");
        if (!titElements.length) return;

        // 숨겨진 부모 임시 노출
        const hiddenParent = box.closest('.tab_cont:not(.on)');
        if (hiddenParent.length) {
            hiddenParent.css({ display: 'block', visibility: 'hidden' });
        }

        let maxWidth = 0;
        titElements.each(function () {
            const width = this.getBoundingClientRect().width;
            if (width > maxWidth) maxWidth = width;
        });

        // 원상복구
        if (hiddenParent.length) {
            hiddenParent.css({ display: '', visibility: '' });
        }

        const rootSize = parseFloat(getComputedStyle(document.documentElement).fontSize);
        box[0].style.setProperty("--title-width", maxWidth / rootSize + "rem");
    });
}
$(window).on("load", function () {
    requestAnimationFrame(() => {
        requestAnimationFrame(() => {
            setTitleWidth();
        });
    });
});
$('.page-procedureban .prd_service .btn_area .btn').on('click', function () {
    const index = $(this).parent().index();
    const wrap = $(this).closest('.tab_wrap');
    const contents = wrap.find('.tab_cont');
    const activeCont = contents.eq(index);

    setTimeout(function () {
        activeCont.find('.prdservice_swiper').each(function () {
            const swiper = this.swiper;
            if (!swiper) return;
            if (!swiper.params.loop) {
                swiper.params.loop = true;
                swiper.loopCreate();
            }
            swiper.update();
            swiper.slideToLoop(0, 0);
        });

        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                setTitleWidth(activeCont[0]);
            });
        });

    }, 20);
});


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
    const list = wrap.find('.univ_listbox.hide, .univ_listbox:not(.hide)');
    const btntxt = $(this).find(".change");
	
    const isHidden = list.eq(0).hasClass('hide');

    if (isHidden) {
        list.removeClass('hide');
        btntxt.text('숨기기');
    } else {
        list.addClass('hide');
        btntxt.text('더보기');
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
		delay: 2000,
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



/* 스쿨링 */
// 아시아 국가별 캠프 알아보기
const campflag_swiper = new Swiper('.campflag_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	speed: 500,
	spaceBetween: 6,
	breakpoints: {
		1080: {
			spaceBetween: 14,
		},
	},
})

// 국가별 캠프 리스트
$(document).ready(function () {
	$('.schlist_swiper').each(function () {
		new Swiper(this, {
			observer: true,
			observeParents: true,
			slidesPerView: 'auto',
			slidesPerGroup: 1,
			speed: 500,
			spaceBetween: 8,
			grabCursor: true,
			grid: {
				rows: 1,
				fill: 'row'
			},
			breakpoints: {
				1080: {
					slidesPerView: '3',
					slidesPerGroup: 3,
					spaceBetween: 16,
					grid: {
						rows: 2,
						fill: 'row'
					},
				},
			},
			navigation: {
				nextEl: $(this).closest('.schlist_wrap').find('.schlist_controls .next_btn')[0],
				prevEl: $(this).closest('.schlist_wrap').find('.schlist_controls .prev_btn')[0],
			},
		});
	});
});

// 숏클립 스쿨링/캠프
const shortclip_swiper = new Swiper('.shortclip_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	speed: 500,
	spaceBetween: 8,
	breakpoints: {
		1080: {
			spaceBetween: 12,
		},
	},
	navigation: {
		nextEl: ".sec5_controls .next_btn",
		prevEl: ".sec5_controls .prev_btn",
	},
})

// 수업시간 샘플
$(document).ready(function () {
	if ($(window).width() < 1081) {
		const schtbl_swiper = new Swiper('.schtbl_swiper', {
			observer: true,
			observeParents: true,
			speed: 500,
			spaceBetween: 16,	
			scrollbar: {
				el: ".schtbl_swiper .scrollbar",
				draggable: true,
			},
		})
	}
});

// 내용 더보기
$(document).ready(function () {
    $('.sch_sec6 .more').on('click', function () {
        const desc = $(this).siblings('.desc');

        desc.toggleClass('show');

        if (desc.hasClass('show')) {
            $(this).text('접기');
        } else {
            $(this).text('더보기');
        }
    });
});

// 스쿨링 숙소정보
const room_thumlist = new Swiper('.room_thumlist', {
	observer: true,
	observeParents: true,
	loop:true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 4,
	breakpoints: {
		1080: {
			spaceBetween: 5,
		},
	},
})
const room_piclist = new Swiper('.room_piclist', {
	observer: true,
	observeParents: true,
	loop:true,
	speed: 500,
	pagination: {
		el: ".room_piclist .pagination",
		type: "fraction",
	},
	navigation: {
		nextEl: ".room_piclist .next_btn",
		prevEl: ".room_piclist .prev_btn",
	},
	thumbs: {
		swiper : room_thumlist,
	}
})



/* 모바일 */
// header nav
$(document).on('click', '.h_bottom .h_nav > li > a.link', function (e) {
    if (window.innerWidth <= 1080) {
        const li = $(this).parent('li');
        
        if (li.children('.h_nav_ul').length > 0) {
            e.preventDefault();

            if (li.hasClass('on')) {
                li.removeClass('on');
            } else {
                $('.h_bottom .h_nav > li').removeClass('on');
                li.addClass('on');
            }
        }
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

		const isDetail = 
			search.includes('pid=class_detail') || 
			search.includes('pid=counsel_detail') || 
			search.includes('pid=procedure_detail') ||
			(search.includes('bo_table=admission') && search.includes('wr_id=')) ||
			search.includes('pid=schooling_detail');

		const isClassDetail = search.includes('pid=class_detail');
		const isProcedureDetail = search.includes('pid=procedure_detail');
		const isCounselDetail = search.includes('pid=counsel_detail');
		const isAdmissionDetail = search.includes('bo_table=admission') && search.includes('wr_id=');

		if (winWidth < 1080 && isDetail) {
			$('.header').addClass('detail');
			$('.page-detail .frame-15d .button').appendTo('.page-detail').addClass("fixed_btnbox");
			$('.counsel-btn, .eb-backtotop').addClass('hide');
			$('.navibar').addClass('hide');

			if (isClassDetail) { //수업듣기
				$('.page-detail .frame-16 .frame-1d').prependTo('.page-detail .frame-157');
				$('.page-detail .frame-1c').appendTo('.page-detail .frame-152');

				$('.header .h_inner .back_btn').on('click', function() {
					const pidValue = "class_intro"; 
					const targetUrl = `${window.location.origin}/page/?pid=${pidValue}`;
					window.location.href = targetUrl;
				});
			}

			if (isProcedureDetail) { //수속하기
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
					if ($this.is('a')) return;
					if ($this.hasClass('on')) {
						$this.removeClass('on');
					} else {
						$('.tab_cont').removeClass('on');
						$this.addClass('on');
					}
				});

				$('.header .h_inner .back_btn').on('click', function() {
					const pidValue = "procedure_intro"; 
					const targetUrl = `${window.location.origin}/page/?pid=${pidValue}`;
					window.location.href = targetUrl;
				});
			}

			if (isCounselDetail) { //상담받기				
				$('.page-detail .frame-16').prependTo('.page-detail .frame-14f');

				$('.header .h_inner .back_btn').on('click', function() {
					const pidValue = "counsel_intro"; 
					const targetUrl = `${window.location.origin}/page/?pid=${pidValue}`;
					window.location.href = targetUrl;
				});
			}

			if(isAdmissionDetail) { //설명회 상세<?php echo G5_BBS_URL ?>/board.php?bo_table=admission

				$('.header .h_inner .back_btn').on('click', function() {
					const targetUrl = `${window.location.origin}/bbs/board.php?bo_table=admission`;
					window.location.href = targetUrl;
				});

				$('.board-view.page-detail .board-view-subj').prependTo('.board-view.page-detail .frame-15d')

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


// 토스트 팝업
const showToast = (function() {
    let timer;

    return function(txt, emojiKey) {
        const toast = $('.toast_popup');
        
        if (toast.hasClass('show')) {
            return;
        }
        
        if (txt) toast.find('.txt').text(txt);
        
        if (emojiKey) {
            const baseUrl = `${themeUrl}/img/sub/`;
            toast.find('.emoji').attr('src', `${baseUrl}toast_${emojiKey}.png`);
        }
        
        toast.addClass('show');
        
        timer = setTimeout(() => {
            toast.removeClass('show');
        }, 2500);
    };
})();

// 컨텐츠 준비중
function nocontent_modal() {
	$("body").addClass('hidden');
	$("#nocontent_modal").addClass('show');
}