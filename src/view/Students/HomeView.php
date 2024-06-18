<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
?>
  
  <div class="bg-dark">
    <div id="content">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <img src="./../images/guild_banner.png" id="image" class="rounded-5" style="height: 500px; width: 500px;">
        <div class="d-flex flex-column p-5" style="width: 30vw;">
          <a id="startGame" class="btn btn-outline-light mb-2" href="./MapView.php">Start Game</a>
          <a id="leaderboard" class="btn btn-outline-light mb-2" href="./LeaderboardView.php">Leaderboard</a>
          <a id="logout" class="btn btn-outline-danger" href="./../../controller/LogoutController.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



  <script>

    $("#content").hide().fadeIn();

    $("#startGame").on("mouseenter", function() {
      $("#image").fadeTo(300, 0, function() {
        $("#image").attr("src", "../images/fantasy_forest.png");
        $("#image").fadeTo(300, 1);
      });
    });

    $("#leaderboard").on("mouseenter", function() {
      $("#image").fadeTo(300, 0, function() {
        $("#image").attr("src", "../images/fantasy_map.png");
        $("#image").fadeTo(300, 1);
      });
    });

  </script>

<?php
  require_once "./../FooterView.php";
?>