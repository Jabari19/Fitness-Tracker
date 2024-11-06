<?php
// createuser.php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    try {
        $sql = "INSERT INTO Users (first_name, last_name, email, age) VALUES (:first_name, :last_name, :email, :age)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':first_name' => $firstName, ':last_name' => $lastName, ':email' => $email, ':age' => $age]);
        echo "User successfully added!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- HTML Form for creating a user -->
<form method="POST" action="createuser.php">
    <label>First Name: <input type="text" name="first_name" required></label><br>
    <label>Last Name: <input type="text" name="last_name" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Age: <input type="number" name="age" required></label><br>
    <input type="submit" value="Add User">
</form>
