<?php

$data = $db->query("SELECT 
    SchoolName,
    SchoolContact,
    SchoolEmail
    FROM Schools
    WHERE Schools.DistrictID = '$districtID'
");

?>