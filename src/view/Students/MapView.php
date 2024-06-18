<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/StudentModel.php";

  $mapLevel = StudentModel::getMapLevel($_SESSION["studentId"]);

  
?>

  <a class="btn btn-primary" href="./HomeView.php">Home</a>
  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <a href="./Level1MapView.php"><button class="btn btn-warning">Schwarzwald</button></a>
    <a href="./Level2MapView.php" <?php if ($mapLevel < 2) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($mapLevel < 2) {echo "disabled"; } ?>>Yīnghuá</button></a>
    <a href="./Level3MapView.php" <?php if ($mapLevel < 3) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($mapLevel < 3) {echo "disabled"; } ?>>Tsukimokure</button></a>
    <a href="./Level4MapView.php" <?php if ($mapLevel < 4) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($mapLevel < 4) {echo "disabled"; } ?>>Amasis</button></a>
    <a href="./Level5MapView.php" <?php if ($mapLevel < 5) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($mapLevel < 5) {echo "disabled"; } ?>>Lavérendel</button></a>
    <a href="./Level6MapView.php" <?php if ($mapLevel < 6) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($mapLevel < 6) {echo "disabled"; } ?>>Saurian Peaks</button></a>
    <a href="./Level7MapView.php" <?php if ($mapLevel < 7) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($mapLevel < 7) {echo "disabled"; } ?>>Severnygrad</button></a>
    <?php if ($mapLevel == 8) { ?>
      <a href="./EndlessModeView.php"><button class="btn btn-warning">Algoria</button></a>
    <?php } ?>
  </div>

<?php
  require_once "./../FooterView.php";
?>