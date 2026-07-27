<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

function get_mshop_category($ca_id, $len)
{
    global $g5;

    $sql = " select ca_id, ca_name from {$g5['g5_shop_category_table']}
                where ca_use = '1' ";
    if($ca_id)
        $sql .= " and ca_id like '$ca_id%' ";
    $sql .= " and length(ca_id) = '$len' order by ca_order, ca_id ";

    return $sql;
}

// 쿠폰
$cp_count = 0;
$sql = " select cp_id
            from {$g5['g5_shop_coupon_table']}
            where mb_id IN ( '{$member['mb_id']}', '전체회원' )
              and cp_start <= '".G5_TIME_YMD."'
              and cp_end >= '".G5_TIME_YMD."' ";
$res = sql_query($sql);

for($k=0; $cp=sql_fetch_array($res); $k++) {
    if(!is_used_coupon($member['mb_id'], $cp['cp_id']))
        $cp_count++;
}
?>
<div id="category">
    <div class="ct_wr">
        <?php if ($is_member) { ?>
        <div class="ct_login ct_logout">
            <ul class="ct-btn">
                <!--<li><a href="--><?php //echo G5_BBS_URL; ?><!--/member_confirm.php?url=register_form.php" class="btn_1">정보수정</a></li>-->
                <li><a href="<?php echo G5_BBS_URL; ?>/logout.php?url=shop"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 18H6V20H18V4H6V6H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V18ZM6 11H13V13H6V16L1 12L6 8V11Z"></path></svg>로그아웃</a></li>
            </ul>
            <h2><?php echo $member['mb_id'] ? $member['mb_name'] : '비회원'; ?></strong>님</h2>
            <ul class="ct-info">

                <!--<li>-->
                <!--    <a href="--><?php //echo G5_SHOP_URL; ?><!--/coupon.php" target="_blank" class="win_coupon">-->
                <!--        <img src="--><?php //echo G5_THEME_URL; ?><!--/mobile/shop/img/icon-cp.png">-->
                <!--        <strong>쿠폰</strong>-->
                <!--        <span class="num">--><?php //echo number_format($cp_count); ?><!--</span>-->
                <!--    </a>-->
                <!--</li>-->
                <!--<li>-->
                <!--    <a href="--><?php //echo G5_BBS_URL; ?><!--/point.php" target="_blank" class="win_point">-->
                <!--        <img src="--><?php //echo G5_THEME_URL; ?><!--/mobile/shop/img/icon-po.png">-->
                <!--        <strong>포인트</strong>-->
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="<?php echo G5_SHOP_URL; ?>/mypage.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path></svg>
                        <strong>마이페이지</strong>
                    </a>
                </li>
                <li>
                    <a href="<?php echo G5_SHOP_URL; ?>/cart.php">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4.00488 16V4H2.00488V2H5.00488C5.55717 2 6.00488 2.44772 6.00488 3V15H18.4433L20.4433 7H8.00488V5H21.7241C22.2764 5 22.7241 5.44772 22.7241 6C22.7241 6.08176 22.7141 6.16322 22.6942 6.24254L20.1942 16.2425C20.083 16.6877 19.683 17 19.2241 17H5.00488C4.4526 17 4.00488 16.5523 4.00488 16ZM6.00488 23C4.90031 23 4.00488 22.1046 4.00488 21C4.00488 19.8954 4.90031 19 6.00488 19C7.10945 19 8.00488 19.8954 8.00488 21C8.00488 22.1046 7.10945 23 6.00488 23ZM18.0049 23C16.9003 23 16.0049 22.1046 16.0049 21C16.0049 19.8954 16.9003 19 18.0049 19C19.1095 19 20.0049 19.8954 20.0049 21C20.0049 22.1046 19.1095 23 18.0049 23Z"></path></svg>
                        <strong>장바구니</strong>
                        <span class="num"><?php echo get_cart_count($tmp_cart_id); ?></span>
                    </a>
                </li>
                <li>
                    <button type="button" class="today_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM13 12H17V14H11V7H13V12Z"></path></svg>
                        <strong>오늘본상품</strong>
                    </button>
                    <?php include(G5_MSHOP_SKIN_PATH.'/boxtodayview.skin.php'); // 오늘 본 상품 ?>
                    <script>
                    $(".today_btn").click(function(){
                        $("#today-view").toggle();
                    });
                    </script>
                </li>
            </ul>
        </div>
        <?php } else { ?>
        <div class="ct_login">
            <ul class="ct-btn">
                <li><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 15H6V20H18V4H6V9H4V3C4 2.44772 4.44772 2 5 2H19C19.5523 2 20 2.44772 20 3V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V15ZM10 11V8L15 12L10 16V13H2V11H10Z"></path></svg><a href="<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo $urlencode; ?>">로그인</a></li>
            </ul>
            <!--<h2>Welcome</h2>-->
            <p><b>로그인</b>해 주세요</p>
            <ul class="ct-box">
                <li><a href="<?php echo G5_SHOP_URL; ?>/mypage.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z"></path></svg>마이페이지</a></li>
                <li><a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M19 22H5C3.34315 22 2 20.6569 2 19V3C2 2.44772 2.44772 2 3 2H17C17.5523 2 18 2.44772 18 3V15H22V19C22 20.6569 20.6569 22 19 22ZM18 17V19C18 19.5523 18.4477 20 19 20C19.5523 20 20 19.5523 20 19V17H18ZM16 20V4H4V19C4 19.5523 4.44772 20 5 20H16ZM6 7H14V9H6V7ZM6 11H14V13H6V11ZM6 15H11V17H6V15Z"></path></svg>주문조회</a></li>
                <li><a href="<?php echo G5_SHOP_URL; ?>/cart.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M4.00488 16V4H2.00488V2H5.00488C5.55717 2 6.00488 2.44772 6.00488 3V15H18.4433L20.4433 7H8.00488V5H21.7241C22.2764 5 22.7241 5.44772 22.7241 6C22.7241 6.08176 22.7141 6.16322 22.6942 6.24254L20.1942 16.2425C20.083 16.6877 19.683 17 19.2241 17H5.00488C4.4526 17 4.00488 16.5523 4.00488 16ZM6.00488 23C4.90031 23 4.00488 22.1046 4.00488 21C4.00488 19.8954 4.90031 19 6.00488 19C7.10945 19 8.00488 19.8954 8.00488 21C8.00488 22.1046 7.10945 23 6.00488 23ZM18.0049 23C16.9003 23 16.0049 22.1046 16.0049 21C16.0049 19.8954 16.9003 19 18.0049 19C19.1095 19 20.0049 19.8954 20.0049 21C20.0049 22.1046 19.1095 23 18.0049 23Z"></path></svg>장바구니</a></li>
            </ul>
        </div>
        <?php } ?>


        <?php
                echo '<ul class="cate">'.PHP_EOL;
		?>
			<?php
			if($is_admin){
			?>
			<li>
				<a href="<?php echo G5_SHOP_URL; ?>/orderlist.php" style="color:#262561;font-weight:bold;">주문내역</a>
			</li>
			<?php
			}
			?>
		<?php
        $mshop_ca_href = G5_SHOP_URL.'/list.php?ca_id=';
        $mshop_ca_res1 = sql_query(get_mshop_category('', 2));
        for($i=0; $mshop_ca_row1=sql_fetch_array($mshop_ca_res1); $i++) {
            //if($i == 0)
            //    echo '<ul class="cate">'.PHP_EOL;
        ?>
            <li>
                <a href="<?php echo $mshop_ca_href.$mshop_ca_row1['ca_id']; ?>"><?php echo get_text($mshop_ca_row1['ca_name']); ?></a>
                <?php
                $mshop_ca_res2 = sql_query(get_mshop_category($mshop_ca_row1['ca_id'], 4));
                if(sql_num_rows($mshop_ca_res2))
                    echo '<button class="sub_ct_toggle ct_op">'.get_text($mshop_ca_row1['ca_name']).' 하위분류 열기</button>'.PHP_EOL;

                for($j=0; $mshop_ca_row2=sql_fetch_array($mshop_ca_res2); $j++) {
                    if($j == 0)
                        echo '<ul class="sub_cate sub_cate1">'.PHP_EOL;
                ?>
                    <li>
                        <a href="<?php echo $mshop_ca_href.$mshop_ca_row2['ca_id']; ?>">- <?php echo get_text($mshop_ca_row2['ca_name']); ?></a>
                        <?php
                        $mshop_ca_res3 = sql_query(get_mshop_category($mshop_ca_row2['ca_id'], 6));
                        if(sql_num_rows($mshop_ca_res3))
                            echo '<button type="button" class="sub_ct_toggle ct_op">'.get_text($mshop_ca_row2['ca_name']).' 하위분류 열기</button>'.PHP_EOL;

                        for($k=0; $mshop_ca_row3=sql_fetch_array($mshop_ca_res3); $k++) {
                            if($k == 0)
                                echo '<ul class="sub_cate sub_cate2">'.PHP_EOL;
                        ?>
                            <li>
                                <a href="<?php echo $mshop_ca_href.$mshop_ca_row3['ca_id']; ?>">- <?php echo get_text($mshop_ca_row3['ca_name']); ?></a>
                                <?php
                                $mshop_ca_res4 = sql_query(get_mshop_category($mshop_ca_row3['ca_id'], 8));
                                if(sql_num_rows($mshop_ca_res4))
                                    echo '<button type="button" class="sub_ct_toggle ct_op">'.get_text($mshop_ca_row3['ca_name']).' 하위분류 열기</button>'.PHP_EOL;

                                for($m=0; $mshop_ca_row4=sql_fetch_array($mshop_ca_res4); $m++) {
                                    if($m == 0)
                                        echo '<ul class="sub_cate sub_cate3">'.PHP_EOL;
                                ?>
                                    <li>
                                        <a href="<?php echo $mshop_ca_href.$mshop_ca_row4['ca_id']; ?>">- <?php echo get_text($mshop_ca_row4['ca_name']); ?></a>
                                        <?php
                                        $mshop_ca_res5 = sql_query(get_mshop_category($mshop_ca_row4['ca_id'], 10));
                                        if(sql_num_rows($mshop_ca_res5))
                                            echo '<button type="button" class="sub_ct_toggle ct_op">'.get_text($mshop_ca_row4['ca_name']).' 하위분류 열기</button>'.PHP_EOL;

                                        for($n=0; $mshop_ca_row5=sql_fetch_array($mshop_ca_res5); $n++) {
                                            if($n == 0)
                                                echo '<ul class="sub_cate sub_cate4">'.PHP_EOL;
                                        ?>
                                            <li>
                                                <a href="<?php echo $mshop_ca_href.$mshop_ca_row5['ca_id']; ?>">- <?php echo get_text($mshop_ca_row5['ca_name']); ?></a>
                                            </li>
                                        <?php
                                        }

                                        if($n > 0)
                                            echo '</ul>'.PHP_EOL;
                                        ?>
                                    </li>
                                <?php
                                }

                                if($m > 0)
                                    echo '</ul>'.PHP_EOL;
                                ?>
                            </li>
                        <?php
                        }

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                    </li>
                <?php
                }

                if($j > 0)
                    echo '</ul>'.PHP_EOL;
                ?>
            </li>
        <?php
        }
		?>
			<!--<li >
				<a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">업체소개</a>
			</li>
			<li>
				<a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse1.php">노인복지용구란</a>
				<button class="sub_ct_toggle ct_op">노인복지용구란 하위분류 열기</button>
				<ul class="sub_cate sub_cate1">
                    <li>
                        <a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse1.php">- 복지용구 급여안내</a>
                    </li>
                    <li>
                        <a href="<?php echo G5_THEME_URL ?>/mobile/shop/olduse2.php">- 복지용구 사용 가능 개수</a>
                    </li>
                </ul>
			</li>
			<li>
				<a href="<?php echo G5_BBS_URL; ?>/faq.php">자주 묻는 질문</a>
			</li>-->

		<?php
			echo '</ul>'.PHP_EOL;

        if($i > 0){
            //echo '</ul>'.PHP_EOL;
        }else{
            echo '<p>등록된 분류가 없습니다.</p>'.PHP_EOL;
		}
        ?>
        <ul class="cate cate-com">
            <!--<li><a href="<?php echo G5_BBS_URL; ?>/board.php?bo_table=notice">공지사항</a></li>-->
            <!-- <li><a href="<?php echo G5_BBS_URL; ?>/faq.php">고객센터</a></li> -->
			<!--<li><a href="<?php echo G5_BBS_URL; ?>/faq.php">FAQ</a></li>

			<li><a href="<?php echo G5_BBS_URL; ?>/qalist.php">1:1문의</a></li>
            <li><a href="<?php echo G5_SHOP_URL; ?>/itemuselist.php">사용후기</a></li>


			<?php
            if(G5_COMMUNITY_USE) {
                $com_href = G5_URL;
                $com_name = '커뮤니티';
            } else {
                if(!preg_match('#'.G5_SHOP_DIR.'/#', $_SERVER['SCRIPT_NAME'])) {
                    $com_href = G5_SHOP_URL;
                    $com_name = '쇼핑몰';
                }
            }

            if($com_href && $com_name) {
            ?>
            <li><a href="<?php echo $com_href; ?>/"><?php echo $com_name; ?></a></li>
            <?php } ?>

            <li><a href="<?php echo G5_SHOP_URL; ?>/personalpay.php">개인결제</a></li>
            <?php if(!$com_href || !$com_name) { ?>
            <li><a href="<?php echo G5_SHOP_URL; ?>/listtype.php?type=5">세일상품</a></li>
            <?php } ?>

			-->
        </ul>
        <button type="button" class="pop_close"><span class="sound_only">카테고리 </span>닫기</button>
    </div>
