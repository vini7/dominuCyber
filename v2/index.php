<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard V2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Mirësevjen, <?php echo $_SESSION['username']; ?>!</h1>
    <p><a href="members.php">Kliko këtu për të parë listën e pjesmarrësve të klasës</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
