<?php 

try {
  include('../../api/db_connection.php');
  include('../../api/fetchAdminSchools.php');
  include('../../components/displaySchools.php');
}
catch (Exception $e) {
  echo "Something went wrong...";
}

?>