<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "config/db.config.php";
require_once BASE_URL . "pages/profile.pages.php";

$playerId = 24; // Ganti dengan ID pemain yang sesuai

// Membuat objek ProfilePages
$profilePage = new ProfilePages($playerId, $db);
$profilePage->render();
?>
