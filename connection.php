<?php
// Establishing a connection to the MySQL server
$link = mysqli_connect("localhost", "root", "");

// Checking if the connection was successful
if (!$link) {
    die('Could not connect: ' . mysqli_error());
}

// Selecting the database to work with
$database_selected = mysqli_select_db($link, "online_quiz");

// Checking if the database selection was successful
if (!$database_selected) {
    die ('Can\'t use online_quiz : ' . mysqli_error());
}
?>
