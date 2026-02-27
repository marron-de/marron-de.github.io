/* 기존코드 */

// 공통코드로 대체
// // menu tab
// $(document).ready(function () {
//   $('.tab-menu li').click(function () {
//     const category = $(this).data('category');

//     $('.tab-menu li').removeClass('active');
//     $(this).addClass('active');

//     $('.menu-page').hide();
//     $(`.menu-page[data-page="${category}"]`).fadeIn(150);
//   });
// });

// store map
// 샘플 매장 리스트 — 실제로 네이버 플레이스에서 검색해서 수집함
// var stores = [
//   {name: "TMT피자 서울 건대점", city: "서울", lat: 37.540, lng: 127.070},
//   {name: "TMT피자 부산 서면점", city: "부산", lat: 35.157, lng: 129.059},
//   {name: "TMT피자 대구 성서계대점", city: "대구", lat: 35.893, lng: 128.587},
//   {name: "TMT피자 포항 문덕점", city: "경북", lat: 36.021, lng: 129.383}
// ];

// 공통코드로 대체
// community tab
// $(document).ready(function () {
//   $('.community-menu li').click(function () {
//     const category = $(this).data('category');

//     $('.community-menu li').removeClass('active');
//     $(this).addClass('active');

//     $('.community-page').hide();
//     $(`.community-page[data-page="${category}"]`).fadeIn(150);
//   });
// });

// 창업문의 tab
document.addEventListener('DOMContentLoaded', () => {
  const tabs = document.querySelectorAll('.cost_tab');
  const bodies = document.querySelectorAll('.cost_body');
  const totals = document.querySelectorAll('.cost_total_row');

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const target = tab.dataset.tab;

      /* 탭 상태 변경 */
      tabs.forEach(t => {
        t.classList.remove('cost_active');
        t.setAttribute('aria-selected', 'false');
      });
      tab.classList.add('cost_active');
      tab.setAttribute('aria-selected', 'true');

      /* tbody 전환 */
      bodies.forEach(body => {
        body.classList.toggle(
          'cost_active',
          body.dataset.content === target
        );
      });

      /* 합계 전환 */
      totals.forEach(total => {
        total.style.display =
          total.dataset.total === target ? 'table-row' : 'none';
      });
    });
  });
});

// faq toggle
document.addEventListener('click', function (e) {
  const btn = e.target.closest('.faq_question');
  if (!btn) return;

  const answer = btn.nextElementSibling;
  const expanded = btn.getAttribute('aria-expanded') === 'true';

  // aria 상태 변경
  btn.setAttribute('aria-expanded', String(!expanded));

  // 답변 토글
  answer.style.display = expanded ? 'none' : 'block';
});

// 모달
document.addEventListener('DOMContentLoaded', () => {
    const openBtn = document.querySelector('.privacy_open');
    const modal = document.getElementById('privacy_modal');

    if (openBtn && modal) { // 요소가 존재할 때만 실행
        const closeBtns = modal.querySelectorAll('.modal_close, .modal_confirm');

        openBtn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.classList.add('show');
        });

        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                modal.classList.remove('show');
            });
        });
    }
});

// form
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.inquiry_form');

    if (form) { // 요소가 존재할 때만 실행
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const response = await fetch(form.action, {
                method: form.method,
                body: new FormData(form),
                headers: { 'Accept': 'application/json' }
            });

            if (response.ok) {
                alert('상담 신청이 정상적으로 접수되었습니다.');
                form.reset();
            } else {
                alert('전송 중 오류가 발생했습니다. 다시 시도해주세요.');
            }
        });
    }
});

// 퀵메뉴 - 창업문의
document.addEventListener('DOMContentLoaded', () => {
    const franchiseBtn = document.querySelector('.franchise_now');
    if (!franchiseBtn) return;

    franchiseBtn.addEventListener('click', (e) => {
        const targetSection = document.getElementById('franchise');

        // sub_04_franchise.html 내부일 때만 스크롤
        if (targetSection) {
            e.preventDefault();
            targetSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
        // 없으면 preventDefault 안 함 → href로 이동
    });
});

// 퀵메뉴 - TOP 버튼
document.addEventListener('DOMContentLoaded', () => {
    const topBtn = document.querySelector('.scroll_top');
    if (!topBtn) return;

    topBtn.addEventListener('click', (e) => {
        e.preventDefault();

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});



/* 251230 추가작업 */
// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").on("click", function () {
		$("body").addClass("hidden");
		$(".header").addClass("open");
		$(".nav_box").addClass("open");
	});
	$(".nav_box .menu_close").on("click", function () {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".navbox").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".navbox").removeClass("open");
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


// mobile menu
// tab function
$(document).ready(function () {
	$(".menu_cont .tmt_menu_box .tmt_list_box .menu-item").click(function () {
		let item = $(this);
		let otherbox = $(".menu_cont .tmt_menu_box .tmt_list_box .menu-item .menu_info");
		let targetbox = item.find(".menu_info");
		
		$("body").addClass("hidden")
		otherbox.removeClass("show");
		targetbox.addClass("show");
	});
});
$(document).mouseup(function (e) {
	if ($(".menu_cont .tmt_menu_box .tmt_list_box .menu-item .menu_info").has(e.target).length === 0) {		
		$("body").removeClass("hidden")
		$(".menu_cont .tmt_menu_box .tmt_list_box .menu-item .menu_info").removeClass("show")
	}
});



/* 260221 추가작업 */