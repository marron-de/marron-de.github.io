// modal
document.querySelectorAll(".modal .modal__close-button").forEach(function (btn) {
	btn.addEventListener("click", function () {
		document.body.classList.remove("hidden");
		document.querySelectorAll(".modal").forEach(function (modal) {
			modal.classList.remove("modal--show");
		});
	});
});
document.querySelectorAll(".modal .modal__confirm-button").forEach(function (btn) {
	btn.addEventListener("click", function () {
		document.body.classList.remove("hidden");
		document.querySelectorAll(".modal").forEach(function (modal) {
			modal.classList.remove("modal--show");
		});
	});
});
document.addEventListener("mouseup", function (e) {
	const modal = document.querySelector(".modal.modal--show");
	const modalBox = modal?.querySelector(".modal__box");

	if (modal && modalBox && !modalBox.contains(e.target)) {
		document.body.classList.remove("hidden");
		modal.classList.remove("modal--show");
	}
});


// popup
document.querySelectorAll(".popup .popup__close-button").forEach(function (btn) {
	btn.addEventListener("click", function () {
		document.body.classList.remove("hidden");
		document.querySelectorAll(".popup").forEach(function (modal) {
			modal.classList.remove("popup--show");
		});
	});
});
document.addEventListener("mouseup", function (e) {
	const modalBox = document.querySelector(".popup");
	if (modalBox && !modalBox.contains(e.target)) {
		document.body.classList.remove("hidden");
		document.querySelectorAll(".popup").forEach(function (modal) {
			modal.classList.remove("popup--show");
		});
	}
});


// table checkbox 
document.addEventListener("DOMContentLoaded", function () {
	document.querySelectorAll(".table").forEach(function (table) {
		const checkAll = table.querySelector(".check-box__input--all");
		const rows = table.querySelectorAll("tbody tr");

		if (!checkAll) return;

		checkAll.addEventListener("change", function () {
			const isChecked = checkAll.checked;
			rows.forEach(row => {
				const checkbox = row.querySelector(".check-box__input");
				if (checkbox) {
					checkbox.checked = isChecked;
					row.classList.toggle("table__tr--selected", isChecked);
				}
			});
		});

		rows.forEach(row => {
			const checkbox = row.querySelector(".check-box__input");
			if (!checkbox) return;

			checkbox.addEventListener("change", function () {
				row.classList.toggle("table__tr--selected", checkbox.checked);

				const allChecked = Array.from(rows).every(r => {
					const cb = r.querySelector(".check-box__input");
					return cb && cb.checked;
				});
				checkAll.checked = allChecked;
			});
		});
	});
});


// tabs 
document.addEventListener("DOMContentLoaded", function () {
	const tabNavbox = document.querySelector(".tabs__nav");
	if (!tabNavbox) return;

	const tabNavs = tabNavbox.querySelectorAll(".tabs__nav-item");
	const tabContbox = document.querySelector(".tabs__content");
	if (!tabContbox) return;

	const tabConts = tabContbox.querySelectorAll(".tabs__content-item");

	tabNavs.forEach((tabNav, idx) => {
		tabNav.addEventListener("click", function (e) {
			e.preventDefault();

			tabNavs.forEach(nav => nav.classList.remove("tabs__nav-item--active"));
			tabNav.classList.add("tabs__nav-item--active");

			tabConts.forEach(cont => cont.classList.remove("tabs__content-item--active"));
			if (tabConts[idx]) tabConts[idx].classList.add("tabs__content-item--active");
		});
	});
});


// header dropdown
document.addEventListener("DOMContentLoaded", function () {
	const inputBox = document.querySelector(".input-box--search");
	const input = inputBox.querySelector(".input-box__input");
	const dropdown = inputBox.querySelector(".input-box__dropdown");

	input.addEventListener("focus", () => {
		dropdown.classList.add("input-box__dropdown--show");
	});

	document.addEventListener("click", (e) => {
		if (!inputBox.contains(e.target)) {
			dropdown.classList.remove("input-box__dropdown--show");
		}
	});

	document.querySelectorAll(".dropdown__item").forEach(item => {
		item.addEventListener("click", () => {
			item.classList.toggle("dropdown__item--selected");
		});
	});

	document.querySelectorAll(".dropdown__toggle").forEach(toggleBtn => {
		toggleBtn.addEventListener("click", () => {
			const group = toggleBtn.closest(".dropdown__group");
			group.classList.toggle("dropdown__group--opened");
		});
	});
});


