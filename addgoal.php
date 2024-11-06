<!DOCTYPE html>
<html>
<head><title>Set a Goal</title></head>
<link rel="stylesheet" type="text/css" href="css/styles.css">

<body>
    <h2>Set a New Goal</h2>
    <form action="creategoal.php" method="POST">
        <label for="user_id">User ID:</label>
        <input type="number" id="user_id" name="user_id" required><br><br>

        <label for="goal_description">Goal Description:</label>
        <textarea id="goal_description" name="goal_description" required></textarea><br><br>

        <label for="target_date">Target Date:</label>
        <input type="date" id="target_date" name="target_date" required><br><br>

        <button type="submit">Set Goal</button>
    </form>
</body>
</html>
