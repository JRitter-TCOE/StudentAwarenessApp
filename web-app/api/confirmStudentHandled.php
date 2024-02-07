<?php 
session_start();

//TODO: Add check to see if user is logged in.


try {

    // Get StudentID from POST params
    $studentID = $_POST['studentID'];
    
    // Get DB connection
    include('./db_connection.php');
    
    // Execute update of status for student report in db
    $stmt = $db->prepare("UPDATE Students SET Status = 1 WHERE StudentID = '$studentID'");
    $stmt->execute();

    // Return Success flag
    echo json_encode(array('data'=>'SUCCESS', 'studentID'=>"$studentID"));
}
catch (Exception $e) {

    // Return Failure flag and error message
    echo json_encode(array("data"=>'FAILURE', 'error'=>$e));
}



?>