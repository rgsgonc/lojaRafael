<?php
session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

require_once("PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->isSMTP();
$mail-> Host = 'smtp.gmail.com';
$mail-> Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "rgs.gonc@gmail.com";
$mail->Password = "********"; //aqui colocar a senha do email.

$mail->setFrom ("rgs.gonc@gmail.com", "AKA Store");
$mail->addAddress("rgs.gonc@gmail.com");
$mail->Subject = "Contato AKA Store"; //titulo do email.
$mail->msgHTML ("<html>De: {$nome}<br/>Email: {$email}<br/>Mensagem: {$mensagem}</html>");
$mail->AltBody = "De: {$nome}\nEmail: {$email}\n Mensagem: {$mensagem}";

if($mail->send()){
  $_SESSION["success"] = "Mensagem enviada com sucesso";
  header("Location: index.php");
}else{
  $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
  header("Location: contato.php");
}
die();
