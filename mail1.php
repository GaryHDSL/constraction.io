<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Phone: $phone \n Message: $message";
$recipient = "garyernest8@gmail.com";
$subject = "New Pawn Client";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You for contacting the Cash Pawn Starts!" . " -" . "<a href='http://cashpawnstars.co.za' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