// quick panel
document.getElementById('quick-open').addEventListener('click', () => {
	document.querySelector(".quick-panel").classList.add("quick-panel--active");
});
document.getElementById('quick-close').addEventListener('click', () => {
	document.querySelector(".quick-panel").classList.remove("quick-panel--active");
});
document.addEventListener("mouseup", function (e) {
	const quickPanel = document.querySelector(".quick-panel");
	const quickManual = document.querySelector(".quick-manual");
	const myMenu = document.querySelector("#mymenu-open");
	const modals = document.querySelectorAll(".modal");

	const clickedInsideModal = Array.from(modals).some(modal => modal.contains(e.target));

	if (
		quickPanel &&
		!quickPanel.contains(e.target) &&
		!(quickManual && quickManual.contains(e.target)) &&
		!(myMenu && myMenu.contains(e.target)) &&
		!clickedInsideModal
	) {
		quickPanel.classList.remove("quick-panel--active");
	}
});



// screen controls
document.getElementById('zoom-in').addEventListener('click', () => {
	const view = map.getView();
	const zoom = view.getZoom();
	view.animate({
		zoom: zoom + 1,
		duration: 300,
	});
});
document.getElementById('zoom-out').addEventListener('click', () => {
	const view = map.getView();
	const zoom = view.getZoom();
	view.animate({
		zoom: zoom - 1,
		duration: 300,
	});
});


// time controls


// quick manual 
document.getElementById('btn-quick-manual').addEventListener('click', () => {
	document.querySelector(".quick-manual").classList.add("quick-manual--show");
});
document.getElementById('quick-manual-close').addEventListener('click', () => {
	document.querySelector(".quick-manual").classList.remove("quick-manual--show");
});


// menu box
document.getElementById('menu-open').addEventListener('click', () => {
	document.querySelector(".layout").classList.add("layout--collapsed");
});
document.getElementById('menu-close').addEventListener('click', () => {
	document.querySelector(".layout").classList.remove("layout--collapsed");
});


// menu box tabs
document.addEventListener("DOMContentLoaded", () => {
	const tabs = document.querySelectorAll(".menu-box__tab");

	tabs.forEach(tab => {
		tab.addEventListener("click", () => {
			const isSelected = tab.classList.contains("menu-box__tab--selected");

			document.querySelectorAll(".menu-box__tab--selected").forEach(selected => {
				selected.classList.remove("menu-box__tab--selected");
			});

			if (!isSelected) {
				tab.classList.add("menu-box__tab--selected");
			}
		});

		const items = tab.querySelectorAll(".menu-box__tab-item");
		items.forEach(item => {
			item.addEventListener("click", (e) => {
				e.stopPropagation();
				items.forEach(i => i.classList.remove("menu-box__tab-item--selected"));
				item.classList.add("menu-box__tab-item--selected");
			});
		});
	});
});


// mymenu modal
document.getElementById('mymenu-open').addEventListener('click', () => {
	document.querySelector("#mymenu-modal").classList.add("modal--show");
});
document.addEventListener("DOMContentLoaded", () => {
	const saveButton = document.getElementById('mymenu__save-button');
	if (saveButton) {
		saveButton.addEventListener('click', () => {
			document.querySelector("#mymenu-popup").classList.add("popup--show");
		});
	}
});


// symbol modal
document.getElementById('btn-symbol-info').addEventListener('click', () => {
	document.querySelector("#symbol-modal").classList.add("modal--show");
});


// dashboard modal
document.getElementById('btn-airport-dashboard').addEventListener('click', () => {
	document.querySelector("#dashboard-modal1").classList.add("modal--show");
});
document.querySelector('.dashboard__serach-toggle').addEventListener('click', () => {
	document.querySelector(".dashboard__top-box").classList.toggle("dashboard__top-box--open");
});
document.querySelector('.dashboard__serach-hide').addEventListener('click', () => {
	document.querySelector(".dashboard__top-box").classList.remove("dashboard__top-box--open");
});