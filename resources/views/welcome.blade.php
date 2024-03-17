<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            text-align: center; /* Center-align the content */
        }

        h2 {
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            width: 300px;
            margin: 20px auto;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left; /* Reset text alignment for the form */
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Enter Your Details</h2>
    <form method="POST" action="{{ url('/') }}">
    @csrf <!-- Include CSRF token -->
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br>
        
        <input type="submit" value="Submit">
    </form>
    <?php
    // PHP code starts here
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        // Outputting submitted data
        echo "<p>Submitted Data:</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Age: $email</p>";
        echo "<p>place: $age</p>";
    }
    ?>

</body>
</html>
