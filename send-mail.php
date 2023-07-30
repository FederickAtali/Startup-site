<?php

//loading the phpmailer classes
require "vendor/autoload.php";

$message = "hi there";
$subject = "Acknowlegement";
//importing the php mailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//
$mail = new PHPMailer(true);

$mail-> SMTPDebug = SMTP::DEBUG_SERVER;

//tell phpmailer we aare using the smtp server.
$mail->isSMTP();

//enabling the smtp authentication
$mail -> SMTPAuth  = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->port = 587;

$mail-> Username = "federicktiku163@gmail.com";
$mail -> Password = "TikuEtonki5000?";

$mail -> setfrom($email, $name1);
$mail -> addAddress($email,$name1);


$mail->Subject =  $subject;
$mail->Body = $message;

$mail -> send();

echo "the email was sent.";













