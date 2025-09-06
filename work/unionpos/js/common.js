

// header button 
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
				$siblings.removeClass('show');
				$siblings.find('ul').slideUp(400);

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


/* tab swiper */
$(document).ready(function () {
  const index = parseInt($('.swiper.tab_swiper').attr('data-index'), 10) || 0;

  const tab_swiper = new Swiper('.tab_swiper', {
    observer: true,
    observeParents: true,
    slidesPerView: 'auto',
    spaceBetween: 11,
    speed: 500,
    initialSlide: index,
    breakpoints: {
      1080: {
        spaceBetween: 16,
      },
    }
  });

});


/* modal */
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})
$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
	}
});


/* popup */
$(".popup .pop_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})
$(document).mouseup(function (e) {
	if ($(".popup .popup_box").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".popup").removeClass("show")
	}
});


// 수량 조절
function updateButtons(input) {
	const val = parseInt(input.val(), 10);
	const min = parseInt(input.attr("min"), 10) || 1;
	const max = parseInt(input.attr("max"), 10) || 99;

	const minusBtn = input.siblings(".minus_btn");
	const plusBtn = input.siblings(".plus_btn");

	if (val <= min) {
		minusBtn.addClass("disabled");
	} else {
		minusBtn.removeClass("disabled");
	}

	if (val >= max) {
		plusBtn.addClass("disabled");
	} else {
		plusBtn.removeClass("disabled");
	}
}
$(document).on("click", ".controlbox .plus_btn", function () {
	const input = $(this).siblings(".count_input");
	let val = parseInt(input.val(), 10);
	const max = parseInt(input.attr("max"), 10) || 99;

	if (isNaN(val)) val = 1;
	if (val < max) {
		input.val(val + 1);
		updateButtons(input);
	}
});
$(document).on("click", ".controlbox .minus_btn", function () {
	const input = $(this).siblings(".count_input");
	let val = parseInt(input.val(), 10);
	const min = parseInt(input.attr("min"), 10) || 1;

	if (isNaN(val)) val = 1;
	if (val > min) {
		input.val(val - 1);
		updateButtons(input);
	} else {
		if ($("#delete_popup").length) {
			$(".modal").removeClass("show")
			$("#delete_popup").addClass("show");
		}
	}
});
$(".controlbox .count_input").each(function () {
	updateButtons($(this));
});


// 언어선택
function lang_popup() {
	$(".lang_popup").addClass("show")
}


// 주문화면 제품 추가
$(document).on("click", ".order_wrap .prd_list .prd_box .addbox .add_btn", function () {
  const addBox = $(this).closest(".addbox");
  let cartNum = addBox.find(".cart_num");

  if (cartNum.length === 0) {
    cartNum = $('<span class="cart_num">1</span>');
    addBox.prepend(cartNum);
  } else {
    let num = parseInt(cartNum.text(), 10);
    cartNum.text(num + 1);
  }
  
  $(".fixed_bottom").addClass("show");
});


// 메뉴 더보기
$(document).on("click", ".menu_wrap .menu_info .more_btn", function () {
	const descBox = $(this).closest(".descbox");
	descBox.toggleClass("collapsed");
});


// 주문 팝업
function order_popup() {	
	$(".modal").removeClass("show")
	$("#order_popup").addClass("show")
}


// 메세지 팝업
function msg_popup() {
	$(".modal").removeClass("show")
	$("#msg_popup").addClass("show")
}


// 주문완료 팝업
function complete_popup() {
	$(".modal").removeClass("show")
	$("#complete_popup").addClass("show")
}
$(document).on("change", "#complete_popup #terms", function () {
  const checked = $(this).is(":checked");
  const confirmBtn = $("#complete_popup .modal_btn.typeB");

  if (checked) {
    confirmBtn.prop("disabled", false);
  } else {
    confirmBtn.prop("disabled", true);
  }
});


// 결제하기 더보기
function moreView(btn) {
  const hiddenItems = $(".payment_wrap .payment_list .item.hide");
  hiddenItems.removeClass("hide");
  $(btn).hide();
}


// 결제하기 결제수단
$(document).on("click", ".payment_wrap .method_box .radio_box .input_radio", function() {
  const item = $(this).closest(".item");
  item.addClass("on").siblings(".item").removeClass("on");
});
