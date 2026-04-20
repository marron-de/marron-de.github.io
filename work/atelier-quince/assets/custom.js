// accordion
(function ($) {
	var lnbUI = {
		click: function (target, speed) {
			var _self = this,
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
				var $this = $(this),
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
		}
	};
		
	// Call lnbUI
	$(function () {
		
		lnbUI.click('.accordion li', 400)

		lnbUI.click('#prd_tabs li', 400)

		lnbUI.click('#sub_catebox li', 400)

		lnbUI.click('.f_menubox li', 400)

	});

}(jQuery));

// header category
$('#header .category .sub-catebox li .cate_btn').click(function(){
	let This = $(this)
	let Target = This.parent()
	Target.addClass("show")
});

$('#header .category .sub-catebox .sub_catetop .sub_cateback').click(function(){
	$('#header .category .sub-catebox li').removeClass("show")
});


// header notice
$('.fixed-notice .btn-close').click(function () {
	$('.fixed-notice').addClass("hide");
});

// header scroll
$(function () {
	let didScroll;
	let lastScrollTop = 0;
	let delta = 5; 
	let navbarHeight = $("#header").outerHeight();

	// 플로팅 버튼 관련 변수
    let wrap = $('#detail_fixed_toggle_btn_wrap');
    let footer = $('#footer');
    let margin = 0;

	$(window).scroll(function (event) {
		didScroll = true;
	});

	hasScrolled();

	setInterval(function () {
		if (didScroll) {
			hasScrolled();
			updateFloatingButton();
			didScroll = false;
		}
	}, 250); 

	function hasScrolled() {
		let st = $(this).scrollTop(); 
		
		if (Math.abs(lastScrollTop - st) <= delta)
			return;

		if (st > 0) {
			$("body").addClass("down")
		} else {
			$("body").removeClass("down")
		}

		lastScrollTop = st; // 현재 멈춘 위치를 기준점으로 재설정
	}

	function updateFloatingButton() {
        if (!footer.length || !wrap.length) return;

        let scrollBottom = $(window).scrollTop() + $(window).height();
        let footerTop = footer.offset().top;

        if (scrollBottom > footerTop) {
            let gap = scrollBottom - footerTop + margin;
            wrap.css({
                'position': 'fixed',
                'bottom': gap + 'px'
            });
        } else {
            wrap.css({
                'position': 'fixed',
                'bottom': margin + 'px'
            });
        }
    }
})

// header serach icon
$('.header__icon--search').click(function () {
	$('body').addClass("search-active");
});
$('.search-modal__close-button').click(function () {
	$('body').removeClass("search-active");
});

$('.header-box .burger').click(function () {
	$('body').toggleClass("nav-active");
});

$('#header .category .sub-catebox li .cate_btn').click(function(){
	let This = $(this)
	let Target = This.parent()
	Target.addClass("show")
});

$('#header .category .sub-catebox .sub_catetop .sub_cateback').click(function(){
	$('#header .category .sub-catebox li').removeClass("show")
});

$('#header .lang_wrap .lang_tit').click(function () {
	$('#header .lang_wrap .lang_pop').toggleClass("open");
});


// footer toggle
$(document).ready(function () {
	$('.footer_toggle').click(function () {
		$(this).parents('#footer').find('.toggle_cont').slideToggle();
	});
});


// tab swiper
const tabSwiper = new Swiper(".tab_swiper", {  
    slidesPerView: "auto",     
    freeMode: true,    
});


