<?php
// viewusers.php
require_once 'config.php';

try {
    // Fetch all users
    $stmt = $pdo->query("SELECT * FROM Users");
    $users = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head><title>View Users</title></head>
<link rel="stylesheet" href="styles.css">
<body>
    <h2>User List</h2>
    body class="view-users-background">
    <h2 style="text-align:center; margin-top:20px;">User List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['user_id'] ?></td>
            <td><?= htmlspecialchars($user['first_name']) ?></td>
            <td><?= htmlspecialchars($user['last_name']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['age']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
