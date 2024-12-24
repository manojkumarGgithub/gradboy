<?php
require 'p1config.php';
if (!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: p1login.php");
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answers = [
        'q1' => 'a', 
        'q2' => 'b', 
        'q3' => 'b',
        'q4' => 'b', 
        'q5' => 'b', 
        'q6' => 'a', 
        'q7' => 'a', 
        'q8' => 'b',
        'q9' => 'a', 
        'q10' => 'a',
        'q11' => 'c', 
        'q12' => 'b', 
        'q13' => 'b', 
        'q14' => 'a', 
        'q15' => 'b', 
        'q16' => 'b', 
        'q17' => 'a',
    ];

    $score = 0;

    foreach ($answers as $question => $correctAnswer) {
        if (isset($_POST[$question]) && $_POST[$question] === $correctAnswer) {
            $score++;
        }
    }

    $totalQuestions = count($answers); // Now 17
    $percentage = ($score / $totalQuestions) * 100;

    $name = isset($_POST['name']) ? trim(htmlspecialchars($_POST['name'])) : $row["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #74ebd5, #9face6);
        }

        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        .result-container h1 {
            margin-bottom: 1rem;
            color: #333;
        }

        .result-container p {
            margin: 0.5rem 0;
            font-size: 1.1rem;
            color: #555;
        }

        .result-container strong {
            color: #007BFF;
        }

        .result-container a {
            display: inline-block;
            margin-top: 1rem;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .result-container a:hover {
            background-color: #0056b3;
        }

        @media (max-width: 480px) {
            .result-container {
                padding: 15px;
            }

            .result-container h1 {
                font-size: 1.5rem;
            }

            .result-container p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h1>Quiz Results</h1>
        <p>Name: <?php echo $name; ?></p>
        <p>Your score: <?php echo $score; ?> / <?php echo $totalQuestions; ?></p>
        <p>Percentage: <?php echo number_format($percentage, 2); ?>%</p>
        <?php if ($percentage >= 90): ?>
            <p><strong>Grade: A+</strong></p>
        <?php elseif ($percentage >= 80): ?>
            <p><strong>Grade: A</strong></p>
        <?php elseif ($percentage >= 70): ?>
            <p><strong>Grade: B</strong></p>
        <?php elseif ($percentage >= 60): ?>
            <p><strong>Grade: C</strong></p>
        <?php else: ?>
            <p><strong>Grade: D</strong></p>
        <?php endif; ?>
        <a href="index.php">Go Back to Quiz</a>
    </div>
</body>
</html>
<?php } ?>