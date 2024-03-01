<?php 

try {

  include('../../api/db_connection.php');
  
  $districtID = $_SESSION['orgID'];
  
  $stmt = $db->prepare("SELECT 
    Status, 
    IncidentDate, 
    FirstName, 
    LastName, 
    DateOfBirth,
    StudentID,
    SchoolName
    FROM Students
    INNER JOIN Schools ON Schools.SchoolID = Students.SchoolID
    WHERE Schools.DistrictID = '$districtID'
    ORDER BY Status ASC, StudentID DESC
  ");

  $stmt->execute();

  $entries = $stmt->fetchAll(\PDO::FETCH_ASSOC);

  if (isset($_POST['limit'])) {
    $limit = min($_POST['limit'], count($entries));
  }
  else {
    $limit = 10;
  }


  for ($i = 0; $i < $limit; $i++) {

    $entry = $entries[$i];
    
    $studentID = $entry['StudentID'];
    $date = $entry['IncidentDate'];
    $fname = $entry['FirstName'];
    $lname = $entry['LastName'];
    $dob = $entry['DateOfBirth'];
    $school = $entry['SchoolName'];
    $status = '<ion-icon class="notification_handled" name="checkmark-circle" size="large" ></ion-icon>';
    $button = '';

    if ($entry['Status'] == 0) {
      $status = '<ion-icon class="notification_new" name="notifications" size="large"></ion-icon>';
      $button = "<button value=$studentID class='confirm_btn'><ion-icon value=$studentID name='checkbox-outline' size='large'></ion-icon></button>";
    }
    
    echo "<div class='row entry'>
    <p class='field_small'>$status</p>
    <p class='field'>$date</p>
    <p class='field'>$fname</p>
    <p class='field'>$lname</p>
    <p class='field dob'>$dob</p>
    <p class='field'>$school</p>
    <p class='field_small'>$button</p>
    </div>";
    
  }

  $newLimit = $limit + 10;

  if ($limit < count($entries)) {
    echo "<div class='row'>
    <form action='./' method='POST'>
    <button type='submit' name='limit' value=$newLimit class='btn' >Show More</button>
    </form>
    </div>";
  }

}
catch (Exception $e) {
  echo "Something went wrong...";
}

?>