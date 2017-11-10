<?php
function enviar_email($Eu, $Para, $Assunto, $Texto){

require_once("/home/u445734061/public_html/API/PHPMailer/PHPMailerAutoload.php");

header('Access-Control-Allow-Origin: *');
ini_set('default_charset','UTF-8');

$titulo = utf8_decode($Assunto);
$corpo = utf8_decode($Texto);


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 4;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mx1.hostinger.com.br;mx1.hostinger.com.br';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'robo@fourweeks.com.br';                 // SMTP username
    $mail->Password = '4fourweeks';                           // SMTP password
    //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    //$mail->SMTPAutoTLS = false;
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('robo@fourweeks.com.br', 'FourWeeks - Robo');
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress($Para);               // Name is optional
    $mail->addReplyTo('robo@fourweeks.com.br', 'FourWeeks - Robo');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $titulo;
    $mail->Body    = $corpo;
    $mail->AltBody = strip_tags($corpo);

    $mail->send();
    return 'OK';
} catch (Exception $e) {
    return $mail->ErrorInfo;
}



}

?>