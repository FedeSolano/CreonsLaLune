<?php
// check if fields passed are empty
if(empty($_POST['name2'])  		||
   empty($_POST['phone2']) 		||
   empty($_POST['email2']) 		||
   empty($_POST['message2'])	||
   !filter_var($_POST['email2'],FILTER_VALIDATE_EMAIL))
   {
	echo "";
	return false;
   }
	
$name = $_POST['name2'];
$phone = $_POST['phone2'];
$email_address = $_POST['email2'];
$message = $_POST['message2'];
	
// create email body and send it	
$to = 'federicoatm@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Modern Business Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>