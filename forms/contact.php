<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$appliedfor = $_POST['appliedfor'];
$currentlocation = $_POST['currentlocation'];
$relocate = $_POST['relocate'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone  \n Email: $email \n Applied For: $appliedfor \n Current Location: $currentlocation \n Re-Location: $relocate \n Message: $message";
$recipient = "info@mangosorange.co.in";
$subject = "Web Query from Mangosorange.co.in";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! We will get back to you soon";
?>