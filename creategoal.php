<?php
// creategoal.php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $goal_description = $_POST['goal_description'];
    $target_date = $_POST['target_date'];

    try {
        $sql = "INSERT INTO Goals (user_id, goal_description, target_date) VALUES (:user_id, :goal_description, :target_date)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':user_id' => $user_id, ':goal_description' => $goal_description, ':target_date' => $target_date]);

        echo "Goal set successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
