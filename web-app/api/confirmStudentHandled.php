<?php 
session_start();


try {
    $studentID = $_POST['studentId'];
    
    include('./db_connection.php');
    
    $stmt = $db-prepare("UPDATE Students SET Status = 1 WHERE StudentID = '$studentID'");
    $stmt->execute();

    echo json_encode(array('data'=>'SUCCESS'));
}
catch (Exception $e) {
    echo json_encode(array("data"=>'FAILURE', 'error'=>$e));
}



?>