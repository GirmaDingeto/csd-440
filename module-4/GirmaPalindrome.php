<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Girma Dingeto">
    <meta name="description" content="Palindrome Function Assignment">
    <title>Girma Palindrome</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #003366;
        }

        .header {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            background-color: white;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #cfe2f3;
        }

        .palindrome {
            color: green;
            font-weight: bold;
        }

        .notPalindrome {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

<?php
/*
Name: Girma Dingeto
Date: 11/07/2026
Course: CSD440-300O Server-Side Scripting
Assignment: Module 4.2 - Palindrome Function Assignment

Purpose:
This program tests whether a string is a palindrome.
It displays the original string, the reversed string,
and the result of the palindrome test.

References:
1. PHP Manual - strrev() Function
   https://www.php.net/manual/en/function.strrev.php

2. GeeksforGeeks - Palindrome Program in PHP
   https://www.geeksforgeeks.org/php/php-palindrome-check/

Source:
All code written and adapted by Girma Dingeto for this assignment.
*/

/**
 * Determines whether a string is a palindrome.
 *
 * @param string $text The string to test.
 * @return bool Returns true if palindrome, otherwise false.
 */
function isPalindrome($text)
{
    // Convert the string to lowercase
    $cleanString = strtolower($text);

    // Reverse the string
    $reverseString = strrev($cleanString);

    // Compare original and reversed strings
    return ($cleanString === $reverseString);
}

/*
    Six test strings:
    Three palindromes
    Three non-palindromes
*/
$testStrings = array(
    "racecar",
    "madam",
    "level",
    "computer",
    "student",
    "programming"
);

// Display assignment information
echo "<div class='header'>";
echo "<h1>Palindrome Function Assignment</h1>";

echo "<p><strong>Name:</strong> Girma Dingeto</p>";
echo "<p><strong>Course:</strong> CSD440-300O Server-Side Scripting </p>";
echo "<p><strong>Assignment:</strong> Module 4.2 - Palindrome Function Assignment</p>";
echo "<p><strong>Date:</strong> November 7, 2026</p>";

echo "<p>
This program determines whether a string is a palindrome by comparing
the original string to its reversed version. Six test strings are used,
including three palindromes and three non-palindromes.
</p>";
echo "</div>";

// Display results table
echo "<table>";

echo "<tr>
        <th>Original String</th>
        <th>Reversed String</th>
        <th>Test Result</th>
      </tr>";

// Process each test string
foreach ($testStrings as $string)
{
    $reversedString = strrev($string);

    if (isPalindrome($string))
    {
        $result =
            "<span class='palindrome'>Palindrome</span>";
    }
    else
    {
        $result =
            "<span class='notPalindrome'>Not a Palindrome</span>";
    }

    echo "<tr>";
    echo "<td>$string</td>";
    echo "<td>$reversedString</td>";
    echo "<td>$result</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>