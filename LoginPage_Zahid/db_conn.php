<?php

$nama= "localhost";
$unmae= "root";
$password = "";

$db_name = "pelajar";

$conn = mysqli_connect($nama, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}