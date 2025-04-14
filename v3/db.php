<?php
$conn = new mysqli('localhost', 'admin', 'CyberDB2025', 'klasa_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
