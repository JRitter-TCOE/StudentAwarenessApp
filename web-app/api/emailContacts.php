<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get School ID from POST

$template = file_get_contents('emailNotification.html');
$template .= '<p>'. date("Y-m-d h:i:sa") .'</p>'

$to = "jritter@tcoek12.org";
$subject = "HOSWC Student Notification";
$message = $template;
$headers = "From: HOSWC@tcoek12.org \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($to, $subject, $message, $headers);

echo "Email Sent";
?>