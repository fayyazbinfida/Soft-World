<?php
$name="Name : ".$_POST['full_name']."<br>";
$email="Your Email :".$_POST['email']. "<br>";
$phone="Your Phone :".$_POST['phone']. "<br>";
$your_message="Your Comments :".$_POST['message']. "<br>";
$message = "
 \n $name \n 
 \n $email \n 
 \n $phone \n 
 \n $your_message \n
";
echo $message;
include "PHPMailer_5.2.4/class.phpmailer.php"; 


$mail = new PHPMailer;
 $mail->isSMTP();                                      
 $mail->Host = 'smtp.gmail.com';

 $mail->SMTPAuth = true;          
 $mail->Username = 'softworldwebsite@gmail.com';
 $mail->Password = 'p@55WorD';           
 $mail->SMTPSecure = 'tls';              
 $mail->Port = 587;                      
 $mail->setFrom('saqib@softworld.com.pk', 'Mailer');
 $mail->addAddress($your_email, 'Name');
 $mail->isHTML(true);                              
 $mail->Subject = 'Here is the subject';
 $mail->Body    = $message;
 $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

 if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
    echo 'Message has been sent';
 }
?>