<?php
session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Courses</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <style>
        body {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }

        .midtext {
            text-align: center;
            -webkit-text-stroke-width: thin;
            width: 1000px;
            max-width: 90%;
            margin: auto;
            font-size: medium;
            line-height: 1.6;
        }

        .imgC {
            height: 400px;
            width: 400px;
            display: block;
            margin: 15px auto;
            border-radius: 95px;
            object-fit: cover;
        }

        .tabcen {
            margin: 35px auto;
            border-collapse: collapse; /* modern table look */
            width: 60%;
            max-width: 600px;
        }

        .tabcen th {
            background: #333;
            color: #fff;
            padding: 12px;
            font-size: 18px;
        }

        .tabcen td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .tabcen a {
            text-decoration: none;
            color: #0077cc;
            font-weight: 500;
        }

        .tabcen a:hover {
            color: #0055aa;
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

    <!-- mid-img & text  -->
    <div class="mid">
        <img class="imgC" src="assets/courseImg.png" alt="Photography course banner">
        <div class="midtext">
            <h3>Discover Your Lens: A Journey into the World of Photography</h3>
            Welcome to your new creative home. Whether you're just starting out or a seasoned pro, this is your place to
            explore the ever-evolving world of photography. We'll demystify the mechanics of how cameras work, from the
            basics of aperture and shutter speed to the intricacies of light and composition. We'll also dive into the
            latest technologies sweeping the industry, helping you stay ahead of the curve in a world of ever-changing
            cameras, software, and creative tools.

            Our mission is simple: to introduce, teach, explain, and inspire. Think of these articles as your personal
            guide, here to help you not just see the world, but to capture it in your own unique way. Let's start this
            journey together.
        </div>
    </div>

    <!-- table of contents -->
    <table class="tabcen">
        <tr>
            <th>Table Of Contents</th>
        </tr>
        <tr>
            <td><a href="startPhotographyJourney.php">Start Photography Journey</a></td>
        </tr>
        <tr>
            <td><a href="photographyEquipment.php">Photography Equipment</a></td>
        </tr>
        <tr>
            <td><a href="beginnerPhotography.php">Beginner Photography</a></td>
        </tr>
        <tr>
            <td><a href="advancedPhotography.php">Advanced Photography</a></td>
        </tr>
        <tr>
            <td><a href="photographyGenres.php">Photography Genres</a></td>
        </tr>
        <tr>
            <td><a href="compositionColour.php">Composition and Colour</a></td>
        </tr>
        <tr>
            <td><a href="ligthing.php">Ligthing</a></td>
        </tr>
        <tr>
            <td><a href="postProcessing.php">Post Processing</a></td>
        </tr>
        <tr>
            <td><a href="scienceTechnology.php">Science and Technology</a></td>
        </tr>
        <tr>
            <td><a href="videography.php">Videography</a></td>
        </tr>
    </table>
</body>

</html>
