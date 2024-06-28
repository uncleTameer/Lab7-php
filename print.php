<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "factory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to print data from a table
function printTable($conn, $tableName) {
    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Data from $tableName</h2>";
        echo "<table border='1'>";
        // Print column headers
        $fieldInfos = $result->fetch_fields();
        echo "<tr>";
        foreach ($fieldInfos as $fieldInfo) {
            echo "<th>" . $fieldInfo->name . "</th>";
        }
        echo "</tr>";
        
        // Print rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $cell) {
                echo "<td>" . $cell . "</td>";
            }
            echo "</tr>";
        }
        echo "</table><br>";
    } else {
        echo "0 results for $tableName<br>";
    }
}

// Print data from each table
printTable($conn, 'tblUser');
printTable($conn, 'tblOrder');
printTable($conn, 'tblProduct');
printTable($conn, 'tblSupplier');
printTable($conn, 'tblProductInOrder');

// Close connection
$conn->close();
?>
