<?php
// check if fields passed are empty
if(empty($_POST['name1'])  		||
   empty($_POST['phone1']) 		||
   empty($_POST['email1']) 		||
   empty($_POST['message1'])	||
   !filter_var($_POST['email1'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name1'];
$phone = $_POST['phone1'];
$email_address = $_POST['email1'];
$message = $_POST['message1'];
	
// create email body and send it	
$to = 'fedesolanog@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Modern Business Contact Form:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "You have received a new message from your website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>