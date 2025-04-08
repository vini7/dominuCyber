<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$members = ['Alice', 'Bob', 'Charlie', 'Diana'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Members</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Course Members</h1>
    <ul>
        <?php foreach ($members as $member): ?>
            <li><?php echo $member; ?></li>
        <?php endforeach; ?>
    </ul>
    <p><a href="index.php">Back to Dashboard</a></p>
</body>
</html>
