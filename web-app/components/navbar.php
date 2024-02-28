<nav>
  <div id="topBar">
  <img id="nav_logo" src="../../images/logo.png">
    <div id="info">
      <div id="long_info">
        <span>Welcome:</span>
        <span><?php echo $_SESSION['orgName'] ?></span>
        <span>|</span>
        <span>Access:</span>
        <span><?php echo $_SESSION['role'] ?></span>
        <span>|</span>
        <ion-icon name="call"></ion-icon>
        <a href="tel:5306232861">530-623-2861</a>
        <span>|</span>
        <ion-icon name="mail"></ion-icon>
        <a href="mailto:hoswc.support@tcoek12.org">hoswc.support@tcoek12.org</a>
        <span>|</span>
        <a id="logout" href="https://hoswc.tcoek12.org">Logout</a>
      </div>
      <div id="short_info">
        <ion-icon id="nav_menu_btn" name="menu-outline" size="large"></ion-icon>
        <div id="info_menu">
          <p>Welcome:&nbsp;<span><?php echo $_SESSION['orgName'] ?></span></p>
          <p>Access:&nbsp;<span><?php echo $_SESSION['role'] ?></span></p>
          <p>
            <ion-icon name="call"></ion-icon>
            <a href="tel:5306232861">530-623-2861</a>
          </p>
          <p>
            <ion-icon name="mail"></ion-icon>
            <a href="mailto:hoswc@tcoek12.org">hoswc@tcoek12.org</a>
          </p>
          <p><a id="logout" href="https://hoswc.tcoek12.org">Logout</a></p>
        </div>
      </div>
    </div>
  </div>
  <div id="tabs">
    <?php
    
    if ($_SESSION['role'] == "District") {
      echo "
        <div class='tab'>
          <a href='../schools'>Schools</a>
        </div>
      ";
    }

    ?>
    <div class="tab">
      <a href='../notifications'>Notifications</a>
    </div>
  </div>
</nav>