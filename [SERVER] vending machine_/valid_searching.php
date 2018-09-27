<?php


	# Created by Mi-Jung Ko
	# All rights reserved
	# This php file is used to confirm valid charging list


	/* EasyBitcoin-PHP
           A simple class for making calls to Bitcoin's API using PHP.
           https://github.com/aceat64/EasyBitcoin-PHP

           ========================================
                    The MIT License (MIT)
               Copyright (c) 2013 Andrew LeCody
           ======================================== */

	require_once('easybitcoin.php');



	# create object
	# Bitcoin('username', 'password', 'localhost*', 'port number**'
	# localhost* is your loopback address
	# port number** is BTC regtest mode's port number(18443)

	$username = 'bitcoinrpc';
	$password = 'testuser2@';
	$localhost = '127.0.0.1';
	$port_number = '18443';

	$bitcoin = new Bitcoin('bitcoinrpc','testuser2@','127.0.0.1','18443');



	# connect database account

	$host = 'localhost';
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



	# get list of invalid list (AppdBTable) 
	# and search it in SuccessTransTable

	$sql_list = "SELECT * FROM AppdBTable";
	$result = mysqli_query($conn, $sql_list);

	while($row = mysqli_fetch_array($result)){

		$target = $row['tx_id'];
		$HDmasterKey = $row['HDmasterKey'];

		$sql_search = "SELECT COUNT(*) FROM SuccessTransTable WHERE SuccessTransTable.tx_id = '$target'";
		$data = mysqli_query($conn, $sql_search);
		$row2 = mysqli_fetch_array($data);
		$total_rows = $row2[0];

		echo "total num = ".$total_rows;

		if(strcmp((string)$total_rows,'1')){
			#if result2 table is empty..
			echo "[tx_id] ".$target." is doesn't exist!";			
		}else{

			$info_block = $bitcoin->gettransaction($target);
			$amount_str = $info_block['amount'];
			$amount = abs((int)$amount_str);

			$sql_insert = "INSERT INTO TempTable (HDmasterKey, tx_id, amount) VALUES";
			$sql_insert = $sql_insert."('$HDmasterKey','$target','$amount')";

			if($conn->query($sql_insert) === TRUE){

				echo "success!!!\n";

			}else{

				echo "error : ".$conn->error."\n";

			}
				

			$sql_delete = "DELETE FROM AppdBTable WHERE AppdBTable.tx_id = '$target'";

			if($conn->query($sql_delete) === TRUE){

				echo "success!!!\n";

			}else{

				echo "error : ".$conn->error."\n";

			}

		}



	}

?>
