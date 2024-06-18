<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
?>

  <div>
    <a class="btn btn-danger" href="./../../controller/LogoutController.php">Logout</a>
    <a class="btn btn-primary" href="./MapView.php">Start Game</a>
    <a class="btn btn-primary">Leaderboard</a>
  </div>

<?php
  require_once "./../FooterView.php";
?>