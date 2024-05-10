<?php

$dbId = "mysql:host=localhost; dbname=rpl_project"; // host buat url databasenya, dbname buat nama databasenya
$dbUsername = "root"; // nama user yg punya database
$dbPassword = ""; // password user yg punya database

try {
    // koneksi ke database
    $pdo = new PDO($dbId, $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // kalau koneksi gagal
    echo "Error: " . $e->getMessage();
    die();
}
