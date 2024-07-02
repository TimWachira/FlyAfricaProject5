<?php
// Database connection 
$servername = "localhost";
$username = "root";
$password = "";
$database = "flights";

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

