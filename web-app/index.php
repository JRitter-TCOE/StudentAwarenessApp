<?php 
session_start();
session_destroy();
?>

<html>
  <head>
    <title>HOSWC Login</title>
    <link rel="stylesheet" href="./css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body id="login">

    <img id="bg_img" src="./images/Background_1.jpg">

    <?php 
      $file = fopen('./location.json', 'r');
      $text = fread($file, filesize('./location.json'));
      fclose($file);


      $user = $text[0];
      $pass = $text[1];

      echo "<p>$user</p>";
      echo "<p>$pass</p>";
    ?>

    <div id="banner">
      <img id="logo" src="./images/logo.png">
      <form id='login_form'>
        <input class="login_input" id='username' name='username' placeholder='Username'>
        <input class="login_input" id='password' name='password' type="password" placeholder="Password">
        <p class='feedback' id='login_feedback'></p>
        <input id='login_btn' type="submit" value="Login">
      </form>
    </div>

    <script type='module' src='./scripts/Login.js'></script>
    
  </body>
</html>