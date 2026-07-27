// layout
$(window).on('resize', function() {
    const windowWidth = $(window).width();
    const maxWidth = 1300;
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


// lucide
lucide.createIcons();


// accordion
(function (jQuery) {
	const lnbUI = {
		click: function (targetSelector, speed) {
			const self = this;
			const elements = jQuery(targetSelector);
			self.speed = speed || 400;

			elements.each(function () {
				if (jQuery(this).find('> ul').length === 0) {
					jQuery(this).addClass('noDepth');
				}
			});

			elements.on('click', '.acc_tit', function (event) {
				const clickedElement = jQuery(this);
				const clickedItem = clickedElement.parent();
				const nestedList = clickedElement.next();
				const accordionContainer = clickedElement.closest('.accordion');
				const isTypeB = accordionContainer.hasClass('typeB');
				const isTypeC = accordionContainer.hasClass('typeC');
				const isArrow = jQuery(event.target).hasClass('arrow');
				const isCheckbox = jQuery(event.target).is('input[type="checkbox"]');

				if (window.innerWidth <= 1080 && clickedItem.hasClass('menuitem')) return;


				if (isCheckbox) return;
				if (isTypeC && !isArrow) return;

				event.stopPropagation();

				if (!isTypeB && !isTypeC) {
					clickedItem.siblings().removeClass('show').find('ul').slideUp(self.speed);
				}

				if (nestedList.is(':visible')) {
					clickedItem.removeClass('show');
					nestedList.slideUp(self.speed);
				} else {
					clickedItem.addClass('show');
					nestedList.slideDown(self.speed);
				}
			});
		}
	};

	jQuery(function () {
		lnbUI.click('.accordion:not(.mob_acc) li', 400);

		if (window.innerWidth <= 1080) {
			lnbUI.click('.accordion.mob_acc li', 400);
		}
	});
})(jQuery);
$(document).ready(function () {
  $(".accordion.mob_acc li a.acc_tit").on("click", function (e) {
    if ($(window).width() <= 1080) {
      e.preventDefault();
    }
  });
});
