<?php

class AddItem {
    public function __construct($pages) {
        foreach ($pages as $page) {
            require $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/pages/" . $page;
        }
    }
}