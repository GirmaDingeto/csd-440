<?php
/*
 * Name: Girma Dingeto
 * Course: CSD440-300O Server-Side Scripting (2271-DD)
 * Assignment: Module 3.2 - Table 3
 * Date: October 31, 2026
 *
 * Purpose:
 * This file contains a function that accepts two random
 * numbers as parameters and returns their sum.
 *
 * References:
 * PHP Include Documentation:
 * https://www.php.net/manual/en/function.include.php
 *
 * PHP Official Documentation:
 * https://www.php.net/manual/en/index.php
 *
 * PHP: The Right Way:
 * https://phptherightway.com/
 *
 * PHP Tutorial:
 * https://www.phptutorial.net/
 */

/**
 * Calculates and returns the sum of two numbers.
 *
 * @param int $numberOne The first random number
 * @param int $numberTwo The second random number
 *
 * @return int The sum of the two numbers
 */
function calculateSum($numberOne, $numberTwo)
{
    // Return the sum of the two numbers.
    return $numberOne + $numberTwo;
}
?>