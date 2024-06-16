<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
?>

  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <form class="d-flex" action="./../../controller/CreateAssignmentController.php" method="post">

      <textarea class="form-control" name="question"></textarea>
      <div class="d-flex flex-column" style="width: 50vw;">
        <input class="form-control" name="answerA" type="text" placeholder="Answer A">
        <input class="form-control" name="answerB" type="text" placeholder="Answer B">
        <input class="form-control" name="answerC" type="text" placeholder="Answer C">
        <input class="form-control" name="answerD" type="text" placeholder="Answer D">

        <div class="input-group">
          <select class="form-select" name="correctAnswer">
            <option value="0">Correct Answer</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
          </select>
          <select class="form-select" name="assignmentLevel">
            <option value="0">Assignment Level</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
        </div>

        <button class="form-control" type="submit">Submit</button>
      </div>

    </form>

    <?php if (isset($_SESSION["errorMessage"])) { ?>
      <span class="text-danger"><?= $_SESSION["errorMessage"]; ?></span>
    <?php } ?>

  </div>

<?php
  require_once "./../FooterView.php";
  unset($_SESSION["errorMessage"]);
?>