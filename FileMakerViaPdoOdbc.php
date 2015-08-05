<?php

    $dsn = 'odbc:CS_HDZipCodes32bit';
    $username = 'demo';
    $password = 'skdemo!';

    $connection = new PDO($dsn, $username, $password);

    $query = "Select * FROM ZipCodes";


    $result = $connection->query($query);

    foreach($result as $row){
        var_dump($row);
    }