<?php

class AddPage {
    public function __construct($args) {
        require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/header.php";
        foreach ($args as $arg) {
            require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/" . $arg;
        }
        require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/footer.php";
    }
}