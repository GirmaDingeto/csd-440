<?php
/*
 * Name: Girma Dingeto
 * CSD440-300O Server-Side Scripting (2271-DD)
 * Assignment: Table 2
 * Date: October 30, 2026
 *
 * Purpose:
 * This program creates an HTML table using nested PHP loops.
 * The outer loop generates the table rows and the inner loop
 * generates the table columns. A random number between 1 and
 * 100 is displayed in each table cell every time the page loads.
 * 
 * Testing Results
 * The program was tested using Apache through XAMPP.
 * The page loaded successfully without errors. 
 * A 5-row by 5-column table was displayed.
 * Each cell contained a randomly generated number between 1 and 100.
 * The page was refreshed multiple times, and different random numbers were
 * displayed each time, confirming that the random number generation worked correctly.
 * The table formatting and borders displayed as expected.
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Allows proper display on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Random Number Table</title>

    <style>
        /*
         * Style the page body and center the content.
         */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 30px;
        }

        /*
         * Format the table and center it on the page.
         */
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        /*
         * Format each table cell with borders and
         * consistent sizing.
         */
        td {
            width: 60px;
            height: 40px;
            border: 1px solid black;
            text-align: center;
            font-weight: bold;
        }

        /*
         * Style the page heading.
         */
        h2 {
            color: navy;
        }
    </style>
</head>

<body>

    <!-- Display a heading above the table -->
    <h2>PHP Random Number Table</h2>

    <!-- Begin the HTML table -->
    <table>

        <?php
        /*
         * Outer loop:
         * Creates 5 table rows.
         * Each iteration generates one <tr> element.
         */
        for ($rowNumber = 1; $rowNumber <= 5; $rowNumber++) {
        ?>
            <tr>

                <?php
                /*
                 * Inner loop:
                 * Creates 5 table cells within each row.
                 * Each iteration generates one <td> element.
                 */
                for ($columnNumber = 1; $columnNumber <= 5; $columnNumber++) {

                    /*
                     * Generate a random number between
                     * 1 and 100 for the current table cell.
                     */
                    $randomNumber = rand(1, 100);
                ?>

                    <td>

                        <?php
                        /*
                         * Display the random number
                         * inside the current table cell.
                         */
                        echo $randomNumber;
                        ?>

                    </td>

                <?php
                } // End inner loop.
                ?>

            </tr>

        <?php
        } // End outer loop.
        ?>

    </table>

    <!-- End of random number table -->

</body>

</html>