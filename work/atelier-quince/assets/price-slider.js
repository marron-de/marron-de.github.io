(function () {
  let debounceTimer = null;

  function initPriceSlider() {
    const sliderEl = document.getElementById('eSearchPriceSlider');
    if (!sliderEl) return;

    if (sliderEl.noUiSlider) {
      sliderEl.noUiSlider.destroy();
    }

    const rangeMin   = parseFloat(sliderEl.dataset.min) || 0;
    const rangeMax   = parseFloat(sliderEl.dataset.max);
    const currentMin = parseFloat(sliderEl.dataset.currentMin) || rangeMin;
    const currentMax = parseFloat(sliderEl.dataset.currentMax) || rangeMax;

    if (rangeMax === 0) return;

    const inputMin   = document.querySelector('input[name="filter.v.price.gte"]');
    const inputMax   = document.querySelector('input[name="filter.v.price.lte"]');
    const displayMin = document.getElementById('eMinSlidePriceView');
    const displayMax = document.getElementById('eMaxSlidePriceView');

    noUiSlider.create(sliderEl, {
      start: [currentMin, currentMax],
      connect: true,
      range: { min: rangeMin, max: rangeMax },
      step: 0.01, // 소수점 조절을 위해 스텝 조정
      format: {
        // 소수점 두 자리 고정 ($0.00 형식)
        to: value => parseFloat(value).toFixed(2),
        from: value => parseFloat(value),
      },
    });

    // 슬라이더를 움직일 때 실시간으로 $ 기호와 숫자를 결합
    sliderEl.noUiSlider.on('update', function (values) {
      const [min, max] = values;
      if (displayMin) displayMin.textContent = '$' + min;
      if (displayMax) displayMax.textContent = '$' + max;
    });

    sliderEl.noUiSlider.on('change', function (values) {
      const [min, max] = values;
      
      if (inputMin) {
        inputMin.value = min;
        inputMin.removeAttribute('disabled'); // 슬라이더 움직이면 전송 허용
      }
      if (inputMax) {
        inputMax.value = max;
        inputMax.removeAttribute('disabled'); // 슬라이더 움직이면 전송 허용
      }

      clearTimeout(debounceTimer);
      debounceTimer = setTimeout(() => {
        const form = inputMin?.closest('form') || sliderEl.closest('form');
        if (form) {
          // input 이벤트를 발생시켜 쇼피파이 기본 필터 스크립트 호출
          form.dispatchEvent(new Event('input', { bubbles: true }));
        }
      }, 300);
    });
  }

  // ... (MutationObserver 부분은 기존과 동일)
  function observeSlider() {
    const observer = new MutationObserver(function (mutations) {
      for (const mutation of mutations) {
        for (const node of mutation.addedNodes) {
          if (node.nodeType !== 1) continue;
          if (node.id === 'eSearchPriceSlider' || (node.querySelector && node.querySelector('#eSearchPriceSlider'))) {
            initPriceSlider();
            return;
          }
        }
      }
    });
    observer.observe(document.body, { childList: true, subtree: true });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
      initPriceSlider();
      observeSlider();
    });
  } else {
    initPriceSlider();
    observeSlider();
  }
})();