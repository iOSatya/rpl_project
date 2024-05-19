<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "config/session.config.php";
require_once BASE_URL . "model/Player.model.php";
require_once BASE_URL . "model/Student.model.php";
require_once BASE_URL . "view/HomeStudent.view.php";
require_once BASE_URL . "view/HomeTeacher.view.php";
require_once BASE_URL . "view/HomeAdmin.view.php";

if (!isset($_SESSION["playerData"])) {
    header("Location: ../index.php");
    die();
}

$playerData = unserialize($_SESSION["playerData"]);

if ($playerData->playerStatus == "Student") {
    $_SESSION["studentData"] = serialize(new StudentModel($playerData->playerId));
    new HomeStudentView();
} else if ($playerData->playerStatus == "Teacher") {
    new HomeTeacherView();
} else if ($playerData->playerStatus == "Admin") {
    new HomeAdminView();
}