<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
?>
  
  <div class="d-flex flex-column justify-content-center">
    <div id="background"></div>
    <div id="content" class="d-flex flex-column align-self-end bg-black text-white bg-opacity-50 me-5 justify-content-center" style="height: 100vh; width: 20vw; position: absolute; font-family: 'Cinzel'; opacity: 0;">
      <a id="startGame" class="btn btn-outline-light border border-0 rounded-0 fw-medium fs-3 mb-2" href="./MapView.php">Start Game</a>
      <a id="profile" class="btn btn-outline-light border border-0 rounded-0 fw-medium fs-3 mb-2" href="./ProfileView.php">Profile</a>
      <a id="logout" class="btn btn-outline-light border border-0 rounded-0 fw-medium fs-3" href="./../../controller/LogoutController.php">Logout</a>
    </div>
  </div>

  <script>
    $("#content").fadeTo(500, 1);
  </script>

  <style>
    #background {
      height: 100vh;
      background: url('./../images/fantasy_valley.png');
      background-size: cover;
      background-position: 0px -400px;
      background-repeat: no-repeat;
    }

    a {
      font-family: 'Cinzel';
    }
  </style>

<?php
  require_once "./../FooterView.php";
?>