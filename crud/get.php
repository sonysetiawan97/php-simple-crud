<?php

set_include_path('C:\xampp\htdocs\php\php-simple-crud');
include('config/connection.php');

$query = "SELECT * FROM tablekaryawan";
$sql = mysqli_query($conn, $query);

if (!empty($sql)) {
    foreach($sql as $key => $values){
        $data[$key] = $values;
    }
}