<?php 
$testData = [
  array(
    "status" => 0, 
    "date" => "01-20-2024",
    "child_fname" => "Billy",
    "child_lname" => "Kidd",
    "dob" => "04-28-2010",
    "school" => "East Weaver"
  ),
  array(
    "status" => 1, 
    "date" => "01-17-2024",
    "child_fname" => "Sally",
    "child_lname" => "Field",
    "dob" => "02-14-2016",
    "school" => "East Weaver"
  ),
  array(
    "status" => 1, 
    "date" => "01-12-2024",
    "child_fname" => "John",
    "child_lname" => "Smith",
    "dob" => "07-03-2014",
    "school" => "East Weaver"
  ),
  array(
    "status" => 1, 
    "date" => "01-10-2024",
    "child_fname" => "Billy",
    "child_lname" => "Kidd",
    "dob" => "04-28-2010",
    "school" => "East Weaver"
  )
  
];


foreach ($testData as $entry) {

  $status = '<ion-icon class="notification_handled" name="checkmark-circle" size="large" ></ion-icon>';
  $button = '';

  if ($entry['status'] == 0) {
    $status = '<ion-icon class="notification_new" name="notifications" size="large"></ion-icon>';
    $button = '<ion-icon class="confirm_btn" name="checkbox-outline" size="large"></ion-icon>';
  }

  $date = $entry['date'];
  $fname = $entry['child_fname'];
  $lname = $entry['child_lname'];
  $dob = $entry['dob'];
  $school = $entry['school'];

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