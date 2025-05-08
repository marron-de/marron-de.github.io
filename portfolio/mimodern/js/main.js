// AOS
AOS.init({
    duration: 1000,
})
window.addEventListener('load', function () {
    AOS.refresh();
});


// main slider
const main_swiper = new Swiper('.main-Slider', {
    slidesPerView: "auto",
    direction: 'vertical',
    allowTouchMove: false,
    pagination: {
        el: '.swiper-pagination.main-Pag',
        clickable: true,
    },
    mousewheelControl: true,
    mousewheel: {
        releaseOnEdges: true,
        sensitivity: 6,
    },
    mousewheelForceToAxis: true,
    speed: 1000,
    observeParents: true,
    observeSlideChildren: true,
    observer: true,
    resizeObserver: true,
    on: {
        init: function () {
            let realIndex = this.realIndex;
            console.log(realIndex)

        },
        slideChange: function () {
            // down
            let realIndex = this.realIndex;
            let ani = $(this.slides[realIndex]).find('.ani');
            console.log(realIndex);

            setTimeout(function () {
                $(".ani").removeClass("aos-animate");
                ani.addClass("aos-animate");
            }, 600)

        },
    },
})


main_swiper.on('transitionStart', function () {
    if (main_swiper.realIndex == 0) {
        // section1

        $(".header").addClass("white");
        $(".fixed_btnbox").removeClass("hide");
        $(".main-Pag").addClass("white");

        $(".Section2 .main_contbox").scrollTop(0);

        $(".Section3 .slide1 .slide_cont").removeClass("active");
        $(".Section3 .slide4 .slide_cont").removeClass("active");

        ms3_slider.slideTo(0, 800);
        ms4_slider.slideTo(0, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 1) {
        // section2

        $(".header").removeClass("white");
        $(".fixed_btnbox").addClass("hide");
        $(".main-Pag").addClass("white");

        $(".Section3 .slide1 .slide_cont").removeClass("active");
        $(".Section3 .slide4 .slide_cont").removeClass("active");

        ms3_slider.slideTo(0, 800);
        ms4_slider.slideTo(0, 800);

        main_swiper.mousewheel.disable();

    } else if (main_swiper.realIndex == 2) {
        // section3

        $(".header").removeClass("white");
        $(".fixed_btnbox").addClass("hide");
        $(".main-Pag").addClass("white");

        $(".Section2 .main_contbox").scrollTop($(".Section2 .main_contbox").height());

        $(".Section3 .slide1 .slide_cont").addClass("active");
        $(".Section3 .slide4 .slide_cont").addClass("active");

        ms4_slider.slideTo(0, 800);

        main_swiper.mousewheel.disable();

    } else if (main_swiper.realIndex == 3) {
        // section4

        $(".header").removeClass("white");
        $(".fixed_btnbox").addClass("hide");
        $(".main-Pag").removeClass("white");

        $(".Section2 .main_contbox").scrollTop($(".Section2 .main_contbox").height());

        $(".Section3 .slide1 .slide_cont").removeClass("active");
        $(".Section3 .slide4 .slide_cont").removeClass("active");

        ms3_slider.slideTo(3, 800);

        let ms4_scroll = document.querySelector('.ms4_slider .swiper-wrapper').scrollWidth - document.querySelector('.ms4_slider .swiper-wrapper').clientWidth;
        let currenX = document.querySelector('.ms4_slider .swiper-wrapper').getBoundingClientRect().x - 1;

        function update() {
            let perc = (-currenX / ms4_scroll);
            document.getElementById('ms4_bg').style.opacity = 0.1 + perc
        }

        update();

        main_swiper.mousewheel.disable();

    } else if (main_swiper.realIndex == 4) {
        // section5

        $(".header").removeClass("white");
        $(".fixed_btnbox").addClass("hide");
        $(".main-Pag").addClass("white");

        $(".Section2 .main_contbox").scrollTop($(".Section2 .main_contbox").height());

        ms3_slider.slideTo(3, 800);
        ms4_slider.slideTo(5, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 5) {
        // section6

        $(".header").removeClass("white");
        $(".fixed_btnbox").addClass("hide");
        $(".main-Pag").removeClass("white");

        $(".Section2 .main_contbox").scrollTop($(".Section2 .main_contbox").height());

        ms3_slider.slideTo(3, 800);
        ms4_slider.slideTo(5, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 6) {
        // section7

        $(".header").removeClass("white");
        $(".fixed_btnbox").addClass("hide");
        $(".main-Pag").removeClass("white");

        $(".Section2 .main_contbox").scrollTop($(".Section2 .main_contbox").height());

        ms3_slider.slideTo(3, 800);
        ms4_slider.slideTo(5, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 7) {
        // footer

        $(".header").removeClass("white");
        $(".fixed_btnbox").addClass("hide");
        $(".main-Pag").removeClass("white");

        $(".Section2 .main_contbox").scrollTop($(".Section2 .main_contbox").height());

        ms3_slider.slideTo(3, 800);
        ms4_slider.slideTo(5, 800);

        let m_last_ss = $('.Section1').height() * 6;
        let m_last = $('.footer_height').height() - 1;
        let m_last_h = m_last_ss + m_last;

        $('.main-Slider > .swiper-wrapper').css({
            'transform': 'translate3d(0px, ' + -m_last_h + 'px, 0px)'
        });

        main_swiper.mousewheel.enable();

    }

});


function top_btn() {

    if (screen && screen.width > 1023) {

        main_swiper.slideTo(0, 800);
        $(".Section2 .main_contbox").scrollTop(0);
        ms3_slider.slideTo(0, 800);
        ms4_slider.slideTo(0, 800);

    }

    $('html, body').animate({
        scrollTop: 0
    }, 400);
    return false;
}


const marquee_swiper = new Swiper(".marquee_swiper", {

    spaceBetween: 0,
    speed: 7000,
    autoplay: {
        delay: 1,
    },
    loop: true,
    slidesPerView: 'auto',
    allowTouchMove: false,
    disableOnInteraction: true

});


$(".Section2 .main_contbox").on("mousewheel", function (e) {
    let wheel = e.originalEvent.wheelDelta;
    let elem = $(".Section2 .main_contbox");

    if (main_swiper.realIndex == 1 && elem.scrollTop() == 0 && wheel > 0) {

        main_swiper.mousewheel.enable();
        main_swiper.slideTo(0, 800);

    } else if (main_swiper.realIndex == 1 && elem[0].scrollHeight - elem.scrollTop() <= elem.outerHeight() && wheel < 0) {

        main_swiper.mousewheel.enable();
        main_swiper.slideTo(2, 800);
    }
});


const ms3_slider = new Swiper(".ms3_slider", {

    direction: "vertical",
    slidesPerView: "auto",
    allowTouchMove: false,
    freeMode: true,
    mousewheel: {
        releaseOnEdges: true,
    },

    on: {
        slideChange: function () {
            // down
            let realIndex = this.realIndex;

            if (realIndex == 0) {

                $(".Section3 .m3_center .num_item").removeClass("on")
                $(".Section3 .m3_center .num_item").removeClass("off")

                $(".Section3 .m3_center .num_item.num1").addClass("on")

                $(".Section3 .slide_cont").removeClass("active");
                $(".Section3 .slide1 .slide_cont").addClass("active");

            } else if (realIndex == 1) {

                $(".Section3 .m3_center .num_item").removeClass("on")
                $(".Section3 .m3_center .num_item").removeClass("off")

                $(".Section3 .m3_center .num_item.num1").addClass("off")
                $(".Section3 .m3_center .num_item.num2").addClass("on")

                $(".Section3 .slide_cont").removeClass("active");
                $(".Section3 .slide1 .slide_cont").addClass("active");
                $(".Section3 .slide2 .slide_cont").addClass("active");

            } else if (realIndex == 2) {

                $(".Section3 .m3_center .num_item").removeClass("on")
                $(".Section3 .m3_center .num_item").removeClass("off")

                $(".Section3 .m3_center .num_item.num1").addClass("off")
                $(".Section3 .m3_center .num_item.num2").addClass("off")
                $(".Section3 .m3_center .num_item.num3").addClass("on")

                $(".Section3 .slide_cont").removeClass("active");
                $(".Section3 .slide1 .slide_cont").addClass("active");
                $(".Section3 .slide2 .slide_cont").addClass("active");
                $(".Section3 .slide3 .slide_cont").addClass("active");

            } else if (realIndex == 3) {

                $(".Section3 .m3_center .num_item").removeClass("on")
                $(".Section3 .m3_center .num_item").removeClass("off")

                $(".Section3 .m3_center .num_item.num1").addClass("off")
                $(".Section3 .m3_center .num_item.num3").addClass("off")
                $(".Section3 .m3_center .num_item.num3").addClass("off")
                $(".Section3 .m3_center .num_item.num4").addClass("on")

                $(".Section3 .slide_cont").removeClass("active");
                $(".Section3 .slide1 .slide_cont").addClass("active");
                $(".Section3 .slide2 .slide_cont").addClass("active");
                $(".Section3 .slide3 .slide_cont").addClass("active");
                $(".Section3 .slide4 .slide_cont").addClass("active");

            }

        },
    },

});



window.addEventListener('wheel', function (event) {

    let ms3_scroll = document.querySelector('.ms3_slider .swiper-wrapper').scrollHeight - document.querySelector('.ms3_slider .swiper-wrapper').clientHeight;
    let ms3_gap = (document.body.clientHeight - 100) / 2
    let currenY = document.querySelector('.ms3_slider .swiper-wrapper').getBoundingClientRect().y - document.querySelector('.header').clientHeight - 1;
    let currenY2 = document.querySelector('.ms3_slider .swiper-wrapper').getBoundingClientRect().y - document.querySelector('.header').clientHeight - 1 - ms3_gap;

    if (main_swiper.realIndex == 2 && ms3_slider.isBeginning && event.deltaY < 0 && currenY < 0) {

        main_swiper.mousewheel.enable();
        main_swiper.slideTo(1, 800);

    } else if (main_swiper.realIndex == 2 && ms3_slider.isEnd && event.deltaY > 0 && currenY2 < -ms3_scroll) {

        main_swiper.mousewheel.enable();
        main_swiper.slideTo(3, 800);

    }
});


const m3_s1_slider = new Swiper(".m3_s1_slider", {

    effect: 'fade',
    allowTouchMove: false,
    loop: true,
    speed: 500,

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".m3_s1_slider .swiper-pagination",
        clickable: true,
    },
});


const m3_s2_slider = new Swiper(".m3_s2_slider", {

    effect: 'fade',
    allowTouchMove: false,
    loop: true,
    speed: 500,

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".m3_s2_slider .swiper-pagination",
        clickable: true,
    },
});


const m3_s3_slider = new Swiper(".m3_s3_slider", {

    effect: 'fade',
    allowTouchMove: false,
    loop: true,
    speed: 500,

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".m3_s3_slider .swiper-pagination",
        clickable: true,
    },
});


const laser_slider = new Swiper(".laser_slider", {

    slidesPerView: "auto",
    freeMode: true,
    grabCursor: true,

    speed: 500,

    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: ".laser_sliderbox .swiper-button-next",
        prevEl: ".laser_sliderbox .swiper-button-prev",
    },

    scrollbar: {
        el: ".laser_slider .swiper-scrollbar",
    },
});


