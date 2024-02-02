<?php 
include('../api/db_connection.php');
?>

<select id='school_select'>
  <option value="">--Please Select School--</option>
  <?php 

  $table = "Schools";

  foreach($db->query("SELECT SchoolID, SchoolName FROM $table") as $row) {
    $value = $row["SchoolID"];
    $name = $row["SchoolName"];

    echo "<option value=$value>$name</option>";
  }

  ?>
</select>