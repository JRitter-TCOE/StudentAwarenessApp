<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


try {

    // Get School ID from POST
    $school_ID = $_POST['school'];
    
    include("./db_connection.php");
    
    $stmt = $db->prepare("SELECT SchoolEmail FROM Schools where SchoolID = $school_ID");
    $stmt->execute();
    $row = $stmt->fetch();
    
    
    date_default_timezone_set("America/Los_Angeles");
    $template = file_get_contents('./emailNotification.html');
    $template .= '<p>'. date("Y-m-d h:i:sa") .'</p>';
    
    $to = $row["SchoolEmail"];
    $subject = "HOSWC Student Notification " . date("Y-m-d h:i:sa");
    $message = $template;
    $headers = "From: HOSWC@tcoek12.org \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);
    
    echo json_encode(array("status"=>"SUCCESS"));
}
catch (Exception $e) {
    echo json_encode(array("status"=>"FAILURE", "error"=>$e));
}
?>