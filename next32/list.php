<?php
    include('connection.php');

    $query ="SELECT * FROM students";
    $Result = mysqli_query($connection,$query);
    $result = mysqli_fetch_array($result);

    var_dump($result);
?>