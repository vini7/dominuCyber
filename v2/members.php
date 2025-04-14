<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$members = ['Adela', 'Donald', 'Kejdi', 'Klejdi', 'Piro', 'Luis'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Klasa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Klasa V2</h1>
    <ul>
        <?php foreach ($members as $member): ?>
            <li><?php echo $member; ?></li>
        <?php endforeach; ?>
    </ul>
    <p><a href="index.php">Kthehu në Dashboard</a></p>
</body>
</html>
