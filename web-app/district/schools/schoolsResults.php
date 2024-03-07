<?php 

try {

  include('../../api/db_connection.php');
  
  $districtID = $_SESSION['orgID'];
  
  include('../../api/fetchDistrictSchools.php');
  include('../../components/displaySchools.php');

}
catch (Exception $e) {
  echo "Something went wrong...";
}

?>