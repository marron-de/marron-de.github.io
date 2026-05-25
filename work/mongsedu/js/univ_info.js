import { univData1 } from '../univ_info/univ_info_data1.js';
import { univData2 } from '../univ_info/univ_info_data2.js';
import { univData3 } from '../univ_info/univ_info_data3.js';
import { univData4 } from '../univ_info/univ_info_data4.js';
import { univData5 } from '../univ_info/univ_info_data5.js';
import { univData6 } from '../univ_info/univ_info_data6.js';
import { univData7 } from '../univ_info/univ_info_data7.js';
import { univData8 } from '../univ_info/univ_info_data8.js';
import { univData9 } from '../univ_info/univ_info_data9.js';

const univData = Object.assign({},
	univData1,
	univData2,
	univData3,
	univData4,
	univData5,
	univData6,
	univData7,
	univData8,
	univData9,
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