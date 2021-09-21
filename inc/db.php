<?php 
//database connection code here

	$db = mysqli_connect("localhost", "root", "", "omor_crud");

	if($db){
		//echo "Database is Connected";
	}else{
		"Database connection error".mysqli_error($db);
	}

?>