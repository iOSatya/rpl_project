<?php

require_once BASE_URL . "view/AddItem.view.php";

class HomeTeacherView extends AddItem {
    public function __construct() {
        parent::getHead();
        parent::__construct(["hometeacher.pages.php"]);
        parent::getFoot();
    }
}