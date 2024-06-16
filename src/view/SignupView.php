<?php
  require_once "../config/config.php";
  require_once "./HeaderView.php";
?>
  
  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <form class="d-flex flex-column" action="../controller/SignupController.php" method="post">
      <span class="fw-semibold fs-3">Signup</span>
      <input class="form-control" name="username" type="text" placeholder="Username">
      <input class="form-control" name="userFullName" type="text" placeholder="Full Name">
      <input class="form-control" name="userPassword" type="password" placeholder="Password">
      <select class="form-select" name="userStatus">
        <option value="student">Student</option>
        <option value="teacher">Teacher</option>
      </select>
      <a class="align-self-end" href="./LoginView.php">I already have an account</a>
      <button class="btn btn-success">Signup</button>

      <?php if (isset($_SESSION["errorMessage"])) { ?>
        <span class="text-danger"><?= $_SESSION["errorMessage"]; ?></span>
      <?php } ?>

    </form>
  </div>

<?php
  require_once "./FooterView.php";
  unset($_SESSION["errorMessage"]);
?>