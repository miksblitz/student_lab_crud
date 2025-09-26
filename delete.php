<?php
include 'db_connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM students WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: select.php");
    exit;
} else {
    echo "Error deleting record: " . $conn->error;
}
?>
