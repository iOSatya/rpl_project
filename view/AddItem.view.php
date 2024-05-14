<?php

class AddItem {
    public function __construct($pages) {
        foreach ($pages as $page) {
            require BASE_URL . "pages/" . $page;
        }
    }

    protected function getHead() {
        return require BASE_URL . "pages/templates/head.pages.php";
    }

    protected function getFoot() {
        return require BASE_URL . "pages/templates/foot.pages.php";
    }
    
}