// main Popup
$(document).ready(function () {        
	if($(".main-popup1 .swiper-wrapper").children().length) {
        $(".main-popup1").addClass('show');    
    } else {
        $(".main-popup1").addClass('hide2');    
    }
    
    if($(".main-popup2 .swiper-wrapper").children().length) {
        $(".main-popup2").addClass('show');    
    } else {
        $(".main-popup2").addClass('hide2');    
    }
    
    if($(".main-popup3 .swiper-wrapper").children().length) {
        $(".main-popup3").addClass('show');    
    } else {
        $(".main-popup3").addClass('hide2');    
    }
});
$(document).ready(function () {

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            while (cookie.charAt(0) === ' ') {
                cookie = cookie.substring(1, cookie.length);
            }
            if (cookie.indexOf(nameEQ) === 0) {
                return cookie.substring(nameEQ.length, cookie.length);
            }
        }
        return null;
    }

    let popupElements = [
        { element: document.getElementById('mainPopup1'), cookieName: "popup1Closed" },
        { element: document.getElementById('mainPopup2'), cookieName: "popup2Closed" },
        { element: document.getElementById('mainPopup3'), cookieName: "popup3Closed" }
    ];

    popupElements.forEach(function (popup) {
        if (popup.element !== null) {
            var cookiedata = getCookie(popup.cookieName);

            if (!cookiedata) {
                $(popup.element).removeClass('hide');
            } else {
                $(popup.element).addClass('hide');
            }

            $(popup.element).find('.popup-close').click(function () {
                $(popup.element).addClass('hide');
                console.log("팝업을 닫았습니다.");
            });

            $(popup.element).find('.popup-today').click(function () {
                setCookie(popup.cookieName, "done", 1);
                $(popup.element).addClass('hide');
                console.log("오늘은 더 이상 이 팝업을 보지 않겠습니다.");
            });
        }
    });
});

const mainPopup1 = new Swiper(".main-popup1", {
    loop: true,
    speed: 500,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.main-popup1 .main-popup-pagination',
        clickable: true,
    },
});
const mainPopup2 = new Swiper(".main-popup2", {
    loop: true,
    speed: 500,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.main-popup2 .main-popup-pagination',
        clickable: true,
    },
});
const mainPopup3 = new Swiper(".main-popup3", {
    loop: true,
    speed: 500,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.main-popup3 .main-popup-pagination',
        clickable: true,
    },
});


// main visual
const mainVisual = new Swiper(".pc-main-visual", {  
    loop: true,
    speed:500,     
    autoplay: {        
        delay: 6000,        
        disableOnInteraction: false,      
    },    
    pagination: {           
        el: '.pc-main-visual-pag',           
        clickable: true,        
    },       
});

const mobMainVisual = new Swiper(".mob-main-visual", {  
    loop: true,
    speed:500,     
    autoplay: {        
        delay: 6000,        
        disableOnInteraction: false,      
    },    
    pagination: {           
        el: '.mob-main-visual-pag',           
        clickable: true,        
    },        
    navigation: {        
        nextEl: '.main-visual-controls .swiper-button-next',        
        prevEl: '.main-visual-controls .swiper-button-prev',     
    },    
});


// main category
const mainShop = new Swiper(".main-shop", {  
    grabCursor: true,
    speed:500,    
    slidesPerView: 'auto',      
    spaceBetween: 15,    
    scrollbar: {
 		el: '.main-shop-scrollbar', 
        draggable: true,
    },   
    breakpoints: {             
        1024: {     
            spaceBetween: 80,
        }           
    }
});


// main new
const mainNew = new Swiper(".main-new", { 
    //mousewheel: true, 
    grabCursor: true,
    speed:500,    
    slidesPerView: 'auto',      
    spaceBetween: 15,    
    scrollbar: {
 		el: '.main-new-scrollbar', 
        draggable: true,
	},   
    breakpoints: {             
        1024: {     
            spaceBetween: 80,
        }           
    }
});


// main collection
const homeCollection = new Swiper(".home-collection", { 
    //mousewheel: true,
    speed:500, 
    slidesPerView: 'auto',
    spaceBetween: 15, 
    scrollbar: {
 		el: '.home-collection-scrollbar', 
        draggable: true,
	},  
    navigation: {        
        nextEl: '.main-collection-controls .swiper-button-next',        
        prevEl: '.main-collection-controls .swiper-button-prev',     
    },
    breakpoints: {             
        1024: {     
            spaceBetween: 80,
        }           
    }
});


