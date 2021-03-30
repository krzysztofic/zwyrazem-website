<?php

include("captcha-code.php");

// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Wszystkie pola są wymagane!";
	return false;
   }
	
   if($_POST) {
      function getCaptcha($SecretKey){

         $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
         $Return = json_decode($Response);
         return $Return;
      }
      $Return = getCaptcha($_POST['g-recaptcha-response']);

         if ($Return->success ==true && $Return->score > 0.5) {
            echo "Wszystko ok";
         }else{
            echo "Spróbuj później...";
         }
      
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$option = $_POST['option'];
$char = $_POST['char'];
$date = $_POST['date'];

$headers = 'Content-type: text/html; charset=utf-8';
	
// Create the email and send the message
$to = 'kontakt@zwyrazem.pl'; 
$email_subject = "Wiadomosc wyslana przez formularz kontaktowy od $name";
$email_body = "Pojawila sie nowa wiadomosc, wyslana poprzez formularz kontaktowy.\n\n"."Szczegoly:\n\nImie: $name\n\nEmail: $email_address\n\nWiadomosc:\n$message\n\nRodzaj tekstu: $option\n\nLiczba znakow: $char\n\nData realizacji: $date";
$headers = "From: noreply@zwyrazem.pl\n"; 
$headers = "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>