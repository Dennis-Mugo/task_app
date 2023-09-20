<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include_once 'signUp_Process.php';
require_once 'PHPMailer/vendor/autoload.php';

function Code()
{
    global $code;
    return $code;
}
$str = rand();
$code = md5($str);

// $name = FullName();
// $email = Email();
$spot_user = "SELECT * FROM `Users`;";
$users = $conn->query($spot_user);

print $name . Code();

$mail = new PHPMailer();

try {
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bethelhemtesfaye95@gmail.com';
    $mail->Password = 'ytosesbnouyqgcnc';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress($email);
    $mail->Subject = "Email Verification";
    $mail->Body = "Hello $name, Here is the verification code: $code";
    $mail->isHTML(true);



    if ($mail->send()) {
        header("Location: ../SignUp_Verify.php");
    } else {
        print 'Message could not send...' . $mail->ErrorInfo;
    }
} catch (Exception $error) {
    print 'ERROR';
}