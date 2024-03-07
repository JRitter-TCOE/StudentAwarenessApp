<?php 

try {
  include('../../api/db_connection.php');
  include('../../api/getResultLimit.php');
  include('../../api/fetchAdminReports.php');
  include('../../components/displayReports.php');
  include('../../components/showMoreButton.php');
}
catch (Exception $e) {
  echo "Something went wrong...";
}

?>