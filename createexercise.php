<?php
// createexercise.php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    try {
        $sql = "INSERT INTO Exercises (name, description, category) VALUES (:name, :description, :category)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':name' => $name, ':description' => $description, ':category' => $category]);

        echo "Exercise added successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

