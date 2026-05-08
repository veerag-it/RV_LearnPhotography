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
    <title>Learn Photography</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        

        #section1 {
            /* background-image: url("https://images.pexels.com/photos/243757/pexels-photo-243757.jpeg"); */

            /* background-image: url("https://images.squarespace-cdn.com/content/v1/629f6ceb09d8e67b950bf507/1654676931893-JNYG88T4F0N9AUD6OEWE/IMG_6475-1440x1800.jpg?format=1000w"); */

            /* background-image: url("https://kameraz.com/cdn/shop/collections/xt3.jpg?v=1578472928&width=1880"); */

            background-image: url("https://images.herzindagi.info/image/2024/Jul/Best-Camera-6.jpg");
            background-size: cover;
            background-position: center;
            color: white;
            padding: 145px 20px;
            text-align: center;
        }

        section p {
            color: whitesmoke;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        section p#quote {
            font-size: 30px;
            font-style: italic;
            margin-bottom: 20px;
            font-weight: bolder;
        }

        section p#message {
            font-size: 20px;
            font-weight: bold;
        }

        section input[type="button"] {
            color: whitesmoke;
            background-color: rgb(255, 165, 0);
            font-size: large;
            padding: 15px;
            border-radius: 5px;
            border: none;
        }

        section input[type="button"]:hover {
            background-color: rgb(247, 121, 37);
        }

        #highlights h1 {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(90, 81, 81);
            text-align: center;
            padding-top: 40px;
            padding-bottom: 20px;
            margin: 0px;
        }

        #highlights .cards {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        #highlights .card {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(27, 25, 25);
            text-align: center;
            padding: 20px;
            margin: 30px;
            /* border: 1px solid #020313; */
            background-color: white;
            border-radius: 8px;
            width: 250px;
            box-sizing: border-box;
            box-shadow: 0 2px 5px rgba(2, 3, 19, 0.2);
        }

        #highlights p {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(12, 12, 12);
            text-align: center;
            padding: 10px 0;
        }

        #highlights .card:hover {
            transform: scale(1.05);
            transition: transform 0.2s;
            box-shadow: 0 4px 10px rgba(2, 3, 19, 0.3);
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
            <a href="logout.php" class="logout-btn">Logout</a>

        </nav>

    </header>

    <!-- quote + start learning section -->
    <section id="section1">
        <h2 style="color:white; font-size: 40px;
            font-style: bold;
            margin-bottom: 20px;
            font-weight: bolder;">
            Welcome <?php echo $_SESSION['username']; ?>
        </h2>
        <p id="quote">"Photography is the story I fail to put into words. " <br>- Destin Sparks</p>


        <a href="course.php"><input type="button" value="Start Learning"></a>
        <p id="message">Join our photography courses and take your skills to the next level!</p>
    </section>

    <!-- highlight containing cards section -->
    <section id="highlights">
        <h1>Course Highlights</h1>
        <div class="cards">
            <div class="card">
                <h3>Beginner Photography <br>🔰</h3>
                <p>Learn the basics of photography, including camera settings, composition, and lighting.</p>
            </div>
            <div class="card">
                <h3>Advanced Techniques <br>🦾</h3>
                <p>Take your skills to the next level with advanced techniques in editing and post-processing.</p>
            </div>
            <div class="card">
                <h3>Portrait Photography <br>👤</h3>
                <p>Master the art of portrait photography, including posing, lighting, and retouching.</p>
            </div>
            <div class="card">
                <h3>Landscape Photography <br>🏞️</h3>
                <p>Explore the world of landscape photography, including composition, lighting, and post-processing.</p>
            </div>
    </section>
</body>

</html>