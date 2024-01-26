<?php

include('./db_connection.php');

$table = 'Agencies';

echo "<ol>";
foreach($db->query("SELECT AgencyName FROM $table") as $row) {
    echo "<li>" . $row['AgencyName'] . "</li>";
}
echo "</ol>";



?>