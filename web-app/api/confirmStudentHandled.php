<?php 
session_start();

//Check to see if user is logged in and has proper role.
if (isset($_SESSION['username']) && isset($_SESSION['role'])) {
    if (!($_SESSION['role'] == 'School' || $_SESSION['role'] == 'District' || $_SESSION['role'] == 'Admin')) {
        die();
    }
}
else {
    die();
}


try {

    // Get StudentID from POST params
    $studentID = $_POST['studentID'];
    
    // Get DB connection
    include('./db_connection.php');
    include('./logActivity.php');
    
    // Execute update of status for student report in db
    $stmt = $db->prepare("UPDATE Students SET Status = 1 WHERE StudentID = :studentID");

    $stmt->bindParam(":studentID", $studentID, PDO::PARAM_INT);

    $stmt->execute();

    // Return Success flag
    echo json_encode(array('status'=>'SUCCESS', 'studentID'=>"$studentID"));
    studentHandled($db, $_SESSION['username'], 'SUCCESS');
}
catch (Exception $e) {

    // Return Failure flag and error message
    echo json_encode(array("status"=>'FAILURE', 'error'=>$e));
    studentHandled($db, $_SESSION['username'], 'FAILURE');

}



?>