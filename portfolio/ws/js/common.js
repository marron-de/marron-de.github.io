function menu_sub_click(i) {

	if (i == 1) {

		$("#m_sub_menu1").toggleClass("on");
		$("#m_sub_menu2").removeClass("on");
		$("#m_sub_menu3").removeClass("on");
		$("#m_sub_menu4").removeClass("on");
		$("#m_sub_menu5").removeClass("on");
		$("#m_sub_menu6").removeClass("on");

	} else if (i == 2) {

		$("#m_sub_menu1").removeClass("on");
		$("#m_sub_menu2").toggleClass("on");
		$("#m_sub_menu3").removeClass("on");
		$("#m_sub_menu4").removeClass("on");
		$("#m_sub_menu5").removeClass("on");
		$("#m_sub_menu6").removeClass("on");

	} else if (i == 3) {

		$("#m_sub_menu1").removeClass("on");
		$("#m_sub_menu2").removeClass("on");
		$("#m_sub_menu3").toggleClass("on");
		$("#m_sub_menu4").removeClass("on");
		$("#m_sub_menu5").removeClass("on");
		$("#m_sub_menu6").removeClass("on");

	} else if (i == 4) {

		$("#m_sub_menu1").removeClass("on");
		$("#m_sub_menu2").removeClass("on");
		$("#m_sub_menu3").removeClass("on");
		$("#m_sub_menu4").toggleClass("on");
		$("#m_sub_menu5").removeClass("on");
		$("#m_sub_menu6").removeClass("on");

	} else if (i == 5) {

		$("#m_sub_menu1").removeClass("on");
		$("#m_sub_menu2").removeClass("on");
		$("#m_sub_menu3").removeClass("on");
		$("#m_sub_menu4").removeClass("on");
		$("#m_sub_menu5").toggleClass("on");
		$("#m_sub_menu6").removeClass("on");

	} else if (i == 6) {

		$("#m_sub_menu1").removeClass("on");
		$("#m_sub_menu2").removeClass("on");
		$("#m_sub_menu3").removeClass("on");
		$("#m_sub_menu4").removeClass("on");
		$("#m_sub_menu5").removeClass("on");
		$("#m_sub_menu6").toggleClass("on");

	}

}


function m_menu_ope() {

	$(".header").addClass("open");
	$(".nav_box").addClass("open");

	$.lockBody();

}


function m_menu_clo() {

	$(".header").removeClass("open");
	$(".nav_box").removeClass("open");

	$.unlockBody();

	document.getElementById('m_sub_menu1').style.display = 'none';
	document.getElementById('m_sub_menu2').style.display = 'none';
	document.getElementById('m_sub_menu3').style.display = 'none';
	document.getElementById('m_sub_menu4').style.display = 'none';
	document.getElementById('m_sub_menu5').style.display = 'none';
	document.getElementById('m_sub_menu6').style.display = 'none';

}


function m_menu() {
	$("body").toggleClass("hidden");
	$(".header").toggleClass("open");
	$(".nav_box").toggleClass("open");
	$("#m_sub_menu1").removeClass("on");
	$("#m_sub_menu2").removeClass("on");
	$("#m_sub_menu3").removeClass("on");
	$("#m_sub_menu4").removeClass("on");
	$("#m_sub_menu5").removeClass("on");

}


$(document).mouseup(function (e) {
	if ($(".nav_box").has(e.target).length === 0 && $(".header").has(e.target).length === 0) {
		$('body').removeClass("open");
		$('.header').removeClass("open");
		$(".nav_box").removeClass("open");
		$('#nav li').removeClass("show");
		$('.nav_ul').css({"display": "none"});
		
		$('#nav li').eq(0).addClass("show");
		$('#nav li').eq(0).children('.nav_ul').addClass("on");
		$('#nav li').eq(0).children('.nav_ul').css({
			"display": "block"
		});
	}
});



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


function quick_talk_ope() {
	$("body").addClass("hidden");
	$("body").addClass("backdrop");
	$(".quick_talkbox").addClass("show");

}


function quick_talk_clo() {
	$("body").removeClass("hidden");
	$("body").removeClass("backdrop");
	$(".quick_talkbox").removeClass("show");

}


$(document).mouseup(function (e) {
	if ($(".quick_talkbox").has(e.target).length === 0 && $(".header").has(e.target).length === 0 && $(".nav_box").has(e.target).length === 0) {
		$('body').removeClass("hidden");
		$('body').removeClass("backdrop");
		$('.quick_talkbox').removeClass("show");
	}
});


function form_Check() {

	if (quick_form.name.value == '') {
		quick_form.name.focus();
		alert("이름을 입력해주세요.")
		return;
	}

	if (quick_form.contact.value == '') {
		quick_form.contact.focus();
		alert("연락처를 입력해주세요.")
		return;
	}

	if ($("input:checkbox[name=quick_check]").is(":checked") == false) {
		alert("개인정보 수집 및 이용 동의에 체크해주세요.")
		return;
	}

	function confirm_fun() {

		// DB 수집 작업 
		alert("빠른 상담 접수 (임시 작업)")
	}

	confirm_fun();

}