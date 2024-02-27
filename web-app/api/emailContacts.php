<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


try {

    // Get School ID from POST
    $school_ID = $_POST['school'];
    
    include("./db_connection.php");
    
    $stmt = $db->prepare("SELECT SchoolEmail, DistrictEmail FROM Schools INNER JOIN Districts ON Schools.DistrictID = Districts.DistrictID where SchoolID = :school_ID");
    $stmt->bindParam(":school_ID", $school_ID, PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch();
    
    $recipients = array_merge(explode(", ", $row['SchoolEmail']), explode(", ", $row['DistrictEmail']));

    for ($recipients as $r) {

        
        date_default_timezone_set("America/Los_Angeles");
        $template = file_get_contents('./emailNotification.html');
        $template .= '<p>'. date("Y-m-d h:i:sa") .'</p>';
        
        $to = $r;
        $subject = "HOSWC Student Notification " . date("Y-m-d h:i:sa");
        $message = $template;
        $headers = "From: HOSWC@tcoek12.org \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        mail($to, $subject, $message, $headers);
    }
    
    echo json_encode(array("status"=>"SUCCESS"));
}
catch (Exception $e) {
    echo json_encode(array("status"=>"FAILURE", "error"=>$e));
}
?>