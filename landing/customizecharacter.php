<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "config/session.config.php";
require_once BASE_URL . "model/Player.model.php"; // Pastikan file sudah dimuat sebelum unserialize
require_once BASE_URL . "model/Character.model.php";
require_once BASE_URL . "view/CustomizeCharacter.view.php";

if (!isset($_SESSION["playerData"])) {
    header("Location: ../index.php");
    die();
}

$playerData = unserialize($_SESSION["playerData"]);

$character = new Character(1, $playerData->playerId, 'style1', 'outfit1', 'light', 'blue');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newAppearance = [
        'hairStyle' => $_POST['hairStyle'],
        'outfit' => $_POST['outfit'],
        'skinColor' => $_POST['skinColor'],
        'eyeColor' => $_POST['eyeColor'],
    ];
    $character->updateAppearance($newAppearance);
    // Simpan perubahan ke database atau sesi di sini
}

$view = new CustomizeCharacterview();
$view->render($character);

?>
