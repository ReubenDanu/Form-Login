<?php 

	$con = mysqli_connect("localhost", "root", "", "formlogin", 3308);

	if(mysqli_connect_errno()){
		echo "connection to database failed due to " . mysqli_connect_error();
		exit();
	} else {
		echo "success";
	}

?>