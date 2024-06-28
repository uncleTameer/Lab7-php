<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$tblProductInOrder = "CREATE TABLE tblProductInOrder (
    order_num INT(30),
    product_num INT(30),
    quantity INT(30)
)";

if ($con->query($tblProductInOrder) === TRUE) {
    echo "Table tblProductInOrder created successfully.";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
?>
