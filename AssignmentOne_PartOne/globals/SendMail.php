<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Download PHP mailer library from Github and add to project
//Turn on two-step verification code from email account to be used
//Get app password for the email

require './mailer/src/Exception.php';
require './mailer/src/PHPMailer.php';
require './mailer/src/SMTP.php';
class SendMail{
	public function SendeMail($details, $conf){
		if(!empty($details["sendToEmail"]) & !empty($details["sendToName"]) & !empty($details["emailSubjectLine"]) & !empty($details["emailMessage"])){
			
			$name = "JustBeth";
			$emailFrom = $conf["au_email_address"]; 
			$subject = $details["emailSubjectLine"];
			$message = $details["emailMessage"];
		try {
			$mail = new PHPMailer(true);
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com'; //main SMTP server
			$mail->SMTPAuth = true; //enable SMTP Authentication
			$mail->Username = $emailFrom; //Username
			$mail->Password = 'ewjlabxvdlkhhexb'; //secret password of email account awdjldafizeqtvrg-Dennis
			$mail->Port = 465;
			$mail->SMTPSecure = 'ssl';
			$mail->isHTML(true);
			//Recipients details
			$mail->setFrom($emailFrom, $name); //Set sender 
			$mail->addAddress($details["sendToEmail"]); //Recipient
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