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

    $project = inputPost($_POST['project']); // 프로젝트명

    $field1 = ''; // 프로젝트 분야1
    if (!empty($_POST['field1_1'])) { $field1 .= inputPost($_POST['field1_1']) . ", "; }
    if (!empty($_POST['field1_2'])) { $field1 .= inputPost($_POST['field1_2']) . ", "; }
    if (!empty($_POST['field1_3'])) { $field1 .= inputPost($_POST['field1_3']) . ", "; }
    if (!empty($_POST['field1_4'])) { $field1 .= inputPost($_POST['field1_4']) . ", "; }
    if (!empty($_POST['field1_5'])) { $field1 .= inputPost($_POST['field1_5']) . ", "; }
    if (!empty($_POST['field1_6'])) { $field1 .= inputPost($_POST['field1_6']) . ", "; }
    if (!empty($_POST['field1_7'])) { $field1 .= inputPost($_POST['field1_7']) . ", "; }
    $field1 = rtrim($field1, ", ");

    $field2 = ''; // 프로젝트 분야2
    if (!empty($_POST['field2_1'])) { $field2 .= inputPost($_POST['field2_1']) . ", "; }
    if (!empty($_POST['field2_2'])) { $field2 .= inputPost($_POST['field2_2']) . ", "; }
    if (!empty($_POST['field2_3'])) { $field2 .= inputPost($_POST['field2_3']) . ", "; }
    if (!empty($_POST['field2_4'])) { $field2 .= inputPost($_POST['field2_4']) . ", "; }
    if (!empty($_POST['field2_5'])) { $field2 .= inputPost($_POST['field2_5']) . ", "; }
    if (!empty($_POST['field2_6'])) { $field2 .= inputPost($_POST['field2_6']) . ", "; }
    $field2 = rtrim($field2, ", ");

    $name = inputPost($_POST['name']); // 성함
    $company = inputPost($_POST['company']); // 소속업체
    $position = inputPost($_POST['position']); // 직위
    $phone = inputPost($_POST['phone']); // 연락처
    $email = inputPost($_POST['email']); // 이메일
    $content = inputPost($_POST['content']); // 내용

    $subject = "[K.ACE LAB 메일문의] $name 님이 문의하셨습니다.";



    $body = '';
    $body.="
    <table align='center' border='0' cellpadding='0' cellspacing='0' class='mail_box' style='font-family: Pretendard,-apple-system,BlinkMacSystemFont,system-ui,Roboto,Helvetica Neue,Segoe UI,Apple SD Gothic Neo,Noto Sans KR,Malgun Gothic,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,sans-serif; margin: 20px auto; background: #fff; border: 1px solid #ddd; background-color: #fff; border-radius: 20px;padding: 0 30px 30px;' width='600'>
        <tbody>";

    $body.="
            <tr>
                <td>
                    <div class='title_box' style='display: block; margin: 55px 0 20px; padding-bottom: 0px; text-align: center;'>
                        <img src='https://www.kacelab.com/resources/images/logo.png' alt='' style='max-width: 100%; max-width: 175px;' class='fr-fic fr-dib'>
                    </div>
                </td>
            </tr>";   

    $body.="
            <tr>
                <td>
                    <div style='margin-bottom: 40px; text-align: center;'>
                        <p style='margin: 0; padding: 0;font-size: 14px;color: #000000;
                        line-height: 1.6;'>홈페이지로부터 문의가 접수되었습니다.</p>
                    </div>
                </td>
            </tr>";

    $body.="
            <tr>
                <td>
                    <table border='0' cellpadding='0' cellspacing='0' class='mail_box' style='font-size: 14px;'  width='100%'>
                        <thead>
                            <tr>
                                <th scope='col' colspan='2' style='background-color: #f5f5f7; padding: 15px 10px; border: 1px solid #e2e2e2; border-top: 3px solid #1D969C;'>문의내용</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>프로젝트명</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$project</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>프로젝트 분야</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$field1</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>프로젝트 분야</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$field2</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>성함</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$name</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>소속업체</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$company</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>직위</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$position</td>
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
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 140px;'>내용</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$content</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>";
    
    $body.="
            <tr>   
                <td>
                    <div style='margin: 25px 0;'>
                        <p style=' margin: 0; padding: 0; font-size: 14px;color: #666666;
                        line-height: 1.6;'>ㆍ 본 메일은 K.ACE LAB에서 이메일 서비스 수신동의 하에 발송된 메일입니다.</p>
                        <p style=' margin: 0; padding: 0; font-size: 14px;color: #666666;
                        line-height: 1.6;'>ㆍ 홈페이지: https://www.kacelab.com/</p>
                        <p style=' margin: 0; padding: 0; font-size: 14px;color: #666666;
                        line-height: 1.6;'>ㆍ E-mail: canksh@kacelab.com</p>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>";
    

    try {
        $mail = new PHPMailer(true);    
        // $mail->SMTPDebug  = 2;  //디버깅시 필요   
        // $mail->CharSet = PHPMailer::CHARSET_UTF8; //안쓰면 한글깨짐
        // $mail->SMTPAuth    = true;  
        // $mail->SMTPSecure  = 'ssl';    
        // $mail->Host        = 'smtp.dooray.com';   
        // $mail->Port        = 465;
        // $mail->Mailer        = 'smtp';   
        // $mail->Username    = 'boris7422@kacelab.com';     
        // $mail->Password    = 'rnjs9100!!';   
        // $mail->addAddress('boris7422@kacelab.com', '받는사람');  
        // $mail->setFrom('boris7422@kacelab.com' , '보낸사람'); 
        // $mail->isHTML(true);  
        // $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/img/maillogo.png', 'logo');
        // $mail->Subject     = $subject;
        // $mail->Body        = $body;    

        $mail->CharSet = PHPMailer::CHARSET_UTF8; //안쓰면 한글깨짐
        $mail->SMTPAuth    = true;  
        $mail->SMTPSecure  = 'ssl';    
        $mail->Host        = 'smtp.gmail.com';   
        $mail->Port        = 465;
        $mail->Mailer        = 'smtp';   
        $mail->Username    = 'jeong8545@gmail.com';     
        $mail->Password    = 'pxiqbuyekjjylatg';   
        $mail->addAddress('jeong8545@gmail.com', '받는사람');  
        $mail->setFrom('jeong8545@gmail.com' , '보낸사람');  
        $mail->isHTML(true);  
        // $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/image/logo.png', 'logo');
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
    
        echo "<script>location.replace('./Contact.php')</script>";

    
    } catch (phpmailerException $e) {
        echo $e->errorMessage();
        return false;
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
    
    
?>