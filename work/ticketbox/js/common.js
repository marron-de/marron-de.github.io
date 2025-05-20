
// navbox button 
$(document).ready(function () {
	$(".header .menu_btn").click(function () {
		$("body").addClass("hidden");
		$(".header").addClass("open");
		$(".nav_box").addClass("open");
	})

	$(".nav_box .nav_close").click(function () {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
	})
});

$(document).mouseup(function (e) {
	if ($(".nav_box").has(e.target).length === 0) {
		$("body").removeClass("hidden");
		$(".header").removeClass("open");
		$(".nav_box").removeClass("open");
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
		lnbUI.click('#nav li', 400)
	});

}(jQuery));


// tab function
$(document).ready(function () {
	$(".tab_nav").click(function () {
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
