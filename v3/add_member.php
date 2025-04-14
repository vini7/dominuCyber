i<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
require_once 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['emri'];
    $conn->query("INSERT INTO members (emri) VALUES ('$emri')");
    header("Location: members.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shto person</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Shto Person</h1>
    <form method="post">
        Emri: <input type="text" name="emri" required><br>
        <input type="submit" value="Shto">
    </form>
    <p><a href="members.php">Kthehu te lista</a></p>
</body>
</html>
