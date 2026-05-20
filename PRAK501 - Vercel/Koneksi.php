<?php
function getConnection() {
    $host = "sql12.freesqldatabase.com"; 
    $username = "sql12827630"; 
    $password = "CirmKvnuWt"; 
    $database = "sql12827630"; 

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