</div>

<script>
$(function (){
    var $category = $("#category");

    $("#hd_ct").on("click", function() {
        $category.css("display","block");
    });

    $("#category .pop_close").on("click", function(){
        $category.css("display","none");
    });

    $("button.sub_ct_toggle").on("click", function() {
        var $this = $(this);
		$parent_li=$(this).closest("li");
        $sub_ul = $(this).closest("li").children("ul.sub_cate");

        if($sub_ul.size() > 0) {
            var txt = $this.text();

            if($sub_ul.is(":visible")) {
                txt = txt.replace(/닫기$/, "열기");
                $this
                    .removeClass("ct_cl")
                    .text(txt);
            } else {
                txt = txt.replace(/열기$/, "닫기");
                $this
                    .addClass("ct_cl")
                    .text(txt);
            }

            $sub_ul.toggle();
			console.log($sub_ul.css("display"));
			if($sub_ul.is(":visible")){
				$("ul.sub_cate").not($sub_ul).each(function(){
					$p=$(this).closest("li");
					$b=$p.children("button");
					txt = $b.text();
					txt = txt.replace(/닫기$/, "열기");
					$b.removeClass("ct_cl").text(txt);
					$p.children("ul.sub_cate").hide();
				});
				$(".cate > li > a").removeClass("active");
				$parent_li.children("a").addClass("active");
			}else{
				$(".cate > li > a").removeClass("active");
			}
        }
    });
});
</script>
