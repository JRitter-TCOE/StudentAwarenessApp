<?php 

session_start();


//Check to see if user is logged in and has proper role.
if (isset($_SESSION['username']) && isset($_SESSION['role'])) {
    if (!($_SESSION['role'] == 'Agency')) {
        die();
    }
}
else {
    die();
}



// Get all POST params
$inc_date = $_POST['inc_date'];
$inc_time = $_POST['inc_time'];
$agency = $_SESSION['orgID'];
$reported_by = $_POST['reported_by'];
$case_num = $_POST['case_num'];
$child_fname = $_POST['child_fname'];
$child_lname = $_POST['child_lname'];
$child_dob = $_POST['child_dob'];
$school = $_POST['school'];



// Get DB connection
include("./db_connection.php");
include("./logActivity.php");

try {

    $table = "Students";

    // Prepare statement to create new report in DB
    $stmt = $db->prepare("INSERT INTO $table (
        SchoolID,
        FirstName,
        LastName,
        DateOfBirth,
        IncidentDate,
        IncidentTime,
        ReportingAgency,
        OfficerName,
        CaseNumber,
        Status 
        )
        VALUES (
            :school,
            :child_fname,
            :child_lname,
            :child_dob,
            :inc_date,
            :inc_time,
            :agency,
            :reported_by,
            :case_num,
            0
        )
    ");

    $stmt->bindParam(':school', $school);
    $stmt->bindParam(':child_fname', $child_fname);
    $stmt->bindParam(':child_lname', $child_lname);
    $stmt->bindParam(':inc_date', $inc_date);
    $stmt->bindParam(':inc_time', $inc_time);
    $stmt->bindParam(':agency', $agency);
    $stmt->bindParam(':reported_by', $reported_by);
    $stmt->bindParam(':case_num', $case_num);

    // // Set dob to NULL if not entered for SQL syntax
if ($child_dob == '') {
    $stmt->bindParam(':child_dob', "'NULL'");
}
else {
    $stmt->bindParam(':child_dob', $child_dob);
}

    // Execute SQL statment
    $stmt->execute();

    // Return Success Flag
    echo json_encode(array("status"=>"SUCCESS"));
    reportCreated($db, $_SESSION['username'], 'SUCCESS');

}
catch (Exception $e) {

    // Return Failure flag and error message
    echo json_encode(array("status"=>"FAILURE", "error"=>$e));
    reportCreated($db, $_SESSION['username'], 'FAILURE');

}
?>