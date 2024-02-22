<?php 


function loginActivity($db, $username, $status) {
    $stmt = $db->prepare("INSERT INTO Activity (Date, UserName, Event) VALUES (SYSDATE(), :username, 'Login: :status')");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    $stmt->execute();
}

function reportCreated($db, $username, $status) {
    $stmt = $db->prepare("INSERT INTO Activity (Date, UserName, Event) VALUES (SYSDATE(), :username, 'Create Report: :status')");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    $stmt->execute();
}

function studentHandled($db, $username, $status) {
    $stmt = $db->prepare("INSERT INTO Activity (Date, UserName, Event) VALUES (SYSDATE(), :username, 'Student Handled: :status')");
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    $stmt->execute();
}



?>