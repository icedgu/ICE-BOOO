<?php

 

 

    # Created by Mi-Jung Ko

    # All rights reserved

    # This php file is used to search user tuple in UserListTable

 

 

    /* EasyBitcoin-PHP

           A simple class for making calls to Bitcoin's API using PHP.

           https://github.com/aceat64/EasyBitcoin-PHP

 

           ========================================

                    The MIT License (MIT)

               Copyright (c) 2013 Andrew LeCody

           ======================================== */

 

    require_once('easybitcoin.php');

 

    

    $HDmasterKey = $_GET['HDmasterKey'];

 

 

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

 

		//echo "successfully connect.\n";

 

	}else{

 

		die("connection failed : ".$conn->connect_error);

 

	}

 

 

 

    # This is a query to check if the user's HDmasterKey is in the UserListTable.

    $sql = "SELECT * FROM UserListTable WHERE HDmasterKey = '$HDmasterKey'";

    $row = mysqli_fetch_array(mysqli_query($conn, $sql));

    

    
    // this user's HDmasterKey is in the UserListTable

        

    //    echo "exist!!!\n";

        

        $balance = $row['balance'];

        $balance_int = (int)$balance;
        $balance_double = (double)$balance;


        

    
    # create array structure for JSON encoding

        

        $user_info = array('HDmasterKey' => $HDmasterKey, 'balance' => $balance_double);

        

        # JSON encoding for printing on the web

        

        echo json_encode($user_info);

 

 

?>