// $('.Section3 .pop_icon').mouseover(function () {

//     $("body").addClass("hidden");
//     $(".laser_pop_wrap").addClass("show");

// });


function laser_pop_ope() {
    $("body").addClass("hidden");
    $(".laser_pop_wrap").addClass("show");

}


function laser_pop_clo() {
    $("body").removeClass("hidden");
    $(".laser_pop_wrap").removeClass("show");

}


const ms4_slider = new Swiper(".ms4_slider", {
    slidesPerView: "auto",
    freeMode: true,
    mousewheel: {
        releaseOnEdges: true,
    },

    scrollbar: {
        el: ".ms4_slider .swiper-scrollbar",
    },

});


window.addEventListener('wheel', function (event) {

    let ms4_scroll = document.querySelector('.ms4_slider .swiper-wrapper').scrollWidth - document.querySelector('.ms4_slider .swiper-wrapper').clientWidth;
    let currenX = document.querySelector('.ms4_slider .swiper-wrapper').getBoundingClientRect().x - 1;


    function update() {

        let perc = (-currenX / ms4_scroll);

        document.getElementById('ms4_bg').style.opacity = 0.1 + perc
    }

    update();


    if (main_swiper.realIndex == 3 && ms4_slider.isBeginning && event.deltaY < 0 && currenX < 0) {

        main_swiper.mousewheel.enable();
        main_swiper.slideTo(2, 800);

    } else if (main_swiper.realIndex == 3 && ms4_slider.isEnd && event.deltaY > 0 && currenX < -ms4_scroll) {

        main_swiper.mousewheel.enable();
        main_swiper.slideTo(4, 800);

    }
});


