<?php

$stmt = $db->prepare("SELECT 
    Status, 
    IncidentDate, 
    FirstName, 
    LastName, 
    DateOfBirth,
    StudentID,
    SchoolName,
    Handled_by
    FROM Students
    INNER JOIN Schools ON Schools.SchoolID = Students.SchoolID
    ORDER BY Status ASC, StudentID DESC
    LIMIT $limit
");

$stmt->execute();

$entries = $stmt->fetchAll();

?>