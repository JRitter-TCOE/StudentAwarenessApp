<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$to = 'jritter@dcesd.org';
$subject = 'Test';
$message = 'This is a test email.';
$headers = 'From:jritter@dcesd.org';

mail($to, $subject, $message, $headers);

echo "Email Sent";
?>