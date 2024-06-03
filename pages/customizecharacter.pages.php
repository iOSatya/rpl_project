<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "view/AddItem.view.php";
require_once BASE_URL . "view/CustomizeCharacter.view.php";

class CustomizeCharacterPages extends AddItem {
    public function __construct() {
        $pages = ["customizecharacter.pages.php"];
        parent::__construct($pages);
        $this->getHead();
        $this->render();
        $this->getFoot();
    }

    public function render($character = null) {
        $view = new CustomizeCharacterView();
        $view->render($character);
    }
}

// Contoh penggunaan:
$customizer = new CustomizeCharacterPages();
$customizer->render();
?>
