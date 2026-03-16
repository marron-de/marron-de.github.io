<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'mailer/src/Exception.php';
    require 'mailer/src/PHPMailer.php';
    require 'mailer/src/SMTP.php';

    // require 'mailer/src/Exception.php';
    // require 'mailer/src/PHPMailer.php';
    // require 'mailer/src/SMTP.php';
    function inputPost($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    $name = inputPost($_POST['name']); // 이름
    $company = inputPost($_POST['company']); // 업체명
    $contact = inputPost($_POST['contact']); // 연락처
    $email = inputPost($_POST['email']); // 이메일
    $content = inputPost($_POST['content']); // 문의내용

	$question1_checks = isset($_POST['question1']) && is_array($_POST['question1']) 
		? implode(', ', array_map('inputPost', $_POST['question1'])) 
		: ''; // 질문01 
	$question1_etc = inputPost($_POST['question1_etc'] ?? ''); // 질문01 - 직접입력
	$question1 = implode(', ', array_filter([$question1_checks, $question1_etc]));
    $question2 = inputPost($_POST['question2']); // 질문02
    $question3 = inputPost($_POST['question3']); // 질문03
    $question4 = inputPost($_POST['question4']); // 질문04
	$question5 = inputPost($_POST['question5'] ?? ''); // 질문05
	$question5_etc = inputPost($_POST['question5_etc'] ?? ''); // 질문05 - 직접입력
	if ($question5_etc) $question5 = $question5_etc;


 	$body.="
   	<table align='center' border='0' cellpadding='0' cellspacing='0' class='mail_box'
		style='font-family: Pretendard, Helvetica,Segoe UI,Roboto,-apple-system,BlinkMacSystemFont,system-ui,Helvetica Neue,Segoe UI,Apple SD Gothic Neo,Noto Sans KR,Malgun Gothic,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,sans-serif;font-size:0px!important;margin:40px auto auto;background: #000000;width:100%;max-width:720px;border-radius: 12px;overflow: hidden;'>
		<tbody style='display: block; width: 100%; word-break: keep-all;'>
			<tr style='display: block; width: 100%;'>
				<td style='display: block; width: 100%;'>
					<div class='top' style='width: 100%;'>
						<div class='logo_box' style='width: 100%;padding: 40px 30px;box-sizing: border-box;text-align: center;border-bottom: 1px solid #b2b2b2;'>
							<img src='https://unicorn001.mycafe24.com/img/logo.png' alt='' style='width: 140px;display: inline-block;vertical-align: middle;margin: 0;'>
							<p class='tit' style='font-weight: 600;font-size: 20px;line-height: 144%;text-align: right;color: #fff;display: inline-block;box-sizing: border-box;margin: 0;width: calc(100% - 140px);vertical-align: middle;'>유니콘사우르스 구독플랜 <br><span style='display: inline-block;color: #01fd05;font-weight: 700;vertical-align: middle;'>상담 신청서</span></p>
						</div>
					</div>
				</td>
			</tr>
			<tr style='display: block; width: 100%;'>
				<td style='display: block; width: 100%;'>
					<div class='content' style='display: block;margin: 58px 0 70px;'>
						<div class='txtbox' style='display: block; margin: 0 0 40px;'>
							<p class='tit' style='font-weight: 700;font-size: 24px;line-height: 144%;text-align: center;color: #fff; display: block;margin: 0 0 20px; padding: 0 8px; box-sizing: border-box;'>
								새로운 구독 플랜 상담 신청이 접수되었습니다.
							</p>
							</p>
						</div>
						<ul style='width: calc(100% - 24px);max-width: 576px;padding: 40px;border-radius: 8px;background: #1c1c1c;box-sizing: border-box;margin: 0 auto 24px;'>
							<li style='list-style: none; margin-bottom: 20px;'>
								<div style='width: 80px;display: inline-block;vertical-align: top;font-size: 16px;font-weight: 500;line-height: 160%;color: #fff;'>
									이름
								</div>
								<div style='width: calc(100% - 80px);display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$name
								</div>
							</li>
							<li style='list-style: none; margin-bottom: 20px;'>
								<div style='width: 80px;display: inline-block;vertical-align: top;font-size: 16px;font-weight: 500;line-height: 160%;color: #fff;'>
									업체명
								</div>
								<div style='width: calc(100% - 80px);display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$company
								</div>
							</li>
							<li style='list-style: none; margin-bottom: 20px;'>
								<div style='width: 80px;display: inline-block;vertical-align: top;font-size: 16px;font-weight: 500;line-height: 160%;color: #fff;'>
									연락처
								</div>
								<div style='width: calc(100% - 80px);display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$contact
								</div>
							</li>
							<li style='list-style: none; margin-bottom: 20px;'>
								<div style='width: 80px;display: inline-block;vertical-align: top;font-size: 16px;font-weight: 500;line-height: 160%;color: #fff;'>
									이메일
								</div>
								<div style='width: calc(100% - 80px);display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$email
								</div>
							</li>
							<li style='list-style: none;margin-bottom: 40px;'>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-size: 16px;font-weight: 500;line-height: 160%;color: #fff; margin: 0 0 8px;'>
									문의내용
								</div>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$content								
								</div>
							</li>
						
							<li style='list-style: none;margin-bottom: 32px;padding-top: 32px;border-top: 1px solid #b2b2b2;box-sizing: border-box;'>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-size: 0;margin: 0 0 8px;'>
									<span style='display: inline-block;vertical-align: baseline;font-size: 20px; font-weight: 700; line-height: 160%;color: #01fd05;width: 34px;'>Q1</span>
									<span style='display: inline-block;vertical-align: baseline;width: calc(100% - 34px);font-size: 16px; font-weight: 500;line-height: 160%;color: #fff;'>어떤 형태의 프로젝트를 준비 중이신가요? (복수 선택 가능)</span>
								</div>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$question1
								</div>
							</li>						
							<li style='list-style: none; margin-bottom: 32px;'>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-size: 0;margin: 0 0 8px;'>
									<span style='display: inline-block;vertical-align: baseline;font-size: 20px; font-weight: 700; line-height: 160%;color: #01fd05;width: 34px;'>Q2</span>
									<span style='display: inline-block;vertical-align: baseline;width: calc(100% - 34px);font-size: 16px; font-weight: 500;line-height: 160%;color: #fff;'>구상중이신 프로젝트에 대해 자유롭게 설명해 주세요.</span>
								</div>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$question2
								</div>
							</li>					
							<li style='list-style: none; margin-bottom: 32px;'>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-size: 0;margin: 0 0 8px;'>
									<span style='display: inline-block;vertical-align: baseline;font-size: 20px; font-weight: 700; line-height: 160%;color: #01fd05;width: 34px;'>Q3</span>
									<span style='display: inline-block;vertical-align: baseline;width: calc(100% - 34px);font-size: 16px; font-weight: 500;line-height: 160%;color: #fff;'>생각하고 계신 예산 범위가 어떻게 되나요?</span>
								</div>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$question3
								</div>
							</li>				
							<li style='list-style: none; margin-bottom: 32px;'>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-size: 0;margin: 0 0 8px;'>
									<span style='display: inline-block;vertical-align: baseline;font-size: 20px; font-weight: 700; line-height: 160%;color: #01fd05;width: 34px;'>Q4</span>
									<span style='display: inline-block;vertical-align: baseline;width: calc(100% - 34px);font-size: 16px; font-weight: 500;line-height: 160%;color: #fff;'>프로젝트 희망 완료 일정은 언제인가요?</span>
								</div>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$question4
								</div>
							</li>				
							<li style='list-style: none;'>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-size: 0;margin: 0 0 8px;'>
									<span style='display: inline-block;vertical-align: baseline;font-size: 20px; font-weight: 700; line-height: 160%;color: #01fd05;width: 34px;'>Q5</span>
									<span style='display: inline-block;vertical-align: baseline;width: calc(100% - 34px);font-size: 16px; font-weight: 500;line-height: 160%;color: #fff;'>저희를 어떤 경로로 알게 되셨나요?</span>
								</div>
								<div style='width: 100%;display: inline-block;vertical-align: top;font-weight: 200;font-size: 16px;line-height: 160%;color: #fff;'>
									$question5
								</div>
							</li>
						</ul>
					</div>
				</td>
			</tr>
			<tr style='display: block; width: 100%;'>
				<td style='display: block; width: 100%;'>
					<div class='bottom' style='padding:32px 0;width: 100%;box-sizing: border-box;text-align: center;border-top: 1px solid #b2b2b2;'>
						<p style='font-weight: 400;font-size: 13px;line-height: 154%;text-align: center;color: #fff;display: block;margin: 0 auto 8px;'>
							<a style='font-weight: 400;font-size: 14px;line-height: 154%;text-align: center;color: #fff;display: block;margin: 0;text-decoration: none;text-transform: uppercase;' href='http://unicornsaurus.com/' target='_blank'>unicornsaurus.com</a>
						</p>
						<p style='font-weight: 400;font-size: 13px;line-height: 154%;text-align: center;color: #fff;display: block;margin: 0 auto 4px;text-transform: uppercase;'>COPYRIGHT (C) softsquared. All Rights reserved</p>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	";

    try {
        $mail = new PHPMailer(true);    
        // $mail->SMTPDebug  = 2;  //디버깅시 필요   
        $mail->CharSet = PHPMailer::CHARSET_UTF8; //안쓰면 한글깨짐
        $mail->SMTPAuth    = true;  
        $mail->SMTPSecure  = 'ssl';    

		// 네이버
        $mail->Host        = 'smtp.naver.com';   
        $mail->Port        = 465;
        $mail->Mailer        = 'smtp';   
        $mail->Username    = 'skgm1156@naver.com';     
        $mail->Password    = 'W49ESHBZX4TU';   
        $mail->addAddress('skgm1156@naver.com', '받는사람');  
        $mail->setFrom('skgm1156@naver.com' , '보낸사람');  

        $mail->isHTML(true);  
        // $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/image/logo.png', 'logo');
		$mail->Subject = '유니콘사우르스 구독플랜 상담 신청서 [' . $name . ']';        $mail->Body        = $body;    
    
        for ($i = 1; $i <= 3; $i++) {
            $file[$i] = $_FILES['userfile' . $i]['name'];
            $target[$i] = __DIR__ . "/temp/" . $file[$i];  // 절대 경로로 수정
            if (move_uploaded_file($_FILES['userfile' . $i]['tmp_name'], $target[$i])) {
                chmod("$target[$i]", 0777);
            }
    
            if ($file[$i] != "") {
                $mail->addAttachment($target[$i], $file[$i]);
            }
        }
    
        $mail->send();
    
        for ($i = 1; $i <= 3; $i++) {
            if ($file[$i] != "") @unlink($target[$i]);
        }
    
        echo "<script>location.replace('./')</script>";
    
    } catch (phpmailerException $e) {
        echo $e->errorMessage();
        return false;
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
    
    
?>