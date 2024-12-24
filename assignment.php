<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10th Class Assignment</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        let timeLeft = 1800; // 30 minutes in seconds
        let timerInterval; // To store the interval ID

        function startTimer() {
            const timer = document.getElementById('timer');
            timerInterval = setInterval(() => {
                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    document.getElementById('quizForm').submit();
                }
                let minutes = Math.floor(timeLeft / 60);
                let seconds = timeLeft % 60;
                timer.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
                timeLeft--;
            }, 1000);
        }

        function showTest() {
            document.getElementById('startButton').style.display = 'none'; // Hide start button
            document.getElementById('quizSection').style.display = 'block'; // Show quiz section
            startTimer(); // Start the timer
        }
    </script>
    <style>
        .logo {
            display: block;
            margin: 0 auto;
            width: 150px; /* Adjust the width as needed */
        }
        .header {
            text-align: center;
        }
        .container {
            margin: 20px auto;
            max-width: 600px;
            text-align: center;
        }
        #quizSection {
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="./myproject/Screenshot 2024-12-23 185306.png" alt="Logo" class="logo">
            <h1>10th Class Assignment</h1>
        </div>
        <p><strong>Time Remaining:</strong> <span id="timer">30:00</span></p>
        <button id="startButton" onclick="showTest()">Start Test</button>
        
        <div id="quizSection" style="display: none;">
            <form id="quizForm" action="submit.php" method="POST">
                <ol>
                    <li>
                        <p>What is the formula for the area of a circle?</p>
                        <label><input type="radio" name="q1" value="a"> πr²</label><br>
                        <label><input type="radio" name="q1" value="b"> 2πr</label><br>
                        <label><input type="radio" name="q1" value="c"> πd²/4</label><br>
                        <label><input type="radio" name="q1" value="d"> None of these</label>
                    </li>
                    <li>
                        <p>What is the chemical formula for water?</p>
                        <label><input type="radio" name="q2" value="a"> CO2</label><br>
                        <label><input type="radio" name="q2" value="b"> H2O</label><br>
                        <label><input type="radio" name="q2" value="c"> NaCl</label><br>
                        <label><input type="radio" name="q2" value="d"> CH4</label>
                    </li>
                    <!-- Add more questions here -->
                    <li>
                    <p>Who is known as the Father of the Indian Constitution?</p>
                    <input type="radio" name="q3" value="a"> a) Mahatma Gandhi <br>
                    <input type="radio" name="q3" value="b"> b) B.R. Ambedkar <br>
                    <input type="radio" name="q3" value="c"> c) Jawaharlal Nehru <br>
                    <input type="radio" name="q3" value="d"> d) Sardar Patel
                </li>
                <li>
                    <p>What is the SI unit of electric current?</p>
                    <input type="radio" name="q4" value="a"> a) Volt <br>
                    <input type="radio" name="q4" value="b"> b) Ampere <br>
                    <input type="radio" name="q4" value="c"> c) Ohm <br>
                    <input type="radio" name="q4" value="d"> d) Watt
                </li>
                <li>
                    <p>Which gas is the most abundant in Earth's atmosphere?</p>
                    <input type="radio" name="q5" value="a"> a) Oxygen <br>
                    <input type="radio" name="q5" value="b"> b) Nitrogen <br>
                    <input type="radio" name="q5" value="c"> c) Carbon Dioxide <br>
                    <input type="radio" name="q5" value="d"> d) Argon
                </li>
                <li>
                    <p>What is the value of acceleration due to gravity on Earth?</p>
                    <input type="radio" name="q6" value="a"> a) 9.8 m/s² <br>
                    <input type="radio" name="q6" value="b"> b) 10 m/s² <br>
                    <input type="radio" name="q6" value="c"> c) 8.9 m/s² <br>
                    <input type="radio" name="q6" value="d"> d) 7.8 m/s²
                </li>
                <li>
                    <p>Which metal is liquid at room temperature?</p>
                    <input type="radio" name="q7" value="a"> a) Mercury <br>
                    <input type="radio" name="q7" value="b"> b) Iron <br>
                    <input type="radio" name="q7" value="c"> c) Copper <br>
                    <input type="radio" name="q7" value="d"> d) Aluminium
                </li>
                <li>
                    <p>What is the process of converting water vapor into liquid called?</p>
                    <input type="radio" name="q8" value="a"> a) Evaporation <br>
                    <input type="radio" name="q8" value="b"> b) Condensation <br>
                    <input type="radio" name="q8" value="c"> c) Sublimation <br>
                    <input type="radio" name="q8" value="d"> d) Freezing
                </li>
                <li>
                    <p>Who wrote the novel "The Guide"?</p>
                    <input type="radio" name="q9" value="a"> a) R.K. Narayan <br>
                    <input type="radio" name="q9" value="b"> b) Rabindranath Tagore <br>
                    <input type="radio" name="q9" value="c"> c) Mulk Raj Anand <br>
                    <input type="radio" name="q9" value="d"> d) Khushwant Singh
                </li>
                <li>
                    <p>Which planet is known as the Red Planet?</p>
                    <input type="radio" name="q10" value="a"> a) Mars <br>
                    <input type="radio" name="q10" value="b"> b) Venus <br>
                    <input type="radio" name="q10" value="c"> c) Jupiter <br>
                    <input type="radio" name="q10" value="d"> d) Saturn
                </li>
                <li>
                    <p>What is the smallest unit of life?</p>
                    <input type="radio" name="q11" value="a"> a) Atom <br>
                    <input type="radio" name="q11" value="b"> b) Molecule <br>
                    <input type="radio" name="q11" value="c"> c) Cell <br>
                    <input type="radio" name="q11" value="d"> d) Tissue
                </li>
                <li>
                    <p>What is the boiling point of water?</p>
                    <input type="radio" name="q12" value="a"> a) 0°C <br>
                    <input type="radio" name="q12" value="b"> b) 100°C <br>
                    <input type="radio" name="q12" value="c"> c) 50°C <br>
                    <input type="radio" name="q12" value="d"> d) 150°C
                </li>
                <li>
                    <p>What is the capital city of Andhra Pradesh?</p>
                    <input type="radio" name="q13" value="a"> a) Hyderabad <br>
                    <input type="radio" name="q13" value="b"> b) Amaravati <br>
                    <input type="radio" name="q13" value="c"> c) Visakhapatnam <br>
                    <input type="radio" name="q13" value="d"> d) Vijayawada
                </li>
                <li>
                    <p>What is the common name for sodium bicarbonate?</p>
                    <input type="radio" name="q14" value="a"> a) Baking Soda <br>
                    <input type="radio" name="q14" value="b"> b) Washing Soda <br>
                    <input type="radio" name="q14" value="c"> c) Bleaching Powder <br>
                    <input type="radio" name="q14" value="d"> d) Caustic Soda
                </li>
                <li>
                    <p>Which is the longest river in India?</p>
                    <input type="radio" name="q15" value="a"> a) Yamuna <br>
                    <input type="radio" name="q15" value="b"> b) Ganga <br>
                    <input type="radio" name="q15" value="c"> c) Brahmaputra <br>
                    <input type="radio" name="q15" value="d"> d) Godavari
                </li>
                <li>
                    <p>What is the largest organ in the human body?</p>
                    <input type="radio" name="q16" value="a"> a) Liver <br>
                    <input type="radio" name="q16" value="b"> b) Skin <br>
                    <input type="radio" name="q16" value="c"> c) Brain <br>
                    <input type="radio" name="q16" value="d"> d) Heart
                </li>
                <li>
                    <p>Which is the hardest natural substance on Earth?</p>
                    <label><input type="radio" name="q17" value="a"> Diamond</label><br>
                    <label><input type="radio" name="q17" value="b"> Graphite</label><br>
                    <label><input type="radio" name="q17" value="c"> Quartz</label><br>
                    <label><input type="radio" name="q17" value="d"> Steel</label>
                </li>
                </ol>
                <button type="submit" class="btn-submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

