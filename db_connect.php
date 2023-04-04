<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "vr1tr194_admin";
$dbPassword = "4415091qwe";
$dbName     = "vr1tr194_psx";
/* $dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "mydatabase"; */

// Create a PDO instance
try {
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4";
    $pdo = new PDO($dsn, $dbUsername, $dbPassword);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
