<?php


	# Created by Mi-Jung Ko
	# All rights reserved
	# This php file is used to save the verified transaction list to the customer management list


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



	# get list of TempTable

	$sql_list = "SELECT * FROM TempTable";
	$result = mysqli_query($conn, $sql_list);

	while($row = mysqli_fetch_array($result)){

		$HDmasterKey = $row['HDmasterKey'];
		$tx_id = $row['tx_id'];
		$amount = $row['amount'];

		$sql_search = "SELECT COUNT(*) FROM UserListTable WHERE UserListTable.HDmasterKey = '$HDmasterKey'";
		$sql_search2 = "SELECT * FROM UserListTable WHERE UserListTable.HDmasterKey = '$HDmasterKey'";
		$data = mysqli_query($conn, $sql_search);
		$row2 = mysqli_fetch_array($data);
		$row3 = mysqli_fetch_array(mysqli_query($conn, $sql_search2));
		$total_rows = $row2[0];


		if(strcmp((string)$total_rows,'1')){
			
			$sql_new_insert = "INSERT INTO UserListTable (HDmasterKey, balance) VALUES";
			$sql_new_insert = $sql_new_insert."('$HDmasterKey','$amount')";

			if($conn->query($sql_new_insert) === TRUE){

				echo "new tuple success!!!\n";

			}else{

				echo "error : ".$conn->error."\n";

			}
			
		}else{

			$balance = $row3['balance'];
			$balance_int = (int)$balance;
			$amount_int = (int)$amount;
			$new_balance = $balance_int + $amount_int;

			$sql_update = "UPDATE UserListTable SET balance = '$new_balance' WHERE HDmasterKey = '$HDmasterKey'"; 

			if($conn->query($sql_update) === TRUE){

				echo "update success!!!\n";

			}else{

				echo "error : ".$conn->error."\n";

			}
				


		}

		$sql_delete = "DELETE FROM TempTable WHERE TempTable.tx_id = '$tx_id'";

		if($conn->query($sql_delete) === TRUE){

			echo "tuple delete success!!!\n";

		}else{

			echo "error : ".$conn->error."\n";

		}




	}

?>
