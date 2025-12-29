// menu tab
$(document).ready(function () {
  $('.tab-menu li').click(function () {
    const category = $(this).data('category');

    $('.tab-menu li').removeClass('active');
    $(this).addClass('active');

    $('.menu-page').hide();
    $(`.menu-page[data-page="${category}"]`).fadeIn(150);
  });
});

// store map
// 샘플 매장 리스트 — 실제로 네이버 플레이스에서 검색해서 수집함
var stores = [
  {name: "TMT피자 서울 건대점", city: "서울", lat: 37.540, lng: 127.070},
  {name: "TMT피자 부산 서면점", city: "부산", lat: 35.157, lng: 129.059},
  {name: "TMT피자 대구 성서계대점", city: "대구", lat: 35.893, lng: 128.587},
  {name: "TMT피자 포항 문덕점", city: "경북", lat: 36.021, lng: 129.383}
];

// community tab
$(document).ready(function () {
  $('.community-menu li').click(function () {
    const category = $(this).data('category');

    $('.community-menu li').removeClass('active');
    $(this).addClass('active');

    $('.community-page').hide();
    $(`.community-page[data-page="${category}"]`).fadeIn(150);
  });
});

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

// toggle
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
    const closeBtns = modal.querySelectorAll('.modal_close, .modal_confirm');

    // 모달 열기
    openBtn.addEventListener('click', (e) => {
        e.preventDefault(); // anchor 기본 동작 막기
        modal.removeAttribute('hidden');
    });

    // 모달 닫기
    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            modal.setAttribute('hidden', '');
        });
    });
});

// form
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.inquiry_form');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const response = await fetch(form.action, {
            method: form.method,
            body: new FormData(form),
            headers: {
                'Accept': 'application/json'
            }
        });

        if (response.ok) {
            alert('상담 신청이 정상적으로 접수되었습니다.');
            form.reset();
        } else {
            alert('전송 중 오류가 발생했습니다. 다시 시도해주세요.');
        }
    });
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