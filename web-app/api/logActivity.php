<?php 


function loginActivity($db, $username, $status) {
    $stmt = $db->prepare("INSERT INTO Activity (Date, UserName, Event) VALUES (SYSDATE(), :username, :status)");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':status', 'Login: ' . $status, PDO::PARAM_STR);
    $stmt->execute();
}

function reportCreated($db, $username, $status) {
    $stmt = $db->prepare("INSERT INTO Activity (Date, UserName, Event) VALUES (SYSDATE(), :username, :status)");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':status', 'Create Report: ' . $status, PDO::PARAM_STR);
    $stmt->execute();
}

function studentHandled($db, $username, $status) {
    $stmt = $db->prepare("INSERT INTO Activity (Date, UserName, Event) VALUES (SYSDATE(), :username, :status)");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':status', 'Student Handled: ' . $status, PDO::PARAM_STR);
    $stmt->execute();
}



?>