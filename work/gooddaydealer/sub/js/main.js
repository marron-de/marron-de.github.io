/* main section1 */
const ms1_thum = new Swiper(".ms1_thum", {
    grabCursor: true,
    slidesPerView: 3,
    spaceBetween: 4,
    speed: 500,
    breakpoints: {
        1080: {
            slidesPerView: 'auto',
            spaceBetween: 0,
        },
    },
});

const ms1_imgbox = new Swiper(".ms1_imgbox", {
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    speed: 500,

    thumbs: {
        swiper: ms1_thum,
    },

    scrollbar: {
        el: ".ms1 .scrollbar",
        hide: false,
        draggable: true,
    },
});

const ms1_txtbox = new Swiper(".ms1_txtbox", {
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    speed: 500,
});

ms1_imgbox.controller.control = ms1_txtbox;
ms1_txtbox.controller.control = ms1_imgbox;

$(window).on('load', function() {
    setTimeout(() => {
        ms1_imgbox.update();
    }, 100);
});



/* main section2 */
$(document).ready(function() {
    $(".ms2 #select_search").on("click", function() {
        let isValid = true;
        let missingSelect = "";

        $(".ms2 .select").each(function() {
            if ($(this).val() === "") {
                isValid = false;
                missingSelect = $(this).data("th");
                return false;
            }
        });

        if (!isValid) {
           $("body").addClass("hidden")
           $(".select_modal").addClass("show")
           $(".select_modal .modal_desc").text(missingSelect + "를 선택해주세요.");
        } else {
            $("body").addClass("hidden")
            $(".select_modal").addClass("show")
            $(".select_modal .modal_desc").text("모든 항목이 선택되었습니다. (임시)");
        }
    });
});



/* main section3 */
const cardCommonOptions = {
    grabCursor: true,
    slidesPerView: 1.4,
    spaceBetween: 12,
    speed: 500,
    scrollbar: {
        hide: false,
        draggable: true,
    },
    breakpoints: {
        1080: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    },
};

const card_swiper1 = new Swiper(".card_swiper1", {
    ...cardCommonOptions, // 공통 옵션 적용
    scrollbar: {
        ...cardCommonOptions.scrollbar,
        el: ".card_swiper1 .scrollbar", // 개별 설정
    },
});

const card_swiper2 = new Swiper(".card_swiper2", {
    ...cardCommonOptions, // 공통 옵션 적용
    scrollbar: {
        ...cardCommonOptions.scrollbar,
        el: ".card_swiper2 .scrollbar", // 개별 설정
    },
});

const card_swiper3 = new Swiper(".card_swiper3", {
    ...cardCommonOptions, // 공통 옵션 적용
    scrollbar: {
        ...cardCommonOptions.scrollbar,
        el: ".card_swiper3 .scrollbar", // 개별 설정
    },
});



/* main section4 */
const ms4_swiper = new Swiper(".ms4_swiper", {
    grabCursor: true,
    loop:true,
    slidesPerView: 1,
    spaceBetween: 20,
    speed: 500,
    pagination: {
        el: '.ms4_swiper .pagination',
        clickable: true,
    },
    breakpoints: {
        1080: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
    },
});



/* main section6 */
const ms6_listbox = new Swiper(".ms6_listbox", {
    grabCursor: true,
    direction: 'vertical',
    slidesPerView: 3,
    spaceBetween: 12,
    speed: 500,
    scrollbar: {
        el: ".ms6 .scrollbar",
        hide: false,
        draggable: true,
    },
    breakpoints: {
        1080: {
            slidesPerView: 'auto',
            spaceBetween: 0,
        },
    },
});

const ms6_imgbox = new Swiper(".ms6_imgbox", {
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    speed: 500,

    thumbs: {
        swiper: ms6_listbox,
    },
});



/* main section9 */
const ms9_swiper = new Swiper(".ms9_swiper", {
    grabCursor: true,
    slidesPerView: 'auto',
    spaceBetween: 40,
    speed: 500,
    scrollbar: {
        el: ".ms9 .pc_scrollbar",
        hide: false,
        draggable: true,
    },  
});

const mob_ms9_swiper = new Swiper(".mob_ms9_swiper", {
    grabCursor: true,
    slidesPerView: 2,
    spaceBetween: 16,
    speed: 500,
    scrollbar: {
        el: ".ms9 .mob_scrollbar",
        hide: false,
        draggable: true,
    },  
});