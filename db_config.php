<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "login_system2";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}else{
	echo "connected successfully";
}