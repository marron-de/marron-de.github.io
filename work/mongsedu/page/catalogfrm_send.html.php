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
    $gender = inputPost($_POST['gender']); // 성별
    $email = inputPost($_POST['email']); // 이메일


    $body.="
    <table align='center' border='0' cellpadding='0' cellspacing='0' class='mail_box' style='font-family: Pretendard,-apple-system,BlinkMacSystemFont,system-ui,Roboto,Helvetica Neue,Segoe UI,Apple SD Gothic Neo,Noto Sans KR,Malgun Gothic,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,sans-serif; margin: 20px auto; background: #fff; border: 1px solid #ddd; background-color: #fff; border-radius: 20px;padding: 0 30px 30px;' width='600'>
        <tbody>
            <tr>
                <td>
                    <div class='title_box' style='display: block; margin: 55px 0 20px; padding-bottom: 0px; text-align: center;'>
                        <img src='cid:logo' alt='' style='max-width: 100%; max-width: 175px;'>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div style='margin-bottom: 40px; text-align: center;'>
                        <p style='margin: 0; padding: 0;font-size: 14px;color: #000000;
                        line-height: 1.6;'>홈페이지로 부터 문의가 접수되었습니다.</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <table border='0' cellpadding='0' cellspacing='0' class='mail_box' style='font-size: 14px;'  width='100%'>
                        <thead>
                            <tr>
                                <th scope='col' colspan='2' style='background-color: #f5f5f7; padding: 15px 10px; border: 1px solid #e2e2e2; border-top: 3px solid #00a6db;'>문의내용</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 120px;'>이름</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$name</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 120px;'>성별</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$gender</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 120px;'>출생년도</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$birth</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 120px;'>관심사</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$interest</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 120px;'>회사</th>
                                <td style='border: 1px solid #e2e2e2; padding: 10px;'>$company</td>
                            </tr>
                            <tr>
                                <th style='background-color: #f5f5f7;border: 1px solid #e2e2e2; padding: 10px; width: 120px;'>상담내용</th>
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
                        line-height: 1.6;'>ㆍ 본 메일은 Marronde에서 이메일 서비스 수신동의 하에 발송된 메일입니다.</p>
                        <p style=' margin: 0; padding: 0; font-size: 14px;color: #666666;
                        line-height: 1.6;'>ㆍ Marronde http://marronde.com</p>
                        <p style=' margin: 0; padding: 0; font-size: 14px;color: #666666;
                        line-height: 1.6;'>ㆍ E-mail: jeong8545@gmail.com</p>
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


		// 구글
        $mail->Host        = 'smtp.gmail.com';   
        $mail->Port        = 465;
        $mail->Mailer        = 'smtp';   
        $mail->Username    = 'jeong8545@gmail.com';    
        $mail->Password    = '';   
        $mail->addAddress('jeong8545@gmail.com', '받는사람');  
        $mail->setFrom('jeong8545@gmail.com' , '보낸사람');  


		// 네이버
        // $mail->Host        = 'smtp.naver.com';   
        // $mail->Port        = 465;
        // $mail->Mailer        = 'smtp';   
        // $mail->Username    = 'bell1127@naver.com';     
        // $mail->Password    = '';   
        // $mail->addAddress('bell1127@naver.com', '받는사람');  
        // $mail->setFrom('bell1127@naver.com' , '보낸사람');  

        $mail->isHTML(true);  
        $mail->AddEmbeddedImage($_SERVER['DOCUMENT_ROOT'].'/image/logo.png', 'logo');
        $mail->Subject     = '테스트 메일 제목입니다.';   
        $mail->Body        = $body;    
    
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