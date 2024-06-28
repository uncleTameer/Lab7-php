<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO tblProductInOrder (order_num, product_num, quantity) VALUES 
(1, 1, 10), 
(2, 2, 20), 
(3, 3, 30)";

if ($con->query($sql) === TRUE) {
    echo "New records created successfully in tblProductInOrder";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
