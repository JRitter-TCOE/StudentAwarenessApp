<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('./db_connection.php');

$table = 'Login';

$username = $_POST['username'];

foreach($db->query("SELECT UserPass, Role FROM $table where UserName = '$username'") as $row) {
    if ($row['UserPass'] == $_POST['password']) {
      echo json_encode(array("data"=>"SUCCESS"));
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['role'] = $row['Role'];
      $_SESSION['orgID'] = $row['OrgID'];
    }
    else {
      echo json_encode(array("data"=>"FAILURE"));
    }
    break;
}
?>