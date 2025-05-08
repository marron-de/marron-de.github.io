// intro
let tl = gsap.timeline({
    ease: "power2"
});

tl.
add(function () {
        $(".ms1_video_mob").get(0).pause();
        $(".ms1_video_pc").get(0).pause();
    })
    .to(".intro_logo", {
        duration: 2,
        opacity: 1,
    })
    .to(".intro_logo", {
        duration: 1,
        scale: 1,
    })
    .to(".skip_btn", {
        duration: 1.2,
        opacity: 1,
    })
    .to(".intro_logo", {
        duration: 2,
        top: "8%",
    })
    .to(".intro_tit", {
        duration: 1.2,
        y: 0,
        opacity: 1
    })
    .to(".intro_cont", {
        duration: 1.2,
        y: 0,
        opacity: 1
    })
    .add(function () {
        num_count();
    })
    .add(function () {
        setTimeout(function () {
            intro_hide();
        }, 4000);
    })

function num_count() {

    let num1 = $(".count1").attr('data-count');
    let num2 = $(".count2").attr('data-count');
    let num3 = $(".count3").attr('data-count');
    let num4 = $(".count4").attr('data-count');

    let comma_separator = $.animateNumber.numberStepFactories.separator(',')

    $('.count1').animateNumber({
        number: num1,
    }, {
        easing: 'swing',
        duration: 1000
    });

    $('.count2').animateNumber({
        number: num2,
        numberStep: comma_separator
    }, {
        easing: 'swing',
        duration: 1000
    });

    $('.count3').animateNumber({
        number: num3,
        numberStep: comma_separator
    }, {
        easing: 'swing',
        duration: 1000
    });

    $('.count4').animateNumber({
        number: num4,
        numberStep: comma_separator
    }, {
        easing: 'swing',
        duration: 1000
    });

}

