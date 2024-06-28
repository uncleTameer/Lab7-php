<?php
$con = new mysqli("localhost","root","");
if($con->connect_error){
	die("Connection failed".$con->connect_error);
}
$sql ="CREATE DATABASE FACTORY";

if($con->query($sql)===TRUE){
	ECHO "Database created successfully";
}else{
	echo "Error creating databse: ".$con->error;
}
$con->close();
?>
