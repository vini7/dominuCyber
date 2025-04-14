<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
require_once 'db.php';
$result = $conn->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Klasa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Klasa V3</h1>
    <a href="add_member.php">Shto pjesëmarrës</a>
    <table>
        <tr><th>ID</th><th>Emri</th><th>Mbiemri</th></tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['emri']; ?></td>
            <td><?php echo $row['mbiemri']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <p><a href="index.php">Kthehu në Dashboard</a></p>
</body>
</html>
