<?php 
session_start();
include('../api/db_connection.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<select id='school_select'>
  <option value="">--Please Select School--</option>
  <?php 

  $table = "Schools";

  foreach($db->query("SELECT SchoolID, SchoolName FROM $table") as $row) {
    $value = $row["SchoolID"];
    $name = $row["SchoolName"]

    echo "<option value=$value>$name</option>";
  }

  ?>
</select>