<?php require_once "../config/config.php"; ?>
<?php require_once "./HeaderView.php"; ?>
  
  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <form class="d-flex flex-column" action="../controller/LoginController.php" method="post">
      <span class="fw-semibold fs-3">Login</span>
      <input class="form-control" name="username" type="text" placeholder="Username">
      <input class="form-control" name="userPassword" type="password" placeholder="Password">
      <a class="align-self-end" href="./SignupView.php">I don't have an account</a>
      <button class="btn btn-success">Login</button>

      <?php if (isset($_SESSION["errorMessage"])) { ?>
        <span class="text-danger"><?= $_SESSION["errorMessage"]; ?></span>
      <?php } ?>

    </form>
  </div>

<?php require_once "./FooterView.php"; ?>
<?php unset($_SESSION["errorMessage"]); ?>