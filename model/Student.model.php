<?php

require_once BASE_URL . "model/Database.model.php";

class StudentModel extends Database {
    private $playerId = "";
    public $studentId = "";
    public $storySkip = false;

    public function __construct($playerId) {
        $this->playerId = $playerId;
        $this->studentId = $this->findStudentId();
        $this->storySkip = $this->getStorySkip();
    }

    public function getStorySkip() {
        $query = "select story_skip from students where player_id=?;";
        $stmt = parent::dbConnect()->prepare($query);
        $stmt->execute([$this->playerId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["story_skip"];
    }

    public function updateStorySkip() {
        $this->storySkip = true;
        $query = "update students set story_skip=? where player_id=?";
        $stmt = parent::dbConnect()->prepare($query);
        $stmt->execute([$this->storySkip, $this->playerId]);
    }

    private function findStudentId() {
        $query = "select student_id from students where player_id=?;";
        $stmt = $this->dbConnect()->prepare($query);
        $stmt->execute([$this->playerId]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["student_id"];
    }
}