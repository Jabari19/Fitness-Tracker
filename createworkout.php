<!DOCTYPE html>
<html>
<head><title>Add Exercise to Workout</title></head>
<link rel="stylesheet" type="text/css" href="css/styles.css">

<body>
    <h2>Add Exercise to Workout</h2>
    <form action="addexercise.php" method="POST">
        <label for="workout_id">Workout ID:</label>
        <input type="number" id="workout_id" name="workout_id" required><br><br>

        <label for="exercise_id">Exercise ID:</label>
        <input type="number" id="exercise_id" name="exercise_id" required><br><br>

        <label for="sets">Sets:</label>
        <input type="number" id="sets" name="sets" required><br><br>

        <label for="reps">Reps:</label>
        <input type="number" id="reps" name="reps" required><br><br>

        <button type="submit">Add Exercise</button>
    </form>
</body>
</html>
