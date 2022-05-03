<?php


    $Email = $_POST("Email");
    $Senha = $_POST("Senha");

















    $emaildest = "<script>document.write(email)</script>";

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
    $mail->SetFrom('yourfinance2103@gmail.com', 'YourFinance');
    $mail->addAddress($emaildest, '');
    $mail->Subject = "Confirmar Criacao de conta";
    $mail->msgHTML("Clique no link para confirmar seu email");
    $mail->send();
    
    /// anotando pra nao esquecer 
    /// logica 
    /// fazer funcao com tudo q esta em cima.
    /// mandar essa funcao pro js register
    /// executar funcao la, apos verificar o regex, entao se regex email,senha etc == true, roda a funcao pra mandar email d comfirmacao

?>
