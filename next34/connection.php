<?php


    $Host   =  'localhost';
    $Name   =  'root';
    $pass   =  '';
    $DB     =  'st32';

    $connection = mysqli_connect($Host,$Name,$pass,$DB);
    if(!$connection)
        echo "Connection Failed !";
