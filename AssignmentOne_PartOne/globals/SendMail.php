<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './mailer/PHPMailer/src/Exception.php';
require './mailer/PHPMailer/src/PHPMailer.php';
require './mailer/PHPMailer/src/SMTP.php';
class SendMail{
	public function SendeMail($details, $conf){
		if(!empty($details["sendToEmail"]) & !empty($details["sendToName"]) & !empty($details["emailSubjectLine"]) & !empty($details["emailMessage"])){
			
			$name = "Dennis Mugo";
			$emailFrom = $conf["au_email_address"];
			$subject = $details["emailSubjectLine"];
			$message = $details["emailMessage"];
		try {
			$mail = new PHPMailer(true);
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = $emailFrom;
			$mail->Password = 'awdjldafizeqtvrg';
			$mail->Port = 465;
			$mail->SMTPSecure = 'ssl';
			$mail->isHTML(true);
			$mail->setFrom($emailFrom, $name);
			$mail->addAddress($details["sendToEmail"]);
			$mail->Subject = ("$subject");
			$mail->Body = $message;
			$mail->send();
		}catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		}else{
			print_r($details);
			die("Error: Some details are missing.");
		}
		}
	}