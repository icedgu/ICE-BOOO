<?php

	# Created by Mi-Jung Ko
	# All rights reserved
	# This php file is used to try charging.
	# Insert to the user's database and sends it to the seller's database


	# GET parameter from url

	$pID = $_GET['pID'];
	$count = $_GET['count'];



	# connect database account

	$hose = 'localhost';
	$username_DB = 'root';
	$password_DB = '1234';
	$dbname = 'user';

	$conn = new mysqli($host, $username_DB, $password_DB, $dbname);



	# check connection

	if(!$conn->connect_error){

		echo "successfully connect.\n";

	}else{

		die("connection failed : ".$conn->connect_error);

	}



	# insert to products

	$sql = "INSERT INTO products (pID, count) VALUES";
	$sql = $sql."('$pID','$count')";

	if($conn->query($sql) === TRUE){

		echo "success!!!\n";

	}else{

		echo "error : ".$conn->error."\n";

	}


?>
