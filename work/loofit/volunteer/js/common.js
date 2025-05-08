// 아코디언 기능
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


// 탭
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


// datepicker
$(document).ready(function () {  
  if ($(".datepicker").length) {
    $.datepicker.setDefaults({
      closeText: "닫기",
      prevText: "이전달",
      nextText: "다음달",
      currentText: "오늘",
      monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
      monthNamesShort: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
      dayNames: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"],
      dayNamesShort: ["S", "M", "T", "W", "T", "F", "S"],
      dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
      weekHeader: "주",
      dateFormat: "yy-mm-dd",
      firstDay: 0,
      isRTL: false,
      showMonthAfterYear: true,
	  showOtherMonths: true,
      yearSuffix: "년"
    });

    $(".datepicker").datepicker({
      maxDate: 'today',
    });
  }

  if ($(".datepicker_lnline").length) {
    $.datepicker.setDefaults({
	inline: true,
      closeText: "닫기",
      prevText: "이전달",
      nextText: "다음달",
      currentText: "오늘",
      monthNames: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
      monthNamesShort: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
      dayNames: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"],
      dayNamesShort: ["S", "M", "T", "W", "T", "F", "S"],
      dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
      weekHeader: "주",
      dateFormat: "yy-mm-dd",
      firstDay: 0,
      isRTL: false,
      showMonthAfterYear: true,
	  showOtherMonths: true,
      yearSuffix: "년"
    });

    $(".datepicker_lnline").datepicker({
		defaultDate: "2025-02-12"
	});
  }  
});


// select2 
$(document).ready(function() {
    function formatOption(data) {
        if (!data.id || $(data.element).data('hidden')) {
            return null; 
        }

        let iconUrl = $(data.element).data('icon');
        let $option = $('<span></span>');

        if (iconUrl) {
            $option.append('<img src="' + iconUrl + '" alt="" class="icon">');
        }
        $option.append('<span class="txt">' + data.text + '</span>');

        return $option;
    }
	$(".select2").each(function() {
        let customClass = $(this).data("class") || ""; 

        $(this).select2({
            templateResult: formatOption,
            templateSelection: formatOption,
            dropdownCssClass: customClass,  
        });
		
		let $selectContainer = $(this).next('.select2-container');
        
        if (!$selectContainer.hasClass(customClass)) {
            $selectContainer.addClass(customClass);
        }
    });
});


// 모달 공통
$(".modal .close_btn").click(function () {
	$("body").removeClass("hidden")
	$(".modal").removeClass("show")
})

$(document).mouseup(function (e) {
	if ($(".modal .modal_box").has(e.target).length === 0 && $(".ui-datepicker").has(e.target).length === 0) {
		$("body").removeClass("hidden")
		$(".modal").removeClass("show")
	}
});


// 팝업 공통
$(".popup .pop_close").click(function () {
	$(this).closest(".popup").removeClass("show")
})

$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0 ) {
		$(".popup").removeClass("show")
	}
});


/* 카테고리 기능 */
$(document).ready(function () {
    if ($('.list_swiper').length) {
        const initialSlide = $('.list_swiper').attr('data-initial') || 0;        
        const list_swiper = new Swiper('.list_swiper', {
            speed: 500,
            slidesPerView: 'auto',
			spaceBetween: 8,
            initialSlide: initialSlide,
			allowSlideClick: false,
			slideToClickedSlide: false,
			touchMoveStopPropagation: false,
			breakpoints: { 
				1080: {
					direction: 'vertical',
					spaceBetween: 0,
				}, 
			}
        });

        $(list_swiper.slides).each(function () {
            $(this).removeClass('swiper-slide-active');
        });

		const activeSlide = list_swiper.slides[initialSlide];
        // $(activeSlide).addClass('on');
    }
});


