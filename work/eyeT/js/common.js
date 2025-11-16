
// header navbox button 
$(document).ready(function () {
	$(".header .menu_open").on("click", function () {
		$("body").addClass("hidden");
		$(".header").addClass("open");
		$(".navbox").addClass("open");
	});
	$(".navbox .menu_close").on("click", function () {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".navbox").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".navbox").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".navbox").removeClass("open");
	}
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
				$(this).addClass('noDepth');
			});

			function findChildren(obj) {
				return obj.find('> ul').length > 0;
			}

			$target.on('click', '.acc_tit', function (e) {
				e.stopPropagation();
				let $this = $(this),
					$depthTarget = $this.next(),
					$siblings = $this.parent().siblings();

				$this.parent('li').find('ul li').removeClass('show');
				// $siblings.removeClass('show');
				// $siblings.find('ul').slideUp(400);

				if ($depthTarget.css('display') == 'none') {
					_self.activeOn($this);
					$depthTarget.slideDown(_self.speed);
				} else {
					$depthTarget.slideUp(_self.speed);
					_self.activeOff($this);
				}

			})

		},
		activeOff: function ($target) {
			$target.parent().removeClass('show');
		},
		activeOn: function ($target) {
			$target.parent().addClass('show');
		},

	};

	// navbox
	$(function () {
		lnbUI.click('.accordion li', 400)
	});

}(jQuery));


// tab function
$(document).ready(function () {
	$(".tab_wrap .tab_nav").click(function () {
		let clickedTab = $(this);
		let tabWrap = clickedTab.closest(".tab_wrap");
		let allTabs = tabWrap.find(".tab_nav");
		let allContents = tabWrap.find(".tab_cont");
		let idx = allTabs.index(clickedTab);

		allTabs.removeClass("on");
		clickedTab.addClass("on");
		allContents.removeClass("on");
		allContents.eq(idx).addClass("on");
	});
});


// tab swiper
$(document).ready(function () {
	const index = parseInt($('.swiper.tab_swiper').attr('data-index'), 10) || 0;

	const tab_swiper = new Swiper('.tab_swiper', {
		observer: true,
		observeParents: true,
		slidesPerView: 'auto',
		speed: 500,
		initialSlide: index,
	})
});


// layout
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1280;
    const widthPercentage = 0.9;

    let calculatedWidth = windowWidth * widthPercentage;
    if (calculatedWidth > maxWidth) {
        calculatedWidth = maxWidth;
    }

    const marginLeft = (windowWidth - calculatedWidth) / 2;

    $('body').css('--margin-left', marginLeft + 'px');
    $('body').css('--margin-right', marginLeft + 'px');
});
$(document).ready(function() {
    $(window).trigger('resize');
});


/* modal */
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})
$(document).mouseup(function (e) {
    if ($(e.target).closest(".modal_box").length === 0) {
        $("body").removeClass("hidden");
        $("body").removeClass("hidden2");
        $(".modal").removeClass("show");
    }
});


// product swiper
const useCase_swiper = new Swiper('.useCase_swiper', {
	observer: true,
	observeParents: true,
	loop:true,
	slidesPerView: 'auto',
	speed: 500,
	centeredSlides: true,
	initialSlide: 1,
})


// marketplace
$(document).ready(function() {
  const picBtn = $(".prd_pic_btn");
  const listBtn = $(".prd_list_btn");
  const picBox = $(".prdtype_pic");
  const listBox = $(".prdtype_list");

  picBtn.on("click", function() {
    picBtn.addClass("on");
    listBtn.removeClass("on");
    picBox.removeClass("hide");
    listBox.addClass("hide");
  });

  listBtn.on("click", function() {
    listBtn.addClass("on");
    picBtn.removeClass("on");
    listBox.removeClass("hide");
    picBox.addClass("hide");
  });
});


