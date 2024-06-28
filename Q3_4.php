<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO tblSupplier (name, phone) VALUES 
('Supplier1', '1234567890'), 
('Supplier2', '0987654321'), 
('Supplier3', '1122334455')";

if ($con->query($sql) === TRUE) {
    echo "New records created successfully in tblSupplier";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
