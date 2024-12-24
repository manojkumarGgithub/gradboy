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
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      background-color: #f9f9f9;
    }
    .description {
      text-align: center;
      margin-bottom: 20px;
    }
    .description h1 {
      font-size: 2rem;
      margin: 0;
    }
    .description p {
      font-size: 1.2rem;
      margin: 5px 0 20px;
      color: #555;
    }
    table {
      width: 80%;
      height: auto;
      border-collapse: collapse;
      overflow-x: auto;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
      font-size: 1.2rem; 
    }
    th {
      background-color: #f4f4f4;
    }
    tr:hover {
      background-color: #f0f8ff;
      transition: background-color 0.3s;
    }
    a {
      color: #007BFF;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      td {
        word-wrap: break-word;
        font-size: 1rem; 
      }
      table {
        width: 100%; 
      }
    }
    span{
      color: red;
    }
  </style>
</head>
<body>
  <div class="description">
    <h1>physical science</h1>
    <p>Good choice  <span><?php echo $row["username"]; ?></span> This is the complete guide for Telugu. You can go through this table to access all the resources you need.</p>
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
        <td><a href="./myproject/downloads/physical science/NEW 10TH PHYSICS SEM1-merged.pdf"download target="_blank">Download Textbook</a></td>
        <td>The primary textbook for detailed study of the subject.</td>
      </tr>
      <tr>
        <td>Blueprint</td>
        <td><a href="./myproject/downloads/physical science/19E 2025 (1).pdf" download target="_blank">View Blueprint</a></td>
        <td>A blueprint of the syllabus with weightage for each topic.</td>
      </tr>
      <tr>
        <td>Previous Year Papers</td>
        <td><a href="./myproject/downloads/physical science/19E 2025 (1).pdf" download target="_blank">View Papers</a></td>
        <td>Past question papers to practice and understand exam patterns.</td>
      </tr>
      <tr>
        <td>Resources</td>
        <td><a href="https://youtu.be/G15eBaTBrYk?si=mQbaZeaVdaphyX7U" target="_blank">View Resources</a></td>
        <td>Additional resources like notes, tutorials, and guides.</td>
      </tr>
    </tbody>
  </table>
</body>
</html>