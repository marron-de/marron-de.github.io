<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$recaptchaSecret = '6LcNOWorAAAAAPDSk9cBkbAl50HA9UD_dqkkrvSd';
$recaptchaToken = $_POST['g-recaptcha-response'] ?? '';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
    'secret' => $recaptchaSecret,
    'response' => $recaptchaToken
]));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// 결과 디버깅
if ($response === false) {
    echo "<script>window.parent.endLoading('cURL call failed.');</script>";
    exit;
}

$responseData = json_decode($response, true);
if (!$responseData['success'] || $responseData['score'] < 0.5) {
    echo "<script>window.parent.endLoading('reCAPTCHA verification failed.');</script>";
    exit;
}

function sanitize_input($value) {
    $value = trim($value);
    $value = strip_tags($value);
    $value = str_replace(array("\r", "\n"), '', $value);
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

// Receive and sanitize POST data
$firstName = isset($_POST['cs_firstName']) ? sanitize_input($_POST['cs_firstName']) : '';
$lastName  = isset($_POST['cs_lastName'])  ? sanitize_input($_POST['cs_lastName'])  : '';
$email     = isset($_POST['cs_email'])     ? sanitize_input($_POST['cs_email'])     : '';
$phone     = isset($_POST['cs_phoneNumber']) ? sanitize_input($_POST['cs_phoneNumber']) : '';
$message   = isset($_POST['cs_message'])   ? nl2br(htmlspecialchars($_POST['cs_message'], ENT_QUOTES, 'UTF-8')) : '';

$fullName = $firstName . ' ' . $lastName;

// Validate email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email format.');
}

$mail = new PHPMailer(true);

try {
    // 서버 설정
	$mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->Host       = 'smtp-relay.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'healsy@healsy.com.au'; // 지스윗 이메일
    $mail->Password   = 'fqmv rbls xqmb xzqx'; // 앱 비밀번호 입력
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // 또는 'tls'
    $mail->Port       = 587;

    $mail->setFrom('healsy@healsy.com.au', 'Healsy Web Form'); // SMTP 인증 계정
	$mail->addAddress('healsy@healsy.com.au', 'Healsy Admin'); // 수신자: 본사
	$mail->addReplyTo($email, $fullName); // 회신 주소: 고객 이메일

    $mail->Subject = '=?UTF-8?B?' . base64_encode("[Healsy] Contact Form Submission - " . $fullName) . '?=';

    $mail->isHTML(true);
    $mail->Body = "
		<h3>New Contact Form Submission</h3>
        <p><strong>Name:</strong> {$fullName}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone Number:</strong> {$phone}</p>
        <p><strong>Message:</strong><br>{$message}</p>
    ";

    $mail->send();
	
    echo "<script>window.parent.endLoading('Your message has been sent successfully.');</script>";
} catch (Exception $e) {
    //echo "Failed to send email: {$mail->ErrorInfo}";
	echo "<script>window.parent.endLoading('Failed to send message. Please try again later.');</script>";
}
?>