// search filter modal
$(".sch_filter_btn").click(function () {
	$("body").addClass("hidden2")
	$("#sch_filter_modal").addClass("show")
})
const multiRanges = document.querySelectorAll(".multi_range");
multiRanges.forEach(rangeBox => {
  const inputLeft = rangeBox.querySelector("input[type=range]:first-child");
  const inputRight = rangeBox.querySelector("input[type=range]:last-child");
  const thumbLeft = rangeBox.querySelector(".thumb_left");
  const thumbRight = rangeBox.querySelector(".thumb_right");
  const rangeFill = rangeBox.querySelector(".range");
  const popoverLeft = thumbLeft.querySelector(".popover");
  const popoverRight = thumbRight.querySelector(".popover");

  const rangeMin = 0;
  const rangeMax = 1000000;

  inputLeft.min = rangeMin;
  inputLeft.max = rangeMax;
  inputRight.min = rangeMin;
  inputRight.max = rangeMax;

  inputLeft.value = inputLeft.value || rangeMin;
  inputRight.value = inputRight.value || rangeMax;

  const setLeftValue = () => {
    const [min, max] = [parseInt(inputLeft.min), parseInt(inputLeft.max)];
    if (parseInt(inputRight.value) <= parseInt(inputLeft.value)) {
      inputLeft.value = parseInt(inputRight.value) - 1;
    }
    const percent = ((inputLeft.value - min) / (max - min)) * 100;
    thumbLeft.style.left = percent + "%";
    rangeFill.style.left = percent + "%";
  };

  const setRightValue = () => {
    const [min, max] = [parseInt(inputRight.min), parseInt(inputRight.max)];
    if (parseInt(inputRight.value) <= parseInt(inputLeft.value)) {
      inputRight.value = parseInt(inputLeft.value) + 1;
    }
    const percent = ((inputRight.value - min) / (max - min)) * 100;
    thumbRight.style.right = 100 - percent + "%";
    rangeFill.style.right = 100 - percent + "%";
  };

  const updatePopovers = () => {
    popoverLeft.textContent = Number(inputLeft.value).toLocaleString() + "원";
    popoverRight.textContent = Number(inputRight.value).toLocaleString() + "원";
  };

  // 초기값
  setLeftValue();
  setRightValue();
  updatePopovers();

  // 이벤트
  inputLeft.addEventListener("input", () => {
    setLeftValue();
    updatePopovers();
  });

  inputRight.addEventListener("input", () => {
    setRightValue();
    updatePopovers();
  });
});


// marketplace detail swiper
const d_thum_swiper = new Swiper('.d_thum_swiper', {
	observer: true,
	observeParents: true,
	// loop: true,
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 5,
})
const d_pic_swiper = new Swiper('.d_pic_swiper', {
	observer: true,
	observeParents: true,
	loop: true,
	speed: 500,
	navigation: {
		nextEl: '.d_pic_swiper .next_btn',
		prevEl: '.d_pic_swiper .prev_btn',
	},
	thumbs: {
		swiper: d_thum_swiper
	}
})


// curriculum more modal
$(".cur_list .item .more_btn").click(function () {
	$("body").addClass("hidden2")
	$("#curriculum_more_modal").addClass("show")
})


// curriculum apply modal
$(".cur_list .item .apply_btn").click(function () {
	$("body").addClass("hidden2")
	$("#curriculum_apply_modal").addClass("show")
})


// mypage menu button 
$(document).ready(function () {
	$(".mypage_wrap .breadcrumb .menu_btn").on("click", function () {
		$("body").addClass("hidden");
		$(".mypage_wrap .my_menu").addClass("open");
	});
	$(".navbox .menu_close").on("click", function () {
		$("body").removeClass("hidden");
		$(".mypage_wrap .my_menu").removeClass("open");
	});
});
$(document).mouseup(function (e) {
	if ($(".mypage_wrap .my_menu").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".mypage_wrap .my_menu").removeClass("open");
	}
});