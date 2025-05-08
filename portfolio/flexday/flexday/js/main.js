$(function () {

    var wi = $(window).width();
    if (wi >= 1024) {
        wi = 1024;
    } else {
        wi = 0;
    }

    $(window).resize(function () {
        if ($(this).width() < 1024 && wi != 0) {
            window.location.reload(false);
            wi = 0;
        }
        if ($(this).width() >= 1024 && wi != 1024) {
            window.location.reload(false);
            wi = 1024;
        }
    });

});



// AOS
AOS.init({
    duration: 1000,
})


window.addEventListener('load', function () {
    AOS.refresh();
});


var ww = $(window).width();

if (ww >= 1025) {

    // main slider
    const main_swiper = new Swiper('.main-Slider', {
        slidesPerView: "auto",
        direction: 'vertical',
        touchRatio: 0,
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
                // console.log(realIndex)

                $(".header").addClass("white");
                $(".btn_top").addClass("white");
                $(".btn_top").removeClass("hide");
                $(".main-Pag").addClass("white");
            },

            slideChange: function () {
                let realIndex = this.realIndex;
                let ani = $(this.slides[realIndex]).find('.ani');
                // console.log(realIndex);

                if (realIndex !== 12) {
                    setTimeout(function () {
                        $(".ani").removeClass("aos-animate");
                        ani.addClass("aos-animate");
                    }, 600)
                }
            },

            // slidePrevTransitionStart : function () {
            //    $(".header").removeClass("hide");
            //    $(".btn_top").removeClass("hide");
            // },

            // slideNextTransitionStart: function () {
            //     // console.log("scroll down");
            //     $(".header").addClass("hide");
            //     $(".btn_top").addClass("hide");
            // },

        },
    })


    main_swiper.on('transitionStart', function () {
        if (main_swiper.realIndex == 0) {
            // section1

            $(".header").addClass("white");
            $(".btn_top").addClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").addClass("white");

            ms3_slider.slideTo(0, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 1) {
            // section2

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(0, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 2) {
            // section3

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            main_swiper.mousewheel.disable();

        } else if (main_swiper.realIndex == 3) {
            // section4

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");;
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 4) {
            // section5

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 5) {
            // section6

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 6) {
            // section7

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 7) {
            // section8       

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 8) {
            // section9

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            main_swiper.mousewheel.enable();


        } else if (main_swiper.realIndex == 9) {
            // section10

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 10) {
            // section11       

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 11) {
            // section12  

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").removeClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 12) {
            // footer

            $(".header").removeClass("white");
            $(".btn_top").removeClass("white");
            $(".btn_top").addClass("hide");
            $(".main-Pag").removeClass("white");

            ms3_slider.slideTo(2, 800);

            let m_last_ss = $('.Section1').height() * 11;
            let m_last = $('.f_height').height() - 1;
            let m_last_h = m_last_ss + m_last;

            $('.main-Slider > .swiper-wrapper').css({
                'transform': 'translate3d(0px, ' + -m_last_h + 'px, 0px)'
            });

            main_swiper.mousewheel.enable();

        }

    });


    function main_move(i) {
        main_swiper.slideTo(i, 800);

        if (i == 0 || i == 1 | i == 2) {
            ms3_slider.slideTo(0, 800);
        } else {
            ms3_slider.slideTo(2, 800);
        }
    }


    function top_btn() {
        main_swiper.slideTo(0, 800);
        ms3_slider.slideTo(0, 800);
    }


    const ms3_slider = new Swiper(".ms3_slider", {
        slidesPerView: "auto",
        freeMode: true,
        mousewheel: {
            releaseOnEdges: true,
        },
    });


    window.addEventListener('wheel', function (event) {

        let ms3_scroll = document.querySelector('.ms3_slider .swiper-wrapper').scrollWidth - document.querySelector('.ms3_slider .swiper-wrapper').clientWidth;
        let currenX = document.querySelector('.ms3_slider .swiper-wrapper').getBoundingClientRect().x - 1;

        if (main_swiper.realIndex == 2 && ms3_slider.isBeginning && event.deltaY < 0 && currenX < 0) {

            main_swiper.mousewheel.enable();

        } else if (main_swiper.realIndex == 2 && ms3_slider.isEnd && event.deltaY > 0 && currenX < -ms3_scroll) {

            main_swiper.mousewheel.enable();

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

    $(document).mouseup(function (e) {
        var LayerPopup = $(".swal2-popup");
        if (LayerPopup.has(e.target).length === 0) {
            Swal.close()
            main_swiper.mousewheel.enable();
        }
    });

    function SendMail() {
        const checkbox = document.getElementById('termCheck');

        main_swiper.mousewheel.disable();

        if (form.name.value == '') {

            form.name.focus();
            Swal.fire({
                text: '회사/담당자명을 입력하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    main_swiper.mousewheel.enable();
                } else {
                    return;
                }
            })
            return;
        }

        if (form.number.value == '') {

            form.number.focus();
            Swal.fire({
                text: '연락처를 입력하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    main_swiper.mousewheel.enable();
                } else {
                    return;
                }
            })
            return;
        }

        if (form.mail.value == '') {

            form.mail.focus();
            Swal.fire({
                text: '이메일을 입력하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    main_swiper.mousewheel.enable();
                } else {
                    return;
                }
            })
            return;
        }

        if (form.solution.value == '') {

            Swal.fire({
                text: '관심있는 솔루션을 선택하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    main_swiper.mousewheel.enable();
                } else {
                    return;
                }
            })
            return;
        }

        if (form.content.value == '') {

            form.content.focus();
            Swal.fire({
                text: '문의사항을 입력하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    main_swiper.mousewheel.enable();
                } else {
                    return;
                }
            })
            return;
        }

        if (!checkbox.checked) {

            Swal.fire({
                text: '개인정보 수집 이용에 동의해주세요.',
                confirmButtonText: '확인',
                backdrop: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    main_swiper.mousewheel.enable();
                } else {
                    return;
                }
            })
            return;

        } else {

            Swal.fire({
                text: '도입문의 접수하시겠습니까?',
                confirmButtonText: '확인',
                backdrop: false,
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('sendmail').submit();

                    // Swal.fire({
                    //     text: '접수되었습니다. (임시)',
                    //     confirmButtonText: '확인',
                    //     backdrop: false,
                    // }).then((result) => {
                    //     if (result.isConfirmed) {
                    //         main_swiper.mousewheel.enable();
                    //     } else {
                    //         return;
                    //     }
                    // })
                    // return;

                } else {
                    return;
                }
            })

        }
    }


} else if (ww < 1025) {


    function main_move(i) {

        $("body").removeClass("hidden");
        $(".header").removeClass("open");
        $(".nav_box").removeClass("open");
        $(".nav_icon").removeClass("open");

    }


    function top_btn(i) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        },400);
    }


    $(document).mouseup(function (e) {
        var LayerPopup = $(".swal2-popup");
        if (LayerPopup.has(e.target).length === 0) {
            Swal.close()
        }
    });



    function SendMail() {
        const checkbox = document.getElementById('termCheck');

        if (form.name.value == '') {

            form.name.focus();
            Swal.fire({
                text: '회사/담당자명을 입력하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            })
            return;
        }

        if (form.number.value == '') {

            form.number.focus();
            Swal.fire({
                text: '연락처를 입력하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            })
            return;
        }

        if (form.mail.value == '') {

            form.mail.focus();
            Swal.fire({
                text: '이메일을 입력하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            })
            return;
        }

        if (form.solution.value == '') {

            Swal.fire({
                text: '관심있는 솔루션을 선택하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            })
            return;;
        }

        if (form.content.value == '') {

            form.content.focus();
            Swal.fire({
                text: '문의사항을 입력하여 주시기 바랍니다.',
                confirmButtonText: '확인',
                backdrop: false,
            })
            return;
        }

        if (!checkbox.checked) {

            Swal.fire({
                text: '개인정보 수집 이용에 동의해주세요.',
                confirmButtonText: '확인',
                backdrop: false,
            })
            return;

        } else {

            Swal.fire({
                text: '도입문의 접수하시겠습니까?',
                confirmButtonText: '확인',
                backdrop: false,
            }).then((result) => {
                if (result.isConfirmed) {

                    // 기능 제거 
                    // form action 추가해야함
                    // document.getElementById('sendmail').submit();

                    Swal.fire({
                        text: '접수되었습니다.',
                        confirmButtonText: '확인',
                        backdrop: false,
                    })
                    return;

                } else {
                    return;
                }
            })

        }
    }


}




const ms11_slider = new Swiper(".ms11_slider", {

    slidesPerView: 1,
    grabCursor: true,
    speed: 800,

    pagination: {
        el: '.Section11 .swiper-pagination',
        type: 'fraction',
        formatFractionCurrent: function (number) {
            return ('0' + number).slice(-2);
        },
        formatFractionTotal: function (number) {
            return ('0' + number).slice(-2);
        },
        renderFraction: function (currentClass, totalClass) {
            return '<span class="' + currentClass + '"></span>' +
                ' / ' +
                '<span class="' + totalClass + '"></span>';
        }
    },

    navigation: {
        nextEl: ".Section11 .swiper-button-next",
        prevEl: ".Section11 .swiper-button-prev",
    },

    breakpoints: {
        1025: {
            slidesPerView: 2,
        },
    }

});



function SendMail() {
    const checkbox = document.getElementById('termCheck');

    main_swiper.mousewheel.disable();

    if (form.name.value == '') {

        form.name.focus();
        Swal.fire({
            text: '회사/담당자명을 입력하여 주시기 바랍니다.',
            confirmButtonText: '확인',
            backdrop: false,
        }).then((result) => {
            if (result.isConfirmed) {
                main_swiper.mousewheel.enable();
            } else {
                return;
            }
        })
        return;
    }

    if (form.number.value == '') {

        form.number.focus();
        Swal.fire({
            text: '연락처를 입력하여 주시기 바랍니다.',
            confirmButtonText: '확인',
            backdrop: false,
        }).then((result) => {
            if (result.isConfirmed) {
                main_swiper.mousewheel.enable();
            } else {
                return;
            }
        })
        return;
    }

    if (form.mail.value == '') {

        form.mail.focus();
        Swal.fire({
            text: '이메일을 입력하여 주시기 바랍니다.',
            confirmButtonText: '확인',
            backdrop: false,
        }).then((result) => {
            if (result.isConfirmed) {
                main_swiper.mousewheel.enable();
            } else {
                return;
            }
        })
        return;
    }

    if (form.solution.value == '') {

        Swal.fire({
            text: '관심있는 솔루션을 선택하여 주시기 바랍니다.',
            confirmButtonText: '확인',
            backdrop: false,
        }).then((result) => {
            if (result.isConfirmed) {
                main_swiper.mousewheel.enable();
            } else {
                return;
            }
        })
        return;
    }

    if (form.content.value == '') {

        form.content.focus();
        Swal.fire({
            text: '문의사항을 입력하여 주시기 바랍니다.',
            confirmButtonText: '확인',
            backdrop: false,
        }).then((result) => {
            if (result.isConfirmed) {
                main_swiper.mousewheel.enable();
            } else {
                return;
            }
        })
        return;
    }

    if (!checkbox.checked) {

        Swal.fire({
            text: '개인정보 수집 이용에 동의해주세요.',
            confirmButtonText: '확인',
            backdrop: false,
        }).then((result) => {
            if (result.isConfirmed) {
                main_swiper.mousewheel.enable();
            } else {
                return;
            }
        })
        return;

    } else {

        Swal.fire({
            text: '도입문의 접수하시겠습니까?',
            confirmButtonText: '확인',
            backdrop: false,
        }).then((result) => {
            if (result.isConfirmed) {
                // form.submit();

                Swal.fire({
                    text: '접수되었습니다. (임시)',
                    confirmButtonText: '확인',
                    backdrop: false,
                }).then((result) => {
                    if (result.isConfirmed) {
                        main_swiper.mousewheel.enable();
                    } else {
                        return;
                    }
                })
                return;

            } else {
                return;
            }
        })

    }
}