<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'alexkiirumuzungu@gmail.com';

$email_subject = 'New Form Submission';

$emai_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $visitor_email.\n".
              "User Message: $message.\n";

$to =  'alexkiirumuzungu@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $vistor_email \r\n";

mail($to, $email_subject, $emai_body,$headers);

header("Location: contact.html")
?>