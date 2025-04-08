<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
require_once 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $conn->query("INSERT INTO members (name) VALUES ('$name')");
    header("Location: members.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add Member</h1>
    <form method="post">
        Name: <input type="text" name="name" required><br>
        <input type="submit" value="Add">
    </form>
    <p><a href="members.php">Back to Members</a></p>
</body>
</html>
