<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$tblProduct = "CREATE TABLE tblProduct (
    product_num INT(6) AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30),
    quantity INT(30) NOT NULL,
    supplier_num INT(30)
)";

if ($con->query($tblProduct) === TRUE) {
    echo "Table tblProduct created successfully.";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
?>
