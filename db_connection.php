<?php
// db_connection.php

$host = "127.0.0.1";     
$port = "3306";        
$user = "root";        
$password = "root";        
$dbname = "mygallery";

try {
    
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>