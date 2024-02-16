<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$to = "jritter@tcoek12.org";
$subject = "Site Test";
$message = "This is a test email from hoswc.tcoek12.com.";
$headers = "-fjritter@tcoek12.org";

mail($to, $subject, $message, $headers);

echo "Email Sent";
?>