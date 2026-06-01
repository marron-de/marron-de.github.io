// accordion function
(function () {
	const lnbUI = {
		speed: 400,

		click: function (selector, speed) {
			const _self = this;
			_self.speed = speed || 400;

			const targets = document.querySelectorAll(selector);

			targets.forEach(function (target) {
				if (!findChildren(target)) {
					target.classList.add('noDepth');
				}
			});

			function findChildren(obj) {
				return obj.querySelector(':scope > ul') !== null;
			}

			targets.forEach(function (target) {
				const accTit = target.querySelector('.acc_tit');
				if (!accTit) return;

				accTit.addEventListener('click', function (e) {
					e.stopPropagation();

					const depthTarget = accTit.nextElementSibling;
					const parentLi = accTit.parentElement;
					const siblings = Array.from(parentLi.parentElement.children).filter(el => el !== parentLi);

					parentLi.querySelectorAll('ul li').forEach(li => li.classList.remove('show'));

					siblings.forEach(function (sibling) {
						sibling.classList.remove('show');
						const siblingUl = sibling.querySelector('ul');
						if (siblingUl) slideUp(siblingUl, _self.speed);
					});

					if (!depthTarget) return;

					if (depthTarget.style.display === 'none' || depthTarget.style.display === '') {
						_self.activeOn(accTit);
						slideDown(depthTarget, _self.speed);
					} else {
						slideUp(depthTarget, _self.speed);
						_self.activeOff(accTit);
					}
				});
			});
		},

		activeOff: function (target) {
			target.parentElement.classList.remove('show');
		},

		activeOn: function (target) {
			target.parentElement.classList.add('show');
		},
	};

	function slideDown(el, duration) {
		el.style.display = 'block';
		const targetHeight = el.scrollHeight;
		el.style.overflow = 'hidden';
		el.style.height = '0';
		el.style.transition = `height ${duration}ms ease`;

		requestAnimationFrame(function () {
			el.style.height = targetHeight + 'px';
		});

		setTimeout(function () {
			el.style.height = '';
			el.style.overflow = '';
			el.style.transition = '';
		}, duration);
	}

	function slideUp(el, duration) {
		el.style.overflow = 'hidden';
		el.style.height = el.scrollHeight + 'px';
		el.style.transition = `height ${duration}ms ease`;

		requestAnimationFrame(function () {
			el.style.height = '0';
		});

		setTimeout(function () {
			el.style.display = 'none';
			el.style.height = '';
			el.style.overflow = '';
			el.style.transition = '';
		}, duration);
	}

	// navbox
	document.addEventListener('DOMContentLoaded', function () {
		lnbUI.click('.accordion li', 400);
	});
}());


// datepicker
$(document).ready(function () {
	if ($(".datepicker").length) {
		$.datepicker.setDefaults({
			closeText: "닫기",
			prevText: "이전달",
			nextText: "다음달",
			currentText: "오늘",
			monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
			monthNamesShort: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
			dayNames: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"],
			dayNamesShort: ["S", "M", "T", "W", "T", "F", "S"],
			dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
			weekHeader: "주",
			dateFormat: "yy.mm.dd",
			firstDay: 0,
			isRTL: false,
			showMonthAfterYear: true,
			// yearSuffix: "년",

			changeMonth: true,
			changeYear: true,
			onChangeMonthYear: function () {
				setTimeout(function () {
					$(".ui-datepicker-year option").each(function () {
						const year = $(this).val();
						$(this).text(year + "년");
					});
				}, 0);
			},
			beforeShow: function () {
				setTimeout(function () {
					$(".ui-datepicker-year option").each(function () {
						const year = $(this).val();
						$(this).text(year + "년");
					});
				}, 0);
			}
		});

		const today = new Date();
		const year = today.getFullYear();
		const month = String(today.getMonth() + 1).padStart(2, '0');
		const day = String(today.getDate()).padStart(2, '0');
		const formatted = `${year}.${month}.${day}`;
		$(".datepicker.today").attr("placeholder", formatted);

		$(".datepicker").datepicker({
			maxDate: 'today'
		});

		$(".date_item .btn").on("click", function () {
			$(this).siblings(".datepicker").datepicker("show");
		});
	}
});


