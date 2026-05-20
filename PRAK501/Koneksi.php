<?php
function getConnection() {
    $host = "localhost";
    $username = "root"; 
    $password = "";    
    $database = "prak501";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Koneksi gagal: " . $e->getMessage();
        die();
    }
}
?>
