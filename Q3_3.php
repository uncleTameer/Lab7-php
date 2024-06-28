<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO tblProduct (title, quantity, supplier_num) VALUES 
('Product1', 100, 1), 
('Product2', 200, 2), 
('Product3', 300, 3),
('Product4',400,4)";

if ($con->query($sql) === TRUE) {
    echo "New records created successfully in tblProduct";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
