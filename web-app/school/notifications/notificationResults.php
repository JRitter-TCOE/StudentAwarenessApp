<?php 

try {

  include('../../api/db_connection.php');
  
  $schoolID = $_SESSION['orgID'];

  include('../../api/getResultLimit.php');
  include('../../api/fetchSchoolReports.php');
  include('../../components/displayReports.php');
  include('../../components/showMoreButton.php');
}
catch (Exception $e) {
  echo "Something went wrong...";
}

?>