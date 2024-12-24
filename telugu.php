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
  <title>Resource Table</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f9;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }

    .description {
      text-align: center;
      margin-bottom: 30px;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      width: 100%;
    }

    .description h1 {
      font-size: 2.5rem;
      color: #333;
      margin-bottom: 10px;
    }

    .description p {
      font-size: 1.2rem;
      color: #555;
      line-height: 1.6;
    }

    .description span {
      color: #ff4500;
      font-weight: bold;
    }

    table {
      width: 90%;
      max-width: 1000px;
      border-collapse: collapse;
      margin: 0 auto;
      background-color: #ffffff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 15px 20px;
      text-align: left;
      font-size: 1rem;
    }

    th {
      background-color: #007BFF;
      color: #ffffff;
      text-transform: uppercase;
      font-weight: bold;
    }

    tr {
      transition: background-color 0.3s;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f5ff;
    }

    td a {
      color: #007BFF;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    td a:hover {
      color: #0056b3;
    }

    @media (max-width: 768px) {
      th, td {
        padding: 10px;
        font-size: 0.9rem;
      }

      .description {
        padding: 15px;
      }

      .description h1 {
        font-size: 2rem;
      }

      .description p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>
  <div class="description">
    <h1>Telugu</h1>
    <p>Good choice <span><?php echo $row["username"]; ?></span>! This is the complete guide for Telugu. You can go through this table to access all the resources you need.</p>
  </div>
  <table>
    <thead>
      <tr>
        <th>Resource Name</th>
        <th>Link</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Textbook</td>
        <td><a href="./myproject/downloads/10_telugu_textbook_2024-25.pdf" download target="_blank">Download Textbook</a></td>
        <td>The primary textbook for detailed study of the subject.</td>
      </tr>
      <tr>
        <td>Blueprint</td>
        <td><a href="./myproject/downloads/blue.pdf" download target="_blank">View Blueprint</a></td>
        <td>A blueprint of the syllabus with weightage for each topic.</td>
      </tr>
      <tr>
        <td>Previous Year Papers</td>
        <td><a href="./myproject/downloads/telugu/X_class_Telugu_Model_Paper_1_SET_1.pdf" download target="_blank">View Papers</a></td>
        <td>Past question papers to practice and understand exam patterns.</td>
      </tr>
      <tr>
        <td>Resources</td>
        <td><a href="https://youtube.com/playlist?list=PL1sxfq7ZbDn5WoxHEqmA6AE1EAtE1P2hP&si=EmgQCRYpSL0JT2q8" target="_blank">View Resources</a></td>
        <td>Additional resources like notes, tutorials, and guides.</td>
      </tr>
    </tbody>
  </table>
</body>
</html>






