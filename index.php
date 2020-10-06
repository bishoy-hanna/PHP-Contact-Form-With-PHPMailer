<?php
/*
** Notes **
 -- This Script Cannot work in Localhost
 -- This Script Written By: Bishoy Hanna in (2020-10-06)
 -- Open Source
*/


# This Is Massage Body .. You Can Write HTML Codes
$bodyMSG = "

<center>

Hello Massage Testing

</center>

";          
$body = $bodyMSG;   
$subject = "New Massage From User";
  
// Mail To
$email_to = '';

 // From Mail
$fromserver = "from@test.com"; 
# include PHPMailer Library
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = ""; // Enter your host here
$mail->SMTPAuth = true; 
$mail->Username = ""; // Enter your email here
$mail->Password = ""; //Enter your password here
$mail->Port = 25;
$mail->IsHTML(true);
$mail->From = $send_email;
$mail->FromName = "Massage From User";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
      echo "Massage Sended !";
    
    
 }






?>


<!