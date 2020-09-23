<?php 

$serverName = "localhost";
$userName = "root";
$userPassword = "12345678";
$dbName = "mario";

$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }
   ?>