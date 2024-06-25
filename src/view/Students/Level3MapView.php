<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/MapModel.php";

  $model = new MapModel();
  $assignment = $model->getAssignment(3);

  if (!isset($_SESSION["playerHp"]) || !isset($_SESSION["bossHp"])) {
    $_SESSION["playerHp"] = 100;
    $_SESSION["bossHp"] = 100;
  }

?>

  <img id="background" src="./../images/Level 3/Background.png">
  <?php if ($_SESSION["playerHp"] == 100 && $_SESSION["bossHp"] == 100) { ?>
  <div id="story" style="opacity: 0;">
    <div class="d-flex flex-column p-4" style="height: 100vh;">
      <button id="skip" class="btn btn-outline-warning align-self-end">Skip</button>
      <div id="conversationSkip" class="d-flex flex-column mt-auto">
        <img id="character" src="./../images/Level 3/Boss.png" class="align-self-end" style="height: 300px; width: 500px; object-position: 0px 0px; object-fit: cover; display: none;">
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
          <input type="hidden" name="mapRegion" value="Level3Map">
          <input type="hidden" name="userAnswer" value="A">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerA"]; ?></button>
        </form>

        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level3Map">
          <input type="hidden" name="userAnswer" value="B">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerB"]; ?></button>
        </form>

        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level3Map">
          <input type="hidden" name="userAnswer" value="C">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerC"]; ?></button>
        </form>

        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level3Map">
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
      '"My, my... what an interesting little moth, drawn to the flame of power. Or is it wisdom you seek in these shadowed lands?"',
      '"I seek the path forward. Are you here to guide or to hinder?"',
      '"Oh, clever one. Why must it be either? Sometimes the greatest hindrance is the truest guide."',
      '"I\'ve faced trials of strength and rebirth. What challenge do you pose?"',
      '"I offer the challenge of truth, young seeker. In a world of illusions, can you discern reality?"',
      '"I\'ve come too far to be turned aside by tricks and riddles."',
      '"Tricks and riddles? Such simple words for the tapestry of deception that shapes your world. Tell me, hero, how certain are you of your quest? Of yourself?"',
      '"I\'m certain enough to face whatever you have planned."',
      '"Brave words. Let us see if your actions match them. In my realm of moonlight and shadows, every truth casts a thousand lies. Are you prepared to face them all?"',
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
      object-position: 0px -550px;
      position: absolute;
      z-index: -1;
      filter: brightness(0.4);
    }
  </style>

<?php
  require_once "./../FooterView.php";
?>