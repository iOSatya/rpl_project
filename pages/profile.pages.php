<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/define.config.php";
require_once BASE_URL . "view/AddItem.view.php";
require_once BASE_URL . "view/ProfileView.php";
require_once BASE_URL . "landing/PlayerProfile.php";

class ProfilePages extends AddItem {
    private $playerId;
    private $db;

    public function __construct($playerId, $db) {
        $this->playerId = $playerId;
        $this->db = $db;
        $pages = ["profile.pages.php"];
        parent::__construct($pages);
        $this->getHead();
        $this->render();
        $this->getFoot();
    }

    public function render() {
        $profile = new PlayerProfile($this->db);
        $player = $profile->getPlayerProfile($this->playerId);
        $student = $profile->getStudentProfile($this->playerId);

        if ($player === false || $student === false) {
            die("Player or student data not found.");
        }

        $view = new ProfileView();
        $view->render($player, $student);
    }
}

// Contoh penggunaan:
require_once BASE_URL . "config/config.php"; // File config yang menghubungkan ke database
$playerId = 24; // Ganti dengan ID dinamis sesuai kebutuhan
$customizer = new ProfilePages($playerId, $db);
$customizer->render();
?>
