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
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }

        .table1 {
            margin: 35px auto;
            border-collapse: collapse;
            /* modern table look */
            width: 60%;
            max-width: 1000px;
        }

        .table1 th {
            background: #333;
            color: #fff;
            padding: 12px;
            font-size: 18px;
        }

        .table1 td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        .table1 a {
            text-decoration: none;
            color: #0077cc;
            font-weight: 500;
        }

        .table1 a:hover {
            color: #0055aa;
        }

        .table1 tr:hover td {
            background: #decaff;
            /* row hover effect */
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
    <h1>Start Your Photography Journey</h1>
    <table class="table1">
        <tr>
            <th>Table Of Contents</th>
        </tr>
        <tr>
            <td><a href="HowToGetStartedInPhototgraphy.php">How to Get Started in Photography</a></td>
        </tr>
        <tr>
            <td><a href="WhatCameraLensShouldIbuy.php">What Camera Lens Should I Buy?</a></td>
        </tr>
        <tr>
            <td><a href="HowToSetUpYourNewCamera.php">How to Set Up Your New Camera</a></td>
        </tr>
        <tr>
            <td><a href="ExposureTriangle.php">The Exposure Triangle: A Beginner's Guide</a></td>
        </tr>
        <tr>
            <td><a href="BeginnerGuide_A_SS_ISO.php">Beginner Guide to Aperture, Shutter Speed, and ISO in
                    Photography</a></td>
        </tr>
        <tr>
            <td><a href="Aperture.php">Aperture in Photography: A Complete Guide</a></td>
        </tr>
        <tr>
            <td><a href="ShutterSpeed.php">Shutter Speeed in Photography: A Complete Guide</a></td>
        </tr>
        <tr>
            <td><a href="ISO.php">ISO in Photography: A Complete Guide</a></td>
        </tr>
        <tr>
            <td><a href="DigitalCameraModes.php">Digital Camera Modes</a></td>
        </tr>
        <tr>
            <td><a href="WhiteBalance.php">White Balance in Photography</a></td>
        </tr>
        <tr>
            <td><a href="RulOfThirds.php">Rule of Thirds in Photography: A Complete Guide</a></td>
        </tr>
        <tr>
            <td><a href="Tips.php">Tips to Take Better Photos</a></td>
        </tr>
    </table>

</body>