function intro_hide() {
    $(".loading_wrap").addClass("hide")
    $(".wrap").removeClass("hide")

    setTimeout(function () {
        $(".ms1_video_pc").get(0).play();
        $(".ms1_video_mob").get(0).play();
    }, 600);

    $('#nav li').eq(0).addClass("show");
    $('#nav li').eq(0).children('.nav_ul').addClass("on");
    $('#nav li').eq(0).children('.nav_ul').css({
        "display": "block"
    });

}



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
        $(".fixed_btnbox").removeClass("color");
        $(".fixed_btnbox").removeClass("top");
        $(".main-Pag").addClass("white");

        $('.ms4_video_wrap').stop().removeClass('play');
        $(".ms4_video_pc").get(0).pause();

        $(".ms5_video").get(0).pause();

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 1) {
        // section2

        $(".header").removeClass("white");
        $(".fixed_btnbox").removeClass("hide");
        $(".fixed_btnbox").addClass("color");
        $(".fixed_btnbox").addClass("top");
        $(".main-Pag").addClass("white");

        $('.ms4_video_wrap').stop().removeClass('play');
        $(".ms4_video_pc").get(0).pause();

        $(".ms5_video").get(0).pause();

        ms6_slider.slideTo(0, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 2) {
        // section3

        $(".header").removeClass("white");
        $(".fixed_btnbox").removeClass("hide");
        $(".fixed_btnbox").addClass("color");
        $(".fixed_btnbox").addClass("top");
        $(".main-Pag").addClass("white");

        $('.ms4_video_wrap').stop().removeClass('play');
        $(".ms4_video_pc").get(0).pause();

        $(".ms5_video").get(0).pause();

        ms6_slider.slideTo(0, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 3) {
        // section4

        $(".header").removeClass("white");
        $(".fixed_btnbox").removeClass("hide");
        $(".fixed_btnbox").addClass("color");
        $(".fixed_btnbox").addClass("top");
        $(".main-Pag").removeClass("white");

        $('.ms4_video_wrap').stop().addClass('play');

        setTimeout(function () {
            $(".ms4_video_pc").get(0).play();
        }, 1800);

        let vid4 = document.querySelector(".ms4_video_pc")

        vid4.addEventListener('ended', function () {
            $('.ms4_video_wrap').stop().removeClass('play');
        });

        $(".ms5_video").get(0).pause();

        ms6_slider.slideTo(0, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 4) {
        // section5

        $(".header").removeClass("white");
        $(".fixed_btnbox").removeClass("hide");
        $(".fixed_btnbox").addClass("color");
        $(".fixed_btnbox").addClass("top");
        $(".main-Pag").removeClass("white");

        $('.ms4_video_wrap').stop().removeClass('play');
        $(".ms4_video_pc").get(0).pause();

        setTimeout(function () {
            $(".ms5_video").get(0).play();
        }, 1800);


        ms6_slider.slideTo(0, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 5) {
        // section6

        $(".header").removeClass("white");
        $(".fixed_btnbox").removeClass("hide");
        $(".fixed_btnbox").addClass("color");
        $(".fixed_btnbox").addClass("top");
        $(".main-Pag").removeClass("white");

        $('.ms4_video_wrap').stop().removeClass('play');
        $(".ms4_video_pc").get(0).pause();

        $(".ms5_video").get(0).pause();

        main_swiper.mousewheel.disable();

    } else if (main_swiper.realIndex == 6) {
        // section7

        $(".header").removeClass("white");
        $(".fixed_btnbox").removeClass("hide");
        $(".fixed_btnbox").addClass("color");
        $(".fixed_btnbox").addClass("top");
        $(".main-Pag").addClass("white");

        $('.ms4_video_wrap').stop().removeClass('play');
        $(".ms4_video_pc").get(0).pause();

        $(".ms5_video").get(0).pause();

        ms6_slider.slideTo(5, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 7) {
        // section8

        $(".header").removeClass("white");
        $(".fixed_btnbox").removeClass("hide");
        $(".fixed_btnbox").addClass("color");
        $(".fixed_btnbox").addClass("top");
        $(".main-Pag").removeClass("white");

        $('.ms4_video_wrap').stop().removeClass('play');
        $(".ms4_video_pc").get(0).pause();

        $(".ms5_video").get(0).pause();

        ms6_slider.slideTo(5, 800);

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 8) {
        // footer

        $(".header").removeClass("white");
        $(".fixed_btnbox").addClass("hide");
        $(".fixed_btnbox").addClass("color");
        $(".fixed_btnbox").removeClass("top");
        $(".main-Pag").removeClass("white");

        $('.ms4_video_wrap').stop().removeClass('play');
        $(".ms4_video_pc").get(0).pause();

        $(".ms5_video").get(0).pause();

        ms6_slider.slideTo(5, 800);

        let m_last_ss = $('.Section1').height() * 7;
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
        ms6_slider.slideTo(0, 800);

    }

    $('html, body').animate({
        scrollTop: 0
    }, 400);
    return false;
}


const ms2_slider1 = new Swiper(".ms2_slider1", {

    slidesPerView: 1,
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,

    speed: 800,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: '.ms2_slider1 .swiper-button-next',
        prevEl: '.ms2_slider1 .swiper-button-prev',
    },

});


const ms2_slider2 = new Swiper(".ms2_slider2", {

    slidesPerView: 1,
    loop: true,
    loopAdditionalSlides: 1,
    observer: true,
    observeParents: true,

    speed: 800,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: '.ms2_slider2 .swiper-button-next',
        prevEl: '.ms2_slider2 .swiper-button-prev',
    },

});


$('.ms3_img_txt').mouseover(function () {
    let item = $('.ms3_img_txt')
    let bgitem = $('.ms3_bgbox > img')
    let idx = item.index(this);

    item.removeClass("on")
    $(this).addClass('on');

    bgitem.removeClass("on")
    bgitem.eq(idx).addClass('on');
});


$('.pc_main .ms5_txtbox .txt_item').mouseover(function () {
    let item = $('.ms5_txtbox .txt_item')
    let bgitem = $('.ms5_imgbox > .img')
    let idx = item.index(this);

    item.removeClass("on")
    $(this).addClass('on');

    bgitem.removeClass("on")
    bgitem.eq(idx).addClass('on');

    if (idx == 1) {

        let vid = document.querySelector(".ms5_video")

        $(".ms5_video").get(0).play();

        vid.addEventListener('ended', function () {
            setTimeout(function () {
                $(".ms5_video").get(0).play();
            }, 300);
        });

    } else if (idx == 3) {

        let vid = document.querySelector(".ms5_video2")

        $(".ms5_video2").get(0).play();

        vid.addEventListener('ended', function () {
            setTimeout(function () {
                $(".ms5_video2").get(0).play();
            }, 300);
        });

    } else {

        $(".ms5_video").get(0).pause();

    }
});



const ms6_slider = new Swiper(".ms6_slider", {
    slidesPerView: "auto",
    freeMode: true,
    mousewheel: {
        releaseOnEdges: true,
    },

});

window.addEventListener('wheel', function (event) {

    let ms6_scroll = document.querySelector('.ms6_slider .swiper-wrapper').scrollWidth - document.querySelector('.ms6_slider .swiper-wrapper').clientWidth;
    let currenX = document.querySelector('.ms6_slider .swiper-wrapper').getBoundingClientRect().x - 1;


    if (main_swiper.realIndex == 5 && ms6_slider.isBeginning && event.deltaY < 0 && currenX < 0) {

        main_swiper.mousewheel.enable();

    } else if (main_swiper.realIndex == 5 && ms6_slider.isEnd && event.deltaY > 0 && currenX < -ms6_scroll) {

        main_swiper.mousewheel.enable();

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


$('.ms6_slider .m_btn').hover(function () {
    $('#cursor').stop().hide();
}, function () {
    $('#cursor').stop().show();
});


$('.ms7_item').mouseover(function () {
    let item = $('.ms7_item')

    item.removeClass("on")
    $(this).addClass('on');

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
            $(".header").addClass("down")
            $(".fixed_btnbox").addClass("top").addClass("color")
        }

        if (st < navbarHeight) {
            $(".header").removeClass("down")
            $(".fixed_btnbox").removeClass("top").removeClass("color")
        }

        lastScrollTop = st;
    }
})


$(document).ready(function () {
    $(".pc_main .play_btn").click(function () {
        $(".pc_main .ms4_video_pc").get(0).play();
        $(".pc_main .play_btn").addClass("hide");
        $('.ms4_video_wrap').stop().addClass('play');
    })

    $(".mob_main .play_btn").click(function () {
        $(".mob_main .ms4_video_mob").get(0).play();
        $(".mob_main .play_btn").addClass("hide");
    })
})




const mob_ms5_txtList = new Swiper('.mob_ms5_txt', {
    slidesPerView: 4,
    spaceBetween: 0,

});

const mob_ms5_slider = new Swiper('.mob_ms5_slider', {

    effect: 'fade',
    loop: true,
    allowTouchMove: false,

    speed: 500,

    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    thumbs: {
        swiper: mob_ms5_txtList,
    },


});