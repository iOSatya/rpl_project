<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "config/session.config.php";
require_once BASE_URL . "model/Player.model.php";

if (!isset($_SESSION["playerData"])) {
    header("Location: ../index.php");
}

$playerData = unserialize($_SESSION["playerData"]);

if ($playerData->playerStatus == "student") {
    echo "This is Student";
} else if ($playerData->playerStatus == "teacher") {
    echo "This is Teacher";
} else if ($playerData->playerStatus == "admin") {
    echo "This is Admin";
}