import { univData1 } from '../univ_info/univ_info_data1.js'; // 말레이시아 대학
import { univData2 } from '../univ_info/univ_info_data2.js'; // 말레이시아 국제학교
import { univData3 } from '../univ_info/univ_info_data3.js'; // 송도 대학
import { univData4 } from '../univ_info/univ_info_data4.js'; // 베트남 국제학교
import { univData5 } from '../univ_info/univ_info_data5.js'; // 태국 국제학교
import { univData6 } from '../univ_info/univ_info_data6.js'; // 싱가포르 국립대
import { univData7 } from '../univ_info/univ_info_data7.js'; // 홍콩 국립대
import { univData8 } from '../univ_info/univ_info_data8.js'; // 싱가포르 예술대
import { univData9 } from '../univ_info/univ_info_data9.js'; // 싱가포르 사립대

const univData = Object.assign({},
    univData1, univData2, univData3,
    univData4, univData5, univData6,
    univData7, univData8, univData9,
);

function getUrlParam(name) {
    const params = new URLSearchParams(location.search);
    return params.get(name) || '';
}

function getImgSrc(key) {
    // PHP에서 생성한 imgMap 사용, 없으면 기본 이미지
    if (typeof imgMap !== 'undefined' && imgMap[key]) {
        return imgMap[key];
    }
    return EYOOM_THEME_URL + '/img/sub/univ_default.jpg';
}

function searchUnivData(kw) {
    const keyword = kw.toLowerCase();
    const results = [];

    Object.entries(univData).forEach(([key, d]) => {
        const targets = [
            d.nameEn || '',
            d.nameKo || '',
        ];
		
        if (typeof tagMap !== 'undefined' && tagMap[key]) {
            tagMap[key].forEach(tag => targets.push(tag));
        }

        if (targets.join(' ').toLowerCase().indexOf(keyword) > -1) {
            results.push({ key, data: d });
        }
    });

    return results;
}

function renderResults(results, kw) {
    const $list = $('.univ_list.grid_ver');
    const $tit = $('.ms.title_area .tit');

    $tit.text('"' + kw + '" 검색결과 (' + results.length + '개)');
    $list.empty();

    if (results.length === 0) {
        $list.append('<div class="no_result"><p>검색 결과가 없습니다.</p></div>');
        return;
    }

    results.forEach(({ key, data: d }) => {
		const img = getImgSrc(key);
		const flag = (typeof flagMap !== 'undefined' && flagMap[key])
			? `<div class="flagbox"><img src="${flagMap[key]}" alt="" class="flag"></div>`
			: '';
		const tags = (typeof tagMap !== 'undefined' && tagMap[key])
			? tagMap[key].map(t => `<p class="tag">${t}</p>`).join('')
			: '';

		$list.append(`
			<div class="item" onclick="univ_modal('${key}', this)">
				<div class="imgbox">
					<img src="${img}" alt="" class="img">
					${flag}
				</div>
				<div class="txtbox">
					<div class="hashtag">${tags}</div>
					<p class="title">
						${d.nameEn}<br>
						${d.nameKo}
					</p>
					<div class="bottom">
						<p class="txt">학교 자세히보기</p>
						<img src="${EYOOM_THEME_URL}/img/common/ic_more.svg" alt="" class="more">
					</div>
				</div>
			</div>
		`);
	});
}

$(document).ready(function () {
    const kw = getUrlParam('kw');
    if (kw) {
        $('.page-univ .board .search_inputbox .input').val(decodeURIComponent(kw));
        const results = searchUnivData(kw);
        renderResults(results, kw);
    }
	
    $('.page-univ .board .search_inputbox .input').on('keydown', function(e) {
        if (e.key === 'Enter') {
            const newKw = $(this).val().trim();
            if (newKw) {
                location.href = G5_URL + '/page/?pid=univ_result&kw=' + encodeURIComponent(newKw);
            }
        }
    });
});