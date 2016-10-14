<?php session_start();


require 'PHPMailer-master/PHPMailerAutoload.php';

$message = $_SESSION["message"];
$To = $_SESSION["To"];

$mail = new PHPMailer;
                                   						
$mail->Host = 'smtp.gmail.com';  							
$mail->SMTPAuth = true;                          					
$mail->Username = 'corneels.els@gmail.com';               	
$mail->Password = 'Ilovesteff2';                           			
$mail->SMTPSecure = 'tls';                         				  
$mail->Port = 587;                                  					

$mail->setFrom('corneels.els@gmail.com', 'Corne');
$mail->addAddress($To);

$mail->isHTML(true);                                  			

$mail->Subject = '';
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else { header("location:step2.html");} ?>