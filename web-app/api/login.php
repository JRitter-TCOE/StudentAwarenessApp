<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('./db_connection.php');

$table = 'Login';
$username = $_POST['username'];


$stmt = $db->prepare("SELECT UserPass, Role, OrgID FROM $table where UserName = '$username'");
$stmt->execute();
$row = $stmt->fetch();

// Log in to site checking credentials in DB
if ($row['UserPass'] == $_POST['password']) {
  echo json_encode(array("data"=>"SUCCESS"));
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['role'] = $row['Role'];
  $_SESSION['orgID'] = $row['OrgID'];
}
else {
  echo json_encode(array("data"=>"FAILURE"));
  die();
}

// Save school name if role is "School"
if ($_SESSION['role'] == "School") {
  $table = "Schools";
  
  $stmt = $db->prepare("SELECT SchoolName FROM $table where SchoolID = ?");
  $stmt->execute([$_SESSION['orgID']]);
  $row = $stmt->fetch();
  
  $_SESSION['schoolName'] = $row['SchoolName'];
}

?>