<?php

class AddPage {
    public function __construct($pages) {
        require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/header.pages.php";
        foreach ($pages as $page) {
            require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/" . $page;
        }
        require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/footer.pages.php";
    }
}