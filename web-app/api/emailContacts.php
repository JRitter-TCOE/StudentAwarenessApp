<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get School ID from POST



$to = "jritter@tcoek12.org";
$subject = "HOSWC Student Notification";
$message = '
<!DOCTYPE html>
<head>
    <style>
        p {
            color: red;
        }
    </style>
</head>
<body>
<h1>You have a new alert from HOSWC</h1>
<p>Please log into the <a href="https://hoswc.tcoek12.org">Trinity County School or District Portal</a> to view your notifications.<br><br>
Please DO NOT ask the student any details about the event to respect their privacy rights. Please DO treat the student with sensitivity and care.</p>
<p>'. date("Y-m-d h:i:sa") .'</p>
</body>
';
$headers = "From: HOSWC@tcoek12.org \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

mail($to, $subject, $message, $headers);

echo "Email Sent";
?>