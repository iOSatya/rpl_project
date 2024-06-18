<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/MapModel.php";

  $model = new MapModel();
  $assignment = $model->getAssignment(6);

  if (!isset($_SESSION["playerHp"]) || !isset($_SESSION["bossHp"])) {
    $_SESSION["playerHp"] = 100;
    $_SESSION["bossHp"] = 100;
  }

?>

  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">

    <div>
      <span><?= $_SESSION["playerHp"]; ?></span>
      <span><?= $_SESSION["bossHp"]; ?></span>
    </div>

    <span><?= $assignment["question"]; ?></span>

    <div class="d-flex">
      <form action="./../../controller/MapController.php" method="post">
        <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
        <input type="hidden" name="mapRegion" value="Level6Map">
        <input type="hidden" name="userAnswer" value="A">
        <button class="card" type="submit">
          <div class="card-body">
            <?= $assignment["answerA"]; ?>
          </div>
        </button>
      </form>

      <form action="./../../controller/MapController.php" method="post">
        <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
        <input type="hidden" name="mapRegion" value="Level6Map">
        <input type="hidden" name="userAnswer" value="B">
        <button class="card" type="submit">
          <div class="card-body">
            <?= $assignment["answerB"]; ?>
          </div>
        </button>
      </form>

      <form action="./../../controller/MapController.php" method="post">
        <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
        <input type="hidden" name="mapRegion" value="Level6Map">
        <input type="hidden" name="userAnswer" value="C">
        <button class="card" type="submit">
          <div class="card-body">
            <?= $assignment["answerC"]; ?>
          </div>
        </button>
      </form>

      <form action="./../../controller/MapController.php" method="post">
        <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
        <input type="hidden" name="mapRegion" value="Level6Map">
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