<div id="content">
<nav>
  <div id="topBar">
  <img id="nav_logo" src="../images/logo.png">
    <div id="info">
      <span>Welcome: East Weaver</span>
      <span id="current_user"></span>
      <span>|</span>
      <span>Access: School</span>
      <span id="access_type"></span>
      <span>|</span>
      <a id="logout" href="../index.php">Logout</a>
      <a href="tel:5306232861">530-623-2861</a>
      <a href="mailto:hoswc@tcoek12.org">hoswc@tcoek12.org</a>
    </div>
  </div>
  <div id="tabs">
    <div class="tab">
      <span>Notifications</span>
    </div>
  </div>
</nav>
<div id="notifications">
  <div id="headers" class="row">
    <p class="header_small"></p>
    <p class="header">Date</p>
    <p class="header">First Name</p>
    <p class="header">Last Name</p>
    <p class="header">DOB</p>
    <p class="header">School</p>
    <p class="header_small"></p>
  </div>
  <?php
    include('studentResults.php');
  ?>
</div>
</div>
<footer>
  <span>2024 HOSWC California All Rights Reserved</span>
</footer>