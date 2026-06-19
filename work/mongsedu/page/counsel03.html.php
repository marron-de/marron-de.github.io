<?php
/**
 * page file : /theme/THEME_NAME/page/counsel.html.php
 */
if (!defined('_EYOOM_')) exit;

// 상담 신청 기능 사용유무 체크
if (!$config['cf_use_counsel']) alert("사용하지 않는 기능입니다.");

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/plugins/sweetalert2/sweetalert2.min.css" type="text/css" media="screen">',0);

$action_url = EYOOM_CORE_URL.'/page/proc/counsel_update.php';

include_once(G5_EDITOR_LIB);
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');

$captcha_html = '';
$captcha_js   = '';
$is_use_captcha = 1;

if ($is_use_captcha) {
    $captcha_html = captcha_html();
    $captcha_js   = chk_captcha_js();
}

$is_dhtml_editor = false;
$is_dhtml_editor_use = true;
$editor_content_js = '';
if(!is_mobile() || defined('G5_IS_MOBILE_DHTML_USE') && G5_IS_MOBILE_DHTML_USE)
    $is_dhtml_editor_use = true;

// 모바일에서는 G5_IS_MOBILE_DHTML_USE 설정에 따라 DHTML 에디터 적용
if ($config['cf_editor'] && $is_dhtml_editor_use) {
    $is_dhtml_editor = true;
}

$editor_html = editor_html('cs_content', $content, $is_dhtml_editor);
$editor_js = '';
$editor_js .= get_editor_js('cs_content', $is_dhtml_editor);
$editor_js .= chk_editor_js('cs_content', $is_dhtml_editor);

// 상담 분야
$counsel_part = explode(',', $config['cf_counsel_part']);
?>

<div class="sub-page page-counsel page-form">
    <div class="counsel_wrap container">
        <div class="counsel_titbox" data-aos="fade-up">
			<div class="cs_top" data-aos="fade-up">
				<h3 class="tit">
					<span class="blue">유학 고민,</span><br/>
					더 이상 혼자 하지 마세요.
				</h3>
				<p class="desc">몽선생 상담사가 궁금증을 해결해 드립니다.</p>
			</div> 
            <ul class="cs_info">
                <li>
                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ico_picker_color.svg" alt="" class="icon">
                    <div class="text_area">
                        <span>방문상담</span>
                        <p>몽선생 사무실에 방문하여 보다 상세한 상담이 가능해요.</p>
                    </div>
                </li>
                <li>
                    <img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ico_phone_color.svg" alt="" class="icon">
                    <div class="text_area">
                        <span>전화상담</span>
                        <p>02)6052-9003</p>
                    </div>
                </li>
                <li>
					<a href="https://pf.kakao.com/_fxmxmWV" class="link" target="_blank">
						<img src="<?php echo EYOOM_THEME_URL; ?>/img/sub/ico_kakaotalk_color.svg" alt="" class="icon">
						<div class="text_area">
							<span>카톡상담</span>
							<p>간단한 응대는 실시간 카톡상담이 더 빨라요.</p>
						</div>
					</a>
                </li>
            </ul>
            <div class="cs_bottom">
                <span>수업 CLASS 상담이 필요하신가요?</span>
                <p>
                    <b class="blue">010-8114-9003</b> 로 연락주시면 상담 도와드리겠습니다.
                </p>
            </div>
        </div>
        
        <form name="csregister" id="csregister" action="<?php echo $action_url; ?>" method="POST" enctype="multipart/form-data" class="eyoom-form eyoom_form" data-aos="fade-up">
			<input type="hidden" name="wmode" value="<?php echo isset($wmode) && $wmode ? $wmode: ''; ?>">
			<input type="hidden" name="cs_part" value="설명회">
			<input type="hidden" name="cs_company" value="회사명">
			<input type="hidden" name="cs_subject" value="설명회 상담신청입니다.">
			<input type="hidden" name="cs_type" value="">
			<div class="form_wrap">
				<h5 class="form_title">
					원활한 상담을 위해<br/>
					기본 정보를 작성해주세요.
				</h5>
				<div class="form_box">
					<div class="form_item">
						<p class="form_label">*는 필수 표시 정보입니다.</p>
						<ul class="tab_box">
							<li>
								<a href="<?php echo G5_URL ?>/page/?pid=counsel" class="linktab">방문상담</a>
							</li>
							<li>
								<a href="<?php echo G5_URL ?>/page/?pid=counsel02" class="linktab">유선/화상상담</a>
							</li>
							<li class="on">
								<a href="<?php echo G5_URL ?>/page/?pid=counsel03" class="linktab">설명회</a>
							</li>
							<!-- <li>
								<a href="<?php echo G5_URL ?>/page/?pid=counsel04" class="linktab">수업/CLASS</a>
							</li> -->
						</ul>
					</div>

					<div class="form_item">
						<!-- <p class="form_label">상담 전 아래 내용을 기재 해 주시기 바랍니다.</p> -->
						<div class="input_box">
							<input type="text" name="cs_name" class="input_text" placeholder="이름*" required>
							<input type="text" name="cs_tel" class="input_text" placeholder="연락처*" required>
							<input type="text" name="cs_email" class="input_text" placeholder="이메일*">
							<!-- <div class="select_box">
								<select name="cs_gender" class="select select2" data-placeholder="성별">
									<option value="">성별</option>
									<option value="1">남성</option>
									<option value="2">여성</option>
								</select>
							</div>					
							-->
						</div>
					</div>

					<div class="form_item">
						<p class="form_label bk">관심 설명회<span class="required">*</span></p>
						<div class="select_box">
							<select name="cs_class" class="select select2" data-placeholder="관심 설명회">
								<option value="">관심 설명회</option>
								<?php echo eb_contents('1779335594'); ?>
							</select>
						</div>		
					</div>

					<div class="form_item">
						<p class="form_label bk">문의사항</p>
						<div class="input_box">
							<textarea name="cs_content" class="input_text" placeholder="문의사항을 남겨주세요."></textarea>
							<!-- <?php echo $editor_html; ?> -->
						</div>
					</div>
					
					<!--
					<div class="form_item">
						<p class="form_label">첨부파일</p>
						<?php for ($i=0; $i<2; $i++) { ?>
						<div class="file_box">
							<div class="file_item">
								<input type="file" class="input_file" id="cs_file_<?php echo $i+1 ?>" name="cs_file[]" value="사진선택">
							</div>
						</div>
						<?php } ?>
					</div>
					-->

					<?php if ($is_use_captcha) { ?>
					<div class="form_item">
						<p class="form_label bk">자동등록방지<span class="required">*</span></p>
						<div class="vc-captcha"><?php echo $captcha_html; ?></div>
					</div>
					<?php } ?>

					<div class="form_item flex between">
						<div class="check_box">
							<input type="checkbox" name="cs_agree" class="input_check" value="1" id="cs_agree" required>
							<label for="cs_agree" class="label_check">개인정보수집 및 이용안내 동의</label>
						</div>
						<button type="button" class="agree_view" onclick="privacy_modal()">내용 보기</button>
					</div>	
				
				</div>
				<div class="form_btnbox">
					<!-- <button class="form_btn submit_btn" type="submit" value="신청하기" dus>신청하기</button> -->
					<button type="button" class="form_btn submit_btn" value="신청하기" disabled onclick="formSubmit_modal(this.form)">신청하기</button>
				</div>
			</div> 
        </form>
    </div>
