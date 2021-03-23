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
$option = $_POST['option'];
$char = $_POST['char'];
$date = $_POST['date'];
	
// Create the email and send the message
$to = 'kontakt@zwyrazem.pl'; 
$email_subject = "Wiadomosc wyslana przez formularz kontaktowy od $name";
$email_body = "Pojawila sie nowa wiadomosc, wyslana poprzez formularz kontaktowy.\n\n"."Szczegoly:\n\nImie: $name\n\nEmail: $email_address\n\nWiadomosc:\n$message\n\nRodzaj tekstu: $option\n\nIlosc znakow: $char\n\nData realizacji: $date";
$headers = "From: noreply@zwyrazem.pl\n"; 
$headers = "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>