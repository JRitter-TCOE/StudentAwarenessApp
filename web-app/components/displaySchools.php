<?php

foreach ($data as $entry) {
    
    $schoolName = $entry['SchoolName'];
    $contactName = $entry['SchoolContact'];
    $contactEmail = $entry['SchoolEmail'];

    
    echo "<div class='row entry'>
    <p class='field'>$schoolName</p>
    <p class='field'>$contactName</p>
    <p class='field'>$contactEmail</p>
    </div>";
    
}


?>