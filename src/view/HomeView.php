<?php
  require_once "../config/config.php";
  require_once "./HeaderView.php";
?>
  
<?php if ($_SESSION["userData"]["userStatus"] === "student") { ?>

  <div>
    <a href="./maps/MapView.php">Start Game</a>
  </div>

<?php } ?>

<?php
  require_once "./FooterView.php";
?>