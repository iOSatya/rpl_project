<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
?>
  
  <div class="d-flex flex-column justify-content-center align-items-center bg-dark" style="height: 100vh;">
    <div id="content" class="d-flex border border-light p-5 rounded-5">
      <img src="./../images/guild_banner.png" id="image" class="rounded-5" style="height: 500px; width: 500px;">
      <div class="d-flex flex-column ms-5" style="width: 500px;">
        <a id="startGame" class="btn btn-outline-light mb-2" href="./MapView.php">Start Game</a>
        <a id="leaderboard" class="btn btn-outline-light mb-2" href="./LeaderboardView.php">Leaderboard</a>
        <a id="logout" class="btn btn-outline-danger" href="./../../controller/LogoutController.php">Logout</a>
      </div>
    </div>
  </div>



  <script>

    $("#content").hide().fadeIn();

    $("#startGame").on("mouseenter", function() {
      $("#image").attr("src", "../images/fantasy_forest.png");
    });

    $("#leaderboard").on("mouseenter", function() {
      $("#image").attr("src", "../images/fantasy_map.png");
    });

  </script>

<?php
  require_once "./../FooterView.php";
?>