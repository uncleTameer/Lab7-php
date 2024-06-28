<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$sql = "INSERT INTO tblUser (name, password) VALUES 
('JohnDoe', 'password123'), 
('JaneDoe', 'password456'), 
('MikeSmith', 'password789')";

if ($con->query($sql) === TRUE) {
    echo "New records created successfully in tblUser";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
