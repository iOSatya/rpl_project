<?php require_once "./HeaderView.php"; ?>
  
  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <form action="" method="" class="d-flex flex-column">
      <span class="fw-semibold fs-3">Login</span>
      <input type="text" class="form-control" placeholder="Username">
      <input type="password" class="form-control" placeholder="Password">
      <a class="align-self-end" href="./SignupView.php">Create Account</a>
      <button class="btn btn-success">Login</button>
    </form>
  </div>

<?php require_once "./FooterView.php"; ?>