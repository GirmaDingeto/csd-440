<?php
/*
 * Name: Girma Dingeto
 * Course: CSD440-300O Server-Side Scripting (2271-DD)
 * Assignment: Module 3.2 - Table 3
 * Date: October 31, 2026
 *
 * Purpose:
 * This program allows the user to enter the number
 * of rows and columns for a table. Two random numbers
 * are generated for each table cell and passed to an
 * external function. The function returns the sum,
 * which is displayed in the table cell.
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
 *
 * Testing Performed:
 * - Verified that tableFunctions.php loads successfully.
 * - Verified that calculateSum() accepts two parameters.
 * - Verified that the function correctly returns a sum.
 * - Verified that user-entered row and column values
 *   generate the correct table dimensions.
 * - Verified that random values are generated each time
 *   the page is refreshed.
 * - Verified that calculations displayed in each cell
 *   are correct.
 * - Verified that the program runs without errors.
 */

/*
 * Include the external file that contains
 * the calculateSum() function.
 */
include 'tableFunctions.php';

/*
 * Set default values for rows and columns.
 * These values will be used when the page
 * first loads.
 */
$numberOfRows = 5;
$numberOfColumns = 5;

/*
 * Check whether the form has been submitted.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    /*
     * Read the user input and convert
     * the values to integers.
     */
    $numberOfRows = (int) $_POST["rows"];
    $numberOfColumns = (int) $_POST["columns"];

    /*
     * Limit the minimum values to 1.
     */
    if ($numberOfRows < 1) {
        $numberOfRows = 1;
    }

    if ($numberOfColumns < 1) {
        $numberOfColumns = 1;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Girma Table 3</title>

    <style>

        /*
         * Page styling.
         */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        /*
         * Main page heading.
         */
        h1 {
            color: navy;
        }

        /*
         * Form styling.
         */
        form {
            margin-bottom: 20px;
        }

        /*
         * Table styling.
         */
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        /*
         * Table cell styling.
         */
        td {
            border: 1px solid black;
            padding: 10px;
            width: 150px;
            height: 50px;
            text-align: center;
        }

        /*
         * Label styling.
         */
        label {
            font-weight: bold;
        }

    </style>

</head>

<body>

    <h1>Module 3.2 - Dynamic Sum Table</h1>

    <p>
        Enter the desired number of rows and columns.
        Each table cell displays two random numbers and
        the sum returned by the external function.
    </p>

    <!-- User input form -->

    <form method="post">

        <label for="rows">
            Number of Rows:
        </label>

        <input
            type="number"
            id="rows"
            name="rows"
            min="1"
            max="20"
            value="<?php echo $numberOfRows; ?>"
            required>

        <br><br>

        <label for="columns">
            Number of Columns:
        </label>

        <input
            type="number"
            id="columns"
            name="columns"
            min="1"
            max="20"
            value="<?php echo $numberOfColumns; ?>"
            required>

        <br><br>

        <input
            type="submit"
            value="Generate Table">

    </form>

    <p>
        Current Table Size:
        <?php echo $numberOfRows; ?>
        ×
        <?php echo $numberOfColumns; ?>
    </p>

    <table>

        <?php

        /*
         * Create the table rows.
         */
        for ($row = 1; $row <= $numberOfRows; $row++) {

            echo "<tr>";

            /*
             * Create the table columns.
             */
            for ($column = 1; $column <= $numberOfColumns; $column++) {

                /*
                 * Generate the first random number.
                 */
                $firstRandomNumber = rand(1, 50);

                /*
                 * Generate the second random number.
                 */
                $secondRandomNumber = rand(1, 50);

                /*
                 * Pass both numbers to the external
                 * function and store the returned sum.
                 */
                $sum = calculateSum(
                    $firstRandomNumber,
                    $secondRandomNumber
                );

                /*
                 * Display both random numbers and
                 * their calculated sum.
                 *
                 * Example:
                 * 17 + 25 = 42
                 */
                echo "<td>";
                echo $firstRandomNumber .
                     " + " .
                     $secondRandomNumber .
                     " = " .
                     $sum;
                echo "</td>";
            }

            echo "</tr>";
        }

        ?>

    </table>

</body>

</html>