// 사진 등록
$(document).ready(function () {
    $('.photo_box').each(function () {
        const photoBox = $(this);
        const inputPhoto = photoBox.find('.input_photo');
        const delBtn = photoBox.find('.del_btn');
        const uploadBox = photoBox.find('.upload_box');

        function handleFileUpload(file) {
            const maxSize = inputPhoto.data('size');
            const sizeInBytes = convertSizeToBytes(maxSize);
            const allowedTypes = inputPhoto.data('accept').split(',').map(function(type) {
                return type.trim().toLowerCase();
            });

            if (file.size > sizeInBytes) {
                alert(`파일 크기는 ${maxSize} 이하로 업로드해야 합니다.`);
                return;
            }

            const fileExtension = file.name.split('.').pop().toLowerCase();
            if (!allowedTypes.includes(fileExtension)) {
                alert(`지원되는 파일 형식은 ${allowedTypes.join(', ')}입니다.`);
                return;
            }

            if (fileExtension === 'pdf') {
                handlePdfUpload(file);
            }
        }

        function handlePdfUpload(file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const pdfData = new Uint8Array(e.target.result);

                pdfjsLib.getDocument(pdfData).promise.then(function (pdf) {
                    pdf.getPage(1).then(function (page) {
                        const canvas = document.createElement('canvas');
                        const context = canvas.getContext('2d');
                        const scale = 1.5;
                        const viewport = page.getViewport({ scale: scale });

                        canvas.width = viewport.width;
                        canvas.height = viewport.height;

                        page.render({
                            canvasContext: context,
                            viewport: viewport
                        }).promise.then(function () {
                            const img = $('<img class="img" />');
                            img.attr('src', canvas.toDataURL());
                            img.attr('alt', 'PDF Thumbnail');

                            uploadBox.empty();
                            uploadBox.append(img);
                            uploadBox.addClass('uploaded');
                            delBtn.show();
                        });
                    });
                }).catch(function (error) {
                    alert("PDF 로딩 오류: " + error);
                });
            };
            reader.readAsArrayBuffer(file);
        }

        function convertSizeToBytes(sizeStr) {
            const sizeUnit = sizeStr.slice(-2).toLowerCase();
            const sizeValue = parseInt(sizeStr);
            switch (sizeUnit) {
                case 'mb':
                    return sizeValue * 1024 * 1024;
                case 'kb':
                    return sizeValue * 1024;
                case 'gb':
                    return sizeValue * 1024 * 1024 * 1024;
                default:
                    return sizeValue;
            }
        }

        inputPhoto.on('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                handleFileUpload(file);
            }
        });

        delBtn.on('click', function () {
            uploadBox.empty();
            uploadBox.removeClass('uploaded');
            delBtn.hide();
            inputPhoto.val('');
        });

        uploadBox.on('click', function () {
            inputPhoto.click();
        });

        uploadBox.on('dragover', function (e) {
            e.preventDefault();
            uploadBox.addClass('drag_over');
        });

        uploadBox.on('dragleave', function () {
            uploadBox.removeClass('drag_over');
        });

        uploadBox.on('drop', function (e) {
            e.preventDefault();
            uploadBox.removeClass('drag_over');

            const file = e.originalEvent.dataTransfer.files[0];
            if (file) {
                handleFileUpload(file);
            }
        });
    });
});


// 자격증 검색 팝업
$(document).ready(function () {
	$('.select_btn').on('click', function () {
        const popup = $(this).next('.select_popup');
        if (popup.hasClass('show')) {
            popup.removeClass('show');
			$('.select_popup .medium_navitem').removeClass("show")
        } else {
            popup.addClass('show');
        }
    });

	$('.select_popup .medium_navitem .sel_nav').on('click', function () {
        const selectedItem = $(this);
        const selectedText = $(this).find('.txt').text();
		$('.select_popup .medium_navitem .sel_nav').removeClass("on")
		selectedItem.addClass("on")
        $(this).closest('.select_box').find('.select_btn .txt').text(selectedText); 

        $('.select_popup').removeClass('show'); 
		$('.select_popup .medium_navitem').removeClass("show")
    });

	$('.select_popup .major_navbox .next_btn').on('click', function () {
        if ($('.select_popup .major_navbox .sel_nav.on').length > 0) {
            $('.select_popup .medium_navitem').addClass("show");
        } 
    });

	$('.select_popup .close_btn').on('click', function () {
		$(this).closest(".select_popup").removeClass("show")
		$('.select_popup .medium_navitem').removeClass("show")
    });
});

$(document).mouseup(function (e) {
	if ($(".select_btn").has(e.target).length === 0 && $(".select_popup").has(e.target).length === 0) {
		$(".select_popup").removeClass("show")
		$('.select_popup .medium_navitem').removeClass("show")
	}
});


// 헤더 모바일 버튼
$(document).ready(function () {
	$('.v_header .name_btn').on('click', function () {
        const popup = $('.v_header .sidebox');
        if (popup.hasClass('show')) {
            popup.removeClass('show');
        } else {
            popup.addClass('show');
        }
    });
});

$(document).mouseup(function (e) {
	if ($(".v_header .name_btn").has(e.target).length === 0 && $(".v_header .sidebox").has(e.target).length === 0) {
		$(".v_header .sidebox").removeClass("show")
	}
});