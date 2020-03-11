<?php

require "connect.php";

$name = $_POST["name"];
$number = $_POST["number"];
$password = $_POST["password"];

if ($name != '' && $password != '' && $number != '') {
	$sql = "insert into user_info(name, number,password) values('$name', '$number', '$password')";

	if (mysqli_query($con, $sql)) {
		$status = "success";
	}
	else{
		$status = "failed";
	}
}

echo json_encode(array("response"=>$status));
mysqli_close($con);


?>