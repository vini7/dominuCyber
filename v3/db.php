<?php
$conn = new mysqli('localhost', 'lampuser', 'securepass', 'course_app');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
