<?php 

try {

  include('../../api/db_connection.php');
  
  $districtID = $_SESSION['orgID'];

  include('../../api/getResultLimit.php');
  include('../../api/fetchDistrictReports.php');
  include('../../components/displayReports.php');
  include('../../components/showMoreButton.php');

}
catch (Exception $e) {
  echo "Something went wrong...";
}

?>