<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Wszystkie pola są wymagane!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'kontakt@zwyrazem.pl'; 
$email_subject = "Website Contact Form:  $name";
$email_body = "Pojawiła się nowa wiadomość, wysłana poprzez formularz kontaktowy.\n\n"."Szczegóły wiadomości:\n\nImię: $name\n\nEmail: $email_address\n\nWiadomość:\n$message";
$headers = "From: noreply@zwyrazem.pl\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>