<?php
$host = 'localhost';       // Hostname
$dbname = 'cordive_minicapstone'; // Database name
$username = 'root'; // MySQL username
$password = ''; // MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>