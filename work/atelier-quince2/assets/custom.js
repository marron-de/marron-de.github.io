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



// product detail
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

