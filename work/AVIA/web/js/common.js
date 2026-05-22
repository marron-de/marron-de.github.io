
// header select popup
function select_popup() {
	document.querySelector('.header .select_popup').classList.add('show');
}


// navbox button
document.addEventListener('DOMContentLoaded', function () {
	const menuOpen = document.querySelector('.header .menu_open');
	const menuClose = document.querySelector('.navbox .menu_close');
	const header = document.querySelector('.header');
	const navbox = document.querySelector('.navbox');

	menuOpen.addEventListener('click', function () {
		document.body.classList.add('hidden');
		header.classList.add('open');
		navbox.classList.add('open');
	});

	menuClose.addEventListener('click', function () {
		document.body.classList.remove('hidden');
		header.classList.remove('open');
		navbox.classList.remove('open');
	});
});
document.addEventListener('mouseup', function (e) {
	const navbox = document.querySelector('.navbox');
	if (navbox && !navbox.contains(e.target)) {
		document.body.classList.remove('hidden');
		document.querySelector('.header').classList.remove('open');
		navbox.classList.remove('open');
	}
});


// navbox accordion function
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


// product detail category popup
document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.category_box .item');

    items.forEach(function (item) {
        const btn = item.querySelector('.cate_btn');
        const popup = item.querySelector('.popup');

        if (!btn || !popup) return;

        btn.addEventListener('click', function (e) {
            e.stopPropagation();

            const isShow = popup.classList.contains('show');
			
            document.querySelectorAll('.category_box .popup').forEach(function (p) {
                p.classList.remove('show');
            });
			
            if (!isShow) {
                popup.classList.add('show');
            }
        });
    });
});