<?php

set_include_path('C:\xampp\htdocs\php\php-simple-crud');
include('config/connection.php');

$post = $_POST;
$fname = $post['fname'];

$query = "INSERT INTO tablekaryawan(fname) VALUES ('$fname')";
$sql = mysqli_query($conn, $query);

try{
    if($sql){
        echo "data saved to database\n";
        header("location: ../index.php");
        die();
    } else {
        trigger_error("data not saved to database\n");
    }
} catch (Exception $e){
    echo $e->getMessage();
}