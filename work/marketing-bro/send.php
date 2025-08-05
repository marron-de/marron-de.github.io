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
	$phone = inputPost($_POST['phone']); // 연락처
	$email = inputPost($_POST['email']); // 이메일
    $field1 = ''; // 광고유형
    if (!empty($_POST['field1_1'])) { $field1 .= inputPost($_POST['field1_1']) . ", "; }
    if (!empty($_POST['field1_2'])) { $field1 .= inputPost($_POST['field1_2']) . ", "; }
    if (!empty($_POST['field1_3'])) { $field1 .= inputPost($_POST['field1_3']) . ", "; }
    $field1 = rtrim($field1, ", ");


    $region = inputPost($_POST['region']); // 지역 
    $content = inputPost($_POST['content']); // 내용/예산

    $subject = "[마케팅브로 메일문의] $name 님이 문의하셨습니다.";



    $body = "
    <table align='center' border='0' cellpadding='0' cellspacing='0' class='mail_box' style='font-family: Pretendard,-apple-system,BlinkMacSystemFont,system-ui,Roboto,Helvetica Neue,Segoe UI,Apple SD Gothic Neo,Noto Sans KR,Malgun Gothic,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,sans-serif; margin: 20px auto; background: #fff; border: 1px solid #ddd; background-color: #fff; border-radius: 20px;padding: 0 30px 30px;' width='600'>
        <tbody>
            <tr>
                <td>
                    <div class='title_box' style='display: block; margin: 55px 0 20px; padding-bottom: 0px; text-align: center;'>
                        <img src='https://marketingbro1.mycafe24.com/img/logo_bk.png' alt='' style='max-width: 100%; max-width: 175px;' class='fr-fic fr-dib'>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style='margin-bottom: 40px; text-align: center;'>
                        <p style='margin: 0; padding: 0;font-size: 14px;color: #000000;
                        line-height: 1.6;'>홈페이지로부터 문의가 접수되었습니다.</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <table border='0' cellpadding='0' cellspacing='0' class='mail_box' style='font-size: 14px;'  width='100%'>
                        <thead>
                            <tr>
                                <th scope='col' colspan='2' style='background-color: #f5f5f7; padding: 15px 10px; border: 1px solid #e2e2e2; border-top: 3px solid #439871;'>문의내용</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>이름</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$name</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>업체명</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$company</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>연락처</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$phone</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>이메일</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$email</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>광고유형</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$field1</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>지역</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$region</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>내용/예산</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$content</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>   
                <td>
                    <div style='margin: 25px 0;'>
                        <p style=' margin: 0; padding: 0; font-size: 14px;color: #666666;
                        line-height: 1.6;'>ㆍ 본 메일은 마케팅브로에서 이메일 서비스 수신동의 하에 발송된 메일입니다.</p>
                        <p style=' margin: 0; padding: 0; font-size: 14px;color: #666666;
                        line-height: 1.6;'>ㆍ 홈페이지: http://마케팅브로.com</p>
                        <p style=' margin: 0; padding: 0; font-size: 14px;color: #666666;
                        line-height: 1.6;'>ㆍ E-mail: marketingbro.company@gmail.com</p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>";
    

    try {
        $mail = new PHPMailer(true);    
        // $mail->SMTPDebug  = 2;  //디버깅시 필요   
        $mail->CharSet = PHPMailer::CHARSET_UTF8; //안쓰면 한글깨짐
        $mail->SMTPAuth    = true;  
        $mail->SMTPSecure  = 'ssl';    
        $mail->Host        = 'smtp.gmail.com';   
        $mail->Port        = 465;
        $mail->Mailer        = 'smtp';   
        $mail->Username    = 'marketingbro.company@gmail.com';     
        $mail->Password    = 'vtxdveyazzuzaeci';   
        $mail->addAddress('marketingbro.company@gmail.com', '받는사람');  
        $mail->setFrom('marketingbro.company@gmail.com' , '보낸사람');  
        $mail->isHTML(true);  
        $mail->Subject     = $subject;   
        $mail->Body        = $body;  
    
        for ($i = 1; $i <= 1; $i++) {
            if (isset($_FILES['userfile' . $i]) && $_FILES['userfile' . $i]['error'] === UPLOAD_ERR_OK) {
                $file[$i] = $_FILES['userfile' . $i]['name'];
                $target[$i] = __DIR__ . "/temp/" . $file[$i];  
                if (move_uploaded_file($_FILES['userfile' . $i]['tmp_name'], $target[$i])) {
                    chmod("$target[$i]", 0777);
                }
                if ($file[$i] != "") {
                    $mail->addAttachment($target[$i], $file[$i]);
                }
            }
        }
    
        $mail->send();
    
        for ($i = 1; $i <= 1; $i++) {
            if ($file[$i] != "" && file_exists($target[$i])) {
                @unlink($target[$i]);
            }
        }
    
        echo "<script>location.replace('./contact.php')</script>";

    
    } catch (phpmailerException $e) {
        echo $e->errorMessage();
        return false;
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
    
    
?>