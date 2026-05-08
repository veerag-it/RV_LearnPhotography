<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .about {
            width: 650px;
            height: 650px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            padding: 30px;
            margin: auto;
            margin-top: 35px;
        }

        .title {
            font-size: 25px;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(255, 97, 34);
        }

        p {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <!-- header of index page -->
    <header>
        <h1>Learn Photography</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="course.php">Courses</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <section class="about">
        <h3 class="title">About The Project</h3>
        <p>This project has been created as part of our Web Programming project for BSc. IT (First Year).</p><br>
        <h3 class="title">Inspiration</h3>
        <p>We attended a photography workshop at our college, & our professor recommended this topic, which inspired us
            to choose this as our project task. Since then, we decided to combine our IT skills with our interest in
            photography😁✌🏻 </p><br>
        <h3 class="title">Meet the Creators</h3>
        <p>
        <ul>
            <li> <b>[Veera Gupta]</b> - Full-stack Development, Database Architecture & UI Design</li>
            <li><b> [Ranjana Alagi]</b> - Content Strategy & Documentation </li>
        </ul>
        </p><br>
        <h3 class="title">Aim</h3>
        <p>To bridge the gap between photography and technology by providing a comprehensive, interactive resource for aspiring photographers. 📸</p>
    </section>
</body>

</html>