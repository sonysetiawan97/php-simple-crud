<?php

$serverName = "localhost";
$username = "root";
$password = "password";
$dbName = "simple-crud-php";

$conn = mysqli_connect($serverName, $username, $password, $dbName);

try{
    $conn;
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}

?>