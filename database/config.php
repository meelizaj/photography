<?php

$host = "localhost";
$username = "root"; 
$password = "";      
$db = "aperture";
$port = 3306;

$conn = mysqli_connect($host, $username, $password, $db, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}