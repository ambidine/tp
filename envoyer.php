<?php

   date_default_timezone_set('Europe/Paris');
   // On va chercher la définition de la classe
   require '/phpmailer/PHPMailerAutoload.php';
   require('/phpmailer/class.phpmailer.php');

   $sujet = $_POST['sujet'] ;
   $message = $_POST['message'];
   $email = $_POST['email'];

	$account="aaambi9.3@gmail.com";
	$password="RuemakinE93!";
	$to=$email;
	$from="aaambi9.3@gmail.com";
	$from_name="Assani Ambidine";
	$msg=$message ;
	$subject=$sujet;
	
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port =  587;
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
	
	if(!$mail->send()){
	 echo "Mailer Error: " . $mail->ErrorInfo;
	}else{
	 echo "E-Mail has been sent";
	}
?>