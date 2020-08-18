<?php
	/*$servername = "MO22P1R02F8E5\SQLEXPRESS";
	$username = "doko";
	$password = "A2544.19";
	$db = "sigep";*/

	$servername = "172.16.2.27";
	$username = "daniel";
	$password = "jdgs1995#";
	$db = "PRUEBA";

	$connectionInfo = array(
        'CharacterSet' => 'UTF-8', 
        'Database' => $db, 
        'UID' => $username, 
        'PWD' => $password
    );

	$conn = sqlsrv_connect( $servername, $connectionInfo);
?>
