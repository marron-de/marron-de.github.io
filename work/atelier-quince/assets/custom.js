// header notice
$('.fixed-notice .btn-close').click(function () {
	$('.fixed-notice').addClass("hide");
});

// header scroll
$(function () {
	let didScroll;
	let lastScrollTop = 0;
	let delta = 5; // 이벤트를 발생시킬 스크롤의 이동 범위
	let navbarHeight = $("#header").outerHeight();

	$(window).scroll(function (event) {
		didScroll = true;
	});

	hasScrolled();

	setInterval(function () {
		if (didScroll) {
			hasScrolled();
			didScroll = false;
		}
	}, 250); // 스크롤이 멈춘 후 동작이 실행되기 까지의 딜레이

	function hasScrolled() {
		let st = $(this).scrollTop(); // 현재 window의 scrollTop 값

		// delta로 설정한 값보다 많이 스크롤 되어야 실행된다.
		if (Math.abs(lastScrollTop - st) <= delta)
			return;

		if (st > 0) {
			$("body").addClass("down")
		} else {
			$("body").removeClass("down")
		}

		if (st > navbarHeight) {
			$(".header__inline-menu").addClass("down")
		}

		if (st < navbarHeight) {
			$(".header__inline-menu").removeClass("down")
		}

		lastScrollTop = st; // 현재 멈춘 위치를 기준점으로 재설정
	}
})

// header serach icon
$('.header__icon--search').click(function () {
	$('body').addClass("search-active");
});
$('.search-modal__close-button').click(function () {
	$('body').removeClass("search-active");
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


// product




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

