<?php

require_once BASE_URL . "view/AddItem.view.php";

class InputSoalView extends AddItem {
    public function __construct() {
        parent::getHead();
        parent::__construct(["inputsoal.pages.php"]);
        parent::getFoot();
    }
}