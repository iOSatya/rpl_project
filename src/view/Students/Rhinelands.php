<?php
  require_once "./../../config/config.php";
  require_once "./../HeaderView.php";
  require_once "./../../model/DatabaseModel.php";
  require_once "./../../model/MapModel.php";

  $model = new MapModel();
  $assignment = $model->getAssignment(1);

?>

  <div>
    <?= $assignment["question"]; ?>
  </div>

<?php
  require_once "./../FooterView.php";
?>