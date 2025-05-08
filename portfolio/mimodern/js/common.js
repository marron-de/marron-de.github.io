$(function () {

    let wi = $(window).width();
    if (wi >= 900) {
        wi = 900;
    } else {
        wi = 0;
    }

    $(window).resize(function () {
        if ($(this).width() < 900 && wi != 0) {
            window.location.reload(false);
            wi = 0;
        }
        if ($(this).width() >= 900 && wi != 900) {
            window.location.reload(false);
            wi = 900;
        }
    });

});


function menu_sub_click(i) {

    let ww = window.innerWidth;

    if (i == 1) {

        if (900 < ww) {

            location = '#none';

        } else {

            $(".nav_ul").removeClass("on");
            $(".nav_ul#m_sub_menu1").toggleClass("on");
        }

    } else if (i == 2) {

        if (900 <= ww) {

            location = '#none';

        } else {

            $(".nav_ul").removeClass("on");
            $(".nav_ul#m_sub_menu2").toggleClass("on");
        }

    } else if (i == 3) {

        if (900 <= ww) {

            location = '#none';

        } else {

            $(".nav_ul").removeClass("on");
            $(".nav_ul#m_sub_menu3").toggleClass("on");
        }

    } else if (i == 4) {

        if (900 <= ww) {

            location = '#none';

        } else {

            $(".nav_ul").removeClass("on");
            $(".nav_ul#m_sub_menu4").toggleClass("on");
        }

    } else if (i == 5) {

        if (900 <= ww) {

            llocation = '#none';

        } else {

            $(".nav_ul").removeClass("on");
            $(".nav_ul#m_sub_menu5").toggleClass("on");
        }

    } else if (i == 6) {

        if (900 <= ww) {

            llocation = '#none';

        } else {

            $(".nav_ul").removeClass("on");
            $(".nav_ul#m_sub_menu6").toggleClass("on");
        }

    } else if (i == 7) {

        if (900 <= ww) {

            llocation = '#none';

        } else {

            $(".nav_ul").removeClass("on");
            $(".nav_ul#m_sub_menu7").toggleClass("on");
        }

    }


}


function m_menu_ope() {

	$("body").addClass("hidden");
	$(".header").addClass("open");
	$(".nav_box").addClass("open");

	// $.lockBody();

}


function m_menu_clo() {

	let ww = window.innerWidth;

	$("body").removeClass("hidden");
	$(".header").removeClass("open");
	$(".nav_box").removeClass("open");
	$("#nav li").removeClass("show");

	// $.unlockBody();

	if (ww < 900) {

		document.getElementById('m_sub_menu1').style.display = 'none';
		document.getElementById('m_sub_menu2').style.display = 'none';
		document.getElementById('m_sub_menu3').style.display = 'none';
		document.getElementById('m_sub_menu4').style.display = 'none';
		document.getElementById('m_sub_menu5').style.display = 'none';
		document.getElementById('m_sub_menu6').style.display = 'none';
		document.getElementById('m_sub_menu7').style.display = 'none';

	}

}


/* lnb */
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

			$target.on('click', '.tit', function (e) {
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
		lnbUI.click('#nav li', 400)
	});


}(jQuery));


// prevent body scroll
var $docEl = $('html, body'),
	$wrap = $('.wrap'),
	$scrollTop;


$.lockBody = function () {
	if (window.pageYOffset) {
		$scrollTop = window.pageYOffset;
		$wrap.css({
			top: -($scrollTop)
		});
	}
	$docEl.css({
		height: "100%",
		overflow: "hidden"
	});
}

$.unlockBody = function () {
	$docEl.css({
		height: "",
		overflow: ""
	});
	$wrap.css({
		top: ''
	});
	window.scrollTo(0, $scrollTop);
	window.setTimeout(function () {
		$scrollTop = null;
	}, 0);
}



function line_nav() {
    $(".line_navbox").toggleClass("on")
}