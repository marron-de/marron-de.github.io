<?php
/**
 * theme file : /theme/THEME_NAME/tail.html.php
 */
if (!defined('_EYOOM_')) exit;
?>

<?php if (!$wmode) { ?>
			

		</div><?php /* End .container */ ?>
	</div><?php /* End .basic-body */ ?>

	<?php /*----- footer 시작 -----*/ ?>
		<?php include_once(EYOOM_THEME_PATH.'/common_footer.php'); ?>
	<?php /*----- footer 끝 -----*/ ?>
	<script>
		/*탭메뉴*/
		$('.tabs').each(function () {
			const oTab = $(this);
			const active = oTab.find('.tab_tit a.show');
			if (!active.length) return;

			const tabIndex = active.attr('id').match(/\d+$/);

			oTab.find('.panel')
				.find('#content-' + tabIndex[0])
				.show();

			oTab.find('.tab_tit li a').on('click', function () {

				const tabIndex = $(this).attr('id').match(/\d+$/);

				oTab.find('.tab_tit li a').removeClass('show');
				$(this).addClass('show');

				oTab.find('.panel > li').hide();
				oTab.find('.panel')
					.find('#content-' + tabIndex[0])
					.show();

				setTimeout(function () {
					AOS.refreshHard();
				}, 150);

				return false;
			});
		});
	</script>
	<script>
		// FAQ
		$(document).ready(function(){
			$(".faq-box li .question").click(function() {
				$(this).next('.answer').slideToggle('fast');
				$(this).parent().toggleClass('on');
			});
		});
	</script>
</div>
<?php /*----- wrapper 끝 -----*/ ?>

<?php /*----- 전체 검색 입력창 시작 -----*/ ?>
<div class="search-full">
	<div class="search-close-btn"></div>
	<fieldset class="search-field">
		<legend>게시판 전체검색</legend>
		<form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
		<input type="hidden" name="sfl" value="wr_subject||wr_content">
		<input type="hidden" name="sop" value="and">
		<label for="search_input" class="sound_only">검색어 입력 필수</label>
		<input type="text" name="stx" id="search_input" maxlength="20" placeholder="검색어 입력 [ 전체 게시판 검색 ]">
		<button type="submit" class="search-btn" value="검색"><i class="fas fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
		</form>
		<script>
		function fsearchbox_submit(f)
		{
			var stx = f.stx.value.trim();
			if (stx.length < 2) {
				alert("검색어는 두글자 이상 입력하십시오.");
				f.stx.select();
				f.stx.focus();
				return false;
			}

			// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
			var cnt = 0;
			for (var i = 0; i < stx.length; i++) {
				if (stx.charAt(i) == ' ')
					cnt++;
			}

			if (cnt > 1) {
				alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
				f.stx.select();
				f.stx.focus();
				return false;
			}
			f.stx.value = stx;

			return true;
		}
		</script>
	</fieldset>
</div>
<?php /*----- 전체 검색 입력창 끝 -----*/ ?>

<?php /* 상담 신청 버튼 */ ?>
<?php if ($config['cf_use_counsel'] == '1') { ?>
<a <?php if ( !G5_IS_MOBILE ) { ?>href="javascript:void(0);" onclick="counsel_modal();"<?php } else { ?>href="<?php echo G5_URL; ?>/page/?pid=counsel"<?php } ?> class="counsel-btn"><i class="fas fa-headset"></i><span class="sound-only">상담신청</span></a>
<?php } ?>

<?php /* 사이드바 회원 버튼 */ ?>
<!-- <button type="button" class="sidebar-user-trigger sidebar-user-btn mo-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUserRight" aria-controls="offcanvasUserRight"><i class="fas fa-user-alt"></i><span class="sound-only">회원 사이드바</span></button> -->

<?php /* Side Nav Mobile Toggler */ ?>
<!-- <button type="button" class="navbar-mobile-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"><i class="fas fa-bars"></i><span class="sound-only">메뉴 사이드바</span></button> -->

<?php /* Back To Top */ ?>
<div class="eb-backtotop">
	<svg class="backtotop-progress" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
		<span class="progress-count"></span>
	</svg>
</div>
<?php } // !$wmode ?>

<?php
include_once(EYOOM_THEME_PATH . '/misc.html.php');
?>

<?php
if ($is_member && $eyoomer['onoff_push'] == 'on') {
    include_once(EYOOM_THEME_PATH . '/skin/push/basic/push.skin.html.php');
}
?>

<script src="<?php echo EYOOM_THEME_URL; ?>/js/app.js?ver=<?php echo G5_JS_VER; ?>"></script>
<?php if ($is_admin == 'super') { ?>
<script>
$(document).ready(function() {
    var edit_mode = "<?php echo $eyoom_default['edit_mode']; ?>";
    if (edit_mode == 'on') {
        $(".btn-edit-mode").show();
    } else {
        $(".btn-edit-mode").hide();
    }

    $("#btn_edit_mode").click(function() {
        var edit_mode = $("#edit_mode").val();
        if (edit_mode == 'on') {
            $(".btn-edit-mode").hide();
            $("#edit_mode").val('');
        } else {
            $(".btn-edit-mode").show();
            $("#edit_mode").val('on');
        }

        $.post("<?php echo G5_ADMIN_URL; ?>/?dir=theme&pid=theme_editmode&smode=1", { edit_mode: edit_mode });
    });
});
</script>
<?php } ?>

<script>
    const themeUrl = '<?php echo EYOOM_THEME_URL; ?>';
</script>


<script src="<?php echo EYOOM_THEME_URL; ?>/js/custom.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script type="module" src="<?php echo EYOOM_THEME_URL; ?>/js/univ_info.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script type="module" src="<?php echo EYOOM_THEME_URL; ?>/js/univ_search.js?ver=<?php echo G5_JS_VER; ?>"></script>

<?php
if ( $config['cf_analytics'] ) echo $config['cf_analytics'];
?>