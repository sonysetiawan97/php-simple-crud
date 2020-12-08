<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "test";

$conn = mysqli_connect($serverName, $username, $password, $dbName);

try{
    if($conn){
        echo "DB connected\n";
    }
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}

?>