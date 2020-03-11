<?php

$host = "localhost";
$user_name = "root";
$pass = "";
$db_name = "student";


$con = mysqli_connect($host,$user_name,$pass,$db_name);

if ($con){
	echo "connection success";
}

?>