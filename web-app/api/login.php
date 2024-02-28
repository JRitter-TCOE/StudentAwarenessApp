<?php

session_start();

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Get DB connection
include('./db_connection.php');
include("./logActivity.php");



// Get username from POST params
$username = $_POST['username'];

// Fetch password, role and orgID from DB
$stmt = $db->prepare("SELECT UserPass, Role, OrgID FROM Login where UserName = :username");
$stmt->bindParam(':username', $username, PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch();

// Log in to site checking credentials in DB and set standard session variables
if ($row['UserPass'] == $_POST['password']) {
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['role'] = $row['Role'];
  $_SESSION['orgID'] = $row['OrgID'];
  echo json_encode(array("status"=>"SUCCESS", "role"=>$_SESSION['role']));
  loginActivity($db, $_POST['username'], 'SUCCESS');
}
else {
  echo json_encode(array("status"=>"FAILURE"));
  loginActivity($db, $_POST['username'], 'FAILURE');
  die();
}

// Save school name if role is "School"
if ($_SESSION['role'] == "School") {
  $table = "Schools";
  
  $stmt = $db->prepare("SELECT SchoolName FROM $table where SchoolID = ?");
  $stmt->execute([$_SESSION['orgID']]);
  $row = $stmt->fetch();
  
  $_SESSION['orgName'] = $row['SchoolName'];
}

// Save district name if role is "District"
else if ($_SESSION['role'] == "District") {
  $table = "Districts";
  
  $stmt = $db->prepare("SELECT DistrictName FROM $table where DistrictID = ?");
  $stmt->execute([$_SESSION['orgID']]);
  $row = $stmt->fetch();
  
  $_SESSION['orgName'] = $row['DistrictName'];
}

else if ($_SESSION['role'] == "Admin") {
  $_SESSION['orgName'] = $_SESSION['username'];
}

?>