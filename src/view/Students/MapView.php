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
    <a href="./YellowRiverBasinView.php"><button class="btn btn-warning">Guanzhongwei Crossroads</button></a>
    <a href="./ShikokuIslandsView.php"><button class="btn btn-warning">Tsurugaoka Islands</button></a>
    <a href="./AryanDesertsView.php"><button class="btn btn-warning">Deshretian Oases</button></a>
    <a href="./FleurDeLisValleyView.php"><button class="btn btn-warning">Fleurdeá Forest</button></a>
    <a href="./SaurianSwampsView.php"><button class="btn btn-warning">Saurian Peaks</button></a>
    <a href="./RutheniaView.php"><button class="btn btn-warning">Severnygrad</button></a>
  </div>

<?php
  require_once "./../FooterView.php";
?>