<?php 


// $testData = [
//   array(
//     "status" => 0, 
//     "date" => "01-20-2024",
//     "child_fname" => "Billy",
//     "child_lname" => "Kidd",
//     "dob" => "04-28-2010",
//     "school" => "East Weaver"
//   ),
//   array(
//     "status" => 1, 
//     "date" => "01-17-2024",
//     "child_fname" => "Sally",
//     "child_lname" => "Field",
//     "dob" => "02-14-2016",
//     "school" => "East Weaver"
//   ),
//   array(
//     "status" => 1, 
//     "date" => "01-12-2024",
//     "child_fname" => "John",
//     "child_lname" => "Smith",
//     "dob" => "07-03-2014",
//     "school" => "East Weaver"
//   ),
//   array(
//     "status" => 1, 
//     "date" => "01-10-2024",
//     "child_fname" => "Billy",
//     "child_lname" => "Kidd",
//     "dob" => "04-28-2010",
//     "school" => "East Weaver"
//   )
  
// ];

include('../api/db_connection.php');

$schoolID = $_SESSION['orgID'];

$data = $db->query('SELECT 
  Status, 
  IncidentDate, 
  FirstName, 
  LastName, 
  DateOfBirth
  FROM Students
  WHERE SchoolID = $schoolID
');


foreach ($data as $entry) {

  $status = '<ion-icon class="notification_handled" name="checkmark-circle" size="large" ></ion-icon>';
  $button = '';

  if ($entry['status'] == 0) {
    $status = '<ion-icon class="notification_new" name="notifications" size="large"></ion-icon>';
    $button = '<button class="confirm_btn"><ion-icon name="checkbox-outline" size="large"></ion-icon></button>';
  }


  $date = $entry['IncidentDate'];
  $fname = $entry['FirstName'];
  $lname = $entry['LastName'];
  $dob = $entry['DateOfBirth'];
  $school = $_SESSION['schoolName'];

  echo "<div class='row entry'>
    <p class='field_small'>$status</p>
    <p class='field'>$date</p>
    <p class='field'>$fname</p>
    <p class='field'>$lname</p>
    <p class='field'>$dob</p>
    <p class='field'>$school</p>
    <p class='field_small'>$button</p>
  </div>";

}


?>