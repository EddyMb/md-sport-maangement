<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once  'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$alert='';
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $message =$_POST['message'];

try{
    $mail->isSMTP();
    $mail->Host ='smtp.hostinger.fr';
    $mail->SMTPAuth= true;
    $mail->Username ='contact@mdsportsmanagement.be';
    $mail->Password = 'Auguytresorjonathan7';
    $mail->SMTPSecure = 'tls';
    $mail->Port ='587';
    $mail-> setFrom('contact@mdsportsmanagement.be');
    $mail->addAddress('contact@mdsportsmanagement.be');

    $mail->isHTML(true);
    $mail->Subject ='Message received(contact page)';
    $mail->Body ="<h3>Name: $name <br>Email: $email<br>Message: $message</h3>";

    $mail->send();
    $alert ='<div class="alert-success>
    <span>message  ien envoyé</span>
    </div>';

}catch(Exception $e){
    $alert ='<div class="alert-error">
    <span></span>
    </div>';
}
}

?>