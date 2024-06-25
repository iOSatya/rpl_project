<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";

  $model = new DatabaseModel;
  $userData = $model->getUserDataById($_SESSION["userId"]);
?>

  <div class="d-flex flex-column justify-content-center" style="height: 100vh;">
    <div id="background"></div>
    <form id="content" class="d-flex flex-column align-self-center text-white" style="position: absolute; opacity: 0;" action="./../../controller/ProfileController.php" method="post">

      <div class="input-group mb-2">
        <span class="input-group-text bg-transparent text-light">ID</span>
        <span class="input-group-text bg-transparent text-light"><?= $userData["userId"]; ?></span>
      </div>
      
      <span class="form-label">Username</span>
      <input class="form-control mb-2 bg-transparent text-light" type="text" value="<?= $userData["username"]; ?>" name="username">
      <span class="form-label">Full Name</span>
      <input class="form-control bg-transparent text-light mb-4" type="text" value="<?= $userData["userFullName"]; ?>" name="userFullName">

      <div class="d-flex align-self-end">
        <a class="btn btn-outline-light me-2" href="./HomeView.php">Cancel</a>
        <button class="btn btn-outline-light" type="submit">Save</button>
      </div>
      
    </form>
  </div>

  <script>
    $("#content").fadeTo(500, 1);
  </script>

  <style>
    #background {
      height: 100vh;
      background: url('./../images/fantasy_room.png');
      background-size: cover;
      background-position: 0px -500px;
      background-repeat: no-repeat;
      filter: brightness(50%);
    }
  </style>

<?php
  require_once "./../FooterView.php";
?>
