<?php

session_start();

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Get DB connection
include('./db_connection.php');
include("./logActivity.php");

// Set table name
$table = 'Login';

// Get username from POST params
$username = $_POST['username'];

// Fetch password, role and orgID from DB
$stmt = $db->prepare("SELECT UserPass, Role, OrgID FROM $table where UserName = '$username'");
$stmt->execute();
$row = $stmt->fetch();

// Log in to site checking credentials in DB and set standard session variables
if ($row['UserPass'] == $_POST['password']) {
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['role'] = $row['Role'];
  $_SESSION['orgID'] = $row['OrgID'];
  echo json_encode(array("status"=>"SUCCESS", "role"=>$_SESSION['role']));
  loginActivity($_POST['username'], 'SUCCESS');
}
else {
  echo json_encode(array("status"=>"FAILURE"));
  loginActivity($_POST['username'], 'FAILURE');
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
else if ($_SESSION['role'] == "District") {
  $table = "Districts";
  
  $stmt = $db->prepare("SELECT DistrictName FROM $table where DistrictID = ?");
  $stmt->execute([$_SESSION['orgID']]);
  $row = $stmt->fetch();
  
  $_SESSION['orgName'] = $row['DistrictName'];
}

?>