// modal
$(".modal .modal_close").click(function () {
    $("body").removeClass("hidden");
    $(".modal").removeClass("show");
});
$(document).mouseup(function (e) {
    const $target = $(e.target);
	
    if ($target.closest(".ui-datepicker").length > 0) return;
    if ($target.closest(".ui-datepicker-header").length > 0) return;

    if ($(".modal .modal_box").has(e.target).length === 0) {
        $("body").removeClass("hidden");
        $(".modal").removeClass("show");
    }
});


// popup
document.addEventListener('DOMContentLoaded', function () {
	const popups = document.querySelectorAll('.popup');

	popups.forEach(function (popup) {
		const popClose = popup.querySelector('.pop_close');

		if (popClose) {
			popClose.addEventListener('click', function () {
				popup.classList.remove('show');
			});
		}
	});
});
document.addEventListener('mouseup', function (e) {
	const popups = document.querySelectorAll('.popup');

	popups.forEach(function (popup) {
		if (popup.classList.contains('show') && !popup.contains(e.target)) {
			popup.classList.remove('show');
		}
	});
});


// header select popup
function select_popup() {
	document.querySelector('.header .select_popup').classList.add('show');
}


// custom scrollbar (임시)
const wrap = $(".tbl_box.overflow");
const track = $(".custom_scrollbar");
const thumb = $(".custom_scrollbar .bar");

function checkAndUpdateScrollbar() {
	const scrollWidth = wrap[0].scrollWidth;
	const outerWidth = wrap.outerWidth();

	if (scrollWidth > outerWidth) {
		track.show();

		const remToPx = parseFloat(getComputedStyle(document.documentElement).fontSize);
		const trackWidth = track.width();
		const ratio = outerWidth / scrollWidth;
		const thumbWidth = trackWidth * ratio;

		track.css("left", wrap.scrollLeft() + remToPx);

		const maxScrollLeft = scrollWidth - outerWidth;
		const maxLeft = trackWidth - thumbWidth;

		const scrollRatio = wrap.scrollLeft() / maxScrollLeft;
		const thumbLeft = maxLeft * scrollRatio;

		thumb.css({
			width: thumbWidth,
			left: thumbLeft
		});
	} else {
		track.hide();
	}
}
wrap.on("scroll", checkAndUpdateScrollbar);
$(window).on("resize", checkAndUpdateScrollbar);
let isDragging = false;
let startX, startScrollLeft;

thumb.on("mousedown", function (e) {
	isDragging = true;
	startX = e.clientX;
	startScrollLeft = wrap.scrollLeft();

	thumb.css("cursor", "grabbing");
	$("body").css("user-select", "none");
	e.preventDefault();
});

$(document).on("mousemove", function (e) {
	if (!isDragging) return;

	const dx = e.clientX - startX;
	const trackWidth = track.width();
	const thumbWidth = thumb.outerWidth();
	const maxLeft = trackWidth - thumbWidth;

	const maxScrollLeft = wrap[0].scrollWidth - wrap.outerWidth();
	const scrollDelta = (dx / maxLeft) * maxScrollLeft;

	wrap.scrollLeft(startScrollLeft + scrollDelta);
});

$(document).on("mouseup", function () {
	if (isDragging) {
		isDragging = false;
		thumb.css("cursor", "grab");
		$("body").css("user-select", "");
	}
});

track.on("click", function (e) {
	if ($(e.target).hasClass("bar")) return;

	const trackWidth = track.width();
	const thumbWidth = thumb.outerWidth();
	const maxLeft = trackWidth - thumbWidth;

	const clickX = e.offsetX;
	let targetLeft = clickX - (thumbWidth / 2);
	targetLeft = Math.max(0, Math.min(targetLeft, maxLeft));

	const scrollRatio = targetLeft / maxLeft;
	const maxScrollLeft = wrap[0].scrollWidth - wrap.outerWidth();

	wrap.scrollLeft(maxScrollLeft * scrollRatio);
});

checkAndUpdateScrollbar();