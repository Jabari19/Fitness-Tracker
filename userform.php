<?php
// userform.php
require_once './config.php';

// Initialize variables to store form data and messages
$firstName = $lastName = $email = $age = '';
$message = '';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data from POST request
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    try {
        // Prepare SQL statement to insert new user data
        $sql = "INSERT INTO Users (first_name, last_name, email, age) VALUES (:first_name, :last_name, :email, :age)";
        $stmt = $pdo->prepare($sql);

        // Execute the statement with form data
        $stmt->execute([
            ':first_name' => $firstName,
            ':last_name' => $lastName,
            ':email' => $email,
            ':age' => $age
        ]);

        $message = "User successfully added!";
        // Clear form values
        $firstName = $lastName = $email = $age = '';
    } catch (PDOException $e) {
        $message = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Add New User</title></head>
<body>
    <h2>Add a New User</h2>
    <?php if ($message): ?>
        <p><?= $message ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" value="<?= $firstName ?>" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" value="<?= $lastName ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $email ?>" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?= $age ?>" required><br>

        <button type="submit">Add User</button>
    </form>
</body>
</html>
