<?php

    $host = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "ads_task3";

    $conn = new mysqli($host, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        // echo "Connected successfully";
    }
?>