<?php 


function loginActivity($db, $username, $status) {
    $stmt = $db->prepare("INSERT INTO Activity (Date, UserName, Event) VALUES (SYSDATE(), $username, 'Login: $status')");
    $stmt->execute();
}




?>