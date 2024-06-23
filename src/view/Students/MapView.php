<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/StudentModel.php";

  $mapLevel = StudentModel::getMapLevel($_SESSION["studentId"]);
  $highScore = StudentModel::getHighScore($_SESSION["studentId"]);
  
?>

  
  <div class="d-flex flex-column align-items-center justify-content-center bg-dark" style="height: 100vh;">

    <div id="mapCards" class="carousel slide carousel-fade" style="width: 1000px; opacity: 0;">
      
      <div class="carousel-inner">

        <a class="carousel-item <?php if ($mapLevel == 1) {echo "active";} ?>" href="./Level1MapView.php">
          <div class="d-flex border border-secondary rounded-4">
            <img src="./../images/schwarzwald.png" class="d-block rounded-4" style="height: 500px; width: 1000px; object-fit: cover; object-position: 0px -80px;">
            <div class="carousel-caption p-3">
              <span class="fs-5" style="font-family: 'Cinzel';">Schwarzwald</span>
              <hr>
              <span>This is level 1 map's text example</span>
            </div>
          </div>
        </a>

        <a class="carousel-item <?php if ($mapLevel == 2) {echo "active";} ?>" href="./Level2MapView.php" <?php if ($mapLevel < 2) {echo "onclick='return false'";} ?>>
          <div class="d-flex border border-secondary rounded-4">
            <img src="./../images/yinghua.png" class="d-block rounded-4" style="height: 500px; width: 1000px; object-fit: cover; <?php if ($mapLevel < 2) {echo "filter: brightness(0.2);";} ?>">
            <div class="carousel-caption p-3">
              <span class="fs-5" style="font-family: 'Cinzel';"><?php if ($mapLevel < 2) {echo "Locked";} else {echo "Yīnghuá";} ?></span>
              <hr>
              <span><?php if ($mapLevel < 2) {echo "Clear Previous Map";} else {echo "This is level 2 map's text example";} ?></span>
            </div>
          </div>
        </a>

        <a class="carousel-item <?php if ($mapLevel == 3) {echo "active";} ?>" href="./Level3MapView.php" <?php if ($mapLevel < 3) {echo "onclick='return false'";} ?>>
          <div class="d-flex border border-secondary rounded-4">
            <img src="./../images/tsukimokure.png" class="d-block rounded-4" style="height: 500px; width: 1000px; object-fit: cover; object-position: 0px -330px; <?php if ($mapLevel < 3) {echo "filter: brightness(0.2);";} ?>">
            <div class="carousel-caption p-3">
              <span class="fs-5" style="font-family: 'Cinzel';"><?php if ($mapLevel < 3) {echo "Locked";} else {echo "Tsukimokure";} ?></span>
              <hr>
              <span><?php if ($mapLevel < 3) {echo "Clear Previous Map";} else {echo "This is level 3 map's text example";} ?></span>
            </div>
          </div>
        </a>

        <a class="carousel-item <?php if ($mapLevel == 4) {echo "active";} ?>" href="./Level4MapView.php" <?php if ($mapLevel < 4) {echo "onclick='return false'";} ?>>
          <div class="d-flex border border-secondary rounded-4">
            <img src="./../images/amasis.png" class="d-block rounded-4" style="height: 500px; width: 1000px; object-fit: cover; object-position: 0px -330px; <?php if ($mapLevel < 4) {echo "filter: brightness(0.2);";} ?>">
            <div class="carousel-caption p-3">
              <span class="fs-5" style="font-family: 'Cinzel';"><?php if ($mapLevel < 4) {echo "Locked";} else {echo "Amasis";} ?></span>
              <hr>
              <span><?php if ($mapLevel < 4) {echo "Clear Previous Map";} else {echo "This is level 4 map's text example";} ?></span>
            </div>
          </div>
        </a>

        <a class="carousel-item <?php if ($mapLevel == 5) {echo "active";} ?>" href="./Level5MapView.php" <?php if ($mapLevel < 5) {echo "onclick='return false'";} ?>>
          <div class="d-flex border border-secondary rounded-4">
            <img src="./../images/laverendel.png" class="d-block rounded-4" style="height: 500px; width: 1000px; object-fit: cover; object-position: 0px -190px; <?php if ($mapLevel < 5) {echo "filter: brightness(0.2);";} ?>">
            <div class="carousel-caption p-3">
              <span class="fs-5" style="font-family: 'Cinzel';"><?php if ($mapLevel < 5) {echo "Locked";} else {echo "Lavérendel";} ?></span>
              <hr>
              <span><?php if ($mapLevel < 5) {echo "Clear Previous Map";} else {echo "This is level 5 map's text example";} ?></span>
            </div>
          </div>
        </a>

        <a class="carousel-item <?php if ($mapLevel == 6) {echo "active";} ?>" href="./Level6MapView.php" <?php if ($mapLevel < 6) {echo "onclick='return false'";} ?>>
          <div class="d-flex border border-secondary rounded-4">
            <img src="./../images/saurian_peaks.png" class="d-block rounded-4" style="height: 500px; width: 1000px; object-fit: cover; object-position: 0px -365px; <?php if ($mapLevel < 6) {echo "filter: brightness(0.2);";} ?>">
            <div class="carousel-caption p-3">
              <span class="fs-5" style="font-family: 'Cinzel';"><?php if ($mapLevel < 6) {echo "Locked";} else {echo "Saurian Peaks";} ?></span>
              <hr>
              <span><?php if ($mapLevel < 6) {echo "Clear Previous Map";} else {echo "This is level 6 map's text example";} ?></span>
            </div>
          </div>
        </a>

        <a class="carousel-item <?php if ($mapLevel == 7) {echo "active";} ?>" href="./Level7MapView.php" <?php if ($mapLevel < 7) {echo "onclick='return false'";} ?>>
          <div class="d-flex border border-secondary rounded-4">
            <img src="./../images/severnygrad.png" class="d-block rounded-4" style="height: 500px; width: 1000px; object-fit: cover; object-position: 0px -300px; <?php if ($mapLevel < 7) {echo "filter: brightness(0.2);";} ?>">
            <div class="carousel-caption p-3">
              <span class="fs-5" style="font-family: 'Cinzel';"><?php if ($mapLevel < 7) {echo "Locked";} else {echo "Severnygrad";} ?></span>
              <hr>
              <span><?php if ($mapLevel < 7) {echo "Clear Previous Map";} else {echo "This is level 7 map's text example";} ?></span>
            </div>
          </div>
        </a>

        <?php if ($mapLevel == 8) { ?>
          <a class="carousel-item active" href="./EndlessModeView.php">
            <div class="d-flex border border-secondary rounded-4">
              <img src="./../images/trevaurhin.png" class="d-block rounded-4" style="height: 500px; width: 1000px; object-fit: cover; object-position: 0px -300px;">
              <div class="carousel-caption p-3">
                <span class="fs-5" style="font-family: 'Cinzel';">Algoria</span> <!-- Alter: Trevaurhin -->
                <hr>
                <span class="text-light">High Score: <?= $highScore; ?></span>
              </div>
            </div>
          </a>
        <?php } ?>

      <button class="carousel-control-prev" type="button" data-bs-target="#mapCards" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#mapCards" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>  
    
    <div class="d-flex mt-3">
      <a id="home" class="btn btn-outline-light" href="./HomeView.php">Home</a>
      <?php if ($mapLevel == 8) { ?>
        <a id="leaderboard" class="btn btn-outline-danger ms-2" href="./LeaderboardView.php">Leaderboard</a>
      <?php } ?>
    </div>


  </div>

  <script>

    $(document).ready(function() {
      $("#mapCards").fadeTo(500, 1)
    });

  </script>

  <style>

  </style>

<?php
  require_once "./../FooterView.php";
?>