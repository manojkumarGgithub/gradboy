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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            padding: 1rem;
            margin: 0;
        }

.logo img {
    height: 40px;
    width: auto; 
    margin-right: 20px; 
    cursor: pointer;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 1rem 2rem;
}


.navbar-links {
    display: flex;
    gap: 6rem; 
    list-style: none;
    margin: 0;
    padding: 0;
}

.navbar-links a {
    color: white;
    text-decoration: none;
    padding: 0.75rem 1.5rem;
    font-size: 1.2rem; 
    border-radius: 5px;
    transition: background-color 0.3s;
}

.navbar-links a:hover {
    background-color: #575757;
}

.hamburger {
    display: none;
    flex-direction: column;
    gap: 6px; 
    cursor: pointer;
}

.hamburger div {
    width: 30px; 
    height: 4px; 
    background-color: white;
}

@media (max-width: 768px) {
    .navbar-links {
        display: none;
        flex-direction: column;
        width: 100%;
        background-color: #333;
        position: absolute;
        top: 80px; 
        left: 0;
        z-index: 1000;
    }

    .navbar-links.active {
        display: flex;
    }

    .hamburger {
        display: flex;
    }
}


        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
            background-color: #f4f4f4;
        }

.card {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: 800;
    background-size: cover;
    background-position: center;
    color: #fff; /* Bright text from the start */
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8); /* Improve contrast for readability */
    border: 1px solid rgba(255, 255, 255, 0.2); /* Subtle border */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Slight shadow for glassy look */
    width: calc(100% / 3 - 40px);
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    background-color: rgba(255, 255, 255, 0.1); /* Glass-like background */
    backdrop-filter: blur(10px); /* Glass effect */
    filter: brightness(0.5); /* Initial dimmed image */
    transition: filter 0.3s ease, transform 0.3s ease, background-color 0.3s ease;
}


.card:hover {
    filter: brightness(1); 
    background-color: rgba(0, 0, 0, 0.3); 
    transform: scale(1.05); 
}
span{
    color:red;
}



        #telugu { background-image: url("https://apboardsolutions.com/wp-content/uploads/2024/06/AP-Board-10th-Class-Telugu-Textbook-Solutions-Study-Material-Guide.png"); }
        #hindi { background-image: url('https://hamari-hindi.com/text_books/books/textbook.jpeg'); }
        #english { background-image: url('https://img.jagranjosh.com/images/2021/June/762021/class10-english-first-flight-book.jpg'); }
        #maths { background-image: url('https://apboardsolutions.com/wp-content/uploads/2024/08/AP-10th-Class-Maths-Guide-Solutions.png'); }
        #physics { background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiNEhQHpGw2_4JrFGxxdEAamsSgitQD56ynmQ042aprFmeIP6jl-6zXHZbnOcyZ0z2URfeXCv525WKiLpsT2hcj-qWK7LOrGV6O1Xakei_iAtouhIQ5e_lNm9U-tAIoMBE9UMKx08xvdesBGDAzEDTlgBjXLbGyBnzoKAtY11ibKTgdE5E8_5Op4_li75A/w1200-h630-p-k-no-nu/10th%20class%20text%20book%20cover%20page.png'); }
        #biology { background-image: url('https://eevela.in/wp-content/uploads/2024/04/Screenshot-2024-04-14-182905.png'); }
        #social { background-image: url('https://apboardsolutions.com/wp-content/uploads/2024/06/AP-10th-Class-Social-Textbook-Solutions-History-India-and-the-Contemporary-World-II.png'); }

        /* Responsive Cards */
        @media (max-width: 768px) {
            .card {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
            }
        }
    </style>
    <script>
        function toggleNavbar() {
            const navbarLinks = document.querySelector('.navbar-links');
            navbarLinks.classList.toggle('active');
        }
    </script>
</head>
<body>
    <!-- Navbar -->
<div class="navbar">
    <!-- Logo -->
    <div class="logo">
        <a href="#home"><img src="./myproject/Screenshot 2024-12-23 185306.png" alt="Logo"></a>
    </div>
    <div class="hamburger" onclick="toggleNavbar()">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <ul class="navbar-links">
        <li><a href=" ">Home</a></li>
        <li><a href="assignment.php">Assignment</a></li>
        <li><a href="https://www.shiksha.com/boards/bseap-board-timetable">Updates</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="p1logout.php">Logout</a></li>
    </ul>
</div>

   
    <h1>Welcome <span><?php echo $row["username"]; ?></span>, What do you want to learn today?</h1>

    <div class="card-container">
    <div class="card" id="telugu" onclick="location.href='telugu.php';" style="cursor: pointer;">Telugu</div>
    <div class="card" id="hindi" onclick="location.href='p1hindi.php';" style="cursor: pointer;">Hindi</div>
        <div class="card" id="english" onclick="location.href='p1english.php';" style="cursor: pointer;">English</div>
        <div class="card" id="maths" onclick="location.href='p1maths.php';" style="cursor: pointer;">Maths</div>
        <div class="card" id="physics" onclick="location.href='p1ps.php';" style="cursor: pointer;">Physics</div>
        <div class="card" id="biology" onclick="location.href='p1biology.php';" style="cursor: pointer;">Biology</div>
        <div class="card" id="social" onclick="location.href='p1social.php';" style="cursor: pointer;">Social</div>
    </div>
</body>
</html>
