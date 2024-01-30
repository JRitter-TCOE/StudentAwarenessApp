<?php

session_start();

// OLD METHOD

$agency_user = 'wpd';
$agency_pass = 'root';

$school_user = 'EastW';
$school_pass = 'root';


if ($_POST['username'] == $agency_user && $_POST['password'] == $agency_pass) {
  echo json_encode(array("data"=>"SUCCESS"));
  $_SESSION['username'] = $_POST['username'];
}
else if ($_POST['username'] == $school_user && $_POST['password'] == $school_pass) {
    echo json_encode(array("data"=>"SUCCESS"));
    $_SESSION['username'] = $_POST['username'];
  }
else {
  echo json_encode(array("data"=>"FAILURE"));
}



// NEW METHOD

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// include('./db_connection.php');

// $table = 'Login';

// $username = $_POST['username'];

// foreach($db->query("SELECT UserPass FROM $table where UserName = $username") as $row) {
//     if ($row['UserPass'] == $_POST['password']) {
//       echo json_encode(array("data"=>"SUCCESS"));
//       $_SESSION['username'] = $_POST['username'];
//     }
//     else {
//       echo json_encode(array("data"=>"FAILURE"));
//     }
//     break;
// }
?>