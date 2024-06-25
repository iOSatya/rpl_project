<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
?>
  
  <div class="bg-dark">
    <a class="btn btn-outline-light m-4" style="position: fixed;" href="./HomeView.php">Home</a>
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">


      <form class="d-flex" action="./../../controller/CreateAssignmentController.php" method="post">

        <textarea class="form-control bg-dark text-white me-2" name="question" placeholder="Question"></textarea>
        <div class="d-flex flex-column bg-dark text-white" style="width: 50vw;">
          <input class="form-control bg-dark text-white mb-2" name="answerA" type="text" placeholder="Answer A">
          <input class="form-control bg-dark text-white mb-2" name="answerB" type="text" placeholder="Answer B">
          <input class="form-control bg-dark text-white mb-2" name="answerC" type="text" placeholder="Answer C">
          <input class="form-control bg-dark text-white mb-2" name="answerD" type="text" placeholder="Answer D">

          <div class="input-group mb-2">
            <select class="form-select bg-dark text-white" name="correctAnswer">
              <option value="0">Correct Answer</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
            </select>
            <select class="form-select bg-dark text-white" name="assignmentLevel">
              <option value="0">Assignment Level</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
          </div>

          <button class="btn btn-outline-light" type="submit">Submit</button>
        </div>

      </form>

      <?php if (isset($_SESSION["errorMessage"])) { ?>
        <span class="text-danger"><?= $_SESSION["errorMessage"]; ?></span>
      <?php } ?>

    </div>
  </div>

  <style>
    .form-control::placeholder {
      color: rgb(100, 100, 100);
    }
  </style>

<?php
  require_once "./../FooterView.php";
  unset($_SESSION["errorMessage"]);
?>