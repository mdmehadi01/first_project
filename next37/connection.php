<?php


    $Host   =  'localhost';
    $Name   =  'root';
    $pass   =  '';
    $DB     =  'sms';

    $connection = mysqli_connect($Host,$Name,$pass,$DB);
    if(!$connection)
        echo "Connection Failed !";
