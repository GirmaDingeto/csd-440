<?php
/*
 * Name: Girma Dingeto
 * CSD440-300O Server-Side Scripting
 * Module 5.2 Assignment: Customer Array Search Program
 * Date: 11/13/2026
 *
 * Purpose:
 * Create an array of customers and demonstrate various PHP array
 * methods and search techniques to locate and display customer records.
 *
 * References:
 * 1. https://www.php.net/manual/en/language.types.array.php
 * 2. https://www.php.net/manual/en/function.array-filter.php
 * 3. https://www.w3schools.com/php/php_arrays.asp
 */

// ---------------------------------------------------------
// Create a multidimensional array containing customer data
// Minimum requirement is 10 customers
// ---------------------------------------------------------

$customers = [
    [
        "firstName" => "John",
        "lastName" => "Smith",
        "age" => 25,
        "phone" => "555-1001"
    ],
    [
        "firstName" => "Mary",
        "lastName" => "Johnson",
        "age" => 33,
        "phone" => "555-1002"
    ],
    [
        "firstName" => "Robert",
        "lastName" => "Williams",
        "age" => 41,
        "phone" => "555-1003"
    ],
    [
        "firstName" => "Jennifer",
        "lastName" => "Brown",
        "age" => 29,
        "phone" => "555-1004"
    ],
    [
        "firstName" => "Michael",
        "lastName" => "Jones",
        "age" => 52,
        "phone" => "555-1005"
    ],
    [
        "firstName" => "Patricia",
        "lastName" => "Garcia",
        "age" => 37,
        "phone" => "555-1006"
    ],
    [
        "firstName" => "David",
        "lastName" => "Miller",
        "age" => 45,
        "phone" => "555-1007"
    ],
    [
        "firstName" => "Linda",
        "lastName" => "Davis",
        "age" => 23,
        "phone" => "555-1008"
    ],
    [
        "firstName" => "James",
        "lastName" => "Wilson",
        "age" => 61,
        "phone" => "555-1009"
    ],
    [
        "firstName" => "Elizabeth",
        "lastName" => "Taylor",
        "age" => 35,
        "phone" => "555-1010"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Girma Customers</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h1, h2 {
            color: #003366;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            background-color: white;
            margin-bottom: 25px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #d9eaf7;
        }
    </style>
</head>

<body>

<h1>Customer Array Search Program</h1>

<p>
This program creates a multidimensional array of customers and demonstrates
different array search techniques to locate customer information based on
various data fields.
</p>

<?php
// ---------------------------------------------------------
// Function to display customer data in a table
// ---------------------------------------------------------
function displayCustomers($customerList, $title)
{
    echo "<h2>$title</h2>";

    echo "<table>";
    echo "<tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Phone Number</th>
          </tr>";

    foreach ($customerList as $customer) {
        echo "<tr>";
        echo "<td>" . $customer["firstName"] . "</td>";
        echo "<td>" . $customer["lastName"] . "</td>";
        echo "<td>" . $customer["age"] . "</td>";
        echo "<td>" . $customer["phone"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}

// ---------------------------------------------------------
// Display all customer records
// ---------------------------------------------------------
displayCustomers($customers, "All Customers");


// ---------------------------------------------------------
// Search Example #1
// Find customers older than 40 years of age
// Uses array_filter()
// ---------------------------------------------------------
$customersOver40 = array_filter(
    $customers,
    function ($customer) {
        return $customer["age"] > 40;
    }
);

displayCustomers($customersOver40, "Customers Older Than 40");


// ---------------------------------------------------------
// Search Example #2
// Find customer by first name
// ---------------------------------------------------------
$customerNamedMary = array_filter(
    $customers,
    function ($customer) {
        return $customer["firstName"] === "Mary";
    }
);

displayCustomers($customerNamedMary, "Customer With First Name Mary");


// ---------------------------------------------------------
// Search Example #3
// Find customer by last name
// ---------------------------------------------------------
$customerWilson = array_filter(
    $customers,
    function ($customer) {
        return $customer["lastName"] === "Wilson";
    }
);

displayCustomers($customerWilson, "Customer With Last Name Wilson");


// ---------------------------------------------------------
// Search Example #4
// Find customers age 35 or younger
// ---------------------------------------------------------
$youngCustomers = array_filter(
    $customers,
    function ($customer) {
        return $customer["age"] <= 35;
    }
);

displayCustomers($youngCustomers, "Customers Age 35 or Younger");


// ---------------------------------------------------------
// Search Example #5
// Find customer by phone number
// ---------------------------------------------------------
$phoneSearch = array_filter(
    $customers,
    function ($customer) {
        return $customer["phone"] === "555-1005";
    }
);

displayCustomers($phoneSearch, "Customer With Phone Number 555-1005");

?>

<hr>

<h2>Program Summary</h2>

<p>
This program successfully:
</p>

<ul>
    <li>Created a multidimensional array containing 10 customer records.</li>
    <li>Stored each customer's first name, last name, age, and phone number.</li>
    <li>Displayed all customer records in an HTML table.</li>
    <li>Used PHP array functions to search customer data.</li>
    <li>Displayed results based on age, first name, last name, and phone number.</li>
    <li>Included proper documentation and comments throughout the code.</li>
</ul>

</body>
</html>