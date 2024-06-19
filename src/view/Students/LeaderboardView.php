<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/LeaderboardModel.php";

  $model = new LeaderboardModel();
  $results = $model->getRanking();
  $db = new DatabaseModel();

?>
  
  <div class="bg-dark p-5" style="height: 100vh;">

    <div id="content">
      <table class="table table-dark table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Score</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($results as $result) { ?>
            <tr>
              <td><?= $db->getUserDataById($result["userId"])["userFullName"]; ?></td>
              <td><?= $result["highScore"]; ?></td>
            </tr>
          <?php } ?>

        </tbody>
      </table>

      <a id="mapBtn" class="btn btn-outline-light">Map</a>
    </div>

  </div>

  <script>
    $("#content").hide().fadeIn();

    $("#mapBtn").on("click", function() {
      $("#content").fadeTo(400, 0, function() {
        $(location).prop("href", "./MapView.php");
      });
    });
  </script>

<?php
  require_once "./../FooterView.php";
?>