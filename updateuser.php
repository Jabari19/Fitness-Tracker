<?php
// updateuser.php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch existing user data
    $stmt = $pdo->prepare("SELECT * FROM Users WHERE user_id = :id");
    $stmt->execute([':id' => $id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    try {
        $sql = "UPDATE Users SET first_name = :first_name, last_name = :last_name, email = :email, age = :age WHERE user_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':first_name' => $firstName, ':last_name' => $lastName, ':email' => $email, ':age' => $age, ':id' => $id]);
        echo "User successfully updated!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!-- HTML Form for updating a user -->
<form method="POST" action="updateuser.php">
    <input type="hidden" name="id" value="<?= htmlspecialchars($user['user_id']) ?>">
    <label>First Name: <input type="text" name="first_name" value="<?= htmlspecialchars($user['first_name']) ?>" required></label><br>
    <label>Last Name: <input type="text" name="last_name" value="<?= htmlspecialchars($user['last_name']) ?>" required></label><br>
    <label>Email: <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required></label><br>
    <label>Age: <input type="number" name="age" value="<?= htmlspecialchars($user['age']) ?>" required></label><br>
    <input type="submit" value="Update User">
</form>
