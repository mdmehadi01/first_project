<?php

$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'titumir';

$db = mysqli_connect($Host,$Name,$pass,$DB);
if(!$db)
    echo "Connection Faield !";

if(isset($_POST['add_student']))
{
    $username=$_POST['name'];
    $user_phone=$_POST['phone'];
    $user_email=$_POST['email'];
    $user_password=$_POST['password'];
    $usertype="student";
    $sql="INSERT INTO users( username,phone,email,usertype,password)
     VALUES ('$username','$user_phone','$user_email','$usertype','$user_password')";

    $result=mysqli_query($db,$sql);

    if($result)
    {
        echo"Data Uploaded Successfully";
    }
    else{
        echo"Upload Failed";
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>

    <style type="text/css">

        label
        {
            display: inline-block;
            text-align:right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg
        {
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }

    </style>

</head>
<body>
    
    <div class="content">
        <center>
        <h1>Add Student</h1>

        <div class="div_deg">

        <form action="#"method="POST">

        <div>
        <label>Username</label>
        <input type="text" name="name">
        </div>

        <div>
        <label>Email</label>
        <input type="email" name="email">
        </div>

        <div>
        <label>Phone</label>
        <input type="number" name="phone">
        </div>

        <div>
        <label>Password</label>
        <input type="text" name="password">
        </div>

        <div>
        
        <input type="submit" class="btn btn-success" name="add_student" value="Add Student">
        </div>



        </form>
        </div>

        </center>

   
    </div>

    
</body>
</html>