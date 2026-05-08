<?php
$connect = mysqli_connect("localhost", "root", "", "rv_photography");

if(!$connect)
    {
        die("Connection failed: " . mysqli_connect_error());
    }