// main instagrams
const homeInstagram = new Swiper(".home-instagrams", { 
    speed:500, 
    loop: false,
    slidesPerView: 'auto',
    spaceBetween: 10,    
    grid: {
        rows: 2,
        fill: "row",
    },
    navigation: {        
        nextEl: '.main-instagram-controls .swiper-button-next',        
        prevEl: '.main-instagram-controls .swiper-button-prev',     
    },
    breakpoints: { 
        1024: {
    		loop: true,
            slidesPerView: 6,
            spaceBetween: 20,   
            grid: {
                rows: 1,
            }, 
        }, 
    }
});


// story
$(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    var theta = scrollTop / 600 % Math.PI;
    
    $('.circle-1 .svg').css({ transform: 'rotate(' + theta + 'rad)' });
    $('.circle-2 .svg').css({ transform: 'rotate(-' + theta + 'rad)' });
});

$.fn.moveIt = function(){
  var $window = $(window);
  var instances = [];
  
  $(this).each(function(){
    instances.push(new moveItItem($(this)));
  });
  
  window.onscroll = function(){
    var scrollTop = $window.scrollTop();
    instances.forEach(function(inst){
      inst.update(scrollTop);
    });
  }
}
var moveItItem = function(el){
  this.el = $(el);
  this.speed = parseInt(this.el.attr('data-scroll-speed'));
};
moveItItem.prototype.update = function(scrollTop){
  this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
};

$(function(){
  $('[data-scroll-speed]').moveIt();
});


// product list
$(".searchData .xans-product-searchfilterlist .title").off("click").click(function (e) {
	$(this).parents(".xans-product-searchfilterlist").toggleClass("selected");
});
$(".searchData .xans-product-searchfilterlist .content").click(function (e) {
	e.stopPropagation();
});

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

const prd_cate_swiper = new Swiper(".prd_cate_swiper", { 
    speed:500, 
    slidesPerView: 'auto',
    spaceBetween: 10, 
    speed: 500,
});


$('.product_listnormal_wrap .prd_top_box > .right .btnSorting > button.smallView').click(function() {     
    $('.product_listnormal_wrap .prd_top_box > .right .btnSorting > button.bigView').removeClass("selected");     	
    $('.product_listnormal_wrap .prd_top_box > .right .btnSorting > button.smallView').addClass("selected");  
    $('.product_listnormal_wrap .thumbnail').addClass("small");        
});
$('.product_listnormal_wrap .prd_top_box > .right .btnSorting > button.bigView').click(function() {     
    $('.product_listnormal_wrap .prd_top_box > .right .btnSorting > button.bigView').addClass("selected");     
    $('.product_listnormal_wrap .prd_top_box > .right .btnSorting > button.smallView').removeClass("selected");  
    $('.product_listnormal_wrap .thumbnail').removeClass("small");        
});


// search filter modal
$(".prd_sch_mob_button").click(function () {
    $(".product_searchdata_popup_wrap").addClass("open")
})        
$(".product_searchdata_popup_wrap .tab_nav").click(function () {
    let target = $(this);
    let tabNavbox = target.closest('ul')
    let tabNav = tabNavbox.find(".tab_nav")
    let idx = tabNav.index(this);
    let tabWrap = tabNavbox.closest("div");
    let tabContbox = tabWrap.find(".tab_contbox");
    let tabCont = tabContbox.find(".tab_cont");
    tabNav.removeClass("on")
    tabNav.eq(idx).addClass("on")
    tabCont.removeClass("on")
    tabCont.eq(idx).addClass("on")
})
$(".product_searchdata_popup_wrap .tab_cont").eq(0).addClass("on")
$(document).on('mouseup', function(e) {
    var searchCondition = $('.product_searchdata_popup_wrap .searchCondition');
    var popupWrap = $('.product_searchdata_popup_wrap');

    if (searchCondition.length && !searchCondition.is(e.target) && searchCondition.has(e.target).length === 0) {
        popupWrap.removeClass('open');
    }
});


