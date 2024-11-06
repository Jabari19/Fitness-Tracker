<!DOCTYPE html>
<html>
<head><title>Add Nutrition Record</title></head>
<link rel="stylesheet" type="text/css" href="css/styles.css">

<body>
    <h2>Log Meal</h2>
    <form action="createnutrition.php" method="POST">
        <label for="user_id">User ID:</label>
        <input type="number" id="user_id" name="user_id" required><br><br>

        <label for="meal">Meal Name:</label>
        <input type="text" id="meal" name="meal" required><br><br>

        <label for="calories">Calories:</label>
        <input type="number" id="calories" name="calories" required><br><br>

        <label for="protein">Protein (g):</label>
        <input type="number" id="protein" name="protein" required><br><br>

        <label for="fat">Fat (g):</label>
        <input type="number" id="fat" name="fat" required><br><br>

        <label for="carbs">Carbohydrates (g):</label>
        <input type="number" id="carbs" name="carbs" required><br><br>

        <label for="date">Date and Time:</label>
        <input type="datetime-local" id="date" name="date" required><br><br>

        <button type="submit">Log Nutrition</button>
    </form>
</body>
</html>
