<?php 

session_start();


$inc_date = $_POST['inc_date'];
$inc_time = $_POST['inc_time'];
$agency = $_SESSION['orgID'];
$reported_by = $_POST['reported_by'];
$case_num = $_POST['case_num'];
$child_fname = $_POST['child_fname'];
$child_lname = $_POST['child_lname'];
$child_dob = $_POST['child_dob'];
$school = $_POST['school'];

if ($child_dob == '') {
    $child_dob = "NULL";
}


include("./db_connection.php");

try {

    $table = "Students";

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
            $school,
            '$child_fname',
            '$child_lname',
            $child_dob,
            '$inc_date',
            '$inc_time',
            '$agency',
            '$reported_by',
            '$case_num',
            0
        )
    ");

    $stmt->execute();

    echo json_encode(array("data"=>"SUCCESS"));

}
catch (Exception $e) {
    echo json_encode(array("data"=>"FAILURE", "error"=>$e));
}
?>