<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/rpl_project/config/db.config.php";
require_once BASE_URL . "view/Profile.view.php";
require_once BASE_URL . "model/Profile.model.php";

class ProfilePages {
    private $playerId;
    private $db;

    public function __construct($playerId, $db) {
        $this->playerId = $playerId;
        $this->db = $db;
    }

    public function render() {
        // Memuat profil pemain dari model
        $profileModel = new ProfileModel($this->db);
        $player = $profileModel->getPlayerProfile($this->playerId);
        $student = $profileModel->getStudentProfile($this->playerId);

        // Memuat halaman profil dari view
        $profileView = new ProfileView();
        $profileView->render($player, $student);
    }
}
