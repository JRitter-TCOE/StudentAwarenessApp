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
    $handled_by = $_SESSION['orgName'];
    
    // Get DB connection
    include('./db_connection.php');
    include('./logActivity.php');
    
    // Execute update of status for student report in db
    $stmt = $db->prepare("UPDATE Students SET Status = 1, Handled_by = :handled_by WHERE StudentID = :studentID");

    $stmt->bindParam(":studentID", $studentID, PDO::PARAM_INT);
    $stmt->bindParam(":handled_by", $handled_by, PDO::PARAM_STR);

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