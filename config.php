<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "petshop";

    $db = mysqli_connect($server, $username, $password, $db_name);

    if(!$db) {
        die("Server Gagal Terhubung!");
    }
?>