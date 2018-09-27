<?php    

    # Created by Mi-Jung Ko
    # All rights reserved
    # This php file is used to get user's information from BTC network.



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
    $password = 'testuser3#';
    $localhost = '127.0.0.1';
    $port_number = '18443';

    $bitcoin = new Bitcoin('bitcoinrpc','testuser2@','127.0.0.1','18443');



    # get user information from BTC network

    $info = $bitcoin->getwalletinfo();


    $HDmasterkey = $info['hdmasterkeyid'];
    $balance = $info['balance'];
    


    # create array structure for JSON encoding

    $user_info = array('HDmasterkey' => $HDmasterkey, 'balance' => $balance);



    # JSON encoding for printing on the web

    echo json_encode($user_info);


    

?>
