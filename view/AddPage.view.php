<?php

class AddPage extends AddItem {
    public function __construct($pages) {

        new Session();

        require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/head.pages.php";
        parent::__construct($pages);
        require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/foot.pages.php";
    }
}