<?php
require('../../PHPMailer/PHPMailerAutoload.php');


try {
    $mail = new PHPMailer(true);
    //var_dump($mail);

    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
    $mail->SMTPAuth=false;  
    $mail->isSMTP();                 
    $mail->addAddress('ouacila.b1@gmail.com', 'Joe User');
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->Host = 'localhost';
    $mail->Port = 1025;  
    $mail->setFrom('waashyw@gmail.com', 'Mailer');
    $result=$mail->send();
    echo $result;
    var_dump($mail);

} catch (Exception $e) {
    var_dump($e);
}
?>