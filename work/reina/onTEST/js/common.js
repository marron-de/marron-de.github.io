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
$(function() {
    function formatOption(data) {
		if (!data.id) return data.text || '';
		if (!data.element) return null; 
		if ($(data.element).data('hidden')) return null;

		let icon = $(data.element).data('icon');
		return $('<span>')
			.append(icon ? '<img src="' + icon + '" class="icon">' : '')
			.append('<span class="txt">' + data.text + '</span>');
	}

    $(".select2").each(function() {
        let select = $(this);
        let customClass = select.data("class") || "";
		let placeholder = select.data("placeholder") || "";

        let container = select.select2({
            templateResult: formatOption,
            templateSelection: formatOption,
            dropdownCssClass: customClass,
    		width: '100%',
			placeholder: placeholder,
			allowClear: false,
        }).next('.select2-container');

        if (customClass && !container.hasClass(customClass)) {
            container.addClass(customClass);
        }

        let initialDataClass = select.find("option:selected").data("class");
        if (initialDataClass) container.attr("data-class", initialDataClass);

        select.on("change", function() {
            let newDataClass = $(this).find("option:selected").data("class") || '';
            container.attr("data-class", newDataClass);
        });
    });
});
$(document).on("mouseup", ".select2-dropdown, .select2-dropdown *", function (e) {
    e.stopPropagation();
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


// 오프캔버스 공통
$(".offcanvas .offcanvas_close").click(function () {
	$(".offcanvas").removeClass("show")
})
$(document).mouseup(function (e) {
	if ($(".offcanvas").has(e.target).length === 0) {
		$(".offcanvas").removeClass("show")
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
$(".opt_popup .opt_popbtn").click(function () {
    const popup = $(this).closest(".opt_popup");
    popup.find(".opt_popbtn").removeClass("selected");
    $(this).addClass("selected");

    const input = $(this).find('input[type="radio"]');
    if (input.length) {
        input.prop("checked", true).trigger("change");
    }
});
$(".opt_popup .opt_close").click(function () {
	$(".opt_popup").removeClass("show")
})


// 네비게이션 버튼
$(".navigation .nav_btn").click(function () {
	$(".layout").toggleClass("closed")
})
$(".navigation .nav_open").click(function () {
	$(".layout").removeClass("closed")
})


// 네비게이션 툴팁
$(".navigation .nav .acc_tit").hover(
  function () { $(this).addClass("hover"); },
  function () { $(this).removeClass("hover");}
);


// 헤더 툴팁
$(".page_header .btn").hover(
  function () { $(this).addClass("hover"); },
  function () { $(this).removeClass("hover");}
);


// 레이아웃 - 페이지 필터
$(".top_filer .align_btn").click(function () {
	$(".top_filer .align_popup").addClass("show")
})
$(".top_filer .setting_btn").click(function () {
	$(".top_filer .setting_popup").addClass("show")
})


// 첨부파일 업로드
$(document).ready(function () {
    $('.file_upload').each(function () {
        const photoBox = $(this);
        const wrapper = photoBox.closest('.input_filebox'); 
        const inputFile = wrapper.find('.input_file');
        const delBtn = photoBox.find('.del_btn');
        const uploadBox = photoBox.find('.upload_box');
        const fileNameBox = wrapper.find('.filename');

        function handleFileUpload(file) {
            const maxSize = inputFile.data('size');
            const sizeInBytes = convertSizeToBytes(maxSize);
            const allowedTypes = inputFile.data('accept').split(',')
                .map(type => type.trim().toLowerCase());

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
            } else {
                handleImageUpload(file);
            }

            fileNameBox.text(file.name); 
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
                            const img = $('<img class="img" />')
                                .attr('src', canvas.toDataURL())
                                .attr('alt', 'PDF Thumbnail');
                            uploadBox.empty().append(img).addClass('uploaded');
                            delBtn.show();
                        });
                    });
                }).catch(function (error) {
                    alert("PDF 로딩 오류: " + error);
                });
            };
            reader.readAsArrayBuffer(file);
        }

        function handleImageUpload(file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = $('<img class="img" />')
                    .attr('src', e.target.result)
                    .attr('alt', '이미지 업로드');
                uploadBox.empty().append(img).addClass('uploaded');
                delBtn.show();
            };
            reader.readAsDataURL(file);
        }

        function convertSizeToBytes(sizeStr) {
            const sizeUnit = sizeStr.slice(-2).toLowerCase();
            const sizeValue = parseInt(sizeStr);
            switch (sizeUnit) {
                case 'mb': return sizeValue * 1024 * 1024;
                case 'kb': return sizeValue * 1024;
                case 'gb': return sizeValue * 1024 * 1024 * 1024;
                default: return sizeValue;
            }
        }

        inputFile.on('change', function (e) {
            const file = e.target.files[0];
            if (file) handleFileUpload(file);
        });

        delBtn.on('click', function () {
            uploadBox.empty().removeClass('uploaded');
            delBtn.hide();
            inputFile.val('');
            fileNameBox.text('');
        });

        uploadBox.on('click', function () {
            inputFile.click();
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
            if (file) handleFileUpload(file);
        });
    });
});

