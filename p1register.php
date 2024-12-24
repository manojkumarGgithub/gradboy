<?php
require 'p1config.php';
if (isset($_POST['submit'])) {
    $school_name=$_POST['school_name'];
    $state=$_POST['state'];
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username or Email Has Already Taken');</script>";
    } else {
        if ($password == $confirmpassword) {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            $query = "INSERT INTO tb_user VALUES('', '$school_name', '$state', '$username', '$email', '$hashed_password')";
            mysqli_query($conn, $query);
            echo "<script>alert('Registration Successful');</script>";
        } else {
            echo "<script>alert('Passwords Do Not Match');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
            padding: 10px;
        }

        .register-container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .register-container form {
            display: flex;
            flex-direction: column;
        }

        .register-container label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .register-container input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .register-container button {
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-container button:hover {
            background-color: #218838;
        }

        .register-container a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #007BFF;
            transition: color 0.3s;
        }

        .register-container a:hover {
            color: #0056b3;
        }

        @media (max-width: 768px) {
            .register-container {
                padding: 15px;
            }

            .register-container h2 {
                font-size: 18px;
            }

            .register-container button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2> Registration</h2>
        <form action="" method="POST">
            <label for="school_name">School Name</label>
            <input type="text" id="school_name" name="school_name" required><br>

            <label for="state">State</label>
            <input type="text" id="state" name="state" required><br>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required><br>

            <label for="confirmpassword">Confirm Password</label>
            <input type="password" id="confirmpassword" name="confirmpassword" required><br>

            <button type="submit" name="submit">Register</button><br>
        </form>
        <a href="p1login.php">Login</a>
    </div>
</body>
</html>
</html>
