<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
require_once 'db.php';
$result = $conn->query("SELECT * FROM members");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Members</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Course Members</h1>
    <a href="add_member.php">Add Member</a>
    <table>
        <tr><th>ID</th><th>Name</th></tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <p><a href="index.php">Back to Dashboard</a></p>
</body>
</html>
