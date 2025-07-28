<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "library_db"; // Changed to library_db

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>