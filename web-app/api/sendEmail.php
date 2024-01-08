<?php
$to = 'jritter@dcesd.org';
$subject = 'Test';
$message = 'This is a test email.';
$headers = 'From:jritter@dcesd.org';

mail($to, $subject, $message, $headers);
?>