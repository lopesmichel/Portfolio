<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

header('Content-Type: application/json'); 

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'lopesmichel.lp@gmail.com'; 
    $mail->Password   = 'cqhu dpad blxi jfcd';  
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('lopesmichel.lp@gmail.com', 'Site');
    $mail->addAddress('lopesmichel.lp@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Novo contato via site';
    $mail->Body    = "
        <strong>Nome:</strong> {$_POST['nome']}<br>
        <strong>Email:</strong> {$_POST['email']}<br>
        <strong>Telefone:</strong> {$_POST['telefone']}<br>
        <strong>Mensagem:</strong><br>{$_POST['mensagem']}
    ";

    $mail->send();


