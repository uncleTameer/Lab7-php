<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$tblUser = "CREATE TABLE tblUser (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
)";

if ($con->query($tblUser) === TRUE) {
    echo "Table tblUser created successfully.";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
?>
