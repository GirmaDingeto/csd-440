<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GirmaMyInteger</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 30px;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 5px #cccccc;
        }

        h1, h2 {
            color: #003366;
        }

        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }

        input[type="number"] {
            padding: 6px;
            width: 200px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #003366;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Girma MyInteger Class Program</h1>

<?php

/**
 * ---------------------------------------------------------
 * Class Name: GirmaMyInteger
 *
 * Description:
 * Stores a single integer value and provides methods
 * to determine whether the value is even, odd, or prime.
 *
 * Author: Girma Dingeto
 * Course: CSD 440
 * ---------------------------------------------------------
 */
class GirmaMyInteger
{
    /**
     * Stores the integer value.
     *
     * @var int
     */
    private $value;

    /**
     * Constructor
     *
     * @param int $value Initial integer value.
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the stored integer.
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Updates the stored integer.
     *
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Determines whether a number is even.
     *
     * @param int $number
     * @return bool
     */
    public function isEven($number)
    {
        return ($number % 2 === 0);
    }

    /**
     * Determines whether a number is odd.
     *
     * @param int $number
     * @return bool
     */
    public function isOdd($number)
    {
        return ($number % 2 !== 0);
    }

    /**
     * Determines whether the stored number is prime.
     *
     * @return bool
     */
    public function isPrime()
    {
        if ($this->value <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->value); $i++) {
            if ($this->value % $i === 0) {
                return false;
            }
        }

        return true;
    }
}

?>

<!-- User Input Form -->

<div class="container">
    <h2>Enter Values for Two Instances</h2>

    <form method="post" action="">
        <p>
            <label for="instance1">Instance 1 Value:</label>
            <input
                type="number"
                name="instance1"
                id="instance1"
                required>
        </p>

        <p>
            <label for="instance2">Instance 2 Value:</label>
            <input
                type="number"
                name="instance2"
                id="instance2"
                required>
        </p>

        <input type="submit" value="Create Instances">
    </form>
</div>

<?php

$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    /**
     * Securely validate integer inputs.
     */
    $number1 = filter_input(
        INPUT_POST,
        'instance1',
        FILTER_VALIDATE_INT
    );

    $number2 = filter_input(
        INPUT_POST,
        'instance2',
        FILTER_VALIDATE_INT
    );

    if ($number1 === false || $number2 === false) {

        $errorMessage =
            "Please enter valid whole numbers for both instances.";

    } else {

        /**
         * Create two required instances.
         */
        $instanceOne = new GirmaMyInteger($number1);
        $instanceTwo = new GirmaMyInteger($number2);

        ?>

        <!-- Instance 1 Results -->

        <div class="container">
            <h2>Instance 1 Test Results</h2>

            <p>
                <strong>Value:</strong>
                <?php echo htmlspecialchars($instanceOne->getValue()); ?>
            </p>

            <p>
                <strong>Is Even?</strong>
                <?php echo $instanceOne->isEven(
                    $instanceOne->getValue()
                ) ? "Yes" : "No"; ?>
            </p>

            <p>
                <strong>Is Odd?</strong>
                <?php echo $instanceOne->isOdd(
                    $instanceOne->getValue()
                ) ? "Yes" : "No"; ?>
            </p>

            <p>
                <strong>Is Prime?</strong>
                <?php echo $instanceOne->isPrime()
                    ? "Yes"
                    : "No"; ?>
            </p>
        </div>

        <!-- Instance 2 Results -->

        <div class="container">
            <h2>Instance 2 Test Results</h2>

            <p>
                <strong>Value:</strong>
                <?php echo htmlspecialchars($instanceTwo->getValue()); ?>
            </p>

            <p>
                <strong>Is Even?</strong>
                <?php echo $instanceTwo->isEven(
                    $instanceTwo->getValue()
                ) ? "Yes" : "No"; ?>
            </p>

            <p>
                <strong>Is Odd?</strong>
                <?php echo $instanceTwo->isOdd(
                    $instanceTwo->getValue()
                ) ? "Yes" : "No"; ?>
            </p>

            <p>
                <strong>Is Prime?</strong>
                <?php echo $instanceTwo->isPrime()
                    ? "Yes"
                    : "No"; ?>
            </p>
        </div>

        <!-- Setter Method Test -->

        <div class="container">
            <h2>Setter Method Test</h2>

            <?php
            $oldValue = $instanceTwo->getValue();

            /*
             * Update the value by adding 1
             * to demonstrate the setter method.
             */
            $instanceTwo->setValue($oldValue + 1);
            ?>

            <p>
                <strong>Original Value:</strong>
                <?php echo htmlspecialchars($oldValue); ?>
            </p>

            <p>
                <strong>Updated Value:</strong>
                <?php echo htmlspecialchars(
                    $instanceTwo->getValue()
                ); ?>
            </p>

            <p>
                <strong>Is Prime?</strong>
                <?php echo $instanceTwo->isPrime()
                    ? "Yes"
                    : "No"; ?>
            </p>
        </div>

        <?php
    }
}

if (!empty($errorMessage)) {
    echo "<div class='container'>";
    echo "<p class='error'>"
        . htmlspecialchars($errorMessage)
        . "</p>";
    echo "</div>";
}
?>

<!-- References -->

<div class="container">
    <h2>References</h2>

    <ol>
        <li>
            PHP Documentation. Classes and Objects.
            <br>
            https://www.php.net/manual/en/language.oop5.php
        </li>

        <li>
            PHP Documentation. Constructors and Destructors.
            <br>
            https://www.php.net/manual/en/language.oop5.decon.php
        </li>

        <li>
            W3Schools. PHP OOP Classes and Objects.
            <br>
            https://www.w3schools.com/php/php_oop_classes_objects.asp
        </li>
    </ol>
</div>

</body>
</html>