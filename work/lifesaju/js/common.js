// 아코디언
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


// 레이아웃 여백
$(window).on('resize', function () {
	const windowWidth = $(window).width();
	const maxWidth = 1120;
	const widthPercentage = 0.9;

	let calculatedWidth = windowWidth * widthPercentage;
	if (calculatedWidth > maxWidth) {
		calculatedWidth = maxWidth;
	}

	const marginLeft = (windowWidth - calculatedWidth) / 2;

	$('body').css('--margin-left', marginLeft + 'px');
	$('body').css('--margin-right', marginLeft + 'px');
});

$(document).ready(function () {
	$(window).trigger('resize');
});


// 모달 기본
$(".modal .modal_close").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})


// 상담하기 팝업
function counselPopup(event) {
	event.preventDefault(); // 기본 동작(링크 이동) 방지
	event.stopPropagation(); // 부모 요소(<a>)로 이벤트 전파 방지

	$("body").addClass("hidden");
	$("#counselPopup").addClass("show");
}

function counselPopupClose() {
	$("body").removeClass("hidden")
	$("#counselPopup").removeClass("show")
}


// 목록 상단 배너
const list_banner = new Swiper(".list_banner", {
	loop: true,
	speed: 500,		
	observer: true,  
	observeParents: true,  
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	navigation: {
		nextEl: '.list_banner .next_btn',
		prevEl: '.list_banner .prev_btn',
	},
});


// 목록 더보기
$(document).ready(function () {
  $(".back_btn").on("click", function () {
    history.back();
  });
});


// $(document).ready(function () {
//     $(".list_wrap .list_contbox > .listbox").each(function () {
//         let listbox = $(this);
//         let items = listbox.find(".item");
//         let pcCount = listbox.attr("date-pc");
//         let mobCount = listbox.attr("date-mob");
//         let isMobile = window.innerWidth <= 1080; 
//         let itemsToShow = isMobile ? mobCount : pcCount;
//         let itemsTotal = items.length;
//         let itemsVisible = parseInt(itemsToShow);
//         let moreType = isMobile ? "scroll" : listbox.attr("data-pcmore"); // PC는 data-pcmore, 모바일은 강제 scroll

//         items.hide().slice(0, itemsVisible).show();

//         let moreButton = listbox.siblings(".more_box").find(".more");

//         function showMoreItems() {
//             items.slice(itemsVisible, itemsVisible + parseInt(itemsToShow)).fadeIn();
//             itemsVisible += parseInt(itemsToShow);

//             if (itemsVisible >= itemsTotal) {
//                 moreButton.fadeOut();
//                 $(window).off("scroll"); // 더 이상 아이템이 없으면 스크롤 이벤트 제거
//             }
//         }

//         // PC에서 data-pcmore 값이 "click"이면 클릭 이벤트 사용
//         if (!isMobile && moreType === "click") {
//             moreButton.click(function () {
//                 showMoreItems();
//             });
//         }

//         // 모바일이거나 data-pcmore 값이 "scroll"이면 스크롤 이벤트 적용
//         if (isMobile || moreType === "scroll") {
//             $(window).on("scroll", function () {
//                 let scrollTop = $(window).scrollTop();
//                 let windowHeight = $(window).height();
//                 let documentHeight = $(document).height();
				
//                 if (scrollTop + windowHeight >= documentHeight - (window.innerHeight * 0.1)) { // 현재 뷰포트(화면)에서 10% 남았을 때
// 					showMoreItems();
// 				}
//             });
//         }
//     });
// });


// 상세 리뷰 슬라이드
const review_slider = new Swiper(".review_slider", {
	speed: 500,
	slidesPerView: 'auto',
	spaceBetween: 16,
	// grabCursor: true,
	freeMode: true,		
	observer: true,  
	observeParents: true,  
	breakpoints: {
		1080: {
			spaceBetween: 20,
		},
	},
});

$(document).ready(function () {
	$(".review_slider .review_item .review_more").on("click", function () {
		$(this).parent().toggleClass("open")
	});
});


// 상세 후기작성 임시 추가
function hideNotice() {
	$(".detail_wrap #Review .login_popup").addClass("hide");
	$(".detail_wrap #Review .write_area .write_box .box").addClass("show");
}


