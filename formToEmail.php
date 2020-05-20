<?php

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("galaminimitch@yahoo.co.uk","My subject",$msg);

// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $telephone = $_POST['email'];
// $message = $_POST['message'];
//
// $email_to = "galaminimitch@yahoo.co.uk";
// $email_subject = "New conact from website"
// $email_body = "You have received the following message from $name.\n".
//               "Messsage: $message\n.".
//               "Telephone: $telephone.\n".
//               "Email: $visitor_email.".
//
// $headers = "From: $email_to \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";
//
// mail($email_to,$email_subject,$email_body,$headers);
 ?>
