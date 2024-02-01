<nav>
  <div id="topBar">
  <img id="nav_logo" src="../images/logo.png">
    <div id="info">
      <div id="long_info">
        <span>Welcome:</span>
        <span><?php echo $_SESSION['schoolName'] ?></span>
        <span>|</span>
        <span>Access:</span>
        <span><?php echo $_SESSION['role'] ?></span>
        <span>|</span>
        <ion-icon name="call"></ion-icon>
        <a href="tel:5306232861">530-623-2861</a>
        <span>|</span>
        <ion-icon name="mail"></ion-icon>
        <a href="mailto:hoswc@tcoek12.org">hoswc@tcoek12.org</a>
        <span>|</span>
        <a id="logout" href="../index.php">Logout</a>
      </div>
      <div id="short_info">
        <ion-icon id="nav_menu_btn" name="menu-outline" size="large"></ion-icon>
        <div id="info_menu">
          <p>Welcome:<span><?php echo $_SESSION['schoolName'] ?></span></p>
          <p>Access:<span><?php echo $_SESSION['role'] ?></span></p>
          <p>
            <ion-icon name="call"></ion-icon>
            <a href="tel:5306232861">530-623-2861</a>
          </p>
          <p>
            <ion-icon name="mail"></ion-icon>
            <a href="mailto:hoswc@tcoek12.org">hoswc@tcoek12.org</a>
          </p>
          <p><a id="logout" href="../index.php">Logout</a></p>
        </div>
      </div>
    </div>
  </div>
  <div id="tabs">
    <div class="tab">
      <span>Notifications</span>
    </div>
  </div>
</nav>