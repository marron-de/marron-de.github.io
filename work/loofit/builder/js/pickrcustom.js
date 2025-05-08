document.addEventListener("DOMContentLoaded", function () {
    // pickr_btn 요소들을 모두 선택
    const pickrBtns = document.querySelectorAll('.pickr_btn');


    // 각 pickr_btn에 대해 Pickr 인스턴스 생성
    pickrBtns.forEach((btn, index) => {
        // data-color 값이 없으면 'none'을 기본값으로 설정
        const initialColor = btn.getAttribute('data-color') === 'none' ? '#fff' : btn.getAttribute('data-color');


        const pickrInstance = new Pickr({
            el: btn,
            theme: 'monolith',
            default: initialColor,
            swatches: [
                '#fff', '#d0021c', '#f4a623', '#f7e71b', '#8b572a', '#7dd321',
                '#417504', '#bd0fe0', '#8f12fe', '#4a8fe2', '#4fe3c2', '#b8e986', '#000',
                '#4a4a4a'
            ],
            components: {
                preview: false,
                opacity: false,
                hue: true,
                interaction: {
                    input: false,
                    swatches: true
                }
            }
        }); 
        
        // 여러 개의 .pcr-app 요소를 선택
        const pcrApps = document.querySelectorAll('.pcr-app');

        pcrApps.forEach((pcrApp, index) => {
            // 각 .pcr-app에 고유한 id를 부여
            pcrApp.id = `pcr-app-${index}`;
        });

        // pcr-input 요소 생성
        const pcrInput = document.createElement('div');
        pcrInput.classList.add('pcr-input');
        pcrInput.id = `pcr-input-${index}`;

        // 각 input 항목을 생성하여 pcrInput에 추가
        const items = [
            { id: `hex-input-${index}`, label: 'Hex', value: '000000' },
            { id: `r-input-${index}`, label: 'R', value: '0' },
            { id: `g-input-${index}`, label: 'G', value: '0' },
            { id: `b-input-${index}`, label: 'B', value: '0' }
        ];

        items.forEach(item => {
            const itemDiv = document.createElement('div');
            itemDiv.classList.add('item');

            const label = document.createElement('label');
            label.setAttribute('for', item.id);
            label.classList.add('tit');
            label.textContent = item.label;

            const input = document.createElement('input');
            input.type = 'text';
            input.id = item.id;
            input.value = item.value;

            itemDiv.appendChild(label);
            itemDiv.appendChild(input);
            pcrInput.appendChild(itemDiv);
        });

        // pcrSwatches를 찾고 pcr-input을 추가
        const pcrSwatches = document.querySelector(`#pcr-app-${index} .pcr-swatches`);
        if (pcrSwatches) {
            pcrSwatches.parentNode.insertBefore(pcrInput, pcrSwatches);
        }

        // 색상 변경 이벤트 처리
        pickrInstance.on('change', function (color) {
            const hex = color.toHEXA().toString().slice(1);
            const rgba = color.toRGBA();

            const r = Math.round(rgba[0]);
            const g = Math.round(rgba[1]);
            const b = Math.round(rgba[2]);

            const rgb = `rgb(${r}, ${g}, ${b})`;

            // 각 pickr 인스턴스에 대응하는 input 요소 업데이트
            document.getElementById(`hex-input-${index}`).value = hex;
            document.getElementById(`r-input-${index}`).value = r;
            document.getElementById(`g-input-${index}`).value = g;
            document.getElementById(`b-input-${index}`).value = b;

            // 해당 컬러칩 업데이트
            const colorchip = document.querySelector(`#colorchip-${index}`);
            const colortxt = document.querySelector(`#colortxt-${index}`);

            if (colorchip) {
                colorchip.style.background = `#${hex}`;
            }

            if (colortxt) {
                colortxt.textContent = `#${hex}`;
            }
        });

        // DOMContentLoaded 이후에 이벤트 리스너를 추가
        document.getElementById(`hex-input-${index}`).addEventListener('input', function () {
            const hex = `#${this.value}`;
            pickrInstance.setColor(hex);
            updateColorValues(hex, index);
        });

        document.getElementById(`r-input-${index}`).addEventListener('input', updateRgbColor);
        document.getElementById(`g-input-${index}`).addEventListener('input', updateRgbColor);
        document.getElementById(`b-input-${index}`).addEventListener('input', updateRgbColor);

        function updateRgbColor() {
            const r = document.getElementById(`r-input-${index}`).value;
            const g = document.getElementById(`g-input-${index}`).value;
            const b = document.getElementById(`b-input-${index}`).value;
            const validR = Math.max(0, Math.min(255, parseInt(r) || 0));
            const validG = Math.max(0, Math.min(255, parseInt(g) || 0));
            const validB = Math.max(0, Math.min(255, parseInt(b) || 0));

            const rgb = `rgb(${validR}, ${validG}, ${validB})`;

            pickrInstance.setColor(rgb);
            updateColorValues(rgb, index);
        }

        // 컬러 값을 업데이트하는 함수
        function updateColorValues(color, index) {
            const hex = color.startsWith('#') ? color.slice(1) : rgbToHex(color);
            const rgb = color.startsWith('rgb') ? color : hexToRgb(color);

            const colorchip = document.querySelector(`#colorchip-${index}`);
            const colortxt = document.querySelector(`#colortxt-${index}`);

            if (colorchip) {
                colorchip.style.backgroundColor = `#${hex}`;
            }

            if (colortxt) {
                colortxt.textContent = `#${hex}`;
            }

            document.getElementById(`hex-input-${index}`).value = hex;
        }

        // RGB 값을 HEX로 변환하는 함수
        function rgbToHex(rgb) {
            const result = rgb.match(/\d+/g);
            return `${((1 << 24) | (parseInt(result[0]) << 16) | (parseInt(result[1]) << 8) | parseInt(result[2])).toString(16).slice(1).toUpperCase()}`;
        }

        // HEX 값을 RGB로 변환하는 함수
        function hexToRgb(hex) {
            const bigint = parseInt(hex.slice(1), 16);
            return [(bigint >> 16) & 255, (bigint >> 8) & 255, bigint & 255];
        }
    });
});
