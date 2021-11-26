<?php
$name = $_POST["name"];
$sender_email = $_POST["email"];
$object = $_POST["object"];
$message = $_POST["message"];

$email_from = "info@aiandethics.com"

$email_object = "New Form"

$email_body = "Username: $name.\n".
"Email: $sender_email.\n". "Object: $object.\n".
"Message: $message.\n";

$to = "my.email@gmail.com"

$header = "From: $email_from \r\n";

$header . "Reply to: $sender_email \r\n";

mail($to, $email_object, $email_body, $header);

header("Location: contacts.html"); /*after submission, the user stays in the same page*/
?>