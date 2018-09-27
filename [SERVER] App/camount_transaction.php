<?php

 

 

	# Created by Mi-Jung Ko

	# All rights reserved

	# This php file is used for transaction using charging amount.

	

 

 

	# GET parameters from url

 

	//$pubKey = $_GET['pubKey'];

	$price = $_GET['price'];
	
	$HDmasterKey = $_GET['hdmasterkey'];

 
 

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

        

        echo "successfully connect~.\n";

        

    }else{

        

        die("connection failed : ".$conn->connect_error);

        

    }



    # This is a query to check if the user's HDmasterKey is in the UserListTable.



    $sql = "SELECT * FROM UserListTable WHERE HDmasterKey = '$HDmasterKey'";
$data = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($data);
 
    if(mysqli_query($conn, $sql)){

        // this user's HDmasterKey is in the UserListTable

        

        echo "exist!!!\n";

        

        $balance = $row['balance'];

        $balance_int = (int)$balance;
	$balance_double = (double)$balance;

        

        if($balance >= $price){

            // and user have enough money to transaction

            // go transaction!

            

            echo "ok. I'm check!";

            echo "balance before transaction is $balance BTC";

            

            $price_int = (int)$price;
		$price_double = (double)$price;

            $new_balance = $balance_double - $price_double;
		$new_balance_double = (double)$new_balance;

            

            echo "balance after transaction is $new_balance";

            

            // update this user's tuple in UserListTable

            $sql_update = "UPDATE UserListTable SET balance='$new_balance_double' WHERE HDmasterKey='$HDmasterKey'";

            

            if($conn->query($sql_update) === TRUE){

                

                echo "balance update success!!!\n";

                

            }else{

                

                echo "error : ".$conn->error."\n";

                

            }

            

            

        }else{

            // user's HDmasterKey is in the UserListTable

            // BUT do not have enough money to transaction.

            echo "You do not have enough money to transaction.";

            

        }
        

    }else{

        // this user's HDmasterKey doesn't exist in the UserListTable

        echo "error^^ : ".$conn->error;

        

    }

?>
