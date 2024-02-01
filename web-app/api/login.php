<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('./db_connection.php');

$table = 'Login';

$username = $_POST['username'];

$result = $db->query("SELECT UserPass, Role, OrgID FROM $table where UserName = '$username'")[0];

if ($result['UserPass'] == $_POST['password']) {
  echo json_encode(array("data"=>"SUCCESS"));
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['role'] = $result['Role'];
  $_SESSION['orgID'] = $result['OrgID'];
}
else {
  echo json_encode(array("data"=>"FAILURE"));
}

?>