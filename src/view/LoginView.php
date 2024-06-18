<?php
  require_once "../config/config.php";
  require_once "./HeaderView.php";
?>
  
  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh; background: url('./images/fantasy_valley2.png'); background-size: cover;">

    <div id="form">
      <form class="d-flex flex-column" action="../controller/LoginController.php" method="post">
        <span class="fw-semibold fs-3">Login</span>
        <input class="form-control" name="username" type="text" placeholder="Username">
        <input class="form-control" name="userPassword" type="password" placeholder="Password">
        <a class="align-self-end" style="cursor: pointer;">I don't have an account</a>
        <button class="btn btn-success">Login</button>
        <?php if (isset($_SESSION["errorMessage"])) { ?>
          <span class="text-danger"><?= $_SESSION["errorMessage"]; ?></span>
        <?php } ?>
      </form>
    </div>

  </div>

  <script>

    $("#form").hide().fadeIn();

    $("a").on("click", function() {


      $("#form").fadeOut(function() {
        $(location).prop("href", "./SignupView.php");
      });
    });

  </script>

<?php
  require_once "./FooterView.php";
  unset($_SESSION["errorMessage"]);
?>