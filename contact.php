<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comsc = $_POST['comsc'];
$message = $_POST['message'];
$formcontent = " From: $name \n Email: $email \n Company/School: $comsc \n Message: $message";
$subject = "Contact Form";
$recipient = "rdp.0127@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='contact.html'> Return Home</a>";
?>
