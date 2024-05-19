<?php

require_once BASE_URL . "view/AddItem.view.php";

class StoryView extends AddItem {
    public function __construct() {
        parent::getHead();
        parent::__construct(["story.pages.php"]);
        parent::getFoot();
    }
}