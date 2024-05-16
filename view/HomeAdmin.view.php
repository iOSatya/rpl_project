<?php

require_once BASE_URL . "view/AddItem.view.php";

class HomeAdminView extends AddItem {
    public function __construct() {
        parent::getHead();
        parent::__construct(["homeadmin.pages.php"]);
        parent::getFoot();
    }
}