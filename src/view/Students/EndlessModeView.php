<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/MapModel.php";

  $model = new MapModel();
  $assignment = $model->getAssignment(8);

  if (!isset($_SESSION["playerHp"]) || !isset($_SESSION["highScore"])) {
    $_SESSION["playerHp"] = 100;
    $_SESSION["highScore"] = 0;
  }

?>

  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">

    <div>
      <span><?= $_SESSION["playerHp"]; ?></span>
      <span><?= $_SESSION["highScore"]; ?></span>
    </div>

    <span><?= $assignment["question"]; ?></span>

    <div class="d-flex">
      <form action="./../../controller/EndlessModeController.php" method="post">
        <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
        <input type="hidden" name="userAnswer" value="A">
        <button class="card" type="submit">
          <div class="card-body">
            <?= $assignment["answerA"]; ?>
          </div>
        </button>
      </form>

      <form action="./../../controller/EndlessModeController.php" method="post">
        <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
        <input type="hidden" name="userAnswer" value="B">
        <button class="card" type="submit">
          <div class="card-body">
            <?= $assignment["answerB"]; ?>
          </div>
        </button>
      </form>

      <form action="./../../controller/EndlessModeController.php" method="post">
        <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
        <input type="hidden" name="userAnswer" value="C">
        <button class="card" type="submit">
          <div class="card-body">
            <?= $assignment["answerC"]; ?>
          </div>
        </button>
      </form>

      <form action="./../../controller/EndlessModeController.php" method="post">
        <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
        <input type="hidden" name="userAnswer" value="D">
        <button class="card" type="submit">
          <div class="card-body">
            <?= $assignment["answerD"]; ?>
          </div>
        </button>
      </form>
    </div>


    
  </div>

<?php
  require_once "./../FooterView.php";
?>