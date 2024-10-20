<?php
    session_start();
    $_SESSION['codigo'] = rand(1000,9999);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'workdoneemail@gmail.com';                     //SMTP username
    $mail->Password   = 'vggw fqmf shyn yaxv';                               //vggw fqmf shyn yaxv
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('workdoneemail@gmail.com', 'WorkDone');
    $mail->addAddress($_SESSION['email'], 'Usuario');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    

    
    $mail->isHTML(true);                                  
    $mail->Subject = 'Codigo de verificação de Email';
    $mail->Body    = $_SESSION['codigo'];
    $mail->AltBody = $_SESSION['codigo'];

    if ($mail->send()) {
        $_SESSION['msgSucessEmail'] = "Sucess";
        return header("Location: login.php");
    } else {
        $_SESSION['msgError'] = "Erro" . $mail->ErrorInfo;
        return header("Location: login.php");
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}