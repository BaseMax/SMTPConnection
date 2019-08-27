<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
//////////////////////////////////////
$mail=new PHPMailer();
try {
	$mail->IsSMTP();
	$mail->CharSet ='UTF-8';
	$mail->Host="mail.isti.ir";
	// $mail->SMTPDebug=1;
	// $mail->SMTPDebug=2;
	// $mail->SMTPDebug=3;
	$mail->SMTPDebug=4;
	$mail->SMTPAuth=true;
	$mail->Port=25;// You can change it.
	$mail->Username="test@isti.ir";
	$mail->Password="************";
	// This is required to disable check(verify) step of the SSL...
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true,
		)
	);
	$mail->setFrom('test@isti.ir', 'Max Base');
	$mail->addAddress('maxbasecode@gmail.com', 'Max Base');
	$mail->addAddress('max@asrez.com', 'Max');
	$mail->isHTML(true);
	$mail->Subject ='Here is the subject';
	$mail->Body='This is the HTML message body <b>in bold!</b>';
	$mail->AltBody ='This is the body in plain text for non-HTML mail clients';
	$mail->send();
	echo 'Message has been sent';
}
catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
