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

  <img id="background" src="./../images/Level 6/Background.png">
  <?php if ($_SESSION["playerHp"] == 100 && $_SESSION["bossHp"] == 100) { ?>
  <div id="story" style="opacity: 0;">
    <div class="d-flex flex-column p-4" style="height: 100vh;">
      <button id="skip" class="btn btn-outline-warning align-self-end">Skip</button>
      <div id="conversationSkip" class="d-flex flex-column mt-auto">
        <img id="character" src="./../images/Level 6/Boss.png" class="align-self-end" style="height: 350px; width: 500px; object-position: 0px 0px; object-fit: cover; display: none;">
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
          <input type="hidden" name="mapRegion" value="Level6Map">
          <input type="hidden" name="userAnswer" value="A">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerA"]; ?></button>
        </form>

        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level6Map">
          <input type="hidden" name="userAnswer" value="B">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerB"]; ?></button>
        </form>

        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level6Map">
          <input type="hidden" name="userAnswer" value="C">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerC"]; ?></button>
        </form>

        <form class="me-2" action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level6Map">
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
      '"Mortal, you tread where few dare to wander. What brings you to the roof of the world?"',
      '"I seek to save our lands from a great threat. I\'ve come in search of wisdom and power."',
      '"Wisdom and power... ever the pursuit of your kind. But do you truly understand what you seek?"',
      '"I\'ve faced trials and learned much on my journey. I\'m ready for whatever challenge you present."',
      '"Are you? The winds of change blow fiercely here. What seems solid may vanish like mist. What appears empty may hold great power."',
      '"I won\'t be deterred by illusions or trickery. My cause is just."',
      '"Justice? A weighty concept for one so... grounded. Up here, between earth and sky, all is in flux. Perspective shifts with each gust."',
      '"Then help me see what I\'m missing. I\'m willing to learn."',
      '"Perhaps there is more to you than meets the eye. Very well, seeker. If wisdom is truly your aim, then face me. Test your resolve against the very breath of the mountains. Prove you can adapt when all you know is swept away."',
      '...!',
      '"Let our dance begin. Show me the strength of your convictions!"'
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
      object-position: 0px -300px;
      position: absolute;
      z-index: -1;
      filter: brightness(0.5);
    }
  </style>

<?php
  require_once "./../FooterView.php";
?>