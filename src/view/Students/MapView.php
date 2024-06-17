<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/StudentModel.php";

  $level = StudentModel::getMapLevel($_SESSION["studentId"]);

  
?>

  <a class="btn btn-primary" href="./HomeView.php">Home</a>
  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <a href="./SchwarzwaldView.php"><button class="btn btn-warning">Schwarzwald</button></a>
    <a href="./GuanzhongweiCrossroadsView.php" <?php if ($level < 2) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($level < 2) {echo "disabled"; } ?>>Guanzhongwei Crossroads</button></a>
    <a href="./TsurugaokaIslandsView.php" <?php if ($level < 3) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($level < 3) {echo "disabled"; } ?>>Tsurugaoka Islands</button></a>
    <a href="./DeshretianOasesView.php" <?php if ($level < 4) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($level < 4) {echo "disabled"; } ?>>Deshretian Oases</button></a>
    <a href="./FleurdeaForestView.php" <?php if ($level < 5) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($level < 5) {echo "disabled"; } ?>>Fleurdeá Forest</button></a>
    <a href="./SaurianPeaksView.php" <?php if ($level < 6) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($level < 6) {echo "disabled"; } ?>>Saurian Peaks</button></a>
    <a href="./SevernygradView.php" <?php if ($level < 7) {echo "onclick='return false'"; } ?>><button class="btn btn-warning" <?php if ($level < 7) {echo "disabled"; } ?>>Severnygrad</button></a>
  </div>

<?php
  require_once "./../FooterView.php";
?>