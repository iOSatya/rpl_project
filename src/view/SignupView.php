<?php
  require_once "../config/config.php";
  require_once "./HeaderView.php";
?>
  
  <div id="main" class="d-flex flex-column justify-content-center align-items-center">

    <div id="background"></div>
    <div id="form" style="opacity: 0;">
      <form class="d-flex flex-column border border-light text-white p-4 rounded-4" action="../controller/SignupController.php" method="post">
        <span class="fw-medium fs-3 mb-2" style="font-family: 'Cinzel';">Signup</span>
        <input class="form-control mb-2" name="username" type="text" placeholder="Username">
        <input class="form-control mb-2" name="userFullName" type="text" placeholder="Full Name">
        <input class="form-control mb-2" name="userPassword" type="password" placeholder="Password">
        <select class="form-select mb-2" name="userStatus">
          <option value="student">Student</option>
          <option value="teacher">Teacher</option>
        </select>
        <a class="align-self-end link-light link-underline link-underline-opacity-0 mb-2" style="cursor: pointer;" href="./LoginView.php">I already have an account</a>
        <button class="btn btn-outline-light">Signup</button>

        <?php if (isset($_SESSION["errorMessage"])) { ?>
          <span class="text-danger"><?= $_SESSION["errorMessage"]; ?></span>
        <?php } ?>

      </form>
    </div>

  </div>

  <script>

    $("#form").fadeTo(500, 1)

  </script>

  <style>
    #main {
      height: 100vh;
      background: url('./images/fantasy_valley.png');
      background-size: cover;
      background-position: 0px -400px;
      background-repeat: no-repeat;
    }

    #background {
      z-index: 0;
      height: 100%;
      width: 100%;
      position: absolute;
      opacity: 0.5;
      background: black;
    }

    #form {
      z-index: 1;
    }
  </style>

<?php
  require_once "./FooterView.php";
  unset($_SESSION["errorMessage"]);
?>