<?php
session_start();
include("db.php");
$error = "";

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['name'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found with that email.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        header {
            justify-content: center !important;
        }

        .login {
            width: 750px;
            height: 750px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            padding: 30px;
            margin: auto;
            margin-top: 35px;
        }

        section h2 {
            color: rgb(255, 97, 34);

        }

        section {
            font-size: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        input {
            width: 600px;
            height: 30px;
        }


        #btn {

            width: 120px;
            height: 50px;
            padding: 10px;
            font-size: 15px;
            border-radius: 5px;
            color: whitesmoke;
            background-color: rgb(255, 165, 0);
            border: none;
        }

        #btn:hover {
            background-color: rgb(247, 121, 37);

        }
    </style>
</head>

<body>
    <header>
        <h1>Learn Photography</h1>
    </header>
    <section class="login">
        <div class="form-box">
            <h2>Login</h2>

            <form method="POST" action="">
                Email: <input type="email" name="email" required><br><br>
                Password: <input type="password" name="password" required><br><br>
                <?php if (!empty($error))
                    echo "<p style='color:red; margin:0 0 12px 0;'>$error</p>"; ?>
                <button type="submit" name="login">Login</button>
            </form>

            <br>
            <p>Don't have an account?
                <a href="registration.php">Register here</a>
            </p>

        </div>
    </section>
</body>

</html>