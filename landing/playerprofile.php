<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "view/PlayerProfile.view.php";
require_once BASE_URL . "model/Profile.model.php";

// Contoh penggunaan:
$profileModel = new ProfileModel();
$profile = $profileModel->getPlayerProfile(24); // Ganti dengan ID player yang sesuai

$view = new ProfileView();
$view->render($profile);
?>
