<?php
$servername = "localhost";
$username = "root"; //Empty username
$password = ""; //Empty password
$database = "farmcdb";
$port = "3306"; //Replace '3306' with your actual MySQL port if different

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>