//mouse cursor
const cursor = document.querySelector('#cursor');
const cursorCircle = cursor.querySelector('.cursor_circle');

const mouse = {
    x: -100,
    y: -100
}; // mouse pointer's coordinates
const pos = {
    x: 0,
    y: 0
}; // cursor's coordinates
const speed = 0.1; // between 0 and 1

const updateCoordinates = e => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
}

window.addEventListener('mousemove', updateCoordinates);


function getAngle(diffX, diffY) {
    return Math.atan2(diffY, diffX) * 180 / Math.PI;
}

function getSqueeze(diffX, diffY) {
    const distance = Math.sqrt(
        Math.pow(diffX, 2) + Math.pow(diffY, 2)
    );
    const maxSqueeze = 0.15;
    const accelerator = 1500;
    return Math.min(distance / accelerator, maxSqueeze);
}

const updateCursor = () => {
    const diffX = Math.round(mouse.x - pos.x);
    const diffY = Math.round(mouse.y - pos.y);

    pos.x += diffX * speed;
    pos.y += diffY * speed;

    const translate = 'translate3d(' + pos.x + 'px ,' + pos.y + 'px, 0)';

    cursor.style.transform = translate;

};

function loop() {
    updateCursor();
    requestAnimationFrame(loop);
}

requestAnimationFrame(loop);

