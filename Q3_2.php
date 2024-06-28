<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO tblOrder (order_date, order_name) VALUES 
('2024-06-28', 'Order1'), 
('2024-06-29', 'Order2'), 
('2024-06-30', 'Order3')";

if ($con->query($sql) === TRUE) {
    echo "New records created successfully in tblOrder";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
