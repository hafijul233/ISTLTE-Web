<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbase = "istlte";
    
    $connection = new mysqli($server, $user, $pass, $dbase);
// Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
