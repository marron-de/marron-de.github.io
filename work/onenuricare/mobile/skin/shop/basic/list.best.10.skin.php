<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_MSHOP_SKIN_URL.'/style.css">', 0);
?>
<?php
if($this->total_count > 0) {
    $li_width = intval(100 / $this->list_mod);
    $li_width_style = ' style="width:'.$li_width.'%;"';
    $k = 1;
    $slide_btn = '<button type="button" class="bst_sl">'.$k.'번째 리스트</button>';
    for ($i=0; $row=sql_fetch_array($result); $i++) {
        if($i == 0) {
            echo '<section id="best_item">'.PHP_EOL;
            echo '<h2><span>베스트 모델</span></h2>'.PHP_EOL;
			echo '<div class="swiper-best">'.PHP_EOL;
            echo '<div class="sct_best owl-carousel swiper-wrapper">'.PHP_EOL;
        }

        if($i > 0 && ($i % $this->list_mod == 0)) {
            echo '</ul>'.PHP_EOL;
            echo '<div class="sct_best owl-carousel">'.PHP_EOL;
            $k++;
            $slide_btn .= '<button type="button">'.$k.'번째 리스트</button>';
        }

        echo '<div class="best_wr swiper-slide">'.PHP_EOL;

        if ($this->href) {
            echo '<div class="sct_img"><a href="'.$this->href.$row['it_id'].'" class="sct_a">'.PHP_EOL;
        }

        if ($this->view_it_img) {
            //echo get_it_image($row['it_id'], $this->img_width, $this->img_height, '', '', stripslashes($row['it_name'])).PHP_EOL;
			echo "<img src=\"".G5_DATA_URL."/item/{$row['it_img1']}\" alt=\"".stripslashes($row['it_name'])."\" style=\"width:405px;object-fit:contain;\">";
        }

        if ($this->href) {
            echo '</a></div>'.PHP_EOL;
        }

        if ($this->view_it_id) {
            echo '<div class="sct_id">&lt;'.stripslashes($row['it_id']).'&gt;</div>'.PHP_EOL;
        }

        if ($this->href) {
            echo '<div class="sct_txt"><div class="sct_icon_wr"><div class="sit_icon"><span class="icon icon_hit">베스트</span></div></div><a href="'.$this->href.$row['it_id'].'" class="sct_a">'.PHP_EOL;
        }

        if ($this->view_it_name) {
        echo '<div class="it_name">'.stripslashes($row['it_name']).'</div>';
        }
		if($row['it_name_sub']){
			echo '<div class="it_basic">'.$row['it_name_sub'].'</div>';
		}

        if ($this->href) {
            echo '</a></div>'.PHP_EOL;
        }

        if ($this->view_it_price) {
			$it_price=get_price($row);
			$it_price2=round($it_price*0.015)*10;
            //echo '<div class="sct_cost">'.display_price(get_price($row), $row['it_tel_inq']).'</div>'.PHP_EOL;
			echo '<div class="assist_wrap">'.PHP_EOL;
			echo '<table>';
			echo '<tr><!--<th>공단고시가</th>--><td class="price1">'.display_price($it_price).'</td></tr>';
			echo '<tr><th>본인부담금 (15% 기준)</th><td class="price2">'.display_price($it_price2).'</td></tr>';
			echo '</table>';
			echo '</div>'.PHP_EOL;
            if($row['it_1']){
                echo '<div class="it_txt"><i data-lucide="circle-alert" class="svgicon"></i><span class="txt">'.$row['it_1'].'</span></div>';
            }
        }

        echo '</div>'.PHP_EOL;
    }

    if($i > 0) {
        echo '</div>'.PHP_EOL;
		echo '<div class="swiper-pagination pagination"></div>'.PHP_EOL;
    echo '<div class="swiper-button-next next_btn"><i class="ph ph-caret-right"></i></div>'.PHP_EOL;
    echo '<div class="swiper-button-prev prev_btn"><i class="ph ph-caret-left"></i></div>'.PHP_EOL;
		echo '</div>'.PHP_EOL;
        echo '</section>'.PHP_EOL;
    }
?>
<link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/swiper.css">
<script src="<?php echo G5_THEME_JS_URL; ?>/swiper.min.js"></script>
<style>
#best_item{padding:20px 0 50px;}
.swiper-best{overflow:hidden;}
.swiper-pagination-fraction, .swiper-pagination-custom, .swiper-container-horizontal > .swiper-pagination-bullets {margin: 10px auto;}
#best_item .sct_img img{height:100%;}
@media (max-width: 640px){
	#best_item .sct_img img{height: 70vw;}
}
</style>

<script>
/**
$(".sct_best").owlCarousel({
    loop:true,
	autoplay:true,
	autoplayTimeout:5000,
    margin:10,
    nav:false,
    responsiveClass:true,
    dots:true,
    responsive:{
        0:{
            items:2,
        },

        640:{
            items:2,
        },
        1000:{
            items:4,
            
        }
    }
});
*/
var swiper = new Swiper('.swiper-best', {
	// autoHeight: true,
	slidesPerView: 4,
	spaceBetween: 24,
	//loop: true,
	speed:500,
	//effect: 'fade',
	autoplay: {
			delay:5000,
			disableOnInteraction: false,
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},
	navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
	},
	breakpoints: {
		640: {
			slidesPerView: 2,
			spaceBetween: 16,
		},
		768: {
			slidesPerView: 3,
			spaceBetween: 40,
		},
		1024: {
			slidesPerView: 3,
			spaceBetween: 50,
		},
	},
});

</script>
<?php
}
?>