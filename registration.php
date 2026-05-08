<?php
include("db.php");
$error = "";

if (isset($_POST['register'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = mysqli_prepare($connect, "SELECT id FROM users WHERE email = ? LIMIT 1");
    mysqli_stmt_bind_param($check, "s", $email);
    mysqli_stmt_execute($check);
    $check_result = mysqli_stmt_get_result($check);
    $exists = mysqli_num_rows($check_result) > 0;
    mysqli_stmt_close($check);

    if ($exists) {
        $error = "User already exists! Kindly proceed to Login...";
    } else {
        $insert = mysqli_prepare($connect, "INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($insert, "sss", $name, $email, $password);

        if (mysqli_stmt_execute($insert)) {
            mysqli_stmt_close($insert);
            header("Location: login.php");
            exit();
        } else {
            $error = "Something went wrong. Please try again.";
        }

        mysqli_stmt_close($insert);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        header {
            justify-content: center !important;
        }

        .reg {
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
    <section class="reg">
        <div class="form-box">
            <h2>Registration Form</h2>

            <form method="POST" action="">
                Name: <input type="text" name="name" required><br><br>
                Email: <input type="email" name="email" required><br><br>
                Password: <input type="password" name="password" required><br><br>
                <?php if (!empty($error))
                    echo "<p style='color:violet; margin:0 0 12px 0;'>$error</p>"; ?>
                <button type="submit" name="register">Register</button>
            </form>
            <p>Already have an account?
                <a href="login.php">Login here</a>
            </p>
        </div>
    </section>
</body>

</html>