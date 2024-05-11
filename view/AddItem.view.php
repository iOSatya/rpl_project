<?php

class AddItem {
    public function __construct($pages) {
        foreach ($pages as $page) {
            require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/" . $page;
        }
    }

    protected function getHead() {
        return require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/head.pages.php";
    }

    protected function getFoot() {
        return require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/templates/foot.pages.php";
    }
    
}