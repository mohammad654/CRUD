<?php

$servername = "localhost";
$dbname = "test";
$username = "root";
$password ="";
$dsn="mysql:host=$servername;dbname=$dbname";

try {
    $connection = new PDO($dsn,$username,$password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
