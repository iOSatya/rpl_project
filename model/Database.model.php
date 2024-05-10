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
}