<?php

// This is an example of a connection using a pre-built ODBC driver (32 bit)
$connection = odbc_connect("CS_HDZipCodes32bit", 'demo', 'skdemo!');

// This is an example of a DSN-less connection string that does not require a pre-built dsn (still 32bit)
// $connection = odbc_connect("Driver={FileMaker ODBC};Server=172.20.1.77;Database=ZipCodes", 'demo', 'skdemo!');

if(!$connection){
	die('connection failed');
}

$statement = "SELECT * FROM ZipCodes";

$result = odbc_exec($connection, $statement);


var_dump(odbc_result_all($result));