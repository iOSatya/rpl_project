<?php
require_once BASE_URL . "view/AddItem.view.php";
require_once BASE_URL . "view/CustomizeCharacterView.php"; // Sesuaikan dengan nama kelas yang benar

class CustomizeCharacter_view extends AddItem {
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
$customizer = new CustomizeCharacter_view();
$customizer->render();
?>