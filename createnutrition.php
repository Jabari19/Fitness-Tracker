<?php
// createnutrition.php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $meal = $_POST['meal'];
    $calories = $_POST['calories'];
    $protein = $_POST['protein'];
    $fat = $_POST['fat'];
    $carbs = $_POST['carbs'];
    $date = $_POST['date'];

    try {
        $sql = "INSERT INTO Nutrition (user_id, meal, calories, protein, fat, carbs, date) VALUES (:user_id, :meal, :calories, :protein, :fat, :carbs, :date)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':user_id' => $user_id, ':meal' => $meal, ':calories' => $calories, ':protein' => $protein, ':fat' => $fat, ':carbs' => $carbs, ':date' => $date]);

        echo "Nutrition record logged successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
