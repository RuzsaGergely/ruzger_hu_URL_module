<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "url";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Sikertelen adatbázis-kapcsolódás: " . $conn->connect_error);
}

$utfstmt = $conn->prepare("SET NAMES 'utf8'");
$utfstmt->execute();