</div>


<div class="cm_modal privacy_modal">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box">
			<p class="modal_tit">개인정보수집 및 이용안내</p>
			<div class="term_box">
				<?php @include_once(EYOOM_THEME_PATH . '/page/privacy.html.php') ?>
			</div>
		</div>
	</div>
</div>

<div class="cm_modal formAlert_modal">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box btn_ver">
			<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/modal_check.svg" alt="" class="modal_icon">
			<div class="modal_txtbox">
				<p class="modal_tit">이메일을 확인해주세요</p>
				<p class="modal_desc">
					예: example@email.com<br>
					형식으로 입력해 주세요.
				</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA cm_modal_close">확인</button>
			</div>	
		</div>	
	</div>
</div>

<div class="cm_modal formSubmit_modal">	
	<div class="cm_modal_inner">
		<button type="button" class="cm_modal_close"></button>
		<div class="cm_modal_box btn_ver">
			<img src="<?php echo EYOOM_THEME_URL; ?>/img/common/modal_check.svg" alt="" class="modal_icon">
			<div class="modal_txtbox">
				<p class="modal_tit">상담을 신청할까요?</p>
				<p class="modal_desc">
					상담 신청 후 조금만 기다려주시면 <br>
					담당자가 확인 후 연락드리겠습니다.
				</p>
			</div>
			<div class="btnbox">
				<button type="button" class="btn typeA cm_modal_close">닫기</button>
				<button type="button" class="btn typeB" onclick="form_submit()">신청하기</button>
			</div>	
		</div>	
	</div>
</div>


<script src="<?php echo EYOOM_THEME_URL; ?>/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
	// 필수값 체크
	const form = $('#csregister');
	const btn = form.find('.submit_btn');
	const checkRequired = () => {
	let ok = true;
	form.find('[required]').each(function () {
		const el = $(this);

		if (el.is(':checkbox')) {
		if (!el.is(':checked')) ok = false;
		} else if (el.is(':radio')) {
		const name = el.attr('name');
		if (!form.find('input[name="' + name + '"]:checked').length) ok = false;
		} else {
		if (!el.val()) ok = false;
		}
	});
	btn.prop('disabled', !ok);
	};
	form.on('input change', 'input, select, textarea', checkRequired);
	checkRequired();

	// 개인정보 모달
	function privacy_modal() {
		$("body").addClass('hidden');
		$(".privacy_modal").addClass('show');
	}

	// 입력값 체크
	function formSubmit_modal(f) {
		// let k = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		// if (!k.test(String(f.cs_email.value).toLowerCase())) {
		// 	$("body").addClass('hidden');
		// 	$(".formAlert_modal").addClass('show');
		// 	return;
		// }

		<?php echo $captcha_js; ?>

		$("body").addClass('hidden');
		$(".formSubmit_modal").addClass('show');
	}

	// 폼 제출
	function form_submit() {
		$('body').removeClass('hidden');
		$('.formSubmit_modal').removeClass('show');
		$('#csregister').trigger('submit');
	}

</script>