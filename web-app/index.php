<?php 
session_start();
session_destroy();
?>

<html>
  <head>
    <title>HOSWC Login</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body id="login">

    <img id="bg_img" src="./images/Background_1_smaller.jpg">

    

    <div id="banner">
      <img id="logo" src="./images/logo.png">
      <form id='login_form'>
        <div class='field'>
          <ion-icon name="person" size="large"></ion-icon>
          <input class="login_input" id='username' name='username' placeholder='Username'>
        </div>
        <div class='field'>
          <ion-icon name="lock-closed" size="large"></ion-icon>
          <input class="login_input" id='password' name='password' type="password" placeholder="Password">
          <ion-icon name="eye-outline"></ion-icon>
        </div>
        <p class='feedback' id='login_feedback'></p>
        <input id='login_btn' type="submit" value="Login">
      </form>
      <p class="credit">Created By:</p>
      <img id="tcoe_logo" src="./images/TCOE_header.png">
    </div>

    <script type='module' src='./scripts/Login.js'></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
  </body>
</html>