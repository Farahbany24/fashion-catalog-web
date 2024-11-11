<?php 
    $rootDir = $_SERVER['DOCUMENT_ROOT'].'/catalog/';
    $server = "localhost"; // nama server
    $user = "root";
    $pass = '';
    $db = "fashion_catalog"; // nama database 

    $koneksi = mysqli_connect($server, $user, $pass, $db);

    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>