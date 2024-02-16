<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get School ID from POST

$template = include("emailNotification.html");

$to = "jritter@tcoek12.org";
$subject = "HOSWC Student Notification";
$message = "$template";
$headers = "From: HOSWC@tcoek12.org \r\n";

mail($to, $subject, $message, $headers);

echo "Email Sent";
?>