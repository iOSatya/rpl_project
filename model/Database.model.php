<?php

class Database {
    private $dbHost = "localhost";
    private $dbName = "rpl_project";
    private $dbUsername = "root";
    private $dbPassword = "";

    protected function dbConnect() {
        try {
            $pdo = new PDO(
                "mysql:host=" . $this->dbHost . "; dbname=" . $this->dbName,
                $this->dbUsername,
                $this->dbPassword
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }
    }

    protected function findPlayerId($email) {
        $query = "select player_id from players where email=?;";
        $stmt = $this->dbConnect()->prepare($query);
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["player_id"];
    }

    protected function findEmail($email) {
        $query = "select email from players where email=?;";
        $stmt = $this->dbConnect()->prepare($query);
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["email"];
    }

    protected function findPassword($email) {
        $query = "select pwd from players where email=?;";
        $stmt = $this->dbConnect()->prepare($query);
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["pwd"];
    }

    protected function findPlayerStatus($email) {
        $query = "select player_status from players where email=?;";
        $stmt = $this->dbConnect()->prepare($query);
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["player_status"];
    }

    protected function findPlayerName($email) {
        $query = "select player_name from players where email=?;";
        $stmt = $this->dbConnect()->prepare($query);
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["player_name"];
    }

}