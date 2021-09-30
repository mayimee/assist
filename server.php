<?php

    $host = "localhost";
    $root = "root";
    $password = "password";
    $database = "assist_db";
    $port = "3306";

    $connect = mysqli_connect($host, $root, $password, $database, $port);

    // if (mysqli_connect_error())
    // {
    //     echo "Unable to connect to MySQL. " . mysqli_connect_error();
    // }
    // else
    // {
    //     echo "DB connected successfully.";
    // }


?>