<!DOCTYPE html>
<html>
<head>
    <title>Add New Workout</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <style>
        /* Set a background color */
        body {
            background-color: #f0f8ff; /* Light blue background color */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Alternatively, use a background image */
        /*
        body {
            background-image: url('path/to/your/image.jpg'); 
            background-size: cover; /* Cover the whole page */
            background-repeat: no-repeat;
            background-attachment: fixed; /* Keep image fixed when scrolling */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        */

        h2 {
            color: #333;
        }

        form {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center; margin-top:20px;">Add New Workout</h2>
    <form action="createworkout.php" method="POST">
        <label for="user_id">User ID:</label><br>
        <input type="number" id="user_id" name="user_id" required><br><br>

        <label for="date">Date (YYYY-MM-DD HH:MM:SS):</label><br>
        <input type="text" id="date" name="date" required><br><br>

        <label for="duration">Duration (in minutes):</label><br>
        <input type="number" id="duration" name="duration" required><br><br>

        <button type="submit">Add Workout</button>
    </form>
</body>
</html>
