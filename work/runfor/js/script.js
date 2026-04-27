// layout
function updateLayout() {
	const windowWidth = window.innerWidth;
	const maxWidth = 1280;
	const widthPercentage = 0.9;

	let calculatedWidth = windowWidth * widthPercentage;
	if (calculatedWidth > maxWidth) {
		calculatedWidth = maxWidth;
	}

	const marginLeft = (windowWidth - calculatedWidth) / 2;

	document.body.style.setProperty('--margin-left', marginLeft + 'px');
	document.body.style.setProperty('--margin-right', marginLeft + 'px');
}
window.addEventListener('resize', updateLayout);
document.addEventListener('DOMContentLoaded', updateLayout);


// AOS
AOS.init({
	duration: 800,
})
window.addEventListener('load', () => AOS.refresh());


// marquee
const marquees = Array.from(document.querySelectorAll(".marquee"));
class Marquee {
	constructor({
		el
	}) {
		this.el = el;
		this.marqueeAnimation = [{
				transform: "translateX(0)"
			},
			{
				transform: `translateX(calc(-100% - var(--gap,0)))`
			}
		];

		this.marqueeTiming = {
			duration: (window.innerWidth > 1024 ?
				this.el.dataset.durationPc :
				this.el.dataset.durationMob) * 10000,
			direction: this.el.dataset.reverse ? "reverse" : "normal",
			iterations: Infinity
		};
		this.animations = [];
		this.SLOWDOWN_RATE = 0.2;
		this.cloneMarqueeGroup();
		this.init();
	}

	init() {
		for (const m of this.marquee_groups) {
			this.animations.push(m.animate(this.marqueeAnimation, this.marqueeTiming));
		}
		this.initEvents();
	}

	slowDownAnimations() {
		this.animations.forEach(a => a.playbackRate = this.SLOWDOWN_RATE);
	}

	resumeAnimationSpeed() {
		this.animations.forEach(a => a.playbackRate = 1); // true → 1 버그 수정
	}

	initEvents() {
		this.el.addEventListener("mouseenter", () => this.slowDownAnimations());
		this.el.addEventListener("mouseleave", () => this.resumeAnimationSpeed());
	}

	cloneMarqueeGroup() {
		const clone = this.el.querySelector(".marquee_group").cloneNode(true);
		clone.classList.add("clone");
		this.el.appendChild(clone);
		this.marquee_groups = Array.from(this.el.querySelectorAll(".marquee_group"));
	}
}
for (const m of marquees) new Marquee({
	el: m
});


// header navbox button 
document.addEventListener('DOMContentLoaded', () => {
	const header = document.querySelector(".m_header");
	const navbox = document.querySelector(".m_navbox");
	const menuBtn = document.querySelector(".m_header .menu_btn");

	menuBtn.addEventListener("click", () => {
		header.classList.toggle("open");
		navbox.classList.toggle("open");
	});

	document.querySelectorAll('.navbox .link').forEach(link => {
		link.addEventListener('click', function (e) {
			const href = this.getAttribute('href');

			if (href.startsWith('#')) {
				e.preventDefault();

				header.classList.remove("open");
				navbox.classList.remove("open");

				const targetElement = document.querySelector(href);
				if (targetElement) {
					
					const offset = href === '#intro' ? 0 : 7 * parseFloat(getComputedStyle(document.documentElement).fontSize);
					const elementPosition = targetElement.getBoundingClientRect().top;
					const offsetPosition = elementPosition + window.pageYOffset - offset;

					window.scrollTo({
						top: offsetPosition,
						behavior: 'smooth'
					});
				}
			}
		});
	});

	document.addEventListener("mouseup", (e) => {
		if (!navbox.contains(e.target) && !menuBtn.contains(e.target)) {
			header.classList.remove("open");
			navbox.classList.remove("open");
		}
	});
});


// dday
document.addEventListener('DOMContentLoaded', function () {
	const ddayElement = document.querySelector('.dday .day');
	if (ddayElement) {
		const targetDate = new Date(ddayElement.getAttribute('data-date'));
		const today = new Date();

		today.setHours(0, 0, 0, 0);
		targetDate.setHours(0, 0, 0, 0);

		const diffTime = targetDate - today;
		const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

		if (diffDays > 0) {
			ddayElement.innerText = diffDays;
		} else if (diffDays === 0) {
			ddayElement.innerText = '0';
		} else {
			ddayElement.innerText = '0';
		}
	}
});


// course swiper
const course_swiper = new Swiper('.course_swiper', {
	observer: true,
	observeParents: true,
	slidesPerView: 'auto',
	centeredSlides: true,
	loop:true,
	speed: 500,
	spaceBetween: 5,
	breakpoints: {
		1080: {
			spaceBetween: 8,
		},
	},
})