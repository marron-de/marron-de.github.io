/* 아코디언 기능 */
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


/* 탭 기능 */
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


/* select2 기능 */
$(document).ready(function() {
    $('.select2').select2({
        templateResult: function(data) {
            if ($(data.element).data('hidden')) {
                return null;
            }
            let result = $('<span class="opt">');

            if ($(data.element).data('img')) {
                result.append('<img class="icon" src="' + $(data.element).data('img') + '" />');
            }
            if ($(data.element).data('border')) {
                result.append('<img class="border" src="' + $(data.element).data('border') + '" />');
            }
            
            result.append('<span class="txt">' + data.text + '</span>');
            return result;
        },
        templateSelection: function(data) {
            let selection = $('<span class="opt">');
            
            // 이미지 추가
            if ($(data.element).data('img')) {
                selection.append('<img class="icon" src="' + $(data.element).data('img') + '" />');
            }
            
            // 테두리 이미지 추가
            if ($(data.element).data('border')) {
                selection.append('<img class="border" src="' + $(data.element).data('border') + '" />');
            }
            
            selection.append('<span class="txt">' + data.text + '</span>');
            return selection;
        }
    });
});


/* 팝업 공통 */
$(".modal .close_btn").click(function () {
    $("body").removeClass("hidden")
    $(".modal").removeClass("show")
})

$(document).mouseup(function (e) {
    if ($(".modal .modal_box").has(e.target).length === 0) {
        $("body").removeClass("hidden")
        $(".modal").removeClass("show")
    }
});


/* 01_메인 01_디폴트 */
function template_edit() {
    $(event.target).closest('.title').toggleClass('on');
}

const template_create = new Swiper(".main_wrap .template_create", {
    speed: 500,
    spaceBetween: 24,

    navigation: {
        nextEl: ".main_wrap .template_createbox .next_btn",
        prevEl: ".main_wrap .template_createbox .prev_btn",
    },
});

const template_basic = new Swiper(".main_wrap .template_basic", {
    speed: 500,
    slidesPerView: 'auto',
    spaceBetween: 24,
    navigation: {
        nextEl: ".main_wrap .template_basicbox .next_btn",
        prevEl: ".main_wrap .template_basicbox .prev_btn",
    }
});


/* 02_템플릿 01_디폴트 */
$(".template_wrap .devicebox .item").click(function () {
    $(".template_wrap .devicebox .item").removeClass("on")
    $(this).addClass("on")
})


/* 02_템플릿 08_여백 02_선택후1 */
$(document).ready(function () {
    const rangeBtn = $('.range_box .range_btn');
    const rangeArea = $('.range_box .range_area');
    const min = 10;
    const max = 100;

    function updateButtonPosition(value) {
        const rangeWidth = rangeArea.width();
        const btnWidth = rangeBtn.outerWidth();
        const relativeValue = (value - min) / (max - min);
        const newLeft = relativeValue * (rangeWidth - btnWidth);
        rangeBtn.css('left', newLeft + 'px');
    }

    const initialValue = parseInt(rangeArea.attr('data-value'), 10) || min;
    updateButtonPosition(initialValue);

    rangeBtn.on('mousedown', function (e) {
        const rangeWidth = rangeArea.width();
        const rangeAreaOffset = rangeArea.offset().left;
        const btnWidth = rangeBtn.outerWidth();

        $(document).on('mousemove', function (e) {
            let newLeft = e.clientX - rangeAreaOffset - btnWidth / 2;
            newLeft = Math.max(0, newLeft); 
            newLeft = Math.min(rangeWidth - btnWidth, newLeft); 

            const rangeValue = Math.round((newLeft / (rangeWidth - btnWidth)) * (max - min) + min);
            rangeBtn.css('left', newLeft + 'px');
            rangeArea.attr('data-value', rangeValue);
        });

        $(document).on('mouseup', function () {
            $(document).off('mousemove mouseup');
        });

        e.preventDefault();
    });
});


/* 02_템플릿 15_게시형&답변형케이스 02_게시형 - 공지사항 (쓰기영역) */
$(document).ready(function () {
    const fileInput = $('.file_wrap .input_file');
    const fileBtn = $('.file_wrap .file_btn');
    const fileLabel = $('.file_wrap .label_file');

    const iconMapping = {
        pdf: 'img/file_pdf.png',
        jpg: 'img/file_img.png',
        jpeg: 'img/file_img.png',
        png: 'img/file_img.png',
        docx: 'img/file_word.png',
        xls: 'img/file_excel.png',
        pptx: 'img/file_ppt.png',
        txt: 'img/file_txt.png',
        default: 'img/file_default.png'
    };

    function getFileIcon(fileName) {
        const extension = fileName.split('.').pop().toLowerCase();
        return iconMapping[extension] || iconMapping.default;
    }

    fileInput.on('change', function () {
        const files = fileInput[0].files;
        if (files.length > 0) {
            const fileNames = Array.from(files).map(file => file.name).join(', ');
            fileLabel.text(fileNames);
            fileLabel.addClass('attached');
        } else {
            fileLabel.text('파일 업로드');
            fileLabel.removeClass('attached');
        }
    });

    fileBtn.on('click', function () {
        let fileList = $('.file_wrap .file_list');

        if (fileList.length === 0) {
            fileList = $('<div class="file_list"></div>');
            $('.file_wrap').append(fileList);
        }

        const files = fileInput[0].files;

        if (!files.length) {
            alert('파일을 선택해주세요!');
            return;
        }

        Array.from(files).forEach(file => {
            const fileName = file.name;
            const fileIcon = getFileIcon(fileName);

            const fileItem = $(`
                <div class="file_item">
                    <img src="${fileIcon}" alt="파일 아이콘" class="icon">
                    <span class="name">${fileName}</span>
                    <button type="button" class="del_btn"></button>
                </div>
            `);

            fileList.append(fileItem);
        });

        fileInput.val('');
        fileLabel.text('파일 업로드');
        fileLabel.removeClass('attached');
    });

    $('.file_wrap').on('click', '.del_btn', function () {
        const fileItem = $(this).closest('.file_item');
        fileItem.remove();        
        const fileList = $('.file_wrap .file_list');
        if (fileList.find('.file_item').length === 0) {
            fileList.remove();
        }
    });
});


