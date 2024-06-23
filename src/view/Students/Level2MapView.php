<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/MapModel.php";

  $model = new MapModel();
  $assignment = $model->getAssignment(2);

  if (!isset($_SESSION["playerHp"]) || !isset($_SESSION["bossHp"])) {
    $_SESSION["playerHp"] = 100;
    $_SESSION["bossHp"] = 100;
  }

?>

  <img id="background" src="./../images/Level 2/Background.png">
  <?php if ($_SESSION["playerHp"] == 100 && $_SESSION["bossHp"] == 100) { ?>
  <div id="story" style="opacity: 0;">
    <div class="d-flex flex-column p-4" style="height: 100vh;">
      <button id="skip" class="btn btn-outline-warning align-self-end">Skip</button>
      <div id="conversationSkip" class="d-flex flex-column mt-auto">
        <img id="character" src="./../images/Level 2/Boss.png" class="align-self-end" style="height: 300px; width: 500px; object-position: 0px 0px; object-fit: cover; display: none;">
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

      <div>
        <span class="text-light"><?= $_SESSION["playerHp"]; ?></span>
        <span class="text-light"><?= $_SESSION["bossHp"]; ?></span>
      </div>

      <span class="text-light"><?= $assignment["question"]; ?></span>

      <div class="d-flex">
        <form action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level2Map">
          <input type="hidden" name="userAnswer" value="A">
          <button class="card" type="submit">
            <div class="card-body">
              <?= $assignment["answerA"]; ?>
            </div>
          </button>
        </form>

        <form action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level2Map">
          <input type="hidden" name="userAnswer" value="B">
          <button class="card" type="submit">
            <div class="card-body">
              <?= $assignment["answerB"]; ?>
            </div>
          </button>
        </form>

        <form action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level2Map">
          <input type="hidden" name="userAnswer" value="C">
          <button class="card" type="submit">
            <div class="card-body">
              <?= $assignment["answerC"]; ?>
            </div>
          </button>
        </form>

        <form action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level2Map">
          <input type="hidden" name="userAnswer" value="D">
          <button class="card" type="submit">
            <div class="card-body">
              <?= $assignment["answerD"]; ?>
            </div>
          </button>
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
      '"Welcome, seeker. Few climb so high, fewer still with purpose in their hearts."',
      '"You\'re... you\'re the Phoenix? I\'ve come seeking your wisdom."',
      '"Wisdom? Or is it power you truly desire? They are not always the same."',
      '"I need both to face the challenges ahead. My world is in danger."',
      '"And you believe you are the one to save it? Interesting. Tell me, what would you give up to gain what you seek?"',
      '"I... I\'m not sure. What must I sacrifice?"',
      '"That is for you to decide. Rebirth demands a price, the old must burn away for the new to emerge."',
      '"But how can I know what to let go of?"',
      '"That, young one, is the true test. Not all battles are won with strength alone."',
      '"Then test me. I\'m ready to face your trial."',
      '"Are you? Remember, in my fire, you may lose what you think defines you. But you may also gain what you never knew you needed."',
      '...!',
      '"Come then, brave one. Let us see what rises from your ashes!"'
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
      object-position: 0px -200px;
      position: absolute;
      z-index: -1;
      filter: brightness(0.8);
    }
  </style>

<?php
  require_once "./../FooterView.php";
?>