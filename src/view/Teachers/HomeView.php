<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
?>

  <div class="bg-dark">
    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 100vh;">
      <div class="d-flex">
        <a class="border border-white p-4 rounded-3 me-2 text-white" style="text-decoration: none;" href="./CreateAssignmentView.php">Create Assignment</a>
        <a class="border border-white p-4 rounded-3 text-white" style="text-decoration: none;" href="./../../controller/LogoutController.php">Logout</a>
      </div>
    </div>
  </div>


<?php
  require_once "./../FooterView.php";
?>