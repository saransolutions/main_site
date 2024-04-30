<?php
/**
 * This example shows sending a message using PHP's mail() function.
 */

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom('admin@saransolutions.in');
//Set who the message is to be sent to
$mail->addAddress('saransolutions.in@gmail.com', 'Saran Solutions');
//Set the subject line
$mail->Subject = 'PHPMailer mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
$mail->Body = 'Hello, this is my message.';
//Attach an image file


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}