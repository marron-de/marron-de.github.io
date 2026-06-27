
// pdf button (인쇄기하기 버튼으로 임시작업)
$('.pdf_btn').on('click', function() {
    window.print();
});


// progress width
const svg = `<svg width="1052" height="40" viewBox="0 0 1052 40" xmlns="http://www.w3.org/2000/svg">
  <rect x="0" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="52.8" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="105.6" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="158.4" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="211.2" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="264" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="316.8" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="369.6" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="422.4" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="475.2" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="528" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="580.8" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="633.6" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="686.4" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="739.2" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="792" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="844.8" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="897.6" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="950.4" width="48.8" height="40" rx="8" fill="black"/>
  <rect x="1003.2" width="48.8" height="40" rx="8" fill="black"/>
</svg>`;
const svgSmall = `<svg width="470" height="20" viewBox="0 0 470 20" xmlns="http://www.w3.org/2000/svg">
  <rect x="0" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="23.7" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="47.4" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="71.1" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="94.8" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="118.5" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="142.2" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="165.9" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="189.6" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="213.3" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="237" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="260.7" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="284.4" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="308.1" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="331.8" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="355.5" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="379.2" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="402.9" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="426.6" width="19.7" height="20" rx="8" fill="black"/>
  <rect x="450.3" width="19.7" height="20" rx="8" fill="black"/>
</svg>`;
const mask = `url("data:image/svg+xml,${encodeURIComponent(svg)}")`;
const maskSmall = `url("data:image/svg+xml,${encodeURIComponent(svgSmall)}")`;
document.querySelectorAll('.step_box .step_progress .progress_box:not(.small) .progress').forEach(el => {
  el.style.maskImage = mask;
  el.style.webkitMaskImage = mask;
});
document.querySelectorAll('.step_box .step_progress .progress_box.small .progress').forEach(el => {
  el.style.maskImage = maskSmall;
  el.style.webkitMaskImage = maskSmall;
});


// video
$('.video_box').each(function() {
    const videoBox = $(this);
    const video = videoBox.find('.video');
    const videoElement = video.get(0);
    const playBtn = videoBox.find('.play_btn');

    function toggleVideo() {
        if (videoElement.paused) {
            videoElement.play();
            videoBox.addClass('play');
        } else {
            videoElement.pause();
            videoBox.removeClass('play');
        }
    }

    playBtn.on('click', toggleVideo);
    video.on('click', toggleVideo);

    video.on('ended', function() {
        videoBox.removeClass('play');
    });
});