/* 02_템플릿 05_답변형 - 뷰페이지 */
$(document).ready(function () {
    $('.bo_view #like_btn').on('click', function () {
        const button = $(this);
        const numSpan = button.find('.num');
        let currentNum = parseInt(numSpan.text(), 10);

        button.toggleClass('on');

        if (button.hasClass('on')) {
            numSpan.text(currentNum + 1);
        } else {
            numSpan.text(currentNum - 1);
        }
    });
});

$(document).ready(function () {
    $('.bo_view .bo_comment .cmt_toggle_btn').on('click', function () {
        const cmtRebox = $(this).closest('.cmtitem').find('.cmt_rebox');
        cmtRebox.toggleClass("show");
    });
});


/* 02_템플릿 07_답변형 - Q&A작성하기 */
$(document).ready(function () {
    const fileInput = $('.file_wrap .input_file');
    const fileSelectBtn = $('.file_wrap .fileSelect_btn');
    const fileLabel = $('.file_wrap .label_file');

    fileSelectBtn.on('click', function () {
        fileInput.click();
    });
    fileInput.on('change', function () {
        const files = fileInput[0].files;
        if (files.length > 0) {
            const fileNames = Array.from(files).map(file => file.name).join(', ');
            fileLabel.text(fileNames);
            fileLabel.addClass('attached');
        } else {
            fileLabel.text('파일 업로드');
            fileLabel.removeClass('attached');
        }
    });
});


/* 03_공고정렬 01_디폴트 */
$(document).ready(function () {
    $('.sort_wrap .sort_list .acc_tit .menu_btn').on('click', function (e) {
        e.stopPropagation(); // 이벤트 버블링 방지

        const popup = $(this).siblings('.sort_popup');
        
        // 현재 열린 팝업이 클릭한 팝업인지 확인
        if (popup.hasClass('show')) {
            // 이미 열려있는 팝업이면 닫기
            popup.removeClass('show');
        } else {
            // 다른 팝업이 열려 있으면 모두 닫고, 클릭한 팝업 열기
            $('.sort_popup').removeClass('show');
            popup.addClass('show');
        }
    });

    // 화면 외부 클릭 시 모든 팝업 닫기
    $(document).on('mouseup', function (e) {
        if (!$('.sort_popup').is(e.target) && $('.sort_popup').has(e.target).length === 0) {
            $('.sort_popup').removeClass('show');
        }
    });
});


/* 05_검색SEO설정 01_디폴트 */
$(document).ready(function () {
    $('.schSeo_wrap .schSeo_box .titbox .setting_btn').on('click', function (e) {
        const conent = $(this).parent().parent().parent('.item');        
        conent.addClass('show');
    });
    $('.schSeo_wrap .schSeo_box .titbox .cancel_btn').on('click', function (e) {
        const conent = $(this).parent().parent().parent('.item');        
        conent.removeClass('show');
    });
});


/* 06_SNS공유 01_디폴트 */
$(document).ready(function () {
    $('.sns_wrap .sns_box .titbox .setting_btn').on('click', function (e) {
        const conent = $(this).parent().parent().parent('.item');        
        conent.addClass('show');
    });
    $('.sns_wrap .sns_box .titbox .cancel_btn').on('click', function (e) {
        const conent = $(this).parent().parent().parent('.item');        
        conent.removeClass('show');
    });
});


/* 250424 추가작업 */
// 팝업 공통
$(document).ready(function () {

	$(".popup .pop_close").click(function () {
		$(this).closest(".popup").removeClass("show")
	})

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
		$(".opt_popup").removeClass("show");
	});
});

$(document).mouseup(function (e) {
	if ($(".popup").has(e.target).length === 0 ) {
		$(".popup").removeClass("show")
	}
});


/* 02템플릿_15채용공고 */
// 필터
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
        lnbUI.click('.acc_filter li', 400)
    });
}(jQuery));

// 정렬
$(".list_area .align_btn").click(function () {
	$(".list_area .align_popup").addClass("show")
})