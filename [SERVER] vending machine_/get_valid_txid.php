<?php


	# Created by Mi-Jung Ko
	# All rights reserved
	# This php file is used to get tx_id from latest block.


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


	# initialize the SuccessTransTable 
	$q = "DELETE FROM SuccessTransTable";

	if($conn->query($q) === TRUE){

		echo "success!!!\n";

	}else{

		echo "error : ".$conn->error."\n";

	}



	# generate 1 block throught remote command
	# this is because this is a test mode,
	# so the block is not created automaticaly.

	$bitcoin->generate(1);



	# get hash value of latest block from BTC network

	$blockinfo = $bitcoin->getchaintips();

	$hash = $blockinfo[0]['hash'];


	echo "<pre>";
	echo "</pre>";




	# get all tx_id in latest block from BTC network

	$blockinfo2 = $bitcoin->getblock($hash);
	
	$bundle_txid = $blockinfo2['tx'];



	# save bundle of tx_id to database
	
	foreach($bundle_txid as $tx_id){
		
		echo "<pre>";
		echo "tx_id : $tx_id";
		echo "</pre>";

		$sql = "INSERT INTO SuccessTransTable (tx_id) VALUES";
		$sql = $sql."('$tx_id')";


		if($conn->query($sql) === TRUE){

			echo "success!!!\n";

		}else{

			echo "error : ".$conn->error."\n";

		}

	}

?>


