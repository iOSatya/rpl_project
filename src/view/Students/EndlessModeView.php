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

  <img id="background" src="./../images/Endless Mode/Background.png">
  <?php if ($_SESSION["playerHp"] == 100 && $_SESSION["highScore"] == 0) { ?>
  <div id="story" style="opacity: 0;">
    <div class="d-flex flex-column p-4" style="height: 100vh;">
      <button id="skip" class="btn btn-outline-warning align-self-end">Skip</button>
      <div id="conversationSkip" class="d-flex flex-column mt-auto">
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
    
      <div class="d-flex">
        <span class="border border-warning rounded text-warning p-2 text-start bg-dark bg-opacity-25 me-2" id="timer"></span>
        <span class="border border-success rounded text-success p-2 text-start bg-dark bg-opacity-25 me-2">High Score: <?= $_SESSION["highScore"]; ?></span>
        <span class="border border-primary rounded text-primary p-2 text-start bg-dark bg-opacity-25" style="width: <?= $_SESSION["playerHp"] * 6; ?>px;"><?= $_SESSION["playerHp"]; ?></span>
      </div>

    
      <span class="text-white mt-5 mb-5"><?= $assignment["question"]; ?></span>
    
      <div class="d-flex">
        <form class="me-2" action="./../../controller/EndlessModeController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="userAnswer" value="A">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerA"]; ?></button>
        </form>
    
        <form class="me-2" action="./../../controller/EndlessModeController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="userAnswer" value="B">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerB"]; ?></button>
        </form>
    
        <form class="me-2" action="./../../controller/EndlessModeController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="userAnswer" value="C">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerC"]; ?></button>
        </form>
    
        <form class="me-2" action="./../../controller/EndlessModeController.php" method="post">
          <input type="hidden" name="assignmentId" value="<?= $assignment['assignmentId']; ?>">
          <input type="hidden" name="userAnswer" value="D">
          <button class="border p-4 text-light bg-transparent" type="submit"><?= $assignment["answerD"]; ?></button>
        </form>
      </div>
      
    </div>
  </div>

  <?php if ($_SESSION["playerHp"] == 100 && $_SESSION["highScore"] == 0) { ?>
  <script>

    $("#gameplay").hide();
    $("#story").fadeTo(1000, 1);

    $("#skip").on("click", function() {
      $("#story").hide();
      $("#gameplay").show();
    });

    const conversationList = [
      '. . .',
      '. . .',
      '. . .',
      'So, this is where it all leads. A world bathed in endless twilight, the very air heavy with the echoes of what once was. How many choices, how many battles have brought me here?',
      'I\'ve climbed mountains that touched the sky, braved frozen cities locked in time, and faced guardians both wise and terrible. Each step of the way, I thought I was moving towards an end, towards salvation. But this... this is no end. This is eternity stretched out before me, painted in shades of blood and ash.',
      'Is this the price of saving the world? An endless journey through its dying embers? Or perhaps... perhaps this is the world I couldn\'t save, the future I must now prevent.',
      'Every second here feels like a blade against my skin. Time itself seems to be my enemy now. How fitting, that after all the foes I\'ve faced, my greatest battle is against the relentless march of moments.',
      'But I can\'t falter. Not now. Not after everything. Each step forward is a victory, no matter how small. Each challenge overcome is a spark of hope in this twilight realm.',
      'They say the night is darkest just before dawn. Well, this twilight has no dawn, unless I forge one myself. So onward I go, into this endless dusk. My journey isn\'t over. Perhaps it never truly will be.',
      'For as long as there\'s a path before me, I\'ll walk it. As long as there\'s a challenge to face, I\'ll face it. This is my purpose now. This is my eternity.',
      'Into the twilight, then. Into the endless journey. Whatever comes, I am ready.',
    ];

    const conversation = document.getElementById("conversation");
    const conversationSkip = document.getElementById("conversationSkip");
    const character = document.getElementById("character");

    let x = 0;
    conversation.innerText = conversationList[x];
    
    conversationSkip.addEventListener("click", () => {
      x++
      conversation.innerText = conversationList[x];

      if (x == conversationList.length) {
        $("#story").hide();
        $("#gameplay").show();
      }
    });
  </script>
  <?php } ?>

  <script>

  const gameplay = document.getElementById("gameplay");
  const timer = document.getElementById("timer");
  let seconds = 5;
  timer.innerHTML = `Time: ${seconds}s`;

  if (gameplay.style.display != "none") {
    setInterval(function() {
      seconds -= 1;
      timer.innerHTML = `Time: ${seconds}s`;
    }, 1000);

    setTimeout(() => {
      window.location.href = "./../../controller/EndlessModeController.php";
    }, 5000);
  }

  </script>

  <style>
    #background {
      height: 100vh;
      width: 100vw;
      object-fit: cover;
      object-position: 0px -400px;
      position: absolute;
      z-index: -1;
      filter: brightness(0.5);
    }
  </style>

<?php
  require_once "./../FooterView.php";
?>