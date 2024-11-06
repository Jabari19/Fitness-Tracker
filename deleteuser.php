<?php
// deleteuser.php
require_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM Users WHERE user_id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        echo "User successfully deleted!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
