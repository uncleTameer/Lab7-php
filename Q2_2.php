<?php
$con = new mysqli("localhost","root","","factory");
if($con->connect_error){
die("Connection failed: ".$con->connect_error);
}
$tblOrder="CREATE TABLE tblOrder(
order_num INT(30) PRIMARY KEY AUTO_INCREMENT,
order_date DATE,
order_name VARCHAR)
";

if ($con->query($tblOrder)===true){
	echo "Table tblOrder created successfully.";
}
else{
	echo "Error creating table: ".$con->error;
}
?>
<?php
$con = new mysqli("localhost", "root", "", "factory");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$tblOrder = "CREATE TABLE tblOrder (
    order_num INT(30) AUTO_INCREMENT PRIMARY KEY,
    order_date DATE,
    order_name VARCHAR(255)
)";

if ($con->query($tblOrder) === TRUE) {
    echo "Table tblOrder created successfully.";
} else {
    echo "Error creating table: " . $con->error;
}
$con->close();
?>