$(document).ready(function () {
    $('.file_upload2').each(function () {
        const uploadBox = $(this);
        const wrapper = uploadBox.closest('.input_filebox');
        const inputFile = wrapper.find('.input_file');

        function handleFileUpload(file) {
            const allowedTypes = inputFile.data('accept').split(',')
                .map(type => type.trim().toLowerCase());

            const fileExtension = file.name.split('.').pop().toLowerCase();
            if (!allowedTypes.includes(fileExtension)) {
                alert(`지원되는 파일 형식은 ${allowedTypes.join(', ')}입니다.`);
                return;
            }

            alert("(임시) 업로드 완료: " + file.name);
        }

        inputFile.on('change', function (e) {
            const file = e.target.files[0];
            if (file) handleFileUpload(file);
        });

        uploadBox.on('click', function () {
            inputFile.click();
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
            if (file) handleFileUpload(file);
        });
    });
});


// 라벨 체크박스
$(".form_label .input_check").on("change", function () {
  const parent = $(this).closest(".form_label");
  if ($(this).is(":checked")) {
    parent.addClass("checked");
  } else {
    parent.removeClass("checked");
  }
});


// 테이블 전체 체크
$(function() {
    let table = $(".tbl");

    table.find(".allCheck").on("change", function() {
        let checked = $(this).prop("checked");
        table.find('td[data-th="checkbox"] .input_check').prop("checked", checked);
    });

    table.on("change", 'td[data-th="checkbox"] .input_check', function() {
        let total = table.find('td[data-th="checkbox"] .input_check').length;
        let checkedCount = table.find('td[data-th="checkbox"] .input_check:checked').length;
        table.find(".allCheck").prop("checked", total === checkedCount);
    });
});


// 알럿 버튼
$(".alert_box .alert_btn").hover(
  function () { $(this).siblings(".alert_popup").addClass("show");},
  function () { $(this).siblings(".alert_popup").removeClass("show"); }
);


// 모듈
function direcShow(btn) {
    const boxes = btn.closest('.form_box').querySelectorAll('.directory_box');
    boxes.forEach(box => {
        if (!box.classList.contains('notHide')) {
            box.classList.remove('allHide');
        }
    });
}
function direcHide(btn) {
    const boxes = btn.closest('.form_box').querySelectorAll('.directory_box');
    boxes.forEach(box => {
        if (!box.classList.contains('notHide')) {
            box.classList.add('allHide');
        }
    });
}
function moduleAdd(btn) {
    const moduleBox = btn.closest('.form_box').querySelector('.module_Addbox');
    if (moduleBox) {
        moduleBox.classList.toggle('show');
    }
}
$(document).ready(function() {
    $('.directory_item .title').hover(
        function() {
            if (!$(this).hasClass('input_ver')) {
                $(this).addClass('hover_ver');
            }
        },
        function() {
            $(this).removeClass('hover_ver');
        }
    );

    $('.directory_item .txt_box').on('click', function(e) {
        e.stopPropagation();
        $(this).closest('.title').removeClass('hover_ver').addClass('input_ver');
        $(this).siblings('.input_box').find('input').focus();
    });

    $('.directory_item .input_box input').on('blur', function() {
        $(this).closest('.title').removeClass('input_ver');
    });
});


