<?php 


function loginActivity($username, $status) {
    $stmt = $db->prepare("INSERT INTO Activity (Date, UserName, Event) VALUES (GETDATE(), $username, 'Login: $status')");
    $stmt->execute();
}




?>