<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>
  <head>
    <title>HOWSC Report</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="./css/report.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body id="report">

    
    <img id="bg_img" src="../images/Background_3_small.jpg">

    <div id='container'>
      <?php 
      if (isset($_SESSION['username'])) {
        include('./components/reportForm.php');
      }
      else {
        include('../components/loginRedirect.php');
      }
      ?>
    </div>
  </body>
</html>