// 로그인 완료 팝업
function loginPopup() {
	$("body").addClass("hidden")
	$("#loginPopup").addClass("show");
}


// 회원가입 완료 팝업
function joinPopup() {
	$("body").addClass("hidden")
	$("#joinPopup").addClass("show");
}


// 결제 방법 선택택
$(document).ready(function () {
	$(".coinRecharge_wrap .payment_box .methodbox .item .radio_btn").on("click", function () {
		$(".coinRecharge_wrap .payment_box .methodbox .item").removeClass("active")
		$(this).parent().addClass("active")
	});
});

// payment radio button
$(document).ready(function () {
  $(".coinRecharge_wrap .payment_box .methodbox .item .radio_btn").on(
    "click",
    function () {
      $(".coinRecharge_wrap .payment_box .methodbox .item ").removeClass(
        "active"
      );
      $(this).parent().addClass("active");
    }
  );
});

// 상담가격 계산하기 팝업
function calculatePopup() {
	$("body").addClass("hidden")
	$("#calculatePopup").addClass("show");
}

function calculatePopupClose() {
	$("body").removeClass("hidden")
	$("#calculatePopup").removeClass("show")
}


// 결제완료 팝업
function payPopup() {
	$("body").addClass("hidden")
	$("#payPopup").addClass("show");
}


// 팝업 닫기(공통)
$(document).mouseup(function (e) {
	if (
		$(".modal .modal_box").has(e.target).length === 0 && 
		$("#counselPopup").has(e.target).length === 0 && 
		$("#calculatePopup").has(e.target).length === 0
	) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
        $("#counselPopup, #calculatePopup").removeClass("show");
	}
});


// 모바일 상단 띠배너(공통)
$(document).ready(function () {
  $(".mob_top_banner .close_btn").on("click", function () {
    $("body").addClass("no_top_banner");
  });

  $(".h_selbox").on("click", function () {
    $(".popup-overlay").css("display", "flex");
  });

  $("#popupOverlayExpertise").on("click", function (e) {
    // ✅ 팝업 바깥 클릭 시 닫기
    if (e.target === this) {
      $(this).hide();
    }
  });

  // 팝업 항목 선택 시 값 반영
  $(".popup-expertise-option").on("click", function () {
    const selected = $(this).text();
    // $(".h_selbox").text(selected); // 버튼 텍스트 변경
    $("#popupOverlayExpertise").hide();
  });
});



// 상세 카테고리탭(모바일)
function detail_tab(num) {

	if ($(window).width() > 1080) return; 

	event.preventDefault();

	if(num === 1) {
		
		$(".detail_review").fadeIn()
		$(".detail_wrap #Introduction .titbox").fadeIn()
		$(".detail_wrap #Introduction .content").fadeIn()
		$(".detail_wrap #Introduction .infobox .store_item").fadeIn()

		$(".detail_wrap #Review").fadeOut()
		$(".detail_wrap #QnA").fadeOut()

	} else if (num ===2) {

		$(".detail_review").fadeOut()
		$(".detail_wrap #Introduction .titbox").fadeOut()
		$(".detail_wrap #Introduction .content").fadeOut()
		$(".detail_wrap #Introduction .infobox .store_item").fadeOut()
		
		$(".detail_wrap #Review").fadeIn()
		$(".detail_wrap #QnA").fadeOut()
		
	} else if (num ===3) {

		$(".detail_review").fadeOut()
		$(".detail_wrap #Introduction .titbox").fadeOut()
		$(".detail_wrap #Introduction .content").fadeOut()
		$(".detail_wrap #Introduction .infobox .store_item").fadeOut()

		$(".detail_wrap #Review").fadeOut()
		$(".detail_wrap #QnA").fadeIn()

	}
}


