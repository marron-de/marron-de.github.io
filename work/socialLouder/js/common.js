// layout
$(window).on("resize", function () {
	const windowWidth = $(window).width();
	const maxWidth = 1520;
	const widthPercentage = 0.9;

	let calculatedWidth = windowWidth * widthPercentage;
	if (calculatedWidth > maxWidth) {
		calculatedWidth = maxWidth;
	}

	const marginLeft = (windowWidth - calculatedWidth) / 2;

	$("body").css("--margin-left", marginLeft + "px");
	$("body").css("--margin-right", marginLeft + "px");
});
$(document).ready(function () {
	$(window).trigger("resize");
});


// accordion function
(function ($) {
	const lnbUI = {
		click: function (target, speed) {
			let _self = this,
				$target = $(target);
			_self.speed = speed || 400;

			$target.each(function () {
				if (findChildren($(this))) {
					return;
				}
				$(this).addClass("noDepth");
			});

			function findChildren(obj) {
				return obj.find("> ul").length > 0;
			}

			$target.on("click", ".acc_tit", function (e) {
				e.stopPropagation();
				let $this = $(this),
					$depthTarget = $this.next(),
					$siblings = $this.parent().siblings();

				$this.parent("li").find("ul li").removeClass("show");
				$siblings.removeClass("show");
				$siblings.find("ul").slideUp(400);

				if ($depthTarget.css("display") == "none") {
					_self.activeOn($this);
					$depthTarget.slideDown(_self.speed);
				} else {
					$depthTarget.slideUp(_self.speed);
					_self.activeOff($this);
				}
			});
		},
		activeOff: function ($target) {
			$target.parent().removeClass("show");
		},
		activeOn: function ($target) {
			$target.parent().addClass("show");
		},
	};

	// navbox
	$(function () {
		lnbUI.click(".accordion li", 400);
	});
})(jQuery);


// tab swiper
$(document).ready(function () {
	const index = parseInt($(".swiper.tab_swiper").attr("data-index"), 10) || 0;

	const tab_swiper = new Swiper(".tab_swiper", {
		observer: true,
		observeParents: true,
		slidesPerView: "auto",
		speed: 500,
		initialSlide: index,
	});
});


// modal
$(".modal .modal_close").click(function () {
    const modal = $(this).closest('.modal');
    if (modal.hasClass('only')) {
        modal.removeClass('show');
        if ($('.modal.show').length === 0) {
            $("body").removeClass("hidden");
        }
    } else {
        $("body").removeClass("hidden");
        $(".modal").removeClass("show");
    }
});
$(document).mouseup(function (e) {
    const targetOnlyModal = $(e.target).closest('.modal.only');
    if ($('.modal.only .modal_box').has(e.target).length === 0 && targetOnlyModal.length) {
        targetOnlyModal.removeClass('show');
        if ($('.modal.show').length === 0) {
            $("body").removeClass("hidden");
        }
    }

    const targetModal = $(e.target).closest('.modal:not(.only)');
    if ($('.modal:not(.only) .modal_box').has(e.target).length === 0 && targetModal.length) {
        $("body").removeClass("hidden");
        $(".modal:not(.only)").removeClass("show");
    }
});


// popup
$(document).ready(function () {
	$(".popup .pop_close").click(function () {
		$("body").removeClass("pop_open");
		$(this).closest(".popup").removeClass("show");
	});
});
$(document).on("mouseup", function (e) {
	const popup = $(".popup");
	const mymenuBtn = $(".header .mymenu_btn");
	if (
		!popup.is(e.target) &&
		popup.has(e.target).length === 0 &&
		!mymenuBtn.is(e.target) &&
		mymenuBtn.has(e.target).length === 0
	) {
		$("body").removeClass("pop_open");
		popup.removeClass("show");
		mymenuBtn.removeClass("on");
	}
});


// top_banner
$(".top_banner .close_btn").click(function () {
	$(".top_banner").addClass("hide");
});


// mymenu popup
$(document).on("click", ".header .mymenu_btn", function (e) {
	e.stopPropagation();

	$("body").toggleClass("pop_open");
	$("#mymenu_popup").toggleClass("show");
	$(".header .h_side .mymenu_btn").toggleClass("on");
});


// top button
$(document).ready(function () {
	$(".footer .top_btn").click(function () {
		$("html, body").animate({
				scrollTop: 0,
			},
			400,
		);
		return false;
	});
});


// product swiper
$('.prd_listbox').each(function() {
  const el = this;
  const swiperEl = $(el).find('.prd_swiper:not(.insta_swiper)')[0];
  const nextBtn = $(el).find('.next_btn')[0];
  const prevBtn = $(el).find('.prev_btn')[0];
  const swiperEl2 = $(el).find('.prd_swiper.insta_swiper')[0];

  const prd_swiper = new Swiper(swiperEl, {
    observer: true,
    observeParents: true,
    speed: 500,
	slidesPerView: 'auto',
    spaceBetween: 14,
    navigation: {
      nextEl: nextBtn,
      prevEl: prevBtn,
    },
  });

  const prd_swiper2 = new Swiper(swiperEl2, {
    observer: true,
    observeParents: true,
    speed: 500,
	slidesPerView: 'auto',
    spaceBetween: 20,
    navigation: {
      nextEl: nextBtn,
      prevEl: prevBtn,
    },
  });
});
$(".prd_listbox .item .imgbox .wish_btn").on("click", function (e) {
	e.preventDefault(); 
	const btn = $(this);
	btn.toggleClass("on");
});


