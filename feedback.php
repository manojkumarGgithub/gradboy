<?php
// Database connection configuration
$servername = "localhost"; // Change if needed
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "reglog"; // Database name

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $feedback = htmlspecialchars($_POST["feedback"]);

    $stmt = $conn->prepare("INSERT INTO feedback(name, email, feedback) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $feedback);

    if ($stmt->execute()) {
        echo "<h2 style='color: black;'>Thank you for your feedback, $name!</h2>";
        echo "<p>Your feedback has been recorded.</p>";
    } else {
        echo "<h2 style='color: #f00;'>Sorry, there was an error. Please try again later.</h2>";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: white;
            color: #fff;
        }
        .form-container {
            background:black;
            padding: 40px;
            border-radius: 8px;
            box-shadow: white;
            width: 100%;
            max-width: 400px;
        }
        .form-container h1 {
            margin-bottom: 20px;
            color: white;
        }
        .form-container label {
            display: block;
            margin: 10px 0 5px;
            color:white;
        }
        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #444;
            border-radius: 5px;
            background:white;
            color: #fff;
        }
        .form-container input::placeholder,
        .form-container textarea::placeholder {
            color: #666;
        }
        .form-container button {
            background-color: #f4b400;
            color: #000;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .form-container button:hover {
            background-color: #e5a200;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Feedback Form</h1>
        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="feedback">Your Feedback:</label>
            <textarea id="feedback" name="feedback" rows="5" placeholder="Write your feedback here..." required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </div>
</body>
</html>
