<?php
$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "olam";


try {
    $conn = new PDO("mysql:host=$servername;dbname=olam", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
