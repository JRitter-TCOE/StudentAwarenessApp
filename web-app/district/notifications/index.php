<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>
  <head>
    <title>HOWSC Notifications</title>
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../css/school.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body id="school">
    <?php 
    if (isset($_SESSION['username'])) {
      if ($_SESSION['role'] == 'District') {
        include('./notificationView.php');
      }
      else {
        echo '<img id="bg_img" src="../../images/Background_3.jpg">';
        include("../../components/accessDenied.php");
      }
    }
    else {
      echo '<img id="bg_img" src="../../images/Background_3.jpg">';
      include('../../components/loginRedirect.php');
    }
    ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="module" src="../../scripts/Nav_Menu_Btn.js"></script>
    <script type="module" src="../scripts/ConfirmStudentHandled.js"></script>
  </body>
</html>