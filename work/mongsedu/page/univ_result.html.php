<?php
/**
 * page file : /theme/THEME_NAME/page/aboutus.html.php
 */
if (!defined('_EYOOM_')) exit;

?>


<div class="sub-page page-counsel page-univ">
	<div class="tit_area board">
        <div class="container" data-aos="fade-up">
            <span class="title">학교정보</span>
			<div class="search_box">
				<div class="search_inputbox" onclick="univsch_popup()">
					<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ic_search_blue.svg" alt="" class="icon">
					<input type="text" class="input" placeholder="원하시는 학교 정보를 쉽게 만나보세요." required>
					<button type="button" class="del_btn">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/sch_delete.svg" alt="" class="icon">
					</button>
				</div>
				<div class="cm_popup univsch_popup">
					<ul class="linkbox">
						<li><a href="<?php echo G5_URL ?>/page/?pid=faq" class="link tit">자주 받는 상담</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_info01&tab=12&from=search" class="link">말레이시아 국제학교 상담</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_info02&tab=23&from=search" class="link">싱가포르 대학 상담</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_info02&tab=22&from=search" class="link">말레이시아 대학 상담</a></li>
						<li><a href="#none" class="link"  onclick="showToast('학교 정보 준비중입니다', 'emoji1')">한국 국제학교 배치 상담</a></li>
						<li><a href="<?php echo G5_URL ?>/page/?pid=univ_info02&tab=25&from=search" class="link">송도 글로벌 캠퍼스</a></li>
					</ul>
				</div>
			</div>
        </div>
    </div>

    <div class="univ_info tabs ver2 swiper tab_swiper" data-index="0" data-gappc="0" data-gapmob="0">
        <ul class="container swiper-wrapper" data-aos="fade">
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info_intro">홈</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info01">국제학교</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_info02">해외대학</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=guidebook">가이드북</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=faq">자주 묻는 질문</a>
            </li>
            <li class="swiper-slide">
                <a href="<?php echo G5_URL ?>/page/?pid=univ_adv">학교 광고판</a>
            </li>
        </ul>
    </div>

    <div class="msection univ_info_list sec tabs ver2 nomargin">
		<div class="container" data-aos="fade-up">
             <div class="ms title_area" id="row-2">
				<div class="title">
					<span class="tit">검색결과</span>
				</div>
            </div>
            <div class="counsel_list">
                <ul class="panel">
                    <li>
						<div class="univ_list grid_ver">							
							<!-- 검색 결과 -->
						</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    const G5_URL = "<?php echo G5_URL; ?>";
    const EYOOM_THEME_URL = "<?php echo EYOOM_THEME_URL; ?>";

    const imgMap = {};
    const flagMap = {};
    const tagMap = {};

    <?php
    $slideFiles = [
        'univ_malay_slide.php', // 말레이시아 대학
        'univ_malay2_slide.php', // 말레이시아 국제학교
        'univ_singapore_slide.php', // 싱가포르 국립대
        'univ_singapore2_slide.php', // 싱가포르 예술대
        'univ_singapore3_slide.php', // 싱가포르 사립대
        'univ_hongkong_slide.php', // 홍콩 국립대
        'univ_songdo_slide.php', // 송도 대학
        'univ_thai_slide.php', // 태국 국제학교
        'univ_biet_slide.php', // 베트남 국제학교
    ];

    foreach ($slideFiles as $file) {
        $path = EYOOM_THEME_PATH . '/page/' . $file;
        if (!file_exists($path)) continue;
        $html = file_get_contents($path);
		
        preg_match_all("/univ_modal\('([^']+)'/", $html, $keyMatches);
        preg_match_all('/img\/sub\/([^"\']+\.jpg)/', $html, $imgMatches);
        preg_match_all('/img\/common\/(flag_[^"\']+\.svg)/', $html, $flagMatches);
        preg_match_all('/<div class="hashtag">(.*?)<\/div>/s', $html, $tagBlocks);

        // 아이템 단위로 파싱
        preg_match_all('/<div class="swiper-slide item".*?<\/div>\s*<\/div>\s*<\/div>/s', $html, $items);

        foreach ($keyMatches[1] as $i => $key) {
            // 이미지
            if (isset($imgMatches[1][$i])) {
                echo "imgMap['{$key}'] = EYOOM_THEME_URL + '/img/sub/{$imgMatches[1][$i]}';\n";
            }
            // 국기 (아이템당 하나)
            if (isset($flagMatches[1][$i])) {
                echo "flagMap['{$key}'] = EYOOM_THEME_URL + '/img/common/{$flagMatches[1][$i]}';\n";
            }
            // 해시태그
            if (isset($tagBlocks[1][$i])) {
                preg_match_all('/<p class="tag">([^<]*)<\/p>/', $tagBlocks[1][$i], $tags);
                $tagsJson = json_encode($tags[1], JSON_UNESCAPED_UNICODE);
                echo "tagMap['{$key}'] = {$tagsJson};\n";
            }
        }
    }
    ?>
</script>

<?php include (EYOOM_THEME_PATH.'/page/univ_modal.php'); ?>
