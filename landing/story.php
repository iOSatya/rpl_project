<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "config/session.config.php";
require_once BASE_URL . "model/Student.model.php";
require_once BASE_URL . "view/Story.view.php";


$studentData = unserialize($_SESSION["studentData"]);

if (empty($studentData->storySkip)) {
    new StoryView();
    $studentData->updateStorySkip();
} else {
    // Change this to the next game mechanic
    header("Location: DELETE_THIS_LATER.php");
}
