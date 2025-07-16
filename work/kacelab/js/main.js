gsap.registerPlugin(ScrollTrigger);
scroller.on("scroll", ScrollTrigger.update);

ScrollTrigger.scrollerProxy(pageContainer, {
  scrollTop(value) {
    return arguments.length ?
      scroller.scrollTo(value, 0, 0) :
      scroller.scroll.instance.scroll.y;
  },
  getBoundingClientRect() {
    return {
      left: 0,
      top: 0,
      width: window.innerWidth,
      height: window.innerHeight
    };
  },
  pinType: pageContainer.style.transform ? "transform" : "fixed"
});


setTimeout(function () {
  $(".ms1").addClass("animate");
}, 500);



function Mobile() {
  return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

console.log(Mobile()) 

window.addEventListener("load", function () {

  $(document).ready(function () {	

    if (Mobile() || (window.matchMedia("(orientation: landscape) and (hover: none) and (pointer: coarse)").matches) || window.innerWidth <= 1023) {
      return;
    }

    gsap.to(".ms1 .ms1_vidwrap", {
      scrollTrigger: {
        scroller: pageContainer, //locomotive-scroll
        trigger: "#ms1_pin",
        pin: true,
        start: "top top",
        end: "bottom bottom",
        scrub: 0.3,
      },
      width: "calc(100% - 8rem)",
      ease: "power2.inOut",
    });

    gsap.to(".ms2 .ms2_contbox", {
      scrollTrigger: {
        scroller: pageContainer, //locomotive-scroll
        trigger: "#ms2_matter",
        start: "center bottom",
        end: "bottom bottom",
        scrub: true,
        onEnter: function () {
          setTimeout(function () {
            World.add(engine.world, [
              UXUI, Research, Development, QATest, Creative, Accessibility, Standards, Design, Marketing, Strategy, Analytics, Contents
            ]);
            setTimeout(function () {
              Matter.Body.setPosition(ceiling, {
                x: ceiling.position.x,
                y: 0
              });
              Render.world(render);
            }, 3000);
          }, 2000);
        }
      }
    });
      
    let ms3_pinWrap = document.querySelector(".ms3_pin .pin_wrap");
    let ms3_pinWrapWidth = ms3_pinWrap.offsetWidth;
    let ms3_ScrollLength = ms3_pinWrapWidth - window.innerWidth;
    
    gsap.to(".ms3_pin .pin_wrap", {
      scrollTrigger: {
        scroller: pageContainer, //locomotive-scroll
        scrub: true,
        trigger: "#ms3_pin",
        pin: true,
        start: "top top",
        end: () => `+=${ms3_ScrollLength + window.innerWidth}`,
        onUpdate: () => {
          // pin_wrap의 x 변화에 따라 ms3_txtbox의 위치를 조정합니다.
          gsap.set(".ms3_pin .ms3_txtbox", {
            x: -gsap.getProperty(".ms3_pin .pin_wrap", "x")
          });
        }
      },
      x: -ms3_ScrollLength,
      ease: "none"
    });

    //locomotive-scroll
    ScrollTrigger.addEventListener("refresh", () => scroller.update());
    ScrollTrigger.refresh();
  });

});


// typing effect
function typeEffect(element, textArray, speed) {
  let currentTextIndex = 0;
  let currentText = '';
  let isDeleting = false;
  let typingTimeout;

  function type() {
    const text = textArray[currentTextIndex];
    const typingSpeed = isDeleting ? speed / 2 : speed;

    if (!isDeleting && currentText.length === text.length) {
      isDeleting = true;
      clearTimeout(typingTimeout);
      typingTimeout = setTimeout(type, 1000);
    } else if (isDeleting && currentText.length === 0) {
      isDeleting = false;
      currentTextIndex = (currentTextIndex + 1) % textArray.length;
      clearTimeout(typingTimeout);
      typingTimeout = setTimeout(type, speed);
    } else {
      currentText = isDeleting ? text.substring(0, currentText.length - 1) : text.substring(0, currentText.length + 1);
      element.textContent = currentText;
      typingTimeout = setTimeout(type, typingSpeed);
    }
  }

  type();
}

const typingElements = document.querySelectorAll(".typing");
setTimeout(() => {
  typingElements.forEach(element => {
    const text = element.getAttribute("data-text");
    const textArray = text.split(",");
    typeEffect(element, textArray, 60);
  });
}, 2080);


const pc_member_list = new Swiper('.pc_view .member_list', {
  speed: 500,
  loop: true,
  slidesPerView: 'auto',
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});

const pc_member_pic = new Swiper('.pc_view .member_pic', {
  effect: 'fade',
  loop: true,
  speed: 500,
  thumbs: {
    swiper: pc_member_list
  },
  navigation: {
    nextEl: '.member_listbox .next_btn',
    prevEl: '.member_listbox .prev_btn',
  },
});

const mob_member_list = new Swiper('.mob_view .member_list', {
  speed: 500,
  loop: true,
  slidesPerView: 'auto',
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});

const mob_member_pic = new Swiper('.mob_view .member_pic', {
  effect: 'fade',
  loop: true,
  speed: 500,
  thumbs: {
    swiper: mob_member_list
  },
  navigation: {
    nextEl: '.member_listbox .next_btn',
    prevEl: '.member_listbox .prev_btn',
  },
});

const ms3_swiper = new Swiper('.ms3_swiper', {
  slidesPerView: 'auto',
  freeMode: true,
  speed: 500,

});




const ms2_video = document.getElementById("ms2_video");
const ms2_videobox = document.getElementById("ms2_videobox");

ms2_videobox.addEventListener("mouseenter", playVideo);
ms2_videobox.addEventListener("mouseleave", pauseVideo);

function playVideo() {
  ms2_video.play();
}

function pauseVideo() {
  ms2_video.pause();
}

const topRightBottom = document.querySelector('.ms2 .top_right_item.bottom');

topRightBottom.addEventListener('mouseenter', function() {
  topRightBottom.classList.add('hover');
});

topRightBottom.addEventListener('mouseleave', function() {
  topRightBottom.classList.remove('hover', 'hover1', 'hover2', 'hover3', 'hover4');
});

const itemElements = topRightBottom.querySelectorAll('.item');

itemElements.forEach((item, index) => {
  item.addEventListener('mouseenter', function() {
    const hoverClass = topRightBottom.classList.contains('hover');
    if (hoverClass) {
      topRightBottom.classList.add(`hover${index + 1}`);
      item.classList.add('on');
    }
  });

  item.addEventListener('mouseleave', function() {
    topRightBottom.classList.remove(`hover${index + 1}`);
    item.classList.remove('on');
  });
});


function updateDateTime() {
  const now = luxon.DateTime.local();

  const dayOfWeek = now.toFormat('EEE'); 
  const dayOfMonth = now.toFormat('dd');
  const hours = now.toFormat('HH');
  const minutes = now.toFormat('mm');

  const dayOfWeekElement = document.querySelector('.dayOfWeek');
  dayOfWeekElement.textContent = dayOfWeek;

  const dayOfMonthElement = document.querySelector('.dayOfMonth');
  dayOfMonthElement.textContent = dayOfMonth;

  const hoursElement = document.querySelector('.currentTime .time_h');
  hoursElement.textContent = hours;

  const minutesElement = document.querySelector('.currentTime .time_m');
  minutesElement.textContent = minutes;
  
}

setInterval(updateDateTime, 1000);