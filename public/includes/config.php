<?php

    //database configuration
    $host       = "";
    $user       = "";
    $pass       = "";
    $database   = "";

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8');
    }

?>