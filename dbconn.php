<?php
$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "olam";

//$DB_TYPE = 'mysql'; //Type of database<br>
//$DB_HOST = 'localhost'; //Host name<br>
//$DB_USER = 'root'; //Host Username<br>
//$DB_PASS = ''; //Host Password<br>
//$DB_NAME = 'olam'; //Database name<br><br>

try {
    $conn = new PDO("mysql:host=$servername;dbname=olam", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed" . $e->getMessage();
}
