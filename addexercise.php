<!DOCTYPE html>
<html>
<head><title>Add Exercise</title></head>
<link rel="stylesheet" type="text/css" href="css/styles.css">

<body>
    <h2>Add New Exercise</h2>
    <form action="createexercise.php" method="POST">
        <label for="name">Exercise Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="Strength">Strength</option>
            <option value="Cardio">Cardio</option>
            <option value="Flexibility">Flexibility</option>
            <option value="Balance">Balance</option>
        </select><br><br>

        <button type="submit">Add Exercise</button>
    </form>
</body>
</html>
