<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
?>

  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <form class="d-flex" action="#" method="post">
      
      <textarea class="form-control" name="question"></textarea>
      <div class="d-flex flex-column">
        <input class="form-control" name="answerA" type="text" placeholder="Answer A">
        <input class="form-control" name="answerB" type="text" placeholder="Answer B">
        <input class="form-control" name="answerC" type="text" placeholder="Answer C">
        <input class="form-control" name="answerD" type="text" placeholder="Answer D">
        <select class="form-select" name="correctAnswer">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
        </select>
        <button class="form-control" type="submit">Submit</button>
      </div>

    </form>
  </div>

<?php
  require_once "./../FooterView.php";
?>