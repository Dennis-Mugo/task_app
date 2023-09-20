<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST["Code"];
    
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
        // $mail->Body = "Hello $name, <br>You are one step away from finishing registeration. Please <a href=\"index.php\">Click</a> to verify. ";
        $mail->Body = "You Forgot!!! Boo-hoo!!";
        $mail->isHTML(true);

        if ($mail->send()) {
            header("Location: index.php");
        } else {
            print 'Message could not send...' . $mail->ErrorInfo;
        }
    } catch (Exception $error) {
        print 'ERROR';
    }
}
?>