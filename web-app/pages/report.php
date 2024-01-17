<?php
session_start();
?>

<html>
  <head>
    <title>HOWSC Report</title>
    <link rel="stylesheet" href="../css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>

    
    <img id="bg_img" src="../images/Background_3.jpg">

    <div id='container'>
      <?php 
      if (isset($_SESSION['username'])) {
        include('../components/reportForm.php');
      }
      else {
        include('../components/loginRedirect.html');
      }
      ?>
    </div>
  </body>
</html>