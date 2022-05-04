<?php

    $email = $_POST["EmailCad"];
    $senha = $_POST["SenhaCad"];
    $phone = $_POST["PhoneCad"];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
    $mail = new PHPMailer();
    // Configuração
    $mail->Mailer = "smtp";
    $mail->IsSMTP();
    $mail->CharSet = 'UTF-8';   
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;     
    $mail->SMTPSecure = 'ssl'; 
    $mail->Host = 'smtp.gmail.com'; 
    $mail->Port = 465;
    // Detalhes do envio de E-mail
    $mail->Username = 'yourfinance2103@gmail.com'; 
    $mail->Password = 'finance2103';
    $mail->SetFrom('yourfinance2103@gmail.com', 'Your Finance');
    $mail->addAddress('viniciustaschnerwaltrick1@gmail.com','');
    $mail->Subject = "Confirme seu email";

    $token = random_int(10000, 99999);

    $mail->msgHTML("token: ". $token);
    $mail->send();


?>
