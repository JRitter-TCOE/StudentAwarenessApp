<?php 
session_start();
session_destroy();
?>

<html>
  <head>
    <title>HOWSC Login</title>
    <link rel="stylesheet" href="./css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body>

    <img id="bg_img" src="https://academicresourcecenter.harvard.edu/sites/projects.iq.harvard.edu/files/styles/os_files_xxlarge/public/academicresourcecenter/files/marvin-meyer-syto3xs06fu-unsplash.jpg?m=1616174363&itok=YXfi-SeO">

    <div id="banner">
      <img src="https://focus.tcoek12.org/images/focus-logo.png">
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