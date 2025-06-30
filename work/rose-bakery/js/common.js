function movestep(step) {
	$('.bakery_chapter').removeClass('show');
	$('.bch' + step).addClass('show');
}


function selectbtn() {
    const activeSlide = $(".bakery_swiper .swiper-slide-active"); 
    const number = activeSlide.data("num"); 
    const imgSrc = window.innerWidth > 1080 
	? activeSlide.find(".imgbox img.pc").attr("src") 
	: activeSlide.find(".imgbox img.tablet").attr("src");
    const desc = activeSlide.find(".txtbox .desc").text().trim();
    const title = activeSlide.find(".txtbox .tit").text().trim();

    if (imgSrc) {
        $(".select_img").attr("src", imgSrc); 
        $("#down_img").attr({
            "href": "img/Image" + number + ".png" 
        });
    } else {
        console.error("이미지가 없습니다!");
    }

    $(".select_desc").text(desc); 
    $(".select_tit").text(title).attr("data-text", title);

    $('.bakery_chapter').removeClass('show');
    $('.bch3').addClass('show');
}


function copybtn() {
    const hashElement = document.getElementById("hash_txt"); 
    const hashText = hashElement ? hashElement.innerText.trim() : ""; 
    if (!hashText) {
        alert("복사할 내용이 없습니다.");
        return;
    }
    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(hashText)
            .then(() => {
                alert("복사되었습니다!");
            })
            .catch(err => {
                console.error("복사 실패:", err);
                fallbackCopy(hashText); 
            });
    } else {
        fallbackCopy(hashText);
    }
}


function fallbackCopy(text) {
    const textArea = document.createElement("textarea");
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.select();
    try {
        document.execCommand("copy");
        alert("복사되었습니다!");
    } catch (err) {
        alert("복사 기능을 사용할 수 없습니다.");
    }
    document.body.removeChild(textArea);
}



function downbtn() {
	$("#down_img")[0].click();

    $('.bakery_chapter').removeClass('show');
    $('.bch5').addClass('show');
}


function resetbtn() {
    location.reload(); 
}


const bakery_swiper = new Swiper(".bakery_swiper", {
	loop: true,
	speed: 500,
	effect: 'fade',
	fadeEffect: {
		crossFade: true
	},
	navigation: {
		nextEl: ".bakery_next_btn",
		prevEl: ".bakery_prev_btn",
	},
});