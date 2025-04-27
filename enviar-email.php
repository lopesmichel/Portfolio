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

    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $mensagem = nl2br(htmlspecialchars($_POST['mensagem']));

    $mail->Body = "
        <strong>Nome:</strong> {$nome}<br>
        <strong>Email:</strong> {$email}<br>
        <strong>Telefone:</strong> {$telefone}<br>
        <strong>Mensagem:</strong><br>{$mensagem}
    ";

    $mail->send();

    echo json_encode(['success' => true, 'message' => 'Mensagem enviada com sucesso!']);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Erro ao enviar: ' . $mail->ErrorInfo]);
}
