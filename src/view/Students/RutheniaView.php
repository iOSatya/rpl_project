<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/MapModel.php";

  $model = new MapModel();
  $assignment = $model->getAssignment(7);

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
    <form class="" action="./../../controller/MapController.php" method="post">
      <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
      <input type="hidden" name="mapRegion" value="Ruthenia">

      <input class="btn-check" type="radio" id="answerA" name="userAnswer" value="A" checked>
      <label class="btn" for="answerA"><?= $assignment["answerA"]; ?></label>

      <input class="btn-check" type="radio" id="answerB" name="userAnswer" value="B">
      <label class="btn" for="answerB"><?= $assignment["answerB"]; ?></label>

      <input class="btn-check" type="radio" id="answerC" name="userAnswer" value="C">
      <label class="btn" for="answerC"><?= $assignment["answerC"]; ?></label>

      <input class="btn-check" type="radio" id="answerD" name="userAnswer" value="D">
      <label class="btn" for="answerD"><?= $assignment["answerD"]; ?></label>

      <button class="btn btn-outline-warning" type="submit">Submit</button>
    </form>
    
  </div>

<?php
  require_once "./../FooterView.php";
?>