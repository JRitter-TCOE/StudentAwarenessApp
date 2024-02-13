<?php 

try {

  include('../../api/db_connection.php');
  
  $districtID = $_SESSION['orgID'];
  
  $data = $db->query("SELECT 
    SchoolName,
    SchoolContact,
    SchoolEmail
    FROM Schools
    WHERE Schools.DistrictID = '$districtID'
  ");


  foreach ($data as $entry) {
    
    $schoolName = $entry['SchoolName'];
    $contactName = $entry['SchoolContact'];
    $contactEmail = $entry['SchoolEmail'];

    
    echo "<div class='row entry'>
    <p class='field_small'></p>
    <p class='field'>$schoolName</p>
    <p class='field'>$contactName</p>
    <p class='field'>$contactEmail</p>
    </div>";
    
  }

}
catch (Exception $e) {
  echo "Something went wrong...";
}

?>