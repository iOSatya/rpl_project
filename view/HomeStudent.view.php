<?php

require_once BASE_URL . "view/AddItem.view.php";

class HomeStudentView extends AddItem {
    public function __construct() {
        parent::getHead();
        parent::__construct(["homestudent.pages.php"]);
        parent::getFoot();
    }
}