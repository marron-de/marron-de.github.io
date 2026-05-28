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

let currentKey = '';
let currentItem = null;

function renderModal(key) {
	const d = univData[key];
	if (!d) return;
	currentKey = key;

	$("#univ_modal .titbox .title .tit").text(d.nameEn);
	$("#univ_modal .titbox .title .small").text(d.nameKo);
	$("#univ_modal .titbox .desc").text(d.desc);
	const infobox = $("#univ_modal .infobox");
	infobox.empty();
	let i = 1;
	while (d['item_tit_' + i]) {
		infobox.append(`
			<div class="item item${i}">
				<p class="tit">${d['item_tit_' + i]}</p>
				<p class="desc">${d['item_tit_desc_' + i]}</p>
			</div>
		`);
		i++;
	}
	if (d.note) {
		$("#univ_modal .note_box").show();
		$("#univ_modal .note_box .note_txt").text(d.note);
	} else {
		$("#univ_modal .note_box").hide();
	}

	$(".btn.prev_btn").prop('disabled', !$(currentItem).prev('.item').length);
	$(".btn.next_btn").prop('disabled', !$(currentItem).next('.item').length);
}

function univ_modal(key, el) {
	currentItem = el;
	renderModal(key);
	$("body").addClass('hidden');
	$("#univ_modal").addClass('show');
}

$(document).ready(function () {
	$(".btn.prev_btn").on('click', function () {
		const prev = $(currentItem).prev('.item');
		if (prev.length) {
			currentItem = prev[0];
			const key = prev.attr('onclick').match(/'([^']+)'/)[1];
			renderModal(key);
		}
	});

	$(".btn.next_btn").on('click', function () {
		const next = $(currentItem).next('.item');
		if (next.length) {
			currentItem = next[0];
			const key = next.attr('onclick').match(/'([^']+)'/)[1];
			renderModal(key);
		}
	});
});

window.univ_modal = univ_modal;