// product detail
$('.product-images .product__modal-opener').click(function() {  
    var currentIndex = $(this).closest('li').index(); 
	
    $(".prd_popup_wrap").addClass('on');  
	
    popup_slider.update();
    popup_slider.slideTo(currentIndex, 0); 
});

$('.prd_popup_wrap .popup_close').click(function() {            
    $(".prd_popup_wrap").removeClass("on");
});

const popup_thumbnail_nav = new Swiper(".pop-thumbnail-nav", { 
    speed: 500, 
    slidesPerView: 'auto',
    watchSlidesProgress: true
});

const popup_slider = new Swiper(".popup_slider", { 
    speed: 500, 	
    spaceBetween: 20, 
    navigation: {        
        nextEl: '.prd_popup_wrap .swiper-button-next',        
        prevEl: '.prd_popup_wrap .swiper-button-prev',     
    },
    thumbs: {
        swiper: popup_thumbnail_nav
    }
});

$('#top_btn').click(function() {            
	$('html, body').animate({          
		scrollTop: 0          
	}, 400);           
	return false;         
});

$('#buy_btn').click(function() {  
	$(".fixOpt").addClass('on');    	
	$(".detail_fixed_pannel_bg").addClass("on")    
});

$(document).mouseup(function (e) {    
	if ($(".fixOpt").has(e.target).length === 0 ) {
		$(".fixOpt").removeClass("on")
		$(".detail_fixed_pannel_bg").removeClass("on")
	}    
});


const relatedSlider = new Swiper(".related-slider", {    
    loop: true,
    speed:500,
    autoplay: {        
        delay: 6000,        
        disableOnInteraction: false,      
    },
    navigation: {        
        nextEl: '.related-slider .swiper-button-next',        
        prevEl: '.related-slider .swiper-button-prev',     
    },
});

$('.detail_fixed_toggle_btn_wrap #buy_btn').on('click', function (e) {
    e.preventDefault();
    let realSubmitBtn = $('button[id^="ProductSubmitButton-"]');

    if (realSubmitBtn.length > 0) {
        if (realSubmitBtn.is(':disabled')) {
            alert('현재 구매할 수 없는 상품입니다.');
            return;
        }
        realSubmitBtn.trigger('click');
    } else {
        alert('상품 옵션을 확인해주세요.');
    }
});


// cart
const cartBanner = new Swiper(".cart_banner", {     
    loop: true,
    speed:500,     
    autoplay: {        
        delay: 5000,        
        disableOnInteraction: false,      
    },        
    pagination: {           
        el: '.cart_banner_pag',           
        clickable: true,        
    },   
});
const mobcartBanner = new Swiper(".mob_cart_banner", {  
    loop: true,
    speed:500,     
    autoplay: {        
        delay: 5000,        
        disableOnInteraction: false,      
    },    
    pagination: {           
        el: '.mob_cart_banner_pag',          
        clickable: true,        
    },   
});

const gift_banner = new Swiper(".gift_banner", {  
    speed:500,     
    slidesPerView: 'auto',
    spaceBetween: 12, 
    speed: 500,
    breakpoints: {             
        1024: {     
            spaceBetween: 24,
        }           
    }
});

