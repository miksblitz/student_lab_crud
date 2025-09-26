<?php
$host = "localhost";
$user = "root";  // default in XAMPP/WAMP
$pass = "";
$db   = "student_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
