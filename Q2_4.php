<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$tblSupplier = "CREATE TABLE tblSupplier (
    supplier_num INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    phone VARCHAR(30) NOT NULL
)";

if ($con->query($tblSupplier) === TRUE) {
    echo "Table tblSupplier created successfully.";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
?>