// 플레이 박스
$(function() {
    const vidbox = $('.play_box .vidbox');
    const media = vidbox.find('video, audio').get(0);
    const pauseBtn = vidbox.find('.pause_btn');

    if (!media) return;

    $('.play_box .vid_btn, .play_box .control_btn.play').on('click', function () {
        if (media.paused) {
            media.play();
            vidbox.addClass('play');
        } else {
            media.pause();
            vidbox.removeClass('play');
        }
    });

    media.addEventListener('ended', function () {
        vidbox.removeClass('play');
    });

    vidbox.on('mouseenter', '.video, .pause_btn', function() {
        if (vidbox.hasClass('play')) {
            pauseBtn.addClass('hover');
        }
    });

    vidbox.on('mouseleave', '.video, .pause_btn', function() {
        pauseBtn.removeClass('hover');
    });
});


/* 문제은행가져오기 팝업 */
$(".examInputPopup .examImport_btn").click(function () {
	$(".examInputPopup").addClass("hidden")
	$(".examInputPopup .examImport_box").addClass("show")
})
$(".examInputPopup .examImport_close").click(function () {
	$(".examInputPopup").removeClass("hidden")
	$(".examInputPopup .examImport_box").removeClass("show")
})


/* 본인인증popup */
$(function () {
  $(".verification_box .item").each(function () {
    const item = $(this);
    const inputFile = item.find("input[type='file']");
    const imgbox = item.find(".imgbox");

    const acceptData = inputFile.data("accept");
    if (acceptData) {
      inputFile.attr(
        "accept",
        acceptData
          .split(",")
          .map(ext => "." + ext.trim())
          .join(", ")
      );
    }

    item.find(".file_btn").on("click", function () {
      inputFile.trigger("click");
    });

    inputFile.on("change", function (e) {
      const file = e.target.files[0];
      if (!file) return;

      const reader = new FileReader();
      reader.onload = function (ev) {
        imgbox.html('<img src="' + ev.target.result + '" alt="" class="img"/>');
        imgbox.addClass("uploaded");
      };
      reader.readAsDataURL(file);
    });
  });
});


/* 이메일 전송 */
$('.input_textbox').on('click', function (e) {
	if ($(e.target).closest('.badge').length) {
		return;
	}

	const editableText = $(this).find('.editable_text');
	const inputPopup = $(this).siblings('.input_popup');
	if (editableText.length) {
		$(this).addClass('editable');
		editableText.focus();
		inputPopup.addClass('show');
	}
	e.stopPropagation();
});
$('.input_popup .input_opt').on('click', function () {
	const selectedText = $(this).text();
	const inputTextbox = $(this).closest('.input_popup').siblings('.input_textbox');
	const editableText = inputTextbox.find('.editable_text');
	const badgeBox = inputTextbox.find('.badgebox');
	const badge = $('<div class="badge"><span class="txt"></span><button class="remove_btn"></button></div>');
	badge.find('.txt').text(selectedText);

	badgeBox.append(badge);
	$(this).closest('.input_textbox').removeClass('editable');
	$(this).closest('.input_popup').removeClass('show');
	editableText.val('');
});
$('.input_textbox .badgebox').on('click', '.remove_btn', function () {
	$(this).closest('.badge').remove();
});  
$(document).on('click', function (e) {
	if (!$(e.target).closest('.input_textbox').length) {
		$('.input_textbox').removeClass('editable');
		$('.input_popup').removeClass('show');
	}
});

$('.input_box.file_ver .fileupload_btn, .input_box.file_ver .input_text').on('click', function() {
    $(this).siblings('.file_input').click();
});
$('.input_box.file_ver .file_input').on('change', function () {
    const fileName = this.files[0]?.name || '';
    const inputBox = $(this).closest('.input_box.file_ver');
    const fileNameInput = inputBox.find('.input_text');
    
    fileNameInput.val(fileName);

    if (fileName) {
        inputBox.addClass('hasFile');
    } else {
        inputBox.removeClass('hasFile');
    }
});


/* 문자 전송 */
$(function () {
  $('#smsSendPopup .preview_btn').on('click', function () {
    $('#smsSendPopup .sms_contbox').toggleClass('preview_show');
  });
});


/* 결과지및통계보고서 */
$(document).ready(function () {
	const maxScore = 25;
	$('.bar_chartbox .barchart .baritem').each(function () {
		const score = parseFloat($(this).data('score'));
		const percent = (score / maxScore) * 100;
		$(this).css('--bar-percent', percent + '%');
		if (percent >= 93) {
			$(this).addClass('chartIn');
		}
	});
});

$("#resultReportPopup .setting_btn").click(function () {
	$("#resultReportPopup .setting_popup").addClass("show")
})