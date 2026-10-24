<?php
/*
=========================================================
Student Name: Girma Dingeto
Date: October 24, 2026
Assignment: First PHP Program Assignment
Course: CSD 440 - Server-Side Scripting

Purpose:
Demonstrate the use of PHP and HTML by displaying
personal information, the current date, simple math
calculations, and a conditional statement.

Source:
All code written by Girma Dingeto for this assignment.
=========================================================
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Girma Dingeto - First PHP Program</title>
</head>

<body>

    <h1>Welcome to My First PHP Program</h1>

    <hr>

    <!-- PHP Snippet #1 -->
    <h2>Student Information</h2>

    <?php
    // Store the student's name in a variable and display it.
    $studentName = "Girma Dingeto";

    echo "<p>Student Name: $studentName</p>";
    ?>

    <hr>

    <!-- PHP Snippet #2 -->
    <h2>Current Date and Time</h2>

    <?php
    // Display the current server date and time.
    $currentDateTime = date("F d, Y h:i:s A");

    echo "<p>Current Date and Time: $currentDateTime</p>";
    ?>

    <hr>

    <!-- PHP Snippet #3 -->
    <h2>Simple Calculation Example</h2>

    <?php
    // Perform a simple arithmetic calculation.
    $firstNumber = 25;
    $secondNumber = 15;
    $sumResult = $firstNumber + $secondNumber;

    echo "<p>$firstNumber + $secondNumber = $sumResult</p>";
    ?>

    <hr>

    <!-- PHP Snippet #4 -->
    <h2>Conditional Statement Example</h2>

    <?php
    // Demonstrate decision-making using an if-else statement.
    $studentScore = 85;

    if ($studentScore >= 70) {
        echo "<p>Score: $studentScore - Result: PASS</p>";
    } else {
        echo "<p>Score: $studentScore - Result: FAIL</p>";
    }
    ?>

    <hr>

    <p>Thank you for visiting my first PHP program!</p>

</body>

</html>