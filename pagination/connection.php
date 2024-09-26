<?php
// Database credentials
$host = 'localhost:3307'; // or your database host
$db   = 'pagination';
$user = 'root';
$pass = '';

// Set the DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;";


try {
    $pdo = new PDO($dsn, $user, $pass);
    echo "Connected successfully.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>