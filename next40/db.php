<?php


    $Host   =  'localhost';
    $Name   =  'root';
    $pass   =  '';
    $DB     =  'titumir';

    $db = mysqli_connect($Host,$Name,$pass,$DB);
    if(!$db)
        echo "Connection Failed !";
?>