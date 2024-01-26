<?php

session_start();


if ($_SESSION['username'] == NULL) {
    echo "<h1>ACCESS DENIED</h1>";
    echo "<p>" . $_SESSION['username'] ."</p>";
    die();
}


include('./db_connection.php');



$table = 'Agencies';

echo "<ol>";
foreach($db->query("SELECT AgencyName FROM $table") as $row) {
    echo "<li>" . $row['AgencyName'] . "</li>";
}
echo "</ol>";



?>