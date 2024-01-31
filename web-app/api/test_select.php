<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SESSION['username'] == NULL) {
    echo "<h1>ACCESS DENIED</h1>";
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