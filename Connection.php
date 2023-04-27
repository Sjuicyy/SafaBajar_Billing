<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Safabajar_billing";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

