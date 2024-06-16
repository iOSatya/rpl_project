<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/MapModel.php";

  $model = new MapModel();
  $assignment = $model->getAssignment(1);

?>

  <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <span><?= $assignment["question"]; ?></span>
    
  </div>

<?php
  require_once "./../FooterView.php";
?>