<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/MapModel.php";

  $model = new MapModel();
  $assignment = $model->getAssignment(4);

  if (!isset($_SESSION["playerHp"]) || !isset($_SESSION["bossHp"])) {
    $_SESSION["playerHp"] = 100;
    $_SESSION["bossHp"] = 100;
  }

?>

  <img id="background" src="./../images/Level 4/Background.png">
  <?php if ($_SESSION["playerHp"] == 100 && $_SESSION["bossHp"] == 100) { ?>
  <div id="story" style="opacity: 0;">
    <div class="d-flex flex-column p-4" style="height: 100vh;">
      <button id="skip" class="btn btn-outline-warning align-self-end">Skip</button>
      <div id="conversationSkip" class="d-flex flex-column mt-auto">
        <img id="character" src="./../images/Level 4/Boss.png" class="align-self-end" style="height: 300px; width: 500px; object-position: 0px 0px; object-fit: cover; display: none;">
        <div class="border text-light p-4" style="height: 200px;">
          <span id="conversation" style="user-select: none; font-family: 'Cinzel';"></span>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

  <div id="gameplay">
    <a class="btn btn-outline-danger m-4" href="./MapView.php" style="position: absolute;">Map</a>
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">

      <div class="d-flex justify-content-between" style="width: 680px;">
        <span class="border border-primary rounded text-primary p-2 text-end bg-dark bg-opacity-25" style="width: <?= $_SESSION["playerHp"] * 3; ?>px;"><?= $_SESSION["playerHp"]; ?></span>
        <span class="border border-danger text-danger p-2 rounded bg-dark bg-opacity-25" style="width: <?= $_SESSION["bossHp"] * 3; ?>px;"><?= $_SESSION["bossHp"]; ?></span>
      </div>

      <span class="text-light mt-5 mb-5"><?= $assignment["question"]; ?></span>

      <div class="d-flex">
        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level4Map">
          <input type="hidden" name="userAnswer" value="A">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerA"]; ?></button>
        </form>

        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level4Map">
          <input type="hidden" name="userAnswer" value="B">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerB"]; ?></button>
        </form>

        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level4Map">
          <input type="hidden" name="userAnswer" value="C">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerC"]; ?></button>
        </form>

        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level4Map">
          <input type="hidden" name="userAnswer" value="D">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerD"]; ?></button>
        </form>
      </div>

    </div>
  </div>

  <?php if ($_SESSION["playerHp"] == 100 && $_SESSION["bossHp"] == 100) { ?>
  <script>

    $("#gameplay").hide();
    $("#story").fadeTo(1000, 1);

    $("#skip").on("click", function() {
      $("#story").hide();
      $("#gameplay").show();
    });

    const conversationList = [
      'Step... Step...',
      '"INTRUDER! You dare trespass in my domain?"',
      '"I\'ve come too far to turn back now. Stand aside!"',
      '"Foolish mortal! Your journey ends here, buried beneath the merciless sands!"',
      '"I\'ve overcome fire and illusion. You\'re just another obstacle."',
      '"Fire? Illusion? Mere parlor tricks! I am the fury of the desert itself. I have ground empires to dust!"',
      '"Then you\'ll be a worthy challenge. Let\'s see how you fare against steel and determination!"',
      '"Determination? BAH! The sun will bleach your bones before you ever scratch my surface!"',
      '"Is that all? I expected more from a so-called force of nature!"',
      '"You DARE mock me? I will show you power beyond your wildest nightmares!"',
      '"Bring it on, you oversized sand castle! I\'ll reduce you to a pile of dust!"',
      '"ENOUGH! Prepare to be UNMADE, puny one!"'
    ];


    const conversation = document.getElementById("conversation");
    const conversationSkip = document.getElementById("conversationSkip");
    const character = document.getElementById("character");

    let x = 0;
    conversation.innerText = conversationList[x];
    
    conversationSkip.addEventListener("click", () => {
      x++
      conversation.innerText = conversationList[x];

      if (x % 2 == 1) {
        character.style.display = "initial";
        character.style.filter = "brightness(90%)";
      } else {
        character.style.filter = "brightness(30%)";
      }

      if (x == conversationList.length) {
        $("#story").hide();
        $("#gameplay").show();
      }
    });
  </script>
  <?php } ?>

  <style>
    #background {
      height: 100vh;
      width: 100vw;
      object-fit: cover;
      object-position: 0px 0px;
      position: absolute;
      z-index: -1;
      filter: brightness(1);
    }
  </style>

<?php
  require_once "./../FooterView.php";
?>