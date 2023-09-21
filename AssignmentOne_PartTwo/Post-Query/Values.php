<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/vendor/autoload.php';
require_once 'myconnection.php';

class Values {
    private $name;
    private $email;
    private $code;

    public function __construct($name, $email, $code) {
        $this->name = $name;
        $this->email = $email;
        $this->code = $code;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
    public function getCode() {
        return $this->code;
    }

    public function sendEmail($userId) {
        $mail = new PHPMailer();
        $username = $this->getName();
        $code = $this->getCode();

        try {
            $mail->isSMTP();
        
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bethelhemtesfaye95@gmail.com';
            $mail->Password = $_ENV['SMTP_PASSWORD'];
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
        
            $mail->setFrom($this->getEmail(), $this->getName());
            $mail->addAddress($this->getEmail());
            $mail->Subject = "Email Verification";
            $mail->Body = /*html*/"Hello <strong>$username</strong>, Here is the verification code: <i>$code</i>";
            $mail->isHTML(true);
        
            if ($mail->send()) {
                header("Location: ../SignUp_Verify.php?user-id='$userId'");
            } else {
                print 'Message could not send...' . $mail->ErrorInfo;
            }
        } catch (Exception $error) {
            print 'ERROR';
        }
    }

    public function sendCode($userId) {
        $code = $this->getCode();
        $sql = "INSERT into `keys` (`key`, `user_id`) values ('$code', '$userId');";
        $connection = new MysqliConnection();
        $result = $connection->getConnection()->query($sql);
        if ($result) {
            return 'Code sent to db';
        } else {
            return 'Code not sent to db';
        }
    }

}
