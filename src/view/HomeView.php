<?php
  require_once "../config/config.php";
  require_once "./HeaderView.php";
?>
  
<?php if ($_SESSION["userData"]["userStatus"] === "student") { ?>

  <div>
    <a href="#">Start Game</a>
  </div>

<?php } ?>

<?php
  require_once "./FooterView.php";
?>