// product filter
$('.check_box input[type="checkbox"]').on('change', function () {
	const item = $(this).closest('.item');
	if ($(this).is(':checked')) {
		item.addClass('on');
	} else {
		item.removeClass('on');
	}
});



/* Main */
// main hero
const main_hero_thumbox = new Swiper(".main_hero_thumbox", {
	observer: true,
	observeParents: true,
	direction: 'vertical',
	speed: 500,
	slidesPerView: "auto",
	spaceBetween: 10,
});
const main_hero_swiper = new Swiper(".main_hero_swiper", {
	observer: true,
	observeParents: true,
	speed: 500,
	loop: true,
	effect: 'fade',
	fadeEffect: { crossFade: true },
	thumbs: {
		swiper: main_hero_thumbox,
	},
	navigation: {
		nextEl: ".main_hero_swiper .next_btn",
		prevEl: ".main_hero_swiper .prev_btn",
	},
	pagination: {
		el: ".main_hero_swiper .pagination",
		type: "fraction",
	},
	autoplay: {
		delay: 4000,
		isableOnInteraction: false,
	},
});
$(".main_hero_swiper .play_btn").on("click", function () {
	const btn = $(this);

	if (btn.hasClass("stop")) {
		main_hero_swiper.autoplay.start()
		btn.removeClass("stop");
	} else {
		main_hero_swiper.autoplay.stop()
		btn.addClass("stop");
	}
});

// main brand
const main_brnad_swiper = new Swiper(".main_brnad_swiper", {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: "auto",
	spaceBetween: 20,
});



/* Campaign */
// campaign detailview modal
function campaign_detailview(i) {
	$("body").addClass("hidden");
	$("#campaign_detailview"+i).addClass("show");
}

// campaign picture swiper
const pic_swiper = new Swiper(".campaign_detailview_modal .pic_swiper", {
	observer: true,
	observeParents: true,
	speed: 500,
	slidesPerView: "auto",
});

// campaign tab navbox
$(document).on('click', '.campaign_detailview_modal .tab_navbox .tab_nav .link', function (e) {
	e.preventDefault();

	const link = $(this);
	const target = link.data('link');

	const modal = link.closest('.modal');
	const modalBox = modal.find('.modal_box');
	const tabs = modal.find('.tab_navbox .tab_nav');
	const conts = modal.find('.tab_contbox .detail_cont');
	const targetCont = modal.find('.' + target);

	tabs.removeClass('on');
	link.closest('.tab_nav').addClass('on');

	conts.removeClass('on');
	targetCont.addClass('on');

	if (targetCont.length) {
		modalBox.animate({
			scrollTop: targetCont.position().top + modalBox.scrollTop()
		}, 400);
	}
});

// campaign detailview wish button
$(".campaign_detailview_modal .wish_btn").on("click", function (e) {
	e.preventDefault(); 
	const btn = $(this);
	btn.toggleClass("on");
});

// campaign write modal
function campaign_write() {
	$(".campaign_detailview_modal").removeClass("show");
	$(".campaign_frm_modal").removeClass("show");
	$(".campaign_frm_modal.write").addClass("show");
}

// campaign complete modal
function campaign_complete() {
	$(".campaign_detailview_modal").removeClass("show");
	$(".campaign_frm_modal").removeClass("show");
	$(".campaign_frm_modal.complete").addClass("show");
}


/* Research */
// research topswiper
const research_topswiper = new Swiper(".research_topswiper", {
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 10,
	allowTouchMove: false,
	navigation: {
		nextEl: ".research_topbanner .next_btn",
		prevEl: ".research_topbanner .prev_btn",
	},
	pagination: {
		el: ".research_topbanner .pagination",
		type: "fraction",
	},
	autoplay: {
		delay: 4000,
		isableOnInteraction: false,
	},
});
$(".research_topbanner .play_btn").on("click", function () {
	const btn = $(this);

	if (btn.hasClass("stop")) {
		research_topswiper.autoplay.start()
		btn.removeClass("stop");
	} else {
		research_topswiper.autoplay.stop()
		btn.addClass("stop");
	}
});

// research detailview modal
function research_detailview(i) {
	$(".research_detailview_modal").removeClass("show");
	$("body").addClass("hidden");
	$("#research_detailview"+i).addClass("show");
}

// research result modal
function research_result() {
	$(".research_detailview_modal").removeClass("show");
	$("body").addClass("hidden");
	$(".research_detailview_modal.result").addClass("show");
}

// research alert modal
function research_alert() {
	$(".research_min_modal").removeClass("show");
	$(".research_min_modal.alert").addClass("show");
}

// research complete modal
function research_complete() {
	$(".research_min_modal").removeClass("show");
	$(".research_min_modal.complete").addClass("show");
}


/* Event */
// event detailview modal
function event_detailview(i) {
	$("body").addClass("hidden");
	$("#event_detailview"+i).addClass("show");
}

// event detailview wish button
$(".event_detailview_modal .wish_btn").on("click", function (e) {
	e.preventDefault(); 
	const btn = $(this);
	btn.toggleClass("on");
});

