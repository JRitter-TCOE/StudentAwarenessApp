<?php

session_start();

$user = 'wpd';
$pass = 'root';


if ($_POST['username'] == $user && $_POST['password'] == $pass) {
  echo json_encode(array("data"=>"SUCCESS"));
  $_SESSION['username'] = $_POST['username'];
}
else {
  echo json_encode(array("data"=>"FAILURE"));
}



?>