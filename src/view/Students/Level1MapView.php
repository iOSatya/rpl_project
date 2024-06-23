<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/MapModel.php";

  $model = new MapModel();
  $assignment = $model->getAssignment(1);

  if (!isset($_SESSION["playerHp"]) || !isset($_SESSION["bossHp"])) {
    $_SESSION["playerHp"] = 100;
    $_SESSION["bossHp"] = 100;
  }

?>

  <img id="background" src="./../images/Level 1/Background.png">

  <?php if ($_SESSION["playerHp"] == 100 && $_SESSION["bossHp"] == 100) { ?>
  <div id="story" style="opacity: 0;">
    <div class="d-flex flex-column p-4" style="height: 100vh;">
      <button id="skip" class="btn btn-outline-warning align-self-end">Skip</button>
      <div id="conversationSkip" class="d-flex flex-column mt-auto">
        <img id="character" src="./../images/Level 1/Boss.png" class="align-self-end" style="height: 300px; width: 500px; object-position: 0px 0px; object-fit: cover; display: none;">
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
          <input type="hidden" name="mapRegion" value="Level1Map">
          <input type="hidden" name="userAnswer" value="A">
          <button class="card" type="submit">
            <div class="card-body">
              <?= $assignment["answerA"]; ?>
            </div>
          </button>
        </form>

        <form action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level1Map">
          <input type="hidden" name="userAnswer" value="B">
          <button class="card" type="submit">
            <div class="card-body">
              <?= $assignment["answerB"]; ?>
            </div>
          </button>
        </form>

        <form action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level1Map">
          <input type="hidden" name="userAnswer" value="C">
          <button class="card" type="submit">
            <div class="card-body">
              <?= $assignment["answerC"]; ?>
            </div>
          </button>
        </form>

        <form action="./../../controller/MapController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="mapRegion" value="Level1Map">
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
      '"A visitor? It has been... an age since one so young dared to enter these halls."',
      '"I seek passage through this castle. There\'s a great evil threatening the land beyond."',
      '"Evil? Child, evil is not some distant threat. It seeps into the very stones around you."',
      '"Then... you should understand why I must press on."',
      '"Brave words. I once spoke similarly. Now look at me, a guardian of the very darkness I sought to destroy."',
      '"What happened to you?\"',
      '"I underestimated the cost of my quest. This castle... it demands a price from those who would challenge it."',
      '"I\'m willing to pay that price if it means saving others."',
      '"Are you? Then prove it. Show me your resolve isn\'t mere youthful folly."',
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
      object-position: 0px -500px;
      position: absolute;
      z-index: -1;
      filter: brightness(0.2);
    }
  </style>

<?php
  require_once "./../FooterView.php";
?>