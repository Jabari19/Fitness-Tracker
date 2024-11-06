<?php
// viewworkouts.php
require_once 'config.php';

try {
    // Fetch all workouts with associated user information
    $stmt = $pdo->query("SELECT w.workout_id, w.date, w.duration, u.first_name, u.last_name, u.email 
                         FROM Workouts w
                         JOIN Users u ON w.user_id = u.user_id");
    $workouts = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head><title>View Workouts</title></head>
<body>
    <h2>Users Workout Log</h2>
    <table border="1">
        <tr>
            <th>Workout ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Duration (minutes)</th>
        </tr>
        <?php foreach ($workouts as $workout): ?>
        <tr>
            <td><?= $workout['workout_id'] ?></td>
            <td><?= htmlspecialchars($workout['first_name']) . ' ' . htmlspecialchars($workout['last_name']) ?></td>
            <td><?= htmlspecialchars($workout['email']) ?></td>
            <td><?= htmlspecialchars($workout['date']) ?></td>
            <td><?= htmlspecialchars($workout['duration']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
