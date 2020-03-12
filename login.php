<?php

require "connect.php";

$number = $_GET["number"];
$password = $_GET["password"];

$sql = "select * from user_info where number = '$number' and password = '$password'";

$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result)>0) {

$status = "ok";
$row = mysqli_fetch_assoc($result);

	$name =$row['name'];
	$number =$row['number'];
	$password =$row['password'];

	echo json_encode(array("response"=>$status,"name"=>$name,"number"=>$number));
}

mysqli_close($con);

?>