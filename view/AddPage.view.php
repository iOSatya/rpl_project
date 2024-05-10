<?php

class AddPage extends AddItem {
    public function __construct($pages) {
        require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/header.pages.php";
        parent::__construct($pages);
        require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/footer.pages.php";
    }
}