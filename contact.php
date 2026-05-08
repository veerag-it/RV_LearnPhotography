<?php
session_start();
include("db.php");

if(isset($_POST['submit_feedback']))
{
    $message = trim($_POST['message']);

    if(!isset($_SESSION['user_id']))
    {
        $error = "Please login first to submit feedback.";
    }
    elseif($message === "")
    {
        $error = "Feedback message cannot be empty.";
    }
    else
    {
        $user_id = (int)$_SESSION['user_id'];

        $user_query = mysqli_prepare($connect, "SELECT name, email FROM users WHERE id = ? LIMIT 1");
        mysqli_stmt_bind_param($user_query, "i", $user_id);
        mysqli_stmt_execute($user_query);
        $user_result = mysqli_stmt_get_result($user_query);
        $user = mysqli_fetch_assoc($user_result);
        mysqli_stmt_close($user_query);

        if($user)
        {
            $name = $user['name'];
            $email = $user['email'];

            $insert = mysqli_prepare(
                $connect,
                "INSERT INTO feedback (user_id, name, email, message) VALUES (?, ?, ?, ?)"
            );
            mysqli_stmt_bind_param($insert, "isss", $user_id, $name, $email, $message);

            if(mysqli_stmt_execute($insert))
            {
                $success = "Feedback submitted successfully!";
            }
            else{
                $error = "Something went wrong!";
            }

            mysqli_stmt_close($insert);
        }
        else{
            $error = "User not found. Please login again.";
        }
    }
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
        .contact{
            width:750px;
            height:750px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            padding:30px;
            margin:auto;
            margin-top: 35px;
        }
        section h2{
            color:  rgb(255, 97, 34);
            
        }
        section {
            font-size: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        input{
            width:600px;
            height: 30px;
        }
        textarea{
            width:600px;
            height:120px;
        }
    
        #btn{

            width: 120px;
            height:50px;
            padding:10px;
            font-size: 15px;
            border-radius: 5px;
            color: whitesmoke;
            background-color: rgb(255, 165, 0);
            border: none;
        }
        #btn:hover{
            background-color: rgb(247, 121, 37);

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
    <section class="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions, sugesstions, or feeedback about this project, feel free to get in touch with us.</p>
        <br>
        <h3>Send Us Feedback</h3>
        <?php if(isset($success)) echo  "<p style='color:green;'>$success</p>"; ?>
        <?php if(isset($error)) echo "<p style='color:red;'>$error</p>"; ?>

        <form method="POST">
            <textarea name="message" placeholder="Write your feedback here..." required></textarea>
            <br><br>
            <button type="submit" name="submit_feedback">Submit Feedback</button>
        </form>

        <br><br>
        <h3>Other Ways to Reach Us</h3>
        Email: rv_photography.1529@gmail.com
        <br>
        Instagram : @rv_photography<br>
    </section>
</body>
</html> 