function active_category() {
  const params = new URLSearchParams(window.location.search);
  const t = params.get("t");

  $(".cate1").removeClass("active");
  $(".cate2").removeClass("active");
  $(".cate3").removeClass("active");
  $(".cate4").removeClass("active");

  if (t == "sin") {
    $(".cate2").addClass("active");
  } else if (t == "saju") {
    $(".cate3").addClass("active");
  } else if (t == "tarot") {
    $(".cate4").addClass("active");
  } else {
    $(".cate1").addClass("active");
  }

  const url = new URL(window.location.href);
  const pathname = url.pathname;
  const isHot = pathname === "/hot";
  const isNew = pathname === "/new";
  const isAvailable = pathname === "/available";

  $("#id_li_home").removeClass("active");
  $("#id_li_hot").removeClass("active");
  $("#id_li_new").removeClass("active");
  $("#id_li_available").removeClass("active");

  if (isHot) {
    $("#id_li_hot").addClass("active");
  } else if (isNew) {
    $("#id_li_new").addClass("active");
  } else if (isAvailable) {
    $("#id_li_available").addClass("active");
  } else {
    $("#id_li_home").addClass("active");
  }
}


function show_call_popup(counselor) {
  // console.log(counselor);

  $("body").addClass("hidden");
  $("#counselPopup").addClass("show");
}


function hide_call_popup() {
  $("body").removeClass("hidden");
  $("#counselPopup").removeClass("show");
}


$(document).ready(function () {
  $(".input_sch").on("keydown", function (e) {
    if (e.key === "Enter") {
      handleSearch();
    }
  });

  $(".sch_btn").on("click", function () {
    handleSearch();
  });
});


function handleSearch() {
  const keyword = $(".input_sch").val().trim();
  if (keyword) {
    // 검색 처리 로직
    console.log("검색어:", keyword);
    location.href = "/search?q=" + encodeURIComponent(keyword);
  }
}


function makeCall() {
  const selected_counselor = $("#selected_counselor").val();
  const mid = $("#mid").val();
  if (selected_counselor && mid) {
    $.ajax({
      url: "/api/users/counselor/booking",
      type: "POST",
      data: JSON.stringify({ counselor_key: selected_counselor, mid }),
      success: function (response) {
        console.log(response);
      }
    });
  }

  const isMobile = /iPhone|Android|Mobile/i.test(navigator.userAgent);
  if (isMobile) {
    window.location.href = "tel:07052348700";
  } else {
    // alert("이 기능은 모바일에서만 작동합니다.");
  }
}




// 25.06.06 작업
// 메인 팝업
function mainPopup() {
	$("body").addClass("hidden")
	$("#mainPopup").addClass("show");
}

function mainPopupClose() {
	$("body").removeClass("hidden")
	$("#mainPopup").removeClass("show")
}

const mainpop_slider = new Swiper(".mainpop_slider", {
	loop: true,
	speed: 500,		
	observer: true,  
	observeParents: true,  
	spaceBetween: 20,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	pagination: {
		el: '.mainpop_slider .pagination',
		clickable: true,
	},
});


/* 모바일 타이머 배너 */
let timeLeft = 279; // 타이머 시간 (초)
let barLeft = 20;   // 프로그레스바 시간 (초)
let barInterval;
const totalBar = barLeft;

function formatTime(seconds) {
  const hrs = "00";
  const min = String(Math.floor(seconds / 60)).padStart(2, "0");
  const sec = String(seconds % 60).padStart(2, "0");
  return `${hrs}:${min}:${sec}`;
}

function startTimer() {
  $(".timer_banner .timer .time").text(formatTime(timeLeft));
  const timer = setInterval(function () {
    if (timeLeft > 0) {
      timeLeft--;
      $(".timer_banner .timer .time").text(formatTime(timeLeft));
    } else {
      clearInterval(timer);
    }
  }, 1000);
}

function startProgressBar() {
  $(".timer_banner #time_progress").css("width", "100%").removeClass("active");
  setTimeout(function () {
    $(".timer_banner #time_progress").addClass("active");
    const updateInterval = 100;
    const totalTime = totalBar * 1000;
    let elapsed = 0;

    if (barInterval) clearInterval(barInterval);

    barInterval = setInterval(function () {
      elapsed += updateInterval;
      if (elapsed <= totalTime) {
        const percent = 100 * (1 - elapsed / totalTime);
        $(".timer_banner #time_progress").css("width", percent + "%");
      } else {
        clearInterval(barInterval);
        $(".timer_banner #time_progress").css("width", "0%").removeClass("active");
        setTimeout(startProgressBar, 200);
      }
    }, updateInterval);
  }, 200);
}

$(document).ready(function () {
  startTimer();
//   startProgressBar(); // CSS 애니메이션으로 구현
});