window.addEventListener('load', () => {
    const totalPriceEl = document.getElementById('total_price');
    const giftContainer = document.querySelector('.gift_banner');
    
    if (!totalPriceEl || !giftContainer) return;
	
    const rawTotal = totalPriceEl.getAttribute('data-price') || totalPriceEl.innerText || "0";
	
    const currentPrice = parseInt(rawTotal.replace(/[^0-9]/g, '')) || 0;
    
    const totalDashArray = 133.518;
    const slides = giftContainer.querySelectorAll('.swiper-slide');

    if (slides.length === 0) return;

    slides.forEach(slide => {
        const rawTarget = slide.getAttribute('data-price');
        if (!rawTarget || rawTarget.includes('{')) return;
		
        let targetPrice = parseFloat(rawTarget.replace(/[^0-9.]/g, '')) || 0;
		

        if (targetPrice === 0) return;

        let percent = Math.min((currentPrice / targetPrice) * 100, 100);
        
        const priceSpan = slide.querySelector('.price');
        const descEl = slide.querySelector('.desc');

        if (descEl) {
            if (currentPrice === 0) {
                descEl.innerHTML = "Fill your cart and check out your free gifts!";
            } else if (percent >= 100) {
                descEl.innerHTML = "Congratulations!<br>Gift unlocked!";
                slide.classList.add('is_complete');
            } else {
                const diff = Math.max(0, (targetPrice - currentPrice) / 100);
                const formattedDiff = '$' + diff.toLocaleString('en-US', { 
                    style: 'decimal', 
                    minimumFractionDigits: 2, 
                    maximumFractionDigits: 2 
                });
                
                descEl.innerHTML = `Only <span class="price">${formattedDiff}</span> away from your gift!`;
            }
        }

        const circle = slide.querySelector('.circle');
        if (circle) {
            const offset = totalDashArray * (1 - (percent / 100));
            circle.style.strokeDasharray = `${totalDashArray}`;
            circle.style.strokeDashoffset = `${offset}px`;
            circle.style.transition = 'stroke-dashoffset 0.5s ease-in-out';
        }

        slide.setAttribute('data-percent', Math.floor(percent));
    });
});

// cart recommend
const cart_recommendswiper = new Swiper(".cart_recommendswiper", {  
    speed:500,     
    slidesPerView: 'auto',
    spaceBetween: 12, 
    speed: 500,
    breakpoints: {             
        1024: {     
            spaceBetween: 24,
        }           
    }
});


// collection
$('.collection-slide').flickity({
	// options
	cellAlign: 'center',
	contain: true,
	pageDots: false,
	imagesLoaded: true,
	wrapAround: true,
	autoPlay: 7500,
	pauseAutoPlayOnHover: true
}); 


// store
function tabActive(el, event) {
  event.preventDefault();
  const $el = $(el);
  const $wrap = $el.closest('.store-wrap');
  $wrap.find('.store-list li').removeClass('on');
  $el.parent().addClass('on');
  $wrap.removeClass(function (index, className) {
    return (className.match(/(^|\s)type-\S+/g) || []).join(' ');
  });
  $wrap.addClass($el.data('num'));
}
function secondTabActive(el, event) {
  event.preventDefault();
  const $el = $(el);
  const $wrap = $el.closest('.store-wrap');
  
  $wrap.find('.store-second-depth li').removeClass('on');
  $el.parent().addClass('on');
  
  $wrap.removeClass(function (index, className) {
    return (className.match(/(^|\s)depth-\S+/g) || []).join(' ');
  });
  
  const depthClass = $el.data('depth');
  $wrap.addClass(depthClass);
  
  $wrap.find('.store-tab').removeClass('on');
  
  if (depthClass === 'depth-1') {
    $wrap.find('.store-tab').first().addClass('on');
  } else {
    $wrap.find(`.store-tab[data-depth="${depthClass}"]`).first().addClass('on');
  }
}
function posCurrent(el) {
  const $el = $(el);
  const $tab = $el.closest('.store-tab');
  if ($tab.data('num') === 'type-2') return;
  $tab.siblings('.store-tab').removeClass('on');
  $tab.addClass('on');
}

const locationSlider = new Swiper(".location-slider", {  
    speed:500, 
    loop: true,
    autoplay: {        
        delay: 5000,        
        disableOnInteraction: false,      
    },
    navigation: {        
        nextEl: '.swiper-location-controls .swiper-button-next',        
        prevEl: '.swiper-location-controls .swiper-button-prev',     
    },    
});