const cursorModifiers = document.querySelectorAll('[cursor-class]');

cursorModifiers.forEach(curosrModifier => {
    curosrModifier.addEventListener('mouseenter', function () {
        const className = this.getAttribute('cursor-class');
        cursor.classList.add(className);
    });

    curosrModifier.addEventListener('mouseleave', function () {
        const className = this.getAttribute('cursor-class');
        cursor.classList.remove(className);
    });
});


$('.ms4_slider .m_btn').hover(function () {

    $('#cursor').stop().hide();

}, function () {

    $('#cursor').stop().show();

});

$('.ms4_slider .hover_item').hover(function () {

    $('#cursor').stop().hide();

}, function () {

    $('#cursor').stop().show();

});


const ms5_slider = new Swiper(".ms5_slider", {

    slidesPerView: "auto",
    centeredSlides: true,
    loop: true,

    speed: 1000,

    // autoplay: {
    //     delay: 3500,
    //     disableOnInteraction: false,
    // },

    navigation: {
        nextEl: ".ms5_slider .swiper-button-next",
        prevEl: ".ms5_slider .swiper-button-prev",
    },

});


function alert_ope() {
    $("body").addClass("hidden");
    $(".alert_wrap").addClass("show");

}


function alert_clo() {
    $("body").removeClass("hidden");
    $(".alert_wrap").removeClass("show");

}

$(document).mouseup(function (e) {
    if ($(".alert_wrap").has(e.target).length === 0 && $(".laser_pop_wrap").has(e.target).length === 0) {
        $("body").removeClass("hidden");
        $(".alert_wrap").removeClass("show");
        $(".laser_pop_wrap").removeClass("show");
    }
});



window.addEventListener('wheel', function (event) {
    let $windowTop = $(window).scrollTop();
    let delta = event.deltaY;

    if (!main_swiper.animating && main_swiper.isEnd && $windowTop == 0 && delta > 0) { // down
        main_swiper.mousewheel.disable();
    }

    if (!main_swiper.animating && main_swiper.isEnd && $windowTop == 0 && delta < 0) { // up
        main_swiper.mousewheel.enable();
    }

});



$(function () {
    let didScroll;
    let lastScrollTop = 0;
    let delta = 5; // 이벤트를 발생시킬 스크롤의 이동 범위
    let navbarHeight = $(".header").outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        if (st > navbarHeight) {
            $(".header").removeClass("white");
            $(".fixed_btnbox").addClass("hide");
        }

        if (st < navbarHeight) {
            $(".header").addClass("white");
            $(".fixed_btnbox").removeClass("hide");
        }

        lastScrollTop = st;
    }
})

