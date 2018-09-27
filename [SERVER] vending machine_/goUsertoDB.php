<?php

 

 

	# Created by Mi-Jung Ko

	# All rights reserved

	# This php file is used to insert information of user that wait charging

 

 

	/* EasyBitcoin-PHP

     	      A simple class for making calls to Bitcoin's API using PHP.

      	     https://github.com/aceat64/EasyBitcoin-PHP

 

           ========================================

                    The MIT License (MIT)

               Copyright (c) 2013 Andrew LeCody

           ======================================== */

 

	require_once('easybitcoin.php');

 

    

    $HDmasterKey = $_GET['HDmasterKey'];
	$tx_id = $_GET['tx_id'];


 

 

 

	# connect database account

 

	$host = 'localhost';

	$username_DB = 'root';
	
	$password_DB = '1234';

	$dbname = 'user';

 

	$conn = new mysqli($host, $username_DB, $password_DB, $dbname);

 

 

 

	# check connection

 

	if(!$conn->connect_error){

 

		//echo "successfully connect.\n";

 

	}else{

 

		die("connection failed : ".$conn->connect_error);

 

	}

 

 

 

     # insert to AppdBTable

    $sql = "INSERT INTO AppdBTable (HDmasterKey, tx_id) VALUES";
    $sql = $sql."('$HDmasterKey','$tx_id')";

    if($conn->query($sql) === TRUE){

        echo "success!!!\n";

    }else{

        echo "error : ".$conn->error."\n";

    }

 

 

?>

