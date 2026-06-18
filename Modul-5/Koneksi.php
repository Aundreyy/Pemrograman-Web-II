<?php

function getKoneksi() {
    $host = "sql311.infinityfree.com";
    $dbname = "if0_42020528_prak501";
    $username = "if0_42020528";
    $password = "prak501andre"; 

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Koneksi database gagal: " . $e->getMessage());
    }
}
?>