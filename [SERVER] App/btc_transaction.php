<?php


	# Created by Mi-Jung Ko
	# All rights reserved
	# This php file is used for transaction.
	


	# GET parameters from url

	$pubKey = $_GET['pubKey'];
	$price = $_GET['price'];



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



	# balance_before is balance before the transaction.

	$balance_before = $bitcoin->getbalance();
	echo "your balance before transaction : ".$balance_before;



	# send a transaction command to the bitcoin network

	$tx_id = $bitcoin->sendtoaddress($pubKey,$price);

	echo "<pre>";
	echo "</pre>";



	# balance_after is balance after the transaction.

	$balance_after = $bitcoin->getbalance();

	echo "your balance after transaction : ".$balance_after;



	# print tx_id

	echo "<pre>";
	echo $tx_id;
	echo "</pre>";

?>
