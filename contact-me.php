<?php

// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'c5975630c8f546';
    $mail->Password = 'e7c201bdb2d3cd';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 2525;

    // Email content
    $mail->setFrom($email, $name);
    $mail->addAddress('2d98cc1cf9-6ce5d1@inbox.mailtrap.io');
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send the email
    $mail->send();
    
    header("Location: sent.html");
?>
